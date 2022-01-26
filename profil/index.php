<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body style="background-color: whitesmoke;">
  <!-- nav -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="#">RentCar Kusuma</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        
      </ul>
      <form class="d-flex">
       
        <a type="button" class="btn btn-dark" href="../login.php">Login</a>
        <!-- <button class="btn btn-dark" type="submit">Login</button> -->
      </form>
    </div>
  </div>
</nav>
  <!-- end nav -->
  <div class="container" style="margin-top: 20px;">
  <div class="col-lg-7" style="margin-left: auto; margin-top: auto;margin-right: auto;margin-bottom: auto; border-color: black;">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../asset/img/1041394_720.jpg" style="height: 400px; width: 200px;" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../asset/img/17f006ad85a2cf6bf4f8e866897a86a5.jpg" style="height: 400px; width: 200px;" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../asset/img/5a3a0122150ba00f5683dacb_1559024706.jpg" style="height: 400px; width: 200px;" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <div>
    <h5>
      RentCar Kusuma adalah salah satu tempat penyewaan mobil terlengkap dan menyediakan mobil dengan kondisi yang baik
    </h5>
  </div>
  </div>
  <!-- bawah carousel -->

  

  <!-- daftar mobil -->
  <section style="background-color: whitesmoke;">
    <div class="container">
      <div class="row mb-3 py-2">
        <div class="col-md-12" style="margin: auto;">
          <h2 style="text-align: center; color: black;">Daftar Mobil Kami</h2>
          <hr>
          <div class="row">
            <!--  -->
            <?php
            // ambil koneksi
            require '../conn.php';
            // ambil isi/check data dari tb paket
            $query = "SELECT * FROM tb_daftar_mobil";
            $sql = mysqli_query($koneksi, $query);
            // perulangan untuk memunculkan banyak paket
            while ($data = mysqli_fetch_object($sql)) {
            ?>
              <!-- munculkan perulangan dengan card -->

              <div class="col-md-3" style="margin-bottom: 10px;">


                <div class="card" style="width: 18rem; height: 24rem; border-radius: 10px;">
                  <h5 class="card-header" style="background-color: #18212b; color: whitesmoke;text-align: center;">Rp.<?= $data->harga_mobil; ?></h5>
                  <img src="../asset/img/<?= $data->gambar_mobil; ?>" class="card-img-top" style="height: 140px;">

                  <div class="card-body">
                    <h5 class="card-title"><?= $data->jenis_mobil; ?></h5>
                    <p class="card-text"><?= $data->ket_mobil; ?></p>
                  </div>
                  <div class="card-footer text-muted">
                    
                     
                        <p>ID : <?= $data->id_mobil; ?></p>
                    
                     
                  


                  </div>
                </div>
              </div>
            <?php
            }
            ?>
            <!--  -->

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- contact person -->
  <!-- end -->
</body>

</html>