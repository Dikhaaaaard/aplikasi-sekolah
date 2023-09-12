<?php
include "koneksi.php";

$sql= "SELECT * FROM tb_pelanggan";
$data= mysqli_query($conn, $sql);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pelanggan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    body{
        font-family: Arial, Helvetica, sans-serif;   
        display: grid;
        place-items: center;
        background-color: #FAF1E4;
    }

    h1{
      text-decoration: underline;
    }

    table{
        background-color: #FAF0D7;
        width: 900px;
    }

    thead{
        background-color: #FFD9C0;
    }

    table tbody .aksi{
        width: 160px;
    }
    .btn-edit {
        margin: 7px 10px;
        color: blue;
    }
    
    .btn-delete a{
        /* margin: 10px 10px; */
        color: red;
    }

    .btn-tambah a{
        color: green;
    }


    </style>
</head>
<body>
    <h1>Data Pelanggan</h1>

<table border='1' cellspacing='0'>
    
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Pelanggan</th>
            <th>No. HP</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
    </thead>


    <tbody>
        <?php 
        $no=1;
        foreach ($data as $key => $data) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['nama_pelanggan']; ?></td>
            <td><?php echo $data['no_hp']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            
            <td class="aksi">
                <button class="btn-edit">
                <a href="edit.php?id=<?= $data['id'] ?>">
                <i class="fa fa-edit"></i>Edit</a></button>


                <button class="btn-delete">
                <a href="hapus.php?id=<?= $data['id'] ?>"
                onclick="return confirm('Apakaha yakin data akan dihapus?')">
                <i class="fa fa-trash"></i>Delete</a></button>
            </td>
        </tr>
        <?php
            }
        ?>
    </tbody>



</table> 
<button class="btn-tambah"><a href="tambah.php" type="submit"><i class="fa fa-plus"></i>Tambah Data</a></button>

</body>
</html>