                    <div class="container-fluid">
                        <h1 class="mt-4">Tambah Data Siswa</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="?page=index">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="?page=siswa">Data Siswa</a></li>
                            <li class="breadcrumb-item active">Tambah Data Siswa</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Tambah Data Tabel Siswa</div>
                            <div class="card-body">      
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label>NISN</label>
                                        <input type="text" name="nisn" class="form-control" placeholder="masukkan nisn" required>
                                    </div>
                                    <div class="form-group">
                                        <label>NIS</label>
                                        <input type="text" name="nis" class="form-control" placeholder="masukkan nis" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" name="nama" class="form-control" placeholder="masukkan nama" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Id Kelas</label>
                                        <select class="form-control" name="id_kelas">
                                            <option>----</option>
                                            <?php
                                            $row = show("kelas");
                                            foreach ($row as $data) {
                                            ?>
                                            <option value="<?php echo $data['id_kelas']; ?>"><?php echo $data['id_kelas']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" name="alamat" class="form-control" placeholder="masukkan alamat" required>
                                    </div>
                                    <div class="form-group">
                                        <label>No Telp</label>
                                        <input type="text" name="no_telp" class="form-control" placeholder="masukkan no telp" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Id Spp</label>
                                        <select class="form-control" name="id_spp">
                                            <option>----</option>
                                            <?php
                                            $row = show("spp");
                                            foreach ($row as $data) {
                                            ?>
                                            <option value="<?php echo $data['id_spp']; ?>"><?php echo $data['id_spp']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
                                </form>
                                <?php
                                $simpan = @$_POST['simpan'];
                                $nisn = @$_POST['nisn'];
                                $nis = @$_POST['nis'];
                                $nama = @$_POST['nama'];
                                $id_kelas = @$_POST['id_kelas'];
                                $alamat = @$_POST['alamat'];
                                $no_telp = @$_POST['no_telp'];
                                $id_spp = @$_POST['id_spp'];

                                if ($simpan) {
                                    mysqli_query($db, "insert into siswa (nisn, nis, nama, id_kelas, alamat, no_telp, id_spp) values ('$nisn', '$nis', '$nama', '$id_kelas', '$alamat', '$no_telp', '$id_spp')") or die ($db->error);
                                    ?>
                                        <script type="text/javascript">
                                        window.location.href = 'layout.php?page=siswa';
                                        </script>
                                    <?php                    
                                }
                                ?>
                            </div>
                        </div>
                    </div>
