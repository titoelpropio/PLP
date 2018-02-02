@extends ('layouts.inicio')
@section ('contenido')
@include('alerts.request')
   
<div class="row">	
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
		{!! Form::open(['route' => 'ReporteVentasSearch', 'method' => 'post','onKeypress'=>'if(event.keyCode == 13) event.returnValue = false;','onsubmit'=>'javascript: return Validar_Reporte_Venta()']) !!}
			<div class="pull-left"><font size=6>REPORTE DE VENTAS</font></div>
			<div class="pull-right">

				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<div class="form-group">
				<b>FECHA INICIO:</b> 

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>

                  <input type="text" name="fecha_inicio" class="form-control pull-right" id="datepicker" value="{{$fecha_inicio[0]->fecha}}">
                </div>
                </div>
                <!-- /.input group -->
              </div>


				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<div class="form-group">
				<b>FECHA FIN:</b> 
				
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>

                  <input type="text" name="fecha_fin" class="form-control pull-right" id="datepicker1" value="{{$fecha_fin[0]->fecha}}" >
                  <span class="input-group-btn">
				<button type="submit" class="btn btn-info btn-flat" title="BUSCAR"><i class="fa fa-search" aria-hidden="true"></i></button>
                  	
                  </span>
                </div>
                </div>
                <!-- /.input group -->
              </div>

			
				<button type="button" class="btn btn-success" title="PDF" onclick="ReporteVentas()"><i class="fa fa-file-text-o" aria-hidden="true"></i></button>
			</div>
		{!!Form::close()!!}
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th colspan="2"><center>VENDEDOR</center></th>
					<th><center>PROYECTO</center></th>
					<th><center>FASE</center></th>
					<th><center>CATEGORIA</center></th>
					<th><center>MANZANO</center></th>
					<th><center>LOTE</center></th>
					<th colspan="2"><center>CLIENTE</center></th>
					<th><center>REGISTRO</center></th>
					<th><center>VENTA</center></th>					
				</thead>
				<tbody align="center">
					@foreach($lista as $list)
					<tr>
						<td align="left">{{$list->empleado}}</td> <td align="left"><b>CI:</b> {{$list->ci_empleado}}</td>
						<td>{{$list->nombre}}</td>
						<td>Fase {{$list->fase}}</td>
						<td>{{$list->categoria}}</td>
						<td>{{$list->manzano}}</td>
						<td>{{$list->nroLote}}</td>
						<td align="left">{{$list->cliente}}</td> <td align="left"><b>CI:</b> {{$list->ci_cliente}}</td>
						<td>{{$list->fecha}}</td>
					<?php 
					switch ($list->estado) {
					    case 'c':
					        echo "<td> PLAZO </td>";								
					        break;
					    case 'p':
					        echo "<td> CONTADO </td>";													        
					        break;
					}					
					?>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
{!!Html::script('js/venta.js')!!}
@endsection
