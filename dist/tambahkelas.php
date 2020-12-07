<div class="container-fluid">
                        <h1 class="mt-4">Tambah Data Kelas</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="?page=index">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="?page=kelas">Data Kelas</a></li>
                            <li class="breadcrumb-item active">Tambah Data Kelas</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Tambah Data Tabel Kelas</div>
                            <div class="card-body">      
                                <form action="" method="POST">
                                    <div class="form-group">
                                        <label>Id kelas</label>
                                        <input type="text" name="id_kelas" class="form-control" placeholder="masukkan id kelas" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Kelas</label>
                                        <input type="text" name="nama_kelas" class="form-control" placeholder="masukkan nama kelas" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Kompetensi Keahlian</label>
                                        <input type="text" name="kompetensi_keahlian" class="form-control" placeholder="masukkan kompetensi keahlian" required>
                                    </div>
                                    <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
                                </form>
                                <?php
                                    $simpan = @$_POST['simpan'];
                                    $id_kelas = @$_POST['id_kelas'];
                                    $nama_kelas = @$_POST['nama_kelas'];
                                    $kompetensi_keahlian = @$_POST['kompetensi_keahlian'];
                                    if ($simpan) {
                                        mysqli_query($db, "insert into kelas (id_kelas, nama_kelas, kompetensi_keahlian) values ('$id_kelas', '$nama_kelas', '$kompetensi_keahlian')") or die ($db->error);  
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