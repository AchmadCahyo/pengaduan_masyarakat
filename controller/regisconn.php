<?php

include "../config/conn.php";

$nik = $_REQUEST['nik'];
$nama = $_REQUEST['nama'];
$username = $_REQUEST['username'];
$password = $_REQUEST['pass'];
$telp = $_REQUEST['telp'];

$query = "INSERT INTO masyarakat VALUES ('$nik', '$nama', '$username', '$password', '$telp')";
// echo $query;
$exe = mysqli_query($conn, $query);

if ($exe) {
    echo "<script>alert('Tambah Data BERHASIL!'); document.location.href='../masyarakat/index.php'</script>";

} else {
    echo "<script>alert('Tambah Data GAGAL!'); document.location.href='../login.php'</script>";
}
?>