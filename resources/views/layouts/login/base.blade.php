<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>School Admin - Login</title>
    
    <!-- BOOTSTRAP STYLES -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <!-- FONTAWESOME STYLES -->
    <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet" />
    <!-- TOASTR STYLES -->
    <link href="{{asset('assets/css/toastr.min.css')}}" rel="stylesheet" />  
    <!-- MY STYLES -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
    <!-- LOGIN STYLES -->
    <link href="{{asset('assets/css/login.css')}}" rel="stylesheet" />  

</head>

<body>
    @include('layouts.login.header')

    @yield('content')

    @include('layouts.login.footer')
    
    <!-- JS -->
    @yield('page_script')

    <script src="{{asset('assets/js/libraries/jquery-1.11.3.min.js')}}"></script> <!-- jQuery -->
    <script src="{{asset('assets/js/libraries/bootstrap.min.js')}}"></script> <!-- Boostrap JS -->

    <!-- Plugins -->
    <script type="text/javascript" src="{{asset('assets/js/plugins/jquery/sha1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/jquery/jquery.storageapi.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/jquery/jquery.validate.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/plugins/jquery/toastr.min.js')}}"></script>

</body>

</html>
