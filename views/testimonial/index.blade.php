<br>
<section id="main-content">
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
                    <div class="btn-more"><a href="{{url('produk')}}">Lihat Semua</a></div>
                </div>
                @endif
                <div id="latest-news" class="block">
                    <div class="title"><h2>Artikel Terbaru</h2></div>
                    <ul class="block-content">
                       @foreach(list_blog(3) as $value)
                        <li>
                            <h5 class="title-news">{{$value->judul}}</h5>
                            <p>{{short_description($value->isi,55)}} <a class="read-more" href="{{blog_url($value)}}">Selengkapnya</a></p>
                            <span class="date-post">{{date("d M Y", strtotime($value->created_at))}}</span>
                        </li> 
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col-xs-12 col-sm-8 col-lg-9">
                <div class="breadcrumb"><p>Testimonial</p></div>
                @foreach (list_testimonial() as $items)  
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">{{$items->nama}}</h4>
                    </div>
                    <div class="panel-body">"{{$items->isi}}"</div>
                </div>
                @endforeach
                <div class="row">
                    <div class="col-md-12">{{list_testimonial()->links()}}</div>
                </div>
                <hr>
                <div class="respond">
                    <h3 class="titletesti">Kirim Testimonial</h3>
                    <form method="post" action="{{url('testimoni')}}" role="form">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" name="nama" id="name" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Testimonial Anda</label>
                            <textarea name="testimonial" class="form-control" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-info">Kirim</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>