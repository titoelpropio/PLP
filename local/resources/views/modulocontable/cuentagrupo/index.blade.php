@extends('layouts.inicio')
@section('contenido')
<div class="col-md-12">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">CONTABILIDAD </h3>
            <div class="box-tools pull-right">

            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">


        @if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	{{Session::get('message')}}
</div>
@endif

@include('alerts.errors')
@include('alerts.cargando')
@include('modulocontable.cuentagrupo.modal')
               
  <div class="row">	
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="table-responsive">
		<H1>Gestionar Grupos</H1>
                <input type="hidden" class="" id="token" value="{{csrf_token()}}" >
		<table class="table table-striped table-bordered table-condensed table-hover">
		<thead>
    <th style="display: none"><CENTER>ID</CENTER></th>
		<th><CENTER>NOMBRE</CENTER></th>
    <th style="display: none"><CENTER>ID CUENTA</CENTER></th>
		<th><CENTER>CUENTA</CENTER></th>
		<th><CENTER>CÓDIGO</CENTER></th>
    <th><CENTER>DESCRIPCIÓN</CENTER></th>
		<th><CENTER>OPERACION</CENTER></th>

		<?php 
      $tam = count($nombre);
      $tam2 = count($cuentagrupo);
    ?>
		
		</thead>
		 <?php for($i = 0; $i < $tam; $i++) { ?>
			<TR>
        <td style="display: none">
        <SPAN id="id_<?php echo $i; ?>"><?php
          if ($tam2 > 0)
          {
            foreach($cuentagrupo as $cuenta)
            {
              if ( $nombre[$i] == $cuenta->nombre)
              {
                  echo $cuenta->id;
              }
            }
          }
          ?></SPAN>
      </td>
			<td style="vertical-align: middle;">
        <CENTER>
          <SPAN id="nombre_<?php echo $i; ?>"><?php echo $nombre[$i]; ?></SPAN>
        </CENTER>
      </td>
      <td style="display: none">
        <SPAN id="id_cuenta_<?php echo $i; ?>"><?php
          if ($tam2 > 0)
          {
            foreach($cuentagrupo as $cuenta)
            {
              if ( $nombre[$i] == $cuenta->nombre)
              {
                  echo $cuenta->id_cuenta;
              }
            }
          }
          ?></SPAN>
      </td>
			<td style="vertical-align: middle;">
        <CENTER>
          <SPAN id="cuenta_<?php echo $i; ?>"><?php
          if ($tam2 > 0)
          {
            foreach($cuentagrupo as $cuenta)
            {
              if ( $nombre[$i] == $cuenta->nombre)
              {
                  echo $cuenta->cuenta;
              }
            }
          }
          ?></SPAN>
        </CENTER>
      </td>
			<td style="vertical-align: middle;">
        <CENTER>
          <SPAN id="codigo_<?php echo $i; ?>"><?php
          if ($tam2 > 0){
            foreach($cuentagrupo as $cuenta)
            {
              if ( $nombre[$i] == $cuenta->nombre)
              {
                  echo $cuenta->codigo;
              }
            }
          }
          ?></SPAN>
        </CENTER>
      </td>
      <td>
        <input type="text" id="descripcion_<?php echo $i; ?>" name="descripcion_<?php echo $i; ?>" class="form-control" style="border:none;" value="<?php
        if ($tam2 > 0){
          foreach($cuentagrupo as $cuenta)
          {
            if ( $nombre[$i] == $cuenta->nombre)
            {
                echo $cuenta->descripcion;
            }
          }
        }
        ?>">
      </td>
			<td><CENTER>
      <?php
      if ($tam2 > 0){
        $Sw=false;
        foreach($cuentagrupo as $cuenta){

            if ( $nombre[$i] == $cuenta->nombre)
            {
                echo"<button class='btn btn-warning' onclick=GuardarIndex('$i') title='Modificar Cuenta' data-toggle='modal' data-target='#myModalEdit'><i class='fa fa-pencil' aria-hidden='true'></i></button>";

                echo"<button class='btn btn-primary' onclick=Guardar('$i') title='Guardar'><i class='fa fa-floppy-o'></i></button>";
                $Sw=true;
            }
        }
        if(!$Sw)
        {
            echo"<button class='btn btn-success' onclick=GuardarIndex('$i') title='Agregar Cuenta' data-toggle='modal' data-target='#myModal'><i class='fa fa-plus-square' aria-hidden='true'></i></button>";
            echo"<button class='btn btn-primary' onclick=Guardar('$i') title='Guardar'><i class='fa fa-floppy-o'></i></button>";
        }
      }
      else
      {
          echo"<button class='btn btn-success' onclick=GuardarIndex('$i') title='Agregar Cuenta' data-toggle='modal' data-target='#myModal'><i class='fa fa-plus-square' aria-hidden='true'></i></button>";
          echo"<button class='btn btn-primary' onclick=Guardar('$i') title='Guardar'><i class='fa fa-floppy-o'></i></button>";
      }
      ?>
			</CENTER></td>
		</TR>
		<?php } ?>
		</table>

	</div>
</div>
</div>

           </div>
        </div>
      </div>
  </div><!-- /.row -->
</div><!-- /.box-body -->
<script src="{{asset('js/cuentagrupo.js')}}">
    
</script>
@endsection