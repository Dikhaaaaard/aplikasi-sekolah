<?php
include "koneksi.php";
$id= $_GET['id'];

$sql= "DELETE FROM kota WHERE id=$id";
$query= mysqli_query($conn, $sql);

if ($query) {
    header('location: data.php');
}