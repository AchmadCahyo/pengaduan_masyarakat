<?php
include "../config/conn.php";

$tgl = $_REQUEST['ttl'];
$nik = $_REQUEST['nik'];
$laporan = $_REQUEST['laporan'];
$foto = $_REQUEST['file'];
$status = $_REQUEST['status'];

$rand = rand();
$ekstensi = array('png', 'jpg', 'jpeg');
$filename = $_FILES['file']['name'];
$ukuran = $_FILES['file']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if (in_array($ext, $ekstensi)) {
    if ($ukuran < 1044070) {
        $xx = $rand . "_" . $filename;
        $upload = move_uploaded_file($_FILES['file']['tmp_name'], '../masyarakat/img/' . $rand . "_" . $filename);
        if ($upload) {
            $exe = mysqli_query($conn, "INSERT INTO pengaduan VALUES ('', '$tgl', '$nik', '$laporan', '$xx', '$status')");
            // echo $exe;

                echo "<script>alert('Laporan Anda Berhasil Terkirim, Kami Akan Segera Memprosesnya!'); document.location.href='../masyarakat/index.php'</script>";

            } else {
                echo "<script>alert('Laporan Anda Gagal Terkirim! Mohon Coba Lagi!'); document.location.href='../masyarakat/laporan.php'</script>";
        }

    } else {
        header("location:index.php?alert=gagal_ukuran");
    }

} else {
    header("location:../masyarakat/laporan.php?alert=gagal_mengupload");
}







// $query = "INSERT INTO pengaduan VALUES ('', '$tgl', '$nik', '$laporan', '$foto', '$status')";
// // echo $query;
// $exe = mysqli_query($conn, $query);

// if ($exe) {
//     echo "<script>alert('Laporan Anda Berhasil Terkirim, Kami Akan Segera Memprosesnya!'); document.location.href='../masyarakat/index.php'</script>";

// } else {
//     echo "<script>alert('Laporan Anda Gagal Terkirim! Mohon Coba Lagi!'); document.location.href='../masyarakat/laporan.php'</script>";
// }
?>