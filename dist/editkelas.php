<?php
$id_kelas = @$_GET['id_kelas'];
$data = show("kelas", "id_kelas = '$id_kelas'");
?>

<div class="container-fluid">
                        <h1 class="mt-4">Edit Data SPP</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="?page=index">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="?page=kelas">Data Kelas</a></li>
                            <li class="breadcrumb-item active">Edit Data Kelas</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Edit Data Tabel Kelas</div>
                            <div class="card-body">      
                               <form action="" method="POST">
                                    <div class="form-group">
                                        <label>Id kelas</label>
                                        <input type="text" name="id_kelas" class="form-control" value="<?php echo $data[0]['id_kelas']; ?>" placeholder="masukkan id kelas" readonly="readonly" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Kelas</label>
                                        <input type="text" name="nama_kelas" class="form-control" value="<?php echo $data[0]['nama_kelas']; ?>" placeholder="masukkan nama kelas" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Kompetensi Keahlian</label>
                                        <input type="text" name="kompetensi_keahlian" class="form-control" value="<?php echo $data[0]['kompetensi_keahlian']; ?>" placeholder="masukkan kompetensi keahlian" required>
                                    </div>
                                    <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
                                </form>
                                <?php
                                    $simpan = @$_POST['simpan'];
                                    $nama_kelas = @$_POST['nama_kelas'];
                                    $kompetensi_keahlian = @$_POST['kompetensi_keahlian'];
                                    if ($simpan) {
										mysqli_query($db, "update kelas set nama_kelas = '$nama_kelas', kompetensi_keahlian = '$kompetensi_keahlian' where id_kelas = '$id_kelas'") or die ($db->error);
										?> 
                                            <script type="text/javascript">
                                            window.location.href= 'layout.php?page=kelas';
                                            </script>
                                        <?php
									}   
                                    
                                ?>
                            </div>
                        </div>
                    </div>