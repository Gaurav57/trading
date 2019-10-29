<script src="<?php echo Yii::$app->homeUrl?>js/custom.js"></script>

<div id="demo" class="carousel slide" data-ride="carousel" data-interval="2500" style="height: 300px">
<!-- Indicators -->
<ul class="carousel-indicators">
<li data-target="#demo" data-slide-to="0" class="active"></li>
<li data-target="#demo" data-slide-to="1"></li>
<li data-target="#demo" data-slide-to="2"></li>
</ul>

<!-- The slideshow -->
<div class="carousel-inner">
<div class="carousel-item active">
<img src="<?php echo Yii::$app->homeUrl?>images/light4.jpg" alt="light" width="100%" height="300">
</div>
<div class="carousel-item">
<img src="<?php echo Yii::$app->homeUrl?>images/light7.jpg" alt="Hydrangeas" width="100%" height="300">
</div>
<div class="carousel-item">
<img src="<?php echo Yii::$app->homeUrl?>images/fan1.jpg" alt="Jellyfish" width="100%" height="300">
</div>
</div>

<!-- Left and right controls -->
<a class="carousel-control-prev" href="#demo" data-slide="prev">
<span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
<span class="carousel-control-next-icon"></span>
</a>
</div>

<div class="home-page">
<div class="deals_featured">
<div class="container">
<div class="row">
<div class="col d-flex flex-lg-row flex-column align-items-center justify-content-start">
    
    <!-- Featured -->
    <div class="featured">
        <div class="tabbed_container">
            <div class="tabs">
                <ul class="clearfix">
                    <li class="active">Featured</li>
                   <!--  <li>On Sale</li>
                    <li>Best Rated</li> -->
                </ul>
                <div class="tabs_line"><span></span></div>
            </div>

            <!-- Product Panel -->
            <div class="product_panel panel active">
                <div class="featured_slider slider">

                    <?php foreach($product7 as $prod){
                        //print_r($prod); die;
                        ?>
                    <!-- Slider Item -->
            <div class="featured_slider_item">
                <div class="border_active"></div>
                <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><a href="<?php echo Yii::$app->homeUrl?>site/productdetail?pid=<?php echo $prod->product_id ?>"><img src="<?php echo Yii::$app->homeUrl?>images/<?php echo $prod->imageFile ?>" alt=""></a></div>
                    <div class="product_content">
                        <div class="product_price discount"><?php echo $prod->price_user ?><span>$300</span></div>
                        <div class="product_name"><div><a href="<?php echo Yii::$app->homeUrl?>site/productdetail?pid=<?php echo $prod->product_id ?>"><?php echo $prod->name_product ?></a></div></div>
                        <div class="product_extras">
<!--                                     <div class="product_color">
                                <input type="radio" checked name="product_color" style="background:#b19c83">
                                <input type="radio" name="product_color" style="background:#000000">
                                <input type="radio" name="product_color" style="background:#999999">
                            </div>
-->                                    <button class="product_cart_button">Add to Cart</button>
                        </div>
                    </div>
                    <ul class="product_marks">
                        <li class="product_mark product_discount">-25%</li>
                        <li class="product_mark product_new">new</li>
                    </ul>
                </div>
            </div>
                <?php } ?>
                </div>
                <div class="featured_slider_dots_cover"></div>
            </div>

           
        </div>
    </div>

<!-- Deals -->
    
    
    <div class="deals">

        <h3 style="color: #ff9900;">Advertisement</h3>
<div id="demo" class="carousel slide" data-ride="carousel" data-interval="2000">

<!-- Indicators -->
<ul class="carousel-indicators">
<li data-target="#demo" data-slide-to="0" class="active"></li>
<li data-target="#demo" data-slide-to="1"></li>
<li data-target="#demo" data-slide-to="2"></li>
</ul>

<!-- The slideshow -->
<div class="carousel-inner">
<div class="carousel-item active">
<img src="<?php echo Yii::$app->homeUrl?>images/adv1.jpg" alt="Desert" width="100%" height="500">
</div>
<div class="carousel-item">
<img src="<?php echo Yii::$app->homeUrl?>images/adv2.jpg" alt="Hydrangeas" width="100%" height="500">
</div>
<div class="carousel-item">
<img src="<?php echo Yii::$app->homeUrl?>images/adv3.jpg" alt="Jellyfish" width="100%" height="500">
</div>
</div>

<!-- Left and right controls -->
<a class="carousel-control-prev" href="#demo" data-slide="prev">
<span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
<span class="carousel-control-next-icon"></span>
</a>
</div>


    </div>
