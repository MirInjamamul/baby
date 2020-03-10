<?php 
session_start();
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'baby');//Upcoming Exams Query
$result = mysqli_query($db, "SELECT * FROM product_list WHERE catagory='doll'");
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TOYS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700' rel='stylesheet' type='text/css'>

	<!-- Css -->
	<link rel="stylesheet" href="catagory/css/nivo-slider.css" type="text/css" />
	<link rel="stylesheet" href="catagory/css/owl.carousel.css">
	<link rel="stylesheet" href="catagory/css/owl.theme.css">
	<link rel="stylesheet" href="catagory/css/bootstrap.min.css">
	<link rel="stylesheet" href="catagory/css/font-awesome.min.css">
	<link rel="stylesheet" href="catagory/css/style.css">
	<link rel="stylesheet" href="catagory/css/responsive.css">

	<!-- jS -->
	<script src="catagory/js/jquery.min.js" type="text/javascript"></script>
	<script src="catagory/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="catagory/js/jquery.nivo.slider.js" type="text/javascript"></script>
	<script src="catagory/js/owl.carousel.min.js" type="text/javascript"></script>
	<script src="catagory/js/jquery.nicescroll.js"></script>
	<script src="catagory/js/jquery.scrollUp.min.js"></script>
	<script src="catagory/js/main.js" type="text/javascript"></script>


</head>
<body>


<!-- TOP HEADER Start
    ================================================== -->

	<section id="top">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<p class="contact-action"><i class="fa fa-phone-square"></i>IN CASE OF ANY QUESTIONS, CALL THIS NUMBER: <strong>+#############(I NEED NUMBER HERE)</strong></p>
				</div>
				<div class="col-md-3 clearfix">
					<ul class="login-cart">
						 
						<li>
					<!--		<div class="cart dropdown">
						  		<a data-toggle="dropdown" href="#"><i class="fa fa-shopping-cart"></i>Cart(1)</a>
					  			<div class="dropdown-menu dropup">
					  				<span class="caret"></span>
						  			<ul class="media-list">
								  		<li class="media">
										    <img class="pull-left" src="images/product-item.jpg" alt="">
										    <div class="media-body">
										      	<h6>Italian Sauce
								    				<span>$250</span>
								    			</h6>
								    		</div> -->
								  		</li>
									</ul>
							<!--		<button class="btn btn-primary btn-sm">Checkout</button> -->
							    </div>
							</div>
						</li>
					</ul>
				</div>
				<div class="col-md-2">
					<div class="search-box">
						<div class="input-group">
					    	<!--<input placeholder="Search Here" type="text" class="form-control">
					      	<span class="input-group-btn">
					        	<button class="btn btn-default" type="button"></button>
					      	</span> -->
					    </div><!-- /.input-group -->
					</div><!-- /.search-box -->
				</div>
			</div> <!-- End Of /.row -->
		</div>	<!-- End Of /.Container -->


	<!-- MODAL Start
    	================================================== -->

		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
		    	<div class="modal-content">
		    		<div class="modal-header">
		        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        		<h4 class="modal-title" id="myModalLabel">Introduce Yourself</h4>
		      		</div>
			      	<div class="modal-body clearfix">

						<form action="#" method="post" id="create-account_form" class="std">
							<fieldset>
								<h3>Create your account</h3>
								<div class="form_content clearfix">
									<h4>Enter your e-mail address to create an account.</h4>
									<p class="text">
										<label for="email_create">E-mail address</label>
										<span>
											<input placeholder="E-mail address"  type="text" id="email_create" name="email_create" value="" class="account_input">
					                    </span>
									</p>
									<p class="submit">
										<button class="btn btn-primary">Create Your Account</button>
									</p>
								</div>
							</fieldset>
						</form>
			      		<form action="" method="post" id="login_form" class="std">
							<fieldset>
								<h3>Already registered?</h3>
								<div class="form_content clearfix">
									<p class="text">
									<label for="email">E-mail address</label>
										<span><input placeholder="E-mail address" type="text" id="email" name="email" value="" class="account_input"></span>
									</p>
									<p class="text">
									<label for="passwd">Password</label>
										<span><input placeholder="Password" type="password" id="passwd" name="passwd" value="" class="account_input"></span>
									</p>
									<p class="lost_password">
										<a href="#popab-password-reset" class="popab-password-link">Forgot your password?</a>
									</p>
									<p class="submit">
										<button class="btn btn-success">Log in</button>
									</p>
								</div>
							</fieldset>
						</form>
			      	</div>
			      	<div class="modal-footer">
			        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			      	</div>
		    	</div>
		  	</div>
		</div>
	</section>  <!-- End of /Section -->



	<!-- LOGO Start
    ================================================== -->

	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<font face="">Need A Logo Here</font>
				<!--	<a href="#">
						<img src="images/logo.png" alt="logo">
					</a> -->
				</div>	<!-- End of /.col-md-12 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</header> <!-- End of /Header -->




	<!-- MENU Start
    ================================================== -->

	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div> <!-- End of /.navbar-header -->

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav nav-main">
						<li class="active"><a href="#">HOME</a></li>
				<li><a href="bmi.php">BMI</a></li>
				<li class="dropdown">
					<a href="">
						HEALTHY FOOD
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
					   <li><a  href="healthyFood.html">Good Health</a></li>
						<li><a  href="hairfood.html">Hair</a></li>
						<li><a  href="brainfood.html">Brain and Memory</a></li>
						<li><a  href="skinfood.html">Healthy Skin</a></li>
							<li><a  href="bloodfood.html">BLODD FLOW and CIRCULATION</a></li>
							<li><a  href="eyefood.html">Healthy Eyes</a></li>
							<li><a  href="kidneyfood.html">Healthy Kidney</a></li>
							<li><a  href="liverfood.html">Healthy Liver</a></li>
							<li><a  href="diabetesfood.html">CONTROL DIABETES</a></li>
							<li><a  href="acidfood.html">ACID REFLUX</a></li>
							<li><a  href="pressurefood.html">LOWER BLOOD PRESSURE</a></li>
					</ul>
				</li> <!-- End of /.dropdown -->
				<li class="dropdown">
					<a href="">
						UNHEALTHY FOOD
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
					   <li><a  href="agavenectar.html">Agave nectar</a></li>
						<li><a  href="lowfatyogurt.html">Low-fat yogurt</a></li>
						<li><a  href="junkfood.html">Gluten-free junk foods</a></li>
						<li><a  href="lowcarb.html">Low-carb junk foods</a></li>
							<li><a  href="icecream.html">Ice cream</a></li>
							<li><a  href="candybar.html">Candy bars</a></li>
							<li><a  href="processedmeat.html">Processed meat</a></li>
							<li><a  href="frencgfri.html">French fries and potato chips</a></li>
							<li><a  href="pastry.html">Pastries, cookies, and cakes</a></li>
							<li><a  href="friedfrilledboiledfood.html">Fried, grilled, or boiled food</a></li>
							<li><a  href="breakfastcereal.html">Sweetened breakfast cereals</a></li>
							<li><a  href="fruitjuice.html">Most fruit juices</a></li>
							<li><a  href="whitebread.html">White bread</a></li>
							<li><a  href="pizza.html">Pizzas</a></li>
							<li><a  href="sugarydrink.html">Sugary drinks</a></li>
					</ul>
				</li> <!-- End of /.dropdown -->
	  <li><a href="about.html">ABOUT</a></li>
					</ul> <!-- End of /.nav-main -->
			</div>	<!-- /.navbar-collapse -->
	</div>	<!-- /.container-fluid -->
