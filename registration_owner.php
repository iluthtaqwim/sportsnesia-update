<?php include "db.php"; 

if(isset($_POST['daftar'])){


$np = addslashes(strip_tags ($_POST['namaPerusahaan']));
$nama_pemilik = addslashes(strip_tags ($_POST['name'])); 
$email = addslashes(strip_tags ($_POST['email'])); 
$alamat = addslashes(strip_tags ($_POST['alamat']));
$phone = addslashes(strip_tags ($_POST['phone']));
$identitas = addslashes(strip_tags ($_POST['identitas']));
$ni = addslashes(strip_tags($_POST['ni']));
$image = $_FILES['image']['name'];
$kota = addslashes(strip_tags ($_POST['kota'])); 
$password = md5(addslashes(strip_tags ($_POST['pass']))); 

if(isset($_POST['upload'])) {
    $target = "assets/images/" .basename($_FILES['image']['name']);
  
  

       if ($np&&$nama_pemilik&&$email&&$password&&$phone){
        $sql_insert = mysqli_query($con,"INSERT INTO owner (id, nama_perusahaan, nama_pemilik, email, alamat, phone, identitas, no_identitas, kota, password, foto_profil) VALUES ('','$np','$nama_pemilik','$email','$alamat','$phone','$identitas','$ni','$image','$kota','$password')");
        ?>
            <script type="text/javascript">
                window.location = "loginOwner.php";
            </script>
        
        <?php
       }
      //now let's move the uploaded image into the folder: images
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    } else {
        $msg = "there was a problem uploading image";
    }
  }

}
             
?>
