        {{favicon()}} 

        {{generate_theme_css('kitchen/assets/css/reset.css')}} 
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        @if($tema->isiCss=='') 
        {{generate_theme_css('kitchen/assets/css/style.css?v=0001')}} 
        @else 
        {{generate_theme_css('kitchen/assets/css/editstyle.css')}} 
        @endif 
        {{generate_theme_css('kitchen/assets/css/flexslider.css')}} 
        {{generate_theme_css('kitchen/assets/css/owl.carousel.css')}} 
        {{generate_theme_css('kitchen/assets/css/owl.theme.css')}} 
        {{generate_theme_css('kitchen/assets/css/jquery.fancybox.css')}} 

        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>

        <noscript>
        {{generate_theme_css('kitchen/assets/css/nojs.css')}} 
        </noscript>