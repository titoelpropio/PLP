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
<div class="col-lg-4 col-sm-4 col-md-4 col-xs-4" >
		{!!Form::model($gestion,['route'=>['gestion.update',$gestion],'method'=>'PUT'])!!}
			@include('modulocontable.gestion.forms.gesedit')
			{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}
</div>
           </div>
        </div>
      </div>
  </div><!-- /.row -->
</div><!-- /.box-body -->	
@endsection