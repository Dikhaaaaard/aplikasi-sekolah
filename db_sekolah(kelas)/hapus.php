<?php
include "koneksi.php";
$id= $_GET['id'];
$sql= "DELETE FROM kelas WHERE id=$id";
$query= mysqli_query($conn, $sql);

if ($query) {
    header('location: data.php');
}


