<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Kint\Kint;

class Peserta extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		if (!isset($this->session->userdata['username'])) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>Anda Belum Login!</strong>
		  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    	<span aria-hidden="true">&times;</span>
		    	</button>
			</div>');
			redirect('admin/auth');
		}
	}

	public function index()
	{
		$data['peserta'] = $this->model_ppdb->tampil_data('peserta')->result();
		$data['halaman'] = 'admin/peserta';

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar', $data);
		$this->load->view('admin/peserta', $data);
		$this->load->view('templates/footer');
	}

	public function verifikasi($kode_pendaftaran)
	{
		$data['status'] = 'diterima';
		$this->model_ppdb->up_biodata($kode_pendaftaran, $data);
		$this->session->set_flashdata('pesan', ' <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Berhasil!</h5>
                 Peserta Telah Berhasil Diverifikasi !
                </div>');
		redirect('admin/peserta/');
	}

	public function unverifikasi($kode_pendaftaran)
	{
		$data['status'] = 'tidak_diterima';
		$this->model_ppdb->up_biodata($kode_pendaftaran, $data);
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-ban"></i> Berhasil!</h5>
                  Peserta Telah Di Unverifikasi
                </div>');
		redirect('admin/peserta');
	}

	public function detail($kode_pendaftaran)
	{
		$data['detail'] = $this->model_ppdb->ambil_kode_pendaftaran($kode_pendaftaran);
		$data['halaman'] = 'admin/peserta/detail';

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar', $data);
		$this->load->view('admin/peserta_detail', $data);
		$this->load->view('templates/footer');
	}

	public function print_diterima($kode_pendaftaran)
	{
		$data['peserta'] = $this->model_ppdb->tampil_data('peserta');
		$data['detail'] = $this->model_ppdb->ambil_kode_pendaftaran($kode_pendaftaran);

		$this->load->view('templates/header');
		$this->load->view('admin/sk_diterima', $data);
	}

	public function print_ditolak($kode_pendaftaran)
	{
		$data['peserta'] = $this->model_ppdb->tampil_data('peserta');
		$data['detail'] = $this->model_ppdb->ambil_kode_pendaftaran($kode_pendaftaran);

		$this->load->view('templates/header');
		$this->load->view('admin/sk_ditolak', $data);
	}

	public function excel()
	{
		$data['peserta'] = $this->model_ppdb->tampil_data('peserta')->result();

		$spreadsheet = new Spreadsheet();
		$sheet = $spreadsheet->getActiveSheet();

		// $sheet->getProperties()->setCreator("PPDB Admin");
		// $sheet->getProperties()->setLastModifiedBy("PPDB Admin");
		// $sheet->getProperties()->setTitle("Data Peserta PPDB");

		// $sheet->setActiveSheetIndex(0);

		$sheet->setCellValue('A1', 'NO');
		$sheet->setCellValue('B1', 'NO');
		$sheet->setCellValue('C1', 'NAMA LENGKAP');
		$sheet->setCellValue('D1', 'NIS');
		$sheet->setCellValue('E1', 'TELEPON');
		$sheet->setCellValue('F1', 'ALAMAT');
		$sheet->setCellValue('G1', 'ASAL SEKOLAH');
		$sheet->setCellValue('H1', 'TEMPAT LAHIR');
		$sheet->setCellValue('I1', 'TANGGAL LAHIR');
		$sheet->setCellValue('J1', 'JURUSAN');
		$sheet->setCellValue('K1', 'JENIS KELAMIN');
		$sheet->setCellValue('L1', 'AGAMA');
		$sheet->setCellValue('M1', 'STATUS');
		$sheet->setCellValue('N1', 'NILAI WAWANCARA');
		$sheet->setCellValue('O1', 'BAHASA INDONESIA');
		$sheet->setCellValue('P1', 'MATEMATIKA');
		$sheet->setCellValue('Q1', 'IPA');
		$sheet->setCellValue('R1', 'BING');

		$baris = 2;
		$no = 1;

		foreach ($data['peserta'] as $brg) {
			$sheet->setCellValue('A' . $baris, $no++);
			$sheet->setCellValue('B' . $baris, $brg->kode_pendaftaran);
			$sheet->setCellValue('C' . $baris, $brg->nama_lengkap);
			$sheet->setCellValue('D' . $baris, $brg->nis);
			$sheet->setCellValue('E' . $baris, $brg->no_hp);
			$sheet->setCellValue('F' . $baris, $brg->alamat);
			$sheet->setCellValue('G' . $baris, $brg->asal_sekolah);
			$sheet->setCellValue('H' . $baris, $brg->tmp_lahir);
			$sheet->setCellValue('I' . $baris, $brg->tgl_lahir);
			$sheet->setCellValue('J' . $baris, $brg->jurusan);
			$sheet->setCellValue('K' . $baris, $brg->jk);
			$sheet->setCellValue('L' . $baris, $brg->agama);
			$sheet->setCellValue('M' . $baris, $brg->status);
			$sheet->setCellValue('N' . $baris, $brg->nilai_wawancara);
			$sheet->setCellValue('O' . $baris, $brg->nilai_bindo);
			$sheet->setCellValue('P' . $baris, $brg->nilai_mtk);
			$sheet->setCellValue('Q' . $baris, $brg->nilai_ipa);
			$sheet->setCellValue('R' . $baris, $brg->nilai_bing);

			$baris++;
		}

		$file_date = date('d-m-Y h:m:s');
		$filename = "Peserta PPDB-({$file_date})xlsx";

		// redirect output to client browser
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="' . $filename);
		header('Cache-Control: max-age=0');

		$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
		$writer->save('php://output');
		// $writer = new Xlsx($spreadsheet);
		// $writer->save($filename);
		// return $this->index();
	}
}

/* End of file Peserta.php */
/* Location: ./application/controllers/admin/Peserta.php */