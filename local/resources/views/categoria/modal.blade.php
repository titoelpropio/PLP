<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 id="titulogalpon" class="modal-title" >CREAR CATEGORIA</h4>
      </div>

      <div class="modal-body">
      {!!Form::open(['route'=>'categoria.store', 'method'=>'POST'])!!}
    @include('categoria.forms.cat')
    {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
  {!!Form::close()!!}
       
  </div>

      <div class="modal-footer">

<!--footer del modal-->
      </div>
    </div>
  </div>
</div>
