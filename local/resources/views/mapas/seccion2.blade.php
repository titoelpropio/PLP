<!-- Tell the browser to be responsive to screen width -->

        <!-- <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        -->

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
         {!!Html::script('js/plugins/jquery.min.js')!!}
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
            <h2 style="font-weight: bold;text-align:center">
            LA BARRANCA FASE 2</h2>
          </div>
          <div class="panel-body">
           <ul class="nav nav-pills">
             <li class=" pull-left">
              <a  href="../seccion1/1" id='btnActualizar' class="btn btn-info" >
              URBANIZACION VIRGEN DE GUADALUPE</a>
            </li>
            <li class=" pull-left">
              <a  href="../seccion2/1" id='btnActualizar' class="btn btn-primary" >
              FASE 2</a>
            </li>
            <li  class=" pull-left">
             <a href="../seccion3/1" id='btnActualizar' class="btn btn-primary" >
             FASE 3</a>
           </li>
           <li  class=" pull-right">
             <a href="../" id='btnAgregar' class="btn btn-warning"  >
             VOLVER</a>
           </li>
         </ul>
       </div>
<!--   <div class="panel-footer">
Pie del panel</div>
-->
</div>
<!-- <div style="float:left; margin-left:5px;margin-top:5px;">

 <a  href="../seccion2/1" id='btnActualizar' class="btn btn-primary" >
FASE 2</a>

 <a href="../seccion3/1" id='btnActualizar' class="btn btn-primary" >
FASE 3</a>

 </div>

 <div style="float:right; margin-right:5px;margin-top:5px;">

<a href="../" id='btnAgregar' class="btn btn-warning"  >
VOLVER</a>


 </div>
-->

    <!-- 
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<section>

<div class="col-sm-2">

</div>

<div class="col-sm-2">

<label for="">
NÚMERO DE LOTE</label>

</div>

<div class="col-sm-2">

<label for="">
NÚMERO DE MANZANO</label>

</div>

</div>

</section>

</div >


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<section>

<div class="col-sm-2">

<button disabled id="btnreservar" class="btn btn-success" data-toggle='modal' data-target='#myModalReservar' onclick="CargarDatos()">
RESERVAR</button>

</div>

<div class="col-sm-2">


<input type="number" class="form-control" id="nro_lote2" >

</div>

<div class="col-sm-2">

<input type="number" class="form-control" id="nro_manzano2" >

</div>

<button id="btnbuscarlote" class="btn btn-success"  onclick="Pintar()" >
BUSCAR</button>

</div>

</section>

</div >
-->

<?php break;
case "2":
?>

{!!Html::script('js/lote.js')!!}
@include('lote.modal')

<button disabled id='btnAgregar' class="btn btn-success" data-toggle='modal' data-target='#myModal' onclick="cargardatos() ">
AGREGAR</button>

<button disabled id='btnActualizar' class="btn btn-primary" data-toggle='modal' data-target='#myModalActualizar' onclick="CargarModalActualizar()">
ACTUALIZAR</button>


<?php break;
case "3":


?>

@include('venta.modal')



{!!Html::script('js/venta_lote.js')!!}
<input type="hidden" value="{{URL::to('vender_lote')}}" id="url">

<input type="hidden" value="{{URL::to('plan_pago')}}" id="urlplan_pago">


<button  onclick="redireccionar()" id='btnVender' class="btn btn-success" disabled >
VENDER</button>

<button  onclick="redireccionarPlanPago()" id='btnPlanPago' class="btn btn-warning" disabled >
Plan de pago</button>

<?php   break;
}
?>




<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2308 1532.28">
    <defs>
        <style>.cls-1{fill:#5fb5d1;opacity:0.39;}.cls-10,.cls-2,.cls-25,.cls-4,.cls-8{fill:none;}.cls-11,.cls-14,.cls-15,.cls-16,.cls-2,.cls-26,.cls-4,.cls-6{stroke:#000;}.cls-11,.cls-13,.cls-15,.cls-16,.cls-2,.cls-24,.cls-25,.cls-26,.cls-5,.cls-6{stroke-miterlimit:10;}.cls-2{stroke-width:7px;}.cls-15,.cls-24,.cls-3,.cls-9{fill:#f29100;}.cls-10,.cls-13,.cls-17,.cls-24,.cls-25,.cls-3{stroke:#1d1d1b;stroke-width:0.75px;}.cls-10,.cls-14,.cls-17,.cls-3,.cls-4,.cls-8{stroke-linecap:round;stroke-linejoin:round;}.cls-14,.cls-4{stroke-width:0.71px;}.cls-103,.cls-110,.cls-114,.cls-5,.cls-6,.cls-64,.cls-71,.cls-87{isolation:isolate;}.cls-5{font-size:12px;fill:#fff;stroke:#fffaff;}.cls-11,.cls-5{stroke-width:0.5px;}.cls-5,.cls-6{font-family:ArialMT, Arial;}.cls-26,.cls-6{font-size:5px;stroke-width:0.25px;}.cls-7{letter-spacing:-0.07em;}.cls-8{stroke:#5ea30f;stroke-width:0px;}.cls-11,.cls-13,.cls-14,.cls-16,.cls-17{fill:#099939;}.cls-12{letter-spacing:-0.09em;}.cls-18{font-size:14.95px;}.cls-18,.cls-20{fill:#fffaff;}.cls-103,.cls-110,.cls-114,.cls-18,.cls-20,.cls-26,.cls-27,.cls-48,.cls-64,.cls-71,.cls-87{font-family:MyriadPro-Regular, Myriad Pro;}.cls-19{letter-spacing:-0.05em;}.cls-20{font-size:13.46px;}.cls-21{letter-spacing:0em;}.cls-22{letter-spacing:0em;}.cls-23{letter-spacing:-0.03em;}.cls-27{font-size:4.58px;}.cls-27,.cls-48{fill:gray;}.cls-28{letter-spacing:0em;}.cls-29{letter-spacing:0em;}.cls-30{letter-spacing:-0.01em;}.cls-31{letter-spacing:-0.08em;}.cls-32{letter-spacing:0em;}.cls-33{letter-spacing:-0.01em;}.cls-34{letter-spacing:-0.05em;}.cls-35{letter-spacing:-0.01em;}.cls-36{letter-spacing:-0.04em;}.cls-37{letter-spacing:0.02em;}.cls-38{letter-spacing:0em;}.cls-39{letter-spacing:-0.04em;}.cls-40{letter-spacing:-0.02em;}.cls-41{letter-spacing:0.01em;}.cls-42{letter-spacing:-0.03em;}.cls-43{letter-spacing:-0.07em;}.cls-44{letter-spacing:-0.05em;}.cls-45{letter-spacing:0em;}.cls-46{letter-spacing:-0.04em;}.cls-47{letter-spacing:-0.02em;}.cls-48{font-size:3.21px;}.cls-49{letter-spacing:0em;}.cls-50{letter-spacing:0.01em;}.cls-51{letter-spacing:-0.01em;}.cls-52{letter-spacing:-0.03em;}.cls-53{letter-spacing:0em;}.cls-54{letter-spacing:-0.04em;}.cls-55{letter-spacing:-0.01em;}.cls-56{letter-spacing:-0.02em;}.cls-57{letter-spacing:-0.06em;}.cls-58{letter-spacing:-0.04em;}.cls-59{letter-spacing:-0.06em;}.cls-60{letter-spacing:-0.09em;}.cls-61{letter-spacing:0.01em;}.cls-62{letter-spacing:0em;}.cls-63{letter-spacing:-0.01em;}.cls-64{font-size:7px;}.cls-103,.cls-110,.cls-114,.cls-64,.cls-71,.cls-87{fill:#6d6d6d;}.cls-65{letter-spacing:-0.05em;}.cls-66{letter-spacing:-0.01em;}.cls-67{letter-spacing:0em;}.cls-68{letter-spacing:-0.01em;}.cls-69{letter-spacing:0em;}.cls-70{letter-spacing:-0.03em;}.cls-71{font-size:4.58px;}.cls-72{letter-spacing:0em;}.cls-73{letter-spacing:-0.08em;}.cls-74{letter-spacing:-0.02em;}.cls-75{letter-spacing:-0.02em;}.cls-76{letter-spacing:0em;}.cls-77{letter-spacing:0.02em;}.cls-78{letter-spacing:-0.03em;}.cls-79{letter-spacing:0em;}.cls-80{letter-spacing:0em;}.cls-81{letter-spacing:-0.01em;}.cls-82{letter-spacing:-0.07em;}.cls-83{letter-spacing:0.01em;}.cls-84{letter-spacing:0em;}.cls-85{letter-spacing:-0.04em;}.cls-86{letter-spacing:-0.02em;}.cls-87{font-size:3.2px;}.cls-88{letter-spacing:0em;}.cls-89{letter-spacing:-0.04em;}.cls-90{letter-spacing:-0.06em;}.cls-91{letter-spacing:0.01em;}.cls-92{letter-spacing:-0.03em;}.cls-93{letter-spacing:0em;}.cls-94{letter-spacing:0em;}.cls-95{letter-spacing:0em;}.cls-96{letter-spacing:-0.09em;}.cls-97{letter-spacing:0.01em;}.cls-98{letter-spacing:-0.06em;}.cls-99{letter-spacing:0.01em;}.cls-100{letter-spacing:0em;}.cls-101{letter-spacing:0em;}.cls-102{letter-spacing:-0.08em;}.cls-103{font-size:4px;}.cls-104{letter-spacing:-0.05em;}.cls-105{letter-spacing:-0.01em;}.cls-106{letter-spacing:0em;}.cls-107{letter-spacing:0.01em;}.cls-108{letter-spacing:-0.03em;}.cls-109{letter-spacing:-0.08em;}.cls-110{font-size:3.66px;}.cls-111{letter-spacing:0em;}.cls-112{letter-spacing:-0.02em;}.cls-113{letter-spacing:0.01em;}.cls-114{font-size:3.2px;}.cls-115{letter-spacing:0em;}.cls-116{letter-spacing:0.01em;}.cls-117{letter-spacing:-0.06em;}</style>
    </defs>
    <title>URB. LA BARRANCA-Face 2</title>
    <g id="Capa_3" data-name="Capa 3">
        <path class="cls-1" d="M402,198.88,342.14,1340.15s0,44.77,73.5,47.85,1356.14,64.58,1356.14,64.58,26.39,4,50.59-28,187.69-262.91,187.69-262.91,18-28.64,0-40.6-51.86-22.55-41.68-39,24.82-29.71,13-40.33-31.43-20.82-42.62-19.47-115-1.73-115-1.73S1456.52,917.06,1236.06,618.6c-28.47-39-107.75-113.74-130.36-125.11S770.87,322.19,705,231.17c-38.88-40-160.36-54.55-187.36-32.29-3,1.26-1.42-45.24-1.42-45.24s-4.5-31.5-25.54-22.5S402.68,185.43,402,198.88Z"/>
        <path class="cls-2" d="M387.57,157.92,326.72,1348.42s0,46.7,74.74,49.91,1379,67.36,1379,67.36,26.84,4.14,51.44-29.22,190.85-274.25,190.85-274.25,18.3-29.88,0-42.35-52.73-23.52-42.38-40.68,25.24-31,13.22-42.07-32-21.71-43.34-20.31-116.94-1.8-116.94-1.8-373.43-107.92-597.6-419.26c-28.95-40.66-109.57-118.64-132.55-130.5S762.69,286.56,695.7,191.61c-39.53-41.76-140.33-56-167.79-32.76-3.05,1.31,0-53.11,0-53.11s-9.63-42.26-50.16-18.47C457.58,99.11,388.29,143.89,387.57,157.92Z"/>
    </g>
    <g id="Capa_1" data-name="Capa 1">
        <g id="Capa_2" data-name="Capa 2">
            <g id="MZ-8">
                <path class="cls-3" d="M397.68,972l45.4,2.3s12.8-.6,11.5,13.5l-10.2,203s-.9,9.4-11.2,9.2l-47.1-2.4s-13.3-.3-12.8-14l10.1-198.8C383.28,984.85,383.28,971.55,397.68,972Z"/>
                <rect class="cls-4" x="395.23" y="997.79" width="13" height="32.4" transform="translate(-631.09 1364.48) rotate(-87.13)"/>
                <rect class="cls-4" x="427.61" y="999.47" width="13" height="32.4" transform="translate(-602.01 1398.4) rotate(-87.13)"/>
                <rect class="cls-4" x="394.53" y="1010.79" width="13" height="32.4" transform="translate(-644.74 1376.13) rotate(-87.13)"/>
                <rect class="cls-4" x="426.91" y="1012.37" width="13" height="32.4" transform="translate(-615.56 1409.96) rotate(-87.13)"/>
                <rect class="cls-4" x="393.94" y="1023.69" width="13" height="32.4" transform="translate(-658.19 1387.79) rotate(-87.13)"/>
                <rect class="cls-4" x="426.31" y="1025.37" width="13" height="32.4" transform="translate(-629.11 1421.71) rotate(-87.13)"/>
                <rect class="cls-4" x="393.23" y="1036.69" width="13" height="32.4" transform="translate(-671.84 1399.44) rotate(-87.13)"/>
                <rect class="cls-4" x="425.61" y="1038.27" width="13" height="32.4" transform="translate(-642.66 1433.27) rotate(-87.13)"/>
                <rect class="cls-4" x="392.64" y="1049.59" width="13" height="32.4" transform="translate(-685.3 1411.1) rotate(-87.13)"/>
                <rect class="cls-4" x="425.01" y="1051.27" width="13" height="32.4" transform="translate(-656.22 1445.02) rotate(-87.13)"/>
                <rect class="cls-4" x="391.93" y="1062.59" width="13" height="32.4" transform="translate(-698.95 1422.74) rotate(-87.13)"/>
                <rect class="cls-4" x="424.31" y="1064.17" width="13" height="32.4" transform="translate(-669.77 1456.58) rotate(-87.13)"/>
                <rect class="cls-4" x="391.34" y="1075.5" width="13" height="32.4" transform="translate(-712.4 1434.41) rotate(-87.13)"/>
                <rect class="cls-4" x="423.71" y="1077.18" width="13" height="32.4" transform="translate(-683.33 1468.33) rotate(-87.13)"/>
                <rect class="cls-4" x="390.63" y="1088.5" width="13" height="32.4" transform="translate(-726.05 1446.05) rotate(-87.13)"/>
                <rect class="cls-4" x="423.01" y="1090.07" width="13" height="32.4" transform="translate(-696.87 1479.89) rotate(-87.13)"/>
                <rect class="cls-4" x="390.09" y="1101.48" width="13" height="32.4" transform="translate(-739.54 1457.84) rotate(-87.13)"/>
                <rect class="cls-4" x="422.46" y="1103.06" width="13" height="32.4" transform="translate(-710.36 1491.67) rotate(-87.13)"/>
                <rect class="cls-4" x="389.39" y="1114.38" width="13" height="32.4" transform="translate(-753.08 1469.39) rotate(-87.13)"/>
                <rect class="cls-4" x="421.76" y="1115.96" width="13" height="32.4" transform="translate(-723.9 1503.23) rotate(-87.13)"/>
                <rect class="cls-4" x="388.79" y="1127.38" width="13" height="32.4" transform="translate(-766.64 1481.15) rotate(-87.13)"/>
                <rect class="cls-4" x="421.16" y="1128.96" width="13" height="32.4" transform="translate(-737.46 1514.98) rotate(-87.13)"/>
                <rect class="cls-4" x="388.09" y="1140.28" width="13" height="32.4" transform="translate(-780.19 1492.7) rotate(-87.13)"/>
                <rect class="cls-4" x="420.46" y="1141.86" width="13" height="32.4" transform="translate(-751.01 1526.54) rotate(-87.13)"/>
                <path class="cls-4" d="M378.18,1162.15l-1.1,22.4s-.6,10.3,10,10.4l5.6.3,1.6-32.4Z"/>
                <polygon class="cls-4" points="394.38 1162.95 392.68 1195.35 408.88 1196.15 410.48 1163.75 394.38 1162.95"/>
                <polygon class="cls-4" points="410.48 1163.75 408.88 1196.15 425.07 1196.95 426.68 1164.55 410.48 1163.75"/>
                <path class="cls-4" d="M425.08,1196.95l8.3.4s8.4.7,8.4-8.9l1.2-23-16.2-.8Z"/>
                <path class="cls-4" d="M385.88,1006.75l1.2-23s.8-9.4,10.8-8.9l5.8.3-1.7,32.4Z"/>
                <polygon class="cls-4" points="403.77 975.15 401.98 1007.55 418.27 1008.35 419.88 975.95 403.77 975.15"/>
                <polygon class="cls-4" points="419.88 975.95 418.18 1008.35 434.38 1009.15 436.07 976.75 419.88 975.95"/>
                <path class="cls-4" d="M436.08,976.75l8.6.4s7.6-.1,7.1,9.1l-1.3,23.7-16.2-.8Z"/>
                <g id="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 401.32, 1082.8)">MZ-8</text>
                </g>
                <g id="TEXT-2" data-name="TEXT">
                    <text class="cls-6" transform="translate(383.82 1183.99)">1</text>
                </g>
                <g id="TEXT-3" data-name="TEXT">
                    <text class="cls-6" transform="translate(393.58 1160.88)">2</text>
                </g>
                <g id="TEXT-4" data-name="TEXT">
                    <text class="cls-6" transform="translate(393.37 1148.09)">3</text>
                </g>
                <g id="TEXT-5" data-name="TEXT">
                    <text class="cls-6" transform="translate(394.11 1135.21)">4</text>
                </g>
                <g id="TEXT-6" data-name="TEXT">
                    <text class="cls-6" transform="translate(395.34 1122.03)">5</text>
                </g>
                <g id="TEXT-7" data-name="TEXT">
                    <text class="cls-6" transform="translate(396.07 1109.72)">6</text>
                </g>
                <g id="TEXT-8" data-name="TEXT">
                    <text class="cls-6" transform="translate(396.95 1096.26)">7</text>
                </g>
                <g id="TEXT-9" data-name="TEXT">
                    <text class="cls-6" transform="translate(397.13 1083.36)">8</text>
                </g>
                <g id="TEXT-10" data-name="TEXT">
                    <text class="cls-6" transform="translate(398.08 1071.23)">9</text>
                </g>
                <g id="TEXT-11" data-name="TEXT">
                    <text class="cls-6" transform="translate(398.01 1057.43)">10</text>
                </g>
                <g id="TEXT-12" data-name="TEXT">
                    <text class="cls-6" transform="translate(398.26 1044.37)">
                        <tspan class="cls-7">1</tspan>
                        <tspan x="2.41" y="0">1</tspan>
                    </text>
                </g>
                <g id="TEXT-13" data-name="TEXT">
                    <text class="cls-6" transform="translate(398.89 1031.55)">12</text>
                </g>
                <g id="TEXT-14" data-name="TEXT">
                    <text class="cls-6" transform="translate(399.26 1018.86)">13</text>
                </g>
                <g id="TEXT-15" data-name="TEXT">
                    <text class="cls-6" transform="translate(393.16 996)">14</text>
                </g>
                <g id="TEXT-16" data-name="TEXT">
                    <text class="cls-6" transform="translate(408.55 995.98)">15</text>
                </g>
                <g id="TEXT-17" data-name="TEXT">
                    <text class="cls-6" transform="translate(424.04 996.87)">16</text>
                </g>
                <g id="TEXT-18" data-name="TEXT">
                    <text class="cls-6" transform="translate(432.12 1020.52)">18</text>
                </g>
                <g id="TEXT-19" data-name="TEXT">
                    <text class="cls-6" transform="translate(430.89 1033.4)">19</text>
                </g>
                <g id="TEXT-20" data-name="TEXT">
                    <text class="cls-6" transform="translate(430.71 1046.54)">20</text>
                </g>
                <g id="TEXT-21" data-name="TEXT">
                    <text class="cls-6" transform="translate(430.01 1059.41)">21</text>
                </g>
                <g id="TEXT-22" data-name="TEXT">
                    <text class="cls-6" transform="translate(429.35 1072.07)">22</text>
                </g>
                <g id="TEXT-23" data-name="TEXT">
                    <text class="cls-6" transform="translate(428.77 1084.88)">23</text>
                </g>
                <g id="TEXT-24" data-name="TEXT">
                    <text class="cls-6" transform="translate(427.67 1097.65)">24</text>
                </g>
                <g id="TEXT-25" data-name="TEXT">
                    <text class="cls-6" transform="translate(427.1 1111.98)">25</text>
                </g>
                <g id="TEXT-26" data-name="TEXT">
                    <text class="cls-6" transform="translate(426.5 1124.45)">26</text>
                </g>
                <g id="TEXT-27" data-name="TEXT">
                    <text class="cls-6" transform="translate(426.16 1137.22)">27</text>
                </g>
                <g id="TEXT-28" data-name="TEXT">
                    <text class="cls-6" transform="translate(425.2 1149.9)">28</text>
                </g>
                <g id="TEXT-29" data-name="TEXT">
                    <text class="cls-6" transform="translate(424.55 1162.85)">29</text>
                </g>
                <g id="TEXT-30" data-name="TEXT">
                    <text class="cls-6" transform="translate(432.22 1186.5)">30</text>
                </g>
                <g id="TEXT-31" data-name="TEXT">
                    <text class="cls-6" transform="translate(415.56 1186.06)">31</text>
                </g>
                <g id="TEXT-32" data-name="TEXT">
                    <text class="cls-6" transform="translate(398.68 1184.52)">32</text>
                </g>
                <g id="TEXT-33" data-name="TEXT">
                    <text class="cls-6" transform="translate(440.68 997.68)">17</text>
                </g>
            </g>
            <g id="MZ-8-2" data-name="MZ-8">
                <path class="cls-3" d="M418.16,576.9l45.4,2.3s12.8-.6,11.5,13.5l-10.2,203s-.9,9.4-11.2,9.2l-47.1-2.4s-13.3-.3-12.8-14l10.1-198.8C403.76,589.7,403.76,576.4,418.16,576.9Z"/>
                <rect class="cls-4" x="415.72" y="602.64" width="13" height="32.4" transform="translate(-216.98 1009.56) rotate(-87.13)"/>
                <rect class="cls-4" x="448.09" y="604.32" width="13" height="32.4" transform="translate(-187.91 1043.49) rotate(-87.13)"/>
                <rect class="cls-4" x="415.01" y="615.64" width="13" height="32.4" transform="translate(-230.63 1021.21) rotate(-87.13)"/>
                <rect class="cls-4" x="447.39" y="617.22" width="13" height="32.4" transform="translate(-201.45 1055.04) rotate(-87.13)"/>
                <rect class="cls-4" x="414.42" y="628.55" width="13" height="32.4" transform="translate(-244.08 1032.87) rotate(-87.13)"/>
                <rect class="cls-4" x="446.79" y="630.22" width="13" height="32.4" transform="translate(-215.01 1066.8) rotate(-87.13)"/>
                <rect class="cls-4" x="413.72" y="641.54" width="13" height="32.4" transform="translate(-257.73 1044.52) rotate(-87.13)"/>
                <rect class="cls-4" x="446.09" y="643.12" width="13" height="32.4" transform="translate(-228.55 1078.35) rotate(-87.13)"/>
                <rect class="cls-4" x="413.12" y="654.45" width="13" height="32.4" transform="translate(-271.19 1056.18) rotate(-87.13)"/>
                <rect class="cls-4" x="445.49" y="656.13" width="13" height="32.4" transform="translate(-242.12 1090.1) rotate(-87.13)"/>
                <rect class="cls-4" x="412.41" y="667.45" width="13" height="32.4" transform="translate(-284.84 1067.83) rotate(-87.13)"/>
                <rect class="cls-4" x="444.79" y="669.03" width="13" height="32.4" transform="translate(-255.66 1101.66) rotate(-87.13)"/>
                <rect class="cls-4" x="411.82" y="680.35" width="13" height="32.4" transform="translate(-298.3 1079.49) rotate(-87.13)"/>
                <rect class="cls-4" x="444.19" y="682.03" width="13" height="32.4" transform="translate(-269.22 1113.41) rotate(-87.13)"/>
                <rect class="cls-4" x="411.11" y="693.35" width="13" height="32.4" transform="translate(-311.95 1091.14) rotate(-87.13)"/>
                <rect class="cls-4" x="443.49" y="694.93" width="13" height="32.4" transform="translate(-282.77 1124.97) rotate(-87.13)"/>
                <rect class="cls-4" x="410.57" y="706.33" width="13" height="32.4" transform="translate(-325.43 1102.92) rotate(-87.13)"/>
                <rect class="cls-4" x="442.94" y="707.91" width="13" height="32.4" transform="translate(-296.25 1136.76) rotate(-87.13)"/>
                <rect class="cls-4" x="409.87" y="719.23" width="13" height="32.4" transform="translate(-338.98 1114.48) rotate(-87.13)"/>
                <rect class="cls-4" x="442.24" y="720.81" width="13" height="32.4" transform="translate(-309.8 1148.31) rotate(-87.13)"/>
                <rect class="cls-4" x="409.27" y="732.24" width="13" height="32.4" transform="translate(-352.54 1126.23) rotate(-87.13)"/>
                <rect class="cls-4" x="441.64" y="733.82" width="13" height="32.4" transform="translate(-323.36 1160.06) rotate(-87.13)"/>
                <rect class="cls-4" x="408.57" y="745.14" width="13" height="32.4" transform="translate(-366.08 1137.79) rotate(-87.13)"/>
                <rect class="cls-4" x="440.95" y="746.71" width="13" height="32.4" transform="translate(-336.9 1171.62) rotate(-87.13)"/>
                <path class="cls-4" d="M398.66,767l-1.1,22.4s-.6,10.3,10,10.4l5.6.3,1.6-32.4Z"/>
                <polygon class="cls-4" points="414.86 767.8 413.16 800.2 429.36 801 430.96 768.6 414.86 767.8"/>
                <polygon class="cls-4" points="430.96 768.6 429.36 801 445.56 801.8 447.16 769.4 430.96 768.6"/>
                <path class="cls-4" d="M445.56,801.8l8.3.4s8.4.7,8.4-8.9l1.2-23-16.2-.8Z"/>
                <path class="cls-4" d="M406.36,611.6l1.2-23s.8-9.4,10.8-8.9l5.8.3-1.7,32.4Z"/>
                <polygon class="cls-4" points="424.26 580 422.46 612.4 438.76 613.2 440.36 580.8 424.26 580"/>
                <polygon class="cls-4" points="440.36 580.8 438.66 613.2 454.86 614 456.56 581.6 440.36 580.8"/>
                <path class="cls-4" d="M456.56,581.6l8.6.4s7.6-.1,7.1,9.1L471,614.8l-16.2-.8Z"/>
                <g id="TEXT-34" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 421.8, 687.65)">MZ-10</text>
                </g>
                <g id="TEXT-35" data-name="TEXT">
                    <text class="cls-6" transform="translate(404.3 788.85)">1</text>
                </g>
                <g id="TEXT-36" data-name="TEXT">
                    <text class="cls-6" transform="translate(414.06 765.73)">2</text>
                </g>
                <g id="TEXT-37" data-name="TEXT">
                    <text class="cls-6" transform="translate(413.85 752.95)">3</text>
                </g>
                <g id="TEXT-38" data-name="TEXT">
                    <text class="cls-6" transform="translate(414.6 740.07)">4</text>
                </g>
                <g id="TEXT-39" data-name="TEXT">
                    <text class="cls-6" transform="translate(415.82 726.88)">5</text>
                </g>
                <g id="TEXT-40" data-name="TEXT">
                    <text class="cls-6" transform="translate(416.55 714.58)">6</text>
                </g>
                <g id="TEXT-41" data-name="TEXT">
                    <text class="cls-6" transform="translate(417.43 701.11)">7</text>
                </g>
                <g id="TEXT-42" data-name="TEXT">
                    <text class="cls-6" transform="translate(417.61 688.22)">8</text>
                </g>
                <g id="TEXT-43" data-name="TEXT">
                    <text class="cls-6" transform="translate(418.56 676.09)">9</text>
                </g>
                <g id="TEXT-44" data-name="TEXT">
                    <text class="cls-6" transform="translate(418.49 662.29)">10</text>
                </g>
                <g id="TEXT-45" data-name="TEXT">
                    <text class="cls-6" transform="translate(418.74 649.23)">
                        <tspan class="cls-7">1</tspan>
                        <tspan x="2.41" y="0">1</tspan>
                    </text>
                </g>
                <g id="TEXT-46" data-name="TEXT">
                    <text class="cls-6" transform="translate(419.37 636.4)">12</text>
                </g>
                <g id="TEXT-47" data-name="TEXT">
                    <text class="cls-6" transform="translate(419.74 623.72)">13</text>
                </g>
                <g id="TEXT-48" data-name="TEXT">
                    <text class="cls-6" transform="translate(413.64 600.85)">14</text>
                </g>
                <g id="TEXT-49" data-name="TEXT">
                    <text class="cls-6" transform="translate(429.04 600.84)">15</text>
                </g>
                <g id="TEXT-50" data-name="TEXT">
                    <text class="cls-6" transform="translate(444.52 601.72)">16</text>
                </g>
                <g id="TEXT-51" data-name="TEXT">
                    <text class="cls-6" transform="translate(452.6 625.38)">18</text>
                </g>
                <g id="TEXT-52" data-name="TEXT">
                    <text class="cls-6" transform="translate(451.37 638.25)">19</text>
                </g>
                <g id="TEXT-53" data-name="TEXT">
                    <text class="cls-6" transform="translate(451.19 651.39)">20</text>
                </g>
                <g id="TEXT-54" data-name="TEXT">
                    <text class="cls-6" transform="translate(450.49 664.27)">21</text>
                </g>
                <g id="TEXT-55" data-name="TEXT">
                    <text class="cls-6" transform="translate(449.83 676.92)">22</text>
                </g>
                <g id="TEXT-56" data-name="TEXT">
                    <text class="cls-6" transform="translate(449.25 689.73)">23</text>
                </g>
                <g id="TEXT-57" data-name="TEXT">
                    <text class="cls-6" transform="translate(448.15 702.5)">24</text>
                </g>
                <g id="TEXT-58" data-name="TEXT">
                    <text class="cls-6" transform="translate(447.58 716.83)">25</text>
                </g>
                <g id="TEXT-59" data-name="TEXT">
                    <text class="cls-6" transform="translate(446.98 729.31)">26</text>
                </g>
                <g id="TEXT-60" data-name="TEXT">
                    <text class="cls-6" transform="translate(446.64 742.07)">27</text>
                </g>
                <g id="TEXT-61" data-name="TEXT">
                    <text class="cls-6" transform="translate(445.68 754.75)">28</text>
                </g>
                <g id="TEXT-62" data-name="TEXT">
                    <text class="cls-6" transform="translate(445.03 767.7)">29</text>
                </g>
                <g id="TEXT-63" data-name="TEXT">
                    <text class="cls-6" transform="translate(452.7 791.35)">30</text>
                </g>
                <g id="TEXT-64" data-name="TEXT">
                    <text class="cls-6" transform="translate(436.04 790.91)">31</text>
                </g>
                <g id="TEXT-65" data-name="TEXT">
                    <text class="cls-6" transform="translate(419.16 789.38)">32</text>
                </g>
                <g id="TEXT-66" data-name="TEXT">
                    <text class="cls-6" transform="translate(461.16 602.54)">17</text>
                </g>
            </g>
            <g id="MZ-8-3" data-name="MZ-8">
                <path class="cls-3" d="M429.35,343.51l45.4,2.3s12.8-.6,11.5,13.5l-10.2,203s-.9,9.4-11.2,9.2l-47.1-2.4s-13.3-.3-12.8-14L415,356.31C414.95,356.31,414.95,343,429.35,343.51Z"/>
                <rect class="cls-4" x="426.91" y="369.25" width="13" height="32.4" transform="translate(26.75 799.03) rotate(-87.13)"/>
                <rect class="cls-4" x="459.28" y="370.93" width="13" height="32.4" transform="translate(55.83 832.95) rotate(-87.13)"/>
                <rect class="cls-4" x="426.21" y="382.25" width="13" height="32.4" transform="translate(13.1 810.68) rotate(-87.13)"/>
                <rect class="cls-4" x="458.58" y="383.83" width="13" height="32.4" transform="translate(42.28 844.51) rotate(-87.13)"/>
                <rect class="cls-4" x="425.61" y="395.15" width="13" height="32.4" transform="translate(-0.35 822.34) rotate(-87.13)"/>
                <rect class="cls-4" x="457.98" y="396.83" width="13" height="32.4" transform="translate(28.72 856.26) rotate(-87.13)"/>
                <rect class="cls-4" x="424.91" y="408.15" width="13" height="32.4" transform="translate(-14 833.99) rotate(-87.13)"/>
                <rect class="cls-4" x="457.28" y="409.73" width="13" height="32.4" transform="translate(15.18 867.82) rotate(-87.13)"/>
                <rect class="cls-4" x="424.31" y="421.06" width="13" height="32.4" transform="translate(-27.46 845.65) rotate(-87.13)"/>
                <rect class="cls-4" x="456.68" y="422.74" width="13" height="32.4" transform="translate(1.62 879.57) rotate(-87.13)"/>
                <rect class="cls-4" x="423.61" y="434.06" width="13" height="32.4" transform="translate(-41.11 857.29) rotate(-87.13)"/>
                <rect class="cls-4" x="455.98" y="435.64" width="13" height="32.4" transform="translate(-11.93 891.13) rotate(-87.13)"/>
                <rect class="cls-4" x="423.01" y="446.96" width="13" height="32.4" transform="translate(-54.57 868.96) rotate(-87.13)"/>
                <rect class="cls-4" x="455.38" y="448.64" width="13" height="32.4" transform="translate(-25.49 902.88) rotate(-87.13)"/>
                <rect class="cls-4" x="422.31" y="459.96" width="13" height="32.4" transform="translate(-68.21 880.6) rotate(-87.13)"/>
                <rect class="cls-4" x="454.68" y="461.54" width="13" height="32.4" transform="translate(-39.04 914.44) rotate(-87.13)"/>
                <rect class="cls-4" x="421.76" y="472.94" width="13" height="32.4" transform="translate(-81.7 892.39) rotate(-87.13)"/>
                <rect class="cls-4" x="454.13" y="474.52" width="13" height="32.4" transform="translate(-52.52 926.22) rotate(-87.13)"/>
                <rect class="cls-4" x="421.06" y="485.84" width="13" height="32.4" transform="translate(-95.25 903.95) rotate(-87.13)"/>
                <rect class="cls-4" x="453.44" y="487.42" width="13" height="32.4" transform="translate(-66.07 937.78) rotate(-87.13)"/>
                <rect class="cls-4" x="420.46" y="498.85" width="13" height="32.4" transform="translate(-108.81 915.7) rotate(-87.13)"/>
                <rect class="cls-4" x="452.83" y="500.43" width="13" height="32.4" transform="translate(-79.63 949.53) rotate(-87.13)"/>
                <rect class="cls-4" x="419.76" y="511.75" width="13" height="32.4" transform="translate(-122.35 927.25) rotate(-87.13)"/>
                <rect class="cls-4" x="452.14" y="513.32" width="13" height="32.4" transform="translate(-93.17 961.09) rotate(-87.13)"/>
                <path class="cls-4" d="M409.85,533.61l-1.1,22.4s-.6,10.3,10,10.4l5.6.3,1.6-32.4Z"/>
                <polygon class="cls-4" points="426.05 534.41 424.35 566.81 440.55 567.61 442.15 535.21 426.05 534.41"/>
                <polygon class="cls-4" points="442.15 535.21 440.55 567.61 456.75 568.41 458.35 536.01 442.15 535.21"/>
                <path class="cls-4" d="M456.75,568.41l8.3.4s8.4.7,8.4-8.9l1.2-23-16.2-.8Z"/>
                <path class="cls-4" d="M417.55,378.21l1.2-23s.8-9.4,10.8-8.9l5.8.3-1.7,32.4Z"/>
                <polygon class="cls-4" points="435.45 346.61 433.65 379.01 449.95 379.81 451.55 347.41 435.45 346.61"/>
                <polygon class="cls-4" points="451.55 347.41 449.85 379.81 466.05 380.61 467.75 348.21 451.55 347.41"/>
                <path class="cls-4" d="M467.75,348.21l8.6.4s7.6-.1,7.1,9.1l-1.3,23.7-16.2-.8Z"/>
                <g id="TEXT-67" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 433, 454.26)">MZ-<tspan class="cls-7" x="21.32" y="0">1</tspan>
                        <tspan x="27.11" y="0">1</tspan>
                    </text>
                </g>
                <g id="TEXT-68" data-name="TEXT">
                    <text class="cls-6" transform="translate(415.49 555.46)">1</text>
                </g>
                <g id="TEXT-69" data-name="TEXT">
                    <text class="cls-6" transform="translate(425.26 532.34)">2</text>
                </g>
                <g id="TEXT-70" data-name="TEXT">
                    <text class="cls-6" transform="translate(425.05 519.56)">3</text>
                </g>
                <g id="TEXT-71" data-name="TEXT">
                    <text class="cls-6" transform="translate(425.79 506.68)">4</text>
                </g>
                <g id="TEXT-72" data-name="TEXT">
                    <text class="cls-6" transform="translate(427.01 493.49)">5</text>
                </g>
                <g id="TEXT-73" data-name="TEXT">
                    <text class="cls-6" transform="translate(427.74 481.19)">6</text>
                </g>
                <g id="TEXT-74" data-name="TEXT">
                    <text class="cls-6" transform="translate(428.63 467.72)">7</text>
                </g>
                <g id="TEXT-75" data-name="TEXT">
                    <text class="cls-6" transform="translate(428.8 454.83)">8</text>
                </g>
                <g id="TEXT-76" data-name="TEXT">
                    <text class="cls-6" transform="translate(429.75 442.7)">9</text>
                </g>
                <g id="TEXT-77" data-name="TEXT">
                    <text class="cls-6" transform="translate(429.68 428.9)">10</text>
                </g>
                <g id="TEXT-78" data-name="TEXT">
                    <text class="cls-6" transform="translate(429.94 415.84)">
                        <tspan class="cls-7">1</tspan>
                        <tspan x="2.41" y="0">1</tspan>
                    </text>
                </g>
                <g id="TEXT-79" data-name="TEXT">
                    <text class="cls-6" transform="translate(430.57 403.01)">12</text>
                </g>
                <g id="TEXT-80" data-name="TEXT">
                    <text class="cls-6" transform="translate(430.93 390.33)">13</text>
                </g>
                <g id="TEXT-81" data-name="TEXT">
                    <text class="cls-6" transform="translate(424.83 367.46)">14</text>
                </g>
                <g id="TEXT-82" data-name="TEXT">
                    <text class="cls-6" transform="translate(440.23 367.45)">15</text>
                </g>
                <g id="TEXT-83" data-name="TEXT">
                    <text class="cls-6" transform="translate(455.72 368.33)">16</text>
                </g>
                <g id="TEXT-84" data-name="TEXT">
                    <text class="cls-6" transform="translate(463.79 391.99)">18</text>
                </g>
                <g id="TEXT-85" data-name="TEXT">
                    <text class="cls-6" transform="translate(462.56 404.86)">19</text>
                </g>
                <g id="TEXT-86" data-name="TEXT">
                    <text class="cls-6" transform="translate(462.38 418)">20</text>
                </g>
                <g id="TEXT-87" data-name="TEXT">
                    <text class="cls-6" transform="translate(461.68 430.88)">21</text>
                </g>
                <g id="TEXT-88" data-name="TEXT">
                    <text class="cls-6" transform="translate(461.02 443.53)">22</text>
                </g>
                <g id="TEXT-89" data-name="TEXT">
                    <text class="cls-6" transform="translate(460.44 456.34)">23</text>
                </g>
                <g id="TEXT-90" data-name="TEXT">
                    <text class="cls-6" transform="translate(459.35 469.11)">24</text>
                </g>
                <g id="TEXT-91" data-name="TEXT">
                    <text class="cls-6" transform="translate(458.77 483.44)">25</text>
                </g>
                <g id="TEXT-92" data-name="TEXT">
                    <text class="cls-6" transform="translate(458.18 495.92)">26</text>
                </g>
                <g id="TEXT-93" data-name="TEXT">
                    <text class="cls-6" transform="translate(457.83 508.68)">27</text>
                </g>
                <g id="TEXT-94" data-name="TEXT">
                    <text class="cls-6" transform="translate(456.87 521.36)">28</text>
                </g>
                <g id="TEXT-95" data-name="TEXT">
                    <text class="cls-6" transform="translate(456.22 534.31)">29</text>
                </g>
                <g id="TEXT-96" data-name="TEXT">
                    <text class="cls-6" transform="translate(463.9 557.96)">30</text>
                </g>
                <g id="TEXT-97" data-name="TEXT">
                    <text class="cls-6" transform="translate(447.24 557.52)">31</text>
                </g>
                <g id="TEXT-98" data-name="TEXT">
                    <text class="cls-6" transform="translate(430.36 555.99)">32</text>
                </g>
                <g id="TEXT-99" data-name="TEXT">
                    <text class="cls-6" transform="translate(472.35 369.15)">17</text>
                </g>
            </g>
            <g id="MZ-119">
                <path class="cls-3" d="M1214.18,1013.25l45.4,2.3s12.8-.6,11.5,13.5l-10.1,202.9s-.9,9.4-11.2,9.2l-47.1-2.4s-13.3-.3-12.8-14l10.1-198.8C1199.78,1026,1199.78,1012.75,1214.18,1013.25Z"/>
                <rect class="cls-4" x="1211.73" y="1039.02" width="13" height="32.4" transform="translate(103.38 2219.12) rotate(-87.13)"/>
                <rect class="cls-4" x="1244.1" y="1040.7" width="13" height="32.4" transform="translate(132.45 2253.04) rotate(-87.13)"/>
                <rect class="cls-4" x="1211.03" y="1052.02" width="13" height="32.4" transform="translate(89.73 2230.77) rotate(-87.13)"/>
                <rect class="cls-4" x="1243.4" y="1053.59" width="13" height="32.4" transform="matrix(0.05, -1, 1, 0.05, 118.91, 2264.6)"/>
                <rect class="cls-4" x="1210.43" y="1064.92" width="13" height="32.4" transform="translate(76.27 2242.43) rotate(-87.13)"/>
                <rect class="cls-4" x="1242.8" y="1066.6" width="13" height="32.4" transform="translate(105.35 2276.35) rotate(-87.13)"/>
                <rect class="cls-4" x="1209.73" y="1077.92" width="13" height="32.4" transform="translate(62.62 2254.07) rotate(-87.13)"/>
                <rect class="cls-4" x="1242.11" y="1079.5" width="13" height="32.4" transform="matrix(0.05, -1, 1, 0.05, 91.8, 2287.91)"/>
                <rect class="cls-4" x="1209.13" y="1090.82" width="13" height="32.4" transform="translate(49.16 2265.74) rotate(-87.13)"/>
                <rect class="cls-4" x="1241.5" y="1092.5" width="13" height="32.4" transform="translate(78.24 2299.66) rotate(-87.13)"/>
                <rect class="cls-4" x="1208.43" y="1103.82" width="13" height="32.4" transform="translate(35.52 2277.38) rotate(-87.13)"/>
                <rect class="cls-4" x="1240.81" y="1105.4" width="13" height="32.4" transform="translate(64.69 2311.22) rotate(-87.13)"/>
                <rect class="cls-4" x="1207.83" y="1116.73" width="13" height="32.4" transform="translate(22.06 2289.04) rotate(-87.13)"/>
                <rect class="cls-4" x="1240.2" y="1118.4" width="13" height="32.4" transform="matrix(0.05, -1, 1, 0.05, 51.14, 2322.97)"/>
                <rect class="cls-4" x="1207.13" y="1129.73" width="13" height="32.4" transform="translate(8.41 2300.69) rotate(-87.13)"/>
                <rect class="cls-4" x="1239.51" y="1131.3" width="13" height="32.4" transform="translate(37.59 2334.53) rotate(-87.13)"/>
                <rect class="cls-4" x="1206.58" y="1142.71" width="13" height="32.4" transform="matrix(0.05, -1, 1, 0.05, -5.08, 2312.48)"/>
                <rect class="cls-4" x="1238.96" y="1144.29" width="13" height="32.4" transform="translate(24.1 2346.31) rotate(-87.13)"/>
                <rect class="cls-4" x="1205.88" y="1155.61" width="13" height="32.4" transform="translate(-18.62 2324.03) rotate(-87.13)"/>
                <rect class="cls-4" x="1238.26" y="1157.19" width="13" height="32.4" transform="translate(10.56 2357.87) rotate(-87.13)"/>
                <rect class="cls-4" x="1205.28" y="1168.61" width="13" height="32.4" transform="matrix(0.05, -1, 1, 0.05, -32.18, 2335.79)"/>
                <rect class="cls-4" x="1237.66" y="1170.19" width="13" height="32.4" transform="translate(-3 2369.62) rotate(-87.13)"/>
                <rect class="cls-4" x="1204.58" y="1181.51" width="13" height="32.4" transform="translate(-45.73 2347.34) rotate(-87.13)"/>
                <rect class="cls-4" x="1236.96" y="1183.09" width="13" height="32.4" transform="translate(-16.55 2381.18) rotate(-87.13)"/>
                <path class="cls-4" d="M1194.68,1203.35l-1.1,22.4s-.6,10.3,10,10.4l5.6.3,1.6-32.4Z"/>
                <polygon class="cls-4" points="1210.78 1204.15 1209.17 1236.55 1225.38 1237.35 1226.97 1204.95 1210.78 1204.15"/>
                <polygon class="cls-4" points="1226.97 1204.95 1225.38 1237.35 1241.58 1238.15 1243.17 1205.75 1226.97 1204.95"/>
                <path class="cls-4" d="M1241.58,1238.15l8.3.4s8.4.7,8.4-8.9l1.2-23-16.2-.8Z"/>
                <path class="cls-4" d="M1202.38,1047.95l1.2-23s.8-9.4,10.8-8.9l5.8.3-1.7,32.4Z"/>
                <polygon class="cls-4" points="1220.28 1016.35 1218.47 1048.75 1234.78 1049.55 1236.38 1017.15 1220.28 1016.35"/>
                <polygon class="cls-4" points="1236.38 1017.15 1234.67 1049.55 1250.88 1050.35 1252.58 1017.95 1236.38 1017.15"/>
                <path class="cls-4" d="M1252.58,1017.95l8.6.4s7.6-.1,7.1,9.1l-1.3,23.7-16.2-.8Z"/>
                <g id="TEXT-100" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 1218.93, 1116.13)">MZ-<tspan class="cls-7" x="21.32" y="0">1</tspan>
                        <tspan x="27.11" y="0">19</tspan>
                    </text>
                </g>
                <g id="TEXT-101" data-name="TEXT">
                    <text class="cls-6" transform="translate(1209.45 1201.75)">2</text>
                </g>
                <g id="TEXT-102" data-name="TEXT">
                    <text class="cls-6" transform="translate(1209.24 1188.97)">3</text>
                </g>
                <g id="TEXT-103" data-name="TEXT">
                    <text class="cls-6" transform="translate(1209.99 1176.09)">4</text>
                </g>
                <g id="TEXT-104" data-name="TEXT">
                    <text class="cls-6" transform="translate(1211.21 1162.9)">5</text>
                </g>
                <g id="TEXT-105" data-name="TEXT">
                    <text class="cls-6" transform="translate(1211.94 1150.6)">6</text>
                </g>
                <g id="TEXT-106" data-name="TEXT">
                    <text class="cls-6" transform="translate(1212.82 1137.13)">7</text>
                </g>
                <g id="TEXT-107" data-name="TEXT">
                    <text class="cls-6" transform="translate(1213 1124.24)">8</text>
                </g>
                <g id="TEXT-108" data-name="TEXT">
                    <text class="cls-6" transform="translate(1213.95 1112.11)">9</text>
                </g>
                <g id="TEXT-109" data-name="TEXT">
                    <text class="cls-6" transform="translate(1213.88 1098.31)">10</text>
                </g>
                <g id="TEXT-110" data-name="TEXT">
                    <text class="cls-6" transform="translate(1214.13 1085.25)">
                        <tspan class="cls-7">1</tspan>
                        <tspan x="2.41" y="0">1</tspan>
                    </text>
                </g>
                <g id="TEXT-111" data-name="TEXT">
                    <text class="cls-6" transform="translate(1214.76 1072.42)">12</text>
                </g>
                <g id="TEXT-112" data-name="TEXT">
                    <text class="cls-6" transform="translate(1215.13 1059.74)">13</text>
                </g>
                <g id="TEXT-113" data-name="TEXT">
                    <text class="cls-6" transform="translate(1209.03 1036.87)">14</text>
                </g>
                <g id="TEXT-114" data-name="TEXT">
                    <text class="cls-6" transform="translate(1224.43 1036.86)">15</text>
                </g>
                <g id="TEXT-115" data-name="TEXT">
                    <text class="cls-6" transform="translate(1239.91 1037.74)">16</text>
                </g>
                <g id="TEXT-116" data-name="TEXT">
                    <text class="cls-6" transform="translate(1256.55 1038.56)">17</text>
                </g>
                <g id="TEXT-117" data-name="TEXT">
                    <text class="cls-6" transform="translate(1247.99 1061.4)">18</text>
                </g>
                <g id="TEXT-118" data-name="TEXT">
                    <text class="cls-6" transform="translate(1246.76 1074.27)">19</text>
                </g>
                <g id="TEXT-119" data-name="TEXT">
                    <text class="cls-6" transform="translate(1246.58 1087.41)">20</text>
                </g>
                <g id="TEXT-120" data-name="TEXT">
                    <text class="cls-6" transform="translate(1245.88 1100.29)">21</text>
                </g>
                <g id="TEXT-121" data-name="TEXT">
                    <text class="cls-6" transform="translate(1245.22 1112.94)">22</text>
                </g>
                <g id="TEXT-122" data-name="TEXT">
                    <text class="cls-6" transform="translate(1244.64 1125.75)">23</text>
                </g>
                <g id="TEXT-123" data-name="TEXT">
                    <text class="cls-6" transform="translate(1243.54 1138.52)">24</text>
                </g>
                <g id="TEXT-124" data-name="TEXT">
                    <text class="cls-6" transform="translate(1242.97 1152.85)">25</text>
                </g>
                <g id="TEXT-125" data-name="TEXT">
                    <text class="cls-6" transform="translate(1242.37 1165.33)">26</text>
                </g>
                <g id="TEXT-126" data-name="TEXT">
                    <text class="cls-6" transform="translate(1242.03 1178.1)">27</text>
                </g>
                <g id="TEXT-127" data-name="TEXT">
                    <text class="cls-6" transform="translate(1241.07 1190.77)">28</text>
                </g>
                <g id="TEXT-128" data-name="TEXT">
                    <text class="cls-6" transform="translate(1240.42 1203.72)">29</text>
                </g>
                <g id="TEXT-129" data-name="TEXT">
                    <text class="cls-6" transform="translate(1248.09 1227.37)">30</text>
                </g>
                <g id="TEXT-130" data-name="TEXT">
                    <text class="cls-6" transform="translate(1231.43 1226.93)">31</text>
                </g>
                <g id="TEXT-131" data-name="TEXT">
                    <text class="cls-6" transform="translate(1214.56 1225.4)">32</text>
                </g>
                <g id="TEXT-132" data-name="TEXT">
                    <text class="cls-6" transform="translate(1199.69 1224.87)">1</text>
                </g>
            </g>
            <g id="MZ-130">
                <path class="cls-3" d="M1297.68,1017.95l45.4,2.3s12.8-.6,11.5,13.5l-10.2,203s-.9,9.4-11.2,9.2l-47.1-2.4s-13.3-.3-12.8-14l10.1-198.8S1283.38,1017.45,1297.68,1017.95Z"/>
                <rect class="cls-4" x="1295.22" y="1043.74" width="13" height="32.4" transform="translate(177.97 2306.99) rotate(-87.13)"/>
                <rect class="cls-4" x="1327.6" y="1045.32" width="13" height="32.4" transform="translate(207.15 2340.83) rotate(-87.13)"/>
                <rect class="cls-4" x="1294.63" y="1056.65" width="13" height="32.4" transform="translate(164.52 2318.66) rotate(-87.13)"/>
                <rect class="cls-4" x="1327" y="1058.32" width="13" height="32.4" transform="translate(193.59 2352.58) rotate(-87.13)"/>
                <rect class="cls-4" x="1293.93" y="1069.64" width="13" height="32.4" transform="translate(150.87 2330.3) rotate(-87.13)"/>
                <rect class="cls-4" x="1326.3" y="1071.22" width="13" height="32.4" transform="translate(180.05 2364.14) rotate(-87.13)"/>
                <rect class="cls-4" x="1293.33" y="1082.55" width="13" height="32.4" transform="translate(137.41 2341.97) rotate(-87.13)"/>
                <rect class="cls-4" x="1325.7" y="1084.23" width="13" height="32.4" transform="translate(166.49 2375.89) rotate(-87.13)"/>
                <rect class="cls-4" x="1292.62" y="1095.55" width="13" height="32.4" transform="matrix(0.05, -1, 1, 0.05, 123.76, 2353.61)"/>
                <rect class="cls-4" x="1325" y="1097.13" width="13" height="32.4" transform="translate(152.94 2387.45) rotate(-87.13)"/>
                <rect class="cls-4" x="1292.03" y="1108.45" width="13" height="32.4" transform="translate(110.31 2365.27) rotate(-87.13)"/>
                <rect class="cls-4" x="1324.4" y="1110.03" width="13" height="32.4" transform="translate(139.49 2399.11) rotate(-87.13)"/>
                <rect class="cls-4" x="1291.32" y="1121.45" width="13" height="32.4" transform="translate(96.66 2376.92) rotate(-87.13)"/>
                <rect class="cls-4" x="1323.7" y="1123.03" width="13" height="32.4" transform="translate(125.84 2410.76) rotate(-87.13)"/>
                <rect class="cls-4" x="1290.73" y="1134.36" width="13" height="32.4" transform="translate(83.2 2388.58) rotate(-87.13)"/>
                <rect class="cls-4" x="1323.1" y="1135.93" width="13" height="32.4" transform="translate(112.38 2422.42) rotate(-87.13)"/>
                <rect class="cls-4" x="1290.18" y="1147.34" width="13" height="32.4" transform="translate(69.71 2400.37) rotate(-87.13)"/>
                <rect class="cls-4" x="1322.56" y="1148.92" width="13" height="32.4" transform="translate(98.89 2434.2) rotate(-87.13)"/>
                <rect class="cls-4" x="1289.48" y="1160.34" width="13" height="32.4" transform="translate(56.06 2412.01) rotate(-87.13)"/>
                <rect class="cls-4" x="1321.85" y="1161.92" width="13" height="32.4" transform="translate(85.24 2445.85) rotate(-87.13)"/>
                <rect class="cls-4" x="1288.88" y="1173.24" width="13" height="32.4" transform="translate(42.61 2423.68) rotate(-87.13)"/>
                <rect class="cls-4" x="1321.26" y="1174.82" width="13" height="32.4" transform="translate(71.79 2457.51) rotate(-87.13)"/>
                <rect class="cls-4" x="1288.18" y="1186.24" width="13" height="32.4" transform="translate(28.96 2435.32) rotate(-87.13)"/>
                <rect class="cls-4" x="1320.55" y="1187.82" width="13" height="32.4" transform="matrix(0.05, -1, 1, 0.05, 58.14, 2469.16)"/>
                <path class="cls-4" d="M1278.18,1208l-1.1,22.4s-.6,10.3,10,10.4l5.6.3,1.6-32.4Z"/>
                <polygon class="cls-4" points="1294.38 1208.85 1292.78 1241.15 1308.97 1241.95 1310.58 1209.65 1294.38 1208.85"/>
                <polygon class="cls-4" points="1310.58 1209.65 1308.97 1241.95 1325.17 1242.85 1326.78 1210.45 1310.58 1209.65"/>
                <path class="cls-4" d="M1325.18,1242.85l8.3.4s8.4.7,8.4-8.9l1.2-23-16.2-.8Z"/>
                <path class="cls-4" d="M1285.88,1052.65l1.2-23s.8-9.4,10.8-8.9l5.8.3-1.7,32.4Z"/>
                <polygon class="cls-4" points="1303.78 1021.05 1302.08 1053.45 1318.28 1054.25 1319.97 1021.85 1303.78 1021.05"/>
                <polygon class="cls-4" points="1319.97 1021.85 1318.28 1054.25 1334.47 1055.05 1336.17 1022.65 1319.97 1021.85"/>
                <path class="cls-4" d="M1336.18,1022.65l8.6.4s7.6-.1,7.1,9.1l-1.3,23.7-16.2-.8Z"/>
                <g id="TEXT-133" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 1298.11, 1120.34)">MZ-130</text>
                </g>
                <g id="TEXT-134" data-name="TEXT">
                    <text class="cls-6" transform="translate(1283.87 1229.08)">1</text>
                </g>
                <g id="TEXT-135" data-name="TEXT">
                    <text class="cls-6" transform="translate(1293.63 1205.97)">2</text>
                </g>
                <g id="TEXT-136" data-name="TEXT">
                    <text class="cls-6" transform="translate(1293.42 1193.19)">3</text>
                </g>
                <g id="TEXT-137" data-name="TEXT">
                    <text class="cls-6" transform="translate(1294.16 1180.31)">4</text>
                </g>
                <g id="TEXT-138" data-name="TEXT">
                    <text class="cls-6" transform="translate(1295.39 1167.12)">5</text>
                </g>
                <g id="TEXT-139" data-name="TEXT">
                    <text class="cls-6" transform="translate(1296.12 1154.81)">6</text>
                </g>
                <g id="TEXT-140" data-name="TEXT">
                    <text class="cls-6" transform="translate(1297 1141.35)">7</text>
                </g>
                <g id="TEXT-141" data-name="TEXT">
                    <text class="cls-6" transform="translate(1297.18 1128.46)">8</text>
                </g>
                <g id="TEXT-142" data-name="TEXT">
                    <text class="cls-6" transform="translate(1298.12 1116.33)">9</text>
                </g>
                <g id="TEXT-143" data-name="TEXT">
                    <text class="cls-6" transform="translate(1298.06 1102.53)">10</text>
                </g>
                <g id="TEXT-144" data-name="TEXT">
                    <text class="cls-6" transform="translate(1298.31 1089.47)">
                        <tspan class="cls-7">1</tspan>
                        <tspan x="2.41" y="0">1</tspan>
                    </text>
                </g>
                <g id="TEXT-145" data-name="TEXT">
                    <text class="cls-6" transform="translate(1298.94 1076.64)">12</text>
                </g>
                <g id="TEXT-146" data-name="TEXT">
                    <text class="cls-6" transform="translate(1299.3 1063.95)">13</text>
                </g>
                <g id="TEXT-147" data-name="TEXT">
                    <text class="cls-6" transform="translate(1293.21 1041.09)">14</text>
                </g>
                <g id="TEXT-148" data-name="TEXT">
                    <text class="cls-6" transform="translate(1308.6 1041.07)">15</text>
                </g>
                <g id="TEXT-149" data-name="TEXT">
                    <text class="cls-6" transform="translate(1324.09 1041.96)">16</text>
                </g>
                <g id="TEXT-150" data-name="TEXT">
                    <text class="cls-6" transform="translate(1340.73 1042.78)">17</text>
                </g>
                <g id="TEXT-151" data-name="TEXT">
                    <text class="cls-6" transform="translate(1332.17 1065.61)">18</text>
                </g>
                <g id="TEXT-152" data-name="TEXT">
                    <text class="cls-6" transform="translate(1330.94 1078.49)">19</text>
                </g>
                <g id="TEXT-153" data-name="TEXT">
                    <text class="cls-6" transform="translate(1330.76 1091.63)">20</text>
                </g>
                <g id="TEXT-154" data-name="TEXT">
                    <text class="cls-6" transform="translate(1330.06 1104.51)">21</text>
                </g>
                <g id="TEXT-155" data-name="TEXT">
                    <text class="cls-6" transform="translate(1329.4 1117.16)">22</text>
                </g>
                <g id="TEXT-156" data-name="TEXT">
                    <text class="cls-6" transform="translate(1328.82 1129.97)">23</text>
                </g>
                <g id="TEXT-157" data-name="TEXT">
                    <text class="cls-6" transform="translate(1327.72 1142.74)">24</text>
                </g>
                <g id="TEXT-158" data-name="TEXT">
                    <text class="cls-6" transform="translate(1327.14 1157.07)">25</text>
                </g>
                <g id="TEXT-159" data-name="TEXT">
                    <text class="cls-6" transform="translate(1326.55 1169.55)">26</text>
                </g>
                <g id="TEXT-160" data-name="TEXT">
                    <text class="cls-6" transform="translate(1326.21 1182.31)">27</text>
                </g>
                <g id="TEXT-161" data-name="TEXT">
                    <text class="cls-6" transform="translate(1325.25 1194.99)">28</text>
                </g>
                <g id="TEXT-162" data-name="TEXT">
                    <text class="cls-6" transform="translate(1324.6 1207.94)">29</text>
                </g>
                <g id="TEXT-163" data-name="TEXT">
                    <text class="cls-6" transform="translate(1332.27 1231.59)">30</text>
                </g>
                <g id="TEXT-164" data-name="TEXT">
                    <text class="cls-6" transform="translate(1315.61 1231.15)">31</text>
                </g>
                <g id="TEXT-165" data-name="TEXT">
                    <text class="cls-6" transform="translate(1298.73 1229.62)">32</text>
                </g>
            </g>
            <g id="MZ-37">
                <path class="cls-3" d="M475.08,1286.55l-15.3-1s-11.8-1.4-13.1,13l-2.4,46.2s-1.5,10.7,9.8,11.9l219,10.9s9.3-.1,9.8-10.9l2.4-45.9s1.7-13.8-13.2-14.6Z"/>
                <polygon class="cls-4" points="482.18 1290.45 480.57 1322.75 493.57 1323.45 495.18 1291.05 482.18 1290.45"/>
                <polygon class="cls-4" points="495.18 1291.05 493.57 1323.45 506.48 1324.05 508.07 1291.75 495.18 1291.05"/>
                <polygon class="cls-4" points="508.07 1291.75 506.57 1324.05 519.48 1324.75 521.08 1292.35 508.07 1291.75"/>
                <polygon class="cls-4" points="521.08 1292.35 519.48 1324.75 532.38 1325.35 534.08 1293.05 521.08 1292.35"/>
                <polygon class="cls-4" points="533.98 1293.05 532.38 1325.35 545.38 1326.05 546.98 1293.65 533.98 1293.05"/>
                <polygon class="cls-4" points="546.98 1293.65 545.38 1326.05 558.27 1326.65 559.98 1294.35 546.98 1293.65"/>
                <polygon class="cls-4" points="559.98 1294.35 558.38 1326.65 571.27 1327.35 572.88 1294.95 559.98 1294.35"/>
                <polygon class="cls-4" points="572.88 1294.95 571.27 1327.35 584.17 1327.95 585.77 1295.55 572.88 1294.95"/>
                <polygon class="cls-4" points="598.77 1296.25 597.17 1328.65 610.08 1329.25 611.77 1296.85 598.77 1296.25"/>
                <polygon class="cls-4" points="585.77 1295.55 584.17 1327.95 597.17 1328.65 598.77 1296.25 585.77 1295.55"/>
                <polygon class="cls-4" points="611.67 1296.85 610.08 1329.25 623.08 1329.95 624.67 1297.55 611.67 1296.85"/>
                <polygon class="cls-4" points="624.67 1297.55 623.08 1329.95 635.98 1330.55 637.67 1298.15 624.67 1297.55"/>
                <polygon class="cls-4" points="637.67 1298.15 636.08 1330.55 648.98 1331.25 650.58 1298.85 637.67 1298.15"/>
                <polygon class="cls-4" points="480.57 1322.75 478.98 1355.15 491.88 1355.85 493.48 1323.45 480.57 1322.75"/>
                <polygon class="cls-4" points="493.48 1323.45 491.88 1355.85 504.88 1356.45 506.48 1324.05 493.48 1323.45"/>
                <polygon class="cls-4" points="506.48 1324.05 504.88 1356.45 517.77 1357.15 519.48 1324.75 506.48 1324.05"/>
                <polygon class="cls-4" points="519.48 1324.75 517.88 1357.15 530.77 1357.75 532.38 1325.35 519.48 1324.75"/>
                <polygon class="cls-4" points="532.38 1325.35 530.77 1357.75 543.67 1358.45 545.27 1326.05 532.38 1325.35"/>
                <polygon class="cls-4" points="545.38 1326.05 543.77 1358.45 556.67 1359.05 558.27 1326.65 545.38 1326.05"/>
                <polygon class="cls-4" points="558.27 1326.65 556.67 1359.05 569.58 1359.75 571.27 1327.35 558.27 1326.65"/>
                <polygon class="cls-4" points="571.27 1327.35 569.67 1359.75 582.58 1360.35 584.17 1327.95 571.27 1327.35"/>
                <polygon class="cls-4" points="597.17 1328.65 595.58 1361.05 608.48 1361.65 610.08 1329.25 597.17 1328.65"/>
                <polygon class="cls-4" points="584.17 1327.95 582.58 1360.35 595.48 1361.05 597.08 1328.65 584.17 1327.95"/>
                <polygon class="cls-4" points="610.08 1329.25 608.48 1361.65 621.38 1362.35 622.98 1329.95 610.08 1329.25"/>
                <polygon class="cls-4" points="623.08 1329.95 621.48 1362.35 634.38 1362.95 635.98 1330.55 623.08 1329.95"/>
                <polygon class="cls-4" points="635.98 1330.55 634.38 1362.95 647.38 1363.55 648.98 1331.25 635.98 1330.55"/>
                <path class="cls-4" d="M482.18,1290.45l-22.7-1.1s-8.5-.8-10.4,9.2l-.1,6.6,32.4,1.6Z"/>
                <polygon class="cls-4" points="448.98 1305.05 448.18 1321.15 480.57 1322.75 481.38 1306.65 448.98 1305.05"/>
                <polygon class="cls-4" points="480.57 1322.75 479.77 1338.95 447.38 1337.35 448.18 1321.15 480.57 1322.75"/>
                <path class="cls-4" d="M479,1355.15l-23.1-1.2-2.1-.1s-6.7-.6-6.9-7.6l.4-8.9,32.4,1.6Z"/>
                <path class="cls-4" d="M650.58,1298.85l20.8,1.1s12.4,1.1,10.8,16.2v.5l-32.4-1.6Z"/>
                <polygon class="cls-4" points="649.77 1315.05 648.98 1331.25 681.38 1332.85 682.17 1316.65 649.77 1315.05"/>
                <polygon class="cls-4" points="648.98 1331.25 648.17 1347.55 680.48 1349.05 681.38 1332.85 648.98 1331.25"/>
                <path class="cls-4" d="M648.18,1347.55l-.8,16,25.2,1.2s6.9-.1,7.5-7.2l.4-8.6Z"/>
                <g id="TEXT-166" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 551.54, 1333.23)">MZ-37</text>
                </g>
                <g id="TEXT-167" data-name="TEXT">
                    <text class="cls-6" transform="translate(461.94 1351.57)">1</text>
                </g>
                <g id="TEXT-168" data-name="TEXT">
                    <text class="cls-6" transform="translate(462.48 1334.97)">2</text>
                </g>
                <g id="TEXT-169" data-name="TEXT">
                    <text class="cls-6" transform="translate(463.2 1319.45)">3</text>
                </g>
                <g id="TEXT-170" data-name="TEXT">
                    <text class="cls-6" transform="translate(463.93 1304.76)">4</text>
                </g>
                <g id="TEXT-171" data-name="TEXT">
                    <text class="cls-6" transform="translate(486.46 1312.59)">5</text>
                </g>
                <g id="TEXT-172" data-name="TEXT">
                    <text class="cls-6" transform="translate(499.31 1313.16)">6</text>
                </g>
                <g id="TEXT-173" data-name="TEXT">
                    <text class="cls-6" transform="translate(512.32 1313.71)">7</text>
                </g>
                <g id="TEXT-174" data-name="TEXT">
                    <text class="cls-6" transform="translate(525.46 1314.62)">8</text>
                </g>
                <g id="TEXT-175" data-name="TEXT">
                    <text class="cls-6" transform="translate(538.06 1315.35)">9</text>
                </g>
                <g id="TEXT-176" data-name="TEXT">
                    <text class="cls-6" transform="translate(550.69 1315.5)">10</text>
                </g>
                <g id="TEXT-177" data-name="TEXT">
                    <text class="cls-6" transform="translate(563.39 1316.12)">
                        <tspan class="cls-7">1</tspan>
                        <tspan x="2.41" y="0">1</tspan>
                    </text>
                </g>
                <g id="TEXT-178" data-name="TEXT">
                    <text class="cls-6" transform="translate(576.32 1316.72)">12</text>
                </g>
                <g id="TEXT-179" data-name="TEXT">
                    <text class="cls-6" transform="translate(589.31 1317.55)">13</text>
                </g>
                <g id="TEXT-180" data-name="TEXT">
                    <text class="cls-6" transform="translate(602.04 1318.15)">14</text>
                </g>
                <g id="TEXT-181" data-name="TEXT">
                    <text class="cls-6" transform="translate(614.54 1318.71)">15</text>
                </g>
                <g id="TEXT-182" data-name="TEXT">
                    <text class="cls-6" transform="translate(628.33 1319.34)">16</text>
                </g>
                <g id="TEXT-183" data-name="TEXT">
                    <text class="cls-6" transform="translate(640.98 1320.33)">17</text>
                </g>
                <g id="TEXT-184" data-name="TEXT">
                    <text class="cls-6" transform="translate(662.3 1313.21)">18</text>
                </g>
                <g id="TEXT-185" data-name="TEXT">
                    <text class="cls-6" transform="translate(662.21 1328.51)">19</text>
                </g>
                <g id="TEXT-186" data-name="TEXT">
                    <text class="cls-6" transform="translate(661.48 1345.46)">20</text>
                </g>
                <g id="TEXT-187" data-name="TEXT">
                    <text class="cls-6" transform="translate(661.29 1361)">21</text>
                </g>
                <g id="TEXT-188" data-name="TEXT">
                    <text class="cls-6" transform="translate(639.2 1352.52)">22</text>
                </g>
                <g id="TEXT-189" data-name="TEXT">
                    <text class="cls-6" transform="translate(625.68 1351.75)">23</text>
                </g>
                <g id="TEXT-190" data-name="TEXT">
                    <text class="cls-6" transform="translate(613.27 1351.35)">24</text>
                </g>
                <g id="TEXT-191" data-name="TEXT">
                    <text class="cls-6" transform="translate(600.52 1350.05)">25</text>
                </g>
                <g id="TEXT-192" data-name="TEXT">
                    <text class="cls-6" transform="translate(587.61 1349.94)">26</text>
                </g>
                <g id="TEXT-193" data-name="TEXT">
                    <text class="cls-6" transform="translate(574.32 1349.35)">27</text>
                </g>
                <g id="TEXT-194" data-name="TEXT">
                    <text class="cls-6" transform="translate(561.37 1348.65)">28</text>
                </g>
                <g id="TEXT-195" data-name="TEXT">
                    <text class="cls-6" transform="translate(548.42 1348.04)">29</text>
                </g>
                <g id="TEXT-196" data-name="TEXT">
                    <text class="cls-6" transform="translate(535.46 1347.42)">30</text>
                </g>
                <g id="TEXT-197" data-name="TEXT">
                    <text class="cls-6" transform="translate(522.51 1346.8)">31</text>
                </g>
                <g id="TEXT-198" data-name="TEXT">
                    <text class="cls-6" transform="translate(509.56 1346.19)">32</text>
                </g>
                <g id="TEXT-199" data-name="TEXT">
                    <text class="cls-6" transform="translate(496.61 1345.57)">33</text>
                </g>
                <g id="TEXT-200" data-name="TEXT">
                    <text class="cls-6" transform="translate(483.66 1344.95)">34</text>
                </g>
            </g>
            <g id="MZ-36">
                <path class="cls-3" d="M479.18,1209.15l-15.3-1s-11.8-1.4-13.1,13l-2.4,46.2s-1.5,10.7,9.8,11.9l219,10.9s9.3-.1,9.8-10.9l2.4-45.9s1.7-13.8-13.2-14.6Z"/>
                <polygon class="cls-4" points="486.38 1213.05 484.77 1245.45 497.68 1246.05 499.27 1213.65 486.38 1213.05"/>
                <polygon class="cls-4" points="499.27 1213.65 497.68 1246.05 510.57 1246.75 512.27 1214.35 499.27 1213.65"/>
                <polygon class="cls-4" points="512.27 1214.35 510.68 1246.75 523.58 1247.35 525.17 1214.95 512.27 1214.35"/>
                <polygon class="cls-4" points="525.17 1214.95 523.58 1247.35 536.58 1248.05 538.17 1215.65 525.17 1214.95"/>
                <polygon class="cls-4" points="538.17 1215.65 536.58 1248.05 549.48 1248.65 551.08 1216.25 538.17 1215.65"/>
                <polygon class="cls-4" points="551.08 1216.25 549.48 1248.65 562.48 1249.35 564.08 1216.95 551.08 1216.25"/>
                <polygon class="cls-4" points="564.08 1216.95 562.48 1249.35 575.38 1249.95 576.98 1217.55 564.08 1216.95"/>
                <polygon class="cls-4" points="576.98 1217.55 575.38 1249.95 588.38 1250.65 589.98 1218.25 576.98 1217.55"/>
                <polygon class="cls-4" points="602.88 1218.85 601.27 1251.25 614.27 1251.95 615.88 1219.55 602.88 1218.85"/>
                <polygon class="cls-4" points="589.98 1218.25 588.38 1250.65 601.27 1251.25 602.88 1218.85 589.98 1218.25"/>
                <polygon class="cls-4" points="615.88 1219.55 614.27 1251.95 627.17 1252.55 628.77 1220.15 615.88 1219.55"/>
                <polygon class="cls-4" points="628.77 1220.15 627.27 1252.55 640.17 1253.25 641.77 1220.85 628.77 1220.15"/>
                <polygon class="cls-4" points="641.77 1220.85 640.17 1253.25 653.08 1253.85 654.77 1221.45 641.77 1220.85"/>
                <polygon class="cls-4" points="484.68 1245.45 483.07 1277.75 496.07 1278.45 497.68 1246.05 484.68 1245.45"/>
                <polygon class="cls-4" points="497.68 1246.05 496.07 1278.45 508.98 1279.05 510.57 1246.75 497.68 1246.05"/>
                <polygon class="cls-4" points="510.57 1246.75 508.98 1279.05 521.98 1279.75 523.58 1247.35 510.57 1246.75"/>
                <polygon class="cls-4" points="523.58 1247.35 521.98 1279.75 534.88 1280.35 536.48 1248.05 523.58 1247.35"/>
                <polygon class="cls-4" points="536.48 1248.05 534.88 1280.35 547.77 1281.05 549.48 1248.65 536.48 1248.05"/>
                <polygon class="cls-4" points="549.48 1248.65 547.88 1281.05 560.77 1281.65 562.38 1249.35 549.48 1248.65"/>
                <polygon class="cls-4" points="562.38 1249.35 560.77 1281.65 573.77 1282.35 575.38 1249.95 562.38 1249.35"/>
                <polygon class="cls-4" points="575.38 1249.95 573.77 1282.35 586.67 1282.95 588.27 1250.65 575.38 1249.95"/>
                <polygon class="cls-4" points="601.27 1251.25 599.67 1283.65 612.58 1284.25 614.17 1251.95 601.27 1251.25"/>
                <polygon class="cls-4" points="588.27 1250.65 586.67 1282.95 599.58 1283.65 601.27 1251.25 588.27 1250.65"/>
                <polygon class="cls-4" points="614.17 1251.95 612.58 1284.25 625.48 1284.95 627.17 1252.55 614.17 1251.95"/>
                <polygon class="cls-4" points="627.17 1252.55 625.58 1284.95 638.48 1285.55 640.08 1253.25 627.17 1252.55"/>
                <polygon class="cls-4" points="640.17 1253.25 638.58 1285.55 651.48 1286.25 653.08 1253.85 640.17 1253.25"/>
                <path class="cls-4" d="M486.38,1213l-22.7-1.1s-8.5-.8-10.4,9.2l-.1,6.6,32.4,1.6Z"/>
                <polygon class="cls-4" points="453.18 1227.65 452.38 1243.75 484.68 1245.45 485.48 1229.35 453.18 1227.65"/>
                <polygon class="cls-4" points="484.68 1245.45 483.88 1261.65 451.57 1259.95 452.38 1243.75 484.68 1245.45"/>
                <path class="cls-4" d="M483.08,1277.75l-23.1-1.2-2.1-.1s-6.7-.6-6.9-7.6l.4-8.9,32.4,1.6Z"/>
                <path class="cls-4" d="M654.78,1221.45l20.8,1.1s12.4,1.1,10.8,16.2v.5l-32.4-1.6Z"/>
                <polygon class="cls-4" points="653.88 1237.65 653.08 1253.85 685.48 1255.45 686.27 1239.25 653.88 1237.65"/>
                <polygon class="cls-4" points="653.08 1253.85 652.27 1270.15 684.67 1271.65 685.48 1255.45 653.08 1253.85"/>
                <path class="cls-4" d="M652.28,1270.15l-.8,16.1,25.2,1.2s6.9-.1,7.5-7.2l.4-8.6Z"/>
                <g id="TEXT-201" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 555.43, 1255.52)">MZ-36</text>
                </g>
                <g id="TEXT-202" data-name="TEXT">
                    <text class="cls-6" transform="translate(465.83 1273.87)">1</text>
                </g>
                <g id="TEXT-203" data-name="TEXT">
                    <text class="cls-6" transform="translate(466.37 1257.26)">2</text>
                </g>
                <g id="TEXT-204" data-name="TEXT">
                    <text class="cls-6" transform="translate(467.1 1241.74)">3</text>
                </g>
                <g id="TEXT-205" data-name="TEXT">
                    <text class="cls-6" transform="translate(467.83 1227.05)">4</text>
                </g>
                <g id="TEXT-206" data-name="TEXT">
                    <text class="cls-6" transform="translate(490.35 1234.89)">5</text>
                </g>
                <g id="TEXT-207" data-name="TEXT">
                    <text class="cls-6" transform="translate(503.2 1235.46)">6</text>
                </g>
                <g id="TEXT-208" data-name="TEXT">
                    <text class="cls-6" transform="translate(516.21 1236.01)">7</text>
                </g>
                <g id="TEXT-209" data-name="TEXT">
                    <text class="cls-6" transform="translate(529.35 1236.92)">8</text>
                </g>
                <g id="TEXT-210" data-name="TEXT">
                    <text class="cls-6" transform="translate(541.96 1237.65)">9</text>
                </g>
                <g id="TEXT-211" data-name="TEXT">
                    <text class="cls-6" transform="translate(554.58 1237.8)">10</text>
                </g>
                <g id="TEXT-212" data-name="TEXT">
                    <text class="cls-6" transform="translate(567.28 1238.41)">
                        <tspan class="cls-7">1</tspan>
                        <tspan x="2.41" y="0">1</tspan>
                    </text>
                </g>
                <g id="TEXT-213" data-name="TEXT">
                    <text class="cls-6" transform="translate(580.21 1239.02)">12</text>
                </g>
                <g id="TEXT-214" data-name="TEXT">
                    <text class="cls-6" transform="translate(593.21 1239.85)">13</text>
                </g>
                <g id="TEXT-215" data-name="TEXT">
                    <text class="cls-6" transform="translate(605.93 1240.45)">14</text>
                </g>
                <g id="TEXT-216" data-name="TEXT">
                    <text class="cls-6" transform="translate(618.43 1241.01)">15</text>
                </g>
                <g id="TEXT-217" data-name="TEXT">
                    <text class="cls-6" transform="translate(632.22 1241.64)">16</text>
                </g>
                <g id="TEXT-218" data-name="TEXT">
                    <text class="cls-6" transform="translate(644.87 1242.63)">17</text>
                </g>
                <g id="TEXT-219" data-name="TEXT">
                    <text class="cls-6" transform="translate(666.2 1235.5)">18</text>
                </g>
                <g id="TEXT-220" data-name="TEXT">
                    <text class="cls-6" transform="translate(666.1 1250.81)">19</text>
                </g>
                <g id="TEXT-221" data-name="TEXT">
                    <text class="cls-6" transform="translate(665.37 1267.76)">20</text>
                </g>
                <g id="TEXT-222" data-name="TEXT">
                    <text class="cls-6" transform="translate(665.18 1283.3)">21</text>
                </g>
                <g id="TEXT-223" data-name="TEXT">
                    <text class="cls-6" transform="translate(643.09 1274.82)">22</text>
                </g>
                <g id="TEXT-224" data-name="TEXT">
                    <text class="cls-6" transform="translate(629.57 1274.05)">23</text>
                </g>
                <g id="TEXT-225" data-name="TEXT">
                    <text class="cls-6" transform="translate(617.16 1273.65)">24</text>
                </g>
                <g id="TEXT-226" data-name="TEXT">
                    <text class="cls-6" transform="translate(604.41 1272.35)">25</text>
                </g>
                <g id="TEXT-227" data-name="TEXT">
                    <text class="cls-6" transform="translate(591.5 1272.24)">26</text>
                </g>
                <g id="TEXT-228" data-name="TEXT">
                    <text class="cls-6" transform="translate(578.21 1271.65)">27</text>
                </g>
                <g id="TEXT-229" data-name="TEXT">
                    <text class="cls-6" transform="translate(565.26 1270.95)">28</text>
                </g>
                <g id="TEXT-230" data-name="TEXT">
                    <text class="cls-6" transform="translate(552.31 1270.34)">29</text>
                </g>
                <g id="TEXT-231" data-name="TEXT">
                    <text class="cls-6" transform="translate(539.36 1269.72)">30</text>
                </g>
                <g id="TEXT-232" data-name="TEXT">
                    <text class="cls-6" transform="translate(526.4 1269.1)">31</text>
                </g>
                <g id="TEXT-233" data-name="TEXT">
                    <text class="cls-6" transform="translate(513.45 1268.49)">32</text>
                </g>
                <g id="TEXT-234" data-name="TEXT">
                    <text class="cls-6" transform="translate(500.5 1267.87)">33</text>
                </g>
                <g id="TEXT-235" data-name="TEXT">
                    <text class="cls-6" transform="translate(487.55 1267.25)">34</text>
                </g>
            </g>
            <g id="MZ-35">
                <path class="cls-3" d="M483,1131.25l-15.3-1s-11.8-1.4-13.1,13l-2.4,46.2s-1.5,10.7,9.8,11.9l219,10.9s9.3-.1,9.8-10.9l2.4-45.9s1.7-13.8-13.2-14.6Z"/>
                <polygon class="cls-4" points="490.18 1135.15 488.57 1167.45 501.48 1168.15 503.07 1135.75 490.18 1135.15"/>
                <polygon class="cls-4" points="503.07 1135.75 501.48 1168.15 514.38 1168.75 515.98 1136.45 503.07 1135.75"/>
                <polygon class="cls-4" points="516.08 1136.45 514.48 1168.75 527.38 1169.45 528.98 1137.05 516.08 1136.45"/>
                <polygon class="cls-4" points="528.98 1137.05 527.38 1169.45 540.27 1170.05 541.98 1137.75 528.98 1137.05"/>
                <polygon class="cls-4" points="541.88 1137.75 540.27 1170.05 553.27 1170.75 554.88 1138.35 541.88 1137.75"/>
                <polygon class="cls-4" points="554.88 1138.35 553.27 1170.75 566.17 1171.35 567.88 1139.05 554.88 1138.35"/>
                <polygon class="cls-4" points="567.88 1139.05 566.27 1171.35 579.17 1172.05 580.77 1139.65 567.88 1139.05"/>
                <polygon class="cls-4" points="580.77 1139.65 579.17 1172.05 592.08 1172.65 593.77 1140.35 580.77 1139.65"/>
                <polygon class="cls-4" points="606.67 1140.95 605.08 1173.35 618.08 1173.95 619.67 1141.65 606.67 1140.95"/>
                <polygon class="cls-4" points="593.67 1140.35 592.08 1172.65 605.08 1173.35 606.67 1140.95 593.67 1140.35"/>
                <polygon class="cls-4" points="619.67 1141.65 618.08 1173.95 630.98 1174.65 632.58 1142.25 619.67 1141.65"/>
                <polygon class="cls-4" points="632.58 1142.25 630.98 1174.65 643.98 1175.25 645.58 1142.95 632.58 1142.25"/>
                <polygon class="cls-4" points="645.58 1142.95 643.98 1175.25 656.88 1175.95 658.48 1143.55 645.58 1142.95"/>
                <polygon class="cls-4" points="488.48 1167.45 486.88 1199.85 499.77 1200.55 501.48 1168.15 488.48 1167.45"/>
                <polygon class="cls-4" points="501.38 1168.15 499.77 1200.55 512.77 1201.15 514.38 1168.75 501.38 1168.15"/>
                <polygon class="cls-4" points="514.38 1168.75 512.77 1201.15 525.67 1201.85 527.38 1169.45 514.38 1168.75"/>
                <polygon class="cls-4" points="527.38 1169.45 525.77 1201.85 538.67 1202.45 540.27 1170.05 527.38 1169.45"/>
                <polygon class="cls-4" points="540.27 1170.05 538.67 1202.45 551.58 1203.15 553.17 1170.75 540.27 1170.05"/>
                <polygon class="cls-4" points="553.27 1170.75 551.67 1203.15 564.58 1203.75 566.17 1171.35 553.27 1170.75"/>
                <polygon class="cls-4" points="566.17 1171.35 564.58 1203.75 577.58 1204.45 579.17 1172.05 566.17 1171.35"/>
                <polygon class="cls-4" points="579.17 1172.05 577.58 1204.45 590.48 1205.05 592.08 1172.65 579.17 1172.05"/>
                <polygon class="cls-4" points="605.08 1173.35 603.48 1205.75 616.38 1206.35 617.98 1173.95 605.08 1173.35"/>
                <polygon class="cls-4" points="592.08 1172.65 590.48 1205.05 603.38 1205.75 604.98 1173.35 592.08 1172.65"/>
                <polygon class="cls-4" points="617.98 1173.95 616.38 1206.35 629.27 1207.05 630.98 1174.65 617.98 1173.95"/>
                <polygon class="cls-4" points="630.98 1174.65 629.38 1207.05 642.27 1207.65 643.88 1175.25 630.98 1174.65"/>
                <polygon class="cls-4" points="643.88 1175.25 642.27 1207.65 655.27 1208.35 656.88 1175.95 643.88 1175.25"/>
                <path class="cls-4" d="M490.18,1135.15l-22.7-1.1s-8.5-.8-10.4,9.2l-.1,6.6,32.4,1.6Z"/>
                <polygon class="cls-4" points="456.88 1149.75 456.18 1165.85 488.48 1167.45 489.27 1151.35 456.88 1149.75"/>
                <polygon class="cls-4" points="488.48 1167.45 487.68 1183.65 455.38 1182.05 456.18 1165.85 488.48 1167.45"/>
                <path class="cls-4" d="M486.88,1199.85l-23.1-1.2-2.1-.1s-6.7-.6-6.9-7.6l.4-8.9,32.4,1.6Z"/>
                <path class="cls-4" d="M658.48,1143.55l20.8,1.1s12.4,1.1,10.8,16.2v.5l-32.4-1.6Z"/>
                <polygon class="cls-4" points="657.67 1159.75 656.88 1175.95 689.27 1177.55 690.08 1161.35 657.67 1159.75"/>
                <polygon class="cls-4" points="656.88 1175.95 656.08 1192.25 688.48 1193.75 689.27 1177.55 656.88 1175.95"/>
                <path class="cls-4" d="M656.08,1192.25l-.8,16.1,25.2,1.2s6.9-.1,7.5-7.2l.4-8.6Z"/>
                <g id="TEXT-236" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 560.32, 1175.91)">MZ-35</text>
                </g>
                <g id="TEXT-237" data-name="TEXT">
                    <text class="cls-6" transform="translate(469.73 1196.17)">1</text>
                </g>
                <g id="TEXT-238" data-name="TEXT">
                    <text class="cls-6" transform="translate(470.27 1179.56)">2</text>
                </g>
                <g id="TEXT-239" data-name="TEXT">
                    <text class="cls-6" transform="translate(470.99 1164.04)">3</text>
                </g>
                <g id="TEXT-240" data-name="TEXT">
                    <text class="cls-6" transform="translate(471.72 1149.35)">4</text>
                </g>
                <g id="TEXT-241" data-name="TEXT">
                    <text class="cls-6" transform="translate(494.24 1157.19)">5</text>
                </g>
                <g id="TEXT-242" data-name="TEXT">
                    <text class="cls-6" transform="translate(507.1 1157.76)">6</text>
                </g>
                <g id="TEXT-243" data-name="TEXT">
                    <text class="cls-6" transform="translate(520.1 1158.31)">7</text>
                </g>
                <g id="TEXT-244" data-name="TEXT">
                    <text class="cls-6" transform="translate(533.24 1159.21)">8</text>
                </g>
                <g id="TEXT-245" data-name="TEXT">
                    <text class="cls-6" transform="translate(545.85 1159.95)">9</text>
                </g>
                <g id="TEXT-246" data-name="TEXT">
                    <text class="cls-6" transform="translate(558.47 1160.09)">10</text>
                </g>
                <g id="TEXT-247" data-name="TEXT">
                    <text class="cls-6" transform="translate(571.17 1160.71)">
                        <tspan class="cls-7">1</tspan>
                        <tspan x="2.41" y="0">1</tspan>
                    </text>
                </g>
                <g id="TEXT-248" data-name="TEXT">
                    <text class="cls-6" transform="translate(584.11 1161.32)">12</text>
                </g>
                <g id="TEXT-249" data-name="TEXT">
                    <text class="cls-6" transform="translate(597.1 1162.15)">13</text>
                </g>
                <g id="TEXT-250" data-name="TEXT">
                    <text class="cls-6" transform="translate(609.83 1162.75)">14</text>
                </g>
                <g id="TEXT-251" data-name="TEXT">
                    <text class="cls-6" transform="translate(622.33 1163.31)">15</text>
                </g>
                <g id="TEXT-252" data-name="TEXT">
                    <text class="cls-6" transform="translate(636.11 1163.94)">16</text>
                </g>
                <g id="TEXT-253" data-name="TEXT">
                    <text class="cls-6" transform="translate(648.76 1164.93)">17</text>
                </g>
                <g id="TEXT-254" data-name="TEXT">
                    <text class="cls-6" transform="translate(670.09 1157.8)">18</text>
                </g>
                <g id="TEXT-255" data-name="TEXT">
                    <text class="cls-6" transform="translate(670 1173.11)">19</text>
                </g>
                <g id="TEXT-256" data-name="TEXT">
                    <text class="cls-6" transform="translate(669.26 1190.05)">20</text>
                </g>
                <g id="TEXT-257" data-name="TEXT">
                    <text class="cls-6" transform="translate(669.07 1205.6)">21</text>
                </g>
                <g id="TEXT-258" data-name="TEXT">
                    <text class="cls-6" transform="translate(646.98 1197.12)">22</text>
                </g>
                <g id="TEXT-259" data-name="TEXT">
                    <text class="cls-6" transform="translate(633.47 1196.35)">23</text>
                </g>
                <g id="TEXT-260" data-name="TEXT">
                    <text class="cls-6" transform="translate(621.06 1195.95)">24</text>
                </g>
                <g id="TEXT-261" data-name="TEXT">
                    <text class="cls-6" transform="translate(608.31 1194.65)">25</text>
                </g>
                <g id="TEXT-262" data-name="TEXT">
                    <text class="cls-6" transform="translate(595.4 1194.53)">26</text>
                </g>
                <g id="TEXT-263" data-name="TEXT">
                    <text class="cls-6" transform="translate(582.1 1193.95)">27</text>
                </g>
                <g id="TEXT-264" data-name="TEXT">
                    <text class="cls-6" transform="translate(569.15 1193.25)">28</text>
                </g>
                <g id="TEXT-265" data-name="TEXT">
                    <text class="cls-6" transform="translate(556.2 1192.63)">29</text>
                </g>
                <g id="TEXT-266" data-name="TEXT">
                    <text class="cls-6" transform="translate(543.25 1192.02)">30</text>
                </g>
                <g id="TEXT-267" data-name="TEXT">
                    <text class="cls-6" transform="translate(530.3 1191.4)">31</text>
                </g>
                <g id="TEXT-268" data-name="TEXT">
                    <text class="cls-6" transform="translate(517.35 1190.78)">32</text>
                </g>
                <g id="TEXT-269" data-name="TEXT">
                    <text class="cls-6" transform="translate(504.39 1190.17)">33</text>
                </g>
                <g id="TEXT-270" data-name="TEXT">
                    <text class="cls-6" transform="translate(491.44 1189.55)">34</text>
                </g>
            </g>
            <g id="MZ-33">
                <path class="cls-3" d="M490.18,976.45l-15.3-1s-11.8-1.4-13.1,13l-2.4,46.2s-1.5,10.7,9.8,11.9l219,10.9s9.3-.1,9.8-10.9l2.4-45.9s1.7-13.8-13.2-14.6Z"/>
                <polygon class="cls-4" points="497.38 980.35 495.77 1012.75 508.68 1013.35 510.27 981.05 497.38 980.35"/>
                <polygon class="cls-4" points="510.27 981.05 508.68 1013.35 521.58 1014.05 523.27 981.65 510.27 981.05"/>
                <polygon class="cls-4" points="523.27 981.65 521.67 1014.05 534.58 1014.65 536.17 982.35 523.27 981.65"/>
                <polygon class="cls-4" points="536.17 982.35 534.58 1014.65 547.58 1015.35 549.17 982.95 536.17 982.35"/>
                <polygon class="cls-4" points="549.17 982.95 547.58 1015.35 560.48 1015.95 562.08 983.65 549.17 982.95"/>
                <polygon class="cls-4" points="562.08 983.65 560.48 1015.95 573.48 1016.65 575.08 984.25 562.08 983.65"/>
                <polygon class="cls-4" points="575.08 984.25 573.48 1016.65 586.38 1017.25 587.98 984.95 575.08 984.25"/>
                <polygon class="cls-4" points="587.98 984.95 586.38 1017.25 599.38 1017.95 600.98 985.55 587.98 984.95"/>
                <polygon class="cls-4" points="613.88 986.15 612.38 1018.55 625.27 1019.25 626.88 986.85 613.88 986.15"/>
                <polygon class="cls-4" points="600.98 985.55 599.38 1017.95 612.27 1018.55 613.88 986.15 600.98 985.55"/>
                <polygon class="cls-4" points="626.88 986.85 625.27 1019.25 638.17 1019.85 639.77 987.45 626.88 986.85"/>
                <polygon class="cls-4" points="639.88 987.45 638.27 1019.85 651.17 1020.55 652.77 988.15 639.88 987.45"/>
                <polygon class="cls-4" points="652.77 988.15 651.17 1020.55 664.08 1021.15 665.77 988.75 652.77 988.15"/>
                <polygon class="cls-4" points="495.68 1012.75 494.07 1045.15 507.07 1045.75 508.68 1013.35 495.68 1012.75"/>
                <polygon class="cls-4" points="508.68 1013.35 507.07 1045.75 519.98 1046.45 521.58 1014.05 508.68 1013.35"/>
                <polygon class="cls-4" points="521.58 1014.05 519.98 1046.45 532.98 1047.05 534.58 1014.65 521.58 1014.05"/>
                <polygon class="cls-4" points="534.58 1014.65 532.98 1047.05 545.88 1047.75 547.48 1015.35 534.58 1014.65"/>
                <polygon class="cls-4" points="547.48 1015.35 545.88 1047.75 558.77 1048.35 560.48 1015.95 547.48 1015.35"/>
                <polygon class="cls-4" points="560.48 1015.95 558.88 1048.35 571.77 1049.05 573.38 1016.65 560.48 1015.95"/>
                <polygon class="cls-4" points="573.38 1016.65 571.77 1049.05 584.77 1049.65 586.38 1017.25 573.38 1016.65"/>
                <polygon class="cls-4" points="586.38 1017.25 584.77 1049.65 597.67 1050.35 599.27 1017.95 586.38 1017.25"/>
                <polygon class="cls-4" points="612.27 1018.55 610.67 1050.95 623.58 1051.65 625.17 1019.25 612.27 1018.55"/>
                <polygon class="cls-4" points="599.27 1017.95 597.67 1050.35 610.58 1050.95 612.27 1018.55 599.27 1017.95"/>
                <polygon class="cls-4" points="625.17 1019.25 623.58 1051.65 636.58 1052.25 638.17 1019.85 625.17 1019.25"/>
                <polygon class="cls-4" points="638.17 1019.85 636.58 1052.25 649.48 1052.95 651.17 1020.55 638.17 1019.85"/>
                <polygon class="cls-4" points="651.17 1020.55 649.58 1052.95 662.48 1053.55 664.08 1021.15 651.17 1020.55"/>
                <path class="cls-4" d="M497.38,980.35l-22.7-1.1s-8.5-.8-10.4,9.2l-.1,6.6,32.4,1.6Z"/>
                <polygon class="cls-4" points="464.18 995.05 463.38 1011.15 495.68 1012.75 496.48 996.65 464.18 995.05"/>
                <polygon class="cls-4" points="495.68 1012.75 494.88 1028.95 462.57 1027.35 463.38 1011.15 495.68 1012.75"/>
                <path class="cls-4" d="M494.08,1045.15l-23.1-1.2-2.1-.1s-6.7-.6-6.9-7.6l.4-8.9,32.4,1.6Z"/>
                <path class="cls-4" d="M665.78,988.75l20.8,1.1s12.4,1.1,10.8,16.2v.5l-32.4-1.6Z"/>
                <polygon class="cls-4" points="664.88 1004.95 664.08 1021.15 696.48 1022.75 697.27 1006.65 664.88 1004.95"/>
                <polygon class="cls-4" points="664.08 1021.15 663.27 1037.45 695.67 1038.95 696.48 1022.75 664.08 1021.15"/>
                <path class="cls-4" d="M663.28,1037.45l-.8,16.1,25.2,1.2s6.9-.1,7.5-7.2l.4-8.6Z"/>
                <g id="TEXT-271" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 568.11, 1020.51)">MZ-33</text>
                </g>
                <g id="TEXT-272" data-name="TEXT">
                    <text class="cls-6" transform="translate(477.51 1040.76)">1</text>
                </g>
                <g id="TEXT-273" data-name="TEXT">
                    <text class="cls-6" transform="translate(478.05 1024.16)">2</text>
                </g>
                <g id="TEXT-274" data-name="TEXT">
                    <text class="cls-6" transform="translate(478.77 1008.64)">3</text>
                </g>
                <g id="TEXT-275" data-name="TEXT">
                    <text class="cls-6" transform="translate(479.51 993.95)">4</text>
                </g>
                <g id="TEXT-276" data-name="TEXT">
                    <text class="cls-6" transform="translate(502.03 1001.78)">5</text>
                </g>
                <g id="TEXT-277" data-name="TEXT">
                    <text class="cls-6" transform="translate(514.88 1002.35)">6</text>
                </g>
                <g id="TEXT-278" data-name="TEXT">
                    <text class="cls-6" transform="translate(527.89 1002.9)">7</text>
                </g>
                <g id="TEXT-279" data-name="TEXT">
                    <text class="cls-6" transform="translate(541.03 1003.81)">8</text>
                </g>
                <g id="TEXT-280" data-name="TEXT">
                    <text class="cls-6" transform="translate(553.64 1004.55)">9</text>
                </g>
                <g id="TEXT-281" data-name="TEXT">
                    <text class="cls-6" transform="translate(566.26 1004.69)">10</text>
                </g>
                <g id="TEXT-282" data-name="TEXT">
                    <text class="cls-6" transform="translate(578.96 1005.31)">
                        <tspan class="cls-7">1</tspan>
                        <tspan x="2.41" y="0">1</tspan>
                    </text>
                </g>
                <g id="TEXT-283" data-name="TEXT">
                    <text class="cls-6" transform="translate(591.89 1005.91)">12</text>
                </g>
                <g id="TEXT-284" data-name="TEXT">
                    <text class="cls-6" transform="translate(604.89 1006.74)">13</text>
                </g>
                <g id="TEXT-285" data-name="TEXT">
                    <text class="cls-6" transform="translate(617.61 1007.34)">14</text>
                </g>
                <g id="TEXT-286" data-name="TEXT">
                    <text class="cls-6" transform="translate(630.11 1007.9)">15</text>
                </g>
                <g id="TEXT-287" data-name="TEXT">
                    <text class="cls-6" transform="translate(643.9 1008.53)">16</text>
                </g>
                <g id="TEXT-288" data-name="TEXT">
                    <text class="cls-6" transform="translate(656.55 1009.52)">17</text>
                </g>
                <g id="TEXT-289" data-name="TEXT">
                    <text class="cls-6" transform="translate(677.87 1002.4)">18</text>
                </g>
                <g id="TEXT-290" data-name="TEXT">
                    <text class="cls-6" transform="translate(677.78 1017.7)">19</text>
                </g>
                <g id="TEXT-291" data-name="TEXT">
                    <text class="cls-6" transform="translate(677.05 1034.65)">20</text>
                </g>
                <g id="TEXT-292" data-name="TEXT">
                    <text class="cls-6" transform="translate(676.86 1050.19)">21</text>
                </g>
                <g id="TEXT-293" data-name="TEXT">
                    <text class="cls-6" transform="translate(654.77 1041.71)">22</text>
                </g>
                <g id="TEXT-294" data-name="TEXT">
                    <text class="cls-6" transform="translate(641.25 1040.94)">23</text>
                </g>
                <g id="TEXT-295" data-name="TEXT">
                    <text class="cls-6" transform="translate(628.84 1040.54)">24</text>
                </g>
                <g id="TEXT-296" data-name="TEXT">
                    <text class="cls-6" transform="translate(616.09 1039.24)">25</text>
                </g>
                <g id="TEXT-297" data-name="TEXT">
                    <text class="cls-6" transform="translate(603.18 1039.13)">26</text>
                </g>
                <g id="TEXT-298" data-name="TEXT">
                    <text class="cls-6" transform="translate(589.89 1038.54)">27</text>
                </g>
                <g id="TEXT-299" data-name="TEXT">
                    <text class="cls-6" transform="translate(576.94 1037.85)">28</text>
                </g>
                <g id="TEXT-300" data-name="TEXT">
                    <text class="cls-6" transform="translate(563.99 1037.23)">29</text>
                </g>
                <g id="TEXT-301" data-name="TEXT">
                    <text class="cls-6" transform="translate(551.04 1036.61)">30</text>
                </g>
                <g id="TEXT-302" data-name="TEXT">
                    <text class="cls-6" transform="translate(538.08 1036)">31</text>
                </g>
                <g id="TEXT-303" data-name="TEXT">
                    <text class="cls-6" transform="translate(525.13 1035.38)">32</text>
                </g>
                <g id="TEXT-304" data-name="TEXT">
                    <text class="cls-6" transform="translate(512.18 1034.76)">33</text>
                </g>
                <g id="TEXT-305" data-name="TEXT">
                    <text class="cls-6" transform="translate(499.23 1034.15)">34</text>
                </g>
            </g>
            <g id="MZ-33-2" data-name="MZ-33">
                <path class="cls-3" d="M494.41,898.23l-15.3-1s-11.8-1.4-13.1,13l-2.4,46.2s-1.5,10.7,9.8,11.9l219,10.9s9.3-.1,9.8-10.9l2.4-45.9s1.7-13.8-13.2-14.6Z"/>
                <polygon class="cls-4" points="501.61 902.13 500.01 934.53 512.91 935.13 514.51 902.83 501.61 902.13"/>
                <polygon class="cls-4" points="514.51 902.83 512.91 935.13 525.81 935.83 527.51 903.43 514.51 902.83"/>
                <polygon class="cls-4" points="527.51 903.43 525.91 935.83 538.81 936.43 540.41 904.13 527.51 903.43"/>
                <polygon class="cls-4" points="540.41 904.13 538.81 936.43 551.81 937.13 553.41 904.73 540.41 904.13"/>
                <polygon class="cls-4" points="553.41 904.73 551.81 937.13 564.71 937.73 566.31 905.43 553.41 904.73"/>
                <polygon class="cls-4" points="566.31 905.43 564.71 937.73 577.71 938.43 579.31 906.03 566.31 905.43"/>
                <polygon class="cls-4" points="579.31 906.03 577.71 938.43 590.61 939.03 592.21 906.73 579.31 906.03"/>
                <polygon class="cls-4" points="592.21 906.73 590.61 939.03 603.61 939.73 605.21 907.33 592.21 906.73"/>
                <polygon class="cls-4" points="618.11 907.93 616.61 940.33 629.51 941.03 631.11 908.63 618.11 907.93"/>
                <polygon class="cls-4" points="605.21 907.33 603.61 939.73 616.51 940.33 618.11 907.93 605.21 907.33"/>
                <polygon class="cls-4" points="631.11 908.63 629.51 941.03 642.41 941.63 644.01 909.23 631.11 908.63"/>
                <polygon class="cls-4" points="644.11 909.23 642.51 941.63 655.41 942.33 657.01 909.93 644.11 909.23"/>
                <polygon class="cls-4" points="657.01 909.93 655.41 942.33 668.31 942.93 670.01 910.53 657.01 909.93"/>
                <polygon class="cls-4" points="499.91 934.53 498.31 966.93 511.31 967.53 512.91 935.13 499.91 934.53"/>
                <polygon class="cls-4" points="512.91 935.13 511.31 967.53 524.21 968.23 525.81 935.83 512.91 935.13"/>
                <polygon class="cls-4" points="525.81 935.83 524.21 968.23 537.21 968.83 538.81 936.43 525.81 935.83"/>
                <polygon class="cls-4" points="538.81 936.43 537.21 968.83 550.11 969.53 551.71 937.13 538.81 936.43"/>
                <polygon class="cls-4" points="551.71 937.13 550.11 969.53 563.01 970.13 564.71 937.73 551.71 937.13"/>
                <polygon class="cls-4" points="564.71 937.73 563.11 970.13 576.01 970.83 577.61 938.43 564.71 937.73"/>
                <polygon class="cls-4" points="577.61 938.43 576.01 970.83 589.01 971.43 590.61 939.03 577.61 938.43"/>
                <polygon class="cls-4" points="590.61 939.03 589.01 971.43 601.91 972.13 603.51 939.73 590.61 939.03"/>
                <polygon class="cls-4" points="616.51 940.33 614.91 972.73 627.81 973.43 629.41 941.03 616.51 940.33"/>
                <polygon class="cls-4" points="603.51 939.73 601.91 972.13 614.81 972.73 616.51 940.33 603.51 939.73"/>
                <polygon class="cls-4" points="629.41 941.03 627.81 973.43 640.81 974.03 642.41 941.63 629.41 941.03"/>
                <polygon class="cls-4" points="642.41 941.63 640.81 974.03 653.71 974.73 655.41 942.33 642.41 941.63"/>
                <polygon class="cls-4" points="655.41 942.33 653.81 974.73 666.71 975.33 668.31 942.93 655.41 942.33"/>
                <path class="cls-4" d="M501.61,902.13l-22.7-1.1s-8.5-.8-10.4,9.2l-.1,6.6,32.4,1.6Z"/>
                <polygon class="cls-4" points="468.41 916.83 467.61 932.93 499.91 934.53 500.71 918.43 468.41 916.83"/>
                <polygon class="cls-4" points="499.91 934.53 499.11 950.73 466.81 949.13 467.61 932.93 499.91 934.53"/>
                <path class="cls-4" d="M498.31,966.93l-23.1-1.2-2.1-.1s-6.7-.6-6.9-7.6l.4-8.9,32.4,1.6Z"/>
                <path class="cls-4" d="M670,910.53l20.8,1.1s12.4,1.1,10.8,16.2v.5l-32.4-1.6Z"/>
                <polygon class="cls-4" points="669.11 926.73 668.31 942.93 700.71 944.53 701.51 928.43 669.11 926.73"/>
                <polygon class="cls-4" points="668.31 942.93 667.51 959.23 699.91 960.73 700.71 944.53 668.31 942.93"/>
                <path class="cls-4" d="M667.51,959.23l-.8,16.1,25.2,1.2s6.9-.1,7.5-7.2l.4-8.6Z"/>
                <g id="TEXT-306" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 572.34, 942.29)">MZ-32</text>
                </g>
                <g id="TEXT-307" data-name="TEXT">
                    <text class="cls-6" transform="translate(481.75 962.55)">1</text>
                </g>
                <g id="TEXT-308" data-name="TEXT">
                    <text class="cls-6" transform="translate(482.29 945.94)">2</text>
                </g>
                <g id="TEXT-309" data-name="TEXT">
                    <text class="cls-6" transform="translate(483.01 930.42)">3</text>
                </g>
                <g id="TEXT-310" data-name="TEXT">
                    <text class="cls-6" transform="translate(483.74 915.73)">4</text>
                </g>
                <g id="TEXT-311" data-name="TEXT">
                    <text class="cls-6" transform="translate(506.26 923.57)">5</text>
                </g>
                <g id="TEXT-312" data-name="TEXT">
                    <text class="cls-6" transform="translate(519.12 924.14)">6</text>
                </g>
                <g id="TEXT-313" data-name="TEXT">
                    <text class="cls-6" transform="translate(532.12 924.69)">7</text>
                </g>
                <g id="TEXT-314" data-name="TEXT">
                    <text class="cls-6" transform="translate(545.27 925.6)">8</text>
                </g>
                <g id="TEXT-315" data-name="TEXT">
                    <text class="cls-6" transform="translate(557.87 926.33)">9</text>
                </g>
                <g id="TEXT-316" data-name="TEXT">
                    <text class="cls-6" transform="translate(570.49 926.47)">10</text>
                </g>
                <g id="TEXT-317" data-name="TEXT">
                    <text class="cls-6" transform="translate(583.19 927.09)">
                        <tspan class="cls-7">1</tspan>
                        <tspan x="2.41" y="0">1</tspan>
                    </text>
                </g>
                <g id="TEXT-318" data-name="TEXT">
                    <text class="cls-6" transform="translate(596.13 927.7)">12</text>
                </g>
                <g id="TEXT-319" data-name="TEXT">
                    <text class="cls-6" transform="translate(609.12 928.53)">13</text>
                </g>
                <g id="TEXT-320" data-name="TEXT">
                    <text class="cls-6" transform="translate(621.85 929.13)">14</text>
                </g>
                <g id="TEXT-321" data-name="TEXT">
                    <text class="cls-6" transform="translate(634.35 929.69)">15</text>
                </g>
                <g id="TEXT-322" data-name="TEXT">
                    <text class="cls-6" transform="translate(648.14 930.32)">16</text>
                </g>
                <g id="TEXT-323" data-name="TEXT">
                    <text class="cls-6" transform="translate(660.79 931.31)">17</text>
                </g>
                <g id="TEXT-324" data-name="TEXT">
                    <text class="cls-6" transform="translate(682.11 924.18)">18</text>
                </g>
                <g id="TEXT-325" data-name="TEXT">
                    <text class="cls-6" transform="translate(682.02 939.49)">19</text>
                </g>
                <g id="TEXT-326" data-name="TEXT">
                    <text class="cls-6" transform="translate(681.28 956.43)">20</text>
                </g>
                <g id="TEXT-327" data-name="TEXT">
                    <text class="cls-6" transform="translate(681.1 971.98)">21</text>
                </g>
                <g id="TEXT-328" data-name="TEXT">
                    <text class="cls-6" transform="translate(659.01 963.5)">22</text>
                </g>
                <g id="TEXT-329" data-name="TEXT">
                    <text class="cls-6" transform="translate(645.49 962.73)">23</text>
                </g>
                <g id="TEXT-330" data-name="TEXT">
                    <text class="cls-6" transform="translate(633.08 962.33)">24</text>
                </g>
                <g id="TEXT-331" data-name="TEXT">
                    <text class="cls-6" transform="translate(620.33 961.03)">25</text>
                </g>
                <g id="TEXT-332" data-name="TEXT">
                    <text class="cls-6" transform="translate(607.42 960.91)">26</text>
                </g>
                <g id="TEXT-333" data-name="TEXT">
                    <text class="cls-6" transform="translate(594.12 960.33)">27</text>
                </g>
                <g id="TEXT-334" data-name="TEXT">
                    <text class="cls-6" transform="translate(581.17 959.63)">28</text>
                </g>
                <g id="TEXT-335" data-name="TEXT">
                    <text class="cls-6" transform="translate(568.22 959.01)">29</text>
                </g>
                <g id="TEXT-336" data-name="TEXT">
                    <text class="cls-6" transform="translate(555.27 958.4)">30</text>
                </g>
                <g id="TEXT-337" data-name="TEXT">
                    <text class="cls-6" transform="translate(542.32 957.78)">31</text>
                </g>
                <g id="TEXT-338" data-name="TEXT">
                    <text class="cls-6" transform="translate(529.37 957.16)">32</text>
                </g>
                <g id="TEXT-339" data-name="TEXT">
                    <text class="cls-6" transform="translate(516.42 956.55)">33</text>
                </g>
                <g id="TEXT-340" data-name="TEXT">
                    <text class="cls-6" transform="translate(503.46 955.93)">34</text>
                </g>
            </g>
            <g id="MZ-33-3" data-name="MZ-33">
                <path class="cls-3" d="M740.47,910.85l-15.3-1s-11.8-1.4-13.1,13l-2.4,46.2s-1.5,10.7,9.8,11.9l219,10.9s9.3-.1,9.8-10.9l2.4-45.9s1.7-13.8-13.2-14.6Z"/>
                <polygon class="cls-4" points="747.67 914.75 746.07 947.15 758.97 947.75 760.57 915.45 747.67 914.75"/>
                <polygon class="cls-4" points="760.57 915.45 758.97 947.75 771.87 948.45 773.57 916.05 760.57 915.45"/>
                <polygon class="cls-4" points="773.57 916.05 771.97 948.45 784.87 949.05 786.47 916.75 773.57 916.05"/>
                <polygon class="cls-4" points="786.47 916.75 784.87 949.05 797.87 949.75 799.47 917.35 786.47 916.75"/>
                <polygon class="cls-4" points="799.47 917.35 797.87 949.75 810.77 950.35 812.37 918.05 799.47 917.35"/>
                <polygon class="cls-4" points="812.37 918.05 810.77 950.35 823.77 951.05 825.37 918.65 812.37 918.05"/>
                <polygon class="cls-4" points="825.37 918.65 823.77 951.05 836.67 951.65 838.27 919.35 825.37 918.65"/>
                <polygon class="cls-4" points="838.27 919.35 836.67 951.65 849.67 952.35 851.27 919.95 838.27 919.35"/>
                <polygon class="cls-4" points="864.17 920.55 862.67 952.95 875.57 953.65 877.17 921.25 864.17 920.55"/>
                <polygon class="cls-4" points="851.27 919.95 849.67 952.35 862.57 952.95 864.17 920.55 851.27 919.95"/>
                <polygon class="cls-4" points="877.17 921.25 875.57 953.65 888.47 954.25 890.07 921.85 877.17 921.25"/>
                <polygon class="cls-4" points="890.17 921.85 888.57 954.25 901.47 954.95 903.07 922.55 890.17 921.85"/>
                <polygon class="cls-4" points="903.07 922.55 901.47 954.95 914.37 955.55 916.07 923.15 903.07 922.55"/>
                <polygon class="cls-4" points="745.97 947.15 744.37 979.55 757.37 980.15 758.97 947.75 745.97 947.15"/>
                <polygon class="cls-4" points="758.97 947.75 757.37 980.15 770.27 980.85 771.87 948.45 758.97 947.75"/>
                <polygon class="cls-4" points="771.87 948.45 770.27 980.85 783.27 981.45 784.87 949.05 771.87 948.45"/>
                <polygon class="cls-4" points="784.87 949.05 783.27 981.45 796.17 982.15 797.77 949.75 784.87 949.05"/>
                <polygon class="cls-4" points="797.77 949.75 796.17 982.15 809.07 982.75 810.77 950.35 797.77 949.75"/>
                <polygon class="cls-4" points="810.77 950.35 809.17 982.75 822.07 983.45 823.67 951.05 810.77 950.35"/>
                <polygon class="cls-4" points="823.67 951.05 822.07 983.45 835.07 984.05 836.67 951.65 823.67 951.05"/>
                <polygon class="cls-4" points="836.67 951.65 835.07 984.05 847.97 984.75 849.57 952.35 836.67 951.65"/>
                <polygon class="cls-4" points="862.57 952.95 860.97 985.35 873.87 986.05 875.47 953.65 862.57 952.95"/>
                <polygon class="cls-4" points="849.57 952.35 847.97 984.75 860.87 985.35 862.57 952.95 849.57 952.35"/>
                <polygon class="cls-4" points="875.47 953.65 873.87 986.05 886.87 986.65 888.47 954.25 875.47 953.65"/>
                <polygon class="cls-4" points="888.47 954.25 886.87 986.65 899.77 987.35 901.47 954.95 888.47 954.25"/>
                <polygon class="cls-4" points="901.47 954.95 899.87 987.35 912.77 987.95 914.37 955.55 901.47 954.95"/>
                <path class="cls-4" d="M747.67,914.75l-22.7-1.1s-8.5-.8-10.4,9.2l-.1,6.6,32.4,1.6Z"/>
                <polygon class="cls-4" points="714.47 929.45 713.67 945.55 745.97 947.15 746.77 931.05 714.47 929.45"/>
                <polygon class="cls-4" points="745.97 947.15 745.17 963.35 712.87 961.75 713.67 945.55 745.97 947.15"/>
                <path class="cls-4" d="M744.37,979.55l-23.1-1.2-2.1-.1s-6.7-.6-6.9-7.6l.4-8.9,32.4,1.6Z"/>
                <path class="cls-4" d="M916.07,923.15l20.8,1.1s12.4,1.1,10.8,16.2v.5l-32.4-1.6Z"/>
                <polygon class="cls-4" points="915.17 939.35 914.37 955.55 946.77 957.15 947.57 941.05 915.17 939.35"/>
                <polygon class="cls-4" points="914.37 955.55 913.57 971.85 945.97 973.35 946.77 957.15 914.37 955.55"/>
                <path class="cls-4" d="M913.57,971.85l-.8,16.1,25.2,1.2s6.9-.1,7.5-7.2l.4-8.6Z"/>
                <g id="TEXT-341" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 818.4, 954.91)">MZ-66</text>
                </g>
                <g id="TEXT-342" data-name="TEXT">
                    <text class="cls-6" transform="translate(727.81 975.16)">1</text>
                </g>
                <g id="TEXT-343" data-name="TEXT">
                    <text class="cls-6" transform="translate(728.34 958.56)">2</text>
                </g>
                <g id="TEXT-344" data-name="TEXT">
                    <text class="cls-6" transform="translate(729.07 943.04)">3</text>
                </g>
                <g id="TEXT-345" data-name="TEXT">
                    <text class="cls-6" transform="translate(729.8 928.35)">4</text>
                </g>
                <g id="TEXT-346" data-name="TEXT">
                    <text class="cls-6" transform="translate(752.32 936.19)">5</text>
                </g>
                <g id="TEXT-347" data-name="TEXT">
                    <text class="cls-6" transform="translate(765.18 936.76)">6</text>
                </g>
                <g id="TEXT-348" data-name="TEXT">
                    <text class="cls-6" transform="translate(778.18 937.31)">7</text>
                </g>
                <g id="TEXT-349" data-name="TEXT">
                    <text class="cls-6" transform="translate(791.32 938.21)">8</text>
                </g>
                <g id="TEXT-350" data-name="TEXT">
                    <text class="cls-6" transform="translate(803.93 938.95)">9</text>
                </g>
                <g id="TEXT-351" data-name="TEXT">
                    <text class="cls-6" transform="translate(816.55 939.09)">10</text>
                </g>
                <g id="TEXT-352" data-name="TEXT">
                    <text class="cls-6" transform="translate(829.25 939.71)">
                        <tspan class="cls-7">1</tspan>
                        <tspan x="2.41" y="0">1</tspan>
                    </text>
                </g>
                <g id="TEXT-353" data-name="TEXT">
                    <text class="cls-6" transform="translate(842.19 940.32)">12</text>
                </g>
                <g id="TEXT-354" data-name="TEXT">
                    <text class="cls-6" transform="translate(855.18 941.14)">13</text>
                </g>
                <g id="TEXT-355" data-name="TEXT">
                    <text class="cls-6" transform="translate(867.91 941.75)">14</text>
                </g>
                <g id="TEXT-356" data-name="TEXT">
                    <text class="cls-6" transform="translate(880.41 942.31)">15</text>
                </g>
                <g id="TEXT-357" data-name="TEXT">
                    <text class="cls-6" transform="translate(894.19 942.93)">16</text>
                </g>
                <g id="TEXT-358" data-name="TEXT">
                    <text class="cls-6" transform="translate(906.84 943.93)">17</text>
                </g>
                <g id="TEXT-359" data-name="TEXT">
                    <text class="cls-6" transform="translate(928.17 936.8)">18</text>
                </g>
                <g id="TEXT-360" data-name="TEXT">
                    <text class="cls-6" transform="translate(928.07 952.11)">19</text>
                </g>
                <g id="TEXT-361" data-name="TEXT">
                    <text class="cls-6" transform="translate(927.34 969.05)">20</text>
                </g>
                <g id="TEXT-362" data-name="TEXT">
                    <text class="cls-6" transform="translate(927.15 984.6)">21</text>
                </g>
                <g id="TEXT-363" data-name="TEXT">
                    <text class="cls-6" transform="translate(905.06 976.12)">22</text>
                </g>
                <g id="TEXT-364" data-name="TEXT">
                    <text class="cls-6" transform="translate(891.54 975.35)">23</text>
                </g>
                <g id="TEXT-365" data-name="TEXT">
                    <text class="cls-6" transform="translate(879.14 974.95)">24</text>
                </g>
                <g id="TEXT-366" data-name="TEXT">
                    <text class="cls-6" transform="translate(866.38 973.65)">25</text>
                </g>
                <g id="TEXT-367" data-name="TEXT">
                    <text class="cls-6" transform="translate(853.48 973.53)">26</text>
                </g>
                <g id="TEXT-368" data-name="TEXT">
                    <text class="cls-6" transform="translate(840.18 972.95)">27</text>
                </g>
                <g id="TEXT-369" data-name="TEXT">
                    <text class="cls-6" transform="translate(827.23 972.25)">28</text>
                </g>
                <g id="TEXT-370" data-name="TEXT">
                    <text class="cls-6" transform="translate(814.28 971.63)">29</text>
                </g>
                <g id="TEXT-371" data-name="TEXT">
                    <text class="cls-6" transform="translate(801.33 971.02)">30</text>
                </g>
                <g id="TEXT-372" data-name="TEXT">
                    <text class="cls-6" transform="translate(788.38 970.4)">31</text>
                </g>
                <g id="TEXT-373" data-name="TEXT">
                    <text class="cls-6" transform="translate(775.42 969.78)">32</text>
                </g>
                <g id="TEXT-374" data-name="TEXT">
                    <text class="cls-6" transform="translate(762.47 969.17)">33</text>
                </g>
                <g id="TEXT-375" data-name="TEXT">
                    <text class="cls-6" transform="translate(749.52 968.55)">34</text>
                </g>
            </g>
            <g id="MZ-33-4" data-name="MZ-33">
                <path class="cls-3" d="M744.45,833.24l-15.3-1s-11.8-1.4-13.1,13l-2.4,46.2s-1.5,10.7,9.8,11.9l219,10.9s9.3-.1,9.8-10.9l2.4-45.9s1.7-13.8-13.2-14.6Z"/>
                <polygon class="cls-4" points="751.65 837.14 750.05 869.54 762.95 870.14 764.55 837.84 751.65 837.14"/>
                <polygon class="cls-4" points="764.55 837.84 762.95 870.14 775.85 870.84 777.55 838.44 764.55 837.84"/>
                <polygon class="cls-4" points="777.55 838.44 775.95 870.84 788.85 871.44 790.45 839.14 777.55 838.44"/>
                <polygon class="cls-4" points="790.45 839.14 788.85 871.44 801.85 872.14 803.45 839.74 790.45 839.14"/>
                <polygon class="cls-4" points="803.45 839.74 801.85 872.14 814.75 872.74 816.35 840.44 803.45 839.74"/>
                <polygon class="cls-4" points="816.35 840.44 814.75 872.74 827.75 873.44 829.35 841.04 816.35 840.44"/>
                <polygon class="cls-4" points="829.35 841.04 827.75 873.44 840.65 874.04 842.25 841.74 829.35 841.04"/>
                <polygon class="cls-4" points="842.25 841.74 840.65 874.04 853.65 874.74 855.25 842.34 842.25 841.74"/>
                <polygon class="cls-4" points="868.15 842.94 866.65 875.34 879.55 876.04 881.15 843.64 868.15 842.94"/>
                <polygon class="cls-4" points="855.25 842.34 853.65 874.74 866.55 875.34 868.15 842.94 855.25 842.34"/>
                <polygon class="cls-4" points="881.15 843.64 879.55 876.04 892.45 876.64 894.05 844.24 881.15 843.64"/>
                <polygon class="cls-4" points="894.15 844.24 892.55 876.64 905.45 877.34 907.05 844.94 894.15 844.24"/>
                <polygon class="cls-4" points="907.05 844.94 905.45 877.34 918.35 877.94 920.05 845.54 907.05 844.94"/>
                <polygon class="cls-4" points="749.95 869.54 748.35 901.94 761.35 902.54 762.95 870.14 749.95 869.54"/>
                <polygon class="cls-4" points="762.95 870.14 761.35 902.54 774.25 903.24 775.85 870.84 762.95 870.14"/>
                <polygon class="cls-4" points="775.85 870.84 774.25 903.24 787.25 903.84 788.85 871.44 775.85 870.84"/>
                <polygon class="cls-4" points="788.85 871.44 787.25 903.84 800.15 904.54 801.75 872.14 788.85 871.44"/>
                <polygon class="cls-4" points="801.75 872.14 800.15 904.54 813.05 905.14 814.75 872.74 801.75 872.14"/>
                <polygon class="cls-4" points="814.75 872.74 813.15 905.14 826.05 905.84 827.65 873.44 814.75 872.74"/>
                <polygon class="cls-4" points="827.65 873.44 826.05 905.84 839.05 906.44 840.65 874.04 827.65 873.44"/>
                <polygon class="cls-4" points="840.65 874.04 839.05 906.44 851.95 907.14 853.55 874.74 840.65 874.04"/>
                <polygon class="cls-4" points="866.55 875.34 864.95 907.74 877.85 908.44 879.45 876.04 866.55 875.34"/>
                <polygon class="cls-4" points="853.55 874.74 851.95 907.14 864.85 907.74 866.55 875.34 853.55 874.74"/>
                <polygon class="cls-4" points="879.45 876.04 877.85 908.44 890.85 909.04 892.45 876.64 879.45 876.04"/>
                <polygon class="cls-4" points="892.45 876.64 890.85 909.04 903.75 909.74 905.45 877.34 892.45 876.64"/>
                <polygon class="cls-4" points="905.45 877.34 903.85 909.74 916.75 910.34 918.35 877.94 905.45 877.34"/>
                <path class="cls-4" d="M751.65,837.14,729,836s-8.5-.8-10.4,9.2l-.1,6.6,32.4,1.6Z"/>
                <polygon class="cls-4" points="718.45 851.84 717.65 867.94 749.95 869.54 750.75 853.44 718.45 851.84"/>
                <polygon class="cls-4" points="749.95 869.54 749.15 885.74 716.85 884.14 717.65 867.94 749.95 869.54"/>
                <path class="cls-4" d="M748.35,901.94l-23.1-1.2-2.1-.1s-6.7-.6-6.9-7.6l.4-8.9,32.4,1.6Z"/>
                <path class="cls-4" d="M920.05,845.54l20.8,1.1s12.4,1.1,10.8,16.2v.5l-32.4-1.6Z"/>
                <polygon class="cls-4" points="919.15 861.74 918.35 877.94 950.75 879.54 951.55 863.44 919.15 861.74"/>
                <polygon class="cls-4" points="918.35 877.94 917.55 894.24 949.95 895.74 950.75 879.54 918.35 877.94"/>
                <path class="cls-4" d="M917.55,894.24l-.8,16.1,25.2,1.2s6.9-.1,7.5-7.2l.4-8.6Z"/>
                <g id="TEXT-376" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 822.38, 877.3)">MZ-67</text>
                </g>
                <g id="TEXT-377" data-name="TEXT">
                    <text class="cls-6" transform="translate(731.79 897.55)">1</text>
                </g>
                <g id="TEXT-378" data-name="TEXT">
                    <text class="cls-6" transform="translate(732.33 880.95)">2</text>
                </g>
                <g id="TEXT-379" data-name="TEXT">
                    <text class="cls-6" transform="translate(733.05 865.43)">3</text>
                </g>
                <g id="TEXT-380" data-name="TEXT">
                    <text class="cls-6" transform="translate(733.78 850.74)">4</text>
                </g>
                <g id="TEXT-381" data-name="TEXT">
                    <text class="cls-6" transform="translate(756.3 858.57)">5</text>
                </g>
                <g id="TEXT-382" data-name="TEXT">
                    <text class="cls-6" transform="translate(769.16 859.14)">6</text>
                </g>
                <g id="TEXT-383" data-name="TEXT">
                    <text class="cls-6" transform="translate(782.16 859.69)">7</text>
                </g>
                <g id="TEXT-384" data-name="TEXT">
                    <text class="cls-6" transform="translate(795.31 860.6)">8</text>
                </g>
                <g id="TEXT-385" data-name="TEXT">
                    <text class="cls-6" transform="translate(807.91 861.34)">9</text>
                </g>
                <g id="TEXT-386" data-name="TEXT">
                    <text class="cls-6" transform="translate(820.54 861.48)">10</text>
                </g>
                <g id="TEXT-387" data-name="TEXT">
                    <text class="cls-6" transform="translate(833.23 862.1)">
                        <tspan class="cls-7">1</tspan>
                        <tspan x="2.41" y="0">1</tspan>
                    </text>
                </g>
                <g id="TEXT-388" data-name="TEXT">
                    <text class="cls-6" transform="translate(846.17 862.7)">12</text>
                </g>
                <g id="TEXT-389" data-name="TEXT">
                    <text class="cls-6" transform="translate(859.16 863.53)">13</text>
                </g>
                <g id="TEXT-390" data-name="TEXT">
                    <text class="cls-6" transform="translate(871.89 864.14)">14</text>
                </g>
                <g id="TEXT-391" data-name="TEXT">
                    <text class="cls-6" transform="translate(884.39 864.69)">15</text>
                </g>
                <g id="TEXT-392" data-name="TEXT">
                    <text class="cls-6" transform="translate(898.18 865.32)">16</text>
                </g>
                <g id="TEXT-393" data-name="TEXT">
                    <text class="cls-6" transform="translate(910.83 866.31)">17</text>
                </g>
                <g id="TEXT-394" data-name="TEXT">
                    <text class="cls-6" transform="translate(932.15 859.19)">18</text>
                </g>
                <g id="TEXT-395" data-name="TEXT">
                    <text class="cls-6" transform="translate(932.06 874.49)">19</text>
                </g>
                <g id="TEXT-396" data-name="TEXT">
                    <text class="cls-6" transform="translate(931.32 891.44)">20</text>
                </g>
                <g id="TEXT-397" data-name="TEXT">
                    <text class="cls-6" transform="translate(931.14 906.98)">21</text>
                </g>
                <g id="TEXT-398" data-name="TEXT">
                    <text class="cls-6" transform="translate(909.05 898.5)">22</text>
                </g>
                <g id="TEXT-399" data-name="TEXT">
                    <text class="cls-6" transform="translate(895.53 897.73)">23</text>
                </g>
                <g id="TEXT-400" data-name="TEXT">
                    <text class="cls-6" transform="translate(883.12 897.33)">24</text>
                </g>
                <g id="TEXT-401" data-name="TEXT">
                    <text class="cls-6" transform="translate(870.37 896.03)">25</text>
                </g>
                <g id="TEXT-402" data-name="TEXT">
                    <text class="cls-6" transform="translate(857.46 895.92)">26</text>
                </g>
                <g id="TEXT-403" data-name="TEXT">
                    <text class="cls-6" transform="translate(844.16 895.33)">27</text>
                </g>
                <g id="TEXT-404" data-name="TEXT">
                    <text class="cls-6" transform="translate(831.22 894.64)">28</text>
                </g>
                <g id="TEXT-405" data-name="TEXT">
                    <text class="cls-6" transform="translate(818.26 894.02)">29</text>
                </g>
                <g id="TEXT-406" data-name="TEXT">
                    <text class="cls-6" transform="translate(805.31 893.4)">30</text>
                </g>
                <g id="TEXT-407" data-name="TEXT">
                    <text class="cls-6" transform="translate(792.36 892.79)">31</text>
                </g>
                <g id="TEXT-408" data-name="TEXT">
                    <text class="cls-6" transform="translate(779.41 892.17)">32</text>
                </g>
                <g id="TEXT-409" data-name="TEXT">
                    <text class="cls-6" transform="translate(766.46 891.55)">33</text>
                </g>
                <g id="TEXT-410" data-name="TEXT">
                    <text class="cls-6" transform="translate(753.5 890.94)">34</text>
                </g>
            </g>
            <g id="MZ-33-5" data-name="MZ-33">
                <path class="cls-3" d="M747.86,748.54l-15.3-1s-11.8-1.4-13.1,13l-2.4,46.2s-1.5,10.7,9.8,11.9l219,10.9s9.3-.1,9.8-10.9l2.4-45.9s1.7-13.8-13.2-14.6Z"/>
                <polygon class="cls-4" points="755.06 752.44 753.46 784.84 766.36 785.44 767.96 753.14 755.06 752.44"/>
                <polygon class="cls-4" points="767.96 753.14 766.36 785.44 779.26 786.14 780.96 753.74 767.96 753.14"/>
                <polygon class="cls-4" points="780.96 753.74 779.36 786.14 792.26 786.74 793.86 754.44 780.96 753.74"/>
                <polygon class="cls-4" points="793.86 754.44 792.26 786.74 805.26 787.44 806.86 755.04 793.86 754.44"/>
                <polygon class="cls-4" points="806.86 755.04 805.26 787.44 818.16 788.04 819.76 755.74 806.86 755.04"/>
                <polygon class="cls-4" points="819.76 755.74 818.16 788.04 831.16 788.74 832.76 756.34 819.76 755.74"/>
                <polygon class="cls-4" points="832.76 756.34 831.16 788.74 844.06 789.34 845.66 757.04 832.76 756.34"/>
                <polygon class="cls-4" points="845.66 757.04 844.06 789.34 857.06 790.04 858.66 757.64 845.66 757.04"/>
                <polygon class="cls-4" points="871.56 758.24 870.06 790.64 882.96 791.34 884.56 758.94 871.56 758.24"/>
                <polygon class="cls-4" points="858.66 757.64 857.06 790.04 869.96 790.64 871.56 758.24 858.66 757.64"/>
                <polygon class="cls-4" points="884.56 758.94 882.96 791.34 895.86 791.94 897.46 759.54 884.56 758.94"/>
                <polygon class="cls-4" points="897.56 759.54 895.96 791.94 908.86 792.64 910.46 760.24 897.56 759.54"/>
                <polygon class="cls-4" points="910.46 760.24 908.86 792.64 921.76 793.24 923.46 760.84 910.46 760.24"/>
                <polygon class="cls-4" points="753.36 784.84 751.76 817.24 764.76 817.84 766.36 785.44 753.36 784.84"/>
                <polygon class="cls-4" points="766.36 785.44 764.76 817.84 777.66 818.54 779.26 786.14 766.36 785.44"/>
                <polygon class="cls-4" points="779.26 786.14 777.66 818.54 790.66 819.14 792.26 786.74 779.26 786.14"/>
                <polygon class="cls-4" points="792.26 786.74 790.66 819.14 803.56 819.84 805.16 787.44 792.26 786.74"/>
                <polygon class="cls-4" points="805.16 787.44 803.56 819.84 816.46 820.44 818.16 788.04 805.16 787.44"/>
                <polygon class="cls-4" points="818.16 788.04 816.56 820.44 829.46 821.14 831.06 788.74 818.16 788.04"/>
                <polygon class="cls-4" points="831.06 788.74 829.46 821.14 842.46 821.74 844.06 789.34 831.06 788.74"/>
                <polygon class="cls-4" points="844.06 789.34 842.46 821.74 855.36 822.44 856.96 790.04 844.06 789.34"/>
                <polygon class="cls-4" points="869.96 790.64 868.36 823.04 881.26 823.74 882.86 791.34 869.96 790.64"/>
                <polygon class="cls-4" points="856.96 790.04 855.36 822.44 868.26 823.04 869.96 790.64 856.96 790.04"/>
                <polygon class="cls-4" points="882.86 791.34 881.26 823.74 894.26 824.34 895.86 791.94 882.86 791.34"/>
                <polygon class="cls-4" points="895.86 791.94 894.26 824.34 907.16 825.04 908.86 792.64 895.86 791.94"/>
                <polygon class="cls-4" points="908.86 792.64 907.26 825.04 920.16 825.64 921.76 793.24 908.86 792.64"/>
                <path class="cls-4" d="M755.06,752.44l-22.7-1.1s-8.5-.8-10.4,9.2l-.1,6.6,32.4,1.6Z"/>
                <polygon class="cls-4" points="721.86 767.14 721.06 783.24 753.36 784.84 754.16 768.74 721.86 767.14"/>
                <polygon class="cls-4" points="753.36 784.84 752.56 801.04 720.26 799.44 721.06 783.24 753.36 784.84"/>
                <path class="cls-4" d="M751.76,817.24l-23.1-1.2-2.1-.1s-6.7-.6-6.9-7.6l.4-8.9,32.4,1.6Z"/>
                <path class="cls-4" d="M923.46,760.84l20.8,1.1s12.4,1.1,10.8,16.2v.5l-32.4-1.6Z"/>
                <polygon class="cls-4" points="922.56 777.04 921.76 793.24 954.16 794.84 954.96 778.74 922.56 777.04"/>
                <polygon class="cls-4" points="921.76 793.24 920.96 809.54 953.36 811.04 954.16 794.84 921.76 793.24"/>
                <path class="cls-4" d="M921,809.54l-.8,16.1,25.2,1.2s6.9-.1,7.5-7.2l.4-8.6Z"/>
                <g id="TEXT-411" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 825.8, 792.6)">MZ-68</text>
                </g>
                <g id="TEXT-412" data-name="TEXT">
                    <text class="cls-6" transform="translate(735.2 812.85)">1</text>
                </g>
                <g id="TEXT-413" data-name="TEXT">
                    <text class="cls-6" transform="translate(735.74 796.25)">2</text>
                </g>
                <g id="TEXT-414" data-name="TEXT">
                    <text class="cls-6" transform="translate(736.46 780.73)">3</text>
                </g>
                <g id="TEXT-415" data-name="TEXT">
                    <text class="cls-6" transform="translate(737.19 766.04)">4</text>
                </g>
                <g id="TEXT-416" data-name="TEXT">
                    <text class="cls-6" transform="translate(759.72 773.87)">5</text>
                </g>
                <g id="TEXT-417" data-name="TEXT">
                    <text class="cls-6" transform="translate(772.57 774.44)">6</text>
                </g>
                <g id="TEXT-418" data-name="TEXT">
                    <text class="cls-6" transform="translate(785.57 774.99)">7</text>
                </g>
                <g id="TEXT-419" data-name="TEXT">
                    <text class="cls-6" transform="translate(798.72 775.9)">8</text>
                </g>
                <g id="TEXT-420" data-name="TEXT">
                    <text class="cls-6" transform="translate(811.32 776.64)">9</text>
                </g>
                <g id="TEXT-421" data-name="TEXT">
                    <text class="cls-6" transform="translate(823.95 776.78)">10</text>
                </g>
                <g id="TEXT-422" data-name="TEXT">
                    <text class="cls-6" transform="translate(836.65 777.4)">
                        <tspan class="cls-7">1</tspan>
                        <tspan x="2.41" y="0">1</tspan>
                    </text>
                </g>
                <g id="TEXT-423" data-name="TEXT">
                    <text class="cls-6" transform="translate(849.58 778)">12</text>
                </g>
                <g id="TEXT-424" data-name="TEXT">
                    <text class="cls-6" transform="translate(862.57 778.83)">13</text>
                </g>
                <g id="TEXT-425" data-name="TEXT">
                    <text class="cls-6" transform="translate(875.3 779.43)">14</text>
                </g>
                <g id="TEXT-426" data-name="TEXT">
                    <text class="cls-6" transform="translate(887.8 779.99)">15</text>
                </g>
                <g id="TEXT-427" data-name="TEXT">
                    <text class="cls-6" transform="translate(901.59 780.62)">16</text>
                </g>
                <g id="TEXT-428" data-name="TEXT">
                    <text class="cls-6" transform="translate(914.24 781.61)">17</text>
                </g>
                <g id="TEXT-429" data-name="TEXT">
                    <text class="cls-6" transform="translate(935.56 774.49)">18</text>
                </g>
                <g id="TEXT-430" data-name="TEXT">
                    <text class="cls-6" transform="translate(935.47 789.79)">19</text>
                </g>
                <g id="TEXT-431" data-name="TEXT">
                    <text class="cls-6" transform="translate(934.74 806.74)">20</text>
                </g>
                <g id="TEXT-432" data-name="TEXT">
                    <text class="cls-6" transform="translate(934.55 822.28)">21</text>
                </g>
                <g id="TEXT-433" data-name="TEXT">
                    <text class="cls-6" transform="translate(912.46 813.8)">22</text>
                </g>
                <g id="TEXT-434" data-name="TEXT">
                    <text class="cls-6" transform="translate(898.94 813.03)">23</text>
                </g>
                <g id="TEXT-435" data-name="TEXT">
                    <text class="cls-6" transform="translate(886.53 812.63)">24</text>
                </g>
                <g id="TEXT-436" data-name="TEXT">
                    <text class="cls-6" transform="translate(873.78 811.33)">25</text>
                </g>
                <g id="TEXT-437" data-name="TEXT">
                    <text class="cls-6" transform="translate(860.87 811.22)">26</text>
                </g>
                <g id="TEXT-438" data-name="TEXT">
                    <text class="cls-6" transform="translate(847.58 810.63)">27</text>
                </g>
                <g id="TEXT-439" data-name="TEXT">
                    <text class="cls-6" transform="translate(834.63 809.94)">28</text>
                </g>
                <g id="TEXT-440" data-name="TEXT">
                    <text class="cls-6" transform="translate(821.68 809.32)">29</text>
                </g>
                <g id="TEXT-441" data-name="TEXT">
                    <text class="cls-6" transform="translate(808.72 808.7)">30</text>
                </g>
                <g id="TEXT-442" data-name="TEXT">
                    <text class="cls-6" transform="translate(795.77 808.09)">31</text>
                </g>
                <g id="TEXT-443" data-name="TEXT">
                    <text class="cls-6" transform="translate(782.82 807.47)">32</text>
                </g>
                <g id="TEXT-444" data-name="TEXT">
                    <text class="cls-6" transform="translate(769.87 806.85)">33</text>
                </g>
                <g id="TEXT-445" data-name="TEXT">
                    <text class="cls-6" transform="translate(756.92 806.24)">34</text>
                </g>
            </g>
            <g id="MZ-33-6" data-name="MZ-33">
                <path class="cls-3" d="M752.49,670.7l-15.3-1s-11.8-1.4-13.1,13l-2.4,46.2s-1.5,10.7,9.8,11.9l219,10.9s9.3-.1,9.8-10.9l2.4-45.9s1.7-13.8-13.2-14.6Z"/>
                <polygon class="cls-4" points="759.69 674.6 758.09 707 770.99 707.6 772.59 675.3 759.69 674.6"/>
                <polygon class="cls-4" points="772.59 675.3 770.99 707.6 783.89 708.3 785.59 675.9 772.59 675.3"/>
                <polygon class="cls-4" points="785.59 675.9 783.99 708.3 796.89 708.9 798.49 676.6 785.59 675.9"/>
                <polygon class="cls-4" points="798.49 676.6 796.89 708.9 809.89 709.6 811.49 677.2 798.49 676.6"/>
                <polygon class="cls-4" points="811.49 677.2 809.89 709.6 822.79 710.2 824.39 677.9 811.49 677.2"/>
                <polygon class="cls-4" points="824.39 677.9 822.79 710.2 835.79 710.9 837.39 678.5 824.39 677.9"/>
                <polygon class="cls-4" points="837.39 678.5 835.79 710.9 848.69 711.5 850.29 679.2 837.39 678.5"/>
                <polygon class="cls-4" points="850.29 679.2 848.69 711.5 861.69 712.2 863.29 679.8 850.29 679.2"/>
                <polygon class="cls-4" points="876.19 680.4 874.69 712.8 887.59 713.5 889.19 681.1 876.19 680.4"/>
                <polygon class="cls-4" points="863.29 679.8 861.69 712.2 874.59 712.8 876.19 680.4 863.29 679.8"/>
                <polygon class="cls-4" points="889.19 681.1 887.59 713.5 900.49 714.1 902.09 681.7 889.19 681.1"/>
                <polygon class="cls-4" points="902.19 681.7 900.59 714.1 913.49 714.8 915.09 682.4 902.19 681.7"/>
                <polygon class="cls-4" points="915.09 682.4 913.49 714.8 926.39 715.4 928.09 683 915.09 682.4"/>
                <polygon class="cls-4" points="757.99 707 756.39 739.4 769.39 740 770.99 707.6 757.99 707"/>
                <polygon class="cls-4" points="770.99 707.6 769.39 740 782.29 740.7 783.89 708.3 770.99 707.6"/>
                <polygon class="cls-4" points="783.89 708.3 782.29 740.7 795.29 741.3 796.89 708.9 783.89 708.3"/>
                <polygon class="cls-4" points="796.89 708.9 795.29 741.3 808.19 742 809.79 709.6 796.89 708.9"/>
                <polygon class="cls-4" points="809.79 709.6 808.19 742 821.09 742.6 822.79 710.2 809.79 709.6"/>
                <polygon class="cls-4" points="822.79 710.2 821.19 742.6 834.09 743.3 835.69 710.9 822.79 710.2"/>
                <polygon class="cls-4" points="835.69 710.9 834.09 743.3 847.09 743.9 848.69 711.5 835.69 710.9"/>
                <polygon class="cls-4" points="848.69 711.5 847.09 743.9 859.99 744.6 861.59 712.2 848.69 711.5"/>
                <polygon class="cls-4" points="874.59 712.8 872.99 745.2 885.89 745.9 887.49 713.5 874.59 712.8"/>
                <polygon class="cls-4" points="861.59 712.2 859.99 744.6 872.89 745.2 874.59 712.8 861.59 712.2"/>
                <polygon class="cls-4" points="887.49 713.5 885.89 745.9 898.89 746.5 900.49 714.1 887.49 713.5"/>
                <polygon class="cls-4" points="900.49 714.1 898.89 746.5 911.79 747.2 913.49 714.8 900.49 714.1"/>
                <polygon class="cls-4" points="913.49 714.8 911.89 747.2 924.79 747.8 926.39 715.4 913.49 714.8"/>
                <path class="cls-4" d="M759.69,674.6,737,673.5s-8.5-.8-10.4,9.2l-.1,6.6,32.4,1.6Z"/>
                <polygon class="cls-4" points="726.49 689.3 725.69 705.4 757.99 707 758.79 690.9 726.49 689.3"/>
                <polygon class="cls-4" points="757.99 707 757.19 723.2 724.89 721.6 725.69 705.4 757.99 707"/>
                <path class="cls-4" d="M756.39,739.4l-23.1-1.2-2.1-.1s-6.7-.6-6.9-7.6l.4-8.9,32.4,1.6Z"/>
                <path class="cls-4" d="M928.09,683l20.8,1.1s12.4,1.1,10.8,16.2v.5l-32.4-1.6Z"/>
                <polygon class="cls-4" points="927.19 699.2 926.39 715.4 958.79 717 959.59 700.9 927.19 699.2"/>
                <polygon class="cls-4" points="926.39 715.4 925.59 731.7 957.99 733.2 958.79 717 926.39 715.4"/>
                <path class="cls-4" d="M925.59,731.7l-.8,16.1L950,749s6.9-.1,7.5-7.2l.4-8.6Z"/>
                <g id="TEXT-446" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 830.42, 714.76)">MZ-69</text>
                </g>
                <g id="TEXT-447" data-name="TEXT">
                    <text class="cls-6" transform="translate(739.83 735.01)">1</text>
                </g>
                <g id="TEXT-448" data-name="TEXT">
                    <text class="cls-6" transform="translate(740.36 718.41)">2</text>
                </g>
                <g id="TEXT-449" data-name="TEXT">
                    <text class="cls-6" transform="translate(741.09 702.89)">3</text>
                </g>
                <g id="TEXT-450" data-name="TEXT">
                    <text class="cls-6" transform="translate(741.82 688.2)">4</text>
                </g>
                <g id="TEXT-451" data-name="TEXT">
                    <text class="cls-6" transform="translate(764.34 696.03)">5</text>
                </g>
                <g id="TEXT-452" data-name="TEXT">
                    <text class="cls-6" transform="translate(777.2 696.6)">6</text>
                </g>
                <g id="TEXT-453" data-name="TEXT">
                    <text class="cls-6" transform="translate(790.2 697.15)">7</text>
                </g>
                <g id="TEXT-454" data-name="TEXT">
                    <text class="cls-6" transform="translate(803.34 698.06)">8</text>
                </g>
                <g id="TEXT-455" data-name="TEXT">
                    <text class="cls-6" transform="translate(815.95 698.8)">9</text>
                </g>
                <g id="TEXT-456" data-name="TEXT">
                    <text class="cls-6" transform="translate(828.57 698.94)">10</text>
                </g>
                <g id="TEXT-457" data-name="TEXT">
                    <text class="cls-6" transform="translate(841.27 699.56)">
                        <tspan class="cls-7">1</tspan>
                        <tspan x="2.41" y="0">1</tspan>
                    </text>
                </g>
                <g id="TEXT-458" data-name="TEXT">
                    <text class="cls-6" transform="translate(854.21 700.16)">12</text>
                </g>
                <g id="TEXT-459" data-name="TEXT">
                    <text class="cls-6" transform="translate(867.2 700.99)">13</text>
                </g>
                <g id="TEXT-460" data-name="TEXT">
                    <text class="cls-6" transform="translate(879.93 701.59)">14</text>
                </g>
                <g id="TEXT-461" data-name="TEXT">
                    <text class="cls-6" transform="translate(892.43 702.15)">15</text>
                </g>
                <g id="TEXT-462" data-name="TEXT">
                    <text class="cls-6" transform="translate(906.21 702.78)">16</text>
                </g>
                <g id="TEXT-463" data-name="TEXT">
                    <text class="cls-6" transform="translate(918.86 703.77)">17</text>
                </g>
                <g id="TEXT-464" data-name="TEXT">
                    <text class="cls-6" transform="translate(940.19 696.65)">18</text>
                </g>
                <g id="TEXT-465" data-name="TEXT">
                    <text class="cls-6" transform="translate(940.1 711.95)">19</text>
                </g>
                <g id="TEXT-466" data-name="TEXT">
                    <text class="cls-6" transform="translate(939.36 728.9)">20</text>
                </g>
                <g id="TEXT-467" data-name="TEXT">
                    <text class="cls-6" transform="translate(939.17 744.44)">21</text>
                </g>
                <g id="TEXT-468" data-name="TEXT">
                    <text class="cls-6" transform="translate(917.08 735.96)">22</text>
                </g>
                <g id="TEXT-469" data-name="TEXT">
                    <text class="cls-6" transform="translate(903.57 735.19)">23</text>
                </g>
                <g id="TEXT-470" data-name="TEXT">
                    <text class="cls-6" transform="translate(891.16 734.79)">24</text>
                </g>
                <g id="TEXT-471" data-name="TEXT">
                    <text class="cls-6" transform="translate(878.41 733.49)">25</text>
                </g>
                <g id="TEXT-472" data-name="TEXT">
                    <text class="cls-6" transform="translate(865.5 733.38)">26</text>
                </g>
                <g id="TEXT-473" data-name="TEXT">
                    <text class="cls-6" transform="translate(852.2 732.79)">27</text>
                </g>
                <g id="TEXT-474" data-name="TEXT">
                    <text class="cls-6" transform="translate(839.25 732.1)">28</text>
                </g>
                <g id="TEXT-475" data-name="TEXT">
                    <text class="cls-6" transform="translate(826.3 731.48)">29</text>
                </g>
                <g id="TEXT-476" data-name="TEXT">
                    <text class="cls-6" transform="translate(813.35 730.86)">30</text>
                </g>
                <g id="TEXT-477" data-name="TEXT">
                    <text class="cls-6" transform="translate(800.4 730.25)">31</text>
                </g>
                <g id="TEXT-478" data-name="TEXT">
                    <text class="cls-6" transform="translate(787.45 729.63)">32</text>
                </g>
                <g id="TEXT-479" data-name="TEXT">
                    <text class="cls-6" transform="translate(774.49 729.01)">33</text>
                </g>
                <g id="TEXT-480" data-name="TEXT">
                    <text class="cls-6" transform="translate(761.54 728.4)">34</text>
                </g>
            </g>
            <g id="MZ-33-7" data-name="MZ-33">
                <path class="cls-3" d="M756.47,593.6l-15.3-1s-11.8-1.4-13.1,13l-2.4,46.2s-1.5,10.7,9.8,11.9l219,10.9s9.3-.1,9.8-10.9l2.4-45.9s1.7-13.8-13.2-14.6Z"/>
                <polygon class="cls-4" points="763.67 597.5 762.07 629.9 774.97 630.5 776.57 598.2 763.67 597.5"/>
                <polygon class="cls-4" points="776.57 598.2 774.97 630.5 787.87 631.2 789.57 598.8 776.57 598.2"/>
                <polygon class="cls-4" points="789.57 598.8 787.97 631.2 800.87 631.8 802.47 599.5 789.57 598.8"/>
                <polygon class="cls-4" points="802.47 599.5 800.87 631.8 813.87 632.5 815.47 600.1 802.47 599.5"/>
                <polygon class="cls-4" points="815.47 600.1 813.87 632.5 826.77 633.1 828.37 600.8 815.47 600.1"/>
                <polygon class="cls-4" points="828.37 600.8 826.77 633.1 839.77 633.8 841.37 601.4 828.37 600.8"/>
                <polygon class="cls-4" points="841.37 601.4 839.77 633.8 852.67 634.4 854.27 602.1 841.37 601.4"/>
                <polygon class="cls-4" points="854.27 602.1 852.67 634.4 865.67 635.1 867.27 602.7 854.27 602.1"/>
                <polygon class="cls-4" points="880.17 603.3 878.67 635.7 891.57 636.4 893.17 604 880.17 603.3"/>
                <polygon class="cls-4" points="867.27 602.7 865.67 635.1 878.57 635.7 880.17 603.3 867.27 602.7"/>
                <polygon class="cls-4" points="893.17 604 891.57 636.4 904.47 637 906.07 604.6 893.17 604"/>
                <polygon class="cls-4" points="906.17 604.6 904.57 637 917.47 637.7 919.07 605.3 906.17 604.6"/>
                <polygon class="cls-4" points="919.07 605.3 917.47 637.7 930.37 638.3 932.07 605.9 919.07 605.3"/>
                <polygon class="cls-4" points="761.97 629.9 760.37 662.3 773.37 662.9 774.97 630.5 761.97 629.9"/>
                <polygon class="cls-4" points="774.97 630.5 773.37 662.9 786.27 663.6 787.87 631.2 774.97 630.5"/>
                <polygon class="cls-4" points="787.87 631.2 786.27 663.6 799.27 664.2 800.87 631.8 787.87 631.2"/>
                <polygon class="cls-4" points="800.87 631.8 799.27 664.2 812.17 664.9 813.77 632.5 800.87 631.8"/>
                <polygon class="cls-4" points="813.77 632.5 812.17 664.9 825.07 665.5 826.77 633.1 813.77 632.5"/>
                <polygon class="cls-4" points="826.77 633.1 825.17 665.5 838.07 666.2 839.67 633.8 826.77 633.1"/>
                <polygon class="cls-4" points="839.67 633.8 838.07 666.2 851.07 666.8 852.67 634.4 839.67 633.8"/>
                <polygon class="cls-4" points="852.67 634.4 851.07 666.8 863.97 667.5 865.57 635.1 852.67 634.4"/>
                <polygon class="cls-4" points="878.57 635.7 876.97 668.1 889.87 668.8 891.47 636.4 878.57 635.7"/>
                <polygon class="cls-4" points="865.57 635.1 863.97 667.5 876.87 668.1 878.57 635.7 865.57 635.1"/>
                <polygon class="cls-4" points="891.47 636.4 889.87 668.8 902.87 669.4 904.47 637 891.47 636.4"/>
                <polygon class="cls-4" points="904.47 637 902.87 669.4 915.77 670.1 917.47 637.7 904.47 637"/>
                <polygon class="cls-4" points="917.47 637.7 915.87 670.1 928.77 670.7 930.37 638.3 917.47 637.7"/>
                <path class="cls-4" d="M763.67,597.5,741,596.4s-8.5-.8-10.4,9.2l-.1,6.6,32.4,1.6Z"/>
                <polygon class="cls-4" points="730.47 612.2 729.67 628.3 761.97 629.9 762.77 613.8 730.47 612.2"/>
                <polygon class="cls-4" points="761.97 629.9 761.17 646.1 728.87 644.5 729.67 628.3 761.97 629.9"/>
                <path class="cls-4" d="M760.37,662.3l-23.1-1.2-2.1-.1s-6.7-.6-6.9-7.6l.4-8.9,32.4,1.6Z"/>
                <path class="cls-4" d="M932.07,605.9l20.8,1.1s12.4,1.1,10.8,16.2v.5l-32.4-1.6Z"/>
                <polygon class="cls-4" points="931.17 622.1 930.37 638.3 962.77 639.9 963.57 623.8 931.17 622.1"/>
                <polygon class="cls-4" points="930.37 638.3 929.57 654.6 961.97 656.1 962.77 639.9 930.37 638.3"/>
                <path class="cls-4" d="M929.57,654.6l-.8,16.1,25.2,1.2s6.9-.1,7.5-7.2l.4-8.6Z"/>
                <g id="TEXT-481" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 844.41, 637.66)">MZ-70</text>
                </g>
                <g id="TEXT-482" data-name="TEXT">
                    <text class="cls-6" transform="translate(743.81 657.91)">1</text>
                </g>
                <g id="TEXT-483" data-name="TEXT">
                    <text class="cls-6" transform="translate(744.35 641.31)">2</text>
                </g>
                <g id="TEXT-484" data-name="TEXT">
                    <text class="cls-6" transform="translate(745.07 625.79)">3</text>
                </g>
                <g id="TEXT-485" data-name="TEXT">
                    <text class="cls-6" transform="translate(745.8 611.1)">4</text>
                </g>
                <g id="TEXT-486" data-name="TEXT">
                    <text class="cls-6" transform="translate(768.33 618.93)">5</text>
                </g>
                <g id="TEXT-487" data-name="TEXT">
                    <text class="cls-6" transform="translate(781.18 619.5)">6</text>
                </g>
                <g id="TEXT-488" data-name="TEXT">
                    <text class="cls-6" transform="translate(794.18 620.05)">7</text>
                </g>
                <g id="TEXT-489" data-name="TEXT">
                    <text class="cls-6" transform="translate(807.33 620.96)">8</text>
                </g>
                <g id="TEXT-490" data-name="TEXT">
                    <text class="cls-6" transform="translate(819.93 621.7)">9</text>
                </g>
                <g id="TEXT-491" data-name="TEXT">
                    <text class="cls-6" transform="translate(832.56 621.84)">10</text>
                </g>
                <g id="TEXT-492" data-name="TEXT">
                    <text class="cls-6" transform="translate(845.26 622.46)">
                        <tspan class="cls-7">1</tspan>
                        <tspan x="2.41" y="0">1</tspan>
                    </text>
                </g>
                <g id="TEXT-493" data-name="TEXT">
                    <text class="cls-6" transform="translate(858.19 623.06)">12</text>
                </g>
                <g id="TEXT-494" data-name="TEXT">
                    <text class="cls-6" transform="translate(871.18 623.89)">13</text>
                </g>
                <g id="TEXT-495" data-name="TEXT">
                    <text class="cls-6" transform="translate(883.91 624.49)">14</text>
                </g>
                <g id="TEXT-496" data-name="TEXT">
                    <text class="cls-6" transform="translate(896.41 625.05)">15</text>
                </g>
                <g id="TEXT-497" data-name="TEXT">
                    <text class="cls-6" transform="translate(910.2 625.68)">16</text>
                </g>
                <g id="TEXT-498" data-name="TEXT">
                    <text class="cls-6" transform="translate(922.85 626.67)">17</text>
                </g>
                <g id="TEXT-499" data-name="TEXT">
                    <text class="cls-6" transform="translate(944.17 619.55)">18</text>
                </g>
                <g id="TEXT-500" data-name="TEXT">
                    <text class="cls-6" transform="translate(944.08 634.85)">19</text>
                </g>
                <g id="TEXT-501" data-name="TEXT">
                    <text class="cls-6" transform="translate(943.35 651.8)">20</text>
                </g>
                <g id="TEXT-502" data-name="TEXT">
                    <text class="cls-6" transform="translate(943.16 667.34)">21</text>
                </g>
                <g id="TEXT-503" data-name="TEXT">
                    <text class="cls-6" transform="translate(921.07 658.86)">22</text>
                </g>
                <g id="TEXT-504" data-name="TEXT">
                    <text class="cls-6" transform="translate(907.55 658.09)">23</text>
                </g>
                <g id="TEXT-505" data-name="TEXT">
                    <text class="cls-6" transform="translate(895.14 657.69)">24</text>
                </g>
                <g id="TEXT-506" data-name="TEXT">
                    <text class="cls-6" transform="translate(882.39 656.39)">25</text>
                </g>
                <g id="TEXT-507" data-name="TEXT">
                    <text class="cls-6" transform="translate(869.48 656.28)">26</text>
                </g>
                <g id="TEXT-508" data-name="TEXT">
                    <text class="cls-6" transform="translate(856.19 655.69)">27</text>
                </g>
                <g id="TEXT-509" data-name="TEXT">
                    <text class="cls-6" transform="translate(843.24 655)">28</text>
                </g>
                <g id="TEXT-510" data-name="TEXT">
                    <text class="cls-6" transform="translate(830.28 654.38)">29</text>
                </g>
                <g id="TEXT-511" data-name="TEXT">
                    <text class="cls-6" transform="translate(817.33 653.76)">30</text>
                </g>
                <g id="TEXT-512" data-name="TEXT">
                    <text class="cls-6" transform="translate(804.38 653.15)">31</text>
                </g>
                <g id="TEXT-513" data-name="TEXT">
                    <text class="cls-6" transform="translate(791.43 652.53)">32</text>
                </g>
                <g id="TEXT-514" data-name="TEXT">
                    <text class="cls-6" transform="translate(778.48 651.91)">33</text>
                </g>
                <g id="TEXT-515" data-name="TEXT">
                    <text class="cls-6" transform="translate(765.53 651.3)">34</text>
                </g>
            </g>
            <g id="MZ-33-8" data-name="MZ-33">
                <path class="cls-3" d="M759.89,515.38l-15.3-1s-11.8-1.4-13.1,13l-2.4,46.2s-1.5,10.7,9.8,11.9l219,10.9s9.3-.1,9.8-10.9l2.4-45.9s1.7-13.8-13.2-14.6Z"/>
                <polygon class="cls-4" points="767.09 519.28 765.49 551.68 778.38 552.28 779.99 519.98 767.09 519.28"/>
                <polygon class="cls-4" points="779.99 519.98 778.38 552.28 791.28 552.98 792.99 520.58 779.99 519.98"/>
                <polygon class="cls-4" points="792.99 520.58 791.38 552.98 804.28 553.58 805.88 521.28 792.99 520.58"/>
                <polygon class="cls-4" points="805.88 521.28 804.28 553.58 817.28 554.28 818.88 521.88 805.88 521.28"/>
                <polygon class="cls-4" points="818.88 521.88 817.28 554.28 830.18 554.88 831.78 522.58 818.88 521.88"/>
                <polygon class="cls-4" points="831.78 522.58 830.18 554.88 843.18 555.58 844.78 523.18 831.78 522.58"/>
                <polygon class="cls-4" points="844.78 523.18 843.18 555.58 856.09 556.18 857.68 523.88 844.78 523.18"/>
                <polygon class="cls-4" points="857.68 523.88 856.09 556.18 869.09 556.88 870.68 524.48 857.68 523.88"/>
                <polygon class="cls-4" points="883.59 525.08 882.09 557.48 894.99 558.18 896.59 525.78 883.59 525.08"/>
                <polygon class="cls-4" points="870.68 524.48 869.09 556.88 881.99 557.48 883.59 525.08 870.68 524.48"/>
                <polygon class="cls-4" points="896.59 525.78 894.99 558.18 907.88 558.78 909.49 526.38 896.59 525.78"/>
                <polygon class="cls-4" points="909.59 526.38 907.99 558.78 920.88 559.48 922.49 527.08 909.59 526.38"/>
                <polygon class="cls-4" points="922.49 527.08 920.88 559.48 933.78 560.08 935.49 527.68 922.49 527.08"/>
                <polygon class="cls-4" points="765.38 551.68 763.78 584.08 776.78 584.68 778.38 552.28 765.38 551.68"/>
                <polygon class="cls-4" points="778.38 552.28 776.78 584.68 789.68 585.38 791.28 552.98 778.38 552.28"/>
                <polygon class="cls-4" points="791.28 552.98 789.68 585.38 802.68 585.98 804.28 553.58 791.28 552.98"/>
                <polygon class="cls-4" points="804.28 553.58 802.68 585.98 815.59 586.68 817.18 554.28 804.28 553.58"/>
                <polygon class="cls-4" points="817.18 554.28 815.59 586.68 828.49 587.28 830.18 554.88 817.18 554.28"/>
                <polygon class="cls-4" points="830.18 554.88 828.59 587.28 841.49 587.98 843.09 555.58 830.18 554.88"/>
                <polygon class="cls-4" points="843.09 555.58 841.49 587.98 854.49 588.58 856.09 556.18 843.09 555.58"/>
                <polygon class="cls-4" points="856.09 556.18 854.49 588.58 867.38 589.28 868.99 556.88 856.09 556.18"/>
                <polygon class="cls-4" points="881.99 557.48 880.38 589.88 893.28 590.58 894.88 558.18 881.99 557.48"/>
                <polygon class="cls-4" points="868.99 556.88 867.38 589.28 880.28 589.88 881.99 557.48 868.99 556.88"/>
                <polygon class="cls-4" points="894.88 558.18 893.28 590.58 906.28 591.18 907.88 558.78 894.88 558.18"/>
                <polygon class="cls-4" points="907.88 558.78 906.28 591.18 919.18 591.88 920.88 559.48 907.88 558.78"/>
                <polygon class="cls-4" points="920.88 559.48 919.28 591.88 932.18 592.48 933.78 560.08 920.88 559.48"/>
                <path class="cls-4" d="M767.09,519.28l-22.7-1.1s-8.5-.8-10.4,9.2l-.1,6.6,32.4,1.6Z"/>
                <polygon class="cls-4" points="733.88 533.98 733.09 550.08 765.38 551.68 766.18 535.58 733.88 533.98"/>
                <polygon class="cls-4" points="765.38 551.68 764.59 567.88 732.28 566.28 733.09 550.08 765.38 551.68"/>
                <path class="cls-4" d="M763.79,584.08l-23.1-1.2-2.1-.1s-6.7-.6-6.9-7.6l.4-8.9,32.4,1.6Z"/>
                <path class="cls-4" d="M935.49,527.68l20.8,1.1s12.4,1.1,10.8,16.2v.5l-32.4-1.6Z"/>
                <polygon class="cls-4" points="934.59 543.88 933.78 560.08 966.18 561.68 966.99 545.58 934.59 543.88"/>
                <polygon class="cls-4" points="933.78 560.08 932.99 576.38 965.38 577.88 966.18 561.68 933.78 560.08"/>
                <path class="cls-4" d="M933,576.38l-.8,16.1,25.2,1.2s6.9-.1,7.5-7.2l.4-8.6Z"/>
                <g id="TEXT-516" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 847.82, 559.44)">MZ-71</text>
                </g>
                <g id="TEXT-517" data-name="TEXT">
                    <text class="cls-6" transform="translate(747.22 579.7)">1</text>
                </g>
                <g id="TEXT-518" data-name="TEXT">
                    <text class="cls-6" transform="translate(747.76 563.09)">2</text>
                </g>
                <g id="TEXT-519" data-name="TEXT">
                    <text class="cls-6" transform="translate(748.48 547.57)">3</text>
                </g>
                <g id="TEXT-520" data-name="TEXT">
                    <text class="cls-6" transform="translate(749.22 532.88)">4</text>
                </g>
                <g id="TEXT-521" data-name="TEXT">
                    <text class="cls-6" transform="translate(771.74 540.72)">5</text>
                </g>
                <g id="TEXT-522" data-name="TEXT">
                    <text class="cls-6" transform="translate(784.59 541.29)">6</text>
                </g>
                <g id="TEXT-523" data-name="TEXT">
                    <text class="cls-6" transform="translate(797.6 541.84)">7</text>
                </g>
                <g id="TEXT-524" data-name="TEXT">
                    <text class="cls-6" transform="translate(810.74 542.75)">8</text>
                </g>
                <g id="TEXT-525" data-name="TEXT">
                    <text class="cls-6" transform="translate(823.35 543.48)">9</text>
                </g>
                <g id="TEXT-526" data-name="TEXT">
                    <text class="cls-6" transform="translate(835.97 543.63)">10</text>
                </g>
                <g id="TEXT-527" data-name="TEXT">
                    <text class="cls-6" transform="translate(848.67 544.24)">
                        <tspan class="cls-7">1</tspan>
                        <tspan x="2.41" y="0">1</tspan>
                    </text>
                </g>
                <g id="TEXT-528" data-name="TEXT">
                    <text class="cls-6" transform="translate(861.6 544.85)">12</text>
                </g>
                <g id="TEXT-529" data-name="TEXT">
                    <text class="cls-6" transform="translate(874.6 545.68)">13</text>
                </g>
                <g id="TEXT-530" data-name="TEXT">
                    <text class="cls-6" transform="translate(887.32 546.28)">14</text>
                </g>
                <g id="TEXT-531" data-name="TEXT">
                    <text class="cls-6" transform="translate(899.82 546.84)">15</text>
                </g>
                <g id="TEXT-532" data-name="TEXT">
                    <text class="cls-6" transform="translate(913.61 547.47)">16</text>
                </g>
                <g id="TEXT-533" data-name="TEXT">
                    <text class="cls-6" transform="translate(926.26 548.46)">17</text>
                </g>
                <g id="TEXT-534" data-name="TEXT">
                    <text class="cls-6" transform="translate(947.58 541.33)">18</text>
                </g>
                <g id="TEXT-535" data-name="TEXT">
                    <text class="cls-6" transform="translate(947.49 556.64)">19</text>
                </g>
                <g id="TEXT-536" data-name="TEXT">
                    <text class="cls-6" transform="translate(946.76 573.58)">20</text>
                </g>
                <g id="TEXT-537" data-name="TEXT">
                    <text class="cls-6" transform="translate(946.57 589.13)">21</text>
                </g>
                <g id="TEXT-538" data-name="TEXT">
                    <text class="cls-6" transform="translate(924.48 580.65)">22</text>
                </g>
                <g id="TEXT-539" data-name="TEXT">
                    <text class="cls-6" transform="translate(910.96 579.88)">23</text>
                </g>
                <g id="TEXT-540" data-name="TEXT">
                    <text class="cls-6" transform="translate(898.55 579.48)">24</text>
                </g>
                <g id="TEXT-541" data-name="TEXT">
                    <text class="cls-6" transform="translate(885.8 578.18)">25</text>
                </g>
                <g id="TEXT-542" data-name="TEXT">
                    <text class="cls-6" transform="translate(872.89 578.06)">26</text>
                </g>
                <g id="TEXT-543" data-name="TEXT">
                    <text class="cls-6" transform="translate(859.6 577.48)">27</text>
                </g>
                <g id="TEXT-544" data-name="TEXT">
                    <text class="cls-6" transform="translate(846.65 576.78)">28</text>
                </g>
                <g id="TEXT-545" data-name="TEXT">
                    <text class="cls-6" transform="translate(833.7 576.16)">29</text>
                </g>
                <g id="TEXT-546" data-name="TEXT">
                    <text class="cls-6" transform="translate(820.75 575.55)">30</text>
                </g>
                <g id="TEXT-547" data-name="TEXT">
                    <text class="cls-6" transform="translate(807.79 574.93)">31</text>
                </g>
                <g id="TEXT-548" data-name="TEXT">
                    <text class="cls-6" transform="translate(794.84 574.31)">32</text>
                </g>
                <g id="TEXT-549" data-name="TEXT">
                    <text class="cls-6" transform="translate(781.89 573.7)">33</text>
                </g>
                <g id="TEXT-550" data-name="TEXT">
                    <text class="cls-6" transform="translate(768.94 573.08)">34</text>
                </g>
            </g>
            <g id="MZ-33-9" data-name="MZ-33">
                <path class="cls-3" d="M498.3,820.34l-15.3-1s-11.8-1.4-13.1,13l-2.4,46.2s-1.5,10.7,9.8,11.9l219,10.9s9.3-.1,9.8-10.9l2.4-45.9s1.7-13.8-13.2-14.6Z"/>
                <polygon class="cls-4" points="505.5 824.24 503.9 856.64 516.8 857.24 518.4 824.94 505.5 824.24"/>
                <polygon class="cls-4" points="518.4 824.94 516.8 857.24 529.7 857.94 531.4 825.54 518.4 824.94"/>
                <polygon class="cls-4" points="531.4 825.54 529.8 857.94 542.7 858.54 544.3 826.24 531.4 825.54"/>
                <polygon class="cls-4" points="544.3 826.24 542.7 858.54 555.7 859.24 557.3 826.84 544.3 826.24"/>
                <polygon class="cls-4" points="557.3 826.84 555.7 859.24 568.6 859.84 570.2 827.54 557.3 826.84"/>
                <polygon class="cls-4" points="570.2 827.54 568.6 859.84 581.6 860.54 583.2 828.14 570.2 827.54"/>
                <polygon class="cls-4" points="583.2 828.14 581.6 860.54 594.5 861.14 596.1 828.84 583.2 828.14"/>
                <polygon class="cls-4" points="596.1 828.84 594.5 861.14 607.5 861.84 609.1 829.44 596.1 828.84"/>
                <polygon class="cls-4" points="622 830.04 620.5 862.44 633.4 863.14 635 830.74 622 830.04"/>
                <polygon class="cls-4" points="609.1 829.44 607.5 861.84 620.4 862.44 622 830.04 609.1 829.44"/>
                <polygon class="cls-4" points="635 830.74 633.4 863.14 646.3 863.74 647.9 831.34 635 830.74"/>
                <polygon class="cls-4" points="648 831.34 646.4 863.74 659.3 864.44 660.9 832.04 648 831.34"/>
                <polygon class="cls-4" points="660.9 832.04 659.3 864.44 672.2 865.04 673.9 832.64 660.9 832.04"/>
                <polygon class="cls-4" points="503.8 856.64 502.2 889.04 515.2 889.64 516.8 857.24 503.8 856.64"/>
                <polygon class="cls-4" points="516.8 857.24 515.2 889.64 528.1 890.34 529.7 857.94 516.8 857.24"/>
                <polygon class="cls-4" points="529.7 857.94 528.1 890.34 541.1 890.94 542.7 858.54 529.7 857.94"/>
                <polygon class="cls-4" points="542.7 858.54 541.1 890.94 554 891.64 555.6 859.24 542.7 858.54"/>
                <polygon class="cls-4" points="555.6 859.24 554 891.64 566.9 892.24 568.6 859.84 555.6 859.24"/>
                <polygon class="cls-4" points="568.6 859.84 567 892.24 579.9 892.94 581.5 860.54 568.6 859.84"/>
                <polygon class="cls-4" points="581.5 860.54 579.9 892.94 592.9 893.54 594.5 861.14 581.5 860.54"/>
                <polygon class="cls-4" points="594.5 861.14 592.9 893.54 605.8 894.24 607.4 861.84 594.5 861.14"/>
                <polygon class="cls-4" points="620.4 862.44 618.8 894.84 631.7 895.54 633.3 863.14 620.4 862.44"/>
                <polygon class="cls-4" points="607.4 861.84 605.8 894.24 618.7 894.84 620.4 862.44 607.4 861.84"/>
                <polygon class="cls-4" points="633.3 863.14 631.7 895.54 644.7 896.14 646.3 863.74 633.3 863.14"/>
                <polygon class="cls-4" points="646.3 863.74 644.7 896.14 657.6 896.84 659.3 864.44 646.3 863.74"/>
                <polygon class="cls-4" points="659.3 864.44 657.7 896.84 670.6 897.44 672.2 865.04 659.3 864.44"/>
                <path class="cls-4" d="M505.5,824.24l-22.7-1.1s-8.5-.8-10.4,9.2l-.1,6.6,32.4,1.6Z"/>
                <polygon class="cls-4" points="472.3 838.94 471.5 855.04 503.8 856.64 504.6 840.54 472.3 838.94"/>
                <polygon class="cls-4" points="503.8 856.64 503 872.84 470.7 871.24 471.5 855.04 503.8 856.64"/>
                <path class="cls-4" d="M502.2,889l-23.1-1.2-2.1-.1s-6.7-.6-6.9-7.6l.4-8.9,32.4,1.6Z"/>
                <path class="cls-4" d="M673.9,832.64l20.8,1.1s12.4,1.1,10.8,16.2v.5l-32.4-1.6Z"/>
                <polygon class="cls-4" points="673 848.84 672.2 865.04 704.6 866.64 705.4 850.54 673 848.84"/>
                <polygon class="cls-4" points="672.2 865.04 671.4 881.34 703.8 882.84 704.6 866.64 672.2 865.04"/>
                <path class="cls-4" d="M671.4,881.34l-.8,16.1,25.2,1.2s6.9-.1,7.5-7.2l.4-8.6Z"/>
                <g id="TEXT-551" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 576.24, 864.4)">MZ-31</text>
                </g>
                <g id="TEXT-552" data-name="TEXT">
                    <text class="cls-6" transform="translate(485.64 884.66)">1</text>
                </g>
                <g id="TEXT-553" data-name="TEXT">
                    <text class="cls-6" transform="translate(486.18 868.06)">2</text>
                </g>
                <g id="TEXT-554" data-name="TEXT">
                    <text class="cls-6" transform="translate(486.9 852.53)">3</text>
                </g>
                <g id="TEXT-555" data-name="TEXT">
                    <text class="cls-6" transform="translate(487.63 837.84)">4</text>
                </g>
                <g id="TEXT-556" data-name="TEXT">
                    <text class="cls-6" transform="translate(510.16 845.68)">5</text>
                </g>
                <g id="TEXT-557" data-name="TEXT">
                    <text class="cls-6" transform="translate(523.01 846.25)">6</text>
                </g>
                <g id="TEXT-558" data-name="TEXT">
                    <text class="cls-6" transform="translate(536.02 846.8)">7</text>
                </g>
                <g id="TEXT-559" data-name="TEXT">
                    <text class="cls-6" transform="translate(549.16 847.71)">8</text>
                </g>
                <g id="TEXT-560" data-name="TEXT">
                    <text class="cls-6" transform="translate(561.76 848.44)">9</text>
                </g>
                <g id="TEXT-561" data-name="TEXT">
                    <text class="cls-6" transform="translate(574.39 848.59)">10</text>
                </g>
                <g id="TEXT-562" data-name="TEXT">
                    <text class="cls-6" transform="translate(587.09 849.2)">
                        <tspan class="cls-7">1</tspan>
                        <tspan x="2.41" y="0">1</tspan>
                    </text>
                </g>
                <g id="TEXT-563" data-name="TEXT">
                    <text class="cls-6" transform="translate(600.02 849.81)">12</text>
                </g>
                <g id="TEXT-564" data-name="TEXT">
                    <text class="cls-6" transform="translate(613.01 850.64)">13</text>
                </g>
                <g id="TEXT-565" data-name="TEXT">
                    <text class="cls-6" transform="translate(625.74 851.24)">14</text>
                </g>
                <g id="TEXT-566" data-name="TEXT">
                    <text class="cls-6" transform="translate(638.24 851.8)">15</text>
                </g>
                <g id="TEXT-567" data-name="TEXT">
                    <text class="cls-6" transform="translate(652.03 852.43)">16</text>
                </g>
                <g id="TEXT-568" data-name="TEXT">
                    <text class="cls-6" transform="translate(664.68 853.42)">17</text>
                </g>
                <g id="TEXT-569" data-name="TEXT">
                    <text class="cls-6" transform="translate(686 846.29)">18</text>
                </g>
                <g id="TEXT-570" data-name="TEXT">
                    <text class="cls-6" transform="translate(685.91 861.6)">19</text>
                </g>
                <g id="TEXT-571" data-name="TEXT">
                    <text class="cls-6" transform="translate(685.18 878.55)">20</text>
                </g>
                <g id="TEXT-572" data-name="TEXT">
                    <text class="cls-6" transform="translate(684.99 894.09)">21</text>
                </g>
                <g id="TEXT-573" data-name="TEXT">
                    <text class="cls-6" transform="translate(662.9 885.61)">22</text>
                </g>
                <g id="TEXT-574" data-name="TEXT">
                    <text class="cls-6" transform="translate(649.38 884.84)">23</text>
                </g>
                <g id="TEXT-575" data-name="TEXT">
                    <text class="cls-6" transform="translate(636.97 884.44)">24</text>
                </g>
                <g id="TEXT-576" data-name="TEXT">
                    <text class="cls-6" transform="translate(624.22 883.14)">25</text>
                </g>
                <g id="TEXT-577" data-name="TEXT">
                    <text class="cls-6" transform="translate(611.31 883.03)">26</text>
                </g>
                <g id="TEXT-578" data-name="TEXT">
                    <text class="cls-6" transform="translate(598.02 882.44)">27</text>
                </g>
                <g id="TEXT-579" data-name="TEXT">
                    <text class="cls-6" transform="translate(585.07 881.74)">28</text>
                </g>
                <g id="TEXT-580" data-name="TEXT">
                    <text class="cls-6" transform="translate(572.12 881.13)">29</text>
                </g>
                <g id="TEXT-581" data-name="TEXT">
                    <text class="cls-6" transform="translate(559.16 880.51)">30</text>
                </g>
                <g id="TEXT-582" data-name="TEXT">
                    <text class="cls-6" transform="translate(546.21 879.89)">31</text>
                </g>
                <g id="TEXT-583" data-name="TEXT">
                    <text class="cls-6" transform="translate(533.26 879.28)">32</text>
                </g>
                <g id="TEXT-584" data-name="TEXT">
                    <text class="cls-6" transform="translate(520.31 878.66)">33</text>
                </g>
                <g id="TEXT-585" data-name="TEXT">
                    <text class="cls-6" transform="translate(507.36 878.04)">34</text>
                </g>
            </g>
            <g id="MZ-33-10" data-name="MZ-33">
                <path class="cls-3" d="M502.51,736.65l-15.3-1s-11.8-1.4-13.1,13l-2.4,46.2s-1.5,10.7,9.8,11.9l219,10.9s9.3-.1,9.8-10.9l2.4-45.9s1.7-13.8-13.2-14.6Z"/>
                <polygon class="cls-4" points="509.71 740.55 508.12 772.95 521.01 773.55 522.62 741.25 509.71 740.55"/>
                <polygon class="cls-4" points="522.62 741.25 521.01 773.55 533.91 774.25 535.62 741.85 522.62 741.25"/>
                <polygon class="cls-4" points="535.62 741.85 534.01 774.25 546.91 774.85 548.51 742.55 535.62 741.85"/>
                <polygon class="cls-4" points="548.51 742.55 546.91 774.85 559.91 775.55 561.51 743.15 548.51 742.55"/>
                <polygon class="cls-4" points="561.51 743.15 559.91 775.55 572.82 776.15 574.41 743.85 561.51 743.15"/>
                <polygon class="cls-4" points="574.41 743.85 572.82 776.15 585.82 776.85 587.41 744.45 574.41 743.85"/>
                <polygon class="cls-4" points="587.41 744.45 585.82 776.85 598.72 777.45 600.32 745.15 587.41 744.45"/>
                <polygon class="cls-4" points="600.32 745.15 598.72 777.45 611.72 778.15 613.32 745.75 600.32 745.15"/>
                <polygon class="cls-4" points="626.22 746.35 624.72 778.75 637.62 779.45 639.22 747.05 626.22 746.35"/>
                <polygon class="cls-4" points="613.32 745.75 611.72 778.15 624.62 778.75 626.22 746.35 613.32 745.75"/>
                <polygon class="cls-4" points="639.22 747.05 637.62 779.45 650.51 780.05 652.12 747.65 639.22 747.05"/>
                <polygon class="cls-4" points="652.22 747.65 650.62 780.05 663.51 780.75 665.12 748.35 652.22 747.65"/>
                <polygon class="cls-4" points="665.12 748.35 663.51 780.75 676.41 781.35 678.12 748.95 665.12 748.35"/>
                <polygon class="cls-4" points="508.01 772.95 506.42 805.35 519.41 805.95 521.01 773.55 508.01 772.95"/>
                <polygon class="cls-4" points="521.01 773.55 519.41 805.95 532.32 806.65 533.91 774.25 521.01 773.55"/>
                <polygon class="cls-4" points="533.91 774.25 532.32 806.65 545.32 807.25 546.91 774.85 533.91 774.25"/>
                <polygon class="cls-4" points="546.91 774.85 545.32 807.25 558.22 807.95 559.82 775.55 546.91 774.85"/>
                <polygon class="cls-4" points="559.82 775.55 558.22 807.95 571.12 808.55 572.82 776.15 559.82 775.55"/>
                <polygon class="cls-4" points="572.82 776.15 571.22 808.55 584.12 809.25 585.72 776.85 572.82 776.15"/>
                <polygon class="cls-4" points="585.72 776.85 584.12 809.25 597.12 809.85 598.72 777.45 585.72 776.85"/>
                <polygon class="cls-4" points="598.72 777.45 597.12 809.85 610.01 810.55 611.62 778.15 598.72 777.45"/>
                <polygon class="cls-4" points="624.62 778.75 623.01 811.15 635.91 811.85 637.51 779.45 624.62 778.75"/>
                <polygon class="cls-4" points="611.62 778.15 610.01 810.55 622.91 811.15 624.62 778.75 611.62 778.15"/>
                <polygon class="cls-4" points="637.51 779.45 635.91 811.85 648.91 812.45 650.51 780.05 637.51 779.45"/>
                <polygon class="cls-4" points="650.51 780.05 648.91 812.45 661.82 813.15 663.51 780.75 650.51 780.05"/>
                <polygon class="cls-4" points="663.51 780.75 661.91 813.15 674.82 813.75 676.41 781.35 663.51 780.75"/>
                <path class="cls-4" d="M509.71,740.55l-22.7-1.1s-8.5-.8-10.4,9.2l-.1,6.6,32.4,1.6Z"/>
                <polygon class="cls-4" points="476.51 755.25 475.71 771.35 508.01 772.95 508.81 756.85 476.51 755.25"/>
                <polygon class="cls-4" points="508.01 772.95 507.21 789.15 474.92 787.55 475.71 771.35 508.01 772.95"/>
                <path class="cls-4" d="M506.41,805.35l-23.1-1.2-2.1-.1s-6.7-.6-6.9-7.6l.4-8.9,32.4,1.6Z"/>
                <path class="cls-4" d="M678.11,749l20.8,1.1s12.4,1.1,10.8,16.2v.5l-32.4-1.6Z"/>
                <polygon class="cls-4" points="677.22 765.15 676.41 781.35 708.82 782.95 709.62 766.85 677.22 765.15"/>
                <polygon class="cls-4" points="676.41 781.35 675.62 797.65 708.01 799.15 708.82 782.95 676.41 781.35"/>
                <path class="cls-4" d="M675.61,797.65l-.8,16.1L700,815s6.9-.1,7.5-7.2l.4-8.6Z"/>
                <g id="TEXT-586" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 580.45, 780.71)">MZ-30</text>
                </g>
                <g id="TEXT-587" data-name="TEXT">
                    <text class="cls-6" transform="translate(489.85 800.97)">1</text>
                </g>
                <g id="TEXT-588" data-name="TEXT">
                    <text class="cls-6" transform="translate(490.39 784.37)">2</text>
                </g>
                <g id="TEXT-589" data-name="TEXT">
                    <text class="cls-6" transform="translate(491.11 768.85)">3</text>
                </g>
                <g id="TEXT-590" data-name="TEXT">
                    <text class="cls-6" transform="translate(491.85 754.16)">4</text>
                </g>
                <g id="TEXT-591" data-name="TEXT">
                    <text class="cls-6" transform="translate(514.37 761.99)">5</text>
                </g>
                <g id="TEXT-592" data-name="TEXT">
                    <text class="cls-6" transform="translate(527.22 762.56)">6</text>
                </g>
                <g id="TEXT-593" data-name="TEXT">
                    <text class="cls-6" transform="translate(540.23 763.11)">7</text>
                </g>
                <g id="TEXT-594" data-name="TEXT">
                    <text class="cls-6" transform="translate(553.37 764.02)">8</text>
                </g>
                <g id="TEXT-595" data-name="TEXT">
                    <text class="cls-6" transform="translate(565.98 764.75)">9</text>
                </g>
                <g id="TEXT-596" data-name="TEXT">
                    <text class="cls-6" transform="translate(578.6 764.9)">10</text>
                </g>
                <g id="TEXT-597" data-name="TEXT">
                    <text class="cls-6" transform="translate(591.3 765.52)">
                        <tspan class="cls-7">1</tspan>
                        <tspan x="2.41" y="0">1</tspan>
                    </text>
                </g>
                <g id="TEXT-598" data-name="TEXT">
                    <text class="cls-6" transform="translate(604.23 766.12)">12</text>
                </g>
                <g id="TEXT-599" data-name="TEXT">
                    <text class="cls-6" transform="translate(617.22 766.95)">13</text>
                </g>
                <g id="TEXT-600" data-name="TEXT">
                    <text class="cls-6" transform="translate(629.95 767.55)">14</text>
                </g>
                <g id="TEXT-601" data-name="TEXT">
                    <text class="cls-6" transform="translate(642.45 768.11)">15</text>
                </g>
                <g id="TEXT-602" data-name="TEXT">
                    <text class="cls-6" transform="translate(656.24 768.74)">16</text>
                </g>
                <g id="TEXT-603" data-name="TEXT">
                    <text class="cls-6" transform="translate(668.89 769.73)">17</text>
                </g>
                <g id="TEXT-604" data-name="TEXT">
                    <text class="cls-6" transform="translate(690.21 762.6)">18</text>
                </g>
                <g id="TEXT-605" data-name="TEXT">
                    <text class="cls-6" transform="translate(690.12 777.91)">19</text>
                </g>
                <g id="TEXT-606" data-name="TEXT">
                    <text class="cls-6" transform="translate(689.39 794.86)">20</text>
                </g>
                <g id="TEXT-607" data-name="TEXT">
                    <text class="cls-6" transform="translate(689.2 810.4)">21</text>
                </g>
                <g id="TEXT-608" data-name="TEXT">
                    <text class="cls-6" transform="translate(667.11 801.92)">22</text>
                </g>
                <g id="TEXT-609" data-name="TEXT">
                    <text class="cls-6" transform="translate(653.59 801.15)">23</text>
                </g>
                <g id="TEXT-610" data-name="TEXT">
                    <text class="cls-6" transform="translate(641.18 800.75)">24</text>
                </g>
                <g id="TEXT-611" data-name="TEXT">
                    <text class="cls-6" transform="translate(628.43 799.45)">25</text>
                </g>
                <g id="TEXT-612" data-name="TEXT">
                    <text class="cls-6" transform="translate(615.52 799.34)">26</text>
                </g>
                <g id="TEXT-613" data-name="TEXT">
                    <text class="cls-6" transform="translate(602.23 798.75)">27</text>
                </g>
                <g id="TEXT-614" data-name="TEXT">
                    <text class="cls-6" transform="translate(589.28 798.05)">28</text>
                </g>
                <g id="TEXT-615" data-name="TEXT">
                    <text class="cls-6" transform="translate(576.33 797.44)">29</text>
                </g>
                <g id="TEXT-616" data-name="TEXT">
                    <text class="cls-6" transform="translate(563.37 796.82)">30</text>
                </g>
                <g id="TEXT-617" data-name="TEXT">
                    <text class="cls-6" transform="translate(550.42 796.2)">31</text>
                </g>
                <g id="TEXT-618" data-name="TEXT">
                    <text class="cls-6" transform="translate(537.47 795.59)">32</text>
                </g>
                <g id="TEXT-619" data-name="TEXT">
                    <text class="cls-6" transform="translate(524.52 794.97)">33</text>
                </g>
                <g id="TEXT-620" data-name="TEXT">
                    <text class="cls-6" transform="translate(511.57 794.35)">34</text>
                </g>
            </g>
            <g id="MZ-33-11" data-name="MZ-33">
                <path class="cls-3" d="M506.43,658.81l-15.3-1s-11.8-1.4-13.1,13l-2.4,46.2s-1.5,10.7,9.8,11.9l219,10.9s9.3-.1,9.8-10.9l2.4-45.9s1.7-13.8-13.2-14.6Z"/>
                <polygon class="cls-4" points="513.63 662.72 512.03 695.12 524.93 695.72 526.53 663.41 513.63 662.72"/>
                <polygon class="cls-4" points="526.53 663.41 524.93 695.72 537.83 696.41 539.53 664.01 526.53 663.41"/>
                <polygon class="cls-4" points="539.53 664.01 537.93 696.41 550.83 697.01 552.43 664.72 539.53 664.01"/>
                <polygon class="cls-4" points="552.43 664.72 550.83 697.01 563.83 697.72 565.43 665.32 552.43 664.72"/>
                <polygon class="cls-4" points="565.43 665.32 563.83 697.72 576.73 698.32 578.33 666.01 565.43 665.32"/>
                <polygon class="cls-4" points="578.33 666.01 576.73 698.32 589.73 699.01 591.33 666.62 578.33 666.01"/>
                <polygon class="cls-4" points="591.33 666.62 589.73 699.01 602.63 699.62 604.23 667.32 591.33 666.62"/>
                <polygon class="cls-4" points="604.23 667.32 602.63 699.62 615.63 700.32 617.23 667.91 604.23 667.32"/>
                <polygon class="cls-4" points="630.13 668.51 628.63 700.91 641.53 701.62 643.13 669.22 630.13 668.51"/>
                <polygon class="cls-4" points="617.23 667.91 615.63 700.32 628.53 700.91 630.13 668.51 617.23 667.91"/>
                <polygon class="cls-4" points="643.13 669.22 641.53 701.62 654.43 702.22 656.03 669.82 643.13 669.22"/>
                <polygon class="cls-4" points="656.13 669.82 654.53 702.22 667.43 702.91 669.03 670.51 656.13 669.82"/>
                <polygon class="cls-4" points="669.03 670.51 667.43 702.91 680.33 703.51 682.03 671.12 669.03 670.51"/>
                <polygon class="cls-4" points="511.93 695.12 510.33 727.51 523.33 728.12 524.93 695.72 511.93 695.12"/>
                <polygon class="cls-4" points="524.93 695.72 523.33 728.12 536.23 728.82 537.83 696.41 524.93 695.72"/>
                <polygon class="cls-4" points="537.83 696.41 536.23 728.82 549.23 729.41 550.83 697.01 537.83 696.41"/>
                <polygon class="cls-4" points="550.83 697.01 549.23 729.41 562.13 730.12 563.73 697.72 550.83 697.01"/>
                <polygon class="cls-4" points="563.73 697.72 562.13 730.12 575.03 730.72 576.73 698.32 563.73 697.72"/>
                <polygon class="cls-4" points="576.73 698.32 575.13 730.72 588.03 731.41 589.63 699.01 576.73 698.32"/>
                <polygon class="cls-4" points="589.63 699.01 588.03 731.41 601.03 732.01 602.63 699.62 589.63 699.01"/>
                <polygon class="cls-4" points="602.63 699.62 601.03 732.01 613.93 732.72 615.53 700.32 602.63 699.62"/>
                <polygon class="cls-4" points="628.53 700.91 626.93 733.32 639.83 734.01 641.43 701.62 628.53 700.91"/>
                <polygon class="cls-4" points="615.53 700.32 613.93 732.72 626.83 733.32 628.53 700.91 615.53 700.32"/>
                <polygon class="cls-4" points="641.43 701.62 639.83 734.01 652.83 734.62 654.43 702.22 641.43 701.62"/>
                <polygon class="cls-4" points="654.43 702.22 652.83 734.62 665.73 735.32 667.43 702.91 654.43 702.22"/>
                <polygon class="cls-4" points="667.43 702.91 665.83 735.32 678.73 735.91 680.33 703.51 667.43 702.91"/>
                <path class="cls-4" d="M513.63,662.71l-22.7-1.1s-8.5-.8-10.4,9.2l-.1,6.6,32.4,1.6Z"/>
                <polygon class="cls-4" points="480.43 677.41 479.63 693.51 511.93 695.12 512.73 679.01 480.43 677.41"/>
                <polygon class="cls-4" points="511.93 695.12 511.13 711.32 478.83 709.72 479.63 693.51 511.93 695.12"/>
                <path class="cls-4" d="M510.33,727.51l-23.1-1.2-2.1-.1s-6.7-.6-6.9-7.6l.4-8.9,32.4,1.6Z"/>
                <path class="cls-4" d="M682,671.11l20.8,1.1s12.4,1.1,10.8,16.2v.5l-32.4-1.6Z"/>
                <polygon class="cls-4" points="681.13 687.32 680.33 703.51 712.73 705.12 713.53 689.01 681.13 687.32"/>
                <polygon class="cls-4" points="680.33 703.51 679.53 719.82 711.93 721.32 712.73 705.12 680.33 703.51"/>
                <path class="cls-4" d="M679.53,719.81l-.8,16.1,25.2,1.2s6.9-.1,7.5-7.2l.4-8.6Z"/>
                <g id="TEXT-621" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 584.37, 702.87)">MZ-29</text>
                </g>
                <g id="TEXT-622" data-name="TEXT">
                    <text class="cls-6" transform="translate(493.77 723.13)">1</text>
                </g>
                <g id="TEXT-623" data-name="TEXT">
                    <text class="cls-6" transform="translate(494.31 706.53)">2</text>
                </g>
                <g id="TEXT-624" data-name="TEXT">
                    <text class="cls-6" transform="translate(495.03 691.01)">3</text>
                </g>
                <g id="TEXT-625" data-name="TEXT">
                    <text class="cls-6" transform="translate(495.76 676.32)">4</text>
                </g>
                <g id="TEXT-626" data-name="TEXT">
                    <text class="cls-6" transform="translate(518.29 684.15)">5</text>
                </g>
                <g id="TEXT-627" data-name="TEXT">
                    <text class="cls-6" transform="translate(531.14 684.72)">6</text>
                </g>
                <g id="TEXT-628" data-name="TEXT">
                    <text class="cls-6" transform="translate(544.14 685.27)">7</text>
                </g>
                <g id="TEXT-629" data-name="TEXT">
                    <text class="cls-6" transform="translate(557.29 686.18)">8</text>
                </g>
                <g id="TEXT-630" data-name="TEXT">
                    <text class="cls-6" transform="translate(569.89 686.91)">9</text>
                </g>
                <g id="TEXT-631" data-name="TEXT">
                    <text class="cls-6" transform="translate(582.52 687.06)">10</text>
                </g>
                <g id="TEXT-632" data-name="TEXT">
                    <text class="cls-6" transform="translate(595.22 687.68)">
                        <tspan class="cls-7">1</tspan>
                        <tspan x="2.41" y="0">1</tspan>
                    </text>
                </g>
                <g id="TEXT-633" data-name="TEXT">
                    <text class="cls-6" transform="translate(608.15 688.28)">12</text>
                </g>
                <g id="TEXT-634" data-name="TEXT">
                    <text class="cls-6" transform="translate(621.14 689.11)">13</text>
                </g>
                <g id="TEXT-635" data-name="TEXT">
                    <text class="cls-6" transform="translate(633.87 689.71)">14</text>
                </g>
                <g id="TEXT-636" data-name="TEXT">
                    <text class="cls-6" transform="translate(646.37 690.27)">15</text>
                </g>
                <g id="TEXT-637" data-name="TEXT">
                    <text class="cls-6" transform="translate(660.16 690.9)">16</text>
                </g>
                <g id="TEXT-638" data-name="TEXT">
                    <text class="cls-6" transform="translate(672.81 691.89)">17</text>
                </g>
                <g id="TEXT-639" data-name="TEXT">
                    <text class="cls-6" transform="translate(694.13 684.77)">18</text>
                </g>
                <g id="TEXT-640" data-name="TEXT">
                    <text class="cls-6" transform="translate(694.04 700.07)">19</text>
                </g>
                <g id="TEXT-641" data-name="TEXT">
                    <text class="cls-6" transform="translate(693.31 717.02)">20</text>
                </g>
                <g id="TEXT-642" data-name="TEXT">
                    <text class="cls-6" transform="translate(693.12 732.56)">21</text>
                </g>
                <g id="TEXT-643" data-name="TEXT">
                    <text class="cls-6" transform="translate(671.03 724.08)">22</text>
                </g>
                <g id="TEXT-644" data-name="TEXT">
                    <text class="cls-6" transform="translate(657.51 723.31)">23</text>
                </g>
                <g id="TEXT-645" data-name="TEXT">
                    <text class="cls-6" transform="translate(645.1 722.91)">24</text>
                </g>
                <g id="TEXT-646" data-name="TEXT">
                    <text class="cls-6" transform="translate(632.35 721.61)">25</text>
                </g>
                <g id="TEXT-647" data-name="TEXT">
                    <text class="cls-6" transform="translate(619.44 721.5)">26</text>
                </g>
                <g id="TEXT-648" data-name="TEXT">
                    <text class="cls-6" transform="translate(606.15 720.91)">27</text>
                </g>
                <g id="TEXT-649" data-name="TEXT">
                    <text class="cls-6" transform="translate(593.2 720.21)">28</text>
                </g>
                <g id="TEXT-650" data-name="TEXT">
                    <text class="cls-6" transform="translate(580.24 719.6)">29</text>
                </g>
                <g id="TEXT-651" data-name="TEXT">
                    <text class="cls-6" transform="translate(567.29 718.98)">30</text>
                </g>
                <g id="TEXT-652" data-name="TEXT">
                    <text class="cls-6" transform="translate(554.34 718.36)">31</text>
                </g>
                <g id="TEXT-653" data-name="TEXT">
                    <text class="cls-6" transform="translate(541.39 717.75)">32</text>
                </g>
                <g id="TEXT-654" data-name="TEXT">
                    <text class="cls-6" transform="translate(528.44 717.13)">33</text>
                </g>
                <g id="TEXT-655" data-name="TEXT">
                    <text class="cls-6" transform="translate(515.48 716.51)">34</text>
                </g>
            </g>
            <g id="MZ-33-12" data-name="MZ-33">
                <path class="cls-3" d="M509.59,581l-15.3-1s-11.8-1.4-13.1,13l-2.4,46.2s-1.5,10.7,9.8,11.9l219,10.9s9.3-.1,9.8-10.9l2.4-45.9s1.7-13.8-13.2-14.6Z"/>
                <polygon class="cls-4" points="516.79 584.88 515.19 617.28 528.09 617.88 529.69 585.58 516.79 584.88"/>
                <polygon class="cls-4" points="529.69 585.58 528.09 617.88 540.99 618.58 542.69 586.18 529.69 585.58"/>
                <polygon class="cls-4" points="542.69 586.18 541.09 618.58 553.99 619.18 555.59 586.88 542.69 586.18"/>
                <polygon class="cls-4" points="555.59 586.88 553.99 619.18 566.99 619.88 568.59 587.48 555.59 586.88"/>
                <polygon class="cls-4" points="568.59 587.48 566.99 619.88 579.89 620.48 581.49 588.18 568.59 587.48"/>
                <polygon class="cls-4" points="581.49 588.18 579.89 620.48 592.89 621.18 594.49 588.78 581.49 588.18"/>
                <polygon class="cls-4" points="594.49 588.78 592.89 621.18 605.79 621.78 607.39 589.48 594.49 588.78"/>
                <polygon class="cls-4" points="607.39 589.48 605.79 621.78 618.79 622.48 620.39 590.08 607.39 589.48"/>
                <polygon class="cls-4" points="633.29 590.68 631.79 623.08 644.69 623.78 646.29 591.38 633.29 590.68"/>
                <polygon class="cls-4" points="620.39 590.08 618.79 622.48 631.69 623.08 633.29 590.68 620.39 590.08"/>
                <polygon class="cls-4" points="646.29 591.38 644.69 623.78 657.59 624.38 659.19 591.98 646.29 591.38"/>
                <polygon class="cls-4" points="659.29 591.98 657.69 624.38 670.59 625.08 672.19 592.68 659.29 591.98"/>
                <polygon class="cls-4" points="672.19 592.68 670.59 625.08 683.49 625.68 685.19 593.28 672.19 592.68"/>
                <polygon class="cls-4" points="515.09 617.28 513.49 649.68 526.49 650.28 528.09 617.88 515.09 617.28"/>
                <polygon class="cls-4" points="528.09 617.88 526.49 650.28 539.39 650.98 540.99 618.58 528.09 617.88"/>
                <polygon class="cls-4" points="540.99 618.58 539.39 650.98 552.39 651.58 553.99 619.18 540.99 618.58"/>
                <polygon class="cls-4" points="553.99 619.18 552.39 651.58 565.29 652.28 566.89 619.88 553.99 619.18"/>
                <polygon class="cls-4" points="566.89 619.88 565.29 652.28 578.19 652.88 579.89 620.48 566.89 619.88"/>
                <polygon class="cls-4" points="579.89 620.48 578.29 652.88 591.19 653.58 592.79 621.18 579.89 620.48"/>
                <polygon class="cls-4" points="592.79 621.18 591.19 653.58 604.19 654.18 605.79 621.78 592.79 621.18"/>
                <polygon class="cls-4" points="605.79 621.78 604.19 654.18 617.09 654.88 618.69 622.48 605.79 621.78"/>
                <polygon class="cls-4" points="631.69 623.08 630.09 655.48 642.99 656.18 644.59 623.78 631.69 623.08"/>
                <polygon class="cls-4" points="618.69 622.48 617.09 654.88 629.99 655.48 631.69 623.08 618.69 622.48"/>
                <polygon class="cls-4" points="644.59 623.78 642.99 656.18 655.99 656.78 657.59 624.38 644.59 623.78"/>
                <polygon class="cls-4" points="657.59 624.38 655.99 656.78 668.89 657.48 670.59 625.08 657.59 624.38"/>
                <polygon class="cls-4" points="670.59 625.08 668.99 657.48 681.89 658.08 683.49 625.68 670.59 625.08"/>
                <path class="cls-4" d="M516.79,584.88l-22.7-1.1s-8.5-.8-10.4,9.2l-.1,6.6,32.4,1.6Z"/>
                <polygon class="cls-4" points="483.59 599.58 482.79 615.68 515.09 617.28 515.89 601.18 483.59 599.58"/>
                <polygon class="cls-4" points="515.09 617.28 514.29 633.48 481.99 631.88 482.79 615.68 515.09 617.28"/>
                <path class="cls-4" d="M513.49,649.68l-23.1-1.2-2.1-.1s-6.7-.6-6.9-7.6l.4-8.9,32.4,1.6Z"/>
                <path class="cls-4" d="M685.19,593.28l20.8,1.1s12.4,1.1,10.8,16.2v.5l-32.4-1.6Z"/>
                <polygon class="cls-4" points="684.29 609.48 683.49 625.68 715.89 627.28 716.69 611.18 684.29 609.48"/>
                <polygon class="cls-4" points="683.49 625.68 682.69 641.98 715.09 643.48 715.89 627.28 683.49 625.68"/>
                <path class="cls-4" d="M682.69,642l-.8,16.1,25.2,1.2s6.9-.1,7.5-7.2l.4-8.6Z"/>
                <g id="TEXT-656" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 587.53, 625.04)">MZ-28</text>
                </g>
                <g id="TEXT-657" data-name="TEXT">
                    <text class="cls-6" transform="translate(496.93 645.29)">1</text>
                </g>
                <g id="TEXT-658" data-name="TEXT">
                    <text class="cls-6" transform="translate(497.47 628.69)">2</text>
                </g>
                <g id="TEXT-659" data-name="TEXT">
                    <text class="cls-6" transform="translate(498.19 613.17)">3</text>
                </g>
                <g id="TEXT-660" data-name="TEXT">
                    <text class="cls-6" transform="translate(498.92 598.48)">4</text>
                </g>
                <g id="TEXT-661" data-name="TEXT">
                    <text class="cls-6" transform="translate(521.45 606.32)">5</text>
                </g>
                <g id="TEXT-662" data-name="TEXT">
                    <text class="cls-6" transform="translate(534.3 606.89)">6</text>
                </g>
                <g id="TEXT-663" data-name="TEXT">
                    <text class="cls-6" transform="translate(547.3 607.44)">7</text>
                </g>
                <g id="TEXT-664" data-name="TEXT">
                    <text class="cls-6" transform="translate(560.45 608.34)">8</text>
                </g>
                <g id="TEXT-665" data-name="TEXT">
                    <text class="cls-6" transform="translate(573.05 609.08)">9</text>
                </g>
                <g id="TEXT-666" data-name="TEXT">
                    <text class="cls-6" transform="translate(585.68 609.22)">10</text>
                </g>
                <g id="TEXT-667" data-name="TEXT">
                    <text class="cls-6" transform="translate(598.38 609.84)">
                        <tspan class="cls-7">1</tspan>
                        <tspan x="2.41" y="0">1</tspan>
                    </text>
                </g>
                <g id="TEXT-668" data-name="TEXT">
                    <text class="cls-6" transform="translate(611.31 610.45)">12</text>
                </g>
                <g id="TEXT-669" data-name="TEXT">
                    <text class="cls-6" transform="translate(624.3 611.27)">13</text>
                </g>
                <g id="TEXT-670" data-name="TEXT">
                    <text class="cls-6" transform="translate(637.03 611.88)">14</text>
                </g>
                <g id="TEXT-671" data-name="TEXT">
                    <text class="cls-6" transform="translate(649.53 612.44)">15</text>
                </g>
                <g id="TEXT-672" data-name="TEXT">
                    <text class="cls-6" transform="translate(663.32 613.06)">16</text>
                </g>
                <g id="TEXT-673" data-name="TEXT">
                    <text class="cls-6" transform="translate(675.97 614.06)">17</text>
                </g>
                <g id="TEXT-674" data-name="TEXT">
                    <text class="cls-6" transform="translate(697.29 606.93)">18</text>
                </g>
                <g id="TEXT-675" data-name="TEXT">
                    <text class="cls-6" transform="translate(697.2 622.24)">19</text>
                </g>
                <g id="TEXT-676" data-name="TEXT">
                    <text class="cls-6" transform="translate(696.47 639.18)">20</text>
                </g>
                <g id="TEXT-677" data-name="TEXT">
                    <text class="cls-6" transform="translate(696.28 654.73)">21</text>
                </g>
                <g id="TEXT-678" data-name="TEXT">
                    <text class="cls-6" transform="translate(674.19 646.25)">22</text>
                </g>
                <g id="TEXT-679" data-name="TEXT">
                    <text class="cls-6" transform="translate(660.67 645.48)">23</text>
                </g>
                <g id="TEXT-680" data-name="TEXT">
                    <text class="cls-6" transform="translate(648.26 645.08)">24</text>
                </g>
                <g id="TEXT-681" data-name="TEXT">
                    <text class="cls-6" transform="translate(635.51 643.78)">25</text>
                </g>
                <g id="TEXT-682" data-name="TEXT">
                    <text class="cls-6" transform="translate(622.6 643.66)">26</text>
                </g>
                <g id="TEXT-683" data-name="TEXT">
                    <text class="cls-6" transform="translate(609.31 643.08)">27</text>
                </g>
                <g id="TEXT-684" data-name="TEXT">
                    <text class="cls-6" transform="translate(596.36 642.38)">28</text>
                </g>
                <g id="TEXT-685" data-name="TEXT">
                    <text class="cls-6" transform="translate(583.41 641.76)">29</text>
                </g>
                <g id="TEXT-686" data-name="TEXT">
                    <text class="cls-6" transform="translate(570.45 641.15)">30</text>
                </g>
                <g id="TEXT-687" data-name="TEXT">
                    <text class="cls-6" transform="translate(557.5 640.53)">31</text>
                </g>
                <g id="TEXT-688" data-name="TEXT">
                    <text class="cls-6" transform="translate(544.55 639.91)">32</text>
                </g>
                <g id="TEXT-689" data-name="TEXT">
                    <text class="cls-6" transform="translate(531.6 639.3)">33</text>
                </g>
                <g id="TEXT-690" data-name="TEXT">
                    <text class="cls-6" transform="translate(518.65 638.68)">34</text>
                </g>
            </g>
            <g id="MZ-33-13" data-name="MZ-33">
                <path class="cls-3" d="M514.5,503.64l-15.3-1s-11.8-1.4-13.1,13l-2.4,46.2s-1.5,10.7,9.8,11.9l219,10.9s9.3-.1,9.8-10.9l2.4-45.9s1.7-13.8-13.2-14.6Z"/>
                <polygon class="cls-4" points="521.7 507.54 520.1 539.94 533 540.54 534.6 508.24 521.7 507.54"/>
                <polygon class="cls-4" points="534.6 508.24 533 540.54 545.9 541.24 547.6 508.84 534.6 508.24"/>
                <polygon class="cls-4" points="547.6 508.84 546 541.24 558.9 541.84 560.5 509.54 547.6 508.84"/>
                <polygon class="cls-4" points="560.5 509.54 558.9 541.84 571.9 542.54 573.5 510.14 560.5 509.54"/>
                <polygon class="cls-4" points="573.5 510.14 571.9 542.54 584.8 543.14 586.4 510.84 573.5 510.14"/>
                <polygon class="cls-4" points="586.4 510.84 584.8 543.14 597.8 543.84 599.4 511.44 586.4 510.84"/>
                <polygon class="cls-4" points="599.4 511.44 597.8 543.84 610.7 544.44 612.3 512.14 599.4 511.44"/>
                <polygon class="cls-4" points="612.3 512.14 610.7 544.44 623.7 545.14 625.3 512.74 612.3 512.14"/>
                <polygon class="cls-4" points="638.2 513.34 636.7 545.74 649.6 546.44 651.2 514.04 638.2 513.34"/>
                <polygon class="cls-4" points="625.3 512.74 623.7 545.14 636.6 545.74 638.2 513.34 625.3 512.74"/>
                <polygon class="cls-4" points="651.2 514.04 649.6 546.44 662.5 547.04 664.1 514.64 651.2 514.04"/>
                <polygon class="cls-4" points="664.2 514.64 662.6 547.04 675.5 547.74 677.1 515.34 664.2 514.64"/>
                <polygon class="cls-4" points="677.1 515.34 675.5 547.74 688.4 548.34 690.1 515.94 677.1 515.34"/>
                <polygon class="cls-4" points="520 539.94 518.4 572.34 531.4 572.94 533 540.54 520 539.94"/>
                <polygon class="cls-4" points="533 540.54 531.4 572.94 544.3 573.64 545.9 541.24 533 540.54"/>
                <polygon class="cls-4" points="545.9 541.24 544.3 573.64 557.3 574.24 558.9 541.84 545.9 541.24"/>
                <polygon class="cls-4" points="558.9 541.84 557.3 574.24 570.2 574.94 571.8 542.54 558.9 541.84"/>
                <polygon class="cls-4" points="571.8 542.54 570.2 574.94 583.1 575.54 584.8 543.14 571.8 542.54"/>
                <polygon class="cls-4" points="584.8 543.14 583.2 575.54 596.1 576.24 597.7 543.84 584.8 543.14"/>
                <polygon class="cls-4" points="597.7 543.84 596.1 576.24 609.1 576.84 610.7 544.44 597.7 543.84"/>
                <polygon class="cls-4" points="610.7 544.44 609.1 576.84 622 577.54 623.6 545.14 610.7 544.44"/>
                <polygon class="cls-4" points="636.6 545.74 635 578.14 647.9 578.84 649.5 546.44 636.6 545.74"/>
                <polygon class="cls-4" points="623.6 545.14 622 577.54 634.9 578.14 636.6 545.74 623.6 545.14"/>
                <polygon class="cls-4" points="649.5 546.44 647.9 578.84 660.9 579.44 662.5 547.04 649.5 546.44"/>
                <polygon class="cls-4" points="662.5 547.04 660.9 579.44 673.8 580.14 675.5 547.74 662.5 547.04"/>
                <polygon class="cls-4" points="675.5 547.74 673.9 580.14 686.8 580.74 688.4 548.34 675.5 547.74"/>
                <path class="cls-4" d="M521.7,507.54l-22.7-1.1s-8.5-.8-10.4,9.2l-.1,6.6,32.4,1.6Z"/>
                <polygon class="cls-4" points="488.5 522.24 487.7 538.34 520 539.94 520.8 523.84 488.5 522.24"/>
                <polygon class="cls-4" points="520 539.94 519.2 556.14 486.9 554.54 487.7 538.34 520 539.94"/>
                <path class="cls-4" d="M518.4,572.34l-23.1-1.2-2.1-.1s-6.7-.6-6.9-7.6l.4-8.9,32.4,1.6Z"/>
                <path class="cls-4" d="M690.1,515.94l20.8,1.1s12.4,1.1,10.8,16.2v.5l-32.4-1.6Z"/>
                <polygon class="cls-4" points="689.2 532.14 688.4 548.34 720.8 549.94 721.6 533.84 689.2 532.14"/>
                <polygon class="cls-4" points="688.4 548.34 687.6 564.64 720 566.14 720.8 549.94 688.4 548.34"/>
                <path class="cls-4" d="M687.6,564.64l-.8,16.1,25.2,1.2s6.9-.1,7.5-7.2l.4-8.6Z"/>
                <g id="TEXT-691" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 592.43, 547.7)">MZ-27</text>
                </g>
                <g id="TEXT-692" data-name="TEXT">
                    <text class="cls-6" transform="translate(501.83 567.96)">1</text>
                </g>
                <g id="TEXT-693" data-name="TEXT">
                    <text class="cls-6" transform="translate(502.37 551.36)">2</text>
                </g>
                <g id="TEXT-694" data-name="TEXT">
                    <text class="cls-6" transform="translate(503.1 535.84)">3</text>
                </g>
                <g id="TEXT-695" data-name="TEXT">
                    <text class="cls-6" transform="translate(503.83 521.14)">4</text>
                </g>
                <g id="TEXT-696" data-name="TEXT">
                    <text class="cls-6" transform="translate(526.35 528.98)">5</text>
                </g>
                <g id="TEXT-697" data-name="TEXT">
                    <text class="cls-6" transform="translate(539.2 529.55)">6</text>
                </g>
                <g id="TEXT-698" data-name="TEXT">
                    <text class="cls-6" transform="translate(552.21 530.1)">7</text>
                </g>
                <g id="TEXT-699" data-name="TEXT">
                    <text class="cls-6" transform="translate(565.35 531.01)">8</text>
                </g>
                <g id="TEXT-700" data-name="TEXT">
                    <text class="cls-6" transform="translate(577.96 531.74)">9</text>
                </g>
                <g id="TEXT-701" data-name="TEXT">
                    <text class="cls-6" transform="translate(590.58 531.89)">10</text>
                </g>
                <g id="TEXT-702" data-name="TEXT">
                    <text class="cls-6" transform="translate(603.28 532.51)">
                        <tspan class="cls-7">1</tspan>
                        <tspan x="2.41" y="0">1</tspan>
                    </text>
                </g>
                <g id="TEXT-703" data-name="TEXT">
                    <text class="cls-6" transform="translate(616.21 533.11)">12</text>
                </g>
                <g id="TEXT-704" data-name="TEXT">
                    <text class="cls-6" transform="translate(629.21 533.94)">13</text>
                </g>
                <g id="TEXT-705" data-name="TEXT">
                    <text class="cls-6" transform="translate(641.94 534.54)">14</text>
                </g>
                <g id="TEXT-706" data-name="TEXT">
                    <text class="cls-6" transform="translate(654.44 535.1)">15</text>
                </g>
                <g id="TEXT-707" data-name="TEXT">
                    <text class="cls-6" transform="translate(668.22 535.73)">16</text>
                </g>
                <g id="TEXT-708" data-name="TEXT">
                    <text class="cls-6" transform="translate(680.87 536.72)">17</text>
                </g>
                <g id="TEXT-709" data-name="TEXT">
                    <text class="cls-6" transform="translate(702.2 529.59)">18</text>
                </g>
                <g id="TEXT-710" data-name="TEXT">
                    <text class="cls-6" transform="translate(702.1 544.9)">19</text>
                </g>
                <g id="TEXT-711" data-name="TEXT">
                    <text class="cls-6" transform="translate(701.37 561.85)">20</text>
                </g>
                <g id="TEXT-712" data-name="TEXT">
                    <text class="cls-6" transform="translate(701.18 577.39)">21</text>
                </g>
                <g id="TEXT-713" data-name="TEXT">
                    <text class="cls-6" transform="translate(679.09 568.91)">22</text>
                </g>
                <g id="TEXT-714" data-name="TEXT">
                    <text class="cls-6" transform="translate(665.57 568.14)">23</text>
                </g>
                <g id="TEXT-715" data-name="TEXT">
                    <text class="cls-6" transform="translate(653.16 567.74)">24</text>
                </g>
                <g id="TEXT-716" data-name="TEXT">
                    <text class="cls-6" transform="translate(640.41 566.44)">25</text>
                </g>
                <g id="TEXT-717" data-name="TEXT">
                    <text class="cls-6" transform="translate(627.5 566.33)">26</text>
                </g>
                <g id="TEXT-718" data-name="TEXT">
                    <text class="cls-6" transform="translate(614.21 565.74)">27</text>
                </g>
                <g id="TEXT-719" data-name="TEXT">
                    <text class="cls-6" transform="translate(601.26 565.04)">28</text>
                </g>
                <g id="TEXT-720" data-name="TEXT">
                    <text class="cls-6" transform="translate(588.31 564.43)">29</text>
                </g>
                <g id="TEXT-721" data-name="TEXT">
                    <text class="cls-6" transform="translate(575.36 563.81)">30</text>
                </g>
                <g id="TEXT-722" data-name="TEXT">
                    <text class="cls-6" transform="translate(562.4 563.19)">31</text>
                </g>
                <g id="TEXT-723" data-name="TEXT">
                    <text class="cls-6" transform="translate(549.45 562.58)">32</text>
                </g>
                <g id="TEXT-724" data-name="TEXT">
                    <text class="cls-6" transform="translate(536.5 561.96)">33</text>
                </g>
                <g id="TEXT-725" data-name="TEXT">
                    <text class="cls-6" transform="translate(523.55 561.34)">34</text>
                </g>
            </g>
            <g id="MZ-33-14" data-name="MZ-33">
                <path class="cls-3" d="M517.72,425.43l-15.3-1s-11.8-1.4-13.1,13l-2.4,46.2s-1.5,10.7,9.8,11.9l219,10.9s9.3-.1,9.8-10.9l2.4-45.9s1.7-13.8-13.2-14.6Z"/>
                <polygon class="cls-4" points="524.92 429.33 523.32 461.73 536.22 462.33 537.82 430.03 524.92 429.33"/>
                <polygon class="cls-4" points="537.82 430.03 536.22 462.33 549.12 463.03 550.82 430.63 537.82 430.03"/>
                <polygon class="cls-4" points="550.82 430.63 549.22 463.03 562.12 463.63 563.72 431.33 550.82 430.63"/>
                <polygon class="cls-4" points="563.72 431.33 562.12 463.63 575.12 464.33 576.72 431.93 563.72 431.33"/>
                <polygon class="cls-4" points="576.72 431.93 575.12 464.33 588.02 464.93 589.62 432.63 576.72 431.93"/>
                <polygon class="cls-4" points="589.62 432.63 588.02 464.93 601.02 465.63 602.62 433.23 589.62 432.63"/>
                <polygon class="cls-4" points="602.62 433.23 601.02 465.63 613.92 466.23 615.52 433.93 602.62 433.23"/>
                <polygon class="cls-4" points="615.52 433.93 613.92 466.23 626.92 466.93 628.52 434.53 615.52 433.93"/>
                <polygon class="cls-4" points="641.42 435.13 639.92 467.53 652.82 468.23 654.42 435.83 641.42 435.13"/>
                <polygon class="cls-4" points="628.52 434.53 626.92 466.93 639.82 467.53 641.42 435.13 628.52 434.53"/>
                <polygon class="cls-4" points="654.42 435.83 652.82 468.23 665.72 468.83 667.32 436.43 654.42 435.83"/>
                <polygon class="cls-4" points="667.42 436.43 665.82 468.83 678.72 469.53 680.32 437.13 667.42 436.43"/>
                <polygon class="cls-4" points="680.32 437.13 678.72 469.53 691.62 470.13 693.32 437.73 680.32 437.13"/>
                <polygon class="cls-4" points="523.22 461.73 521.62 494.13 534.62 494.73 536.22 462.33 523.22 461.73"/>
                <polygon class="cls-4" points="536.22 462.33 534.62 494.73 547.52 495.43 549.12 463.03 536.22 462.33"/>
                <polygon class="cls-4" points="549.12 463.03 547.52 495.43 560.52 496.03 562.12 463.63 549.12 463.03"/>
                <polygon class="cls-4" points="562.12 463.63 560.52 496.03 573.42 496.73 575.02 464.33 562.12 463.63"/>
                <polygon class="cls-4" points="575.02 464.33 573.42 496.73 586.32 497.33 588.02 464.93 575.02 464.33"/>
                <polygon class="cls-4" points="588.02 464.93 586.42 497.33 599.32 498.03 600.92 465.63 588.02 464.93"/>
                <polygon class="cls-4" points="600.92 465.63 599.32 498.03 612.32 498.63 613.92 466.23 600.92 465.63"/>
                <polygon class="cls-4" points="613.92 466.23 612.32 498.63 625.22 499.33 626.82 466.93 613.92 466.23"/>
                <polygon class="cls-4" points="639.82 467.53 638.22 499.93 651.12 500.63 652.72 468.23 639.82 467.53"/>
                <polygon class="cls-4" points="626.82 466.93 625.22 499.33 638.12 499.93 639.82 467.53 626.82 466.93"/>
                <polygon class="cls-4" points="652.72 468.23 651.12 500.63 664.12 501.23 665.72 468.83 652.72 468.23"/>
                <polygon class="cls-4" points="665.72 468.83 664.12 501.23 677.02 501.93 678.72 469.53 665.72 468.83"/>
                <polygon class="cls-4" points="678.72 469.53 677.12 501.93 690.02 502.53 691.62 470.13 678.72 469.53"/>
                <path class="cls-4" d="M524.92,429.33l-22.7-1.1s-8.5-.8-10.4,9.2l-.1,6.6,32.4,1.6Z"/>
                <polygon class="cls-4" points="491.72 444.03 490.92 460.13 523.22 461.73 524.02 445.63 491.72 444.03"/>
                <polygon class="cls-4" points="523.22 461.73 522.42 477.93 490.12 476.33 490.92 460.13 523.22 461.73"/>
                <path class="cls-4" d="M521.62,494.13l-23.1-1.2-2.1-.1s-6.7-.6-6.9-7.6l.4-8.9,32.4,1.6Z"/>
                <path class="cls-4" d="M693.32,437.73l20.8,1.1s12.4,1.1,10.8,16.2v.5l-32.4-1.6Z"/>
                <polygon class="cls-4" points="692.42 453.93 691.62 470.13 724.02 471.73 724.82 455.63 692.42 453.93"/>
                <polygon class="cls-4" points="691.62 470.13 690.82 486.43 723.22 487.93 724.02 471.73 691.62 470.13"/>
                <path class="cls-4" d="M690.82,486.43l-.8,16.1,25.2,1.2s6.9-.1,7.5-7.2l.4-8.6Z"/>
                <g id="TEXT-726" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 595.66, 469.49)">MZ-26</text>
                </g>
                <g id="TEXT-727" data-name="TEXT">
                    <text class="cls-6" transform="translate(505.06 489.74)">1</text>
                </g>
                <g id="TEXT-728" data-name="TEXT">
                    <text class="cls-6" transform="translate(505.6 473.14)">2</text>
                </g>
                <g id="TEXT-729" data-name="TEXT">
                    <text class="cls-6" transform="translate(506.32 457.62)">3</text>
                </g>
                <g id="TEXT-730" data-name="TEXT">
                    <text class="cls-6" transform="translate(507.05 442.93)">4</text>
                </g>
                <g id="TEXT-731" data-name="TEXT">
                    <text class="cls-6" transform="translate(529.58 450.77)">5</text>
                </g>
                <g id="TEXT-732" data-name="TEXT">
                    <text class="cls-6" transform="translate(542.43 451.34)">6</text>
                </g>
                <g id="TEXT-733" data-name="TEXT">
                    <text class="cls-6" transform="translate(555.43 451.88)">7</text>
                </g>
                <g id="TEXT-734" data-name="TEXT">
                    <text class="cls-6" transform="translate(568.58 452.79)">8</text>
                </g>
                <g id="TEXT-735" data-name="TEXT">
                    <text class="cls-6" transform="translate(581.18 453.53)">9</text>
                </g>
                <g id="TEXT-736" data-name="TEXT">
                    <text class="cls-6" transform="translate(593.81 453.67)">10</text>
                </g>
                <g id="TEXT-737" data-name="TEXT">
                    <text class="cls-6" transform="translate(606.5 454.29)">
                        <tspan class="cls-7">1</tspan>
                        <tspan x="2.41" y="0">1</tspan>
                    </text>
                </g>
                <g id="TEXT-738" data-name="TEXT">
                    <text class="cls-6" transform="translate(619.44 454.9)">12</text>
                </g>
                <g id="TEXT-739" data-name="TEXT">
                    <text class="cls-6" transform="translate(632.43 455.72)">13</text>
                </g>
                <g id="TEXT-740" data-name="TEXT">
                    <text class="cls-6" transform="translate(645.16 456.33)">14</text>
                </g>
                <g id="TEXT-741" data-name="TEXT">
                    <text class="cls-6" transform="translate(657.66 456.88)">15</text>
                </g>
                <g id="TEXT-742" data-name="TEXT">
                    <text class="cls-6" transform="translate(671.45 457.51)">16</text>
                </g>
                <g id="TEXT-743" data-name="TEXT">
                    <text class="cls-6" transform="translate(684.1 458.51)">17</text>
                </g>
                <g id="TEXT-744" data-name="TEXT">
                    <text class="cls-6" transform="translate(705.42 451.38)">18</text>
                </g>
                <g id="TEXT-745" data-name="TEXT">
                    <text class="cls-6" transform="translate(705.33 466.69)">19</text>
                </g>
                <g id="TEXT-746" data-name="TEXT">
                    <text class="cls-6" transform="translate(704.6 483.63)">20</text>
                </g>
                <g id="TEXT-747" data-name="TEXT">
                    <text class="cls-6" transform="translate(704.41 499.18)">21</text>
                </g>
                <g id="TEXT-748" data-name="TEXT">
                    <text class="cls-6" transform="translate(682.32 490.7)">22</text>
                </g>
                <g id="TEXT-749" data-name="TEXT">
                    <text class="cls-6" transform="translate(668.8 489.93)">23</text>
                </g>
                <g id="TEXT-750" data-name="TEXT">
                    <text class="cls-6" transform="translate(656.39 489.53)">24</text>
                </g>
                <g id="TEXT-751" data-name="TEXT">
                    <text class="cls-6" transform="translate(643.64 488.23)">25</text>
                </g>
                <g id="TEXT-752" data-name="TEXT">
                    <text class="cls-6" transform="translate(630.73 488.11)">26</text>
                </g>
                <g id="TEXT-753" data-name="TEXT">
                    <text class="cls-6" transform="translate(617.44 487.53)">27</text>
                </g>
                <g id="TEXT-754" data-name="TEXT">
                    <text class="cls-6" transform="translate(604.49 486.83)">28</text>
                </g>
                <g id="TEXT-755" data-name="TEXT">
                    <text class="cls-6" transform="translate(591.53 486.21)">29</text>
                </g>
                <g id="TEXT-756" data-name="TEXT">
                    <text class="cls-6" transform="translate(578.58 485.6)">30</text>
                </g>
                <g id="TEXT-757" data-name="TEXT">
                    <text class="cls-6" transform="translate(565.63 484.98)">31</text>
                </g>
                <g id="TEXT-758" data-name="TEXT">
                    <text class="cls-6" transform="translate(552.68 484.36)">32</text>
                </g>
                <g id="TEXT-759" data-name="TEXT">
                    <text class="cls-6" transform="translate(539.73 483.75)">33</text>
                </g>
                <g id="TEXT-760" data-name="TEXT">
                    <text class="cls-6" transform="translate(526.77 483.13)">34</text>
                </g>
            </g>
            <g id="MZ-33-15" data-name="MZ-33">
                <path class="cls-3" d="M521.62,348.33l-15.3-1s-11.8-1.4-13.1,13l-2.4,46.2s-1.5,10.7,9.8,11.9l219,10.9s9.3-.1,9.8-10.9l2.4-45.9s1.7-13.8-13.2-14.6Z"/>
                <polygon class="cls-4" points="528.82 352.23 527.22 384.63 540.12 385.23 541.72 352.93 528.82 352.23"/>
                <polygon class="cls-4" points="541.72 352.93 540.12 385.23 553.01 385.93 554.72 353.53 541.72 352.93"/>
                <polygon class="cls-4" points="554.72 353.53 553.12 385.93 566.01 386.53 567.62 354.23 554.72 353.53"/>
                <polygon class="cls-4" points="567.62 354.23 566.01 386.53 579.01 387.23 580.62 354.83 567.62 354.23"/>
                <polygon class="cls-4" points="580.62 354.83 579.01 387.23 591.91 387.83 593.51 355.53 580.62 354.83"/>
                <polygon class="cls-4" points="593.51 355.53 591.91 387.83 604.91 388.53 606.51 356.13 593.51 355.53"/>
                <polygon class="cls-4" points="606.51 356.13 604.91 388.53 617.82 389.13 619.41 356.83 606.51 356.13"/>
                <polygon class="cls-4" points="619.41 356.83 617.82 389.13 630.82 389.83 632.41 357.43 619.41 356.83"/>
                <polygon class="cls-4" points="645.32 358.03 643.82 390.43 656.72 391.13 658.32 358.73 645.32 358.03"/>
                <polygon class="cls-4" points="632.41 357.43 630.82 389.83 643.72 390.43 645.32 358.03 632.41 357.43"/>
                <polygon class="cls-4" points="658.32 358.73 656.72 391.13 669.62 391.73 671.22 359.33 658.32 358.73"/>
                <polygon class="cls-4" points="671.32 359.33 669.72 391.73 682.62 392.43 684.22 360.03 671.32 359.33"/>
                <polygon class="cls-4" points="684.22 360.03 682.62 392.43 695.51 393.03 697.22 360.63 684.22 360.03"/>
                <polygon class="cls-4" points="527.12 384.63 525.51 417.03 538.51 417.63 540.12 385.23 527.12 384.63"/>
                <polygon class="cls-4" points="540.12 385.23 538.51 417.63 551.41 418.33 553.01 385.93 540.12 385.23"/>
                <polygon class="cls-4" points="553.01 385.93 551.41 418.33 564.41 418.93 566.01 386.53 553.01 385.93"/>
                <polygon class="cls-4" points="566.01 386.53 564.41 418.93 577.32 419.63 578.91 387.23 566.01 386.53"/>
                <polygon class="cls-4" points="578.91 387.23 577.32 419.63 590.22 420.23 591.91 387.83 578.91 387.23"/>
                <polygon class="cls-4" points="591.91 387.83 590.32 420.23 603.22 420.93 604.82 388.53 591.91 387.83"/>
                <polygon class="cls-4" points="604.82 388.53 603.22 420.93 616.22 421.53 617.82 389.13 604.82 388.53"/>
                <polygon class="cls-4" points="617.82 389.13 616.22 421.53 629.12 422.23 630.72 389.83 617.82 389.13"/>
                <polygon class="cls-4" points="643.72 390.43 642.12 422.83 655.01 423.53 656.62 391.13 643.72 390.43"/>
                <polygon class="cls-4" points="630.72 389.83 629.12 422.23 642.01 422.83 643.72 390.43 630.72 389.83"/>
                <polygon class="cls-4" points="656.62 391.13 655.01 423.53 668.01 424.13 669.62 391.73 656.62 391.13"/>
                <polygon class="cls-4" points="669.62 391.73 668.01 424.13 680.91 424.83 682.62 392.43 669.62 391.73"/>
                <polygon class="cls-4" points="682.62 392.43 681.01 424.83 693.91 425.43 695.51 393.03 682.62 392.43"/>
                <path class="cls-4" d="M528.82,352.23l-22.7-1.1s-8.5-.8-10.4,9.2l-.1,6.6,32.4,1.6Z"/>
                <polygon class="cls-4" points="495.62 366.93 494.81 383.03 527.12 384.63 527.91 368.53 495.62 366.93"/>
                <polygon class="cls-4" points="527.12 384.63 526.32 400.83 494.01 399.23 494.81 383.03 527.12 384.63"/>
                <path class="cls-4" d="M525.52,417l-23.1-1.2-2.1-.1s-6.7-.6-6.9-7.6l.4-8.9,32.4,1.6Z"/>
                <path class="cls-4" d="M697.22,360.63l20.8,1.1s12.4,1.1,10.8,16.2v.5l-32.4-1.6Z"/>
                <polygon class="cls-4" points="696.32 376.83 695.51 393.03 727.91 394.63 728.72 378.53 696.32 376.83"/>
                <polygon class="cls-4" points="695.51 393.03 694.72 409.33 727.12 410.83 727.91 394.63 695.51 393.03"/>
                <path class="cls-4" d="M694.72,409.33l-.8,16.1,25.2,1.2s6.9-.1,7.5-7.2l.4-8.6Z"/>
                <g id="TEXT-761" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 599.55, 392.39)">MZ-25</text>
                </g>
                <g id="TEXT-762" data-name="TEXT">
                    <text class="cls-6" transform="translate(508.95 412.64)">1</text>
                </g>
                <g id="TEXT-763" data-name="TEXT">
                    <text class="cls-6" transform="translate(509.49 396.04)">2</text>
                </g>
                <g id="TEXT-764" data-name="TEXT">
                    <text class="cls-6" transform="translate(510.21 380.52)">3</text>
                </g>
                <g id="TEXT-765" data-name="TEXT">
                    <text class="cls-6" transform="translate(510.95 365.83)">4</text>
                </g>
                <g id="TEXT-766" data-name="TEXT">
                    <text class="cls-6" transform="translate(533.47 373.67)">5</text>
                </g>
                <g id="TEXT-767" data-name="TEXT">
                    <text class="cls-6" transform="translate(546.32 374.24)">6</text>
                </g>
                <g id="TEXT-768" data-name="TEXT">
                    <text class="cls-6" transform="translate(559.33 374.78)">7</text>
                </g>
                <g id="TEXT-769" data-name="TEXT">
                    <text class="cls-6" transform="translate(572.47 375.69)">8</text>
                </g>
                <g id="TEXT-770" data-name="TEXT">
                    <text class="cls-6" transform="translate(585.08 376.43)">9</text>
                </g>
                <g id="TEXT-771" data-name="TEXT">
                    <text class="cls-6" transform="translate(597.7 376.57)">10</text>
                </g>
                <g id="TEXT-772" data-name="TEXT">
                    <text class="cls-6" transform="translate(610.4 377.19)">
                        <tspan class="cls-7">1</tspan>
                        <tspan x="2.41" y="0">1</tspan>
                    </text>
                </g>
                <g id="TEXT-773" data-name="TEXT">
                    <text class="cls-6" transform="translate(623.33 377.8)">12</text>
                </g>
                <g id="TEXT-774" data-name="TEXT">
                    <text class="cls-6" transform="translate(636.33 378.62)">13</text>
                </g>
                <g id="TEXT-775" data-name="TEXT">
                    <text class="cls-6" transform="translate(649.05 379.23)">14</text>
                </g>
                <g id="TEXT-776" data-name="TEXT">
                    <text class="cls-6" transform="translate(661.55 379.78)">15</text>
                </g>
                <g id="TEXT-777" data-name="TEXT">
                    <text class="cls-6" transform="translate(675.34 380.41)">16</text>
                </g>
                <g id="TEXT-778" data-name="TEXT">
                    <text class="cls-6" transform="translate(687.99 381.41)">17</text>
                </g>
                <g id="TEXT-779" data-name="TEXT">
                    <text class="cls-6" transform="translate(709.31 374.28)">18</text>
                </g>
                <g id="TEXT-780" data-name="TEXT">
                    <text class="cls-6" transform="translate(709.22 389.59)">19</text>
                </g>
                <g id="TEXT-781" data-name="TEXT">
                    <text class="cls-6" transform="translate(708.49 406.53)">20</text>
                </g>
                <g id="TEXT-782" data-name="TEXT">
                    <text class="cls-6" transform="translate(708.3 422.08)">21</text>
                </g>
                <g id="TEXT-783" data-name="TEXT">
                    <text class="cls-6" transform="translate(686.21 413.6)">22</text>
                </g>
                <g id="TEXT-784" data-name="TEXT">
                    <text class="cls-6" transform="translate(672.69 412.83)">23</text>
                </g>
                <g id="TEXT-785" data-name="TEXT">
                    <text class="cls-6" transform="translate(660.28 412.43)">24</text>
                </g>
                <g id="TEXT-786" data-name="TEXT">
                    <text class="cls-6" transform="translate(647.53 411.13)">25</text>
                </g>
                <g id="TEXT-787" data-name="TEXT">
                    <text class="cls-6" transform="translate(634.62 411.01)">26</text>
                </g>
                <g id="TEXT-788" data-name="TEXT">
                    <text class="cls-6" transform="translate(621.33 410.43)">27</text>
                </g>
                <g id="TEXT-789" data-name="TEXT">
                    <text class="cls-6" transform="translate(608.38 409.73)">28</text>
                </g>
                <g id="TEXT-790" data-name="TEXT">
                    <text class="cls-6" transform="translate(595.43 409.11)">29</text>
                </g>
                <g id="TEXT-791" data-name="TEXT">
                    <text class="cls-6" transform="translate(582.47 408.5)">30</text>
                </g>
                <g id="TEXT-792" data-name="TEXT">
                    <text class="cls-6" transform="translate(569.52 407.88)">31</text>
                </g>
                <g id="TEXT-793" data-name="TEXT">
                    <text class="cls-6" transform="translate(556.57 407.26)">32</text>
                </g>
                <g id="TEXT-794" data-name="TEXT">
                    <text class="cls-6" transform="translate(543.62 406.65)">33</text>
                </g>
                <g id="TEXT-795" data-name="TEXT">
                    <text class="cls-6" transform="translate(530.67 406.03)">34</text>
                </g>
            </g>
            <g id="MZ-33-16" data-name="MZ-33">
                <path class="cls-3" d="M525.83,270.11l-15.3-1s-11.8-1.4-13.1,13l-2.4,46.2s-1.5,10.7,9.8,11.9l219,10.9s9.3-.1,9.8-10.9l2.4-45.9s1.7-13.8-13.2-14.6Z"/>
                <polygon class="cls-4" points="533.03 274.01 531.43 306.41 544.33 307.01 545.93 274.71 533.03 274.01"/>
                <polygon class="cls-4" points="545.93 274.71 544.33 307.01 557.23 307.71 558.93 275.31 545.93 274.71"/>
                <polygon class="cls-4" points="558.93 275.31 557.33 307.71 570.23 308.31 571.83 276.01 558.93 275.31"/>
                <polygon class="cls-4" points="571.83 276.01 570.23 308.31 583.23 309.01 584.83 276.61 571.83 276.01"/>
                <polygon class="cls-4" points="584.83 276.61 583.23 309.01 596.13 309.61 597.73 277.31 584.83 276.61"/>
                <polygon class="cls-4" points="597.73 277.31 596.13 309.61 609.13 310.31 610.73 277.91 597.73 277.31"/>
                <polygon class="cls-4" points="610.73 277.91 609.13 310.31 622.03 310.91 623.63 278.61 610.73 277.91"/>
                <polygon class="cls-4" points="623.63 278.61 622.03 310.91 635.03 311.61 636.63 279.21 623.63 278.61"/>
                <polygon class="cls-4" points="649.53 279.81 648.03 312.21 660.93 312.91 662.53 280.51 649.53 279.81"/>
                <polygon class="cls-4" points="636.63 279.21 635.03 311.61 647.93 312.21 649.53 279.81 636.63 279.21"/>
                <polygon class="cls-4" points="662.53 280.51 660.93 312.91 673.83 313.51 675.43 281.11 662.53 280.51"/>
                <polygon class="cls-4" points="675.53 281.11 673.93 313.51 686.83 314.21 688.43 281.81 675.53 281.11"/>
                <polygon class="cls-4" points="688.43 281.81 686.83 314.21 699.73 314.81 701.43 282.41 688.43 281.81"/>
                <polygon class="cls-4" points="531.33 306.41 529.73 338.81 542.73 339.41 544.33 307.01 531.33 306.41"/>
                <polygon class="cls-4" points="544.33 307.01 542.73 339.41 555.63 340.11 557.23 307.71 544.33 307.01"/>
                <polygon class="cls-4" points="557.23 307.71 555.63 340.11 568.63 340.71 570.23 308.31 557.23 307.71"/>
                <polygon class="cls-4" points="570.23 308.31 568.63 340.71 581.53 341.41 583.13 309.01 570.23 308.31"/>
                <polygon class="cls-4" points="583.13 309.01 581.53 341.41 594.43 342.01 596.13 309.61 583.13 309.01"/>
                <polygon class="cls-4" points="596.13 309.61 594.53 342.01 607.43 342.71 609.03 310.31 596.13 309.61"/>
                <polygon class="cls-4" points="609.03 310.31 607.43 342.71 620.43 343.31 622.03 310.91 609.03 310.31"/>
                <polygon class="cls-4" points="622.03 310.91 620.43 343.31 633.33 344.01 634.93 311.61 622.03 310.91"/>
                <polygon class="cls-4" points="647.93 312.21 646.33 344.61 659.23 345.31 660.83 312.91 647.93 312.21"/>
                <polygon class="cls-4" points="634.93 311.61 633.33 344.01 646.23 344.61 647.93 312.21 634.93 311.61"/>
                <polygon class="cls-4" points="660.83 312.91 659.23 345.31 672.23 345.91 673.83 313.51 660.83 312.91"/>
                <polygon class="cls-4" points="673.83 313.51 672.23 345.91 685.13 346.61 686.83 314.21 673.83 313.51"/>
                <polygon class="cls-4" points="686.83 314.21 685.23 346.61 698.13 347.21 699.73 314.81 686.83 314.21"/>
                <path class="cls-4" d="M533,274l-22.7-1.1s-8.5-.8-10.4,9.2l-.1,6.6,32.4,1.6Z"/>
                <polygon class="cls-4" points="499.83 288.71 499.03 304.81 531.33 306.41 532.13 290.31 499.83 288.71"/>
                <polygon class="cls-4" points="531.33 306.41 530.53 322.61 498.23 321.01 499.03 304.81 531.33 306.41"/>
                <path class="cls-4" d="M529.73,338.81l-23.1-1.2-2.1-.1s-6.7-.6-6.9-7.6l.4-8.9,32.4,1.6Z"/>
                <path class="cls-4" d="M701.43,282.41l20.8,1.1s12.4,1.1,10.8,16.2v.5l-32.4-1.6Z"/>
                <polygon class="cls-4" points="700.53 298.61 699.73 314.81 732.13 316.41 732.93 300.31 700.53 298.61"/>
                <polygon class="cls-4" points="699.73 314.81 698.93 331.11 731.33 332.61 732.13 316.41 699.73 314.81"/>
                <path class="cls-4" d="M698.93,331.11l-.8,16.1,25.2,1.2s6.9-.1,7.5-7.2l.4-8.6Z"/>
                <g id="TEXT-796" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 603.76, 314.17)">MZ-24</text>
                </g>
                <g id="TEXT-797" data-name="TEXT">
                    <text class="cls-6" transform="translate(513.16 334.43)">1</text>
                </g>
                <g id="TEXT-798" data-name="TEXT">
                    <text class="cls-6" transform="translate(513.7 317.83)">2</text>
                </g>
                <g id="TEXT-799" data-name="TEXT">
                    <text class="cls-6" transform="translate(514.42 302.3)">3</text>
                </g>
                <g id="TEXT-800" data-name="TEXT">
                    <text class="cls-6" transform="translate(515.16 287.61)">4</text>
                </g>
                <g id="TEXT-801" data-name="TEXT">
                    <text class="cls-6" transform="translate(537.68 295.45)">5</text>
                </g>
                <g id="TEXT-802" data-name="TEXT">
                    <text class="cls-6" transform="translate(550.53 296.02)">6</text>
                </g>
                <g id="TEXT-803" data-name="TEXT">
                    <text class="cls-6" transform="translate(563.54 296.57)">7</text>
                </g>
                <g id="TEXT-804" data-name="TEXT">
                    <text class="cls-6" transform="translate(576.68 297.48)">8</text>
                </g>
                <g id="TEXT-805" data-name="TEXT">
                    <text class="cls-6" transform="translate(589.29 298.21)">9</text>
                </g>
                <g id="TEXT-806" data-name="TEXT">
                    <text class="cls-6" transform="translate(601.91 298.36)">10</text>
                </g>
                <g id="TEXT-807" data-name="TEXT">
                    <text class="cls-6" transform="translate(614.61 298.97)">
                        <tspan class="cls-7">1</tspan>
                        <tspan x="2.41" y="0">1</tspan>
                    </text>
                </g>
                <g id="TEXT-808" data-name="TEXT">
                    <text class="cls-6" transform="translate(627.54 299.58)">12</text>
                </g>
                <g id="TEXT-809" data-name="TEXT">
                    <text class="cls-6" transform="translate(640.54 300.41)">13</text>
                </g>
                <g id="TEXT-810" data-name="TEXT">
                    <text class="cls-6" transform="translate(653.26 301.01)">14</text>
                </g>
                <g id="TEXT-811" data-name="TEXT">
                    <text class="cls-6" transform="translate(665.76 301.57)">15</text>
                </g>
                <g id="TEXT-812" data-name="TEXT">
                    <text class="cls-6" transform="translate(679.55 302.2)">16</text>
                </g>
                <g id="TEXT-813" data-name="TEXT">
                    <text class="cls-6" transform="translate(692.2 303.19)">17</text>
                </g>
                <g id="TEXT-814" data-name="TEXT">
                    <text class="cls-6" transform="translate(713.52 296.06)">18</text>
                </g>
                <g id="TEXT-815" data-name="TEXT">
                    <text class="cls-6" transform="translate(713.43 311.37)">19</text>
                </g>
                <g id="TEXT-816" data-name="TEXT">
                    <text class="cls-6" transform="translate(712.7 328.32)">20</text>
                </g>
                <g id="TEXT-817" data-name="TEXT">
                    <text class="cls-6" transform="translate(712.51 343.86)">21</text>
                </g>
                <g id="TEXT-818" data-name="TEXT">
                    <text class="cls-6" transform="translate(690.42 335.38)">22</text>
                </g>
                <g id="TEXT-819" data-name="TEXT">
                    <text class="cls-6" transform="translate(676.9 334.61)">23</text>
                </g>
                <g id="TEXT-820" data-name="TEXT">
                    <text class="cls-6" transform="translate(664.49 334.21)">24</text>
                </g>
                <g id="TEXT-821" data-name="TEXT">
                    <text class="cls-6" transform="translate(651.74 332.91)">25</text>
                </g>
                <g id="TEXT-822" data-name="TEXT">
                    <text class="cls-6" transform="translate(638.83 332.8)">26</text>
                </g>
                <g id="TEXT-823" data-name="TEXT">
                    <text class="cls-6" transform="translate(625.54 332.21)">27</text>
                </g>
                <g id="TEXT-824" data-name="TEXT">
                    <text class="cls-6" transform="translate(612.59 331.51)">28</text>
                </g>
                <g id="TEXT-825" data-name="TEXT">
                    <text class="cls-6" transform="translate(599.64 330.9)">29</text>
                </g>
                <g id="TEXT-826" data-name="TEXT">
                    <text class="cls-6" transform="translate(586.69 330.28)">30</text>
                </g>
                <g id="TEXT-827" data-name="TEXT">
                    <text class="cls-6" transform="translate(573.73 329.66)">31</text>
                </g>
                <g id="TEXT-828" data-name="TEXT">
                    <text class="cls-6" transform="translate(560.78 329.05)">32</text>
                </g>
                <g id="TEXT-829" data-name="TEXT">
                    <text class="cls-6" transform="translate(547.83 328.43)">33</text>
                </g>
                <g id="TEXT-830" data-name="TEXT">
                    <text class="cls-6" transform="translate(534.88 327.81)">34</text>
                </g>
            </g>
            <g id="MZ-34">
                <path class="cls-3" d="M487.08,1053.85l-15.3-1s-11.8-1.4-13.1,13l-2.4,46.2s-1.5,10.7,9.8,11.9l219,10.9s9.3-.1,9.8-10.9l2.4-45.9s1.7-13.8-13.2-14.6Z"/>
                <polygon class="cls-4" points="494.27 1057.75 492.68 1090.15 505.57 1090.75 507.18 1058.35 494.27 1057.75"/>
                <polygon class="cls-4" points="507.18 1058.35 505.57 1090.75 518.48 1091.45 520.08 1059.05 507.18 1058.35"/>
                <polygon class="cls-4" points="520.17 1059.05 518.58 1091.45 531.48 1092.05 533.08 1059.65 520.17 1059.05"/>
                <polygon class="cls-4" points="533.08 1059.65 531.48 1092.05 544.38 1092.75 546.08 1060.35 533.08 1059.65"/>
                <polygon class="cls-4" points="545.98 1060.35 544.38 1092.75 557.38 1093.35 558.98 1060.95 545.98 1060.35"/>
                <polygon class="cls-4" points="558.98 1060.95 557.38 1093.35 570.27 1093.95 571.98 1061.65 558.98 1060.95"/>
                <polygon class="cls-4" points="571.98 1061.65 570.38 1093.95 583.27 1094.65 584.88 1062.25 571.98 1061.65"/>
                <polygon class="cls-4" points="584.88 1062.25 583.27 1094.65 596.17 1095.25 597.88 1062.95 584.88 1062.25"/>
                <polygon class="cls-4" points="610.77 1063.55 609.17 1095.95 622.08 1096.55 623.77 1064.25 610.77 1063.55"/>
                <polygon class="cls-4" points="597.77 1062.95 596.17 1095.25 609.17 1095.95 610.77 1063.55 597.77 1062.95"/>
                <polygon class="cls-4" points="623.67 1064.25 622.08 1096.55 635.08 1097.25 636.67 1064.85 623.67 1064.25"/>
                <polygon class="cls-4" points="636.67 1064.85 635.08 1097.25 647.98 1097.85 649.67 1065.55 636.67 1064.85"/>
                <polygon class="cls-4" points="649.67 1065.55 648.08 1097.85 660.98 1098.55 662.58 1066.15 649.67 1065.55"/>
                <polygon class="cls-4" points="492.57 1090.15 490.98 1122.45 503.88 1123.15 505.57 1090.75 492.57 1090.15"/>
                <polygon class="cls-4" points="505.48 1090.75 503.88 1123.15 516.88 1123.75 518.48 1091.45 505.48 1090.75"/>
                <polygon class="cls-4" points="518.48 1091.45 516.88 1123.75 529.77 1124.45 531.48 1092.05 518.48 1091.45"/>
                <polygon class="cls-4" points="531.48 1092.05 529.88 1124.45 542.77 1125.05 544.38 1092.75 531.48 1092.05"/>
                <polygon class="cls-4" points="544.38 1092.75 542.77 1125.05 555.67 1125.75 557.27 1093.35 544.38 1092.75"/>
                <polygon class="cls-4" points="557.38 1093.35 555.77 1125.75 568.67 1126.35 570.27 1094.05 557.38 1093.35"/>
                <polygon class="cls-4" points="570.27 1094.05 568.67 1126.35 581.58 1127.05 583.27 1094.65 570.27 1094.05"/>
                <polygon class="cls-4" points="583.27 1094.65 581.67 1127.05 594.58 1127.65 596.17 1095.35 583.27 1094.65"/>
                <polygon class="cls-4" points="609.17 1095.95 607.58 1128.35 620.48 1128.95 622.08 1096.55 609.17 1095.95"/>
                <polygon class="cls-4" points="596.17 1095.35 594.58 1127.65 607.48 1128.35 609.08 1095.95 596.17 1095.35"/>
                <polygon class="cls-4" points="622.08 1096.55 620.48 1128.95 633.38 1129.65 634.98 1097.25 622.08 1096.55"/>
                <polygon class="cls-4" points="635.08 1097.25 633.48 1129.65 646.38 1130.25 647.98 1097.85 635.08 1097.25"/>
                <polygon class="cls-4" points="647.98 1097.85 646.38 1130.25 659.38 1130.95 660.98 1098.55 647.98 1097.85"/>
                <path class="cls-4" d="M494.28,1057.75l-22.7-1.1s-8.5-.8-10.4,9.2l-.1,6.6,32.4,1.6Z"/>
                <polygon class="cls-4" points="460.98 1072.35 460.27 1088.45 492.57 1090.15 493.38 1073.95 460.98 1072.35"/>
                <polygon class="cls-4" points="492.57 1090.15 491.77 1106.25 459.38 1104.65 460.27 1088.45 492.57 1090.15"/>
                <path class="cls-4" d="M491,1122.45l-23.1-1.2-2.1-.1s-6.7-.6-6.9-7.6l.4-8.9,32.4,1.6Z"/>
                <path class="cls-4" d="M662.58,1066.15l20.8,1.1s12.4,1.1,10.8,16.2v.5l-32.4-1.6Z"/>
                <polygon class="cls-4" points="661.77 1082.35 660.98 1098.55 693.38 1100.15 694.17 1083.95 661.77 1082.35"/>
                <polygon class="cls-4" points="660.98 1098.55 660.17 1114.85 692.48 1116.35 693.38 1100.15 660.98 1098.55"/>
                <path class="cls-4" d="M660.18,1114.85l-.8,16.1,25.2,1.2s6.9-.1,7.5-7.2l.4-8.6Z"/>
                <g id="TEXT-831" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 564.22, 1098.21)">MZ-34</text>
                </g>
                <g id="TEXT-832" data-name="TEXT">
                    <text class="cls-6" transform="translate(473.62 1118.46)">1</text>
                </g>
                <g id="TEXT-833" data-name="TEXT">
                    <text class="cls-6" transform="translate(474.16 1101.86)">2</text>
                </g>
                <g id="TEXT-834" data-name="TEXT">
                    <text class="cls-6" transform="translate(474.88 1086.34)">3</text>
                </g>
                <g id="TEXT-835" data-name="TEXT">
                    <text class="cls-6" transform="translate(475.61 1071.65)">4</text>
                </g>
                <g id="TEXT-836" data-name="TEXT">
                    <text class="cls-6" transform="translate(498.14 1079.49)">5</text>
                </g>
                <g id="TEXT-837" data-name="TEXT">
                    <text class="cls-6" transform="translate(510.99 1080.06)">6</text>
                </g>
                <g id="TEXT-838" data-name="TEXT">
                    <text class="cls-6" transform="translate(523.99 1080.6)">7</text>
                </g>
                <g id="TEXT-839" data-name="TEXT">
                    <text class="cls-6" transform="translate(537.14 1081.51)">8</text>
                </g>
                <g id="TEXT-840" data-name="TEXT">
                    <text class="cls-6" transform="translate(549.74 1082.25)">9</text>
                </g>
                <g id="TEXT-841" data-name="TEXT">
                    <text class="cls-6" transform="translate(562.37 1082.39)">10</text>
                </g>
                <g id="TEXT-842" data-name="TEXT">
                    <text class="cls-6" transform="translate(575.07 1083.01)">
                        <tspan class="cls-7">1</tspan>
                        <tspan x="2.41" y="0">1</tspan>
                    </text>
                </g>
                <g id="TEXT-843" data-name="TEXT">
                    <text class="cls-6" transform="translate(588 1083.62)">12</text>
                </g>
                <g id="TEXT-844" data-name="TEXT">
                    <text class="cls-6" transform="translate(600.99 1084.44)">13</text>
                </g>
                <g id="TEXT-845" data-name="TEXT">
                    <text class="cls-6" transform="translate(613.72 1085.05)">14</text>
                </g>
                <g id="TEXT-846" data-name="TEXT">
                    <text class="cls-6" transform="translate(626.22 1085.6)">15</text>
                </g>
                <g id="TEXT-847" data-name="TEXT">
                    <text class="cls-6" transform="translate(640.01 1086.23)">16</text>
                </g>
                <g id="TEXT-848" data-name="TEXT">
                    <text class="cls-6" transform="translate(652.66 1087.23)">17</text>
                </g>
                <g id="TEXT-849" data-name="TEXT">
                    <text class="cls-6" transform="translate(673.98 1080.1)">18</text>
                </g>
                <g id="TEXT-850" data-name="TEXT">
                    <text class="cls-6" transform="translate(673.89 1095.41)">19</text>
                </g>
                <g id="TEXT-851" data-name="TEXT">
                    <text class="cls-6" transform="translate(673.16 1112.35)">20</text>
                </g>
                <g id="TEXT-852" data-name="TEXT">
                    <text class="cls-6" transform="translate(672.97 1127.9)">21</text>
                </g>
                <g id="TEXT-853" data-name="TEXT">
                    <text class="cls-6" transform="translate(650.88 1119.42)">22</text>
                </g>
                <g id="TEXT-854" data-name="TEXT">
                    <text class="cls-6" transform="translate(637.36 1118.65)">23</text>
                </g>
                <g id="TEXT-855" data-name="TEXT">
                    <text class="cls-6" transform="translate(624.95 1118.25)">24</text>
                </g>
                <g id="TEXT-856" data-name="TEXT">
                    <text class="cls-6" transform="translate(612.2 1116.95)">25</text>
                </g>
                <g id="TEXT-857" data-name="TEXT">
                    <text class="cls-6" transform="translate(599.29 1116.83)">26</text>
                </g>
                <g id="TEXT-858" data-name="TEXT">
                    <text class="cls-6" transform="translate(586 1116.25)">27</text>
                </g>
                <g id="TEXT-859" data-name="TEXT">
                    <text class="cls-6" transform="translate(573.05 1115.55)">28</text>
                </g>
                <g id="TEXT-860" data-name="TEXT">
                    <text class="cls-6" transform="translate(560.09 1114.93)">29</text>
                </g>
                <g id="TEXT-861" data-name="TEXT">
                    <text class="cls-6" transform="translate(547.14 1114.32)">30</text>
                </g>
                <g id="TEXT-862" data-name="TEXT">
                    <text class="cls-6" transform="translate(534.19 1113.7)">31</text>
                </g>
                <g id="TEXT-863" data-name="TEXT">
                    <text class="cls-6" transform="translate(521.24 1113.08)">32</text>
                </g>
                <g id="TEXT-864" data-name="TEXT">
                    <text class="cls-6" transform="translate(508.29 1112.47)">33</text>
                </g>
                <g id="TEXT-865" data-name="TEXT">
                    <text class="cls-6" transform="translate(495.33 1111.85)">34</text>
                </g>
            </g>
            <g id="MZ-65">
                <path class="cls-3" d="M729.08,1144.25l-15.3-1s-11.8-1.4-13.1,13l-2.4,46.2s-1.5,10.7,9.8,11.9l219,10.9s9.3-.1,9.8-10.9l2.4-45.9s1.7-13.8-13.2-14.6Z"/>
                <polygon class="cls-4" points="736.17 1148.15 734.58 1180.45 747.48 1181.15 749.08 1148.75 736.17 1148.15"/>
                <polygon class="cls-4" points="749.08 1148.75 747.48 1181.15 760.38 1181.75 762.08 1149.45 749.08 1148.75"/>
                <polygon class="cls-4" points="762.08 1149.45 760.48 1181.75 773.38 1182.45 774.98 1150.05 762.08 1149.45"/>
                <polygon class="cls-4" points="774.98 1150.05 773.48 1182.45 786.38 1183.05 787.98 1150.75 774.98 1150.05"/>
                <polygon class="cls-4" points="787.98 1150.75 786.38 1183.05 799.27 1183.75 800.88 1151.35 787.98 1150.75"/>
                <polygon class="cls-4" points="800.98 1151.35 799.38 1183.75 812.27 1184.35 813.88 1151.95 800.98 1151.35"/>
                <polygon class="cls-4" points="813.88 1151.95 812.27 1184.35 825.17 1185.05 826.88 1152.65 813.88 1151.95"/>
                <polygon class="cls-4" points="826.77 1152.65 825.17 1185.05 838.17 1185.65 839.77 1153.25 826.77 1152.65"/>
                <polygon class="cls-4" points="852.77 1153.95 851.17 1186.35 864.08 1186.95 865.67 1154.55 852.77 1153.95"/>
                <polygon class="cls-4" points="839.77 1153.25 838.17 1185.65 851.08 1186.35 852.67 1153.95 839.77 1153.25"/>
                <polygon class="cls-4" points="865.67 1154.55 864.08 1186.95 876.98 1187.65 878.58 1155.25 865.67 1154.55"/>
                <polygon class="cls-4" points="878.67 1155.25 877.08 1187.65 889.98 1188.25 891.58 1155.85 878.67 1155.25"/>
                <polygon class="cls-4" points="891.58 1155.85 889.98 1188.25 902.98 1188.95 904.58 1156.55 891.58 1155.85"/>
                <polygon class="cls-4" points="734.48 1180.45 732.88 1212.85 745.88 1213.55 747.48 1181.15 734.48 1180.45"/>
                <polygon class="cls-4" points="747.48 1181.15 745.88 1213.55 758.77 1214.15 760.38 1181.75 747.48 1181.15"/>
                <polygon class="cls-4" points="760.38 1181.75 758.88 1214.15 771.77 1214.85 773.38 1182.45 760.38 1181.75"/>
                <polygon class="cls-4" points="773.38 1182.45 771.77 1214.85 784.67 1215.45 786.38 1183.05 773.38 1182.45"/>
                <polygon class="cls-4" points="786.27 1183.05 784.67 1215.45 797.67 1216.15 799.27 1183.75 786.27 1183.05"/>
                <polygon class="cls-4" points="799.27 1183.75 797.67 1216.15 810.58 1216.75 812.27 1184.35 799.27 1183.75"/>
                <polygon class="cls-4" points="812.27 1184.35 810.67 1216.75 823.58 1217.45 825.17 1185.05 812.27 1184.35"/>
                <polygon class="cls-4" points="825.17 1185.05 823.58 1217.45 836.48 1218.05 838.08 1185.65 825.17 1185.05"/>
                <polygon class="cls-4" points="851.08 1186.35 849.48 1218.75 862.38 1219.35 864.08 1186.95 851.08 1186.35"/>
                <polygon class="cls-4" points="838.08 1185.65 836.48 1218.05 849.48 1218.75 851.08 1186.35 838.08 1185.65"/>
                <polygon class="cls-4" points="863.98 1186.95 862.38 1219.35 875.38 1219.95 876.98 1187.65 863.98 1186.95"/>
                <polygon class="cls-4" points="876.98 1187.65 875.38 1220.05 888.27 1220.65 889.98 1188.25 876.98 1187.65"/>
                <polygon class="cls-4" points="889.98 1188.25 888.38 1220.65 901.27 1221.25 902.88 1188.95 889.98 1188.25"/>
                <path class="cls-4" d="M736.18,1148.15l-22.7-1.1s-8.5-.8-10.4,9.2l-.1,6.6,32.4,1.6Z"/>
                <polygon class="cls-4" points="702.98 1162.75 702.17 1178.85 734.48 1180.45 735.38 1164.35 702.98 1162.75"/>
                <polygon class="cls-4" points="734.48 1180.45 733.67 1196.65 701.38 1195.05 702.17 1178.85 734.48 1180.45"/>
                <path class="cls-4" d="M732.88,1212.85l-23.1-1.2-2.1-.1s-6.7-.6-6.9-7.6l.4-8.9,32.4,1.6Z"/>
                <path class="cls-4" d="M904.58,1156.55l20.8,1.1s12.4,1.1,10.8,16.2v.5l-32.4-1.6Z"/>
                <polygon class="cls-4" points="903.77 1172.75 902.88 1188.95 935.27 1190.55 936.08 1174.35 903.77 1172.75"/>
                <polygon class="cls-4" points="902.88 1188.95 902.08 1205.25 934.48 1206.75 935.27 1190.55 902.88 1188.95"/>
                <path class="cls-4" d="M902.08,1205.25l-.8,16.1,25.2,1.2s6.9-.1,7.5-7.2l.4-8.6Z"/>
                <g id="TEXT-866" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 802.46, 1192.15)">MZ-65</text>
                </g>
                <g id="INSERT">
                    <g id="TEXT-867" data-name="TEXT">
                        <text class="cls-6" transform="translate(715.78 1208.49)">1</text>
                    </g>
                    <g id="TEXT-868" data-name="TEXT">
                        <text class="cls-6" transform="translate(716.32 1191.89)">2</text>
                    </g>
                    <g id="TEXT-869" data-name="TEXT">
                        <text class="cls-6" transform="translate(717.04 1176.37)">3</text>
                    </g>
                    <g id="TEXT-870" data-name="TEXT">
                        <text class="cls-6" transform="translate(717.78 1161.68)">4</text>
                    </g>
                    <g id="TEXT-871" data-name="TEXT">
                        <text class="cls-6" transform="translate(740.3 1169.52)">5</text>
                    </g>
                    <g id="TEXT-872" data-name="TEXT">
                        <text class="cls-6" transform="translate(753.15 1170.09)">6</text>
                    </g>
                    <g id="TEXT-873" data-name="TEXT">
                        <text class="cls-6" transform="translate(766.16 1170.63)">7</text>
                    </g>
                    <g id="TEXT-874" data-name="TEXT">
                        <text class="cls-6" transform="translate(779.3 1171.54)">8</text>
                    </g>
                    <g id="TEXT-875" data-name="TEXT">
                        <text class="cls-6" transform="translate(791.91 1172.28)">9</text>
                    </g>
                    <g id="TEXT-876" data-name="TEXT">
                        <text class="cls-6" transform="translate(804.53 1172.42)">10</text>
                    </g>
                    <g id="TEXT-877" data-name="TEXT">
                        <text class="cls-6" transform="translate(817.23 1173.04)">
                            <tspan class="cls-7">1</tspan>
                            <tspan x="2.41" y="0">1</tspan>
                        </text>
                    </g>
                    <g id="TEXT-878" data-name="TEXT">
                        <text class="cls-6" transform="translate(830.16 1173.64)">12</text>
                    </g>
                    <g id="TEXT-879" data-name="TEXT">
                        <text class="cls-6" transform="translate(843.16 1174.47)">13</text>
                    </g>
                    <g id="TEXT-880" data-name="TEXT">
                        <text class="cls-6" transform="translate(855.88 1175.08)">14</text>
                    </g>
                    <g id="TEXT-881" data-name="TEXT">
                        <text class="cls-6" transform="translate(868.38 1175.63)">15</text>
                    </g>
                    <g id="TEXT-882" data-name="TEXT">
                        <text class="cls-6" transform="translate(882.17 1176.26)">16</text>
                    </g>
                    <g id="TEXT-883" data-name="TEXT">
                        <text class="cls-6" transform="translate(894.82 1177.26)">17</text>
                    </g>
                    <g id="TEXT-884" data-name="TEXT">
                        <text class="cls-6" transform="translate(916.14 1170.13)">18</text>
                    </g>
                    <g id="TEXT-885" data-name="TEXT">
                        <text class="cls-6" transform="translate(916.05 1185.44)">19</text>
                    </g>
                    <g id="TEXT-886" data-name="TEXT">
                        <text class="cls-6" transform="translate(915.32 1202.38)">20</text>
                    </g>
                    <g id="TEXT-887" data-name="TEXT">
                        <text class="cls-6" transform="translate(915.13 1217.93)">21</text>
                    </g>
                    <g id="TEXT-888" data-name="TEXT">
                        <text class="cls-6" transform="translate(893.04 1209.45)">22</text>
                    </g>
                    <g id="TEXT-889" data-name="TEXT">
                        <text class="cls-6" transform="translate(879.52 1208.68)">23</text>
                    </g>
                    <g id="TEXT-890" data-name="TEXT">
                        <text class="cls-6" transform="translate(867.11 1208.28)">24</text>
                    </g>
                    <g id="TEXT-891" data-name="TEXT">
                        <text class="cls-6" transform="translate(854.36 1206.98)">25</text>
                    </g>
                    <g id="TEXT-892" data-name="TEXT">
                        <text class="cls-6" transform="translate(841.45 1206.86)">26</text>
                    </g>
                    <g id="TEXT-893" data-name="TEXT">
                        <text class="cls-6" transform="translate(828.16 1206.28)">27</text>
                    </g>
                    <g id="TEXT-894" data-name="TEXT">
                        <text class="cls-6" transform="translate(815.21 1205.58)">28</text>
                    </g>
                    <g id="TEXT-895" data-name="TEXT">
                        <text class="cls-6" transform="translate(802.26 1204.96)">29</text>
                    </g>
                    <g id="TEXT-896" data-name="TEXT">
                        <text class="cls-6" transform="translate(789.31 1204.34)">30</text>
                    </g>
                    <g id="TEXT-897" data-name="TEXT">
                        <text class="cls-6" transform="translate(776.35 1203.73)">31</text>
                    </g>
                    <g id="TEXT-898" data-name="TEXT">
                        <text class="cls-6" transform="translate(763.4 1203.11)">32</text>
                    </g>
                    <g id="TEXT-899" data-name="TEXT">
                        <text class="cls-6" transform="translate(750.45 1202.49)">33</text>
                    </g>
                    <g id="TEXT-900" data-name="TEXT">
                        <text class="cls-6" transform="translate(737.5 1201.88)">34</text>
                    </g>
                </g>
            </g>
            <g id="_MZ-95_" data-name="&lt;MZ-95&gt;">
                <path class="cls-3" d="M979,1078.55l-15.3-1s-11.8-1.4-13.1,13l-2.4,46.2s-1.5,10.7,9.8,11.9l219,10.9s9.3-.1,9.8-10.9l2.4-45.9s1.7-13.8-13.2-14.6Z"/>
                <polygon class="cls-4" points="986.08 1082.45 984.58 1114.85 997.48 1115.45 999.08 1083.15 986.08 1082.45"/>
                <polygon class="cls-4" points="999.08 1083.15 997.48 1115.45 1010.38 1116.15 1011.98 1083.75 999.08 1083.15"/>
                <polygon class="cls-4" points="1012.08 1083.75 1010.48 1116.15 1023.38 1116.75 1024.97 1084.45 1012.08 1083.75"/>
                <polygon class="cls-4" points="1024.97 1084.45 1023.38 1116.75 1036.28 1117.45 1037.97 1085.05 1024.97 1084.45"/>
                <polygon class="cls-4" points="1037.88 1085.05 1036.28 1117.45 1049.28 1118.05 1050.88 1085.75 1037.88 1085.05"/>
                <polygon class="cls-4" points="1050.88 1085.75 1049.28 1118.05 1062.17 1118.75 1063.88 1086.35 1050.88 1085.75"/>
                <polygon class="cls-4" points="1063.88 1086.35 1062.28 1118.75 1075.17 1119.35 1076.78 1087.05 1063.88 1086.35"/>
                <polygon class="cls-4" points="1076.78 1087.05 1075.17 1119.35 1088.08 1120.05 1089.78 1087.65 1076.78 1087.05"/>
                <polygon class="cls-4" points="1102.67 1088.35 1101.08 1120.65 1113.97 1121.35 1115.67 1088.95 1102.67 1088.35"/>
                <polygon class="cls-4" points="1089.67 1087.65 1088.08 1120.05 1101.08 1120.65 1102.67 1088.35 1089.67 1087.65"/>
                <polygon class="cls-4" points="1115.58 1088.95 1113.97 1121.35 1126.97 1121.95 1128.58 1089.65 1115.58 1088.95"/>
                <polygon class="cls-4" points="1128.58 1089.65 1126.97 1121.95 1139.88 1122.65 1141.58 1090.25 1128.58 1089.65"/>
                <polygon class="cls-4" points="1141.58 1090.25 1139.97 1122.65 1152.88 1123.25 1154.47 1090.95 1141.58 1090.25"/>
                <polygon class="cls-4" points="984.48 1114.85 982.88 1147.25 995.77 1147.85 997.48 1115.55 984.48 1114.85"/>
                <polygon class="cls-4" points="997.38 1115.55 995.77 1147.85 1008.77 1148.55 1010.38 1116.15 997.38 1115.55"/>
                <polygon class="cls-4" points="1010.38 1116.15 1008.77 1148.55 1021.67 1149.15 1023.38 1116.75 1010.38 1116.15"/>
                <polygon class="cls-4" points="1023.38 1116.75 1021.77 1149.15 1034.67 1149.85 1036.28 1117.45 1023.38 1116.75"/>
                <polygon class="cls-4" points="1036.28 1117.45 1034.67 1149.85 1047.58 1150.45 1049.17 1118.05 1036.28 1117.45"/>
                <polygon class="cls-4" points="1049.28 1118.05 1047.67 1150.45 1060.58 1151.15 1062.17 1118.75 1049.28 1118.05"/>
                <polygon class="cls-4" points="1062.17 1118.75 1060.58 1151.15 1073.47 1151.75 1075.17 1119.35 1062.17 1118.75"/>
                <polygon class="cls-4" points="1075.17 1119.35 1073.58 1151.75 1086.47 1152.45 1088.08 1120.05 1075.17 1119.35"/>
                <polygon class="cls-4" points="1101.08 1120.65 1099.47 1153.05 1112.38 1153.75 1113.97 1121.35 1101.08 1120.65"/>
                <polygon class="cls-4" points="1088.08 1120.05 1086.47 1152.45 1099.38 1153.05 1100.97 1120.65 1088.08 1120.05"/>
                <polygon class="cls-4" points="1113.97 1121.35 1112.38 1153.75 1125.28 1154.35 1126.88 1121.95 1113.97 1121.35"/>
                <polygon class="cls-4" points="1126.97 1121.95 1125.38 1154.35 1138.28 1155.05 1139.88 1122.65 1126.97 1121.95"/>
                <polygon class="cls-4" points="1139.88 1122.65 1138.28 1155.05 1151.28 1155.65 1152.88 1123.25 1139.88 1122.65"/>
                <path class="cls-4" d="M986.08,1082.45l-22.7-1.1s-8.5-.8-10.4,9.2l-.1,6.6,32.4,1.6Z"/>
                <polygon class="cls-4" points="952.88 1097.15 952.17 1113.25 984.48 1114.85 985.27 1098.75 952.88 1097.15"/>
                <polygon class="cls-4" points="984.48 1114.85 983.67 1131.05 951.27 1129.45 952.17 1113.25 984.48 1114.85"/>
                <path class="cls-4" d="M982.88,1147.25l-23.1-1.2-2.1-.1s-6.7-.6-6.9-7.6l.4-8.9,32.4,1.6Z"/>
                <path class="cls-4" d="M1154.48,1090.95l20.8,1.1s12.4,1.1,10.8,16.2v.5l-32.4-1.6Z"/>
                <polygon class="cls-4" points="1153.67 1107.05 1152.88 1123.25 1185.28 1124.95 1186.08 1108.75 1153.67 1107.05"/>
                <polygon class="cls-4" points="1152.88 1123.25 1152.08 1139.55 1184.38 1141.05 1185.28 1124.95 1152.88 1123.25"/>
                <path class="cls-4" d="M1152.08,1139.55l-.8,16.1,25.2,1.2s6.9-.1,7.5-7.2l.4-8.6Z"/>
                <g id="TEXT-901" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 1046.71, 1123.73)">MZ-95</text>
                </g>
                <g id="TEXT-902" data-name="TEXT">
                    <text class="cls-6" transform="translate(965.73 1143.12)">1</text>
                </g>
                <g id="TEXT-903" data-name="TEXT">
                    <text class="cls-6" transform="translate(966.27 1126.52)">2</text>
                </g>
                <g id="TEXT-904" data-name="TEXT">
                    <text class="cls-6" transform="translate(966.99 1111)">3</text>
                </g>
                <g id="TEXT-905" data-name="TEXT">
                    <text class="cls-6" transform="translate(967.73 1096.3)">4</text>
                </g>
                <g id="TEXT-906" data-name="TEXT">
                    <text class="cls-6" transform="translate(990.25 1104.14)">5</text>
                </g>
                <g id="TEXT-907" data-name="TEXT">
                    <text class="cls-6" transform="translate(1003.1 1104.71)">6</text>
                </g>
                <g id="TEXT-908" data-name="TEXT">
                    <text class="cls-6" transform="translate(1016.11 1105.26)">7</text>
                </g>
                <g id="TEXT-909" data-name="TEXT">
                    <text class="cls-6" transform="translate(1029.25 1106.17)">8</text>
                </g>
                <g id="TEXT-910" data-name="TEXT">
                    <text class="cls-6" transform="translate(1041.86 1106.9)">9</text>
                </g>
                <g id="TEXT-911" data-name="TEXT">
                    <text class="cls-6" transform="translate(1054.48 1107.05)">10</text>
                </g>
                <g id="TEXT-912" data-name="TEXT">
                    <text class="cls-6" transform="translate(1067.18 1107.67)">
                        <tspan class="cls-7">1</tspan>
                        <tspan x="2.41" y="0">1</tspan>
                    </text>
                </g>
                <g id="TEXT-913" data-name="TEXT">
                    <text class="cls-6" transform="translate(1080.11 1108.27)">12</text>
                </g>
                <g id="TEXT-914" data-name="TEXT">
                    <text class="cls-6" transform="translate(1093.11 1109.1)">13</text>
                </g>
                <g id="TEXT-915" data-name="TEXT">
                    <text class="cls-6" transform="translate(1105.83 1109.7)">14</text>
                </g>
                <g id="TEXT-916" data-name="TEXT">
                    <text class="cls-6" transform="translate(1118.33 1110.26)">15</text>
                </g>
                <g id="TEXT-917" data-name="TEXT">
                    <text class="cls-6" transform="translate(1132.12 1110.89)">16</text>
                </g>
                <g id="TEXT-918" data-name="TEXT">
                    <text class="cls-6" transform="translate(1144.77 1111.88)">17</text>
                </g>
                <g id="TEXT-919" data-name="TEXT">
                    <text class="cls-6" transform="translate(1166.09 1104.75)">18</text>
                </g>
                <g id="TEXT-920" data-name="TEXT">
                    <text class="cls-6" transform="translate(1166 1120.06)">19</text>
                </g>
                <g id="TEXT-921" data-name="TEXT">
                    <text class="cls-6" transform="translate(1165.27 1137.01)">20</text>
                </g>
                <g id="TEXT-922" data-name="TEXT">
                    <text class="cls-6" transform="translate(1165.08 1152.55)">21</text>
                </g>
                <g id="TEXT-923" data-name="TEXT">
                    <text class="cls-6" transform="translate(1142.99 1144.07)">22</text>
                </g>
                <g id="TEXT-924" data-name="TEXT">
                    <text class="cls-6" transform="translate(1129.47 1143.3)">23</text>
                </g>
                <g id="TEXT-925" data-name="TEXT">
                    <text class="cls-6" transform="translate(1117.06 1142.9)">24</text>
                </g>
                <g id="TEXT-926" data-name="TEXT">
                    <text class="cls-6" transform="translate(1104.31 1141.6)">25</text>
                </g>
                <g id="TEXT-927" data-name="TEXT">
                    <text class="cls-6" transform="translate(1091.4 1141.49)">26</text>
                </g>
                <g id="TEXT-928" data-name="TEXT">
                    <text class="cls-6" transform="translate(1078.11 1140.9)">27</text>
                </g>
                <g id="TEXT-929" data-name="TEXT">
                    <text class="cls-6" transform="translate(1065.16 1140.2)">28</text>
                </g>
                <g id="TEXT-930" data-name="TEXT">
                    <text class="cls-6" transform="translate(1052.21 1139.59)">29</text>
                </g>
                <g id="TEXT-931" data-name="TEXT">
                    <text class="cls-6" transform="translate(1039.26 1138.97)">30</text>
                </g>
                <g id="TEXT-932" data-name="TEXT">
                    <text class="cls-6" transform="translate(1026.3 1138.35)">31</text>
                </g>
                <g id="TEXT-933" data-name="TEXT">
                    <text class="cls-6" transform="translate(1013.35 1137.74)">32</text>
                </g>
                <g id="TEXT-934" data-name="TEXT">
                    <text class="cls-6" transform="translate(1000.4 1137.12)">33</text>
                </g>
                <g id="TEXT-935" data-name="TEXT">
                    <text class="cls-6" transform="translate(987.45 1136.5)">34</text>
                </g>
            </g>
            <g id="MZ-94">
                <path class="cls-3" d="M983.08,1001.25l-15.3-1s-11.8-1.4-13.1,13l-2.4,46.2s-1.5,10.7,9.8,11.9l219,10.9s9.3-.1,9.8-10.9l2.4-45.9s1.7-13.8-13.2-14.6Z"/>
                <polygon class="cls-4" points="990.27 1005.15 988.67 1037.45 1001.58 1038.15 1003.17 1005.75 990.27 1005.15"/>
                <polygon class="cls-4" points="1003.17 1005.75 1001.58 1038.15 1014.48 1038.75 1016.17 1006.35 1003.17 1005.75"/>
                <polygon class="cls-4" points="1016.17 1006.35 1014.58 1038.75 1027.47 1039.45 1029.08 1007.05 1016.17 1006.35"/>
                <polygon class="cls-4" points="1029.08 1007.05 1027.47 1039.45 1040.47 1040.05 1042.08 1007.65 1029.08 1007.05"/>
                <polygon class="cls-4" points="1042.08 1007.65 1040.47 1040.05 1053.38 1040.75 1054.97 1008.35 1042.08 1007.65"/>
                <polygon class="cls-4" points="1054.97 1008.35 1053.38 1040.75 1066.38 1041.35 1067.97 1008.95 1054.97 1008.35"/>
                <polygon class="cls-4" points="1067.97 1008.95 1066.38 1041.35 1079.28 1042.05 1080.88 1009.65 1067.97 1008.95"/>
                <polygon class="cls-4" points="1080.88 1009.65 1079.28 1042.05 1092.28 1042.65 1093.88 1010.25 1080.88 1009.65"/>
                <polygon class="cls-4" points="1106.78 1010.95 1105.28 1043.35 1118.17 1043.95 1119.78 1011.55 1106.78 1010.95"/>
                <polygon class="cls-4" points="1093.88 1010.25 1092.28 1042.65 1105.17 1043.35 1106.78 1010.95 1093.88 1010.25"/>
                <polygon class="cls-4" points="1119.78 1011.55 1118.17 1043.95 1131.08 1044.65 1132.67 1012.25 1119.78 1011.55"/>
                <polygon class="cls-4" points="1132.78 1012.25 1131.17 1044.65 1144.08 1045.25 1145.67 1012.85 1132.78 1012.25"/>
                <polygon class="cls-4" points="1145.67 1012.85 1144.08 1045.25 1156.97 1045.95 1158.67 1013.55 1145.67 1012.85"/>
                <polygon class="cls-4" points="988.58 1037.45 986.98 1069.85 999.98 1070.55 1001.58 1038.15 988.58 1037.45"/>
                <polygon class="cls-4" points="1001.58 1038.15 999.98 1070.55 1012.88 1071.15 1014.48 1038.75 1001.58 1038.15"/>
                <polygon class="cls-4" points="1014.48 1038.75 1012.88 1071.15 1025.88 1071.85 1027.47 1039.45 1014.48 1038.75"/>
                <polygon class="cls-4" points="1027.47 1039.45 1025.88 1071.85 1038.78 1072.45 1040.38 1040.05 1027.47 1039.45"/>
                <polygon class="cls-4" points="1040.38 1040.05 1038.78 1072.45 1051.67 1073.15 1053.38 1040.75 1040.38 1040.05"/>
                <polygon class="cls-4" points="1053.38 1040.75 1051.78 1073.15 1064.67 1073.75 1066.28 1041.35 1053.38 1040.75"/>
                <polygon class="cls-4" points="1066.28 1041.35 1064.67 1073.75 1077.67 1074.35 1079.28 1042.05 1066.28 1041.35"/>
                <polygon class="cls-4" points="1079.28 1042.05 1077.67 1074.45 1090.58 1075.05 1092.17 1042.65 1079.28 1042.05"/>
                <polygon class="cls-4" points="1105.17 1043.35 1103.58 1075.65 1116.47 1076.35 1118.08 1043.95 1105.17 1043.35"/>
                <polygon class="cls-4" points="1092.17 1042.65 1090.58 1075.05 1103.47 1075.65 1105.17 1043.35 1092.17 1042.65"/>
                <polygon class="cls-4" points="1118.08 1043.95 1116.47 1076.35 1129.47 1076.95 1131.08 1044.65 1118.08 1043.95"/>
                <polygon class="cls-4" points="1131.08 1044.65 1129.47 1076.95 1142.38 1077.65 1144.08 1045.25 1131.08 1044.65"/>
                <polygon class="cls-4" points="1144.08 1045.25 1142.47 1077.65 1155.38 1078.25 1156.97 1045.95 1144.08 1045.25"/>
                <path class="cls-4" d="M990.28,1005.15l-22.7-1.1s-8.5-.8-10.4,9.2l-.1,6.6,32.4,1.6Z"/>
                <polygon class="cls-4" points="957.08 1019.75 956.27 1035.85 988.58 1037.45 989.38 1021.35 957.08 1019.75"/>
                <polygon class="cls-4" points="988.58 1037.45 987.77 1053.65 955.48 1052.05 956.27 1035.85 988.58 1037.45"/>
                <path class="cls-4" d="M987,1069.85l-23.1-1.2-2.1-.1s-6.7-.6-6.9-7.6l.4-8.9,32.4,1.6Z"/>
                <path class="cls-4" d="M1158.68,1013.55l20.8,1.1s12.4,1.1,10.8,16.2v.5l-32.4-1.6Z"/>
                <polygon class="cls-4" points="1157.78 1029.75 1156.97 1045.95 1189.38 1047.55 1190.17 1031.35 1157.78 1029.75"/>
                <polygon class="cls-4" points="1156.97 1045.95 1156.17 1062.25 1188.58 1063.75 1189.38 1047.55 1156.97 1045.95"/>
                <path class="cls-4" d="M1156.18,1062.25l-.8,16.1,25.2,1.2s6.9-.1,7.5-7.2l.4-8.6Z"/>
                <g id="TEXT-936" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 1056.18, 1051.06)">MZ-94</text>
                </g>
                <g id="TEXT-937" data-name="TEXT">
                    <text class="cls-6" transform="translate(969.63 1065.42)">1</text>
                </g>
                <g id="TEXT-938" data-name="TEXT">
                    <text class="cls-6" transform="translate(970.16 1048.81)">2</text>
                </g>
                <g id="TEXT-939" data-name="TEXT">
                    <text class="cls-6" transform="translate(970.89 1033.29)">3</text>
                </g>
                <g id="TEXT-940" data-name="TEXT">
                    <text class="cls-6" transform="translate(971.62 1018.6)">4</text>
                </g>
                <g id="TEXT-941" data-name="TEXT">
                    <text class="cls-6" transform="translate(994.14 1026.44)">5</text>
                </g>
                <g id="TEXT-942" data-name="TEXT">
                    <text class="cls-6" transform="translate(1007 1027.01)">6</text>
                </g>
                <g id="TEXT-943" data-name="TEXT">
                    <text class="cls-6" transform="translate(1020 1027.56)">7</text>
                </g>
                <g id="TEXT-944" data-name="TEXT">
                    <text class="cls-6" transform="translate(1033.14 1028.47)">8</text>
                </g>
                <g id="TEXT-945" data-name="TEXT">
                    <text class="cls-6" transform="translate(1045.75 1029.2)">9</text>
                </g>
                <g id="TEXT-946" data-name="TEXT">
                    <text class="cls-6" transform="translate(1058.37 1029.35)">10</text>
                </g>
                <g id="TEXT-947" data-name="TEXT">
                    <text class="cls-6" transform="translate(1071.07 1029.96)">
                        <tspan class="cls-7">1</tspan>
                        <tspan x="2.41" y="0">1</tspan>
                    </text>
                </g>
                <g id="TEXT-948" data-name="TEXT">
                    <text class="cls-6" transform="translate(1084.01 1030.57)">12</text>
                </g>
                <g id="TEXT-949" data-name="TEXT">
                    <text class="cls-6" transform="translate(1097 1031.4)">13</text>
                </g>
                <g id="TEXT-950" data-name="TEXT">
                    <text class="cls-6" transform="translate(1109.73 1032)">14</text>
                </g>
                <g id="TEXT-951" data-name="TEXT">
                    <text class="cls-6" transform="translate(1122.23 1032.56)">15</text>
                </g>
                <g id="TEXT-952" data-name="TEXT">
                    <text class="cls-6" transform="translate(1136.01 1033.19)">16</text>
                </g>
                <g id="TEXT-953" data-name="TEXT">
                    <text class="cls-6" transform="translate(1148.66 1034.18)">17</text>
                </g>
                <g id="TEXT-954" data-name="TEXT">
                    <text class="cls-6" transform="translate(1169.99 1027.05)">18</text>
                </g>
                <g id="TEXT-955" data-name="TEXT">
                    <text class="cls-6" transform="translate(1169.89 1042.36)">19</text>
                </g>
                <g id="TEXT-956" data-name="TEXT">
                    <text class="cls-6" transform="translate(1169.16 1059.3)">20</text>
                </g>
                <g id="TEXT-957" data-name="TEXT">
                    <text class="cls-6" transform="translate(1168.97 1074.85)">21</text>
                </g>
                <g id="TEXT-958" data-name="TEXT">
                    <text class="cls-6" transform="translate(1146.88 1066.37)">22</text>
                </g>
                <g id="TEXT-959" data-name="TEXT">
                    <text class="cls-6" transform="translate(1133.36 1065.6)">23</text>
                </g>
                <g id="TEXT-960" data-name="TEXT">
                    <text class="cls-6" transform="translate(1120.96 1065.2)">24</text>
                </g>
                <g id="TEXT-961" data-name="TEXT">
                    <text class="cls-6" transform="translate(1108.21 1063.9)">25</text>
                </g>
                <g id="TEXT-962" data-name="TEXT">
                    <text class="cls-6" transform="translate(1095.3 1063.79)">26</text>
                </g>
                <g id="TEXT-963" data-name="TEXT">
                    <text class="cls-6" transform="translate(1082 1063.2)">27</text>
                </g>
                <g id="TEXT-964" data-name="TEXT">
                    <text class="cls-6" transform="translate(1069.05 1062.5)">28</text>
                </g>
                <g id="TEXT-965" data-name="TEXT">
                    <text class="cls-6" transform="translate(1056.1 1061.88)">29</text>
                </g>
                <g id="TEXT-966" data-name="TEXT">
                    <text class="cls-6" transform="translate(1043.15 1061.27)">30</text>
                </g>
                <g id="TEXT-967" data-name="TEXT">
                    <text class="cls-6" transform="translate(1030.2 1060.65)">31</text>
                </g>
                <g id="TEXT-968" data-name="TEXT">
                    <text class="cls-6" transform="translate(1017.24 1060.04)">32</text>
                </g>
                <g id="TEXT-969" data-name="TEXT">
                    <text class="cls-6" transform="translate(1004.29 1059.42)">33</text>
                </g>
                <g id="TEXT-970" data-name="TEXT">
                    <text class="cls-6" transform="translate(991.34 1058.8)">34</text>
                </g>
            </g>
            <g id="MZ-94-2" data-name="MZ-94">
                <path class="cls-3" d="M986.52,922.75l-15.3-1s-11.8-1.4-13.1,13l-2.4,46.2s-1.5,10.7,9.8,11.9l219,10.9s9.3-.1,9.8-10.9l2.4-45.9s1.7-13.8-13.2-14.6Z"/>
                <polygon class="cls-4" points="993.72 926.65 992.12 958.95 1005.02 959.65 1006.62 927.25 993.72 926.65"/>
                <polygon class="cls-4" points="1006.62 927.25 1005.02 959.65 1017.92 960.25 1019.62 927.85 1006.62 927.25"/>
                <polygon class="cls-4" points="1019.62 927.85 1018.02 960.25 1030.92 960.95 1032.52 928.55 1019.62 927.85"/>
                <polygon class="cls-4" points="1032.52 928.55 1030.92 960.95 1043.92 961.55 1045.52 929.15 1032.52 928.55"/>
                <polygon class="cls-4" points="1045.52 929.15 1043.92 961.55 1056.82 962.25 1058.42 929.85 1045.52 929.15"/>
                <polygon class="cls-4" points="1058.42 929.85 1056.82 962.25 1069.82 962.85 1071.42 930.45 1058.42 929.85"/>
                <polygon class="cls-4" points="1071.42 930.45 1069.82 962.85 1082.72 963.55 1084.32 931.15 1071.42 930.45"/>
                <polygon class="cls-4" points="1084.32 931.15 1082.72 963.55 1095.72 964.15 1097.32 931.75 1084.32 931.15"/>
                <polygon class="cls-4" points="1110.22 932.45 1108.72 964.85 1121.62 965.45 1123.22 933.05 1110.22 932.45"/>
                <polygon class="cls-4" points="1097.32 931.75 1095.72 964.15 1108.62 964.85 1110.22 932.45 1097.32 931.75"/>
                <polygon class="cls-4" points="1123.22 933.05 1121.62 965.45 1134.52 966.15 1136.12 933.75 1123.22 933.05"/>
                <polygon class="cls-4" points="1136.22 933.75 1134.62 966.15 1147.52 966.75 1149.12 934.35 1136.22 933.75"/>
                <polygon class="cls-4" points="1149.12 934.35 1147.52 966.75 1160.42 967.45 1162.12 935.05 1149.12 934.35"/>
                <polygon class="cls-4" points="992.02 958.95 990.42 991.35 1003.42 992.05 1005.02 959.65 992.02 958.95"/>
                <polygon class="cls-4" points="1005.02 959.65 1003.42 992.05 1016.32 992.65 1017.92 960.25 1005.02 959.65"/>
                <polygon class="cls-4" points="1017.92 960.25 1016.32 992.65 1029.32 993.35 1030.92 960.95 1017.92 960.25"/>
                <polygon class="cls-4" points="1030.92 960.95 1029.32 993.35 1042.22 993.95 1043.82 961.55 1030.92 960.95"/>
                <polygon class="cls-4" points="1043.82 961.55 1042.22 993.95 1055.12 994.65 1056.82 962.25 1043.82 961.55"/>
                <polygon class="cls-4" points="1056.82 962.25 1055.22 994.65 1068.12 995.25 1069.72 962.85 1056.82 962.25"/>
                <polygon class="cls-4" points="1069.72 962.85 1068.12 995.25 1081.12 995.85 1082.72 963.55 1069.72 962.85"/>
                <polygon class="cls-4" points="1082.72 963.55 1081.12 995.95 1094.02 996.55 1095.62 964.15 1082.72 963.55"/>
                <polygon class="cls-4" points="1108.62 964.85 1107.02 997.15 1119.92 997.85 1121.52 965.45 1108.62 964.85"/>
                <polygon class="cls-4" points="1095.62 964.15 1094.02 996.55 1106.92 997.15 1108.62 964.85 1095.62 964.15"/>
                <polygon class="cls-4" points="1121.52 965.45 1119.92 997.85 1132.92 998.45 1134.52 966.15 1121.52 965.45"/>
                <polygon class="cls-4" points="1134.52 966.15 1132.92 998.45 1145.82 999.15 1147.52 966.75 1134.52 966.15"/>
                <polygon class="cls-4" points="1147.52 966.75 1145.92 999.15 1158.82 999.75 1160.42 967.45 1147.52 966.75"/>
                <path class="cls-4" d="M993.72,926.65l-22.7-1.1s-8.5-.8-10.4,9.2l-.1,6.6,32.4,1.6Z"/>
                <polygon class="cls-4" points="960.52 941.25 959.72 957.35 992.02 958.95 992.82 942.85 960.52 941.25"/>
                <polygon class="cls-4" points="992.02 958.95 991.22 975.15 958.92 973.55 959.72 957.35 992.02 958.95"/>
                <path class="cls-4" d="M990.42,991.35l-23.1-1.2-2.1-.1s-6.7-.6-6.9-7.6l.4-8.9,32.4,1.6Z"/>
                <path class="cls-4" d="M1162.12,935l20.8,1.1s12.4,1.1,10.8,16.2v.5l-32.4-1.6Z"/>
                <polygon class="cls-4" points="1161.22 951.25 1160.42 967.45 1192.82 969.05 1193.62 952.85 1161.22 951.25"/>
                <polygon class="cls-4" points="1160.42 967.45 1159.62 983.75 1192.02 985.25 1192.82 969.05 1160.42 967.45"/>
                <path class="cls-4" d="M1159.62,983.75l-.8,16.1,25.2,1.2s6.9-.1,7.5-7.2l.4-8.6Z"/>
                <g id="TEXT-971" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 1059.62, 972.56)">MZ-93</text>
                </g>
                <g id="TEXT-972" data-name="TEXT">
                    <text class="cls-6" transform="translate(973.07 986.92)">1</text>
                </g>
                <g id="TEXT-973" data-name="TEXT">
                    <text class="cls-6" transform="translate(973.61 970.31)">2</text>
                </g>
                <g id="TEXT-974" data-name="TEXT">
                    <text class="cls-6" transform="translate(974.34 954.79)">3</text>
                </g>
                <g id="TEXT-975" data-name="TEXT">
                    <text class="cls-6" transform="translate(975.07 940.1)">4</text>
                </g>
                <g id="TEXT-976" data-name="TEXT">
                    <text class="cls-6" transform="translate(997.59 947.94)">5</text>
                </g>
                <g id="TEXT-977" data-name="TEXT">
                    <text class="cls-6" transform="translate(1010.44 948.51)">6</text>
                </g>
                <g id="TEXT-978" data-name="TEXT">
                    <text class="cls-6" transform="translate(1023.45 949.06)">7</text>
                </g>
                <g id="TEXT-979" data-name="TEXT">
                    <text class="cls-6" transform="translate(1036.59 949.97)">8</text>
                </g>
                <g id="TEXT-980" data-name="TEXT">
                    <text class="cls-6" transform="translate(1049.2 950.7)">9</text>
                </g>
                <g id="TEXT-981" data-name="TEXT">
                    <text class="cls-6" transform="translate(1061.82 950.85)">10</text>
                </g>
                <g id="TEXT-982" data-name="TEXT">
                    <text class="cls-6" transform="translate(1074.52 951.46)">
                        <tspan class="cls-7">1</tspan>
                        <tspan x="2.41" y="0">1</tspan>
                    </text>
                </g>
                <g id="TEXT-983" data-name="TEXT">
                    <text class="cls-6" transform="translate(1087.45 952.07)">12</text>
                </g>
                <g id="TEXT-984" data-name="TEXT">
                    <text class="cls-6" transform="translate(1100.45 952.9)">13</text>
                </g>
                <g id="TEXT-985" data-name="TEXT">
                    <text class="cls-6" transform="translate(1113.18 953.5)">14</text>
                </g>
                <g id="TEXT-986" data-name="TEXT">
                    <text class="cls-6" transform="translate(1125.68 954.06)">15</text>
                </g>
                <g id="TEXT-987" data-name="TEXT">
                    <text class="cls-6" transform="translate(1139.46 954.69)">16</text>
                </g>
                <g id="TEXT-988" data-name="TEXT">
                    <text class="cls-6" transform="translate(1152.11 955.68)">17</text>
                </g>
                <g id="TEXT-989" data-name="TEXT">
                    <text class="cls-6" transform="translate(1173.44 948.55)">18</text>
                </g>
                <g id="TEXT-990" data-name="TEXT">
                    <text class="cls-6" transform="translate(1173.34 963.86)">19</text>
                </g>
                <g id="TEXT-991" data-name="TEXT">
                    <text class="cls-6" transform="translate(1172.61 980.8)">20</text>
                </g>
                <g id="TEXT-992" data-name="TEXT">
                    <text class="cls-6" transform="translate(1172.42 996.35)">21</text>
                </g>
                <g id="TEXT-993" data-name="TEXT">
                    <text class="cls-6" transform="translate(1150.33 987.87)">22</text>
                </g>
                <g id="TEXT-994" data-name="TEXT">
                    <text class="cls-6" transform="translate(1136.81 987.1)">23</text>
                </g>
                <g id="TEXT-995" data-name="TEXT">
                    <text class="cls-6" transform="translate(1124.4 986.7)">24</text>
                </g>
                <g id="TEXT-996" data-name="TEXT">
                    <text class="cls-6" transform="translate(1111.65 985.4)">25</text>
                </g>
                <g id="TEXT-997" data-name="TEXT">
                    <text class="cls-6" transform="translate(1098.74 985.29)">26</text>
                </g>
                <g id="TEXT-998" data-name="TEXT">
                    <text class="cls-6" transform="translate(1085.45 984.7)">27</text>
                </g>
                <g id="TEXT-999" data-name="TEXT">
                    <text class="cls-6" transform="translate(1072.5 984)">28</text>
                </g>
                <g id="TEXT-1000" data-name="TEXT">
                    <text class="cls-6" transform="translate(1059.55 983.39)">29</text>
                </g>
                <g id="TEXT-1001" data-name="TEXT">
                    <text class="cls-6" transform="translate(1046.6 982.77)">30</text>
                </g>
                <g id="TEXT-1002" data-name="TEXT">
                    <text class="cls-6" transform="translate(1033.65 982.15)">31</text>
                </g>
                <g id="TEXT-1003" data-name="TEXT">
                    <text class="cls-6" transform="translate(1020.69 981.54)">32</text>
                </g>
                <g id="TEXT-1004" data-name="TEXT">
                    <text class="cls-6" transform="translate(1007.74 980.92)">33</text>
                </g>
                <g id="TEXT-1005" data-name="TEXT">
                    <text class="cls-6" transform="translate(994.79 980.3)">34</text>
                </g>
            </g>
            <g id="MZ-94-3" data-name="MZ-94">
                <path class="cls-3" d="M990.6,845.63l-15.3-1s-11.8-1.4-13.1,13l-2.4,46.2s-1.5,10.7,9.8,11.9l219,10.9s9.3-.1,9.8-10.9l2.4-45.9s1.7-13.8-13.2-14.6Z"/>
                <polygon class="cls-4" points="997.8 849.53 996.2 881.83 1009.1 882.53 1010.7 850.13 997.8 849.53"/>
                <polygon class="cls-4" points="1010.7 850.13 1009.1 882.53 1022 883.13 1023.7 850.73 1010.7 850.13"/>
                <polygon class="cls-4" points="1023.7 850.73 1022.1 883.13 1035 883.83 1036.6 851.43 1023.7 850.73"/>
                <polygon class="cls-4" points="1036.6 851.43 1035 883.83 1048 884.43 1049.6 852.03 1036.6 851.43"/>
                <polygon class="cls-4" points="1049.6 852.03 1048 884.43 1060.9 885.13 1062.5 852.73 1049.6 852.03"/>
                <polygon class="cls-4" points="1062.5 852.73 1060.9 885.13 1073.9 885.73 1075.5 853.33 1062.5 852.73"/>
                <polygon class="cls-4" points="1075.5 853.33 1073.9 885.73 1086.8 886.43 1088.4 854.03 1075.5 853.33"/>
                <polygon class="cls-4" points="1088.4 854.03 1086.8 886.43 1099.8 887.03 1101.4 854.63 1088.4 854.03"/>
                <polygon class="cls-4" points="1114.3 855.33 1112.8 887.73 1125.7 888.33 1127.3 855.93 1114.3 855.33"/>
                <polygon class="cls-4" points="1101.4 854.63 1099.8 887.03 1112.7 887.73 1114.3 855.33 1101.4 854.63"/>
                <polygon class="cls-4" points="1127.3 855.93 1125.7 888.33 1138.6 889.03 1140.2 856.63 1127.3 855.93"/>
                <polygon class="cls-4" points="1140.3 856.63 1138.7 889.03 1151.6 889.63 1153.2 857.23 1140.3 856.63"/>
                <polygon class="cls-4" points="1153.2 857.23 1151.6 889.63 1164.5 890.33 1166.2 857.93 1153.2 857.23"/>
                <polygon class="cls-4" points="996.1 881.83 994.5 914.23 1007.5 914.93 1009.1 882.53 996.1 881.83"/>
                <polygon class="cls-4" points="1009.1 882.53 1007.5 914.93 1020.4 915.53 1022 883.13 1009.1 882.53"/>
                <polygon class="cls-4" points="1022 883.13 1020.4 915.53 1033.4 916.23 1035 883.83 1022 883.13"/>
                <polygon class="cls-4" points="1035 883.83 1033.4 916.23 1046.3 916.83 1047.9 884.43 1035 883.83"/>
                <polygon class="cls-4" points="1047.9 884.43 1046.3 916.83 1059.2 917.53 1060.9 885.13 1047.9 884.43"/>
                <polygon class="cls-4" points="1060.9 885.13 1059.3 917.53 1072.2 918.13 1073.8 885.73 1060.9 885.13"/>
                <polygon class="cls-4" points="1073.8 885.73 1072.2 918.13 1085.2 918.73 1086.8 886.43 1073.8 885.73"/>
                <polygon class="cls-4" points="1086.8 886.43 1085.2 918.83 1098.1 919.43 1099.7 887.03 1086.8 886.43"/>
                <polygon class="cls-4" points="1112.7 887.73 1111.1 920.03 1124 920.73 1125.6 888.33 1112.7 887.73"/>
                <polygon class="cls-4" points="1099.7 887.03 1098.1 919.43 1111 920.03 1112.7 887.73 1099.7 887.03"/>
                <polygon class="cls-4" points="1125.6 888.33 1124 920.73 1137 921.33 1138.6 889.03 1125.6 888.33"/>
                <polygon class="cls-4" points="1138.6 889.03 1137 921.33 1149.9 922.03 1151.6 889.63 1138.6 889.03"/>
                <polygon class="cls-4" points="1151.6 889.63 1150 922.03 1162.9 922.63 1164.5 890.33 1151.6 889.63"/>
                <path class="cls-4" d="M997.8,849.53l-22.7-1.1s-8.5-.8-10.4,9.2l-.1,6.6,32.4,1.6Z"/>
                <polygon class="cls-4" points="964.6 864.13 963.8 880.23 996.1 881.83 996.9 865.73 964.6 864.13"/>
                <polygon class="cls-4" points="996.1 881.83 995.3 898.03 963 896.43 963.8 880.23 996.1 881.83"/>
                <path class="cls-4" d="M994.5,914.23,971.4,913l-2.1-.1s-6.7-.6-6.9-7.6l.4-8.9,32.4,1.6Z"/>
                <path class="cls-4" d="M1166.2,857.93,1187,859s12.4,1.1,10.8,16.2v.5l-32.4-1.6Z"/>
                <polygon class="cls-4" points="1165.3 874.13 1164.5 890.33 1196.9 891.93 1197.7 875.73 1165.3 874.13"/>
                <polygon class="cls-4" points="1164.5 890.33 1163.7 906.63 1196.1 908.13 1196.9 891.93 1164.5 890.33"/>
                <path class="cls-4" d="M1163.7,906.63l-.8,16.1,25.2,1.2s6.9-.1,7.5-7.2l.4-8.6Z"/>
                <g id="TEXT-1006" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 1063.7, 895.44)">MZ-92</text>
                </g>
                <g id="TEXT-1007" data-name="TEXT">
                    <text class="cls-6" transform="translate(977.15 909.8)">1</text>
                </g>
                <g id="TEXT-1008" data-name="TEXT">
                    <text class="cls-6" transform="translate(977.69 893.2)">2</text>
                </g>
                <g id="TEXT-1009" data-name="TEXT">
                    <text class="cls-6" transform="translate(978.41 877.68)">3</text>
                </g>
                <g id="TEXT-1010" data-name="TEXT">
                    <text class="cls-6" transform="translate(979.14 862.99)">4</text>
                </g>
                <g id="TEXT-1011" data-name="TEXT">
                    <text class="cls-6" transform="translate(1001.67 870.82)">5</text>
                </g>
                <g id="TEXT-1012" data-name="TEXT">
                    <text class="cls-6" transform="translate(1014.52 871.39)">6</text>
                </g>
                <g id="TEXT-1013" data-name="TEXT">
                    <text class="cls-6" transform="translate(1027.52 871.94)">7</text>
                </g>
                <g id="TEXT-1014" data-name="TEXT">
                    <text class="cls-6" transform="translate(1040.67 872.85)">8</text>
                </g>
                <g id="TEXT-1015" data-name="TEXT">
                    <text class="cls-6" transform="translate(1053.27 873.58)">9</text>
                </g>
                <g id="TEXT-1016" data-name="TEXT">
                    <text class="cls-6" transform="translate(1065.9 873.73)">10</text>
                </g>
                <g id="TEXT-1017" data-name="TEXT">
                    <text class="cls-6" transform="translate(1078.59 874.35)">
                        <tspan class="cls-7">1</tspan>
                        <tspan x="2.41" y="0">1</tspan>
                    </text>
                </g>
                <g id="TEXT-1018" data-name="TEXT">
                    <text class="cls-6" transform="translate(1091.53 874.95)">12</text>
                </g>
                <g id="TEXT-1019" data-name="TEXT">
                    <text class="cls-6" transform="translate(1104.52 875.78)">13</text>
                </g>
                <g id="TEXT-1020" data-name="TEXT">
                    <text class="cls-6" transform="translate(1117.25 876.38)">14</text>
                </g>
                <g id="TEXT-1021" data-name="TEXT">
                    <text class="cls-6" transform="translate(1129.75 876.94)">15</text>
                </g>
                <g id="TEXT-1022" data-name="TEXT">
                    <text class="cls-6" transform="translate(1143.54 877.57)">16</text>
                </g>
                <g id="TEXT-1023" data-name="TEXT">
                    <text class="cls-6" transform="translate(1156.19 878.56)">17</text>
                </g>
                <g id="TEXT-1024" data-name="TEXT">
                    <text class="cls-6" transform="translate(1177.51 871.43)">18</text>
                </g>
                <g id="TEXT-1025" data-name="TEXT">
                    <text class="cls-6" transform="translate(1177.42 886.74)">19</text>
                </g>
                <g id="TEXT-1026" data-name="TEXT">
                    <text class="cls-6" transform="translate(1176.69 903.69)">20</text>
                </g>
                <g id="TEXT-1027" data-name="TEXT">
                    <text class="cls-6" transform="translate(1176.5 919.23)">21</text>
                </g>
                <g id="TEXT-1028" data-name="TEXT">
                    <text class="cls-6" transform="translate(1154.41 910.75)">22</text>
                </g>
                <g id="TEXT-1029" data-name="TEXT">
                    <text class="cls-6" transform="translate(1140.89 909.98)">23</text>
                </g>
                <g id="TEXT-1030" data-name="TEXT">
                    <text class="cls-6" transform="translate(1128.48 909.58)">24</text>
                </g>
                <g id="TEXT-1031" data-name="TEXT">
                    <text class="cls-6" transform="translate(1115.73 908.28)">25</text>
                </g>
                <g id="TEXT-1032" data-name="TEXT">
                    <text class="cls-6" transform="translate(1102.82 908.17)">26</text>
                </g>
                <g id="TEXT-1033" data-name="TEXT">
                    <text class="cls-6" transform="translate(1089.52 907.58)">27</text>
                </g>
                <g id="TEXT-1034" data-name="TEXT">
                    <text class="cls-6" transform="translate(1076.58 906.88)">28</text>
                </g>
                <g id="TEXT-1035" data-name="TEXT">
                    <text class="cls-6" transform="translate(1063.62 906.27)">29</text>
                </g>
                <g id="TEXT-1036" data-name="TEXT">
                    <text class="cls-6" transform="translate(1050.67 905.65)">30</text>
                </g>
                <g id="TEXT-1037" data-name="TEXT">
                    <text class="cls-6" transform="translate(1037.72 905.03)">31</text>
                </g>
                <g id="TEXT-1038" data-name="TEXT">
                    <text class="cls-6" transform="translate(1024.77 904.42)">32</text>
                </g>
                <g id="TEXT-1039" data-name="TEXT">
                    <text class="cls-6" transform="translate(1011.82 903.8)">33</text>
                </g>
                <g id="TEXT-1040" data-name="TEXT">
                    <text class="cls-6" transform="translate(998.86 903.18)">34</text>
                </g>
            </g>
            <g id="MZ-94-4" data-name="MZ-94">
                <path class="cls-3" d="M994.63,762.21l-15.3-1s-11.8-1.4-13.1,13l-2.4,46.2s-1.5,10.7,9.8,11.9l219,10.9s9.3-.1,9.8-10.9l2.4-45.9s1.7-13.8-13.2-14.6Z"/>
                <polygon class="cls-4" points="1001.83 766.11 1000.23 798.41 1013.13 799.11 1014.73 766.71 1001.83 766.11"/>
                <polygon class="cls-4" points="1014.73 766.71 1013.13 799.11 1026.03 799.71 1027.73 767.31 1014.73 766.71"/>
                <polygon class="cls-4" points="1027.73 767.31 1026.13 799.71 1039.03 800.41 1040.63 768.01 1027.73 767.31"/>
                <polygon class="cls-4" points="1040.63 768.01 1039.03 800.41 1052.03 801.01 1053.63 768.61 1040.63 768.01"/>
                <polygon class="cls-4" points="1053.63 768.61 1052.03 801.01 1064.93 801.71 1066.53 769.31 1053.63 768.61"/>
                <polygon class="cls-4" points="1066.53 769.31 1064.93 801.71 1077.93 802.31 1079.53 769.91 1066.53 769.31"/>
                <polygon class="cls-4" points="1079.53 769.91 1077.93 802.31 1090.83 803.01 1092.43 770.61 1079.53 769.91"/>
                <polygon class="cls-4" points="1092.43 770.61 1090.83 803.01 1103.83 803.61 1105.43 771.21 1092.43 770.61"/>
                <polygon class="cls-4" points="1118.33 771.91 1116.83 804.31 1129.73 804.91 1131.33 772.51 1118.33 771.91"/>
                <polygon class="cls-4" points="1105.43 771.21 1103.83 803.61 1116.73 804.31 1118.33 771.91 1105.43 771.21"/>
                <polygon class="cls-4" points="1131.33 772.51 1129.73 804.91 1142.63 805.61 1144.23 773.21 1131.33 772.51"/>
                <polygon class="cls-4" points="1144.33 773.21 1142.73 805.61 1155.63 806.21 1157.23 773.81 1144.33 773.21"/>
                <polygon class="cls-4" points="1157.23 773.81 1155.63 806.21 1168.53 806.91 1170.23 774.51 1157.23 773.81"/>
                <polygon class="cls-4" points="1000.13 798.41 998.53 830.81 1011.53 831.51 1013.13 799.11 1000.13 798.41"/>
                <polygon class="cls-4" points="1013.13 799.11 1011.53 831.51 1024.43 832.11 1026.03 799.71 1013.13 799.11"/>
                <polygon class="cls-4" points="1026.03 799.71 1024.43 832.11 1037.43 832.81 1039.03 800.41 1026.03 799.71"/>
                <polygon class="cls-4" points="1039.03 800.41 1037.43 832.81 1050.33 833.41 1051.93 801.01 1039.03 800.41"/>
                <polygon class="cls-4" points="1051.93 801.01 1050.33 833.41 1063.23 834.11 1064.93 801.71 1051.93 801.01"/>
                <polygon class="cls-4" points="1064.93 801.71 1063.33 834.11 1076.23 834.71 1077.83 802.31 1064.93 801.71"/>
                <polygon class="cls-4" points="1077.83 802.31 1076.23 834.71 1089.23 835.31 1090.83 803.01 1077.83 802.31"/>
                <polygon class="cls-4" points="1090.83 803.01 1089.23 835.41 1102.13 836.01 1103.73 803.61 1090.83 803.01"/>
                <polygon class="cls-4" points="1116.73 804.31 1115.13 836.61 1128.03 837.31 1129.63 804.91 1116.73 804.31"/>
                <polygon class="cls-4" points="1103.73 803.61 1102.13 836.01 1115.03 836.61 1116.73 804.31 1103.73 803.61"/>
                <polygon class="cls-4" points="1129.63 804.91 1128.03 837.31 1141.03 837.91 1142.63 805.61 1129.63 804.91"/>
                <polygon class="cls-4" points="1142.63 805.61 1141.03 837.91 1153.93 838.61 1155.63 806.21 1142.63 805.61"/>
                <polygon class="cls-4" points="1155.63 806.21 1154.03 838.61 1166.93 839.21 1168.53 806.91 1155.63 806.21"/>
                <path class="cls-4" d="M1001.83,766.11l-22.7-1.1s-8.5-.8-10.4,9.2l-.1,6.6,32.4,1.6Z"/>
                <polygon class="cls-4" points="968.63 780.71 967.83 796.81 1000.13 798.41 1000.93 782.31 968.63 780.71"/>
                <polygon class="cls-4" points="1000.13 798.41 999.33 814.61 967.03 813.01 967.83 796.81 1000.13 798.41"/>
                <path class="cls-4" d="M998.53,830.81l-23.1-1.2-2.1-.1s-6.7-.6-6.9-7.6l.4-8.9,32.4,1.6Z"/>
                <path class="cls-4" d="M1170.23,774.51l20.8,1.1s12.4,1.1,10.8,16.2v.5l-32.4-1.6Z"/>
                <polygon class="cls-4" points="1169.33 790.71 1168.53 806.91 1200.93 808.51 1201.73 792.31 1169.33 790.71"/>
                <polygon class="cls-4" points="1168.53 806.91 1167.73 823.21 1200.13 824.71 1200.93 808.51 1168.53 806.91"/>
                <path class="cls-4" d="M1167.73,823.21l-.8,16.1,25.2,1.2s6.9-.1,7.5-7.2l.4-8.6Z"/>
                <g id="TEXT-1041" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 1067.73, 812.02)">MZ-91</text>
                </g>
                <g id="TEXT-1042" data-name="TEXT">
                    <text class="cls-6" transform="translate(981.18 826.38)">1</text>
                </g>
                <g id="TEXT-1043" data-name="TEXT">
                    <text class="cls-6" transform="translate(981.72 809.77)">2</text>
                </g>
                <g id="TEXT-1044" data-name="TEXT">
                    <text class="cls-6" transform="translate(982.44 794.25)">3</text>
                </g>
                <g id="TEXT-1045" data-name="TEXT">
                    <text class="cls-6" transform="translate(983.17 779.56)">4</text>
                </g>
                <g id="TEXT-1046" data-name="TEXT">
                    <text class="cls-6" transform="translate(1005.69 787.4)">5</text>
                </g>
                <g id="TEXT-1047" data-name="TEXT">
                    <text class="cls-6" transform="translate(1018.55 787.97)">6</text>
                </g>
                <g id="TEXT-1048" data-name="TEXT">
                    <text class="cls-6" transform="translate(1031.55 788.52)">7</text>
                </g>
                <g id="TEXT-1049" data-name="TEXT">
                    <text class="cls-6" transform="translate(1044.7 789.43)">8</text>
                </g>
                <g id="TEXT-1050" data-name="TEXT">
                    <text class="cls-6" transform="translate(1057.3 790.16)">9</text>
                </g>
                <g id="TEXT-1051" data-name="TEXT">
                    <text class="cls-6" transform="translate(1069.92 790.3)">10</text>
                </g>
                <g id="TEXT-1052" data-name="TEXT">
                    <text class="cls-6" transform="translate(1082.62 790.92)">
                        <tspan class="cls-7">1</tspan>
                        <tspan x="2.41" y="0">1</tspan>
                    </text>
                </g>
                <g id="TEXT-1053" data-name="TEXT">
                    <text class="cls-6" transform="translate(1095.56 791.53)">12</text>
                </g>
                <g id="TEXT-1054" data-name="TEXT">
                    <text class="cls-6" transform="translate(1108.55 792.36)">13</text>
                </g>
                <g id="TEXT-1055" data-name="TEXT">
                    <text class="cls-6" transform="translate(1121.28 792.96)">14</text>
                </g>
                <g id="TEXT-1056" data-name="TEXT">
                    <text class="cls-6" transform="translate(1133.78 793.52)">15</text>
                </g>
                <g id="TEXT-1057" data-name="TEXT">
                    <text class="cls-6" transform="translate(1147.56 794.15)">16</text>
                </g>
                <g id="TEXT-1058" data-name="TEXT">
                    <text class="cls-6" transform="translate(1160.22 795.14)">17</text>
                </g>
                <g id="TEXT-1059" data-name="TEXT">
                    <text class="cls-6" transform="translate(1181.54 788.01)">18</text>
                </g>
                <g id="TEXT-1060" data-name="TEXT">
                    <text class="cls-6" transform="translate(1181.45 803.32)">19</text>
                </g>
                <g id="TEXT-1061" data-name="TEXT">
                    <text class="cls-6" transform="translate(1180.71 820.26)">20</text>
                </g>
                <g id="TEXT-1062" data-name="TEXT">
                    <text class="cls-6" transform="translate(1180.53 835.81)">21</text>
                </g>
                <g id="TEXT-1063" data-name="TEXT">
                    <text class="cls-6" transform="translate(1158.44 827.33)">22</text>
                </g>
                <g id="TEXT-1064" data-name="TEXT">
                    <text class="cls-6" transform="translate(1144.92 826.56)">23</text>
                </g>
                <g id="TEXT-1065" data-name="TEXT">
                    <text class="cls-6" transform="translate(1132.51 826.16)">24</text>
                </g>
                <g id="TEXT-1066" data-name="TEXT">
                    <text class="cls-6" transform="translate(1119.76 824.86)">25</text>
                </g>
                <g id="TEXT-1067" data-name="TEXT">
                    <text class="cls-6" transform="translate(1106.85 824.74)">26</text>
                </g>
                <g id="TEXT-1068" data-name="TEXT">
                    <text class="cls-6" transform="translate(1093.55 824.16)">27</text>
                </g>
                <g id="TEXT-1069" data-name="TEXT">
                    <text class="cls-6" transform="translate(1080.6 823.46)">28</text>
                </g>
                <g id="TEXT-1070" data-name="TEXT">
                    <text class="cls-6" transform="translate(1067.65 822.84)">29</text>
                </g>
                <g id="TEXT-1071" data-name="TEXT">
                    <text class="cls-6" transform="translate(1054.7 822.23)">30</text>
                </g>
                <g id="TEXT-1072" data-name="TEXT">
                    <text class="cls-6" transform="translate(1041.75 821.61)">31</text>
                </g>
                <g id="TEXT-1073" data-name="TEXT">
                    <text class="cls-6" transform="translate(1028.8 820.99)">32</text>
                </g>
                <g id="TEXT-1074" data-name="TEXT">
                    <text class="cls-6" transform="translate(1015.84 820.38)">33</text>
                </g>
                <g id="TEXT-1075" data-name="TEXT">
                    <text class="cls-6" transform="translate(1002.89 819.76)">34</text>
                </g>
            </g>
            <g id="MZ-94-5" data-name="MZ-94">
                <path class="cls-3" d="M997.81,682.93l-15.3-1s-11.8-1.4-13.1,13l-2.4,46.2s-1.5,10.7,9.8,11.9l219,10.9s9.3-.1,9.8-10.9l2.4-45.9s1.7-13.8-13.2-14.6Z"/>
                <polygon class="cls-4" points="1005.01 686.83 1003.41 719.13 1016.31 719.83 1017.91 687.43 1005.01 686.83"/>
                <polygon class="cls-4" points="1017.91 687.43 1016.31 719.83 1029.21 720.43 1030.91 688.03 1017.91 687.43"/>
                <polygon class="cls-4" points="1030.91 688.03 1029.31 720.43 1042.21 721.13 1043.81 688.73 1030.91 688.03"/>
                <polygon class="cls-4" points="1043.81 688.73 1042.21 721.13 1055.21 721.73 1056.81 689.33 1043.81 688.73"/>
                <polygon class="cls-4" points="1056.81 689.33 1055.21 721.73 1068.11 722.43 1069.71 690.03 1056.81 689.33"/>
                <polygon class="cls-4" points="1069.71 690.03 1068.11 722.43 1081.11 723.03 1082.71 690.63 1069.71 690.03"/>
                <polygon class="cls-4" points="1082.71 690.63 1081.11 723.03 1094.01 723.73 1095.61 691.33 1082.71 690.63"/>
                <polygon class="cls-4" points="1095.61 691.33 1094.01 723.73 1107.01 724.33 1108.61 691.93 1095.61 691.33"/>
                <polygon class="cls-4" points="1121.51 692.63 1120.01 725.03 1132.91 725.63 1134.51 693.23 1121.51 692.63"/>
                <polygon class="cls-4" points="1108.61 691.93 1107.01 724.33 1119.91 725.03 1121.51 692.63 1108.61 691.93"/>
                <polygon class="cls-4" points="1134.51 693.23 1132.91 725.63 1145.81 726.33 1147.41 693.93 1134.51 693.23"/>
                <polygon class="cls-4" points="1147.51 693.93 1145.91 726.33 1158.81 726.93 1160.41 694.53 1147.51 693.93"/>
                <polygon class="cls-4" points="1160.41 694.53 1158.81 726.93 1171.71 727.63 1173.41 695.23 1160.41 694.53"/>
                <polygon class="cls-4" points="1003.31 719.13 1001.71 751.53 1014.71 752.23 1016.31 719.83 1003.31 719.13"/>
                <polygon class="cls-4" points="1016.31 719.83 1014.71 752.23 1027.61 752.83 1029.21 720.43 1016.31 719.83"/>
                <polygon class="cls-4" points="1029.21 720.43 1027.61 752.83 1040.61 753.53 1042.21 721.13 1029.21 720.43"/>
                <polygon class="cls-4" points="1042.21 721.13 1040.61 753.53 1053.51 754.13 1055.11 721.73 1042.21 721.13"/>
                <polygon class="cls-4" points="1055.11 721.73 1053.51 754.13 1066.41 754.83 1068.11 722.43 1055.11 721.73"/>
                <polygon class="cls-4" points="1068.11 722.43 1066.51 754.83 1079.41 755.43 1081.01 723.03 1068.11 722.43"/>
                <polygon class="cls-4" points="1081.01 723.03 1079.41 755.43 1092.41 756.03 1094.01 723.73 1081.01 723.03"/>
                <polygon class="cls-4" points="1094.01 723.73 1092.41 756.13 1105.31 756.73 1106.91 724.33 1094.01 723.73"/>
                <polygon class="cls-4" points="1119.91 725.03 1118.31 757.33 1131.21 758.03 1132.81 725.63 1119.91 725.03"/>
                <polygon class="cls-4" points="1106.91 724.33 1105.31 756.73 1118.21 757.33 1119.91 725.03 1106.91 724.33"/>
                <polygon class="cls-4" points="1132.81 725.63 1131.21 758.03 1144.21 758.63 1145.81 726.33 1132.81 725.63"/>
                <polygon class="cls-4" points="1145.81 726.33 1144.21 758.63 1157.11 759.33 1158.81 726.93 1145.81 726.33"/>
                <polygon class="cls-4" points="1158.81 726.93 1157.21 759.33 1170.11 759.93 1171.71 727.63 1158.81 726.93"/>
                <path class="cls-4" d="M1005,686.83l-22.7-1.1s-8.5-.8-10.4,9.2l-.1,6.6,32.4,1.6Z"/>
                <polygon class="cls-4" points="971.81 701.43 971.01 717.53 1003.31 719.13 1004.11 703.03 971.81 701.43"/>
                <polygon class="cls-4" points="1003.31 719.13 1002.51 735.33 970.21 733.73 971.01 717.53 1003.31 719.13"/>
                <path class="cls-4" d="M1001.71,751.53l-23.1-1.2-2.1-.1s-6.7-.6-6.9-7.6l.4-8.9,32.4,1.6Z"/>
                <path class="cls-4" d="M1173.41,695.23l20.8,1.1s12.4,1.1,10.8,16.2v.5l-32.4-1.6Z"/>
                <polygon class="cls-4" points="1172.51 711.43 1171.71 727.63 1204.11 729.23 1204.91 713.03 1172.51 711.43"/>
                <polygon class="cls-4" points="1171.71 727.63 1170.91 743.93 1203.31 745.43 1204.11 729.23 1171.71 727.63"/>
                <path class="cls-4" d="M1170.91,743.93l-.8,16.1,25.2,1.2s6.9-.1,7.5-7.2l.4-8.6Z"/>
                <g id="TEXT-1076" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 1070.91, 732.74)">MZ-90</text>
                </g>
                <g id="TEXT-1077" data-name="TEXT">
                    <text class="cls-6" transform="translate(984.36 747.1)">1</text>
                </g>
                <g id="TEXT-1078" data-name="TEXT">
                    <text class="cls-6" transform="translate(984.9 730.5)">2</text>
                </g>
                <g id="TEXT-1079" data-name="TEXT">
                    <text class="cls-6" transform="translate(985.62 714.98)">3</text>
                </g>
                <g id="TEXT-1080" data-name="TEXT">
                    <text class="cls-6" transform="translate(986.36 700.29)">4</text>
                </g>
                <g id="TEXT-1081" data-name="TEXT">
                    <text class="cls-6" transform="translate(1008.88 708.12)">5</text>
                </g>
                <g id="TEXT-1082" data-name="TEXT">
                    <text class="cls-6" transform="translate(1021.73 708.69)">6</text>
                </g>
                <g id="TEXT-1083" data-name="TEXT">
                    <text class="cls-6" transform="translate(1034.74 709.24)">7</text>
                </g>
                <g id="TEXT-1084" data-name="TEXT">
                    <text class="cls-6" transform="translate(1047.88 710.15)">8</text>
                </g>
                <g id="TEXT-1085" data-name="TEXT">
                    <text class="cls-6" transform="translate(1060.49 710.89)">9</text>
                </g>
                <g id="TEXT-1086" data-name="TEXT">
                    <text class="cls-6" transform="translate(1073.11 711.03)">10</text>
                </g>
                <g id="TEXT-1087" data-name="TEXT">
                    <text class="cls-6" transform="translate(1085.81 711.65)">
                        <tspan class="cls-7">1</tspan>
                        <tspan x="2.41" y="0">1</tspan>
                    </text>
                </g>
                <g id="TEXT-1088" data-name="TEXT">
                    <text class="cls-6" transform="translate(1098.74 712.25)">12</text>
                </g>
                <g id="TEXT-1089" data-name="TEXT">
                    <text class="cls-6" transform="translate(1111.74 713.08)">13</text>
                </g>
                <g id="TEXT-1090" data-name="TEXT">
                    <text class="cls-6" transform="translate(1124.46 713.68)">14</text>
                </g>
                <g id="TEXT-1091" data-name="TEXT">
                    <text class="cls-6" transform="translate(1136.96 714.24)">15</text>
                </g>
                <g id="TEXT-1092" data-name="TEXT">
                    <text class="cls-6" transform="translate(1150.75 714.87)">16</text>
                </g>
                <g id="TEXT-1093" data-name="TEXT">
                    <text class="cls-6" transform="translate(1163.4 715.86)">17</text>
                </g>
                <g id="TEXT-1094" data-name="TEXT">
                    <text class="cls-6" transform="translate(1184.73 708.74)">18</text>
                </g>
                <g id="TEXT-1095" data-name="TEXT">
                    <text class="cls-6" transform="translate(1184.63 724.04)">19</text>
                </g>
                <g id="TEXT-1096" data-name="TEXT">
                    <text class="cls-6" transform="translate(1183.9 740.99)">20</text>
                </g>
                <g id="TEXT-1097" data-name="TEXT">
                    <text class="cls-6" transform="translate(1183.71 756.53)">21</text>
                </g>
                <g id="TEXT-1098" data-name="TEXT">
                    <text class="cls-6" transform="translate(1161.62 748.05)">22</text>
                </g>
                <g id="TEXT-1099" data-name="TEXT">
                    <text class="cls-6" transform="translate(1148.1 747.28)">23</text>
                </g>
                <g id="TEXT-1100" data-name="TEXT">
                    <text class="cls-6" transform="translate(1135.69 746.88)">24</text>
                </g>
                <g id="TEXT-1101" data-name="TEXT">
                    <text class="cls-6" transform="translate(1122.94 745.58)">25</text>
                </g>
                <g id="TEXT-1102" data-name="TEXT">
                    <text class="cls-6" transform="translate(1110.03 745.47)">26</text>
                </g>
                <g id="TEXT-1103" data-name="TEXT">
                    <text class="cls-6" transform="translate(1096.74 744.88)">27</text>
                </g>
                <g id="TEXT-1104" data-name="TEXT">
                    <text class="cls-6" transform="translate(1083.79 744.19)">28</text>
                </g>
                <g id="TEXT-1105" data-name="TEXT">
                    <text class="cls-6" transform="translate(1070.84 743.57)">29</text>
                </g>
                <g id="TEXT-1106" data-name="TEXT">
                    <text class="cls-6" transform="translate(1057.89 742.95)">30</text>
                </g>
                <g id="TEXT-1107" data-name="TEXT">
                    <text class="cls-6" transform="translate(1044.93 742.34)">31</text>
                </g>
                <g id="TEXT-1108" data-name="TEXT">
                    <text class="cls-6" transform="translate(1031.98 741.72)">32</text>
                </g>
                <g id="TEXT-1109" data-name="TEXT">
                    <text class="cls-6" transform="translate(1019.03 741.1)">33</text>
                </g>
                <g id="TEXT-1110" data-name="TEXT">
                    <text class="cls-6" transform="translate(1006.08 740.49)">34</text>
                </g>
            </g>
            <g id="MZ-94-6" data-name="MZ-94">
                <path class="cls-3" d="M1002.73,605.31l-15.3-1s-11.8-1.4-13.1,13l-2.4,46.2s-1.5,10.7,9.8,11.9l219,10.9s9.3-.1,9.8-10.9l2.4-45.9s1.7-13.8-13.2-14.6Z"/>
                <polygon class="cls-4" points="1009.93 609.21 1008.33 641.51 1021.23 642.21 1022.83 609.81 1009.93 609.21"/>
                <polygon class="cls-4" points="1022.83 609.81 1021.23 642.21 1034.13 642.81 1035.83 610.41 1022.83 609.81"/>
                <polygon class="cls-4" points="1035.83 610.41 1034.23 642.81 1047.13 643.51 1048.73 611.11 1035.83 610.41"/>
                <polygon class="cls-4" points="1048.73 611.11 1047.13 643.51 1060.13 644.11 1061.73 611.71 1048.73 611.11"/>
                <polygon class="cls-4" points="1061.73 611.71 1060.13 644.11 1073.03 644.81 1074.63 612.41 1061.73 611.71"/>
                <polygon class="cls-4" points="1074.63 612.41 1073.03 644.81 1086.03 645.41 1087.63 613.01 1074.63 612.41"/>
                <polygon class="cls-4" points="1087.63 613.01 1086.03 645.41 1098.93 646.11 1100.53 613.71 1087.63 613.01"/>
                <polygon class="cls-4" points="1100.53 613.71 1098.93 646.11 1111.93 646.71 1113.53 614.31 1100.53 613.71"/>
                <polygon class="cls-4" points="1126.43 615.01 1124.93 647.41 1137.83 648.01 1139.43 615.61 1126.43 615.01"/>
                <polygon class="cls-4" points="1113.53 614.31 1111.93 646.71 1124.83 647.41 1126.43 615.01 1113.53 614.31"/>
                <polygon class="cls-4" points="1139.43 615.61 1137.83 648.01 1150.73 648.71 1152.33 616.31 1139.43 615.61"/>
                <polygon class="cls-4" points="1152.43 616.31 1150.83 648.71 1163.73 649.31 1165.33 616.91 1152.43 616.31"/>
                <polygon class="cls-4" points="1165.33 616.91 1163.73 649.31 1176.63 650.01 1178.33 617.61 1165.33 616.91"/>
                <polygon class="cls-4" points="1008.23 641.51 1006.63 673.91 1019.63 674.61 1021.23 642.21 1008.23 641.51"/>
                <polygon class="cls-4" points="1021.23 642.21 1019.63 674.61 1032.53 675.21 1034.13 642.81 1021.23 642.21"/>
                <polygon class="cls-4" points="1034.13 642.81 1032.53 675.21 1045.53 675.91 1047.13 643.51 1034.13 642.81"/>
                <polygon class="cls-4" points="1047.13 643.51 1045.53 675.91 1058.43 676.51 1060.03 644.11 1047.13 643.51"/>
                <polygon class="cls-4" points="1060.03 644.11 1058.43 676.51 1071.33 677.21 1073.03 644.81 1060.03 644.11"/>
                <polygon class="cls-4" points="1073.03 644.81 1071.43 677.21 1084.33 677.81 1085.93 645.41 1073.03 644.81"/>
                <polygon class="cls-4" points="1085.93 645.41 1084.33 677.81 1097.33 678.41 1098.93 646.11 1085.93 645.41"/>
                <polygon class="cls-4" points="1098.93 646.11 1097.33 678.51 1110.23 679.11 1111.83 646.71 1098.93 646.11"/>
                <polygon class="cls-4" points="1124.83 647.41 1123.23 679.71 1136.13 680.41 1137.73 648.01 1124.83 647.41"/>
                <polygon class="cls-4" points="1111.83 646.71 1110.23 679.11 1123.13 679.71 1124.83 647.41 1111.83 646.71"/>
                <polygon class="cls-4" points="1137.73 648.01 1136.13 680.41 1149.13 681.01 1150.73 648.71 1137.73 648.01"/>
                <polygon class="cls-4" points="1150.73 648.71 1149.13 681.01 1162.03 681.71 1163.73 649.31 1150.73 648.71"/>
                <polygon class="cls-4" points="1163.73 649.31 1162.13 681.71 1175.03 682.31 1176.63 650.01 1163.73 649.31"/>
                <path class="cls-4" d="M1009.93,609.21l-22.7-1.1s-8.5-.8-10.4,9.2l-.1,6.6,32.4,1.6Z"/>
                <polygon class="cls-4" points="976.73 623.81 975.93 639.91 1008.23 641.51 1009.03 625.41 976.73 623.81"/>
                <polygon class="cls-4" points="1008.23 641.51 1007.43 657.71 975.13 656.11 975.93 639.91 1008.23 641.51"/>
                <path class="cls-4" d="M1006.63,673.91l-23.1-1.2-2.1-.1s-6.7-.6-6.9-7.6l.4-8.9,32.4,1.6Z"/>
                <path class="cls-4" d="M1190.7,618.27l6.39.34s10.61,5.89,12.84,16.31l-.9,16.7-19.82-1Z"/>
                <polygon class="cls-4" points="1178.33 617.61 1176.63 650.01 1189.21 650.63 1190.7 618.27 1178.33 617.61"/>
                <polygon class="cls-4" points="1176.63 650.01 1175.83 666.31 1208.23 667.81 1209.03 651.61 1176.63 650.01"/>
                <path class="cls-4" d="M1175.83,666.31l-.8,16.1,25.2,1.2s6.9-.1,7.5-7.2l.4-8.6Z"/>
                <g id="TEXT-1111" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 1075.83, 655.12)">MZ-89</text>
                </g>
                <g id="TEXT-1112" data-name="TEXT">
                    <text class="cls-6" transform="translate(989.28 669.48)">1</text>
                </g>
                <g id="TEXT-1113" data-name="TEXT">
                    <text class="cls-6" transform="translate(989.82 652.88)">2</text>
                </g>
                <g id="TEXT-1114" data-name="TEXT">
                    <text class="cls-6" transform="translate(990.54 637.36)">3</text>
                </g>
                <g id="TEXT-1115" data-name="TEXT">
                    <text class="cls-6" transform="translate(991.27 622.67)">4</text>
                </g>
                <g id="TEXT-1116" data-name="TEXT">
                    <text class="cls-6" transform="translate(1013.8 630.51)">5</text>
                </g>
                <g id="TEXT-1117" data-name="TEXT">
                    <text class="cls-6" transform="translate(1026.65 631.08)">6</text>
                </g>
                <g id="TEXT-1118" data-name="TEXT">
                    <text class="cls-6" transform="translate(1039.66 631.62)">7</text>
                </g>
                <g id="TEXT-1119" data-name="TEXT">
                    <text class="cls-6" transform="translate(1052.8 632.53)">8</text>
                </g>
                <g id="TEXT-1120" data-name="TEXT">
                    <text class="cls-6" transform="translate(1065.4 633.27)">9</text>
                </g>
                <g id="TEXT-1121" data-name="TEXT">
                    <text class="cls-6" transform="translate(1078.03 633.41)">10</text>
                </g>
                <g id="TEXT-1122" data-name="TEXT">
                    <text class="cls-6" transform="translate(1090.73 634.03)">
                        <tspan class="cls-7">1</tspan>
                        <tspan x="2.41" y="0">1</tspan>
                    </text>
                </g>
                <g id="TEXT-1123" data-name="TEXT">
                    <text class="cls-6" transform="translate(1103.66 634.63)">12</text>
                </g>
                <g id="TEXT-1124" data-name="TEXT">
                    <text class="cls-6" transform="translate(1116.65 635.46)">13</text>
                </g>
                <g id="TEXT-1125" data-name="TEXT">
                    <text class="cls-6" transform="translate(1129.38 636.07)">14</text>
                </g>
                <g id="TEXT-1126" data-name="TEXT">
                    <text class="cls-6" transform="translate(1141.88 636.62)">15</text>
                </g>
                <g id="TEXT-1127" data-name="TEXT">
                    <text class="cls-6" transform="translate(1155.67 637.25)">16</text>
                </g>
                <g id="TEXT-1128" data-name="TEXT">
                    <text class="cls-6" transform="translate(1168.32 638.25)">17</text>
                </g>
                <g id="TEXT-1129" data-name="TEXT">
                    <text class="cls-6" transform="translate(1181.05 636.62)">18</text>
                </g>
                <g id="TEXT-1130" data-name="TEXT">
                    <text class="cls-6" transform="translate(1196.02 637.66)">19</text>
                </g>
                <g id="TEXT-1131" data-name="TEXT">
                    <text class="cls-6" transform="translate(1188.82 663.37)">20</text>
                </g>
                <g id="TEXT-1132" data-name="TEXT">
                    <text class="cls-6" transform="translate(1188.63 678.92)">21</text>
                </g>
                <g id="TEXT-1133" data-name="TEXT">
                    <text class="cls-6" transform="translate(1166.54 670.44)">22</text>
                </g>
                <g id="TEXT-1134" data-name="TEXT">
                    <text class="cls-6" transform="translate(1153.02 669.66)">23</text>
                </g>
                <g id="TEXT-1135" data-name="TEXT">
                    <text class="cls-6" transform="translate(1140.61 669.27)">24</text>
                </g>
                <g id="TEXT-1136" data-name="TEXT">
                    <text class="cls-6" transform="translate(1127.86 667.97)">25</text>
                </g>
                <g id="TEXT-1137" data-name="TEXT">
                    <text class="cls-6" transform="translate(1114.95 667.85)">26</text>
                </g>
                <g id="TEXT-1138" data-name="TEXT">
                    <text class="cls-6" transform="translate(1101.66 667.27)">27</text>
                </g>
                <g id="TEXT-1139" data-name="TEXT">
                    <text class="cls-6" transform="translate(1088.71 666.57)">28</text>
                </g>
                <g id="TEXT-1140" data-name="TEXT">
                    <text class="cls-6" transform="translate(1075.76 665.95)">29</text>
                </g>
                <g id="TEXT-1141" data-name="TEXT">
                    <text class="cls-6" transform="translate(1062.8 665.33)">30</text>
                </g>
                <g id="TEXT-1142" data-name="TEXT">
                    <text class="cls-6" transform="translate(1049.85 664.72)">31</text>
                </g>
                <g id="TEXT-1143" data-name="TEXT">
                    <text class="cls-6" transform="translate(1036.9 664.1)">32</text>
                </g>
                <g id="TEXT-1144" data-name="TEXT">
                    <text class="cls-6" transform="translate(1023.95 663.48)">33</text>
                </g>
                <g id="TEXT-1145" data-name="TEXT">
                    <text class="cls-6" transform="translate(1011 662.87)">34</text>
                </g>
            </g>
            <g id="MZ-94-7" data-name="MZ-94">
                <path class="cls-3" d="M1006.78,527.76l-15.3-1s-11.8-1.4-13.1,13L976,586s-1.5,10.7,9.8,11.9l186.64,9.29s11.19-4.54,5.13-16.76a1.9,1.9,0,0,0-.39-.53l-54.83-52.13c-.06-.06-.09-.14-.16-.19-.49-.34-2.23-2.88-9-4Z"/>
                <polygon class="cls-4" points="1013.98 531.66 1012.38 563.96 1025.28 564.66 1026.88 532.26 1013.98 531.66"/>
                <polygon class="cls-4" points="1026.88 532.26 1025.28 564.66 1038.18 565.26 1039.88 532.86 1026.88 532.26"/>
                <polygon class="cls-4" points="1039.88 532.86 1038.28 565.26 1051.18 565.96 1052.78 533.56 1039.88 532.86"/>
                <polygon class="cls-4" points="1052.78 533.56 1051.18 565.96 1064.18 566.56 1065.78 534.16 1052.78 533.56"/>
                <polygon class="cls-4" points="1065.78 534.16 1064.18 566.56 1077.08 567.26 1078.68 534.86 1065.78 534.16"/>
                <polygon class="cls-4" points="1078.68 534.86 1077.08 567.26 1090.08 567.86 1091.68 535.46 1078.68 534.86"/>
                <polygon class="cls-4" points="1091.68 535.46 1090.08 567.86 1102.98 568.56 1104.58 536.16 1091.68 535.46"/>
                <polygon class="cls-4" points="1104.58 536.16 1102.98 568.56 1115.98 569.16 1117.25 537.63 1104.58 536.16"/>
                <polygon class="cls-4" points="1012.28 563.96 1010.68 596.36 1023.68 597.06 1025.28 564.66 1012.28 563.96"/>
                <polygon class="cls-4" points="1025.28 564.66 1023.68 597.06 1036.58 597.66 1038.18 565.26 1025.28 564.66"/>
                <polygon class="cls-4" points="1038.18 565.26 1036.58 597.66 1049.58 598.36 1051.18 565.96 1038.18 565.26"/>
                <polygon class="cls-4" points="1051.18 565.96 1049.58 598.36 1062.48 598.96 1064.08 566.56 1051.18 565.96"/>
                <polygon class="cls-4" points="1064.08 566.56 1062.48 598.96 1075.38 599.66 1077.08 567.26 1064.08 566.56"/>
                <polygon class="cls-4" points="1077.08 567.26 1075.48 599.66 1088.38 600.26 1089.98 567.86 1077.08 567.26"/>
                <polygon class="cls-4" points="1089.98 567.86 1088.38 600.26 1101.38 600.86 1102.98 568.56 1089.98 567.86"/>
                <polygon class="cls-4" points="1102.98 568.56 1101.38 600.96 1114.28 601.56 1115.88 569.16 1102.98 568.56"/>
                <polygon class="cls-4" points="1128.88 569.86 1127.28 602.16 1140.18 602.86 1141.78 570.46 1128.88 569.86"/>
                <polygon class="cls-4" points="1115.88 569.16 1114.28 601.56 1127.18 602.16 1128.88 569.86 1115.88 569.16"/>
                <polygon class="cls-4" points="1141.78 570.46 1140.18 602.86 1153.18 603.46 1154.78 571.16 1141.78 570.46"/>
                <path class="cls-4" d="M1014,531.66l-22.7-1.1s-8.5-.8-10.4,9.2l-.1,6.6,32.4,1.6Z"/>
                <polygon class="cls-4" points="980.78 546.26 979.98 562.36 1012.28 563.96 1013.08 547.86 980.78 546.26"/>
                <polygon class="cls-4" points="1012.28 563.96 1011.48 580.16 979.18 578.56 979.98 562.36 1012.28 563.96"/>
                <path class="cls-4" d="M1010.68,596.36l-23.1-1.2-2.1-.1s-6.7-.6-6.9-7.6l.4-8.9,32.4,1.6Z"/>
                <path class="cls-4" d="M1154.78,571.16l-1.6,32.3,16.75.85a5.24,5.24,0,0,0,3.69-1.23,9.52,9.52,0,0,0,3.32-6,5.1,5.1,0,0,0-.93-3.6l-4-5.08Z"/>
                <g id="TEXT-1146" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 1079.88, 577.57)">MZ-88</text>
                </g>
                <g id="TEXT-1147" data-name="TEXT">
                    <text class="cls-6" transform="translate(993.33 591.93)">1</text>
                </g>
                <g id="TEXT-1148" data-name="TEXT">
                    <text class="cls-6" transform="translate(993.87 575.33)">2</text>
                </g>
                <g id="TEXT-1149" data-name="TEXT">
                    <text class="cls-6" transform="translate(994.59 559.81)">3</text>
                </g>
                <g id="TEXT-1150" data-name="TEXT">
                    <text class="cls-6" transform="translate(995.32 545.12)">4</text>
                </g>
                <g id="TEXT-1151" data-name="TEXT">
                    <text class="cls-6" transform="translate(1017.85 552.95)">5</text>
                </g>
                <g id="TEXT-1152" data-name="TEXT">
                    <text class="cls-6" transform="translate(1030.7 553.52)">6</text>
                </g>
                <g id="TEXT-1153" data-name="TEXT">
                    <text class="cls-6" transform="translate(1043.71 554.07)">7</text>
                </g>
                <g id="TEXT-1154" data-name="TEXT">
                    <text class="cls-6" transform="translate(1056.85 554.98)">8</text>
                </g>
                <g id="TEXT-1155" data-name="TEXT">
                    <text class="cls-6" transform="translate(1069.45 555.71)">9</text>
                </g>
                <g id="TEXT-1156" data-name="TEXT">
                    <text class="cls-6" transform="translate(1082.08 555.86)">10</text>
                </g>
                <g id="TEXT-1157" data-name="TEXT">
                    <text class="cls-6" transform="translate(1094.78 556.48)">
                        <tspan class="cls-7">1</tspan>
                        <tspan x="2.41" y="0">1</tspan>
                    </text>
                </g>
                <g id="TEXT-1158" data-name="TEXT">
                    <text class="cls-6" transform="translate(1107.71 557.08)">12</text>
                </g>
                <g id="TEXT-1159" data-name="TEXT">
                    <text class="cls-6" transform="translate(1120.7 557.91)">13</text>
                </g>
                <g id="TEXT-1160" data-name="TEXT">
                    <text class="cls-6" transform="translate(1157.07 592.11)">14</text>
                </g>
                <g id="TEXT-1161" data-name="TEXT">
                    <text class="cls-6" transform="translate(1144.66 591.71)">15</text>
                </g>
                <g id="TEXT-1162" data-name="TEXT">
                    <text class="cls-6" transform="translate(1131.91 590.41)">16</text>
                </g>
                <g id="TEXT-1163" data-name="TEXT">
                    <text class="cls-6" transform="translate(1119 590.3)">17</text>
                </g>
                <g id="TEXT-1164" data-name="TEXT">
                    <text class="cls-6" transform="translate(1105.71 589.71)">18</text>
                </g>
                <g id="TEXT-1165" data-name="TEXT">
                    <text class="cls-6" transform="translate(1092.76 589.02)">19</text>
                </g>
                <g id="TEXT-1166" data-name="TEXT">
                    <text class="cls-6" transform="translate(1079.81 588.4)">20</text>
                </g>
                <g id="TEXT-1167" data-name="TEXT">
                    <text class="cls-6" transform="translate(1066.85 587.78)">21</text>
                </g>
                <g id="TEXT-1168" data-name="TEXT">
                    <text class="cls-6" transform="translate(1053.9 587.17)">22</text>
                </g>
                <g id="TEXT-1169" data-name="TEXT">
                    <text class="cls-6" transform="translate(1040.95 586.55)">23</text>
                </g>
                <g id="TEXT-1170" data-name="TEXT">
                    <text class="cls-6" transform="translate(1028 585.93)">24</text>
                </g>
                <g id="TEXT-1171" data-name="TEXT">
                    <text class="cls-6" transform="translate(1015.05 585.32)">25</text>
                </g>
            </g>
            <g id="_MZ-96" data-name="&lt;MZ-96">
                <path class="cls-3" d="M975.18,1156.15l-15.3-1s-11.8-1.4-13.1,13l-2.4,46.2s-1.5,10.7,9.8,11.9l219,10.9s9.3-.1,9.8-10.9l2.4-45.9s1.7-13.8-13.2-14.6Z"/>
                <polygon class="cls-4" points="982.27 1159.95 980.77 1192.35 993.67 1193.05 995.27 1160.65 982.27 1159.95"/>
                <polygon class="cls-4" points="995.27 1160.65 993.67 1193.05 1006.58 1193.65 1008.17 1161.25 995.27 1160.65"/>
                <polygon class="cls-4" points="1008.27 1161.25 1006.67 1193.65 1019.58 1194.35 1021.17 1161.95 1008.27 1161.25"/>
                <polygon class="cls-4" points="1021.17 1161.95 1019.58 1194.35 1032.47 1194.95 1034.17 1162.55 1021.17 1161.95"/>
                <polygon class="cls-4" points="1034.08 1162.55 1032.47 1194.95 1045.47 1195.65 1047.08 1163.25 1034.08 1162.55"/>
                <polygon class="cls-4" points="1047.08 1163.25 1045.47 1195.65 1058.38 1196.25 1060.08 1163.85 1047.08 1163.25"/>
                <polygon class="cls-4" points="1060.08 1163.85 1058.47 1196.25 1071.38 1196.95 1072.97 1164.55 1060.08 1163.85"/>
                <polygon class="cls-4" points="1072.97 1164.55 1071.38 1196.95 1084.28 1197.55 1085.88 1165.15 1072.97 1164.55"/>
                <polygon class="cls-4" points="1098.88 1165.85 1097.28 1198.25 1110.17 1198.85 1111.88 1166.45 1098.88 1165.85"/>
                <polygon class="cls-4" points="1085.88 1165.15 1084.28 1197.55 1097.28 1198.25 1098.88 1165.85 1085.88 1165.15"/>
                <polygon class="cls-4" points="1111.78 1166.45 1110.17 1198.85 1123.17 1199.55 1124.78 1167.15 1111.78 1166.45"/>
                <polygon class="cls-4" points="1124.78 1167.15 1123.17 1199.55 1136.08 1200.15 1137.78 1167.75 1124.78 1167.15"/>
                <polygon class="cls-4" points="1137.78 1167.75 1136.17 1200.15 1149.08 1200.85 1150.67 1168.45 1137.78 1167.75"/>
                <polygon class="cls-4" points="980.67 1192.35 979.08 1224.75 991.98 1225.45 993.58 1193.05 980.67 1192.35"/>
                <polygon class="cls-4" points="993.58 1193.05 991.98 1225.45 1004.98 1226.05 1006.58 1193.65 993.58 1193.05"/>
                <polygon class="cls-4" points="1006.58 1193.65 1004.98 1226.05 1017.88 1226.75 1019.58 1194.35 1006.58 1193.65"/>
                <polygon class="cls-4" points="1019.58 1194.35 1017.98 1226.75 1030.88 1227.35 1032.47 1194.95 1019.58 1194.35"/>
                <polygon class="cls-4" points="1032.47 1194.95 1030.88 1227.35 1043.78 1227.95 1045.38 1195.65 1032.47 1194.95"/>
                <polygon class="cls-4" points="1045.47 1195.65 1043.88 1228.05 1056.78 1228.65 1058.38 1196.25 1045.47 1195.65"/>
                <polygon class="cls-4" points="1058.38 1196.25 1056.78 1228.65 1069.67 1229.25 1071.38 1196.95 1058.38 1196.25"/>
                <polygon class="cls-4" points="1071.38 1196.95 1069.78 1229.25 1082.67 1229.95 1084.28 1197.55 1071.38 1196.95"/>
                <polygon class="cls-4" points="1097.28 1198.25 1095.67 1230.55 1108.58 1231.25 1110.17 1198.85 1097.28 1198.25"/>
                <polygon class="cls-4" points="1084.28 1197.55 1082.67 1229.95 1095.58 1230.55 1097.17 1198.25 1084.28 1197.55"/>
                <polygon class="cls-4" points="1110.17 1198.85 1108.58 1231.25 1121.47 1231.85 1123.08 1199.55 1110.17 1198.85"/>
                <polygon class="cls-4" points="1123.17 1199.55 1121.58 1231.85 1134.47 1232.55 1136.08 1200.15 1123.17 1199.55"/>
                <polygon class="cls-4" points="1136.08 1200.15 1134.47 1232.55 1147.47 1233.15 1149.08 1200.85 1136.08 1200.15"/>
                <path class="cls-4" d="M982.28,1159.95l-22.7-1.1s-8.5-.8-10.4,9.2l-.1,6.6,32.4,1.6Z"/>
                <polygon class="cls-4" points="949.08 1174.65 948.27 1190.75 980.67 1192.35 981.48 1176.25 949.08 1174.65"/>
                <polygon class="cls-4" points="980.67 1192.35 979.88 1208.55 947.48 1206.95 948.27 1190.75 980.67 1192.35"/>
                <path class="cls-4" d="M979.08,1224.75l-23.1-1.2-2.1-.1s-6.7-.6-6.9-7.6l.4-8.9,32.4,1.6Z"/>
                <path class="cls-4" d="M1150.68,1168.45l20.8,1.1s12.4,1.1,10.8,16.2v.5l-32.4-1.6Z"/>
                <polygon class="cls-4" points="1149.88 1184.65 1149.08 1200.85 1181.47 1202.45 1182.28 1186.25 1149.88 1184.65"/>
                <polygon class="cls-4" points="1149.08 1200.85 1148.28 1217.15 1180.58 1218.65 1181.47 1202.45 1149.08 1200.85"/>
                <path class="cls-4" d="M1148.28,1217.15l-.8,16.1,25.2,1.2s6.9-.1,7.5-7.2l.4-8.6Z"/>
                <g id="TEXT-1172" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 1041.46, 1199.5)">MZ-96</text>
                </g>
                <g id="TEXT-1173" data-name="TEXT">
                    <text class="cls-6" transform="translate(961.84 1220.82)">1</text>
                </g>
                <g id="TEXT-1174" data-name="TEXT">
                    <text class="cls-6" transform="translate(962.38 1204.22)">2</text>
                </g>
                <g id="TEXT-1175" data-name="TEXT">
                    <text class="cls-6" transform="translate(963.1 1188.7)">3</text>
                </g>
                <g id="TEXT-1176" data-name="TEXT">
                    <text class="cls-6" transform="translate(963.83 1174.01)">4</text>
                </g>
                <g id="TEXT-1177" data-name="TEXT">
                    <text class="cls-6" transform="translate(986.36 1181.84)">5</text>
                </g>
                <g id="TEXT-1178" data-name="TEXT">
                    <text class="cls-6" transform="translate(999.21 1182.41)">6</text>
                </g>
                <g id="TEXT-1179" data-name="TEXT">
                    <text class="cls-6" transform="translate(1012.21 1182.96)">7</text>
                </g>
                <g id="TEXT-1180" data-name="TEXT">
                    <text class="cls-6" transform="translate(1025.36 1183.87)">8</text>
                </g>
                <g id="TEXT-1181" data-name="TEXT">
                    <text class="cls-6" transform="translate(1037.96 1184.61)">9</text>
                </g>
                <g id="TEXT-1182" data-name="TEXT">
                    <text class="cls-6" transform="translate(1050.59 1184.75)">10</text>
                </g>
                <g id="TEXT-1183" data-name="TEXT">
                    <text class="cls-6" transform="translate(1063.29 1185.37)">
                        <tspan class="cls-7">1</tspan>
                        <tspan x="2.41" y="0">1</tspan>
                    </text>
                </g>
                <g id="TEXT-1184" data-name="TEXT">
                    <text class="cls-6" transform="translate(1076.22 1185.97)">12</text>
                </g>
                <g id="TEXT-1185" data-name="TEXT">
                    <text class="cls-6" transform="translate(1089.21 1186.8)">13</text>
                </g>
                <g id="TEXT-1186" data-name="TEXT">
                    <text class="cls-6" transform="translate(1101.94 1187.4)">14</text>
                </g>
                <g id="TEXT-1187" data-name="TEXT">
                    <text class="cls-6" transform="translate(1114.44 1187.96)">15</text>
                </g>
                <g id="TEXT-1188" data-name="TEXT">
                    <text class="cls-6" transform="translate(1128.23 1188.59)">16</text>
                </g>
                <g id="TEXT-1189" data-name="TEXT">
                    <text class="cls-6" transform="translate(1140.88 1189.58)">17</text>
                </g>
                <g id="TEXT-1190" data-name="TEXT">
                    <text class="cls-6" transform="translate(1162.2 1182.46)">18</text>
                </g>
                <g id="TEXT-1191" data-name="TEXT">
                    <text class="cls-6" transform="translate(1162.11 1197.76)">19</text>
                </g>
                <g id="TEXT-1192" data-name="TEXT">
                    <text class="cls-6" transform="translate(1161.38 1214.71)">20</text>
                </g>
                <g id="TEXT-1193" data-name="TEXT">
                    <text class="cls-6" transform="translate(1161.19 1230.25)">21</text>
                </g>
                <g id="TEXT-1194" data-name="TEXT">
                    <text class="cls-6" transform="translate(1139.1 1221.77)">22</text>
                </g>
                <g id="TEXT-1195" data-name="TEXT">
                    <text class="cls-6" transform="translate(1125.58 1221)">23</text>
                </g>
                <g id="TEXT-1196" data-name="TEXT">
                    <text class="cls-6" transform="translate(1113.17 1220.6)">24</text>
                </g>
                <g id="TEXT-1197" data-name="TEXT">
                    <text class="cls-6" transform="translate(1100.42 1219.3)">25</text>
                </g>
                <g id="TEXT-1198" data-name="TEXT">
                    <text class="cls-6" transform="translate(1087.51 1219.19)">26</text>
                </g>
                <g id="TEXT-1199" data-name="TEXT">
                    <text class="cls-6" transform="translate(1074.22 1218.6)">27</text>
                </g>
                <g id="TEXT-1200" data-name="TEXT">
                    <text class="cls-6" transform="translate(1061.27 1217.91)">28</text>
                </g>
                <g id="TEXT-1201" data-name="TEXT">
                    <text class="cls-6" transform="translate(1048.31 1217.29)">29</text>
                </g>
                <g id="TEXT-1202" data-name="TEXT">
                    <text class="cls-6" transform="translate(1035.36 1216.67)">30</text>
                </g>
                <g id="TEXT-1203" data-name="TEXT">
                    <text class="cls-6" transform="translate(1022.41 1216.06)">31</text>
                </g>
                <g id="TEXT-1204" data-name="TEXT">
                    <text class="cls-6" transform="translate(1009.46 1215.44)">32</text>
                </g>
                <g id="TEXT-1205" data-name="TEXT">
                    <text class="cls-6" transform="translate(996.51 1214.82)">33</text>
                </g>
                <g id="TEXT-1206" data-name="TEXT">
                    <text class="cls-6" transform="translate(983.55 1214.21)">34</text>
                </g>
            </g>
            <g id="MZ-97">
                <path class="cls-3" d="M971.38,1234l-15.3-1s-11.8-1.4-13.1,13l-2.4,46.2s-1.5,10.7,9.8,11.9l219,10.9s9.3-.1,9.8-10.9l2.4-45.9s1.7-13.8-13.2-14.6Z"/>
                <polygon class="cls-4" points="978.58 1237.95 976.98 1270.25 989.88 1270.95 991.48 1238.55 978.58 1237.95"/>
                <polygon class="cls-4" points="991.48 1238.55 989.88 1270.95 1002.77 1271.55 1004.38 1239.25 991.48 1238.55"/>
                <polygon class="cls-4" points="1004.48 1239.25 1002.88 1271.55 1015.77 1272.25 1017.38 1239.85 1004.48 1239.25"/>
                <polygon class="cls-4" points="1017.38 1239.85 1015.77 1272.25 1028.67 1272.85 1030.38 1240.55 1017.38 1239.85"/>
                <polygon class="cls-4" points="1030.28 1240.55 1028.67 1272.85 1041.67 1273.55 1043.28 1241.15 1030.28 1240.55"/>
                <polygon class="cls-4" points="1043.28 1241.15 1041.67 1273.55 1054.58 1274.15 1056.28 1241.85 1043.28 1241.15"/>
                <polygon class="cls-4" points="1056.28 1241.85 1054.67 1274.15 1067.58 1274.85 1069.17 1242.45 1056.28 1241.85"/>
                <polygon class="cls-4" points="1069.17 1242.45 1067.58 1274.85 1080.47 1275.45 1082.17 1243.15 1069.17 1242.45"/>
                <polygon class="cls-4" points="1095.08 1243.75 1093.47 1276.15 1106.47 1276.75 1108.08 1244.45 1095.08 1243.75"/>
                <polygon class="cls-4" points="1082.08 1243.15 1080.47 1275.45 1093.47 1276.15 1095.08 1243.75 1082.08 1243.15"/>
                <polygon class="cls-4" points="1108.08 1244.45 1106.47 1276.75 1119.38 1277.45 1120.97 1245.05 1108.08 1244.45"/>
                <polygon class="cls-4" points="1120.97 1245.05 1119.38 1277.45 1132.38 1278.05 1133.97 1245.75 1120.97 1245.05"/>
                <polygon class="cls-4" points="1133.97 1245.75 1132.38 1278.05 1145.28 1278.75 1146.88 1246.35 1133.97 1245.75"/>
                <polygon class="cls-4" points="976.88 1270.35 975.27 1302.65 988.17 1303.35 989.88 1270.95 976.88 1270.35"/>
                <polygon class="cls-4" points="989.77 1270.95 988.17 1303.35 1001.17 1303.95 1002.77 1271.55 989.77 1270.95"/>
                <polygon class="cls-4" points="1002.77 1271.55 1001.17 1303.95 1014.08 1304.65 1015.77 1272.25 1002.77 1271.55"/>
                <polygon class="cls-4" points="1015.77 1272.25 1014.17 1304.65 1027.08 1305.25 1028.67 1272.85 1015.77 1272.25"/>
                <polygon class="cls-4" points="1028.67 1272.85 1027.08 1305.25 1039.97 1305.95 1041.58 1273.55 1028.67 1272.85"/>
                <polygon class="cls-4" points="1041.67 1273.55 1040.08 1305.95 1052.97 1306.55 1054.58 1274.15 1041.67 1273.55"/>
                <polygon class="cls-4" points="1054.58 1274.15 1052.97 1306.55 1065.97 1307.25 1067.58 1274.85 1054.58 1274.15"/>
                <polygon class="cls-4" points="1067.58 1274.85 1065.97 1307.25 1078.88 1307.85 1080.47 1275.45 1067.58 1274.85"/>
                <polygon class="cls-4" points="1093.47 1276.15 1091.88 1308.55 1104.78 1309.15 1106.38 1276.75 1093.47 1276.15"/>
                <polygon class="cls-4" points="1080.47 1275.45 1078.88 1307.85 1091.78 1308.55 1093.38 1276.15 1080.47 1275.45"/>
                <polygon class="cls-4" points="1106.38 1276.75 1104.78 1309.15 1117.67 1309.85 1119.38 1277.45 1106.38 1276.75"/>
                <polygon class="cls-4" points="1119.38 1277.45 1117.78 1309.85 1130.67 1310.45 1132.28 1278.05 1119.38 1277.45"/>
                <polygon class="cls-4" points="1132.28 1278.05 1130.67 1310.45 1143.67 1311.15 1145.28 1278.75 1132.28 1278.05"/>
                <path class="cls-4" d="M978.58,1237.95l-22.7-1.1s-8.5-.8-10.4,9.2l-.1,6.6,32.4,1.6Z"/>
                <polygon class="cls-4" points="945.27 1252.55 944.58 1268.65 976.88 1270.35 977.67 1254.15 945.27 1252.55"/>
                <polygon class="cls-4" points="976.88 1270.35 976.08 1286.45 943.77 1284.85 944.58 1268.65 976.88 1270.35"/>
                <path class="cls-4" d="M975.28,1302.65l-23.1-1.2-2.1-.1s-6.7-.6-6.9-7.6l.4-8.9,32.4,1.6Z"/>
                <path class="cls-4" d="M1146.88,1246.35l20.8,1.1s12.4,1.1,10.8,16.2v.5l-32.4-1.6Z"/>
                <polygon class="cls-4" points="1146.08 1262.55 1145.28 1278.75 1177.67 1280.35 1178.47 1264.15 1146.08 1262.55"/>
                <polygon class="cls-4" points="1145.28 1278.75 1144.47 1295.05 1176.88 1296.55 1177.67 1280.35 1145.28 1278.75"/>
                <path class="cls-4" d="M1144.48,1295l-.8,16.1,25.2,1.2s6.9-.1,7.5-7.2l.4-8.6Z"/>
                <g id="TEXT-1207" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 1034.57, 1279.36)">MZ-97</text>
                </g>
                <g id="TEXT-1208" data-name="TEXT">
                    <text class="cls-6" transform="translate(957.95 1298.52)">1</text>
                </g>
                <g id="TEXT-1209" data-name="TEXT">
                    <text class="cls-6" transform="translate(958.48 1281.92)">2</text>
                </g>
                <g id="TEXT-1210" data-name="TEXT">
                    <text class="cls-6" transform="translate(959.21 1266.4)">3</text>
                </g>
                <g id="TEXT-1211" data-name="TEXT">
                    <text class="cls-6" transform="translate(959.94 1251.71)">4</text>
                </g>
                <g id="TEXT-1212" data-name="TEXT">
                    <text class="cls-6" transform="translate(982.46 1259.55)">5</text>
                </g>
                <g id="TEXT-1213" data-name="TEXT">
                    <text class="cls-6" transform="translate(995.32 1260.12)">6</text>
                </g>
                <g id="TEXT-1214" data-name="TEXT">
                    <text class="cls-6" transform="translate(1008.32 1260.66)">7</text>
                </g>
                <g id="TEXT-1215" data-name="TEXT">
                    <text class="cls-6" transform="translate(1021.46 1261.57)">8</text>
                </g>
                <g id="TEXT-1216" data-name="TEXT">
                    <text class="cls-6" transform="translate(1034.07 1262.31)">9</text>
                </g>
                <g id="TEXT-1217" data-name="TEXT">
                    <text class="cls-6" transform="translate(1046.69 1262.45)">10</text>
                </g>
                <g id="TEXT-1218" data-name="TEXT">
                    <text class="cls-6" transform="translate(1059.39 1263.07)">
                        <tspan class="cls-7">1</tspan>
                        <tspan x="2.41" y="0">1</tspan>
                    </text>
                </g>
                <g id="TEXT-1219" data-name="TEXT">
                    <text class="cls-6" transform="translate(1072.33 1263.67)">12</text>
                </g>
                <g id="TEXT-1220" data-name="TEXT">
                    <text class="cls-6" transform="translate(1085.32 1264.5)">13</text>
                </g>
                <g id="TEXT-1221" data-name="TEXT">
                    <text class="cls-6" transform="translate(1098.05 1265.11)">14</text>
                </g>
                <g id="TEXT-1222" data-name="TEXT">
                    <text class="cls-6" transform="translate(1110.55 1265.66)">15</text>
                </g>
                <g id="TEXT-1223" data-name="TEXT">
                    <text class="cls-6" transform="translate(1124.33 1266.29)">16</text>
                </g>
                <g id="TEXT-1224" data-name="TEXT">
                    <text class="cls-6" transform="translate(1136.98 1267.29)">17</text>
                </g>
                <g id="TEXT-1225" data-name="TEXT">
                    <text class="cls-6" transform="translate(1158.31 1260.16)">18</text>
                </g>
                <g id="TEXT-1226" data-name="TEXT">
                    <text class="cls-6" transform="translate(1158.22 1275.47)">19</text>
                </g>
                <g id="TEXT-1227" data-name="TEXT">
                    <text class="cls-6" transform="translate(1157.48 1292.41)">20</text>
                </g>
                <g id="TEXT-1228" data-name="TEXT">
                    <text class="cls-6" transform="translate(1157.29 1307.96)">21</text>
                </g>
                <g id="TEXT-1229" data-name="TEXT">
                    <text class="cls-6" transform="translate(1135.2 1299.48)">22</text>
                </g>
                <g id="TEXT-1230" data-name="TEXT">
                    <text class="cls-6" transform="translate(1121.69 1298.7)">23</text>
                </g>
                <g id="TEXT-1231" data-name="TEXT">
                    <text class="cls-6" transform="translate(1109.28 1298.31)">24</text>
                </g>
                <g id="TEXT-1232" data-name="TEXT">
                    <text class="cls-6" transform="translate(1096.53 1297.01)">25</text>
                </g>
                <g id="TEXT-1233" data-name="TEXT">
                    <text class="cls-6" transform="translate(1083.62 1296.89)">26</text>
                </g>
                <g id="TEXT-1234" data-name="TEXT">
                    <text class="cls-6" transform="translate(1070.32 1296.3)">27</text>
                </g>
                <g id="TEXT-1235" data-name="TEXT">
                    <text class="cls-6" transform="translate(1057.37 1295.61)">28</text>
                </g>
                <g id="TEXT-1236" data-name="TEXT">
                    <text class="cls-6" transform="translate(1044.42 1294.99)">29</text>
                </g>
                <g id="TEXT-1237" data-name="TEXT">
                    <text class="cls-6" transform="translate(1031.47 1294.37)">30</text>
                </g>
                <g id="TEXT-1238" data-name="TEXT">
                    <text class="cls-6" transform="translate(1018.52 1293.76)">31</text>
                </g>
                <g id="TEXT-1239" data-name="TEXT">
                    <text class="cls-6" transform="translate(1005.57 1293.14)">32</text>
                </g>
                <g id="TEXT-1240" data-name="TEXT">
                    <text class="cls-6" transform="translate(992.61 1292.52)">33</text>
                </g>
                <g id="TEXT-1241" data-name="TEXT">
                    <text class="cls-6" transform="translate(979.66 1291.91)">34</text>
                </g>
            </g>
            <g id="MZ-98">
                <path class="cls-3" d="M967.28,1311.35l-15.3-1s-11.8-1.4-13.1,13l-2.4,46.2s-1.5,10.7,9.8,11.9l219,10.9s9.3-.1,9.8-10.9l2.3-45.9s1.7-13.8-13.2-14.6Z"/>
                <polygon class="cls-4" points="974.38 1315.25 972.77 1347.65 985.77 1348.35 987.38 1315.95 974.38 1315.25"/>
                <polygon class="cls-4" points="987.38 1315.95 985.77 1348.35 998.67 1348.95 1000.27 1316.55 987.38 1315.95"/>
                <polygon class="cls-4" points="1000.27 1316.55 998.67 1348.95 1011.67 1349.65 1013.27 1317.25 1000.27 1316.55"/>
                <polygon class="cls-4" points="1013.27 1317.25 1011.67 1349.65 1024.58 1350.25 1026.17 1317.85 1013.27 1317.25"/>
                <polygon class="cls-4" points="1026.17 1317.85 1024.58 1350.25 1037.47 1350.95 1039.17 1318.55 1026.17 1317.85"/>
                <polygon class="cls-4" points="1039.17 1318.55 1037.58 1350.95 1050.47 1351.55 1052.08 1319.15 1039.17 1318.55"/>
                <polygon class="cls-4" points="1052.08 1319.15 1050.47 1351.55 1063.47 1352.25 1065.08 1319.85 1052.08 1319.15"/>
                <polygon class="cls-4" points="1065.08 1319.85 1063.47 1352.25 1076.38 1352.85 1077.97 1320.45 1065.08 1319.85"/>
                <polygon class="cls-4" points="1090.97 1321.15 1089.38 1353.55 1102.28 1354.15 1103.88 1321.75 1090.97 1321.15"/>
                <polygon class="cls-4" points="1077.97 1320.45 1076.38 1352.85 1089.28 1353.55 1090.97 1321.15 1077.97 1320.45"/>
                <polygon class="cls-4" points="1103.88 1321.75 1102.28 1354.15 1115.28 1354.85 1116.88 1322.45 1103.88 1321.75"/>
                <polygon class="cls-4" points="1116.88 1322.45 1115.28 1354.85 1128.17 1355.45 1129.88 1323.05 1116.88 1322.45"/>
                <polygon class="cls-4" points="1129.88 1323.05 1128.28 1355.45 1141.17 1356.15 1142.78 1323.75 1129.88 1323.05"/>
                <polygon class="cls-4" points="972.77 1347.65 971.17 1380.05 984.08 1380.65 985.67 1348.35 972.77 1347.65"/>
                <polygon class="cls-4" points="985.67 1348.35 984.08 1380.65 996.98 1381.35 998.67 1348.95 985.67 1348.35"/>
                <polygon class="cls-4" points="998.67 1348.95 997.08 1381.35 1009.98 1381.95 1011.58 1349.65 998.67 1348.95"/>
                <polygon class="cls-4" points="1011.58 1349.65 1009.98 1381.95 1022.98 1382.65 1024.58 1350.25 1011.58 1349.65"/>
                <polygon class="cls-4" points="1024.58 1350.25 1022.98 1382.65 1035.88 1383.25 1037.47 1350.95 1024.58 1350.25"/>
                <polygon class="cls-4" points="1037.47 1350.95 1035.88 1383.25 1048.88 1383.95 1050.47 1351.55 1037.47 1350.95"/>
                <polygon class="cls-4" points="1050.47 1351.55 1048.88 1383.95 1061.78 1384.55 1063.38 1352.25 1050.47 1351.55"/>
                <polygon class="cls-4" points="1063.38 1352.25 1061.78 1384.55 1074.78 1385.25 1076.38 1352.85 1063.38 1352.25"/>
                <polygon class="cls-4" points="1089.38 1353.55 1087.78 1385.85 1100.67 1386.55 1102.28 1354.15 1089.38 1353.55"/>
                <polygon class="cls-4" points="1076.38 1352.85 1074.78 1385.25 1087.67 1385.85 1089.28 1353.55 1076.38 1352.85"/>
                <polygon class="cls-4" points="1102.28 1354.15 1100.67 1386.55 1113.58 1387.15 1115.17 1354.85 1102.28 1354.15"/>
                <polygon class="cls-4" points="1115.28 1354.85 1113.67 1387.15 1126.58 1387.85 1128.17 1355.45 1115.28 1354.85"/>
                <polygon class="cls-4" points="1128.17 1355.45 1126.58 1387.85 1139.47 1388.45 1141.17 1356.15 1128.17 1355.45"/>
                <path class="cls-4" d="M974.38,1315.25l-22.7-1.1s-8.5-.8-10.4,9.2l-.1,6.6,32.4,1.6Z"/>
                <polygon class="cls-4" points="941.17 1329.95 940.38 1346.05 972.77 1347.65 973.58 1331.55 941.17 1329.95"/>
                <polygon class="cls-4" points="972.77 1347.65 971.98 1363.85 939.58 1362.25 940.38 1346.05 972.77 1347.65"/>
                <path class="cls-4" d="M971.18,1380l-23.1-1.2-2.1-.1s-6.7-.6-6.9-7.6l.4-8.9,32.4,1.6Z"/>
                <path class="cls-4" d="M1142.78,1323.75l20.8,1.1s12.4,1.1,10.8,16.2v.5l-32.4-1.6Z"/>
                <polygon class="cls-4" points="1141.97 1339.95 1141.17 1356.15 1173.47 1357.75 1174.38 1341.55 1141.97 1339.95"/>
                <polygon class="cls-4" points="1141.17 1356.15 1140.38 1372.45 1172.67 1373.95 1173.47 1357.75 1141.17 1356.15"/>
                <path class="cls-4" d="M1140.38,1372.45l-.8,16.1,25.2,1.2s6.9-.1,7.5-7.2l.4-8.6Z"/>
                <g id="TEXT-1242" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 1030.68, 1357.06)">MZ-98</text>
                </g>
                <g id="TEXT-1243" data-name="TEXT">
                    <text class="cls-6" transform="translate(954.05 1376.22)">1</text>
                </g>
                <g id="TEXT-1244" data-name="TEXT">
                    <text class="cls-6" transform="translate(954.59 1359.62)">2</text>
                </g>
                <g id="TEXT-1245" data-name="TEXT">
                    <text class="cls-6" transform="translate(955.32 1344.1)">3</text>
                </g>
                <g id="TEXT-1246" data-name="TEXT">
                    <text class="cls-6" transform="translate(956.05 1329.41)">4</text>
                </g>
                <g id="TEXT-1247" data-name="TEXT">
                    <text class="cls-6" transform="translate(978.57 1337.25)">5</text>
                </g>
                <g id="TEXT-1248" data-name="TEXT">
                    <text class="cls-6" transform="translate(991.42 1337.82)">6</text>
                </g>
                <g id="TEXT-1249" data-name="TEXT">
                    <text class="cls-6" transform="translate(1004.43 1338.37)">7</text>
                </g>
                <g id="TEXT-1250" data-name="TEXT">
                    <text class="cls-6" transform="translate(1017.57 1339.27)">8</text>
                </g>
                <g id="TEXT-1251" data-name="TEXT">
                    <text class="cls-6" transform="translate(1030.18 1340.01)">9</text>
                </g>
                <g id="TEXT-1252" data-name="TEXT">
                    <text class="cls-6" transform="translate(1042.8 1340.15)">10</text>
                </g>
                <g id="TEXT-1253" data-name="TEXT">
                    <text class="cls-6" transform="translate(1055.5 1340.77)">
                        <tspan class="cls-7">1</tspan>
                        <tspan x="2.41" y="0">1</tspan>
                    </text>
                </g>
                <g id="TEXT-1254" data-name="TEXT">
                    <text class="cls-6" transform="translate(1068.43 1341.38)">12</text>
                </g>
                <g id="TEXT-1255" data-name="TEXT">
                    <text class="cls-6" transform="translate(1081.43 1342.2)">13</text>
                </g>
                <g id="TEXT-1256" data-name="TEXT">
                    <text class="cls-6" transform="translate(1094.15 1342.81)">14</text>
                </g>
                <g id="TEXT-1257" data-name="TEXT">
                    <text class="cls-6" transform="translate(1106.65 1343.37)">15</text>
                </g>
                <g id="TEXT-1258" data-name="TEXT">
                    <text class="cls-6" transform="translate(1120.44 1343.99)">16</text>
                </g>
                <g id="TEXT-1259" data-name="TEXT">
                    <text class="cls-6" transform="translate(1133.09 1344.99)">17</text>
                </g>
                <g id="TEXT-1260" data-name="TEXT">
                    <text class="cls-6" transform="translate(1154.42 1337.86)">18</text>
                </g>
                <g id="TEXT-1261" data-name="TEXT">
                    <text class="cls-6" transform="translate(1154.32 1353.17)">19</text>
                </g>
                <g id="TEXT-1262" data-name="TEXT">
                    <text class="cls-6" transform="translate(1153.59 1370.11)">20</text>
                </g>
                <g id="TEXT-1263" data-name="TEXT">
                    <text class="cls-6" transform="translate(1153.4 1385.66)">21</text>
                </g>
                <g id="TEXT-1264" data-name="TEXT">
                    <text class="cls-6" transform="translate(1131.31 1377.18)">22</text>
                </g>
                <g id="TEXT-1265" data-name="TEXT">
                    <text class="cls-6" transform="translate(1117.79 1376.41)">23</text>
                </g>
                <g id="TEXT-1266" data-name="TEXT">
                    <text class="cls-6" transform="translate(1105.38 1376.01)">24</text>
                </g>
                <g id="TEXT-1267" data-name="TEXT">
                    <text class="cls-6" transform="translate(1092.63 1374.71)">25</text>
                </g>
                <g id="TEXT-1268" data-name="TEXT">
                    <text class="cls-6" transform="translate(1079.72 1374.59)">26</text>
                </g>
                <g id="TEXT-1269" data-name="TEXT">
                    <text class="cls-6" transform="translate(1066.43 1374.01)">27</text>
                </g>
                <g id="TEXT-1270" data-name="TEXT">
                    <text class="cls-6" transform="translate(1053.48 1373.31)">28</text>
                </g>
                <g id="TEXT-1271" data-name="TEXT">
                    <text class="cls-6" transform="translate(1040.53 1372.69)">29</text>
                </g>
                <g id="TEXT-1272" data-name="TEXT">
                    <text class="cls-6" transform="translate(1027.58 1372.08)">30</text>
                </g>
                <g id="TEXT-1273" data-name="TEXT">
                    <text class="cls-6" transform="translate(1014.62 1371.46)">31</text>
                </g>
                <g id="TEXT-1274" data-name="TEXT">
                    <text class="cls-6" transform="translate(1001.67 1370.84)">32</text>
                </g>
                <g id="TEXT-1275" data-name="TEXT">
                    <text class="cls-6" transform="translate(988.72 1370.23)">33</text>
                </g>
                <g id="TEXT-1276" data-name="TEXT">
                    <text class="cls-6" transform="translate(975.77 1369.61)">34</text>
                </g>
            </g>
            <g id="MZ-64">
                <path class="cls-3" d="M725.28,1221.15l-15.3-1s-11.8-1.4-13.1,13l-2.4,46.2s-1.5,10.7,9.8,11.9l219,10.9s9.3-.1,9.8-10.9l2.4-45.9s1.7-13.8-13.2-14.6Z"/>
                <polygon class="cls-4" points="732.38 1225.05 730.77 1257.45 743.67 1258.05 745.38 1225.65 732.38 1225.05"/>
                <polygon class="cls-4" points="745.27 1225.65 743.67 1258.05 756.67 1258.75 758.27 1226.35 745.27 1225.65"/>
                <polygon class="cls-4" points="758.27 1226.35 756.67 1258.75 769.58 1259.35 771.27 1226.95 758.27 1226.35"/>
                <polygon class="cls-4" points="771.27 1226.95 769.67 1259.35 782.58 1259.95 784.17 1227.65 771.27 1226.95"/>
                <polygon class="cls-4" points="784.17 1227.65 782.58 1260.05 795.48 1260.65 797.08 1228.25 784.17 1227.65"/>
                <polygon class="cls-4" points="797.17 1228.25 795.58 1260.65 808.48 1261.25 810.08 1228.95 797.17 1228.25"/>
                <polygon class="cls-4" points="810.08 1228.95 808.48 1261.25 821.38 1261.95 823.08 1229.55 810.08 1228.95"/>
                <polygon class="cls-4" points="823.08 1229.55 821.48 1261.95 834.38 1262.55 835.98 1230.25 823.08 1229.55"/>
                <polygon class="cls-4" points="848.98 1230.85 847.38 1263.25 860.27 1263.85 861.88 1231.55 848.98 1230.85"/>
                <polygon class="cls-4" points="835.98 1230.25 834.38 1262.55 847.27 1263.25 848.88 1230.85 835.98 1230.25"/>
                <polygon class="cls-4" points="861.88 1231.55 860.27 1263.85 873.17 1264.55 874.88 1232.15 861.88 1231.55"/>
                <polygon class="cls-4" points="874.88 1232.15 873.27 1264.55 886.17 1265.15 887.77 1232.85 874.88 1232.15"/>
                <polygon class="cls-4" points="887.77 1232.85 886.17 1265.15 899.17 1265.85 900.77 1233.45 887.77 1232.85"/>
                <polygon class="cls-4" points="730.77 1257.45 729.17 1289.75 742.08 1290.45 743.67 1258.05 730.77 1257.45"/>
                <polygon class="cls-4" points="743.67 1258.05 742.08 1290.45 754.98 1291.05 756.58 1258.75 743.67 1258.05"/>
                <polygon class="cls-4" points="756.67 1258.75 755.08 1291.05 767.98 1291.75 769.58 1259.35 756.67 1258.75"/>
                <polygon class="cls-4" points="769.58 1259.35 767.98 1291.75 780.88 1292.35 782.58 1260.05 769.58 1259.35"/>
                <polygon class="cls-4" points="782.48 1260.05 780.88 1292.35 793.88 1293.05 795.48 1260.65 782.48 1260.05"/>
                <polygon class="cls-4" points="795.48 1260.65 793.88 1293.05 806.77 1293.65 808.48 1261.35 795.48 1260.65"/>
                <polygon class="cls-4" points="808.48 1261.35 806.88 1293.65 819.77 1294.35 821.38 1261.95 808.48 1261.35"/>
                <polygon class="cls-4" points="821.38 1261.95 819.77 1294.35 832.67 1294.95 834.38 1262.55 821.38 1261.95"/>
                <polygon class="cls-4" points="847.27 1263.25 845.67 1295.65 858.67 1296.25 860.27 1263.85 847.27 1263.25"/>
                <polygon class="cls-4" points="834.27 1262.55 832.67 1294.95 845.67 1295.65 847.27 1263.25 834.27 1262.55"/>
                <polygon class="cls-4" points="860.27 1263.85 858.67 1296.25 871.58 1296.95 873.17 1264.55 860.27 1263.85"/>
                <polygon class="cls-4" points="873.17 1264.55 871.58 1296.95 884.58 1297.55 886.17 1265.15 873.17 1264.55"/>
                <polygon class="cls-4" points="886.17 1265.15 884.58 1297.55 897.48 1298.25 899.08 1265.85 886.17 1265.15"/>
                <path class="cls-4" d="M732.38,1225l-22.7-1.1s-8.5-.8-10.4,9.2l-.1,6.6,32.4,1.6Z"/>
                <polygon class="cls-4" points="699.17 1239.65 698.38 1255.75 730.77 1257.45 731.58 1241.25 699.17 1239.65"/>
                <polygon class="cls-4" points="730.77 1257.45 729.98 1273.55 697.58 1271.95 698.38 1255.75 730.77 1257.45"/>
                <path class="cls-4" d="M729.18,1289.75l-23.1-1.2-2.1-.1s-6.7-.6-6.9-7.6l.4-8.9,32.4,1.6Z"/>
                <path class="cls-4" d="M900.78,1233.45l20.8,1.1s12.4,1.1,10.8,16.2v.5l-32.4-1.6Z"/>
                <polygon class="cls-4" points="899.98 1249.65 899.08 1265.85 931.48 1267.45 932.27 1251.25 899.98 1249.65"/>
                <polygon class="cls-4" points="899.08 1265.85 898.27 1282.15 930.67 1283.65 931.48 1267.45 899.08 1265.85"/>
                <path class="cls-4" d="M898.28,1282.15l-.8,16.1,25.2,1.2s6.9-.1,7.5-7.2l.4-8.6Z"/>
                <g id="TEXT-1277" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 798.57, 1269.86)">MZ-64</text>
                </g>
                <g id="INSERT-2" data-name="INSERT">
                    <g id="TEXT-1278" data-name="TEXT">
                        <text class="cls-6" transform="translate(711.89 1286.2)">1</text>
                    </g>
                    <g id="TEXT-1279" data-name="TEXT">
                        <text class="cls-6" transform="translate(712.43 1269.59)">2</text>
                    </g>
                    <g id="TEXT-1280" data-name="TEXT">
                        <text class="cls-6" transform="translate(713.15 1254.07)">3</text>
                    </g>
                    <g id="TEXT-1281" data-name="TEXT">
                        <text class="cls-6" transform="translate(713.88 1239.38)">4</text>
                    </g>
                    <g id="TEXT-1282" data-name="TEXT">
                        <text class="cls-6" transform="translate(736.41 1247.22)">5</text>
                    </g>
                    <g id="TEXT-1283" data-name="TEXT">
                        <text class="cls-6" transform="translate(749.26 1247.79)">6</text>
                    </g>
                    <g id="TEXT-1284" data-name="TEXT">
                        <text class="cls-6" transform="translate(762.26 1248.34)">7</text>
                    </g>
                    <g id="TEXT-1285" data-name="TEXT">
                        <text class="cls-6" transform="translate(775.41 1249.24)">8</text>
                    </g>
                    <g id="TEXT-1286" data-name="TEXT">
                        <text class="cls-6" transform="translate(788.01 1249.98)">9</text>
                    </g>
                    <g id="TEXT-1287" data-name="TEXT">
                        <text class="cls-6" transform="translate(800.64 1250.12)">10</text>
                    </g>
                    <g id="TEXT-1288" data-name="TEXT">
                        <text class="cls-6" transform="translate(813.34 1250.74)">
                            <tspan class="cls-7">1</tspan>
                            <tspan x="2.41" y="0">1</tspan>
                        </text>
                    </g>
                    <g id="TEXT-1289" data-name="TEXT">
                        <text class="cls-6" transform="translate(826.27 1251.35)">12</text>
                    </g>
                    <g id="TEXT-1290" data-name="TEXT">
                        <text class="cls-6" transform="translate(839.26 1252.17)">13</text>
                    </g>
                    <g id="TEXT-1291" data-name="TEXT">
                        <text class="cls-6" transform="translate(851.99 1252.78)">14</text>
                    </g>
                    <g id="TEXT-1292" data-name="TEXT">
                        <text class="cls-6" transform="translate(864.49 1253.34)">15</text>
                    </g>
                    <g id="TEXT-1293" data-name="TEXT">
                        <text class="cls-6" transform="translate(878.28 1253.97)">16</text>
                    </g>
                    <g id="TEXT-1294" data-name="TEXT">
                        <text class="cls-6" transform="translate(890.93 1254.96)">17</text>
                    </g>
                    <g id="TEXT-1295" data-name="TEXT">
                        <text class="cls-6" transform="translate(912.25 1247.83)">18</text>
                    </g>
                    <g id="TEXT-1296" data-name="TEXT">
                        <text class="cls-6" transform="translate(912.16 1263.14)">19</text>
                    </g>
                    <g id="TEXT-1297" data-name="TEXT">
                        <text class="cls-6" transform="translate(911.43 1280.08)">20</text>
                    </g>
                    <g id="TEXT-1298" data-name="TEXT">
                        <text class="cls-6" transform="translate(911.24 1295.63)">21</text>
                    </g>
                    <g id="TEXT-1299" data-name="TEXT">
                        <text class="cls-6" transform="translate(889.15 1287.15)">22</text>
                    </g>
                    <g id="TEXT-1300" data-name="TEXT">
                        <text class="cls-6" transform="translate(875.63 1286.38)">23</text>
                    </g>
                    <g id="TEXT-1301" data-name="TEXT">
                        <text class="cls-6" transform="translate(863.22 1285.98)">24</text>
                    </g>
                    <g id="TEXT-1302" data-name="TEXT">
                        <text class="cls-6" transform="translate(850.47 1284.68)">25</text>
                    </g>
                    <g id="TEXT-1303" data-name="TEXT">
                        <text class="cls-6" transform="translate(837.56 1284.56)">26</text>
                    </g>
                    <g id="TEXT-1304" data-name="TEXT">
                        <text class="cls-6" transform="translate(824.27 1283.98)">27</text>
                    </g>
                    <g id="TEXT-1305" data-name="TEXT">
                        <text class="cls-6" transform="translate(811.32 1283.28)">28</text>
                    </g>
                    <g id="TEXT-1306" data-name="TEXT">
                        <text class="cls-6" transform="translate(798.36 1282.66)">29</text>
                    </g>
                    <g id="TEXT-1307" data-name="TEXT">
                        <text class="cls-6" transform="translate(785.41 1282.05)">30</text>
                    </g>
                    <g id="TEXT-1308" data-name="TEXT">
                        <text class="cls-6" transform="translate(772.46 1281.43)">31</text>
                    </g>
                    <g id="TEXT-1309" data-name="TEXT">
                        <text class="cls-6" transform="translate(759.51 1280.81)">32</text>
                    </g>
                    <g id="TEXT-1310" data-name="TEXT">
                        <text class="cls-6" transform="translate(746.56 1280.2)">33</text>
                    </g>
                    <g id="TEXT-1311" data-name="TEXT">
                        <text class="cls-6" transform="translate(733.61 1279.58)">34</text>
                    </g>
                </g>
            </g>
            <g id="MZ-63">
                <path class="cls-3" d="M721.08,1299.55l-15.3-1s-11.8-1.4-13.1,13l-2.4,46.2s-1.5,10.7,9.8,11.9l219,10.9s9.3-.1,9.8-10.9l2.4-45.9s1.7-13.8-13.2-14.6Z"/>
                <polygon class="cls-4" points="728.27 1303.35 726.67 1335.75 739.58 1336.45 741.17 1304.05 728.27 1303.35"/>
                <polygon class="cls-4" points="741.17 1304.05 739.58 1336.45 752.48 1337.05 754.17 1304.65 741.17 1304.05"/>
                <polygon class="cls-4" points="754.17 1304.65 752.58 1337.05 765.48 1337.75 767.08 1305.35 754.17 1304.65"/>
                <polygon class="cls-4" points="767.08 1305.35 765.48 1337.75 778.48 1338.35 780.08 1305.95 767.08 1305.35"/>
                <polygon class="cls-4" points="780.08 1305.95 778.48 1338.35 791.38 1339.05 792.98 1306.65 780.08 1305.95"/>
                <polygon class="cls-4" points="792.98 1306.65 791.38 1339.05 804.38 1339.65 805.98 1307.25 792.98 1306.65"/>
                <polygon class="cls-4" points="805.98 1307.25 804.38 1339.65 817.27 1340.35 818.88 1307.95 805.98 1307.25"/>
                <polygon class="cls-4" points="818.88 1307.95 817.27 1340.35 830.27 1340.95 831.88 1308.55 818.88 1307.95"/>
                <polygon class="cls-4" points="844.77 1309.25 843.17 1341.65 856.17 1342.25 857.77 1309.85 844.77 1309.25"/>
                <polygon class="cls-4" points="831.88 1308.55 830.27 1340.95 843.17 1341.65 844.77 1309.25 831.88 1308.55"/>
                <polygon class="cls-4" points="857.77 1309.85 856.17 1342.25 869.08 1342.95 870.67 1310.55 857.77 1309.85"/>
                <polygon class="cls-4" points="870.67 1310.55 869.17 1342.95 882.08 1343.55 883.67 1311.15 870.67 1310.55"/>
                <polygon class="cls-4" points="883.67 1311.15 882.08 1343.55 894.98 1344.25 896.67 1311.85 883.67 1311.15"/>
                <polygon class="cls-4" points="726.58 1335.75 724.98 1368.15 737.98 1368.85 739.58 1336.45 726.58 1335.75"/>
                <polygon class="cls-4" points="739.58 1336.45 737.98 1368.85 750.88 1369.45 752.48 1337.05 739.58 1336.45"/>
                <polygon class="cls-4" points="752.48 1337.05 750.88 1369.45 763.88 1370.15 765.48 1337.75 752.48 1337.05"/>
                <polygon class="cls-4" points="765.48 1337.75 763.88 1370.15 776.77 1370.75 778.38 1338.35 765.48 1337.75"/>
                <polygon class="cls-4" points="778.38 1338.35 776.77 1370.75 789.67 1371.35 791.38 1339.05 778.38 1338.35"/>
                <polygon class="cls-4" points="791.38 1339.05 789.77 1371.35 802.67 1372.05 804.27 1339.65 791.38 1339.05"/>
                <polygon class="cls-4" points="804.27 1339.65 802.67 1372.05 815.67 1372.65 817.27 1340.35 804.27 1339.65"/>
                <polygon class="cls-4" points="817.27 1340.35 815.67 1372.65 828.58 1373.35 830.17 1340.95 817.27 1340.35"/>
                <polygon class="cls-4" points="843.17 1341.65 841.58 1373.95 854.48 1374.65 856.08 1342.25 843.17 1341.65"/>
                <polygon class="cls-4" points="830.17 1340.95 828.58 1373.35 841.48 1373.95 843.17 1341.65 830.17 1340.95"/>
                <polygon class="cls-4" points="856.08 1342.25 854.48 1374.65 867.48 1375.25 869.08 1342.95 856.08 1342.25"/>
                <polygon class="cls-4" points="869.08 1342.95 867.48 1375.25 880.38 1375.95 882.08 1343.55 869.08 1342.95"/>
                <polygon class="cls-4" points="882.08 1343.55 880.48 1375.95 893.38 1376.55 894.98 1344.25 882.08 1343.55"/>
                <path class="cls-4" d="M728.28,1303.35l-22.7-1.1s-8.5-.8-10.4,9.2l-.1,6.6,32.4,1.6Z"/>
                <polygon class="cls-4" points="695.08 1318.05 694.27 1334.15 726.58 1335.75 727.38 1319.65 695.08 1318.05"/>
                <polygon class="cls-4" points="726.58 1335.75 725.77 1351.95 693.48 1350.35 694.27 1334.15 726.58 1335.75"/>
                <path class="cls-4" d="M725,1368.15l-23.1-1.2-2.1-.1s-6.7-.6-6.9-7.6l.4-8.9,32.4,1.6Z"/>
                <path class="cls-4" d="M896.68,1311.85l20.8,1.1s12.4,1.1,10.8,16.2v.5l-32.4-1.6Z"/>
                <polygon class="cls-4" points="895.77 1328.05 894.98 1344.25 927.38 1345.85 928.17 1329.65 895.77 1328.05"/>
                <polygon class="cls-4" points="894.98 1344.25 894.17 1360.55 926.58 1362.05 927.38 1345.85 894.98 1344.25"/>
                <path class="cls-4" d="M894.18,1360.55l-.8,16,25.2,1.2s6.9-.1,7.5-7.2l.4-8.6Z"/>
                <g id="TEXT-1312" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 794.68, 1347.56)">MZ-63</text>
                </g>
                <g id="TEXT-1313" data-name="TEXT">
                    <text class="cls-6" transform="translate(708 1363.9)">1</text>
                </g>
                <g id="TEXT-1314" data-name="TEXT">
                    <text class="cls-6" transform="translate(708.54 1347.29)">2</text>
                </g>
                <g id="TEXT-1315" data-name="TEXT">
                    <text class="cls-6" transform="translate(709.26 1331.77)">3</text>
                </g>
                <g id="TEXT-1316" data-name="TEXT">
                    <text class="cls-6" transform="translate(709.99 1317.08)">4</text>
                </g>
                <g id="TEXT-1317" data-name="TEXT">
                    <text class="cls-6" transform="translate(732.51 1324.92)">5</text>
                </g>
                <g id="TEXT-1318" data-name="TEXT">
                    <text class="cls-6" transform="translate(745.37 1325.49)">6</text>
                </g>
                <g id="TEXT-1319" data-name="TEXT">
                    <text class="cls-6" transform="translate(758.37 1326.04)">7</text>
                </g>
                <g id="TEXT-1320" data-name="TEXT">
                    <text class="cls-6" transform="translate(771.51 1326.95)">8</text>
                </g>
                <g id="TEXT-1321" data-name="TEXT">
                    <text class="cls-6" transform="translate(784.12 1327.68)">9</text>
                </g>
                <g id="TEXT-1322" data-name="TEXT">
                    <text class="cls-6" transform="translate(796.74 1327.83)">10</text>
                </g>
                <g id="TEXT-1323" data-name="TEXT">
                    <text class="cls-6" transform="translate(809.44 1328.44)">
                        <tspan class="cls-7">1</tspan>
                        <tspan x="2.41" y="0">1</tspan>
                    </text>
                </g>
                <g id="TEXT-1324" data-name="TEXT">
                    <text class="cls-6" transform="translate(822.38 1329.05)">12</text>
                </g>
                <g id="TEXT-1325" data-name="TEXT">
                    <text class="cls-6" transform="translate(835.37 1329.88)">13</text>
                </g>
                <g id="TEXT-1326" data-name="TEXT">
                    <text class="cls-6" transform="translate(848.1 1330.48)">14</text>
                </g>
                <g id="TEXT-1327" data-name="TEXT">
                    <text class="cls-6" transform="translate(860.6 1331.04)">15</text>
                </g>
                <g id="TEXT-1328" data-name="TEXT">
                    <text class="cls-6" transform="translate(874.38 1331.67)">16</text>
                </g>
                <g id="TEXT-1329" data-name="TEXT">
                    <text class="cls-6" transform="translate(887.04 1332.66)">17</text>
                </g>
                <g id="TEXT-1330" data-name="TEXT">
                    <text class="cls-6" transform="translate(908.36 1325.53)">18</text>
                </g>
                <g id="TEXT-1331" data-name="TEXT">
                    <text class="cls-6" transform="translate(908.27 1340.84)">19</text>
                </g>
                <g id="TEXT-1332" data-name="TEXT">
                    <text class="cls-6" transform="translate(907.53 1357.79)">20</text>
                </g>
                <g id="TEXT-1333" data-name="TEXT">
                    <text class="cls-6" transform="translate(907.34 1373.33)">21</text>
                </g>
                <g id="TEXT-1334" data-name="TEXT">
                    <text class="cls-6" transform="translate(885.26 1364.85)">22</text>
                </g>
                <g id="TEXT-1335" data-name="TEXT">
                    <text class="cls-6" transform="translate(871.74 1364.08)">23</text>
                </g>
                <g id="TEXT-1336" data-name="TEXT">
                    <text class="cls-6" transform="translate(859.33 1363.68)">24</text>
                </g>
                <g id="TEXT-1337" data-name="TEXT">
                    <text class="cls-6" transform="translate(846.58 1362.38)">25</text>
                </g>
                <g id="TEXT-1338" data-name="TEXT">
                    <text class="cls-6" transform="translate(833.67 1362.27)">26</text>
                </g>
                <g id="TEXT-1339" data-name="TEXT">
                    <text class="cls-6" transform="translate(820.37 1361.68)">27</text>
                </g>
                <g id="TEXT-1340" data-name="TEXT">
                    <text class="cls-6" transform="translate(807.42 1360.98)">28</text>
                </g>
                <g id="TEXT-1341" data-name="TEXT">
                    <text class="cls-6" transform="translate(794.47 1360.37)">29</text>
                </g>
                <g id="TEXT-1342" data-name="TEXT">
                    <text class="cls-6" transform="translate(781.52 1359.75)">30</text>
                </g>
                <g id="TEXT-1343" data-name="TEXT">
                    <text class="cls-6" transform="translate(768.57 1359.13)">31</text>
                </g>
                <g id="TEXT-1344" data-name="TEXT">
                    <text class="cls-6" transform="translate(755.62 1358.52)">32</text>
                </g>
                <g id="TEXT-1345" data-name="TEXT">
                    <text class="cls-6" transform="translate(742.66 1357.9)">33</text>
                </g>
                <g id="TEXT-1346" data-name="TEXT">
                    <text class="cls-6" transform="translate(729.71 1357.28)">34</text>
                </g>
            </g>
            <g id="MZ-146">
                <path class="cls-3" d="M1391,1020.75l-15.3-1s-11.8-1.4-13.1,13l-2.4,46.2s-1.5,10.7,9.8,11.9l219,10.9s9.3-.1,9.8-10.9l2.4-45.9s1.7-13.8-13.2-14.6Z"/>
                <polygon class="cls-4" points="1398.17 1024.65 1396.58 1057.05 1409.47 1057.75 1411.08 1025.35 1398.17 1024.65"/>
                <polygon class="cls-4" points="1411.08 1025.35 1409.47 1057.75 1422.38 1058.35 1424.08 1025.95 1411.08 1025.35"/>
                <polygon class="cls-4" points="1424.08 1025.95 1422.47 1058.35 1435.38 1059.05 1436.97 1026.65 1424.08 1025.95"/>
                <polygon class="cls-4" points="1436.97 1026.65 1435.38 1059.05 1448.38 1059.65 1449.97 1027.25 1436.97 1026.65"/>
                <polygon class="cls-4" points="1449.97 1027.25 1448.38 1059.65 1461.28 1060.35 1462.88 1027.95 1449.97 1027.25"/>
                <polygon class="cls-4" points="1462.88 1027.95 1461.28 1060.35 1474.28 1060.95 1475.88 1028.55 1462.88 1027.95"/>
                <polygon class="cls-4" points="1475.88 1028.55 1474.28 1060.95 1487.17 1061.65 1488.78 1029.25 1475.88 1028.55"/>
                <polygon class="cls-4" points="1488.78 1029.25 1487.17 1061.65 1500.17 1062.25 1501.78 1029.85 1488.78 1029.25"/>
                <polygon class="cls-4" points="1514.67 1030.55 1513.17 1062.95 1526.08 1063.55 1527.67 1031.15 1514.67 1030.55"/>
                <polygon class="cls-4" points="1501.78 1029.85 1500.17 1062.25 1513.08 1062.95 1514.67 1030.55 1501.78 1029.85"/>
                <polygon class="cls-4" points="1527.67 1031.15 1526.08 1063.55 1538.97 1064.15 1540.58 1031.85 1527.67 1031.15"/>
                <polygon class="cls-4" points="1540.67 1031.85 1539.08 1064.15 1551.97 1064.85 1553.58 1032.45 1540.67 1031.85"/>
                <polygon class="cls-4" points="1553.58 1032.45 1551.97 1064.85 1564.88 1065.45 1566.58 1033.15 1553.58 1032.45"/>
                <polygon class="cls-4" points="1396.47 1057.05 1394.88 1089.45 1407.88 1090.05 1409.47 1057.75 1396.47 1057.05"/>
                <polygon class="cls-4" points="1409.47 1057.75 1407.88 1090.05 1420.78 1090.75 1422.38 1058.35 1409.47 1057.75"/>
                <polygon class="cls-4" points="1422.38 1058.35 1420.78 1090.75 1433.78 1091.35 1435.38 1059.05 1422.38 1058.35"/>
                <polygon class="cls-4" points="1435.38 1059.05 1433.78 1091.35 1446.67 1092.05 1448.28 1059.65 1435.38 1059.05"/>
                <polygon class="cls-4" points="1448.28 1059.65 1446.67 1092.05 1459.58 1092.65 1461.28 1060.35 1448.28 1059.65"/>
                <polygon class="cls-4" points="1461.28 1060.35 1459.67 1092.65 1472.58 1093.35 1474.17 1060.95 1461.28 1060.35"/>
                <polygon class="cls-4" points="1474.17 1060.95 1472.58 1093.35 1485.58 1093.95 1487.17 1061.65 1474.17 1060.95"/>
                <polygon class="cls-4" points="1487.17 1061.65 1485.58 1093.95 1498.47 1094.65 1500.08 1062.25 1487.17 1061.65"/>
                <polygon class="cls-4" points="1513.08 1062.95 1511.47 1095.25 1524.38 1095.95 1525.97 1063.55 1513.08 1062.95"/>
                <polygon class="cls-4" points="1500.08 1062.25 1498.47 1094.65 1511.38 1095.25 1513.08 1062.95 1500.08 1062.25"/>
                <polygon class="cls-4" points="1525.97 1063.55 1524.38 1095.95 1537.38 1096.55 1538.97 1064.25 1525.97 1063.55"/>
                <polygon class="cls-4" points="1538.97 1064.25 1537.38 1096.55 1550.28 1097.25 1551.97 1064.85 1538.97 1064.25"/>
                <polygon class="cls-4" points="1551.97 1064.85 1550.38 1097.25 1563.28 1097.85 1564.88 1065.55 1551.97 1064.85"/>
                <path class="cls-4" d="M1398.18,1024.65l-22.7-1.1s-8.5-.8-10.4,9.2l-.1,6.6,32.4,1.6Z"/>
                <polygon class="cls-4" points="1364.97 1039.35 1364.17 1055.45 1396.47 1057.05 1397.28 1040.95 1364.97 1039.35"/>
                <polygon class="cls-4" points="1396.47 1057.05 1395.67 1073.25 1363.38 1071.65 1364.17 1055.45 1396.47 1057.05"/>
                <path class="cls-4" d="M1394.88,1089.45l-23.1-1.2-2.1-.1s-6.7-.6-6.9-7.6l.4-8.9,32.4,1.6Z"/>
                <path class="cls-4" d="M1566.58,1033.15l20.8,1.1s12.4,1.1,10.8,16.2v.5l-32.4-1.6Z"/>
                <polygon class="cls-4" points="1565.67 1049.35 1564.88 1065.55 1597.28 1067.15 1598.08 1050.95 1565.67 1049.35"/>
                <polygon class="cls-4" points="1564.88 1065.55 1564.08 1081.85 1596.47 1083.35 1597.28 1067.15 1564.88 1065.55"/>
                <path class="cls-4" d="M1564.08,1081.85l-.8,16.1,25.2,1.2s6.9-.1,7.5-7.2l.4-8.6Z"/>
                <g id="TEXT-1347" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 1475.22, 1068.68)">MZ-146</text>
                </g>
                <g id="INSERT-3" data-name="INSERT">
                    <g id="TEXT-1348" data-name="TEXT">
                        <text class="cls-6" transform="translate(1377.56 1085.85)">1</text>
                    </g>
                    <g id="TEXT-1349" data-name="TEXT">
                        <text class="cls-6" transform="translate(1378.1 1069.25)">2</text>
                    </g>
                    <g id="TEXT-1350" data-name="TEXT">
                        <text class="cls-6" transform="translate(1378.82 1053.73)">3</text>
                    </g>
                    <g id="TEXT-1351" data-name="TEXT">
                        <text class="cls-6" transform="translate(1379.55 1039.04)">4</text>
                    </g>
                    <g id="TEXT-1352" data-name="TEXT">
                        <text class="cls-6" transform="translate(1402.08 1046.88)">5</text>
                    </g>
                    <g id="TEXT-1353" data-name="TEXT">
                        <text class="cls-6" transform="translate(1414.93 1047.45)">6</text>
                    </g>
                    <g id="TEXT-1354" data-name="TEXT">
                        <text class="cls-6" transform="translate(1427.94 1048)">7</text>
                    </g>
                    <g id="TEXT-1355" data-name="TEXT">
                        <text class="cls-6" transform="translate(1441.08 1048.9)">8</text>
                    </g>
                    <g id="TEXT-1356" data-name="TEXT">
                        <text class="cls-6" transform="translate(1453.68 1049.64)">9</text>
                    </g>
                    <g id="TEXT-1357" data-name="TEXT">
                        <text class="cls-6" transform="translate(1466.31 1049.78)">10</text>
                    </g>
                    <g id="TEXT-1358" data-name="TEXT">
                        <text class="cls-6" transform="translate(1479.01 1050.4)">
                            <tspan class="cls-7">1</tspan>
                            <tspan x="2.41" y="0">1</tspan>
                        </text>
                    </g>
                    <g id="TEXT-1359" data-name="TEXT">
                        <text class="cls-6" transform="translate(1491.94 1051.01)">12</text>
                    </g>
                    <g id="TEXT-1360" data-name="TEXT">
                        <text class="cls-6" transform="translate(1504.93 1051.83)">13</text>
                    </g>
                    <g id="TEXT-1361" data-name="TEXT">
                        <text class="cls-6" transform="translate(1517.66 1052.44)">14</text>
                    </g>
                    <g id="TEXT-1362" data-name="TEXT">
                        <text class="cls-6" transform="translate(1530.16 1053)">15</text>
                    </g>
                    <g id="TEXT-1363" data-name="TEXT">
                        <text class="cls-6" transform="translate(1543.95 1053.62)">16</text>
                    </g>
                    <g id="TEXT-1364" data-name="TEXT">
                        <text class="cls-6" transform="translate(1556.6 1054.62)">17</text>
                    </g>
                    <g id="TEXT-1365" data-name="TEXT">
                        <text class="cls-6" transform="translate(1577.92 1047.49)">18</text>
                    </g>
                    <g id="TEXT-1366" data-name="TEXT">
                        <text class="cls-6" transform="translate(1577.83 1062.8)">19</text>
                    </g>
                    <g id="TEXT-1367" data-name="TEXT">
                        <text class="cls-6" transform="translate(1577.1 1079.74)">20</text>
                    </g>
                    <g id="TEXT-1368" data-name="TEXT">
                        <text class="cls-6" transform="translate(1576.91 1095.29)">21</text>
                    </g>
                    <g id="TEXT-1369" data-name="TEXT">
                        <text class="cls-6" transform="translate(1554.82 1086.81)">22</text>
                    </g>
                    <g id="TEXT-1370" data-name="TEXT">
                        <text class="cls-6" transform="translate(1541.3 1086.04)">23</text>
                    </g>
                    <g id="TEXT-1371" data-name="TEXT">
                        <text class="cls-6" transform="translate(1528.89 1085.64)">24</text>
                    </g>
                    <g id="TEXT-1372" data-name="TEXT">
                        <text class="cls-6" transform="translate(1516.14 1084.34)">25</text>
                    </g>
                    <g id="TEXT-1373" data-name="TEXT">
                        <text class="cls-6" transform="translate(1503.23 1084.22)">26</text>
                    </g>
                    <g id="TEXT-1374" data-name="TEXT">
                        <text class="cls-6" transform="translate(1489.94 1083.64)">27</text>
                    </g>
                    <g id="TEXT-1375" data-name="TEXT">
                        <text class="cls-6" transform="translate(1476.99 1082.94)">28</text>
                    </g>
                    <g id="TEXT-1376" data-name="TEXT">
                        <text class="cls-6" transform="translate(1464.04 1082.32)">29</text>
                    </g>
                    <g id="TEXT-1377" data-name="TEXT">
                        <text class="cls-6" transform="translate(1451.08 1081.71)">30</text>
                    </g>
                    <g id="TEXT-1378" data-name="TEXT">
                        <text class="cls-6" transform="translate(1438.13 1081.09)">31</text>
                    </g>
                    <g id="TEXT-1379" data-name="TEXT">
                        <text class="cls-6" transform="translate(1425.18 1080.47)">32</text>
                    </g>
                    <g id="TEXT-1380" data-name="TEXT">
                        <text class="cls-6" transform="translate(1412.23 1079.86)">33</text>
                    </g>
                    <g id="TEXT-1381" data-name="TEXT">
                        <text class="cls-6" transform="translate(1399.28 1079.24)">34</text>
                    </g>
                </g>
            </g>
            <g id="MZ-146-2" data-name="MZ-146">
                <path class="cls-3" d="M1394.46,942.62l-15.3-1s-11.8-1.4-13.1,13l-2.4,46.2s-1.5,10.7,9.8,11.9l219,10.9s9.3-.1,9.8-10.9l2.21-42.33a5.59,5.59,0,0,0-.62-2.9c-1.84-3.5-8-12-25.49-15.84a5.27,5.27,0,0,0-.87-.12Z"/>
                <polygon class="cls-4" points="1401.66 946.52 1400.06 978.92 1412.96 979.62 1414.56 947.22 1401.66 946.52"/>
                <polygon class="cls-4" points="1414.56 947.22 1412.96 979.62 1425.86 980.22 1427.56 947.82 1414.56 947.22"/>
                <polygon class="cls-4" points="1427.56 947.82 1425.96 980.22 1438.86 980.92 1440.46 948.52 1427.56 947.82"/>
                <polygon class="cls-4" points="1440.46 948.52 1438.86 980.92 1451.86 981.52 1453.46 949.12 1440.46 948.52"/>
                <polygon class="cls-4" points="1453.46 949.12 1451.86 981.52 1464.76 982.22 1466.36 949.82 1453.46 949.12"/>
                <polygon class="cls-4" points="1466.36 949.82 1464.76 982.22 1477.76 982.82 1479.36 950.42 1466.36 949.82"/>
                <polygon class="cls-4" points="1479.36 950.42 1477.76 982.82 1490.66 983.52 1492.26 951.12 1479.36 950.42"/>
                <polygon class="cls-4" points="1492.26 951.12 1490.66 983.52 1503.66 984.12 1505.26 951.72 1492.26 951.12"/>
                <polygon class="cls-4" points="1518.16 952.42 1516.66 984.82 1529.56 985.42 1531.16 953.02 1518.16 952.42"/>
                <polygon class="cls-4" points="1505.26 951.72 1503.66 984.12 1516.56 984.82 1518.16 952.42 1505.26 951.72"/>
                <polygon class="cls-4" points="1531.16 953.02 1529.56 985.42 1542.46 986.02 1544.06 953.72 1531.16 953.02"/>
                <polygon class="cls-4" points="1544.16 953.72 1542.56 986.02 1555.46 986.72 1557.06 954.32 1544.16 953.72"/>
                <polygon class="cls-4" points="1557.06 954.32 1555.46 986.72 1568.36 987.32 1570.06 955.02 1557.06 954.32"/>
                <polygon class="cls-4" points="1399.96 978.92 1398.36 1011.32 1411.36 1011.92 1412.96 979.62 1399.96 978.92"/>
                <polygon class="cls-4" points="1412.96 979.62 1411.36 1011.92 1424.26 1012.62 1425.86 980.22 1412.96 979.62"/>
                <polygon class="cls-4" points="1425.86 980.22 1424.26 1012.62 1437.26 1013.22 1438.86 980.92 1425.86 980.22"/>
                <polygon class="cls-4" points="1438.86 980.92 1437.26 1013.22 1450.16 1013.92 1451.76 981.52 1438.86 980.92"/>
                <polygon class="cls-4" points="1451.76 981.52 1450.16 1013.92 1463.06 1014.52 1464.76 982.22 1451.76 981.52"/>
                <polygon class="cls-4" points="1464.76 982.22 1463.16 1014.52 1476.06 1015.22 1477.66 982.82 1464.76 982.22"/>
                <polygon class="cls-4" points="1477.66 982.82 1476.06 1015.22 1489.06 1015.82 1490.66 983.52 1477.66 982.82"/>
                <polygon class="cls-4" points="1490.66 983.52 1489.06 1015.82 1501.96 1016.52 1503.56 984.12 1490.66 983.52"/>
                <polygon class="cls-4" points="1516.56 984.82 1514.96 1017.12 1527.86 1017.82 1529.46 985.42 1516.56 984.82"/>
                <polygon class="cls-4" points="1503.56 984.12 1501.96 1016.52 1514.86 1017.12 1516.56 984.82 1503.56 984.12"/>
                <polygon class="cls-4" points="1529.46 985.42 1527.86 1017.82 1540.86 1018.42 1542.46 986.12 1529.46 985.42"/>
                <polygon class="cls-4" points="1542.46 986.12 1540.86 1018.42 1553.76 1019.12 1555.46 986.72 1542.46 986.12"/>
                <polygon class="cls-4" points="1555.46 986.72 1553.86 1019.12 1566.76 1019.72 1568.36 987.42 1555.46 986.72"/>
                <path class="cls-4" d="M1401.66,946.52l-22.7-1.1s-8.5-.8-10.4,9.2l-.1,6.6,32.4,1.6Z"/>
                <polygon class="cls-4" points="1368.46 961.22 1367.66 977.32 1399.96 978.92 1400.76 962.82 1368.46 961.22"/>
                <polygon class="cls-4" points="1399.96 978.92 1399.16 995.12 1366.86 993.52 1367.66 977.32 1399.96 978.92"/>
                <path class="cls-4" d="M1398.36,1011.32l-23.1-1.2-2.1-.1s-6.7-.6-6.9-7.6l.4-8.9,32.4,1.6Z"/>
                <path class="cls-4" d="M1570.06,955l8.19.75s17.1,3.43,22.72,12.26a3.75,3.75,0,0,1,.59,2v2.79l-32.3-1.6Z"/>
                <polygon class="cls-4" points="1569.16 971.22 1568.36 987.42 1600.76 989.02 1601.56 972.82 1569.16 971.22"/>
                <polygon class="cls-4" points="1568.36 987.42 1567.56 1003.72 1599.96 1005.22 1600.76 989.02 1568.36 987.42"/>
                <path class="cls-4" d="M1567.56,1003.72l-.8,16.1,25.2,1.2s6.9-.1,7.5-7.2l.4-8.6Z"/>
                <g id="TEXT-1382" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 1478.7, 990.54)">MZ-147</text>
                </g>
                <g id="INSERT-4" data-name="INSERT">
                    <g id="TEXT-1383" data-name="TEXT">
                        <text class="cls-6" transform="translate(1381.05 1007.72)">1</text>
                    </g>
                    <g id="TEXT-1384" data-name="TEXT">
                        <text class="cls-6" transform="translate(1381.58 991.12)">2</text>
                    </g>
                    <g id="TEXT-1385" data-name="TEXT">
                        <text class="cls-6" transform="translate(1382.31 975.6)">3</text>
                    </g>
                    <g id="TEXT-1386" data-name="TEXT">
                        <text class="cls-6" transform="translate(1383.04 960.91)">4</text>
                    </g>
                    <g id="TEXT-1387" data-name="TEXT">
                        <text class="cls-6" transform="translate(1405.56 968.75)">5</text>
                    </g>
                    <g id="TEXT-1388" data-name="TEXT">
                        <text class="cls-6" transform="translate(1418.42 969.32)">6</text>
                    </g>
                    <g id="TEXT-1389" data-name="TEXT">
                        <text class="cls-6" transform="translate(1431.42 969.86)">7</text>
                    </g>
                    <g id="TEXT-1390" data-name="TEXT">
                        <text class="cls-6" transform="translate(1444.56 970.77)">8</text>
                    </g>
                    <g id="TEXT-1391" data-name="TEXT">
                        <text class="cls-6" transform="translate(1457.17 971.51)">9</text>
                    </g>
                    <g id="TEXT-1392" data-name="TEXT">
                        <text class="cls-6" transform="translate(1469.79 971.65)">10</text>
                    </g>
                    <g id="TEXT-1393" data-name="TEXT">
                        <text class="cls-6" transform="translate(1482.49 972.27)">
                            <tspan class="cls-7">1</tspan>
                            <tspan x="2.41" y="0">1</tspan>
                        </text>
                    </g>
                    <g id="TEXT-1394" data-name="TEXT">
                        <text class="cls-6" transform="translate(1495.43 972.88)">12</text>
                    </g>
                    <g id="TEXT-1395" data-name="TEXT">
                        <text class="cls-6" transform="translate(1508.42 973.7)">13</text>
                    </g>
                    <g id="TEXT-1396" data-name="TEXT">
                        <text class="cls-6" transform="translate(1521.15 974.31)">14</text>
                    </g>
                    <g id="TEXT-1397" data-name="TEXT">
                        <text class="cls-6" transform="translate(1533.65 974.86)">15</text>
                    </g>
                    <g id="TEXT-1398" data-name="TEXT">
                        <text class="cls-6" transform="translate(1547.43 975.49)">16</text>
                    </g>
                    <g id="TEXT-1399" data-name="TEXT">
                        <text class="cls-6" transform="translate(1560.08 976.49)">17</text>
                    </g>
                    <g id="TEXT-1400" data-name="TEXT">
                        <text class="cls-6" transform="translate(1581.41 969.36)">18</text>
                    </g>
                    <g id="TEXT-1401" data-name="TEXT">
                        <text class="cls-6" transform="translate(1581.31 984.67)">19</text>
                    </g>
                    <g id="TEXT-1402" data-name="TEXT">
                        <text class="cls-6" transform="translate(1580.58 1001.61)">20</text>
                    </g>
                    <g id="TEXT-1403" data-name="TEXT">
                        <text class="cls-6" transform="translate(1580.39 1017.16)">21</text>
                    </g>
                    <g id="TEXT-1404" data-name="TEXT">
                        <text class="cls-6" transform="translate(1558.3 1008.68)">22</text>
                    </g>
                    <g id="TEXT-1405" data-name="TEXT">
                        <text class="cls-6" transform="translate(1544.78 1007.91)">23</text>
                    </g>
                    <g id="TEXT-1406" data-name="TEXT">
                        <text class="cls-6" transform="translate(1532.38 1007.51)">24</text>
                    </g>
                    <g id="TEXT-1407" data-name="TEXT">
                        <text class="cls-6" transform="translate(1519.62 1006.21)">25</text>
                    </g>
                    <g id="TEXT-1408" data-name="TEXT">
                        <text class="cls-6" transform="translate(1506.72 1006.09)">26</text>
                    </g>
                    <g id="TEXT-1409" data-name="TEXT">
                        <text class="cls-6" transform="translate(1493.42 1005.51)">27</text>
                    </g>
                    <g id="TEXT-1410" data-name="TEXT">
                        <text class="cls-6" transform="translate(1480.47 1004.81)">28</text>
                    </g>
                    <g id="TEXT-1411" data-name="TEXT">
                        <text class="cls-6" transform="translate(1467.52 1004.19)">29</text>
                    </g>
                    <g id="TEXT-1412" data-name="TEXT">
                        <text class="cls-6" transform="translate(1454.57 1003.58)">30</text>
                    </g>
                    <g id="TEXT-1413" data-name="TEXT">
                        <text class="cls-6" transform="translate(1441.62 1002.96)">31</text>
                    </g>
                    <g id="TEXT-1414" data-name="TEXT">
                        <text class="cls-6" transform="translate(1428.66 1002.34)">32</text>
                    </g>
                    <g id="TEXT-1415" data-name="TEXT">
                        <text class="cls-6" transform="translate(1415.71 1001.73)">33</text>
                    </g>
                    <g id="TEXT-1416" data-name="TEXT">
                        <text class="cls-6" transform="translate(1402.76 1001.11)">34</text>
                    </g>
                </g>
            </g>
            <g id="MZ-145">
                <path class="cls-3" d="M1386.88,1099.15l-15.3-1s-11.8-1.4-13.1,13l-2.4,46.2s-1.5,10.7,9.8,11.9l219,10.9s9.3-.1,9.8-10.9l2.4-45.9s1.7-13.8-13.2-14.6Z"/>
                <polygon class="cls-4" points="1394.08 1103.05 1392.47 1135.45 1405.38 1136.05 1406.97 1103.75 1394.08 1103.05"/>
                <polygon class="cls-4" points="1406.97 1103.75 1405.38 1136.05 1418.28 1136.75 1419.88 1104.35 1406.97 1103.75"/>
                <polygon class="cls-4" points="1419.97 1104.35 1418.38 1136.75 1431.28 1137.35 1432.88 1105.05 1419.97 1104.35"/>
                <polygon class="cls-4" points="1432.88 1105.05 1431.28 1137.35 1444.17 1138.05 1445.88 1105.65 1432.88 1105.05"/>
                <polygon class="cls-4" points="1445.78 1105.65 1444.17 1138.05 1457.17 1138.65 1458.78 1106.25 1445.78 1105.65"/>
                <polygon class="cls-4" points="1458.78 1106.25 1457.17 1138.65 1470.08 1139.35 1471.78 1106.95 1458.78 1106.25"/>
                <polygon class="cls-4" points="1471.78 1106.95 1470.17 1139.35 1483.08 1139.95 1484.67 1107.55 1471.78 1106.95"/>
                <polygon class="cls-4" points="1484.67 1107.55 1483.08 1139.95 1495.97 1140.65 1497.67 1108.25 1484.67 1107.55"/>
                <polygon class="cls-4" points="1510.58 1108.85 1508.97 1141.25 1521.88 1141.95 1523.58 1109.55 1510.58 1108.85"/>
                <polygon class="cls-4" points="1497.58 1108.25 1495.97 1140.65 1508.97 1141.25 1510.58 1108.85 1497.58 1108.25"/>
                <polygon class="cls-4" points="1523.47 1109.55 1521.88 1141.95 1534.88 1142.55 1536.47 1110.15 1523.47 1109.55"/>
                <polygon class="cls-4" points="1536.47 1110.15 1534.88 1142.55 1547.78 1143.25 1549.47 1110.85 1536.47 1110.15"/>
                <polygon class="cls-4" points="1549.47 1110.85 1547.88 1143.25 1560.78 1143.85 1562.38 1111.45 1549.47 1110.85"/>
                <polygon class="cls-4" points="1392.38 1135.45 1390.78 1167.85 1403.67 1168.45 1405.38 1136.05 1392.38 1135.45"/>
                <polygon class="cls-4" points="1405.28 1136.05 1403.67 1168.45 1416.67 1169.15 1418.28 1136.75 1405.28 1136.05"/>
                <polygon class="cls-4" points="1418.28 1136.75 1416.67 1169.15 1429.58 1169.75 1431.28 1137.35 1418.28 1136.75"/>
                <polygon class="cls-4" points="1431.28 1137.35 1429.67 1169.75 1442.58 1170.45 1444.17 1138.05 1431.28 1137.35"/>
                <polygon class="cls-4" points="1444.17 1138.05 1442.58 1170.45 1455.47 1171.05 1457.08 1138.65 1444.17 1138.05"/>
                <polygon class="cls-4" points="1457.17 1138.65 1455.58 1171.05 1468.47 1171.75 1470.08 1139.35 1457.17 1138.65"/>
                <polygon class="cls-4" points="1470.08 1139.35 1468.47 1171.75 1481.38 1172.35 1483.08 1139.95 1470.08 1139.35"/>
                <polygon class="cls-4" points="1483.08 1139.95 1481.47 1172.35 1494.38 1173.05 1495.97 1140.65 1483.08 1139.95"/>
                <polygon class="cls-4" points="1508.97 1141.25 1507.38 1173.65 1520.28 1174.25 1521.88 1141.95 1508.97 1141.25"/>
                <polygon class="cls-4" points="1495.97 1140.65 1494.38 1173.05 1507.28 1173.65 1508.88 1141.25 1495.97 1140.65"/>
                <polygon class="cls-4" points="1521.88 1141.95 1520.28 1174.35 1533.17 1174.95 1534.78 1142.55 1521.88 1141.95"/>
                <polygon class="cls-4" points="1534.88 1142.55 1533.28 1174.95 1546.17 1175.55 1547.78 1143.25 1534.88 1142.55"/>
                <polygon class="cls-4" points="1547.78 1143.25 1546.17 1175.55 1559.17 1176.25 1560.78 1143.85 1547.78 1143.25"/>
                <path class="cls-4" d="M1394.08,1103l-22.7-1.1s-8.5-.8-10.4,9.2l-.1,6.6,32.4,1.6Z"/>
                <polygon class="cls-4" points="1360.78 1117.75 1360.08 1133.85 1392.38 1135.45 1393.17 1119.35 1360.78 1117.75"/>
                <polygon class="cls-4" points="1392.38 1135.45 1391.58 1151.65 1359.17 1149.95 1360.08 1133.85 1392.38 1135.45"/>
                <path class="cls-4" d="M1390.78,1167.85l-23.1-1.2-2.1-.1s-6.7-.6-6.9-7.6l.4-8.9,32.4,1.6Z"/>
                <path class="cls-4" d="M1562.38,1111.45l20.8,1.1s12.4,1.1,10.8,16.2v.5l-32.4-1.6Z"/>
                <polygon class="cls-4" points="1561.58 1127.65 1560.78 1143.85 1593.17 1145.45 1593.97 1129.25 1561.58 1127.65"/>
                <polygon class="cls-4" points="1560.78 1143.85 1559.97 1160.15 1592.28 1161.65 1593.17 1145.45 1560.78 1143.85"/>
                <path class="cls-4" d="M1560,1160.15l-.8,16.1,25.2,1.2s6.9-.1,7.5-7.2l.4-8.6Z"/>
                <g id="TEXT-1417" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 1471.32, 1146.38)">MZ-145</text>
                </g>
                <g id="INSERT-5" data-name="INSERT">
                    <g id="TEXT-1418" data-name="TEXT">
                        <text class="cls-6" transform="translate(1373.67 1163.56)">1</text>
                    </g>
                    <g id="TEXT-1419" data-name="TEXT">
                        <text class="cls-6" transform="translate(1374.21 1146.95)">2</text>
                    </g>
                    <g id="TEXT-1420" data-name="TEXT">
                        <text class="cls-6" transform="translate(1374.93 1131.43)">3</text>
                    </g>
                    <g id="TEXT-1421" data-name="TEXT">
                        <text class="cls-6" transform="translate(1375.66 1116.74)">4</text>
                    </g>
                    <g id="TEXT-1422" data-name="TEXT">
                        <text class="cls-6" transform="translate(1398.18 1124.58)">5</text>
                    </g>
                    <g id="TEXT-1423" data-name="TEXT">
                        <text class="cls-6" transform="translate(1411.04 1125.15)">6</text>
                    </g>
                    <g id="TEXT-1424" data-name="TEXT">
                        <text class="cls-6" transform="translate(1424.04 1125.7)">7</text>
                    </g>
                    <g id="TEXT-1425" data-name="TEXT">
                        <text class="cls-6" transform="translate(1437.19 1126.61)">8</text>
                    </g>
                    <g id="TEXT-1426" data-name="TEXT">
                        <text class="cls-6" transform="translate(1449.79 1127.34)">9</text>
                    </g>
                    <g id="TEXT-1427" data-name="TEXT">
                        <text class="cls-6" transform="translate(1462.41 1127.49)">10</text>
                    </g>
                    <g id="TEXT-1428" data-name="TEXT">
                        <text class="cls-6" transform="translate(1475.11 1128.1)">
                            <tspan class="cls-7">1</tspan>
                            <tspan x="2.41" y="0">1</tspan>
                        </text>
                    </g>
                    <g id="TEXT-1429" data-name="TEXT">
                        <text class="cls-6" transform="translate(1488.05 1128.71)">12</text>
                    </g>
                    <g id="TEXT-1430" data-name="TEXT">
                        <text class="cls-6" transform="translate(1501.04 1129.54)">13</text>
                    </g>
                    <g id="TEXT-1431" data-name="TEXT">
                        <text class="cls-6" transform="translate(1513.77 1130.14)">14</text>
                    </g>
                    <g id="TEXT-1432" data-name="TEXT">
                        <text class="cls-6" transform="translate(1526.27 1130.7)">15</text>
                    </g>
                    <g id="TEXT-1433" data-name="TEXT">
                        <text class="cls-6" transform="translate(1540.06 1131.33)">16</text>
                    </g>
                    <g id="TEXT-1434" data-name="TEXT">
                        <text class="cls-6" transform="translate(1552.71 1132.32)">17</text>
                    </g>
                    <g id="TEXT-1435" data-name="TEXT">
                        <text class="cls-6" transform="translate(1574.03 1125.19)">18</text>
                    </g>
                    <g id="TEXT-1436" data-name="TEXT">
                        <text class="cls-6" transform="translate(1573.94 1140.5)">19</text>
                    </g>
                    <g id="TEXT-1437" data-name="TEXT">
                        <text class="cls-6" transform="translate(1573.2 1157.44)">20</text>
                    </g>
                    <g id="TEXT-1438" data-name="TEXT">
                        <text class="cls-6" transform="translate(1573.02 1172.99)">21</text>
                    </g>
                    <g id="TEXT-1439" data-name="TEXT">
                        <text class="cls-6" transform="translate(1550.93 1164.51)">22</text>
                    </g>
                    <g id="TEXT-1440" data-name="TEXT">
                        <text class="cls-6" transform="translate(1537.41 1163.74)">23</text>
                    </g>
                    <g id="TEXT-1441" data-name="TEXT">
                        <text class="cls-6" transform="translate(1525 1163.34)">24</text>
                    </g>
                    <g id="TEXT-1442" data-name="TEXT">
                        <text class="cls-6" transform="translate(1512.25 1162.04)">25</text>
                    </g>
                    <g id="TEXT-1443" data-name="TEXT">
                        <text class="cls-6" transform="translate(1499.34 1161.93)">26</text>
                    </g>
                    <g id="TEXT-1444" data-name="TEXT">
                        <text class="cls-6" transform="translate(1486.04 1161.34)">27</text>
                    </g>
                    <g id="TEXT-1445" data-name="TEXT">
                        <text class="cls-6" transform="translate(1473.09 1160.64)">28</text>
                    </g>
                    <g id="TEXT-1446" data-name="TEXT">
                        <text class="cls-6" transform="translate(1460.14 1160.02)">29</text>
                    </g>
                    <g id="TEXT-1447" data-name="TEXT">
                        <text class="cls-6" transform="translate(1447.19 1159.41)">30</text>
                    </g>
                    <g id="TEXT-1448" data-name="TEXT">
                        <text class="cls-6" transform="translate(1434.24 1158.79)">31</text>
                    </g>
                    <g id="TEXT-1449" data-name="TEXT">
                        <text class="cls-6" transform="translate(1421.29 1158.17)">32</text>
                    </g>
                    <g id="TEXT-1450" data-name="TEXT">
                        <text class="cls-6" transform="translate(1408.34 1157.56)">33</text>
                    </g>
                    <g id="TEXT-1451" data-name="TEXT">
                        <text class="cls-6" transform="translate(1395.38 1156.94)">34</text>
                    </g>
                </g>
            </g>
            <g id="MZ-144">
                <path class="cls-3" d="M1383.08,1176.65l-15.3-1s-11.8-1.4-13.1,13l-2.4,46.2s-1.5,10.7,9.8,11.9l219,10.9s9.3-.1,9.8-10.9l2.4-45.9s1.7-13.8-13.2-14.6Z"/>
                <polygon class="cls-4" points="1390.17 1180.55 1388.67 1212.95 1401.58 1213.65 1403.17 1181.25 1390.17 1180.55"/>
                <polygon class="cls-4" points="1403.17 1181.25 1401.58 1213.65 1414.47 1214.25 1416.08 1181.85 1403.17 1181.25"/>
                <polygon class="cls-4" points="1416.17 1181.85 1414.58 1214.25 1427.47 1214.95 1429.08 1182.55 1416.17 1181.85"/>
                <polygon class="cls-4" points="1429.08 1182.55 1427.47 1214.95 1440.38 1215.55 1442.08 1183.15 1429.08 1182.55"/>
                <polygon class="cls-4" points="1441.97 1183.15 1440.38 1215.55 1453.38 1216.25 1454.97 1183.85 1441.97 1183.15"/>
                <polygon class="cls-4" points="1454.97 1183.85 1453.38 1216.25 1466.28 1216.85 1467.97 1184.45 1454.97 1183.85"/>
                <polygon class="cls-4" points="1467.97 1184.45 1466.38 1216.85 1479.28 1217.55 1480.88 1185.15 1467.97 1184.45"/>
                <polygon class="cls-4" points="1480.88 1185.15 1479.28 1217.55 1492.17 1218.15 1493.78 1185.75 1480.88 1185.15"/>
                <polygon class="cls-4" points="1506.78 1186.45 1505.17 1218.75 1518.08 1219.45 1519.78 1187.05 1506.78 1186.45"/>
                <polygon class="cls-4" points="1493.78 1185.75 1492.17 1218.15 1505.17 1218.75 1506.78 1186.45 1493.78 1185.75"/>
                <polygon class="cls-4" points="1519.67 1187.05 1518.08 1219.45 1531.08 1220.05 1532.67 1187.75 1519.67 1187.05"/>
                <polygon class="cls-4" points="1532.67 1187.75 1531.08 1220.05 1543.97 1220.75 1545.67 1188.35 1532.67 1187.75"/>
                <polygon class="cls-4" points="1545.67 1188.35 1544.08 1220.75 1556.97 1221.35 1558.58 1189.05 1545.67 1188.35"/>
                <polygon class="cls-4" points="1388.58 1212.95 1386.97 1245.35 1399.88 1245.95 1401.47 1213.65 1388.58 1212.95"/>
                <polygon class="cls-4" points="1401.47 1213.65 1399.88 1245.95 1412.88 1246.65 1414.47 1214.25 1401.47 1213.65"/>
                <polygon class="cls-4" points="1414.47 1214.25 1412.88 1246.65 1425.78 1247.25 1427.47 1214.95 1414.47 1214.25"/>
                <polygon class="cls-4" points="1427.47 1214.95 1425.88 1247.25 1438.78 1247.95 1440.38 1215.55 1427.47 1214.95"/>
                <polygon class="cls-4" points="1440.38 1215.55 1438.78 1247.95 1451.67 1248.55 1453.28 1216.25 1440.38 1215.55"/>
                <polygon class="cls-4" points="1453.38 1216.25 1451.78 1248.55 1464.67 1249.25 1466.28 1216.85 1453.38 1216.25"/>
                <polygon class="cls-4" points="1466.28 1216.85 1464.67 1249.25 1477.58 1249.85 1479.28 1217.55 1466.28 1216.85"/>
                <polygon class="cls-4" points="1479.28 1217.55 1477.67 1249.85 1490.58 1250.55 1492.17 1218.15 1479.28 1217.55"/>
                <polygon class="cls-4" points="1505.17 1218.85 1503.58 1251.15 1516.47 1251.85 1518.08 1219.45 1505.17 1218.85"/>
                <polygon class="cls-4" points="1492.17 1218.15 1490.58 1250.55 1503.47 1251.15 1505.08 1218.85 1492.17 1218.15"/>
                <polygon class="cls-4" points="1518.08 1219.45 1516.47 1251.85 1529.38 1252.45 1530.97 1220.15 1518.08 1219.45"/>
                <polygon class="cls-4" points="1531.08 1220.15 1529.47 1252.45 1542.38 1253.15 1543.97 1220.75 1531.08 1220.15"/>
                <polygon class="cls-4" points="1543.97 1220.75 1542.38 1253.15 1555.38 1253.75 1556.97 1221.35 1543.97 1220.75"/>
                <path class="cls-4" d="M1390.18,1180.55l-22.7-1.1s-8.5-.8-10.4,9.2l-.1,6.6,32.4,1.6Z"/>
                <polygon class="cls-4" points="1356.97 1195.25 1356.17 1211.35 1388.58 1212.95 1389.38 1196.85 1356.97 1195.25"/>
                <polygon class="cls-4" points="1388.58 1212.95 1387.78 1229.15 1355.38 1227.55 1356.17 1211.35 1388.58 1212.95"/>
                <path class="cls-4" d="M1387,1245.35l-23.1-1.2-2.1-.1s-6.7-.6-6.9-7.6l.4-8.9,32.4,1.6Z"/>
                <path class="cls-4" d="M1558.58,1189l20.8,1.1s12.4,1.1,10.8,16.2v.5l-32.4-1.6Z"/>
                <polygon class="cls-4" points="1557.78 1205.25 1556.97 1221.35 1589.38 1223.05 1590.17 1206.85 1557.78 1205.25"/>
                <polygon class="cls-4" points="1556.97 1221.35 1556.17 1237.65 1588.47 1239.25 1589.38 1223.05 1556.97 1221.35"/>
                <path class="cls-4" d="M1556.18,1237.65l-.8,16.1,25.2,1.2s6.9-.1,7.5-7.2l.4-8.6Z"/>
                <g id="TEXT-1452" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 1467.43, 1224.08)">MZ-144</text>
                </g>
                <g id="INSERT-6" data-name="INSERT">
                    <g id="TEXT-1453" data-name="TEXT">
                        <text class="cls-6" transform="translate(1369.78 1241.26)">1</text>
                    </g>
                    <g id="TEXT-1454" data-name="TEXT">
                        <text class="cls-6" transform="translate(1370.31 1224.66)">2</text>
                    </g>
                    <g id="TEXT-1455" data-name="TEXT">
                        <text class="cls-6" transform="translate(1371.04 1209.14)">3</text>
                    </g>
                    <g id="TEXT-1456" data-name="TEXT">
                        <text class="cls-6" transform="translate(1371.77 1194.44)">4</text>
                    </g>
                    <g id="TEXT-1457" data-name="TEXT">
                        <text class="cls-6" transform="translate(1394.29 1202.28)">5</text>
                    </g>
                    <g id="TEXT-1458" data-name="TEXT">
                        <text class="cls-6" transform="translate(1407.15 1202.85)">6</text>
                    </g>
                    <g id="TEXT-1459" data-name="TEXT">
                        <text class="cls-6" transform="translate(1420.15 1203.4)">7</text>
                    </g>
                    <g id="TEXT-1460" data-name="TEXT">
                        <text class="cls-6" transform="translate(1433.29 1204.31)">8</text>
                    </g>
                    <g id="TEXT-1461" data-name="TEXT">
                        <text class="cls-6" transform="translate(1445.9 1205.04)">9</text>
                    </g>
                    <g id="TEXT-1462" data-name="TEXT">
                        <text class="cls-6" transform="translate(1458.52 1205.19)">10</text>
                    </g>
                    <g id="TEXT-1463" data-name="TEXT">
                        <text class="cls-6" transform="translate(1471.22 1205.81)">
                            <tspan class="cls-7">1</tspan>
                            <tspan x="2.41" y="0">1</tspan>
                        </text>
                    </g>
                    <g id="TEXT-1464" data-name="TEXT">
                        <text class="cls-6" transform="translate(1484.16 1206.41)">12</text>
                    </g>
                    <g id="TEXT-1465" data-name="TEXT">
                        <text class="cls-6" transform="translate(1497.15 1207.24)">13</text>
                    </g>
                    <g id="TEXT-1466" data-name="TEXT">
                        <text class="cls-6" transform="translate(1509.88 1207.84)">14</text>
                    </g>
                    <g id="TEXT-1467" data-name="TEXT">
                        <text class="cls-6" transform="translate(1522.38 1208.4)">15</text>
                    </g>
                    <g id="TEXT-1468" data-name="TEXT">
                        <text class="cls-6" transform="translate(1536.16 1209.03)">16</text>
                    </g>
                    <g id="TEXT-1469" data-name="TEXT">
                        <text class="cls-6" transform="translate(1548.81 1210.02)">17</text>
                    </g>
                    <g id="TEXT-1470" data-name="TEXT">
                        <text class="cls-6" transform="translate(1570.14 1202.89)">18</text>
                    </g>
                    <g id="TEXT-1471" data-name="TEXT">
                        <text class="cls-6" transform="translate(1570.04 1218.2)">19</text>
                    </g>
                    <g id="TEXT-1472" data-name="TEXT">
                        <text class="cls-6" transform="translate(1569.31 1235.15)">20</text>
                    </g>
                    <g id="TEXT-1473" data-name="TEXT">
                        <text class="cls-6" transform="translate(1569.12 1250.69)">21</text>
                    </g>
                    <g id="TEXT-1474" data-name="TEXT">
                        <text class="cls-6" transform="translate(1547.03 1242.21)">22</text>
                    </g>
                    <g id="TEXT-1475" data-name="TEXT">
                        <text class="cls-6" transform="translate(1533.51 1241.44)">23</text>
                    </g>
                    <g id="TEXT-1476" data-name="TEXT">
                        <text class="cls-6" transform="translate(1521.11 1241.04)">24</text>
                    </g>
                    <g id="TEXT-1477" data-name="TEXT">
                        <text class="cls-6" transform="translate(1508.36 1239.74)">25</text>
                    </g>
                    <g id="TEXT-1478" data-name="TEXT">
                        <text class="cls-6" transform="translate(1495.45 1239.63)">26</text>
                    </g>
                    <g id="TEXT-1479" data-name="TEXT">
                        <text class="cls-6" transform="translate(1482.15 1239.04)">27</text>
                    </g>
                    <g id="TEXT-1480" data-name="TEXT">
                        <text class="cls-6" transform="translate(1469.2 1238.34)">28</text>
                    </g>
                    <g id="TEXT-1481" data-name="TEXT">
                        <text class="cls-6" transform="translate(1456.25 1237.73)">29</text>
                    </g>
                    <g id="TEXT-1482" data-name="TEXT">
                        <text class="cls-6" transform="translate(1443.3 1237.11)">30</text>
                    </g>
                    <g id="TEXT-1483" data-name="TEXT">
                        <text class="cls-6" transform="translate(1430.35 1236.49)">31</text>
                    </g>
                    <g id="TEXT-1484" data-name="TEXT">
                        <text class="cls-6" transform="translate(1417.39 1235.88)">32</text>
                    </g>
                    <g id="TEXT-1485" data-name="TEXT">
                        <text class="cls-6" transform="translate(1404.44 1235.26)">33</text>
                    </g>
                    <g id="TEXT-1486" data-name="TEXT">
                        <text class="cls-6" transform="translate(1391.49 1234.64)">34</text>
                    </g>
                </g>
            </g>
            <g id="MZ-143">
                <path class="cls-3" d="M1379.28,1254.65l-15.3-1s-11.8-1.4-13.1,13l-2.4,46.2s-1.5,10.7,9.8,11.9l219,10.9s9.3-.1,9.8-10.9l2.4-45.9s1.7-13.8-13.2-14.6Z"/>
                <polygon class="cls-4" points="1386.47 1258.55 1384.88 1290.85 1397.78 1291.55 1399.38 1259.15 1386.47 1258.55"/>
                <polygon class="cls-4" points="1399.38 1259.15 1397.78 1291.55 1410.67 1292.15 1412.28 1259.85 1399.38 1259.15"/>
                <polygon class="cls-4" points="1412.38 1259.85 1410.78 1292.15 1423.67 1292.85 1425.28 1260.45 1412.38 1259.85"/>
                <polygon class="cls-4" points="1425.28 1260.45 1423.67 1292.85 1436.58 1293.45 1438.28 1261.15 1425.28 1260.45"/>
                <polygon class="cls-4" points="1438.17 1261.15 1436.58 1293.45 1449.58 1294.15 1451.17 1261.75 1438.17 1261.15"/>
                <polygon class="cls-4" points="1451.17 1261.75 1449.58 1294.15 1462.58 1294.75 1464.17 1262.35 1451.17 1261.75"/>
                <polygon class="cls-4" points="1464.17 1262.35 1462.58 1294.75 1475.47 1295.45 1477.08 1263.05 1464.17 1262.35"/>
                <polygon class="cls-4" points="1477.08 1263.05 1475.47 1295.45 1488.38 1296.05 1490.08 1263.65 1477.08 1263.05"/>
                <polygon class="cls-4" points="1502.97 1264.35 1501.38 1296.75 1514.38 1297.35 1515.97 1264.95 1502.97 1264.35"/>
                <polygon class="cls-4" points="1489.97 1263.65 1488.38 1296.05 1501.38 1296.75 1502.97 1264.35 1489.97 1263.65"/>
                <polygon class="cls-4" points="1515.97 1264.95 1514.38 1297.35 1527.28 1298.05 1528.88 1265.65 1515.97 1264.95"/>
                <polygon class="cls-4" points="1528.88 1265.65 1527.28 1298.05 1540.28 1298.65 1541.88 1266.25 1528.88 1265.65"/>
                <polygon class="cls-4" points="1541.88 1266.25 1540.28 1298.65 1553.17 1299.35 1554.78 1266.95 1541.88 1266.25"/>
                <polygon class="cls-4" points="1384.78 1290.85 1383.17 1323.25 1396.08 1323.95 1397.78 1291.55 1384.78 1290.85"/>
                <polygon class="cls-4" points="1397.67 1291.55 1396.08 1323.95 1409.08 1324.55 1410.67 1292.15 1397.67 1291.55"/>
                <polygon class="cls-4" points="1410.67 1292.15 1409.08 1324.55 1421.97 1325.25 1423.67 1292.85 1410.67 1292.15"/>
                <polygon class="cls-4" points="1423.67 1292.85 1422.08 1325.25 1434.97 1325.85 1436.58 1293.45 1423.67 1292.85"/>
                <polygon class="cls-4" points="1436.58 1293.45 1434.97 1325.85 1447.88 1326.55 1449.47 1294.15 1436.58 1293.45"/>
                <polygon class="cls-4" points="1449.58 1294.15 1447.97 1326.55 1460.88 1327.15 1462.47 1294.75 1449.58 1294.15"/>
                <polygon class="cls-4" points="1462.47 1294.75 1460.88 1327.15 1473.88 1327.85 1475.47 1295.45 1462.47 1294.75"/>
                <polygon class="cls-4" points="1475.47 1295.45 1473.88 1327.85 1486.78 1328.45 1488.38 1296.05 1475.47 1295.45"/>
                <polygon class="cls-4" points="1501.38 1296.75 1499.78 1329.15 1512.67 1329.75 1514.28 1297.35 1501.38 1296.75"/>
                <polygon class="cls-4" points="1488.38 1296.05 1486.78 1328.45 1499.67 1329.15 1501.28 1296.75 1488.38 1296.05"/>
                <polygon class="cls-4" points="1514.28 1297.35 1512.67 1329.75 1525.58 1330.35 1527.28 1298.05 1514.28 1297.35"/>
                <polygon class="cls-4" points="1527.28 1298.05 1525.67 1330.45 1538.58 1331.05 1540.17 1298.65 1527.28 1298.05"/>
                <polygon class="cls-4" points="1540.17 1298.65 1538.58 1331.05 1551.58 1331.65 1553.17 1299.35 1540.17 1298.65"/>
                <path class="cls-4" d="M1386.48,1258.55l-22.7-1.1s-8.5-.8-10.4,9.2l-.1,6.6,32.4,1.6Z"/>
                <polygon class="cls-4" points="1353.17 1273.15 1352.47 1289.25 1384.78 1290.85 1385.58 1274.75 1353.17 1273.15"/>
                <polygon class="cls-4" points="1384.78 1290.85 1383.97 1307.05 1351.67 1305.45 1352.47 1289.25 1384.78 1290.85"/>
                <path class="cls-4" d="M1383.18,1323.25l-23.1-1.2-2.1-.1s-6.7-.6-6.9-7.6l.4-8.9,32.4,1.6Z"/>
                <path class="cls-4" d="M1554.78,1266.95l20.8,1.1s12.4,1.1,10.8,16.2v.5l-32.4-1.6Z"/>
                <polygon class="cls-4" points="1553.97 1283.15 1553.17 1299.35 1585.58 1300.95 1586.38 1284.75 1553.97 1283.15"/>
                <polygon class="cls-4" points="1553.17 1299.35 1552.38 1315.65 1584.78 1317.15 1585.58 1300.95 1553.17 1299.35"/>
                <path class="cls-4" d="M1552.38,1315.65l-.8,16.1,25.2,1.2s6.9-.1,7.5-7.2l.4-8.6Z"/>
                <g id="TEXT-1487" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 1463.54, 1301.78)">MZ-143</text>
                </g>
                <g id="INSERT-7" data-name="INSERT">
                    <g id="TEXT-1488" data-name="TEXT">
                        <text class="cls-6" transform="translate(1365.88 1318.96)">1</text>
                    </g>
                    <g id="TEXT-1489" data-name="TEXT">
                        <text class="cls-6" transform="translate(1366.42 1302.36)">2</text>
                    </g>
                    <g id="TEXT-1490" data-name="TEXT">
                        <text class="cls-6" transform="translate(1367.14 1286.84)">3</text>
                    </g>
                    <g id="TEXT-1491" data-name="TEXT">
                        <text class="cls-6" transform="translate(1367.88 1272.15)">4</text>
                    </g>
                    <g id="TEXT-1492" data-name="TEXT">
                        <text class="cls-6" transform="translate(1390.4 1279.98)">5</text>
                    </g>
                    <g id="TEXT-1493" data-name="TEXT">
                        <text class="cls-6" transform="translate(1403.25 1280.55)">6</text>
                    </g>
                    <g id="TEXT-1494" data-name="TEXT">
                        <text class="cls-6" transform="translate(1416.26 1281.1)">7</text>
                    </g>
                    <g id="TEXT-1495" data-name="TEXT">
                        <text class="cls-6" transform="translate(1429.4 1282.01)">8</text>
                    </g>
                    <g id="TEXT-1496" data-name="TEXT">
                        <text class="cls-6" transform="translate(1442.01 1282.75)">9</text>
                    </g>
                    <g id="TEXT-1497" data-name="TEXT">
                        <text class="cls-6" transform="translate(1454.63 1282.89)">10</text>
                    </g>
                    <g id="TEXT-1498" data-name="TEXT">
                        <text class="cls-6" transform="translate(1467.33 1283.51)">
                            <tspan class="cls-7">1</tspan>
                            <tspan x="2.41" y="0">1</tspan>
                        </text>
                    </g>
                    <g id="TEXT-1499" data-name="TEXT">
                        <text class="cls-6" transform="translate(1480.26 1284.11)">12</text>
                    </g>
                    <g id="TEXT-1500" data-name="TEXT">
                        <text class="cls-6" transform="translate(1493.25 1284.94)">13</text>
                    </g>
                    <g id="TEXT-1501" data-name="TEXT">
                        <text class="cls-6" transform="translate(1505.98 1285.54)">14</text>
                    </g>
                    <g id="TEXT-1502" data-name="TEXT">
                        <text class="cls-6" transform="translate(1518.48 1286.1)">15</text>
                    </g>
                    <g id="TEXT-1503" data-name="TEXT">
                        <text class="cls-6" transform="translate(1532.27 1286.73)">16</text>
                    </g>
                    <g id="TEXT-1504" data-name="TEXT">
                        <text class="cls-6" transform="translate(1544.92 1287.72)">17</text>
                    </g>
                    <g id="TEXT-1505" data-name="TEXT">
                        <text class="cls-6" transform="translate(1566.24 1280.6)">18</text>
                    </g>
                    <g id="TEXT-1506" data-name="TEXT">
                        <text class="cls-6" transform="translate(1566.15 1295.9)">19</text>
                    </g>
                    <g id="TEXT-1507" data-name="TEXT">
                        <text class="cls-6" transform="translate(1565.42 1312.85)">20</text>
                    </g>
                    <g id="TEXT-1508" data-name="TEXT">
                        <text class="cls-6" transform="translate(1565.23 1328.39)">21</text>
                    </g>
                    <g id="TEXT-1509" data-name="TEXT">
                        <text class="cls-6" transform="translate(1543.14 1319.91)">22</text>
                    </g>
                    <g id="TEXT-1510" data-name="TEXT">
                        <text class="cls-6" transform="translate(1529.62 1319.14)">23</text>
                    </g>
                    <g id="TEXT-1511" data-name="TEXT">
                        <text class="cls-6" transform="translate(1517.21 1318.74)">24</text>
                    </g>
                    <g id="TEXT-1512" data-name="TEXT">
                        <text class="cls-6" transform="translate(1504.46 1317.44)">25</text>
                    </g>
                    <g id="TEXT-1513" data-name="TEXT">
                        <text class="cls-6" transform="translate(1491.55 1317.33)">26</text>
                    </g>
                    <g id="TEXT-1514" data-name="TEXT">
                        <text class="cls-6" transform="translate(1478.26 1316.74)">27</text>
                    </g>
                    <g id="TEXT-1515" data-name="TEXT">
                        <text class="cls-6" transform="translate(1465.31 1316.05)">28</text>
                    </g>
                    <g id="TEXT-1516" data-name="TEXT">
                        <text class="cls-6" transform="translate(1452.36 1315.43)">29</text>
                    </g>
                    <g id="TEXT-1517" data-name="TEXT">
                        <text class="cls-6" transform="translate(1439.41 1314.81)">30</text>
                    </g>
                    <g id="TEXT-1518" data-name="TEXT">
                        <text class="cls-6" transform="translate(1426.45 1314.2)">31</text>
                    </g>
                    <g id="TEXT-1519" data-name="TEXT">
                        <text class="cls-6" transform="translate(1413.5 1313.58)">32</text>
                    </g>
                    <g id="TEXT-1520" data-name="TEXT">
                        <text class="cls-6" transform="translate(1400.55 1312.96)">33</text>
                    </g>
                    <g id="TEXT-1521" data-name="TEXT">
                        <text class="cls-6" transform="translate(1387.6 1312.35)">34</text>
                    </g>
                </g>
            </g>
            <g id="MZ-142">
                <path class="cls-3" d="M1375.18,1331.95l-15.3-1s-11.8-1.4-13.1,13l-2.4,46.2s-1.5,10.7,9.8,11.9l219,10.9s9.3-.1,9.8-10.9l2.4-45.9s1.7-13.8-13.2-14.6Z"/>
                <polygon class="cls-4" points="1382.28 1335.85 1380.67 1368.25 1393.67 1368.85 1395.28 1336.55 1382.28 1335.85"/>
                <polygon class="cls-4" points="1395.28 1336.55 1393.67 1368.95 1406.58 1369.55 1408.17 1337.15 1395.28 1336.55"/>
                <polygon class="cls-4" points="1408.17 1337.15 1406.58 1369.55 1419.58 1370.15 1421.17 1337.85 1408.17 1337.15"/>
                <polygon class="cls-4" points="1421.17 1337.85 1419.58 1370.15 1432.47 1370.85 1434.08 1338.45 1421.17 1337.85"/>
                <polygon class="cls-4" points="1434.08 1338.45 1432.47 1370.85 1445.38 1371.45 1447.08 1339.15 1434.08 1338.45"/>
                <polygon class="cls-4" points="1447.08 1339.15 1445.47 1371.45 1458.38 1372.15 1459.97 1339.75 1447.08 1339.15"/>
                <polygon class="cls-4" points="1459.97 1339.75 1458.38 1372.15 1471.38 1372.75 1472.97 1340.45 1459.97 1339.75"/>
                <polygon class="cls-4" points="1472.97 1340.45 1471.38 1372.75 1484.28 1373.45 1485.88 1341.05 1472.97 1340.45"/>
                <polygon class="cls-4" points="1498.88 1341.75 1497.28 1374.05 1510.17 1374.75 1511.78 1342.35 1498.88 1341.75"/>
                <polygon class="cls-4" points="1485.88 1341.05 1484.28 1373.45 1497.17 1374.05 1498.88 1341.75 1485.88 1341.05"/>
                <polygon class="cls-4" points="1511.78 1342.35 1510.17 1374.75 1523.17 1375.35 1524.78 1343.05 1511.78 1342.35"/>
                <polygon class="cls-4" points="1524.78 1343.05 1523.17 1375.35 1536.08 1376.05 1537.78 1343.65 1524.78 1343.05"/>
                <polygon class="cls-4" points="1537.78 1343.65 1536.17 1376.05 1549.08 1376.65 1550.67 1344.35 1537.78 1343.65"/>
                <polygon class="cls-4" points="1380.67 1368.25 1379.08 1400.65 1391.97 1401.25 1393.58 1368.95 1380.67 1368.25"/>
                <polygon class="cls-4" points="1393.58 1368.95 1391.97 1401.25 1404.88 1401.95 1406.58 1369.55 1393.58 1368.95"/>
                <polygon class="cls-4" points="1406.58 1369.55 1404.97 1401.95 1417.88 1402.55 1419.47 1370.25 1406.58 1369.55"/>
                <polygon class="cls-4" points="1419.47 1370.25 1417.88 1402.55 1430.88 1403.25 1432.47 1370.85 1419.47 1370.25"/>
                <polygon class="cls-4" points="1432.47 1370.85 1430.88 1403.25 1443.78 1403.85 1445.38 1371.45 1432.47 1370.85"/>
                <polygon class="cls-4" points="1445.38 1371.45 1443.78 1403.85 1456.78 1404.55 1458.38 1372.15 1445.38 1371.45"/>
                <polygon class="cls-4" points="1458.38 1372.15 1456.78 1404.55 1469.67 1405.15 1471.28 1372.75 1458.38 1372.15"/>
                <polygon class="cls-4" points="1471.28 1372.75 1469.67 1405.15 1482.67 1405.85 1484.28 1373.45 1471.28 1372.75"/>
                <polygon class="cls-4" points="1497.28 1374.05 1495.67 1406.45 1508.58 1407.15 1510.17 1374.75 1497.28 1374.05"/>
                <polygon class="cls-4" points="1484.28 1373.45 1482.67 1405.85 1495.58 1406.45 1497.17 1374.05 1484.28 1373.45"/>
                <polygon class="cls-4" points="1510.17 1374.75 1508.58 1407.15 1521.47 1407.75 1523.08 1375.35 1510.17 1374.75"/>
                <polygon class="cls-4" points="1523.17 1375.35 1521.58 1407.75 1534.47 1408.45 1536.08 1376.05 1523.17 1375.35"/>
                <polygon class="cls-4" points="1536.08 1376.05 1534.47 1408.45 1547.38 1409.05 1549.08 1376.65 1536.08 1376.05"/>
                <path class="cls-4" d="M1382.28,1335.85l-22.7-1.1s-8.5-.8-10.4,9.2l-.1,6.6,32.4,1.6Z"/>
                <polygon class="cls-4" points="1349.08 1350.55 1348.28 1366.65 1380.67 1368.25 1381.47 1352.15 1349.08 1350.55"/>
                <polygon class="cls-4" points="1380.67 1368.25 1379.88 1384.45 1347.47 1382.85 1348.28 1366.65 1380.67 1368.25"/>
                <path class="cls-4" d="M1379.08,1400.65l-23.1-1.2-2.1-.1s-6.7-.6-6.9-7.6l.4-8.9,32.4,1.6Z"/>
                <path class="cls-4" d="M1550.68,1344.35l20.8,1.1s12.4,1.1,10.8,16.2v.5l-32.4-1.6Z"/>
                <polygon class="cls-4" points="1549.88 1360.45 1549.08 1376.65 1581.38 1378.35 1582.28 1362.15 1549.88 1360.45"/>
                <polygon class="cls-4" points="1549.08 1376.65 1548.28 1392.95 1580.58 1394.45 1581.38 1378.35 1549.08 1376.65"/>
                <path class="cls-4" d="M1548.28,1392.95l-.8,16.1,25.2,1.2s6.9-.1,7.5-7.2l.4-8.6Z"/>
                <g id="TEXT-1522" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 1459.65, 1379.48)">MZ-142</text>
                </g>
                <g id="TEXT-1523" data-name="TEXT">
                    <text class="cls-6" transform="translate(1361.99 1396.66)">1</text>
                </g>
                <g id="TEXT-1524" data-name="TEXT">
                    <text class="cls-6" transform="translate(1362.53 1380.06)">2</text>
                </g>
                <g id="TEXT-1525" data-name="TEXT">
                    <text class="cls-6" transform="translate(1363.25 1364.54)">3</text>
                </g>
                <g id="TEXT-1526" data-name="TEXT">
                    <text class="cls-6" transform="translate(1363.98 1349.85)">4</text>
                </g>
                <g id="TEXT-1527" data-name="TEXT">
                    <text class="cls-6" transform="translate(1386.51 1357.69)">5</text>
                </g>
                <g id="TEXT-1528" data-name="TEXT">
                    <text class="cls-6" transform="translate(1399.36 1358.26)">6</text>
                </g>
                <g id="TEXT-1529" data-name="TEXT">
                    <text class="cls-6" transform="translate(1412.36 1358.8)">7</text>
                </g>
                <g id="TEXT-1530" data-name="TEXT">
                    <text class="cls-6" transform="translate(1425.51 1359.71)">8</text>
                </g>
                <g id="TEXT-1531" data-name="TEXT">
                    <text class="cls-6" transform="translate(1438.11 1360.45)">9</text>
                </g>
                <g id="TEXT-1532" data-name="TEXT">
                    <text class="cls-6" transform="translate(1450.74 1360.59)">10</text>
                </g>
                <g id="TEXT-1533" data-name="TEXT">
                    <text class="cls-6" transform="translate(1463.43 1361.21)">
                        <tspan class="cls-7">1</tspan>
                        <tspan x="2.41" y="0">1</tspan>
                    </text>
                </g>
                <g id="TEXT-1534" data-name="TEXT">
                    <text class="cls-6" transform="translate(1476.37 1361.81)">12</text>
                </g>
                <g id="TEXT-1535" data-name="TEXT">
                    <text class="cls-6" transform="translate(1489.36 1362.64)">13</text>
                </g>
                <g id="TEXT-1536" data-name="TEXT">
                    <text class="cls-6" transform="translate(1502.09 1363.25)">14</text>
                </g>
                <g id="TEXT-1537" data-name="TEXT">
                    <text class="cls-6" transform="translate(1514.59 1363.8)">15</text>
                </g>
                <g id="TEXT-1538" data-name="TEXT">
                    <text class="cls-6" transform="translate(1528.38 1364.43)">16</text>
                </g>
                <g id="TEXT-1539" data-name="TEXT">
                    <text class="cls-6" transform="translate(1541.03 1365.43)">17</text>
                </g>
                <g id="TEXT-1540" data-name="TEXT">
                    <text class="cls-6" transform="translate(1562.35 1358.3)">18</text>
                </g>
                <g id="TEXT-1541" data-name="TEXT">
                    <text class="cls-6" transform="translate(1562.26 1373.6)">19</text>
                </g>
                <g id="TEXT-1542" data-name="TEXT">
                    <text class="cls-6" transform="translate(1561.52 1390.55)">20</text>
                </g>
                <g id="TEXT-1543" data-name="TEXT">
                    <text class="cls-6" transform="translate(1561.34 1406.09)">21</text>
                </g>
                <g id="TEXT-1544" data-name="TEXT">
                    <text class="cls-6" transform="translate(1539.25 1397.62)">22</text>
                </g>
                <g id="TEXT-1545" data-name="TEXT">
                    <text class="cls-6" transform="translate(1525.73 1396.84)">23</text>
                </g>
                <g id="TEXT-1546" data-name="TEXT">
                    <text class="cls-6" transform="translate(1513.32 1396.45)">24</text>
                </g>
                <g id="TEXT-1547" data-name="TEXT">
                    <text class="cls-6" transform="translate(1500.57 1395.15)">25</text>
                </g>
                <g id="TEXT-1548" data-name="TEXT">
                    <text class="cls-6" transform="translate(1487.66 1395.03)">26</text>
                </g>
                <g id="TEXT-1549" data-name="TEXT">
                    <text class="cls-6" transform="translate(1474.37 1394.44)">27</text>
                </g>
                <g id="TEXT-1550" data-name="TEXT">
                    <text class="cls-6" transform="translate(1461.42 1393.75)">28</text>
                </g>
                <g id="TEXT-1551" data-name="TEXT">
                    <text class="cls-6" transform="translate(1448.46 1393.13)">29</text>
                </g>
                <g id="TEXT-1552" data-name="TEXT">
                    <text class="cls-6" transform="translate(1435.51 1392.51)">30</text>
                </g>
                <g id="TEXT-1553" data-name="TEXT">
                    <text class="cls-6" transform="translate(1422.56 1391.9)">31</text>
                </g>
                <g id="TEXT-1554" data-name="TEXT">
                    <text class="cls-6" transform="translate(1409.61 1391.28)">32</text>
                </g>
                <g id="TEXT-1555" data-name="TEXT">
                    <text class="cls-6" transform="translate(1396.66 1390.66)">33</text>
                </g>
                <g id="TEXT-1556" data-name="TEXT">
                    <text class="cls-6" transform="translate(1383.7 1390.05)">34</text>
                </g>
            </g>
            <g id="MZ-157">
                <path class="cls-3" d="M1600.48,1198.45l-2.5,48.4s-1.3,12.8,16.3,12.4l185.2,9.2s8.6,2.1,13.5-5.8l34-46.8s4.5-4.9-.2-11.5c0,0-2-3.8-9.1-4.2l-226.1-11.5C1611.68,1188.65,1602.08,1188.55,1600.48,1198.45Z"/>
                <polygon class="cls-4" points="1636.08 1193.05 1634.47 1225.35 1647.38 1226.05 1649.08 1193.65 1636.08 1193.05"/>
                <polygon class="cls-4" points="1648.97 1193.65 1647.38 1226.05 1660.38 1226.65 1661.97 1194.35 1648.97 1193.65"/>
                <polygon class="cls-4" points="1661.97 1194.35 1660.38 1226.65 1673.28 1227.35 1674.97 1194.95 1661.97 1194.35"/>
                <polygon class="cls-4" points="1674.97 1194.95 1673.38 1227.35 1686.28 1227.95 1687.88 1195.55 1674.97 1194.95"/>
                <polygon class="cls-4" points="1687.88 1195.55 1686.28 1227.95 1699.17 1228.65 1700.78 1196.25 1687.88 1195.55"/>
                <polygon class="cls-4" points="1700.88 1196.25 1699.28 1228.65 1712.17 1229.25 1713.78 1196.85 1700.88 1196.25"/>
                <polygon class="cls-4" points="1713.78 1196.85 1712.17 1229.25 1725.08 1229.95 1726.78 1197.55 1713.78 1196.85"/>
                <polygon class="cls-4" points="1726.78 1197.55 1725.17 1229.95 1738.08 1230.55 1739.67 1198.15 1726.78 1197.55"/>
                <polygon class="cls-4" points="1752.67 1198.85 1751.08 1231.25 1763.97 1231.85 1765.58 1199.45 1752.67 1198.85"/>
                <polygon class="cls-4" points="1739.67 1198.15 1738.08 1230.55 1750.97 1231.25 1752.58 1198.85 1739.67 1198.15"/>
                <polygon class="cls-4" points="1765.58 1199.45 1763.97 1231.85 1776.88 1232.55 1778.58 1200.15 1765.58 1199.45"/>
                <polygon class="cls-4" points="1778.58 1200.15 1776.97 1232.55 1789.88 1233.15 1791.47 1200.75 1778.58 1200.15"/>
                <polygon class="cls-4" points="1791.47 1200.85 1789.88 1233.15 1802.88 1233.85 1804.47 1201.45 1791.47 1200.85"/>
                <polygon class="cls-4" points="1634.47 1225.35 1632.88 1257.75 1645.78 1258.45 1647.38 1226.05 1634.47 1225.35"/>
                <polygon class="cls-4" points="1647.38 1226.05 1645.78 1258.45 1658.67 1259.05 1660.28 1226.65 1647.38 1226.05"/>
                <polygon class="cls-4" points="1660.38 1226.65 1658.78 1259.05 1671.67 1259.75 1673.28 1227.35 1660.38 1226.65"/>
                <polygon class="cls-4" points="1673.28 1227.35 1671.67 1259.75 1684.58 1260.35 1686.28 1227.95 1673.28 1227.35"/>
                <polygon class="cls-4" points="1686.17 1227.95 1684.58 1260.35 1697.58 1261.05 1699.17 1228.65 1686.17 1227.95"/>
                <polygon class="cls-4" points="1699.17 1228.65 1697.58 1261.05 1710.47 1261.65 1712.17 1229.25 1699.17 1228.65"/>
                <polygon class="cls-4" points="1712.17 1229.25 1710.58 1261.65 1723.47 1262.35 1725.08 1229.95 1712.17 1229.25"/>
                <polygon class="cls-4" points="1725.08 1229.95 1723.47 1262.35 1736.38 1262.95 1738.08 1230.55 1725.08 1229.95"/>
                <polygon class="cls-4" points="1750.97 1231.25 1749.38 1263.55 1762.38 1264.25 1763.97 1231.85 1750.97 1231.25"/>
                <polygon class="cls-4" points="1737.97 1230.55 1736.38 1262.95 1749.38 1263.55 1750.97 1231.25 1737.97 1230.55"/>
                <polygon class="cls-4" points="1763.97 1231.85 1762.38 1264.25 1775.28 1264.85 1776.88 1232.55 1763.97 1231.85"/>
                <polygon class="cls-4" points="1776.88 1232.55 1775.28 1264.85 1788.28 1265.55 1789.88 1233.15 1776.88 1232.55"/>
                <polygon class="cls-4" points="1789.88 1233.15 1788.28 1265.55 1801.17 1266.15 1802.78 1233.85 1789.88 1233.15"/>
                <path class="cls-4" d="M1636.08,1193l-22.7-1.1s-8.5-.8-10.4,9.2l-.1,6.6,32.4,1.6Z"/>
                <polygon class="cls-4" points="1602.88 1207.65 1602.08 1223.75 1634.47 1225.35 1635.28 1209.25 1602.88 1207.65"/>
                <polygon class="cls-4" points="1634.47 1225.35 1633.67 1241.55 1601.28 1239.95 1602.08 1223.75 1634.47 1225.35"/>
                <path class="cls-4" d="M1632.88,1257.75l-23.1-1.2-2.1-.1s-6.7-.6-6.9-7.6l.4-8.9,32.4,1.6Z"/>
                <path class="cls-4" d="M1804.48,1201.45l33.3,1.5a7.45,7.45,0,0,1,7.5,3.9s2,4.5-.2,7.6l-3.5,4.8-38-1.9Z"/>
                <polygon class="cls-4" points="1802.78 1233.85 1829.88 1235.05 1841.47 1219.25 1803.47 1217.35 1802.78 1233.85"/>
                <path class="cls-4" d="M1801.18,1266.15s6.2.8,9.1-4.5l19.5-26.6-27-1.3Z"/>
                <g id="TEXT-1557" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 1699.94, 1234.74)">MZ-157</text>
                </g>
                <g id="TEXT-1558" data-name="TEXT">
                    <text class="cls-6" transform="translate(1615.83 1253.59)">1</text>
                </g>
                <g id="TEXT-1559" data-name="TEXT">
                    <text class="cls-6" transform="translate(1616.37 1236.98)">2</text>
                </g>
                <g id="TEXT-1560" data-name="TEXT">
                    <text class="cls-6" transform="translate(1617.09 1221.46)">3</text>
                </g>
                <g id="TEXT-1561" data-name="TEXT">
                    <text class="cls-6" transform="translate(1617.83 1206.77)">4</text>
                </g>
                <g id="TEXT-1562" data-name="TEXT">
                    <text class="cls-6" transform="translate(1640.35 1214.61)">5</text>
                </g>
                <g id="TEXT-1563" data-name="TEXT">
                    <text class="cls-6" transform="translate(1653.2 1215.18)">6</text>
                </g>
                <g id="TEXT-1564" data-name="TEXT">
                    <text class="cls-6" transform="translate(1666.21 1215.73)">7</text>
                </g>
                <g id="TEXT-1565" data-name="TEXT">
                    <text class="cls-6" transform="translate(1679.35 1216.64)">8</text>
                </g>
                <g id="TEXT-1566" data-name="TEXT">
                    <text class="cls-6" transform="translate(1691.95 1217.37)">9</text>
                </g>
                <g id="TEXT-1567" data-name="TEXT">
                    <text class="cls-6" transform="translate(1704.58 1217.51)">10</text>
                </g>
                <g id="TEXT-1568" data-name="TEXT">
                    <text class="cls-6" transform="translate(1717.28 1218.13)">
                        <tspan class="cls-7">1</tspan>
                        <tspan x="2.41" y="0">1</tspan>
                    </text>
                </g>
                <g id="TEXT-1569" data-name="TEXT">
                    <text class="cls-6" transform="translate(1730.21 1218.74)">12</text>
                </g>
                <g id="TEXT-1570" data-name="TEXT">
                    <text class="cls-6" transform="translate(1743.2 1219.57)">13</text>
                </g>
                <g id="TEXT-1571" data-name="TEXT">
                    <text class="cls-6" transform="translate(1755.93 1220.17)">14</text>
                </g>
                <g id="TEXT-1572" data-name="TEXT">
                    <text class="cls-6" transform="translate(1768.43 1220.73)">15</text>
                </g>
                <g id="TEXT-1573" data-name="TEXT">
                    <text class="cls-6" transform="translate(1782.22 1221.36)">16</text>
                </g>
                <g id="TEXT-1574" data-name="TEXT">
                    <text class="cls-6" transform="translate(1794.87 1222.35)">17</text>
                </g>
                <g id="TEXT-1575" data-name="TEXT">
                    <text class="cls-6" transform="translate(1816.19 1215.22)">18</text>
                </g>
                <g id="TEXT-1576" data-name="TEXT">
                    <text class="cls-6" transform="translate(1816.1 1230.53)">19</text>
                </g>
                <g id="TEXT-1577" data-name="TEXT">
                    <text class="cls-6" transform="translate(1807.42 1248.37)">20</text>
                </g>
                <g id="TEXT-1578" data-name="TEXT">
                    <text class="cls-6" transform="translate(1793.09 1254.54)">21</text>
                </g>
                <g id="TEXT-1579" data-name="TEXT">
                    <text class="cls-6" transform="translate(1779.57 1253.77)">22</text>
                </g>
                <g id="TEXT-1580" data-name="TEXT">
                    <text class="cls-6" transform="translate(1767.16 1253.37)">23</text>
                </g>
                <g id="TEXT-1581" data-name="TEXT">
                    <text class="cls-6" transform="translate(1754.41 1252.07)">24</text>
                </g>
                <g id="TEXT-1582" data-name="TEXT">
                    <text class="cls-6" transform="translate(1741.5 1251.95)">25</text>
                </g>
                <g id="TEXT-1583" data-name="TEXT">
                    <text class="cls-6" transform="translate(1728.21 1251.37)">26</text>
                </g>
                <g id="TEXT-1584" data-name="TEXT">
                    <text class="cls-6" transform="translate(1715.26 1250.67)">27</text>
                </g>
                <g id="TEXT-1585" data-name="TEXT">
                    <text class="cls-6" transform="translate(1702.31 1250.05)">28</text>
                </g>
                <g id="TEXT-1586" data-name="TEXT">
                    <text class="cls-6" transform="translate(1689.35 1249.44)">29</text>
                </g>
                <g id="TEXT-1587" data-name="TEXT">
                    <text class="cls-6" transform="translate(1676.4 1248.82)">30</text>
                </g>
                <g id="TEXT-1588" data-name="TEXT">
                    <text class="cls-6" transform="translate(1663.45 1248.2)">31</text>
                </g>
                <g id="TEXT-1589" data-name="TEXT">
                    <text class="cls-6" transform="translate(1650.5 1247.59)">32</text>
                </g>
                <g id="TEXT-1590" data-name="TEXT">
                    <text class="cls-6" transform="translate(1637.55 1246.97)">33</text>
                </g>
            </g>
            <g id="MZ-7">
                <path class="cls-3" d="M400.28,1205.95l31.1,1.6s12.1-1.4,11.4,13l-6.2,123.2s-.5,13.3-13.9,12.6l-39-2.2s-19.9-.5-17.8-24.9l5.6-111.6s.7-13.7,14.4-12.6Z"/>
                <path class="cls-4" d="M408.28,1209l-22.8-1.1s-7.8-.9-10,8.8l-.3,6.9,32.4,1.6Z"/>
                <rect class="cls-4" x="384.42" y="1214.69" width="13" height="32.4" transform="translate(-858 1559.72) rotate(-87.13)"/>
                <rect class="cls-4" x="416.79" y="1216.37" width="13" height="32.4" transform="translate(-828.92 1593.65) rotate(-87.13)"/>
                <rect class="cls-4" x="383.71" y="1227.69" width="13" height="32.4" transform="translate(-871.65 1571.37) rotate(-87.13)"/>
                <rect class="cls-4" x="416.09" y="1229.27" width="13" height="32.4" transform="translate(-842.47 1605.21) rotate(-87.13)"/>
                <rect class="cls-4" x="383.12" y="1240.59" width="13" height="32.4" transform="translate(-885.1 1583.03) rotate(-87.13)"/>
                <rect class="cls-4" x="415.49" y="1242.27" width="13" height="32.4" transform="translate(-856.02 1616.96) rotate(-87.13)"/>
                <rect class="cls-4" x="382.42" y="1253.59" width="13" height="32.4" transform="translate(-898.75 1594.68) rotate(-87.13)"/>
                <rect class="cls-4" x="414.79" y="1255.17" width="13" height="32.4" transform="translate(-869.57 1628.51) rotate(-87.13)"/>
                <rect class="cls-4" x="381.82" y="1266.5" width="13" height="32.4" transform="translate(-912.21 1606.34) rotate(-87.13)"/>
                <rect class="cls-4" x="414.19" y="1268.18" width="13" height="32.4" transform="translate(-883.13 1640.27) rotate(-87.13)"/>
                <rect class="cls-4" x="381.11" y="1279.5" width="13" height="32.4" transform="translate(-925.86 1617.99) rotate(-87.13)"/>
                <rect class="cls-4" x="413.49" y="1281.08" width="13" height="32.4" transform="translate(-896.68 1651.82) rotate(-87.13)"/>
                <rect class="cls-4" x="380.52" y="1292.4" width="13" height="32.4" transform="translate(-939.31 1629.65) rotate(-87.13)"/>
                <rect class="cls-4" x="412.89" y="1294.08" width="13" height="32.4" transform="translate(-910.24 1663.57) rotate(-87.13)"/>
                <rect class="cls-4" x="379.81" y="1305.4" width="13" height="32.4" transform="translate(-952.96 1641.3) rotate(-87.13)"/>
                <rect class="cls-4" x="412.19" y="1306.98" width="13" height="32.4" transform="translate(-923.78 1675.13) rotate(-87.13)"/>
                <path class="cls-4" d="M408.28,1209l24.8,1.2s7.3.1,7.2,8.6l-.4,7.9-32.4-1.6Z"/>
                <path class="cls-4" d="M411.48,1329.35c0,.8-1.1,22.7-1.1,22.7l12.6.7s9.4.8,11-8.7l.6-13.5Z"/>
                <rect class="cls-4" x="390.29" y="1330.92" width="22.7" height="18.5" transform="translate(-956.94 1674.24) rotate(-87.13)"/>
                <path class="cls-4" d="M369.88,1327.25l-.3,6.5s-1.1,14.4,14.6,16.9l7.7.4,1.1-22.7Z"/>
                <g id="TEXT-1591" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 390.14, 1285.2)">MZ-7</text>
                </g>
                <g id="TEXT-1592" data-name="TEXT">
                    <text class="cls-6" transform="translate(380.15 1342.6)">1</text>
                </g>
                <g id="TEXT-1593" data-name="TEXT">
                    <text class="cls-6" transform="translate(385.31 1326)">2</text>
                </g>
                <g id="TEXT-1594" data-name="TEXT">
                    <text class="cls-6" transform="translate(385.1 1313.21)">3</text>
                </g>
                <g id="TEXT-1595" data-name="TEXT">
                    <text class="cls-6" transform="translate(385.84 1300.33)">4</text>
                </g>
                <g id="TEXT-1596" data-name="TEXT">
                    <text class="cls-6" transform="translate(387.07 1287.14)">5</text>
                </g>
                <g id="TEXT-1597" data-name="TEXT">
                    <text class="cls-6" transform="translate(387.79 1274.84)">6</text>
                </g>
                <g id="TEXT-1598" data-name="TEXT">
                    <text class="cls-6" transform="translate(388.68 1261.37)">7</text>
                </g>
                <g id="TEXT-1599" data-name="TEXT">
                    <text class="cls-6" transform="translate(388.86 1248.48)">8</text>
                </g>
                <g id="TEXT-1600" data-name="TEXT">
                    <text class="cls-6" transform="translate(389.8 1236.35)">9</text>
                </g>
                <g id="TEXT-1601" data-name="TEXT">
                    <text class="cls-6" transform="translate(389.9 1219.31)">10</text>
                </g>
                <g id="TEXT-1602" data-name="TEXT">
                    <text class="cls-6" transform="translate(419.42 1262.91)">14</text>
                </g>
                <g id="TEXT-1603" data-name="TEXT">
                    <text class="cls-6" transform="translate(418.82 1276.08)">15</text>
                </g>
                <g id="TEXT-1604" data-name="TEXT">
                    <text class="cls-6" transform="translate(418.29 1288.81)">16</text>
                </g>
                <g id="TEXT-1605" data-name="TEXT">
                    <text class="cls-6" transform="translate(417.82 1301.76)">17</text>
                </g>
                <g id="TEXT-1606" data-name="TEXT">
                    <text class="cls-6" transform="translate(416.84 1314.72)">18</text>
                </g>
                <g id="TEXT-1607" data-name="TEXT">
                    <text class="cls-6" transform="translate(416.36 1327.72)">19</text>
                </g>
                <g id="TEXT-1608" data-name="TEXT">
                    <text class="cls-6" transform="translate(419.56 1343.94)">20</text>
                </g>
                <g id="TEXT-1609" data-name="TEXT">
                    <text class="cls-6" transform="translate(399.24 1343.92)">21</text>
                </g>
                <g id="TEXT-1610" data-name="TEXT">
                    <text class="cls-6" transform="translate(420.42 1249.96)">13</text>
                </g>
                <g id="TEXT-1611" data-name="TEXT">
                    <text class="cls-6" transform="translate(420.64 1236.97)">12</text>
                </g>
                <g id="TEXT-1612" data-name="TEXT">
                    <text class="cls-6" transform="translate(421.72 1224.06)">
                        <tspan class="cls-7">1</tspan>
                        <tspan x="2.41" y="0">1</tspan>
                    </text>
                </g>
            </g>
            <g id="MZ-7-2" data-name="MZ-7">
                <path class="cls-3" d="M419.21,817.79l31.1,1.6s12.1-1.4,11.4,13l-6.2,123.2s-.5,13.3-13.9,12.6l-39-2.2s-19.9-.5-17.8-24.9l5.6-111.6s.7-13.7,14.4-12.6Z"/>
                <path class="cls-4" d="M427.21,820.89l-22.8-1.1s-7.8-.9-10,8.8l-.3,6.9,32.4,1.6Z"/>
                <rect class="cls-4" x="403.35" y="826.54" width="13" height="32.4" transform="translate(-452.34 1209.9) rotate(-87.13)"/>
                <rect class="cls-4" x="435.72" y="828.22" width="13" height="32.4" transform="translate(-423.26 1243.83) rotate(-87.13)"/>
                <rect class="cls-4" x="402.65" y="839.54" width="13" height="32.4" transform="translate(-465.99 1221.55) rotate(-87.13)"/>
                <rect class="cls-4" x="435.03" y="841.11" width="13" height="32.4" transform="translate(-436.81 1255.39) rotate(-87.13)"/>
                <rect class="cls-4" x="402.05" y="852.44" width="13" height="32.4" transform="translate(-479.44 1233.21) rotate(-87.13)"/>
                <rect class="cls-4" x="434.43" y="854.12" width="13" height="32.4" transform="translate(-450.36 1267.14) rotate(-87.13)"/>
                <rect class="cls-4" x="401.35" y="865.44" width="13" height="32.4" transform="translate(-493.09 1244.86) rotate(-87.13)"/>
                <rect class="cls-4" x="433.73" y="867.02" width="13" height="32.4" transform="translate(-463.91 1278.7) rotate(-87.13)"/>
                <rect class="cls-4" x="400.75" y="878.34" width="13" height="32.4" transform="translate(-506.55 1256.52) rotate(-87.13)"/>
                <rect class="cls-4" x="433.12" y="880.02" width="13" height="32.4" transform="translate(-477.47 1290.45) rotate(-87.13)"/>
                <rect class="cls-4" x="400.05" y="891.34" width="13" height="32.4" transform="translate(-520.2 1268.17) rotate(-87.13)"/>
                <rect class="cls-4" x="432.43" y="892.92" width="13" height="32.4" transform="translate(-491.02 1302) rotate(-87.13)"/>
                <rect class="cls-4" x="399.45" y="904.25" width="13" height="32.4" transform="translate(-533.65 1279.83) rotate(-87.13)"/>
                <rect class="cls-4" x="431.82" y="905.92" width="13" height="32.4" transform="translate(-504.58 1313.76) rotate(-87.13)"/>
                <rect class="cls-4" x="398.75" y="917.24" width="13" height="32.4" transform="translate(-547.3 1291.48) rotate(-87.13)"/>
                <rect class="cls-4" x="431.13" y="918.82" width="13" height="32.4" transform="translate(-518.12 1325.31) rotate(-87.13)"/>
                <path class="cls-4" d="M427.21,820.89l24.8,1.2s7.3.1,7.2,8.6l-.4,7.9-32.4-1.6Z"/>
                <path class="cls-4" d="M430.41,941.19c0,.8-1.1,22.7-1.1,22.7l12.6.7s9.4.8,11-8.7l.6-13.5Z"/>
                <rect class="cls-4" x="409.23" y="942.76" width="22.7" height="18.5" transform="translate(-551.28 1324.43) rotate(-87.13)"/>
                <path class="cls-4" d="M388.81,939.09l-.3,6.5s-1.1,14.4,14.6,16.9l7.7.4,1.1-22.7Z"/>
                <g id="TEXT-1613" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 409.08, 897.04)">MZ-7</text>
                </g>
                <g id="TEXT-1614" data-name="TEXT">
                    <text class="cls-6" transform="translate(399.09 954.45)">1</text>
                </g>
                <g id="TEXT-1615" data-name="TEXT">
                    <text class="cls-6" transform="translate(404.25 937.84)">2</text>
                </g>
                <g id="TEXT-1616" data-name="TEXT">
                    <text class="cls-6" transform="translate(404.04 925.05)">3</text>
                </g>
                <g id="TEXT-1617" data-name="TEXT">
                    <text class="cls-6" transform="translate(404.78 912.17)">4</text>
                </g>
                <g id="TEXT-1618" data-name="TEXT">
                    <text class="cls-6" transform="translate(406 898.99)">5</text>
                </g>
                <g id="TEXT-1619" data-name="TEXT">
                    <text class="cls-6" transform="translate(406.73 886.68)">6</text>
                </g>
                <g id="TEXT-1620" data-name="TEXT">
                    <text class="cls-6" transform="translate(407.62 873.22)">7</text>
                </g>
                <g id="TEXT-1621" data-name="TEXT">
                    <text class="cls-6" transform="translate(407.8 860.32)">8</text>
                </g>
                <g id="TEXT-1622" data-name="TEXT">
                    <text class="cls-6" transform="translate(408.74 848.19)">9</text>
                </g>
                <g id="TEXT-1623" data-name="TEXT">
                    <text class="cls-6" transform="translate(408.83 831.16)">10</text>
                </g>
                <g id="TEXT-1624" data-name="TEXT">
                    <text class="cls-6" transform="translate(438.36 874.76)">14</text>
                </g>
                <g id="TEXT-1625" data-name="TEXT">
                    <text class="cls-6" transform="translate(437.75 887.93)">15</text>
                </g>
                <g id="TEXT-1626" data-name="TEXT">
                    <text class="cls-6" transform="translate(437.22 900.66)">16</text>
                </g>
                <g id="TEXT-1627" data-name="TEXT">
                    <text class="cls-6" transform="translate(436.76 913.61)">17</text>
                </g>
                <g id="TEXT-1628" data-name="TEXT">
                    <text class="cls-6" transform="translate(435.78 926.56)">18</text>
                </g>
                <g id="TEXT-1629" data-name="TEXT">
                    <text class="cls-6" transform="translate(435.3 939.57)">19</text>
                </g>
                <g id="TEXT-1630" data-name="TEXT">
                    <text class="cls-6" transform="translate(438.5 955.78)">20</text>
                </g>
                <g id="TEXT-1631" data-name="TEXT">
                    <text class="cls-6" transform="translate(418.18 955.76)">21</text>
                </g>
                <g id="TEXT-1632" data-name="TEXT">
                    <text class="cls-6" transform="translate(439.36 861.81)">13</text>
                </g>
                <g id="TEXT-1633" data-name="TEXT">
                    <text class="cls-6" transform="translate(439.58 848.82)">12</text>
                </g>
                <g id="TEXT-1634" data-name="TEXT">
                    <text class="cls-6" transform="translate(440.65 835.91)">
                        <tspan class="cls-7">1</tspan>
                        <tspan x="2.41" y="0">1</tspan>
                    </text>
                </g>
            </g>
            <g id="MZ-62">
                <path class="cls-3" d="M1816.38,1270.65l-9.3,12.2s-7.7,9.1,3.6,18l37,27.3s8.1,7.1,15.2-1.6l129.8-176.8s5-7.8-3.6-14.2l-36.7-27.1s-10.5-8.9-19.3,3.1Z"/>
                <polygon class="cls-4" points="1823.47 1266.75 1849.47 1285.85 1857.08 1275.35 1831.17 1256.35 1823.47 1266.75"/>
                <polygon class="cls-4" points="1831.17 1256.35 1857.08 1275.35 1864.78 1264.95 1838.88 1245.95 1831.17 1256.35"/>
                <polygon class="cls-4" points="1838.88 1245.85 1864.78 1264.95 1872.47 1254.45 1846.58 1235.45 1838.88 1245.85"/>
                <polygon class="cls-4" points="1846.58 1235.45 1872.47 1254.45 1880.17 1244.05 1854.17 1224.95 1846.58 1235.45"/>
                <polygon class="cls-4" points="1854.17 1224.95 1880.17 1244.05 1887.78 1233.65 1861.88 1214.55 1854.17 1224.95"/>
                <polygon class="cls-4" points="1861.88 1214.55 1887.88 1233.55 1895.47 1223.15 1869.58 1204.05 1861.88 1214.55"/>
                <polygon class="cls-4" points="1869.58 1204.05 1895.47 1223.15 1903.17 1212.65 1877.28 1193.65 1869.58 1204.05"/>
                <polygon class="cls-4" points="1877.28 1193.65 1903.17 1212.65 1910.88 1202.25 1884.88 1183.15 1877.28 1193.65"/>
                <polygon class="cls-4" points="1892.58 1172.75 1918.58 1191.75 1926.17 1181.35 1900.28 1162.25 1892.58 1172.75"/>
                <polygon class="cls-4" points="1884.88 1183.25 1910.88 1202.25 1918.47 1191.85 1892.58 1172.75 1884.88 1183.25"/>
                <polygon class="cls-4" points="1900.28 1162.25 1926.17 1181.35 1933.88 1170.95 1907.97 1151.85 1900.28 1162.25"/>
                <polygon class="cls-4" points="1907.97 1151.85 1933.88 1170.85 1941.58 1160.45 1915.67 1141.35 1907.97 1151.85"/>
                <polygon class="cls-4" points="1915.67 1141.35 1941.58 1160.45 1949.28 1149.95 1923.28 1130.95 1915.67 1141.35"/>
                <polygon class="cls-4" points="1849.38 1285.85 1875.38 1304.95 1882.97 1294.45 1857.08 1275.45 1849.38 1285.85"/>
                <polygon class="cls-4" points="1857.08 1275.45 1882.97 1294.45 1890.67 1284.05 1864.78 1264.95 1857.08 1275.45"/>
                <polygon class="cls-4" points="1864.78 1264.95 1890.67 1284.05 1898.38 1273.55 1872.47 1254.55 1864.78 1264.95"/>
                <polygon class="cls-4" points="1872.47 1254.55 1898.38 1273.55 1906.08 1263.15 1880.17 1244.05 1872.47 1254.55"/>
                <polygon class="cls-4" points="1880.08 1244.05 1906.08 1263.15 1913.67 1252.75 1887.78 1233.65 1880.08 1244.05"/>
                <polygon class="cls-4" points="1887.78 1233.65 1913.78 1252.65 1921.38 1242.25 1895.47 1223.15 1887.78 1233.65"/>
                <polygon class="cls-4" points="1895.47 1223.15 1921.38 1242.25 1929.08 1231.75 1903.17 1212.75 1895.47 1223.15"/>
                <polygon class="cls-4" points="1903.17 1212.75 1929.08 1231.75 1936.78 1221.35 1910.88 1202.25 1903.17 1212.75"/>
                <polygon class="cls-4" points="1918.47 1191.85 1944.47 1210.85 1952.08 1200.45 1926.17 1181.35 1918.47 1191.85"/>
                <polygon class="cls-4" points="1910.78 1202.25 1936.78 1221.35 1944.38 1210.95 1918.47 1191.85 1910.78 1202.25"/>
                <polygon class="cls-4" points="1926.17 1181.35 1952.08 1200.45 1959.78 1190.05 1933.88 1170.95 1926.17 1181.35"/>
                <polygon class="cls-4" points="1933.88 1170.95 1959.78 1189.95 1967.47 1179.55 1941.58 1160.45 1933.88 1170.95"/>
                <polygon class="cls-4" points="1941.58 1160.45 1967.47 1179.45 1975.17 1169.05 1949.28 1150.05 1941.58 1160.45"/>
                <path class="cls-4" d="M1823.48,1266.75l-13.4,18.3s-5.4,6.7,1.9,13.7l5.4,3.7,19.2-26.1Z"/>
                <polygon class="cls-4" points="1817.38 1302.55 1830.28 1311.95 1849.38 1285.85 1836.47 1276.35 1817.38 1302.55"/>
                <polygon class="cls-4" points="1849.38 1285.85 1862.38 1295.35 1843.17 1321.55 1830.28 1311.95 1849.38 1285.85"/>
                <path class="cls-4" d="M1875.38,1304.95l-13.7,18.6-1.2,1.7s-4.2,5.3-10.1,1.6l-7.1-5.2,19.2-26.1Z"/>
                <path class="cls-4" d="M1923.28,1130.95l12.3-16.7s7.7-9.8,19.3-.1l.5.3-19.2,26.1Z"/>
                <polygon class="cls-4" points="1936.28 1140.45 1949.28 1150.05 1968.38 1123.85 1955.47 1114.35 1936.28 1140.45"/>
                <polygon class="cls-4" points="1949.28 1150.05 1962.28 1159.55 1981.38 1133.45 1968.38 1123.85 1949.28 1150.05"/>
                <path class="cls-4" d="M1962.28,1159.55l12.9,9.5,14.9-20.4s3.7-5.8-1.8-10.2l-6.9-5.1Z"/>
            </g>
            <g id="TEXT-1635" data-name="TEXT">
                <text class="cls-6" transform="matrix(0.55, -0.84, 0.84, 0.55, 1859.09, 1317.95)">1</text>
            </g>
            <g id="TEXT-1636" data-name="TEXT">
                <text class="cls-6" transform="matrix(0.55, -0.84, 0.84, 0.55, 1845.52, 1308.37)">2</text>
            </g>
            <g id="TEXT-1637" data-name="TEXT">
                <text class="cls-6" transform="matrix(0.55, -0.84, 0.84, 0.55, 1832.96, 1299.23)">3</text>
            </g>
            <g id="TEXT-1638" data-name="TEXT">
                <text class="cls-6" transform="matrix(0.55, -0.84, 0.84, 0.55, 1821.09, 1290.53)">4</text>
            </g>
            <g id="TEXT-1639" data-name="TEXT">
                <text class="cls-6" transform="matrix(0.55, -0.84, 0.84, 0.55, 1840.02, 1276.03)">5</text>
            </g>
            <g id="TEXT-1640" data-name="TEXT">
                <text class="cls-6" transform="matrix(0.55, -0.84, 0.84, 0.55, 1847.57, 1265.61)">6</text>
            </g>
            <g id="TEXT-1641" data-name="TEXT">
                <text class="cls-6" transform="matrix(0.55, -0.84, 0.84, 0.55, 1855.18, 1255.06)">7</text>
            </g>
            <g id="TEXT-1642" data-name="TEXT">
                <text class="cls-6" transform="matrix(0.55, -0.84, 0.84, 0.55, 1863.17, 1244.58)">8</text>
            </g>
            <g id="TEXT-1643" data-name="TEXT">
                <text class="cls-6" transform="matrix(0.55, -0.84, 0.84, 0.55, 1870.72, 1234.46)">9</text>
            </g>
            <g id="TEXT-1644" data-name="TEXT">
                <text class="cls-6" transform="matrix(0.55, -0.84, 0.84, 0.55, 1877.78, 1223.99)">10</text>
            </g>
            <g id="TEXT-1645" data-name="TEXT">
                <text class="cls-6" transform="matrix(0.55, -0.84, 0.84, 0.55, 1892.9, 1203.26)">12</text>
            </g>
            <g id="TEXT-1646" data-name="TEXT">
                <text class="cls-6" transform="matrix(0.55, -0.84, 0.84, 0.55, 1900.74, 1192.86)">13</text>
            </g>
            <g id="TEXT-1647" data-name="TEXT">
                <text class="cls-6" transform="matrix(0.55, -0.84, 0.84, 0.55, 1908.25, 1182.57)">14</text>
            </g>
            <g id="TEXT-1648" data-name="TEXT">
                <text class="cls-6" transform="matrix(0.55, -0.84, 0.84, 0.55, 1915.59, 1172.43)">15</text>
            </g>
            <g id="TEXT-1649" data-name="TEXT">
                <text class="cls-6" transform="matrix(0.55, -0.84, 0.84, 0.55, 1923.7, 1161.27)">16</text>
            </g>
            <g id="TEXT-1650" data-name="TEXT">
                <text class="cls-6" transform="matrix(0.55, -0.84, 0.84, 0.55, 1931.49, 1151.25)">17</text>
            </g>
            <g id="TEXT-1651" data-name="TEXT">
                <text class="cls-6" transform="matrix(0.55, -0.84, 0.84, 0.55, 1937.26, 1129.52)">18</text>
            </g>
            <g id="TEXT-1652" data-name="TEXT">
                <text class="cls-6" transform="matrix(0.55, -0.84, 0.84, 0.55, 1950, 1138.02)">19</text>
            </g>
            <g id="TEXT-1653" data-name="TEXT">
                <text class="cls-6" transform="matrix(0.55, -0.84, 0.84, 0.55, 1963.74, 1147.95)">20</text>
            </g>
            <g id="TEXT-1654" data-name="TEXT">
                <text class="cls-6" transform="matrix(0.55, -0.84, 0.84, 0.55, 1976.62, 1156.66)">21</text>
            </g>
            <g id="TEXT-1655" data-name="TEXT">
                <text class="cls-6" transform="matrix(0.55, -0.84, 0.84, 0.55, 1957.39, 1170.44)">22</text>
            </g>
            <g id="TEXT-1656" data-name="TEXT">
                <text class="cls-6" transform="matrix(0.55, -0.84, 0.84, 0.55, 1949.31, 1181.31)">23</text>
            </g>
            <g id="TEXT-1657" data-name="TEXT">
                <text class="cls-6" transform="matrix(0.55, -0.84, 0.84, 0.55, 1942.15, 1191.45)">24</text>
            </g>
            <g id="TEXT-1658" data-name="TEXT">
                <text class="cls-6" transform="matrix(0.55, -0.84, 0.84, 0.55, 1934.05, 1201.38)">25</text>
            </g>
            <g id="TEXT-1659" data-name="TEXT">
                <text class="cls-6" transform="matrix(0.55, -0.84, 0.84, 0.55, 1926.85, 1212.1)">26</text>
            </g>
            <g id="TEXT-1660" data-name="TEXT">
                <text class="cls-6" transform="matrix(0.55, -0.84, 0.84, 0.55, 1919.05, 1222.88)">27</text>
            </g>
            <g id="TEXT-1661" data-name="TEXT">
                <text class="cls-6" transform="matrix(0.55, -0.84, 0.84, 0.55, 1911.35, 1233.31)">28</text>
            </g>
            <g id="TEXT-1662" data-name="TEXT">
                <text class="cls-6" transform="matrix(0.55, -0.84, 0.84, 0.55, 1903.71, 1243.79)">29</text>
            </g>
            <g id="TEXT-1663" data-name="TEXT">
                <text class="cls-6" transform="matrix(0.55, -0.84, 0.84, 0.55, 1896.07, 1254.27)">30</text>
            </g>
            <g id="TEXT-1664" data-name="TEXT">
                <text class="cls-6" transform="matrix(0.55, -0.84, 0.84, 0.55, 1888.43, 1264.74)">31</text>
            </g>
            <g id="TEXT-1665" data-name="TEXT">
                <text class="cls-6" transform="matrix(0.55, -0.84, 0.84, 0.55, 1880.79, 1275.22)">32</text>
            </g>
            <g id="TEXT-1666" data-name="TEXT">
                <text class="cls-6" transform="matrix(0.55, -0.84, 0.84, 0.55, 1873.15, 1285.7)">33</text>
            </g>
            <g id="TEXT-1667" data-name="TEXT">
                <text class="cls-6" transform="matrix(0.55, -0.84, 0.84, 0.55, 1865.51, 1296.18)">34</text>
            </g>
            <g id="TEXT-1668" data-name="TEXT">
                <text class="cls-6" transform="matrix(0.55, -0.84, 0.84, 0.55, 1885.28, 1213.73)">
                    <tspan class="cls-7">1</tspan>
                    <tspan x="2.41" y="0">1</tspan>
                </text>
            </g>
            <g id="TEXT-1669" data-name="TEXT">
                <text class="cls-5" transform="matrix(1, 0, 0, 1, 1888.51, 1216.11)">MZ-162</text>
            </g>
            <g id="MZ-158">
                <path class="cls-3" d="M1594.08,1326.85l2.5-50.7s0-10.5,12.8-9.7l174,8.7s8.1.1,10.1,8a11,11,0,0,1-2.9,10l-32.8,44.8a13.58,13.58,0,0,1-6.1,5.2,24.08,24.08,0,0,1-7.8.4l-141.1-7.1C1602.78,1336.55,1595.18,1335.85,1594.08,1326.85Z"/>
                <polygon class="cls-4" points="1632.08 1270.45 1630.47 1302.85 1643.38 1303.45 1645.08 1271.05 1632.08 1270.45"/>
                <polygon class="cls-4" points="1644.97 1271.05 1643.38 1303.45 1656.38 1304.15 1657.97 1271.75 1644.97 1271.05"/>
                <polygon class="cls-4" points="1657.97 1271.75 1656.38 1304.15 1669.38 1304.75 1670.97 1272.35 1657.97 1271.75"/>
                <polygon class="cls-4" points="1670.97 1272.35 1669.38 1304.75 1682.28 1305.45 1683.88 1273.05 1670.97 1272.35"/>
                <polygon class="cls-4" points="1683.88 1273.05 1682.28 1305.45 1695.17 1306.05 1696.88 1273.65 1683.88 1273.05"/>
                <polygon class="cls-4" points="1696.88 1273.65 1695.28 1306.05 1708.17 1306.75 1709.78 1274.35 1696.88 1273.65"/>
                <polygon class="cls-4" points="1709.78 1274.35 1708.17 1306.75 1721.17 1307.35 1722.78 1274.95 1709.78 1274.35"/>
                <polygon class="cls-4" points="1722.78 1274.95 1721.17 1307.35 1734.08 1308.05 1735.67 1275.65 1722.78 1274.95"/>
                <polygon class="cls-4" points="1735.67 1275.65 1734.08 1308.05 1746.97 1308.65 1748.58 1276.25 1735.67 1275.65"/>
                <polygon class="cls-4" points="1630.47 1302.85 1628.88 1335.25 1641.78 1335.85 1643.38 1303.45 1630.47 1302.85"/>
                <polygon class="cls-4" points="1643.38 1303.45 1641.78 1335.85 1654.67 1336.55 1656.28 1304.15 1643.38 1303.45"/>
                <polygon class="cls-4" points="1656.38 1304.15 1654.78 1336.55 1667.67 1337.15 1669.28 1304.75 1656.38 1304.15"/>
                <polygon class="cls-4" points="1669.28 1304.75 1667.67 1337.15 1680.67 1337.75 1682.28 1305.45 1669.28 1304.75"/>
                <polygon class="cls-4" points="1682.28 1305.45 1680.67 1337.85 1693.58 1338.45 1695.17 1306.05 1682.28 1305.45"/>
                <polygon class="cls-4" points="1695.17 1306.05 1693.58 1338.45 1706.58 1339.05 1708.17 1306.75 1695.17 1306.05"/>
                <polygon class="cls-4" points="1708.17 1306.75 1706.58 1339.05 1719.47 1339.75 1721.08 1307.35 1708.17 1306.75"/>
                <polygon class="cls-4" points="1721.08 1307.35 1719.47 1339.75 1732.47 1340.35 1734.08 1308.05 1721.08 1307.35"/>
                <polygon class="cls-4" points="1733.97 1308.05 1732.47 1340.35 1745.38 1341.05 1746.97 1308.65 1733.97 1308.05"/>
                <path class="cls-4" d="M1632.08,1270.45l-22.7-1.1s-8.5-.8-10.4,9.2l-.1,6.6,32.4,1.6Z"/>
                <polygon class="cls-4" points="1598.88 1285.05 1598.08 1301.25 1630.47 1302.85 1631.28 1286.75 1598.88 1285.05"/>
                <polygon class="cls-4" points="1630.47 1302.85 1629.67 1319.05 1597.28 1317.35 1598.08 1301.25 1630.47 1302.85"/>
                <path class="cls-4" d="M1628.88,1335.25l-23.1-1.2-2.1-.1s-6.7-.6-6.9-7.6l.4-8.9,32.4,1.6Z"/>
                <polygon class="cls-4" points="1748.58 1276.25 1766.78 1277.15 1765.08 1309.55 1746.97 1308.65 1748.58 1276.25"/>
                <path class="cls-4" d="M1766.78,1277.15l17.1.9s3.9-.5,6.6,4.5c0,0,2.1,3.5-1.6,8.6l-13.8,18.9-9.8-.5Z"/>
                <path class="cls-4" d="M1745.38,1341s6.1,1,9-3l20.5-28-28-1.3Z"/>
                <g id="TEXT-1670" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 1673.14, 1312.85)">MZ-158</text>
                </g>
                <g id="TEXT-1671" data-name="TEXT">
                    <text class="cls-6" transform="translate(1611.09 1331.12)">1</text>
                </g>
                <g id="TEXT-1672" data-name="TEXT">
                    <text class="cls-6" transform="translate(1611.63 1314.51)">2</text>
                </g>
                <g id="TEXT-1673" data-name="TEXT">
                    <text class="cls-6" transform="translate(1612.36 1298.99)">3</text>
                </g>
                <g id="TEXT-1674" data-name="TEXT">
                    <text class="cls-6" transform="translate(1613.09 1284.3)">4</text>
                </g>
                <g id="TEXT-1675" data-name="TEXT">
                    <text class="cls-6" transform="translate(1636.34 1292.33)">5</text>
                </g>
                <g id="TEXT-1676" data-name="TEXT">
                    <text class="cls-6" transform="translate(1649.19 1292.9)">6</text>
                </g>
                <g id="TEXT-1677" data-name="TEXT">
                    <text class="cls-6" transform="translate(1662.19 1293.44)">7</text>
                </g>
                <g id="TEXT-1678" data-name="TEXT">
                    <text class="cls-6" transform="translate(1675.34 1294.35)">8</text>
                </g>
                <g id="TEXT-1679" data-name="TEXT">
                    <text class="cls-6" transform="translate(1687.94 1295.09)">9</text>
                </g>
                <g id="TEXT-1680" data-name="TEXT">
                    <text class="cls-6" transform="translate(1700.57 1295.23)">10</text>
                </g>
                <g id="TEXT-1681" data-name="TEXT">
                    <text class="cls-6" transform="translate(1713.27 1295.85)">
                        <tspan class="cls-7">1</tspan>
                        <tspan x="2.41" y="0">1</tspan>
                    </text>
                </g>
                <g id="TEXT-1682" data-name="TEXT">
                    <text class="cls-6" transform="translate(1726.2 1296.45)">12</text>
                </g>
                <g id="TEXT-1683" data-name="TEXT">
                    <text class="cls-6" transform="translate(1739.19 1297.28)">13</text>
                </g>
                <g id="TEXT-1684" data-name="TEXT">
                    <text class="cls-6" transform="translate(1754.37 1297.68)">14</text>
                </g>
                <g id="TEXT-1685" data-name="TEXT">
                    <text class="cls-6" transform="translate(1772.14 1298.13)">15</text>
                </g>
                <g id="TEXT-1686" data-name="TEXT">
                    <text class="cls-6" transform="translate(1753.52 1327.44)">16</text>
                </g>
                <g id="TEXT-1687" data-name="TEXT">
                    <text class="cls-6" transform="translate(1738.09 1329.67)">17</text>
                </g>
                <g id="TEXT-1688" data-name="TEXT">
                    <text class="cls-6" transform="translate(1723.93 1328.71)">18</text>
                </g>
                <g id="TEXT-1689" data-name="TEXT">
                    <text class="cls-6" transform="translate(1710.57 1328.6)">19</text>
                </g>
                <g id="TEXT-1690" data-name="TEXT">
                    <text class="cls-6" transform="translate(1698.18 1328.55)">20</text>
                </g>
                <g id="TEXT-1691" data-name="TEXT">
                    <text class="cls-6" transform="translate(1685.09 1327.94)">21</text>
                </g>
                <g id="TEXT-1692" data-name="TEXT">
                    <text class="cls-6" transform="translate(1671.57 1327.17)">22</text>
                </g>
                <g id="TEXT-1693" data-name="TEXT">
                    <text class="cls-6" transform="translate(1659.16 1326.77)">23</text>
                </g>
                <g id="TEXT-1694" data-name="TEXT">
                    <text class="cls-6" transform="translate(1646.41 1325.47)">24</text>
                </g>
                <g id="TEXT-1695" data-name="TEXT">
                    <text class="cls-6" transform="translate(1634.12 1325.04)">25</text>
                </g>
            </g>
            <g id="MZ-155">
                <path class="cls-4" d="M1932.78,1056.15l11,1.1a8.52,8.52,0,0,1,8.5,5.1s1.6,4.4-1.4,7.6l-10.7,14.6-8.8-.4Z"/>
                <path class="cls-3" d="M1605.78,1092.75l2.5-47.8s-1.1-12.2,12.3-11.5l204.5,10.1,54.8,2.9,64.3,8.2s7.5-.3,10.4,6.5c0,0,2.6,6-1.7,10.6l-31.5,42.9s-3.1,4.6-10.9,3.7l-294.8-14.8S1606.08,1103.35,1605.78,1092.75Z"/>
                <polygon class="cls-4" points="1643.88 1037.35 1642.28 1069.65 1655.17 1070.35 1656.78 1037.95 1643.88 1037.35"/>
                <polygon class="cls-4" points="1656.78 1037.95 1655.17 1070.35 1668.17 1070.95 1669.78 1038.55 1656.78 1037.95"/>
                <polygon class="cls-4" points="1669.78 1038.55 1668.17 1070.95 1681.08 1071.65 1682.78 1039.25 1669.78 1038.55"/>
                <polygon class="cls-4" points="1682.78 1039.25 1681.17 1071.65 1694.08 1072.25 1695.67 1039.85 1682.78 1039.25"/>
                <polygon class="cls-4" points="1695.67 1039.85 1694.08 1072.25 1706.97 1072.95 1708.58 1040.55 1695.67 1039.85"/>
                <polygon class="cls-4" points="1708.67 1040.55 1707.08 1072.95 1719.97 1073.55 1721.58 1041.15 1708.67 1040.55"/>
                <polygon class="cls-4" points="1721.58 1041.15 1719.97 1073.55 1732.88 1074.25 1734.58 1041.85 1721.58 1041.15"/>
                <polygon class="cls-4" points="1734.47 1041.85 1732.97 1074.25 1745.88 1074.85 1747.47 1042.45 1734.47 1041.85"/>
                <polygon class="cls-4" points="1760.47 1043.15 1758.88 1075.55 1771.78 1076.15 1773.38 1043.75 1760.47 1043.15"/>
                <polygon class="cls-4" points="1747.47 1042.45 1745.88 1074.85 1758.78 1075.55 1760.38 1043.15 1747.47 1042.45"/>
                <polygon class="cls-4" points="1773.38 1043.75 1771.78 1076.15 1784.67 1076.85 1786.28 1044.45 1773.38 1043.75"/>
                <polygon class="cls-4" points="1786.38 1044.45 1784.78 1076.85 1797.67 1077.45 1799.28 1045.05 1786.38 1044.45"/>
                <polygon class="cls-4" points="1799.28 1045.05 1797.67 1077.45 1810.58 1078.15 1812.28 1045.75 1799.28 1045.05"/>
                <polygon class="cls-4" points="1642.17 1069.65 1640.67 1102.05 1653.58 1102.75 1655.17 1070.35 1642.17 1069.65"/>
                <polygon class="cls-4" points="1655.17 1070.35 1653.58 1102.75 1666.47 1103.35 1668.08 1070.95 1655.17 1070.35"/>
                <polygon class="cls-4" points="1668.17 1070.95 1666.58 1103.35 1679.47 1104.05 1681.08 1071.65 1668.17 1070.95"/>
                <polygon class="cls-4" points="1681.08 1071.65 1679.47 1104.05 1692.38 1104.65 1694.08 1072.25 1681.08 1071.65"/>
                <polygon class="cls-4" points="1693.97 1072.25 1692.38 1104.65 1705.38 1105.35 1706.97 1072.95 1693.97 1072.25"/>
                <polygon class="cls-4" points="1706.97 1072.95 1705.38 1105.35 1718.28 1105.95 1719.97 1073.55 1706.97 1072.95"/>
                <polygon class="cls-4" points="1719.97 1073.55 1718.38 1105.95 1731.28 1106.55 1732.88 1074.25 1719.97 1073.55"/>
                <polygon class="cls-4" points="1732.88 1074.25 1731.28 1106.65 1744.17 1107.25 1745.88 1074.85 1732.88 1074.25"/>
                <polygon class="cls-4" points="1758.78 1075.55 1757.17 1107.85 1770.08 1108.55 1771.78 1076.15 1758.78 1075.55"/>
                <polygon class="cls-4" points="1745.78 1074.85 1744.17 1107.25 1757.17 1107.85 1758.78 1075.55 1745.78 1074.85"/>
                <polygon class="cls-4" points="1771.67 1076.15 1770.08 1108.55 1783.08 1109.15 1784.67 1076.85 1771.67 1076.15"/>
                <polygon class="cls-4" points="1784.67 1076.85 1783.08 1109.15 1795.97 1109.85 1797.67 1077.45 1784.67 1076.85"/>
                <polygon class="cls-4" points="1797.67 1077.45 1796.08 1109.85 1808.97 1110.45 1810.58 1078.15 1797.67 1077.45"/>
                <polygon class="cls-4" points="1812.17 1045.75 1810.58 1078.15 1823.58 1078.75 1825.17 1046.35 1812.17 1045.75"/>
                <polygon class="cls-4" points="1810.58 1078.15 1808.97 1110.45 1821.88 1111.15 1823.58 1078.75 1810.58 1078.15"/>
                <polygon class="cls-4" points="1825.17 1046.45 1823.58 1078.75 1836.47 1079.45 1838.08 1047.05 1825.17 1046.45"/>
                <polygon class="cls-4" points="1823.47 1078.75 1821.88 1111.15 1834.78 1111.85 1836.47 1079.45 1823.47 1078.75"/>
                <polygon class="cls-4" points="1838.08 1047.05 1836.47 1079.45 1849.38 1080.05 1850.97 1047.75 1838.08 1047.05"/>
                <polygon class="cls-4" points="1836.38 1079.45 1834.78 1111.75 1847.78 1112.45 1849.38 1080.05 1836.38 1079.45"/>
                <polygon class="cls-4" points="1850.97 1047.65 1849.38 1080.05 1862.28 1080.75 1863.88 1048.35 1850.97 1047.65"/>
                <polygon class="cls-4" points="1849.28 1080.05 1847.67 1112.45 1860.67 1113.05 1862.28 1080.65 1849.28 1080.05"/>
                <polygon class="cls-4" points="1863.88 1048.35 1862.28 1080.65 1875.17 1081.35 1876.78 1048.95 1863.88 1048.35"/>
                <polygon class="cls-4" points="1862.28 1080.65 1860.67 1113.05 1873.58 1113.75 1875.17 1081.35 1862.28 1080.65"/>
                <path class="cls-4" d="M1643.88,1037.35l-22.7-1.1s-8.5-.8-10.4,9.2l-.1,6.6,32.4,1.6Z"/>
                <polygon class="cls-4" points="1610.67 1051.95 1609.88 1068.05 1642.17 1069.65 1643.08 1053.55 1610.67 1051.95"/>
                <polygon class="cls-4" points="1642.17 1069.65 1641.47 1085.85 1609.08 1084.25 1609.88 1068.05 1642.17 1069.65"/>
                <path class="cls-4" d="M1640.68,1102l-23.1-1.2-2.1-.1s-6.7-.6-6.9-7.6l.4-8.9,32.4,1.6Z"/>
                <line class="cls-4" x1="1843.18" y1="1063.55" x2="1843.18" y2="1064.15"/>
                <polygon class="cls-4" points="1876.78 1048.95 1879.88 1049.15 1890.78 1050.75 1889.28 1082.05 1875.17 1081.35 1876.78 1048.95"/>
                <polygon class="cls-4" points="1890.78 1050.75 1904.78 1052.75 1903.28 1082.75 1889.28 1082.05 1890.78 1050.75"/>
                <polygon class="cls-4" points="1904.78 1052.75 1918.78 1054.55 1917.28 1083.45 1903.28 1082.75 1904.78 1052.75"/>
                <polygon class="cls-4" points="1918.78 1054.55 1932.78 1056.15 1931.38 1084.15 1917.28 1083.45 1918.78 1054.55"/>
                <path class="cls-4" d="M1914.08,1083.25l-1.6,32.4s4,.7,7.4-3.3l20.4-27.8Z"/>
                <polygon class="cls-4" points="1901.08 1082.65 1899.47 1115.05 1912.47 1115.65 1914.08 1083.25 1901.08 1082.65"/>
                <polygon class="cls-4" points="1888.17 1082.05 1886.47 1114.45 1899.47 1115.05 1901.08 1082.65 1888.17 1082.05"/>
                <polygon class="cls-4" points="1875.17 1081.45 1873.58 1113.85 1886.47 1114.45 1888.17 1082.05 1875.17 1081.45"/>
                <g id="TEXT-1696" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 1767.87, 1082.17)">MZ-155</text>
                </g>
                <g id="TEXT-1697" data-name="TEXT">
                    <text class="cls-6" transform="translate(1623.62 1098.18)">1</text>
                </g>
                <g id="TEXT-1698" data-name="TEXT">
                    <text class="cls-6" transform="translate(1624.16 1081.58)">2</text>
                </g>
                <g id="TEXT-1699" data-name="TEXT">
                    <text class="cls-6" transform="translate(1624.88 1066.06)">3</text>
                </g>
                <g id="TEXT-1700" data-name="TEXT">
                    <text class="cls-6" transform="translate(1625.61 1051.37)">4</text>
                </g>
                <g id="TEXT-1701" data-name="TEXT">
                    <text class="cls-6" transform="translate(1648.13 1059.21)">5</text>
                </g>
                <g id="TEXT-1702" data-name="TEXT">
                    <text class="cls-6" transform="translate(1660.99 1059.77)">6</text>
                </g>
                <g id="TEXT-1703" data-name="TEXT">
                    <text class="cls-6" transform="translate(1673.99 1060.32)">7</text>
                </g>
                <g id="TEXT-1704" data-name="TEXT">
                    <text class="cls-6" transform="translate(1687.13 1061.23)">8</text>
                </g>
                <g id="TEXT-1705" data-name="TEXT">
                    <text class="cls-6" transform="translate(1699.74 1061.97)">9</text>
                </g>
                <g id="TEXT-1706" data-name="TEXT">
                    <text class="cls-6" transform="translate(1712.36 1062.11)">10</text>
                </g>
                <g id="TEXT-1707" data-name="TEXT">
                    <text class="cls-6" transform="translate(1725.06 1062.73)">
                        <tspan class="cls-7">1</tspan>
                        <tspan x="2.41" y="0">1</tspan>
                    </text>
                </g>
                <g id="TEXT-1708" data-name="TEXT">
                    <text class="cls-6" transform="translate(1738 1063.33)">12</text>
                </g>
                <g id="TEXT-1709" data-name="TEXT">
                    <text class="cls-6" transform="translate(1750.99 1064.16)">13</text>
                </g>
                <g id="TEXT-1710" data-name="TEXT">
                    <text class="cls-6" transform="translate(1763.72 1064.77)">14</text>
                </g>
                <g id="TEXT-1711" data-name="TEXT">
                    <text class="cls-6" transform="translate(1776.22 1065.32)">15</text>
                </g>
                <g id="TEXT-1712" data-name="TEXT">
                    <text class="cls-6" transform="translate(1790 1065.95)">16</text>
                </g>
                <g id="TEXT-1713" data-name="TEXT">
                    <text class="cls-6" transform="translate(1802.66 1066.94)">17</text>
                </g>
                <g id="TEXT-1714" data-name="TEXT">
                    <text class="cls-6" transform="translate(1800.88 1099.13)">37</text>
                </g>
                <g id="TEXT-1715" data-name="TEXT">
                    <text class="cls-6" transform="translate(1787.36 1098.36)">38</text>
                </g>
                <g id="TEXT-1716" data-name="TEXT">
                    <text class="cls-6" transform="translate(1774.95 1097.97)">39</text>
                </g>
                <g id="TEXT-1717" data-name="TEXT">
                    <text class="cls-6" transform="translate(1762.2 1096.67)">40</text>
                </g>
                <g id="TEXT-1718" data-name="TEXT">
                    <text class="cls-6" transform="translate(1749.29 1096.55)">41</text>
                </g>
                <g id="TEXT-1719" data-name="TEXT">
                    <text class="cls-6" transform="translate(1735.99 1095.96)">42</text>
                </g>
                <g id="TEXT-1720" data-name="TEXT">
                    <text class="cls-6" transform="translate(1723.04 1095.27)">43</text>
                </g>
                <g id="TEXT-1721" data-name="TEXT">
                    <text class="cls-6" transform="translate(1710.09 1094.65)">44</text>
                </g>
                <g id="TEXT-1722" data-name="TEXT">
                    <text class="cls-6" transform="translate(1697.14 1094.03)">45</text>
                </g>
                <g id="TEXT-1723" data-name="TEXT">
                    <text class="cls-6" transform="translate(1684.19 1093.42)">46</text>
                </g>
                <g id="TEXT-1724" data-name="TEXT">
                    <text class="cls-6" transform="translate(1671.24 1092.8)">47</text>
                </g>
                <g id="TEXT-1725" data-name="TEXT">
                    <text class="cls-6" transform="translate(1658.28 1092.18)">48</text>
                </g>
                <g id="TEXT-1726" data-name="TEXT">
                    <text class="cls-6" transform="translate(1645.33 1091.57)">49</text>
                </g>
                <g id="HATCH">
                    <path class="cls-8" d="M1759.58,1030.15h0m5.3.2h0m0,0h0m0,0h0m5.2.3h0m0,0h0m5.2.3h0m-3.1-.2h0m0,0h0m1.5-.2h0m1.1-.1h0m1.7-.3h0m1.2-.1h0m-10.4.5h0"/>
                </g>
                <g id="TEXT-1727" data-name="TEXT">
                    <text class="cls-6" transform="translate(1815.91 1067.55)">18</text>
                </g>
                <g id="TEXT-1728" data-name="TEXT">
                    <text class="cls-6" transform="translate(1829.64 1068.17)">19</text>
                </g>
                <g id="TEXT-1729" data-name="TEXT">
                    <text class="cls-6" transform="translate(1841.52 1068.52)">20</text>
                </g>
                <g id="TEXT-1730" data-name="TEXT">
                    <text class="cls-6" transform="translate(1854.41 1069.25)">21</text>
                </g>
                <g id="TEXT-1731" data-name="TEXT">
                    <text class="cls-6" transform="translate(1866.65 1069.56)">22</text>
                </g>
                <g id="TEXT-1732" data-name="TEXT">
                    <text class="cls-6" transform="translate(1894.82 1069.68)">24</text>
                </g>
                <g id="TEXT-1733" data-name="TEXT">
                    <text class="cls-6" transform="translate(1909.12 1071.38)">25</text>
                </g>
                <g id="TEXT-1734" data-name="TEXT">
                    <text class="cls-6" transform="translate(1923.04 1071.52)">26</text>
                </g>
                <g id="TEXT-1735" data-name="TEXT">
                    <text class="cls-6" transform="translate(1938.75 1072.27)">27</text>
                </g>
                <g id="TEXT-1736" data-name="TEXT">
                    <text class="cls-6" transform="translate(1920 1099.21)">28</text>
                </g>
                <g id="TEXT-1737" data-name="TEXT">
                    <text class="cls-6" transform="translate(1904.14 1103.31)">29</text>
                </g>
                <g id="TEXT-1738" data-name="TEXT">
                    <text class="cls-6" transform="translate(1891.55 1103.78)">30</text>
                </g>
                <g id="TEXT-1739" data-name="TEXT">
                    <text class="cls-6" transform="translate(1878.6 1103.16)">31</text>
                </g>
                <g id="TEXT-1740" data-name="TEXT">
                    <text class="cls-6" transform="translate(1865.65 1102.55)">32</text>
                </g>
                <g id="TEXT-1741" data-name="TEXT">
                    <text class="cls-6" transform="translate(1852.7 1101.93)">33</text>
                </g>
                <g id="TEXT-1742" data-name="TEXT">
                    <text class="cls-6" transform="translate(1839.17 1100.37)">34</text>
                </g>
                <g id="TEXT-1743" data-name="TEXT">
                    <text class="cls-6" transform="translate(1826.48 1100.01)">35</text>
                </g>
                <g id="TEXT-1744" data-name="TEXT">
                    <text class="cls-6" transform="translate(1814.5 1100.37)">36</text>
                </g>
                <g id="TEXT-1745" data-name="TEXT">
                    <text class="cls-6" transform="translate(1880.58 1070.55)">23</text>
                </g>
            </g>
            <g id="MZ-156">
                <path class="cls-3" d="M1602.38,1160.55l2-38.8s-2.1-12.8,18.5-10.3l272.2,13.7s5.9.9,8.1,6.1c0,0,2.6,6.6-2,11.3l-34.1,46.5s-2.5,5.6-14,4.3l-241.3-12.1s-9.5-.9-9.8-10.1Z"/>
                <polygon class="cls-4" points="1640.08 1115.25 1638.47 1147.55 1651.38 1148.25 1652.97 1115.85 1640.08 1115.25"/>
                <polygon class="cls-4" points="1652.97 1115.85 1651.38 1148.25 1664.28 1148.85 1665.97 1116.55 1652.97 1115.85"/>
                <polygon class="cls-4" points="1665.97 1116.55 1664.38 1148.85 1677.28 1149.55 1678.88 1117.15 1665.97 1116.55"/>
                <polygon class="cls-4" points="1678.88 1117.15 1677.38 1149.55 1690.28 1150.15 1691.88 1117.75 1678.88 1117.15"/>
                <polygon class="cls-4" points="1691.88 1117.75 1690.28 1150.15 1703.17 1150.85 1704.78 1118.45 1691.88 1117.75"/>
                <polygon class="cls-4" points="1704.88 1118.45 1703.28 1150.85 1716.17 1151.45 1717.78 1119.05 1704.88 1118.45"/>
                <polygon class="cls-4" points="1717.78 1119.05 1716.17 1151.45 1729.08 1152.15 1730.78 1119.75 1717.78 1119.05"/>
                <polygon class="cls-4" points="1730.67 1119.75 1729.08 1152.15 1742.08 1152.75 1743.67 1120.35 1730.67 1119.75"/>
                <polygon class="cls-4" points="1756.67 1121.05 1755.08 1153.45 1767.97 1154.05 1769.58 1121.65 1756.67 1121.05"/>
                <polygon class="cls-4" points="1743.67 1120.35 1742.08 1152.75 1754.97 1153.45 1756.58 1121.05 1743.67 1120.35"/>
                <polygon class="cls-4" points="1769.58 1121.65 1767.97 1154.05 1780.88 1154.75 1782.47 1122.35 1769.58 1121.65"/>
                <polygon class="cls-4" points="1782.58 1122.35 1780.97 1154.75 1793.88 1155.35 1795.47 1122.95 1782.58 1122.35"/>
                <polygon class="cls-4" points="1795.47 1123.05 1793.88 1155.35 1806.78 1156.05 1808.47 1123.65 1795.47 1123.05"/>
                <polygon class="cls-4" points="1638.38 1147.55 1636.78 1179.95 1649.78 1180.65 1651.38 1148.25 1638.38 1147.55"/>
                <polygon class="cls-4" points="1651.38 1148.25 1649.78 1180.65 1662.67 1181.25 1664.28 1148.85 1651.38 1148.25"/>
                <polygon class="cls-4" points="1664.28 1148.85 1662.78 1181.25 1675.67 1181.95 1677.28 1149.55 1664.28 1148.85"/>
                <polygon class="cls-4" points="1677.28 1149.55 1675.67 1181.95 1688.58 1182.55 1690.28 1150.15 1677.28 1149.55"/>
                <polygon class="cls-4" points="1690.17 1150.15 1688.58 1182.55 1701.58 1183.25 1703.17 1150.85 1690.17 1150.15"/>
                <polygon class="cls-4" points="1703.17 1150.85 1701.58 1183.25 1714.47 1183.85 1716.17 1151.45 1703.17 1150.85"/>
                <polygon class="cls-4" points="1716.17 1151.45 1714.58 1183.85 1727.47 1184.55 1729.08 1152.15 1716.17 1151.45"/>
                <polygon class="cls-4" points="1729.08 1152.15 1727.47 1184.55 1740.38 1185.15 1741.97 1152.75 1729.08 1152.15"/>
                <polygon class="cls-4" points="1754.97 1153.45 1753.38 1185.85 1766.28 1186.45 1767.97 1154.05 1754.97 1153.45"/>
                <polygon class="cls-4" points="1741.97 1152.75 1740.38 1185.15 1753.28 1185.75 1754.97 1153.45 1741.97 1152.75"/>
                <polygon class="cls-4" points="1767.88 1154.05 1766.28 1186.45 1779.28 1187.05 1780.88 1154.75 1767.88 1154.05"/>
                <polygon class="cls-4" points="1780.88 1154.75 1779.28 1187.05 1792.17 1187.75 1793.88 1155.35 1780.88 1154.75"/>
                <polygon class="cls-4" points="1793.88 1155.35 1792.28 1187.75 1805.17 1188.35 1806.78 1156.05 1793.88 1155.35"/>
                <polygon class="cls-4" points="1808.38 1123.65 1806.78 1156.05 1819.78 1156.65 1821.38 1124.25 1808.38 1123.65"/>
                <polygon class="cls-4" points="1806.78 1156.05 1805.17 1188.35 1818.08 1189.05 1819.67 1156.65 1806.78 1156.05"/>
                <polygon class="cls-4" points="1821.28 1124.35 1819.78 1156.65 1832.67 1157.35 1834.28 1124.95 1821.28 1124.35"/>
                <polygon class="cls-4" points="1819.67 1156.65 1818.08 1189.05 1830.97 1189.75 1832.67 1157.35 1819.67 1156.65"/>
                <polygon class="cls-4" points="1834.28 1124.95 1832.67 1157.35 1845.58 1157.95 1847.17 1125.65 1834.28 1124.95"/>
                <polygon class="cls-4" points="1832.58 1157.35 1830.97 1189.75 1843.97 1190.35 1845.58 1157.95 1832.58 1157.35"/>
                <polygon class="cls-4" points="1847.17 1125.55 1845.58 1157.95 1858.47 1158.65 1860.08 1126.25 1847.17 1125.55"/>
                <polygon class="cls-4" points="1845.47 1157.95 1843.88 1190.35 1856.88 1190.95 1858.47 1158.55 1845.47 1157.95"/>
                <path class="cls-4" d="M1640.08,1115.25l-22.7-1.1s-8.5-.8-10.4,9.2l-.1,6.6,32.4,1.6Z"/>
                <polygon class="cls-4" points="1606.88 1129.85 1606.08 1145.95 1638.38 1147.55 1639.17 1131.45 1606.88 1129.85"/>
                <polygon class="cls-4" points="1638.38 1147.55 1637.58 1163.75 1605.28 1162.15 1606.08 1145.95 1638.38 1147.55"/>
                <path class="cls-4" d="M1636.78,1179.95l-23.1-1.2-2.1-.1s-6.7-.6-6.9-7.6l.4-8.9,32.4,1.6Z"/>
                <line class="cls-4" x1="1839.38" y1="1141.45" x2="1839.38" y2="1142.05"/>
                <polygon class="cls-4" points="1860.08 1126.25 1876.17 1127.05 1874.58 1159.25 1858.47 1158.55 1860.08 1126.25"/>
                <path class="cls-4" d="M1876.18,1127l17.4.7s7.1-.1,7.6,7.9c0,0,.5,2.2-2.6,5.7l-13.5,18.4-10.5-.5Z"/>
                <path class="cls-4" d="M1856.88,1190.95a9.58,9.58,0,0,0,8.7-4.5l19.6-26.7-26.6-1.1Z"/>
                <g id="TEXT-1746" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 1731.11, 1157.78)">MZ-156</text>
                </g>
                <g id="TEXT-1747" data-name="TEXT">
                    <text class="cls-6" transform="translate(1619.72 1175.88)">1</text>
                </g>
                <g id="TEXT-1748" data-name="TEXT">
                    <text class="cls-6" transform="translate(1620.26 1159.28)">2</text>
                </g>
                <g id="TEXT-1749" data-name="TEXT">
                    <text class="cls-6" transform="translate(1620.99 1143.76)">3</text>
                </g>
                <g id="TEXT-1750" data-name="TEXT">
                    <text class="cls-6" transform="translate(1644.24 1136.91)">5</text>
                </g>
                <g id="TEXT-1751" data-name="TEXT">
                    <text class="cls-6" transform="translate(1621.72 1129.07)">4</text>
                </g>
                <g id="TEXT-1752" data-name="TEXT">
                    <text class="cls-6" transform="translate(1657.09 1137.48)">6</text>
                </g>
                <g id="TEXT-1753" data-name="TEXT">
                    <text class="cls-6" transform="translate(1670.1 1138.03)">7</text>
                </g>
                <g id="TEXT-1754" data-name="TEXT">
                    <text class="cls-6" transform="translate(1683.24 1138.93)">8</text>
                </g>
                <g id="TEXT-1755" data-name="TEXT">
                    <text class="cls-6" transform="translate(1695.85 1139.67)">9</text>
                </g>
                <g id="TEXT-1756" data-name="TEXT">
                    <text class="cls-6" transform="translate(1721.17 1140.43)">
                        <tspan class="cls-7">1</tspan>
                        <tspan x="2.41" y="0">1</tspan>
                    </text>
                </g>
                <g id="TEXT-1757" data-name="TEXT">
                    <text class="cls-6" transform="translate(1708.47 1139.81)">10</text>
                </g>
                <g id="TEXT-1758" data-name="TEXT">
                    <text class="cls-6" transform="translate(1734.11 1141.04)">12</text>
                </g>
                <g id="TEXT-1759" data-name="TEXT">
                    <text class="cls-6" transform="translate(1747.1 1141.86)">13</text>
                </g>
                <g id="TEXT-1760" data-name="TEXT">
                    <text class="cls-6" transform="translate(1759.83 1142.47)">14</text>
                </g>
                <g id="TEXT-1761" data-name="TEXT">
                    <text class="cls-6" transform="translate(1772.33 1143.03)">15</text>
                </g>
                <g id="TEXT-1762" data-name="TEXT">
                    <text class="cls-6" transform="translate(1786.11 1143.65)">16</text>
                </g>
                <g id="TEXT-1763" data-name="TEXT">
                    <text class="cls-6" transform="translate(1798.76 1144.65)">17</text>
                </g>
                <g id="TEXT-1764" data-name="TEXT">
                    <text class="cls-6" transform="translate(1783.46 1176.07)">30</text>
                </g>
                <g id="TEXT-1765" data-name="TEXT">
                    <text class="cls-6" transform="translate(1796.98 1176.84)">29</text>
                </g>
                <g id="TEXT-1766" data-name="TEXT">
                    <text class="cls-6" transform="translate(1771.05 1175.67)">31</text>
                </g>
                <g id="TEXT-1767" data-name="TEXT">
                    <text class="cls-6" transform="translate(1758.3 1174.37)">32</text>
                </g>
                <g id="TEXT-1768" data-name="TEXT">
                    <text class="cls-6" transform="translate(1745.39 1174.25)">33</text>
                </g>
                <g id="TEXT-1769" data-name="TEXT">
                    <text class="cls-6" transform="translate(1732.1 1173.67)">34</text>
                </g>
                <g id="TEXT-1770" data-name="TEXT">
                    <text class="cls-6" transform="translate(1719.15 1172.97)">35</text>
                </g>
                <g id="TEXT-1771" data-name="TEXT">
                    <text class="cls-6" transform="translate(1706.2 1172.35)">36</text>
                </g>
                <g id="TEXT-1772" data-name="TEXT">
                    <text class="cls-6" transform="translate(1693.25 1171.74)">37</text>
                </g>
                <g id="TEXT-1773" data-name="TEXT">
                    <text class="cls-6" transform="translate(1680.3 1171.12)">38</text>
                </g>
                <g id="TEXT-1774" data-name="TEXT">
                    <text class="cls-6" transform="translate(1667.34 1170.5)">39</text>
                </g>
                <g id="TEXT-1775" data-name="TEXT">
                    <text class="cls-6" transform="translate(1641.44 1169.27)">41</text>
                </g>
                <g id="TEXT-1776" data-name="TEXT">
                    <text class="cls-6" transform="translate(1654.39 1169.89)">40</text>
                </g>
                <g id="TEXT-1777" data-name="TEXT">
                    <text class="cls-6" transform="translate(1811.77 1145.5)">18</text>
                </g>
                <g id="TEXT-1778" data-name="TEXT">
                    <text class="cls-6" transform="translate(1825.5 1146.12)">19</text>
                </g>
                <g id="TEXT-1779" data-name="TEXT">
                    <text class="cls-6" transform="translate(1837.38 1146.47)">20</text>
                </g>
                <g id="TEXT-1780" data-name="TEXT">
                    <text class="cls-6" transform="translate(1850.27 1147.2)">21</text>
                </g>
                <g id="TEXT-1781" data-name="TEXT">
                    <text class="cls-6" transform="translate(1863.94 1147.52)">22</text>
                </g>
                <g id="TEXT-1782" data-name="TEXT">
                    <text class="cls-6" transform="translate(1882.16 1148.54)">23</text>
                </g>
                <g id="TEXT-1783" data-name="TEXT">
                    <text class="cls-6" transform="translate(1865.44 1176.08)">24</text>
                </g>
                <g id="TEXT-1784" data-name="TEXT">
                    <text class="cls-6" transform="translate(1848.78 1178.73)">25</text>
                </g>
                <g id="TEXT-1785" data-name="TEXT">
                    <text class="cls-6" transform="translate(1835.84 1179.18)">26</text>
                </g>
                <g id="TEXT-1786" data-name="TEXT">
                    <text class="cls-6" transform="translate(1823.76 1178.67)">27</text>
                </g>
                <g id="TEXT-1787" data-name="TEXT">
                    <text class="cls-6" transform="translate(1811 1176.88)">28</text>
                </g>
            </g>
            <g id="MZ-161">
                <path class="cls-3" d="M1729.68,1389.15l-7.8,10.6s-6.1,6.2-3.5,13.7c0,0,2.5,8.4,12.5,8.4l51.9,2.7s9.8.7,15-7.8l48.8-66.9s5.1-9.4-4-16l-39.3-28.8s-6.5-5.2-13.9,2.5Z"/>
                <polygon class="cls-4" points="1829.08 1367.65 1802.78 1348.45 1795.17 1358.95 1821.38 1378.15 1829.08 1367.65"/>
                <polygon class="cls-4" points="1821.38 1378.15 1795.17 1358.95 1787.47 1369.35 1813.78 1388.55 1821.38 1378.15"/>
                <polygon class="cls-4" points="1813.67 1388.65 1787.47 1369.45 1779.78 1379.85 1806.08 1399.05 1813.67 1388.65"/>
                <polygon class="cls-4" points="1806.08 1399.05 1779.78 1379.85 1772.17 1390.35 1798.38 1409.55 1806.08 1399.05"/>
                <polygon class="cls-4" points="1798.38 1409.45 1772.17 1390.25 1764.47 1400.75 1790.67 1419.95 1798.38 1409.45"/>
                <polygon class="cls-4" points="1802.88 1348.45 1776.58 1329.25 1768.97 1339.65 1795.17 1358.95 1802.88 1348.45"/>
                <polygon class="cls-4" points="1795.17 1358.85 1768.97 1339.65 1761.28 1350.15 1787.47 1369.35 1795.17 1358.85"/>
                <polygon class="cls-4" points="1787.47 1369.35 1761.28 1350.15 1753.58 1360.65 1779.78 1379.85 1787.47 1369.35"/>
                <polygon class="cls-4" points="1779.78 1379.85 1753.58 1360.65 1745.88 1371.05 1772.17 1390.25 1779.78 1379.85"/>
                <polygon class="cls-4" points="1772.17 1390.25 1745.88 1371.05 1738.28 1381.45 1764.47 1400.75 1772.17 1390.25"/>
                <polygon class="cls-4" points="1764.47 1400.75 1738.28 1381.55 1730.58 1391.95 1756.78 1411.15 1764.47 1400.75"/>
                <path class="cls-4" d="M1829.08,1367.65l13.4-18.3s5.4-6.7-2-13.8l-5.4-3.7-19.2,26.1Z"/>
                <polygon class="cls-4" points="1835.08 1331.85 1821.97 1322.35 1802.88 1348.45 1815.88 1358.05 1835.08 1331.85"/>
                <polygon class="cls-4" points="1802.88 1348.45 1789.67 1338.85 1808.88 1312.75 1821.97 1322.35 1802.88 1348.45"/>
                <path class="cls-4" d="M1776.58,1329.25l13.7-18.6,1.2-1.7s4.2-5.3,10.2-1.5l7.2,5.3-19.2,26.1Z"/>
                <path class="cls-4" d="M1764.48,1400.75l-13.3,18.4,30,1.5s6.7.7,9.5-.7Z"/>
                <path class="cls-4" d="M1730.58,1391.95l-7.8,10.7s-4.8,9,2.7,13.8c0,0,2,2.1,8,1.8l17.7.9,5.6-8Z"/>
                <g id="TEXT-1788" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 1772.65, 1380.82)">MZ-161</text>
                </g>
                <g id="TEXT-1789" data-name="TEXT">
                    <text class="cls-6" transform="translate(1733.77 1412.44)">1</text>
                </g>
                <g id="TEXT-1790" data-name="TEXT">
                    <text class="cls-6" transform="translate(1745.22 1400.9)">2</text>
                </g>
                <g id="TEXT-1791" data-name="TEXT">
                    <text class="cls-6" transform="translate(1754.12 1390.83)">3</text>
                </g>
                <g id="TEXT-1792" data-name="TEXT">
                    <text class="cls-6" transform="translate(1762.65 1380.81)">4</text>
                </g>
                <g id="TEXT-1793" data-name="TEXT">
                    <text class="cls-6" transform="translate(1770.46 1369.96)">5</text>
                </g>
                <g id="TEXT-1794" data-name="TEXT">
                    <text class="cls-6" transform="translate(1777.86 1359.63)">6</text>
                </g>
                <g id="TEXT-1795" data-name="TEXT">
                    <text class="cls-6" transform="translate(1786.19 1349.66)">7</text>
                </g>
                <g id="TEXT-1796" data-name="TEXT">
                    <text class="cls-6" transform="translate(1790.99 1326.04)">8</text>
                </g>
                <g id="TEXT-1797" data-name="TEXT">
                    <text class="cls-6" transform="translate(1803.21 1336.51)">9</text>
                </g>
                <g id="TEXT-1798" data-name="TEXT">
                    <text class="cls-6" transform="translate(1816.61 1345.61)">10</text>
                </g>
                <g id="TEXT-1799" data-name="TEXT">
                    <text class="cls-6" transform="translate(1830.09 1354.79)">
                        <tspan class="cls-7">1</tspan>
                        <tspan x="2.41" y="0">1</tspan>
                    </text>
                </g>
                <g id="TEXT-1800" data-name="TEXT">
                    <text class="cls-6" transform="translate(1810.41 1368.64)">12</text>
                </g>
                <g id="TEXT-1801" data-name="TEXT">
                    <text class="cls-6" transform="translate(1802.97 1379.28)">13</text>
                </g>
                <g id="TEXT-1802" data-name="TEXT">
                    <text class="cls-6" transform="translate(1794.66 1388.84)">14</text>
                </g>
                <g id="TEXT-1803" data-name="TEXT">
                    <text class="cls-6" transform="translate(1786.34 1399.68)">15</text>
                </g>
                <g id="TEXT-1804" data-name="TEXT">
                    <text class="cls-6" transform="translate(1779.09 1409.72)">16</text>
                </g>
                <g id="TEXT-1805" data-name="TEXT">
                    <text class="cls-6" transform="translate(1766.07 1418.98)">17</text>
                </g>
            </g>
            <g id="MZ-118">
                <path class="cls-3" d="M1188.38,1251.55l-7.1,129.5s.9,13.4,15,14l38.1,1.6s17.8,2,19.2-13.9l5.8-122.4s0-11.1-10.4-12.5l-51-2.3C1197.88,1245.75,1190,1246.15,1188.38,1251.55Z"/>
                <g id="TEXT-1806" data-name="TEXT">
                    <text class="cls-6" transform="translate(1196.02 1383.48)">1</text>
                </g>
                <g id="TEXT-1807" data-name="TEXT">
                    <text class="cls-6" transform="translate(1201.18 1366.87)">2</text>
                </g>
                <g id="TEXT-1808" data-name="TEXT">
                    <text class="cls-6" transform="translate(1200.97 1354.08)">3</text>
                </g>
                <g id="TEXT-1809" data-name="TEXT">
                    <text class="cls-6" transform="translate(1201.71 1341.21)">4</text>
                </g>
                <g id="TEXT-1810" data-name="TEXT">
                    <text class="cls-6" transform="translate(1202.94 1328.02)">5</text>
                </g>
                <g id="TEXT-1811" data-name="TEXT">
                    <text class="cls-6" transform="translate(1203.67 1315.71)">6</text>
                </g>
                <g id="TEXT-1812" data-name="TEXT">
                    <text class="cls-6" transform="translate(1204.55 1302.25)">7</text>
                </g>
                <g id="TEXT-1813" data-name="TEXT">
                    <text class="cls-6" transform="translate(1204.73 1289.36)">8</text>
                </g>
                <g id="TEXT-1814" data-name="TEXT">
                    <text class="cls-6" transform="translate(1205.68 1277.23)">9</text>
                </g>
                <g id="TEXT-1815" data-name="TEXT">
                    <text class="cls-6" transform="translate(1205.77 1260.19)">10</text>
                </g>
                <g id="TEXT-1816" data-name="TEXT">
                    <text class="cls-6" transform="translate(1235.29 1303.79)">14</text>
                </g>
                <g id="TEXT-1817" data-name="TEXT">
                    <text class="cls-6" transform="translate(1234.69 1316.96)">15</text>
                </g>
                <g id="TEXT-1818" data-name="TEXT">
                    <text class="cls-6" transform="translate(1234.16 1329.69)">16</text>
                </g>
                <g id="TEXT-1819" data-name="TEXT">
                    <text class="cls-6" transform="translate(1233.7 1342.64)">17</text>
                </g>
                <g id="TEXT-1820" data-name="TEXT">
                    <text class="cls-6" transform="translate(1232.71 1355.59)">18</text>
                </g>
                <g id="TEXT-1821" data-name="TEXT">
                    <text class="cls-6" transform="translate(1232.23 1368.6)">19</text>
                </g>
                <g id="TEXT-1822" data-name="TEXT">
                    <text class="cls-6" transform="translate(1234.75 1385.14)">20</text>
                </g>
                <g id="TEXT-1823" data-name="TEXT">
                    <text class="cls-6" transform="translate(1215.12 1384.79)">21</text>
                </g>
                <g id="TEXT-1824" data-name="TEXT">
                    <text class="cls-6" transform="translate(1236.29 1290.84)">13</text>
                </g>
                <g id="TEXT-1825" data-name="TEXT">
                    <text class="cls-6" transform="translate(1236.51 1277.85)">12</text>
                </g>
                <g id="TEXT-1826" data-name="TEXT">
                    <text class="cls-6" transform="translate(1237.59 1264.94)">
                        <tspan class="cls-7">1</tspan>
                        <tspan x="2.41" y="0">1</tspan>
                    </text>
                </g>
                <path class="cls-4" d="M1224.18,1250l-22.2-1s-10.6-2.1-10.3,8.6l-.6,7,32.4,1.6Z"/>
                <rect class="cls-4" x="1200.26" y="1255.75" width="13" height="32.4" transform="translate(-123.98 2413.54) rotate(-87.13)"/>
                <rect class="cls-4" x="1232.63" y="1257.33" width="13" height="32.4" transform="translate(-94.8 2447.38) rotate(-87.13)"/>
                <rect class="cls-4" x="1199.66" y="1268.65" width="13" height="32.4" transform="translate(-137.44 2425.21) rotate(-87.13)"/>
                <rect class="cls-4" x="1232.04" y="1270.23" width="13" height="32.4" transform="translate(-108.26 2459.04) rotate(-87.13)"/>
                <rect class="cls-4" x="1198.96" y="1281.65" width="13" height="32.4" transform="translate(-151.08 2436.85) rotate(-87.13)"/>
                <rect class="cls-4" x="1231.34" y="1283.23" width="13" height="32.4" transform="translate(-121.9 2470.69) rotate(-87.13)"/>
                <rect class="cls-4" x="1198.36" y="1294.55" width="13" height="32.4" transform="matrix(0.05, -1, 1, 0.05, -164.54, 2448.51)"/>
                <rect class="cls-4" x="1230.74" y="1296.13" width="13" height="32.4" transform="matrix(0.05, -1, 1, 0.05, -135.36, 2482.35)"/>
                <rect class="cls-4" x="1197.66" y="1307.45" width="13" height="32.4" transform="translate(-178.09 2460.07) rotate(-87.13)"/>
                <rect class="cls-4" x="1230.03" y="1309.13" width="13" height="32.4" transform="translate(-149.01 2494) rotate(-87.13)"/>
                <rect class="cls-4" x="1197.06" y="1320.46" width="13" height="32.4" transform="translate(-191.65 2471.82) rotate(-87.13)"/>
                <rect class="cls-4" x="1229.44" y="1322.04" width="13" height="32.4" transform="matrix(0.05, -1, 1, 0.05, -162.47, 2505.66)"/>
                <rect class="cls-4" x="1196.36" y="1333.36" width="13" height="32.4" transform="translate(-205.19 2483.38) rotate(-87.13)"/>
                <rect class="cls-4" x="1228.74" y="1335.03" width="13" height="32.4" transform="translate(-176.12 2517.3) rotate(-87.13)"/>
                <rect class="cls-4" x="1195.76" y="1346.36" width="13" height="32.4" transform="translate(-218.75 2495.13) rotate(-87.13)"/>
                <rect class="cls-4" x="1228.14" y="1347.94" width="13" height="32.4" transform="translate(-189.57 2528.97) rotate(-87.13)"/>
                <path class="cls-4" d="M1224.18,1250l24.8,1.2s6.4,1,7.2,8.6l-.4,7.9-32.4-1.6Z"/>
                <rect class="cls-4" x="1206.14" y="1371.97" width="22.7" height="18.5" transform="translate(-222.93 2528.06) rotate(-87.13)"/>
                <path class="cls-4" d="M1185.78,1368.15l-.6,11.6s-.8,8.5,9.7,11.3l12.8.9,1.1-22.7Z"/>
                <g id="TEXT-1827" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 1205.74, 1321.43)">MZ-<tspan class="cls-7" x="21.32" y="0">1</tspan>
                        <tspan x="27.11" y="0">18</tspan>
                    </text>
                </g>
                <path class="cls-4" d="M1226.28,1392.95l10.6.5s12.2-.1,13.1-12.6l.5-9.4-23.1-1.1Z"/>
            </g>
            <g id="MZ-118-2" data-name="MZ-118">
                <path class="cls-3" d="M1209.12,863.15l-7.1,129.5s.9,13.4,15,14l38.1,1.6s17.8,2,19.2-13.9l5.8-122.4s0-11.1-10.4-12.5l-51-2.3C1218.62,857.35,1210.72,857.75,1209.12,863.15Z"/>
                <g id="TEXT-1828" data-name="TEXT">
                    <text class="cls-6" transform="translate(1216.77 995.08)">1</text>
                </g>
                <g id="TEXT-1829" data-name="TEXT">
                    <text class="cls-6" transform="translate(1221.93 978.48)">2</text>
                </g>
                <g id="TEXT-1830" data-name="TEXT">
                    <text class="cls-6" transform="translate(1221.72 965.69)">3</text>
                </g>
                <g id="TEXT-1831" data-name="TEXT">
                    <text class="cls-6" transform="translate(1222.46 952.81)">4</text>
                </g>
                <g id="TEXT-1832" data-name="TEXT">
                    <text class="cls-6" transform="translate(1223.68 939.63)">5</text>
                </g>
                <g id="TEXT-1833" data-name="TEXT">
                    <text class="cls-6" transform="translate(1224.41 927.32)">6</text>
                </g>
                <g id="TEXT-1834" data-name="TEXT">
                    <text class="cls-6" transform="translate(1225.3 913.86)">7</text>
                </g>
                <g id="TEXT-1835" data-name="TEXT">
                    <text class="cls-6" transform="translate(1225.48 900.96)">8</text>
                </g>
                <g id="TEXT-1836" data-name="TEXT">
                    <text class="cls-6" transform="translate(1226.42 888.83)">9</text>
                </g>
                <g id="TEXT-1837" data-name="TEXT">
                    <text class="cls-6" transform="translate(1226.51 871.8)">10</text>
                </g>
                <g id="TEXT-1838" data-name="TEXT">
                    <text class="cls-6" transform="translate(1256.04 915.4)">14</text>
                </g>
                <g id="TEXT-1839" data-name="TEXT">
                    <text class="cls-6" transform="translate(1255.43 928.57)">15</text>
                </g>
                <g id="TEXT-1840" data-name="TEXT">
                    <text class="cls-6" transform="translate(1254.9 941.3)">16</text>
                </g>
                <g id="TEXT-1841" data-name="TEXT">
                    <text class="cls-6" transform="translate(1254.44 954.25)">17</text>
                </g>
                <g id="TEXT-1842" data-name="TEXT">
                    <text class="cls-6" transform="translate(1253.46 967.2)">18</text>
                </g>
                <g id="TEXT-1843" data-name="TEXT">
                    <text class="cls-6" transform="translate(1252.98 980.2)">19</text>
                </g>
                <g id="TEXT-1844" data-name="TEXT">
                    <text class="cls-6" transform="translate(1255.49 996.74)">20</text>
                </g>
                <g id="TEXT-1845" data-name="TEXT">
                    <text class="cls-6" transform="translate(1235.86 996.4)">21</text>
                </g>
                <g id="TEXT-1846" data-name="TEXT">
                    <text class="cls-6" transform="translate(1257.04 902.45)">13</text>
                </g>
                <g id="TEXT-1847" data-name="TEXT">
                    <text class="cls-6" transform="translate(1257.26 889.46)">12</text>
                </g>
                <g id="TEXT-1848" data-name="TEXT">
                    <text class="cls-6" transform="translate(1258.33 876.55)">
                        <tspan class="cls-7">1</tspan>
                        <tspan x="2.41" y="0">1</tspan>
                    </text>
                </g>
                <path class="cls-4" d="M1244.92,861.65l-22.2-1s-10.6-2.1-10.3,8.6l-.6,7,32.4,1.6Z"/>
                <rect class="cls-4" x="1221" y="867.35" width="13" height="32.4" transform="translate(283.63 2065.3) rotate(-87.13)"/>
                <rect class="cls-4" x="1253.38" y="868.93" width="13" height="32.4" transform="translate(312.81 2099.14) rotate(-87.13)"/>
                <rect class="cls-4" x="1220.41" y="880.26" width="13" height="32.4" transform="translate(270.18 2076.97) rotate(-87.13)"/>
                <rect class="cls-4" x="1252.78" y="881.84" width="13" height="32.4" transform="translate(299.36 2110.8) rotate(-87.13)"/>
                <rect class="cls-4" x="1219.71" y="893.25" width="13" height="32.4" transform="translate(256.53 2088.61) rotate(-87.13)"/>
                <rect class="cls-4" x="1252.08" y="894.83" width="13" height="32.4" transform="matrix(0.05, -1, 1, 0.05, 285.71, 2122.45)"/>
                <rect class="cls-4" x="1219.11" y="906.16" width="13" height="32.4" transform="matrix(0.05, -1, 1, 0.05, 243.08, 2100.28)"/>
                <rect class="cls-4" x="1251.48" y="907.74" width="13" height="32.4" transform="translate(272.26 2134.11) rotate(-87.13)"/>
                <rect class="cls-4" x="1218.41" y="919.06" width="13" height="32.4" transform="translate(229.53 2111.83) rotate(-87.13)"/>
                <rect class="cls-4" x="1250.78" y="920.74" width="13" height="32.4" transform="translate(258.6 2145.76) rotate(-87.13)"/>
                <rect class="cls-4" x="1217.81" y="932.06" width="13" height="32.4" transform="translate(215.97 2123.58) rotate(-87.13)"/>
                <rect class="cls-4" x="1250.18" y="933.64" width="13" height="32.4" transform="translate(245.15 2157.42) rotate(-87.13)"/>
                <rect class="cls-4" x="1217.11" y="944.96" width="13" height="32.4" transform="translate(202.42 2135.14) rotate(-87.13)"/>
                <rect class="cls-4" x="1249.48" y="946.64" width="13" height="32.4" transform="translate(231.5 2169.07) rotate(-87.13)"/>
                <rect class="cls-4" x="1216.51" y="957.97" width="13" height="32.4" transform="translate(188.86 2146.89) rotate(-87.13)"/>
                <rect class="cls-4" x="1248.88" y="959.55" width="13" height="32.4" transform="translate(218.04 2180.73) rotate(-87.13)"/>
                <path class="cls-4" d="M1244.92,861.65l24.8,1.2s6.4,1,7.2,8.6l-.4,7.9-32.4-1.6Z"/>
                <rect class="cls-4" x="1226.88" y="983.58" width="22.7" height="18.5" transform="translate(184.69 2179.83) rotate(-87.13)"/>
                <path class="cls-4" d="M1206.52,979.75l-.6,11.6s-.8,8.5,9.7,11.3l12.8.9,1.1-22.7Z"/>
                <g id="TEXT-1849" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 1226.49, 933.04)">MZ-120</text>
                </g>
                <path class="cls-4" d="M1247,1004.55l10.6.5s12.2-.1,13.1-12.6l.5-9.4-23.1-1.1Z"/>
            </g>
            <g id="MZ-118-3" data-name="MZ-118">
                <path class="cls-3" d="M1218.06,647.58,1210,827.87s-2.16,16,11.94,16.72l41.88,2.22s16.46,1.16,17.86-18.8l4.58-98a12.85,12.85,0,0,0-3.58-9.7l-59.86-74.5C1221.59,644.58,1218.94,641.33,1218.06,647.58Z"/>
                <g id="TEXT-1850" data-name="TEXT">
                    <text class="cls-6" transform="translate(1220.73 825.58)">1</text>
                </g>
                <g id="TEXT-1851" data-name="TEXT">
                    <text class="cls-6" transform="translate(1227.76 802.95)">2</text>
                </g>
                <g id="TEXT-1852" data-name="TEXT">
                    <text class="cls-6" transform="translate(1230.14 790.88)">3</text>
                </g>
                <g id="TEXT-1853" data-name="TEXT">
                    <text class="cls-6" transform="translate(1229.52 777.81)">4</text>
                </g>
                <g id="TEXT-1854" data-name="TEXT">
                    <text class="cls-6" transform="translate(1230.24 764.88)">5</text>
                </g>
                <g id="TEXT-1855" data-name="TEXT">
                    <text class="cls-6" transform="translate(1231.13 751.42)">6</text>
                </g>
                <g id="TEXT-1856" data-name="TEXT">
                    <text class="cls-6" transform="translate(1231.56 739.13)">7</text>
                </g>
                <g id="TEXT-1857" data-name="TEXT">
                    <text class="cls-6" transform="translate(1231.13 726.04)">8</text>
                </g>
                <g id="TEXT-1858" data-name="TEXT">
                    <text class="cls-6" transform="translate(1231.43 713.05)">9</text>
                </g>
                <g id="TEXT-1859" data-name="TEXT">
                    <text class="cls-6" transform="translate(1230.24 700.27)">10</text>
                </g>
                <g id="TEXT-1860" data-name="TEXT">
                    <text class="cls-6" transform="translate(1263.12 740.24)">14</text>
                </g>
                <g id="TEXT-1861" data-name="TEXT">
                    <text class="cls-6" transform="translate(1261.87 753.91)">15</text>
                </g>
                <g id="TEXT-1862" data-name="TEXT">
                    <text class="cls-6" transform="translate(1262.52 766.77)">16</text>
                </g>
                <g id="TEXT-1863" data-name="TEXT">
                    <text class="cls-6" transform="translate(1261.87 780.22)">17</text>
                </g>
                <g id="TEXT-1864" data-name="TEXT">
                    <text class="cls-6" transform="translate(1260.54 792.79)">18</text>
                </g>
                <g id="TEXT-1865" data-name="TEXT">
                    <text class="cls-6" transform="translate(1259.81 805.3)">19</text>
                </g>
                <g id="TEXT-1866" data-name="TEXT">
                    <text class="cls-6" transform="translate(1265.95 828.96)">20</text>
                </g>
                <g id="TEXT-1867" data-name="TEXT">
                    <text class="cls-6" transform="translate(1250.45 827.75)">21</text>
                </g>
                <g id="TEXT-1868" data-name="TEXT">
                    <text class="cls-6" transform="translate(1235.29 826.74)">22</text>
                </g>
                <g id="TEXT-1869" data-name="TEXT">
                    <text class="cls-6" transform="translate(1261.87 726.04)">13</text>
                </g>
                <g id="TEXT-1870" data-name="TEXT">
                    <text class="cls-6" transform="translate(1257.26 710.68)">12</text>
                </g>
                <g id="TEXT-1871" data-name="TEXT">
                    <text class="cls-6" transform="translate(1229.52 680.52)">
                        <tspan class="cls-7">1</tspan>
                        <tspan x="2.41" y="0">1</tspan>
                    </text>
                </g>
                <polygon class="cls-4" points="1217.67 730.17 1218.42 717.08 1250.75 718.75 1249.84 731.92 1217.67 730.17"/>
                <polygon class="cls-4" points="1217.17 743.08 1217.67 730.17 1249.84 731.92 1249.24 744.58 1217.17 743.08"/>
                <polygon class="cls-4" points="1249.24 744.58 1249.84 731.92 1282.22 733.33 1281.62 746.33 1249.24 744.58"/>
                <polygon class="cls-4" points="1216.23 756 1217.17 743.08 1249.24 744.58 1248.61 757.75 1216.23 756"/>
                <polygon class="cls-4" points="1248.61 757.75 1249.24 744.58 1281.62 746.33 1280.92 759.33 1248.61 757.75"/>
                <polygon class="cls-4" points="1215.54 768.88 1216.23 756 1248.61 757.75 1247.99 770.63 1215.54 768.88"/>
                <polygon class="cls-4" points="1247.99 770.63 1248.61 757.75 1280.92 759.33 1280.2 772 1247.99 770.63"/>
                <polygon class="cls-4" points="1215.13 781.88 1215.54 768.88 1247.99 770.63 1247.25 783.63 1215.13 781.88"/>
                <polygon class="cls-4" points="1247.25 783.63 1247.99 770.63 1280.2 772 1279.62 785 1247.25 783.63"/>
                <polygon class="cls-4" points="1214.56 794.75 1215.13 781.88 1247.25 783.63 1246.76 796.5 1214.56 794.75"/>
                <polygon class="cls-4" points="1246.76 796.5 1247.25 783.63 1279.62 785 1279.02 798.13 1246.76 796.5"/>
                <polygon class="cls-4" points="1213.85 808.36 1214.56 794.75 1246.76 796.5 1246.01 809.63 1213.85 808.36"/>
                <polygon class="cls-4" points="1246.01 809.63 1246.76 796.5 1279.02 798.13 1278.63 811 1246.01 809.63"/>
                <polygon class="cls-4" points="1228.29 841.28 1230.14 808.88 1246.01 809.63 1244.64 842.29 1228.29 841.28"/>
                <polygon class="cls-4" points="1244.64 842.29 1246.01 809.63 1262.52 810.38 1260.54 842.85 1244.64 842.29"/>
                <path class="cls-4" d="M1278.75,720.25a10.28,10.28,0,0,1,3.47,7.88,24.48,24.48,0,0,1,0,5.21l-32.38-1.42.91-13.17Z"/>
                <polygon class="cls-4" points="1252.25 688.13 1278.75 720.25 1250.75 718.75 1252.25 688.13"/>
                <path class="cls-4" d="M1219.88,691.13l32.13,2.12.25-5.12-22.73-29.62s-5.89-3.62-8.39,3.25C1220.75,668.63,1219.88,691.13,1219.88,691.13Z"/>
                <polygon class="cls-4" points="1218.93 704.19 1219.88 691.13 1252 693.24 1251.39 705.76 1218.93 704.19"/>
                <polygon class="cls-4" points="1250.75 718.75 1218.42 717.08 1218.93 704.19 1251.39 705.76 1250.75 718.75"/>
                <path class="cls-4" d="M1213.85,808.36l-1.1,21.21s-.8,8.5,9.7,11.3l5.84.41,1.85-32.41Z"/>
                <g id="TEXT-1872" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 1232.32, 771.26)">MZ-121</text>
                </g>
                <path class="cls-4" d="M1260.54,842.85l4.1.25s12,.08,12.92-12.42l1.07-19.67-16.11-.62Z"/>
            </g>
            <g id="MZ-131">
                <g id="TEXT-1873" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 1289.92, 1325.65)">MZ-131</text>
                </g>
                <path class="cls-3" d="M1272.48,1254.65l-7.1,129.5s.9,13.4,15,14l38.1,1.6s17.8,2,19.2-13.9l5.8-122.4s0-11.1-10.4-12.5l-51-2.3C1282.08,1248.75,1274.08,1249.25,1272.48,1254.65Z"/>
                <path class="cls-4" d="M1308.48,1253.75l-22.2-1a11.39,11.39,0,0,0-10.3,8.6l-.6,7,32.4,1.6Z"/>
                <rect class="cls-4" x="1284.6" y="1259.45" width="13" height="32.4" transform="translate(-47.56 2501.3) rotate(-87.13)"/>
                <rect class="cls-4" x="1316.98" y="1261.03" width="13" height="32.4" transform="translate(-18.38 2535.13) rotate(-87.13)"/>
                <rect class="cls-4" x="1284" y="1272.35" width="13" height="32.4" transform="translate(-61.01 2512.96) rotate(-87.13)"/>
                <rect class="cls-4" x="1316.37" y="1274.03" width="13" height="32.4" transform="translate(-31.94 2546.88) rotate(-87.13)"/>
                <rect class="cls-4" x="1283.3" y="1285.35" width="13" height="32.4" transform="translate(-74.66 2524.61) rotate(-87.13)"/>
                <rect class="cls-4" x="1315.68" y="1286.93" width="13" height="32.4" transform="translate(-45.48 2558.44) rotate(-87.13)"/>
                <rect class="cls-4" x="1282.71" y="1298.25" width="13" height="32.4" transform="matrix(0.05, -1, 1, 0.05, -88.11, 2536.27)"/>
                <rect class="cls-4" x="1315.08" y="1299.93" width="13" height="32.4" transform="translate(-59.04 2570.19) rotate(-87.13)"/>
                <rect class="cls-4" x="1282" y="1311.25" width="13" height="32.4" transform="translate(-101.77 2547.91) rotate(-87.13)"/>
                <rect class="cls-4" x="1314.38" y="1312.83" width="13" height="32.4" transform="translate(-72.59 2581.75) rotate(-87.13)"/>
                <rect class="cls-4" x="1281.4" y="1324.16" width="13" height="32.4" transform="translate(-115.22 2559.58) rotate(-87.13)"/>
                <rect class="cls-4" x="1313.77" y="1325.84" width="13" height="32.4" transform="matrix(0.05, -1, 1, 0.05, -86.15, 2593.5)"/>
                <rect class="cls-4" x="1280.7" y="1337.16" width="13" height="32.4" transform="translate(-128.87 2571.22) rotate(-87.13)"/>
                <rect class="cls-4" x="1313.08" y="1338.74" width="13" height="32.4" transform="translate(-99.69 2605.06) rotate(-87.13)"/>
                <rect class="cls-4" x="1280.1" y="1350.06" width="13" height="32.4" transform="translate(-142.33 2582.88) rotate(-87.13)"/>
                <rect class="cls-4" x="1312.48" y="1351.64" width="13" height="32.4" transform="translate(-113.15 2616.72) rotate(-87.13)"/>
                <path class="cls-4" d="M1308.48,1253.75l24.8,1.2s6.4,1,7.2,8.6l-.4,7.9-32.4-1.6Z"/>
                <rect class="cls-4" x="1290.58" y="1375.68" width="22.7" height="18.5" transform="translate(-146.41 2615.92) rotate(-87.13)"/>
                <path class="cls-4" d="M1310.58,1396.65l10.6.5s12.2-.1,13.1-12.6l.5-9.4-23.1-1.1Z"/>
                <path class="cls-4" d="M1270.08,1371.95l-.7,9.9s-1.2,12.1,12.1,13.8l10.6.1,1.1-22.7Z"/>
                <g id="TEXT-1874" data-name="TEXT">
                    <text class="cls-6" transform="translate(1280.2 1387.69)">1</text>
                </g>
                <g id="TEXT-1875" data-name="TEXT">
                    <text class="cls-6" transform="translate(1285.36 1371.09)">2</text>
                </g>
                <g id="TEXT-1876" data-name="TEXT">
                    <text class="cls-6" transform="translate(1285.15 1358.3)">3</text>
                </g>
                <g id="TEXT-1877" data-name="TEXT">
                    <text class="cls-6" transform="translate(1285.89 1345.42)">4</text>
                </g>
                <g id="TEXT-1878" data-name="TEXT">
                    <text class="cls-6" transform="translate(1287.11 1332.24)">5</text>
                </g>
                <g id="TEXT-1879" data-name="TEXT">
                    <text class="cls-6" transform="translate(1287.84 1319.93)">6</text>
                </g>
                <g id="TEXT-1880" data-name="TEXT">
                    <text class="cls-6" transform="translate(1288.73 1306.47)">7</text>
                </g>
                <g id="TEXT-1881" data-name="TEXT">
                    <text class="cls-6" transform="translate(1288.91 1293.57)">8</text>
                </g>
                <g id="TEXT-1882" data-name="TEXT">
                    <text class="cls-6" transform="translate(1289.85 1281.44)">9</text>
                </g>
                <g id="TEXT-1883" data-name="TEXT">
                    <text class="cls-6" transform="translate(1289.95 1264.41)">10</text>
                </g>
                <g id="TEXT-1884" data-name="TEXT">
                    <text class="cls-6" transform="translate(1319.47 1308.01)">14</text>
                </g>
                <g id="TEXT-1885" data-name="TEXT">
                    <text class="cls-6" transform="translate(1318.86 1321.18)">15</text>
                </g>
                <g id="TEXT-1886" data-name="TEXT">
                    <text class="cls-6" transform="translate(1318.34 1333.91)">16</text>
                </g>
                <g id="TEXT-1887" data-name="TEXT">
                    <text class="cls-6" transform="translate(1317.87 1346.86)">17</text>
                </g>
                <g id="TEXT-1888" data-name="TEXT">
                    <text class="cls-6" transform="translate(1316.89 1359.81)">18</text>
                </g>
                <g id="TEXT-1889" data-name="TEXT">
                    <text class="cls-6" transform="translate(1316.41 1372.81)">19</text>
                </g>
                <g id="TEXT-1890" data-name="TEXT">
                    <text class="cls-6" transform="translate(1318.92 1389.35)">20</text>
                </g>
                <g id="TEXT-1891" data-name="TEXT">
                    <text class="cls-6" transform="translate(1299.29 1389.01)">21</text>
                </g>
                <g id="TEXT-1892" data-name="TEXT">
                    <text class="cls-6" transform="translate(1320.47 1295.06)">13</text>
                </g>
                <g id="TEXT-1893" data-name="TEXT">
                    <text class="cls-6" transform="translate(1320.69 1282.07)">12</text>
                </g>
                <g id="TEXT-1894" data-name="TEXT">
                    <text class="cls-6" transform="translate(1321.77 1269.16)">
                        <tspan class="cls-7">1</tspan>
                        <tspan x="2.41" y="0">1</tspan>
                    </text>
                </g>
                <g id="TEXT-1895" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 1293.42, 1321.84)">MZ-131</text>
                </g>
            </g>
            <g id="_Grupo_" data-name="&lt;Grupo&gt;">
                <path class="cls-9" d="M927.28,1144.35l-215.2-11.6c-5.6-.3-9.9-4.5-9.7-9.4l2.6-48.8c.3-5,5.1-8.8,10.9-8.5l215.2,11.6c5.6.3,9.9,4.5,9.7,9.4l-2.6,48.8C937.88,1140.85,933,1144.65,927.28,1144.35Z"/>
                <path class="cls-10" d="M927.28,1144.35l-215.2-11.6c-5.6-.3-9.9-4.5-9.7-9.4l2.6-48.8c.3-5,5.1-8.8,10.9-8.5l215.2,11.6c5.6.3,9.9,4.5,9.7,9.4l-2.6,48.8C937.88,1140.85,933,1144.65,927.28,1144.35Z"/>
                <path id="_Trazado_" data-name="&lt;Trazado&gt;" class="cls-11" d="M923.89,1140.53l-208.31-10.47c-5.42-.27-9.58-4.06-9.39-8.48l2.52-44c.29-4.51,4.94-7.94,10.55-7.67l208.31,10.47c5.42.27,9.58,4.06,9.39,8.48l-2.52,44C934.15,1137.37,929.41,1140.8,923.89,1140.53Z"/>
                <g id="TEXT-1896" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 808.86, 1108.05)">A.<tspan class="cls-12" x="11.34" y="0">V</tspan>
                        <tspan x="18.24" y="0">.-3</tspan>
                    </text>
                </g>
            </g>
            <path class="cls-9" d="M931.88,1067.55l-214.4-11.3a10.1,10.1,0,0,1-9.7-10.6l2.6-48.2a10.2,10.2,0,0,1,10.8-9.6l214.4,11.3a10.1,10.1,0,0,1,9.7,10.6l-2.6,48.2A10.2,10.2,0,0,1,931.88,1067.55Z"/>
            <path class="cls-10" d="M931.88,1067.55l-214.4-11.3a10.1,10.1,0,0,1-9.7-10.6l2.6-48.2a10.2,10.2,0,0,1,10.8-9.6l214.4,11.3a10.1,10.1,0,0,1,9.7,10.6l-2.6,48.2A10.2,10.2,0,0,1,931.88,1067.55Z"/>
            <path id="SVGID" class="cls-11" d="M929.19,1063.32l-209.7-10.08c-5.58-.27-9.78-4.46-9.49-9.46l2.54-43c.29-5,5-8.83,10.56-8.57l209.7,10.08c5.58.27,9.78,4.46,9.49,9.46l-2.54,43C939.46,1059.75,934.77,1063.59,929.19,1063.32Z"/>
            <g id="TEXT-1897" data-name="TEXT">
                <text class="cls-5" transform="matrix(1, 0, 0, 1, 816.42, 1035.01)">EQ.-2</text>
            </g>
            <g id="A.V.-5">
                <path id="SVGID-2" data-name="SVGID" class="cls-3" d="M1590,1401.55l2.6-50.9s-.3-9.5,15.1-8.8l102.4,5.6s26.4-1.7,29.1,6.4c0,0,4.5,6.6-8.3,20.6l-28.7,37.8s-3,5.7-11.9,5.6l-88.5-4.8C1601.88,1413,1591.18,1413.75,1590,1401.55Z"/>
                <path class="cls-13" d="M1593.73,1400.54l2.45-48.09s-.28-9,14.23-8.31l96.49,5.29s24.88-1.61,27.42,6c0,0,4.24,6.24-7.82,19.46l-27,35.71s-2.83,5.39-11.21,5.29l-83.39-4.54C1604.95,1411.41,1594.86,1412.07,1593.73,1400.54Z"/>
                <g id="TEXT-1898" data-name="TEXT">
                    <text class="cls-5" transform="matrix(1, 0, 0, 1, 1641.47, 1381.83)">A.<tspan class="cls-12" x="11.34" y="0">V</tspan>
                        <tspan x="18.24" y="0">.-5</tspan>
                    </text>
                </g>
            </g>
            <g id="MZ-129">
                <g id="MZ-130-2" data-name="MZ-130">
                    <path class="cls-3" d="M1313.44,754.1,1352,792.36s13.2,10.59,13.43,15.11l-.23,4.55-9.55,190.12s-.9,9.4-11.2,9.2l-47.1-2.4s-13.3-.3-12.8-14l12.13-234.45a3.23,3.23,0,0,1,.17-.88c.8-2.33,5.05-12.6,16.18-5.84A2.32,2.32,0,0,1,1313.44,754.1Z"/>
                    <rect class="cls-4" x="1306.48" y="819.14" width="13" height="32.4" transform="translate(412.99 2104.87) rotate(-87.13)"/>
                    <rect class="cls-4" x="1338.86" y="820.71" width="13" height="32.4" transform="translate(442.17 2138.71) rotate(-87.13)"/>
                    <rect class="cls-4" x="1305.89" y="832.04" width="13" height="32.4" transform="translate(399.54 2116.54) rotate(-87.13)"/>
                    <rect class="cls-4" x="1338.26" y="833.72" width="13" height="32.4" transform="translate(428.61 2150.46) rotate(-87.13)"/>
                    <rect class="cls-4" x="1305.19" y="845.04" width="13" height="32.4" transform="translate(385.89 2128.18) rotate(-87.13)"/>
                    <rect class="cls-4" x="1337.56" y="846.62" width="13" height="32.4" transform="translate(415.07 2162.02) rotate(-87.13)"/>
                    <rect class="cls-4" x="1304.59" y="857.94" width="13" height="32.4" transform="translate(372.44 2139.84) rotate(-87.13)"/>
                    <rect class="cls-4" x="1336.96" y="859.62" width="13" height="32.4" transform="translate(401.51 2173.77) rotate(-87.13)"/>
                    <rect class="cls-4" x="1303.89" y="870.94" width="13" height="32.4" transform="translate(358.78 2151.49) rotate(-87.13)"/>
                    <rect class="cls-4" x="1336.26" y="872.52" width="13" height="32.4" transform="translate(387.96 2185.33) rotate(-87.13)"/>
                    <rect class="cls-4" x="1303.29" y="883.85" width="13" height="32.4" transform="translate(345.33 2163.15) rotate(-87.13)"/>
                    <rect class="cls-4" x="1335.66" y="885.42" width="13" height="32.4" transform="translate(374.51 2196.99) rotate(-87.13)"/>
                    <rect class="cls-4" x="1302.59" y="896.84" width="13" height="32.4" transform="translate(331.68 2174.8) rotate(-87.13)"/>
                    <rect class="cls-4" x="1334.96" y="898.42" width="13" height="32.4" transform="translate(360.86 2208.63) rotate(-87.13)"/>
                    <rect class="cls-4" x="1301.99" y="909.75" width="13" height="32.4" transform="translate(318.22 2186.46) rotate(-87.13)"/>
                    <rect class="cls-4" x="1334.36" y="911.33" width="13" height="32.4" transform="translate(347.4 2220.3) rotate(-87.13)"/>
                    <rect class="cls-4" x="1301.44" y="922.73" width="13" height="32.4" transform="translate(304.74 2198.25) rotate(-87.13)"/>
                    <rect class="cls-4" x="1333.82" y="924.31" width="13" height="32.4" transform="translate(333.91 2232.08) rotate(-87.13)"/>
                    <rect class="cls-4" x="1300.74" y="935.73" width="13" height="32.4" transform="translate(291.09 2209.89) rotate(-87.13)"/>
                    <rect class="cls-4" x="1333.11" y="937.31" width="13" height="32.4" transform="translate(320.27 2243.73) rotate(-87.13)"/>
                    <rect class="cls-4" x="1300.14" y="948.63" width="13" height="32.4" transform="translate(277.63 2221.56) rotate(-87.13)"/>
                    <rect class="cls-4" x="1332.52" y="950.21" width="13" height="32.4" transform="translate(306.81 2255.39) rotate(-87.13)"/>
                    <rect class="cls-4" x="1299.44" y="961.63" width="13" height="32.4" transform="translate(263.98 2233.2) rotate(-87.13)"/>
                    <rect class="cls-4" x="1331.81" y="963.21" width="13" height="32.4" transform="translate(293.16 2267.04) rotate(-87.13)"/>
                    <path class="cls-4" d="M1288.93,983.68l-.6,12.16s-.6,10.3,10,10.4l13.12.67,1-22.21Z"/>
                    <polygon class="cls-4" points="1312.5 984.7 1311.44 1007.34 1330.06 1007.93 1331.01 985.7 1312.5 984.7"/>
                    <path class="cls-4" d="M1330.06,1007.93l14.68.71s8.4.7,8.4-8.9l.67-12.82-22.8-1.22Z"/>
                    <polygon class="cls-4" points="1298.06 815.38 1297.13 828.03 1329.54 829.64 1330.21 816.77 1298.06 815.38"/>
                    <polygon class="cls-4" points="1330.21 816.77 1329.54 829.64 1361.86 831.23 1362.53 818.5 1330.21 816.77"/>
                    <g id="TEXT-1899" data-name="TEXT">
                        <text class="cls-5" transform="matrix(1, 0, 0, 1, 1306.37, 885.74)">MZ-129</text>
                    </g>
                    <g id="TEXT-1900" data-name="TEXT">
                        <text class="cls-6" transform="translate(1298.73 995.29)">1</text>
                    </g>
                    <g id="TEXT-1901" data-name="TEXT">
                        <text class="cls-6" transform="translate(1305.94 978.48)">2</text>
                    </g>
                    <g id="TEXT-1902" data-name="TEXT">
                        <text class="cls-6" transform="translate(1307.24 966.41)">3</text>
                    </g>
                    <g id="TEXT-1903" data-name="TEXT">
                        <text class="cls-6" transform="translate(1307.38 953.5)">4</text>
                    </g>
                    <g id="TEXT-1904" data-name="TEXT">
                        <text class="cls-6" transform="translate(1308.49 940.51)">5</text>
                    </g>
                    <g id="TEXT-1905" data-name="TEXT">
                        <text class="cls-6" transform="translate(1308.6 927.7)">6</text>
                    </g>
                    <g id="TEXT-1906" data-name="TEXT">
                        <text class="cls-6" transform="translate(1309.57 914.62)">7</text>
                    </g>
                    <g id="TEXT-1907" data-name="TEXT">
                        <text class="cls-6" transform="translate(1310.38 901.62)">8</text>
                    </g>
                    <g id="TEXT-1908" data-name="TEXT">
                        <text class="cls-6" transform="translate(1311.69 889.46)">9</text>
                    </g>
                    <g id="TEXT-1909" data-name="TEXT">
                        <text class="cls-6" transform="translate(1310.39 876.55)">10</text>
                    </g>
                    <g id="TEXT-1910" data-name="TEXT">
                        <text class="cls-6" transform="translate(1310.56 862.99)">
                            <tspan class="cls-7">1</tspan>
                            <tspan x="2.41" y="0">1</tspan>
                        </text>
                    </g>
                    <g id="TEXT-1911" data-name="TEXT">
                        <text class="cls-6" transform="translate(1311.69 849.92)">12</text>
                    </g>
                    <g id="TEXT-1912" data-name="TEXT">
                        <text class="cls-6" transform="translate(1311.69 836.91)">13</text>
                    </g>
                    <g id="TEXT-1913" data-name="TEXT">
                        <text class="cls-6" transform="translate(1312.98 798.75)">16</text>
                    </g>
                    <g id="TEXT-1914" data-name="TEXT">
                        <text class="cls-6" transform="translate(1312.98 785.67)">17</text>
                    </g>
                    <g id="TEXT-1915" data-name="TEXT">
                        <text class="cls-6" transform="translate(1308.49 769.73)">18</text>
                    </g>
                    <g id="TEXT-1916" data-name="TEXT">
                        <text class="cls-6" transform="translate(1315.61 810.4)">15</text>
                    </g>
                    <g id="TEXT-1917" data-name="TEXT">
                        <text class="cls-6" transform="translate(1342.68 812.63)">20</text>
                    </g>
                    <g id="TEXT-1918" data-name="TEXT">
                        <text class="cls-6" transform="translate(1338.53 798.75)">19</text>
                    </g>
                    <g id="TEXT-1919" data-name="TEXT">
                        <text class="cls-6" transform="translate(1346.18 826.56)">21</text>
                    </g>
                    <g id="TEXT-1920" data-name="TEXT">
                        <text class="cls-6" transform="translate(1342.02 839.01)">22</text>
                    </g>
                    <g id="TEXT-1921" data-name="TEXT">
                        <text class="cls-6" transform="translate(1342.02 852.43)">23</text>
                    </g>
                    <g id="TEXT-1922" data-name="TEXT">
                        <text class="cls-6" transform="translate(1340.86 865.32)">24</text>
                    </g>
                    <g id="TEXT-1923" data-name="TEXT">
                        <text class="cls-6" transform="translate(1341.46 878.04)">25</text>
                    </g>
                    <g id="TEXT-1924" data-name="TEXT">
                        <text class="cls-6" transform="translate(1340.86 890.73)">26</text>
                    </g>
                    <g id="TEXT-1925" data-name="TEXT">
                        <text class="cls-6" transform="translate(1340.73 903.8)">27</text>
                    </g>
                    <g id="TEXT-1926" data-name="TEXT">
                        <text class="cls-6" transform="translate(1338.41 916.46)">28</text>
                    </g>
                    <g id="TEXT-1927" data-name="TEXT">
                        <text class="cls-6" transform="translate(1337.81 929.69)">29</text>
                    </g>
                    <g id="TEXT-1928" data-name="TEXT">
                        <text class="cls-6" transform="translate(1337.81 943.04)">30</text>
                    </g>
                    <g id="TEXT-1929" data-name="TEXT">
                        <text class="cls-6" transform="translate(1337.47 955.93)">31</text>
                    </g>
                    <g id="TEXT-1930" data-name="TEXT">
                        <text class="cls-6" transform="translate(1336.51 969.05)">32</text>
                    </g>
                    <g id="TEXT-1931" data-name="TEXT">
                        <text class="cls-6" transform="translate(1338.53 997.98)">34</text>
                    </g>
                    <g id="TEXT-1932" data-name="TEXT">
                        <text class="cls-6" transform="translate(1335.86 981.95)">33</text>
                    </g>
                    <g id="TEXT-1933" data-name="TEXT">
                        <text class="cls-6" transform="translate(1316.41 996.4)">35</text>
                    </g>
                </g>
                <polygon class="cls-4" points="1330.76 804 1298.31 802.38 1297.75 815.38 1330.21 816.77 1330.76 804"/>
                <path class="cls-4" d="M1361.86,805.56a13.66,13.66,0,0,1,.89,6.45c-.06,3.42-.22,6.48-.22,6.48l-32.32-1.73.55-12.77Z"/>
                <polygon class="cls-4" points="1332.17 778 1333 778 1361.86 805.56 1330.76 804 1332.17 778"/>
                <polygon class="cls-4" points="1298.94 789.42 1331.47 790.92 1330.76 804 1298.31 802.38 1298.94 789.42"/>
                <polygon class="cls-4" points="1299.81 776.38 1332.17 778 1331.47 790.92 1298.94 789.42 1299.81 776.38"/>
                <path class="cls-4" d="M1316.41,761.31s-10.72-9.35-16.28,5.64c-.06,1.36-.31,9.43-.31,9.43L1333,778Z"/>
            </g>
            <g id="MZ-12TT">
                <g id="MZ-7-3" data-name="MZ-7">
                    <path class="cls-3" d="M452.52,178.27l28.77-16.93a5.86,5.86,0,0,1,2.5-.79c3.54-.29,12.11.18,11.55,11.62L488,326.5s-.5,13.3-13.9,12.6l-43.56-2.87s-16,.52-13.73-18l5.72-110.73s-.84-5.5,3.23-8.92l24.64-18.87C450.69,179.54,452.37,178.36,452.52,178.27Z"/>
                    <rect class="cls-4" x="435.29" y="201.44" width="13" height="32.4" transform="translate(202.32 647.99) rotate(-87.13)"/>
                    <rect class="cls-4" x="467.66" y="203.12" width="13" height="32.4" transform="translate(231.39 681.92) rotate(-87.13)"/>
                    <rect class="cls-4" x="434.59" y="214.44" width="13" height="32.4" transform="translate(188.67 659.64) rotate(-87.13)"/>
                    <rect class="cls-4" x="466.97" y="216.02" width="13" height="32.4" transform="translate(217.85 693.47) rotate(-87.13)"/>
                    <rect class="cls-4" x="434" y="227.34" width="13" height="32.4" transform="translate(175.21 671.3) rotate(-87.13)"/>
                    <rect class="cls-4" x="466.37" y="229.02" width="13" height="32.4" transform="translate(204.29 705.23) rotate(-87.13)"/>
                    <rect class="cls-4" x="433.29" y="240.34" width="13" height="32.4" transform="translate(161.56 682.95) rotate(-87.13)"/>
                    <rect class="cls-4" x="465.67" y="241.92" width="13" height="32.4" transform="translate(190.74 716.78) rotate(-87.13)"/>
                    <rect class="cls-4" x="432.69" y="253.25" width="13" height="32.4" transform="translate(148.11 694.61) rotate(-87.13)"/>
                    <rect class="cls-4" x="465.07" y="254.93" width="13" height="32.4" transform="translate(177.18 728.53) rotate(-87.13)"/>
                    <rect class="cls-4" x="431.99" y="266.25" width="13" height="32.4" transform="translate(134.46 706.26) rotate(-87.13)"/>
                    <rect class="cls-4" x="464.37" y="267.83" width="13" height="32.4" transform="translate(163.64 740.09) rotate(-87.13)"/>
                    <rect class="cls-4" x="431.39" y="279.15" width="13" height="32.4" transform="translate(121 717.92) rotate(-87.13)"/>
                    <rect class="cls-4" x="463.77" y="280.83" width="13" height="32.4" transform="translate(150.08 751.84) rotate(-87.13)"/>
                    <polygon class="cls-4" points="452.23 334.43 453.64 302.31 469.74 303.19 468.29 335.51 452.23 334.43"/>
                    <path class="cls-4" d="M469.74,303.19c0,.8-1.45,32.32-1.45,32.32l6.59.42s9,1.06,10.59-8.44l1-23.46Z"/>
                    <polygon class="cls-4" points="435.91 333.94 437.46 301.57 453.64 302.31 452.23 334.43 435.91 333.94"/>
                    <path class="cls-4" d="M421.46,300.79s-1.23,19.27-1.21,19.31c.4,1-3.41,14.11,12.91,13.69l2.75.14,1.55-32.37Z"/>
                    <g id="TEXT-1934" data-name="TEXT">
                        <text class="cls-5" transform="matrix(1, 0, 0, 1, 441.59, 267.95)">MZ-12</text>
                    </g>
                    <g id="TEXT-1935" data-name="TEXT">
                        <text class="cls-6" transform="translate(427.74 318.91)">1</text>
                    </g>
                    <g id="TEXT-1936" data-name="TEXT">
                        <text class="cls-6" transform="translate(437.22 295.45)">2</text>
                    </g>
                    <g id="TEXT-1937" data-name="TEXT">
                        <text class="cls-6" transform="translate(437.46 282.48)">3</text>
                    </g>
                    <g id="TEXT-1938" data-name="TEXT">
                        <text class="cls-6" transform="translate(437.46 269.58)">4</text>
                    </g>
                    <g id="TEXT-1939" data-name="TEXT">
                        <text class="cls-6" transform="translate(438.36 256.39)">5</text>
                    </g>
                    <g id="TEXT-1940" data-name="TEXT">
                        <text class="cls-6" transform="translate(439.58 243.59)">6</text>
                    </g>
                    <g id="TEXT-1941" data-name="TEXT">
                        <text class="cls-6" transform="translate(440.65 230.38)">7</text>
                    </g>
                    <g id="TEXT-1942" data-name="TEXT">
                        <text class="cls-6" transform="translate(440.13 217.36)">8</text>
                    </g>
                    <g id="TEXT-1943" data-name="TEXT">
                        <text class="cls-6" transform="translate(442.37 201.6)">9</text>
                    </g>
                    <g id="TEXT-1944" data-name="TEXT">
                        <text class="cls-6" transform="translate(466.37 186.31)">10</text>
                    </g>
                    <g id="TEXT-1945" data-name="TEXT">
                        <text class="cls-6" transform="translate(470.27 232.24)">14</text>
                    </g>
                    <g id="TEXT-1946" data-name="TEXT">
                        <text class="cls-6" transform="translate(469.73 245.24)">15</text>
                    </g>
                    <g id="TEXT-1947" data-name="TEXT">
                        <text class="cls-6" transform="translate(467.1 257.59)">16</text>
                    </g>
                    <g id="TEXT-1948" data-name="TEXT">
                        <text class="cls-6" transform="translate(468.29 271.15)">17</text>
                    </g>
                    <g id="TEXT-1949" data-name="TEXT">
                        <text class="cls-6" transform="translate(467.1 284.55)">18</text>
                    </g>
                    <g id="TEXT-1950" data-name="TEXT">
                        <text class="cls-6" transform="translate(467.1 297.48)">19</text>
                    </g>
                    <g id="TEXT-1951" data-name="TEXT">
                        <text class="cls-6" transform="translate(474.16 321.94)">20</text>
                    </g>
                    <g id="TEXT-1952" data-name="TEXT">
                        <text class="cls-6" transform="translate(458.77 321.94)">21</text>
                    </g>
                    <g id="TEXT-1953" data-name="TEXT">
                        <text class="cls-6" transform="translate(442.1 319.58)">22</text>
                    </g>
                    <g id="TEXT-1954" data-name="TEXT">
                        <text class="cls-6" transform="translate(471.72 219.34)">13</text>
                    </g>
                    <g id="TEXT-1955" data-name="TEXT">
                        <text class="cls-6" transform="translate(478.05 206.81)">12</text>
                    </g>
                    <g id="TEXT-1956" data-name="TEXT">
                        <text class="cls-6" transform="translate(482.29 184.34)">
                            <tspan class="cls-7">1</tspan>
                            <tspan x="2.41" y="0">1</tspan>
                        </text>
                    </g>
                </g>
                <path class="cls-4" d="M425.94,210.34v-4.92s-.36-3.33,3.81-6.75,27.33-22.34,30.06-22.26c.07,0-1.5,35.61-1.5,35.61Z"/>
                <polygon class="cls-4" points="476.04 199.52 478.05 166 459.81 176.41 458.89 198.88 476.04 199.52"/>
                <path class="cls-4" d="M491.11,200.33l1.47-30.17s-1.26-8.67-9.57-6.83l-5,2.67-2,33.52Z"/>
                <polygon class="cls-4" points="458.31 212.02 458.89 198.88 491.11 200.33 490.67 213.64 458.31 212.02"/>
            </g>
            <path class="cls-14" d="M1609.88,1012.37s-3,12.88,12.37,13.51,123.63,6.12,123.63,6.12l70,3.38s4-.17.29-1.23-56.37-15.54-56.37-15.54-115.82-36-134.95-45.07c.12,0-12-3.6-14.2,8.68C1610.25,994.25,1609.88,1012.37,1609.88,1012.37Z"/>
            <path class="cls-4" d="M1612.54,1011.32s-2.39,11.89,9.84,12.46,99.19,4.27,99.19,4.27l55.24,2.69s3.75-1.06.19-3.19c-2.66-1.59-44-12.06-44-12.06s-92.57-30.4-108.13-39.78a2.06,2.06,0,0,0-.65-.25c-1.54-.32-9-2.25-10.51,7.91C1613.35,994.49,1612.54,1011.32,1612.54,1011.32Z"/>
            <path class="cls-15" d="M1367.14,925.05s1.1,10.07,10.42,10.57,94.5,4.69,94.5,4.69l66.57,3.61s8.16-1.55,4.52-8.93c-2-3.62-13-7.91-13-7.91s-72-42.93-142.56-101.51c.07.09-9.47-7.33-15.1,4.79-.75,9.88-.73,10.38-.73,10.38Z"/>
            <path class="cls-16" d="M1370.05,924.21s.72,8.36,9.5,8.83,89.65,4.26,89.65,4.26l51,2.38a2.19,2.19,0,0,0,1.09-.23c2.1-1,9.19-5.33,2.89-12.64C1521.56,924.18,1509,917,1509,917s-52.82-31.76-119.36-87c.06.08-8.63-8.93-14,.45a6,6,0,0,0-.75,2.58,111.2,111.2,0,0,0-.42,11.71Z"/>
            <text class="cls-5" transform="matrix(1, 0, 0, 1, 1405.59, 910.17)">EQ.6</text>
            <polygon class="cls-4" points="1117.25 537.63 1154.41 570.46 1115.88 569.16 1117.25 537.63"/>
            <path class="cls-3" d="M741.82,507.88l220.56,11s10-.5,9.75-13.87l2.19-42.31s2.83-14.07-10.48-14.07l-214.62-10.9s-10.46-3.13-12.79,7.78l-3.35,53.67C733.25,499.18,733.2,506.13,741.82,507.88Z"/>
            <path class="cls-17" d="M744.49,504.93l215.1,10.18s9.75-.45,9.5-12.71l2.12-38.77S974,450.74,961,450.73L751.67,440.65s-10.2-2.87-12.47,7.12L736,497C736.12,497,736.08,503.33,744.49,504.93Z"/>
            <text class="cls-18" transform="translate(836.81 482.47)">A.<tspan class="cls-19" x="12.25" y="0">V</tspan>
                <tspan x="19.77" y="0">.-4</tspan>
            </text>
            <path class="cls-3" d="M737.19,417.17s-1.75,12.33,10,13,183.28,9.21,183.28,9.21,9-1,3.5-9.37a39.25,39.25,0,0,0-6.66-3.75S829.83,379.5,756.92,305.5c-7.4-3.3-13.84,3.33-14.25,7.41S737.19,417.17,737.19,417.17Z"/>
            <path class="cls-17" d="M740.3,415.19s-1.8,11.69,7.46,12.5c10.15.89,161.29,7.79,161.29,7.79s9.82-2.81,4.56-12.14a49.37,49.37,0,0,0-6.77-4.17s-85.17-43.47-149.93-110.5c-6.39-3.1-11.49.83-11.84,4.67S740.3,415.19,740.3,415.19Z"/>
            <text class="cls-18" transform="translate(778.48 399.72)">A.<tspan class="cls-19" x="12.25" y="0">V</tspan>
                <tspan x="19.77" y="0">.-3</tspan>
            </text>
            <path class="cls-3" d="M981.72,462.63S985,450.54,997,454.9c12.25,6.6,78.76,44.28,96.55,60.22,7,6.23-2.83,10.22-2.83,10.22l-102-5s-8.94-2-9.58-9.67C979.67,501.83,981.72,462.63,981.72,462.63Z"/>
            <path class="cls-17" d="M983.41,465.07s2.86-11,13.32-7c10.68,6,67.5,38.52,82.83,51.48,9.1,7.69-3.89,13.13-3.89,13.13l-86.16-5.21s-7.79-1.82-8.35-8.78C981.62,500.66,983.41,465.07,983.41,465.07Z"/>
            <text class="cls-20" transform="translate(1001.67 503.27) scale(1.13 1)">
                <tspan class="cls-21">E</tspan>
                <tspan class="cls-22" x="6.57" y="0">.</tspan>
                <tspan class="cls-23" x="9.36" y="0">Q</tspan>
                <tspan x="18.18" y="0">.10</tspan>
            </text>
            <path class="cls-24" d="M505.77,262.58s-9.1-1.5-9.36-9a74.84,74.84,0,0,1,.3-9.42,11.46,11.46,0,0,1,4.38-6.67c3.56-2.42,41.31-22.67,75.35-24.5s64.68,1.92,95.06,17.38c27.29,13.88,34.41,22.65,36,24.13,3.44,3.25,5.07,15.25-4.66,17.6l-42.43-1.6Z"/>
            <polygon class="cls-25" points="603.76 215.25 591.3 214.92 588.63 263.75 601.91 264.42 603.76 215.25"/>
            <polygon class="cls-25" points="617.16 216.42 603.76 215.25 601.91 264.42 614.54 264.92 617.16 216.42"/>
            <path class="cls-25" d="M524.52,230.38l-2,29.79-14.76-.5s-5.66-1.58-5.92-5.92a70.93,70.93,0,0,1,0-8s.2-3.92,3.23-5.67S524.52,230.38,524.52,230.38Z"/>
            <polygon class="cls-25" points="538.67 224.25 524.52 229.92 522.51 260.17 537.14 261 538.67 224.25"/>
            <polygon class="cls-25" points="552.21 220.42 538.67 224.25 537.14 261 549.74 261.67 552.21 220.42"/>
            <polygon class="cls-25" points="564.75 217.36 552.21 220.42 549.74 261.67 562.75 262.33 564.75 217.36"/>
            <polygon class="cls-25" points="577.96 215.75 564.75 217.36 562.75 262.33 575.75 263.08 577.96 215.75"/>
            <polygon class="cls-25" points="591.3 214.92 577.96 215.75 575.75 263.08 588.63 263.75 591.3 214.92"/>
            <polygon class="cls-25" points="629.57 218.42 615.55 216.42 612.59 264.92 627.24 265.5 629.57 218.42"/>
            <polygon class="cls-25" points="642.45 221.75 629.57 218.42 627.5 265.5 640.54 266.25 642.45 221.75"/>
            <polygon class="cls-25" points="655.33 225.92 642.45 221.75 640.54 266.25 653.26 266.83 655.33 225.92"/>
            <polygon class="cls-25" points="668.22 231.17 655.33 225.92 653.26 266.83 666.2 267.5 668.22 231.17"/>
            <polygon class="cls-25" points="680.87 237.5 668.22 231.17 666.2 267.5 679.55 268.25 680.87 237.5"/>
            <path class="cls-25" d="M704.21,269.26c2.56-1,9.55-4.69,4.54-12a2.94,2.94,0,0,0-.48-.54c-6-5.26-24.71-18-27.4-19.26l-1.32,30.75,23,1.29A3.84,3.84,0,0,0,704.21,269.26Z"/>
            <text class="cls-26" transform="translate(510.99 249.24)">1</text>
            <text class="cls-26" transform="translate(527.89 246.71)">2</text>
            <text class="cls-26" transform="translate(542.32 243.59)">3</text>
            <text class="cls-26" transform="translate(554.58 242.33)">4</text>
            <text class="cls-26" transform="translate(568.58 240.08)">5</text>
            <text class="cls-26" transform="translate(581.17 237.25)">6</text>
            <text class="cls-26" transform="translate(595.22 235.08)">7</text>
            <text class="cls-26" transform="translate(605.93 237.5)">8</text>
            <text class="cls-26" transform="translate(620.33 238.5)">9</text>
            <text class="cls-26" transform="translate(630.73 245.24)">10</text>
            <text class="cls-26" transform="translate(643.64 249.71)">11</text>
            <text class="cls-26" transform="translate(656.55 252.21)">12</text>
            <text class="cls-26" transform="translate(670.09 255.54)">13 </text>
            <text class="cls-26" transform="translate(690.12 261.38)">14 </text>
            <text class="cls-5" transform="translate(588.85 248.27) rotate(0.14)">MZ-23</text>
            <text class="cls-5" transform="matrix(1, 0, 0, 1, 1640.08, 1013.92)">A.<tspan class="cls-12" x="11.34" y="0">V</tspan>
                <tspan x="18.24" y="0">.-6</tspan>
            </text>
        </g>
        <g id="TEXT-1957" data-name="TEXT">
            <text class="cls-27" transform="matrix(1, 0.04, -0.04, 1, 779.86, 989.17)">
                <tspan class="cls-28">C</tspan>
                <tspan x="2.67" y="0">ALLE G</tspan>
                <tspan class="cls-29" x="15.98" y="0">R</tspan>
                <tspan x="18.46" y="0">AL. JOSE </tspan>
                <tspan class="cls-30" x="35.68" y="0">M</tspan>
                <tspan x="39.31" y="0">ANUEL </tspan>
                <tspan class="cls-31" x="53.47" y="0">P</tspan>
                <tspan class="cls-32" x="55.52" y="0">ANDO</tspan>
            </text>
        </g>
        <g id="TEXT-1958" data-name="TEXT">
            <text class="cls-27" transform="matrix(1, 0.04, -0.04, 1, 774.5, 911.88)">
                <tspan class="cls-28">C</tspan>
                <tspan x="2.67" y="0">ALLE G</tspan>
                <tspan class="cls-29" x="15.98" y="0">R</tspan>
                <tspan x="18.46" y="0">AL. DR. IS</tspan>
                <tspan class="cls-33" x="36.13" y="0">M</tspan>
                <tspan class="cls-32" x="39.76" y="0">AEL MONTES</tspan>
            </text>
        </g>
        <g id="TEXT-1959" data-name="TEXT">
            <text class="cls-27" transform="matrix(1, 0.04, -0.04, 1, 798.54, 828.34)">
                <tspan class="cls-34">A</tspan>
                <tspan x="2.56" y="0">VENI</tspan>
                <tspan class="cls-35" x="11.47" y="0">D</tspan>
                <tspan x="14.46" y="0">A LIC. LIDIA GUEILER</tspan>
                <tspan class="cls-36" x="53.38" y="0"> </tspan>
                <tspan x="54.16" y="0">T</tspan>
                <tspan class="cls-37" x="56.43" y="0">E</tspan>
                <tspan x="58.77" y="0">JA</tspan>
                <tspan class="cls-35" x="63.27" y="0">D</tspan>
                <tspan class="cls-32" x="66.25" y="0">A</tspan>
            </text>
        </g>
        <g id="TEXT-1960" data-name="TEXT">
            <text class="cls-27" transform="matrix(1, 0.04, -0.04, 1, 800.62, 749.5)">
                <tspan class="cls-28">C</tspan>
                <tspan x="2.67" y="0">ALLE DR. ELIODO</tspan>
                <tspan class="cls-38" x="35.32" y="0">R</tspan>
                <tspan class="cls-32" x="37.8" y="0">O</tspan>
                <tspan class="cls-39" x="40.95" y="0"> </tspan>
                <tspan x="41.76" y="0">VILLA</tspan>
                <tspan class="cls-40" x="52.53" y="0">Z</tspan>
                <tspan class="cls-32" x="54.96" y="0">ON </tspan>
            </text>
        </g>
        <g id="TEXT-1961" data-name="TEXT">
            <text class="cls-27" transform="matrix(1, 0.04, -0.04, 1, 816.94, 672.5)">
                <tspan class="cls-28">C</tspan>
                <tspan x="2.67" y="0">ALLE ING. JOSE GUTIERREZ GUER</tspan>
                <tspan class="cls-41" x="65.19" y="0">R</tspan>
                <tspan x="67.68" y="0">A</tspan>
            </text>
        </g>
        <g id="TEXT-1962" data-name="TEXT">
            <text class="cls-27" transform="matrix(1, 0.04, -0.04, 1, 803.38, 594.18)">
                <tspan class="cls-28">C</tspan>
                <tspan x="2.67" y="0">ALLE DR. B</tspan>
                <tspan class="cls-42" x="22.93" y="0">A</tspan>
                <tspan x="25.61" y="0">UTIS</tspan>
                <tspan class="cls-43" x="34.2" y="0">T</tspan>
                <tspan class="cls-32" x="36.13" y="0">A SA</tspan>
                <tspan class="cls-44" x="44.96" y="0">A</tspan>
                <tspan class="cls-45" x="47.52" y="0">VED</tspan>
                <tspan class="cls-41" x="55.38" y="0">R</tspan>
                <tspan class="cls-32" x="57.86" y="0">A</tspan>
            </text>
        </g>
        <g id="TEXT-1963" data-name="TEXT">
            <text class="cls-27" transform="matrix(1, 0.04, -0.04, 1, 783.02, 515.7)">
                <tspan class="cls-28">C</tspan>
                <tspan x="2.67" y="0">ALLE DR. FELIPE SEGUNDO GUZ</tspan>
                <tspan class="cls-30" x="62.92" y="0">M</tspan>
                <tspan x="66.55" y="0">AN</tspan>
            </text>
        </g>
        <g id="TEXT-1964" data-name="TEXT">
            <text class="cls-27" transform="matrix(1, 0.04, -0.04, 1, 770.46, 438.42)">
                <tspan class="cls-28">C</tspan>
                <tspan x="2.67" y="0">ALLE DR. HERNANDO SILES</tspan>
            </text>
        </g>
        <g id="TEXT-1965" data-name="TEXT">
            <text class="cls-27" transform="matrix(1, 0.04, -0.04, 1, 546.65, 347.34)">
                <tspan class="cls-28">C</tspan>
                <tspan x="2.67" y="0">ALLE G</tspan>
                <tspan class="cls-29" x="15.98" y="0">R</tspan>
                <tspan x="18.46" y="0">AL. </tspan>
                <tspan class="cls-28" x="25.35" y="0">C</tspan>
                <tspan x="28.02" y="0">AR</tspan>
                <tspan class="cls-46" x="33.29" y="0">L</tspan>
                <tspan class="cls-32" x="35.27" y="0">OS BLAN</tspan>
                <tspan class="cls-47" x="52.11" y="0">C</tspan>
                <tspan x="54.67" y="0">O</tspan>
            </text>
        </g>
        <g id="TEXT-1966" data-name="TEXT">
            <text class="cls-48" transform="matrix(1, 0.04, -0.04, 1, 581.86, 270.24)">
                <tspan class="cls-49">C</tspan>
                <tspan x="1.87" y="0">ALLE ENRRIQUE PEÃƒâ€˜A</tspan>
                <tspan class="cls-50" x="30.91" y="0">R</tspan>
                <tspan x="32.65" y="0">AN</tspan>
                <tspan class="cls-51" x="36.72" y="0">D</tspan>
                <tspan x="38.81" y="0">A</tspan>
            </text>
        </g>
        <g id="TEXT-1967" data-name="TEXT">
            <text class="cls-48" transform="matrix(0.06, -1, 1, 0.06, 968.98, 660.83)">
                <tspan class="cls-49">C</tspan>
                <tspan x="1.87" y="0">ALLE DR. NES</tspan>
                <tspan class="cls-52" x="19.58" y="0">T</tspan>
                <tspan class="cls-53" x="21.09" y="0">OR GUILLEN OLMOS</tspan>
            </text>
        </g>
        <g id="TEXT-1968" data-name="TEXT">
            <text class="cls-48" transform="matrix(0.06, -1, 1, 0.06, 1210.23, 767.75)">
                <tspan class="cls-49">C</tspan>
                <tspan x="1.87" y="0">ALLE DR.</tspan>
                <tspan class="cls-54" x="13.64" y="0"> </tspan>
                <tspan class="cls-52" x="14.19" y="0">T</tspan>
                <tspan x="15.69" y="0">O</tspan>
                <tspan class="cls-55" x="17.9" y="0">M</tspan>
                <tspan x="20.44" y="0">AS MONJE GUTIERREZ</tspan>
            </text>
        </g>
        <g id="TEXT-1969" data-name="TEXT">
            <text class="cls-48" transform="matrix(0.06, -1, 1, 0.06, 732.44, 501.63)">
                <tspan class="cls-49">C</tspan>
                <tspan x="1.87" y="0">ALLE DR. ENRRIQUE HERZT</tspan>
                <tspan class="cls-56" x="37.51" y="0">Z</tspan>
                <tspan x="39.22" y="0">OG</tspan>
            </text>
        </g>
        <g id="TEXT-1970" data-name="TEXT">
            <text class="cls-48" transform="matrix(0.06, -1, 1, 0.06, 483.78, 494.22)">
                <tspan class="cls-49">C</tspan>
                <tspan x="1.87" y="0">ALLE G</tspan>
                <tspan class="cls-50" x="11.19" y="0">R</tspan>
                <tspan x="12.93" y="0">AL. ALFREDO O</tspan>
                <tspan class="cls-57" x="33.31" y="0">V</tspan>
                <tspan x="34.91" y="0">ANDO</tspan>
            </text>
        </g>
        <g id="TEXT-1971" data-name="TEXT">
            <text class="cls-48" transform="matrix(0.04, -1, 1, 0.04, 1287.99, 830.61)">
                <tspan class="cls-49">C</tspan>
                <tspan x="1.87" y="0">ALLE DR</tspan>
                <tspan class="cls-58" x="12.97" y="0"> </tspan>
                <tspan class="cls-59" x="13.54" y="0">W</tspan>
                <tspan x="16.07" y="0">A</tspan>
                <tspan class="cls-60" x="18.03" y="0">L</tspan>
                <tspan class="cls-53" x="19.26" y="0">TER GU</tspan>
                <tspan class="cls-61" x="28.98" y="0">E</tspan>
                <tspan class="cls-59" x="30.58" y="0">V</tspan>
                <tspan x="32.19" y="0">A</tspan>
                <tspan class="cls-50" x="34.15" y="0">R</tspan>
                <tspan x="35.89" y="0">A A</tspan>
                <tspan class="cls-62" x="40.49" y="0">R</tspan>
                <tspan x="42.23" y="0">CE</tspan>
            </text>
        </g>
        <g id="TEXT-1972" data-name="TEXT">
            <text class="cls-48" transform="matrix(0.81, 0.59, -0.59, 0.81, 1422.08, 848.13)">
                <tspan class="cls-49">C</tspan>
                <tspan x="1.87" y="0">ALLE IGN</tspan>
                <tspan class="cls-63" x="14.06" y="0">A</tspan>
                <tspan x="15.97" y="0">CIO</tspan>
                <tspan class="cls-58" x="20.81" y="0"> </tspan>
                <tspan class="cls-59" x="21.37" y="0">W</tspan>
                <tspan x="23.9" y="0">ARNES</tspan>
            </text>
        </g>
        <g id="TEXT-1973" data-name="TEXT">
            <text class="cls-27" transform="translate(672.23 226.45) rotate(31.89)">
                <tspan xml:space="preserve"> ALBRECH IBAÃƒâ€˜EZ</tspan>
            </text>
        </g>
        <g id="TEXT-1974" data-name="TEXT">
            <text class="cls-27" transform="translate(639.92 214.03) rotate(21.99)">
                <tspan class="cls-28">C</tspan>
                <tspan x="2.67" y="0">ALLE ELFFY </tspan>
            </text>
        </g>
        <g id="TEXT-1975" data-name="TEXT">
            <text class="cls-27" transform="translate(1248.15 676.4) rotate(50.35)">
                <tspan xml:space="preserve"> ALBRECH IBAÃƒâ€˜EZ</tspan>
            </text>
        </g>
        <g id="TEXT-1976" data-name="TEXT">
            <text class="cls-27" transform="matrix(0.6, 0.8, -0.8, 0.6, 1229.16, 649.66)">
                <tspan class="cls-28">C</tspan>
                <tspan x="2.67" y="0">ALLE ELFFY </tspan>
            </text>
        </g>
        <g id="CALLES">
            <g id="TEXT-1977" data-name="TEXT">
                <text class="cls-64" transform="translate(1483.11 1421.13) rotate(2.54)">
                    <tspan class="cls-65">A</tspan>
                    <tspan x="3.91" y="0">VENI</tspan>
                    <tspan class="cls-66" x="17.54" y="0">D</tspan>
                    <tspan class="cls-67" x="22.11" y="0">A </tspan>
                    <tspan class="cls-68" x="27.87" y="0">M</tspan>
                    <tspan x="33.43" y="0">ARIS</tspan>
                    <tspan class="cls-69" x="46.61" y="0">C</tspan>
                    <tspan x="50.69" y="0">AL AN</tspan>
                    <tspan class="cls-70" x="68.66" y="0">T</tspan>
                    <tspan x="71.95" y="0">ONIO JOSE DE SUCRE</tspan>
                </text>
            </g>
            <g id="TEXT-1978" data-name="TEXT">
                <text class="cls-64" transform="translate(551.53 1372.61) rotate(2.54)">
                    <tspan class="cls-65">A</tspan>
                    <tspan x="3.91" y="0">VENI</tspan>
                    <tspan class="cls-66" x="17.54" y="0">D</tspan>
                    <tspan class="cls-67" x="22.11" y="0">A </tspan>
                    <tspan class="cls-68" x="27.87" y="0">M</tspan>
                    <tspan x="33.43" y="0">ARIS</tspan>
                    <tspan class="cls-69" x="46.61" y="0">C</tspan>
                    <tspan x="50.69" y="0">AL AN</tspan>
                    <tspan class="cls-70" x="68.66" y="0">T</tspan>
                    <tspan x="71.95" y="0">ONIO JOSE DE SUCRE</tspan>
                </text>
            </g>
            <g id="TEXT-1979" data-name="TEXT">
                <text class="cls-71" transform="translate(773.88 1302.9) rotate(2.54)">
                    <tspan class="cls-72">C</tspan>
                    <tspan x="2.67" y="0">ALLE LIC. GREGORIO </tspan>
                    <tspan class="cls-73" x="42.32" y="0">P</tspan>
                    <tspan class="cls-74" x="44.37" y="0">A</tspan>
                    <tspan x="47.1" y="0">CHE</tspan>
                    <tspan class="cls-75" x="55" y="0">C</tspan>
                    <tspan class="cls-76" x="57.56" y="0">O</tspan>
                </text>
            </g>
            <g id="TEXT-1980" data-name="TEXT">
                <text class="cls-71" transform="translate(771.52 1221.8) rotate(2.54)">
                    <tspan class="cls-72">C</tspan>
                    <tspan x="2.67" y="0">ALLE DR. ANIC</tspan>
                    <tspan class="cls-77" x="30.02" y="0">E</tspan>
                    <tspan class="cls-78" x="32.34" y="0">T</tspan>
                    <tspan x="34.49" y="0">O A</tspan>
                    <tspan class="cls-79" x="41.42" y="0">R</tspan>
                    <tspan class="cls-80" x="43.9" y="0">CE RUIZ</tspan>
                </text>
            </g>
            <g id="TEXT-1981" data-name="TEXT">
                <text class="cls-71" transform="translate(776.88 1143.88) rotate(2.54)">
                    <tspan class="cls-72">C</tspan>
                    <tspan x="2.67" y="0">ALLE DR. </tspan>
                    <tspan class="cls-81" x="20.45" y="0">M</tspan>
                    <tspan x="24.09" y="0">ARIANO BAPTIS</tspan>
                    <tspan class="cls-82" x="53.73" y="0">T</tspan>
                    <tspan x="55.67" y="0">A</tspan>
                </text>
            </g>
            <g id="TEXT-1982" data-name="TEXT">
                <text class="cls-71" transform="translate(782.53 1067.15) rotate(2.54)">
                    <tspan class="cls-72">C</tspan>
                    <tspan x="2.67" y="0">ALLE DR. S</tspan>
                    <tspan class="cls-83" x="22.71" y="0">E</tspan>
                    <tspan x="25" y="0">VE</tspan>
                    <tspan class="cls-84" x="29.81" y="0">R</tspan>
                    <tspan class="cls-76" x="32.29" y="0">O FERNANDEZ A</tspan>
                    <tspan class="cls-85" x="63.79" y="0">L</tspan>
                    <tspan class="cls-76" x="65.77" y="0">ON</tspan>
                    <tspan class="cls-86" x="71.94" y="0">Z</tspan>
                    <tspan class="cls-76" x="74.38" y="0">O</tspan>
                </text>
            </g>
            <g id="TEXT-1983" data-name="TEXT">
                <text class="cls-87" transform="translate(946.79 1074.5) rotate(-86.99)">
                    <tspan class="cls-88">C</tspan>
                    <tspan x="1.87" y="0">ALLE CNEL.</tspan>
                    <tspan class="cls-89" x="16.84" y="0"> </tspan>
                    <tspan class="cls-90" x="17.4" y="0">W</tspan>
                    <tspan x="19.93" y="0">ALBE</tspan>
                    <tspan class="cls-91" x="26.72" y="0">R</tspan>
                    <tspan class="cls-92" x="28.47" y="0">T</tspan>
                    <tspan class="cls-93" x="29.98" y="0">O</tspan>
                    <tspan class="cls-89" x="32.18" y="0"> </tspan>
                    <tspan class="cls-94" x="32.75" y="0">VILLAR</tspan>
                    <tspan class="cls-95" x="42.01" y="0">R</tspan>
                    <tspan class="cls-93" x="43.75" y="0">OEL</tspan>
                </text>
            </g>
            <g id="TEXT-1984" data-name="TEXT">
                <text class="cls-87" transform="translate(1596.28 1176.79) rotate(-86.99)">
                    <tspan class="cls-88">C</tspan>
                    <tspan x="1.87" y="0">ALLE DR</tspan>
                    <tspan class="cls-89" x="12.97" y="0"> </tspan>
                    <tspan class="cls-90" x="13.54" y="0">W</tspan>
                    <tspan x="16.07" y="0">A</tspan>
                    <tspan class="cls-96" x="18.03" y="0">L</tspan>
                    <tspan class="cls-93" x="19.26" y="0">TER GU</tspan>
                    <tspan class="cls-97" x="28.98" y="0">E</tspan>
                    <tspan class="cls-98" x="30.58" y="0">V</tspan>
                    <tspan x="32.19" y="0">A</tspan>
                    <tspan class="cls-99" x="34.15" y="0">R</tspan>
                    <tspan x="35.89" y="0">A A</tspan>
                    <tspan class="cls-100" x="40.49" y="0">R</tspan>
                    <tspan x="42.23" y="0">CE</tspan>
                </text>
            </g>
            <g id="TEXT-1985" data-name="TEXT">
                <text class="cls-87" transform="translate(702.37 1057.43) rotate(-86.99)">
                    <tspan class="cls-88">C</tspan>
                    <tspan x="1.87" y="0">ALLE ING. JO</tspan>
                    <tspan class="cls-100" x="18.8" y="0">R</tspan>
                    <tspan x="20.53" y="0">GE QUI</tspan>
                    <tspan class="cls-100" x="29.91" y="0">R</tspan>
                    <tspan x="31.64" y="0">OGA </tspan>
                    <tspan class="cls-99" x="38.56" y="0">R</tspan>
                    <tspan class="cls-101" x="40.3" y="0">A</tspan>
                    <tspan x="42.25" y="0">MIREZ</tspan>
                </text>
            </g>
            <g id="TEXT-1986" data-name="TEXT">
                <text class="cls-87" transform="translate(455.37 1041.11) rotate(-86.99)">
                    <tspan class="cls-88">C</tspan>
                    <tspan x="1.87" y="0">ALLE LIC. JAIME </tspan>
                    <tspan class="cls-102" x="23.34" y="0">P</tspan>
                    <tspan x="24.78" y="0">AZ Z</tspan>
                    <tspan class="cls-101" x="30.96" y="0">A</tspan>
                    <tspan x="32.91" y="0">MO</tspan>
                    <tspan class="cls-99" x="37.7" y="0">R</tspan>
                    <tspan x="39.44" y="0">A</tspan>
                </text>
            </g>
            <g id="TEXT-1987" data-name="TEXT">
                <text class="cls-103" transform="translate(1189.43 1167.63) rotate(-86.99)">
                    <tspan class="cls-104">A</tspan>
                    <tspan x="2.24" y="0">VENI</tspan>
                    <tspan class="cls-105" x="10.02" y="0">D</tspan>
                    <tspan class="cls-106" x="12.63" y="0">A CNEL. ALBE</tspan>
                    <tspan class="cls-107" x="34.88" y="0">R</tspan>
                    <tspan class="cls-108" x="37.07" y="0">T</tspan>
                    <tspan class="cls-106" x="38.95" y="0">O N</tspan>
                    <tspan class="cls-109" x="45.19" y="0">A</tspan>
                    <tspan class="cls-106" x="47.33" y="0">TUSCH BUSCH</tspan>
                </text>
            </g>
            <g id="TEXT-1988" data-name="TEXT">
                <text class="cls-87" transform="translate(1352.91 1150.16) rotate(-86.99)">
                    <tspan class="cls-88">C</tspan>
                    <tspan x="1.87" y="0">ALLE HUGO BALLIVIAN </tspan>
                    <tspan class="cls-95" x="33.03" y="0">R</tspan>
                    <tspan class="cls-93" x="34.76" y="0">OJAS</tspan>
                </text>
            </g>
            <g id="TEXT-1989" data-name="TEXT">
                <text class="cls-110" transform="translate(1806.83 1304.74) rotate(37.01)">
                    <tspan class="cls-111">C</tspan>
                    <tspan x="2.14" y="0">ALLE </tspan>
                    <tspan class="cls-112" x="10.42" y="0">C</tspan>
                    <tspan x="12.46" y="0">ORDILLE</tspan>
                    <tspan class="cls-113" x="25.53" y="0">R</tspan>
                    <tspan x="27.52" y="0">A</tspan>
                </text>
            </g>
            <g id="TEXT-1990" data-name="TEXT">
                <text class="cls-114" transform="translate(1813.25 1269.24) rotate(-52.39)">
                    <tspan class="cls-115">C</tspan>
                    <tspan x="1.87" y="0">ALLE OBISPO SANTIST</tspan>
                    <tspan class="cls-116" x="31.18" y="0">E</tspan>
                    <tspan class="cls-117" x="32.78" y="0">V</tspan>
                    <tspan x="34.39" y="0">AN</tspan>
                </text>
            </g>
        </g>
    </g>
</svg>



{!!Html::script('js/plugins/toastr.min.js')!!}

<!-- Bootstrap 3.3.5 -->

{!!Html::script('js/bootstrap/bootstrap.min.js')!!}
{!!Html::script('js/bootstrap/bootstrap-select.min.js')!!}


<!-- AdminLTE App -->

<script src="{{asset('js/plugins/app.js')}}">
</script>

<script type="text/javascript">

  $('#loading').css('display','none');
</script>



