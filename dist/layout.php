<?php
@session_start();
include 'koneksi.php';
if (@$_SESSION['admin']) {
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SPP ID</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="css/icon.css">
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="#">SPP ID</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            ><!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">cari</button>
                    </div>
                </div>
            </form> 
            <a class="btn bg-light" href="logout.php">Logout</a>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="?page=index"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard</a>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="?page=spp">Data Spp</a>
                            <a class="nav-link" href="?page=kelas">Data Kelas</a>
                            <a class="nav-link" href="?page=petugas">Data Petugas</a>
                            <a class="nav-link" href="?page=siswa">Data Siswa</a>
                            <a class="nav-link" href="?page=pembayaran">Data Pembayaran</a>
                            <a class="nav-link" href="?page=pesan">Data Pesan</a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Admin
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    
                    <?php
                        $page=@$_GET['page'];
                        if ($page=="index") {
                            include 'index.php';
                        } else if ($page=="spp") {
                            include 'spp.php';
                        } else if ($page=="kelas") {
                            include 'kelas.php';
                        } else if ($page=="petugas") {
                            include 'petugas.php';
                        } else if ($page=="siswa") {
                            include 'siswa.php';
                        } else if ($page=="pembayaran") {
                            include 'pembayaran.php';
                        } else if ($page=="pesan") {
                            include 'pesan.php';
                        }
                        else if ($page=="tambahspp") {
                            include 'tambahspp.php';
                        } else if ($page=="tambahkelas") {
                            include 'tambahkelas.php';
                        } else if ($page=="tambahpetugas") {
                            include 'tambahpetugas.php';
                        } else if ($page=="tambahsiswa") {
                            include 'tambahsiswa.php';
                        } else if ($page=="tambahpembayaran") {
                            include 'tambahpembayaran.php';
                        }
                        else if ($page=="editspp") {
                            include 'editspp.php';
                        } else if ($page=="editkelas") {
                            include 'editkelas.php';
                        } else if ($page=="editpetugas") {
                            include 'editpetugas.php';
                        } else if ($page=="editsiswa") {
                            include 'editsiswa.php';
                        } else if ($page=="editpembayaran") {
                            include 'editpembayaran.php';
                        }
                        else if ($page=="hapusspp") {
                            $id_spp = @$_GET['id_spp'];
                            mysqli_query($db, "delete from spp where id_spp = '$id_spp'") or die ($db->error);
                            header('location: ?page=spp');
                        } else if ($page=="hapuskelas") {
                            $id_kelas = @$_GET['id_kelas'];
                            mysqli_query($db, "delete from kelas where id_kelas = '$id_kelas'") or die ($db->error);
                            header('location: ?page=kelas');
                        } else if ($page=="hapuspetugas") {
                            $id_petugas = @$_GET['id_petugas'];
                            mysqli_query($db, "delete from petugas where id_petugas = '$id_petugas'") or die ($db->error);
                            header('location: ?page=petugas');
                        } else if ($page=="hapussiswa") {
                            $nisn = @$_GET['nisn'];
                            mysqli_query($db, "delete from siswa where nisn = '$nisn'") or die ($db->error);
                            header('location: ?page=siswa');
                        } else if ($page=="hapuspembayaran") {
                            $id_pembayaran = @$_GET['id_pembayaran'];
                            mysqli_query(  $db, "delete from pembayaran where id_pembayaran = '$id_pembayaran'") or die ($db->error);
                            header('location: ?page=pembayaran');
                        } else if ($page=="hapuspesan") {
                            $id_pesan = @$_GET['id_pesan'];
                            mysqli_query($db, "delete from pesan where id_pesan = '$id_pesan'") or die ($db->error);
                            header('location: ?page=pesan');
                        }
                    ?>

                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Ahmad Zaaeni Mubarok 2019</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>

<?php
} else {
    header('location: login.php');
}
?>