<?php
include "koneksi.php";

if (isset($_POST['submit'])) {
    $siswa= $_POST['siswa'];
    $nomor= $_POST['nomor'];
    $alamat= $_POST['alamat'];
    $kelas= $_POST['kelas'];
    $kota= $_POST['kota'];
    $orangtua= $_POST['orangtua'];
    $jenis_kelamin= $_POST['jenis_kelamin'];

    $sql= 
    "INSERT INTO siswa(nama, jenis_kelamin, no_hp, alamat_siswa, kelas_id, orangtua_id, kota_id)
    VALUES('$siswa', '$jenis_kelamin', '$nomor', '$alamat', '$kelas', '$orangtua', '$kota')";
        // var_dump($sql); 
    $query= mysqli_query($conn, $sql);

    if ($query) {
        echo "berhasil";
        header('location: data.php');
    } else {
        echo "gagal";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Tambah Data Siswa</h2>

    <form action="" method="post">
        <label for="siswa">Nama Siswa:</label>
        <input type="text" name="siswa" id="">
        <br>

        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <input type="text" name="jenis_kelamin" id="">
        <br>

        <label for="nomor">No. HP:</label>
        <input type="number" name="nomor" id="">
        <br>

        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" id="">
        <br>

        <label for="kelas">Kelas:</label>
        <select name="kelas" id="">
            <?php
            $sql= "SELECT * FROM kelas";
            $query= mysqli_query($conn, $sql);

            while ($tampil= mysqli_fetch_object($query)) {
            
            ?>
            <option value="<?php echo $tampil-> id; ?>"><?php echo $tampil-> nama_kelas; ?></option>
            <?php
            }
            ?>
        </select>
        <br>

        <label for="orangtua">Nama OrangTua:</label>
        <select name="orangtua" id="">
        <?php
            $sql= "SELECT * FROM orangtua";
            $query= mysqli_query($conn, $sql);

            while ($tampil= mysqli_fetch_object($query)) {
            
            ?>
            <option value="<?php echo $tampil-> id; ?>">
            <?php 
            echo $tampil-> nama_ayah;
            echo $tampil-> nama_ibu;
            ?>
            </option>

            <?php
            }
            ?>
        </select>
        <br>

        <label for="kota">Kota:</label>
    <select name="kota" id="">
        <?php
        $sql= "SELECT * FROM kota";
        $query= mysqli_query($conn, $sql);
        while ($tampil= mysqli_fetch_object($query)) {
        ?>
    <option value="<?php echo $tampil->id; ?>"><?php echo $tampil->nama_kota; ?></option>
        <?php
        }
        ?>
    </select>
        <br>

        <button type="submit" name="submit">Simpan</button>
    </form>
</body>
</html>