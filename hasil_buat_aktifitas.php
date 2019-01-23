<?php
	include "db.php";
	session_start();
	$query = mysqli_query($con,"select * from aktifitas where id = '".$_GET['id']."'");
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
			<div class="col-sm-4 features section-description wow fadeIn">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">

				<?php echo "<img src='assets/images/aktifitas/'".$row['gambar_aktifitas']."'> ";?>
				</div>
				<div class="col-sm-7-8-">
					<h3><?php echo $row['nama_aktifitas'];?></h3>
					<label><?php echo $row['kategori'];?></label>
					<i style=""><br><?php echo $row['tanggal_mulai'];?> - <?php echo $row['tanggal_selesai'];?></i><br>
					<i><?php echo $row['privasi_aktifitas'];?></i><br>
					<i style=""><?php echo $row['deskripsi'];?></i><br>

					<i style="margin-top: -3%; font-size:16px" class="fa">&#xf041;</i> Caturtunggal, Depok, Sleman, DIY
					<br>


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
							<a href="faq.html">FAQ</a> <br>

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