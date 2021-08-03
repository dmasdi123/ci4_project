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
      <img src="<?= base_url(); ?>/adminlte_asset/asset//img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Bengkel Jaya Rusdi</span>
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
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
              <li class="breadcrumb-item">Transaksi</li>
              <li class="breadcrumb-item active">Service</li>
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
            <div class="card card-primary">
              <div class="card-header">
                <button class="btn btn-dark" data-toggle="modal" data-target="#ModaldaftarTransaksi" style="float: right;">Daftar transaksi</button>
                <h1 class="card-title" style="font-size: 160%;">Transaksi (Service)</h1>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-4">
                    <label class="ml-1">Jenis Transaksi</label>
                    <select class="custom-select" id="inputGroupSelect02" id="power" name="power">
                      <option selected>Pilih...</option>
                      <option value="">Penjualan Part</option>
                      <option value="">Service</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="card card-info">
                <form class="form-horizontal" action="" id="form_pj" method="POST">
                  <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-4">
                        <label class="ml-1">Invoice</label>
                        <input type="text" class="form-control mb-2" name="invoice" value="JL0000" readonly>
                        <label class="ml-1">Kasir</label>
                        <input type="text" class="form-control mb-2" name="invoice" value="admin" readonly>
                        <label class="ml-1">Mekanik</label>
                        <input type="text" class="form-control mb-2" id="cust" name="cutomer" placeholder="Don jon">
                        <label class="ml-1">Tanggal Input</label>
                        <input type="text" class="form-control mb-2" value="<?= date('d-m-Y'); ?>" disabled>
                      </div>
                      <div class="col-md-4">
                        <label class="ml-1">Customer</label>
                        <input type="number" class="form-control mb-2" id="telp" name="notelp" placeholder="Ketik nama...">
                        <label class="ml-1">No Telp</label>
                        <input type="number" class="form-control mb-2" id="telp" name="notelp" placeholder="Masukan No Telp">
                        <label class="ml-1">Alamat</label>
                        <input type="text" class="form-control mb-2" id="alamat" name="alamat" placeholder="Masukan Alamat">
                        <label class="ml-1">No. Pol</label>
                        <input type="text" class="form-control mb-2" id="alamat" name="alamat" placeholder="Masukan Alamat">
                      </div>
                      <div class="col-md-4">
                        <label class="ml-1">Merk</label>
                        <input type="number" class="form-control mb-2" id="telp" name="notelp" placeholder="Ketik nama...">
                        <label class="ml-1">Tipe</label>
                        <input type="number" class="form-control mb-2" id="telp" name="notelp" placeholder="Masukan No Telp">
                        <label class="ml-1">K/m Datang</label>
                        <input type="text" class="form-control mb-2" id="alamat" name="alamat" placeholder="Masukan Alamat">
                        <label class="ml-1">Keluhan</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                    </div>
                    <div class="row mt-5">
                      <div class="col-md-8">
                        <label>Nama Barang</label>
                      </div>
                      <div class="col-md-1">
                        <label>Qty</label>
                      </div>
                      <div class="col-md-3">
                        <label>Harga Service</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-8">
                        <div class="input-group">
                          <input type="text" class="form-control" name="nama_brg" placeholder="Nama Barang" id="nama_brgpj">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalPenjualan">
                            Cari
                          </button>
                        </div>
                      </div>
                      <div class="col-1">
                        <input type="number" class="form-control" name="qty" placeholder="Qty" id="qtypj">
                      </div>
                      <div class="col-3">
                        <input type="number" class="form-control" name="harga_jual" placeholder="Harga" id="harga_jualpj">
                        <input type="number" class="form-control" name="id_brg" placeholder="Harga" id="id_brg" hidden>
                        <input type="text" class="form-control" id="id_sm" name="id_sm" value="<?= session()->get('id_adm') ?>" hidden>
                      </div>
                    </div>
                    <div class="row mt-5">
                      <div class="col text-center">
                        <button class="btn btn-primary btn-lg" type="submit" id="btntambah">Tambah</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
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