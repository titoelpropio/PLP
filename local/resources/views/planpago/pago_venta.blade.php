@extends('layouts.inicio')
@section('contenido')
@include('alerts.errors')
@include('alerts.success')
@include('planpago.DetalleCuota')
@include('alerts.cargando')
<section class="content-header">
    <h1>
        GESTION DE COBRANZA
        <small>Preview</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">VENTAS</a></li>
        <li class="active">GESTION DE COBRANZA</li>
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
        <div class="table-responsive">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <th>DATOS DEL CLIENTE</th>
                <th>DATOS DEL PREVIO</th>
                <th>CUOTA INICIAL</th>
                <th>TIPO</th>
                <th>Bs</th>
                <th>$us</th>
                <th>Pagado</th>
                <th>Saldo Capital</th>
                <!--th><CENTER>PRECIO LOTE</CENTER></th-->
                <!--th><CENTER>CARNET</CENTER></th>
                <th><CENTER>EMPLEADO</CENTER></th-->
                <th>FECHA</th>
                <th>ESTADO</th>
                <th>OPCION</th>
                </thead>
              
<?php // echo json_encode($lista); ?>
                <tbody id="idTbody">
                      @foreach ($lista as $lis)

                                <?php
                                 
                                    echo '<tr>
                                    <td><span class="negritaTabla">Nombre:</span> '.$lis->cliente.'<br>
                                    <span class="negritaTabla">CI:</span> '.$lis->ci_cliente.' '.$lis->expedido.'.<br>
                                    <span class="negritaTabla">Telefono:</span> '.$lis->celular.'</td>
                                    
                                    <td><span class="negritaTabla">Urbanizacion:</span> '.$lis->nombre.'<br>
                                    <span class="negritaTabla">Manzano:</span> '.$lis->manzano.' <br>
                                    <span class="negritaTabla">Nro. Lote:</span> '.$lis->nroLote.'</td>';

                                 ?>

                                 <td>{{$lis->cuotaInicialUsd}}</td>
                                    <?php if ($lis->tipoVenta==='PLAZO'):
                                    echo '<td>PLAZO';
                                else:
                                    echo '<td>CONTADO';
                                         ?>
                                        
                                    <?php endif ?>
                                    <td>{{number_format($lis->precioBs, 2, '.', '')}}</td>
                                    <td>{{number_format($lis->precio, 2, '.', '')}}</td>
                                    <td>{{number_format($lis->totalPagadoUsd, 2, '.', '')}}</td>
                                    <td>{{number_format($lis->saldoUsd, 2, '.', '')}}</td>

                                    <td>{{$lis->fecha}}</td>


                                    <?php if ($lis->estado_venta==='d'):
                                    echo '<td><span style="color:red">Pendiente</span>';
                                else:
                                    echo '<td><span style="color:green">Pagado</span>';
                                         ?>
                                        
                                    <?php endif ?>
                                    <td><a href="{!!URL::to('PlanPago')!!}<?php echo "/".$lis->id ?>" class="btn-sm btn-success" >PAGAR</a>
                                        <a data-toggle="modal" style="cursor: pointer;" data-target="#DetalleCuota" href="#" onclick="CargarCuotas(<?php echo $lis->id ?>)" class="btn-sm btn-info" >DETALLE</a>
                                    </td>
                                    </tr>

               
                                
               
       
                   
                               

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
{!!Html::script('js/cuotas.js')!!}

    @endsection