</div>
</div>
</div>
</div>

<!-- Popular Categories -->

<div class="popular_categories">
<div class="container">
<div class="row">
<div class="col-lg-3">
    <div class="popular_categories_content">
        <div class="popular_categories_title">News</div>
        <div class="popular_categories_slider_nav">
            <div class="popular_categories_prev popular_categories_nav"><i class="fas fa-angle-left ml-auto"></i></div>
            <div class="popular_categories_next popular_categories_nav"><i class="fas fa-angle-right ml-auto"></i></div>
        </div>
        <div class="popular_categories_link"><a href="#">full catalog</a></div>
    </div>
</div>

<!-- News Categories Slider -->

<div class="col-lg-9">
    <div class="popular_categories_slider_container">
        <div class="owl-carousel owl-theme popular_categories_slider">

            <!-- News Categories Item -->
            <div class="owl-item">
                <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                    <div class="popular_category_image"><i class="fas fa-mobile-alt" style="font-size: 60px;"></i></div>
                    <div class="popular_category_text">Smartphones & Tablets</div>
                </div>
            </div>

            <!-- Popular Categories Item -->
            <div class="owl-item">
                <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                    <div class="popular_category_image"><i class="fas fa-desktop" aria-hidden="true" style="color: #fff; font-size: 60px;"></i></div>
                    <div class="popular_category_text" style="color: #fff;">Computers & Laptops</div>
                </div>
            </div>

            <!-- Popular Categories Item -->
            <div class="owl-item">
                <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                    <div class="popular_category_image"><img src="<?php echo Yii::$app->homeUrl?>images/popular_3.png" alt=""></div>
                    <div class="popular_category_text">Gadgets</div>
                </div>
            </div>

            <!-- Popular Categories Item -->
            <div class="owl-item">
                <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                    <div class="popular_category_image"><i class="fas fa-gamepad" style=" color: #fff; font-size: 60px;"></i></div>
                    <div class="popular_category_text" style="color: #fff;">Video Games & Consoles</div>
                </div>
            </div>

            <!-- Popular Categories Item -->
            <div class="owl-item">
                <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                    <div class="popular_category_image"><img src="<?php echo Yii::$app->homeUrl?>images/popular_5.png" alt=""></div>
                    <div class="popular_category_text">Accessories</div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
</div>
</div>

<!-- Banner 

<div class="banner_2">
<div class="banner_2_background" style="background-image:url(images/banner_2_background.jpg)"></div>
<div class="banner_2_container">
<div class="banner_2_dots"></div>

<!-- Banner 2 Slider --

<div class="owl-carousel owl-theme banner_2_slider">

<!-- Banner 2 Slider Item 

<div class="owl-item">
    <div class="banner_2_item">
        <div class="container fill_height">
            <div class="row fill_height">
                <div class="col-lg-4 col-md-6 fill_height">
                    <div class="banner_2_content">
                        <div class="banner_2_category">Laptops</div>
                        <div class="banner_2_title">MacBook Air 13</div>
                        <div class="banner_2_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</div>
                        <div class="rating_r rating_r_4 banner_2_rating"><i></i><i></i><i></i><i></i><i></i></div>
                        <div class="button banner_2_button"><a href="#">Explore</a></div>
                    </div>
                    
                </div>
                <div class="col-lg-8 col-md-6 fill_height">
                    <div class="banner_2_image_container">
                        <div class="banner_2_image"><img src="<?php echo Yii::$app->homeUrl?>images/banner_2_product.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>          
    </div>
</div>

<!-- Banner 2 Slider Item --

<div class="owl-item">
    <div class="banner_2_item">
        <div class="container fill_height">
            <div class="row fill_height">
                <div class="col-lg-4 col-md-6 fill_height">
                    <div class="banner_2_content">
                        <div class="banner_2_category">Laptops</div>
                        <div class="banner_2_title">MacBook Air 13</div>
                        <div class="banner_2_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</div>
                        <div class="rating_r rating_r_4 banner_2_rating"><i></i><i></i><i></i><i></i><i></i></div>
                        <div class="button banner_2_button"><a href="#">Explore</a></div>
                    </div>
                    
                </div>
                <div class="col-lg-8 col-md-6 fill_height">
                    <div class="banner_2_image_container">
                        <div class="banner_2_image"><img src="<?php echo Yii::$app->homeUrl?>images/banner_2_product.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>          
    </div>
</div>

