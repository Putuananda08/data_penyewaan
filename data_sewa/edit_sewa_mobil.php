<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT DATA PENYEWA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2 class="alert alert-info"> EDIT DATA PENYEWA </h2>
        <?php
    require '../conn.php';
        //menampilan data dalam table
        if(isset($_GET['url-id'])){
            $input_id = $_GET['url-id'];
            $query = "SELECT * FROM tb_sewa WHERE id_penyewaan ='$input_id'";
            $result = mysqli_query($koneksi,$query);
            $data = mysqli_fetch_object($result);
        }
        //simpan data yang telah dirubah dalam table
       if(isset($_POST['simpan'])){
                 $input_id = $_GET['txtid'];
                 $txtnama_penyewa = $_POST['txtnama_penyewa'];
                 $txtjenis_mobil = $_POST['txtjenis_mobil'];
                 $txtdurasi = $_POST['txtdurasi'];
                 $txttanggal = $_POST['txttanggal'];
                 $txtjam = $_POST['txtjam'];

        //update syntax dalam mysql
                 $sql = "UPDATE tb_sewa SET id_penyewaan='$input_id',
                         nama_penyewa='$txtnama_penyewa',jenis_mobil='$txtjenis_mobil',durasi='$txtdurasi',tanggal='$txttanggal',jam='$txtjam'
                         WHERE id_penyewaan = '$input_id'";
                 $result = mysqli_query($koneksi,$sql);
        //perulangan jika dia berhasil maka ke index dan data diperbarui
                if($result)  {
                  header('location: data-sewa-mobil.php');
      //jika salah data tidak berhasil diperbarui dan menghasilkan error
                }else {
                  echo 'Query Error'. mysqli_error($koneksi);
                }
                }
              ?>
        <form action="#" method="POST"> 
        <input type="hidden" name="txtid" value="<?=$id_penyewaan?>">
        <div class="mb-3">
            <label>Nama Penyewa</label>
            <input type="text" name="txtnama_penyewa" class="form-control" value="<?=$data->nama_penyewa;?>">
        </div>

        <div class="mb-3">
            <label>Jenis Mobil</label>
            <input type="text" name="txtjenis_mobil" class="form-control" value="<?=$data->jenis_mobil;?>">
        </div>

        <div class="mb-3">
            <label>Durasi</label>
            <input type="text" name="txtdurasi" class="form-control" value="<?=$data->durasi;?>">
        </div>


        <div class="mb-3">
            <label>Tanggal</label>
            <input type="text" name="txttanggal" class="form-control" value="<?=$data->tanggal;?>">
        </div>

        <div class="mb-3">
            <label>Jam</label>
            <input type="text" name="txtjam" class="form-control" value="<?=$data->jam;?>">
        </div>

        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
        <a href="index.php" class="btn btn-secondary"> HOME </a>
    </form>
    </div>
</body>
</html>