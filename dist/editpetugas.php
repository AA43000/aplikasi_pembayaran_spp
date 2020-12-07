<?php
$id_petugas = @$_GET['id_petugas'];
$data = show("petugas", "id_petugas = '$id_petugas'");
?>

<div class="container-fluid">
                        <h1 class="mt-4">Edit Data Petugas</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="?page=index">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="?page=petugas">Data Petugas</a></li>
                            <li class="breadcrumb-item active">Edit Data Petugas</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Edit Data Tabel Petugas</div>
                            <div class="card-body">      
                               <form action="" method="POST">
                                    <div class="form-group">
                                        <label>Id Petugas</label>
                                        <input type="text" name="id_petugas" class="form-control" placeholder="masukkan id petugas" value="<?php echo $data[0]['id_petugas']; ?>" readonly required>
                                    </div>
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" name="username" class="form-control" placeholder="masukkan username" value="<?php echo $data[0]['username']; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="text" name="password" class="form-control" placeholder="masukkan password" value="<?php echo $data[0]['password']; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Petugas</label>
                                        <input type="text" name="nama_petugas" class="form-control" placeholder="masukkan nama petugas" value="<?php echo $data[0]['nama_petugas']; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Level</label>
                                        <select class="form-control" name="level">
                                        <option>----</option>
                                        <option value="admin" <?php if ($data[0]['level'] == 'admin') { echo 'selected';} ?>>admin</option>
                                        <option value="petugas" <?php if ($data[0]['level'] == 'petugas') { echo 'selected';} ?>>petugas</option>
                                    </select>
                                    </div>
                                    <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
                                </form>
                                <?php
                                    $simpan = @$_POST['simpan'];
                                    $username = @$_POST['username'];
                                    $password = @$_POST['password'];
                                    $nama_petugas = @$_POST['nama_petugas'];
                                    $level = @$_POST['level'];
                                    if ($simpan) {
										mysqli_query($db, "update petugas set username = '$username', password = '$password', nama_petugas = '$nama_petugas', level = '$level' where id_petugas = '$id_petugas'") or die ($db->error);
										?> 
                                            <script type="text/javascript">
                                            window.location.href= 'layout.php?page=petugas';
                                            </script>
                                        <?php
									}   
                                    
                                ?>
                            </div>
                        </div>
                    </div>