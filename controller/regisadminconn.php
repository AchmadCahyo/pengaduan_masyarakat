<?php
session_start();
include "../config/conn.php";

$nama = $_REQUEST['nama'];
$username = $_REQUEST['username'];
$password = $_REQUEST['pass'];
$telp = $_REQUEST['telp'];
$level = $_REQUEST['level'];

$query = "INSERT INTO petugas VALUES ('', '$nama', '$username', '$password', '$telp', '$level')";
// echo $query;
$exe = mysqli_query($conn, $query);

if ($exe) {
    echo "<script>alert('Tambah Data BERHASIL!'); document.location.href='../login.php'</script>";

} else {
    echo "<script>alert('Tambah Data GAGAL!'); document.location.href='../regisadmin.php'</script>";
}
?>