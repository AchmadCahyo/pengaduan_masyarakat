<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Login</title>
</head>

<body class="bg-secondary">
    <div class="text-center text-light">
        <h4 class="display-6 mt-3">Selamat Datang di Aplikasi Pelaporan dan Pengaduan Masyarakat</h4>
    </div>
    <div class="d-flex justify-content-center mt-5">
        <div class="border border-dark rounded bg-light text-dark">
            <h3 class="card-title text-center mt-5 display-6">Login User</h3>
            <form action="controller/loginconn.php" method="POST" class="m-5">
                <label for="" class="fw-bold">User Name : </label>
                <input type="text" class="form-control rounded-pill" placeholder="Masukkan Username" name="username">
                <br>
                <label for="" class="fw-bold">Password : </label>
                <input type="password" class="form-control rounded-pill" placeholder="Masukkan Password" name="pass">
                <br>
                <input type="submit" value="Masuk" class="btn btn-primary form-control rounded-pill" name="masuk">
                <div class="mt-3">
                    <h7>Belum Memiliki Akun? <a href="masyarakat/registermasyarakat.php"
                            class="link-offset-2 link-underline link-underline-opacity-0">Daftar Sekarang</a></h7>
                </div>
            </form> 
        </div>
    </div <script src="assets/js/bootstrap.min.js">
    </script>
</body>

</html>