<!DOCTYPE html>
<html lang="en">
<head>
<title>Blog</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="aStar Fashion Template Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.3/bootstrap.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/blog.css">
<link rel="stylesheet" type="text/css" href="styles/logout.css">

<link rel="stylesheet" type="text/css" href="styles/blog_responsive.css">
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
				<a href="#"><div>p<span>hunt</span></div></a>
			</div>

			<!-- Navigation -->
			<nav class="header_nav">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li><a href="index.php">home</a></li>
					<li><a href="categories.php">categories</a></li>
					<li><a href="blog.php">blog</a></li>
					<li><a href="cart.php">Reviews</a></li>
					<form action="../php.php" method="POST">
					<button type ="submit" name="logout" class="newsletter_buttonLOG">Log out</button>
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
					<div class="cart_icon"><a href="cart.php">
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
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="index.php">home</a></li>
				<li class="menu_mm"><a href="categories.php">categories</a></li>
				<li class="menu_mm"><a href="blog.php">blog</a></li>
<form action="../php.php" method="POST">
					<button type ="submit" name="logout" class="newsletter_buttonLOG">Log out</button></form>				
				<li class="menu_mm"><a href="#">Reviews</a></li>
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
			<a href="#"><div>p<span>hunt</span></div></a>
		</div>

		<!-- Sidebar Navigation -->
		<nav class="sidebar_nav">
			<ul>
				<li><a href="index.php">home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="categories.php">categories<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="blog.php">blog<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
