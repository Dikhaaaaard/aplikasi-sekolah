<?php
include "koneksi.php";
$id= $_GET['id'];


if (isset($_POST['submit'])) {
    $nama= $_POST['siswa'];
    $jenis_kelamin= $_POST['jenis_kelamin'];
    $nomor= $_POST['nomor'];
    $alamat= $_POST['alamat'];
    $kelas= $_POST['kelas'];
    $orangtua= $_POST['orangtua'];
    $kota= $_POST['kota'];

    $sql= "UPDATE siswa SET nama='$nama', jenis_kelamin='$jenis_kelamin', no_hp='$nomor', alamat_siswa='$alamat', kelas_id='$kelas', orangtua_id='$orangtua', kota_id='$kota' WHERE id=$id";

    $query= mysqli_query($conn, $sql);
    if ($query) {
        header('location: data.php');
    }

}
    $sql_siswa= "SELECT * FROM siswa WHERE id=$id";
    $query_siswa= mysqli_query($conn, $sql_siswa);
    $siswa= mysqli_fetch_object($query_siswa);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<body>
    <h2>Edit Data Siswa</h2>

    <form action="edit.php?id=<?php echo $id; ?>" method="post">
        <label for="siswa">Nama Siswa:</label>
        <input type="text" name="siswa" id="" value="<?php echo $siswa->nama ;?>">
        <br>

        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <input type="text" name="jenis_kelamin" id="" value="<?php echo $siswa->jenis_kelamin; ?>">
           
        <br>

        <label for="nomor">No. HP:</label>
        <input type="number" name="nomor" id="" value="<?php echo $siswa->no_hp; ?>">
        <br>

        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" id="" value="<?php echo $siswa->alamat_siswa; ?>">
        <br>

        <label for="kelas">Kelas:</label>
        <select name="kelas" id="" value="<?php echo $siswa->nama_kelas; ?>">
            <?php
            $sql= "SELECT * FROM kelas";
            $query= mysqli_query($conn, $sql);

            while ($tampil= mysqli_fetch_object($query)) {
            
            ?>
            <option <?php echo ($siswa->kelas_id == $tampil->id) ? 'selected' : '' ; ?> 
            value="<?php echo $tampil-> id; ?>">
            <?php echo $tampil-> nama_kelas; ?>
            </option>
            <?php
            }
            ?>
        </select>
        <br>

        <label for="orangtua">Nama OrangTua:</label>
        <select name="orangtua" id="" value="">
        <?php
            $sql= "SELECT * FROM orangtua";
            $query= mysqli_query($conn, $sql);

            while ($tampil= mysqli_fetch_object($query)) {
            
            ?>
            <option <?php echo ($siswa->orangtua_id == $tampil->id) ? 'selected' : '' ;?> value="<?php echo $tampil->id; ?>">
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
    <option <?php echo ($siswa->kota_id == $tampil->id) ? 'selected' : '' ;?>
    value="<?php echo $tampil->id; ?>">
    <?php echo $tampil->nama_kota; ?>
    </option>
        <?php
        }
        ?>
    </select>
        <br>

        <button type="submit" name="submit">Simpan</button>
    </form>
</body>
</html>