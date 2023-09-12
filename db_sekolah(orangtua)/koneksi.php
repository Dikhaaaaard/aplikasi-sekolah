<?php
$localhost= 'localhost';
$username= 'root';
$password= '';
$database= 'db_sekolah';
$conn= mysqli_connect($localhost, $username, $password, $database);

if (!$conn) {
    echo "gagal connect";
}