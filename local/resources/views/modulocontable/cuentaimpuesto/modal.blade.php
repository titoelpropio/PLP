<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 id="titulogalpon" class="modal-title" ></h4>
            </div>

            <div class="modal-body">
               
               <H1>Cuentas disponibles</H1>
                <table class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                        <th><center>Nombre</center></th>
                        <th><center>Código</center></th>
                        <th><center>Operación</center></th>
                    </thead>
                    @foreach($cuenta as $cue)
                    <tr>
                        <td><center>{{ $cue->nombre}}</center></td>
                        <td><center>{{ $cue->codigo}}</center></td>
                        <td><CENTER>
                        <?php
                            echo "<button name='btn".$cue->id."' id='btn".$cue->id."' data-status=1 class='btn btn-success' onclick=GuardarCuentaAutomatica(".$cue->id.")>Guardar</button>";
                        ?>
                        </CENTER></td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <div class="modal-footer">
                {!!link_to('#', $title='CANCELAR', $attributes = ['id'=>'cancelar', 'class'=>'btn btn-danger'], $secure = null)!!}
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 id="titulogalpon" class="modal-title" ></h4>
            </div>

            <div class="modal-body">
               
               <H1>Cuentas disponibles</H1>
                <table class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                        <th><center>Nombre</center></th>
                        <th><center>Código</center></th>
                        <th><center>Operación</center></th>
                    </thead>
                    @foreach($cuenta as $cue)
                    <tr>
                        <td><center>{{ $cue->nombre}}</center></td>
                        <td><center>{{ $cue->codigo}}</center></td>
                        <td><CENTER>
                        <?php
                            echo "<button name='btn".$cue->id."' id='btn".$cue->id."' data-status=1 class='btn btn-warning' onclick=ModificarCuentaAutomatica(".$cue->id.")>Actualizar</button>";
                        ?>
                        </CENTER></td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <div class="modal-footer">
                {!!link_to('#', $title='CANCELAR', $attributes = ['id'=>'cancelar', 'class'=>'btn btn-danger'], $secure = null)!!}
            </div>
        </div>
    </div>
</div>
