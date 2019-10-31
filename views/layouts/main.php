<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en" dir="ltr" class="sign-up contact-page">
<head>
<title>FLIEGE</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Trading">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="<?php echo Yii::$app->homeUrl?>images/cart.png">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->homeUrl?>styles/bootstrap4/bootstrap.min.css">
<link href="<?php echo Yii::$app->homeUrl?>plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->homeUrl?>plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->homeUrl?>plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->homeUrl?>plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->homeUrl?>plugins/slick-1.8.0/slick.css">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->homeUrl?>styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->homeUrl?>styles/responsive.css">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->homeUrl?>css/site.css">

<script src="<?php echo Yii::$app->homeUrl?>js/jquery-3.3.1.min.js"></script>

<script src="<?php echo Yii::$app->homeUrl?>styles/bootstrap4/popper.js"></script>

<script src="<?php echo Yii::$app->homeUrl?>styles/bootstrap4/bootstrap.min.js"></script>

</head>

<body>

<div class="super_container">

<!-- Header -->

<header class="common-page header">

	<!-- Top Bar -->

	<div class="top_bar">
		<div class="container">
			<div class="row">
				<div class="col d-flex flex-row">
					<div class="top_bar_contact_item"><div class="top_bar_icon"><i class='fas fa-phone' style='font-size:20px;color: #000;'></i></div>+91 9372422907</div>
					<div class="top_bar_contact_item"><div class="top_bar_icon"><i class='fas fa-envelope' style='font-size:20px;color: #000;'></i></div><a href="mailto:trading@gmail.com">trading@gmail.com</a></div>
					<div class="top_bar_content ml-auto">
						<div class="top_bar_menu">
							<ul class="standard_dropdown top_bar_dropdown">
								<li>
									<a href="<?php echo Yii::$app->homeUrl?>" style="color: black;">English<i class="fas fa-chevron-down"></i></a>
									<ul>
										<li><a href="<?php echo Yii::$app->homeUrl?>">Italian</a></li>
										<li><a href="<?php echo Yii::$app->homeUrl?>">Spanish</a></li>
										<li><a href="<?php echo Yii::$app->homeUrl?>">Japanese</a></li>
									</ul>
								</li>
								<li>
									<a href="<?php echo Yii::$app->homeUrl?>" style="color:black;">$ US dollar<i class="fas fa-chevron-down"></i></a>
									<ul>
										<li><a href="<?php echo Yii::$app->homeUrl?>">EUR Euro</a></li>
										<li><a href="<?php echo Yii::$app->homeUrl?>">GBP British Pound</a></li>
										<li><a href="<?php echo Yii::$app->homeUrl?>">JPY Japanese Yen</a></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="top_bar_user">
							<?php if(!isset($_SESSION["__id"])) { ?>
							<div class="user_icon"><img src="<?php echo Yii::$app->homeUrl?>images/user.svg" alt=""></div>
								<div><a href="<?php echo Yii::$app->homeUrl?>site/registration">Register</a></div>
							<div><a href="<?php echo Yii::$app->homeUrl?>site/login">Login</a></div>
						<?php }else { ?>
							<div class="user_icon"><img src="<?php echo Yii::$app->homeUrl?>images/user.svg" alt=""></div>
								<div><a href="<?php echo Yii::$app->homeUrl?>">My Profile</a></div>
						
							<div><a href="<?php echo Yii::$app->homeUrl?>site/logout">Logout</a></div>
						<?php } ?>
							
							
							
							
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
                                            <div class="logo"><a href="<?php echo Yii::$app->homeUrl?>"><img src="<?php echo Yii::$app->homeUrl?>/images/fliege-registered-white.png" style="width:100%"/></a></div>
					</div>
				</div>

				<!-- Search -->
				<div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
					<div class="header_search">
						<div class="header_search_content">
							<div class="header_search_form_container">
