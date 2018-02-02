@extends('layouts.inicio')
	
	@section('contenido')
<style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
   
    </style>

        @if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	{{Session::get('message')}}
</div>
@endif
 @include('alerts.errors')
 @include('empleado.modal')
<section class="content-header">
    <h1>
        GESTION DE BIENES RAICES
        <small>Preview</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Bienes Raicez</a></li>
        <li class="active">GESTION DE BIENES RAICES</li>
    </ol>
</section>

<div class="col-md-12">
    <div class="box box box-info">
        <div class="box-header with-border">
            <h3 class="box-title"></h3>
            <div class="box-tools pull-right">

            </div>
        </div>
<div class="box-body">
<div class="row">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="panel panel-success" style="text-transform: uppercase;">
<div class="panel-heading">

<strong>DATOS DEL CLIENTE</strong>  
     
  </div>  
  <div class="panel-body">
    
    <div class="row">
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <section>
        <!-- <input type="hidden" name="idTipoCambio" value=<?php// echo $tipoCambio[0]->id ?>> -->
        <!-- <input type="hidden" name="CuotaMinima" value=<?php //echo $cuotaMinima[0]->porcentaje; ?>> -->

           <div class="col-sm-2 ">
          <div class="form-group">
          <label for="ci">CEDULA DE IDENTIDAD *</label>
          <input type="text" name="idCliente" class="form-control">
             

          </div>        
          </div>
           <div class="col-sm-2 ">
           <div class="form-group">
                {!!Form::label('expedido','Expedido:')!!}
                <select name="expedido" class="form-control">
                    <option value="SC">[SC] SANTA CRUZ</option>
                    <option value="LP">[LP] LA PAZ</option>
                    <option value="CB">[CB] COCHABAMBA</option>
                    <option value="BN">[BN] BENI</option>
                    <option value="CH">[CH] CHUQUISACA</option>
                    <option value="PA">[PA] PANDO</option>
                    <option value="TJ">[TJ] TARIJA</option>
                    <option value="PT">[PT] POTOSI</option>
                    <option value="OR">[OR] ORURO</option>
                    <option value="EX">[EX] EXTRANJERO</option>
                </select>
            </div>       
            </div>  
          <div class="col-sm-2 ">
          <div class="form-group">
          <label for="nacionalidad">Pais de origen *</label>
                <select name="idPais" class="form-control"  id="nacionalidad">
                   
                </select>
          </div>        
          </div>     
          <div class="col-sm-3 ">
          <div class="form-group">
         
           <div class="form-group">
                <label>Fecha Nac. *</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="fechaNacimiento" class="form-control pull-right" id="datepicker">
                </div>
                <!-- /.input group -->
              </div>
          </div>        
          </div>
          
          <div class="col-sm-3 ">
          <div class="form-group">
          <label for="lugarProcedencia">Ciudad de Procedencia*</label>
          <input  type="text"  class="form-control" name="lugarProcedencia" placeholder="" >  
          </div>        
          </div>
           
        </section>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <section>
   
          
          <div class="col-sm-3 ">
          <div class="form-group">
          <label for="nombre">Nombres *</label>
          <input  type="text"  class="form-control" name="nombre" placeholder="" >  
          </div>        
          </div>
          <div class="col-sm-3 ">
          <div class="form-group">
          <label for="apellidos">Apellidos *</label>
          <input type="text"  class="form-control" name="apellidos" >  
          </div>        
          </div>
            <div class="col-sm-2 ">
          <div class="form-group">
          <label for="estadoCivil">Estado Civil *</label>
         <select name="estadoCivil" class="form-control" id="estadoCivil">
         <option value="s">SOLTERO (A)</option>
         <option value="c">CASADO (A)</option>
         <option value="d">DIVORCIADO (A)</option>
         <option value="v">VIUDO (A)</option>

         </select>
          </div>        
          </div>
          <div class="col-sm-4 ">
          <div class="form-group">
          <label for="genero">Genero *</label>
<div class="radio">
  <label>
    <input type="radio" name="genero" value="m" id="m" checked="">
    Masculino
    

  </label>
  <label>
   
    <input type="radio" name="genero" value="f"  id="f">
    Femenino

  </label>
