<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url(); ?>/adminlte_asset/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url(); ?>/adminlte_asset/asset/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">

    <?= $this->renderSection('content'); ?>

    <!-- jQuery -->
    <script src="<?= base_url(); ?>/adminlte_asset/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url(); ?>/adminlte_asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url(); ?>/adminlte_asset/asset/js/adminlte.min.js"></script>

    <!-- script ganti jenis transaksi -->
    <script>
        $("#penjualan").css("display", "none");
        $("#tbl_pj").css("display", "none");
        $("#btnpj").css("display", "none");
        $('#pilih_trx').on('change', function() {
            if (this.value == 0) { //service
                $("#penjualan").css("display", "none");
                $("#service").attr("style", "visibility: visible");
                $("#tbl_service").attr("style", "visibility: visible");
                $("#btnservice").attr("style", "visibility: visible");
            } else { //penjualan
                $("#service").css("display", "none");
                $("#penjualan").attr("style", "visibility: visible");
                $("#tbl_service").css("display", "none");
                $("#btnservice").css("display", "none");
                $("#tbl_pj").attr("style", "visibility: visible");
                $("#btnpj").attr("style", "visibility: visible");
            }


        });
    </script>

    <!-- add nama barang dari modal ke inputan penjualan-->
    <script>
        $(".addbrg").click(function(e) {
            e.preventDefault();
            $.ajax({
                type: "GET",
                url: $(this).attr('href'), //data dikirim dari a href
                dataType: "JSON",
                success: function(result) {
                    for (var i = 0; i < result.length; i++) {
                        $("#nama_brgpj").val(result[i].nama_barang);
                        $("#harga_jualpj").val(result[i].harga_jual);
                        $("#id_brg").val(result[i].id_barang);

                    }
                },
                error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
                }
            })
        })
    </script>
</body>

</html>