<!-- Banner 2 Slider Item --
<div class="owl-item">
    <div class="banner_2_item">
        <div class="container fill_height">
            <div class="row fill_height">
                <div class="col-lg-4 col-md-6 fill_height">
                    <div class="banner_2_content">
                        <div class="banner_2_category">Laptops</div>
                        <div class="banner_2_title">MacBook Air 13</div>
                        <div class="banner_2_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</div>
                        <div class="rating_r rating_r_4 banner_2_rating"><i></i><i></i><i></i><i></i><i></i></div>
                        <div class="button banner_2_button"><a href="#">Explore</a></div>
                    </div>
                    
                </div>
                <div class="col-lg-8 col-md-6 fill_height">
                    <div class="banner_2_image_container">
                        <div class="banner_2_image"><img src="<?php echo Yii::$app->homeUrl?>images/banner_2_product.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>          
    </div>
</div>

</div>
</div>
</div>
-->
<!-- Hot New Arrivals -->

<div class="new_arrivals">
<div class="container">
<div class="row">
<div class="col">
    <div class="tabbed_container">
        <div class="tabs clearfix tabs-right">
            <div class="new_arrivals_title">New Arrivals</div>
            <ul class="clearfix">
                <li class="active"></li>
                <!-- <li>Audio & Video</li>
                <li>Laptops & Computers</li> -->
            </ul>
            <div class="tabs_line"><span></span></div>
        </div>
        <div class="row">
            <div class="col-lg-9" style="z-index:1;">

                <!-- Product Panel -->
                <div class="product_panel panel active">
                    <div class="arrivals_slider slider">
                        <?php foreach($product as $prod){?>

                        <!-- Slider Item -->
                        <div class="arrivals_slider_item">
                            <div class="border_active"></div>
                            <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="<?php echo Yii::$app->homeUrl?>images/<?php echo $prod->imageFile ?>" alt=""></div>
                                <div class="product_content">
                                    <div class="product_price"><?php echo $prod->price_user ?></div>
                                    <div class="product_name"><div><a href="<?php echo Yii::$app->homeUrl?>site/productdetail?pid=<?php echo $prod->product_id ?>"><?php echo $prod->name_product ?></a></div></div>
                                    <div class="product_extras">
<!--                                    <div class="product_color">
                                            <input type="radio" checked name="product_color" style="background:#b19c83">
                                            <input type="radio" name="product_color" style="background:#000000">
                                            <input type="radio" name="product_color" style="background:#999999">
                                        </div>
 -->                                        <button class="product_cart_button">Add to Cart</button>
                                    </div>
                                </div>

                                <ul class="product_marks">
                                    <li class="product_mark product_discount">-25%</li>
                                    <li class="product_mark product_new">new</li>
                                </ul>
                            </div>
                      
                        </div>
                      <?php } ?>

                       
                                       
                       </div>
                            <div class="arrivals_slider_dots_cover"></div>
                    </div>                

                             
            </div>

            <div class="col-lg-3">
                <div class="arrivals_single clearfix">
                    <div class="d-flex flex-column align-items-center justify-content-center">
                        <div class="arrivals_single_image"><img src="<?php echo Yii::$app->homeUrl?>images/new_single.png" alt=""></div>
                        <div class="arrivals_single_content">
                            <div class="arrivals_single_category"><a href="#">Smartphones</a></div>
                            <div class="arrivals_single_name_container clearfix">
                                <div class="arrivals_single_name"><a href="#">LUNA Smartphone</a></div>
                                <div class="arrivals_single_price text-right">$379</div>
                            </div>
                            <div class="rating_r rating_r_4 arrivals_single_rating"><i></i><i></i><i></i><i></i><i></i></div>
                            <form action="#"><button class="arrivals_single_button">Add to Cart</button></form>
                        </div>
                        <ul class="arrivals_single_marks product_marks">
                            <li class="arrivals_single_mark product_mark product_new">new</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
                
    </div>
</div>
</div>
</div>      
</div>

<!-- Best Sellers -->

