<div class="content-wrapper">
     <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">PPDB</a></li>
              <li class="breadcrumb-item active">Dashboard </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
 <!-- Main content -->
    <section class="content">
         <blockquote>
          <p class="h3">Selamat Datang Di Halaman Admin PPDB SMK MA'ARIF NU 1 AJIBARANG</p>
          <small>Anda Login Sebagai 
            <cite title="Source Title" class="h5">
             <strong><?php echo $this->session->userdata('username'); ?></strong>
            </cite>
          </small>
        </blockquote>
        <div class="row">
            <div class="col-md-8">
              <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Informasi</h3>
                </div>
                <div class="card-body">
                  <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                     <?php foreach ($jurusan as $jrs): ?>
                      <?php if ($jrs->jurusan == "tav") { ?>
                        <div class="col-lg-3 col-6">
                          <!-- small box -->
                          <div class="small-box bg-primary">
                            <div class="inner">
                              <h3>
                                  <?php echo $jrs->total ?>
                              </h3>
            
                              <p class="text-uppercase"><?php echo $jrs->jurusan; ?></p>  
                            </div>
                            <div class="icon">
                              <i class="fas fa-camera mr-1"></i>
                            </div>
                          </div>
                        </div>
                      <?php }elseif ($jrs->jurusan == "tei") { ?>
                        <div class="col-lg-3 col-6">
                          <!-- small box -->
                          <div class="small-box bg-secondary">
                            <div class="inner">
                              <h3>
                                  <?php echo $jrs->total ?>
                              </h3>
            
                              <p class="text-uppercase"><?php echo $jrs->jurusan; ?></p>  
                            </div>
                            <div class="icon">
                              <i class="fas fa-bolt mr-1"></i>
                            </div>
                          </div>
                        </div>
                      <?php }elseif ($jrs->jurusan == "tkro"){ ?> 
                        <div class="col-lg-3 col-6">
                          <!-- small box -->
                          <div class="small-box bg-success">
                            <div class="inner">
                              <h3>
                                  <?php echo $jrs->total ?>
                              </h3>
            
                              <p class="text-uppercase"><?php echo $jrs->jurusan; ?></p>  
                            </div>
                            <div class="icon">
                             <i class="fas fa-car mr-1"></i> 
                            </div>
                          </div>
                        </div>
                      <?php }elseif ($jrs->jurusan == "tbsm"){ ?>
                        <div class="col-lg-3 col-6">
                          <!-- small box -->
                          <div class="small-box bg-danger">
                            <div class="inner">
                              <h3>
                                  <?php echo $jrs->total ?>
                              </h3>
            
                              <p class="text-uppercase"><?php echo $jrs->jurusan; ?></p>  
                            </div>
                            <div class="icon">
                              <i class="fas fa-motorcycle"></i>
                            </div>
                          </div>
                        </div>  
                      <?php }elseif ($jrs->jurusan == "tkj"){ ?>
                        <div class="col-lg-3 col-6">
                          <!-- small box -->
                          <div class="small-box bg-warning">
                            <div class="inner">
                              <h3>
                                  <?php echo $jrs->total ?>
                              </h3>
            
                              <p class="text-uppercase"><?php echo $jrs->jurusan; ?></p>  
                            </div>
                            <div class="icon">
                              <i class="fas fa-laptop mr-1"></i> 
                            </div>
                          </div>
                        </div> 
                      <?php } elseif($jrs->jurusan == "rpl"){ ?>
                        <div class="col-lg-3 col-6">
                          <!-- small box -->
                          <div class="small-box bg-info">
                            <div class="inner">
                              <h3>
                                  <?php echo $jrs->total ?>
                              </h3>
            
                              <p class="text-uppercase"><?php echo $jrs->jurusan; ?></p>  
                            </div>
                            <div class="icon">
                              <i class="fab fa-android mr-1"></i>
                            </div>
                          </div>
                        </div>
                      <?php }else{}?>
                     <?php endforeach ?>
                    </div>
                    <!-- /.row -->
                  </div>  
                </div>
            </div>  
          </div>
          <div class="col-md-4">
             <!-- Profile Image -->
            <div class="card card-primary">
              <div class="card-header">
                  <h3 class="card-title">Informasi Peserta</h3>
              </div>
              <div class="card-body">
                
                <h3 class="profile-username text-center mb-3"><b>Jumlah Peserta</b></h3>
                <hr class="mb-4">
                 <div class="mr-5">
                    <ul class="list-grouplist-group-unbordered">
                     <?php foreach ($jk as $jk): ?>
                      <li class="list-group-item">
                        <b class="text-uppercase"><?php echo $jk->jk; ?></b> <a class="float-right"><?php echo $jk->total; ?></a>
                      </li>
                      <?php endforeach; ?>
                  </ul>
                 </div>    
                  
                <a href="#" class="mt-5 align-bottom btn btn-info btn-block">
                    <b>Total :
                        <?php foreach ($peserta as $ps): ?>
                            <?php   echo $ps->total; ?>
                        <?php endforeach; ?>
                    </b>
                </a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
    </section>
</div>