var dirTema = document.querySelector("meta[name='theme_path']").getAttribute('content');

require.config({
	baseUrl: '/',
    urlArgs: "v=001",
	waitSeconds: 60,
	shim: {
		"bootstrap"	: {
			deps: ['jquery'],
		},
		'jq_ui' : {
			deps : ['jquery'],
		},
		"noty" : {
			deps : ['jquery'],
		},
		"cart" : {
			deps : ['jquery'],
		},
		'fancybox' : {
			deps : ['jquery']
		},
		"owl_carousel" : {
			deps: ['jquery'],
		},
		"jq_flexslider" : {
			deps : ['jquery'],
		},
		"navgoco" : {
			deps : ['jquery'],
		}
	},

	paths: {
		// LIBRARY
		jquery 			: '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min',
		cart			: 'js/shop_cart',
		jq_ui			: 'js/jquery-ui',
		noty			: 'js/jquery.noty',
		bootstrap		: '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min',
		fancybox		: dirTema+'/assets/js/jquery.fancybox.pack',
		jq_flexslider	: dirTema+'/assets/js/jquery.flexslider-min',
		owl_carousel	: dirTema+'/assets/js/owl.carousel.min',
		modernizr		: dirTema+'/assets/js/modernizr.custom.28468',
		navgoco			: dirTema+'/assets/js/jquery.navgoco.min',
		
		// ROUTE
		router          : 'js/router',

		// CONTROLLER
		home            : dirTema+'/assets/js/pages/home',
		member          : dirTema+'/assets/js/pages/member',
		produk          : dirTema+'/assets/js/pages/produk',
		main	        : dirTema+'/assets/js/pages/default',
	}
});
require([
	'jquery',
	'router',
	'cart',
	'main',
	'modernizr'
], function($,router,cart,main)
{
	// PRODUK
	router.define('/', 'home@run');
	router.define('home', 'home@run');
	router.define('produk/*', 'produk@run');
	router.run();
	cart.run();
	main.run();
});