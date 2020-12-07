                    <div class="container-fluid">
                        <h1 class="mt-4">Data Petugas</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="?page=index">Dashboard</a></li>
                            <li class="breadcrumb-item active">Data Petugas</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Data Tabel Petugas</div>
                            <div class="card-body">
                                <?php
                                $query = mysqli_query ($db,'SELECT *FROM petugas');
                                $jumlah =mysqli_num_rows($query);

                                ?>
                                  <button class="btn btn-danger">Jumlah Data <span class="badge badge-light"> <?php echo $jumlah; ?></span></button>
                            <a class="btn btn-info" href="?page=tambahpetugas" >
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
                                                <th>Id Petugas</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Nama Petugas</th>
                                                <th>Level</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Id Petugas</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Nama Petugas</th>
                                                <th>Level</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                           <?php
                                            $count = 0;
                                            $row = show("petugas");
                                            foreach ($row as $data) {
                                            $count++;
                                            ?>
                                            <tr>
                                                <th><?php echo $count; ?></th>
                                                <td><?php echo $data['id_petugas']; ?></td>
                                                <td><?php echo $data['username']; ?></td>
                                                <td><?php echo $data['password']; ?></td>
                                                <td><?php echo $data['nama_petugas']; ?></td>
                                                <td><?php echo $data['level']; ?></td>
                                                <td>
                                                    <a class="badge badge-success" href="?page=editpetugas&id_petugas=<?php echo $data['id_petugas']; ?>">Edit</a>
                                                    <a onclick="return confirm('Yakin ingin menghapus data ini??');" class="badge badge-danger" href="?page=hapuspetugas&id_petugas=<?php echo $data['id_petugas']; ?>">Hapus</a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
