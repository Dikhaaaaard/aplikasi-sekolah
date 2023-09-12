<?php
include "koneksi.php";
$sql= 
"SELECT *, siswa.id AS sid FROM siswa
INNER JOIN kelas ON siswa.kelas_id=kelas.id 
INNER JOIN orangtua ON siswa.orangtua_id=orangtua.id
INNER JOIN kota ON siswa.kota_id=kota.id";

$query= mysqli_query($conn, $sql);
// var_dump($sql);
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

<table border="1" cellspacing="0">
    <button type="submit"><a href="tambah.php">Tambah Data</a></button>
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Siswa</th>
            <th>Jenis Kelamin</th>
            <th>No. HP</th>
            <th>Alamat</th>
            <th>Kelas</th>
            <th>Nama Ayah</th>
            <th>Nama Ibu</th>
            <th>Kota</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $no=1;
        foreach ($query as $key => $query) {
         
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $query['nama']; ?></td>
            <td><?php echo $query['jenis_kelamin']; ?></td>
            <td><?php echo $query['no_hp']; ?></td>
            <td><?php echo $query['alamat_siswa']; ?></td>
            <td><?php echo $query['nama_kelas']; ?></td>
            <td><?php echo $query['nama_ayah']; ?></td>
            <td><?php echo $query['nama_ibu']; ?></td>

            <td><?php echo $query['nama_kota']; ?></td>
            <td>
            <a href="edit.php?id=<?php echo $query['sid']; ?>">Edit</a>
            <a href="hapus.php?id=<?php echo $query['sid']; ?>">Delete</a>
            </td>
        </tr>
    </tbody>
    <?php
    }
    ?>
</table>
</body>
</html>