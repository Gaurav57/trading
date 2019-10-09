<!DOCTYPE html>
<html lang="en">
<head>
<title>OneTech</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="plugins/slick-1.8.0/slick.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">

</head>

<body>

<div class="super_container">
	
	<!-- Header -->
	
	<header class="header">

		<!-- Top Bar -->

		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<div class="top_bar_contact_item"><div class="top_bar_icon"><i class='fas fa-phone' style='font-size:20px;color: #000;'></i></div>+38 068 005 3570</div>
						<div class="top_bar_contact_item"><div class="top_bar_icon"><i class='fas fa-envelope' style='font-size:20px;color: #000;'></i></div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a></div>
						<div class="top_bar_content ml-auto">
							<div class="top_bar_menu">
								<ul class="standard_dropdown top_bar_dropdown">
									<li>
										<a href="#" style="color: black;">English<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li><a href="#">Italian</a></li>
											<li><a href="#">Spanish</a></li>
											<li><a href="#">Japanese</a></li>
										</ul>
									</li>
									<li>
										<a href="#" style="color:black;">$ US dollar<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li><a href="#">EUR Euro</a></li>
											<li><a href="#">GBP British Pound</a></li>
											<li><a href="#">JPY Japanese Yen</a></li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="top_bar_user">
								<div class="user_icon"><img src="images/user.svg" alt=""></div>
								<div><a href="<?php echo Yii::$app->homeUrl?>site/registration">Register</a></div>
								<div><a href="#">Login</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>		
		</div>

		<!-- Header Main -->

		<div class="header_main">
			<div class="container">
				<div class="row">

					<!-- Logo -->
					<div class="col-lg-2 col-sm-3 col-3 order-1">
						<div class="logo_container">
							<div class="logo"><a href="#">Trading</a></div>
						</div>
					</div>

					<!-- Search -->
					<div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
						<div class="header_search">
							<div class="header_search_content">
								<div class="header_search_form_container">
									<form action="#" class="header_search_form clearfix">
										<input type="search" required="required" class="header_search_input" placeholder="Search for products...">
										<div class="custom_dropdown">
											<div class="custom_dropdown_list">
												<span class="custom_dropdown_placeholder clc">All Categories</span>
												<i class="fas fa-chevron-down"></i>
												<ul class="custom_list clc">
													<li><a class="clc" href="#">All Categories</a></li>
													<li><a class="clc" href="#">Computers</a></li>
													<li><a class="clc" href="#">Laptops</a></li>
													<li><a class="clc" href="#">Cameras</a></li>
													<li><a class="clc" href="#">Hardware</a></li>
													<li><a class="clc" href="#">Smartphones</a></li>
												</ul>
											</div>
										</div>
										<button type="submit" class="header_search_button trans_300" value="Submit"><img src="images/search.png" alt=""></button>
									</form>
								</div>
							</div>
						</div>
					</div>

					<!-- Wishlist -->
					<div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
						<div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
							<!-- Cart -->
							<div class="cart">
								<div class="cart_container d-flex flex-row align-items-center justify-content-end">
									<div class="cart_icon">
										<img src="images/cart.png" alt="">
										<div class="cart_count"><span>10</span></div>
									</div>
									<div class="cart_content">
										<div class="cart_text"><a href="#">Cart</a></div>
										<div class="cart_price">$85</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<div class="main_nav_content d-flex flex-row">

							<!-- Main Nav Menu -->

							<div class="main_nav_menu">
								<ul class="standard_dropdown main_nav_dropdown">
									<li><a href="#">Home<i class="fas fa-chevron-down"></i></a></li>
									<li><a href="#">Events<i class="fas fa-chevron-down"></i></a></li>
									<li class="hassubs">
										<a href="#">Products<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li>
												<a href="#">Security & Surveillance<i class="fas fa-chevron-down"></i></a>
												<ul>
													<li><a href="shop.html">Surveillance<i class="fas fa-chevron-down"></i></a></li>
													<li><a href="access_control.html">Access Control<i class="fas fa-chevron-down"></i></a></li>
													<li><a href="biometrics.html">Biometrics<i class="fas fa-chevron-down"></i></a></li>
													<li><a href="barriers.html">Barriers<i class="fas fa-chevron-down"></i></a></li>
													<li><a href="cables.html">Cables<i class="fas fa-chevron-down"></i></a></li>
													<li><a href="accessories.html">Accessories<i class="fas fa-chevron-down"></i></a></li>
												</ul>
											</li>
											<li>
												<a href="#">Networking<i class="fas fa-chevron-down"></i></a>
												<ul>
													<li><a href="#">Switches<i class="fas fa-chevron-down"></i></a></li>
												</ul>
											</li>
											<li>
												<a href="#">Accessories<i class="fas fa-chevron-down"></i></a>
												<ul>
													<li><a href="#">Support Systems<i class="fas fa-chevron-down"></i></a></li>
												</ul>
											</li>
											<li>
												<a href="#">DRONES(DJI)<i class="fas fa-chevron-down"></i></a>
												<ul>
													<li><a href="#">Consumer<i class="fas fa-chevron-down"></i></a>
														<ul>
															<li><a href="#">Mavi Series<i class="fas fa-chevron-down"></i></a></li>
															<li><a href="#">Spark Series<i class="fas fa-chevron-down"></i></a></li>
														</ul>
													</li>
													
												</ul>
											</li>
											<li>
												<a href="#">Fire & Safety<i class="fas fa-chevron-down"></i></a>
												<ul>
													<li><a href="#">Extinguisers & Equipment<i class="fas fa-chevron-down"></i></a></li>
												</ul>
											</li>
											<li>
												<a href="#">Solar<i class="fas fa-chevron-down"></i></a>
												<ul>
													<li><a href="#">Solar Water Heater<i class="fas fa-chevron-down"></i></a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="hassubs">
										<a href="#">Raw Material<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li>
												<a href="#">Surveillance<i class="fas fa-chevron-down"></i></a>
												<ul>
													<li><a href="#">Industry<i class="fas fa-chevron-down"></i></a></li>
												</ul>
											</li>
											<li><a href="#">Fire Safety<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">Drones<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">Solar<i class="fas fa-chevron-down"></i></a></li>
										</ul>
									</li>
									<li><a href="blog.html">Blog<i class="fas fa-chevron-down"></i></a></li>
									<li><a href="contact.html">Contact Us<i class="fas fa-chevron-down"></i></a></li>
									<li class="hassubs">
										<a href="#">Partners<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li><a href="#">Partner Login<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">Register as a Seller<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">Become a Franchise<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">Become an Affiliate<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">Advertise With US<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">E-Catalog<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">Rewards Points<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">Discussion On Topics<i class="fas fa-chevron-down"></i></a></li>
										</ul>
									</li>
								</ul>
							</div>

							<!-- Menu Trigger -->

							<div class="menu_trigger_container ml-auto">
								<div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
									<div class="menu_burger">
										<div class="menu_trigger_text">menu</div>
										<div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</nav>
		
		<!-- Menu -->

		<div class="page_menu">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<div class="page_menu_content">
							
							<div class="page_menu_search">
								<form action="#">
									<input type="search" required="required" class="page_menu_search_input" placeholder="Search for products...">
								</form>
							</div>
							<ul class="page_menu_nav">
								<li class="page_menu_item has-children">
									<a href="#">Language<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">English<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Italian<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Spanish<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Japanese<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item has-children">
									<a href="#">Currency<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">US Dollar<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">EUR Euro<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">GBP British Pound<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">JPY Japanese Yen<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item">
									<a href="#">Home<i class="fa fa-angle-down"></i></a>
								</li>
								<li class="page_menu_item has-children">
									<a href="#">Super Deals<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">Super Deals<i class="fa fa-angle-down"></i></a></li>
										<li class="page_menu_item has-children">
											<a href="#">Menu Item<i class="fa fa-angle-down"></i></a>
											<ul class="page_menu_selection">
												<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
												<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
												<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
												<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
											</ul>
										</li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item has-children">
									<a href="#">Featured Brands<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">Featured Brands<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item has-children">
									<a href="#">Trending Styles<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">Trending Styles<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item"><a href="blog.html">blog<i class="fa fa-angle-down"></i></a></li>
								<li class="page_menu_item"><a href="contact.html">contact<i class="fa fa-angle-down"></i></a></li>
							</ul>
							
							<div class="menu_contact">
								<div class="menu_contact_item"><div class="menu_contact_icon"><img src="images/phone_white.png" alt=""></div>+38 068 005 3570</div>
								<div class="menu_contact_item"><div class="menu_contact_icon"><img src="images/mail_white.png" alt=""></div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</header>
	
	<!-- Banner -->
	

