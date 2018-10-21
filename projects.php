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
		<title>Our projects</title>

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

<style media="screen">

     .modal-header-success {
  color:#fff;
  padding:9px 15px;
  border-bottom:1px solid #eee;
  background-color: #5cb85c;
  -webkit-border-top-left-radius: 5px;
  -webkit-border-top-right-radius: 5px;
  -moz-border-radius-topleft: 5px;
  -moz-border-radius-topright: 5px;
   border-top-left-radius: 5px;
   border-top-right-radius: 5px;
}
</style>

		</head>
		<body>
      <header id="header" id="home">
        <div class="header-top">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 col-sm-6 col-4 header-top-left no-padding">
                <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                </ul>
              </div>
              <div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">
                <a href="tel:+8801926662134">+8801926662134</a>
                <a href="mailto:techcraftbd@outlook.com">techcraftbd@outlook.com</a>
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
								Projects
							</h1>
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="projects.php"> Projects</a></p>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->


      <!-- Start project Area -->
      <section class="project-area section-gap" id="project">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8 pb-30 header-text text-center">
              <h1 style="color:white;" class="mb-10">Latest Finished Projects</h1>
              <p>
                Who are in extremely love with eco friendly system..
              </p>
            </div>
          </div>




          <div class="row">



            <?php
    $query = "SELECT * FROM project ORDER BY id ASC";
    $result = mysqli_query($connection,$query);
    if(mysqli_num_rows($result) > 0)
    {
    while($row = mysqli_fetch_array($result))
    {

    ?>
    <div class="col-lg-4">
         <div class="table-responsive" style="color: white;">
              <table class="table table-bordered">
                   <tr>
                        <th width="70%"></th>
                        <th width="30%">View</th>
                   </tr>

                   <tr>
                        <td><?php echo $row["project_name"]; ?></td>
                        <td><input type="button" name="view" value="show details" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_data" /></td>
                   </tr>
              </table>
         </div>
       </div>
          <?php
    }
    }
    ?>
          </div>


        </div>
      </section>
      <!-- End project Area -->










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



  <div id="dataModal" class="modal fade">
       <div class="modal-dialog">
            <div class="modal-content">
                 <div class="modal-header modal-header-success">
                   <h4 class="modal-title">Project Details</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>

                 </div>
                 <div class="modal-body" id="project_detail" >
                 </div>
                 <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                 </div>
            </div>
       </div>
  </div>
  <script>
  $(document).ready(function(){
       $('.view_data').click(function(){
            var project_id = $(this).attr("id");
            $.ajax({
                 url:"select.php",
                 method:"post",
                 data:{project_id:project_id},
                 success:function(data){
                      $('#project_detail').html(data);
                      $('#dataModal').modal("show");
                 }
            });
       });
  });
  </script>
