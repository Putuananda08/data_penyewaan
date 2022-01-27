<?php
session_start();
require '../header.php';
if (!isset($_SESSION['login'])) {
    header('location:../profil/index.php');
}
?>

<a href="#menu-toggle" class="btn btn-info" id="menu-toggle">Toggle Menu</a>

<a href="./tambah_mobil.php" class="btn btn-info"><i class="fas fa-plus-circle"></i> Tambah Data </a>

<br><br>
<table class="table table-dark table-bordered border-primary">
    <thead>
        <tr>
            <th>No</th>
            <th>id_mobil</th>
            <th>jenis_mobil</th>
            <th>ket_mobil</th>
            <th>harga_mobil</th>
            <th>gambar_mobil</th>

            <th>Aksi</th>

        </tr>
    <tbody>
        <?php
        require '../conn.php';
        $query = "SELECT * FROM tb_daftar_mobil";
        $sql = mysqli_query($koneksi, $query);
        $no = 1;
        while ($data = mysqli_fetch_object($sql)) {
        ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $data->id_mobil; ?></td>
                <td><?= $data->jenis_mobil; ?></td>
                <td><?= $data->ket_mobil; ?></td>
                <td><?= $data->harga_mobil; ?></td>
                <td><?= $data->gambar_mobil; ?></td>

                <td><a href="edit_mobil.php?url-id=<?= $data->id_mobil; ?>">
                        <input type="submit" value="Edit" class="btn btn-warning">
                    </a>
                    <?php
                    if ($_SESSION['hak_akses'] == 'admin') {
                    ?>
                        <a href="hapus_mobil.php?id_mobil=<?= $data->id_mobil; ?>">
                            <input type="submit" value="Hapus" class="btn btn-danger" onclick="return confirm('Yakin Hapus Data?')">

                        <?php
                    }
                        ?>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
    </thead>
</table>
</div>
</body>

</html>
<?php
require '../footer.php';
?>