 <div class="content-wrapper">
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Nilai Peserta</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">PPDB</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/nilai') ?>">Data Nilai</a></li>
              <li class="breadcrumb-item active">Detail</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  <section class="content">
    <div class="row"> 
      <div class="col-md-4">
        <div class="sticky-top mb-3">
          <div class="card card-success ">
             <div class="card-header">
                    <h3 class="card-title">Detail Nilai Peserta</h3>
             </div>
            <div class="card-body box-profile">
              <div class="text-justify">
                 <?php foreach($detail as $dt) : ?>
                  <h3 class="profile-username text-center"><?php echo $dt->nama_lengkap ?></h3>
    
                  <p class="text-muted text-center"><?php echo $dt->kode_pendaftaran ?></p>
                  <p class="text-muted text-center">
                    <?php if ($dt->status == "diterima") { ?>
                     <div class="btn btn-sm btn-block  btn-success">Diterima</div>
                    <?php }elseif($dt->status == 'tidak_diterima'){ ?> 
                      <div class="btn btn-sm btn-block btn-danger">Tidak Diterima</div>
                    <?php }else{ ?>
                      <div class="btn btn-sm btn-block btn-info">Belum Diverivikasi</div>
                    <?php } ?>
                  </p>
                     <?php if ($detail == NULL) {
                      echo "Data Belum Ada";
                      } else { ?>
                       <?php $jNilai=0; foreach($detail as $tn) : ?>
                       <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                          <b>Bahasa Indonesia</b>
                          <a class="float-right"><?php echo $tn->nilai_bindo ?></a>
                        </li>
                        <li class="list-group-item">
                          <b>Matematika</b>
                          <a class="float-right"><?php echo $tn->nilai_mtk ?></a>
                        </li>
                        <li class="list-group-item">
                          <b>Ipa</b>
                          <a class="float-right"><?php echo $tn->nilai_ipa ?></a>
                        </li>
                        <li class="list-group-item" >
                          <b>Bahasa Inggris</b>
                          <a class="float-right"><?php echo $tn->nilai_bing ?></a>
                        </li>
                      </ul>
                      <button class="btn btn-info btn-block"><strong>Total Nilai : <?php echo $jNilai = $tn->nilai_bindo+$tn->nilai_mtk+$tn->nilai_ipa+$tn->nilai_bing ; ?></strong></button>
                     <?php endforeach; ?>
                   <?php } ?>  
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
             </div>     
          </div>
        </div>
        <?php endforeach; ?>
      <div class="col-md-8">
        <!-- About Me Box -->
        <div class="card card-success">
          <div class="card-header">
            <h3 class="card-title">Detail Peserta</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
              <strong><i class="fas fa-home mr-1"></i> Alamat</strong>

            <p class="text-muted">
              <?php echo $dt->alamat ?>
            </p>

            <hr>
            
             <strong><i class="fas fa-phone mr-1"></i> Nomor Hp</strong>

                <p class="text-muted">
                  <?php echo $dt->no_hp ?>
                </p>

            <hr>

            <strong><i class="fas fa-school mr-1"></i> Asal Sekolah</strong>

            <p class="text-muted"><?php echo $dt->asal_sekolah ?></p>

            <hr>

            <strong><i class="fas fa-map-marker-alt mr-1"></i> Tempat dan Tanggal Lahir</strong>

            <p class="text-muted">
              <?php echo $dt->tmp_lahir ?>, <?php echo $dt->tgl_lahir ?>
            </p>

            <hr>
            
            <strong>
              <?php if ($dt->jk == "laki-laki") { ?>
                <i class="fas fa-male mr-1"></i>        
              <?php }elseif ($dt->jk == "perempuan") { ?>
                <i class="fas fa-female mr-1"></i>
              <?php }else{ ?> 
                <i class="fas fa-male mr-1"></i><i class="fas fa-female mr-1"></i>  
              <?php } ?>
              Jenis Kelamin </strong>

            <p class="text-muted text-capitalize">
              <?php echo $dt->jk ?>
            </p>

            <hr>

            <strong>
              <?php if ($dt->jurusan == "tav") { ?>
                <i class="fas fa-camera mr-1"></i>        
              <?php }elseif ($dt->jurusan == "tei") { ?>
                <i class="fas fa-bolt mr-1"></i>
              <?php }elseif ($dt->jurusan == "tkro"){ ?> 
                <i class="fas fa-car mr-1"></i> 
              <?php }elseif ($dt->jurusan == "tbsm"){ ?>
                <i class="fas fa-motocycle mr-1"></i> 
              <?php }elseif ($dt->jurusan == "tkj"){ ?> 
                <i class="fas fa-laptop mr-1"></i> 
              <?php } elseif($dt->jurusan == "rpl"){ ?>
                 <i class="fab fa-android mr-1"></i>
              <?php }else{}?>
              Jurusan </strong>

            <p class="text-muted text-uppercase">
              <?php echo $dt->jurusan ?>
            </p>

            <hr>

            <strong><i class="fas fa-mosque mr-1"></i> Agama</strong>

            <p class="text-muted"><strong class="text-uppercase h5"><?php  echo $dt->agama ?></strong></p>
            </div>
          </div>
        </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  </section>  

</div>

