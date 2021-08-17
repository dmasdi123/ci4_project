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

                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item">User</li>
                            <li class="breadcrumb-item active"> Form Edit Master Barang</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="card card-primary">
                            <!-- card header -->
                            <div class="card-header">
                                <h3 class="card-title">Form Edit Master Barang</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- card body -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <form action="<?= base_url(); ?>/masterbarang/updatemb/<?= $mb['id_barang']; ?>" method="POST">
                                            <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
                                            <input type="text" id="id_user" name="id_user" value="<?= $mb['id_user']; ?>" hidden>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Nama Barang</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?= $mb['nama_barang']; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">QTY</label>
                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control" id="qty" name="qty" value="<?= $mb['qty']; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Harga Beli</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="harga_beli" name="harga_beli" value="<?= $mb['harga_beli']; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Harga Jual</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="harga_jual" name="harga_jual" value="<?= $mb['harga_jual']; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Tanggal Beli</label>
                                                <div class="col-sm-10">
                                                    <input type="date" class="form-control" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Nama Supplier</label>
                                                <div class="col-sm-10">
                                                    <select class="custom-select" id="id_supp" name="id_supp">
                                                        <option selected disabled><?= $mb['id_supp']; ?></option>
                                                        <?php foreach ($supplier as $supp) : ?>
                                                            <option id="id_supp" name="id_supp" value="<?= $supp['id_supp']; ?>"><?= $supp['nama_supp']; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="justify-content-center">
                                                <button type="submit" class="btn btn-success btn-block" data-toggle="modal" data-target="#exampleModal" style="text-align: center;">Simpan <i class="fas fa-plus-square ml-1"></i></button>
                                            </div>
                                        </form>
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