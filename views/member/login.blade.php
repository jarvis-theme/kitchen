<div class="container">
    <div class="inner-column row">
        <div class="col-lg-6 col-lg-offset-3 col-xs-12">
            <h2 class="center">Log in</h2>
            <hr><br>
            <form class="form-horizontal" id="form" action="{{url('member/login')}}" method="post">
                <div class="form-group">
                    <label class="col-sm-2">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email" placeholder="Email" value="{{Input::old('email')}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <small>
                            <a href="{{url('member/forget-password')}}">Lupa Password?</a>
                        </small>
                    </div>
                </div>
                <div class="form-group">
                    <div class="pull-left col-sm-offset-2 col-sm-2">
                        <button type="submit" class="btn btn-warning">Log in</button>
                    </div>
                </div>
            </form>
            <br><hr>
            <small>Belum punya akun {{Theme::place('title')}}? <a href="{{url('member/create')}}">Daftar sekarang</a> untuk mendapatkan banyak keuntungan.</small>
        </div>
    </div>
</div>