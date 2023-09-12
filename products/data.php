<?php
include "koneksi.php";


$sql= "SELECT * FROM products";
$data= mysqli_query($conn, $sql);
//mengkonfersi data database ke array ada 4 cara
//mysqli_fetch_assoc pakau "echo $result['name']"
//mysqli_fetch_array pakai " echo $result[]['name']"
//mysqli_fetch_object pakai "->" echo $result->name
//mysqli_fetch_row pakai pakai "echo $result[index_number]"
//
// $result= mysqli_fetch_object($data);


// var_dump ($result);
// echo "<br>";
// echo $result->name, $result->price, $result->quantity;

// while ($result= mysqli_fetch_object($data)) {
//     echo $result->name, 
//         $result->description, 
//         $result->price, 
//         $result->quantity,
//         $result->created_at,
//         "<br>";

// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA PRODUCT</title>
</head>
<body>
<table border='1' cellspacing='0'>
    
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
        $no= 1;
            while ($result= mysqli_fetch_object($data)) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $result->name; ?></td>
            <td><?php echo $result->description; ?></td>
            <td><?php echo $result->price; ?></td>
            <td><?php echo $result->quantity; ?></td>
            <td><?php echo $result->created_at; ?></td>
        </tr>
        <?php
            }
        ?>

















    </tbody>
</table>
</body>
</html>