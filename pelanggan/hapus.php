<?php
include "koneksi.php";


$id= $_GET['id'];

$sql= "DELETE FROM tb_pelanggan WHERE id=$id";

$data= mysqli_query($conn, $sql);



if ($data == TRUE) {
    echo "data berhasil dihapus";
    header('location: data.php');
} else {
    echo "data gagal dihapus";
}
