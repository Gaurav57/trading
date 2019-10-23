<script src="<?php echo Yii::$app->homeUrl?>js/shop_custom.js"></script>
	<?php
   		use yii\widgets\LinkPager;
   		use yii\helpers\html;
	?>
	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="<?php echo Yii::$app->homeUrl?>images/shopp_background.jpg"></div>
		<div class="home_overlay"></div>
		<div class="home_content d-flex flex-column align-items-center justify-content-center">
			<h2 class="home_title" style="color:#fff;">Support Systems</h2>
		</div>
	</div>

	<!-- Shop -->

<div class="shop">
<div class="container">
<div class="row">
<div class="col-lg-3">

	<!-- Shop Sidebar -->
<div class="shop_sidebar">
	<div class="sidebar_section">
		<div class="sidebar_title">Categories</div>
		<ul class="sidebar_categories">
			<li><a href="#">Computers & Laptops</a></li>
			<li><a href="#">Cameras & Photos</a></li>
			<li><a href="#">Hardware</a></li>
			<li><a href="#">Smartphones & Tablets</a></li>
			<li><a href="#">TV & Audio</a></li>
			<li><a href="#">Gadgets</a></li>
			<li><a href="#">Car Electronics</a></li>
			<li><a href="#">Video Games & Consoles</a></li>
			<li><a href="#">Accessories</a></li>
		</ul>
	</div>
	<div class="sidebar_section filter_by_section">
		<div class="sidebar_title">Filter By</div>
		<div class="sidebar_subtitle">Price</div>
		<div class="filter_price">
			<div id="slider-range" class="slider_range"></div>
			<p>Range: </p>
			<p><input type="text" id="amount" class="amount" readonly style="border:0; font-weight:bold;"></p>
		</div>
	</div>
	<div class="sidebar_section">
		<div class="sidebar_subtitle color_subtitle">Color</div>
		<ul class="colors_list">
			<li class="color"><a href="#" style="background: #b19c83;"></a></li>
			<li class="color"><a href="#" style="background: #000000;"></a></li>
			<li class="color"><a href="#" style="background: #999999;"></a></li>
			<li class="color"><a href="#" style="background: #0e8ce4;"></a></li>
			<li class="color"><a href="#" style="background: #df3b3b;"></a></li>
			<li class="color"><a href="#" style="background: #ffffff; border: solid 1px #e1e1e1;"></a></li>
		</ul>
	</div>
	<div class="sidebar_section">
		<div class="sidebar_subtitle brands_subtitle">Brands</div>
		<ul class="brands_list">
			<li class="brand"><a href="#">Apple</a></li>
			<li class="brand"><a href="#">Beoplay</a></li>
			<li class="brand"><a href="#">Google</a></li>
			<li class="brand"><a href="#">Meizu</a></li>
			<li class="brand"><a href="#">OnePlus</a></li>
			<li class="brand"><a href="#">Samsung</a></li>
			<li class="brand"><a href="#">Sony</a></li>
			<li class="brand"><a href="#">Xiaomi</a></li>
		</ul>
	</div>
</div>

</div>

			<div class="col-lg-9">
				
				<!-- Shop Content -->

				<div class="shop_content">
					<div class="shop_bar clearfix">
						<div class="shop_product_count"><span>186</span> products found</div>
						<div class="shop_sorting">
							<span>Sort by:</span>
							<ul>
								<li>
									<span class="sorting_text">highest rated<i class="fas fa-chevron-down"></span></i>
									<ul>
										<li class="shop_sorting_button" data-isotope-option='{ "sortBy": "original-order" }'>highest rated</li>
										<li class="shop_sorting_button" data-isotope-option='{ "sortBy": "name" }'>name</li>
										<li class="shop_sorting_button"data-isotope-option='{ "sortBy": "price" }'>price</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>

<div class="product_grid">
	<div class="product_grid_border"></div>
