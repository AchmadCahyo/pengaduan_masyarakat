<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <title>Registrasi Admin</title>
</head>

<body>
    <div class="container">
        <div class="border border-dark rounded m-2">
            <h1 class="display-6 text-center mt-3">Registrasi Admin dan Petugas</h1>
            <form action="../controller/regisadminconn.php" method="POST" class="m-5">
                <label for="" class="fw-bold">Nama : </label>
                <input type="text" class="form-control rounded-pill" placeholder="Masukkan Nama" name="nama">
                <br>
                <label for="" class="fw-bold">User Name : </label>
                <input type="text" class="form-control rounded-pill" placeholder="Masukkan Username" name="username">
                <br>
                <label for="" class="fw-bold">Password : </label>
                <input type="password" class="form-control rounded-pill" placeholder="Masukkan Password" name="pass">
                <br>
                <label for="" class="fw-bold">Nomor Telfon : </label>
                <input type="number" class="form-control rounded-pill" placeholder="Masukkan No.Telp" name="telp">
                <br>
                <!-- <input type="hidden" name="level" value="admin"> -->
                <label for="" class="fw-bold">Level : </label>
                <select name="level" id="" class="form-select rounded-pill">
                    <option selected disabled>Silahkan Pilih Opsi Di Bawah Ini</option>
                    <option value="admin">Admin</option>
                    <option value="petugas">Petugas</option>
                </select>
                <br>
                <input type="submit" value="Registrasi" class="btn btn-primary form-control rounded-pill" name="regis">
            </form>
        </div>
    </div>

    <script src="../assets/js/bootstrap.min.js"></script>
</body>

</html>