@extends('layouts.scadmin.base')

@section('content')

<div id="main-content-wrapper">
	<div class="container-fluid">
		<div class="col-lg-12">
			<div class="content clearfix">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3>Data Guru</h3>
					</div>	
					<div class="panel-body">
              	   <table class="table table-bordered table-striped" style="border-radius:10px;">
                   <thead>
                   	<tr class="info">
                    <th><center>NIP</center></th>
                    <th><center>Nama</center></th>
                    <th><center>Detail</center></th>
                    <th><center>Perbarui</center></th>
                    <th><center>Hapus</center></th>
      
                </tr>
                </thead>
                <tbody>
                	<tr>
					<td style="text-align:center">
						<?php 
						echo "3839308" ;
						?>
					</td>
					<td style="text-align:center">
						<?php echo "Priyanto";
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
						echo "38373628" ;
						?>
					</td>
					<td style="text-align:center">
						<?php echo "Transmissia";
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
						echo "276273928" ;
						?>
					</td>
					<td style="text-align:center">
						<?php echo "Yudi Widiyasana";
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