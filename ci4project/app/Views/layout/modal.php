<!-- modal data penjualan -->
<div class="modal fade" id="exampleModalPenjualan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Daftar Barang</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <table class="table table-bordered table-responsive-sm" id="tbl-barang">
                            <thead class="thead-dark text-center">
                                <tr>
                                    <th scope="col">Kode</th>
                                    <th scope="col">Barang</th>
                                    <th scope="col">Qty</th>
                                    <th scope="col">Buy</th>
                                    <th scope="col">Sell</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="show-brg-data">
                                <?php foreach ($showbarang as $show) : ?>
                                    <tr>

                                        <td class="text-center"><?= $show['id_barang']; ?></td>
                                        <td class="text-center"><?= $show['nama_barang']; ?></td>
                                        <td class="text-center"><?= $show['qty']; ?></td>
                                        <td class="text-center"><?= $show['harga_beli']; ?></td>
                                        <td class="text-center"><?= $show['harga_jual']; ?></td>
                                        <td class="text-center"><a class="addbrg" href="/transaksi/add?id=<?= $show['id_barang']; ?>"><button data-dismiss="modal" class="btn btn-primary"><i class="fas fa-plus"></i></button></a></td>

                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal" onclick="redirect();">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- modal end -->
<!-- modal data service -->
<div class="modal fade" id="exampleModalService" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Daftar Barang</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <table class="table table-bordered table-responsive-sm" id="tbl-barang">
                            <thead class="thead-dark text-center">
                                <tr>
                                    <th scope="col">Kode</th>
                                    <th scope="col">Barang</th>
                                    <th scope="col">Qty</th>
                                    <th scope="col">Buy</th>
                                    <th scope="col">Sell</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="show-brg-data">
                                <?php foreach ($showbarang as $show) : ?>
                                    <tr>

                                        <td class="text-center"><?= $show['id_barang']; ?></td>
                                        <td class="text-center"><?= $show['nama_barang']; ?></td>
                                        <td class="text-center"><?= $show['qty']; ?></td>
                                        <td class="text-center"><?= $show['harga_beli']; ?></td>
                                        <td class="text-center"><?= $show['harga_jual']; ?></td>
                                        <td class="text-center"><a class="addbrg_srv" href="/transaksi/add?id=<?= $show['id_barang']; ?>"><button data-dismiss="modal" class="btn btn-primary"><i class="fas fa-plus"></i></button></a></td>

                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal" onclick="redirect();">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- modal end -->
<!-- modal print -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cetak Nota ?</h5>

            </div>
            <div class="modal-body">
                <div class="print" style="margin-left:27%;">
                    <img src="/adminlte_asset/asset/img/print.gif" alt="print">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="location.href='/transaksi/service'">Close</button>
                <a href="/print_nota/invoice?id=INV/<?= date('Y'); ?>/<?= $autoinvpj; ?>" target="_blank"><button type="submit" class="btn btn-primary">Print</button></a>
            </div>
        </div>
    </div>
</div>
<!-- end print -->
<!-- modal print service -->
<div class="modal fade" id="myModalService" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cetak Nota ?</h5>

            </div>
            <div class="modal-body">
                <div class="print" style="margin-left:27%;">
                    <img src="/adminlte_asset/asset/img/print.gif" alt="print">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="location.href='/transaksi/service'">Close</button>
                <a href="/print_nota/service?id=SRV/<?= date('Y'); ?>/<?= $autoinvpj; ?>" target="_blank"><button type="submit" class="btn btn-primary">Print</button></a>
            </div>
        </div>
    </div>
</div>
<!-- end print -->

<!-- modal daftar trx -->
<div class="modal fade" id="DaftarTransaksi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Daftar Transaksi</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-service" role="tab" aria-controls="pills-service" aria-selected="true">Service</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-prenjualan" role="tab" aria-controls="pills-prenjualan" aria-selected="false">Penjualan</a>
                            </li>

                        </ul>

                        <div class="tab-content" id="pills-tabContent">
                            <!-- content daftar service -->
                            <div class="tab-pane fade show active" id="pills-service" role="tabpanel" aria-labelledby="pills-home-tab">

                                <table class="table table-bordered table-responsive-sm" id="tbl-barang">
                                    <thead class="thead-dark text-center">
                                        <tr>
                                            <th scope="col">Invoice</th>
                                            <!-- <th scope="col">Mekanik</th> -->
                                            <th scope="col">Customer</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="show-brg-data">
                                        <?php foreach ($showallservice as $srv) : ?>
                                            <tr>

                                                <td class="text-center"><?= $srv['invoice']; ?></td>

                                                <td class="text-center"><?= $srv['nama_cus']; ?></td>
                                                <td class="text-center">
                                                    <a href="/print_nota/service?id=<?= $srv['invoice']; ?>" target="_blank"><button class="btn btn-warning"><i class="fas fa-info-circle"></i></button></a>
                                                    <a href="/transaksi/deletelisttrx?id=<?= $srv['invoice']; ?>"><button class="btn btn-danger" type="button" onclick="return confirm('Yakin data akan dihapus?')"><i class=" fas fa-trash"></i></button>
                                                </td>

                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>

                            </div>
                            <!-- end tab service -->

                            <div class="tab-pane fade" id="pills-prenjualan" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <!-- content daftar penjualan -->
                                <table class="table table-bordered table-responsive-sm">
                                    <thead class="thead-dark text-center">
                                        <tr>
                                            <th scope="col">Invoice</th>
                                            <th scope="col">Customer</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="show-brg-data">
                                        <?php foreach ($showallpj as $pj) : ?>
                                            <tr>

                                                <td class="text-center"><?= $pj['invoice']; ?></td>
                                                <td class="text-center"><?= $pj['nama_cus']; ?></td>
                                                <td class="text-center">
                                                    <a href="/print_nota/invoice?id=<?= $pj['invoice']; ?>" target="_blank"><button class="btn btn-warning"><i class="fas fa-info-circle"></i></button></a>
                                                    <a href="/transaksi/deletelisttrx?id=<?= $pj['invoice']; ?>"><button class="btn btn-danger" type="button" onclick="return confirm('Yakin data akan dihapus?')"><i class=" fas fa-trash"></i></button>
                                                </td>

                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                                <!-- end -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal" onclick="redirect();">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- modal end -->