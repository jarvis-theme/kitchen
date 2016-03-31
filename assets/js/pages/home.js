define(['jquery','jq_flexslider','owl_carousel'], function($)
{
	return new function(){
		var self = this;
		self.run = function(){
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
					[120, 1],
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
				navigationText: false,
				directionNav: false,
			});
			$('#best-seller-home #slide_product').owlCarousel({
				itemsCustom : [
					[120, 1],
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
					[120, 1],
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
			$('#best_products #slide_product').owlCarousel({
				itemsCustom : [
					[120, 1],
					[350, 2],
					[450, 2],
					[600, 3],
					[700, 3],
					[1000, 4],
					[1200, 4],
					[1400, 4]
				],
				navigation : true,
				pagination: false,
				navigationText: false
			});
			$('#home_products #slide_product').owlCarousel({
				itemsCustom : [
					[120, 1],
					[350, 2],
					[450, 2],
					[600, 3],
					[700, 3],
					[1000, 4],
					[1200, 4],
					[1400, 4]
				],
				navigation : true,
				pagination: false,
				navigationText: false
			});
			$('#new_products #slide_product').owlCarousel({
				itemsCustom : [
					[120, 1],
					[350, 2],
					[450, 2],
					[600, 3],
					[700, 3],
					[1000, 4],
					[1200, 4],
					[1400, 4]
				],
				navigation : true,
				pagination: false,
				navigationText: false
			});
			$('#search #slide_product').owlCarousel({
				itemsCustom : [
					[120, 1],
					[350, 1],
					[450, 2],
					[600, 3],
					[700, 3],
					[1000, 4],
					[1200, 4],
					[1400, 4]
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
		};
	}
});