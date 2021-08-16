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

    <!-- enable function starup -->
    <script>
        $(document).ready(function() {
            loadlistpj();

        });
    </script>

    <!-- script ganti jenis transaksi -->
    <script>
        $("#penjualan").css("display", "none");
        $(".tbl_pj").css("display", "none");
        $("#btnpj").css("display", "none");
        $(".input_buy").css("display", "none");
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
                $(".tbl_pj").attr("style", "visibility: visible");
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
    <!-- add nama barang dari modal ke inputan service-->
    <script>
        $(".addbrg_srv").click(function(e) {
            e.preventDefault();
            $.ajax({
                type: "GET",
                url: $(this).attr('href'), //data dikirim dari a href
                dataType: "JSON",
                success: function(result) {
                    for (var i = 0; i < result.length; i++) {
                        $("#barang_service").val(result[i].nama_barang);
                        $("#harga_service").val(result[i].harga_jual);
                        $("#id_brgservice").val(result[i].id_barang);

                    }
                },
                error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
                }
            })
        })
    </script>

    <!-- input name user penjualan  -->
    <script>
        $("#cust").keyup(function() {
            var inv = $(this).val();
            $.ajax({
                type: 'POST',
                url: '<?= base_url(); ?>/UserController/showcust',
                dataType: "JSON",
                data: {
                    id: inv
                },
                success: function(result) {
                    for (var i = 0; i < result.length; i++) {
                        // console.log(result[i].telp)
                        $("#telppj").val(result[i].telp);
                        $("#alamat").val(result[i].alamat_cus);
                        $("#idcust").val(result[i].id_cus);

                    }

                },
                error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
                }
            });


        })
    </script>
    <!-- input name user service  -->
    <script>
        $("#customer").keyup(function() {
            var inv = $(this).val();
            $.ajax({
                type: 'POST',
                url: '<?= base_url(); ?>/UserController/showcust',
                dataType: "JSON",
                data: {
                    id: inv
                },
                success: function(result) {
                    for (var i = 0; i < result.length; i++) {
                        // console.log(result[i].telp)
                        $("#idpelanggan").val(result[i].id_cus);
                        $("#telp_srv").val(result[i].telp);
                        $("#alamat_srv").val(result[i].alamat_cus);
                        $("#nopol_srv").val(result[i].no_pol);
                        $("#merk_srv").val(result[i].merk);
                        $("#tipe_srv").val(result[i].tipe);

                    }

                },
                error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
                }
            });


        })
    </script>

    <!-- crud pj into db transaksi -->
    <script>
        $("#btntambahPJ").click(function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: '<?= base_url(); ?>/transaksi/insertPJ',
                data: $("#form_pj").serialize(), //ambil semua data di dalam form
                success: function() {
                    loadlistpj();
                    $('#nama_brgpj').val('');
                    $('#qtypj').val('');
                    $('#harga_jualpj').val('');
                },
                error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
                    // alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
                    alert("input dulu customernya :)")
                }
            })
        })
    </script>
    <!-- crud service into db transaksi -->
    <script>
        $("#btntambah_srv").click(function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: '<?= base_url(); ?>/transaksi/insertSRV',
                data: $("#form_service").serialize(), //ambil semua data di dalam form
                success: function() {
                    loadlistsrv();
                    $('#barang_service').val('');
                    $('#qty_service').val('');
                    $('#harga_service').val('');
                },
                error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
                    // alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
                    alert("pastikan nama customer / mekanik valid!!")
                }
            })
        })
    </script>

    <!-- load list penjualan -->
    <script>
        function loadlistpj() {
            $.ajax({
                    type: "POST",
                    url: '<?= base_url(); ?>/transaksi/showlistPJ',
                    data: 'inv=' + $('input[name=invoicePJ]').val(),
                    dataType: "JSON",
                    success: function(result) {
                        var html = '';
                        for (var i = 0; i < result.length; i++) {
                            var no = parseInt(i);
                            no++;
                            var total = result[i].qty_trx * result[i].harga_trx;
                            html += '<tr>' +
                                '<td>' + no + '</td>' +
                                '<td>' + result[i].nama_barang + '</td>' +
                                '<td>' + result[i].qty_trx + '</td>' +
                                '<td>' + total + '</td>' +
                                '<td><a class="deletelistPJ" href="/transaksi/delete?id=' + result[i].id_trx + '"><button class="btn btn-danger" onclick="deletelistPJ()" type="button"><i class="fas fa-trash"></i></button></td>' +
                                '</tr>';


                        }
                        $('#data_pj').html(html);


                    },
                    error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
                        alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
                    }


                }),
                $.ajax({
                    type: 'POST',
                    url: '<?= base_url(); ?>/transaksi/getSumPricePJ',
                    dataType: "JSON",
                    data: 'inv=' + $('input[name=invoicePJ]').val(),
                    success: function(result) {
                        for (var i = 0; i < result.length; i++) {
                            $("#gtotal").val(result[i].harga_totaltrx);

                        }
                    },
                    error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
                        alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
                    }
                });

        }
    </script>
    <!-- load list service -->
    <script>
        function loadlistsrv() {
            $.ajax({
                    type: "POST",
                    url: '<?= base_url(); ?>/transaksi/showlistPJ',
                    data: 'inv=' + $('input[name=invoicesrv]').val(),
                    dataType: "JSON",
                    success: function(result) {
                        var html = '';
                        for (var i = 0; i < result.length; i++) {
                            var no = parseInt(i);
                            no++;
                            var total = result[i].qty_trx * result[i].harga_trx;
                            html += '<tr>' +
                                '<td>' + no + '</td>' +
                                '<td>' + result[i].nama_barang + '</td>' +
                                '<td>' + result[i].qty_trx + '</td>' +
                                '<td>' + total + '</td>' +
                                '<td><a class="deletelistPJ" href="/transaksi/delete?id=' + result[i].id_trx + '"><button class="btn btn-danger" onclick="deletelistSRV()" type="button"><i class="fas fa-trash"></i></button></td>' +
                                '</tr>';


                        }
                        $('#tbl_service').html(html);


                    },
                    error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
                        alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
                    }


                }),
                $.ajax({
                    type: 'POST',
                    url: '<?= base_url(); ?>/transaksi/getSumPricePJ',
                    dataType: "JSON",
                    data: 'inv=' + $('input[name=invoicesrv]').val(),
                    success: function(result) {
                        for (var i = 0; i < result.length; i++) {
                            $("#gtotal_srv").val(result[i].harga_totaltrx);

                        }
                    },
                    error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
                        alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
                    }
                });

        }
    </script>

    <!-- delete item from load list penjualan -->
    <script>
        function deletelistPJ() {
            $(".deletelistPJ").click(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "GET",
                    url: $(this).attr('href'), //data dikirim dari a href
                    dataType: "JSON",
                    success: function() {
                        loadlistpj();
                    },
                    error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
                        alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
                    }
                })
            })
        }
    </script>
    <!-- delete item from load list service -->
    <script>
        function deletelistSRV() {
            $(".deletelistPJ").click(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "GET",
                    url: $(this).attr('href'), //data dikirim dari a href
                    dataType: "JSON",
                    success: function() {
                        loadlistsrv();
                    },
                    error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
                        alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
                    }
                })
            })
        }
    </script>

    <!-- input nota ke db nota -->
    <script>
        $("#btn_cekoutpj").click(function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: '<?= base_url(); ?>/print_nota/insertnota',
                data: $("#form_pj").serialize(), //ambil semua data di dalam form
                success: function() {
                    modalshow();
                },
                error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
                }
            })
        })
    </script>
    <!-- input nota service ke db nota -->
    <script>
        $("#btnservice").click(function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: '<?= base_url(); ?>/print_nota/insertnotaSRV',
                data: $("#form_service").serialize(), //ambil semua data di dalam form
                success: function() {
                    modalshowSRV();
                },
                error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
                }
            })
        })
    </script>

    <script>
        function modalshow() {
            var myModal = new bootstrap.Modal(document.getElementById('myModal'), {
                keyboard: false

            })
            myModal.show()
        }
    </script>
    <script>
        function modalshowSRV() {
            var myModal = new bootstrap.Modal(document.getElementById('myModalService'), {
                keyboard: false

            })
            myModal.show()
        }
    </script>
    <!-- ################################################################################################################## -->
    <!-- script untuk input pembelian -->
    <!-- script toggle button input -->
    <script>
        $(".btn_buy").click(function(e) {
            e.preventDefault();
            // alert("oiii");
            $(".input_buy").attr("style", "visibility: visible");

        })
    </script>
    <!-- toggle end -->
</body>

</html>