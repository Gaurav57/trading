$(function () {
  	$('.navbar-toggle-sidebar').click(function () {
  		$('.navbar-nav').toggleClass('slide-in');
  		$('.side-body').toggleClass('body-slide-in');
  		$('#search').removeClass('in').addClass('collapse').slideUp(200);
  	});

  	$('#search-trigger').click(function () {
  		$('.navbar-nav').removeClass('slide-in');
  		$('.side-body').removeClass('body-slide-in');
  		$('.search-input').focus();
  	});
	
	$('#addproduct-price_dealer').blur(function(){
		var disprice = $('#addproduct-price_distributer').val();
		var dealerprice = $(this).val();
		var that = $(this);
		if(dealerprice <= disprice) {
			setTimeout(function(){
			//alert('Price must be greater than distributer price.');
			that.siblings('.help-block').text('Price must be greater than distributer price.');
			that.parent().removeClass('has-success').addClass('has-error');
			},1000);
		}
	});
	$('#addproduct-price_reseller').blur(function(){
		var disprice = $('#addproduct-price_dealer').val();
		var dealerprice = $(this).val();
		var that = $(this);
		if(dealerprice <= disprice) {
			setTimeout(function(){
			//alert('Price must be greater than dealer price.');
			that.siblings('.help-block').text('Price must be greater than dealer price.');
			that.parent().removeClass('has-success').addClass('has-error');
			},1000);	
		}
	});
	$('#addproduct-price_user').blur(function(){
		var disprice = $('#addproduct-price_reseller').val();
		var dealerprice = $(this).val();
			var that = $(this);
		if(dealerprice <= disprice) {
				setTimeout(function(){
			//alert('Price must be greater than reseller price.');
			$(this).siblings('.help-block').text('Price must be greater than reseller price.');
			$(this).parent().removeClass('has-success').addClass('has-error');
				},1000);	
		}
	});
  });