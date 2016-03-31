<div class="container">
    <div class="inner-column row">
        <div class="col-xs-12 col-lg-6 col-lg-offset-3">
            <h2 class="center">Reset Password</h2>
            <hr>
            <p>Kamu bisa mengganti password lama kamu dengan password yang baru melalui halaman ini.</p>
            <br>
            <form class="form-horizontal" action="{{url('member/recovery/'.$id.'/'.$code)}}" method="post">
                <div class="form-group">
                    <label class="col-sm-4">Password</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4">Ulang password</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Ulang password" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4"></label>
                    <div class="col-sm-8">
                        <button type="submit" class="btn btn-danger">Simpan</button>
                    </div>
                </div>
            </form>
            <br><hr>
            <small>Belum punya akun {{Theme::place('title')}}? <a href="{{url('member/create')}}">Daftar sekarang</a> untuk mendapatkan banyak keuntungan.</small>
        </div>
    </div>
</div>