<div class="best_sellers">
<div class="container">
<div class="row">
<div class="col">
    <div class="tabbed_container">
        <div class="tabs clearfix tabs-right">
            <div class="new_arrivals_title" style="color: #fff;">Selling</div>
            <ul class="clearfix">
                <li class="active" style="color: #fff;"></li>
               <!--  <li style="color: #fff;">Audio & Video</li>
                <li style="color: #fff;">Laptops & Computers</li> -->
            </ul>
            <div class="tabs_line"><span></span></div>
        </div>

        <div class="bestsellers_panel panel active">

            <!-- Best Sellers Slider -->

            <div class="bestsellers_slider slider">

               <?php foreach($product3 as $prod3){?>
                <!-- Best Sellers Item -->
                <div class="bestsellers_item">
                    <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                        <div class="bestsellers_image"><img src="<?php echo Yii::$app->homeUrl?>images/<?php echo $prod3->imageFile ?>" alt=""></div>
                        <div class="bestsellers_content">
                            <div class="bestsellers_category"><a href="#">Headphones</a></div>
                            <div class="bestsellers_name"><a href="<?php echo Yii::$app->homeUrl?>site/productdetail?pid=<?php echo $prod->product_id ?>"><?php echo $prod3->name_product ?></a></div>
                            <div class="rating_r rating_r_4 bestsellers_rating"><i></i><i></i><i></i><i></i><i></i></div>
                            <div class="bestsellers_price discount"><?php echo $prod3->price_user ?></div>
                        </div>
                    </div>
                    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                    <ul class="bestsellers_marks">
                        <li class="bestsellers_mark bestsellers_discount">-25%</li>
                        <li class="bestsellers_mark bestsellers_new">new</li>
                    </ul>
                </div>
                 <?php } ?>

            </div>
        </div>

        
            
    </div>
        
</div>
</div>
</div>
</div>

<!-- Adverts -->

<div class="adverts">
<div class="container">
<div class="new_arrivals_title">E-Magzine</div><br><br>
<div class="row">

<div class="col-lg-4 advert_col">
    
    <!-- Advert Item -->

    <div class="advert d-flex flex-row align-items-center justify-content-start">
        <div class="advert_content">
            <div class="advert_title"><a href="#">Title-1</a></div>
            <div class="advert_text">Lorem ipsum dolor sit amet, consectetur adipiscing Donec et.</div>
        </div>
        <div class="ml-auto"><div class="advert_image"><img src="<?php echo Yii::$app->homeUrl?>images/adv_1.png" alt=""></div></div>
    </div>
</div>

<div class="col-lg-4 advert_col">
    
    <!-- Advert Item -->

    <div class="advert d-flex flex-row align-items-center justify-content-start">
        <div class="advert_content">
            <div class="advert_subtitle">Title-2</div>
            <div class="advert_title_2"><a href="#">Sale -45%</a></div>
            <div class="advert_text">Lorem ipsum dolor sit amet, consectetur.</div>
        </div>
        <div class="ml-auto"><div class="advert_image"><img src="<?php echo Yii::$app->homeUrl?>images/adv_2.png" alt=""></div></div>
    </div>
</div>

<div class="col-lg-4 advert_col">
    
    <!-- Advert Item -->

    <div class="advert d-flex flex-row align-items-center justify-content-start">
        <div class="advert_content">
            <div class="advert_title"><a href="#">Title-3</a></div>
            <div class="advert_text">Lorem ipsum dolor sit amet, consectetur.</div>
        </div>
        <div class="ml-auto"><div class="advert_image"><img src="<?php echo Yii::$app->homeUrl?>images/adv_3.png" alt=""></div></div>
    </div>
</div>

</div>
</div>
</div>

<!-- Trends -->

<div class="trends">
<div class="trends_background" style="background-image:url(images/trends_background.jpg)"></div>
<div class="trends_overlay"></div>
<div class="container">

<div class="row">

<!-- Trends Content -->
<div class="col-lg-3">
    <div class="trends_container">
        <h2 class="trends_title">Trends 2018</h2>
        <div class="trends_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing Donec et.</p></div>
        <div class="trends_slider_nav">
            <div class="trends_prev trends_nav"><i class="fas fa-angle-left ml-auto"></i></div>
            <div class="trends_next trends_nav"><i class="fas fa-angle-right ml-auto"></i></div>
        </div>
    </div>
</div>

<!-- Trends Slider -->
<div class="col-lg-9">
    <div class="trends_slider_container">

        <!-- Trends Slider -->

        <div class="owl-carousel owl-theme trends_slider">
            <?php foreach($product10 as $prod) { ?>

            <!-- Trends Slider Item -->
            <div class="owl-item">
                <div class="trends_item is_new">
                    <div class="trends_image d-flex flex-column align-items-center justify-content-center"><img src="<?php echo Yii::$app->homeUrl?>images/<?php echo $prod->imageFile ?>" alt=""></div>
                    <div class="trends_content">
                        <div class="trends_category"><a href="#">Smartphones</a></div>
                        <div class="trends_info clearfix">
                            <div class="trends_name"><a href="<?php echo Yii::$app->homeUrl?>site/productdetail?pid=<?php echo $prod->product_id ?>"><?php echo $prod->name_product ?></a></div>
                            <div class="trends_price"><?php echo $prod->price_user ?></div>
                        </div>
                    </div>
                    <ul class="trends_marks">
                        <li class="trends_mark trends_discount">-25%</li>
                        <li class="trends_mark trends_new">new</li>
                    </ul>
                    <!--<div class="trends_fav"><i class="fas fa-heart"></i></div> -->
                </div>
            </div>
            <?php } ?>
            
        </div>
    </div>
