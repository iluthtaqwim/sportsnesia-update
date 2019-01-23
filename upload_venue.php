<?php
include "db.php"; 

session_start();

if (isset($_POST['upload'])) {

  $result = mysqli_query($con, "SELECT * FROM owner WHERE email='".$_SESSION['email']."' LIMIT 1");
  $row = mysqli_fetch_assoc($result); 
  $nama_pemilik=$row['nama_pemilik'];

  //get all the submitted data from the form
  
  $kategori = addslashes(strip_tags ($_POST['kategori']));
  $nama = addslashes(strip_tags ($_POST['nama']));
  $harga = addslashes(strip_tags ($_POST['harga']));
  $image = $_FILES['image']['name'];
  $map = addslashes(strip_tags ($_POST['maploc']));
  $text = addslashes(strip_tags ($_POST['deskripsi']));
  $now = date('Y-m-d H:i:s');

  $target = "assets/images/" .basename($_FILES['image']['name']);

    $query = "INSERT INTO upload_venue (id, kategori ,nama_venue ,harga_sewa ,gambar_venue ,lokasi ,deskripsi ,nama_pemilik,tanggal_upload) 
    VALUES ('', '$kategori','$nama','$harga','$image', '$map','$text','$nama_pemilik','$now')";
    $sql_insert = mysqli_query($con,$query);

    echo $query;
    if($sql_insert){
      move_uploaded_file($_FILES['image']['tmp_name'], $target);
      echo "<script>
      alert('Berhasil mengupload venue')
      window.location = 'profil_owner.php'
      </script>";
    }
    else {
      echo "<script>alert('Gagal mengupload venue')
      window.location = 'upload.php'
      </script>";
     }
}else {
  die("Akses dilarang...");
}
?>