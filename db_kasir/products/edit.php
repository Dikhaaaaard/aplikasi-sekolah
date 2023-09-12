<?php
include "koneksi.php";
// panggil dengan url dengan get
$id=$_GET['id'];
// get data from id

if (isset($_POST['edit'])){
    
    $namaBarang= $_POST['namaBarang'];
    $deskripsi= $_POST['deskripsi'];
    $harga= $_POST['harga'];
    $qty= $_POST['qty'];
    $sql= "UPDATE products SET name='$namaBarang', description='$deskripsi', price='$harga', quantity='$qty' WHERE id=$id";

    $data= mysqli_query($conn, $sql);
    if ($data == TRUE) {
        header('location: data2.php');
    }
    }

    





?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Product</title>
    <style>
        h3{
            text-decoration: underline;

        }
        body{
            font-family: Arial, Helvetica, sans-serif;   

            display: grid;
            place-items: center;
            margin: auto;
            background-color: #A8DF8E;
        }
        label{
            
            display: grid;
            place-items: center;
        }

        input{
            width: 150px;
            display: grid;
            place-items: center;
        } 
        .btn-edit{
            /* background-color: #A8DF8E; */
            width: 160px;
            border-radius: 10px;
            padding: 5px 5px;
            background-color: #ddfcbd;
            border-color: #A8DF8E;
        }
    </style>
</head>
<body>
    <h3>Edit Data</h3>

<?php
$id= $_GET['id'];
$sql= "SELECT * FROM products WHERE id= $id";

$data= mysqli_query($conn, $sql);
$tampil= mysqli_fetch_object($data);
?>



<form action="edit.php?id=<?php echo $id ?>" method="post">

<label for="name">Nama Barang</label>
<input type="text" name="namaBarang" value="<?php echo $tampil->name;?>">
<br>

<label for="description">Deskripsi</label>
<input type="text" name="deskripsi" value="<?php echo $tampil->description;?>">
<br>

<label for="price">Harga Satuan</label>
<input type="number" name="harga" value="<?php echo $tampil->price;?>">
<br>

<label for="quantity">Stock</label>
<input type="number" name="qty" value="<?php echo $tampil->quantity;?>">
<br>

<button type="submit" name="edit" class="btn-edit">Simpan</button>

</body>
</html>