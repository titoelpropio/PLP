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
                @include('modulocontable.gestion.modal')
                 <button class="btn btn-success" data-toggle='modal' data-target='#myModal'>
                    <i class="fa fa-plus-square" aria-hidden="true"></i>     
                </button>
               
  <div class="row">	
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="table-responsive">
		<H1>Gestión</H1>
                <input type="hidden" class="" id="token" value="{{csrf_token()}}" >
		<table class="table table-striped table-bordered table-condensed table-hover">
		<thead>
		<th><CENTER>GESTION</CENTER></th>
		<th><CENTER>FECHA INICIO</CENTER></th>
		<th><CENTER>FECHA FIN</CENTER></th>
		<th><CENTER>ESTADO</CENTER></th>
		<th><CENTER>OPERACION</CENTER></th>
		
		
		</thead>
		 @foreach ($gestion as $ges)
			<TR>
			<td><CENTER>{{$ges->nombre_gestion}}</CENTER></td>
			<td><CENTER>{{$ges->fecha_inicio}}</CENTER></td>
			<td><CENTER>{{$ges->fecha_fin}}</CENTER></td>
			<td><CENTER>
			<?php
			  if ($ges->estado=='0'){
                echo "<span name='estado".$ges->id."' id='estado".$ges->id."' style='color:red'>Gestion Cerrada</span>";
              }
              else{
                echo "<span name='estado".$ges->id."' id='estado".$ges->id."' style='color:green'>Gestión Actual</span>";
              }
            ?>
            </CENTER></td>
			<td><CENTER>
			
            <?php 
              if ($ges->estado==1) {
            ?>     
                 {!!link_to_route('gestion.edit', $title = 'Editar', $parameters = $ges->id, $attributes = ['class'=>'btn btn-primary'])!!}
            <?php 
                 echo "<button name='btn".$ges->id."' id='btn".$ges->id."' data-status=0 class='btn btn-danger' onclick=cerrar_gestion(".$ges->id.",this)>Cerrar</button>";
              }
            ?>
			</CENTER></td>
		</TR>
		@endforeach 
		</table>
	{!!$gestion->render()!!}
	</div>
</div>
</div>

           </div>
        </div>
      </div>
  </div><!-- /.row -->
</div><!-- /.box-body -->
                <script src="{{asset('js/gestion.js')}}">
    
                </script>
	@endsection