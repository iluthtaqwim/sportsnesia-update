<?php
session_start();
include "db.php";
if (isset($_POST["login"]))
        {
$username = $_POST['username']; 
$password = md5($_POST['password']); 

    $queryLogin = mysqli_query($con,"select * from user where username='$username' and password='$password'");
    $row = mysqli_fetch_array($queryLogin,MYSQLI_ASSOC);

    $count = mysqli_num_rows($queryLogin);

    if($count > 0){
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        echo "<script>alert('Anda Telah berhasil login')
                window.location='activity_player.php?=$username'
            </script>";
    
    }else{
       echo "<script>alert('$password , Username atau password anda salah, Coba cek kembali.')
                window.location='loginUser.php'
            </script>";
    }
}
?>

