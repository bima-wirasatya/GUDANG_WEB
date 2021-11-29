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

if(isset($_POST['submitR'])){
    $mail = $_POST['emailR'];
    $pass = $_POST['passwordR'];
    $numb = $_POST['phone'];
    $addr = $_POST['alamat'];

    $insert = mysqli_query($koneksi, "INSERT INTO user_detail(user_email, user_password, user_number, user_address, level) values ('$mail', '$pass', '$numb', '$addr', 2)");

    if($insert){
        $alert="<script> alert('Registrasi berhasil'); </script>";
        echo $alert; 
    }else{
        $alert="<script> alert('Registrasi gagal'); </script>";
        echo $alert;
    }
}
?> 