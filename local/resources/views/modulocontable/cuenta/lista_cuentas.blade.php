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
@include('alerts.request')
@include('alerts.cargando')
@include('modulocontable.cuenta.modal')



<div class="row">	
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <H1>LISTA CUENTA</H1>
            {!! Form::open(['route'=> 'cuenta.index','method'=>'GET','class'=>'navbar-from navbar-left pull-right','role' =>'search', 'style'=>'padding-bottom: 6px'])!!}

              <div class="col-lg-4">
                <div class="input-group">
                  {!!Form::text('cuenta',null,['class'=>'form-control','placeholder'=>'Nombre'])!!}
                  <span class="input-group-btn">
                    <button class="btn btn-default " type="submit" > 
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                  </span>
                </div>
              </div>

            {!!Form::close()!!}

            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                <th><CENTER>NOMBRE</CENTER></th>
                <th><CENTER>CÓDIGO</CENTER></th>
                <th><CENTER>CUENTA INFERIOR</CENTER></th>
                <th><CENTER>CUENTA SUPERIOR</CENTER></th>
                <th><CENTER>ESTADO</CENTER></th>
                <th><CENTER>UTILIZABLE</CENTER></th>
                <th><CENTER>MONEDA</CENTER></th>
                <th><CENTER>OPCIÓN</CENTER></th>

                </thead>
                @foreach($cuenta as $result)
                <TR>
                <td><CENTER>{{ $result->nombre}}</CENTER></td>
                <td>{{ $result->codigo}}</td>
                <td><CENTER>
                    <?php
                      if ($result->hijo=='0'){
                        echo "<span style='color:red'>No</span>";
                      }
                      else{
                        echo "<span style='color:green'>Si</span>";
                      }
                    ?>
                </CENTER></td>
                <td><CENTER>
                    <?php
                      if ($result->nombre_padre==''){
                        echo "NINGUNO";
                      }
                      else{
                        echo $result->nombre_padre;
                      }
                    ?>
                </CENTER></td>
                <td><CENTER>
                    <?php
                      if ($result->estado=='0'){
                        echo "<span style='color:red'>Inactivo</span>";
                      }
                      else{
                        echo "<span style='color:green'>Activo</span>";
                      }
                    ?>
                </CENTER></td>
                <td><CENTER>
                    <?php
                      if ($result->utilizable=='0'){
                        echo "<span style='color:red'>No</span>";
                      }
                      else{
                        echo "<span style='color:green'>Si</span>";
                      }
                    ?>
                </CENTER></td>
                <td><CENTER>{{$result->moneda}}</CENTER></td>
                <td><CENTER>
                    <button class="btn btn-primary" onclick="{{$result->id}}" data-toggle='modal' data-target='#myModaledit'>Editar</button>
                    </CENTER></td>
                </TR>
                @endforeach
            </table>

        </div>
    </div>
</div>

           </div>
        </div>
      </div>
  </div><!-- /.row -->
</div><!-- /.box-body -->
@endsection