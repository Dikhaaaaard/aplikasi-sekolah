<?php
include "koneksi.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Product</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        h2{
            text-decoration: underline;
        }
        body{
            font-family: Arial, Helvetica, sans-serif;   
            display: grid;
            place-items: center;
            background-color: #A8DF8E;
        }

        .btn-tambah{
            /* background-color: #A8DF8E; */
            width: 120px;
            border-radius: 10px;
            padding: 5px 5px;
            background-color: #ddfcbd;

        }
        .btn-tambah a{
            text-decoration: none;


        }

        .btn-tambah:hover{
            background-color: #A8DF8E;
            

        }


        .price{
            text-align: right;
        }

        table{
            background-color: #ddfcbd;
            
        }

        table thead{
            background-color: #A8DF8E;

        }

        .edit{
            /* background-color: skyblue; */
            width: 60px;
            border-radius: 10px;
            padding: 5px 5px;
            margin: 3px;
            background-color: #ddfcbd;
          
        }

        .edit:hover{
            background-color: #A8DF8E;
            color: #ddfcbd;
        }


        .edit a{
            text-decoration: none;
            color: blue;
            
        }

        .delete a{
            text-decoration: none;
            color: red;

        }

        .delete{
            /* background-color: rgb(247, 75, 75); */
            border-radius: 10px;
            padding: 5px 5px;
            width: 70px;
            margin: 3px;
            background-color: #ddfcbd;

        }
        
        .delete:hover{
            background-color: #A8DF8E;
            color: #ddfcbd;
        }

    </style>
</head>
<body>
    
<table border='1' cellspacing='0'>
    <h2>Data Product</h2>

    <thead>
    <tr>
            <th>No.</th>
            <th>Nama Barang</th>
            <th>Deskripsi</th>
            <th>Harga Satuan</th>
            <th>Stock</th>
            <th>Created At</th>
            <th>Action</th>
    </tr>
    
    </thead>


    <tbody>
        <?php
        $sql= "SELECT * FROM products";
        $data= mysqli_query($conn, $sql);
        $no= 1;
            while ($result= mysqli_fetch_assoc($data)) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $result['name'] ?></td>
            <td><?php echo $result['description'] ?></td>
            <td class='price'><?php echo number_format($result['price'],0,',','.');  ?></td>
            <td><?php echo $result['quantity'] ?></td>
            <td><?php echo $result['created_at'] ?></td>
            <td>
                <button class="edit"><a href="edit.php?id=<?php echo $result['id']?>"><i class="fa fa-edit"></i>Edit</a></button>
                <button class="delete">
                <a href="hapus.php?id=<?php echo $result['id']?>
                "onclick="return confirm('Apakah yakin Data akan dihapus?')">
                <i class="fa fa-trash"></i>
                Delete</a></button>
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