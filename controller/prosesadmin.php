<?php
include "../config/conn.php";

$id_pengaduan = $_REQUEST['pengaduan'];
$ttl_tanggapan = $_REQUEST['ttl'];
$tanggapan = $_REQUEST['tanggapan'];
$id_petugas = $_REQUEST['id_petugas'];

$query = "INSERT INTO tanggapan2 VALUES ('', '$id_pengaduan', '$ttl_tanggapan', '$tanggapan', '$id_petugas')";
$update = "UPDATE pengaduan SET status = 'selesai' WHERE id_pengaduan = $id_pengaduan";
// echo $query;
$exe = mysqli_query($conn, $query);
$exe2 = mysqli_query($conn, $update);

if ($exe && $exe2) {
    echo "<script>alert('Tanggapan TERKIRIM!'); document.location.href='../petugas/admin.php'</script>";

} else {
    echo "<script>alert('Tanggaoan GAGAL TERKIRIM!'); document.location.href='../petugas/admin.php'</script>";
}