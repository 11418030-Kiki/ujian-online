@extends('layouts.login.base')

@section('content')
                    <form name="loginForm" method="POST" action="/auth/login">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form">
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password" name="password"  required placeholder="Password" />
                            </div>
                            <button class="btn btn-block btn-darkred" type="submit">Login</button>

                        </div>
                        <div class="col-md-6 login-text">
                            <a href="reset_password">
                                Lupa password?
                            </a>
                        </div>
                    </form>
@stop