@extends('layouts.scadmin.base')

@section('content')
                <div class="container">
                    <h2>Insert Rombel</h2>
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="kdUjian">Kode Ujian:</label>
                                    <div class="col-sm-10">
                                        <input type="kdUjian" class="form-control" id="kd ujian">
                                    </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="idMapel">ID Mata Pelajaran:</label>
                                    <div class="col-sm-10">          
                                        <input type="idMapel" class="form-control" id="idMapel" placeholder="">
                                    </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="NamaUjian">Nama Ujian:</label>
                                    <div class="col-sm-10">          
                                        <input type="NamaUjian" class="form-control" id="NamaUjian" placeholder="">
                                    </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="JumlahSoal">Jumlah Soal :</label>
                                    <div class="col-sm-10">          
                                        <input type="JumlahSoal" class="form-control" id="JumlahSoal" placeholder="">
                                    </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="Semester">Semester:</label>
                                    <div class="col-sm-10">          
                                        <input type="Semester" class="form-control" id="Semester" placeholder="">
                                    </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="Keterangan">Keterangan :</label>
                                    <div class="col-sm-10">          
                                        <input type="Keterangan" class="form-control" id="Keterangan" placeholder="">
                                    </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="StDateTime">Waktu dan Tanggal Mulai Ujian :</label>
                                    <div class="col-sm-10">          
                                        <input type="StDateTime" class="form-control" id="StDateTime" placeholder="">
                                    </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="EnDateTime">Waktu dan Tanggal Selesai Ujian :</label>
                                    <div class="col-sm-10">          
                                        <input type="EnDateTime" class="form-control" id="EnDateTime" placeholder="">
                                    </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="ListRandom">List Random :</label>
                                    <div class="col-sm-10">          
                                        <input type="List Random" class="form-control" id="ListRandom" placeholder="">
                                    </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="JumPilihan">Jumlah Pilihan:</label>
                                    <div class="col-sm-10">          
                                        <input type="JumPilihan" class="form-control" id="JumPilihan" placeholder="">
                                    </div>
                            </div>
                            <div class="form-group">        
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default">Submit</button>
                                </div>
                            </div>
                        </form>
                </div>     
@stop