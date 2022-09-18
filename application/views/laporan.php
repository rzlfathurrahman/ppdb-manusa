<?php foreach ($peserta as $pst) : ?>
  <div class="container-fluid">
    <!-- Profile Image -->
    <div class="card card-primary m-2 card-outline">
      <div class="card-body box-profile">

        <h3 class="profile-username text-center">
          <?= $pst->nama_lengkap ?></h3>

        <p class="text-muted text-center "><strong><?= $pst->kode_pendaftaran ?></strong></p>

        <ul class="list-group list-group-unbordered mb-3">
          <li class="list-group-item">
            <b>NIS</b> <a class="float-right"><?= $pst->nis ?></a>
          </li>
          <li class="list-group-item">
            <b>Alamat</b> <a class="float-right"><?= $pst->alamat ?></a>
          </li>
          <li class="list-group-item">
            <b>Asal Sekolah</b> <a class="float-right"><?= $pst->asal_sekolah ?></a>
          </li>
          <li class="list-group-item">
            <b>Tempat Lahir</b> <a class="float-right"><?= $pst->tmp_lahir ?></a>
          </li>
          <li class="list-group-item">
            <b>Tanggal Lahir</b> <a class="float-right"><?= $pst->tgl_lahir ?></a>
          </li>
          <li class="list-group-item">
            <b>Jurusan </b> <a class="float-right text-uppercase"><?= $pst->jurusan ?></a>
          </li>
          <li class="list-group-item">
            <b>Jenis Kelamin</b> <a class="float-right"><?= $pst->jk ?></a>
          </li>
          <li class="list-group-item">
            <b>Agama</b> <a class="float-right text-uppercase"><?= $pst->agama ?></a>
          </li>
          <li class="list-group-item">
            <b>No. HP</b> <a class="float-right text-uppercase"> <?= $pst->no_hp ?></a>
          </li>
        </ul>

        <div class="alert alert-warning ">
          <strong><i class="icon fas fa-exclamation-triangle"></i> Data Tersebut Harap Di Screenshot dan Tunjukan Kepada <strong> Panitia PPDB SMK MA'ARIF NU 1 AJIBARANG</strong> Sebagai Bukti Pendaftaran !</strong>
        </div>

        <?= anchor('welcome', '<div class="btn btn-block btn-danger btn-sm mr-2"><i class="fas fa-door-open fa-sm"></i> Kembali
      </div>') ?>

      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
<?php endforeach ?>