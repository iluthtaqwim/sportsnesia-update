<?php
include_once "db.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Buat Aktifitas</title>

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
                <a class="navbar-brand" href="activity_player.html">One Apps For All Your Need Sports</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->



            <div class="collapse navbar-collapse" id="top-navbar-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="btn btn-link-3" href="buat_aktifitas.html">Buat Aktifitas <i class="fas fa-calendar-plus"></i></a></li>

                    <li class="btn-group">


                        <a type="button" class="btn btn-link-3" style="margin-left: 15px;">Tim <i class="fas fa-wallet"></i></a>
                        <a type="button" class="btn btn-link-3 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="buat_tim.html">Buat Tim</a></li>

                            <li role="separator" class="divider"></li>
                            <li><a href="#">Pengaturan</a></li>
                        </ul>
                    </li>

                    <li><a class="btn btn-link-3" href="profil_player.html">Profil <i class="fas fa-user-alt"></i></a></li>




                </ul>
            </div>
        </div>
    </nav>

    <br>
    <br>
    <br>

    <!--  -->
    <div class="features-container section-container">
        <div class="container">
            <div class="row">
                <h3 style="font-weight: bold;">Buat Aktifitas</h3>
                <hr>

                <div class="container ">
                    <div class="row">

                        <form class="col-md-6 col-sx-12 description" action="upload_aktifitas.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="grid-2" style="font-weight: bold;">
                                    Kategori:
                                </div>
                                <div class="grid-4">
                                    <select name="kategori" class="drop form-control" style="width: 300px;">
                                        <option value="Category">Pilih Kategori Olahraga</option>
                                        <option value="Futsal">FUTSAL</option>
                                        <option value="Soccer">SOCCER</option>
                                        <option value="Running">RUNNING</option>
                                        <option value="Basketball">BASKETBALL</option>
                                        <option value="Gym">GYM</option>
                                        <option value="Yoga">YOGA</option>
                                        <option value="Swimming">SWIMMING</option>
                                        <option value="Diving">DIVING</option>
                                        <option value="Billiard">BILLIARD</option>
                                        <option value="Tennis">TENNIS</option>
                                        <option value="Badminton">BADMINTON</option>
                                        <option value="Volleyball">VOLLEYBALL</option>
                                        <option value="Cycling">CYCLING</option>
                                        <option value="Triathlon">TRIATHLON</option>
                                        <option value="Zumba">ZUMBA</option>
                                        <option value="Pilates">PILATES</option>
                                        <option value="Crossfit">CROSSFIT</option>
                                        <option value="Muay Thai">MUAY THAI</option>
                                        <option value="Table Tennis">TABLE TENNIS</option>
                                        <option value="Bowling">BOWLING</option>
                                        <option value="Golf">GOLF</option>
                                        <option value="Hiking">HIKING</option>
                                        <option value="Martilarts">MARTIALARTS</option>

                                    </select>
                                </div>
                                <div class="grid-2" style="font-weight: bold;">
                                    Nama Aktifitas
                                </div>
                                <div class="grid-4">
                                    <input style="width: 300px;" name="nama_aktifitas" class="form-control" type="text"
                                        placeholder="" aria-label="">

                                </div>

                                <div class="grid-2" style="font-weight: bold;">
                                    Tanggal mulai Aktifitas
                                </div>
                                <form>
                                    <label for="dt"></label>
                                    <input name="dtMulai" type="date" />
                                </form>
                                <div class="grid-2" style="font-weight: bold;">
                                    Tanggal selesai Aktifitas
                                </div>
                                <form>
                                    <label for="dt1"></label>
                                    <input name="dtSelesai" type="date" />
                                </form>


                                <div class="grid-2" style="font-weight: bold;">
                                    Foto aktifitas
                                </div>
                                <div class="grid-4">
                                    <input type="file" name="image" accept="image/*"/>
                                <div class="grid-2" style="font-weight: bold;">
                                    Privasi Aktifitas
                                </div>
                                <div class="grid-4">
                                    <select name="privasi_aktifitas" class="drop form-control" style="width: 300px;">
                                        <option disabled value="Privasi">Privasi</option>
                                        <option value="Teman">Teman</option>
                                        <option value="Umum">Umum</option>
                                    </select>
                                </div>

                                <div class="grid-2" style="font-weight: bold;">
                                    Deskripsi
                                </div>
                                <div class="grid-4">
                                    <textarea class="textbox form-control" name="deskripsi" rows="5" cols="60" style="width:300px;"></textarea>
                                </div>

                                <div class="grid-2" style="font-weight: bold;">
                                    Jumlah Maksimal Pengikut Aktifitas
                                </div>
                                <div class="grid-4">
                                    <input style="width: 300px;" name="batas" class="form-control" type="number"
                                        placeholder="">
                                </div>

                                <br>
                                <br>
                                <div class="grid-4">
                                    <input href="hasil_buat_aktifitas.php?id=<?php echo $row['id']?>" class="btn btn-success" name="upload" type="submit" style="width:300px;">
                                </div>
                            </div>
                        </form>

                        <div class="col-md-6 col-xs-12 hidden-xs">
                            <div class="img-wrapper">
                                <div class="img-container">
                                    <div class="img-container-2">
                                        <img src="assets/img/aktivity.jpg" alt="Salvia bespoke small batch Pinterest Marfa."
                                            id="js-video-cover" class="pure-img js-thumb">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>











    <br>
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
                        <a href="/faq">FAQ</a> <br>
                        <a href="/terms">Terms</a> <br>
                        <a href="/privacypolicy">Privacy Policy</a> <br>
                    </div>

                    <div class="col-sm-4 features section-description wow fadeIn">
                        <h5>Contact</h5>
                        <div class="divider-1">
                            <div class="line"></div>
                        </div>

                        <i class="fab fa-line fa-lg"></i> <span class="fo-contact"> @Sportsnesia</span> <br>
                        <a href="http://wa.orderlink.in/no/6285399995932" target="_blank"><i class="fab fa-whatsapp-square fa-lg"></i>
                            <span class="fo-contact"> 0853 9999 5932</span></a> <br>
                        <i class="fas fa-envelope-square fa-lg"></i> <span class="fo-contact"> sportsnesia.id@gmail.com</span><br>
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


</body>

</html>