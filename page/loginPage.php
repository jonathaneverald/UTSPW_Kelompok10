<?php
    if(isset($_GET['authCode'])){
        include('../db.php');
        $temp = $_GET['authCode'];
        $query = mysqli_query($con, "SELECT otentikasi, verifikasi FROM users WHERE otentikasi = '$temp' AND verifikasi = 0") or die(mysqli_error($con));
        if($query->num_rows == 1){
            $verifUpdate = mysqli_query($con,
                "UPDATE users set verifikasi = 1 WHERE otentikasi = '$temp' ") or die(mysqli_error($con));
                echo
                    '<script>
                    alert("Account has been verified"); window.location = "loginPage.php"
                    </script>';
        }
        else{
            echo 'This account is invalid or already verified';
        }
    }
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrit
            y="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <link href="../style.css" rel="stylesheet">
                <title>Masuk</title>
    </head>
 <body>
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="../index.php">onMart</a>
            <div class="d-flex justify-content-end">
                    <button class="btn btn-warning ms-2" type="button" href="../loginPage.php">
                         <a class="text-light" style="text-decoration: none" href="../page/loginPage.php">Masuk</a>
                    </button>
                    <button class="btn btn-warning ms-2" type="button" href="../registerPage.php">
                         <a class="text-light" style="text-decoration: none" href="../page/registerPage.php">Daftar</a>
                    </button>
            </div>
        </div>
    </nav>
        <div class="bg bg-light text-dark">
            <div class="container min-vh-100 d-flex align-items-center justify-content-center">
                <div class="card text-dark bg-light ma-5 shadow" style="min-width: 25rem;">
                    <div class="card-header fw-bold">Masuk</div>
                        <div class="card-body">
                            <form action="../process/loginProcess.php" method="post">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                    <input class="form-control" id="email" name="email" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary" name="login">Masuk</button>
                                </div>
                            </form>
                                <p class="mt-2 mb-0">Tidak punya akun? <a href="./registerPage.php" class="textprimary">Daftar disini</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Option 1: Bootstrap Bundle with Popper -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
                MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>