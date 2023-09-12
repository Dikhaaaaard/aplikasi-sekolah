<?php
session_start();
include "koneksi.php";

$username= $_POST['username'];
$password= sha1($_POST['password']);

$sql= "SELECT * FROM user WHERE username='$username' AND password='$password'";
$query= mysqli_query($conn, $sql);
$result= mysqli_num_rows($query);

// var_dump($result);

if ($result === 1) {
    header('location: index.php');
    $_SESSION['username'] = $username;
    
} else {
    echo "username dan password salah";
}



