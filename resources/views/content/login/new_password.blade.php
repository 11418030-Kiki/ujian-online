@extends('layouts.login.base')

@section('content')
					<p class="text-center">Silahkan masukan password baru anda</p>
					<form name="loginForm" action="" novalidate>
						<div class="form">
							<div class="form-group">
								<input type="password" class="form-control" name="password" required placeholder="Password" />
							</div>
							<div class="form-group">
								<input type="password" class="form-control" name="password" required placeholder="Ulangi Password" />
							</div>
							<button type="submit" class="btn btn-block btn-darkblue">LOGIN</button>
						</div>
					</form>
@stop