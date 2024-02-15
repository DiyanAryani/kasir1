<div class="row">
        <div class="col-lg-12 grid-margin strwtch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card=title">Daftar Barang</h4>
                    <p class="card-description">
                    <!-- Add class <code>.table</code> -->
                        <a href="?page=tambah.barang" title="Tambah Produk"
                            class="btn btn-primary btn-icon-split btn-sm">
                                <span class="icon text-white-50"><i class="fas fa-plus"></i></span>
                                <span class="text">Tambah Produk</span>
                        </a>
                    </p>

                    <div class="table-responsive">
                        <table class="table" id="dataTable" widht="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>foto</th>
                                    <th>Nama Produk</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                    <th>Sisa stok</th>
                                    <th>Pilihan</th>

                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                include("../koneksi/koneksi.php");
                                $no = 1;
                                $sql = $con->query("SELECT * FROM produk");
                                while ($data= $sql->fetch_assoc()) {

                            ?>
                           <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo "<img src='../foto/".$data['foto']."' width='70' height='70'>"; ?></td>
                                <td><?php echo $data['NamaProduk']?></td>
                                <td><?php echo $data['harga']?></td>
                                <td><?php echo $data['Stok']?></td>
                                <td><?= number_format($data['Stok']); ?>
                                <td align="center" widht=12%><a href="" class="badge-primary p-2 title="Edit"><i>
                                <td></td>
                                <td>

                                </td>
                            </tr>
                            <?php } ?>

                            </tbody>
                        </table>