@extends('layouts.scadmin.base')

@section('content')

<div id="main-content-wrapper">
	<div class="container-fluid">
		<div class="col-lg-12">
			<div class="content clearfix">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3>Data Ujian</h3>
					</div>	
					<div class="panel-body">
              	   <table class="table table-bordered table-striped" style="border-radius:10px;">
                   <thead>
                   	<tr class="info">
                    <th><center>Kode Ujian</center></th>
                    <th><center>ID Mata Pelajaran</center></th>
                    <th><center>Nama Ujian</center></th>
                    <th><center>Waktu Mulai Ujian</center></th>
                    <th><center>Waktu Selesai Ujian</center></th>
                    <th><center>Jumlah Pilihan</center></th>
      
                </tr>
                </thead>
                 @foreach($ujians as $ujian)
                <tbody>
                	<tr>
					<td style="text-align:center">
						{{$ujian->KD_UJIAN }}
					</td>
					<td style="text-align:center">
						{{$ujian->ID_MAPEL}}
					</td>
					<td style="text-align:center">
						{{$ujian->NAMA_UJIAN}}
					</td>
					<td style="text-align:center">
						{{$ujian->START_DATETIME}}
					</td>
					<td style="text-align:center">
						{{$ujian->END_DATETIME}}
					</td>
					<td style="text-align:center">
						{{$ujian->JUMLAH_PILIHAN}}
					</td>
					<td style="text-align:center">
						<a href='{{route('random', ['id'=>$ujian->KD_UJIAN])}}' class="btn btn-block btn-primary">Shuffle</a>
					</td>	
					<td style="text-align:center">
						<a href='#' class="btn btn-block btn-primary">Detail</a>
					</td>
					<td style="text-align:center">
						<a href='#' class="btn btn-block btn-primary">Perbarui</a>
					</td>
					<td style="text-align:center">
						<a href='#' class="btn btn-block btn-primary">Hapus</a>
					</td>
					</tr>
                </tbody>
                @endforeach
					</div>
				</div>
			</div>
		</div>	
	</div>	
</div>	

@stop						