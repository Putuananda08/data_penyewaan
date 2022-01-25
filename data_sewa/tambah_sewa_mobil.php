<!DOCTYPE html>
<html> <head>

<title>Data Penyewa</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2 class="alert alert-info">Tambah Data Penyewa </h2>

<?php
require '../conn.php';

if (isset($_POST['simpan'])){
    $txtnama_penyewa = htmlspecialchars($_POST['txtnama_penyewa']);
    $txtjenis_mobil = htmlspecialchars($_POST['txtjenis_mobil']);
    $txtdurasi = htmlspecialchars($_POST['txtdurasi']);
    $txttanggal = htmlspecialchars($_POST['txttanggal']);
    $txtjam = htmlspecialchars($_POST['txtjam']);

    $sql = "INSERT INTO tb_sewa VALUES (NULL, '$txtnama_penyewa', '$txtjenis_mobil', '$txtdurasi', '$txttanggal', '$txtjam')";

    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        header('location: data-sewa-mobil.php');
    } else {
        echo 'Query Error : ' . mysqli_error($koneksi);
    }
}
?>
        <form action="" method="post">

        <div class="mb-3">
            <label>Nama penyawa</label>
            <input type="text" name="txtnama_penyewa" class="form-control">
        </div>

        <div class="mb-3">
            <label>Jenis mobil</label>
            <input type="text" name="txtjenis_mobil" class="form-control">
        </div>

        <div class="mb-3">
            <label>Durasi</label>
            <input type="text" name="txtdurasi" class="form-control">
        </div>

        <div class="mb-3">
            <label>Tanggal</label>
            <input type="text" name="txttanggal" class="form-control">
        </div>

        <div class="mb-3">
            <label>Jam</label>
            <input type="text" name="txtjam" class="form-control">
        </div>

        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
        <a href="index.php" class="btn btn-secondary">Kembali</a>

        </form>
        </div>
    
</body>
</html>