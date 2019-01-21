<?php
require_once "db.php";
session_start();

$query = mysqli_query($con,"select * from user");
$data  = mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        <title>SPORTSNESIA </title>

        <!-- CSS -->        
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400|Roboto:300,400,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link href="/static/fontawesome/fontawesome-all.css" rel="stylesheet">
       	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

       	

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>
    	<!-- Top menu -->
		<nav class="navbar navbar-fixed-top navbar-no-bg" role="navigation">
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
					<li><a class="btn btn-link-3" href="signup_owner.html">Become Partners?</a></li>
						<li><a href="AboutUs.html">About Us</a></li>
						
						<li><a href="faq.html">FAQ</a></li>
						<li> 
							<?php
								if (empty($_SESSION['username'])) {
								echo '<a class="btn btn-link-3" href="login.html" target="_blank">LOGIN</a>';
								} else {
								echo '<a class="btn btn-dark" href="logout.php">LOGOUT</a>';
								}
							?>
						</li>
					</ul>
				</div>
			</div>
		</nav>
    
    	<!-- Top content -->
        <div class="top-content">
        	<div class="container">
				<div class="row">
					<div class="col-sm-12 text wow fadeInLeft">
						<h1>One Apps For All Your Need Sports</h1>
						<div class="description">
							<p class="medium-paragraph">
								Cari, Booking dan Ajak orang-orang untuk menjadi lawan/teman olahraga kamu. <a href="https://sportsnesia.com">SPORTSNESIA</a> and enjoy!
							</p>
						</div>
					</div>
				</div>
            </div>
        </div>
        
        <!-- Features -->
        <div class="features-container section-container">
	        <div class="container">
	            
	            <div class="row">
	                <div class="col-sm-6 features-box wow fadeInLeft">
	                	<div class="row">
	                		<div class="col-sm-3 features-box-icon">
	                			<i class="fas fa-search"></i>
	                		</div>
	                		<div class="col-sm-6">

	                			<h3>Cari</h3>
		                    	<p>
		                    		Akses ke semua kategori olahraga terbaik di sekitar anda.
		                    	</p>
		                    	  <a href="search.html" class="btn btn-success">Lihat Partners</a>
	                		</div>

	                	</div>
	                </div>

	                <div class="col-sm-6 features-box wow fadeInLeft">
	                	<div class="row">
	                		<div class="col-sm-3 features-box-icon">
	                			<i class="far fa-calendar-check"></i>
	                		</div>
	                		<div class="col-sm-7">
	                			<h3>Book</h3>
		                    	<p>
		                    		Booking aktivitas olahraga yang cocok dengan anda, dimanapun dan kapanpun tanpa harus pusing antri dan tidak dapat tempat, hemat hingga 70%!
		                    	</p>
		                    	  <a href="#" class="btn btn-success">Lihat Kategori</a>
	                		</div>
	                	</div>
	                </div>
	            </div>
	            
	            <div class="row">
	                <div class="col-sm-6 features-box wow fadeInLeft">
	                	<div class="row">
	                		<div class="col-sm-3 features-box-icon">
	                			<i class="fas fa-handshake"></i>
	                		</div>
	                		<div class="col-sm-8">
	                			<h3>Join Now</h3>
		                    	<p>
		                    		Bergabung dan jadilah lawan/teman bersama dengan orang-orang yang melakukan aktivitas olahraga.
		                    	</p>
		                    	  <a href="#" class="btn btn-success">Lihat Aktivitas</a>
	                		</div>
	                	</div>
	                </div>
	                <div class="col-sm-6 features-box wow fadeInLeft">
	                	<div class="row">
	                		<div class="col-sm-3 features-box-icon">
	                			<i class="fas fa-thumbs-up"></i>
	                		</div>
	                		<div class="col-sm-8">
	                			<h3>Enjoy</h3>
		                    	<p>
		                    		Datang dan lakukan aktivitas olahraga anda, Bawa teman-teman atau Undang orang lain untuk bisa berolahraga denganmu.
		                    	</p>
		                    <a href="signup_user.html" class="btn btn-success">Register Sekarang</a>

	                		</div>
	                	</div>
	                </div>
	            </div>

 			<div class="row">
	                <div class="col-sm-12 features section-description wow fadeIn">
	                    <h2>Apa yang mau anda lakukan hari ini?</h2>
	                    <div class="divider-1"><div class="line"></div></div>
	                </div>
	            </div>	  

	 <div class="container">           <!-- Start Kategori -->
