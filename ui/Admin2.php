



<!DOCTYPE html>
<html lang="en">
<head>
<title>Checkout</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="aStar Fashion Template Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.3/bootstrap.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/checkoutAd.css">
<link rel="stylesheet" type="text/css" href="styles/checkout_responsive.css">
<link rel="stylesheet" type="text/css" href="styles/logout.css">
<link rel="stylesheet" type="text/css" href="styles/users.css">

</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			
			<!-- Hamburger -->
			<div class="hamburger menu_mm"><i class="fa fa-bars menu_mm" aria-hidden="true"></i></div>

			<!-- Logo -->
			<div class="header_logo">
				<a href="#"><div>p<span>Hunt</span></div></a>
			</div>

			<!-- Navigation -->
			<nav class="header_nav">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li><a href="Admin2.php">Adminstration</a></li>
					<form action="../php.php" method="POST">
					<button type ="submit" name="logout" class="newsletter_buttonLOG">Log out</button>
					<button type ="submit" name="view" class="buttonuser" >Viewallusers</button></i></a>
					</form>
					
				</ul>
			</nav>
			<!-- Header Extra -->
			<div class="header_extra ml-auto d-flex flex-row align-items-center justify-content-start">

				<!-- Language -->
				<div class="info_languages has_children">
					<div class="language_flag"><img src="images/flag_1.svg" alt="https://www.flaticon.com/authors/freepik"></div>
					<div class="dropdown_text">english</div>
					<div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
					
					<!-- Language Dropdown Menu -->
					 <ul>
					 	<li><a href="#">
				 			<div class="language_flag"><img src="images/flag_2.svg" alt="https://www.flaticon.com/authors/freepik"></div>
							<div class="dropdown_text">french</div>
					 	</a></li>
					 	<li><a href="#">
				 			<div class="language_flag"><img src="images/flag_3.svg" alt="https://www.flaticon.com/authors/freepik"></div>
							<div class="dropdown_text">japanese</div>
					 	</a></li>
					 	<li><a href="#">
				 			<div class="language_flag"><img src="images/flag_4.svg" alt="https://www.flaticon.com/authors/freepik"></div>
							<div class="dropdown_text">russian</div>
					 	</a></li>
					 	<li><a href="#">
				 			<div class="language_flag"><img src="images/flag_5.svg" alt="https://www.flaticon.com/authors/freepik"></div>
							<div class="dropdown_text">spanish</div>
					 	</a></li>
					 </ul>

				</div>

				<!-- Currency -->
				<div class="info_currencies has_children">
					<div class="dropdown_text">usd</div>
					<div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>

					<!-- Currencies Dropdown Menu -->
					 <ul>
					 	<li><a href="#"><div class="dropdown_text">EUR</div></a></li>
					 	<li><a href="#"><div class="dropdown_text">YEN</div></a></li>
					 	<li><a href="#"><div class="dropdown_text">GBP</div></a></li>
					 	<li><a href="#"><div class="dropdown_text">CAD</div></a></li>
					 </ul>

				</div>

				<!-- Cart -->
				<div class="cart d-flex flex-row align-items-center justify-content-start">
					<div class="cart_icon"><a href="cart.html">
						<img src="images/bag.png" alt="">
						<div class="cart_num">2</div>
					</a></div>
				</div>

			</div>

		</div>
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-start justify-content-start menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="menu_top d-flex flex-row align-items-center justify-content-start">

			<!-- Language -->
			<div class="info_languages has_children">
				<div class="language_flag"><img src="images/flag_1.svg" alt="https://www.flaticon.com/authors/freepik"></div>
				<div class="dropdown_text">english</div>
				<div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
				
				<!-- Language Dropdown Menu -->
				 <ul>
				 	<li><a href="#">
			 			<div class="language_flag"><img src="images/flag_2.svg" alt="https://www.flaticon.com/authors/freepik"></div>
						<div class="dropdown_text">french</div>
				 	</a></li>
				 	<li><a href="#">
			 			<div class="language_flag"><img src="images/flag_3.svg" alt="https://www.flaticon.com/authors/freepik"></div>
						<div class="dropdown_text">japanese</div>
				 	</a></li>
				 	<li><a href="#">
			 			<div class="language_flag"><img src="images/flag_4.svg" alt="https://www.flaticon.com/authors/freepik"></div>
						<div class="dropdown_text">russian</div>
				 	</a></li>
				 	<li><a href="#">
			 			<div class="language_flag"><img src="images/flag_5.svg" alt="https://www.flaticon.com/authors/freepik"></div>
						<div class="dropdown_text">spanish</div>
				 	</a></li>
				 </ul>

			</div>

			<!-- Currency -->
			<div class="info_currencies has_children">
				<div class="dropdown_text">usd</div>
				<div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>

				<!-- Currencies Dropdown Menu -->
				 <ul>
				 	<li><a href="#"><div class="dropdown_text">EUR</div></a></li>
				 	<li><a href="#"><div class="dropdown_text">YEN</div></a></li>
				 	<li><a href="#"><div class="dropdown_text">GBP</div></a></li>
				 	<li><a href="#"><div class="dropdown_text">CAD</div></a></li>
				 </ul>

			</div>

		</div>
		<div class="menu_search">
			<form action="../ui/productsearch.php" class="header_search_form menu_mm" method="POST">
				<input type="search" name="name" class="search_input menu_mm" placeholder="Search" required="required">
				<button name="search"class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="Admin2.php">Adminstration</a></li>
				
				<form action="../php.php" method="POST">
					<button type ="submit" name="logout" class="newsletter_buttonLOG">Log out</button>
					<button type ="submit" name="view" class="buttonuser" >Viewallusers</button></i></a>
					</form>
			</ul>
		</nav>
		<div class="menu_extra">
			<div class="menu_social">
				<ul>
					<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	
	<!-- Sidebar -->

	<div class="sidebar">
		
		<!-- Info -->
		<div class="info">
			<div class="info_content d-flex flex-row align-items-center justify-content-start">
				
				<!-- Language -->
				<div class="info_languages has_children">
					<div class="language_flag"><img src="images/flag_1.svg" alt="https://www.flaticon.com/authors/freepik"></div>
					<div class="dropdown_text">english</div>
					<div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
					
					<!-- Language Dropdown Menu -->
					 <ul>
					 	<li><a href="#">
				 			<div class="language_flag"><img src="images/flag_2.svg" alt="https://www.flaticon.com/authors/freepik"></div>
							<div class="dropdown_text">french</div>
					 	</a></li>
					 	<li><a href="#">
				 			<div class="language_flag"><img src="images/flag_3.svg" alt="https://www.flaticon.com/authors/freepik"></div>
							<div class="dropdown_text">japanese</div>
					 	</a></li>
					 	<li><a href="#">
				 			<div class="language_flag"><img src="images/flag_4.svg" alt="https://www.flaticon.com/authors/freepik"></div>
							<div class="dropdown_text">russian</div>
					 	</a></li>
					 	<li><a href="#">
				 			<div class="language_flag"><img src="images/flag_5.svg" alt="https://www.flaticon.com/authors/freepik"></div>
							<div class="dropdown_text">spanish</div>
					 	</a></li>
					 </ul>

				</div>

				<!-- Currency -->
				<div class="info_currencies has_children">
					<div class="dropdown_text">usd</div>
					<div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>

					<!-- Currencies Dropdown Menu -->
					 <ul>
					 	<li><a href="#"><div class="dropdown_text">EUR</div></a></li>
					 	<li><a href="#"><div class="dropdown_text">YEN</div></a></li>
					 	<li><a href="#"><div class="dropdown_text">GBP</div></a></li>
					 	<li><a href="#"><div class="dropdown_text">CAD</div></a></li>
					 </ul>

				</div>

			</div>
		</div>

		<!-- Logo -->
		<div class="sidebar_logo">
			<a href="#"><div>p<span>Hunt</span></div></a>
		</div>

		<!-- Sidebar Navigation -->
		<nav class="sidebar_nav">
			<ul>
				<li><a href="Admin2.php">Adminstration<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				
				<form action="../php.php" method="POST">
					<button type ="submit" name="logout" class="newsletter_buttonLOG">Log out</button>
					<button type ="submit" name="view" class="buttonuser" >Viewallusers</button></i></a>
					</form>
			</ul>
		</nav>

		<!-- Search -->
		<div class="search">
			<form action="../ui/productsearch.php" class="search_form" id="sidebar_search_form" method="POST">
				<input type="text" name="name" class="search_input" placeholder="Search" required="required">
				<button name="search"class="search_button"><i class="fa fa-search" aria-hidden="true"></i></button>
			</form>
		</div>

		<!-- Cart -->
		<div class="cart d-flex flex-row align-items-center justify-content-start">
			<div class="cart_icon"><a href="">
			</a></div>
		</div>
	</div>




	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/checkout.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="home_content">
				<div class="home_title">Admin page!</div>
				<div class="breadcrumbs">
					<ul class="d-flex flex-row align-items-center justify-content-start">
						<li><a href="Admin1.php">Home</a></li>
						<li><a href="Admin2.php">Adminstration</a></li>
						
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- Checkout -->

	<div class="checkout">
		<div class="section_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="checkout_container d-flex flex-xxl-row flex-column align-items-start justify-content-start">
							
							<!-- Billing -->
							<div class="billing checkout_box">
								<div class="checkout_title">Add Product</div>
								<div class="checkout_form_container">
									<form action="../php.php" id="checkout_form" class="checkout_form" method="POST">
										<div class="row">
											<div class="col-lg-6">
												<!-- Name -->
												<label for="checkout_name">Product name*</label>
												<input type="text" name =" pname"id="checkout_name" class="checkout_input" required="required">
											</div>
											<div class="col-lg-6">
												<!-- Last Name -->
												<label for="checkout_last_name">Product price*</label>
												<input type="text" name="pprice" id="checkout_last_name" class="checkout_input" required="required">
											</div>
										</div>
										<div>
											<!-- Email -->
											<label for="checkout_email">Product description*</label>
											<input type="phone" name="pdesc"id="checkout_email" class="checkout_input" required="required">
										</div>

										<div>
											<!-- Country -->
											<label for="checkout_country">Category*</label>
											<select name="checkout_country" id="checkout_country" class="dropdown_item_select checkout_input" require="required">
												<option></option>
												<option>Trousers</option>
												<option>T-shirts</option>
												<option>Dresses</option>
												<option>Shoes</option>
												<option>Bags</option>
											</select>
											<input class="newsletter_button" type="submit" name="addprod" value="add product">
										</div>
										
										</form>
											

										
											
								</div>
							</div>

							<!-- delete-->
							
							 <!-- UPDATE-->
							 <div class="billing checkout_box">
								<div class="checkout_title">Select Product to update/delete</div>
								<div class="checkout_form_container">
									<form action="../php.php" id="checkout_form" class="checkout_form" method="POST">
										<div class="row">
											<div class="col-lg-6">
												<!-- Name -->
												<label for="checkout_name">Product name*</label>
												<input type="text" name="prodname" id="checkout_name" class="checkout_input" required="required">
											</div>
											
										</div>
										

										<div>
											<!-- Country -->
											<label for="checkout_country">Category*</label>
											<select name="prodcatg" id="checkout_country" class="dropdown_item_select checkout_input" require="required">
												<option></option>
												<option>Trousers</option>
												<option>T-shirts</option>
												<option>Dresses</option>
												<option>Shoes</option>
												<option>Bags</option>
											</select>

											<input class="newsletter_button" type="submit" name="delprod" value="Delete product "><br><br><br><br>
										</form>
										<!--UPDAAAAAAAAATE-->
											<form action="../php.php" method="POST" id="checkout_form" class="checkout_form">
												<div>
											<label for="checkout_name">Product name*</label>
												<input type="text" name="editedprod"id="checkout_name" class="checkout_input" required="required" placeholder="Please choose the product you want to update..">
											</div>
											<h2>New Updates</h2>
											<div>
											<label for="checkout_name">new Product name*</label>
												<input type="text" name ="newname"id="checkout_name" class="checkout_input" >
											</div>
											<div class="col-lg-6">
												<!-- Last Name -->
												<label for="checkout_last_name">Product price*</label>
												<input type="text"name="newprice" id="checkout_last_name" class="checkout_input" >
											</div>
										</div>
										<div>
											<!-- Email -->
											<label for="checkout_email">Product description*</label>
											<input type="phone" name="newdesc"id="checkout_email" class="checkout_input" >
										</div>

										<div>
											<!-- Country -->
											<label for="checkout_country">Category*</label>
											<select name="newcatg" id="checkout_country" class="dropdown_item_select checkout_input" >
												<option></option>
												<option>Trousers</option>
												<option>T-shirts</option>
												<option>Dresses</option>
												<option>Shoes</option>
												<option>Bags</option>
											</select>
											
											<input class="newsletter_button" type="submit" name="updprod" value="update product">

										</div>
										
										</form>
											
								</div>
							</div>
									<!-- Order Text -->
									<div class="order_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra temp or so dales. Phasellus sagittis auctor gravida. Integ er bibendum sodales arcu id te mpus. Ut consectetur lacus.</div>

									
								
							</div>