</div>
          </div>        
          </div>
           
        </section>
      </div>
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <section>
        <div class="col-sm-3 ">
          <div class="form-group">
          <label for="ocupacion">Ocupacion</label>
          <input  type="text"  class="form-control" name="ocupacion"  placeholder="Cargo " >  
          </div>        
          </div>
        <div class="col-sm-3 ">
          <div class="form-group">
          <label for="domicilio">Domicilio *</label>
          <input   type="text"  class="form-control" name="domicilio"  placeholder="Direccion del Domicilio actual" >  
          </div>        
          </div>
          <div class="col-sm-2 ">
          <div class="form-group">
          <label for="celular">Celular *</label>
          <input  type="text"  class="form-control" name="celular"  placeholder="Celular del Cliente">  
          </div>        
          </div>

          <div class="col-sm-2 ">
          <div class="form-group">
          <label for="celular_ref">Celular Ref:</label>
          <input  type='text'  class="form-control" name="celular_ref"  placeholder="Telefono de referencia " >  
          </div>        
          </div>
          
             <div class="col-sm-2 ">
          <div class="form-group">
          <label for="nit">NIT</label>
          <input  type="text"  class="form-control" name="nit"  placeholder="Nit " >  
          </div>        
          </div>
          
        </section>
  
      </div>

    </div>                  
                     
</div>
  <div class="panel-footer"></div>
            </div>

       <div class="panel panel-default">
        <div class="panel-heading">

<strong>DATOS DEL ANUENTE(OPCIONAL)</strong>  
     
  </div>  
  <div class="panel-body">
    <div  class="col-sm-12 "> 
      <div class="col-sm-2 ">
          <div class="form-group">
          <label for="ci">CEDULA DE IDENTIDAD *</label>
          <input type="text" name="idCliente" class="form-control">
             

          </div>        
          </div>
           <div class="col-sm-2 ">
           <div class="form-group">
                {!!Form::label('expedido','Expedido:')!!}
                <select name="expedido" class="form-control">
                    <option value="SC">[SC] SANTA CRUZ</option>
                    <option value="LP">[LP] LA PAZ</option>
                    <option value="CB">[CB] COCHABAMBA</option>
                    <option value="BN">[BN] BENI</option>
                    <option value="CH">[CH] CHUQUISACA</option>
                    <option value="PA">[PA] PANDO</option>
                    <option value="TJ">[TJ] TARIJA</option>
                    <option value="PT">[PT] POTOSI</option>
                    <option value="OR">[OR] ORURO</option>
                    <option value="EX">[EX] EXTRANJERO</option>
                </select>
            </div>       
            </div> 

            <div class="col-sm-4 ">
          <div class="form-group">
          <label for="ci">NOMBRES *</label>
          <input type="text" name="idCliente"  class="form-control">
          </div>        
          </div>

             <div class="col-sm-4 ">
          <div class="form-group">
          <label for="ci">APELLIDOS *</label>
          <input type="text" name="idCliente"  class="form-control">
             

          </div>        
          </div>
            </div> 
  </div>
  <div class="panel-footer"></div>
</div>



  <div class="panel panel-default">
        <div class="panel-heading">

<strong>DATOS TRANSACCIONALES</strong>  
     
  </div>  
  <div class="panel-body">
    <div  class="col-sm-12 "> 

      <table class="table table-striped table-bordered table-condensed table-hover">
        <thead>
          <th>TIPO DE INMUEBLE</th>
          <th>TIPO DE CONTRATO</th>
          <th>MONEDA</th>
          <th>VALOR DE VENTA</th>
          <th>COMISION</th>
          <th>TOTAL</th>
          <th>FECHA LIMITE</th>
        </thead>
        <tbody>
          <td> <select class="form-control" onchange="agregarRequisitos(this)">
              <option>SELECCIONE UN TIPO DE INMUEBLE</option>
              <option value="CASA">CASA</option>
              <option value="TERRENO">TERRENO</option>
              <option value="DEPARTAMENTO">DEPARTAMENTO</option>
              <option value="PROPIEDAD">PROPIEDAD</option>
            </select> </td>
            <td>
                <select class="form-control">
              <option>SELECCIONE UN TIPO DE CONTRATO</option>
              <option>VENTA</option>
              <option>ALQUILER</option>
              <option>ANTICRETICO</option>
            </select>
            </td>
            <td>
                <select class="form-control">
              <option>BS</option>
              <option>$USD</option>
            </select>
            </td>
            <td>
              <input type="number" name="idCliente"  class="form-control" onchange="CalcularComision(this)">
            </td>
            <td>
              <input type="number" name="comision" id="comision" class="form-control" value="3">
            </td>
            <td>
                <input type="number" name="totalVenta" id="totalVenta" class="form-control">
            </td>
            <td>
              <input type="date" name="" class="form-control">
            </td>
        </tbody>
      </table>
      
      <table class="table table-striped table-bordered table-condensed table-hover">
        <thead id="theadRequisitos">
          
        </thead>
        <tbody id="tbodyRequisitos">
          
        </tbody>
      </table>

          </div>
            </div> 
  </div>
  <div class="panel-footer"></div>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	
	    <div class="panel panel-success" style="text-transform: uppercase;">
<div class="panel-heading">

