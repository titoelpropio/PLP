@extends('layouts.inicio')
@section('contenido')
@include('alerts.errors')
@include('alerts.success')
@include('alerts.cargando')
@include('planpago.modal')
<div class="row"> 
{!!Form::open(['route'=>'Pago.store', 'method'=>'POST','onKeypress'=>'if(event.keyCode == 13) event.returnValue = false;', 'onsubmit'=>'javascript: return Validar_Plan_Pago()' ])!!}
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="row">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="panel panel-success">
                    <div class="panel-heading"><b>PLAN DE PAGO</b>
                        <label class="pull-right">
                           <input type="radio" id="tipoMonedaDolares" name="tipoMoneda" value="DOLARES" onclick="convertirMoneda(this)">Dolares
                        </label>
                        <label class="pull-right">
                           <input type="radio" id="tipoMonedaBoliviano" name="tipoMoneda" value="BOLIVIANOS" onclick="convertirMoneda(this)" checked>Bolivianos
                        </label>
                    </div>        
                    <div class="panel-body">    
                        <div class="form-group">
                            {!!Form::label('tipoPago','TIPO DE PAGO:')!!}
                            {!!Form::select('tipoPago', array('e'=>'EFECTIVO', 'b'=>'BANCO', 'be'=>'BANCO - EFECTIVO'),null,array('class'=>'form-control'))!!}
                        </div> 

                        <div class="form-group" id="div_montoEfectivoBs" style="display:block">
                            {!!Form::label('montoBs','MONTO EN EFECTIVO(BOLIVIANOS):')!!}
                            {!!Form::text('montoBs','0.00',['class'=>'form-control','placeholder'=>'Monto en efectivo Bs.','onchange'=>'pagoBolivanoDolar(this,0)','onkeypress'=>'return numerosmasdecimal(event)'])!!}
                        </div>

                        <div class="form-group" id="div_montoEfectivoSus" style="display:block">
                            {!!Form::label('montoSus','MONTO EN EFECTIVO(DOLARES):')!!}
                            {!!Form::text('montoSus','0.00',['class'=>'form-control','placeholder'=>'Monto en efectivo $us.','onchange'=>'pagoBolivanoDolar(this,1)','onkeypress'=>'return numerosmasdecimal(event)','readonly'])!!}
                        </div>

                        <div class="form-group" id="div_banco" style="display:none">
                            {!!Form::label('banco','SELECCIONE UN BANCO:')!!}
                            <select onchange=cargarCuenta(this) name="banco" class="form-control" id="banco"></select>
                        </div> 

                        <div class="form-group" id="div_cuenta" style="display:none">
                            {!!Form::label('cuenta','SELECCIONE UNA CUENTA:')!!}
                            <select  name="cuenta" class="form-control" id="cuenta"></select>                    
                        </div> 

                        <div class="form-group" id="div_nroDoc" style="display:none">
                            {!!Form::label('nroDocumento','NRO DE DOCUMENTO:')!!}
                            {!!Form::number('nroDocumento',null,['class'=>'form-control ','placeholder'=>'Nro de Documento','onkeypress'=>'return bloqueo_de_punto(event)'])!!}                                     
                        </div>   

                        <div class="form-group" id="div_montoBancoBs" style="display:none">
                            {!!Form::label('montoBancoBs','MONTO EN BANCO(BOLIVIANOS):')!!}
                            {!!Form::text('montoBancoBs','0.00',['class'=>'form-control ','placeholder'=>'Monto en Banco Bs.','onchange'=>'pagoBolivanoDolar(this,0)','onkeypress'=>'return bloqueo_de_punto(event)'])!!}                                     
                        </div>

                        <div class="form-group" id="div_montoBancoSus" style="display:none">
                            {!!Form::label('montoBancoSus','MONTO EN BANCO(DOLARES):')!!}
                            {!!Form::text('montoBancoSus','0.00',['class'=>'form-control ','placeholder'=>'Monto en Banco $us.','onchange'=>'pagoBolivanoDolar(this,1)','onkeypress'=>'return bloqueo_de_punto(event)','readonly'])!!}                                     
                        </div>

                        <div class="form-group" id="div_fecha" style="display:none">
                            {!!Form::label('fecha','FECHA:')!!}
                            {!!Form::date('fecha',null,['class'=>'form-control'])!!}                                     
                        </div>  
                
                        @foreach ($debe as $deb)
                            <input type="hidden" name="idVenta" value="{{$deb->idVenta}}">  <?php break; ?>
                        @endforeach                                 
                    </div>
                </div>          
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <b>CONTROL</b>
                    </div>        
                    <div class="panel-body">

                        <table class="table table-striped table-bordered table-condensed table-hover">
                            <thead>
                                <th><CENTER>MONTO TOTAL</CENTER></th>
                                <th><CENTER>CUOTA</CENTER></th>
                            </thead>
                            <TR>
                            @foreach ($monto_pagar as $pag)
                                <td align="center"><b><font size="4">{{$pag->cuota}}</font> $us.</b></td>
                            @endforeach 
                            @foreach ($cantidad as $pag)
                                <td align="center"><font size="4"><b>{{$pag->contador}} Cuota</b></font></td>
                            @endforeach 
                            </TR>
                        </table>

                        <div class="form-group" style="">
                            <label>MONTO RECIBIDO(BOLIVIANOS)</label>
                            <input type="text" value="0.00" name="pagoBs" class="form-control" id="pagoBs" onchange ="pagoBolivanoDolar(this,0)" onkeypress="return bloqueo_de_punto(event)">
                        </div>

                        <div class="form-group" style="">
                            <label>MONTO RECIBIDO(DOLARES)</label>
                            <input type="text" value="0.00" name="pagoSus" class="form-control" id="pagoSus" onchange="pagoBolivanoDolar(this,1)" onkeypress="return bloqueo_de_punto(event)" readonly>
                        </div>

                        <table class="table table-striped table-bordered table-condensed table-hover">
                            <thead>
                                <th><center>TOTAL PAGADO Bs.</center></th>
                                <th><center>TOTAL PAGADO $us.</center></th>
                            </thead>
                            <tbody align="center">
                                <tr>
                                    <td>
                                        <b><span id="totalpagoBs" style="color: #357CA5">0.00</span></b>
                                    </td>
                                    <td>
                                        <b><span id="totalpagoSus" style="color: #00A65A">0.00</span></b>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <input type="hidden" name="txtTotalpagoBs" id="txtTotalpagoBs">
                        <input type="hidden" name="txtTotalpagoSus" id="txtTotalpagoSus">

                        <table class="table table-striped table-bordered table-condensed table-hover">
                            <thead>
                                <th><center>CAMBIO Bs.</center></th>
                                <th><center>CAMBIO $us.</center></th>
                            </thead>
                            <tbody align="center">
                                <tr>
                                    <td>
                                        <b><span id="cambioBs" style="color: #357CA5">0.00</span></b>
                                    </td>
                                    <td>
                                        <b><span id="cambioSus" style="color: #00A65A">0.00</span></b>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <input type="hidden" name="txtCambioBs" id="txtCambioBs">
                        <input type="hidden" name="txtCambioSus" id="txtCambioSus">

                        @foreach ($cantidad as $pag)
                        <input type="hidden" name="id_plan_pago" value="{{$pag->id_plan_pago}}">
                        @endforeach 
                                      
                    </div>
                </div>          
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" >
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <b>CAMBIO DE MONEDA</b>
                        <div class="pull-right"><button type="button" class="btn-sm btn-info" data-toggle="modal" data-target="#ModalMoneda"><i class="fa fa-usd" aria-hidden="true"></i></button></div>
                    </div>        
                    <div class="panel-body">    
                        <table class="table table-striped table-bordered table-condensed table-hover">
                            <thead>
                                <th><center>VENTA $us.</center></th>
                                <th><center>COMPRA $us.</center></th>
                            </thead>
                            <?php $moneda=DB::select("SELECT *from tipocambio WHERE tipocambio.deleted_at IS NULL"); ?>
                            <tbody align="center">
                                <tr>
                                    <td><b><font id='venta' size="3">{{$moneda[0]->monedaVenta}}</font> Bs.</b></td>
                                    <td><b><font id='compra' size="3">{{$moneda[0]->monedaCompra}}</font> Bs. </b><input type="hidden" name="compra_aux"></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td>
                                    <div class="form-group">
                                        {!!Form::label('boliviano','Monto Boliviano:')!!}
                                        {!!Form::number('boliviano',null,['class'=>'form-control ','placeholder'=>'Monto Boliviano','onkeypress'=>'return numerosmasdecimal(event)','onchange'=>'CalcularMoneda()'])!!}                                                             
                                    </div>                                     
                                    </td>
                                    <td>
                                    <div class="form-group">
                                        {!!Form::label('dolar','Monto Dolar:')!!}
                                        {!!Form::text('dolar',null,['class'=>'form-control ','placeholder'=>'Monto Dolar','onkeypress'=>'return numerosmasdecimal(event)','readonly'])!!}                                                             
                                    </div>                                     
                                    </td>                                
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>          
            </div>

        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <label for="glosa">Detalle de transacción (*):</label>
            <textarea class="form-control" rows="3" id="glosa" name="glosa" placeholder="Ej: Pago de cuota Nro 2 de lote pagado en efectivo segun documento Nro 0012"></textarea>
          </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div align="right">
                <?php if ($monto_pagar[0]->cuota != 0): ?>
                    {!!Form::submit('PAGAR',['class'=>'btn btn-primary','id'=>'btn_registrar','onclick'=>'btn_esconder()'])!!}  <br><br>              
                <?php endif ?>                         
                </div>         
            </div>
        </div>

        <?php $cont=0; ?>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <b> CUOTAS POR PAGAR</b>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-condensed table-hover">
                            <thead>
                            <!--th><CENTER>ID</CENTER></th-->
                            <th><CENTER>FECHA</CENTER></th>
                            <th><CENTER>DEBE $us.</CENTER></th>
                            <th><CENTER>MORA</CENTER></th>
                            <!--th><CENTER>ID VENTA</CENTER></th-->
                            <th><CENTER>ESTADO</CENTER></th>
                            </thead>
                            @foreach ($debe as $deb)

                            <?php if ($deb->mora == 1): ?>
                            <TR style="background: #F5A9BC">
                            <?php else: ?>
                            <TR style="background: #E6F8E0">                    
                            <?php endif ?>
                            
                            <!--td><CENTER>{{$deb->id}}</CENTER></td-->
                            <td><CENTER>{{$deb->fechaLimite}}</CENTER></td>

                            <?php if ($cont==0) {
                                if ($ultimo[0]->contador == 1) {
                                    echo "<td><CENTER>".$monto_pagar[0]->cuota."</CENTER></td>";                                                       
                                } else {
                                    if ($monto_cuota[0]->monto_cuota > 0) {
                                        echo "<td><CENTER>".$monto_cuota[0]->monto_cuota."</CENTER></td>";                             
                                    }else{
                                        echo "<td><CENTER>".$deb->monto."</CENTER></td>";                               
                                    }                          
                                }
                                $cont++;                                           
                            } else {
                                echo "<td><CENTER>".$deb->monto." </CENTER></td>";
                            }
                             ?>

                            <!--td><CENTER>{{$deb->monto}}</CENTER></td-->
                            <td><CENTER>
                            <?php
                               if ($deb->mora == 0){
                                  echo "<b><span style='color:green'>No</span></b>";
                               }
                               else {
                                  echo "<b><span style='color:red'>Si</span></b>";
                               }
                             ?>
                            </CENTER></td>
                            <!--td><CENTER>{{$deb->idVenta}}</CENTER></td-->
                            <td><CENTER>{{$deb->estado}}</CENTER></td>
                            </TR>
                            @endforeach 
                        </table>  
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <b> CUOTAS PAGADAS</b>
                    </div>
                    <div class="panel-body">
                          
                        <table class="table table-striped table-bordered table-condensed table-hover">
                            <thead>
                            <!--th><CENTER>ID</CENTER></th-->
                            <th><CENTER>FECHA</CENTER></th>
                            <th><CENTER>PAGADO $us.</CENTER></th>
                            <th><CENTER>MORA</CENTER></th>
                            <!--th><CENTER>ID VENTA</CENTER></th-->
                            <th><CENTER>ESTADO</CENTER></th>
                            </thead>
                            @foreach ($pago as $pag)
                            <TR>
                            <!--td><CENTER>{{$pag->id}}</CENTER></td-->
                            <td><CENTER>{{$pag->fechaLimite}}</CENTER></td>                
                            <td><CENTER>{{$pag->monto}}</CENTER></td>
                            <td><CENTER>
                            <?php
                               if ($pag->mora == 0){
                                  echo "<b><span style='color:green'>No</span></b>";
                               }
                               else {
                                  echo "<b><span style='color:red'>Si</span></b>";
                               }
                             ?>
                            </CENTER></td>
                            <!--td><CENTER>{{$pag->idVenta}}</CENTER></td-->
                            <td><CENTER>{{$pag->estado}}</CENTER></td>
                            </TR>
                            @endforeach 
                        </table>   
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
    
{!!Form::close()!!}
</div>
{!!Html::script('js/plan_pago.js')!!}

@endsection