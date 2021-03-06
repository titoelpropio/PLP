@extends('layouts.inicio')
@section('contenido')
@include('alerts.errors')
@include('alerts.success')
<section class="content-header">
    <h1>
       LISTA DE RESERVA
        <small>Preview</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">RESERVA</a></li>
    
        <li class="active">LISTA DE RESERVA</li>
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
       

{!! Form::open(['route' => 'ListaReservasearch', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right"> 
            <div class="pull-right">
                <button  type="submit" class="btn btn-info"><i class="fa fa-search" aria-hidden="true"></i></button>
            </div>        
            <?php $fecha=DB::select("SELECT curdate()as fecha"); ?>
            <div class="pull-right"><input type="date" name="fecha_inicio" value="{{$fecha[0]->fecha}}" class="form-control"></div>
        </div>    
{!!Form::close()!!}

{!! Form::open(['route' => 'ListaReservasearchci', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right"> 
            <div class="pull-right">
                <button  type="submit" class="btn btn-info"><i class="fa fa-search" aria-hidden="true"></i></button>
            </div>        
            <?php $fecha=DB::select("SELECT curdate()as fecha"); ?>
            <div class="pull-right">
            <label>C.I</label>
            <input type="number" name="ci" value="" class="form-control"></div>
        </div>    
{!!Form::close()!!}
    </div>


    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <table id="example1" class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                <th><CENTER>DATOS DEL CLIENTE</CENTER></th>
                <th><CENTER>DATOS DEL PREVIO</CENTER></th>
                <th><CENTER>FECHA REGISTRO</CENTER></th>
                <th><CENTER>VENCIMIENTO</CENTER></th>
                <th><CENTER>EMPLEADO</CENTER></th>
                <th><CENTER>OPCION</CENTER></th>
                </thead>
                @foreach ($lista as $lis)
                <TR>
                    <td ><span style="font-weight: bold"> NOMBRE: </span>{{$lis->cliente}} <br><span style="font-weight: bold"> CI: </span>{{$lis->ci_cliente}}</td>
                    <td ><span style="font-weight: bold"> URBANIZACOIN: </span>{{$lis->nombre}} <br><span style="font-weight: bold"> FASE: </span>{{$lis->fase}}<br> 
                        <span style="font-weight: bold"> MANZANO: </span>{{$lis->manzano}}<br> <span style="font-weight: bold"> Nº LOTE: </span>{{$lis->nroLote}}<br> </td>
                    <td align=center>{{$lis->fecha}}</td>
                    <td align=center>{{$lis->vencimiento}}</td>
                    <td align=center>{{$lis->empleado}}</td>
                    <td align=center>
                    {!!link_to_route('DevolucionReserva.show', $title = 'DEVOLUCION', $parameters = $lis->idDetalleReserva, $attributes = ['class'=>'btn-sm btn-danger'])!!} 
                    <a class="btn-sm btn-primary" href=<?php echo "VentaReserva/".$lis->idDetalleReserva; ?> >VENDER</a>
                    </td>
                </TR>
                @endforeach 
            </table>
        </div>
    </div>

</div>
  </div><!-- /.row -->
    </div><!-- /.box-body -->
</div>
    @endsection