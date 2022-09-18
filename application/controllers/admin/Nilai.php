<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {

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
    $data['totalNilai'] = $this->db->query("SELECT kode_pendaftaran,nilai, SUM(nilai) as total FROM nilai GROUP BY kode_pendaftaran ORDER BY kode_pendaftaran")->result();
        $data['nilai'] =  $this->model_nilai->tampil_data('nilai')->result();
    $data['halaman'] = 'admin/nilai';
    
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar',$data);
    $this->load->view('admin/daftar_nilai',$data);
    $this->load->view('templates/footer');
  }
  
  public function detail($kode_pendaftaran)
  {
    $data['detail'] = $this->model_ppdb->ambil_kode_pendaftaran($kode_pendaftaran);
    $data['detailNilai'] = $this->model_nilai->ambil_kode_pendaftaran($kode_pendaftaran);
    $data['halaman'] = 'admin/nilai/detail';
	   
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar',$data);
    $this->load->view('admin/detail_nilai',$data);
    $this->load->view('templates/footer');
  }
  
  public function input_nilai($kode_pendaftaran)
  {   
      $data['peserta'] = $this->model_ppdb->ambil_kode_pendaftaran($kode_pendaftaran);
      $data['halaman'] = 'admin/nilai/input';
      
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar',$data);
    $this->load->view('admin/form_nilai',$data);
    $this->load->view('templates/footer');
  }
  public function simpan_nilai()
  {   
      $kode_pendaftaran = $this->input->post('kode_pendaftaran');
      $nilai_bindo      = $this->input->post('nilai_bindo');
      $nilai_mtk        = $this->input->post('nilai_mtk');
      $nilai_ipa        = $this->input->post('nilai_ipa');
      $nilai_bing       = $this->input->post('nilai_bing'); 
      
    $this->db->query("UPDATE `peserta` SET `nilai_bindo` = $nilai_bindo , `nilai_mtk` = $nilai_mtk, `nilai_ipa` = $nilai_ipa, `nilai_bing` = $nilai_bing WHERE `peserta`.`kode_pendaftaran` = '$kode_pendaftaran'");
    $this->session->set_flashdata('pesan','
               <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Berhasil!</h5>
                 Data Nilai Berhasil Diinput !
                </div>');
      redirect('admin/nilai/');
  }
  
  

}
