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


@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    {{Session::get('message')}}
</div>
@endif
@include('alerts.cargando')
<center><H2><strong>LIBRO DE COMPRAS</strong></H2></center>
<center><H3><strong>(EXPRESADO EN BOLIVIANOS)</strong></H3></center>
<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
        <div class="form-group" >
            <button class="btn btn-primary" onclick="reporte_libro_compra(1)"> Buscar</button><br>
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
        <div class="form-group" >
            <button class="btn btn-success" onclick="reporte_libro_compra(0)">Gestion actual</button>
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
                <thead style='background-color: #8CDF33'>
                <th style="white-space: nowrap;"><CENTER>N°</CENTER></th>
                <th style="white-space: nowrap;"><CENTER>FECHA DE LA FACTURA O DUI</CENTER></th>
                <th style="white-space: nowrap;"><CENTER>NIT PROVEEDOR</CENTER></th>
                <th style="white-space: nowrap;"><CENTER>NOMBRE Y APELLIDOS/RAZÓN SOCIAL</CENTER></th>	
                <th style="white-space: nowrap;"><CENTER>N° DE LA FACTURA</CENTER></th>	
                <th style="white-space: nowrap;"><CENTER>N° DE DUI</CENTER></th>
                <th style="white-space: nowrap;"><CENTER>N° DE AUTORIZACIÓN</CENTER></th>  
                <th style="white-space: nowrap;"><CENTER>IMPORTE TOTAL DE LA COMPRA</CENTER></th>
                <th style="white-space: nowrap;"><CENTER>IMPORTE NO SUJETO A CRÉDITO FISCAL</CENTER></th>
                <th style="white-space: nowrap;"><CENTER>SUBTOTAL</CENTER></th>
                <th style="white-space: nowrap;"><CENTER>DESCUENTOS, BONIFICACIONES Y REBAJAS SUJETAS AL IVA</CENTER></th>
                <th style="white-space: nowrap;"><CENTER>IMPORTE BASE PARA CRÉDITO FISCAL</CENTER></th>
                <th style="white-space: nowrap;"><CENTER>CRÉDITO FISCAL</CENTER></th>
                <th style="white-space: nowrap;"><CENTER>CÓDIGO DE CONTROL</CENTER></th>
                <th style="white-space: nowrap;"><CENTER>TIPO DE COMPRA</CENTER></th>
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
{!!Html::script('js/reportes.js')!!}
@endsection