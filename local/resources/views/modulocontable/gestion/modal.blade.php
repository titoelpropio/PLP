<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 id="titulogalpon" class="modal-title" >CREAR GESTION</h4>
      </div>

      <div class="modal-body">
      {!!Form::open(['route'=>'gestion.store', 'method'=>'POST'])!!}
		  @include('modulocontable.gestion.forms.ges')
		  {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	    {!!Form::close()!!}
       
  </div>

      <div class="modal-footer">

<!--footer del modal-->
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModalCerrar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 id="titulogalpon" class="modal-title" >CERRAR GESTION</h4>
      </div>

      <div class="modal-body">
      {!!Form::open(['route'=>'cerrar_gestion', 'method'=>'POST'])!!}
      <div class="form-group">
        <input type="hidden" id="id_cerrar_gestion" name="id_cerrar_gestion" values="">
        <Center><h2><span style="color: red">Realmente desea cerrar esta gestión&nbsp;<i class="fa fa-question-circle fa-2x" aria-hidden="true"></i></span></h2></Center><br>
        <center>Los cambios ya no se podran deshacer</center>
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
