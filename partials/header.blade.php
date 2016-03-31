            <header>
            	<div id="top-head">
                	<div class="container">
                        @if( is_login() )
                        <div class="auth-block fr">
                            <ul>
                                <li>{{HTML::link('logout', 'Logout')}}</li>
                            </ul>
                        </div>
                        <div class="user-info fr">
                            Welcome, <a href="{{url('member')}}" class="username"><strong>{{user()->nama}}</strong></a>
                        </div>

                        @else
                        <div class="auth-block fr">
                        	<ul>
                            	<li>{{HTML::link('member', 'Login')}}</li>
                                <li>{{HTML::link('member/create', 'Register')}}</li>
                            </ul>
                        </div>
                        @endif
                        <div class="clr"></div>
                    </div>
                </div>

                <div id="center-header">
                	<div class="container">
                    	<div id="logo" class="fl">
                            @if( logo_image_url() )
                            <a href="{{ url('home') }}"> {{HTML::image(logo_image_url(), 'Logo', array('width'=>'auto', 'class'=>'logos'))}}</a>
                            @else
                            <h2>
                                <strong>
                                    <a href="{{url('home')}}" class="logotext">{{ short_description(Theme::place('title'),50) }}</a>
                                </strong>
                            </h2>
                            @endif
                        </div>
                        <div id="shoppingcartplace">
                            {{shopping_cart()}}
                        </div>
                        <div id="search-top" class="fr">
                        	<form class="navbar-form" role="search" action="{{url('search')}}"  method="post">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Cari Produk" name="search" required>
                                    <div class="input-group-btn">
                                        <button class="btn btn-default" type="submit">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                        <div class="clr"></div>
                    </div>
                </div>
                <nav id="menu" class="navbar navbar-default" role="navigation">
                	<div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand mobile-only" href="#">MENU</a>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                @foreach(main_menu()->link as $key=>$link)
                                <li><a href="{{menu_url($link)}}">{{$link->nama}}</a></li>
                                @endforeach
                            </ul>   
                        </div>
                	</div>
                </nav>
                <div class="clr"></div>
			</header>