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
                        <th style="display: none"><center>Id</center></th>
                        <th><center>Nombre</center></th>
                        <th><center>Código</center></th>
                        <th><center>Operación</center></th>
                    </thead>
                    @foreach($cuenta as $cue)
                    <tr>
                        <td style="display: none"><span id="id_agregar_{{ $cue->id}}">{{ $cue->id}}</span></td>
                        <td><center><span id="nombre_agregar_{{ $cue->id}}">{{ $cue->nombre}}</span></center></td>
                        <td><center><span id="codigo_agregar_{{ $cue->id}}">{{ $cue->codigo}}</span></center></td>
                        <td><CENTER>
                        <?php
                            echo "<button name='btn".$cue->id."' id='btn".$cue->id."' data-status=1 class='btn btn-success' onclick=AgregarCuentaGrupo(".$cue->id.")>Agregar</button>";
                        ?>
                        </CENTER></td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
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
                        <th style="display: none"><center>Id</center></th>
                        <th><center>Nombre</center></th>
                        <th><center>Código</center></th>
                        <th><center>Operación</center></th>
                    </thead>
                    @foreach($cuenta as $cue)
                    <tr>
                        <td style="display: none"><span id="id_actualizar_{{ $cue->id}}">{{ $cue->id}}</span></td>
                        <td><center><span id="nombre_actualizar_{{ $cue->id}}">{{ $cue->nombre}}</span></center></td>
                        <td><center><span id="codigo_actualizar_{{ $cue->id}}">{{ $cue->codigo}}</span></center></td>
                        <td><CENTER>
                        <?php
                            echo "<button name='btn".$cue->id."' id='btn".$cue->id."' data-status=1 class='btn btn-warning' onclick=ActualizarCuentaGrupo(".$cue->id.")>Actualizar</button>";
                        ?>
                        </CENTER></td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
