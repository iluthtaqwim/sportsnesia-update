<?php
require_once "db.php";
session_start();

if (isset($_POST['ubah_foto'])) {

    $foto = $_FILES['profpic']['name'];
    $tmp = $_FILES['profpic']['tmp_name'];
    $path = "assets/images/foto_user/" . $foto;


    if (move_uploaded_file($tmp, $path)) {  
        $update = "UPDATE user SET foto_profilUser= '$foto' WHERE username='" . $_SESSION['username'] . "'";
        $query = mysqli_query($con, $update);
    }

    if ($query) {
        echo " <script>
        alert('Anda Berhasil Merubah Data')
        window . location = 'profil_player.php'
        </script> ";
    } else {
        echo " <script> alert('Gagal Merubah Data')
        window . location = 'profil_player.php'
        </script> ";
    }
}

?>