<form action="../php.php" method="POST">
					<button type ="submit" name="logout" class="newsletter_buttonLOG">Log out</button></form>				
				<li><a href="cart.php">Reviews<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				
			</ul>
		</nav>
		<!-- Search -->
		<div class="search">
			<form action="#" class="search_form" id="sidebar_search_form">
				<input type="text" class="search_input" placeholder="Search" required="required">
				<button class="search_button"><i class="fa fa-search" aria-hidden="true"></i></button>
			</form>
		</div>

		<!-- Cart -->
		<div class="cart d-flex flex-row align-items-center justify-content-start">
			<div class="cart_icon"><a href="cart.php">
				<img src="images/bag.png" alt="">
				<div class="cart_num">2</div>
			</a></div>
			<div class="cart_text">bag</div>
			<div class="cart_price">$39.99 (1)</div>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/blog.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="home_content">
				<div class="home_title">The Blog</div>
				<div class="breadcrumbs">
					<ul class="d-flex flex-row align-items-center justify-content-start">
						<li><a href="index.php">Home</a></li>
						<li><a href = "#">Blog</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- Blog -->

	<div class="blog">
		<div class="section_container">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<!-- Blog Posts -->
						<div class="blog_bosts">
							
							<!-- Blog Post -->
							<div class="blog_post">
								<div class="blog_post_image"><img src="images/blog_1.jpg" alt="https://unsplash.com/@saskiafairfull"></div>
								<div class="blog_post_content">
									<div class="blog_post_date"><a href="#">June 18, 2018</a></div>
									<div class="blog_post_title"><a href="#">10 Nightwear dresses you need to see</a></div>
									<div class="blog_post_info d-flex flex-row align-items-start justify-content-start">
										<div class="blog_post_author">By<a href="#"> Admin</a></div>
										<div class="blog_post_category">
											<ul>
												<li>in <a href="#">Fashion</a></li>
											</ul>
										</div>
										<div class="blog_post_comments"><a href="#">3 Comments</a></div>
									</div>
									<div class="blog_post_text">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing eli t. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integ er bibendum sodales arcu id te mpus. Ut consectetur lacus. Lorem ipsum dolor sit amet, consectetur adipiscing eli t. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integ er bibendum sodales arcu id te mpus. Ut consectetur lacus.</p>
									</div>
								</div>
							</div>
						</div>

						<!-- Blog Posts -->
						<div class="blog_bosts">
							
							<!-- Blog Post -->
							<div class="blog_post">
								<div class="blog_post_image"><img src="images/blog_2.jpg" alt="https://unsplash.com/@veronezcaroline"></div>
								<div class="blog_post_content">
									<div class="blog_post_date"><a href="#">June 18, 2018</a></div>
									<div class="blog_post_title"><a href="#">Summer Vibes with these 10 essential pieces</a></div>
									<div class="blog_post_info d-flex flex-row align-items-start justify-content-start">
										<div class="blog_post_author">By<a href="#"> Admin</a></div>
										<div class="blog_post_category">
											<ul>
												<li>in <a href="#">Fashion</a></li>
											</ul>
										</div>
										<div class="blog_post_comments"><a href="#">3 Comments</a></div>
									</div>
									<div class="blog_post_text">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing eli t. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integ er bibendum sodales arcu id te mpus. Ut consectetur lacus. Lorem ipsum dolor sit amet, consectetur adipiscing eli t. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integ er bibendum sodales arcu id te mpus. Ut consectetur lacus.</p>
									</div>
								</div>
							</div>
						</div>

						<!-- Blog Posts -->
						<div class="blog_bosts">
							
							<!-- Blog Post -->
							<div class="blog_post">
								<div class="blog_post_image"><img src="images/blog_3.jpg" alt=""></div>
								<div class="blog_post_content">
									<div class="blog_post_date"><a href="#">June 18, 2018</a></div>
									<div class="blog_post_title"><a href="#">Trend Allert: Hot Summer Sunglesses</a></div>
									<div class="blog_post_info d-flex flex-row align-items-start justify-content-start">
										<div class="blog_post_author">By<a href="#"> Admin</a></div>
										<div class="blog_post_category">
											<ul>
												<li>in <a href="#">Fashion</a></li>
											</ul>
										</div>
										<div class="blog_post_comments"><a href="#">3 Comments</a></div>
									</div>
									<div class="blog_post_text">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing eli t. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integ er bibendum sodales arcu id te mpus. Ut consectetur lacus. Lorem ipsum dolor sit amet, consectetur adipiscing eli t. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integ er bibendum sodales arcu id te mpus. Ut consectetur lacus.</p>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
				<div class="row load_more_row">
					<div class="col">
						<div class="load_more_button trans_200 ml-auto mr-auto"><a href="#">load more</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/newsletter.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="newsletter_content text-center">
						<div class="newsletter_title_container">
							<div class="newsletter_title">subscribe to our newsletter</div>
							<div class="newsletter_subtitle">we won't spam, we promise!</div>
						</div>
						<div class="newsletter_form_container">
							<form action="#" id="newsletter_form" class="newsletter_form">
								<input type="email" class="newsletter_input" placeholder="your e-mail here" required="required">
								<button class="newsletter_button">submit</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

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
									<a href="#"><div>p<span>hunt</span></div></a>
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
										<li><a href="#">About us</a></li>
										<li><a href="#">Track Orders</a></li>
										<li><a href="#">Returns</a></li>
										<li><a href="#">Jobs</a></li>
										<li><a href="#">Shipping</a></li>
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
										<div class="footer_blog_image"><a href="blog.php"><img src="images/footer_blog_1.jpg" alt=""></a></div>
										<div class="footer_blog_content">
											<div class="footer_blog_title"><a href="blog.php">what shoes to wear</a></div>
											<div class="footer_blog_date">june 06, 2018</div>
											<div class="footer_blog_link"><a href="blog.php">Read More</a></div>
										</div>
									</div>

									<!-- Blog Item -->
									<div class="footer_blog_item d-flex flex-row align-items-start justify-content-start">
										<div class="footer_blog_image"><a href="blog.php"><img src="images/footer_blog_2.jpg" alt=""></a></div>
										<div class="footer_blog_content">
											<div class="footer_blog_title"><a href="blog.php">trends this year</a></div>
											<div class="footer_blog_date">june 06, 2018</div>
											<div class="footer_blog_link"><a href="blog.php">Read More</a></div>
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
<script src="js/blog.js"></script>
</body>
</html>