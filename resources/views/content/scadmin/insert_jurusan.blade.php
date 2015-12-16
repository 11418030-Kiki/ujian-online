@extends('layouts.scadmin.base')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div id="main-content-wrapper">
	<div class="container-fluid">
		<div class="col-lg-12">
			<div class="content clearfix">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3>Tambah Jurusan</h3>
					</div>
					<div class="panel-body">
						<form role="form" class="form-horizontal" id="form" name="insertdatasiswa" method="POST" enctype="multipart/form-data"  action="/admin/jurusan/add">
							<input name="_token" type="hidden" value="{{ csrf_token() }}">
							<div class="form-group">			
								<label class="col-lg-2 col-md-2 col-sm-2" for="jurusan">Kode Jurusan</label>
								<div class="col-lg-10 col-md-10 col-sm-10">
									<div class="input-group">
										<span class="input-group-addon">&nbsp;&nbsp;&nbsp;</span>
								    	<input type="text" class="form-control" name="kd_jurusan" placeholder="Masukkan kode jurusan" required="required">
									</div>        
								</div>
							</div>	
							<div class="form-group">
								<label class="col-lg-2 col-md-2 col-sm-2" for="name">Nama Jurusan</label>
								<div class="col-lg-10 col-md-10 col-sm-10">
									<div class="input-group">
										<span class="input-group-addon">&nbsp;&nbsp;&nbsp;</span>
								    	<input type="text" class="form-control" name="nama_jurusan" placeholder="Masukkan nama jurusan" required="required">
									</div>           
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 col-md-2 col-sm-2" for="name">Deskripsi</label>
								<div class="col-lg-10 col-md-10 col-sm-10">
									<div class="input-group">
										<span class="input-group-addon">&nbsp;&nbsp;&nbsp;</span>
									    <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukkan nama jurusan" required="required">
									</div>
								</div>        
							</div>
							<div class="btn-menu col-md-2" style="float:right;">
							 <button class="btn btn-block btn-primary" type="submit">Submit</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@stop	