</nav>	<!-- End of /.nav -->


	<!-- SLIDER Start
    ================================================== -->


	<section id="slider-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div id="slider" class="nivoSlider">
				    	<img src="images/slider.jpg" alt="" />
				    	<img src="images/slider1.jpg" alt=""/>
				    	<img src="images/slider2.jpg" alt="" />
					</div>	<!-- End of /.nivoslider -->
				</div>	<!-- End of /.col-md-12 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section> <!-- End of Section -->



	<!-- FEATURES Start
    ================================================== -->

	<section id="features">
		<div class="container">
			<div class="row">
				  
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of section -->
  
  <!--ACID REFLUX CATAGORIE Start
		================================================== -->

	<section id="catagorie">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block">
						<div class="block-heading">
							<h2>CATAGORY - TOY</h2>
						</div>
						<div class="row">
						<?php
							while ($row = mysqli_fetch_array($result)) {
								echo "<div class='col-sm-6 col-md-4'>";
								echo "<div class='thumbnail'>";
								echo "<a class='catagotie-head'>";
								echo "<img src='uploads/".$row['image_name']."' >";

								echo "<h3>".$row['product_name']."</h3></a>";
								echo "<div class='caption'>";
								echo "<p></p>";
								echo "<a href='#' class='btn btn-default btn-transparent' role='button'>";
								echo "<span>ORDER</span></a>";							

							echo "</div></div></div>";
							}
						?>
						</div>	<!-- End of /.row -->
					</div>	<!-- End of /.block -->
				</div>	<!-- End of /.col-md-12 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of Section -->

		<!-- CALL TO ACTION Start
    ================================================== -->

	<section id="call-to-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					 
				</div>	<!-- End of /.col-md-12 -->
			</div> <!-- End Of /.Row -->
		</div> <!-- End Of /.Container -->
	</section>	<!-- End of Section -->



	<!-- FOOTER Start
    ================================================== -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="block">
						<h4>GET IN TOUCH</h4>
						<p ><i class="fa  fa-map-marker"></i> <span>Food Concerning Forum</span></p>
						<p> <i class="fa  fa-phone"></i> <span>Phone:</span> No Phone </p>

						<p> <i class="fa  fa-mobile"></i> <span>Mobile:</span> 01902574042</p>

						<p class="mail"><i class="fa  fa-envelope"></i>Eamil: <span>sakira.cse@gmail.com</span></p>
					</div>	<!-- End Of /.block -->
				</div> <!-- End Of Col-md-3 -->
				<div class="col-md-4">
					<div class="block">
						
						</div>	<!-- End Of /.media -->
					</div>	<!-- End Of /.block -->
				</div> <!-- End Of Col-md-3 -->
			</div> <!-- End Of /.row -->
		</div> <!-- End Of /.Container -->



	<!-- FOOTER-BOTTOM Start
    ================================================== -->

		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						
						<p class="copyright-text pull-right">Food Concerning Forum @2019 Designed by <a href="#">MOHONA</a> All Rights Reserved</p>
					</div>	<!-- End Of /.col-md-12 -->
				</div>	<!-- End Of /.row -->
			</div>	<!-- End Of /.container -->
		</div>	<!-- End Of /.footer-bottom -->
	</footer> <!-- End Of Footer -->

	<a id="back-top" href="#"></a>
</body>
</html>
