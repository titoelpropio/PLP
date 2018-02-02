<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">CUENTAS</h4>
      </div>

      <div class="modal-body">
      
			<table class="table table-striped table-bordered table-condensed table-hover">
			<thead>
				<th style="display: none"><CENTER>ID</CENTER></th>
				<th><CENTER>CÓDIGO</CENTER></th>
				<th><CENTER>NOMBRE</CENTER></th>
				<th><CENTER>OPERACIÓN</CENTER></th>
			</thead>
			<?php $con = 1; ?>
			@foreach ($cuenta as $cue)
			<TR>
				<td id="idcuenta_{{$con}}" style="display: none">{{$cue->id}}</td>
				<td id="codigocuenta_{{$con}}">{{$cue->codigo}}</td>
				<td id="nombrecuenta_{{$con}}">{{$cue->nombre}}</td>
				<td><CENTER><button class="btn btn-success" id="btncuenta_{{$con}}" onclick="agregar_datos({{$con}})">Agregar</button></CENTER></td>
			</TR>
			<?php $con++; ?>
			@endforeach 
			</table>

      </div>

      <div class="modal-footer">
           <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>