</div>

</div>
</div>
</div>

<!-- Reviews -->

<div class="reviews">
<div class="container">
<div class="row">
<div class="col">
    
    <div class="reviews_title_container">
        <h3 class="reviews_title">Latest Reviews</h3>
        <div class="reviews_all ml-auto"><a href="#">view all <span>reviews</span></a></div>
    </div>

    <div class="reviews_slider_container">
        
        <!-- Reviews Slider -->
        <div class="owl-carousel owl-theme reviews_slider">
            
            <!-- Reviews Slider Item -->
            <div class="owl-item">
                <div class="review d-flex flex-row align-items-start justify-content-start">
                    <div><div class="review_image"><img src="<?php echo Yii::$app->homeUrl?>images/review_1.jpg" alt=""></div></div>
                    <div class="review_content">
                        <div class="review_name">Roberto Sanchez</div>
                        <div class="review_rating_container">
                            <div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
                            <div class="review_time">2 day ago</div>
                        </div>
                        <div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
                    </div>
                </div>
            </div>

            <!-- Reviews Slider Item -->
            <div class="owl-item">
                <div class="review d-flex flex-row align-items-start justify-content-start">
                    <div><div class="review_image"><img src="<?php echo Yii::$app->homeUrl?>images/review_2.jpg" alt=""></div></div>
                    <div class="review_content">
                        <div class="review_name">Brandon Flowers</div>
                        <div class="review_rating_container">
                            <div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
                            <div class="review_time">2 day ago</div>
                        </div>
                        <div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
                    </div>
                </div>
            </div>

            <!-- Reviews Slider Item -->
            <div class="owl-item">
                <div class="review d-flex flex-row align-items-start justify-content-start">
                    <div><div class="review_image"><img src="<?php echo Yii::$app->homeUrl?>images/review_3.jpg" alt=""></div></div>
                    <div class="review_content">
                        <div class="review_name">Emilia Clarke</div>
                        <div class="review_rating_container">
                            <div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
                            <div class="review_time">2 day ago</div>
                        </div>
                        <div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
                    </div>
                </div>
            </div>

            <!-- Reviews Slider Item -->
            <div class="owl-item">
                <div class="review d-flex flex-row align-items-start justify-content-start">
                    <div><div class="review_image"><img src="<?php echo Yii::$app->homeUrl?>images/review_1.jpg" alt=""></div></div>
                    <div class="review_content">
                        <div class="review_name">Roberto Sanchez</div>
                        <div class="review_rating_container">
                            <div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
                            <div class="review_time">2 day ago</div>
                        </div>
                        <div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
                    </div>
                </div>
            </div>

            <!-- Reviews Slider Item -->
            <div class="owl-item">
                <div class="review d-flex flex-row align-items-start justify-content-start">
                    <div><div class="review_image"><img src="<?php echo Yii::$app->homeUrl?>images/review_2.jpg" alt=""></div></div>
                    <div class="review_content">
                        <div class="review_name">Brandon Flowers</div>
                        <div class="review_rating_container">
                            <div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
                            <div class="review_time">2 day ago</div>
                        </div>
                        <div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
                    </div>
                </div>
            </div>

            <!-- Reviews Slider Item -->
            <div class="owl-item">
                <div class="review d-flex flex-row align-items-start justify-content-start">
                    <div><div class="review_image"><img src="<?php echo Yii::$app->homeUrl?>images/review_3.jpg" alt=""></div></div>
                    <div class="review_content">
                        <div class="review_name">Emilia Clarke</div>
                        <div class="review_rating_container">
                            <div class="rating_r rating_r_4 review_rating"><i></i><i></i><i></i><i></i><i></i></div>
                            <div class="review_time">2 day ago</div>
                        </div>
                        <div class="review_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</p></div>
                    </div>
                </div>
            </div>

        </div>
        <div class="reviews_dots"></div>
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
            <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="<?php echo Yii::$app->homeUrl?>images/brands_6.jpg" alt=""></div></div>
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
</div>
