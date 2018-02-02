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
		{!!Form::model($ufv,['route'=>['ufv.update',$ufv->id],'method'=>'PUT', 'style'=>'display:inline'])!!}
			
			<div class="form-group" >
					{!!Form::label('fecha','Fecha:')!!}
					{!!Form::date('fecha',null,['id'=>'fecha','class'=>'form-control ','placeholder'=>'Ingresa la fecha'])!!}
			</div>
			<div class="form-group" >
					{!!Form::label('valor','Valor:')!!}
					{!!Form::text('valor',null,['id'=>'valor','class'=>'form-control ','placeholder'=>'Ingresa el valor'])!!}
			</div>

			{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}

		{!!Form::open(['route'=>['ufv.destroy', $ufv->id], 'method' => 'DELETE', 'style'=>'display:inline'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
		{!!Form::close()!!}
</div>
           </div>
        </div>
      </div>
  </div><!-- /.row -->
</div><!-- /.box-body -->
	@endsection