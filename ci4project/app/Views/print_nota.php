<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <title><?= $title; ?></title>
</head>

<body style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
    <div class="container">
        <!-- table header judul dll -->
        <table class="mb-3 table table-borderless" style="width: 100%;">
            <tr>
                <td>
                    <h6>Bengkel Jaya</h6>
                </td>
                <td width="30%">
                    <h6>Nota Penjualan & Service</h6>
                </td>
                <td> </td>
            </tr>

        </table>
        <table class="mb-3 table table-borderless">
            <tr>
                <?php foreach ($cust as $cst) :
                    $nama = $cst['nama_cus'];
                    $hp = $cst['telp'];
                    $alamat = $cst['alamat_cus'];
                    $nopol = $cst['no_pol'];
                    $merk = $cst['merk'];
                    $tipe = $cst['tipe']; ?>

                <?php endforeach; ?>
                <?php foreach ($detail as $d) :
                    $inv = $d['invoice'];
                    $keluhan = $d['keluhan'];
                ?>

                <?php endforeach; ?>
                <td>Invoice: <?= $inv; ?><br>
                    Customer: <?= $nama; ?><br>
                    Hp: <?= $hp; ?><br>
                    Alamat: <?= $alamat; ?><br>

                </td>
                <td>
                    Detail Kendaraan :<br>
                    No.Pol: <?= $nopol; ?><br>
                    Merk: <?= $merk; ?><br>
                    Tipe: <?= $tipe; ?><br>
                </td>
            </tr>
            <tr>
                <td>Keluhan: <?= $keluhan; ?></td>
            </tr>

        </table>
        <table class="table">
            <thead class=" table-light">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col" width="">Harga (Rp.)</th>
                    <th scope="col" width="2%" class="text-center">Jumlah</th>
                    <th scope="col" width="">Subtotal (Rp.)</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($detail as $nota) :
                    $created = $nota['created_at']; ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $nota['nama_barang']; ?></td>
                        <td><?= $nota['harga_trx']; ?></td>
                        <td align="center"><?= $nota['qty_trx']; ?></td>
                        <td><?= $nota['harga_totaltrx']; ?></td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
            <tfoot class="table-light">
                <tr>
                    <td colspan="4">
                        <div class="total" style="float: right;">
                            <h6>Grand Total (Rp) :</h6>
                        </div>
                    </td>
                    <td>
                        <?php foreach ($gtotal as $total) : ?>
                            <?= number_format($total['harga_totaltrx']); ?>
                        <?php endforeach; ?>
                    </td>
                </tr>
            </tfoot>

        </table>
        <table class="table table-borderless" style="font-size: 12px;">
            <tr>
                <?php foreach ($adm as $a) : $admin = $a['nama_user'] ?> <?php endforeach; ?>
                <td style="float: right;">
                    <p>created at: <?= $created; ?> , printed by: <?= $admin; ?></p>
                </td>
            </tr>

        </table>

    </div>
</body>
<script type="text/javascript">
    window.print();
</script>

</html>