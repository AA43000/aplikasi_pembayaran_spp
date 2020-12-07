<?php
$id_spp = @$_GET['id_spp'];
$data = show("spp", "id_spp = '$id_spp'");
?>

<div class="container-fluid">
                        <h1 class="mt-4">Edit Data SPP</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="?page=index">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="?page=spp">Data SPP</a></li>
                            <li class="breadcrumb-item active">Edit Data SPP</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Edit Data Tabel Siswa</div>
                            <div class="card-body">      
                                <form action="" method="POST">
                                    <div class="form-group">
                                        <label>Id SPP</label>
                                        <input type="text" name="id_spp" class="form-control" placeholder="masukkan id spp" required value="<?php echo $data[0]['id_spp']; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Tahun</label>
                                        <input type="text" name="tahun" class="form-control" placeholder="masukkan tahun" required value="<?php echo $data[0]['tahun']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Nominal</label>
                                        <input type="text" name="nominal" class="form-control" placeholder="masukkan nominal" required value="<?php echo $data[0]['nominal']; ?>">
                                    </div>
                                    <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
                                </form>
                                <?php
                                    $simpan = @$_POST['simpan'];
                                    $id_spp = @$_POST['id_spp'];
                                    $tahun = @$_POST['tahun'];
                                    $nominal = @$_POST['nominal'];
                                    if ($simpan) {
										mysqli_query($db, "update spp set tahun = '$tahun', nominal = '$nominal' where id_spp = '$id_spp'") or die ($db->error);
										?> 
                                            <script type="text/javascript">
                                            window.location.href= 'layout.php?page=spp';
                                            </script>
                                        <?php
									}   
                                    
                                ?>
                            </div>
                        </div>
                    </div>