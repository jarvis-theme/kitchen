<div class="page-title">
    <div class="container">
        <h2 class="title"><i class="fa fa-shopping-cart"></i> Detail Order</h2>
        <hr />
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th><span>Kode Order</span></th>
                        <th><span>Tanggal Order</span></th>
                        <th><span>Detail Order</span></th>
                        <th><span>Jumlah</span></th>
                        <th><span>No. Resi</span></th>
                        <th><span>Status</span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ prefixOrder().$order->kodeOrder }}</td>
                        <td>{{ waktu($order->tanggalOrder) }}</td>
                        <td>
                            <ul>
                                @foreach ($order->detailorder as $detail)
                                <li class="detailorder">{{$detail->produk->nama}} {{$detail->opsiSkuId !=0 ? '('.$detail->opsisku['opsi1'].($detail->opsisku['opsi2'] != '' ? ' / '.$detail->opsisku['opsi2']:'').($detail->opsisku['opsi3'] !='' ? ' / '.$detail->opsisku['opsi3']:'').')':''}} - {{$detail->qty}}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td class="quantity">{{ price($order->total) }}</td>
                        <td class="sub-price">{{ $order->noResi }}</td>
                        <td class="total-price">
                            @if($order->status==0)
                                <span class="label label-warning">Pending</span>
                            @elseif($order->status==1)
                                <span class="label label-danger">Konfirmasi diterima</span>
                            @elseif($order->status==2)
                                <span class="label label-success">Pembayaran diterima</span>
                            @elseif($order->status==3)
                                <span class="label label-info">Terkirim</span>
                            @elseif($order->status==4)
                                <span class="label label-default">Batal</span>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-md-5">
            @if($order->jenisPembayaran == 1 && $order->status == 0)
                <h2><strong>Konfirmasi Pembayaran</strong></h2>
                {{Form::open(array('url'=> 'konfirmasiorder/'.$order->id, 'method'=>'put'))}}
                    <div class="form-group">
                        <label  class="control-label"> Nama Pengirim:</label>
                        <input type="text" class="form-control" id="search" placeholder="Nama Pengirim" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label  class="control-label"> No Rekening:</label>
                        <input type="text" class="form-control" id="search" placeholder="No Rekening" name="noRekPengirim" required>
                    </div>
                    <div class="form-group">
                        <label  class="control-label"> Rekening Tujuan:</label>
                        <select name="bank" class="form-control">
                            <option value="">-- Pilih Bank Tujuan --</option>
                            @foreach (list_banks() as $bank)
                            <option value="{{$bank->id}}">{{$bank->bankdefault->nama}} - {{$bank->noRekening}} - A/n {{$bank->atasNama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label  class="control-label"> Jumlah:</label>
                        <input type="text" class="form-control" id="search" placeholder="Jumlah Transfer" name="jumlah" value="{{$order->status==0 ? $order->total : ''}}" required>
                    </div>
                    <button type="submit" class="btn btn-green">Konfirmasi Order</button>
                {{Form::close()}}
            @endif
            </div>
        </div>

        @if($paymentinfo!=null)
        <h3><center><strong>Paypal Payment Details</strong></center></h3><br>
        <hr>
        <div class="table-responsive">
            <table class='table table-bordered'>
                <tr>
                    <td>Payment Status</td><td>:</td><td>{{$paymentinfo['payment_status']}}</td>
                </tr>
                <tr>
                    <td>Payment Date</td><td>:</td><td>{{$paymentinfo['payment_date']}}</td>
                </tr>
                <tr>
                    <td>Address Name</td><td>:</td><td>{{$paymentinfo['address_name']}}</td>
                </tr>
                <tr>
                    <td>Payer Email</td><td>:</td><td>{{$paymentinfo['payer_email']}}</td>
                </tr>
                <tr>
                    <td>Item Name</td><td>:</td><td>{{$paymentinfo['item_name1']}}</td>
                </tr>
                <tr>
                    <td>Receiver Email</td><td>:</td><td>{{$paymentinfo['receiver_email']}}</td>
                </tr>
                <tr>
                    <td>Total Payment</td><td>:</td><td>{{$paymentinfo['payment_gross']}} {{$paymentinfo['mc_currency']}}</td>
                </tr>
            </table>
        </div>
        <p>Thanks you for your order.</p>
        <br>
        @endif 
      
        @if($order->jenisPembayaran==2)
            <br>
            <div class="well">
                <center>
                    <h3><strong>Konfirmasi Pembayaran Via Paypal</strong></h3>
                    <p>Silakan melakukan pembayaran dengan paypal Anda secara online via paypal payment gateway. Transaksi ini berlaku jika pembayaran dilakukan sebelum {{$expired}}. Klik tombol "Bayar Dengan Paypal" di bawah untuk melanjutkan proses pembayaran.</p>
                    {{$paypalbutton}}
                    <br>
                </center>
            </div>
        @elseif($order->jenisPembayaran==5 && $order->status == 0)
            <hr>
            <div class="well">
                <center>
                    <h3><strong>Konfirmasi Pembayaran DOKU MyShortCart</strong></h3>
                    <p>{{trans('content.step5.doku')}}</p><br>
                    <button class="btn btn-danger" onclick="location.href='{{ doku_button }}'">{{trans('content.step5.doku_btn')}}</button>
                </center>
            </div>
        @elseif($order->jenisPembayaran==6)
            <hr>
            <div class="well">
                @if($order->status == 0)
                    <center>
                        <h3><strong>Konfirmasi Pembayaran Via Bitcoin</strong></h3><br>
                        <p>Silahkan melakukan pembayaran dengan bitcoin Anda secara online via bitcoin payment gateway. Transaksi ini berlaku jika pembayaran dilakukan sebelum <b>{{$expired_bitcoin}}</b>. Klik tombol "Pay with Bitcoin" di bawah untuk melanjutkan proses pembayaran.</p>
                        {{$bitcoinbutton}}
                        <br>
                    </center>
                @else
                    <center>
                        <h3><strong>Konfirmasi Pembayaran Via Bitcoin</strong></h3><br>
                        <p><b>Batas waktu pembayaran bicoin anda telah habis.</b></p>
                    </center>
                @endif
            </div>
        @elseif($order->jenisPembayaran == 8 && $order->status == 0)
            <hr>
            <div class="well">
                <center>
                    <h3><strong>Konfirmasi Pembayaran Veritrans</strong></h3>
                    <p>{{trans('content.step5.veritrans')}}</p><br>
                    <button class="btn btn-warning" onclick="location.href='{{ $veritrans_payment_url }}'">{{trans('content.step5.veritrans_btn')}}</button>
                </center>
            </div>
        @endif
    </div>
</div>