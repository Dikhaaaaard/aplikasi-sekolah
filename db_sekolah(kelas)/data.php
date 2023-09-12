<?php
include "koneksi.php";
$sql= "SELECT * FROM kelas";
$data= mysqli_query($conn, $sql);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Siswa</h1>
<button type="submit"><a href="tambah.php">Tambah Data</a></button>
    <table border="1" cellspacing="0">
        <thead>
            <tr>
                <th>No.</th>
                <th>Kelas</th>
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
                <td><?php echo $data['nama_kelas']; ?></td>
                <td>
                <a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a>
                <a href="hapus.php?id=<?php echo $data['id']; ?>">Delete</a>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>