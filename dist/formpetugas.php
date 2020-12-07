<?php
@session_start();
include 'koneksi.php';

if (@$_SESSION['petugas']) {
?>

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Form Petugas</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
<body>
                    <div class="container-fluid">
                        <h1 class="mt-4">Data Pembayaran</h1>
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Data Tabel Pembayaran</div>
                            <div class="card-body">
                                <?php
                                $query = mysqli_query ($db,'SELECT *FROM pembayaran');
                                $jumlah =mysqli_num_rows($query);

                                ?>
                                  <button class="btn btn-danger">Jumlah Data <span class="badge badge-light"> <?php echo $jumlah; ?></span></button>
                            <a class="btn btn-info" href="tambahpembayaran2.php" >
                                <span class="glyphicon glyphicon-plus">Tambah Data </span>
                            </a>
                            <a class="btn btn-primary float-right" href="logout.php">Logout</a>
                                <div class="table-responsive">
                                   <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Id Pembayaran</th>
                                                <th>Id Petugas</th>
                                                <th>NISN</th>
                                                <th>Tanggal Bayar</th>
                                                <th>Bulan Bayar</th>
                                                <th>Tahun Bayar</th>
                                                <th>Id SPP</th>
                                                <th>Jumlah Bayar</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Id Pembayaran</th>
                                                <th>Id Petugas</th>
                                                <th>NISN</th>
                                                <th>Tanggal Bayar</th>
                                                <th>Bulan Bayar</th>
                                                <th>Tahun Bayar</th>
                                                <th>Id SPP</th>
                                                <th>Jumlah Bayar</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                           <?php
                                            $count = 0;
                                            $row = show("pembayaran");
                                            foreach ($row as $data) {
                                            $count++;
                                            ?>
                                            <tr>
                                                <th><?php echo $count; ?></th>
                                                <td><?php echo $data['id_pembayaran']; ?></td>
                                                <td><?php echo $data['id_petugas']; ?></td>
                                                <td><?php echo $data['nisn']; ?></td>
                                                <td><?php echo $data['tgl_bayar']; ?></td>
                                                <td><?php echo $data['bulan_bayar']; ?></td>
                                                <td><?php echo $data['tahun_bayar']; ?></td>
                                                <td><?php echo $data['id_spp']; ?></td>
                                                <td><?php echo $data['jumlah_bayar']; ?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

</body>
</html>

<?php
} else {
	header('location: login.php');
}
?>