<strong>DATOS DEL INMUEBLE</strong>  
     
  </div>  
  <div class="panel-body">
    
    <div class="row">
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <section>
        <!-- <input type="hidden" name="idTipoCambio" value=<?php// echo $tipoCambio[0]->id ?>> -->
        <!-- <input type="hidden" name="CuotaMinima" value=<?php //echo $cuotaMinima[0]->porcentaje; ?>> -->
        <table class="table table-striped table-bordered table-condensed table-hover">
          <th>DEPARTAMENTO</th>
          <th>PROVINCIA</th>
          <th>UV</th>
          <th>DIRECCION</th>
          <th>ANILLO</th>
          <th>ZONA</th>
          <tbody>
            <td> <select class="form-control">
                      <option>SANTA CRUZ</option>
                      <option>BENI</option>
                      <option>PANDO</option>
                      <option>LA PAZ</option>
                      <option>ORURO</option>
                      <option>POTOSI</option>
                      <option>COCHABAMBA</option>
                      <option>TARIJA</option>
                      <option>CHUQUISACA</option>
                    </select></td>
                    <td>
                      <input type="text" class="form-control" name="">
                    </td>
                     <td>
                      <input type="text" class="form-control" name="">
                    </td>
                     <td>
                      <input type="text" class="form-control" name="">
                    </td>
                     <td>
                      <input type="text" class="form-control" name="">
                    </td>
                    <td>
                      <input type="text" class="form-control" name="">
                    </td>
          </tbody>
        </table>
           
          </div>
           
                  
        
          </div>
         
  
        </section>
      </div>
     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <!-- <input type="hidden" name="idTipoCambio" value=<?php// echo $tipoCambio[0]->id ?>> -->
        <!-- <input type="hidden" name="CuotaMinima" value=<?php //echo $cuotaMinima[0]->porcentaje; ?>> -->

     
          </div>
          
          </div>
          
        </section>
      </div>
    </div>                  
                     
</div>
  <div class="panel-footer"></div>
            </div>
</div>
    </div><!-- /.row -->
    </div><!-- /.box-body -->
  </div>
</div>


    <script>
      // var customLabel = {
      //   restaurant: {
      //     label: 'R'
      //   },
      //   bar: {
      //     label: 'B'
      //   }
      // };

      //   function initMap() {
      //   var map = new google.maps.Map(document.getElementById('map'), {
      //     center: new google.maps.LatLng(-33.863276, 151.207977),
      //     zoom: 12
      //   });
      //   var infoWindow = new google.maps.InfoWindow;

      //     // Change this depending on the name of your PHP or XML file
      //     downloadUrl('https://storage.googleapis.com/mapsdevsite/json/mapmarkers2.xml', function(data) {
      //       var xml = data.responseXML;
      //       var markers = xml.documentElement.getElementsByTagName('marker');
      //       Array.prototype.forEach.call(markers, function(markerElem) {
      //         var name = markerElem.getAttribute('name');
      //         var address = markerElem.getAttribute('address');
      //         var type = markerElem.getAttribute('type');
      //         var point = new google.maps.LatLng(
      //             parseFloat(markerElem.getAttribute('lat')),
      //             parseFloat(markerElem.getAttribute('lng')));

      //         var infowincontent = document.createElement('div');
      //         var strong = document.createElement('strong');
      //         strong.textContent = name
      //         infowincontent.appendChild(strong);
      //         infowincontent.appendChild(document.createElement('br'));

      //         var text = document.createElement('text');
      //         text.textContent = address
      //         infowincontent.appendChild(text);
      //         var icon = customLabel[type] || {};
      //         var marker = new google.maps.Marker({
      //           map: map,
      //           position: point,
      //           label: icon.label
      //         });
      //         marker.addListener('click', function() {
      //           infoWindow.setContent(infowincontent);
      //           infoWindow.open(map, marker);
      //         });
      //       });
      //     });
      //   }



      // function downloadUrl(url, callback) {
      //   var request = window.ActiveXObject ?
      //       new ActiveXObject('Microsoft.XMLHTTP') :
      //       new XMLHttpRequest;

      //   request.onreadystatechange = function() {
      //     if (request.readyState == 4) {
      //       request.onreadystatechange = doNothing;
      //       callback(request, request.status);
      //     }
      //   };

      //   request.open('GET', url, true);
      //   request.send(null);
      // }

     // function doNothing() {}
    </script>
  <!--   <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnexZeVOJNJpFua0ZC_NqWuxvD6n3mz3s&callback=initMap">
    </script> -->

        <script src="{{asset('js/bienesRaicez.js')}}"></script> 
<script type="text/javascript">
  $('#bodyPrincipal').removeClass();
  $('#bodyPrincipal').addClass('hold-transition skin-blue sidebar-collapse sidebar-mini');
</script>
	@endsection