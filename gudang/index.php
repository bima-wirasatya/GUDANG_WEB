<?php
//register disini ya coba dulu
?>

<?php
//ganti password coba juga di sini
?>

<?php
require('koneksi.php');
session_start();
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];

    if(!empty(trim($email)) && !empty(trim($pass))){
        $query = "SELECT * FROM user_detail WHERE user_email = '$email'";
        $result = mysqli_query($koneksi, $query);
        $num = mysqli_num_rows($result);

        while($row = mysqli_fetch_array($result)){
            $id = $row['id'];
            $level = $row['level'];
            $userVal = $row['user_email'];
            $passVal = $row['user_password'];
            $userName = $row['user_fullname'];
        }

    if($num != 0) {
        if($userVal==$email && $passVal==$pass){
            $_SESSION['id']=$id;
            $_SESSION['name']=$userName;
            $_SESSION['level']=$level;
            header('Location: home.php');
        }else{
            $error = 'user atau password salah!';
            echo $error;
        }
        }else{
            $error = 'Data tidak valid!';
            echo $error;
        }
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <div class="judulweb">
    <tittle><h1><b style="font-family: fantasy; color: rgb(168, 228, 28);">G</b><b style="font-family: fantasy; color: Black;">U</b><b style="font-family: fantasy; color: rgb(168, 228, 28);">D</b><b style="font-family: fantasy; color: Black;">ANG</b></h1></tittle>
    </div>
    <link rel="stylesheet" href="style.css">   
    
</head>

<body>
    <div class="masuk">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log in</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>

            <form id="login" method="POST" action="index.php" class="input-group">
                <p>Email/No.Hp:</p>
                <input  type="text" class="input-field" name="email" required>
                <p>Password:</p>
                <input type="password" class="input-field" name="password" required>
                <p><a href="gantipassword.html" style="color: blue; text-decoration: none; margin-left: 180px;">Ganti password</a></p>
                <button type="submit" class="submit-btn" name="submit">Log In</button>

            </form>

            <form id="register" action="post" class="input-group">
                <p>Email:</p>
                <input type="email" class="input-field" required>
                <p>No telepon :</p>
                <input type="tel" pattern="\(\d\d\d\)-\d\d\d\d\d\d\d\d\d" class="input-field" placeholder="(999)-999999999" required >
                <p>Password :</p>
                <input type="text" class="input-field" required>
                <p>Alamat :</p>
                <input type="text" class="input-field" required>
                <input type="checkbox" class="checkbox">
                <span> I agree to the term & condition</span>
                <button type="submit" class="submit-btn">Register</button>
            </form>

        </div>
    </div>

    <!--java script nya-->
    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register(){
            x.style.left = "-400px"
            y.style.left = "50px"
            z.style.left = "110px"
        }

        function login(){
            x.style.left = "50px"
            y.style.left = "450px"
            z.style.left = "0px"
        }
    </script>
    
</body>
</html>