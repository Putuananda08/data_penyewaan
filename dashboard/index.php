<?php
session_start();
require '../header.php';
if (!isset($_SESSION['login'])) {
    header('location:login.php');
  }
?>

<div class="row">
    <div class="col-lg-12"> 
    <a href="#menu-toggle" class="btn btn-info" id="menu-toggle">Toggle Menu</a><br><br>
            <h5><button type="button" class="btn btn-primary">Selamat Datang <?= $_SESSION['hak_akses']; ?> : <?= $_SESSION['nama']; ?> Di Rentcar Kusuma</button><br></h5>
                
               
            
        
        <div class="container">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Y7c4QP9uLk0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/sW8aZ0_Q_v0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>    
        </div>
    </div>
</div>
<?php
require '../footer.php';
?>