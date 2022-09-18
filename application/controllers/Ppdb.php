<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ppdb extends CI_Controller
{

  public function index()
  {
    $data['kode']   = $this->model_ppdb->kode();
    $data['tampil'] = $this->model_ppdb->tampil_data('peserta');
    $this->load->view('templates/header');
    $this->load->view('daftar', $data);
    $this->load->view('templates/footer');
  }
  public function daftar_aksi()
  {
    $this->_rules();

    if ($this->form_validation->run() == FALSE) {
      $this->index();
    } else {
      $kode         = $this->input->post('kode_pendaftaran');
      $nama_lengkap = $this->input->post('nama_lengkap');
      $nis          = $this->input->post('nis');
      $no_hp        = $this->input->post('no_hp');
      $nama_lengkap = $this->input->post('nama_lengkap');
      $alamat       = $this->input->post('alamat');
      $asal_sekolah = $this->input->post('asal_sekolah');
      $tmp_lahir    = $this->input->post('tmp_lahir');
      $tgl_lahir    = $this->input->post('tgl_lahir');
      $jurusan      = $this->input->post('jurusan');
      $jk           = $this->input->post('jk');
      $agama        = $this->input->post('agama');

      $nilai_bindo  = $this->input->post('nilai_bindo');
      $nilai_mtk    = $this->input->post('nilai_mtk');
      $nilai_ipa    = $this->input->post('nilai_ipa');
      $nilai_bing   = $this->input->post('nilai_bing');

      $data = array(
        'kode_pendaftaran' => $kode,
        'nama_lengkap'    => $nama_lengkap,
        'nis'             => $nis,
        'no_hp'           => $no_hp,
        'alamat'          => $alamat,
        'asal_sekolah'    => $asal_sekolah,
        'tmp_lahir'       => $tmp_lahir,
        'tgl_lahir'       => $tgl_lahir,
        'jurusan'         => $jurusan,
        'jk'              => $jk,
        'agama'           => $agama,
        'nilai_bindo'     => $nilai_bindo,
        'nilai_mtk'           => $nilai_mtk,
        'nilai_ipa'           => $nilai_ipa,
        'nilai_bing'           => $nilai_bing
      );
      $this->model_ppdb->insert_data($data, 'peserta');
      $this->session->set_flashdata(
        'pesan',
        ' <div class="alert alert-success alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h5><i class="icon fas fa-check"></i> Pendaftaran Berhasil !</h5>
                      <strong>Silakan Masukan NIS,Nama,atau Nomor Hp Untuk Mendapatkan Bukti Pendaftaran !</strong> 
                    </div>'
      );
      redirect('ppdb/search_page');
    }
  }

  public function _rules()
  {
    $this->form_validation->set_rules('nama_lengkap', 'nama_lengkap', 'required', [
      'required'  =>  'Nama Lengkap Wajib Diisi !'
    ]);
    $this->form_validation->set_rules('nis', 'nis', 'required', [
      'required'  =>  'NIS Wajib Diisi !'
    ]);
    $this->form_validation->set_rules('no_hp', 'no_hp', 'required', [
      'required'  =>  'Nomor Hp Wajib Diisi !'
    ]);
    $this->form_validation->set_rules('alamat', 'alamat', 'required', [
      'required'  =>  'Alamat Wajib Diisi !'
    ]);
    $this->form_validation->set_rules('asal_sekolah', 'asal_sekolah', 'required', [
      'required'  =>  'Asal Sekolah Wajib Diisi !'
    ]);
    $this->form_validation->set_rules('tmp_lahir', 'tmp_lahir', 'required', [
      'required'  =>  'Tempat Lahir Wajib Diisi !'
    ]);
    $this->form_validation->set_rules('tgl_lahir', 'tgl_lahir', 'required', [
      'required'  =>  'Tanggal Lahir Wajib Diisi !'
    ]);
    $this->form_validation->set_rules('jk', 'jk', 'trim|required|min_length[5]|max_length[12]', ['required' => 'Jenis Kelamin Wajib Diisi !']);
  }
  public function search_page()
  {
    $this->load->view('templates/header');
    $this->load->view('search_page');
    $this->load->view('templates/footer');
  }
  public function cari()
  {
    $keyword     = $this->input->post('keyword');
    $data['peserta'] = $this->model_ppdb->get_keyword($keyword);
    $this->load->view('templates/header');
    $this->load->view('laporan', $data);
    $this->load->view('templates/footer');
  }
}

/* End of file Ppdb.php */
/* Location: ./application/controllers/Ppdb.php */