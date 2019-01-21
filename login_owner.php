<?php
include "db.php";
session_start();

$email = addslashes(strip_tags ($_POST['email'])); 
$password = addslashes(strip_tags ($_POST['pass'])); 

    $queryLogin = mysqli_query($con,"select * from owner where email='$email' and password='$password'");
    $row = mysqli_fetch_array($queryLogin,MYSQLI_ASSOC);

    $count = mysqli_num_rows($queryLogin);

    if ($count == 1) {
        $_SESSION['email'] = $email;
	    $_SESSION['status'] = "login";
        echo"
        <script>
            window.location = 'profil_owner.php?=$email';
        </script>";
        
    }
        else
        {
            
        echo"
        <script>
            alert('Username atau Password salah!');
            window.location = 'login_owner.html';          
        </script>";
        }
?>

