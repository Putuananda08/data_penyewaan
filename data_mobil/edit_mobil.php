<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT DATA MOBIL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2 class="alert alert-info"> EDIT DATA MOBIL </h2>
        <?php
    require '../conn.php';
        //menampilan data dalam table
        if(isset($_GET['url-id'])){
            $input_id = $_GET['url-id'];
            $query = "SELECT * FROM tb_daftar_mobil WHERE id_mobil ='$input_id'";
            $result = mysqli_query($koneksi,$query);
            $data = mysqli_fetch_object($result);
        }
        //simpan data yang telah dirubah dalam table
       if(isset($_POST['simpan'])){
                 $txtid_mobil = $_POST['txtid_mobil'];
                 $txtjenis_mobil = $_POST['txtjenis_mobil'];
                 $txtket_mobil = $_POST['txtket_mobil'];
                 $txtharga_mobil = $_POST['txtharga_mobil'];
                 $txtgambar_mobil = $_POST['txtgambar_mobil'];

        //update syntax dalam mysql
                 $sql = "UPDATE tb_daftar_mobil SET
                         id_mobil='$txtid_mobil', jenis_mobil='$txtjenis_mobil',ket_mobil='$txtket_mobil',harga_mobil='$txtharga_mobil',gambar_mobil='$txtgambar_mobil'
                         WHERE id_mobil = '$input_id'";
                 $result = mysqli_query($koneksi,$sql);
        //perulangan jika dia berhasil maka ke index dan data diperbarui
                if($result)  {
                  header('location: data_mobil.php');
      //jika salah data tidak berhasil diperbarui dan menghasilkan error
                }else {
                  echo 'Query Error'. mysqli_error($koneksi);
                }
                }
              ?>
        <form action="#" method="POST"> 
        <div class="mb-3">
            <label>Id Mobil</label>
            <input type="text" name="txtid_mobil" class="form-control" value="<?=$data->id_mobil;?>">
        </div>

        <div class="mb-3">
            <label>Jenis Mobil</label>
            <input type="text" name="txtjenis_mobil" class="form-control" value="<?=$data->jenis_mobil;?>">
        </div>

        <div class="mb-3">
            <label>Ket Mobil</label>
            <input type="text" name="txtket_mobil" class="form-control" value="<?=$data->ket_mobil;?>">
        </div>

        <div class="mb-3">
            <label>Harga Mobil</label>
            <input type="text" name="txtharga_mobil" class="form-control" value="<?=$data->harga_mobil;?>">
        </div>


        <div class="mb-3">
            <label>Gambar Mobil</label>
            <input type="file" name="txtgambar_mobil" class="form-control" value="<?=$data->gambar_mobil;?>">
        </div>

        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
        <a href="data_mobil.php" class="btn btn-secondary"> Kembali </a>
    </form>
    </div>
</body>
</html>