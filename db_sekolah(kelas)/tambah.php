<?php
include "koneksi.php";

if (isset($_POST['submit'])) {
    $kelas= $_POST['kelas'];
    $sql= "INSERT INTO kelas(nama_kelas)
            VALUES('$kelas')";
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
    <h2>Tambah Data Kelas</h2>
    <form action="" method="post">

    <label for="kelas">Nama Kelas</label>
    <input type="text" name="kelas" id="kelas">
    <br>

    <button type="submit" name="submit">Simpan</button>
    </form>
</body>
</html>