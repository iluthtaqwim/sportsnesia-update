<?php include "db.php"; 

if(isset($_POST['daftar'])){

    $username = addslashes(strip_tags ($_POST['name'])); 
    $email = addslashes(strip_tags ($_POST['email'])); 
    $password = md5($_POST['pass']); 
    $phone = addslashes(strip_tags ($_POST['phone'])); 

    $query = "INSERT INTO user (id, username, email ,phone, password, foto_profilUser) VALUES ('','$username','$email','$phone','$password','')";
    $sql_insert = mysqli_query($con, $query);
    
    if ($sql_insert){
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        echo "<script>
        alert('Anda Sudah Melakukan Pendaftaran')
        window.location='loginUser.php'
        </script>";
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        echo "<script>alert('Gagal Mendaftar')
        window.location='signup_user.html'
        </script>";
    }
} else {
    die("Akses dilarang...");
}
?>

        