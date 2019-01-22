<?php include "db.php"; 

if(isset($_POST['daftar'])){

$np = addslashes(strip_tags ($_POST['namaPerusahaan']));
$nama_pemilik = addslashes(strip_tags ($_POST['name'])); 
$email = addslashes(strip_tags ($_POST['email'])); 
$alamat = addslashes(strip_tags ($_POST['alamat']));
$phone = addslashes(strip_tags ($_POST['phone']));
$identitas = addslashes(strip_tags ($_POST['identitas']));
$image = $_FILES['image']['name'];
$kota = addslashes(strip_tags ($_POST['kota'])); 
$password = md5(addslashes(strip_tags ($_POST['pass']))); 

$target = "assets/images/" .basename($_FILES['image']['name']);

$query= "INSERT INTO owner (id, nama_perusahaan, nama_pemilik, email, alamat, phone, identitas, upload_identitas, kota, password, foto_profil) 
VALUES ('','$np','$nama_pemilik','$email','$alamat','$phone','$identitas','$image','$kota','$password', 'user.png')";
$sql_insert = mysqli_query($con, $query);
    
    if ($sql_insert){
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        echo "<script>
                alert('Anda Sudah Melakukan Pendaftaran');
                window.location = "loginOwner.php";
              </script>";
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        echo "<script>alert('Gagal Mendaftar');
        window.location = "signup_owner.html";
        </script>";
    }
} else {
    die("Akses dilarang...");
}
?>

        