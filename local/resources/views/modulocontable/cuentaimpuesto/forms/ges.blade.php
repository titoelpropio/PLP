<div class="form-group">
		{!!Form::label('nombre','Gestion:')!!}
		{!!Form::text('nombre_gestion',null,['class'=>'form-control ','placeholder'=>'Ingresa la gestion'])!!}
</div>
<div class="form-group">
		{!!Form::label('fechaInicio','Fecha inicio:')!!}
		{!!Form::date('fecha_inicio',null,['id'=>'fecha1','class'=>'form-control ','placeholder'=>'Ingresa la fecha de inicio'])!!}
</div>
<div class="form-group">
		{!!Form::label('fechaFin','Fecha fin:')!!}
		{!!Form::date('fecha_fin',null,['id'=>'fecha2','class'=>'form-control ','placeholder'=>'Ingresa la fecha final'])!!}
</div>
<div class="form-group">
		{!!Form::label('estado','Guardar como gestión Actual:')!!}
		<br>
		&nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
		<label>
			Si
            <input type="radio" id="estado" name="estado" value="1" checked ">
        </label>
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        <label>
        	No
            <input type="radio" id="estado" name="estado" value="0" >
        </label>
</div>