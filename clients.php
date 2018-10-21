<?php
require_once ("config.php");

session_start();

 ?>




	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Our Clients</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">
			<link rel="stylesheet" href="css/hexagons.min.css">
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>
			  <header id="header" id="home">
		  		<div class="header-top">
		  			<div class="container">
				  		<div class="row">
				  			<div class="col-lg-6 col-sm-6 col-4 header-top-left no-padding">
				  				<ul>
									<li><a href="https://www.facebook.com/rumon.s2134/"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
									<li><a href="#"><i class="fa fa-behance"></i></a></li>
				  				</ul>
				  			</div>
				  			<div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">
				  				<a href="tel:+8801926662134">+8801926662134</a>
				  				<a href="techcraftbd@outlook.com">techcraftbd@outlook.com</a>
				  			</div>
				  		</div>
		  			</div>
				</div>
			    <div class="container main-menu">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.php"><img src="img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="index.php">Home</a></li>
				          <li><a href="about.php">About</a></li>
				          <li><a href="services.php">Service</a></li>
				          <li><a href="projects.php">Projects</a></li>
                   <li><a href="product.php">RnD & Product</a></li>
                   <li><a href="clients.php">Our clients</a></li>
				          <li><a href="contact.php">Contact</a></li>

				        </ul>
				      </nav><!-- #nav-menu-container -->
			    	</div>
			    </div>
			  </header><!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								About Us
							</h1>
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="clients.php"> Our clients</a></p>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->



      <!-- Start feedback Area -->
      <section class="feedback-area section-gap relative" id="feedback">
        <div class="overlay overlay-bg"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-12 pb-30 header-text text-center">
              <h1 class="mb-10 text-white">Enjoy our Client’s Feedback</h1>
              <p class="text-white">
                Who are in extremely love with eco friendly system..
              </p>
            </div>
          </div>
          <div class="row feedback-contents justify-content-center align-items-center">
            <div class="col-lg-6 relative d-flex justify-content-center align-items-center">


              <table class="table"  >
                <thead class="thead-dark">
                  <tr>

                <h2><th class="text-center"><strong> Our clients<strong> </th></h2>

                  </tr>
                </thead>

              <?php
          $count=0;
          $query = "SELECT * FROM clients ORDER BY id ASC";
          $result = mysqli_query($connection,$query);
          if(mysqli_num_rows($result) > 0)
          {
          while($row = mysqli_fetch_array($result))
          {
          ?>


                <tbody>
                  <tr style="color:white;">
                  <td><?php echo $row["clients_name"]; ?></td>
                  </tr>

                </tbody>

                <?php
        }
      }
       ?>
              </table>



                  </div>





            <div class="col-lg-6 feedback-right">
              <div class="active-review-carusel">
                <div class="single-feedback-carusel">
                  <div class="title d-flex flex-row">
                    <h4 class="text-white pb-10">Fannie Rowe</h4>
                    <div class="star">
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                    </div>
                  </div>
                  <p class="text-white">
                    Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                  </p>
                </div>
                <div class="single-feedback-carusel">
                  <div class="title d-flex flex-row">
                    <h4 class="text-white pb-10">Fannie Rowe</h4>
                    <div class="star">
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star"></span>
                    </div>
                  </div>
                  <p class="text-white">
                    Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                  </p>
                </div>
                <div class="single-feedback-carusel">
                  <div class="title d-flex flex-row">
                    <h4 class="text-white pb-10">Fannie Rowe</h4>
                    <div class="star">
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked	"></span>
                    </div>
                  </div>
                  <p class="text-white">
                    Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End feedback Area -->


s


      			<!-- start footer Area -->
      			<footer class="footer-area section-gap bg-success text-black">
      				<div class="container">
      					<div class="row">
      						<div class="col-lg-5 col-md-6 col-sm-6">
      							<div class="single-footer-widget">
      								<h6>About Us</h6>
      								<p style="color : white">
      									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
      									Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a>IQbator</a>
      								</p>
      								<p class="footer-text">

      								</p>
      							</div>
      						</div>

      						<div class="col-lg-7 col-md-6 col-sm-6 social-widget" >
      							<div class="single-footer-widget" style="color : white;float: right">
      								<h6>Follow Us</h6>
      								<p style="color : white;">Let us be social</p>
      								<div class="footer-social d-flex align-items-center">
      									<a href="https://www.facebook.com/rumon.s2134/"><i class="fa fa-facebook"></i></a>
      									<a href="#"><i class="fa fa-twitter"></i></a>
      									<a href="#"><i class="fa fa-dribbble"></i></a>
      									<a href="#"><i class="fa fa-behance"></i></a>
      								</div>
      							</div>
      						</div>
      					</div>
      				</div>
      			</footer>
      			<!-- End footer Area -->

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>
			<script src="js/owl.carousel.min.js"></script>
			<script src="js/hexagons.min.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>
			<script src="js/waypoints.min.js"></script>
			<script src="js/mail-script.js"></script>
			<script src="js/main.js"></script>
		</body>
	</html>
