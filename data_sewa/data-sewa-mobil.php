<?php
require '../header.php';

?>
    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Togglemenu</a>
   
    <a href="./tambah_sewa_mobil.php" class="btn btn-info"><i class="fas fa-plus-circle"></i> Tambah Data </a>
  
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
     </a>  <a href="hapus_sewa_mobil.php?id_penyewaan=<?= $data->id_penyewaan;?>">
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