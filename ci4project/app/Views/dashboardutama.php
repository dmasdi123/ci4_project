<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?= base_url(); ?>/adminlte_asset/asset/img/gambar bengkel.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Bengkel Jaya Jaya</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url(); ?>/adminlte_asset/asset/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= session()->get('nama_user') ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->

      <?= $this->include('layout/sidebar'); ?>

      <!-- /.sidebar-menu -->

    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashbourd Utama</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Home Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row mx-auto">
          <div class="col mx-auto">
            <div class="card">
              <!-- card body -->
              <div class="card-body">
                <div class="row">
                  <div class="col text-center">
                    <img src="<?= base_url(); ?>/adminlte_asset/asset/img/gambar bengkel.png" class="mx-auto" style="width: 20%;">
                  </div>
                </div>
                <div class="row">
                  <div class="col text-center">
                    <h1>
                      Selamat Datang
                    </h1>
                    <h1>di Bengkel Jaya Jaya</h1>
                  </div>
                </div>
                <div class="row md-8">
                  <div class="col sm-8">
                    <div class="small-box bg-success">
                      <div class="inner">
                        <h3>Pembelian</h3>

                        <p>Data Pembelian</p>
                      </div>
                      <div class="icon">
                        <i class="fas fa-shopping-cart text-white"></i>
                      </div>
                      <a href="/transaksi/pembelian" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                  <div class="col md-8">
                    <div class="small-box bg-success">
                      <div class="inner">
                        <h3>Service</h3>

                        <p>Data Service</p>
                      </div>
                      <div class="icon">
                        <i class="fas fa-tools text-white"></i>
                      </div>
                      <a href="/transaksi/service" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                  <div class="col md-8">
                    <div class="small-box bg-success">
                      <div class="inner">
                        <h3>Master Barang</h3>

                        <p>Data Master Barang</p>
                      </div>
                      <div class="icon">
                        <i class="fas fa-box-open text-white"></i>
                      </div>
                      <a href="/master_barang" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->
  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <!-- <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.-->
    <strong>Copyright &copy; 2021 <a href="#">Kelompok 3 Pemrograman Framework</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<?= $this->endSection(); ?>