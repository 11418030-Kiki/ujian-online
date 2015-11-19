<!-- /. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li class="text-center">
                <img src="assets/img/find_user.png" class="user-image img-responsive"/>
            </li>   
            <li>
                <a class="active-menu"  href="index.html"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
            </li>
            <li>
                 <a href="#"><i class="fa fa-group fa-3x"></i> Siswa<span class="fa arrow"></span></a>
                 <ul class="nav nav-second-level">
                      <li>
                        <a href="{{route('insert_siswa')}}">Tambah Data Siswa</a>
                      </li>
                       <li>
                         <a href="{{route('insert_siswa')}}">Data Siswa</a>
                      </li>
                         
                 </ul>
            </li>   
            <li>
                 <a href="#"><i class="fa fa-user fa-3x"></i>  Guru<span class="fa arrow"></span></a>
                 <ul class="nav nav-second-level">
                       <li>
                         <a href="{{route('insert_guru')}}">Tambah Data Guru</a>
                       </li>
                       <li>
                         <a href="{{route('insert_siswa')}}">Data Guru</a>
                       </li>    
                </ul>
            </li>  
            <li>
                       <a href="#"><i class="fa fa-edit fa-3x"></i> Jurusan<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('insert_jurusan')}}">Tambah Data Jurusan</a>
                            </li>
                            <li>
                                <a href="{{route('insert_siswa')}}">Data Jurusan</a>
                            </li>
                         
                        </ul>
            </li>  
            <li>
                       <a href="#"><i class="fa fa-book fa-3x"></i>Mata Pelajaran<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('insert_mapel')}}">Tambah Mata Pelajaran</a>
                            </li>
                            <li>
                                <a href="{{route('insert_siswa')}}">Data Mata Pelajaran</a>
                            </li>
                         
                        </ul>
           </li>    
            <li>
                <a href="chart"><i class="fa fa-bar-chart-o fa-3x"></i> Morris Charts</a>
            </li>   
            <li>
                <a href="table.html"><i class="fa fa-table fa-3x"></i> Table Examples</a>
            </li>
            <li>
                <a href="form.html"><i class="fa fa-edit fa-3x"></i> Forms </a>
            </li>               
            <li>
                <a href="login.html"><i class="fa fa-bolt fa-3x"></i> Login</a>
            </li>   
            <li>
                <a href="registeration.html"><i class="fa fa-laptop fa-3x"></i> Registeration</a>
            </li>                              
            <li>
                <a href="#"><i class="fa fa-sitemap fa-3x"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Second Level Link</a>
                    </li>
                    <li>
                        <a href="#">Second Level Link</a>
                    </li>
                    <li>
                        <a href="#">Second Level Link<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="#">Third Level Link</a>
                            </li>
                            <li>
                                <a href="#">Third Level Link</a>
                            </li>
                            <li>
                                <a href="#">Third Level Link</a>
                            </li>
                        </ul>   
                    </li>
                </ul>
            </li>  
            <li>
                <a href="blank.html"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
            </li>   
        </ul>
    </div>
</nav>  
<!-- /. NAV SIDE  -->