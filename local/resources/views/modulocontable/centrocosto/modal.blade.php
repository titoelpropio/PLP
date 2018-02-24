<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 id="titulogalpon" class="modal-title" >REGISTRAR CENTRO DE COSTO</h4>
            </div>

            <div class="modal-body">
                {!!Form::open(['route'=>'centrocosto.store', 'method'=>'POST'])!!}

                <div class="form-group">
                    {!!Form::label('Nombre','Nombre:')!!}
                    {!!Form::text('nombre',null,['id'=>'nombre','class'=>'form-control','placeholder'=>'Ingrese el Nombre del Centro de Costo'])!!}
                </div>

                <div class="form-group">
                    {!!Form::label('Codigo','Codigo:')!!}
                    {!!Form::text('codigo',null,['id'=>'codigo','class'=>'form-control','readonly'])!!}
                </div>

                <div class="form-group">
                    {!!Form::label('Utilizable','Utilizable:')!!}
                    {!!Form::select('utilizable', array('1' => 'SI', '0' => 'NO'),null,array('id'=>'utilizable','class'=>'form-control'))!!}
                </div>

                <div class="form-group">
                    {!!Form::label('Hijo','Centro de Costo Inferior:')!!}
                    {!!Form::hidden('valorhijo','0',['id'=>'valorhijo'])!!}
                    {!!Form::text('hijo','NO',['id'=>'hijo','class'=>'form-control','readonly'])!!}
                </div>
                <div class="form-group">
                    {!!Form::label('Estado','Estado:')!!}
                    {!!Form::select('estado', array('1' => 'ACTIVO', '0' => 'INACTIVO'),null,array('id'=>'estado','class'=>'form-control'))!!}
                </div>
               
                 <div class="form-group" >
                    {!!Form::hidden('idpadre',null,['id'=>'idpadre'])!!}
                    {!!Form::hidden('estadohijo',null,['id'=>'estadohijo'])!!}
                    {!!Form::label('Padre','Centro de Costo Superior:')!!}
                    {!!Form::text('padre',null,['id'=>'padre','class'=>'form-control','readonly'])!!}
        </div>

            </div>

            <div class="modal-footer">
                {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                {!!Form::close()!!}
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="myModaledit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 id="titulogalpon" class="modal-title" ></h4>
            </div>

            <div class="modal-body">


                <div class="form-group">
                    {!!Form::label('Nombre','Nombre:')!!}
                    {!!Form::text('nombre',null,['id'=>'nombre','class'=>'form-control','placeholder'=>'Ingrese el Nombre del alimento'])!!}
                </div>

                <div class="form-group">
                    {!!Form::label('tipo','Codigo:')!!}
                    {!!Form::text('codigo',null,['id'=>'tipo','class'=>'form-control','placeholder'=>'Tipo'])!!}
                </div>

                <div class="form-group">
                    {!!Form::label('utilizable','Utilizable:')!!}
                    {!!Form::select('utilizable', array('1' => 'SI', '0' => 'NO'),null,array('id'=>'tipo_gallina','class'=>'form-control'))!!}
                </div>

                <div class="form-group">
                    {!!Form::label('hijo','Hijo:')!!}
                    {!!Form::select('hijo', array('1' => 'SI', '0' => 'NO'),null,array('id'=>'tipo_gallina','class'=>'form-control'))!!}
                </div>
                <div class="form-group">
                    {!!Form::label('estado','Estado:')!!}
                    {!!Form::select('estado', array('1' => 'ACTIVO', '0' => 'INACTIVO'),null,array('id'=>'tipo_gallina','class'=>'form-control'))!!}
                </div>
               
                 <div class="form-group" >
            <label>padre</label>

        </div>

            </div>

            <div class="modal-footer">
                {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
               
            </div>
        </div>
    </div>
</div>
