<?php
session_start();
include "../config/conn.php";

if(isset($_SESSION['id_petugas'])) {
    
}

if(isset($_SESSION['nama'])) {

}

if(isset($_SESSION['nik'])) {

}

if (isset($_POST['masuk'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['pass']);

    $query = "SELECT * FROM petugas WHERE username='$username' AND password='$password'";
    // echo $query;
    $exe = mysqli_query($conn, $query);

    $query2 = "SELECT * FROM masyarakat WHERE username='$username' AND password='$password'";
    $exe2 = mysqli_query($conn, $query2);


    if ($exe->num_rows > 0) {
        $row = mysqli_fetch_assoc($exe);
        $_SESSION['id_petugas'] = $row['id_petugas'];
        $_SESSION['nama'] = $row['nama'];

        if ($row['level'] == "admin") {
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "admin";
            header("location: ../petugas/admin.php");

        } else if ($row['level'] == "petugas") {
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "petugas";
            header("location: ../petugas/inbox.php");

        } else {
            echo "Gagal Login";
        }

    } else{
        echo "Gagal Login";
    }

    if ($exe2->num_rows > 0) {
        $row2 = mysqli_fetch_assoc($exe2);
        $_SESSION['nama'] = $row2['nama'];
        $_SESSION['nik'] = $row2['nik'];
        header("location: ../masyarakat/index.php");

    } else {
        echo "";
    }




    // if ($exe) {
    //     echo "<script>alert('Login BERHASIL!'); document.location.href='../petugas/inbox.php'</script>";

    // } else {
    //     echo "<script>alert('Login GAGAL!'); document.location.href='../petugas/loginPetugas.php'</script>";
    // }
}
?>