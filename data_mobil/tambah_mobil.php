<!DOCTYPE html>
<html> <head>

<title>Data Mobil</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2 class="alert alert-info">Tambah Data Mobil </h2>

<?php
require '../conn.php';

if (isset($_POST['simpan'])){
    $txtid_mobil = htmlspecialchars($_POST['txtid_mobil']);
    $txtjenis_mobil = htmlspecialchars($_POST['txtjenis_mobil']);
    $txtket_mobil = htmlspecialchars($_POST['txtket_mobil']);
    $txtharga_mobil = htmlspecialchars($_POST['txtharga_mobil']);
    $txtgambar_mobil = htmlspecialchars($_POST['txtgambar_mobil']);

    $sql = "INSERT INTO tb_daftar_mobil VALUES ( '$txtid_mobil', '$txtjenis_mobil', '$txtket_mobil', '$txtharga_mobil', '$txtgambar_mobil')";

    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        header('location: data_mobil.php');
    } else {
        echo 'Query Error : ' . mysqli_error($koneksi);
    }
}
?>
        <form action="" method="post">

        <div class="mb-3">
            <label>Id Mobil</label>
            <input type="text" name="txtid_mobil" class="form-control">
        </div>

        <div class="mb-3">
            <label>Jenis mobil</label>
            <input type="text" name="txtjenis_mobil" class="form-control">
        </div>

        <div class="mb-3">
            <label>Ket Mobil</label>
            <input type="text" name="txtket_mobil" class="form-control">
        </div>

        <div class="mb-3">
            <label>Harga Mobil</label>
            <input type="text" name="txtharga_mobil" class="form-control">
        </div>

        <div class="mb-3">
            <label>Gambar Mobil</label>
            <input type="file" name="txtgambar_mobil" class="form-control">
        </div>

        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
        <a href="data_mobil.php" class="btn btn-secondary">Kembali</a>

        </form>
        </div>
    
</body>
</html>