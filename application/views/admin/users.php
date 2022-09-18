<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Panitia</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">PPDB</a></li>
            <li class="breadcrumb-item active">Data Panitia</li>
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
        <?= anchor('admin/users/tambah_users', '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Panitia</button>'); ?>
        <div class="card card-success">
          <div class="card-header">
            <h3 class="card-title">Tabel Panitia PPDB Online</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-hover table-bordered table-striped">
              <thead>
                <tr class="text-center bg-dark text-light">
                  <th align="middle">NO</th>
                  <th>Username</th>
                  <th>Level</th>
                  <th>Update</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1;
                foreach ($users as $ps) : ?>
                  <tr>
                    <td align="middle">
                      <?= $no++ ?>
                    </td>
                    <td>
                      <?= $ps->username ?></td>
                    <td align="middle">
                      <div class="badge badge-sm badge-primary">
                        <?= $ps->level ?></div>
                    </td>
                    <td width="20px" align="middle">
                      <?= anchor('admin/users/update/' . $ps->id_admin, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>'); ?>
                    </td>
                    <td width="20px" align="middle">
                      <?= anchor('admin/users/delete/' . $ps->id_admin, '<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>'); ?>
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