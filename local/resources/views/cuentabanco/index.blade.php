@extends('layouts.inicio')
@section('contenido')
<div class="col-md-12">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">SISTEMA INMOBILIARIO</h3>
            <div class="box-tools pull-right">

            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">

@include('alerts.errors')
@include('alerts.success')
@include('cuentabanco.modal')
    
<div class="row">	
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <font size="6">CUENTAS</font>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">
            <div class="pull-right">
              <button class='btn btn-success' data-toggle='modal' data-target='#myModal'><i class="fa fa-plus-circle" aria-hidden="true"></i></button>
            </div>
        </div>
    </div>

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
		<table class="table table-striped table-bordered table-condensed table-hover">
			<thead>
			<thead>
      <th><CENTER>TIPO CUENTA</CENTER></th>
      <th><CENTER>MONEDA</CENTER></th>
			<th><CENTER>NRO CUENTA</CENTER></th>
			<th><CENTER>OPERACIÓN</CENTER></th>
			</thead>
			 @foreach ($cuentabanco as $des)
			<TR>
			<td><CENTER>{{$des->tipoCuenta}}</CENTER></td>
      <td><CENTER>{{$des->moneda}}</CENTER></td>
			<td><CENTER>{{$des->nroCuenta}}</CENTER></td>
			<td><CENTER>
             <button data-toggle='modal' data-target='#myModalEdit' onclick="ModificarCuentaBanco('{{$des->idCuenta}}','{{$des->idBanco}}','{{$des->tipoCuenta}}','{{$des->moneda}}','{{$des->nroCuenta}}')" class="btn btn-primary" title="MODIFICAR"><i class="fa fa-pencil" aria-hidden="true"></i></button>

             <button data-toggle='modal' data-target='#myModalEliminar' onclick="EliminarCuentaBanco({{$des->idCuenta}},{{$des->idBanco}})" class="btn btn-danger" title="ELIMINAR"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
 
			</CENTER></td>
		  </TR>
			@endforeach 
		</table>
		</div>
	</div>
</div>

           </div>
        </div>
      </div>
  </div><!-- /.row -->
</div><!-- /.box-body -->
@endsection

@section ('javascript')
{!!Html::script('js/cuentabanco.js')!!}
@endsection