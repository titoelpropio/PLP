<div class="form-group">
		{!!Form::label('nombre','Gestion:')!!}
		{!!Form::text('nombre_gestion',null,['class'=>'form-control ','placeholder'=>'Ingresa la gestion'])!!}
</div>
<div class="form-group">
		{!!Form::label('fechaInicio','Fecha inicio:')!!}
		{!!Form::date('fecha_inicio',null,['id'=>'fecha_inicio','class'=>'form-control ','placeholder'=>'Ingresa la fecha de inicio'])!!}
</div>
<div class="form-group">
		{!!Form::label('fechaFin','Fecha fin:')!!}
		{!!Form::date('fecha_fin',null,['id'=>'fecha_fin','class'=>'form-control ','placeholder'=>'Ingresa la fecha final'])!!}
</div>
<div class="form-group">
        <input type="hidden" id="estado" name="estado" value="<?php echo $gestion->estado; ?>">
</div>