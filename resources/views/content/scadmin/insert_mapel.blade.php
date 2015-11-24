@extends('layouts.scadmin.base')

@section('content')
<div id="main-content-wrapper">
	<div class="container-fluid">
		<div class="col-lg-12">
			<div class="content clearfix">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3>Tambah Mata Pelajaran</h3>
					</div>
					<div class="panel-body">
						<form role="form" class="form-horizontal" id="form" name="insert_mapel" method="post" action="#" enctype="multipart/form-data">
							<div class="form-group">
								<label class="col-lg-2 col-md-2 col-sm-2" for="jurusan">Kode Mata Pelajaran</label>
								<div class="col-lg-10 col-md-10 col-sm-10">
									<div class="input-group">
										<span class="input-group-addon">&nbsp;&nbsp;&nbsp;</span>
								    	<input type="text" class="form-control" name="kode" placeholder="Masukkan kode mata pelajaran" required="required">
									</div>        
								</div>
							</div>	
							<div class="form-group">
								<label class="col-lg-2 col-md-2 col-sm-2" for="name">Nama Mata Pelajaran</label>
								<div class="col-lg-10 col-md-10 col-sm-10">
									<div class="input-group">
										<span class="input-group-addon">&nbsp;&nbsp;&nbsp;</span>
								    	<input type="text" class="form-control" name="name" placeholder="Masukkan nama mata pelajaran" required="required">
									</div>           
								</div>
							</div>
						</form>
						<div class="btn-menu col-md-2" style="float:right;">
							<a href="#" id="btn-save-jurusan" class="btn btn-block btn-primary" >Simpan</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@stop	
