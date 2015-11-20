@extends('layouts.scadmin.base')

@section('content')
<link href="{{asset('assets/css/form-style.css')}}" rel="stylesheet"/>
<div class="container">
	<div class="panel panel-default">
				<div class="panel-heading">
					<h3 style="margin-left:0px;margin-top:-6px;">Insert Data Guru</h3>
				</div>
			
				<div class="panel-body">
						
				<form role="form" class="form-horizontal" id="form" name="insertdataguru" method="post" action="#" enctype="multipart/form-data">

				<div class="form-group">
					<label class="col-sm-2"  for="nip">NIP</label>
						<div class="input-group">
						    <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;</span>
						    	<input type="text" class="form-control" name="nip" placeholder="Masukkan NIP" required="required" >
						</div> 
						<span style="margin-left:240px;"></span>          
				</div>	

				<div class="form-group">
					<label class="col-sm-2"  for="nuptk">NUPTK</label>
						<div class="input-group">
						    <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;</span>
						    	<input type="text" class="form-control" name="nuptk" placeholder="Masukkan NUPTK" required="required" >
						</div> 
						<span style="margin-left:240px;"></span>          
				</div>	

				<div class="form-group">
					<label class="col-sm-2"  for="name">Nama</label>
						<div class="input-group">
						    <span class="input-group-addon" id="gambar1">&nbsp;&nbsp;&nbsp;&nbsp;</span>
						    	<input type="text" class="form-control" name="name" placeholder="Masukkan Nama Lengkap" required="required" >
						</div> 
						<span style="margin-left:240px;"></span>          
				</div>

				<div class="form-group">
					<label class="col-sm-2"  for="ttl">TTL</label>
						<div class="input-group">
						    <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;</span>
						    	<input type="text" class="form-control" id="code" name="ttl" placeholder="Masukkan Tempat,Tanggal Lahir | Contoh: (Batam,20 Juni 1992) " required="required" >
						</div> 
						<span style="margin-left:240px;"></span>          
				</div>	

				<div class="form-group">
					<label class="col-sm-2"  for="jeniskelamin">Jenis Kelamin</label>
						<div class="input-group">
						    <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;</span>
						    
						    <select class="form-control" name="jeniskelamin">
						    	<option></option>
						    	<option>PRIA</option>
						    	<option>WANITA</option>

							</select>	
						    	
						</div>
						<span style="margin-left:240px;"></span>           
				</div>

				<div class="form-group">
					<label class="col-sm-2"  for="alamat">Alamat</label>
						<div class="input-group">
						    <span class="input-group-addon" id="gambar1">&nbsp;&nbsp;&nbsp;&nbsp;</span>
						    	<textarea type="text" class="form-control"  name="alamat" placeholder="Masukkan Alamat Lengkap" required="required" ></textarea>
						</div> 
						<span style="margin-left:240px;"></span>          
				</div>

				<div class="form-group">
					<label class="col-sm-2"  for="no_telp">No.Telp</label>
						<div class="input-group">
						    <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;</span>
						    	<input type="number" class="form-control" name="no_telp" placeholder="Masukkan Nomor Telepon" required="required" >
						</div> 
						<span style="margin-left:240px;"></span>          
				</div>		

				<div class="form-group">
					<label class="col-sm-2"  for="username">Username</label>
						<div class="input-group">
						    <span class="input-group-addon" id="gambar1">&nbsp;&nbsp;&nbsp;&nbsp;</span>
						    	<input type="text" class="form-control" name="username" placeholder="Masukkan Username" required="required" >
						</div> 
						<span style="margin-left:240px;"></span>          
				</div>	


				<div class="form-group">
					<label class="col-sm-2"  for="password">Password</label>
						<div class="input-group">
						    <span class="input-group-addon" id="gambar1">&nbsp;&nbsp;&nbsp;&nbsp;</span>
						    	<input type="password" class="form-control" name="password" placeholder="Masukkan Password" required="required" >
						</div> 
						<span style="margin-left:240px;"></span>          
				</div>

				<div class="form-group">
					<label class="col-sm-2"  for="photo">Photo</label>
						<input type="file" name='photo' id='photo' >
    					   
				</div>
				
					<button type="submit" div class="btn btn-primary pull-right" name="submit">Save</button>
			
				</div>
		</div>
		</div>	
</div>
@stop
