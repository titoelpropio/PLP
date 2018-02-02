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
@include('modulocontable.cuentaautomatica.modal')
               
  <div class="row">	
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="table-responsive">
		<H1>Cuentas automáticas</H1>
                <input type="hidden" class="" id="token" value="{{csrf_token()}}" >
		<table class="table table-striped table-bordered table-condensed table-hover">
		<thead>
		<th><CENTER>NOMBRE</CENTER></th>
		<th><CENTER>CUENTA</CENTER></th>
		<th><CENTER>CODIGO</CENTER></th>
		<th><CENTER>OPERACION</CENTER></th>

		<?php 
      $tam = count($nombre);
      $tam2 = count($cuentaautomatica);
    ?>
		
		</thead>
		 <?php for($i = 0; $i < $tam; $i++) { ?>
			<TR>
			<td><CENTER><?php echo $nombre[$i]; ?></CENTER></td>
			<td><CENTER>
      <?php
      if ($tam2 > 0){
        foreach($cuentaautomatica as $cuenta)
        {
          if ( $nombre[$i] == $cuenta->nombre)
          {
              echo $cuenta->cuenta;
          }
        }
      }
      ?>
      </CENTER></td>
			<td><CENTER>
      <?php
      if ($tam2 > 0){
        foreach($cuentaautomatica as $cuenta)
        {
          if ( $nombre[$i] == $cuenta->nombre)
          {
              echo $cuenta->codigo;
          }
        }
      }
      ?>
      </CENTER></td>
			<td><CENTER>
      <?php
      $nom = str_replace(" ", "_", $nombre[$i]);
      if ($tam2 > 0){
        $Sw=false;
        foreach($cuentaautomatica as $cuenta){

            if ( $nombre[$i] == $cuenta->nombre)
            {
                echo"<button class='btn btn-warning' onclick=GuardarNombre('$nom') title='Modificar Cuenta' data-toggle='modal' data-target='#myModalEdit'><i class='fa fa-pencil' aria-hidden='true'></i></button>";
                $Sw=true;
            }
        }
        if(!$Sw)
        {
            echo"<button class='btn btn-success' onclick=GuardarNombre('$nom') title='Agregar Cuenta' data-toggle='modal' data-target='#myModal'><i class='fa fa-plus-square' aria-hidden='true'></i></button>";
        }
      }
      else
      {
          echo"<button class='btn btn-success' onclick=GuardarNombre('$nom') title='Agregar Cuenta' data-toggle='modal' data-target='#myModal'><i class='fa fa-plus-square' aria-hidden='true'></i></button>";
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
<script src="{{asset('js/cuentaautomatica.js')}}">
    
</script>
@endsection