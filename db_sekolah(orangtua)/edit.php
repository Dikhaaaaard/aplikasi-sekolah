<?php
include "koneksi.php";
$id= $_GET['id'];

if (isset($_POST['update'])) {
    $ayah= $_POST['ayah'];
    $ibu= $_POST['ibu'];
    $nomor= $_POST['nomor'];
    $alamat= $_POST['alamat'];
    $kota= $_POST['kota_id'];
    $sql= "UPDATE orangtua SET nama_ayah='$ayah', nama_ibu='$ibu', no_hp='$nomor', alamat='$alamat', kota_id='$kota' WHERE id=$id";
    $query= mysqli_query($conn, $sql);
    
    if ($query) {
        header('location: data.php');
    }
}

    $sql_ortu= "SELECT * FROM orangtua WHERE id=$id";
    $query_ortu= mysqli_query($conn, $sql_ortu);
    $ortu= mysqli_fetch_object($query_ortu);




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Tambah Data OrangTua</h2>
<form action="edit.php?id=<?php echo $id; ?>" method="post">
    <label for="ayah">Nama Ayah:</label>
    <input type="text" name="ayah" id="" value="<?php echo $ortu->nama_ayah?>">
    <br>

    <label for="ibu">Nama Ibu</label>
    <input type="text" name="ibu" id="" value="<?php echo $ortu->nama_ibu?>">
    <br>

    <label for="nomor">No. HP</label>
    <input type="number" name="nomor" id="" value="<?php echo $ortu->no_hp?>">
    <br>

    <label for="alamat">Alamat</label>
    <input type="text" name="alamat" id="" value="<?php echo $ortu->alamat?>">
    <br>


    <label for="kota_id">Kota:</label>
    <select name="kota_id" id="">
        <?php
        $sql= "SELECT * FROM kota";
        $query= mysqli_query($conn, $sql);
    
        while ($tampil= mysqli_fetch_object($query)) {
        ?>
    <option <?php echo ($ortu->kota_id == $tampil->id) ? 'selected' : '' ;?> value="<?php echo $tampil->id; ?>">
    <?php echo $tampil->nama_kota; ?>
    </option>
        <?php
        }
        ?>
    </select>
    
    <br>
    <button type="submit" name="update">Simpan</button>
    
    <br>
</form>

</body>
</html>