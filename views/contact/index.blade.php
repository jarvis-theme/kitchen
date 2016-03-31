<div class="container">
    <div class="inner-column row">
        <div id="left_sidebar" class="col-xs-12 col-sm-4 col-lg-3">
            <div class="powerup">
                {{pluginSidePowerup()}}
            </div>
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
        </div>
        <div id="center_column" class="col-xs-12 col-sm-8 col-lg-9">
            <div class="breadcrumb"><p>Hubungi Kami</p></div>
            <div class="maps" id="maplocation">
                @if($kontak->lat!='0' || $kontak->lng!='0')
                <iframe class="detailmaps" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{ $kontak->lat.','.$kontak->lng }}&amp;aq=&amp;sll={{ $kontak->lat.','.$kontak->lng }}&amp;sspn={{ $kontak->lat.','.$kontak->lng }}&amp;ie=UTF8&amp;t=m&amp;z=14&amp;output=embed"></iframe><br />
                @else
                <iframe class="detailmaps" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{str_replace(' ','+',$kontak->alamat)}}&amp;aq=0&amp;oq={{str_replace(' ','+',$kontak->alamat)}}&amp;sspn={{ $kontak->lat.','.$kontak->lng }}&amp;ie=UTF8&amp;hq=&amp;hnear={{str_replace(' ','+',$kontak->alamat)}}&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br />
                @endif
            </div>
            <div class="contact-us" >
                <br>
                <div class="contact-desc">
                    @if(!empty($kontak->alamat))
                    <strong>Alamat Toko :</strong> {{$kontak->alamat}}<br>
                    @endif
                    @if(!empty($kontak->telepon))
                    <strong>Telepon :</strong> {{$kontak->telepon}}<br>
                    @endif
                    @if(!empty($kontak->hp))
                    <strong>SMS :</strong> {{$kontak->hp}}<br>
                    @endif
                    @if(!empty($kontak->bb))
                    <strong>BBM :</strong> {{$kontak->bb}}<br>
                    @endif
                    @if(!empty($kontak->email))
                    <strong>Email :</strong> <a href="{{$kontak->email}}">{{$kontak->email}}</a>
                    @endif
                    <div class="clr"></div>
                </div>
                <br><br>
                <form class="contact-form" action="{{url('kontak')}}" method="post">
                    <p class="form-group">
                        <input class="form-control" placeholder="Nama" name="namaKontak" type="text" required>
                    </p>
                    <p class="form-group">
                        <input class="form-control" placeholder="Email" name="emailKontak" type="text" required>
                    </p>
                    <p class="form-group">
                        <textarea class="form-control" placeholder="Pesan" name="messageKontak" required></textarea>
                    </p>
                    <button class="btn btn-warning">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</div>