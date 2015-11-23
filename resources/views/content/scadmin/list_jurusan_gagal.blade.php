{{ Form::model($jurusans) }}

	<div>
			{{ Form::label('KD_JURUSAN', 'Kode Jurusan: ') }}
			{{ Form::text('KD_JURUSAN') }}		
	</div>
	
	<div>
			{{ Form::label('NAMA_JURUSAN', 'Nama Jurusan: ') }}
			{{ Form::text('NAMA_JURUSAN') }}		
	</div>

	<div>
			{{ Form::label('DESKRIPSI', 'Deskripsi: ') }}
			{{ Form::text('DESKRIPSI') }}		
	</div>

{{ Form::close() }}


