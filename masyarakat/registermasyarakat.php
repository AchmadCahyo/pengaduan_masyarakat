<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="card mt-1">
            <div class="card-body border border-dark rounded">
                <h4 class="card-title text-center">Registrasi Masyarakat</h4>
                <form action="controller/regisconn.php" method="POST" class="m-5">
                    <label for="" class="fw-bold">NIK : </label>
                    <input type="number" class="form-control rounded-pill" placeholder="Masukkan NIK" name="nik">
                    <br>
                    <label for="" class="fw-bold">Nama : </label>
                    <input type="text" class="form-control rounded-pill" placeholder="Masukkan Nama" name="nama">
                    <br>
                    <label for="" class="fw-bold">User Name : </label>
                    <input type="text" class="form-control rounded-pill" placeholder="Masukkan Username"
                        name="username">
                    <br>
                    <label for="" class="fw-bold">Password : </label>
                    <input type="password" class="form-control rounded-pill" placeholder="Masukkan Password"
                        name="pass">
                    <br>
                    <label for="" class="fw-bold">Nomor Telfon : </label>
                    <input type="number" class="form-control rounded-pill" placeholder="Masukkan No.Telp" name="telp">
                    <br>
                    <input type="submit" value="Registrasi" class="btn btn-primary form-control rounded-pill"
                        name="regis">
                </form>
            </div>
        </div>
    </div>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>

</html>