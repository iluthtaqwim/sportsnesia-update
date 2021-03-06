<?php
    include_once "db.php";
    session_start();
    if (empty($_SESSION['username'])) {
        echo "Anda harus login terlebih dahulu";
    } else {
        
        $user = mysqli_query($con, "select * from user where username = '".$_SESSION['username']."'limit 1");
        $row = mysqli_fetch_array($user);

        $aktifitas = mysqli_query($con, "select * from aktifitas where username = '".$row['username']."'order by id desc");
        $user_aktifitas = mysqli_fetch_array($aktifitas);

        $query= mysqli_query($con,"select * from booking where user_booking = '".$_SESSION['username']."'order by id desc");
        $row_booking = mysqli_fetch_array($query);

        $q_venue = mysqli_query($con, "select * from upload_venue where nama_venue = '".$row_booking['venue']."'");
        $row_venue = mysqli_fetch_array($q_venue);

        
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Profil</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400|Roboto:300,400,500">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/search.css">
    <link href="/static/fontawesome/fontawesome-all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">




    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

</head>

<body>


    <!-- Top menu -->
    <nav class="navbar navbar-fixed-top navbar" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
                    <span class="sr-only">Sportsnesia</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="activity_player.php">One Apps For All Your Need Sports</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="top-navbar-1">
                <ul class="nav navbar-nav navbar-right">

                    <li><a class="btn btn-link-3" href="buat_aktifitas.php">Buat Aktifitas <i class="fas fa-calendar-plus"></i></a></li>

                    <li><a class="btn btn-link-3" href="profil_player.php">Profil <i class="fas fa-user-alt"></i></a></li>

                </ul>
            </div>
        </div>
    </nav>


    <div class="features-container section-container">
        <div class="container">
            <div class="row">
                <br><br>
                <img src="assets/img/background_profil.jpg" class="img-fluid" alt="Responsive image">

                <form action="upload_profpicUser.php" method="POST" enctype="multipart/form-data">
                    <div class="col-sm-12 col-md-3">
                        <?php
                            if ($row['foto_profilUser'] == "") {
                                echo "<img src='assets/img/user.png' width='220px' height='220px' style='margin-top: -5%; margin-left: 5%;' >";
                            } else {
                                echo "<img src='assets/images/foto_user/" . $row['foto_profilUser'] . "' width='220px' height='220px' class='rounded-circle'>";
                            }
                        ?>
                        <div class="form-group">
                            <label for="ganti_foto">
                                <img src="assets/images/icons/edit_photo.png" width="150px" style="margin-top: -50%;margin-left:20%"
                                    class="btn rounded edit" alt="">
                                <input type="file" class="hidden" id="ganti_foto" name="profpic">
                            </label>
                        </div>
                        <input type="submit" class=" btn btn-dark" style="margin-top: -27%;margin-left:23%" name="ubah_foto"
                            value="Ubah Foto">
                    </div>
                    <div class="col-sm-6 col-md-7" style="margin-top:7%">
                        <h3><?php echo $row['username']?></h3>
                        <i lass="glyphicon">&#x2709;</i><?php echo $row['email']?>
                    </div>
                </form>



                <br>
                <br>
                <br>
                <br>
                <br>

                <div class="col-sm-6 col-md-2">


                    <a href="logout.php" class="btn btn-success" style="margin-left: 38%;">Logout</a>


                </div>

            </div>
            <hr>
        </div>

        <div class="features-container section-container">
            <div class="container">
            <div class="row">
                <h3>Riwayat Pemesanan</h3>

                <?php 
                    foreach($query as $row_booking){
                        ?>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail" class="card">
                        <div class="w3-display-container">
                            <img src="<?php echo " assets/images/" . $row_booking['gambar_venue']; ?>" alt="Lights" width="348" height="160">
                            <div class="container" class="div.relative">
                                <div class="w3-display-bottommiddle w3-container" class="bg-1">

                                    <h3 style="margin-top: 3%;"><?php echo $row_booking['venue']; ?></h3>
                                    
                                        <div class="col-sm-2">
                                            <p><i style="font-size:20px;padding-right:10px" class="fa">Tanggal booking</i>
                                            <p><i style="font-size:20px;padding-right:10px" class="fa">Jam Booking</i>
                                            <p><i style="font-size:20px;padding-right:10px" class="fa">Durasi</i>
                                        </div>
                                        <div class="col-sm-2">
                                            <?php echo $row_booking['tanggal_booking']?></p>
                                            <?php echo $row_booking['jam_booking']?></p>
                                            <?php echo  $row_booking['durasi'], " Jam"?></p>
                                        </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                    <?php } ?>
            </div>

            <div class="row">
                <h3>Riwayat Buat Aktifitas</h3>

                <?php 
                    foreach($aktifitas as $user_aktifitas){
                        ?>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail" class="card">
                        <div class="w3-display-container">
                            <img src="<?php echo " assets/images/aktifitas/" . $user_aktifitas['gambar_aktifitas']; ?>" alt="Lights" width="348" height="160">
                            <div class="container" class="div.relative">
                                <div class="w3-display-bottommiddle w3-container" class="bg-1">
                                    <img src="<?php echo "assets/images/foto_user/" . $row['foto_profilUser']; ?>" alt="" width="75" height="75" style="margin-top: -3%;">

                                    <h3 style="margin-top: -3%; margin-left: 8%;"><?php echo $user_aktifitas['nama_aktifitas']; ?></h3>

                                </div>
                                <p><a href="hasil_buat_aktifitas.php?id=<?php echo $user_aktifitas['id'] ?>" class="btn btn-success" role="button">Pilih</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                    <?php } ?>
            </div>
        </div>




        <!-- Footer -->
        <center>
            <footer class="footer-2">

                <!-- Follow -->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 features section-description wow fadeIn">
                            <h5>Sportsnesia</h5>
                            <div class="divider-1">
                                <div class="line"></div>
                            </div>
                            <a href="faq.html">FAQ</a> <br> <br>
                        </div>

                        <div class="col-sm-4 features section-description wow fadeIn">
                            <h5>Contact</h5>
                            <div class="divider-1">
                                <div class="line"></div>
                            </div>

                            <i class="fab fa-line fa-lg"></i> <span class="fo-contact"> @Sportsnesia</span> <br>
                            <a href="http://wa.orderlink.in/no/6285399995932" target="_blank"><i class="fab fa-whatsapp-square fa-lg"></i>
                                <span class="fo-contact"> 0853 9999 5932</span></a> <br>
                            <i class="fas fa-envelope-square fa-lg"></i> <span class="fo-contact">
                                sportsnesia.id@gmail.com</span><br>
                        </div>

                        <div class="col-sm-4 features section-description wow fadeIn">
                            <h5>Follow</h5>
                            <div class="divider-1">
                                <div class="line"></div>
                            </div>
                            <a href="https://www.instagram.com/sportsnesia/" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
                            <br>
                            <a href="https://twitter.com/@sportsnesiaid" target="_blank"><i class="fab fa-twitter-square fa-2x"></i></a>
                            <br>
                            <a href="https://www.facebook.com/sportsnesia.id/" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a>
                            <br>
                        </div>
                    </div>
                </div>

            </footer>


            <footer class="footer">



                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 footer-copyright">
                            &copy; 2018 <a href="https://sportsnesia.com">SPORTSNESIA</a>
                        </div>
                    </div>
                </div>



    </div>
    </div>
    </footer>
    </center>

    <!-- Javascript -->
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/js/jquerymin.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.backstretch.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/retina-1.1.0.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/scripts.js"></script>





    <!-- Popper js -->
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <!-- Bootstrap-4 js -->

    <!-- All Plugins JS -->
    <script src="assets/js/others/plugins.js"></script>


    <script src="assets/js/placeholder.js"></script>

<?php
}?>
</body>

</html>