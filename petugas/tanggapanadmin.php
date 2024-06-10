<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <title>Tindak Laporan</title>
</head>
<?php
    session_start();
    include "../config/conn.php";

    $id = $_GET['pengaduanId'];

    if (!isset($_SESSION['id_petugas'])) {

    }
?>
<?php

?>
<body>
    <div class="container">
        <div class="border border-dark rounded mt-4">
            <h1 class="display-5 text-center mt-4">Form Tanggapan</h1>
            <form action="../controller/prosesadmin.php" method="POST" class="m-5" enctype="multipart/form-data">
                <label for="" class="fw-bold">Pengaduan : </label>
                <input type="text" class="form-control rounded-pill" name="pengaduan" value="<?php echo $id; ?>">
                <br>
                <label for="" class="fw-bold">Tanggal Tanggapan : </label>
                <input type="date" class="form-control rounded-pill" name="ttl">
                <br>
                <label for="" class="fw-bold">Tanggapan : </label>
                <textarea name="tanggapan" id="" cols="20" rows="8" class="form-control rounded"></textarea>
                <br>
                <label for="" class="fw-bold">ID Petugas : </label>
                <input type="text" class="form-control rounded-pill disabled" name="id_petugas" value="<?php echo $_SESSION['id_petugas'] ?>">
                <br>
                <input type="submit" value="Kirim Tanggapan" class="btn btn-primary form-control rounded-pill" name="tanggap">
            </form>
        </div>
    </div>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>

</html>