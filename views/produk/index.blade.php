<div class="container">
    <div class="inner-column row">
        <div id="left_sidebar" class="col-xs-12 col-sm-4 col-lg-3">
            @if(pluginSidePowerup() != "")
            <div class="powerup">
                {{pluginSidePowerup()}}
            </div>
            @endif
            <div id="categories" class="block sidey">
                <div class="title"><h2>Kategori</h2></div>
                <ul class="block-content nav">
                    @foreach(list_category() as $side_menu)
                        @if($side_menu->parent == '0')
                        <li>
                            <a href="{{category_url($side_menu)}}">{{$side_menu->nama}}</a>
                            @if($side_menu->anak->count() != 0)
                            <ul class="sidekategori">
                                @foreach($side_menu->anak as $submenu)
                                @if($submenu->parent == $side_menu->id)
                                <li>
                                    <a href="{{category_url($submenu)}}" class="transparent">{{$submenu->nama}}</a>
                                    @if($submenu->anak->count() != 0)
                                    <ul class="sidekategori">
                                        @foreach($submenu->anak as $submenu2)
                                        @if($submenu2->parent == $submenu->id)
                                        <li>
                                            <a href="{{category_url($submenu2)}}">{{$submenu2->nama}}</a>
                                        </li>
                                        @endif
                                        @endforeach
                                    </ul>
                                    @endif
                                </li>
                                @endif
                                @endforeach
                            </ul>
                            @endif
                        </li>
                        @endif
                    @endforeach
                </ul>
            </div>
            @if(count(best_seller()) > 0)
            <div id="best-seller" class="block">
                <div class="title"><h2>Produk <strong>Terlaris</strong></h2></div>
                <ul class="block-content">
                    @foreach(best_seller() as $bestproduk)
                    <li>
                        <a href="{{product_url($bestproduk)}}">
                            <div class="img-block">
                                {{HTML::image(product_image_url($bestproduk->gambar1,'thumb'), $bestproduk->nama, array('class'=>'img-responsive imgbest'))}}
                            </div>
                            <p class="product-name">{{short_description($bestproduk->nama,15)}}</p>
                            @if(!empty($bestproduk->hargaCoret))
                            <p class="author"><del>{{price($bestproduk->hargaCoret)}}</del></p>
                            @endif
                            <p class="price">{{price($bestproduk->hargaJual)}}</p> 
                        </a>
                    </li>
                    @endforeach
                </ul>
                <div class="btn-more">
                    <a href="{{url('produk')}}">Lihat Semua</a>
                </div>
            </div>
            @endif
            <div id="latest-news" class="block">
                <div class="title"><h2>Koleksi</h2></div>
                <ul class="block-content">
                    @foreach(list_koleksi() as $kol)
                    <span class="underline"><a href="{{koleksi_url($kol)}}">{{$kol->nama}}</a></span>&nbsp;&nbsp;
                    @endforeach
                </ul>
            </div>
            @foreach(vertical_banner() as $banners)
            <div id="adv-sidebar">
                <a href="{{URL::to($banners->url)}}">
                    {{HTML::image(banner_image_url($banners->gambar),'Info Promo',array('class'=>'img-responsive'))}}
                </a>
            </div>
            @endforeach
        </div>
        <div class="col-xs-12 col-sm-8 col-lg-9">
            <div class="breadcrumb">
                <p><strong>Koleksi Produk</strong></p>
            </div>
            <div class="product-list">
                <div class="row">
                    <ul class="grid">
                    @if(count(list_product(null, @$category, @$collection)) > 0)
                        @foreach(list_product(null, @$category, @$collection) as $produks)
                        <li class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="prod-container">
                                <div class="image-container">
                                    <a href="{{product_url($produks)}}">
                                        {{HTML::image(product_image_url($produks->gambar1,'medium'), $produks->nama, array('class'=>'img-responsive','id'=>'listproduk'))}}
                                    </a>
                                    @if(is_outstok($produks))
                                    <div class="icon-info icon-sold">Sold</div>
                                    @elseif(is_terlaris($produks))
                                    <div class="icon-info icon-sale">Hot Item</div>
                                    @elseif(is_produkbaru($produks))
                                    <div class="icon-info icon-new">New</div>
                                    @endif
                                </div>
                                <h5 class="product-name">{{ short_description($produks->nama,26)}}</h5>
                                @if(!empty($produks->hargaCoret))
                                <p class="author"><del>{{price($produks->hargaCoret)}}</del></p>
                                @endif
                                <span class="price">{{price($produks->hargaJual)}}</span>
                                <a href="{{product_url($produks)}}" class="buy-btn">Buy Now</a>
                            </div>
                        </li>
                        @endforeach
                    @else
                        <article class="search-result">Produk tidak ditemukan</article>
                    @endif  
                    </ul>
                </div>
            </div>
            <div class="clr"></div>
            <div class="content_sortPagiBar">
                {{list_product(null, @$category, @$collection)->links()}}
                <div class="clr"></div>
            </div>
        </div>
    </div>
</div>