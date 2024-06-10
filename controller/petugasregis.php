<?php

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
    echo "<script>alert('Registrasi BERHASIL!'); document.location.href='../petugas/loginPetugas.php'</script>";

} else {
    echo "<script>alert('Registrasi GAGAL!'); document.location.href='../petugas/registrasi.php'</script>";
}
?>