<?php
include "koneksi.php";

if (isset($_POST['submit'])){
$name= $_POST['name'];
$alamat= $_POST['alamat'];
$nomor= $_POST['nomor'];

$sql= "INSERT INTO tb_pelanggan(nama_pelanggan, no_hp, alamat)
        VALUES('$name', '$nomor', '$alamat')";

$data= mysqli_query($conn, $sql);
// var_dump($data);
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
    <title>Tambah Data Pelanggan</title>
    <style>
      body{
        font-family: Arial, Helvetica, sans-serif;   
        display: grid;
        place-items: center;
        background-color: #FAF1E4;
    }
    
    h2{
      text-decoration: underline;
    }

    input{
      display: grid;
        place-items: center;
    }

    label{
      display: grid;
        place-items: center;
    }

    button{
      width: 170px;
      background-color: #FFD9C0;
      border-radius: 8px 8px;
      padding: 5px 0px;
    }

    </style>
</head>
<body>
<h2>Tambah Data Pelanggan</h2>
<form action="" method="post">
 
<label for="name">Nama pelanggan</label>
<input type="text" name="name" required>
<br>



<label for="nomor">No. HP</label>
<input type="number" name="nomor" required>
<br>



<label for="alamat">Alamat</label>
<input type="text" name="alamat">
<br>

    </table>
    <button type="submit" name="submit" class="btn-simpan">Simpan</button>
</body>
</html>