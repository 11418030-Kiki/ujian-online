<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ujian Online</title>
	<!-- BOOTSTRAP STYLES-->
    <link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}" />
     <!-- FONTAWESOME STYLES-->
    <link rel="stylesheet" href="{{asset('/css/font-awesome.css')}}" />
     <!-- MORRIS CHART STYLES-->
    <link rel="stylesheet" href="{{asset('/js/morris/morris-0.4.3.min.css')}}"  />
        <!-- CUSTOM STYLES-->
    <link rel="stylesheet" href="{{asset('/css/custom.css')}}"  />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">Ujian Online</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="img/raymon.jpg" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a class="active-menu"  href="{{route('insert_guru')}}"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                     <li>
                        <a  href="ui"><i class="fa fa-desktop fa-3x"></i> UI Elements</a>
                    </li>
                    <li>
                        <a  href="tab-panel"><i class="fa fa-qrcode fa-3x"></i> Tabs & Panels</a>
                    </li>
						   <li  >
                        <a   href="chart"><i class="fa fa-bar-chart-o fa-3x"></i> Morris Charts</a>
                    </li>	
                      <li  >
                        <a  href="table"><i class="fa fa-table fa-3x"></i> Table Examples</a>
                    </li>
                    <li  >
                        <a  href="form"><i class="fa fa-edit fa-3x"></i> Forms </a>
                    </li>				
					
					                   
                    <li>
                        <a href="#"><i class="fa fa-user fa-3x"></i> Data Guru<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('insert_guru')}}">Insert Data Guru</a>
                            </li>
                            <li>
                                <a href="{{route('insert_siswa')}}">Daftar List Guru</a>
                            </li>
                         
                        </ul>
                      </li>  

                      <li>
                        <a href="#"><i class="fa fa-group fa-3x"></i> Data Siswa<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('insert_siswa')}}">Insert Data Siswa</a>
                            </li>
                            <li>
                                <a href="{{route('insert_siswa')}}">Daftar Data Siswa</a>
                            </li>
                         
                        </ul>
                      </li>   
                      <li>
                       <a href="#"><i class="fa fa-edit fa-3x"></i> Data Jurusan<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('insert_jurusan')}}">Insert Jurusan</a>
                            </li>
                            <li>
                                <a href="{{route('insert_siswa')}}">Daftar Jurusan</a>
                            </li>
                         
                        </ul>
                      </li>   
                      <li>
                       <a href="#"><i class="fa fa-book fa-3x"></i> Data Mata Pelajaran<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('insert_mapel')}}">Insert Mata Pelajaran</a>
                            </li>
                            <li>
                                <a href="{{route('insert_siswa')}}">Daftar Mata Pelajaran</a>
                            </li>
                         
                        </ul>
                      </li>   
                  
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
            @yield('content')
            </div>
            <!--  /. PAGE INNER  - -->
            </div>
         <!--  /. PAGE WRAPPER  -->
        </div> 
     <!-- /. WRAPPER 
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME
    <!-- JQUERY SCRIPTS -->
    <script src="/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="/js/morris/raphael-2.1.0.min.js"></script>
    <script src="/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="/js/custom.js"></script>
    
   
</body>
</html>
