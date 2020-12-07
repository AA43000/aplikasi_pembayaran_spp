<div class="container-fluid">
                        <h1 class="mt-4">Tambah Data SPP</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="?page=index">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="?page=spp">Data SPP</a></li>
                            <li class="breadcrumb-item active">Tambah Data SPP</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Tambah Data Tabel Siswa</div>
                            <div class="card-body">      
                                <form action="" method="POST">
                                    <div class="form-group">
                                        <label>Id SPP</label>
                                        <input type="text" name="id_spp" class="form-control" placeholder="masukkan id spp" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tahun</label>
                                        <input type="text" name="tahun" class="form-control" placeholder="masukkan tahun" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Nominal</label>
                                        <input type="text" name="nominal" class="form-control" placeholder="masukkan nominal" required>
                                    </div>
                                    <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
                                </form>
                                <?php
                                    $simpan = @$_POST['simpan'];
                                    $id_spp = @$_POST['id_spp'];
                                    $tahun = @$_POST['tahun'];
                                    $nominal = @$_POST['nominal'];
                                    if ($simpan) {
                                        mysqli_query($db, "insert into spp (id_spp, tahun, nominal) values ('$id_spp', '$tahun', '$nominal')") or die ($db->error);  
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