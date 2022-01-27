<?php 
require 'conn.php';
if(isset($_SESSION['user'])) {
   header('location:../web_penyewaan/dashboard/index.php');
   
}else {
    header('location:../web_penyewaan/profil/index.php');
}
?>