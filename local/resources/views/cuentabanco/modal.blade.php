<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 id="titulogalpon" class="modal-title" >AGREGAR CUENTA</h4>
      </div>

      <div class="modal-body">
        <div class="row">

        {!!Form::open(['route'=>'CuentaBanco.store', 'method'=>'POST'])!!}

          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

              <input type="hidden" name="idBancoG" id="idBancoG" value=<?php echo $banco[0]->id  ?> >
            
              <div class="col-sm-12 ">
                <div class="form-group">
                  <label >Tipo de Cuenta:</label>
                  <input type="text"  class="form-control" name="tipoCuentaG" id="tipoCuentaG" placeholder="INGRESE TIPO DE CUENTA"> 
                </div>        
              </div>

              <div class="col-sm-12 ">
                <div class="form-group">
                  <label for="monedaG">Tipo de moneda:</label><br>
                  <select class="form-control" name="monedaG" id="monedaG" >
                    <option value="BOLIVIANOS">BOLIVIANOS</option>
                    <option value="DOLARES">DOLARES</option>
                  </select>
                </div>        
              </div>

              <div class="col-sm-12 ">
                <div class="form-group">
                  <label >Nro de Cuenta:</label>
                  <input type="text"  class="form-control" name="nroCuentaG" id="nroCuentaG" placeholder="INGRESE NUMERO DE CUENTA"> 
                </div>        
              </div>

          </div>

        </div>
      </div>
      
      <div class="modal-footer">
        {!!Form::submit('GUARDAR',['class'=>'btn btn-success','id'=>'btn_modificar','onclick'=>'btn_esconder()'])!!}
        <button data-dismiss="modal" class="btn btn-danger">CANCELAR</button>
      </div>

      {!!Form::close()!!}

    </div>
  </div>
</div>

<div class="modal fade" id="myModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 id="titulogalpon" class="modal-title" >MODIFICAR CUENTA</h4>
      </div>

      <div class="modal-body">
      <div class="row">

      {!!Form::open(['route'=>['CuentaBanco.update','null'],'method'=>'PUT'])!!}
     
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

         <input type="hidden" name="idBancoM" id="idBancoM">
         <input type="hidden" name="idCuentaM" id="idCuentaM">

          <div class="col-sm-12 ">
                <div class="form-group">
                  <label >Tipo de Cuenta:</label>
                  <input type="text"  class="form-control" name="tipoCuentaM" id="tipoCuentaM" placeholder="INGRESE TIPO DE CUENTA"> 
                </div>        
              </div>

              <div class="col-sm-12 ">
                <div class="form-group">
                  <label for="monedaM">Tipo de moneda:</label><br>
                  <select class="form-control" name="monedaM" id="monedaM" >
                    <option value="BOLIVIANOS">BOLIVIANOS</option>
                    <option value="DOLARES">DOLARES</option>
                  </select>
                </div>        
              </div>

              <div class="col-sm-12 ">
                <div class="form-group">
                  <label >Nro de Cuenta:</label>
                  <input type="text"  class="form-control" name="nroCuentaM" id="nroCuentaM" placeholder="INGRESE NUMERO DE CUENTA"> 
                </div>        
              </div>

        </div>

      </div>

      </div>

      
      <div class="modal-footer">
      {!!Form::submit('ACTUALIZAR',['class'=>'btn btn-success','id'=>'btn_modificar','onclick'=>'btn_esconder()'])!!}
      <button data-dismiss="modal" class="btn btn-danger">CANCELAR</button>

      </div>
      {!!Form::close()!!}
    </div>
  </div>
</div>



<div class="modal fade" id="myModalEliminar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 id="titulogalpon" class="modal-title" >ELIMINAR CUENTA</h4>
      </div>

      <div class="modal-body">
      {!!Form::open(['route'=>['CuentaBanco.destroy','null'],'method'=>'DELETE'])!!}

         <input type="hidden" name="idCuentaBancoE" id="idCuentaBancoE">
         <input type="hidden" name="idBancoE" id="idBancoE">
         <h2 align="center">¿ DESEA ELIMINAR ESTE NRO DE CUENTA ?</h2>
        
       
      </div>
      <div class="modal-footer">
        
        {!!Form::submit('ACEPTAR',['class'=>'btn btn-success','id'=>'btn_eliminar','onclick'=>'btn_esconder()'])!!}
      <button data-dismiss="modal" class="btn btn-danger">CANCELAR</button>

      </div>
      {!!Form::close()!!}
    </div>
  </div>
</div>
