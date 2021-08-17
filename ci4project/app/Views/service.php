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
                <button class="btn btn-dark" data-toggle="modal" data-target="#DaftarTransaksi" style="float: right;">Daftar transaksi</button>
                <h1 class="card-title" style="font-size: 160%;">Transaksi</h1>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-4">
                    <label class="ml-1">Jenis Transaksi</label>
                    <select class="custom-select" id="pilih_trx">
                      <option value="0">Service</option>
                      <option value="1">Penjualan Part</option>
                    </select>
                  </div>
                </div>
              </div>

              <!-- bagian UI service -->
              <div class="card card-info" id="service">
                <form class="form-horizontal" action="" id="form_service" method="POST">
                  <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-4">
                        <label class="ml-1">Invoice</label>
                        <input type="text" class="form-control mb-2" name="invoicesrv" value="SRV/<?= date('Y'); ?>/<?= $autoinvpj; ?>" readonly>
                        <label class="ml-1">Kasir</label>
                        <input type="text" class="form-control mb-2" name="" value="<?= session()->get('nama_user') ?>" readonly>
                        <input type="text" class="form-control" id="id_sm" name="id_kasirsrv" value="<?= session()->get('id_adm') ?>" hidden>
                        <input type="text" class="form-control" id="id_sm" name="id_notaservice" value="<?= $autoinvpj; ?>" hidden>
                        <label class="ml-1">Mekanik</label>
                        <select class="custom-select mb-2" name="mekanik">
                          <option value="">Pilih mekanik...</option>
                          <?php foreach ($showmekan as $mekanik) : ?>
                            <option value="<?= $mekanik['id_mekanik']; ?>"><?= $mekanik['nama_mekan']; ?></option>
                          <?php endforeach; ?>

                        </select>
                        <label class="ml-1">Tanggal Input</label>
                        <input type="text" class="form-control mb-2" value="<?= date('d-m-Y'); ?>" disabled>
                      </div>
                      <div class="col-md-4">
                        <label class="ml-1">Customer</label>
                        <input type="text" class="form-control mb-2" id="customer" name="notelp" placeholder="Ketik nama...">
                        <input type="text" class="form-control mb-2" id="idpelanggan" name="idpelanggan" hidden>
                        <label class="ml-1">No Telp</label>
                        <input type="text" class="form-control mb-2" id="telp_srv" readonly>
                        <label class="ml-1">Alamat</label>
                        <input type="text" class="form-control mb-2" id="alamat_srv" readonly>
                        <label class="ml-1">No. Pol</label>
                        <input type="text" class="form-control mb-2" id="nopol_srv" readonly>
                      </div>
                      <div class="col-md-4">
                        <label class="ml-1">Merk</label>
                        <input type="text" class="form-control mb-2" id="merk_srv" readonly>
                        <label class="ml-1">Tipe</label>
                        <input type="text" class="form-control mb-2" id="tipe_srv" readonly>
                        <label class="ml-1">K/m Datang</label>
                        <input type="text" class="form-control mb-2" id="kmdtg" name="kmdtg" placeholder="Masukan K/m">
                        <label class="ml-1">Keluhan</label>
                        <textarea class="form-control" rows="3" name="keluhan" placeholder="isi keluhan..."></textarea>
                      </div>
                    </div>
                    <div class="row mt-5">
                      <div class="col-md-8">
                        <label>Spare Part</label>
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
                          <input type="text" class="form-control" name="nama_brgsrv" placeholder="Nama Barang" id="barang_service">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalService">
                            Cari
                          </button>
                        </div>
                      </div>
                      <div class="col-1">
                        <input type="number" class="form-control" name="qty_srv" placeholder="Qty" id="qty_service">
                      </div>
                      <div class="col-3">
                        <input type="number" class="form-control" name="harga_jualsrv" placeholder="Harga" id="harga_service">
                        <input type="number" class="form-control" name="id_brgsrv" placeholder="Harga" id="id_brgservice" hidden>

                      </div>
                    </div>
                    <div class="row mt-5 mb-5">
                      <div class="col text-center">
                        <button class="btn btn-primary btn-lg" type="submit" id="btntambah_srv">Tambah</button>
                      </div>
                    </div>
                  </div>
                  <div class="row mx-auto">
                    <div class="col mx-auto">
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Barang Service</th>
                            <th scope="col">Qty</th>
                            <th scope="col">Harga (Rp.)</th>
                          </tr>
                        </thead>
                        <tbody id="tbl_service">

                        </tbody>
                        <tfoot>
                          <tr>
                            <td>

                            </td>
                            <td></td>
                            <td>
                              <h5 style="float: right;">Grand Total (Rp) :</h5 style="float: right;">
                            </td>
                            <td>
                              <h5><input type="text" id="gtotal_srv" style="width:100%; border: none; pointer-events: none;"></h5>
                            </td>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                  <div class="row mt-5 mb-5">
                    <div class="col text-center">
                      <button class="btn btn-primary btn-lg" type="submit" id="btnservice">Checkout</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- end UI service -->

              <!-- bagian UI untuk transaksi penjualan -->

              <div class="card card-info" id="penjualan">
                <form class="form-horizontal" action="" id="form_pj" method="POST">
                  <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6">
                        <label class="ml-1">Invoice</label>
                        <input type="text" class="form-control mb-2" name="invoicePJ" value="INV/<?= date('Y'); ?>/<?= $autoinvpj; ?>" readonly>
                        <label class="ml-1">Kasir</label>
                        <input type="text" class="form-control mb-2" value="<?= session()->get('nama_user') ?>" readonly>
                        <label class="ml-1">Tanggal Input</label>
                        <input type="text" class="form-control mb-2" value="<?= date('d-m-Y'); ?>" disabled>
                        <input type="text" class="form-control" id="id_sm" name="id_notapj" value="<?= $autoinvpj; ?>" hidden>
                      </div>
                      <div class="col-md-6">
                        <label class="ml-1">Customer</label>
                        <input type="text" class="form-control mb-2" id="cust" name="custpj" placeholder="Ketik nama...">
                        <input type="text" class="form-control mb-2" id="idcust" name="idcustpj" hidden>
                        <label class="ml-1">No Telp</label>
                        <input type="text" class="form-control mb-2" id="telppj" name="notelppj" readonly>
                        <label class="ml-1">Alamat</label>
                        <input type="text" class="form-control mb-2" id="alamat" name="alamatpj" readonly>

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
                        <label>Harga Jual</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-8">
                        <div class="input-group">
                          <input type="text" class="form-control" name="nama_brgpj" placeholder="Nama Barang" id="nama_brgpj">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalPenjualan">
                            Cari
                          </button>
                        </div>
                      </div>
                      <div class="col-1">
                        <input type="number" class="form-control" name="qtypj" placeholder="Qty" id="qtypj">
                      </div>
                      <div class="col-3">
                        <input type="number" class="form-control" name="harga_jualpj" placeholder="Harga" id="harga_jualpj">
                        <input type="number" class="form-control" name="id_brgpj" placeholder="Harga" id="id_brg" hidden>
                        <input type="text" class="form-control" name="id_kasir" value="<?= session()->get('id_adm') ?>" hidden>
                      </div>
                    </div>
                    <div class="row mt-5 mb-5">
                      <div class="col text-center">
                        <button class="btn btn-primary btn-lg" type="submit" id="btntambahPJ">Tambah</button>
                      </div>
                    </div>
                  </div>
                  <div class="row mx-auto">
                    <div class="col mx-auto">
                      <table class="table tbl_pj">
                        <thead>
                          <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Barang</th>
                            <th scope="col">Qty</th>
                            <th scope="col">Harga (Rp.)</th>
                            <th scope="col">Aksi</th>
                          </tr>
                        </thead>
                        <tbody id="data_pj">

                        </tbody>
                        <tfoot>
                          <tr>
                            <td>

                            </td>
                            <td></td>
                            <td>
                              <h5 style="float: right;">Grand Total (Rp) :</h5 style="float: right;">
                            </td>
                            <td>
                              <h5><input type="text" id="gtotal" style="width:100%; border: none; pointer-events: none;"></h5>
                            </td>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div> <!-- end table pj -->
                  <div class="row mt-5 mb-5">
                    <div class="col text-center">
                      <button class="btn btn-primary btn-lg" type="submit" id="btn_cekoutpj">Checkout pj</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- end UI penjualan -->
            </div>
          </div>
        </div>
        <!-- table daftar penjualan       -->
        <!-- modal -->
        <?= $this->include('layout/modal'); ?>
        <!-- end modal -->
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
    <strong>Copyright &copy;2021</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<?= $this->endSection(); ?>