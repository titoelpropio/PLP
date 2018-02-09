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
@include('modulocontable.asientos.modal')
@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	{{Session::get('message')}}
</div>
@endif

<center><H2><strong>COMPROBANTE</strong></H2></center>
{!!Form::open(['route'=>'comprobante.store','method'=>'POST','enctype'=>'multipart/form-data','onsubmit'=>'javascript:return validar()'])!!}
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12" >
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 pull-right">
            <div class="form-group">
                <center>
                    <span style="font-size: 15pt;">Gestión Actual: <span style="font-size:20pt; color: #00A65A;">{{$gestion[0]->nombre_gestion}}</span></span>
                    <input type="hidden" value="{{$gestion[0]->id}}" name="id_gestion" id="id_gestion" class="form-control">
                </center>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
        <div class="form-group">
            <label for="fecha_transaccion">Fecha de Transacción:</label>
            <input type="date"  class="form-control" id="fecha_transaccion" name="fecha_transaccion">
        </div>
    </div>

    <div class="col-lg-3 col-sm-3 col-xs-12" >
        <div class="form-group" >
            <label for="categoria">Categoria:</label>
            <select class="form-control" name="categoria" id="categoria">
                @foreach($tipo_asiento as $tipo)
                <option value="{{$tipo->id}}" <?php if($tipo->id == 2) { echo "selected"; } ?> >{{$tipo->nombre}}</option> 
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-lg-3 col-sm-3 col-xs-3" >
        <div class="form-group" >
            <label for="tipo_comprobante">Tipo de Comprobante:</label>
            <select class="form-control" name="tipo_comprobante" id="tipo_comprobante">
                <option value="1">INGRESO</option>
                <option value="2">EGRESO</option>
                <option value="3">TRASPASO</option>
            </select>
        </div>
    </div>

    <div class="col-lg-2 col-sm-2 col-xs-2" >
        <div class="form-group">
            <label for="tipo_cambio">Tipo de Cambio:</label>
            <input name="tipo_cambio" type="text" value="{{$tipocambio[0]->monedaVenta}}" class="form-control" id="tipo_cambio" onclick="extraerid(this)" style = 'text-align: right;'>
            <input type="hidden" value="{{$tipocambio[0]->id}}" name="id_tipo_cambio" id="id_tipo_cambio"  class="form-control">
        </div>
    </div>

    <div class="col-lg-12 col-sm-12 col-xs-12" >
        <div class="table-responsive">

            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead style="background-color: #3C8DBC; color: white;">
                <th style="vertical-align: middle;"><CENTER>OPERACIÓN</CENTER></th>
                <th style="display: none"><CENTER>ID</CENTER></th>
                <th style="vertical-align: middle;"><CENTER>CÓDIGO</CENTER></th>
                <th style="vertical-align: middle;"><CENTER>CUENTA</CENTER></th>
                <th style="display: none"><CENTER>TIPO</CENTER></th>
                <th style="vertical-align: middle;"><CENTER>DEBE Bs.</CENTER></th>
                <th style="vertical-align: middle;"><CENTER>HABER Bs.</CENTER></th>
                <th style="vertical-align: middle;"><CENTER>DEBE $us.</CENTER></th>
                <th style="vertical-align: middle;"><CENTER>HABER $us.</CENTER></th>
                </thead>

                <tbody id="tabla">
                <tr id="fila_0">
                    <td style="vertical-align: middle;">
                        <CENTER>
                            <a href="#" name="agregar_0" id="agregar_0" data-status=0 class='btn btn-success' onclick="lista_cuentas()">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </a>
                            <a href="#" name="quitar_0" id="quitar_0" data-status=0 class='btn btn-danger' onclick="quitar_fila(0)" style="display: none">
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </a>
                        </CENTER>
                    </td>
                    <td style="display: none">
                        <input type="hidden" name="id[]" id="id_0" class="form-control" style="border:none;" readonly>
                    </td>
                    <td>
                        <input type="hidden" name="codigo[]" id="codigo_0" class="form-control" style="border:none;" readonly>
                    </td>
                    <td>
                        <input type="hidden" name="cuenta[]" id="cuenta_0" class="form-control" style="border:none;" readonly>
                    </td>
                    <td style="display: none">
                        <input type="hidden" name="tipo[]" id="tipo_0" class="form-control" style="border:none;" readonly>
                    </td>
                    <td onclick="bloquear_desbloquear(0,'debe_bs')">
                        <input type="hidden" name="debe_bs[]" id="debe_bs_0" class="form-control" style="border:none; text-align: right;" onchange="calcular(0,'debe_bs')" value="0.00" readonly>
                    </td>
                    <td onclick="bloquear_desbloquear(0,'haber_bs')">
                        <input type="hidden" name="haber_bs[]" id="haber_bs_0" class="form-control" style="border:none; text-align: right;" onchange="calcular(0,'haber_bs')" value="0.00" readonly>
                    </td>
                    <td onclick="bloquear_desbloquear(0,'debe_sus')">
                        <input type="hidden" name="debe_sus[]" id="debe_sus_0" class="form-control" style="border:none; text-align: right;" onchange="calcular(0,'debe_sus')" value="0.00" readonly>
                    </td>
                    <td onclick="bloquear_desbloquear(0,'haber_sus')">
                        <input type="hidden" name="haber_sus[]" id="haber_sus_0" class="form-control" style="border:none; text-align: right;" onchange="calcular(0,'haber_sus')" value="0.00" readonly>
                    </td>
                </tr>
                </tbody>

                <tfoot style="background-color: #EEEEEE;">
                <th style="vertical-align: middle;" colspan="3">TOTAL ASIENTO</th>
                <th>
                    <input type="text" name="total_debe_bs" id="total_debe_bs" class="form-control" style="border:none; text-align: right;" value="0.00" readonly>
                </th>
                <th>
                    <input type="text" name="total_haber_bs" id="total_haber_bs" class="form-control" style="border:none; text-align: right;" value="0.00" readonly>
                </th>
                <th>
                    <input type="text" name="total_debe_sus" id="total_debe_sus" class="form-control" style="border:none; text-align: right;" value="0.00" readonly>
                </th>
                <th>
                    <input type="text" name="total_haber_sus" id="total_haber_sus" class="form-control" style="border:none; text-align: right;" value="0.00" readonly>
                </th>
                </tfoot>
            </table>

        </div>
    </div>

    <div  class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
        <div class="form-group">
            <label for="glosa">Detalle de la transacción:</label>
            <textarea class="form-control" rows="3" id="glosa" name="glosa" placeholder="Ej: Venta de lote al contado pagado en efectivo segun documento Nro 0012"></textarea>
        </div>
        <div class="form-group" >
            {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
            <a href="{!!URL::to('index')!!}" class="btn btn-danger">Cancelar</a>
            {!!Form::close()!!}
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
{!!Html::script('js/addasiento.js')!!}
@endsection