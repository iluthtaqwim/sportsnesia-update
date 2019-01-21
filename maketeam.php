<?php

include "db.php";
$type = "";
session_start();

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
    <!-- <?php

    if (empty($_SESSION['username'])) {
        echo "Ada yang salah";
    } else {
        $query = mysqli_query($con, "select * from user where username='" . $_SESSION['username'] . "' limit 1");
        ?> -->
        <h1>Make A Team</h1>
        <hr>
        <div class="container ">
        <section class="">
        <div class="row">
        <form class="col-sm-12" method="POST" action="#">
            <input type="hidden" name="size" value="1000000000">
            <div class="col">
              

                <div class="grid-2">
                    Jumlah Anggota
                </div>
                <div class="grid-4">
                  <button type="submit"><a href="maketeam.php?type=2orang">2 orang</a></button>
                  <button type="submit"><a href="maketeam.php?type=4orang">4 orang</a></button>
                </div><p>
                <div class="grid-4">
                  <?php 
$default = "maketeam.php";
@$type = $_GET['type'];

if (!$type) {
        require_once "$default";
      } else {
        switch ($type) {
          case "2orang": ?>
            <select name="user1" class="drop form-control" style="width: 300px;">
                <option value="">--orang ke 1--</option>
                <?php 
                    $query = mysqli_query($con, "select username from user");
                    while ($row = mysqli_fetch_array($query)) {
                     echo "<option value='".$row['username']."'>".$row['username']."</option>";
                       }
                ?>
      </select><p></p>
      <select name="user2" class="drop form-control" style="width: 300px;">
                <option value="">--orang ke 2--</option>
                <?php 
                    $query = mysqli_query($con, "select username from user");
                    while ($row = mysqli_fetch_array($query)) {
                     echo "<option value='".$row['username']."'>".$row['username']."</option>";
                       }
                ?>
      </select>
            <?php break;
          case "4orang": ?>
          <select name="user1" class="drop form-control" style="width: 300px;">
                <option value="">--orang ke 1--</option>
                <?php 
                    $query = mysqli_query($con, "select username from user");
                    while ($row = mysqli_fetch_array($query)) {
                     echo "<option value='".$row['username']."'>".$row['username']."</option>";
                       }
                ?>
      </select><p></p>
      <select name="user2" class="drop form-control" style="width: 300px;">
                <option value="">--orang ke 2--</option>
                <?php 
                    $query = mysqli_query($con, "select username from user");
                    while ($row = mysqli_fetch_array($query)) {
                     echo "<option value='".$row['username']."'>".$row['username']."</option>";
                       }
                ?>
      </select><p></p>
      <select name="user3" class="drop form-control" style="width: 300px;">
                <option value="">--orang ke 3--</option>
                <?php 
                    $query = mysqli_query($con, "select username from user");
                    while ($row = mysqli_fetch_array($query)) {
                     echo "<option value='".$row['username']."'>".$row['username']."</option>";
                       }
                ?>
      </select><p></p>
      <select name="user4" class="drop form-control" style="width: 300px;">
                <option value="">--orang ke 4--</option>
                <?php 
                    $query = mysqli_query($con, "select username from user");
                    while ($row = mysqli_fetch_array($query)) {
                     echo "<option value='".$row['username']."'>".$row['username']."</option>";
                       }
                ?>
      </select>
            <?php break;

          default:
            require_once($default);
            break;

      }}


      ?>
                </div><p>
                <div class="grid-2">
                    Kategori :
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
                </div><p>

                <div class="grid-2">
                    Nama Team
                </div>
                <div class="grid-4">
                    <input style="width: 300px;" class="form-control" type="text" name="nama_tim"  placeholder="" aria-label="">

                </div> <p></p>

                <div>
                        <input type="submit" name="submit" value="Make Team" id="">
                      </div>
                
            </div>
            </form>
        </section>
    </div>
    </div>
    </div>

    <?php
if(isset($_POST['submit'])){
/*$selected_val = $_POST['team_user'];  // Storing Selected Value In Variable
echo "You have selected :" .$selected_val;  // Displaying Selected Value*/

$default = "maketeam.php";
@$type = $_GET['type'];

if (!$type) {
        require_once "$default";
      } else {
        switch ($type) {
          case "2orang":
            $namatim = $_POST['nama_tim'];
            $kategori = $_POST['kategori'];
            $user1 = $_POST['user1'];
            $user2 = $_POST['user2'];
            $anggota = $user1.' , '.$user2;
            $ketua = $_SESSION['username'];

            $maketeam="INSERT INTO team (id_team, kategori, nama_team, ketua ,anggota) VALUES (NULL, '$kategori', '$namatim', '$ketua', '$anggota')";
            $result = mysqli_query($con,$maketeam);
            if ($result) {
          echo "<script>
             alert('$ketua, berhasil buat tim')
            window.location='profil_player.php'
             </script>";
        }else {
           echo "<script>
           alert('gagal buat tim')
           window.location='maketeam.php'
          </script>";
        }
            break;
          case "4orang":
            $namatim = $_POST['nama_tim'];
            $kategori = $_POST['kategori'];
            $user1 = $_POST['user1'];
            $user2 = $_POST['user2'];
            $user3 = $_POST['user3'];
            $user4 = $_POST['user4'];
            $anggota = $user1.' , '.$user2.' , '.$user3.' , '.$user4;      
            $ketua = $_SESSION['username'];

            $maketeam="INSERT INTO team (id_team, kategori, nama_team, ketua ,anggota) VALUES (NULL, '$kategori', '$namatim','$ketua' '$anggota')";
            $result = mysqli_query($koneksi,$maketeam);
            if ($result) {
          echo "<script>
             alert('berhasil buat tim')
            window.location='profil_player.php'
             </script>";
        }else {
           echo "<script>
           alert('gagal buat tim')
           window.location='maketeam.php'
          </script>";
        }

            break;

          default:
            require_once($default);
            break;
        }
      }
}
?>
      
<?php }
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