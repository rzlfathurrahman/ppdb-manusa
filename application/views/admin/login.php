<div class="login-page">
  <div class=" login-box">
    <div class="card">
      <div class="card-body bg-transparent">
        <p class="login-box-msg">
          <strong class="h4 text-center"><i class="fas fa-users"></i> Login Admin</strong>
        </p>

        <?= $this->session->flashdata('pesan'); ?>

        <form action="<?= base_url('admin/auth/proses_login') ?>" method="post">
          <div class="row">
            <div class="col-md-12">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Username" name="username">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
              </div>
              <?= form_error('username', '<div class="text-danger small ml-3 mt-2 mb-2">', '
              </div>'); ?>
              <div class="input-group mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <?= form_error('password', '<div class="text-danger small ml-3 mt-2 mb-2">', '
            </div>'); ?>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->
</div>