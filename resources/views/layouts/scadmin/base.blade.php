<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>School Admin</title>
    
    <!-- BOOTSTRAP STYLES-->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet" />
    <!-- MORRIS CHART STYLES-->
    <link href="{{asset('assets/css/morris-0.4.3.min.css')}}" rel="stylesheet" />
    <!-- MY STYLES-->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />

</head>

<body>

    <div id="wrapper">
        <header>
            @include('layouts.scadmin.header')
        </header>   
        <div class="sidebar">
            @include('layouts.scadmin.sidebar')
        </div>
        <div id="page-wrapper">
            @yield('content')
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /#wrapper -->

    <!-- JS -->

    <script src="{{asset('assets/js/libraries/jquery-1.11.3.min.js')}}"></script> <!-- jQuery -->   
    <script src="{{asset('assets/js/libraries/boostrap.min.js')}}"></script> <!-- Boostrap JS -->
    <script src="{{asset('assets/js/plugins/jquery/jquery.metisMenu.js')}}"></script> <!-- MetisMenu JS -->
    <script src="{{asset('assets/js/plugins/jquery.uploadPreview.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/bootstrap/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script> <!-- base JS -->
    @yield('page_script')
</body>

</html>
