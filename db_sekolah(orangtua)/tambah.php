<?php
include "koneksi.php";

if (isset($_POST['submit'])) {
    $ayah= $_POST['ayah'];
    $ibu= $_POST['ibu'];
    $nomor= $_POST['nomor'];
    $alamat= $_POST['alamat'];
    $kota= $_POST['kota_id'];
    $sql= "INSERT INTO orangtua(nama_ayah, nama_ibu, no_hp, alamat, kota_id)
            VALUES('$ayah', '$ibu', '$nomor', '$alamat', '$kota')";
    $query= mysqli_query($conn, $sql);
    var_dump($sql);
    if ($query) {
        header('location: data.php');
    }
}
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
<form action="" method="post">
    <label for="ayah">Nama Ayah:</label>
    <input type="text" name="ayah" id="">
    <br>

    <label for="ibu">Nama Ibu</label>
    <input type="text" name="ibu" id="">
    <br>

    <label for="nomor">No. HP</label>
    <input type="number" name="nomor" id="">
    <br>

    <label for="alamat">Alamat</label>
    <input type="text" name="alamat" id="">
    <br>


    <label for="kota_id">Kota:</label>
    <select name="kota_id" id="">
        <?php
        $sql= "SELECT * FROM kota";
        $query= mysqli_query($conn, $sql);
        while ($tampil= mysqli_fetch_object($query)) {
        ?>
    <option value="<?php echo $tampil->id; ?>"><?php echo $tampil->nama_kota; ?></option>
        <?php
        }
        ?>
    </select>
    
    <br>
    <button type="submit" name="submit">Simpan</button>
    
    <br>
</form>

</body>
</html>