<form action="<?php echo Yii::$app->homeUrl?>site/search" class="header_search_form clearfix" method="get">
	<input type="search" required="required" name="search" class="header_search_input" placeholder="Search for products..." style="width: 100%">
	 <div class="custom_dropdown" style="display: none">
		<div class="custom_dropdown_list">
			<span class="custom_dropdown_placeholder clc">All Categories</span>
			<i class="fas fa-chevron-down"></i>
			<ul class="custom_list clc">
				<li>All Categories</li>
				<li>Computers</li>
				<li>Laptops  </li>
				<li>Cameras  </li>
				<li>Hardware </li>
				<li>Smartphones</li>
			</ul>
		</div>
	</div>
	<button type="submit" class="header_search_button trans_300"><img src="<?php echo Yii::$app->homeUrl?>images/search.png" alt=""></button>
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
									<img src="<?php echo Yii::$app->homeUrl?>images/cart.png" alt="">

								<div class="cart_count"><span>

									<?php if (isset($_SESSION['__id'])?$_SESSION['__id']:0) {
								print_r($this->params['totalcart']);
							}else{
								echo "0";
							} ?>
								
							</span></div>
								</div>
								<div class="cart_content">
									<div class="cart_text"><a href="<?php echo Yii::$app->homeUrl?>site/cart">Cart</a></div>
									<div class="cart_price"></div>

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
		<li>
			<a href="<?php echo Yii::$app->homeUrl?>">Home<i class="fas fa-chevron-down"></i></a>
		</li>
		<li>
			<a href="<?php echo Yii::$app->homeUrl?>site/event">Events<i class="fas fa-chevron-down"></i></a>
		</li>
		<li class="hassubs">
			<a href="<?php echo Yii::$app->homeUrl?>">Products<i class="fas fa-chevron-down"></i></a>
			<ul>
				<li>
		<?php foreach ($this->params['productsmenu'] as $menu) {  ?>
		<a href="<?php echo Yii::$app->homeUrl?>"><?php echo $menu->menu_name; ?><i class="fas fa-chevron-down"></i></a>
	<?php  }?>
		<ul>
			<?php foreach ($this->params['productschild'] as $menu_child) {  ?>
			<li>
				<a href="shop.html"><?php echo $menu_child->child_name; ?><i class="fas fa-chevron-down"></i></a>
				<ul>
					
						<li>
							<?php foreach ($this->params['parachild'] as $para_child) {  ?>
							<a href="<?php echo Yii::$app->homeUrl?>"><?php echo $para_child->para_name; ?><i class="fas fa-chevron-down"></i></a>

						</li>
						<?php  }?>
					
				</ul>
			</li>
		<?php  } ?>
			<!-- <li><a href="access_control.html">Access Control<i class="fas fa-chevron-down"></i></a></li>
			<li><a href="biometrics.html">Biometrics<i class="fas fa-chevron-down"></i></a></li>
			<li><a href="barriers.html">Barriers<i class="fas fa-chevron-down"></i></a></li>
			<li><a href="cables.html">Cables<i class="fas fa-chevron-down"></i></a></li>
			<li><a href="accessories.html">Accessories<i class="fas fa-chevron-down"></i></a></li> -->
		</ul>
	</li>
				<li>
					<!-- <a href="<?php echo Yii::$app->homeUrl?>">Networking<i class="fas fa-chevron-down"></i></a> -->
					<ul>
						<li><a href="<?php echo Yii::$app->homeUrl?>">Switches<i class="fas fa-chevron-down"></i></a></li>
					</ul>
				</li>
				<li>
					<!-- <a href="<?php echo Yii::$app->homeUrl?>">Accessories<i class="fas fa-chevron-down"></i></a> -->
					<ul>
						<li><a href="<?php echo Yii::$app->homeUrl?>site/product">Support Systems<i class="fas fa-chevron-down"></i></a></li>

					</ul>
				</li>
				<li>
					<!-- <a href="<?php echo Yii::$app->homeUrl?>">DRONES(DJI)<i class="fas fa-chevron-down"></i></a> -->
					<ul>
						<li><a href="<?php echo Yii::$app->homeUrl?>">Consumer<i class="fas fa-chevron-down"></i></a>
							<ul>
								<li><a href="<?php echo Yii::$app->homeUrl?>">Mavi Series<i class="fas fa-chevron-down"></i></a></li>
								<li><a href="<?php echo Yii::$app->homeUrl?>">Spark Series<i class="fas fa-chevron-down"></i></a></li>
							</ul>
						</li>
						
					</ul>
				</li>
				<li>
					<!-- <a href="<?php echo Yii::$app->homeUrl?>">Fire & Safety<i class="fas fa-chevron-down"></i></a> -->
					<ul>
						<li><a href="<?php echo Yii::$app->homeUrl?>">Extinguisers & Equipment<i class="fas fa-chevron-down"></i></a></li>
					</ul>
				</li>
				<li>
					<!-- <a href="<?php echo Yii::$app->homeUrl?>">Solar<i class="fas fa-chevron-down"></i></a> -->
					<ul>
						<li><a href="<?php echo Yii::$app->homeUrl?>">Solar Water Heater<i class="fas fa-chevron-down"></i></a></li>
					</ul>
				</li>
			</ul>
		</li>
		<li class="hassubs">
			<a href="<?php echo Yii::$app->homeUrl?>">Raw Material<i class="fas fa-chevron-down"></i></a>
			<ul>
				<li>
					<a href="<?php echo Yii::$app->homeUrl?>">Surveillance<i class="fas fa-chevron-down"></i></a>
					<ul>
						<li><a href="<?php echo Yii::$app->homeUrl?>">Industry<i class="fas fa-chevron-down"></i></a></li>
					</ul>
				</li>
				<li><a href="<?php echo Yii::$app->homeUrl?>">Fire Safety<i class="fas fa-chevron-down"></i></a></li>
				<li><a href="<?php echo Yii::$app->homeUrl?>">Drones<i class="fas fa-chevron-down"></i></a></li>
				<li><a href="<?php echo Yii::$app->homeUrl?>">Solar<i class="fas fa-chevron-down"></i></a></li>
			</ul>
		</li>
		<li><a href="<?php echo Yii::$app->homeUrl?>site/blog">Blog<i class="fas fa-chevron-down"></i></a></li>
		<li><a href="<?php echo Yii::$app->homeUrl?>site/contact">Contact Us<i class="fas fa-chevron-down"></i></a></li>
		<li class="hassubs">
			<a href="<?php echo Yii::$app->homeUrl?>">Partners<i class="fas fa-chevron-down"></i></a>
			<ul>
				<li><a href="<?php echo Yii::$app->homeUrl?>admin/login-form">Partner Login<i class="fas fa-chevron-down"></i></a></li>
				<li><a href="<?php echo Yii::$app->homeUrl?>admin/register">Register as a Seller<i class="fas fa-chevron-down"></i></a></li>
				<li><a href="<?php echo Yii::$app->homeUrl?>">Become a Franchise<i class="fas fa-chevron-down"></i></a></li>
				<li><a href="<?php echo Yii::$app->homeUrl?>">Become an Affiliate<i class="fas fa-chevron-down"></i></a></li>
				<li><a href="<?php echo Yii::$app->homeUrl?>site/advertise">Advertise With US<i class="fas fa-chevron-down"></i></a></li>
				<li><a href="<?php echo Yii::$app->homeUrl?>">E-Catalog<i class="fas fa-chevron-down"></i></a></li>
				<li><a href="<?php echo Yii::$app->homeUrl?>site/rewardpt">Rewards Points<i class="fas fa-chevron-down"></i></a></li>
				<li><a href="<?php echo Yii::$app->homeUrl?>">Discussion On Topics<i class="fas fa-chevron-down"></i></a></li>
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
							<a href="<?php echo Yii::$app->homeUrl?>">Language<i class="fa fa-angle-down"></i></a>
							<ul class="page_menu_selection">
								<li><a href="<?php echo Yii::$app->homeUrl?>">English<i class="fa fa-angle-down"></i></a></li>
								<li><a href="<?php echo Yii::$app->homeUrl?>">Italian<i class="fa fa-angle-down"></i></a></li>
								<li><a href="<?php echo Yii::$app->homeUrl?>">Spanish<i class="fa fa-angle-down"></i></a></li>
								<li><a href="<?php echo Yii::$app->homeUrl?>">Japanese<i class="fa fa-angle-down"></i></a></li>
							</ul>
						</li>
						<li class="page_menu_item has-children">
							<a href="<?php echo Yii::$app->homeUrl?>">Currency<i class="fa fa-angle-down"></i></a>
							<ul class="page_menu_selection">
								<li><a href="<?php echo Yii::$app->homeUrl?>">US Dollar<i class="fa fa-angle-down"></i></a></li>
								<li><a href="<?php echo Yii::$app->homeUrl?>">EUR Euro<i class="fa fa-angle-down"></i></a></li>
								<li><a href="<?php echo Yii::$app->homeUrl?>">GBP British Pound<i class="fa fa-angle-down"></i></a></li>
								<li><a href="<?php echo Yii::$app->homeUrl?>">JPY Japanese Yen<i class="fa fa-angle-down"></i></a></li>
							</ul>
						</li>
						<li class="page_menu_item">
							<a href="<?php echo Yii::$app->homeUrl?>">Home<i class="fa fa-angle-down"></i></a>
						</li>
						<li class="page_menu_item has-children">
							<a href="<?php echo Yii::$app->homeUrl?>">Super Deals<i class="fa fa-angle-down"></i></a>
							<ul class="page_menu_selection">
								<li><a href="<?php echo Yii::$app->homeUrl?>">Super Deals<i class="fa fa-angle-down"></i></a></li>
								<li class="page_menu_item has-children">
									<a href="<?php echo Yii::$app->homeUrl?>">Menu Item<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="<?php echo Yii::$app->homeUrl?>">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="<?php echo Yii::$app->homeUrl?>">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="<?php echo Yii::$app->homeUrl?>">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="<?php echo Yii::$app->homeUrl?>">Menu Item<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li><a href="<?php echo Yii::$app->homeUrl?>">Menu Item<i class="fa fa-angle-down"></i></a></li>
								<li><a href="<?php echo Yii::$app->homeUrl?>">Menu Item<i class="fa fa-angle-down"></i></a></li>
								<li><a href="<?php echo Yii::$app->homeUrl?>">Menu Item<i class="fa fa-angle-down"></i></a></li>
							</ul>
						</li>
						<li class="page_menu_item has-children">
							<a href="<?php echo Yii::$app->homeUrl?>">Featured Brands<i class="fa fa-angle-down"></i></a>
							<ul class="page_menu_selection">
								<li><a href="<?php echo Yii::$app->homeUrl?>">Featured Brands<i class="fa fa-angle-down"></i></a></li>
								<li><a href="<?php echo Yii::$app->homeUrl?>">Menu Item<i class="fa fa-angle-down"></i></a></li>
								<li><a href="<?php echo Yii::$app->homeUrl?>">Menu Item<i class="fa fa-angle-down"></i></a></li>
								<li><a href="<?php echo Yii::$app->homeUrl?>">Menu Item<i class="fa fa-angle-down"></i></a></li>
							</ul>
						</li>
						<li class="page_menu_item has-children">
							<a href="<?php echo Yii::$app->homeUrl?>">Trending Styles<i class="fa fa-angle-down"></i></a>
							<ul class="page_menu_selection">
								<li><a href="<?php echo Yii::$app->homeUrl?>">Trending Styles<i class="fa fa-angle-down"></i></a></li>
								<li><a href="<?php echo Yii::$app->homeUrl?>">Menu Item<i class="fa fa-angle-down"></i></a></li>
								<li><a href="<?php echo Yii::$app->homeUrl?>">Menu Item<i class="fa fa-angle-down"></i></a></li>
								<li><a href="<?php echo Yii::$app->homeUrl?>">Menu Item<i class="fa fa-angle-down"></i></a></li>
							</ul>
						</li>
						<li class="page_menu_item"><a href="blog.html">blog<i class="fa fa-angle-down"></i></a></li>
						<li class="page_menu_item"><a href="contact.html">contact<i class="fa fa-angle-down"></i></a></li>
					</ul>
					
					<div class="menu_contact">
						<div class="menu_contact_item"><div class="menu_contact_icon"><img src="<?php echo Yii::$app->homeUrl?>images/phone_white.png" alt=""></div>+91 9372422907</div>
						<div class="menu_contact_item"><div class="menu_contact_icon"><img src="<?php echo Yii::$app->homeUrl?>images/mail_white.png" alt=""></div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a></div>

					</div>
				</div>
			</div>
		</div>

	</div>