<div class="row">
	

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single_catagory wow fadeInUp" data-wow-delay=".3s">
                        <img src="assets/img/futsal.jpg" alt="">
                        <div class="catagory-title">
                            <a href="#">
                                <h4>FUTSAL</h4>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single_catagory wow fadeInUp" data-wow-delay=".3s">
                        <img src="assets/img/basket.jpg" alt="">
                        <div class="catagory-title">
                            <a href="#">
                                <h4>BASKETBALL</h4>
                            </a>
                        </div>
                    </div>
                </div>

                 <div class="col-12 col-md-6 col-lg-3">
                    <div class="single_catagory wow fadeInUp" data-wow-delay=".3s">
                        <img src="assets/img/volley.jpg" alt="">
                        <div class="catagory-title">
                            <a href="#">
                                <h4>VOLLEY BALL</h4>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single_catagory wow fadeInUp" data-wow-delay=".3s">
                        <img src="assets/img/swim.jpg" alt="">
                        <div class="catagory-title">
                            <a href="#">
                                <h4>SWIMMING</h4>
                            </a>
                        </div>
                    </div>
                </div>

                 <div class="col-12 col-md-6 col-lg-3">
                    <div class="single_catagory wow fadeInUp" data-wow-delay=".3s">
                        <img src="assets/img/yoga.jpg" alt="">
                        <div class="catagory-title">
                            <a href="#">
                                <h4>YOGA</h4>
                            </a>
                        </div>
                    </div>
                   
                </div>


                 <div class="col-12 col-md-6 col-lg-3">
                    <div class="single_catagory wow fadeInUp" data-wow-delay=".3s">
                        <img src="assets/img/badminton@2x.jpg" alt="">
                        <div class="catagory-title">
                            <a href="#">
                                <h4>BADMINTON</h4>
                            </a>
                        </div>
                    </div>
                   
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single_catagory wow fadeInUp" data-wow-delay=".3s">
                        <img src="assets/img/billiard.jpg" alt="">
                        <div class="catagory-title">
                            <a href="#">
                                <h4>BILLIARD</h4>
                            </a>
                        </div>
                    </div>
                    
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single_catagory wow fadeInUp" data-wow-delay=".3s">
                        <img src="assets/img/gym.jpg" alt="">
                        <div class="catagory-title">
                            <a href="#">
                                <h4>GYM</h4>
                            </a>
                        </div>
                    </div>
                    

                    	       
                </div>
               </div>
               <br>

	        <a href="search.html" class="btn btn-success">Lihat Semua</a>
        </div>
    </div>
