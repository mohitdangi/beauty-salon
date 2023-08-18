<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Chic Beauty Salon</title>
	<link rel="shortcut icon" href="img/salon_logo.png" type="image/x-icon">
	<link rel="shortcut icon" href="img/salon_logo.png" type="image/x-icon">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate CSS -->
	<link href="css/animate.css" rel="stylesheet">
    <!-- Venobox CSS -->
	<link href="css/venobox.css" rel="stylesheet">
	<!-- Owl Carousel CSS -->
	<link href="css/owl.carousel.min.css" rel="stylesheet">
	<!--Chosen-->
	<link href="css/chosen.css" rel="stylesheet">
	<!--Time picker-->
	<link href="css/bootstrap-timepicker.min.css" rel="stylesheet">
	<!--Date picker-->
	<link href="css/datepicker.css" rel="stylesheet">
	<!-- Font-awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
	<!-- Google font-->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700,800,900" rel="stylesheet">
	<!-- Main CSS -->
	<link href="css/style.css" rel="stylesheet">
	
</head>
<body>
	<!--Preload-->
		 <?php include_once('includes/header.php');?>

	<!-- end nav -->
	
	<!-- end banner -->
	
	<section class="section-spacing">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2><span>Our gallery</span></h2>
						<p>Our product is fully personalized and well balanced for all age of customers or adults.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-md-4">
					<div class="gallery-item wow fadeIn">
						<a href="img/services/facial.jpg" class="venobox" data-gall="gallery">
							<img src="img/services/facial.jpg" alt="">
							<div class="gallery-caption text-center">
								<i class="fa fa-heart-o"></i>
								<h3>Skin Care</h3>
							</div>
						</a>
					</div>
				</div>
				
				<div class="col-sm-6 col-md-4">
					<div class="gallery-item wow fadeIn">
						<a href="img/gallery/skin care.jpg" class="venobox" data-gall="gallery">
							<img src="img/gallery/skin care.jpg" alt="">
							<div class="gallery-caption text-center">
								<i class="fa fa-heart-o"></i>
								<h3>Skin Care</h3>
							</div>
						</a>
					</div>
				</div>
				
				<div class="col-sm-6 col-md-4">
					<div class="gallery-item wow fadeIn">
						<a href="img/gallery/skin care 2.jpg" class="venobox" data-gall="gallery">
							<img src="img/gallery/skin care 2.jpg" alt="">
							<div class="gallery-caption text-center">
								<i class="fa fa-heart-o"></i>
								<h3>Skin Care</h3>
							</div>
						</a>
					</div>
				</div>
				
				<div class="col-sm-6 col-md-4">
					<div class="gallery-item wow fadeIn">
						<a href="img/services/manicure.jpg" class="venobox" data-gall="gallery">
							<img src="img/services/manicure.jpg" alt="">
							<div class="gallery-caption text-center">
								<i class="fa fa-heart-o"></i>
								<h3>Manicure</h3>
							</div>
						</a>
					</div>
				</div>
				
				<div class="col-sm-6 col-md-4">
					<div class="gallery-item wow fadeIn">
						<a href="img/services/body-massage.jpg" class="venobox" data-gall="gallery">
							<img src="img/services/body-massage.jpg" alt="">
							<div class="gallery-caption text-center">
								<i class="fa fa-heart-o"></i>
								<h3>Body Message</h3>
							</div>
						</a>
					</div>
				</div>
				
				<div class="col-sm-6 col-md-4">
					<div class="gallery-item wow fadeIn">
						<a class="venobox" data-gall="gallery">
							<img src="img/bea.jpg" alt="">
							<div class="gallery-caption text-center">
								<i class="fa fa-heart-o"></i>
								<h3>Hair Treatment</h3>
							</div>
						</a>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="gallery-item wow fadeIn">
						<a href="img/services/facial.jpg" class="venobox" data-gall="gallery">
							<img src="img/services/facial.jpg" alt="">
							<div class="gallery-caption text-center">
								<i class="fa fa-heart-o"></i>
								<h3>Skin Care</h3>
							</div>
						</a>
					</div>
				</div>
				
				<div class="col-sm-6 col-md-4">
					<div class="gallery-item wow fadeIn">
						<a href="img/gallery/skin care.jpg" class="venobox" data-gall="gallery">
							<img src="img/gallery/skin care.jpg" alt="">
							<div class="gallery-caption text-center">
								<i class="fa fa-heart-o"></i>
								<h3>Skin Care</h3>
							</div>
						</a>
					</div>
				</div>
				
				<div class="col-sm-6 col-md-4">
					<div class="gallery-item wow fadeIn">
						<a href="img/gallery/skin care 2.jpg" class="venobox" data-gall="gallery">
							<img src="img/gallery/skin care 2.jpg" alt="">
							<div class="gallery-caption text-center">
								<i class="fa fa-heart-o"></i>
								<h3>Skin Care</h3>
							</div>
						</a>
					</div>
				</div>
				
				<div class="col-sm-6 col-md-4">
					<div class="gallery-item wow fadeIn">
						<a class="venobox" data-gall="gallery">
							<img src="img/gabbi.jpg" alt="">
							<div class="gallery-caption text-center">
								<i class="fa fa-heart-o"></i>
								<h3>Hair and MakeUp</h3>
							</div>
						</a>
					</div>
				</div>
				
				<div class="col-sm-6 col-md-4">
					<div class="gallery-item wow fadeIn">
						<a href="img/sammie.jpg" class="venobox" data-gall="gallery">
							<img src="img/sammie.jpg" alt="">
							<div class="gallery-caption text-center">
								<i class="fa fa-heart-o"></i>
								<h3>Happy Client</h3>
							</div>
						</a>
					</div>
				</div>
				
				<div class="col-sm-6 col-md-4">
					<div class="gallery-item wow fadeIn">
						<a href="img/services/bridal-makeup.jpg" class="venobox" data-gall="gallery">
							<img src="img/services/bridal-makeup.jpg" alt="">
							<div class="gallery-caption text-center">
								<i class="fa fa-heart-o"></i>
								<h3>Bridal MakeUp</h3>
							</div>
						</a>
					</div>
				</div>
			</div>			
		</div>
	</section>
	<!-- end gallery -->
	
	
	<!-- end appointment -->
	
	<?php include_once('includes/footer.php');?>
	<!-- end footer -->
	
	<!-- Bact to top -->
	<div class="back-top">
		<a href="#"><i class="fa fa-angle-up"></i></a>
	</div>
	

	
    <!-- jQuery -->
    <script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
	<script src="js/wow.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/venobox.min.js"></script>
	<script src="js/SmoothScroll.js"></script>
	<script src="js/tilt.jquery.js"></script>
	<script src="js/bootstrap-timepicker.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/chosen.jquery.js"></script>
	<script src="mail/js/form-validator.min.js"></script>
	<script src="mail/js/contact-form-script.js"></script>
    <script src="js/script.js"></script>
	
</body>
</html>
