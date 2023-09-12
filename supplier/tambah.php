<?php
include "koneksi.php";





if (isset($_POST['submit'])) {
    $nama= $_POST['nama'];
    $nomor= $_POST['nomor'];
    $alamat= $_POST['alamat'];
    $status= $_POST['status'];
    $sql= "INSERT INTO tb_supplier(nama_supplier, no_hp, alamat, status)
            VALUES('$nama', '$nomor', '$alamat', '$status')";
    $data= mysqli_query($conn, $sql);
    if ($data) {
        header('location: data.php');
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Supplier</title>
</head>
<body>
    <h2>Tambah Data Supplier</h2>
<form action="" method="post">
    <label for="nama">Nama Supplier</label>
    <input type="text" name="nama">
    <br>

    <label for="nomor">No. HP</label>
    <input type="number" name="nomor">
    <br>

    <label for="alamat">Alamat</label>
    <input type="text" name="alamat">
    <br>

    <label for="status">Status :</label>
    <input type="text" name="status">
    <br>

    <button type="submit" name="submit">Simpan</button>
</form>
</body>
</html>