<!-- End Kategori -->
			
			  <div class="container">
          <div class="row">
	                <div class="col-sm-12 features section-description wow fadeIn">
	                    <h2>Mengapa Sportsnesia?</h2>
	                  
	                </div>

	             

				
			<span class="why-us">Harga transparan dan lebih murah sampai dengan 70%</span> <br>               	
			<span class="why-us">Real-time booking, tak perlu konfirmasi, print voucher, ataupun mengantri</span> <br>
			<span class="why-us">Jaringan terbesar terdiri dari 200+ gym, dan tempat-tempat olahraga lainnya</span> <br>
			<span class="why-us">Bosan olahraga sendiri? Bagikan aktivitasmu, dan orang-orang bisa ikut berolahraga bersama kamu</span> <br>
			<span class="why-us">Transaksi aman dan mudah, tak perlu bayar lagi di tempat</span> <br>
	        
	        

	       </div>
        </div>


 <div class="container">
          <div class="row">
	                <div class="col-sm-12 features section-description wow fadeIn">
	                    <h2>Partner Kami</h2>
	                    <div class="divider-1"><div class="line"></div></div>


	                    <div class="col-12 col-md-6 col-lg-3">
                    <div class="single_catagory wow fadeInUp" data-wow-delay=".3s">
	                    <img src="assets/img/partner/empiregym.png">
	                    </div>

	                    </div>
	 					


	                    <div class="col-12 col-md-6 col-lg-3">
                    <div class="single_catagory wow fadeInUp" data-wow-delay=".3s">
	                    <img src="assets/img/partner/djuraganfutsal.png">
	                    </div>

	                    </div>

	                     <div class="col-12 col-md-6 col-lg-3">
                    <div class="single_catagory wow fadeInUp" data-wow-delay=".3s">
	                    <img src="assets/img/partner/bouncestreet.png">
	                    </div>

	                    </div>
    
 
	                     <div class="col-12 col-md-6 col-lg-3">
                    <div class="single_catagory wow fadeInUp" data-wow-delay=".3s">
	                    <img src="assets/img/partner/673.png" style="width: 120px;">
	                    </div>

	                    </div>
	                    
	                    
               </div>
	       </div>
	        <a href="search.html" class="btn btn-success">Lihat Semua</a>
        </div>


 <div class="container">
          <div class="row">
	                <div class="col-sm-12 features section-description wow fadeIn">
	                    <h2>Diliput Oleh</h2>
	                    <div class="divider-1"><div class="line"></div></div>
	                   
	                  <div class="col-12 col-md-6 col-lg-3">
                    <div class="single_catagory wow fadeInUp" data-wow-delay=".3s">
	                    <img src="assets/img/liputan6.png" class="diliput">
	                    </div>

	                    </div>
	              

	                    <div class="col-12 col-md-6 col-lg-3">
                    <div class="single_catagory wow fadeInUp" data-wow-delay=".3s">
	                    <img src="assets/img/tribun.png" class="diliput1">
	                    </div>

	                    </div>


	                    <div class="col-12 col-md-6 col-lg-3">
                    <div class="single_catagory wow fadeInUp" data-wow-delay=".3s">
	                    <img src="assets/img/beritasatu.png" class="diliput2">
	                    </div>

	                    </div>


	                    <div class="col-12 col-md-6 col-lg-3">
                    <div class="single_catagory wow fadeInUp" data-wow-delay=".3s">
	                    <img src="assets/img/tvone.png" class="diliput3">
	                    </div>

	                    </div>


	           </div>
	       </div>
        </div>






	        </div>
        </div>

     
        
        <!-- Footer -->

        <footer class="footer-2">
        	
        	 <!-- Follow -->
	<div class="container">
          <div class="row">
	                <div class="col-sm-4 features section-description wow fadeIn">
	                    <h5>Sportsnesia</h5>	                
	                    <div class="divider-1"><div class="line"></div></div>
	                    <a href="faq.html">FAQ</a> <br>
	                    <a href="/terms">Terms</a> <br>
	                    <a href="/privacypolicy">Privacy Policy</a> <br>
	                </div>

	                 <div class="col-sm-4 features section-description wow fadeIn">
	                    <h5>Contact</h5>
	                    <div class="divider-1"><div class="line"></div></div>
	                   
	                    <i class="fab fa-line fa-lg"></i> <span class="fo-contact"> @Sportsnesia</span> <br>
	                  <a href="http://wa.orderlink.in/no/6285399995932" target="_blank"><i class="fab fa-whatsapp-square fa-lg"></i> <span class="fo-contact"> 0853 9999 5932</span></a> <br>
	                    <i class="fas fa-envelope-square fa-lg"></i> <span class="fo-contact"> sportsnesia.id@gmail.com</span><br>
	                </div>

	                 <div class="col-sm-4 features section-description wow fadeIn">
	                    <h5>Follow</h5>
	                    <div class="divider-1"><div class="line"></div></div>
	                    	<a href="https://www.instagram.com/sportsnesia/" target="_blank"><i class="fab fa-instagram fa-2x"></i></a> <br>
	                    	<a href="https://twitter.com/@sportsnesiaid" target="_blank"><i class="fab fa-twitter-square fa-2x"></i></a> <br>
	                    	<a href="https://www.facebook.com/sportsnesia.id/" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a> <br>
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




    



        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
         <script src="assets/js/jquerymin.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <!-- <script src="assets/js/retina-1.1.0.js"></script> -->
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

