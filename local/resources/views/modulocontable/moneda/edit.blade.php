@extends('layouts.inicio')
	@section('contenido')
<div class="col-md-12">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">CONTABILIDAD </h3>
            <div class="box-tools pull-right">

            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">

@include('alerts.request')
<H1>MODIFICAR MONEDA</H1>
  <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6" >
  	{!!Form::model($moneda,['route'=>['tipomoneda.update',$moneda->id],'method'=>'PUT', 'style'=>'display:inline'])!!}
  	@include('modulocontable.moneda.forms.moneda')   
    <div align="right">
      {!!Form::submit('ACTUALIZAR',['class'=>'btn btn-primary','id'=>'btn_registrar','onclick'=>'btn_esconder()'])!!}   
      <a href="{!!URL::to('tipomoneda')!!}" class="btn btn-danger">CANCELAR</a>
    </div>
  	{!!Form::close()!!}
	</div>
</div>

           </div>
        </div>
      </div>
  </div><!-- /.row -->
</div><!-- /.box-body -->
@endsection