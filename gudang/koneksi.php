<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "user";
$koneksi = mysqli_connect ($server, $username, $password, $db);
//urutan harus sama

//cek jika koneksi gagal
if (mysqli_connect_errno()){
    echo "Koneksi gagal :" .mysqli_connect_error(); 
}

?>