@extends('layouts.scadmin.base')

@section('content') 
<div id="main-content-wrapper">
    <div class="container-fluid">
        <div class="col-lg-12">
            <div class="content clearfix">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Tambah Jurusan</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" class="form-horizontal" id="form" name="insert_jurusan" method="post" action="#" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-lg-2 col-md-2 col-sm-2" for="jurusan">Kode Ujian</label>
                                <div class="col-lg-10 col-md-10 col-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon">&nbsp;&nbsp;&nbsp;</span>
                                        <input type="text" class="form-control" name="kode" placeholder="Masukkan kode ujian" required="required">
                                    </div>        
                                </div>
                            </div>  
                            <div class="form-group">
                                <label class="col-lg-2 col-md-2 col-sm-2" for="name">ID Mata Pelajaran</label>
                                <div class="col-lg-10 col-md-10 col-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon">&nbsp;&nbsp;&nbsp;</span>
                                        <input type="text" class="form-control" name="pelajaran" placeholder="Masukkan ID mata pelajaran" required="required">
                                    </div>           
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 col-md-2 col-sm-2" for="name">Nama Ujian</label>
                                <div class="col-lg-10 col-md-10 col-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon">&nbsp;&nbsp;&nbsp;</span>
                                        <input type="text" class="form-control" name="pelajaran" placeholder="Masukkan nama ujian" required="required">
                                    </div>
                                </div>        
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 col-md-2 col-sm-2" for="name">Waktu Mulai Ujian</label>
                                <div class="col-lg-10 col-md-10 col-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon">&nbsp;&nbsp;&nbsp;</span>
                                        <input type="text" class="form-control" name="mulai" placeholder="Masukkan waktu mulai ujian" required="required">
                                    </div>
                                </div>        
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 col-md-2 col-sm-2" for="name">Waktu Mulai Ujian</label>
                                <div id="datetimepicker2" class="input-append">
                                    <input data-format="MM/dd/yyyy HH:mm:ss PP" type="text"></input>
                                    <span class="add-on">
                                        <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                                    </span>
                                </div>        
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 col-md-2 col-sm-2" for="name">Waktu Selesai Ujian</label>
                                <div class="col-lg-10 col-md-10 col-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon">&nbsp;&nbsp;&nbsp;</span>
                                        <input type="text" class="form-control" name="selesai" placeholder="Masukkan waktu selesai ujian" required="required">
                                    </div>
                                </div>        
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 col-md-2 col-sm-2" for="name">List Random</label>
                                <div class="col-lg-10 col-md-10 col-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon">&nbsp;&nbsp;&nbsp;</span>
                                        <input type="text" class="form-control" name="random" placeholder="Random" required="required">
                                    </div>
                                </div>        
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 col-md-2 col-sm-2" for="name">Jumlah Pilihan</label>
                                <div class="col-lg-10 col-md-10 col-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon">&nbsp;&nbsp;&nbsp;</span>
                                        <input type="text" class="form-control" name="pilihan" placeholder="Masukkan jumlah pilihan" required="required">
                                    </div>
                                </div>        
                            </div>
                        </form>
                        <div class="col-md-10">
                        </div>
                        <div class="btn-menu col-md-2">
                            <a href="#" id="btn-save-jurusan" class="btn btn-block btn-primary">Simpan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>                
@stop

@section('page_script')
<script type="text/javascript">
    $(function() {
        $('#datetimepicker2').datetimepicker({
            language: 'en',
            pick12HourFormat: true
        });
    });
</script>
@stop