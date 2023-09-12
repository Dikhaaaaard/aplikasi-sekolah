<?php

// membuat variabel koneksi ke database
$host= 'localhost';
$user= 'root';
$password= '';
$database= 'db_kasir';

$conn= mysqli_connect($host, $user, $password, $database);

// kondisi cek koneksi
//cara1
// if ($conn == TRUE) {

// if ($conn) {
//     echo 'Koneksi berhasil';
// } else {
//     echo 'Koneksi gagal';
// }

//cara2
//atau
if (!$conn) {
    echo 'koneksi gagal';
}