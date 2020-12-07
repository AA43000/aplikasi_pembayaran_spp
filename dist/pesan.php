                    <div class="container-fluid">
                        <h1 class="mt-4">Data Pesan</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="?page=index">Dashboard</a></li>
                            <li class="breadcrumb-item active">Data Pesan</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Data Tabel Pesan</div>
                            <div class="card-body">
                                <?php
                                $query = mysqli_query ($db,'SELECT *FROM pesan');
                                $jumlah =mysqli_num_rows($query);

                                ?>
                                  <button class="btn btn-danger">Jumlah Data <span class="badge badge-light"> <?php echo $jumlah; ?></span></button>
                                  <button class="btn btn-success" name="cetak" id="cetak">cetak</button>
                                    <script type="text/javascript">
                                    cetak.onclick = function() {window.print();}
                                    </script>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Id Pesan</th>
                                                <th>Nama</th>
                                                <th>NISN</th>
                                                <th>Pesan</th>
                                                <th>aksi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Id Pesan</th>
                                                <th>Nama</th>
                                                <th>NISN</th>
                                                <th>Pesan</th>
                                                <th>aksi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                           <?php
                                            $count = 0;
                                            $row = show("pesan");
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
                                                <td><?php echo $data['id_pesan']; ?></td>
                                                <td><?php echo $data['nama']; ?></td>
                                                <td><?php echo $data['nisn']; ?></td>
                                                <td><?php echo $data['pesan']; ?></td>
                                                <td>
                                                    <a onclick="return confirm('Yakin ingin menghapus data ini??');" class="badge badge-danger" href="?page=hapuspesan&id_pesan=<?php echo $data['id_pesan']; ?>">Hapus</a>
                                                </td>
                                            </tr>
                                            <?php } } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
