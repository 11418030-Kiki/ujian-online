<!-- /. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li class="text-center">
                <img src="{{asset('assets/img/raymon.jpg')}}" class="user-image img-responsive"/>
            </li>   
            <li>
                <a class="active-menu"  href={{ URL::to('admin/dashboard') }}><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
            </li>
            <li>
                 <a href="#"><i class="fa fa-group fa-3x"></i> Siswa<span class="fa arrow"></span></a>
                 <ul class="nav nav-second-level">
                      <li>
                        <a href={{ URL::to('admin/siswa/insert') }}>Tambah Data Siswa</a>
                      </li>
                       <li>
                         <a href={{ URL::to('admin/siswa/show_all') }}>Data Siswa</a>
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
                         <a href="{{route('list_guru')}}">Data Guru</a>
                       </li>    
                </ul>
            </li>  
            <li>
                       <a href="#"><i class="fa fa-edit fa-3x"></i> Jurusan<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href={{ URL::to('admin/jurusan/form_insert') }}>Tambah Data Jurusan</a>
                            </li>
                            <li>
                                <a href={{ URL::to('admin/jurusan/show_all') }}>Data Jurusan</a>
                            </li>
                         
                        </ul>
            </li>  
            <li>
                       <a href="#"><i class="fa fa-book fa-3x"></i>Mata Pelajaran<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href={{ URL::to('admin/mapel/form_insert') }}>Tambah Mata Pelajaran</a>
                            </li>
                            <li>
                                <a href={{ URL::to('admin/mapel/show_all') }}>Data Mata Pelajaran</a>
                            </li>
                         
                        </ul>
           </li>             
        </ul>
    </div>
</nav>  
<!-- /. NAV SIDE  -->