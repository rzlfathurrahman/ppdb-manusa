<!-- Automatic element centering -->
<div class="container-fluid ">  
    <h4 class="text-center">
      <img width="30%" class="mb-2" src="<?php echo base_url('assets/uploads/1200px-Nahdlatul_Ulama_Logo.svg.png') ?>"><br>
      <strong class="mt-3">PPDB ONLINE</strong><br>
        <small>SMK MA'ARIF NU 1 AJIBARANG</small> <small>Tahun Ajaran 2020/2021</small>      
    </h4>
    <hr>
    <div class="alert alert-danger ">
      <strong><i class="icon fas fa-exclamation-triangle"></i> Harap Baca Prosedur Dahulu Sebelum Mendaftar</strong>
    </div>

    <?php echo $this->session->flashdata('pesan'); ?>

    <div class="card card-primary m-2">
        <div class="card-header">
          <h3 class="card-title"> Prosedur Pendaftaran</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
         <ol>
           <li>Pastikan Hp Anda Terkoneksi Dengan Internet</li>
           <li>Baca Prosedur PPDB Online</li>
           <li>Klik Tombol <a href="#daftar" data-target="#daftar" class="text-info">Pendaftaran Siswa Baru</a> Untuk Mendaftar</li>
           <li>Isi Form Pendaftaran Dengan Data Yang Benar </li>
           <li>Screenshot Laporan Pendaftaran,lalu Tunjukan Screenshot Tadi Kepada Panitia</li>
           <li>Biaya Pendaftaran dan Administrasi Harap Dibawa Saat Datang Ke Sekolah </li>
           <li>Selamat Mendaftar </li>
         </ol>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
      <div class="text-center">
        <?php echo anchor('ppdb/index/','<div class=" btn m-1 btn-primary">Pendaftaran Siswa Baru</div>'); ?>
        <?php echo anchor('ppdb/search_page','<div class="btn m-1 btn-success">Data Calon Siswa Baru</div>'); ?>
      </div>

  <hr>
  <div class="footer text-center mb-2 " >
    Copyright &copy; 2019 <b><a href="https://smk-maarifnu1ajibarang.sch.id" class="text-black">SMK MAARIF NU 1 AJIBARANG</a></b><br>
    All rights reserved
  </div>
</div>
<!-- /.center -->
