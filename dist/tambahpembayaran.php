                    <div class="container-fluid">
                        <h1 class="mt-4">Tambah Data Pembayaran</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="?page=index">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="?page=pembayaran">Data Pembayaran</a></li>
                            <li class="breadcrumb-item active">Tambah Data Pembayaran</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Tambah Data Tabel Pembayaran</div>
                            <div class="card-body">      
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label>Id Pembayaran</label>
                                        <input type="text" name="id_pembayaran" class="form-control" placeholder="masukkan id pembayaran" required>
                                    </div>
                                    <input type="hidden" value="1" name="id_petugas">
                                    <div class="form-group">
                                        <label>NISN</label>
                                        <select class="form-control" name="nisn">
                                            <option>----</option>
                                            <?php
                                            $row = show("siswa");
                                            foreach ($row as $data) {
                                            ?>
                                            <option value="<?php echo $data['nisn']; ?>"><?php echo $data['nisn']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Bayar</label>
                                        <input type="date" name="tgl_bayar" class="form-control" placeholder="masukkan tanggal" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Bulan Bayar</label>
                                        <select class="form-control" name="bulan_bayar">
                                            <option>--------</option>
                                            <option value="januari">januari</option>
                                            <option value="februari">februari</option>
                                            <option value="maret">maret</option>
                                            <option value="april">april</option>
                                            <option value="mei">mei</option>
                                            <option value="juni">juni</option>
                                            <option value="juli">juli</option>
                                            <option value="agustus">agustus</option>
                                            <option value="september">september</option>
                                            <option value="oktober">oktober</option>
                                            <option value="november">november</option>
                                            <option value="desember">desember</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Tahun Bayar</label>
                                        <input type="text" name="tahun_bayar" class="form-control" placeholder="masukkan tahun" required>
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
                                    <div class="form-group">
                                        <label>Jumlah Bayar</label>
                                        <input type="text" name="jumlah_bayar" class="form-control" placeholder="masukkan jumlah">
                                    </div>
                                    <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
                                </form>
                                <?php
                                $simpan = @$_POST['simpan'];
                                $id_pembayaran = @$_POST['id_pembayaran'];
                                $id_petugas = @$_POST['id_petugas'];
                                $nisn = @$_POST['nisn'];
                                $tgl_bayar = @$_POST['tgl_bayar'];
                                $bulan_bayar = @$_POST['bulan_bayar'];
                                $tahun_bayar = @$_POST['tahun_bayar'];
                                $id_spp = @$_POST['id_spp'];
                                $jumlah_bayar = @$_POST['jumlah_bayar'];

                                if ($simpan) {
                                    mysqli_query($db, "insert into pembayaran (id_pembayaran, id_petugas, nisn, tgl_bayar, bulan_bayar, tahun_bayar, id_spp, jumlah_bayar) values ('$id_pembayaran', '$id_petugas', '$nisn', '$tgl_bayar', '$bulan_bayar', '$tahun_bayar', '$id_spp', '$jumlah_bayar')") or die ($db->error);
                                    ?>
                                        <script type="text/javascript">
                                        window.location.href = 'layout.php?page=pembayaran';
                                        </script>
                                    <?php                    
                                }
                                ?>
                            </div>
                        </div>
                    </div>
