<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <title>Inbox | Petugas</title>
</head>
<?php
session_start();
include "../config/conn.php";

// if (!isset($_SESSION['id_petugas'])) {

// }

if (!isset($_SESSION['nama'])) {

}
$query = "SELECT * FROM pengaduan";
// echo $query;
$exe = mysqli_query($conn, $query);
?>

<body>
    <form action="../controller/logoutpetugas.php" method="POST">
        <button class="btn btn-danger m-2" style="float: right" type="submit" name="logout">Logout</button>
    </form>
    <br>
    <br>
    <h1 class="display-5 text-center mt-4">Selamat Datang</h1>
    <h2 class="text-danger text-center">
        <?php echo $_SESSION['nama'] ?>
    </h2>
    <h4 class="text-center m-3">Laporan Yang Masuk</h4>
    <div class="table-responsive text-center m-2">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Tanggal</th>
                    <th>NIK</th>
                    <th>Laporan</th>
                    <th>Foto</th>
                    <th>Status</th>
                    <th>Ubah</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = '1';
                while ($data = mysqli_fetch_array($exe)) {
                    ?>

                    <tr>
                        <td>
                            <?= $no++ ?>
                        </td>
                        <td>
                            <?= $data['tanggal_pengaduan'] ?>
                        </td>
                        <td>
                            <?= $data['nik'] ?>
                        </td>
                        <td>
                            <?= $data['isi_laporan'] ?>
                        </td>
                        <td>
                            <img src="../masyarakat/img/<?= $data['foto'] ?>" alt="" srcset="" width="90px">
                        </td>
                        <td>
                            <?= $data['status'] ?>
                        </td>
                        <td>
                            <form action="../controller/selesai.php?id=<?= $data['id_pengaduan'] ?>" method="POST">
                                <button type="button" name="submit"
                                    class="btn btn-<?= ($data['status'] == 0) ? 'secondary' : 'success' ?> m-2 <?= ($data['status'] == 0) ? '' : 'disabled' ?>"><a
                                        href="../controller/selesai.php?id=<?= $data['id_pengaduan'] ?>"
                                        class="text-decoration-none text-white">
                                        <?= ($data['status'] == 0) ? 'proses' : 'selesai' ?>
                                    </a></button>
                            </form>
                            <a href="tanggapan.php?pengaduanId=<?= $data['id_pengaduan'] ?>" class="btn btn-success m-1"
                                role="button" name="tindak">Tindak</a>
                        </td>
                    </tr>

                    <?php
                }
                ?>

            </tbody>
        </table>
    </div>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>

</html>