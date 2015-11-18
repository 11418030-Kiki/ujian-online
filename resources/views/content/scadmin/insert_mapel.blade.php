@extends('layouts.scadmin.base')

@section('content')
<div class="container">
	<div class="panel panel-default"  style="margin-left:80px;margin-right:80px;">
				<div class="panel-heading">
					<h3 style="margin-left:0px;margin-top:-6px;">Insert Data Mata Pelajaran</h3>
				</div>
			
				<div class="panel-body">
						
				<form role="form" class="form-horizontal" id="form" name="insertdatasiswa" method="post" action="#" enctype="multipart/form-data">
				
				<div class="form-group">
					<label class="col-sm-2"  for="nip">Kode Mapel</label>
						<div class="input-group">
						    <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;</span>
						    	<input type="text" class="form-control" name="nip" placeholder="Masukkan Kode Mata Pelajaran " required="required" >
						</div> 
						<span style="margin-left:240px;"></span>          
				</div>	

				<div class="form-group">
					<label class="col-sm-2"  for="name">Nama Mapel</label>
						<div class="input-group">
						    <span class="input-group-addon" id="gambar1">&nbsp;&nbsp;&nbsp;&nbsp;</span>
						    	<input type="text" class="form-control" name="name" placeholder="Masukkan Nama Mata Pelajaran" required="required" >
						</div> 
						<span style="margin-left:240px;"></span>          
				</div>

				
					<button type="submit" div class="btn btn-primary pull-right" name="submit">Save</button>
			
				</div>
			</div>
		</div>
@stop
