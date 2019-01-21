<?php include "db.php"; 
$nama_bank = addslashes(strip_tags ($_POST['nama_bank'])); 
$no_rekening = addslashes(strip_tags ($_POST['no_rekening'])); 
$title = addslashes(strip_tags ($_POST['title'])); 
$np_rekening = addslashes(strip_tags ($_POST['np_rekening'])); 
$pic = addslashes(strip_tags ($_POST['pic'])); 

?>