@extends('layouts.scadmin.base')

@section('content')
<div id="main-content-wrapper">
	<div class="container-fluid">
		<div class="col-lg-12">
			<div class="content clearfix">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3>Tambah Soal Ujian</h3>
					</div>
					<div class="panel-body">
						<form role="form" class="form-horizontal" id="form" name="insertdatasiswa" method="post" action="http://localhost:8000/form_insert_jurusan/add" enctype="multipart/form-data">
							<div class="form-group">
								<label class="col-lg-2 col-md-2 col-sm-2" for="jeniskelamin">Mata Pelajaran Ujian</label>
								<div class="col-lg-10 col-md-10 col-sm-10">
									<div class="input-group">
									    <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;</span>
									    <select class="form-control" name="mapel_ujian">
									    	<option></option>
									    	<option>Matematika</option>
									    	<option>Bahasa Indonesia</option>
									    	<option>Bahasa Inggris</option>
										</select>		    	
									</div>
								</div>	         
							</div>
							<div class="form-group">			
							<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<label class="col-lg-2 col-md-2 col-sm-2" for="jurusan">Deskripsi Soal</label>
								<div class="col-lg-10 col-md-10 col-sm-10">
									<div class="input-group">
										<span class="input-group-addon">&nbsp;&nbsp;&nbsp;</span>
								    	<input type="text" class="form-control" name="kd_jurusan" placeholder="Tuliskan soal cerita" required="required">
									</div>        
								</div>
							</div>	
							<div class="form-group">
								<label class="col-lg-2 col-md-2 col-sm-2" for="name">Jawaban A</label>
								<div class="col-lg-10 col-md-10 col-sm-10">
									<div class="input-group">
										<span class="input-group-addon">&nbsp;&nbsp;&nbsp;</span>
								    	<input type="text" class="form-control" name="nama_jurusan" placeholder="Tulis untuk jawaban A" required="required">
									</div>           
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 col-md-2 col-sm-2" for="name">Jawaban B</label>
								<div class="col-lg-10 col-md-10 col-sm-10">
									<div class="input-group">
										<span class="input-group-addon">&nbsp;&nbsp;&nbsp;</span>
								    	<input type="text" class="form-control" name="nama_jurusan" placeholder="Tulis untuk jawaban B" required="required">
									</div>           
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 col-md-2 col-sm-2" for="name">Jawaban C</label>
								<div class="col-lg-10 col-md-10 col-sm-10">
									<div class="input-group">
										<span class="input-group-addon">&nbsp;&nbsp;&nbsp;</span>
								    	<input type="text" class="form-control" name="nama_jurusan" placeholder="Tulis untuk jawaban C" required="required">
									</div>           
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 col-md-2 col-sm-2" for="name">Jawaban D</label>
								<div class="col-lg-10 col-md-10 col-sm-10">
									<div class="input-group">
										<span class="input-group-addon">&nbsp;&nbsp;&nbsp;</span>
								    	<input type="text" class="form-control" name="nama_jurusan" placeholder="Tulis untuk jawaban D" required="required">
									</div>           
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 col-md-2 col-sm-2" for="name">Jawaban E</label>
								<div class="col-lg-10 col-md-10 col-sm-10">
									<div class="input-group">
										<span class="input-group-addon">&nbsp;&nbsp;&nbsp;</span>
								    	<input type="text" class="form-control" name="nama_jurusan" placeholder="Tulis untuk jawaban E" required="required">
									</div>           
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 col-md-2 col-sm-2" for="name">Kunci Jawaban</label>
								<div class="col-lg-10 col-md-10 col-sm-10">
									<div class="input-group">
										<span class="input-group-addon">&nbsp;&nbsp;&nbsp;</span>
								    	<input type="text" class="form-control" name="nama_jurusan" placeholder="Tuliskan kunci jawaban soal" required="required">
									</div>           
								</div>
							</div>
						</form>
						<div class="col-md-10">
						</div>
						<div class="btn-menu col-md-2">
							<button type="submit" class="btn btn-primary">Save</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@stop	
