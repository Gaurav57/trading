<div class="cart_section">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="cart_container">
						<div class="cart_title">Shopping Cart</div>

			
						
						<div class="cart_items">
							<ul class="cart_list">
								<?php $i='0';
								for ($i;count($resp)>$i;$i++) { ?>
								
								
								<li class="cart_item clearfix">
									<div class="cart_item_image"><img src="<?php echo Yii::$app->homeUrl?>images/<?php echo $resp[$i]['imageFile'] ?>" alt="">
									</div>
									<div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
										<div class="cart_item_name cart_info_col">
											<div class="cart_item_title">Name</div>
											<div class="cart_item_text">
												<?php echo $resp[$i]['name_product'] ?></div>
										</div>
										<div class="cart_item_color cart_info_col">
											<div class="cart_item_title">Color</div>
											<div class="cart_item_text"><span style="background-color:#999999;"></span>Silver</div>
										</div>
										<div class="cart_item_quantity cart_info_col">
											<div class="cart_item_title">Quantity</div>
											<div class="cart_item_text"><?php echo $resp[$i]['quantity'] ?></div>
										</div>
										<div class="cart_item_price cart_info_col">
											<div class="cart_item_title">Price</div>
											<div class="cart_item_text"><?php echo $resp[$i]['price'] ?></div>
										</div>
										<div class="cart_item_total cart_info_col">
											<div class="cart_item_title">Total</div>
											<div class="cart_item_text">$
									<?= bcmul($resp[$i]['quantity'], $resp[$i]['price']) ?></div>
										</div>
									</div>
								</li>
						<?php  } ?>
							</ul>
						</div>
						
						<!-- Order Total -->
						<div class="order_total">
							<div class="order_total_content text-md-right">
								<div class="order_total_title">Order Total:</div>
								<div class="order_total_amount">$2000</div>
							</div>
						</div>

						<div class="cart_buttons">
							<button type="button" class="button cart_button_clear">Update</button>
							<button type="button" class="button cart_button_checkout"><a href="<?php echo Yii::$app->homeUrl?>site/checkout">Checkout</a></button>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

