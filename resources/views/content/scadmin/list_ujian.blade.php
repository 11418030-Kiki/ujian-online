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
                    <th><center>List Random</center></th>
                    <th><center>Jumlah Pilihan</center></th>
      
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
						<?php 
						echo "0211";
						?>
					</td>
					<td style="text-align:center">
						<?php 
						echo "Rajin Belajar";
						?>
					</td>
					<td style="text-align:center">
						<?php 
						echo "12-12-2015 / 08:00:00";
						?>
					</td>
					<td style="text-align:center">
						<?php 
						echo "12-12-2015 / 15:30:00";
						?>
					</td>
					<td style="text-align:center">
						<?php 
						echo "List Random";
						?>
					</td>	
					<td style="text-align:center">
						<?php 
						echo "5";
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