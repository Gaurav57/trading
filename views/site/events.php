

	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/shop_background.jpg"></div>
		<div class="home_overlay"></div>
		<div class="home_content d-flex flex-column align-items-center justify-content-center">
			<h2 class="home_title">Our Events</h2>
		</div>
	</div>

	<!-- Blog -->

	<div class="blog">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="blog_posts d-flex flex-row align-items-start justify-content-between">
						
						<!-- Blog post -->
						<?php foreach($events as $event) { ?>
						<div class="blog_post">
							<div class="blog_image" style="background-image:url(<?php echo Yii::$app->homeUrl?>images/<?php echo $event->image ?>)"></div>
							<div class="viewed_name" style="text-align:center" ><a href="#" style="font-size: 20px"><?php echo $event->title ?></a></div>
							<div class="blog_text" style="padding-top: 12px"><?php echo $event->discription?></div>
							<div class="blog_button"><a href="blog_single.html">Continue Reading</a></div>
						</div>
						<?php } ?>
						
					</div>
				</div>
					
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	