</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	

	<!-- Footer -->

	<footer class="footer">
		<div class="footer_content">
			<div class="section_container">
				<div class="container">
					<div class="row">
						
						<!-- About -->
						<div class="col-xxl-3 col-md-6 footer_col">
							<div class="footer_about">
								<!-- Logo -->
								<div class="footer_logo">
									<a href="#"><div>p<span>Hunt</span></div></a>
								</div>
								<div class="footer_about_text">
									<p>Donec vitae purus nunc. Morbi faucibus erat sit amet congue mattis. Nullam fringilla faucibus urna, id dapibus erat iaculis ut. Integer ac sem.</p>
								</div>
								
							</div>
						</div>

						<!-- Questions -->
						<div class="col-xxl-3 col-md-6 footer_col">
							<div class="footer_questions">
								<div class="footer_title">questions</div>
								<div class="footer_list">
									<ul>
										<li><a href="#">join us</a></li>
										
										<li><a href="#">Returns</a></li>
										
										
										<li><a href="#">Blog</a></li>
										<li><a href="#">Partners</a></li>
										<li><a href="#">Bloggers</a></li>
										<li><a href="#">Support</a></li>
										<li><a href="#">Terms of Use</a></li>
										<li><a href="#">Press</a></li>
									</ul>
								</div>
							</div>
						</div>

						<!-- Blog -->
						<div class="col-xxl-3 col-md-6 footer_col">
							<div class="footer_blog">
								<div class="footer_title">blog</div>
								<div class="footer_blog_container">

									<!-- Blog Item -->
									<div class="footer_blog_item d-flex flex-row align-items-start justify-content-start">
										<div class="footer_blog_image"><a href="blog.html"><img src="images/footer_blog_1.jpg" alt=""></a></div>
										<div class="footer_blog_content">
											<div class="footer_blog_title"><a href="blog.html">what shoes to wear</a></div>
											<div class="footer_blog_date">june 06, 2018</div>
											<div class="footer_blog_link"><a href="blog.html">Read More</a></div>
										</div>
									</div>

									<!-- Blog Item -->
									<div class="footer_blog_item d-flex flex-row align-items-start justify-content-start">
										<div class="footer_blog_image"><a href="blog.html"><img src="images/footer_blog_2.jpg" alt=""></a></div>
										<div class="footer_blog_content">
											<div class="footer_blog_title"><a href="blog.html">trends this year</a></div>
											<div class="footer_blog_date">june 06, 2018</div>
											<div class="footer_blog_link"><a href="blog.html">Read More</a></div>
										</div>
									</div>

								</div>
							</div>
						</div>

						<!-- Contact -->
						<div class="col-xxl-3 col-md-6 footer_col">
							<div class="footer_contact">
								<div class="footer_title">contact</div>
								<div class="footer_contact_list">
									<ul>
										<li class="d-flex flex-row align-items-start justify-content-start"><span>C.</span><div>Your Company Ltd</div></li>
										<li class="d-flex flex-row align-items-start justify-content-start"><span>A.</span><div>1481 Creekside Lane  Avila Beach, CA 93424, P.O. BOX 68</div></li>
										<li class="d-flex flex-row align-items-start justify-content-start"><span>T.</span><div>+53 345 7953 32453</div></li>
										<li class="d-flex flex-row align-items-start justify-content-start"><span>E.</span><div>office@youremail.com</div></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Social -->
		<div class="footer_social">
			<div class="section_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="footer_social_container d-flex flex-row align-items-center justify-content-between">
								<!-- Instagram -->
								<a href="#">
									<div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
										<div class="footer_social_icon"><i class="fa fa-instagram" aria-hidden="true"></i></div>
										<div class="footer_social_title">instagram</div>
									</div>
								</a>
								<!-- Google + -->
								<a href="#">
									<div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
										<div class="footer_social_icon"><i class="fa fa-google-plus" aria-hidden="true"></i></div>
										<div class="footer_social_title">google +</div>
									</div>
								</a>
								<!-- Pinterest -->
								<a href="#">
									<div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
										<div class="footer_social_icon"><i class="fa fa-pinterest" aria-hidden="true"></i></div>
										<div class="footer_social_title">pinterest</div>
									</div>
								</a>
								<!-- Facebook -->
								<a href="#">
									<div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
										<div class="footer_social_icon"><i class="fa fa-facebook" aria-hidden="true"></i></div>
										<div class="footer_social_title">facebook</div>
									</div>
								</a>
								<!-- Twitter -->
								<a href="#">
									<div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
										<div class="footer_social_icon"><i class="fa fa-twitter" aria-hidden="true"></i></div>
										<div class="footer_social_title">twitter</div>
									</div>
								</a>
								<!-- YouTube -->
								<a href="#">
									<div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
										<div class="footer_social_icon"><i class="fa fa-youtube" aria-hidden="true"></i></div>
										<div class="footer_social_title">youtube</div>
									</div>
								</a>
								<!-- Tumblr -->
								<a href="#">
									<div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
										<div class="footer_social_icon"><i class="fa fa-tumblr-square" aria-hidden="true"></i></div>
										<div class="footer_social_title">tumblr</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div>

		<!-- Credits -->
		<div class="credits">
			<div class="section_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="credits_content d-flex flex-row align-items-center justify-content-end">
								<div class="credits_text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.3/popper.js"></script>
<script src="styles/bootstrap-4.1.3/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/cart.js"></script>
</body>
</html>