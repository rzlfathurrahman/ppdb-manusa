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
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/users') ?>">Data Panitia</a></li>
              <li class="breadcrumb-item active">Update Data</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!---- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card card-success">
          <div class="card-header">
            <h3 class="card-title"><i class="fas fa-edit mr-1"></i> Update Data Panitia</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
        <?php foreach ($users as $user): ?>
          <form method="post" action="<?php echo base_url('admin/users/update_aksi') ?>">
            <div class="card-body">
              <div class="form-group">
                <label>Username</label>
                <input type="hidden" name="id_admin" value="<?php echo $user->id_admin ?>">
                <input type="hidden" name="id_sessions"  value="<?php echo $user->id_sessions ?>">
                <input type="text" name="username" placeholder="Masukan Username" class="form-control" value="<?php echo $user->username ?>">
                <?php echo form_error('username','<div class="text-danger small ml-3 mt-2">'); ?>
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="text" name="password" placeholder="Masukan Password" class="form-control" value="<?php echo $user->password ?>">
                <?php echo form_error('password','<div class="text-danger small ml-3 mt-2">'); ?>
              </div>
              <div class="form-group">
                <label>Level</label>
                <select name="level" class="form-control">
                  <option value="">=== Pilih Admin ====</option>
                  <option value="admin">Admin</option>
                </select>
              </div>
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
      </form>
     <?php endforeach ?>
    </div>
</section>

  </div>
  <!-- /.content-wrapper -->