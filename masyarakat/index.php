<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <title>Home | Masyarakat</title>
</head>
<?php
session_start();
include "../config/conn.php";

$nik = $_SESSION['nik'];
$nama = $_SESSION['nama'];
$query = "SELECT * FROM masyarakat WHERE nik = $nik";
// echo $query;
$exe = mysqli_query($conn, $query);


$query2 = "SELECT * FROM pengaduan WHERE nik = $nik";
// echo $query2;
$exe2 = mysqli_query($conn, $query2);
?>

<body>
    <marquee behavior="" direction="" class="display-5 bg-info text-dark pb-1">Selamat Datang di Aplikasi Pelaporan dan
        Pengaduan Masyarakat</marquee>
        <form action="../controller/logoutpetugas.php" method="POST">
            <button class="btn btn-danger m-2" style="float: left" type="submit" name="logout">Logout</button>
        </form>
        <h1 class="display-6 text-center">Halo,
            <?php echo $nama ?>
        </h1>
    <div class="row m-4">
        <div class="col-md-4 text-center">
            <!-- <h3 class="text-center">Registrasi</h3> -->
            <!-- <div class="card">
                <div class="card-body">
                    <form action="../controller/regisconn.php" method="POST" class="m-5">
                        <label for="">NIK : </label>
                        <input type="text" class="form-control rounded-pill" placeholder="Masukkan NIK" name="nik">
                        <br>
                        <label for="">Nama : </label>
                        <input type="text" class="form-control rounded-pill" placeholder="Masukkan Nama" name="nama">
                        <br>
                        <label for="">User Name : </label>
                        <input type="text" class="form-control rounded-pill" placeholder="Masukkan Username"
                            name="username">
                        <br>
                        <label for="">Password : </label>
                        <input type="password" class="form-control rounded-pill" placeholder="Masukkan Password"
                            name="pass">
                        <br>
                        <label for="">Nomor Telfon : </label>
                        <input type="text" class="form-control rounded-pill" placeholder="Masukkan No.Telp" name="telp">
                        <br>
                        <input type="submit" value="Registrasi" class="btn btn-primary form-control rounded-pill"
                            name="regis">
                    </form>
                </div>
            </div> -->
            <div class="bg-info p-2 mb-4 rounded text-light">
                <h3>Edukasi Masyarakat</h3>
            </div>
            <div class="card mb-5">
                <div class="card-body">
                    <h4 class="card-title">Apa yang Dimaksud Pengaduan Masyarakat?</h4>
                    <p class="card-text">Pengaduan Masyarakat adalah pengawasan yang dilakukan oleh masyarakat yang
                        disampaikan secara lisan atau tertulis, berupa sumbangan pikiran, saran, gagasan, keluhan, atau
                        pengaduan yang bersifat membangun.</p>
                </div>
            </div>
            <div class="card mb-5">
                <div class="card-body">
                    <h4 class="card-title">Fungsi Pengaduan Masalah dalam Masyarakat</h4>
                    <p class="card-text">Memperkuat mekanisme pengendalian dan pembinaan hakim dan pegawai pengadilan.
                        Memperkuat mekanisme pengawasan di lingkungan pengadilan. Memperkuat fungsi pertanggungjawaban
                        Mahkamah Agung dan pengadilan kepada masyarakat.</p>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card row mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="../assets/csimage.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Kami Siap Melayani 24 jam</h5>
                            <p class="card-text">Laporakan Pengaduan Anda Pada Kami, Kapanpun, Dimanapun.</p>
                            <a href="laporan.php" class="btn btn-primary rounded-pill form-control" role="button">Buat
                                Laporan</a>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="text-center">Laporan Anda</h4>
            <table class="table text-center">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Tanggal Pengaduan</th>
                        <th>NIK</th>
                        <th>Isi Laporan</th>
                        <th>Foto</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = '1';
                    while ($data = mysqli_fetch_array($exe2)) {

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
                        </tr>
                        <?php

                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>

</html>