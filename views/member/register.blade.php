<div class="container">
	<div class="breadcrumb"><p>Register</p></div>
	<div class="inner-column row">
        <div class="col-xs-12 col-sm-8 col-lg-7 col-lg-offset-2">
            {{Form::open(array('url'=>'member','method'=>'post','class'=>'form-horizontal'))}}
				<div class="form-group">
					<label for="inputName" class="col-lg-4">Nama</label>
					<div class="col-lg-8">
						<input type="text" class="form-control" id="inputName" name="nama" value="{{Input::old('nama')}}" required>
					</div>
				</div>                           
				<div class="form-group">
					<label for="inputEmail1" class="col-lg-4">Email</label>
					<div class="col-lg-8">
						<input type="email" class="form-control" id="inputEmail1" name="email" value="{{Input::old('email')}}" required>
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword1" class="col-lg-4">Password</label>
					<div class="col-lg-8">
						<input type="password" class="form-control" id="inputPassword1" name="password" required>
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword2" class="col-lg-4">Konfirmasi Password</label>
					<div class="col-lg-8">
						<input type="password" class="form-control" id="inputPassword2" name="password_confirmation" required>
					</div>
				</div>
				<div class="form-group">
					<label for="dropdown" class="col-lg-4">Negara</label>
					<div class="col-lg-8">
						{{Form::select('negara',array('' => '-- Pilih Negara --') + $negara, Input::old('negara'),array('required', "id"=>"negara", "data-rel"=>"chosen", "class"=>"form-control"))}}
					</div>
				</div>
				<div class="form-group">
					<label for="dropdown" class="col-lg-4">Provinsi</label>
					<div class="col-lg-8">
						{{Form::select('provinsi',array('' => '-- Pilih Provinsi --') + $provinsi, Input::old("provinsi"),array('required', "id"=>"provinsi", "data-rel"=>"chosen", "class"=>"form-control"))}}
					</div>
				</div>
				<div class="form-group">
					<label for="dropdown" class="col-lg-4">Kota</label>
					<div class="col-lg-8">
						{{Form::select('kota',array('' => '-- Pilih Kota --') + $kota, Input::old("kota"), array('required', "id"=>"kota", "data-rel"=>"chosen", "class"=>"form-control"))}}
					</div>
				</div>
				<div class="form-group">
					<label for="inputComment" class="col-lg-4">Alamat</label>
					<div class="col-lg-8">
						<textarea id="inputComment" class="form-control" rows="3" name="alamat" required>{{Input::old("alamat")}}</textarea>
					</div>
				</div> 
				<div class="form-group">
					<label for="inputpos1" class="col-lg-4">Kode Pos</label>
					<div class="col-lg-8">
						<input type="text" class="form-control" id="inputpos1" name="kodepos" value="{{Input::old('kodepos')}}" >
					</div>
				</div>                      
				<div class="form-group">
					<label for="inputpho1" class="col-lg-4">Telepon</label>
					<div class="col-lg-8">
						<input type="text" class="form-control" id="inputpho1" name="telp" value="{{Input::old('telp')}}" required>
					</div>
				</div>
				<div class="form-group">
					<label for="inputpho1" class="col-lg-4">Kode Keamanan</label>
					<div class="col-lg-8 form-inline">
						{{ HTML::image(Captcha::img(), 'Captcha image') }}
						{{Form::text('captcha','',array('class'=>'form-control', 'placeholder'=>'Masukkan kode'))}}
					</div>
				</div>
				<div class="form-group">
					<div class="col-lg-offset-4 col-lg-8">
						<div class="checkbox">
							<label>
								<small>
									<input name="readme" value="1" type="checkbox" checked required> Saya telah membaca dan menyetujui <a href="{{URL::to('service')}}" target="_blank" >Syarat dan Ketentuan</a> di {{Theme::place('title')}}
								</small>
							</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-lg-offset-4 col-lg-10">
						<button type="submit" class="btn btn-success">Register</button>
						<button type="reset" class="btn btn-default">Reset</button>
					</div>
				</div>
			{{Form::close()}}
	    </div>
    </div>
</div>