<?php foreach($product6 as $prod) { ?>
	<!-- Product Item -->
	<div class="product_item is_new">
		<div class="product_border"></div>
		<div class="product_image d-flex flex-column align-items-center justify-content-center">
			<a href="<?php echo Yii::$app->homeUrl?>site/productdetail?pid=<?php echo $prod->product_id ?>"><img src="<?php echo Yii::$app->homeUrl?>images/<?php echo $prod->imageFile ?>" alt=""></a></div>
		<div class="product_content">
			<div class="product_price"><?php echo $prod->price ?></div>
			<div class="product_name">
				<div>
				<a href="<?php echo Yii::$app->homeUrl?>site/productdetail?pid=<?php echo $prod->product_id ?>" tabindex="0"><?php echo $prod->name_product ?></a></div></div>
		</div>
              <!-- <div class="product_fav"><i class="fas fa-heart"></i></div>-->
		<ul class="product_marks">
			<li class="product_mark product_discount">-25%</li>
			<li class="product_mark product_new">new</li>
		</ul>
	</div>
<?php } ?>

</div>

			<!-- Shop Page Navigation -->

			<div class="shop_page_nav d-flex flex-row">
				
				<ul class="page_nav d-flex flex-row">
					<?php
				   // display pagination
				   echo LinkPager::widget([
    			  'pagination' => $pages]);
					?>

					<!-- <li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">...</a></li>
					<li><a href="#">21</a></li> -->
				</ul>
				
			</div>

				</div>

			</div>
		</div>
	</div>
</div>

	<!-- Recently Viewed -->

<div class="viewed">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="viewed_title_container">
						<h3 class="viewed_title">Recently Viewed</h3>
						<div class="viewed_nav_container">
							<div class="viewed_nav viewed_prev"><i class="fas fa-chevron-left"></i></div>
							<div class="viewed_nav viewed_next"><i class="fas fa-chevron-right"></i></div>
						</div>
					</div>

					<div class="viewed_slider_container">
						
						<!-- Recently Viewed Slider -->

						<div class="owl-carousel owl-theme viewed_slider">
							
							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="<?php echo Yii::$app->homeUrl?>images/view_1.jpg" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">$225<span>$300</span></div>
										<div class="viewed_name"><a href="#">Beoplay H7</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">new</li>
									</ul>
								</div>
							</div>

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="<?php echo Yii::$app->homeUrl?>images/view_2.jpg" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">$379</div>
										<div class="viewed_name"><a href="#">LUNA Smartphone</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">new</li>
									</ul>
								</div>
							</div>

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="<?php echo Yii::$app->homeUrl?>images/view_3.jpg" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">$225</div>
										<div class="viewed_name"><a href="#">Samsung J730F...</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">new</li>
									</ul>
								</div>
							</div>

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item is_new d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="<?php echo Yii::$app->homeUrl?>images/view_4.jpg" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">$379</div>
										<div class="viewed_name"><a href="#">Huawei MediaPad...</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">new</li>
									</ul>
								</div>
							</div>

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="<?php echo Yii::$app->homeUrl?>images/view_5.jpg" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">$225<span>$300</span></div>
										<div class="viewed_name"><a href="#">Sony PS4 Slim</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">new</li>
									</ul>
								</div>
							</div>

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="<?php echo Yii::$app->homeUrl?>images/view_6.jpg" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">$375</div>
										<div class="viewed_name"><a href="#">Speedlink...</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">new</li>
									</ul>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Brands -->

	<div class="brands">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="brands_slider_container">
						
						<!-- Brands Slider -->

						<div class="owl-carousel owl-theme brands_slider">
							
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="<?php echo Yii::$app->homeUrl?>images/brands_1.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="<?php echo Yii::$app->homeUrl?>images/brands_2.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="<?php echo Yii::$app->homeUrl?>images/brands_3.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="<?php echo Yii::$app->homeUrl?>images/brands_4.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="<?php echo Yii::$app->homeUrl?>images/brands_5.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="images/brands_6.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="<?php echo Yii::$app->homeUrl?>images/brands_7.jpg" alt=""></div></div>
							<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="<?php echo Yii::$app->homeUrl?>images/brands_8.jpg" alt=""></div></div>

						</div>
						
						<!-- Brands Slider Navigation -->
						<div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
						<div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>

					</div>
				</div>
			</div>
		</div>
	</div>