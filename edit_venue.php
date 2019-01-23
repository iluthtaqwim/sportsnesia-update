<?php
include "db.php"; 

session_start();

if (isset($_POST['upload'])) {

  $result = mysqli_query($con, "SELECT * FROM owner WHERE email='".$_SESSION['email']."' LIMIT 1");
  $row = mysqli_fetch_assoc($result); 
  $nama_pemilik=$row['nama_pemilik'];

  /*$datadb = mysqli_query($con,"SELECT gambar_venue FROM upload_venue WHERE id='".$_GET['id']."' LIMIT 1";);
  $data = mysqli_fetch_assoc($datadb);
   */

  //get all the submitted data from the form
  
  $kategori = addslashes(strip_tags ($_POST['kategori']));
  $nama = addslashes(strip_tags ($_POST['nama']));
  $harga = addslashes(strip_tags ($_POST['harga']));
  $image = $_FILES['image']['name'];
  $map = addslashes(strip_tags ($_POST['maploc']));
  $text = addslashes(strip_tags ($_POST['deskripsi']));
  $now = date('Y-m-d H:i:s');

  $target = "assets/images/" .basename($_FILES['image']['name']);

    $query = "update upload_venue set kategori='$kategori',nama_venue='$nama' ,harga_sewa='$harga',gambar_venue='$image',lokasi='$map',deskripsi='$text',nama_pemilik='$nama_pemilik',tanggal_upload='$now' 
    where id='".$_GET['id']."'";
    $sql_insert = mysqli_query($con,$query);

    if($sql_insert){
      move_uploaded_file($_FILES['image']['tmp_name'], $target);
      echo "<script>
      alert('Berhasil mengupdate venue')
      window.location = 'profil_owner.php'
      </script>";
    }
    else {
      echo "<script>alert('Gagal mengupdate venue')
      window.location = 'edit_tempat_booking.php'
      </script>";
     }
}else {
  die("Akses dilarang...");
}
?>