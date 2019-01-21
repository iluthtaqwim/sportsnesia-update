<?php
include "db.php"; 
session_start();
$msg = "";
// if upload button is pressed
if(empty($_SESSION['email']))
{
    echo "Anda harus login untuk mengupload gambar";
}else{
  $result = mysqli_query($con, "SELECT * FROM owner WHERE email='".$_SESSION['email']."' LIMIT 1");
    $row = mysqli_fetch_assoc($result); 
    $nama_pemilik=$row['nama_pemilik'];


  $target = "assets/images/" .basename($_FILES['image']['name']);

  //get all the submitted data from the form
  
  $nama = $_POST['nama'];
  $harga = $_POST['harga'];
  $image = $_FILES['image']['name'];
  $text = $_POST['deskripsi'];
  $radio = $_POST['radio'];
  $kategori = $_POST['kategori'];
  $now = date('Y-m-d H:i:s');

  //now let's move the uploaded image into the folder: images
  if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
    $msg = "Image uploaded successfully";

    ?>
    <script type="text/javascript">
      window.location = "profil_owner.php";
    </script>
    <?php

  } else {
    $msg = "there was a problem uploading image";
  }
     if($_POST['radio'] == 1){
       $sqlRb1 = "update upload_venue set kategori='$kategori',nama_venue='$nama' ,harga_sewa='$harga',gambar_venue='$image',jenis_lapangan='Rumput',deskripsi='$text',nama_pemilik='$nama_pemilik',tanggal_upload='$now' 
       where id='".$_GET['id']."'";
       mysqli_query($con,$sqlRb1);
     }  //masukkan ke transaksi debit
    else{
        $sqlRb1 = "update upload_venue set kategori='$kategori',nama_venue='$nama' ,harga_sewa='$harga',gambar_venue='$image',jenis_lapangan='Bukan Rumput',deskripsi='$text',nama_pemilik='$nama_pemilik',tanggal_upload='$now' 
       where id='".$_GET['id']."'";
       mysqli_query($con,$sqlRb1);
    } //masukkan ke transaksi kredit
   
}
?>