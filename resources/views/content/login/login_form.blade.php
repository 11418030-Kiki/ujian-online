@extends('layouts.login.base')

@section('content')
                    <form name="loginForm" method="POST">
                        <div class="form">
                            <div class="form-group">
                                <input type="email" class="form-control" id="username" name="username" required placeholder="Email" />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password" name="password"  required placeholder="Password" />
                            </div>
                            <a href="/dashboard" class="btn btn-block btn-darkred" href="">MASUK</a>
                        </div>
                        <div class="col-md-6 login-text">
                            <a href="reset_password">
                                Lupa password?
                            </a>
                        </div>
                    </form>
@stop