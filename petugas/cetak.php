<!-- inner join 3 table menggunakan table tanggapan-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <title>Laporan</title>
</head>
<?php

include "../config/conn.php";

$id = $_GET['pengaduanId'];

$query = "SELECT pengaduan.id_pengaduan, pengaduan.tanggal_pengaduan, tanggapan2.tanggal_tanggapan, pengaduan.nik, pengaduan.isi_laporan, tanggapan2.tanggapan, pengaduan.foto, petugas.nama, pengaduan.status FROM ((pengaduan INNER JOIN tanggapan2 ON pengaduan_id = pengaduan.id_pengaduan) INNER JOIN petugas ON petugas_id = petugas.id_petugas) WHERE id_pengaduan = $id";
// echo $query;
$exe = mysqli_query($conn, $query);

$no = '1';
?>

<body>
    <form action="../controller/logoutpetugas.php" method="POST">
        <button class="btn btn-danger m-2" style="float: right" type="submit" name="logout">Logout</button>
    </form>
    <br>
    <br>
    <h1 class="display-5 text-center mt-4">Hasil Laporan</h1>
    <div class="table-responsive text-center m-2">
        <table class="table table-bordered border-dark">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>ID Pengaduan</th>
                    <th>Tanggal Pengaduan</th>
                    <th>NIK Pelapor</th>
                    <th>Laporan</th>
                    <th>Foto</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($data = mysqli_fetch_array($exe)) {
                    ?>
                    <td>
                        <?= $no++ ?>
                    </td>
                    <td>
                        <?= $data['id_pengaduan'] ?>
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
                    <td><img src="../masyarakat/img/<?= $data['foto'] ?>" alt="" srcset="" width="90px"></td>
                    <td>
                        <?= $data['status'] ?>
                    </td>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <?php

        include "../config/conn.php";

        $id = $_GET['pengaduanId'];

        $query = "SELECT pengaduan.id_pengaduan, pengaduan.tanggal_pengaduan, tanggapan2.tanggal_tanggapan, pengaduan.nik, pengaduan.isi_laporan, tanggapan2.tanggapan, pengaduan.foto, petugas.nama FROM ((pengaduan INNER JOIN tanggapan2 ON pengaduan_id = pengaduan.id_pengaduan) INNER JOIN petugas ON petugas_id = petugas.id_petugas) WHERE id_pengaduan = $id";
        // echo $query;
        $exe = mysqli_query($conn, $query);

        $no = '1';
        ?>
        <br>
        <table class="table table-bordered border-dark">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>ID Pengaduan</th>
                    <th>Tanggal Tanggapan</th>
                    <th>NIK Pelapor</th>
                    <th>Tanggapan</th>
                    <th>Petugas</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($data = mysqli_fetch_array($exe)) {
                    ?>
                    <td>
                        <?= $no++ ?>
                    </td>
                    <td>
                        <?= $data['id_pengaduan'] ?>
                    </td>
                    <td>
                        <?= $data['tanggal_tanggapan'] ?>
                    </td>
                    <td>
                        <?= $data['nik'] ?>
                    </td>
                    <td>
                        <?= $data['tanggapan'] ?>
                    </td>
                    <td>
                        <?= $data['nama'] ?>
                    </td>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <br>
        <button class=" container btn btn-dark form-control rounded-pill" onclick="print()">Cetak Laporan</button>
        <style>
            @media print {
                .btn {
                    display: none;
                }
            }
        </style>
    </div>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>

</html>