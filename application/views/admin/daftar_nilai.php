<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Nilai Peserta</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">PPDB</a></li>
            <li class="breadcrumb-item active">Data Nilaii</li>
          </ol>
        </div>
      </div>
      <?= $this->session->flashdata('pesan'); ?>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card card-success">
          <div class="card-header">
            <h3 class="card-title">Tabel Nilai Peserta</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-hover text-capitalize table-bordered table-striped">
              <thead>
                <tr class="text-center bg-dark text-light">
                  <th align="middle">NO</th>
                  <th>Nama</th>
                  <th>Kode Pendaftaran</th>
                  <th>Asal Sekolah</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1;
                foreach ($peserta as $ps) : ?>
                  <tr>
                    <td align="middle" width="20px">
                      <?= $no++ ?>
                    </td>
                    <td>
                      <?= $ps->nama_lengkap ?></td>
                    <td>
                      <?= $ps->kode_pendaftaran ?></td>
                    <td>
                      <?= $ps->asal_sekolah; ?></td>
                    <td align="middle">
                      <?= anchor('admin/nilai/detail/' . $ps->kode_pendaftaran, '<div class="btn m-1 btn-primary" data-toggle="tooltip" data-placement="top" title="Detail Nilai"><i class="fa fa-eye"></i> Lihat Nilai</div>'); ?>
                      <?= anchor('admin/nilai/input_nilai/' . $ps->kode_pendaftaran, '<div class=" m-1 btn btn-success" data-toggle="tooltip" data-placement="top" title="Input Nilai"><i class="fa fa-plus"></i> Input Nilai </div>'); ?>
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