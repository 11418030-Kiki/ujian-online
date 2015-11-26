@extends('layouts.scadmin.base')

@section('content')
<div id="main-content-wrapper">
    <div class="container-fluid">
        <div class="col-lg-12">
            <div class="content clearfix">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Form Shuffle Soal Ujian</h3>
                    </div>
                    <div class="panel-body">
                        
                <form role="form" class="form-horizontal" id="form" method="post" action="#" enctype="multipart/form-data">
            
                <div class="form-group">
                    <input name="_token" type="hidden" value="{{csrf_token()}}">
                    @for ($i = 1; $i <= 10; $i++)
   					 	<label class="col-lg-10 col-md-10 col-sm-10" for="#">
                        	<input type="checkbox" name="soal[]" value="#"/>&nbsp;&nbsp;{{$i}}
                    	</label>
					@endfor
                    <!--<label class="col-lg-10 col-md-10 col-sm-10" for="#">
                        <input type="checkbox" name="soal[]" value="2"/>&nbsp;&nbsp;2
                    </label>
                    <label class="col-lg-10 col-md-10 col-sm-10" for="#">
                        <input type="checkbox" name="soal[]" value="3"/>&nbsp;&nbsp;3
                    </label>
                    <label class="col-lg-10 col-md-10 col-sm-10" for="#">
                        <input type="checkbox" name="soal[]" value="4"/>&nbsp;&nbsp;4
                    </label>
                    <label class="col-lg-10 col-md-10 col-sm-10" for="#">
                        <input type="checkbox" name="soal[]" value="5"/>&nbsp;&nbsp;5
                    </label>
                    <label class="col-lg-10 col-md-10 col-sm-10" for="#">
                        <input type="checkbox" name="soal[]" value="6"/>&nbsp;&nbsp;6
                    </label>
                    <label class="col-lg-10 col-md-10 col-sm-10" for="#">
                        <input type="checkbox" name="soal[]" value="7"/>&nbsp;&nbsp;7
                    </label>
                    <label class="col-lg-10 col-md-10 col-sm-10" for="#">
                        <input type="checkbox" name="soal[]" value="8"/>&nbsp;&nbsp;8
                    </label>
                    <label class="col-lg-10 col-md-10 col-sm-10" for="#">
                        <input type="checkbox" name="soal[]" value="9"/>&nbsp;&nbsp;9
                    </label>
                    <label class="col-lg-10 col-md-10 col-sm-10" for="#">
                        <input type="checkbox" name="soal[]" value="10"/>&nbsp;&nbsp;10
                    </label>
                    <label class="col-lg-10 col-md-10 col-sm-10" for="#">
                        <input type="checkbox" name="soal[]" value="11"/>&nbsp;&nbsp;11
                    </label>
                    <label class="col-lg-10 col-md-10 col-sm-10" for="#">
                        <input type="checkbox" name="soal[]" value="12"/>&nbsp;&nbsp;12
                    </label>-->
                        <!-- <span style="margin-left:240px;"></span>    -->       
                </div>  

                <input type="submit" name="formSubmit" value="Submit" />
                
            </form>

           
            <div class="col-md-10">
            </div>
            
        </div>
    </div>
</div>  
</div>
@stop
