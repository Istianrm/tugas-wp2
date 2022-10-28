                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Buku Perpustakaan</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Judul</th>
                                            <th>Pengarang</th>
                                            <th>Penerbit</th>
                                            <th>Tahun Terbit</th>
                                            <th>Stok</th>
                                            <th>Buku Pinjam</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Judul</th>
                                            <th>Pengarang</th>
                                            <th>Penerbit</th>
                                            <th>Tahun Terbit</th>
                                            <th>Stok</th>
                                            <th>Buku Pinjam</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach ($this->ModelBuku->getBuku() as $data) : ?>
                                            <tr>
                                                <td><?= $data["judul_buku"]; ?></td>
                                                <td><?= $data["pengarang"]; ?></td>
                                                <td><?= $data["penerbit"]; ?></td>
                                                <td><?= $data["tahun_terbit"]; ?></td>
                                                <td><?= $data["stok"]; ?></td>
                                                <td><?= $data["dipinjam"]; ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->