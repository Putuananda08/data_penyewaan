<?php
require '../header.php';
if (!isset($_SESSION['login'])) {
    header('location:login.php');
  }
?>

<div class="row">
    <div class="col-lg-12">
        <div class="card col-xl-6 bg-info" style="margin-top: 20px;">
            <div class="card-body" style="text-align: center;">
                <h5>SELAMAT DATANG <?= $_SESSION['nama']; ?> DI RENTCAR KUSUMA </h5>
               
            </div>
        </div>
        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>

        <div class="container">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Y7c4QP9uLk0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</div>
<?php
require '../footer.php';
?>