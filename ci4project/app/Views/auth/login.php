<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>/adminlte_asset/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url(); ?>/adminlte_asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url(); ?>/adminlte_asset/asset/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="row">
            <div class="col">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <img src="<?= base_url(); ?>/adminlte_asset/asset/img/gambar bengkel.png" style="width: 20%;">
                        <a href="#" class="h1 mt-1"><b>Bengkel Jaya</b></a>
                        <?php if (session()->getFlashData('pesan')) :  ?>
                            <p>
                                <?= session()->getFlashData('pesan'); ?>
                            </p>
                        <?php endif; ?>
                    </div>
                    <?php if (session()->getFlashData('pesan')) :  ?>
                        <p>
                            <?= session()->getFlashData('pesan'); ?>
                        </p>
                    <?php endif; ?>
                    <div class="card-body">
                        <form action="<?= base_url(); ?>/Auth/do_login" method="post">
                            <div class="input-group mb-3">
                                <input type="text" id="username" name="username" class="form-control" placeholder="Username">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <div class="icheck-primary">
                                        <input type="checkbox" id="remember">
                                        <label for="remember">
                                            Remember Me
                                        </label>
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-4">
                                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?= base_url(); ?>/adminlte_asset/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url(); ?>/adminlte_asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url(); ?>/adminlte_asset/asset/js/adminlte.min.js"></script>
</body>

</html>