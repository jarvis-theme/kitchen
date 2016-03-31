<div id="slide-row">
	<div id="bg-slider">
    	<div class="container">
            <div id="da-slider" class="flexslider">
                <ul class="slides">
                    @foreach (slideshow() as $val)  
                    <li>
                        @if(!empty($val->url))
                        <a href="{{filter_link_url($val->url)}}" target="_blank">
                        @else
                        <a href="#">
                        @endif
                            {{HTML::image(slide_image_url($val->gambar), 'slide banner',array('width'=>'1020'))}}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
	<div id="adv-home">
    	<div class="container">
            <div class="row">
                @foreach(horizontal_banner() as $banners)
                <div class="col-sm-12">
                    <div class="adv-full">
                        <a href="{{url($banners->url)}}">
                            {{HTML::image(banner_image_url($banners->gambar),'Info Promo',array('width'=>'1181'))}}
                        </a>
                    </div>
                </div>
                @endforeach
    	   </div>
	   </div>
   </div>
</div>