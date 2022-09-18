<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Wawancara</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">PPDB</a></li>
            <li class="breadcrumb-item active">Wawancara</li>
          </ol>
        </div>
      </div>
      <?= $this->session->flashdata('pesan'); ?>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <blockquote>
      <p class="h3">Keterangan Nilai Wawancara</p>
      <ul class="list-unstyled list-group list-group-unbordered">
        <li class="list-group-item">
          <div class="btn btn-sm btn-success">A</div> = Sangat Baik
        </li>
        <li class="list-group-item">
          <div class="btn btn-sm btn-primary">B</div> = Baik
        </li>
        <li class="list-group-item">
          <div class="btn btn-sm btn-warning">C</div> = Cukup
        </li>
        <li class="list-group-item">
          <div class="btn btn-sm btn-danger">D</div> = Kurang
        </li>
      </ul>
    </blockquote>
    <div class="row">
      <div class="col-12">
        <div class="card card-success">
          <div class="card-header">
            <h3 class="card-title">Tabel Data Wawancara Peserta</h3>
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
                  <th>Nilai</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1;
                foreach ($peserta as $ps) : ?>
                  <tr class="text-capitalize">
                    <td align="middle">
                      <?= $no++ ?>
                    </td>
                    <td>
                      <?= $ps->nama_lengkap ?></td>
                    <td class="text-uppercase text-center">
                      <?= $ps->jurusan ?></td>
                    <td>
                      <?= $ps->jk ?></td>
                    <td width="20px" align="middle">
                      <?php if ($ps->nilai_wawancara == "a") { ?>
                        <div class="badge badge-success">Sangat Baik</div>
                      <?php } elseif ($ps->nilai_wawancara == 'b') { ?>
                        <div class="badge badge-primary">Baik</div>
                      <?php } elseif ($ps->nilai_wawancara == 'c') { ?>
                        <div class="badge badge-warning">Cukup</div>
                      <?php } elseif ($ps->nilai_wawancara == 'd') { ?>
                        <div class="badge badge-danger">Buruk</div>
                      <?php } else { ?>
                        <div class="badge badge-info">Belum Diwawancarai</div>
                      <?php } ?>
                    </td>
                    <td align="middle">
                      <?= anchor('admin/wawancara/nilaiA/' . $ps->kode_pendaftaran, '<div class="btn btn-sm btn-success">A</div>'); ?>
                      <?= anchor('admin/wawancara/nilaiB/' . $ps->kode_pendaftaran, '<div class="btn btn-sm btn-primary">B</div>'); ?>
                      <?= anchor('admin/wawancara/nilaiC/' . $ps->kode_pendaftaran, '<div class="btn btn-sm btn-warning">C</div>'); ?>
                      <?= anchor('admin/wawancara/nilaiD/' . $ps->kode_pendaftaran, '<div class="btn btn-sm btn-danger">D</div>'); ?>
                    </td>
                  </tr>
                <?php endforeach ?>
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