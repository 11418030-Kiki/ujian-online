@extends('layouts.login.base')

@section('content')
					<p class="text-center">Masukan alamat email anda, <br> dan kami akan membantu mengembalikan password anda</p>
					<div id="alert-reset-password" class="alert alert-danger" style="display: none;">
						
					</div>
					<form name="resetPassword" novalidate>
						<div class="form">
							<div class="form-group">
								<input type="email" id="email" class="form-control" name="email" required placeholder="Email" />
							</div>							
							<button type="submit" class="btn btn-block btn-darkblue">RESET PASSWORD</button>
						</div>
					</form>
@stop