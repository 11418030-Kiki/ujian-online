
@extends('layouts.scadmin.base')

@section('content')

<div id="main-content-wrapper">
	<div class="container-fluid">
		<div class="col-lg-12">
			<div class="content clearfix">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3>Data Jurusan</h3>
					</div>	
					<div class="panel-body">
              	   <table class="table table-bordered table-striped" style="border-radius:10px;">
                   <thead>
                   	<tr class="info">
                    <th><center>Kode Jurusan</center></th>
                    <th><center>Nama Jurusan</center></th>
                    <th><center>Deskripsi</center></th>
                    <th><center>Detail</center></th>
                    <th><center>Perbarui</center></th>
                    <th><center>Hapus</center></th>
      
                </tr>
                </thead>
                <tbody>
                @foreach($jurusans as $jurusan)
                	<tr>
					<td style="text-align:center">
						{{ $jurusan->KD_JURUSAN }}
					</td>
					<td style="text-align:center">
						{{ $jurusan->NAMA_JURUSAN }}
					</td>
					<td style="text-align:center">
						{{ $jurusan->DESKRIPSI }}
					</td>		
					<td style="text-align:center">
					<a href={{ URL::to('admin/siswa/show_all') }} class="btn btn-block btn-primary">Detail</a>
					</td>
						<td style="text-align:center">
					<a href='#' class="btn btn-block btn-primary">Perbarui</a>
					</td>
					<td style="text-align:center">
					<a href='#' class="btn btn-block btn-primary">Hapus</a>
					</td>
				</tr>
				@endforeach
                </tbody>
                	</table>
					</div>
					<div id = "paginator" style ="float:right;">
						{!! $jurusans->render() !!}
					</div>
				</div>
			</div>
		</div>	
	</div>	
</div>	
@stop


