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
<center><H2><strong>BALANCE DE COMPROBACION DE SUMAS Y SALDOS</strong></H2></center>
<div class="row">	
    <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
        <div class="form-group" >
            <button class="btn btn-primary" onclick="sumas_saldos(1)"> Buscar</button><br>
            <b>Desde el:</b><input type="date" id="fecha_in" class="form-control">
            <b>Hasta el:</b><input type="date" id="fecha_fi" class="form-control">
        </div>    
    </div>
    <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12 pull-right">
        <center>
        <span style="font-size: 15pt ">Gestion Actual: <span style="font-size:20pt ">{{$gestion[0]->nombre_gestion}}</span></span><br>
        <input id="fecha_inicial" type="hidden" value="{{$gestion[0]->fecha_inicio}}">
        <input id="fecha_fin" type="hidden" value="{{$gestion[0]->fecha_fin}}">
            <div class="form-group" >
                <button class="btn btn-success" onclick="sumas_saldos(0)">Gestion actual</button>
            </div>
        </center>
    </div>	
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">	
           
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead style='background-color: #8CDF33'>
                <tr>
                    <th style="vertical-align: middle;" rowspan="2"><CENTER>CÓDIGO</CENTER></th>
                    <th style="vertical-align: middle;" rowspan="2"><CENTER>CUENTA</CENTER></th>
                    <th style="vertical-align: middle;" colspan="2"><CENTER>SUMAS $us.</CENTER></th>
                    <th style="vertical-align: middle;" colspan="2"><CENTER>SALDOS $us.</CENTER></th>
                    <th style="vertical-align: middle;" colspan="2"><CENTER>SUMAS Bs.</CENTER></th>
                    <th style="vertical-align: middle;" colspan="2"><CENTER>SALDOS Bs.</CENTER></th>
                </tr>
                <tr>
                    <th style="vertical-align: middle;"><CENTER>DEBE $us.</CENTER></th> 
                    <th style="vertical-align: middle;"><CENTER>HABER $us.</CENTER></th>
                    <th style="vertical-align: middle;"><CENTER>DEUDOR $us.</CENTER></th> 
                    <th style="vertical-align: middle;"><CENTER>ACREEDOR $us.</CENTER></th>
                    <th style="vertical-align: middle;"><CENTER>DEBE Bs.</CENTER></th>  
                    <th style="vertical-align: middle;"><CENTER>HABER Bs.</CENTER></th>
                    <th style="vertical-align: middle;"><CENTER>DEUDOR Bs.</CENTER></th> 
                    <th style="vertical-align: middle;"><CENTER>ACREEDOR Bs.</CENTER></th>
                </tr> 
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