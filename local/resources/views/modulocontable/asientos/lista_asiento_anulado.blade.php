@extends ('layouts.inicio')
@section ('contenido')
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

@include('alerts.cargando')
@include('modulocontable.asientos.modal_lista_anulado')
@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	{{Session::get('message')}}
</div>
@endif

<center><H2><strong>LISTA DE COMPROBANTES ANULADOS</strong></H2></center>
 
<div class="row">

    <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
        <div class="form-group" >
            <button class="btn btn-primary" onclick="lista_asiento_anulado(1)"> Buscar</button><br>
            <b>Desde el:</b><input type="date" id="fecha_in" class="form-control">
            <b>Hasta el:</b><input type="date" id="fecha_fi" class="form-control">
        </div>    
    </div>
    <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12 pull-right">
        <center>
        <span style="font-size: 15pt ">Gestion Actual:&nbsp;
        <?php
            if (count($gestion)==1) {
        ?>
        <span style="font-size:20pt; color: #00A65A;">{{$gestion[0]->nombre_gestion}}</span>
        </span><br>
        <input id="fecha_inicial" type="hidden" value="{{$gestion[0]->fecha_inicio}}">
        <input id="fecha_fin" type="hidden" value="{{$gestion[0]->fecha_fin}}">
        <input id="id_gestion" type="hidden" value="{{$gestion[0]->id}}">
        <div class="form-group" >
            <button class="btn btn-success" onclick="lista_asiento_anulado(0)">Gestion actual</button>
        </div>
        <?php
            }
            else {
               echo "<span style='font-size:20pt; color: #DD4B39;'>Ninguna</span></span><br>";
            }
        ?>
        </center>
    </div>

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">	
		
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead style="background-color: #3C8DBC; color: white;">
					<th style="vertical-align: middle;"><center>FECHA</center></th>
                    <th style="vertical-align: middle;"><center>NRO</center></th>
					<th style="vertical-align: middle;"><center>TIPO</center></th>
					<th style="vertical-align: middle;"><center>GLOSA</center></th>
					<th style="vertical-align: middle;"><center>CATEGORIA</center></th>
					<th style="vertical-align: middle;"><center>GESTIÓN</center></th>
					<th style="vertical-align: middle;"><center>OPCIÓN</center></th>
				</thead>

				<tbody id="tabla">
                
                </tbody>
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
{!!Html::script('js/lista_asiento_anulado.js')!!}
@endsection
