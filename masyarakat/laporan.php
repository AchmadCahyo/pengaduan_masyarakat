<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<?php
session_start();
include "../config/conn.php";

if (!isset($_SESSION['nik'])) {

}
?>

<body>
    <div class="container">
        <div class="border border-dark rounded m-3">
            <h1 class="display-6 text-center mt-3">Form Pengaduan</h1>
            <form action="../controller/laporconn.php" method="POST" class="m-5" enctype="multipart/form-data">
                <label for="" class="fw-bold">Tanggal Pengaduan : </label>
                <input type="date" class="form-control rounded-pill" name="ttl">
                <br>
                <label for="" class="fw-bold">NIK : </label>
                <input type="number" class="form-control rounded-pill" value="<?php echo $_SESSION['nik'] ?>" name="nik">
                <br>
                <label for="" class="fw-bold">Laporan : </label>
                <textarea name="laporan" id="" cols="10" rows="4" class="form-control rounded"></textarea>
                <br>
                <label for="" class="fw-bold">Masukkan Foto Terkait: </label>
                <input type="file" class="form-control rounded-pill" name="file">
                <br>
                <input type="hidden" class="form-control rounded-pill" name="status" value="0">
                <input type="submit" value="Kirim Laporan" class="btn btn-primary form-control rounded-pill" name="lapor">
            </form>
        </div>    
    </div>

    <script src="../assets/js/bootstrap.min.js"></script>
</body>

</html>