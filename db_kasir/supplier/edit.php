<?php
include "koneksi.php";
$id= $_GET['id'];

if (isset($_POST['edit'])) {
    $nama= $_POST['name'];
    $nomor= $_POST['nomor'];
    $alamat= $_POST['alamat'];
    $status= $_POST['status'];

    $sql= "UPDATE FROM tb_supplier SET nama_supplier='$nama', no_hp='$nomor', alamat='$alamat', status='$status' WHERE id=$id";

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
    <title>Document</title>
</head>
<body>
    <h2>Edit Data Supplier</h2>
    <?php
    $id= $_GET['id'];
    $sql= "SELECT * FROM tb_supplier WHERE id= $id";
    $data= mysqli_query($conn, $sql);
    $tampil= mysqli_fetch_object($data);
    ?>
<form action="edit.php?id=<?php echo $id ?>" method="post">
   <label for="nama">Nama Supplier</label>
   <input type="text" name="nama" value="<?php echo $tampil-> nama_supplier; ?>">
   <br>

   <label for="nomor">No. HP</label>
   <input type="number" name="nomor" value="<?php echo $tampil-> no_hp; ?>">
   <br>

   <label for="alamat">Alamat</label>
   <input type="text" name="alamat" value="<?php echo $tampil-> alamat; ?>">
   <br>

   <label for="status">Status</label>
   <input type="text" name="status" value="<?php echo $tampil-> status; ?>">
    <br>

   <button type="submit" name="edit">Simpan</button>
</form>
</body>
</html>