$(window).load(function() {
	// PRELOADER
	if ($('body').hasClass('hide')) {
		$('.preloader').fadeOut(1000, function(){
			setTimeout(function(){$('.preloader').remove(); },2000);
			$('body').removeClass('hide');
		});
		$('body').removeClass('hide');
	} else {
		$('.preloader').fadeOut(1000, function(){
			$('.preloader').remove();
		});
	}
	// BIG SLIDER
	$('#bg-slider .flexslider').flexslider({
		animation: "slide",
		directionNav: true,
		controlNav: false,
		prevText: "",
		nextText: ""
	});
			
	// SLIDER PRODUCT HOME
	$('#trending-home #slide_product').owlCarousel({
		itemsCustom : [
			[350, 1],
			[450, 2],
			[600, 3],
			[700, 3],
			[1000, 4],
			[1200, 5],
			[1400, 5]
		],
		navigation : true,
		pagination: false,
		navigationText: false
	});
	$('#best-seller-home #slide_product').owlCarousel({
		itemsCustom : [
			[350, 1],
			[450, 2],
			[600, 3],
			[700, 3],
			[1000, 4],
			[1200, 5],
			[1400, 5]
		],
		navigation : true,
		pagination: false,
		navigationText: false
	});
	$('#by-author-home #slide_product').owlCarousel({
		itemsCustom : [
			[350, 1],
			[450, 2],
			[600, 3],
			[700, 3],
			[1000, 4],
			[1200, 5],
			[1400, 5]
		],
		navigation : true,
		pagination: false,
		navigationText: false
	});
	$('#new-arrivals #slide_product').owlCarousel({
		itemsCustom : [
			[350, 1],
			[450, 2],
			[600, 3],
			[700, 3],
			[1000, 4],
			[1200, 5],
			[1400, 5]
		],
		navigation : true,
		pagination: false,
		navigationText: false
	});
	
	//THUMB LIST
	$('#thumb-list').owlCarousel({
		itemsCustom : [
			[350, 2],
			[350, 3],
			[600, 4],
			[700, 4],
			[1000, 4],
			[1200, 3],
			[1400, 3]
		],
		navigation : true,
		pagination: false,
		navigationText: false
	});
});

$(document).ready(function() {
	$('footer h4.title').click(function() {
		$(this).toggleClass('active');
		$(this).next().slideToggle(250);
	});
	
	$('.sidey .nav').navgoco();

	$('.fancybox').fancybox({
		padding: 10,
		openEffect : 'elastic',
		openSpeed  : 150,
		closeEffect : 'elastic',
		closeSpeed  : 150
	});
});