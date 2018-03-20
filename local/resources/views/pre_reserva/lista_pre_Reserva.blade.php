@extends('layouts.inicio')
@section('contenido')
@include('alerts.errors')
@include('alerts.success')
@include('alerts.cargando')

@include('pre_reserva.modal')

<section class="content-header">
    <h1>
        LISTA DE PRE RESERVA
        <small>Preview</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">RESERVAS</a></li>
        <li class="active">LISTA DE PRE RESERVA</li>
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
{!! Form::open(['route' => 'ListaPreReserva', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <h4>Cambio $us. a <label style="color: #357CA5" id="tipocambio" name="tipocambio"><?php echo $tipocambio[0]->monedaVenta ?></label> Bs.<h4>
            </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 pull-right"> 
            <div class="pull-right">
                <button  type="submit" class="btn btn-info"><i class="fa fa-search" aria-hidden="true"></i></button>
            </div>        
            <?php $fecha=DB::select("SELECT curdate()as fecha"); ?>
            <div class="pull-right"><input type="date" name="fecha_inicio" value="{{$fecha[0]->fecha}}" class="form-control"></div>
        </div>    
    </div>
{!!Form::close()!!}

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <table id="example1" class="table table-striped table-bordered table-condensed table-hover">
                <thead style="text-align: center">
                <th><CENTER>URBANIZACION</CENTER></th>
                <th><CENTER>FASE</CENTER></th>
                <th><CENTER>MANZANO</CENTER></th>
                <th><CENTER>LOTE</CENTER></th>

                <th><CENTER>DATOS DEL CLIENTE</CENTER></th>
                <th><CENTER>REGISTRO</CENTER></th>
                <th><CENTER>VENCIMIENTO</CENTER></th>
                <th><CENTER>EMPLEADO</CENTER></th>
                <th><center>OPCION</center></th>
                </thead>
                @foreach ($lista as $lis)
                <TR>
                    <td align=center>{{$lis->nombre}}</td>
                    <td align=center>{{$lis->fase}}</td>
                    <td align=center>{{$lis->manzano}}</td>
                    <td align=center>{{$lis->nroLote}}</td>

                    <td ><span style="font-weight: bold">NOMBRE: </span>{{$lis->cliente}}. <br><span style="font-weight: bold">CI: </span>{{$lis->ci_cliente}} {{$lis->expedido}}.</td>
                    <td align=center>{{$lis->fecha}}</td>
                    <td align=center>{{$lis->vencimiento}}:00</td>
                    <td align=center>{{$lis->empleado}}</td>
                    <td><a class="btn btn-primary" href=<?php echo "VentaPreReserva/".$lis->idDetalle; ?>>Vender</a>
                    <button class="btn btn-warning" data-toggle="modal" data-target="#ModalReserva" onclick="cargarDatos({{$lis->idDetalle}},{{$lis->idCliente}},{{$lis->idLote}})">Reservar</button></td>
                </TR>
                @endforeach 
            </table>
        </div>
    </div>

</div>
    </div><!-- /.row -->
    </div><!-- /.box-body -->
</div>
 <script type="text/javascript">
$(document).ready(function(){
    $('#loading').css('display','none');      

});

$("#tipoPago").change(function(event){    
    $('#loading').css('display','block');
    switch($("#tipoPago").val()) {
        case 'e':
            $('select[name=banco]').empty();
            $('select[name=cuenta]').empty();
            $('input[name=nroDocumento]').val("");        
            $('input[name=monto]').val("");
            $('input[name=montoBs]').val("");
            $('input[name=montoBanco]').val("");         
            $('#divEfectivo').css('display','block');             
            $('#divBanco').css('display','none'); 
            $('#loading').css('display','none');
            break;
        case 'b':
            $('#divBanco').css('display','block'); 
            $('#divEfectivo').css('display','none');             
            $('select[name=banco]').empty();
            $('select[name=cuenta]').empty();
            $('input[name=nroDocumento]').val("");  
            $('input[name=monto]').val("");
            $('input[name=montoBs]').val("");
            $('input[name=montoBanco]').val("");
            $('input[name=montoBancoBs]').val("");
            $.get('cargarBanco',function(res){
                $('select[name=banco]').append('<option value=0> Seleccione Un Banco') ;
                for (var i = 0; i < res.length; i++) {
                   $('select[name=banco]').append('<option value='+res[i].id+'>'+res[i].nombre) ;
                }
                $('#loading').css('display','none');
            });            
            break;
        case 'be':
            $('select[name=banco]').empty();
            $('select[name=cuenta]').empty();
            $('input[name=nroDocumento]').val("");         
            $('input[name=monto]').val("");
            $('input[name=montoBs]').val("");
            $('input[name=montoBanco]').val("");
            $('input[name=montoBancoBs]').val("");
            $('#divEfectivo').css('display','block');             
            $('#divBanco').css('display','block');                         
            $.get('cargarBanco',function(res){
                $('select[name=banco]').append('<option value=0> Seleccione Un Banco') ;
                for (var i = 0; i < res.length; i++) {
                   $('select[name=banco]').append('<option value='+res[i].id+'>'+res[i].nombre) ;
                }
                $('#loading').css('display','none');      
            });
            break;                       
    }        
});   


function cargarCuenta(select){
    $('#loading').css('display','block');      
    idBanco=$(select).val();
    $('#cuenta').empty();
    $('#cuenta').append('<option value=0> Seleccione Una Cuenta');    
    $.get('cargarCuenta/'+idBanco,function(res){
        for (var i = 0; i < res.length; i++) {
           $('#cuenta').append('<option value='+res[i].id+'>'+res[i]. nroCuenta) ;
        }
    $('#loading').css('display','none');      
    });
}

function cargarTipoCuenta(select){
    if ($(select).val() != 0) {
        $('#loading').css('display','block');      
        idBanco=$(select).val();
        $('#tipocuenta').empty();   
        $.get('cargarTipoCuenta/'+idBanco,function(res){
            $('#tipocuenta').val(res[0].moneda);
            if($('#tipocuenta').val() == "DOLARES") {
               $("#montoBanco").removeAttr("readonly");
               $("#montoBancoBs").attr("readonly","readonly");
            }
            else {
               $("#montoBancoBs").removeAttr("readonly");
               $("#montoBanco").attr("readonly","readonly");
            }
        $('#loading').css('display','none');      
        });
    }
    else
    {
        $('#tipocuenta').val("");
        $("#montoBanco").attr("readonly","readonly");
        $("#montoBancoBs").attr("readonly","readonly");
    }
}

function convertirBs(input){
    $('#montoBs').empty();
    var MontoSus=parseFloat($(input).val());
    var Cambio = parseFloat($('#tipocambio').text());
    var Total = MontoSus * Cambio;
    $('#montoBs').val(Total.toFixed(2));
    $(input).empty();
    $(input).val(MontoSus.toFixed(2));
}

function convertirSus(input){
    $('#monto').empty();
    var MontoBs=parseFloat($(input).val());
    var Cambio = parseFloat($('#tipocambio').text());
    var Total = MontoBs / Cambio;
    $('#monto').val(Total.toFixed(2));
    $(input).empty();
    $(input).val(MontoBs.toFixed(2));
}

function convertirBancoBs(input){
    $('#montoBancoBs').empty();
    var MontoSus=parseFloat($(input).val());
    var Cambio = parseFloat($('#tipocambio').text());
    var Total = MontoSus * Cambio;
    $('#montoBancoBs').val(Total.toFixed(2));
    $(input).empty();
    $(input).val(MontoSus.toFixed(2));
}

function convertirBancoSus(input){
    $('#montoBanco').empty();
    var MontoBs=parseFloat($(input).val());
    var Cambio = parseFloat($('#tipocambio').text());
    var Total = MontoBs / Cambio;
    $('#montoBanco').val(Total.toFixed(2));
    $(input).empty();
    $(input).val(MontoBs.toFixed(2));
}

function validar(){
    switch($("#tipoPago").val()) {
    case 'e':
        if ($('input[name=monto]').val() < 50) { toastr.error("EL MONTO EFECTIVO TIENE QUE SER MAYOR A 50 $U$"); return false; } 
        else {
            if ($('input[name=monto]').val() == "" || $('#glosa').val() == "") { 
               if ($('input[name=monto]').val() == "") { toastr.error('El campo Monto no debe estar vacio'); }
               if ($('#glosa').val() == "") { toastr.error('El campo Detalle de Transacción no debe estar vacio'); }

               return false; 
            }
            else{toastr.success('GUARDADO CORRECTAMENTE'); return true; }
        }
        break;
    case 'b':
        if ($('input[name=montoBanco]').val() < 50) { toastr.error("EL MONTO BANCO TIENE QUE SER MAYOR A 50 $U$"); return false; } 
        else {     
            if ($('input[name=montoBanco]').val() == "" || $('select[name=banco]').val() == 0 || $('select[name=cuenta]').val() == 0 || $('input[name=nroDocumento]').val() == "" || $('#glosa').val() == "") {
                if ($('input[name=montoBanco]').val()=="") { toastr.error('El campo Monto Banco no debe estar vacio'); }                           
                if ($('input[name=nroDocumento]').val()=="") { toastr.error('El campo Nro de Documento no debe estar vacio'); }  
                if ($('select[name=banco]').val()==0) { toastr.error('No Selecciono un Banco'); }                      
                if ($('select[name=cuenta]').val()==0) { toastr.error('No Selecciono una Cuenta'); }

                if ($('#glosa').val() == "") { toastr.error('El campo Detalle de Transacción no debe estar vacio'); }                                        
                return false; 
            }else{toastr.success('GUARDADO CORRECTAMENTE'); return true; }
        }   
        break;
    case 'be':
        montoTotal = parseFloat($('input[name=montoBanco]').val()) + parseFloat($('input[name=monto]').val());
        if (montoTotal < 50) { toastr.error("EL MONTO TIENE QUE SER MAYOR A 50 $U$"); return false; } 
        else {     
            if ($('input[name=monto]').val() == "" || $('input[name=montoBanco]').val() == "" || $('select[name=banco]').val() == 0 || $('select[name=cuenta]').val() == 0 || $('input[name=nroDocumento]').val() == "" || $('#glosa').val() == "") {
                if ($('input[name=montoBanco]').val()=="") { toastr.error('El campo Monto Banco no debe estar vacio'); }
                if ($('input[name=monto]').val()=="") { toastr.error('El campo Monto Efectivo no debe estar vacio'); }
                if ($('input[name=nroDocumento]').val()=="") { toastr.error('El campo Nro de Documento no debe estar vacio'); }  
                if ($('select[name=banco]').val()==0) { toastr.error('No Selecciono un Banco'); }                      
                if ($('select[name=cuenta]').val()==0) { toastr.error('No Selecciono una Cuenta'); }

                if ($('#glosa').val() == "") { toastr.error('El campo Detalle de Transacción no debe estar vacio'); }                                        
                return false; 
            }else{toastr.success('GUARDADO CORRECTAMENTE'); return true; }
        }   
        break;                      
    }
}

function cargarDatos(idPreReserva,idCliente,idLote){
$('input[name=idCliente]').val(idCliente);
$('input[name=idPreReserva]').val(idPreReserva);
$('input[name=idLote]').val(idLote);
$('input[name=monto]').val("");
$('input[name=montoBs]').val("");
$('input[name=nroDocumento]').val("");
$('input[name=montoBanco]').val("");
$('input[name=montoBancoBs]').val("");
$('#glosa').val("");
}
 </script>

    @endsection