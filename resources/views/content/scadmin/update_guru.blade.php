@extends('layouts.scadmin.base')

@section('content')
<div id="main-content-wrapper">
	<div class="container-fluid">
		<div class="col-lg-12">
			<div class="content clearfix">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3>Perbarui Data Guru</h3>
					</div>
					<div class="panel-body">
						
				<form role="form" class="form-horizontal" id="form" name="insertdataguru" method="post" action="#" enctype="multipart/form-data">

				<div class="form-group">
						<label class="col-lg-2 col-md-2 col-sm-2" for="nip">NIP</label>
						<div class="col-lg-10 col-md-10 col-sm-10">
							<div class="input-group">
								<span class="input-group-addon">&nbsp;&nbsp;&nbsp;</span>
								<input type="number" class="form-control" name="nip" required="required">
							</div>        
						</div>
				</div>	

				<div class="form-group">
					<label class="col-lg-2 col-md-2 col-sm-2" for="nuptk">NUPTK</label>
						<div class="col-lg-10 col-md-10 col-sm-10">
							<div class="input-group">
							    <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;</span>
							    <input type="number" class="form-control" name="nuptk"  required="required" >
							</div> 
						</div>	      
				</div>	

				<div class="form-group">
				<label class="col-lg-2 col-md-2 col-sm-2" for="nama">Nama</label>
						<div class="col-lg-10 col-md-10 col-sm-10">
							<div class="input-group">
							    <span class="input-group-addon" id="gambar1">&nbsp;&nbsp;&nbsp;&nbsp;</span>
							    <input type="text" class="form-control" name="name" required="required" >
							</div> 
						</div>	
						<!-- <span style="margin-left:240px;"></span>    -->       
				</div>

				<div class="form-group">
					<label class="col-lg-2 col-md-2 col-sm-2" for="ttl">TTL</label>
						<div class="col-lg-10 col-md-10 col-sm-10">
							<div class="input-group">
							    <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;</span>
							    <input type="text" class="form-control" id="code" name="ttl" required="required" >
							</div> 
						</div>	
						<!-- <span style="margin-left:240px;"></span>     -->      
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
						</div>	
						<!-- <span style="margin-left:240px;"></span>   -->         
				</div>

				<div class="form-group">
					<label class="col-lg-2 col-md-2 col-sm-2" for="alamat">Alamat</label>
						<div class="col-lg-10 col-md-10 col-sm-10">
							<div class="input-group">
							    <span class="input-group-addon" id="gambar1">&nbsp;&nbsp;&nbsp;&nbsp;</span>
							    	<textarea type="text" class="form-control"  name="alamat" required="required" ></textarea>
							</div> 
						<!-- <span style="margin-left:240px;"></span>  -->     
						</div>    
				</div>

				<div class="form-group">
					<label class="col-lg-2 col-md-2 col-sm-2" for="notelp">Nomor Telepon</label>
						<div class="col-lg-10 col-md-10 col-sm-10">
							<div class="input-group">
							    <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;</span>
							    <input type="number" class="form-control" name="no_telp" required="required" >
							</div> 
						<!-- <span style="margin-left:240px;"></span>    -->  
						</div>     
				</div>		

				<div class="form-group">
					<label class="col-lg-2 col-md-2 col-sm-2" for="username">Username</label>
						<div class="col-lg-10 col-md-10 col-sm-10">
							<div class="input-group">
							    <span class="input-group-addon" id="gambar1">&nbsp;&nbsp;&nbsp;&nbsp;</span>
							    <input type="text" class="form-control" name="username" required="required" >
							</div> 
						<!-- <span style="margin-left:240px;"></span>      -->    
						</div> 
				</div>	


				<div class="form-group">
					<label class="col-lg-2 col-md-2 col-sm-2" for="password">Password</label>
						<div class="col-lg-10 col-md-10 col-sm-10">
						<div class="input-group">
						    <span class="input-group-addon" id="gambar1">&nbsp;&nbsp;&nbsp;&nbsp;</span>
						    	<input type="password" class="form-control" name="password" required="required" >
						</div> 
					</div>
						<!-- <span style="margin-left:240px;"></span>    -->       
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
		<!-- 	<div class="form-group">
					<div id="image-preview">
						  <label for="image-upload" id="image-label">Choose File</label>
						  <input type="file" name="image" id="image-upload" />
					</div>	
			</div> -->
			</form>
			<div class="col-md-10">
			</div>
			<div class="btn-menu col-md-2">
				<a href="#" id="btn-save-guru" class="btn btn-block btn-primary">Perbarui</a>
			</div>

		</div>
		</div>	
</div>
@stop

@section('page_script')
<script type="text/javascript">
$(document).ready(function() {
  $.uploadPreview({
    input_field: "#image-upload",   // Default: .image-upload
    preview_box: "#image-preview",  // Default: .image-preview
    label_field: "#image-label",    // Default: .image-label
    label_default: "Choose File",   // Default: Choose File
    label_selected: "Change File",  // Default: Change File
    no_label: false                 // Default: false
  });
});
</script>
