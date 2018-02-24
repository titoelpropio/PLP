<div class="modal fade" id="myModal_detalle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document" style="width: 800px;">
    <div class="modal-content">
      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">DETALLE DE COMPROBANTE ANULADO</h4>
      </div>

      <div class="modal-body">

      <div class="form-group">
          <b><span>Anulado en la fecha&nbsp;</span><span id="fecha_anulado" style=" color: #D73925;"></span></b>
      </div>
      
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

      <div class="form-group">
          <label for="motivo_anulado">Motivo anulado:</label>
          <textarea class="form-control" rows="2" id="motivo_anulado" name="motivo_anulado" placeholder="" readonly></textarea>
      </div>

      </div>

      <div class="modal-footer">
           <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
      </div>
    </div>
  </div>
</div>
