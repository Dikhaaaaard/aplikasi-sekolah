<?php
include "koneksi.php";

if (isset($_POST['submit'])) {
$kota= $_POST['kota'];
$sql= "INSERT INTO kota(nama_kota)
        VALUES('$kota')";
$query= mysqli_query($conn, $sql);


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
    <h2>Tambah Data</h2>

<form action="" method="post">

<label for="kota">Nama Kota:</label>
<input type="text" name="kota" id="kota">
<br>
<button type="submit" name="submit">Simpan</button>    

</form>
</body>
</html>