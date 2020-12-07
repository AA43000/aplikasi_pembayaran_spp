<?php
$id_pembayaran = @$_GET['id_pembayaran'];
$data = show("pembayaran", "id_pembayaran = '$id_pembayaran'");
?>

<div class="container-fluid">
                        <h1 class="mt-4">Edit Data Pembayaran</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="?page=index">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="?page=pembayaran">Data Pembayaran</a></li>
                            <li class="breadcrumb-item active">Edit Data Pembayaran</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Edit Data Tabel Pembayaran</div>
                            <div class="card-body">      
                               <form action="" method="post">
                                    <div class="form-group">
                                        <label>Id Pembayaran</label>
                                        <input type="text" name="id_pembayaran" class="form-control" placeholder="masukkan id pembayaran" value="<?php echo $data[0]['id_pembayaran']; ?>" readonly required>
                                    </div>
                                    <div class="form-group">
                                        <label>Id Petugas</label>
                                        <select class="form-control" name="id_petugas">
                                            <option>----</option>
                                            <?php
                                            $row = show("petugas");
                                            foreach ($row as $data1) {
                                            ?>
                                            <option value="<?php echo $data1['id_petugas']; ?>" <?php if ($data[0]['id_petugas'] == $data1['id_petugas']) { echo 'selected'; } ?>><?php echo $data1['id_petugas']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>NISN</label>
                                        <select class="form-control" name="nisn">
                                            <option>----</option>
                                            <?php
                                            $row = show("siswa");
                                            foreach ($row as $data1) {
                                            ?>
                                            <option value="<?php echo $data1['nisn']; ?>" <?php if ($data[0]['nisn'] == $data1['nisn']) { echo 'selected'; } ?>><?php echo $data1['nisn']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Bayar</label>
                                        <input type="date" name="tgl_bayar" class="form-control" placeholder="masukkan tanggal" value="<?php echo $data[0]['tgl_bayar']; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Bulan Bayar</label>
                                        <input type="text" name="bulan_bayar" class="form-control" placeholder="masukkan bulan" value="<?php echo $data[0]['bulan_bayar']; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tahun Bayar</label>
                                        <input type="text" name="tahun_bayar" class="form-control" placeholder="masukkan tahun" value="<?php echo $data[0]['tahun_bayar']; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Id Spp</label>
                                        <select class="form-control" name="id_spp">
                                            <option>----</option>
                                            <?php
                                            $row = show("spp");
                                            foreach ($row as $data1) {
                                            ?>
                                            <option value="<?php echo $data1['id_spp']; ?>" <?php if ($data[0]['id_spp'] == $data1['id_spp']) { echo 'selected';} ?>><?php echo $data1['id_spp']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Jumlah Bayar</label>
                                        <input type="text" name="jumlah_bayar" class="form-control" placeholder="masukkan jumlah" value="<?php echo $data[0]['jumlah_bayar']; ?>" required>
                                    </div>
                                    <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
                                </form>
                                <?php
                                $simpan = @$_POST['simpan'];
                                $id_petugas = @$_POST['id_petugas'];
                                $nisn = @$_POST['nisn'];
                                $tgl_bayar = @$_POST['tgl_bayar'];
                                $bulan_bayar = @$_POST['bulan_bayar'];
                                $tahun_bayar = @$_POST['tahun_bayar'];
                                $id_spp = @$_POST['id_spp'];
                                $jumlah_bayar = @$_POST['jumlah_bayar'];
                                    if ($simpan) {
										mysqli_query($db, "update pembayaran set id_pembayaran = '$id_pembayaran', id_petugas = '$id_petugas', nisn = '$nisn', tgl_bayar = '$tgl_bayar', bulan_bayar = '$bulan_bayar', tahun_bayar = '$tahun_bayar', id_spp = '$id_spp', jumlah_bayar = '$jumlah_bayar' where id_pembayaran = '$id_pembayaran'") or die ($db->error);
										?> 
                                            <script type="text/javascript">
                                            window.location.href= 'layout.php?page=pembayaran';
                                            </script>
                                        <?php
									}   
                                ?>
                            </div>
                        </div>
                    </div>