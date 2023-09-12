<?php
include "koneksi.php";

//ambil data dari url dengan GET simpan pada variabel id
$id= $_GET['id'];
//buat perintah sql delete
$sql= "DELETE FROM products WHERE id=$id";
//jalankan query mysql
$data= mysqli_query($conn, $sql);



if ($data == TRUE) {
    echo "data berhasil dihapus";
    header('location: data2.php');
} else {
    echo "data gagal dihapus";
}


