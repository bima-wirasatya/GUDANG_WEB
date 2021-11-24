<?php
require('koneksi.php');
session_start();
//mengecek user pada session
if(!isset($_SESSION['id'])){
    $_SESSION['msg']='anda harus login untuk mengakses halaman ini';
    header('Location: index.php');
}
$sesID = $_SESSION['id'];
$sesName = $_SESSION['name'];
$sesLvl = $_SESSION['level'];

?>


<html>
    <head>
        <title>home page</title>
    </head>
<body>
   <!--<h1>Selamet Dateng, <?php// echo $email;?></h1>-->
    <h1>Selamet Dateng, <?php echo $sesName;?></h1>
    
    <p><a href="logout.php">logout</p>
</body>
</html>