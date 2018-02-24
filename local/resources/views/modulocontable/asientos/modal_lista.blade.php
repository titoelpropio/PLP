<div class="modal fade" id="myModal_detalle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document" style="width: 800px;">
    <div class="modal-content">
      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">DETALLE DE COMPROBANTE</h4>
      </div>

      <div class="modal-body">
      
			<table class="table table-striped table-bordered table-condensed table-hover">
			<thead style="background-color: #3C8DBC; color: white;">
                <th style="vertical-align: middle;"><CENTER>CÓDIGO</CENTER></th>
                <th style="vertical-align: middle;"><CENTER>CUENTA</CENTER></th>
                <th style="vertical-align: middle;"><CENTER>DEBE Bs.</CENTER></th>
                <th style="vertical-align: middle;"><CENTER>HABER Bs.</CENTER></th>
                <th style="vertical-align: middle;"><CENTER>DEBE $us.</CENTER></th>
                <th style="vertical-align: middle;"><CENTER>HABER $us.</CENTER></th>
                <th style="vertical-align: middle;"><CENTER>CENTRO DE COSTO</CENTER></th>
                </thead>
                <tbody id="tabla_detalle">
                
                </tbody>
			</table>

      </div>

      <div class="modal-footer">
           <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="myModal_anular" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">ANULAR COMPROBANTE</h4>
      </div>

      <div class="modal-body">
      {!!Form::open(['route'=>'anular_asiento', 'method'=>'POST'])!!}
	      <div class="form-group">
	        <input type="hidden" id="id_anular_asiento" name="id_anular_asiento" values="">
	        <Center><h2><span style="color: red">Por que desea anular este comprobante&nbsp;<i class="fa fa-question-circle fa-2x" aria-hidden="true"></i></span></h2></Center><br>
	        <label for="motivo_anulado">Detallar el motivo:</label>
		    <textarea class="form-control" rows="2" id="motivo_anulado" name="motivo_anulado" placeholder=""></textarea>
	      </div>
      </div>

      <div class="modal-footer">
      {!!Form::submit('Aceptar',['class'=>'btn btn-success'])!!}
      {!!Form::close()!!}
      <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>
