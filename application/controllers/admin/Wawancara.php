<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wawancara extends CI_Controller {

  function __construct()
  {
    parent ::__construct();
    if (!isset($this->session->userdata['username'])) {
      $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>Anda Belum Login!</strong>
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
    $data['halaman'] = 'admin/wawancara';


    $this->load->view('templates/header');
    $this->load->view('templates/sidebar',$data);
    $this->load->view('admin/wawancara',$data);
    $this->load->view('templates/footer');
  }

  public function nilaiA($kode_pendaftaran)
  {
    $data['nilai_wawancara'] = 'a';
    $this->model_ppdb->up_nilai($kode_pendaftaran,$data);
    $this->session->set_flashdata('pesan',' <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Berhasil!</h5>
                 Peserta Telah Berhasil Diwawancarai !
                </div>');
      redirect('admin/wawancara/');
  }

  public function nilaiB($kode_pendaftaran)
  {
    $data['nilai_wawancara'] = 'b';
    $this->model_ppdb->up_nilai($kode_pendaftaran,$data);
    $this->session->set_flashdata('pesan',' <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Berhasil!</h5>
                 Peserta Telah Berhasil Diwawancarai !
                </div>');
      redirect('admin/wawancara/');
  }

  public function nilaiC($kode_pendaftaran)
  {
    $data['nilai_wawancara'] = 'c';
    $this->model_ppdb->up_nilai($kode_pendaftaran,$data);
    $this->session->set_flashdata('pesan',' <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Berhasil!</h5>
                 Peserta Telah Berhasil Diwawancarai !
                </div>');
      redirect('admin/wawancara/');
  }

  public function nilaiD($kode_pendaftaran)
  {
    $data['nilai_wawancara'] = 'd';
    $this->model_ppdb->up_nilai($kode_pendaftaran,$data);
    $this->session->set_flashdata('pesan',' <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Berhasil!</h5>
                 Peserta Telah Berhasil Diwawancarai !
                </div>');
      redirect('admin/wawancara/');
  }

  public function detail($kode_pendaftaran)
  {
    $data['detail'] = $this->model_ppdb->ambil_kode_pendaftaran($kode_pendaftaran);
    $data['halaman'] = 'admin/wawancara/detail';
    
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar',$data);
    $this->load->view('admin/peserta_detail',$data);
    $this->load->view('templates/footer');
  }
  
  public function print_diterima($kode_pendaftaran)
  {
      $data['peserta'] = $this->model_ppdb->tampil_data('peserta');
    $data['detail'] = $this->model_ppdb->ambil_kode_pendaftaran($kode_pendaftaran);
    
    $this->load->view('templates/header');
    $this->load->view('admin/sk_diterima',$data);
  }

  public function print_ditolak($kode_pendaftaran)
  {
      $data['peserta'] = $this->model_ppdb->tampil_data('peserta');
    $data['detail'] = $this->model_ppdb->ambil_kode_pendaftaran($kode_pendaftaran);
    
    $this->load->view('templates/header');
    $this->load->view('admin/sk_ditolak',$data);
  }
  

}

/* End of file Peserta.php */
/* Location: ./application/controllers/admin/Peserta.php */