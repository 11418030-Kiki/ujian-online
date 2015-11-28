@extends('layouts.scadmin.base')

@section('content')

<div id="main-content-wrapper">
	<div class="container-fluid">
		<div class="col-lg-12">
			<div class="content clearfix">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3>Data Siswa</h3>
					</div>	
					<div class="panel-body">
              	   <table class="table table-bordered table-striped" style="border-radius:10px;">
                   <thead>
                   	<tr class="info">
                    <th><center>Kode Mata Pelajaran</center></th>
                    <th><center>Nama Mata Pelajaran</center></th>
                    <th><center>Perbarui</center></th>
                    <th><center>Hapus</center></th>
      
                </tr>
                </thead>
                <tbody>
                @foreach($mapels as $mapel)
                	<tr>
					<td style="text-align:center">
						{{ $mapel->KD_MAPEL }}
					</td>
					<td style="text-align:center">
						{{ $mapel->NAMA_MAPEL }}
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
						{!! $mapels->render() !!}
					</div>
				</div>
				</div>
			</div>
		</div>	
	</div>	
</div>	

@stop						