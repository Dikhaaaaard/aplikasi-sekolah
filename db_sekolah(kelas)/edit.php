<?php
include "koneksi.php";
$id= $_GET['id'];

if (isset($_POST['simpan'])) {
    $kelas= $_POST['kelas'];
    $sql= "UPDATE kelas SET nama_kelas='$kelas' WHERE id=$id";
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
<h2>Edit Data Kelas</h2>
    <?php

    $id= $_GET['id'];
    $sql= "SELECT * FROM kelas WHERE id= $id";
    $query= mysqli_query($conn, $sql);
    $tampil= mysqli_fetch_object($query);
    // var_dump($query);
    ?>
    <form action="edit.php?id=<?php echo $id ?>" method="post">

    <label for="kelas">Nama Kelas: </label>
    <input type="text" name="kelas" id="kelas" value="<?php echo $tampil->nama_kelas; ?>">
    <br>

    <button type="submit" name="simpan">Simpan</button>
</form>

</body>
</html>