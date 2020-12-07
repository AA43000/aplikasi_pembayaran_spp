                    <div class="container-fluid">
                        <h1 class="mt-4">Data Kelas</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="?page=index">Dashboard</a></li>
                            <li class="breadcrumb-item active">Data Kelas</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Data Tabel Kelas</div>
                            <div class="card-body">
                                <?php
                                $query = mysqli_query ($db,'SELECT *FROM kelas');
                                $jumlah =mysqli_num_rows($query);
                                ?>
                                  <button class="btn btn-danger">Jumlah Data <span class="badge badge-light"> <?php echo $jumlah; ?></span></button>
                            <a class="btn btn-info" href="?page=tambahkelas" >
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
                                                <th>Id Kelas</th>
                                                <th>Nama Kelas</th>
                                                <th>Kompetensi Keahlian</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Id Kelas</th>
                                                <th>Nama Kelas</th>
                                                <th>Kompetensi Keahlian</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                           <?php
                                            $count = 0;
                                            $row = show("kelas");
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
                                                <td><?php echo $data['id_kelas']; ?></td>
                                                <td><?php echo $data['nama_kelas']; ?></td>
                                                <td><?php echo $data['kompetensi_keahlian']; ?></td>
                                                <td>
                                                    <a class="badge badge-success" href="?page=editkelas&id_kelas=<?php echo $data['id_kelas']; ?>">Edit</a>
                                                    <a onclick="return confirm('Yakin ingin menghapus data ini??');" class="badge badge-danger" href="?page=hapuskelas&id_kelas=<?php echo $data['id_kelas']; ?>">Hapus</a>
                                                </td>
                                            </tr>
                                            <?php } } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
