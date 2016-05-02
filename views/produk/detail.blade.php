    <div class="container">
        <div class="inner-column row">
            <div id="left_sidebar" class="col-xs-12 col-sm-4 col-lg-3">
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
                <div id="latest-news" class="block">
                    <div class="title"><h2>Koleksi</h2></div>
                    <ul class="block-content">
                        <li>
                            @foreach(list_koleksi() as $kol)
                            <span class="underline"><a href="{{koleksi_url($kol)}}">{{$kol->nama}}</a></span>&nbsp;&nbsp;
                            @endforeach
                        </li>
                    </ul>
                </div>
                @foreach(vertical_banner() as $banners)
                <div id="adv-sidebar">
                    <a href="{{url($banners->url)}}">
                        {{HTML::image(banner_image_url($banners->gambar),'Info Promo',array('class'=>'img-responsive'))}}
                    </a>
                </div>
                @endforeach
            </div>
            <div class="col-xs-12 col-sm-8 col-lg-9">
                <div class="breadcrumb"><p>Detail Produk</p></div>
                <div class="product-details">
                    <form action="#" id="addorder">
                        <div class="row">
                            <div id="prod-left" class="col-xs-12 col-sm-6 col-lg-6">
                                <div class="big-image">
                                    {{HTML::image(product_image_url($produk->gambar1,'medium'), $produk->nama)}}
                                    <a class="zoom fancybox" href="{{product_image_url($produk->gambar1,'large')}}" title="{{$produk->nama}}">&nbsp;</a>
                                </div>
                                <div class="attribute clr">
                                    <fieldset class="attribute_fieldset">
                                        <div class="attribute_list">
                                            <div class="color-list">
                                                <ul id="color_to_pick_list" class="clearfix">
                                                    @if($produk->gambar2!='')
                                                    <li class="item col-xs-4">
                                                        <div class="img-container">
                                                            <a class="fancybox" href="{{product_image_url($produk->gambar2, 'large')}}" title="{{$produk->nama}}">
                                                                {{HTML::image(product_image_url($produk->gambar2,'thumb'),'Thumbnail 1',array('width'=>'122','height'=>'182','class'=>'img-responsive'))}}
                                                            </a>
                                                        </div>
                                                    </li>
                                                    @endif
                                                    @if($produk->gambar3!='')
                                                    <li class="item col-xs-4">
                                                        <div class="img-container">
                                                            <a class="fancybox" href="{{product_image_url($produk->gambar3,'large')}}" title="{{$produk->nama}}">
                                                                {{HTML::image(product_image_url($produk->gambar3,'thumb'),'Thumbnail 2',array('width'=>'122','height'=>'182','class'=>'img-responsive'))}}
                                                            </a>
                                                        </div>
                                                    </li>
                                                    @endif
                                                    @if($produk->gambar4!='')
                                                    <li class="item col-xs-4">
                                                        <div class="img-container">
                                                            <a class="fancybox" href="{{product_image_url($produk->gambar4,'large')}}" title="{{$produk->nama}}">
                                                                {{HTML::image(product_image_url($produk->gambar4,'thumb'),'Thumbnail 3',array('width'=>'122','height'=>'182','class'=>'img-responsive'))}}
                                                            </a>
                                                        </div>
                                                    </li>
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <div id="prod-right" class="col-xs-12 col-sm-6 col-lg-6">
                                <h2 class="name-title">{{$produk->nama}}</h2>
                                @if(!empty($produk->hargaCoret))
                                <h3 class="author"><del>{{price($produk->hargaCoret)}}</del></h3>
                                @endif
                                <span class="price">{{price($produk->hargaJual)}}</span>
                                <div class="img-rating">{{sosialShare(url(product_url($produk)))}}</div>

                                <div class="desc-prod">
                                    <p class="title">Deskripsi Produk</p>
                                    <p>{{$produk->deskripsi}}</p>
                                </div>

                                @if($opsiproduk->count() > 0)
                                <div class="size-list">
                                    <div class="form-group">
                                        <label class="col-xs-5 col-sm-4 control-label">Opsi :</label>
                                        <div class="col-xs-7 col-sm-5">
                                            <select class="form-control attribute_select" name="opsiproduk">
                                                <option value="">-- Pilih Opsi --</option>
                                                @foreach ($opsiproduk as $key => $opsi)
                                                <option value="{{$opsi->id}}" {{ $opsi->stok==0 ? 'disabled':''}} >
                                                    {{$opsi->opsi1.($opsi->opsi2=='' ? '':' / '.$opsi->opsi2).($opsi->opsi3=='' ? '':' / '.$opsi->opsi3)}} {{price($opsi->harga)}}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                @endif

                                <div class="quantity">
                                    <div class="form-group">
                                        <label class="col-xs-5 col-sm-4 control-label">Jumlah :</label>
                                        <div class="col-xs-7 col-sm-8">
                                            <button type="submit" class="qtyminus" field="qty" /><i class="fa fa-caret-left"></i></button>
                                            <input type="text" name="qty" value="1" class="qty" />
                                            <button type="button" value="+" class="qtyplus" field="qty" /><i class="fa fa-caret-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 avail-info">
                                    @if(!empty($produk->stok))
                                    <span class="instock">Stok tersedia <span class="ttl-stock">{{$produk->stok}} item</span></span>
                                    @else
                                    <span class="fa-stack fa-1x">
                                        <i id="emptystok" class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-close fa-stack-1x fa-inverse"></i>
                                    </span>
                                    Out of Stock
                                    @endif
                                </div>
                            </div>
                            <div class="clr"></div>
                        </div>

                        <div class="btm-details">
                            <div class="button-detail fr">
                                <button class="btn addtocart" type="submit"><i class="cart"></i>Beli</button>
                            </div>
                            <div class="clr"></div>
                        </div>
                    </form>
                </div>

                @if(count(other_product($produk, 4)) > 0)
                <div id="related-product" class="product-list">
                    <h2 class="title">Produk Lainnya</h2>
                    <div class="row">
                        <ul class="grid">
                            @foreach(other_product($produk, 4) as $relproduk)
                            <li class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                <div class="prod-container">
                                    <div class="image-container">
                                        <a href="{{product_url($relproduk)}}">
                                            {{HTML::image(product_image_url($relproduk->gambar1,'medium'),$relproduk->nama,array('class'=>'img-responsive'))}}
                                        </a>
                                        @if(is_outstok($relproduk))
                                        <div class="icon-info icon-sold">Sold</div>
                                        @elseif(is_terlaris($relproduk))
                                        <div class="icon-info icon-sale">Hot Item</div>
                                        @elseif(is_produkbaru($relproduk))
                                        <div class="icon-info icon-new">New</div>
                                        @endif
                                    </div>
                                    <h5 class="product-name">{{short_description($relproduk->nama,25)}}</h5>
                                    @if(!empty($relproduk->hargaCoret))
                                    <p class="author"><del>{{price($relproduk->hargaCoret)}}</del></p>
                                    @endif
                                    <span class="price">{{price($relproduk->hargaJual)}}</span>
                                    <a href="{{product_url($relproduk)}}" class="buy-btn">Buy Now</a>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <hr>
                </div>
                @endif

                {{ pluginComment(product_url($produk), $produk) }}
            </div>
        </div>
    </div>