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
                    <a href="#" class="d-block"><?= session()->get('nama_user'); ?></a>
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
                            <li class="breadcrumb-item active">Customer</li>
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
                                <h3 class="card-title">Data Customer</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <button type="button" class="btn btn-success mb-4" data-toggle="modal" data-target="#exampleModal"> Tambah Customer <i class="fas fa-user-plus ml-2"></i></button>
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">No Pol</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">No Telp</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">Merk</th>
                                            <th scope="col">Tipe</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($customer as $cus) : ?>
                                            <tr>
                                                <th scope="row"><?= $i++; ?></th>
                                                <td><?= $cus['no_pol']; ?></td>
                                                <td><?= $cus['nama_cus']; ?></td>
                                                <td><?= $cus['telp']; ?></td>
                                                <td><?= $cus['alamat_cus']; ?></td>
                                                <td><?= $cus['merk']; ?></td>
                                                <td><?= $cus['tipe']; ?></td>
                                                <td>
                                                    <a href="<?= base_url(); ?>/UserController/editcust/<?= $cus['id_cus']; ?>"><button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button></a>
                                                    <a href="<?= base_url(); ?>/userController/deletecus/<?= $cus['id_cus']; ?>"><button type="button" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus data ini?')"><i class="far fa-trash-alt"></i></button></a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                                <ul class="pagination pagination-sm m-0 float-right">
                                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                                </ul>
                            </div>
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

<!-- modal tambah admin form -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <div class="card card-primary">
                            <!-- card header -->
                            <div class="card-header">
                                <h3 class="card-title">Form Tambah Customer</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- card body -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <form action="<?= base_url(); ?>/UserController/addcustomer" method="POST">
                                            <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">No Polisi</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="no_pol" name="no_pol" placeholder="Masukan Nomor Polisi">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Nama</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="nama_cus" name="nama_cus" placeholder="Masukan Nama">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">No Telp</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="telp" name="telp" placeholder="Masukan No Telp">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Alamat</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="alamat_cus" name="alamat_cus" placeholder="Masukan Alamat">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Merk</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="merk" name="merk" placeholder="Masukan Merk Kendaraan">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Tipe</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="tipe" name="tipe" placeholder="Masukan Tipe Kendaraan">
                                                </div>
                                            </div>
                                            <div class="justify-content-center">
                                                <button type="submit" class="btn btn-success btn-block" data-toggle="modal" data-target="#exampleModal" style="text-align: center;"> Tambahkan Customer <i class="fas fa-user-plus"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- modal end -->

<?= $this->endSection(); ?>