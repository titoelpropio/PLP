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
<center><H2><strong>LIBRO DE VENTAS</strong></H2></center>
<center><H3><strong>(EXPRESADO EN BOLIVIANOS)</strong></H3></center>
<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
        <div class="form-group" >
            <button class="btn btn-primary" onclick="reporte_libro_venta(1)"> Buscar</button><br>
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
                <button class="btn btn-success" onclick="reporte_libro_venta(0)">Gestion actual</button>
            </div>
            <?php
                }
                else {
                   echo "<span style='font-size:20pt; color: #DD4B39;'>Ninguna</span></span><br>";
                }
            ?>
        </center>
        <center>
            <div class="form-group" >
                <button class="btn btn-default" onclick="ExportarExcel('tabla_LV','LibroVentas')" title="Exportar a Excel"><img src="images/excel.png"></button>
                <button class="btn btn-default" onclick="ExportarTxt('tabla_LV','LibroVentas')" title="Exportar a Txt"><img src="images/txt.png"></button>
            </div>
        </center>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
                
            <table class="table table-striped table-bordered table-condensed table-hover" name="tabla_LV" id="tabla_LV">
                <thead style='background-color: #8CDF33'>
                <th style="display:none;"><CENTER>ESPECIFICACIÓN</CENTER></th>
                <th style="white-space: nowrap;"><CENTER>N°</CENTER></th>
                <th style="white-space: nowrap;"><CENTER>FECHA DE LA FACTURA</CENTER></th>
                <th style="white-space: nowrap;"><CENTER>N° DE LA FACTURA</CENTER></th>	
                <th style="white-space: nowrap;"><CENTER>N° DE AUTORIZACIÓN</CENTER></th>	
                <th style="white-space: nowrap;"><CENTER>ESTADO</CENTER></th>
                <th style="white-space: nowrap;"><CENTER>NIT/CI CLIENTE</CENTER></th>
                <th style="white-space: nowrap;"><CENTER>NOMBRE O RAZÓN SOCIAL</CENTER></th>
                <th style="white-space: nowrap;"><CENTER>IMPORTE TOTAL DE LA VENTA</CENTER></th>
                <th style="white-space: nowrap;"><CENTER>IMPORTE ICE/IEHD/IPJ/TASAS/OTROS NO SUJETOS AL IVA</CENTER></th>
                <th style="white-space: nowrap;"><CENTER>EXPORTACIONES Y OPERACIONES EXENTAS</CENTER></th>
                <th style="white-space: nowrap;"><CENTER>VENTAS GRAVADAS A TASA CERO</CENTER></th>
                <th style="white-space: nowrap;"><CENTER>SUBTOTAL</CENTER></th>
                <th style="white-space: nowrap;"><CENTER>DESCUENTOS, BONIFICACIONES Y REBAJAS SUJETAS AL IVA</CENTER></th>
                <th style="white-space: nowrap;"><CENTER>IMPORTE BASE PARA DÉBITO FISCAL</CENTER></th>
                <th style="white-space: nowrap;"><CENTER>DÉBITO FISCAL</CENTER></th>
                <th style="white-space: nowrap;"><CENTER>CÓDIGO DE CONTROL</CENTER></th>
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
{!!Html::script('exportar/js/xlsx.core.min.js')!!}
{!!Html::script('exportar/js/FileSaver.min.js')!!}
{!!Html::script('exportar/js/tableexport.min.js')!!}
{!!Html::script('js/reportes.js')!!}
@endsection