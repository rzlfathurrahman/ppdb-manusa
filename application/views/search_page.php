<!-- Automatic element centering -->
<div class="container-fluid ">
  <h4 class="text-center mt-2">
    <img width="30%" class="mb-2" src="<?= base_url('/public/img/nu_logo.png') ?>"><br>
    <strong class="mt-3">PPDB ONLINE</strong><br>
    <small>SMK MA'ARIF NU 1 AJIBARANG</small><br>
    <small>Tahun Ajaran 2020/2021</small>
  </h4>
  <hr>
  <?= $this->session->flashdata('pesan'); ?>
  <div class="card card-success ">
    <div class="card-header">
      <h3 class="card-title">Data Pendaftar</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
        </button>
      </div>
      <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <?= form_open('ppdb/cari') ?>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Masukan Data Anda Disini" name="keyword">
        <span class="input-group-append">
          <button type="submit" class="btn btn-success">Cari</button>
        </span>
      </div>
    </div>
    <?= form_close(); ?>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->
<hr>
</div>
<!-- /.center -->
<div class="footer bottom text-center m-2 ">
  Copyright &copy; 2019 <b><a href="https://smk-maarifnu1ajibarang.sch.id" class="text-black">SMK MAARIF NU 1 AJIBARANG</a></b><br>
  All rights reserved
  <!--<p class="text-italic text-muted"><small>Developed By Rizal Fathur Rahman <i class="fab fa-github"></i><a href="https://github.com/Guest1321/">https://github.com/Guest1321/</a></small></p>-->
</div>