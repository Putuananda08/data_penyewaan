<?php
session_start();
require 'conn.php';

if (isset($_POST['login'])) {

    $username = $_POST['txtusername'];
    $password = $_POST['txtpassword'];

    $query = mysqli_query($koneksi, "SELECT * FROM tb_user
            WHERE username='$username' and password='$password' ");

            if(mysqli_num_rows($query) === 1) {

                $data = mysqli_fetch_object($query);

                $_SESSION['login'] = true;
                $_SESSION['nama'] = $data->nama;
                $_SESSION['hak_akses'] = $data->hak_akses;

                header('location:index.php');

            }

          echo  $error = 'Username atau Password Salah';
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
body {
    background-image: url("asset/img/17f006ad85a2cf6bf4f8e866897a86a5.jpg");
}

</style>
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-4" style="margin-top: 140px;margin-left: auto;margin-right: auto;margin-bottom: auto;">
                <div class="card card-body">
                    <h3>Login Form</h3>
                    <form action="" method="POST">
                        <input type="text" name="txtusername"
                            class="form-control mb-3" placeholder="Masukkan Username">

                        <input type="password" name="txtpassword"
                            class="form-control mb-3" placeholder="Masukkan Password">

                        <input type="submit" value="login" name="login"
                            class="btn btn-primary">

                    </form>
                </div>
            </div>

            </div>
        </div>

    </div>
</body>
</html>