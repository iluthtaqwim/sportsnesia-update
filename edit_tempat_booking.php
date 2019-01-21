<?php

include "db.php";
session_start();
$id=$_GET['id'];

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <title>Sportsnesia</title>
</head>

<body>
  <!-- Start Header -->
  

  <!-- Start Content -->
    <div class="row">
    <div class="container bg-light p-5 rounded shadow-sm">
    <?php

    require_once "db.php";
    // session_start();

    if (empty($_SESSION['email'])) {
        echo "Ada yang salah";
    } else {
        $query = mysqli_query($con, "select * from owner where email='" . $_SESSION['email'] . "' limit 1");
        $assoc = mysqli_fetch_assoc($query);
        $result = mysqli_query($con, "select * from upload_venue where id='" .$_GET['id']. "' limit 1");
        $row = mysqli_fetch_assoc($result);
        ?>
        <h1>Settings</h1>
        <hr>
        <div class="container ">
        <section class="">
        <div class="row">
        <form class="col-sm-12" method="POST" action="edit_venue.php?id=<?php echo $id ?>" enctype="multipart/form-data">
            <input type="hidden" name="size" value="1000000000">
            <div class="col">
                <div class="grid-2">
                    Kategori:
                </div>
                <div class="grid-4">
                    <select name="kategori" class="drop form-control" style="width: 300px;">
                        <option value="Category">Pilih Kategori olahraga</option>
                        <option value="Futsal">Futsal</option>
                        <option value="GYM">GYM</option>
                        <option value="Swimming">Swimming</option>
                        <option value="Badminton">Badminton</option>
                        <option value="Basketball">Basketball</option>
                        <option value="Yoga">Yoga</option>
                        <option value="Billiard">Billiard</option>
                        <option value="Tennis">Tennis</option>
                        
                    </select>
                </div>
                <div class="grid-2">
                    Nama Venue
                </div>
                <div class="grid-4">
                    <input style="width: 300px;" class="form-control" type="text" name="nama"  placeholder="<?php echo $row['nama_venue'];?>" aria-label="">

                </div>
				
				<div class="grid-2">
                    Harga Sewa
                </div>
                <div class="grid-4">
                    <input style="width: 300px;" class="form-control" type="text" name="harga"  placeholder="<?php echo $row['harga_sewa'];?>" aria-label="">

                </div>
                
                <div class="grid-2">
                    Foto aktifitas
                </div>
                <div class="grid-4">
                    <input type="file" name="image" accept="image/*">
                </div>
                
                <div class="grid-2">
                    Jenis Lapangan
                </div>
               
                <!--Checkbox butons-->
                <div class="btn-group" data-toggle="buttons">
                    <label class="btn btn-default form-check-label">
                        <input class="form-check-input" name="radio" value="1" type="radio" autocomplete="off"> RUMPUT
                    </label>
                    <label class="btn btn-default form-check-label">
                        <input class="form-check-input" name="radio" value="2" type="radio" autocomplete="off"> BUKAN RUMPUT
                    </label>
                </div>


                <div class="grid-2">
                    Deskripsi 
                </div>
                <div class="grid-4">
                    <textarea class="textbox form-control" name="deskripsi" placeholder="<?php echo $row['deskripsi'];?>" rows="5" cols="60" style="width:300px;"></textarea>
                </div>

                
                    

                <div>
                        <input type="submit" name="upload" value="Upload image" id="">
                      </div>
                
            </div>
            </form>
        </section>
    </div>
    </div>
    </div>

      <?php

    }

    ?>

 
  </div>



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
</body>

</html>