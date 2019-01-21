<?php
include "db.php"; 
session_start();
$msg = "";
// if upload button is pressed
if(empty($_SESSION['username']))
{
    echo "Anda harus login untuk mengupload gambar";
}else{
  $result = mysqli_query($con, "SELECT * FROM user WHERE username='".$_SESSION['username']."' LIMIT 1");
    $row = mysqli_fetch_assoc($result); 
    $nama_user=$row['username'];
}

  //get all the submitted data from the form
  $kategori = $_POST['kategori'];
  $nama = $_POST['nama_aktifitas'];
  $dtMulai = $_POST['dtMulai'];
  $dtSelesai = $_POST['dtSelesai'];
  $image = $_FILES['image']['name'];
  $privasi = $_POST['privasi_aktifitas']; 
  $text = $_POST['deskripsi'];
  $batas = $_POST['batas'];
  $tmp = $_FILES['image']['tmp_name'];

  $target = "assets/images/aktifitas/" .$image;

  //now let's move the uploaded image into the folder: images
  if (move_uploaded_file($tmp, $target)) {
    $msg = "Image uploaded successfully";
    $upload = mysqli_query($con,"insert into aktifitas(kategori,nama_aktifitas,tanggal_mulai,tanggal_selesai,gambar_aktifitas,privasi_aktifitas,deskripsi,batas,username)
                  values('$kategori','$nama','$dtMulai','$dtSelesai','$image','$privasi','$text','$batas','$nama_user')");
    $get = mysqli_fetch_array($upload);
    ?>
    <script type="text/javascript">
      window.location = "hasil_buat_aktifitas.php?id=<?php echo $get['id'];?>";
    </script>
    <?php

  } else {
    $msg = "there was a problem uploading image";
  }
   
  
?>