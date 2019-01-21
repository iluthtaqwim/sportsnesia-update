<?php include "db.php"; 
$nama_outlet = addslashes(strip_tags ($_POST['nama_outlet'])); 
$jumlah_outlet = addslashes(strip_tags ($_POST['jumlah_outlet'])); 
$alamat_outlet = addslashes(strip_tags ($_POST['alamat_outlet'])); 
$jumlah_karyawan = addslashes(strip_tags ($_POST['jumlah_karyawan'])); 
$kategori = addslashes(strip_tags ($_POST['kategori'])); 
$no_outlet = addcslashes(strip_tags($_POST['no_outlet']));
$email_outlet = addcslashes(strip_tags($_POST['email_outlet']));
$kota = addcslashes(strip_tags($_POST['kota']));


    $sql_insert = mysqli_query($con,"INSERT INTO Data_outlet VALUES ('','$nama_outlet','$jumlah_outlet','$kota','$alamat_outlet','$kategori','$no_outlet','$email_outlet')");
    ?>
        <script type="text/javascript">
        window.location = "login.html";
    </script>
    