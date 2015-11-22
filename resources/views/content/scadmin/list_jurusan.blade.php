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
                    <th><center>Detail</center></th>
                    <th><center>Perbarui</center></th>
                    <th><center>Hapus</center></th>
      
                </tr>
                </thead>
                <tbody>
                	<tr>
					<td style="text-align:center">
						<?php 
						echo "2318128" ;
						?>
					</td>
					<td style="text-align:center">
						<?php echo "Teknik Komputer Jaringan";
						?>
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

				<tr>
					<td style="text-align:center">
						<?php 
						echo "123456" ;
						?>
					</td>
					<td style="text-align:center">
						<?php echo "Tata Boga";
						?>
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

				<tr>
					<td style="text-align:center">
						<?php 
						echo "09085" ;
						?>
					</td>
					<td style="text-align:center">
						<?php echo "Kecantikan";
						?>
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
					</div>
				</div>
			</div>
		</div>	
	</div>	
</div>	

@stop						