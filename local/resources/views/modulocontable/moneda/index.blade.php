@extends ('layouts.inicio')
@section ('contenido')
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
                @include('modulocontable.moneda.modal')
                <button class="btn btn-success" data-toggle='modal' data-target='#myModal'>
                    <i class="fa fa-plus-square" aria-hidden="true"></i>     
                </button>
               
		<div class="row">	
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">	
			<H1>TIPO DE CAMBIO</H1>
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						
						<th><center>TIPO DE CAMBIO</center></th>
						<th><center>FECHA </center></th>
						<th><center>OPERACION</center></th>
					</thead>
					@foreach($moneda as $mod)
					<tr>
						
						<td><center>{{ $mod->tipo_cambio}}</center></td>
						<td><center>{{ $mod->fecha}}</center></td>
						
						<td><CENTER>
						{!!link_to_route('moneda.edit', $title = 'Editar', $parameters = $mod->id, $attributes = ['class'=>'btn btn-primary'])!!}
						</CENTER></td>
					</tr>
					@endforeach
				</table>
	{!!$moneda->render()!!}
			</div>

		</div>
	</div>


           </div>
        </div>
      </div>
  </div><!-- /.row -->
</div><!-- /.box-body -->
@endsection
