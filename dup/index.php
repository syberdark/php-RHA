<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>RHA Aduan Masyarakat</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,300,500" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="css/linearicons.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/nice-select.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/main.css">
	</head>
	<body class="dup-body">
		<div class="dup-body-wrap">
			<!-- Start Header Area -->
			<header class="default-header">
				<div class="header-wrap">
					<div class="header-top d-flex justify-content-between align-items-center">
						<div class="logo">
							<a href="index.php"><img src="../images/loggorha.png" width="60px" alt=""></a>
						</div>
						<div class="main-menubar white-menubar d-flex align-items-center">
							<nav class="hide">
								<a href="index.php">Home</a>
								<a href="index.php?page=aduan">Isi Aduan</a>
							</nav>
							<div class="menu-bar"><span class="lnr lnr-menu"></span></div>
						</div>
					</div>
				</div>
			</header>
		<!-- End Header Area -->
		<!-- Start Banner Area -->
		<section class="generic-banner element-banner relative">
			<div class="container">
				<div class="row height align-items-center justify-content-center">
					<div class="col-lg-10">
						<div class="banner-content text-center">
							<h2 class="text-white">Aduan Masyarakat!</h2>
							<p class="text-white">Silahkan adukan tentang bencana yang terjadi disekitar anda.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Banner Area -->
		<section class="sample-text-area">
		<?php



                if(isset($_GET['page'])){
                $page = $_GET['page'];
                switch ($page) {
                  case 'home':
                    include "home.php";
                    break;
                  case 'aduan':
                    include "aduan.php";
                    break;
                  case 'aduan-notif':
                    include "notif/aduan-notif.php";
                    break;
                  
                  default:
                    echo "404 page not found";
                    break;
                }
              }else{
                include "home.php";
              }
            ?>

            </section>
		<!-- Strat Footer Area -->
		<footer class="section-gap footer-widget-area">
			<div class="overlay overlay-bg"></div>
			<div class="container">
				
				<div class="row">
					
					<div class="col-lg-3 col-sm-6">
						<div class="single-footer-widget">
							<h6 class="text-white text-uppercase mb-20">Link Navigasi</h6>
							<ul class="footer-nav">
								<li><a href="index.php">Home</a></li>
								<li><a href="index.php?page=aduan">Isi Aduan</a></li>
								<li><a href="../index.php">Halaman Analisator</a></li>
								
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="single-footer-widget">
							<h6 class="text-white text-uppercase mb-20">Link Navigasi</h6>
							<ul class="footer-nav">
								<li><a href="index.php">Home</a></li>
								<li><a href="index.php?page=aduan">Isi Aduan</a></li>
								<li><a href="../index.php">Halaman Analisator</a></li>
							</ul>
						</div>
					</div>

					
				</div>
				
			</div>
		</footer>
		<!-- End Footer Area -->
		</div>

		<script src="js/vendor/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="js/vendor/bootstrap.min.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.nice-select.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>
