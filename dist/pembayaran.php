                    <div class="container-fluid">
                        <h1 class="mt-4">Data Pembayaran</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="?page=index">Dashboard</a></li>
                            <li class="breadcrumb-item active">Data Pembayaran</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Data Tabel Pembayaran</div>
                            <div class="card-body">
                                <?php
                                $query = mysqli_query ($db,'SELECT *FROM pembayaran');
                                $jumlah =mysqli_num_rows($query);

                                ?>
                                  <button class="btn btn-danger">Jumlah Data <span class="badge badge-light"> <?php echo $jumlah; ?></span></button>
                            <a class="btn btn-info" href="?page=tambahpembayaran" >
                                <span class="glyphicon glyphicon-plus">Tambah Data </span>
                            </a>
                            <button class="btn btn-success" name="cetak" id="cetak">cetak</button>
                            <script type="text/javascript">
                            cetak.onclick = function() {window.print();}
                            </script>
                                <div class="table-responsive">
                                   <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Id Pembayaran</th>
                                                <th>Id Petugas</th>
                                                <th>NISN</th>
                                                <th>Tanggal Bayar</th>
                                                <th>Bulan Bayar</th>
                                                <th>Tahun Bayar</th>
                                                <th>Id SPP</th>
                                                <th>Jumlah Bayar</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Id Pembayaran</th>
                                                <th>Id Petugas</th>
                                                <th>NISN</th>
                                                <th>Tanggal Bayar</th>
                                                <th>Bulan Bayar</th>
                                                <th>Tahun Bayar</th>
                                                <th>Id SPP</th>
                                                <th>Jumlah Bayar</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                           <?php
                                            $count = 0;
                                            $row = show("pembayaran");
                                            if ($row == false) {
                                                ?>
                                                <tr>
                                                    <td colspan="9" align="center">data kosong</td>
                                                </tr>
                                                <?php
                                            } else {
                                            foreach ($row as $data) {
                                            $count++;
                                            ?>
                                            <tr>
                                                <th><?php echo $count; ?></th>
                                                <td><?php echo $data['id_pembayaran']; ?></td>
                                                <td><?php echo $data['id_petugas']; ?></td>
                                                <td><?php echo $data['nisn']; ?></td>
                                                <td><?php echo $data['tgl_bayar']; ?></td>
                                                <td><?php echo $data['bulan_bayar']; ?></td>
                                                <td><?php echo $data['tahun_bayar']; ?></td>
                                                <td><?php echo $data['id_spp']; ?></td>
                                                <td><?php echo $data['jumlah_bayar']; ?></td>
                                                <td>
                                                    <a class="badge badge-success" href="?page=editpembayaran&id_pembayaran=<?php echo $data['id_pembayaran']; ?>">Edit</a>
                                                    <a onclick="return confirm('Yakin ingin menghapus data ini??');" class="badge badge-danger" href="?page=hapuspembayaran&id_pembayaran=<?php echo $data['id_pembayaran']; ?>">Hapus</a>
                                                </td>
                                            </tr>
                                            <?php } } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
