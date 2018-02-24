@extends ('layouts.inicio')
@section ('css')
{!!Html::style('css/file-explore.css')!!}
{!!Html::style('jQueryContextMenu/dist/jquery.contextMenu.css')!!}
@endsection
@section ('contenido')
<div class="col-md-12">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">CONTABILIDAD</h3>
            <div class="box-tools pull-right">

            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">

@include('alerts.cargando')
@include('modulocontable.centrocosto.modal')
@if(Session::has('message'))

<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    {{Session::get('message')}}
</div>
@endif

    <button class='btn btn-success' onclick="buscarultimocentrocosto()" data-toggle='modal' data-target='#myModal'>AGREGAR</button>

    <div class="container" >
      <h2>Centro de costo</h2>
      <?php
        $Arbol = new arbol();
        echo $Arbol::creararbol(0,$Elementos,"class='file-tree'");
      ?>
    </div>

           </div>
        </div>
      </div>
  </div><!-- /.row -->
</div><!-- /.box-body -->
@endsection

@section ('javascript')
{!!Html::script('js/centrocosto.js')!!}
{!!Html::script('js/file-explore.js')!!}
{!!Html::script('jQueryContextMenu/dist/jquery.contextMenu.js')!!}
{!!Html::script('jQueryContextMenu/dist/jquery.ui.position.js')!!}
@endsection