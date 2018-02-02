<!-- Tell the browser to be responsive to screen width -->
        <!-- <meta name="viewport" content="initial-scale=1, maximum-scale=1"> -->
              <!-- Bootstrap 3.3.5 -->
  {!!Html::style('css/bootstrap/bootstrap.css')!!}
        <!-- Font Awesome -->
        {!!Html::style('css/font-awesome.min.css')!!}
        <!-- Theme style -->
        {!!Html::style('css/plugins/AdminLTE.min.css')!!}
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        {!!Html::style('css/plugins/_all-skins.min.css')!!}
        {!!Html::style('css/bootstrap/bootstrap-select.min.css')!!}
        {!!Html::style('css/plugins/toastr.css')!!}
           {!!Html::style('css/plugins/jquery-jvectormap-2.0.3.css')!!}



     
        <link rel="shortcut icon" href="{{asset('images/sinfondo.png')}}">

        <link rel="apple-touch-icon" href="{{asset('images/sinfondo.png')}}">



 {!!Html::style('css/cargando.css')!!}
  @include('alerts.cargando')
  @include('alerts.success')
@include('alerts.request')
@include('alerts.errors')
<?php 
$contador=0;
$tablalote=DB::select('SELECT point,estado FROM `lote` where fase=1 ');

 
 switch($opcion){
      case "1": ?>



<div class="panel panel-success">
     <div class="panel-heading">
<h2 style="font-weight: bold;text-align:center">FASE 1</h2>

          
        
    </div>  
  <div class="panel-body">
                 <ul class="nav nav-pills">
           <li class=" pull-left">  <a  href="../seccion1/1" id='btnActualizar' class="btn btn-primary" >FASE 1</a></li>
                 
           <li class=" pull-left">  <a  href="../seccion2/1" id='btnActualizar' class="btn btn-primary" >FASE 2</a></li>
        <li  class=" pull-left"> <a href="../seccion3/1" id='btnActualizar' class="btn btn-primary" >FASE 3</a></li>
        <li  class=" pull-right"> <a href="../" id='btnAgregar' class="btn btn-warning"  >VOLVER</a></li>
               
         


       
        </ul>    
</div>
<!--   <div class="panel-footer">Pie del panel</div> -->
</div>
                     
     


<?php break;
case "2":
  ?>
     {!!Html::script('js/lote.js')!!}
 @include('lote.modal')

   <button disabled id='btnAgregar' class="btn btn-success" data-toggle='modal' data-target='#myModal' onclick="cargardatos() ">AGREGAR</button>
 <button disabled id='btnActualizar' class="btn btn-primary" data-toggle='modal' data-target='#myModalActualizar' onclick="CargarModalActualizar()">ACTUALIZAR</button>    

<?php break;
case "3":


  ?>
 @include('venta.modal')



{!!Html::script('js/venta_lote.js')!!}
<input type="hidden" value="{{URL::to('vender_lote')}}" id="url">
<input type="hidden" value="{{URL::to('plan_pago')}}" id="urlplan_pago">

 <button  onclick="redireccionar()" id='btnVender' class="btn btn-success" disabled >VENDER</button>        
<button  onclick="redireccionarPlanPago()" id='btnPlanPago' class="btn btn-warning" disabled >Plan de pago</button>  
 <?php   break;
}
  ?>


   <div class="col-md-9 col-sm-8">
                  <div class="pad">
                       @include('mapas.mapas')
                    <!-- Map will be created here -->
                    <div id="world-map-markers" style="height: 325px;">
                        

                    </div>
                  </div>
                </div>
 




  {!!Html::script('js/plugins/jquery.min.js')!!}
           
  {!!Html::script('js/plugins/toastr.min.js')!!}
   
        <!-- Bootstrap 3.3.5 -->
        {!!Html::script('js/bootstrap/bootstrap.min.js')!!}
        {!!Html::script('js/bootstrap/bootstrap-select.min.js')!!}
          {!!Html::script('js/plugins/jquery-jvectormap-2.0.3.min.js')!!}

         <script>
    $(function(){
      // $('#world-map').vectorMap({map: 'world_mill'});
       $('#world-map-markers').vectorMap({
    map: 'world_mill_en',
    normalizeFunction: 'polynomial',
    hoverOpacity: 0.7,
    hoverColor: false,
    backgroundColor: 'transparent',
    regionStyle: {
      initial: {
        fill: 'rgba(210, 214, 222, 1)',
        "fill-opacity": 1,
        stroke: 'none',
        "stroke-width": 0,
        "stroke-opacity": 1
      },
      hover: {
        "fill-opacity": 0.7,
        cursor: 'pointer'
      },
      selected: {
        fill: 'yellow'
      },
      selectedHover: {}
    },
    markerStyle: {
      initial: {
        fill: '#00a65a',
        stroke: '#111'
      }
    },
    markers: [
      {latLng: [41.90, 12.45], name: 'Vatican City'},
      {latLng: [43.73, 7.41], name: 'Monaco'},
      {latLng: [-0.52, 166.93], name: 'Nauru'},
      {latLng: [-8.51, 179.21], name: 'Tuvalu'},
      {latLng: [43.93, 12.46], name: 'San Marino'},
      {latLng: [47.14, 9.52], name: 'Liechtenstein'},
      {latLng: [7.11, 171.06], name: 'Marshall Islands'},
      {latLng: [17.3, -62.73], name: 'Saint Kitts and Nevis'},
      {latLng: [3.2, 73.22], name: 'Maldives'},
      {latLng: [35.88, 14.5], name: 'Malta'},
      {latLng: [12.05, -61.75], name: 'Grenada'},
      {latLng: [13.16, -61.23], name: 'Saint Vincent and the Grenadines'},
      {latLng: [13.16, -59.55], name: 'Barbados'},
      {latLng: [17.11, -61.85], name: 'Antigua and Barbuda'},
      {latLng: [-4.61, 55.45], name: 'Seychelles'},
      {latLng: [7.35, 134.46], name: 'Palau'},
      {latLng: [42.5, 1.51], name: 'Andorra'},
      {latLng: [14.01, -60.98], name: 'Saint Lucia'},
      {latLng: [6.91, 158.18], name: 'Federated States of Micronesia'},
      {latLng: [1.3, 103.8], name: 'Singapore'},
      {latLng: [1.46, 173.03], name: 'Kiribati'},
      {latLng: [-21.13, -175.2], name: 'Tonga'},
      {latLng: [15.3, -61.38], name: 'Dominica'},
      {latLng: [-20.2, 57.5], name: 'Mauritius'},
      {latLng: [26.02, 50.55], name: 'Bahrain'},
      {latLng: [0.33, 6.73], name: 'São Tomé and Príncipe'}
    ]
  });
    });

  </script>
          {!!Html::script('js/plugins/jquery-jvectormap-world-mill-en.js')!!}

        <!-- AdminLTE App -->
        <script src="{{asset('js/plugins/app.js')}}"></script>
<script type="text/javascript">
  $('#loading').css('display','none');
</script>


