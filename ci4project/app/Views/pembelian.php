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
          <a href="#" class="d-block">Febrian Dimas Winaputra</a>
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
            <h1 class="m-0">Pembelian</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
              <li class="breadcrumb-item">Transaksi</li>
              <li class="breadcrumb-item active">Pembelian</li>
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
            <button class="btn btn-primary mb-3 btn_buy"><i class="fas fa-plus-circle mr-2" id="btn_buy" onclick="toogleinput()"></i>Tambah Transaksi </button>
            <div class="card card-primary input_buy">
              <div class="card-header">
                <h2 class="card-title">Input Pembelian</h2>
              </div>
              <div class="card card-info">
                <form class="form-horizontal" action="" method="POST">
                  <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
                  <div class="card-body ">
                    <div class="row justify-content-center">
                      <div class="col-md-8">
                        <label class="ml-1" hidden>No Faktur</label>
                        <input type="text" class="form-control mb-2" id_barang="id_barang" name="id_barang" autofocus hidden>

                        <label class="ml-1">Nama Barang</label>
                        <div class="input-group mb-2">
                          <input type="text" class="form-control" id="nama_barang" name="nama_barang" autofocus placeholder="Nama Barang">

                          <button type="button" onclick="" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalPembelian">
                            Daftar Barang
                          </button>
                        </div>
                        <label class="ml-1">Jumlah</label>
                        <input type="text" class="form-control mb-2" id="qty" name="qty" autofocus>

                        <label class="ml-1">Harga Beli</label>
                        <input type="text" class="form-control mb-2 " id="harga_beli" name="harga_beli" autofocus>

                        <label class="ml-1">Harga Jual</label>
                        <input type="text" class="form-control mb-2" id="harga_jual" name="harga_jual" autofocus>

                        <label class="ml-1">Tanggal Input</label>
                        <input type="text" class="form-control mb-2" value="<?= date('d-m-Y'); ?>" disabled>
                        <input type="text" class="form-control mb-2" name="id_admin" hidden>
                        <button class="btn btn-primary btn-md btn-block mt-3" type="submit">Simpan</button>
                      </div>
                    </div>
                  </div>
                </form>

              </div>
            </div> <!-- end card title -->
          </div>
        </div>

        <div class="row mx-auto">
          <div class="col mx-auto">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">First</th>
                  <th scope="col">Last</th>
                  <th scope="col">Handle</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
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
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<?= $this->endSection(); ?>