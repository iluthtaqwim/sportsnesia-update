<?PHP
//definisi variabel
$nama_gambar=$_FILES['images'] ['name']; //Variabel nama gambar yang diupload
$tmp_gambar=$_FILES['images'] ['tmp_name']; //lokasi gambar di komputer
$tipe_gambar=$_FILES['images'] ['type']; //tipe gambar untuk filter
$folder="assets/images/$nama_gambar"; //folder tujuan upload

//filter type gambar
if ($tipe_gambar!="image/jpeg" && $type_foto!="image/jpg" && $type_foto!="image/png")
{
echo "Gunakan file yang benar (JPEG, JPG, atau PNG)";
}
else
{
$upload=move_uploaded_file($tmp_gambar,$folder);
if($upload){
    echo "Gambar berhasil diupload";
}
else {
    echo "gagal";
}
}

?>