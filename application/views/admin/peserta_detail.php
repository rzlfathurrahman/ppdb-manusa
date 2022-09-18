 <div class="content-wrapper">
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Calon Siswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">PPDB</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/peserta') ?>">Calon Siswa</a></li>
              <li class="breadcrumb-item active">Detail</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
 <!-- Main content -->
    <section class="content">
      <?php foreach ($detail as $dt): ?>
        <div class="card bg-light">
            <div class="card-header text-muted border-bottom-0">
              
            </div>
            <div class="card-body pt-0">
              <div class="row">
                <div class="col-12">
                  <h2 class="lead text-uppercase"><b><?php echo $dt->nama_lengkap ?></b></h2>
                  <p class="text-muted text-sm"><b>Kode Pendaftaran : </b> <?php echo $dt->kode_pendaftaran ?> </p>
                  <p class="text-muted text-sm"><b>NIS : </b> <?php echo $dt->nis ?> </p>
                  <table>
                    <tr>
                      <td class="text-muted mr-2">Status : </td>
                      <td>
                        <?php if ($dt->status == "diterima") { ?>
                        <div class="badge ml-2 badge-success">Diterima</div>
                        <?php }elseif($dt->status == 'tidak_diterima'){ ?> 
                          <div class="badge ml-2 badge-danger">Tidak Diterima</div>
                        <?php }else{ ?>
                          <div class="badge ml-2 badge-info">Belum Diverivikasi</div>
                        <?php } ?>
                      </td>
                    </tr>
                  </table>

                  <hr>

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
                    <i class="fas fa-motorcycle mr-1"></i> 
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
            <div class="card-footer">
               <?php echo anchor('admin/peserta', '<div class="btn btn-sm btn-danger">Kembali'.'</div>'); ?> 
            </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    <?php endforeach ?>
    </section>
    <!-- /.content -->
</div>