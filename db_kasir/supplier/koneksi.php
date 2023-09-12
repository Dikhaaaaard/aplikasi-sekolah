<?php
$localhost= 'localhost';
$user= 'root';
$password= '';
$database= 'db_kasir';

$conn= mysqli_connect($localhost, $user, $password, $database);

if (!$conn) {
    echo'gagal connect';
}