<?php
include 'koneksi.php';
$sql= "SELECT * FROM tb_supplier";
$data= mysqli_query($conn, $sql);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Supplier</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <h1>Data Supplier</h1>
    <table border="1" cellspacing="0">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Supplier</th>
                <th>No. HP</th>
                <th>Alamat</th>
                <th>Status</th>
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
                <td><?php echo $data['nama_supplier']; ?></td>
                <td><?php echo $data['no_hp']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td><?php echo $data['status']; ?></td>

                <td>
                <a href="edit.php?id=<?php $data['id']; ?>">
                <i class="fa fa-edit"></i>
                Edit</a>

                <a href="hapus.php?id=<?= $data['id']; ?>">
                <i class="fa fa-trash"></i>
                Delete</a>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <button type="submit"><a href="tambah.php">Tambah data</a></button>
</body>
</html>