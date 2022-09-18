<div class="wrapper">
  
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <?php if($halaman == 'admin/peserta'): ?>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= base_url('admin/peserta/excel')  ?>" class="nav-link font-weight-bold">Ekspor Excel </a>
      </li>
      <?php endif; ?>
    </ul>
    <ul class="navbar-nav ml-auto">
      <?php if ($this->session->userdata('username')) { ?>
        <li class="nav-item">Selamat Datang <div class="btn btn-sm btn-primary"><?php echo $this->session->userdata('username'); ?></div></li>
      <?php } else{ ?>
        <li class="nav-item"><?php echo anchor('admin/auth/prosese_login','<div class="btn btn-sm btn-primary">Login</div>'); ?></li>
      <?php } ?>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url('admin/dashboard') ?>" class="brand-link">
      <img src="<?php echo base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Halaman Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar"> 
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">Admin Menu</li>
         <li class="nav-item">
           <a class="nav-link" href="<?php echo base_url('admin/dashboard') ?>">
             <i class="nav-icon fas fa-tachometer-alt"></i>
             <p>Dashboard</p>
           </a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="<?php echo base_url('admin/peserta') ?>">
             <i class="nav-icon fas fa-user-graduate"></i>
             <p>Peserta</p>
           </a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="<?php echo base_url('admin/nilai') ?>">
             <i class="nav-icon fas fa-sort-numeric-up"></i>
             <p>Data Nilai Peserta</p>
           </a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="<?php echo base_url('admin/wawancara') ?>">
             <i class="nav-icon fas fa-user-edit"></i>
             <p>Tes & Wawancara Peserta</p>
           </a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('admin/users') ?>">
              <i class="nav-icon fas fa-users-cog"></i>
              <p>Data Panitia</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('admin/auth/logout') ?>">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

 