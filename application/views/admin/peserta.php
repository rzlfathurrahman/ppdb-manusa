<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Peserta PPDB</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">PPDB</a></li>
              <li class="breadcrumb-item active">Peserta</li>
            </ol>
          </div>
        </div>
        <?php echo $this->session->flashdata('pesan'); ?>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">Tabel Peserta PPDB Online</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-hover table-bordered table-striped">
                <thead>
                  <tr class="text-center bg-dark text-light">
                    <th>NO</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Jenis Kelamin</th>
                    <th>Status</th>
                    <th>Aksi</th>
                    <th>SK</th>  
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1; foreach ($peserta as $ps): ?>
                    <tr class="text-capitalize">
                      <td align="middle"><?php echo $no++ ?></td>
                      <td><?php echo $ps->nama_lengkap ?></td>
                      <td class="text-uppercase text-center"><?php echo $ps->jurusan ?></td>
                      <td><?php echo $ps->jk ?></td>
                      <td width="20px" align="middle">
                        <?php if ($ps->status == "diterima") { ?>
                          <div class="badge badge-success">Diterima</div>
                        <?php }elseif($ps->status == 'tidak_diterima'){ ?> 
                          <div class="badge badge-danger">Tidak Diterima</div>
                        <?php }else{ ?>
                          <div class="badge badge-info">Belum Diverivikasi</div>
                        <?php } ?>
                      </td>
                      <td  align="middle">
                          <?php echo anchor('admin/peserta/verifikasi/'.$ps->kode_pendaftaran,'<div class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Verifikasi"><i class="fa fa-check"></i></div>'); ?>
                          <?php echo anchor('admin/peserta/unverifikasi/'.$ps->kode_pendaftaran,'<div class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Unverifikasi"><i class="fa fa-ban"></i></div>'); ?>
                          <?php echo anchor('admin/peserta/detail/'.$ps->kode_pendaftaran,'<div class="btn btn-sm btn-info" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></i></div>'); ?>
                      </td>
                      <td class="text-center" width="20px">
                          <?php if ($ps->status == "diterima") { ?>
                            <?php echo anchor('admin/peserta/print_diterima/'.$ps->kode_pendaftaran,'<div class="btn btn-sm btn-success">Print</div>'); ?>
                          <?php }elseif($ps->status == 'tidak_diterima'){ ?> 
                            <?php echo anchor('admin/peserta/print_ditolak/'.$ps->kode_pendaftaran,'<div class="btn btn-sm btn-danger">Print</div>'); ?>
                          <?php }else{ ?>
                             <div class="btn btn-sm btn-info">Belum Diverivikasi</div>
                           <?php } ?>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->