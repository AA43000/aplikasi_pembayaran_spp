<div class="container-fluid">
                        <h1 class="mt-4">Tambah Data Petugas</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="?page=index">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="?page=petugas">Data Petugas</a></li>
                            <li class="breadcrumb-item active">Tambah Data Petugas</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Tambah Data Tabel Petugas</div>
                            <div class="card-body">      
                                <form action="" method="POST">
                                    <div class="form-group">
                                        <label>Id Petugas</label>
                                        <input type="text" name="id_petugas" class="form-control" placeholder="masukkan id petugas" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" name="username" class="form-control" placeholder="masukkan username" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="text" name="password" class="form-control" placeholder="masukkan password" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Petugas</label>
                                        <input type="text" name="nama_petugas" class="form-control" placeholder="masukkan nama petugas" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Level</label>
                                        <select class="form-control" name="level">
                                        <option>----</option>
                                        <option value="admin">admin</option>
                                        <option value="petugas">petugas</option>
                                    </select>
                                    </div>
                                    <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
                                </form>
                                <?php
                                    $simpan = @$_POST['simpan'];
                                    $id_petugas = @$_POST['id_petugas'];
                                    $username = @$_POST['username'];
                                    $password = @$_POST['password'];
                                    $nama_petugas = @$_POST['nama_petugas'];
                                    $level = @$_POST['level'];
                                    if ($simpan) {
                                        mysqli_query($db, "insert into petugas (id_petugas, username, password, nama_petugas, level) value ('$id_petugas', '$username', '$password', '$nama_petugas', '$level')") or die ($db->error);
                                        ?>
                                        <script type="text/javascript">
                                        window.location.href = 'layout.php?page=petugas';
                                        </script>
                                        <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </div>