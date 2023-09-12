<?php
include "koneksi.php";
$sql= "SELECT * FROM kota";
$query= mysqli_query($conn, $sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Kota</h1>
<button type="submit"><a href="tambah.php">Tambah Data</a></button>
    <table border="1" cellspacing="0">
        <thead>
            <tr>
                <th>No. </th>
                <th>Nama Kota</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $no= 1;
            foreach ($query as $key => $query) {
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $query['nama_kota']; ?></td>

                <td>
                    <a href="edit.php?id=<?php echo $query['id']; ?>">Edit</a>
                    <a href="hapus.php?id=<?php echo $query['id']; ?>">Delete</a>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>