  <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin/index') ?>">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fa fa-ship"></i>
        </div>
        <div class="sidebar-brand-text mx-3">VAHITRA</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Administrator
      </div>

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/index') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Menu
      </div>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/index') ?>">
          <i class="fa fa-user-circle" aria-hidden="true"></i>
          <span>My profile</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/kelolauser') ?>">
          <i class="fa fa-users" aria-hidden="true"></i>
          <span>Kelola User</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fa fa-sticky-note" aria-hidden="true"></i>
          <span>Pembayaran</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/jadwal') ?>">
          <i class="fa fa-th-list" aria-hidden="true"></i>
          <span>Penjadwalan</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/pelabuhan') ?>">
          <i class="fa fa-ship" aria-hidden="true"></i>
          <span>Pelabuhan</span></a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/berita') ?>">
          <i class="fa fa-paper-plane" aria-hidden="true"></i>
          <span>Berita</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/kapal') ?>">
          <i class="fa fa-ship" aria-hidden="true"></i>
          <span>Kapal</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/rute') ?>">
          <i class="fa fa-map-marker" aria-hidden="true"></i>
          <span>Rute</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
        <i class="fa fa-rocket" aria-hidden="true"></i>
          <span>Layanan</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Auth/logout'); ?>">
          <i class="fas fa-sign-out-alt"></i>

          <span>Log Out</span></a>
      </li>
      <!-- 

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->