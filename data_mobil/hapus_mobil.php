<?php
require '../conn.php';
$id = $_GET['id_mobil'];
$query="DELETE FROM tb_daftar_mobil WHERE id_mobil='$id'";
$sql=mysqli_query($koneksi,$query);
if ($sql) {
    echo "data berhasil dihapus";
    header('location: data_mobil.php');
}else{
    echo "data gagal terhapus";
}

