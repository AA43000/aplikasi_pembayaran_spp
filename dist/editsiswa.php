<?php
$nisn = @$_GET['nisn'];
$data = show("siswa", "nisn = '$nisn'");
?>

<div class="container-fluid">
                        <h1 class="mt-4">Edit Data Siswa</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="?page=index">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="?page=siswa">Data Siswa</a></li>
                            <li class="breadcrumb-item active">Edit Data Siswa</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Edit Data Tabel Siswa</div>
                            <div class="card-body">      
                               <form action="" method="post">
                                    <div class="form-group">
                                        <label>NISN</label>
                                        <input type="text" name="nisn" class="form-control" placeholder="masukkan nisn" value="<?php echo $data[0]['nisn']; ?>" readonly required>
                                    </div>
                                    <div class="form-group">
                                        <label>NIS</label>
                                        <input type="text" name="nis" class="form-control" placeholder="masukkan nis" value="<?php echo $data[0]['nis']; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" name="nama" class="form-control" placeholder="masukkan nama" value="<?php echo $data[0]['nama']; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Id Kelas</label>
                                        <select class="form-control" name="id_kelas">
                                            <option>----</option>
                                            <?php
                                            $row = show("kelas");
                                            foreach ($row as $data1) {
                                            ?>
                                            <option value="<?php echo $data1['id_kelas']; ?>" <?php if ($data[0]['id_kelas'] == $data1['id_kelas']) { echo 'selected'; } ?>><?php echo $data1['id_kelas']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" name="alamat" class="form-control" placeholder="masukkan alamat" value="<?php echo $data[0]['alamat']; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label>No Telp</label>
                                        <input type="text" name="no_telp" class="form-control" placeholder="masukkan no telp" value="<?php echo $data[0]['no_telp']; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Id Spp</label>
                                        <select class="form-control" name="id_spp">
                                            <option>----</option>
                                            <?php
                                            $row = show("spp");
                                            foreach ($row as $data1) {
                                            ?>
                                            <option value="<?php echo $data1['id_spp']; ?>" <?php if ($data[0]['id_spp'] == $data1['id_spp']) { echo 'selected'; } ?>><?php echo $data1['id_spp']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
                                </form>
                                <?php
                                $simpan = @$_POST['simpan'];
                                $nis = @$_POST['nis'];
                                $nama = @$_POST['nama'];
                                $id_kelas = @$_POST['id_kelas'];
                                $alamat = @$_POST['alamat'];
                                $no_telp = @$_POST['no_telp'];
                                $id_spp = @$_POST['id_spp'];
                                    if ($simpan) {
										mysqli_query($db, "update siswa set nisn = '$nisn', nis = '$nis', nama = '$nama', id_kelas = '$id_kelas', alamat = '$alamat', no_telp = '$no_telp', id_spp = '$id_spp' where nisn = '$nisn'") or die ($db->error);
										?> 
                                            <script type="text/javascript">
                                            window.location.href= 'layout.php?page=siswa';
                                            </script>
                                        <?php
									}   
                                    
                                ?>
                            </div>
                        </div>
                    </div>