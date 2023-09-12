<?php
include "koneksi.php";
$id=$_GET['id'];

if (isset($_POST['edit'])){
$name= $_POST['name']; //index di dalam "name" pada input di html bawah
$nomor= $_POST['nomor'];
$alamat= $_POST['alamat'];

$sql= "UPDATE tb_pelanggan SET nama_pelanggan='$name', no_hp='$nomor', alamat='$alamat' WHERE id=$id";
$data= mysqli_query($conn, $sql);

if ($data) {
    header('location: data.php');
    echo "berhasil";
}
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pelanggan</title>
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
    <h2>Edit Data</h2>

<?php
$id= $_GET['id'];
$sql= "SELECT * FROM tb_pelanggan WHERE id= $id";
$data= mysqli_query($conn, $sql);
$tampil= mysqli_fetch_object($data);

?>


<form action="edit.php?id=<?php echo $id ?>" method="post">

<label for="name">Nama Pelanggan</label>
<input type="text" name="name" value="<?php echo $tampil->nama_pelanggan;//<-index di database ?>">
<br>

<label for="nomor">No. HP</label>
<input type="text" name="nomor" value="<?php echo $tampil->no_hp; //<-index di database ?>">
<br>

<label for="alamat">Alamat</label>
<input type="text" name="alamat" value="<?php echo $tampil->alamat; //<-index di database ?>">
<br>


<button type="submit" name="edit" class="btn-edit">Simpan</button>
</body>
</html>