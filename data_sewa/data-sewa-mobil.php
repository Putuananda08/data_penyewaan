<?php
require '../header.php';

?>
    <h3 class="alert alert-info"> Welcome 
        <?= $_SESSION['nama'];?> To website penyewaan mobil
       
    </h3>
    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Togglemenu</a>
   
    <a href="./tambah_sewa_mobil.php" class="btn btn-info"><i class="fas fa-plus-circle"></i> Tambah Data </a>
  
    <!-- menambahkan search -->
<!-- <div class="row">
    <div class="col-md">
         <a href="tambah.php" class="btn btn-info"><i class="fas fa-plus-circle"></i> Tambah Data </a>
         <form action="" method="POST">
         <input type="text" name="txtsearch" class="form-control" placeholder="Search Data Mahasiswa" autofocus autocomplete="off">
         <button class="btn btn-outline-secondary" name="btnsearch" type="button" ><i class="fas fa-search"></i></button>
         </form>
    </div>
    </div>  -->
    <!-- <input type="text" name="txtSearch" class="form-control" placeholder="Search Data Mahasiswa">
    <input type="submit" name="btnCari" class="form-control"> -->
<!-- <div class="input-group sm-3">
    <div class="row">
        <div class="col ">
        <a href="tambah.php" class="btn btn-info"><i class="fas fa-plus-circle"></i> Tambah Data </a>
        </div>
<div class="col-lg-4">
  <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
  <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
  </div> 
</div>
</div> -->
    <br><br>
<table class="table table-dark table-bordered border-primary" >
<thead>
    <tr>
        <th>No</th>
        <th>id_penyewaan</th>
        <th>Nama penyewa</th>
        <th>jenis_mobil</th>
        <th>durasi</th>
        <th>jam</th>
        <th>tanggal</th>
       
        <th>Aksi</th>  
      
    </tr>
    <tbody>
        <?php
        require '../conn.php';
        $query = "SELECT * FROM tb_sewa";
        $sql = mysqli_query($koneksi,$query);
        $no = 1;
        while ($data = mysqli_fetch_object($sql)) {
        ?>
        <tr>
        <td><?= $no++; ?></td>
        <td><?= $data->id_penyewaan; ?></td>
        <td><?= $data->nama_penyewa; ?></td>
        <td><?= $data->jenis_mobil; ?></td>
        <td><?= $data->durasi; ?></td>
        <td><?= $data->jam; ?></td>
        <td><?= $data->tanggal; ?></td>
        
       <td><a href="edit_sewa_mobil.php?url-id=<?=$data->id_penyewaan;?>">
       <input type="submit" value="Edit" class="btn btn-warning">
     </a>  <a href="hapus_sewa_mobil.php?id_penyewaan=<?=$data->id_penyewaan;?>">
       <input type="submit" value="Hapus" class="btn btn-danger" onclick="return confirm('Yakin Hapus Data?')">
       <?php 
       }
       ?>
    </td>
    </tr>
  
    </tbody>
</thead>
</table>
    </div>
</body>
</html>
<?php
require '../footer.php';
?>