</div>

</header>

<?php echo $content ?>
<!-- Newsletter -->

<div class="newsletter">
<div class="container">
<div class="row">
<div class="col">
    <div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
        <div class="newsletter_title_container">
            <div class="newsletter_icon" ><i class='far fa-paper-plane' style='font-size:60px;color: #ff9900;'></i></div>
            <div class="newsletter_title">Sign up for Newsletter</div>
            <!--<div class="newsletter_text"><p>...and receive %20 coupon for first shopping.</p></div> -->
        </div>
        <div class="newsletter_content clearfix">
            <form action="#" class="newsletter_form">
                <input type="email" class="newsletter_input" required="required" placeholder="Enter your email address">
                <button class="newsletter_button">Subscribe</button>
            </form>
            <div class="newsletter_unsubscribe_link"><a href="#">unsubscribe</a></div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<!-- Footer -->

<footer class="footer">
	<div class="container">
		<div class="row">

			<div class="col-lg-3 footer_col">
				<div class="footer_column footer_contact">
					<div class="logo_container">
						<div class="logo"><a href="<?php echo Yii::$app->homeUrl?>">Trading</a></div>
					</div>
					<div class="footer_title">Got Question? Call Us 24/7</div>
					<div class="footer_phone">+91 9372422907</div>
					<div class="footer_contact_text">
						<p>Office No.208 Bawa Tower </p>
						<p>Sec.17 Vashi Navi Mumbai</p>
					</div>
					<div class="footer_social">
						<ul>
							<li><a href="<?php echo Yii::$app->homeUrl?>"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="<?php echo Yii::$app->homeUrl?>"><i class="fab fa-twitter"></i></a></li>
						
						</ul>
					</div>
				</div>
			</div>

			<div class="col-lg-2 offset-lg-2">
				<div class="footer_column">
					<div class="footer_title">Useful Links</div>
					<ul class="footer_list">
						<li><a href="<?php echo Yii::$app->homeUrl?>">Service Centers</a></li>
						<li><a href="<?php echo Yii::$app->homeUrl?>">Tenders</a></li>
						<li><a href="<?php echo Yii::$app->homeUrl?>site/magzine">E-Magzine</a></li>
						<li><a href="<?php echo Yii::$app->homeUrl?>">Loyalty Reward Points</a></li>
						<li><a href="<?php echo Yii::$app->homeUrl?>">Mechandise</a></li>
					</ul>
					<div class="footer_subtitle">Fliege Tube</div>
					<ul class="footer_list">
						<li><a href="<?php echo Yii::$app->homeUrl?>">Franchise Program</a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-2">
				<div class="footer_column">
					<ul class="footer_list footer_list_2">
						<li><a href="<?php echo Yii::$app->homeUrl?>">Video Games & Consoles</a></li>
						<li><a href="<?php echo Yii::$app->homeUrl?>">Accessories</a></li>
						<li><a href="<?php echo Yii::$app->homeUrl?>">Cameras & Photos</a></li>
						<li><a href="<?php echo Yii::$app->homeUrl?>">Hardware</a></li>
						<li><a href="<?php echo Yii::$app->homeUrl?>">Computers & Laptops</a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-2">
				<div class="footer_column">
					<div class="footer_title">Customer Care</div>
					<ul class="footer_list">
						<li><a href="<?php echo Yii::$app->homeUrl?>">My Account</a></li>
						<li><a href="<?php echo Yii::$app->homeUrl?>">Order Tracking</a></li>
						<li><a href="<?php echo Yii::$app->homeUrl?>">Wish List</a></li>
						<li><a href="<?php echo Yii::$app->homeUrl?>">Customer Services</a></li>
						<li><a href="<?php echo Yii::$app->homeUrl?>">Returns / Exchange</a></li>
						<li><a href="<?php echo Yii::$app->homeUrl?>site/faq">FAQs</a></li>
						<li><a href="<?php echo Yii::$app->homeUrl?>">Product Support</a></li>
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
		<div class="copyright_content">
			Copyright &copy;<?php echo date('Y'); ?> All rights reserved
		</div>
					<div class="logos ml-sm-auto">
						<ul class="logos_list">
							<li><a href="<?php echo Yii::$app->homeUrl?>"><img src="<?php echo Yii::$app->homeUrl?>images/logos_1.png" alt=""></a></li>
							<li><a href="<?php echo Yii::$app->homeUrl?>"><img src="<?php echo Yii::$app->homeUrl?>images/logos_2.png" alt=""></a></li>
							<li><a href="<?php echo Yii::$app->homeUrl?>"><img src="<?php echo Yii::$app->homeUrl?>images/logos_3.png" alt=""></a></li>
							<li><a href="<?php echo Yii::$app->homeUrl?>"><img src="<?php echo Yii::$app->homeUrl?>images/logos_4.png" alt=""></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>



<script src="<?php echo Yii::$app->homeUrl?>plugins/greensock/TweenMax.min.js"></script>

<script src="<?php echo Yii::$app->homeUrl?>plugins/greensock/TimelineMax.min.js"></script>


<script src="<?php echo Yii::$app->homeUrl?>plugins/scrollmagic/ScrollMagic.min.js"></script>

<script src="<?php echo Yii::$app->homeUrl?>plugins/greensock/animation.gsap.min.js"></script>

<script src="<?php echo Yii::$app->homeUrl?>plugins/greensock/ScrollToPlugin.min.js"></script>

<script src="<?php echo Yii::$app->homeUrl?>plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>

<script src="<?php echo Yii::$app->homeUrl?>plugins/easing/easing.js"></script>


<script src="<?php echo Yii::$app->homeUrl?>plugins/Isotope/isotope.pkgd.min.js"></script>

<script src="<?php echo Yii::$app->homeUrl?>plugins/parallax-js-master/parallax.min.js"></script>

<script src="<?php echo Yii::$app->homeUrl?>plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>

<script src="<?php echo Yii::$app->homeUrl?>plugins/slick-1.8.0/slick.js"></script>
</body>
</html>
