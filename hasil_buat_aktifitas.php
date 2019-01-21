<?php
	include "db.php";
	session_start();
	$query = mysqli_query($con,"select * from aktifitas");
    $row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<title>Profil Aktifitas</title>

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
				<a class="navbar-brand" href="index.html">One Apps For All Your Need Sports</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="top-navbar-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a class="btn btn-link-3" href="buat_aktifitas.html">Buat Aktifitas <i class="fas fa-calendar-plus"></i></a></li>


					<li class="btn-group">

						<a type="button" class="btn btn-link-3" style="margin-left: 15px;">Sports <i class="fas fa-wallet"></i> Pay</a>
						<a type="button" class="btn btn-link-3 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="caret"></span>
							<span class="sr-only">Toggle Dropdown</span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="#">Rp. 10.000</a></li>
							<li><a href="#">Top-Up</a></li>
							<li><a href="#">Withdraw</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">Pengaturan</a></li>
						</ul>
					</li>

					<li class="btn-group">


						<a type="button" class="btn btn-link-3" style="margin-left: 15px;">Tim <i class="fas fa-wallet"></i></a>
						<a type="button" class="btn btn-link-3 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
			<div class="col-sm-7 features section-description wow fadeIn">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
							<?php echo "<img src='assets/images/aktifitas/'".$row['gambar_aktifitas']."' alt='Los Angeles'>";?>
						</div>
					</div>

					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
						<span class="sr-only">Next</span>
					</a>

				</div>
				<div class="col-sm-7-8-">
					<h3><?php echo $row['nama_aktifitas'];?></h3>
					<label><?php echo $row['kategori'];?></label>
					<i style=""><br><?php echo $row['tanggal_mulai'];?> - <?php echo $row['tanggal_selesai'];?></i><br>
					<i><?php echo $row['privasi_aktifitas'];?></i><br>
					<i style=""><?php echo $row['deskripsi'];?></i><br>

					<i style="margin-top: -3%; font-size:16px" class="fa">&#xf041;</i> Caturtunggal, Depok, Sleman, DIY
					<br>

					<a href="buat_aktifitas.html" class="btn btn-success">Edit</a>
				</div>
			</div>




			<div class="col-sm-2 features section-description wow fadeIn">
				<div class="w3-display-container">
					<div class="container">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31626.06845996991!2d110.37685393409014!3d-7.762380783898689!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59951ce552b3%3A0xcefc4549b79d4e26!2sTelaga+Futsal+1!5e0!3m2!1sid!2sid!4v1530541248833"
						 width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
				<br>
				<h4 style="margin-top: 2%; margin-left: 8%;">Fasilitas</h4>
				<i class="fa fa-wifi" aria-hidden="true" style="margin-top: 2%; margin-left: 8%;" data-toggle="tooltip"
				 data-placement="bottom" title="WIFI"></i>
				<i style=" margin-top: 2%; margin-left: 8%;" class="fa" data-toggle="tooltip" data-placement="bottom" title="SHOWER">&#xf2cc;</i>
				<i style=" margin-top: 2%; margin-left: 8%;" class="fa" data-toggle="tooltip" data-placement="bottom" title="PARKIR">&#xf1b9;</i>
				<br><br>
				<h4 style="margin-top: 2%; margin-left: 8%;">Kontak</h4>
				<i style=" margin-top: 2%; margin-left: 8%;" class="fa">&#xf095; <br>08132811191</i>
				<i style=" margin-top: 2%; margin-left: 8%;" class="glyphicon">&#x2709;Ligapelajar@gmail.com</i>


			</div>
		</div>



		<!--  -->
		<div class="features-container section-container">
			<div class="container">


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
							<a href="https://www.instagram.com/sportsnesia/" target="_blank"><i class="fab fa-instagram fa-2x"></i></a> <br>
							<a href="https://twitter.com/@sportsnesiaid" target="_blank"><i class="fab fa-twitter-square fa-2x"></i></a> <br>
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