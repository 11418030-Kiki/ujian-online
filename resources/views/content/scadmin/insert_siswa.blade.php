@extends('layouts.scadmin.base')

@section('content')
<div id="main-content-wrapper">
	<div class="container-fluid">
		<div class="col-lg-12">
			<div class="content clearfix">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3>Tambah Siswa</h3>
					</div>
					<div class="panel-body">
						
				<form role="form" class="form-horizontal" id="form" name="insertdatasiswa" method="post" action="#" enctype="multipart/form-data">
				
				<div class="form-group">
					<label class="col-lg-2 col-md-2 col-sm-2" for="nomor_induk">Nomor Induk</label>
						<div class="col-lg-10 col-md-10 col-sm-10">
							<div class="input-group">
							    <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;</span>
							    <input type="number" class="form-control" name="nomor_induk" placeholder="Masukkan Nomor Induk " required="required" >
							</div> 
						</div>	
						<!-- <span style="margin-left:240px;"></span>    -->       
				</div>	

				<div class="form-group">
					<label class="col-lg-2 col-md-2 col-sm-2" for="name">Nama</label>
						<div class="col-lg-10 col-md-10 col-sm-10">
							<div class="input-group">
							    <span class="input-group-addon" id="gambar1">&nbsp;&nbsp;&nbsp;&nbsp;</span>
							    <input type="text" class="form-control" name="name" placeholder="Masukkan Nama Lengkap" required="required" >
							</div> 
						<!-- <span style="margin-left:240px;"></span> --> 
						</div>         
				</div>

				<div class="form-group">
					<label class="col-lg-2 col-md-2 col-sm-2" for="jeniskelamin">Jenis Kelamin</label>
						<div class="col-lg-10 col-md-10 col-sm-10">
						<div class="input-group">
						    <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;</span>
						    
						    <select class="form-control" name="jeniskelamin">
							    <option>Laki-laki</option>
						    	<option>Perempuan</option>

							</select>	
						    	
						</div>
						<!-- <span style="margin-left:240px;"></span>      -->    
						</div>  
				</div>


				<div class="form-group">
						<label class="col-lg-2 col-md-2 col-sm-2" for="nisn">NISN</label>
						<div class="col-lg-10 col-md-10 col-sm-10">
							<div class="input-group">
							    <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;</span>
							    <input type="number" class="form-control" name="nisn" placeholder="Masukkan Nomor Induk Siswa Nasional" required="required" >
							</div> 
						<!-- <span style="margin-left:240px;"></span>   -->  
						</div>      
				</div>	

				<div class="form-group">
				<label class="col-lg-2 col-md-2 col-sm-2" for="ttl">TTL</label>
						<div class="col-lg-10 col-md-10 col-sm-10">
							<div class="input-group">
							    <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;</span>
							    <input type="text" class="form-control" id="code" name="ttl" placeholder="Masukkan Tempat,Tanggal Lahir | Contoh: (Batam,20 Juni 1992) " required="required" >
							</div> 
						<!-- <span style="margin-left:240px;"></span>  -->  
						</div>       
				</div>	

				
				<div class="form-group">
					<label class="col-lg-2 col-md-2 col-sm-2" for="alamat">Alamat</label>
						<div class="col-lg-10 col-md-10 col-sm-10">
							<div class="input-group">
							    	<span class="input-group-addon" id="gambar1">&nbsp;&nbsp;&nbsp;&nbsp;</span>
							    	<textarea type="text" class="form-control"  name="alamat" placeholder="Masukkan Alamat Lengkap" required="required" ></textarea>
							</div> 
						<!-- <span style="margin-left:240px;"></span>        -->   
					</div>
				</div>

				<div class="form-group">
					<label class="col-lg-2 col-md-2 col-sm-2" for="no_telp">Nomor Telepon</label>
						<div class="col-lg-10 col-md-10 col-sm-10">
							<div class="input-group">
							    <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;</span>
							    <input type="number" class="form-control" name="no_telp" placeholder="Masukkan Nomor Telepon" required="required" >
							</div> 
						<!-- <span style="margin-left:240px;"></span>     -->   
						</div>   
				</div>		

				<div class="form-group">
				<label class="col-lg-2 col-md-2 col-sm-2" for="username">Username</label>
						<div class="col-lg-10 col-md-10 col-sm-10">
							<div class="input-group">
							    <span class="input-group-addon" id="gambar1">&nbsp;&nbsp;&nbsp;&nbsp;</span>
							    <input type="text" class="form-control" name="username" placeholder="Masukkan Username" required="required" >
							</div> 
						<!-- <span style="margin-left:240px;"></span>   -->     
						</div>   
				</div>	


				<div class="form-group">
				<label class="col-lg-2 col-md-2 col-sm-2" for="password">Password</label>
						<div class="col-lg-10 col-md-10 col-sm-10">
							<div class="input-group">
							    <span class="input-group-addon" id="gambar1">&nbsp;&nbsp;&nbsp;&nbsp;</span>
							    <input type="password" class="form-control" name="password" placeholder="Masukkan Password" required="required" >
							</div>
					<!-- 	<span style="margin-left:240px;"></span>    -->  
					</div>     
				</div>

				<div class="form-group">
					<div id="image-preview">
						<label class="col-lg-2 col-md-2 col-sm-2" for="photo">Photo</label>
						<div class="col-lg-10 col-md-10 col-sm-10">
							<div class="input-group">
							<input type="file" name='photo' id='photo' >
    						</div>  
    					</div>	 
					</div>
				
				</div>

			</form>
			<div class="col-md-10">
			</div>
			<div class="btn-menu col-md-2">
				<a href="#" id="btn-save-siswa" class="btn btn-block btn-primary">Simpan</a>
			</div>
			
		</div>
	</div>
</div>	
</div>
@stop
