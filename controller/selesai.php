<?php
include "../config/conn.php";
// echo "Chayo";
// if (isset($_POST['submit'])) {
//     $id_pengaduan = $_GET['id'];
//     $query = "UPDATE pengaduan SET status = 'proses' WHERE id_id_pengaduan = $id_pengaduan";
//     echo $query;
//     $exe = mysqli_query($conn, $query);

//     if ($exe) {
//         echo "<script>alert('Update Data BERHASIL!'); document.location.href='../petugas/admin.php'</script>";

//     } else {
//         "<script>alert('Tambah Data BERHASIL!'); document.location.href='../petugas/admin.php'</script>";
//     }
// } else {
//     echo "Gagal";
// }
$id = $_GET['id'];

$query = "update pengaduan set status = 'proses' where id_pengaduan = $id";
echo $query;
$exe = mysqli_query($conn, $query);

if ($exe) {
    echo "<script>alert('Laporan Selesai!'); document.location.href='../petugas/admin.php'</script>";

} else {
    echo "<script>alert('Laporan GAGAL DISELESAIKAN!'); document.location.href='../petugas/admin.php'</script>";
}