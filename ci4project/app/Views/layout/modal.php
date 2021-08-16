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