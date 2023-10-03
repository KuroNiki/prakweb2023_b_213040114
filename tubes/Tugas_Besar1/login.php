<?php
session_start();
if( isset($_SESSION["login"]) ) {
    header("location: index.php");
    exit;
}
require 'functions.php';

if( isset($_POST["login"]) ) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE
        username = '$username'");

    //cek username
    if( mysqli_num_rows($result) === 1 ) {
        //cek password
        $row = mysqli_fetch_assoc($result);
        if( password_verify($password, $row["password"]) ) {

            ///cek session
            $_SESSION["login"] = true;

            header("Location: index.php");
            exit;
        }
    }

    $error = true;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register.css">
    <title>Nikinikiplay/Halaman Login</title>
</head>
<body>

    <h1>Halaman Login</h1>


    <form action="" method="post">
        <ul>
        <?php if( isset($error) ) : ?>
            <p style="color: white;">Username Atau Password Salah</p>
        <?php endif; ?>
            <li>
                <label for="usernane">Username :</label>
                <input type="text" name="username" id="username" autocomplete="off">
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="login">Login</button>
            </li>
            <br>
            <a href="registrasi.php" class="log" style="color: white;">Belum Punya Akun?Buat</a>
        </ul>
    </form>
    
</body>
</html>