<!--	<div class="banner">
		<div class="banner_background" style="background-image:url(images/banner_background.jpg)"></div>
		<div class="container fill_height">
			<div class="row fill_height">
				<div class="banner_product_image"><img src="images/banner_product.png" alt=""></div>
				<div class="col-lg-5 offset-lg-4 fill_height">
					<div class="banner_content">
						<h1 class="banner_text">new era of smartphones</h1>
						<div class="banner_price"><span>$530</span>$460</div>
						<div class="banner_product_name">Apple Iphone 6s</div>
						<div class="button banner_button"><a href="#">Shop Now</a></div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	
	
	
<!-- Characteristics

	<div class="characteristics">
		<div class="container">
			<div class="row">

				
				<div class="col-lg-3 col-md-6 char_col">
					
					<div class="char_item d-flex flex-row align-items-center justify-content-start">
						<div class="char_icon"><img src="images/char_1.png" alt=""></div>
						<div class="char_content">
							<div class="char_title">Free Delivery</div>
							<div class="char_subtitle">from $50</div>
						</div>
					</div>
				</div>

				
				<div class="col-lg-3 col-md-6 char_col">
					
					<div class="char_item d-flex flex-row align-items-center justify-content-start">
						<div class="char_icon"><img src="images/char_2.png" alt=""></div>
						<div class="char_content">
							<div class="char_title">Free Delivery</div>
							<div class="char_subtitle">from $50</div>
						</div>
					</div>
				</div>

				
				<div class="col-lg-3 col-md-6 char_col">
					
					<div class="char_item d-flex flex-row align-items-center justify-content-start">
						<div class="char_icon"><img src="images/char_3.png" alt=""></div>
						<div class="char_content">
							<div class="char_title">Free Delivery</div>
							<div class="char_subtitle">from $50</div>
						</div>
					</div>
				</div>

				
				<div class="col-lg-3 col-md-6 char_col">
					
					<div class="char_item d-flex flex-row align-items-center justify-content-start">
						<div class="char_icon"><img src="images/char_4.png" alt=""></div>
						<div class="char_content">
							<div class="char_title">Free Delivery</div>
							<div class="char_subtitle">from $50</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>  -->

	<!-- Deals of the week -->

	<?php echo $content ?>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<div class="col-lg-3 footer_col">
					<div class="footer_column footer_contact">
						<div class="logo_container">
							<div class="logo"><a href="#">Trading</a></div>
						</div>
						<div class="footer_title">Got Question? Call Us 24/7</div>
						<div class="footer_phone">+38 068 005 3570</div>
						<div class="footer_contact_text">
							<p>17 Princess Road, London</p>
							<p>Grester London NW18JR, UK</p>
						</div>
						<div class="footer_social">
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-youtube"></i></a></li>
								<li><a href="#"><i class="fab fa-google"></i></a></li>
								<li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-lg-2 offset-lg-2">
					<div class="footer_column">
						<div class="footer_title">Useful Links</div>
						<ul class="footer_list">
							<li><a href="#">Service Centers</a></li>
							<li><a href="#">Tenders</a></li>
							<li><a href="#">E-Magzine</a></li>
							<li><a href="#">Loyalty Reward Points</a></li>
							<li><a href="#">Mechandise</a></li>
						</ul>
						<div class="footer_subtitle">Fliege Tube</div>
						<ul class="footer_list">
							<li><a href="#">Franchise Program</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2">
					<div class="footer_column">
						<ul class="footer_list footer_list_2">
							<li><a href="#">Video Games & Consoles</a></li>
							<li><a href="#">Accessories</a></li>
							<li><a href="#">Cameras & Photos</a></li>
							<li><a href="#">Hardware</a></li>
							<li><a href="#">Computers & Laptops</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-2">
					<div class="footer_column">
						<div class="footer_title">Customer Care</div>
						<ul class="footer_list">
							<li><a href="#">My Account</a></li>
							<li><a href="#">Order Tracking</a></li>
							<li><a href="#">Wish List</a></li>
							<li><a href="#">Customer Services</a></li>
							<li><a href="#">Returns / Exchange</a></li>
							<li><a href="#">FAQs</a></li>
							<li><a href="#">Product Support</a></li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</footer>

	<!-- Copyright -->

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col">
					
					<div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
						<div class="copyright_content"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
						<div class="logos ml-sm-auto">
							<ul class="logos_list">
								<li><a href="#"><img src="images/logos_1.png" alt=""></a></li>
								<li><a href="#"><img src="images/logos_2.png" alt=""></a></li>
								<li><a href="#"><img src="images/logos_3.png" alt=""></a></li>
								<li><a href="#"><img src="images/logos_4.png" alt=""></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/slick-1.8.0/slick.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
</body>

</html>