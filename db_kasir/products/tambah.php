<?php
include "koneksi.php";

if (isset($_POST['submit'])){
$namaBarang= $_POST['namaBarang'];
$harga= $_POST['harga'];
$qty= $_POST['qty'];


$sql= "INSERT INTO products(name, price, quantity)
        VALUES('$namaBarang', '$harga', '$qty')";

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
    <title>Tambah Data</title>
    <style>

        
        body{
            display: grid;
            place-items: center;
            margin: auto;
            background-color: #A8DF8E;

        }
        label{
            /* text-align: center; */
            display: grid;
            place-items: center;
        }

        input{
            width: 150px;
            display: grid;
            place-items: center;
        }
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
        .btn-simpan{
            width: 160px;
            border-radius: 10px;
            padding: 5px 5px;
            background-color: #ddfcbd;
            border-color: #A8DF8E;
        }
      
    </style>
</head>
<body>

    <h3>Tambah Data Product</h3>
<form action="" method="post">
 
<label for="name">Nama Barang</label>
<input type="text" name="namaBarang" required>
<br>



<label for="price">Harga Satuan</label>
<input type="number" name="harga" required>
<br>



<label for="quantity">Stock</label>
<input type="number" name="qty">
<br>

    </table>
    <button type="submit" name="submit" class="btn-simpan">Simpan</button>
</body>
</html>