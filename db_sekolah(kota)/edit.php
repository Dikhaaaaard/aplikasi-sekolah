<?php
include "koneksi.php";
$id= $_GET['id'];

if (isset($_POST['submit'])) {
    $kota= $_POST['kota'];
    $sql= "UPDATE kota SET nama_kota='$kota' WHERE id=$id";
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
    <h2>Edit Data Kota</h2>

    <?php
    $id= $_GET['id'];
    $sql= "SELECT * FROM kota WHERE id=$id";
    $query= mysqli_query($conn, $sql);
    $tampil= mysqli_fetch_object($query);
    ?>
<form action="" method="post">

<label for="kota">Nama Kota: </label>
<input type="text" name="kota" id="kota" value="<?php echo $tampil-> nama_kota; ?>">
<br>

<button type="submit" name="submit">Simpan</button>


</form>
</body>
</html>