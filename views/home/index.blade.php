    <div class="container">
        <div class="inner-column row">
            <div id="center_column" class="col-xs-12 col-sm-12 col-lg-12">
                @if(best_seller()->count() > 0)
                <div id="trending-home" class="product_home">
                    <div class="block-title">
                        <h2 class="fl">Produk <strong>Terlaris</strong></h2>
                        <a class="view-shop fr" href="{{url('produk')}}"><span>Lihat Produk</span></a>
                        <div class="clr"></div>
                    </div>
                    <div class="product-list">
                        <div class="row">
                            <ul id="slide_product" class="grid owl-carousel owl-theme">
                                @foreach(best_seller() as $best)
                                <li class="item">
                                    <div class="prod-container">
                                        <div class="image-container">
                                            <a href="{{product_url($best)}}">
                                                <img class="img-responsive" src="{{product_image_url($best->gambar1,'medium')}}" alt="{{$best->nama}}" />
                                            </a>
                                        </div>
                                        <h5 class="product-name">{{short_description($best->nama, 25)}}</h5>
                                        <span class="price">{{price($best->hargaJual)}}</span>
                                        <a href="{{product_url($best)}}" class="buy-btn">Detail</a>
                                     </div>
                                </li>
                                @endforeach
                            </ul>
                            <div class="clr"></div>
                        </div>
                    </div>
                </div>
                @endif
                <div id="best-seller-home" class="product_home">
                    <div class="block-title">
                        <h2 class="fl"><strong>Produk</strong> Kami</h2>
                        <a class="view-shop fr" href="{{url('produk')}}"><span>Lihat Produk</span></a>
                        <div class="clr"></div>
                    </div>
                    <div class="product-list">
                        <div class="row col-xs-12">
                            <ul id="slide_product" class="grid owl-carousel owl-theme">
                                @foreach(home_product() as $products)
                                <li class="item">
                                    <div class="prod-container">
                                        <div class="image-container">
                                            <a href="{{product_url($products)}}">
                                                <img class="img-responsive" src="{{product_image_url($products->gambar1,'medium')}}" alt="{{$products->nama}}" />
                                            </a>
                                            @if(is_outstok($products))
                                            <div class="icon-info icon-sold">Sold</div>
                                            @elseif(is_terlaris($products))
                                            <div class="icon-info icon-sale">Hot Item</div>
                                            @elseif(is_produkbaru($products))
                                            <div class="icon-info icon-new">New</div>
                                            @endif
                                        </div>
                                        <h5 class="product-name">{{short_description($products->nama,25)}}</h5>
                                        <span class="price">{{price($products->hargaJual)}}</span>
                                        <a href="{{product_url($products)}}" class="buy-btn">Detail</a>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                            <div class="clr"></div>
                        </div>
                    </div>
                </div>
                @if(new_product()->count() > 0)
                <div id="new-arrivals" class="product_home">
                    <div class="block-title">
                        <h2 class="fl">Produk <strong>Terbaru</strong></h2>
                        <a class="view-shop fr" href="{{url('produk')}}"><span>Lihat Produk</span></a>
                        <div class="clr"></div>
                    </div>
                    <div class="product-list">
                        <div class="row col-xs-12">
                            <ul id="slide_product" class="grid owl-carousel owl-theme">
                                @foreach(new_product() as $new)
                                <li class="item">
                                    <div class="prod-container">
                                        <div class="image-container">
                                            <a href="{{product_url($new)}}">
                                                <img class="img-responsive" src="{{product_image_url($new->gambar1,'medium')}}" alt="{{$new->nama}}" />
                                            </a>
                                        </div>
                                        <h5 class="product-name">{{short_description($new->nama, 25)}}</h5>
                                        <span class="price">{{price($new->hargaJual)}}</span>
                                        <a href="{{product_url($new)}}" class="buy-btn">Detail</a>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                            <div class="clr"></div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>