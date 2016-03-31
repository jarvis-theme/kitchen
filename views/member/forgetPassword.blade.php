<div class="container">
    <div class="inner-column row">
        <div class="col-lg-6 col-lg-offset-3">
            <form class="form-horizontal" action="{{url('member/forgetpassword')}}" method="post">
                <h2 class="center">Lupa Password</h2><hr>
                <p>Kamu dapat mereset password akun kamu dengan memasukkan alamat email yang kamu gunakan saat mendaftar.</p>
                <br>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Email" name="recoveryEmail" required>
                    <span class="input-group-btn">
                        <button class="btn btn-green" type="submit">Reset Password</button>
                    </span>
                </div><br><br>
            </form>
        </div>
    </div>
</div>