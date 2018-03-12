@extends('layouts.inicio')
@section('contenido')
@include('alerts.cargando')

@include('alerts.errors')
@include('alerts.success')


<section class="content-header">
    <h1>
       REPORTE FLUJO DE CAJA
       <small>Preview</small>
   </h1>
   <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">VENDEDORES</a></li>
</ol>
</section>

<div class="col-md-12">
    <div class="box box box-info">
        <div class="box-header with-border">
            <h3 class="box-title"></h3>
            <div class="box-tools pull-right">

            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <label>FECHA INICIAL</label>
                        <input type="date" name="fechaIni" id="fechaIni" class="form-control">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <label>FECHA FINAL</label>
                        <input type="date" name="fechaFin" id="fechaFin" class="form-control">
                    <button class="btn btn-info" onclick="reporteVendedores()">BUSCAR</button>

                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <table id="tableVendedor" class="table table-striped table-bordered table-condensed table-hover">
                            <thead>
                            <th>VENDEDOR</th>
                            <th>DATOS CLIENTE</th>
                            <th>DATOS DEL PREVIO</th>
                            <th>TIPO DE VENTA</th>
                            <th>FECHA DE RESERVA</th>
                            <th>FECHA DE VENTA</th>
                            <th>10%</th>
                            </thead>
                            <tbody id="tbodyVendedor">
                                
                            </tbody>
                        </table>


                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.box-body -->
    </div>
    {!!Html::script('js/reportes.js')!!}
    @endsection