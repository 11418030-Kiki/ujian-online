@extends('layouts.scadmin.base')

@section('content')

<div id="main-content-wrapper">
	<div class="container-fluid">
		<div class="col-lg-12">
			<div class="content clearfix">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3>Data Rombel</h3>
					</div>	
					<div class="panel-body">
              	   <table class="table table-bordered table-striped" style="border-radius:10px;">
                   <thead>
                   	<tr class="info">
                    <th><center>ID Rombel</center></th>
                    <th><center>Nama Rombel</center></th>      
                </tr>
                </thead>
                <tbody>
                	<tr>
					<td style="text-align:center">
						<?php 
						echo "021" ;
						?>
					</td>
					<td style="text-align:center">
						<?php echo "Rajin Belajar";
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