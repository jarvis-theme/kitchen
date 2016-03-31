<div class="container">
    <div class="inner-column row">
        <div class="col-xs-12 col-lg-5 col-lg-offset-3">
            <div class="contact-us">
                <h2 class="title">Konfirmasi Pembayaran</h2>
                <hr>
                <p>Masukkan kode order untuk melakukan konfirmasi pembayaran</p>
                <br>
                {{Form::open(array('url'=>'konfirmasiorder','method'=>'post','class'=>'form-inline'))}}
                    <div class="input-group col-lg-12">
                        <input class="form-control" placeholder="Kode Order" type="text" name="kodeorder" required>
                        <span class="input-group-btn">
                            <button class="btn btn-info" type="submit">Cari Kode</button>
                        </span>
                    </div>
                {{Form::close()}}
                <br><hr>
                <small>Nikmati kemudahan dalam berbelanja dengan daftar menjadi member di toko kami. <a href="{{url('member/create')}}">Daftar sekarang</a></small>
            </div>
            <br>
        </div>
    </div>
</div>