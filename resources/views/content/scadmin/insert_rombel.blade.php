@extends('layouts.scadmin.base')

@section('content')
                <div class="container">
                    <h2>Insert Rombel</h2>
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="idrombel">ID Rombel:</label>
                                    <div class="col-sm-10">
                                        <input type="idrombel" class="form-control" idromebel="id rombel">
                                    </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="NamaRombel">Nama Rombel:</label>
                                    <div class="col-sm-10">          
                                        <input type="NamaRombel" class="form-control" id="NamaRombel" placeholder="">
                                    </div>
                            <div class="form-group">        
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default">Submit</button>
                                </div>
                            </div>
                        </form>
                </div>     
@stop