<?php
require '../conn.php';
$id=$_GET['id_penyewaan'];
$query="DELETE * FROM tb_sewa WHERE id_penyewaan='$id'";
$sql=mysqli_query($koneksi,$query);
if ($sql) {
    echo "data berhasil dihapus";
    header('location: data_sewa_mobil.php');
}else{
    echo "data gagal terhapus";
}