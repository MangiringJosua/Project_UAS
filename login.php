<?php 
session_start();
 ?>
<!DOCTYPE HTML>
<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Rumah Makan Bintang Raya</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="GetTemplates.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Bootstrap DateTimePicker -->
	<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<?php
include "Koneksi.php";

?>
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="index.php">Bintang <em>Raya</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li class="btn-cta"><a href="index.php"><span>Pemesanan</span></a></li>
						<li><a href="menu.php">Menu</a></li>
						<!--<li class="has-dropdown">
							<a href="services.html">Services</a>
							<ul class="dropdown">
								<li><a href="#">Food Catering</a></li>
								<li><a href="#">Wedding Celebration</a></li>
								<li><a href="#">Birthday's Celebration</a></li>
							</ul>
						</li> -->
						<li><a href="tentang.php">Tentang Kami</a></li>
						<li><a href="contact.php">Kontak</a></li>
						<li class="active"><a href="login.php">Login</a></li>
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<!--<span class="intro-text-small">Hand-crafted by <a href="http://gettemplates.co" target="_blank">GetTemplates.co</a></span> -->
							<h1 class="cursive-font">Login sekarang!</h1>	
						</div>
						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
								
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3 class="cursive-font">Masuk</h3>
											<form method="post">
												<div class="row form-group">
													<div class="col-md-12">
														<div class="row form-group">
													<div class="col-md-12">
														<label >Nama</label>
														<input type="text" name="username" id="text" value="" class="form-control">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="date-start">Kata sandi</label>
														<input type="password" name="password" id="text" class="form-control">
													</div>
												</div>
												
													<br>
												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" name="btnlogin" class="btn btn-primary btn-block" value="Masuk">
														<input type="button" value="Daftar" onclick="window.location = 'daftar.php';" class="btn btn-primary btn-block">
														<center><br><a href="../bpwl_google">Login with Google</a></center>
<?php 

$con = mysqli_connect("localhost","root","","bintangraya");

	

	if (isset($_POST['btnlogin'])) {
		
		$username = $_POST['username'];
		$password = $_POST['password'];


		$ceklogin = mysqli_query($con,"SELECT * FROM login WHERE username='$username'
			AND password='$password'");
		
	
		 if (mysqli_num_rows($ceklogin) == 1) {
			$_SESSION['username'] = $username;
			echo "<div class='alert alert-success'>Login Sukses</div>";
			echo "<meta http-equiv='refresh' content='1;url=indexuser.php'>";
		} 
		else{
			echo "<div class='alert alert-danger'>Login Gagal</div>";
			echo "<meta http-equiv='refresh' content='1;url=login.php'>";
		}
	}
 ?>
 
													</div>
												</div>
											</div></div></form>
										</div>

										
									</div>
								</div>
							</div>
						</div>
					</div>
							
					
				</div>
			</div>
		</div>
	</header>

	
	
	<footer id="gtco-footer" role="contentinfo" style="background-image: url(images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row row-pb-md">

				

				
				<div class="col-md-12 text-center">
					<div class="gtco-widget">
						<h3>Hubungi kami</h3>
						<ul class="gtco-quick-contact">
							<li><a href="#"><i class="icon-phone"></i> +628 1268 2803 18</a></li>
							<li><a href="#"><i class="icon-mail2"></i> bintangraya@gmail.com</a></li>
							
						</ul>
					</div>
					<div class="gtco-widget">
						<h3>Sosial Media</h3>
						<ul class="gtco-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</div>
				</div>

				<center>
					<p><small class="block">&copy; 2018 Rumah Makan Bintang Raya.</small> 
						</center>
				

			</div>

			

		</div>
	</footer>
	<!-- </div> -->

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	
	<script src="js/moment.min.js"></script>
	<script src="js/bootstrap-datetimepicker.min.js"></script>


	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

