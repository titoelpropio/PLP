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
                     
     

<!-- <div style="float:left; margin-left:5px;margin-top:5px;">
 <a  href="../seccion2/1" id='btnActualizar' class="btn btn-primary" >FASE 2</a>
 <a href="../seccion3/1" id='btnActualizar' class="btn btn-primary" >FASE 3</a>
 </div>
 <div style="float:right; margin-right:5px;margin-top:5px;">
<a href="../" id='btnAgregar' class="btn btn-warning"  >VOLVER</a>

 </div> -->
    <!-- 
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<section>
<div class="col-sm-2">
</div>
<div class="col-sm-2">
<label for="">NÚMERO DE LOTE</label>
</div>
<div class="col-sm-2">
<label for="">NÚMERO DE MANZANO</label>
</div>
</div>
</section>
</div >

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<section>
<div class="col-sm-2">
<button disabled id="btnreservar" class="btn btn-success" data-toggle='modal' data-target='#myModalReservar' onclick="CargarDatos()">RESERVAR</button>
</div>
<div class="col-sm-2">

<input type="number" class="form-control" id="nro_lote2" >
</div>
<div class="col-sm-2">
<input type="number" class="form-control" id="nro_manzano2" >
</div>
<button id="btnbuscarlote" class="btn btn-success"  onclick="Pintar()" >BUSCAR</button>
</div>
</section>
</div > -->
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

<svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2834.65 1417.32">
    <defs>
        <style>.cls-1{fill:#b6e0f2;stroke-width:2px;isolation:isolate;}.cls-1,.cls-11,.cls-2,.cls-3,.cls-5,.cls-6{stroke:#1d1d1b;}.cls-1,.cls-11,.cls-4,.cls-5,.cls-6{stroke-miterlimit:10;}.cls-2{fill:#f39200;}.cls-2,.cls-3{stroke-linecap:round;stroke-linejoin:round;}.cls-11,.cls-2,.cls-3,.cls-5,.cls-6{stroke-width:0.75px;}.cls-3{fill:#2a4b9b;}.cls-4{font-size:15px;fill:#fff;stroke:#fff;font-family:ArialMT, Arial;}.cls-5{fill:none;}.cls-6{fill:#099939;}.cls-7{letter-spacing:-0.09em;}.cls-8{font-size:10px;font-family:Arial-BoldMT, Arial;font-weight:700;}.cls-9{letter-spacing:-0.06em;}.cls-10{letter-spacing:-0.07em;}.cls-11{fill:#3aaa35;}.cls-12,.cls-25{font-size:6.51px;}.cls-12,.cls-17,.cls-25,.cls-38{fill:#808081;font-family:MyriadPro-Regular, Myriad Pro;}.cls-13,.cls-25{letter-spacing:0em;}.cls-14{letter-spacing:0em;}.cls-15{letter-spacing:-0.06em;}.cls-16{letter-spacing:-0.06em;}.cls-17{font-size:9.31px;}.cls-18{letter-spacing:-0.05em;}.cls-19{letter-spacing:-0.01em;}.cls-20{letter-spacing:0em;}.cls-21{letter-spacing:0.01em;}.cls-22{letter-spacing:-0.03em;}.cls-23{letter-spacing:0em;}.cls-24{letter-spacing:-0.02em;}.cls-26{letter-spacing:0em;}.cls-27{letter-spacing:0em;}.cls-28{letter-spacing:0em;}.cls-29{letter-spacing:-0.02em;}.cls-30{letter-spacing:-0.04em;}.cls-31{letter-spacing:-0.03em;}.cls-32{letter-spacing:-0.04em;}.cls-33{letter-spacing:-0.05em;}.cls-34{letter-spacing:-0.01em;}.cls-35{letter-spacing:-0.08em;}.cls-36{letter-spacing:0em;}.cls-37{letter-spacing:-0.01em;}.cls-38{font-size:7.82px;}.cls-39{letter-spacing:-0.05em;}.cls-40{letter-spacing:0em;}.cls-41{letter-spacing:-0.01em;}.cls-42{letter-spacing:-0.03em;}.cls-43{letter-spacing:-0.08em;}.cls-44{letter-spacing:0em;}.cls-45{letter-spacing:-0.08em;}.cls-46{letter-spacing:0.01em;}.cls-47{letter-spacing:-0.01em;}.cls-48{letter-spacing:-0.03em;}.cls-49{letter-spacing:-0.08em;}.cls-50{letter-spacing:-0.08em;}</style>
    </defs>
    <title>URB. V. DE GUADALUPE</title>
    <path class="cls-1" d="M229.75,842.17l22.81-428s-3.78-11.88,33.09-13l2339.49,128s39.33.71,32.14,16.34l-374.69,598.76s-4.16,12.79-46.13-.51l-106.93-89,69-105.13L2184,940.49l-1928.72-92A53.49,53.49,0,0,1,229.75,842.17Z"/>
    <g id="EQ.-15">
        <rect class="cls-2" x="1466.3" y="650.38" width="403.24" height="118.76" rx="16.98" ry="16.98" transform="translate(36.4 -80.08) rotate(2.78)"/>
        <rect class="cls-3" x="1469.69" y="655.13" width="395.3" height="110.21" rx="13.36" ry="13.36" transform="translate(36.42 -80.06) rotate(2.78)"/>
    </g>
    <g id="TEXT">
        <text class="cls-4" transform="translate(1631.87 714.45) rotate(0.51)">EQ.-15</text>
    </g>
    <g id="MZ-1">
        <g id="MZ-1-2" data-name="MZ-1">
            <path class="cls-2" d="M711.56,853.46,269.18,825.6c-11.41-.64-21.37-7.87-20.75-19.05l4.84-81.3c.62-11.18,10-19.33,21.38-18.69l443.78,27.91c11.41.64,17.37,9.74,16.75,20.92l-4.37,82.38C730.28,847.22,721.22,854,711.56,853.46Z"/>
            <rect class="cls-5" x="310.62" y="713.43" width="22.03" height="54.91" transform="translate(41.71 -16.75) rotate(3.19)"/>
            <rect class="cls-5" x="332.3" y="714.67" width="22.03" height="54.83" transform="translate(41.82 -17.95) rotate(3.19)"/>
            <rect class="cls-5" x="354.24" y="716.31" width="22.03" height="54.83" transform="translate(41.94 -19.17) rotate(3.19)"/>
            <rect class="cls-5" x="376.07" y="717.68" width="21.86" height="54.83" transform="translate(42.05 -20.38) rotate(3.19)"/>
            <rect class="cls-5" x="398.19" y="718.91" width="21.62" height="54.83" transform="matrix(1, 0.06, -0.06, 1, 42.15, -21.6)"/>
            <rect class="cls-5" x="420.06" y="720.02" width="22.03" height="54.83" transform="translate(42.25 -22.82) rotate(3.19)"/>
            <rect class="cls-5" x="441.82" y="721.35" width="22.03" height="54.83" transform="translate(42.36 -24.03) rotate(3.19)"/>
            <rect class="cls-5" x="463.97" y="723.11" width="22.03" height="54.83" transform="translate(42.49 -25.26) rotate(3.19)"/>
            <rect class="cls-5" x="306.98" y="767.84" width="22.03" height="55.49" transform="translate(44.75 -16.46) rotate(3.19)"/>
            <rect class="cls-5" x="329.25" y="769.41" width="22.03" height="54.83" transform="translate(44.86 -17.7) rotate(3.19)"/>
            <rect class="cls-5" x="351.21" y="770.72" width="22.35" height="54.83" transform="translate(44.96 -18.92) rotate(3.19)"/>
            <rect class="cls-5" x="373.38" y="772.19" width="21.85" height="54.83" transform="translate(45.08 -20.14) rotate(3.19)"/>
            <rect class="cls-5" x="395.08" y="773.41" width="21.98" height="54.83" transform="translate(45.18 -21.35) rotate(3.19)"/>
            <rect class="cls-5" x="416.91" y="775.05" width="22.03" height="54.83" transform="translate(45.31 -22.56) rotate(3.19)"/>
            <rect class="cls-5" x="438.83" y="776.27" width="21.88" height="54.83" transform="translate(45.41 -23.78) rotate(3.19)"/>
            <rect class="cls-5" x="460.59" y="777.71" width="21.85" height="54.61" transform="translate(45.51 -24.99) rotate(3.19)"/>
            <polygon class="cls-5" points="502.56 834.56 480.86 833 483.91 778.25 505.92 779.48 502.56 834.56"/>
            <rect class="cls-5" x="504.09" y="780.64" width="22.11" height="54.83" transform="translate(45.75 -27.41) rotate(3.19)"/>
            <rect class="cls-5" x="526.07" y="782.19" width="21.97" height="54.8" transform="matrix(1, 0.06, -0.06, 1, 45.87, -28.62)"/>
            <rect class="cls-5" x="547.95" y="783.63" width="22.15" height="54.92" transform="translate(45.99 -29.84) rotate(3.19)"/>
            <rect class="cls-5" x="570.06" y="784.92" width="21.76" height="54.76" transform="translate(46.09 -31.06) rotate(3.19)"/>
            <rect class="cls-5" x="591.93" y="786.4" width="21.76" height="54.63" transform="translate(46.2 -32.28) rotate(3.19)"/>
            <rect class="cls-5" x="613.65" y="787.79" width="29.37" height="54.97" transform="translate(46.33 -33.69) rotate(3.19)"/>
            <rect class="cls-5" x="485.66" y="724.32" width="22.03" height="54.83" transform="translate(42.59 -26.47) rotate(3.19)"/>
            <rect class="cls-5" x="507.65" y="725.44" width="22.25" height="55.05" transform="translate(42.69 -27.69) rotate(3.19)"/>
            <rect class="cls-5" x="529.27" y="727.5" width="22.03" height="54.79" transform="translate(42.83 -28.89) rotate(3.19)"/>
            <rect class="cls-5" x="551.61" y="728.94" width="21.87" height="54.86" transform="translate(42.95 -30.12) rotate(3.19)"/>
            <rect class="cls-5" x="573.28" y="729.9" width="21.83" height="55.12" transform="translate(43.04 -31.33) rotate(3.19)"/>
            <rect class="cls-5" x="595.08" y="731.6" width="22.34" height="54.61" transform="translate(43.16 -32.55) rotate(3.19)"/>
            <rect class="cls-5" x="617.02" y="733.09" width="29.63" height="54.86" transform="translate(43.29 -33.97) rotate(3.19)"/>
            <polygon class="cls-5" points="308.39 767.4 253.74 764 252.14 792.33 306.49 796.01 308.39 767.4"/>
            <polygon class="cls-5" points="310.7 739.88 255.45 736.62 253.91 764.19 309.19 767.13 310.7 739.88"/>
            <path class="cls-5" d="M307,795.09l-1.68,27.15-42.44-2.34S250,818,250.75,805.33c.63-10.56,1.06-12.94,1.07-13.54a.18.18,0,0,1,.19-.17Z"/>
            <path class="cls-5" d="M312.14,712.5l-41.77-2.32s-13.19-1.53-14.21,14.56c-.59,9.33-.81,12-.81,12l55.23,3.18Z"/>
            <path class="cls-6" d="M714.78,738.29s16.18.87,15.57,13.91-5.12,84.38-5.12,84.38-1.64,12.14-18.23,11.31S641,844,641,844l7.94-109.76Z"/>
        </g>
        <g id="TEXT-2" data-name="TEXT">
            <text class="cls-4" transform="translate(438.34 779.11) rotate(0.51)">MZ-1</text>
        </g>
        <g id="TEXT-3" data-name="TEXT">
            <text class="cls-4" transform="translate(661.93 789.78) rotate(0.51)">A.<tspan class="cls-7" x="14.17" y="0">V</tspan>
                <tspan x="22.8" y="0">.-1</tspan>
            </text>
        </g>
        <g id="TEXT-4" data-name="TEXT">
            <text class="cls-8" transform="translate(275.03 807.9)">1</text>
        </g>
        <g id="TEXT-5" data-name="TEXT">
            <text class="cls-8" transform="translate(276.38 779.8)">2</text>
        </g>
        <g id="TEXT-6" data-name="TEXT">
            <text class="cls-8" transform="translate(278.02 753.53)">3</text>
        </g>
        <g id="TEXT-7" data-name="TEXT">
            <text class="cls-8" transform="translate(279.65 728.67)">4</text>
        </g>
        <g id="TEXT-8" data-name="TEXT">
            <text class="cls-8" transform="translate(318.5 742.32)">5</text>
        </g>
        <g id="TEXT-9" data-name="TEXT">
            <text class="cls-8" transform="translate(339.33 743.85)">6</text>
        </g>
        <g id="TEXT-10" data-name="TEXT">
            <text class="cls-8" transform="translate(361.34 745.13)">7</text>
        </g>
        <g id="TEXT-11" data-name="TEXT">
            <text class="cls-8" transform="translate(383.57 747.02)">8</text>
        </g>
        <g id="TEXT-12" data-name="TEXT">
            <text class="cls-8" transform="translate(404.9 748.6)">9</text>
        </g>
        <g id="TEXT-13" data-name="TEXT">
            <text class="cls-8" transform="translate(426.27 749.18)">10</text>
        </g>
        <g id="TEXT-14" data-name="TEXT">
            <text class="cls-8" transform="translate(447.76 750.56)">
                <tspan class="cls-9">1</tspan>
                <tspan x="5.01" y="0">1</tspan>
            </text>
        </g>
        <g id="TEXT-15" data-name="TEXT">
            <text class="cls-8" transform="translate(469.65 751.93)">12</text>
        </g>
        <g id="TEXT-16" data-name="TEXT">
            <text class="cls-8" transform="translate(491.63 753.68)">13</text>
        </g>
        <g id="TEXT-17" data-name="TEXT">
            <text class="cls-8" transform="translate(513.17 755.04)">14</text>
        </g>
        <g id="TEXT-18" data-name="TEXT">
            <text class="cls-8" transform="translate(534.32 756.32)">15</text>
        </g>
        <g id="TEXT-19" data-name="TEXT">
            <text class="cls-8" transform="translate(557.65 757.76)">16</text>
        </g>
        <g id="TEXT-20" data-name="TEXT">
            <text class="cls-8" transform="translate(577.26 759.77)">17</text>
        </g>
        <g id="TEXT-21" data-name="TEXT">
            <text class="cls-8" transform="translate(601.61 760.43)">18</text>
        </g>
        <g id="TEXT-22" data-name="TEXT">
            <text class="cls-8" transform="translate(624.33 762.3)">19</text>
        </g>
        <g id="TEXT-23" data-name="TEXT">
            <text class="cls-8" transform="translate(621.19 816.59)">20</text>
        </g>
        <g id="TEXT-24" data-name="TEXT">
            <text class="cls-8" transform="translate(597.83 814.68)">21</text>
        </g>
        <g id="TEXT-25" data-name="TEXT">
            <text class="cls-8" transform="translate(572.74 814.56)">22</text>
        </g>
        <g id="TEXT-26" data-name="TEXT">
            <text class="cls-8" transform="translate(552.3 812.57)">23</text>
        </g>
        <g id="TEXT-27" data-name="TEXT">
            <text class="cls-8" transform="translate(531.3 811.57)">24</text>
        </g>
        <g id="TEXT-28" data-name="TEXT">
            <text class="cls-8" transform="translate(509.74 809.02)">25</text>
        </g>
        <g id="TEXT-29" data-name="TEXT">
            <text class="cls-8" transform="translate(487.88 808.49)">26</text>
        </g>
        <g id="TEXT-30" data-name="TEXT">
            <text class="cls-8" transform="translate(465.38 807.14)">27</text>
        </g>
        <g id="TEXT-31" data-name="TEXT">
            <text class="cls-8" transform="translate(443.47 805.61)">28</text>
        </g>
        <g id="TEXT-32" data-name="TEXT">
            <text class="cls-8" transform="translate(421.56 804.22)">29</text>
        </g>
        <g id="TEXT-33" data-name="TEXT">
            <text class="cls-8" transform="translate(399.64 802.83)">30</text>
        </g>
        <g id="TEXT-34" data-name="TEXT">
            <text class="cls-8" transform="translate(377.72 801.44)">31</text>
        </g>
        <g id="TEXT-35" data-name="TEXT">
            <text class="cls-8" transform="translate(355.81 800.05)">32</text>
        </g>
        <g id="TEXT-36" data-name="TEXT">
            <text class="cls-8" transform="translate(333.89 798.66)">33</text>
        </g>
        <g id="TEXT-37" data-name="TEXT">
            <text class="cls-8" transform="translate(312.89 797.04)">34</text>
        </g>
    </g>
    <g id="MZ-2">
        <g id="MZ-2-2" data-name="MZ-2">
            <path class="cls-2" d="M718.38,721.08,276,693.22c-11.41-.64-21.37-7.87-20.75-19.05l4.84-81.3c.62-11.18,10-19.33,21.38-18.69l443.78,27.91c11.41.64,17.37,9.74,16.75,20.92l-4.37,82.38C737.1,714.84,728,721.62,718.38,721.08Z"/>
            <rect class="cls-5" x="318.69" y="581.12" width="22.03" height="54.91" transform="translate(34.37 -17.4) rotate(3.19)"/>
            <rect class="cls-5" x="340.63" y="582.45" width="22.03" height="54.83" transform="translate(34.47 -18.62) rotate(3.19)"/>
            <rect class="cls-5" x="362.55" y="584.06" width="22.03" height="54.83" transform="translate(34.6 -19.84) rotate(3.19)"/>
            <rect class="cls-5" x="385.01" y="585.29" width="21.47" height="54.83" transform="translate(34.7 -21.07) rotate(3.19)"/>
            <rect class="cls-5" x="407" y="586.5" width="20.75" height="54.83" transform="translate(34.8 -22.27) rotate(3.19)"/>
            <rect class="cls-5" x="428.31" y="587.72" width="22.03" height="54.83" transform="translate(34.9 -23.49) rotate(3.19)"/>
            <rect class="cls-5" x="450.76" y="588.97" width="22.03" height="54.83" transform="translate(35.01 -24.73) rotate(3.19)"/>
            <rect class="cls-5" x="472.19" y="590.16" width="22.03" height="54.83" transform="translate(35.11 -25.93) rotate(3.19)"/>
            <rect class="cls-5" x="315.67" y="635.9" width="22.03" height="55.49" transform="translate(37.43 -17.15) rotate(3.19)"/>
            <rect class="cls-5" x="337.59" y="637.11" width="22.03" height="54.83" transform="translate(37.51 -18.36) rotate(3.19)"/>
            <rect class="cls-5" x="359.53" y="638.34" width="22.35" height="54.83" transform="translate(37.61 -19.59) rotate(3.19)"/>
            <rect class="cls-5" x="381.57" y="640.04" width="21.85" height="54.83" transform="translate(37.74 -20.8) rotate(3.19)"/>
            <rect class="cls-5" x="403.27" y="641.28" width="21.98" height="54.83" transform="translate(37.84 -22.01) rotate(3.19)"/>
            <rect class="cls-5" x="425.24" y="642.67" width="22.03" height="54.83" transform="translate(37.95 -23.23) rotate(3.19)"/>
            <rect class="cls-5" x="447.25" y="643.59" width="21.88" height="54.83" transform="translate(38.04 -24.45) rotate(3.19)"/>
            <rect class="cls-5" x="469.1" y="644.81" width="21.85" height="54.83" transform="translate(38.14 -25.66) rotate(3.19)"/>
            <rect class="cls-5" x="490.92" y="647.03" width="22.04" height="54.83" transform="translate(38.3 -26.88) rotate(3.19)"/>
            <rect class="cls-5" x="512.9" y="648.63" width="22.11" height="54.83" transform="translate(38.42 -28.1) rotate(3.19)"/>
            <rect class="cls-5" x="534.99" y="650.64" width="21.97" height="54.8" transform="matrix(1, 0.06, -0.06, 1, 38.57, -29.32)"/>
            <rect class="cls-5" x="556.91" y="652.15" width="23.03" height="54.92" transform="translate(38.69 -30.57) rotate(3.19)"/>
            <rect class="cls-5" x="578.78" y="653.29" width="21.57" height="54.83" transform="translate(38.78 -31.74) rotate(3.19)"/>
            <rect class="cls-5" x="600.35" y="655.26" width="21.86" height="54.07" transform="translate(38.9 -32.95) rotate(3.19)"/>
            <rect class="cls-5" x="622.18" y="656.24" width="22.03" height="54.35" transform="translate(39 -34.17) rotate(3.19)"/>
            <rect class="cls-5" x="644.48" y="657.23" width="21.53" height="54.83" transform="translate(39.1 -35.39) rotate(3.19)"/>
            <rect class="cls-5" x="494.61" y="592.05" width="22.03" height="54.83" transform="translate(35.25 -27.17) rotate(3.19)"/>
            <rect class="cls-5" x="516.32" y="594.57" width="22.25" height="55.05" transform="translate(35.43 -28.38) rotate(3.19)"/>
            <rect class="cls-5" x="538.23" y="595.72" width="22.03" height="55.01" transform="translate(35.52 -29.59) rotate(3.19)"/>
            <rect class="cls-5" x="560.55" y="597.09" width="21.87" height="55.07" transform="translate(35.63 -30.83) rotate(3.19)"/>
            <rect class="cls-5" x="581.88" y="598.31" width="21.83" height="55.12" transform="translate(35.74 -32.01) rotate(3.19)"/>
            <rect class="cls-5" x="603.78" y="599.53" width="21.83" height="55.12" transform="translate(35.84 -33.23) rotate(3.19)"/>
            <rect class="cls-5" x="625.68" y="600.75" width="21.83" height="55.12" transform="translate(35.94 -34.44) rotate(3.19)"/>
            <rect class="cls-5" x="647.58" y="601.97" width="21.83" height="55.12" transform="translate(36.04 -35.66) rotate(3.19)"/>
            <polygon class="cls-5" points="317.29 635.45 261.91 632.09 260.29 660 315.37 663.64 317.29 635.45"/>
            <polygon class="cls-5" points="318.76 608.77 263.5 605.62 261.98 632.15 317.26 634.99 318.76 608.77"/>
            <path class="cls-5" d="M315.39,663.38l-1.68,27L271.27,688s-13.84-.71-12.34-14.41,1.32-13.7,1.32-13.7Z"/>
            <path class="cls-5" d="M320.18,580.62l-41.55-2.4s-13.72.45-14.66,14.67l-.82,12.39,55.48,3.28Z"/>
            <path class="cls-6" d="M724.5,606.67s13.17.87,12.67,13.94S733,705.17,733,705.17s-1.33,12.17-14.83,11.33-53.7-3.88-53.7-3.88l6.46-110Z"/>
        </g>
        <g id="TEXT-38" data-name="TEXT">
            <text class="cls-4" transform="translate(441.18 649.97) rotate(0.51)">MZ-2</text>
        </g>
        <g id="TEXT-39" data-name="TEXT">
            <text class="cls-4" transform="translate(672.29 664.48) rotate(0.51)">A.<tspan class="cls-7" x="14.17" y="0">V</tspan>
                <tspan x="22.8" y="0">.-2</tspan>
            </text>
        </g>
        <g id="TEXT-40" data-name="TEXT">
            <text class="cls-8" transform="translate(283.36 676.4)">1</text>
        </g>
        <g id="TEXT-41" data-name="TEXT">
            <text class="cls-8" transform="translate(284.72 648.3)">2</text>
        </g>
        <g id="TEXT-42" data-name="TEXT">
            <text class="cls-8" transform="translate(286.36 622.03)">3</text>
        </g>
        <g id="TEXT-43" data-name="TEXT">
            <text class="cls-8" transform="translate(287.99 597.17)">4</text>
        </g>
        <g id="TEXT-44" data-name="TEXT">
            <text class="cls-8" transform="translate(326.84 610.82)">5</text>
        </g>
        <g id="TEXT-45" data-name="TEXT">
            <text class="cls-8" transform="translate(347.67 612.35)">6</text>
        </g>
        <g id="TEXT-46" data-name="TEXT">
            <text class="cls-8" transform="translate(369.68 613.63)">7</text>
        </g>
        <g id="TEXT-47" data-name="TEXT">
            <text class="cls-8" transform="translate(391.91 615.52)">8</text>
        </g>
        <g id="TEXT-48" data-name="TEXT">
            <text class="cls-8" transform="translate(413.24 617.1)">9</text>
        </g>
        <g id="TEXT-49" data-name="TEXT">
            <text class="cls-8" transform="translate(434.61 617.68)">10</text>
        </g>
        <g id="TEXT-50" data-name="TEXT">
            <text class="cls-8" transform="translate(456.1 619.06)">
                <tspan class="cls-9">1</tspan>
                <tspan x="5.01" y="0">1</tspan>
            </text>
        </g>
        <g id="TEXT-51" data-name="TEXT">
            <text class="cls-8" transform="translate(477.99 620.43)">12</text>
        </g>
        <g id="TEXT-52" data-name="TEXT">
            <text class="cls-8" transform="translate(499.97 622.18)">13</text>
        </g>
        <g id="TEXT-53" data-name="TEXT">
            <text class="cls-8" transform="translate(521.5 623.54)">14</text>
        </g>
        <g id="TEXT-54" data-name="TEXT">
            <text class="cls-8" transform="translate(542.66 624.82)">15</text>
        </g>
        <g id="TEXT-55" data-name="TEXT">
            <text class="cls-8" transform="translate(565.99 626.26)">16</text>
        </g>
        <g id="TEXT-56" data-name="TEXT">
            <text class="cls-8" transform="translate(585.6 628.27)">17</text>
        </g>
        <g id="TEXT-57" data-name="TEXT">
            <text class="cls-8" transform="translate(609.72 630.34)">18</text>
        </g>
        <g id="TEXT-58" data-name="TEXT">
            <text class="cls-8" transform="translate(631.65 631.84)">19</text>
        </g>
        <g id="TEXT-59" data-name="TEXT">
            <text class="cls-8" transform="translate(650.93 634.17)">20</text>
        </g>
        <g id="TEXT-60" data-name="TEXT">
            <text class="cls-8" transform="translate(648.31 687.25)">21</text>
        </g>
        <g id="TEXT-61" data-name="TEXT">
            <text class="cls-8" transform="translate(624.91 685.84)">22</text>
        </g>
        <g id="TEXT-62" data-name="TEXT">
            <text class="cls-8" transform="translate(604.47 683.85)">23</text>
        </g>
        <g id="TEXT-63" data-name="TEXT">
            <text class="cls-8" transform="translate(583.47 682.84)">24</text>
        </g>
        <g id="TEXT-64" data-name="TEXT">
            <text class="cls-8" transform="translate(561.91 680.3)">25</text>
        </g>
        <g id="TEXT-65" data-name="TEXT">
            <text class="cls-8" transform="translate(540.05 679.76)">26</text>
        </g>
        <g id="TEXT-66" data-name="TEXT">
            <text class="cls-8" transform="translate(517.56 678.42)">27</text>
        </g>
        <g id="TEXT-67" data-name="TEXT">
            <text class="cls-8" transform="translate(495.65 676.89)">28</text>
        </g>
        <g id="TEXT-68" data-name="TEXT">
            <text class="cls-8" transform="translate(473.73 675.5)">29</text>
        </g>
        <g id="TEXT-69" data-name="TEXT">
            <text class="cls-8" transform="translate(451.81 674.11)">30</text>
        </g>
        <g id="TEXT-70" data-name="TEXT">
            <text class="cls-8" transform="translate(429.9 672.72)">31</text>
        </g>
        <g id="TEXT-71" data-name="TEXT">
            <text class="cls-8" transform="translate(407.98 671.33)">32</text>
        </g>
        <g id="TEXT-72" data-name="TEXT">
            <text class="cls-8" transform="translate(386.06 669.94)">33</text>
        </g>
        <g id="TEXT-73" data-name="TEXT">
            <text class="cls-8" transform="translate(365.06 668.32)">34</text>
        </g>
        <g id="TEXT-74" data-name="TEXT">
            <text class="cls-8" transform="translate(342.23 667.16)">35</text>
        </g>
        <g id="TEXT-75" data-name="TEXT">
            <text class="cls-8" transform="translate(321.22 665.59)">36</text>
        </g>
    </g>
    <g id="MZ-4">
        <g id="MZ-4-2" data-name="MZ-4">
            <path class="cls-2" d="M880.23,497.31,863.39,844A17.58,17.58,0,0,1,845,860.66l-84.64-4.11a18.47,18.47,0,0,1-17.55-19.34L758.9,505.34a32.83,32.83,0,0,1,34.38-31.2l69,3.35A18.92,18.92,0,0,1,880.23,497.31Z"/>
            <rect class="cls-5" x="767.37" y="759.47" width="22.03" height="55" transform="translate(-45.54 1526.14) rotate(-87.21)"/>
            <rect class="cls-5" x="768.83" y="737.54" width="22.03" height="55" transform="translate(-22.24 1506.72) rotate(-87.21)"/>
            <rect class="cls-5" x="770.19" y="715.36" width="21.47" height="55" transform="translate(0.94 1486.7) rotate(-87.21)"/>
            <rect class="cls-5" x="771.6" y="693.72" width="20.75" height="55" transform="translate(23.55 1467.17) rotate(-87.21)"/>
            <rect class="cls-5" x="772.03" y="671.76" width="22.03" height="55" transform="matrix(0.05, -1, 1, 0.05, 46.51, 1447.34)"/>
            <rect class="cls-5" x="773.12" y="649.3" width="22.03" height="55" transform="translate(69.97 1427.08) rotate(-87.21)"/>
            <rect class="cls-5" x="774.17" y="627.86" width="22.03" height="55" transform="translate(92.38 1407.72) rotate(-87.21)"/>
            <rect class="cls-5" x="822.22" y="762.13" width="22.03" height="55" transform="translate(3.99 1583.45) rotate(-87.21)"/>
            <rect class="cls-5" x="823.14" y="740.01" width="22.35" height="55" transform="translate(27.1 1563.49) rotate(-87.21)"/>
            <rect class="cls-5" x="824.93" y="718.21" width="21.85" height="55" transform="translate(50.35 1544.29) rotate(-87.21)"/>
            <rect class="cls-5" x="825.95" y="696.44" width="21.98" height="55" transform="translate(73.13 1524.66) rotate(-87.21)"/>
            <rect class="cls-5" x="827.17" y="674.44" width="22.03" height="55" transform="translate(96.28 1504.96) rotate(-87.21)"/>
            <rect class="cls-5" x="828.01" y="652.49" width="21.88" height="55" transform="translate(118.93 1484.86) rotate(-87.21)"/>
            <rect class="cls-5" x="829.09" y="630.65" width="21.85" height="55" transform="translate(141.76 1465.14) rotate(-87.21)"/>
            <rect class="cls-5" x="830.06" y="608.73" width="22.04" height="55" transform="translate(164.67 1445.35) rotate(-87.21)"/>
            <rect class="cls-5" x="831.48" y="586.7" width="22.11" height="55" transform="translate(188.06 1425.84) rotate(-87.21)"/>
            <rect class="cls-5" x="832.38" y="564.69" width="21.97" height="54.97" transform="translate(210.85 1405.72) rotate(-87.21)"/>
            <rect class="cls-5" x="833.26" y="542.17" width="23.03" height="55.09" transform="translate(234.63 1385.77) rotate(-87.21)"/>
            <rect class="cls-5" x="834.95" y="521.07" width="21.57" height="55" transform="translate(256.65 1366.6) rotate(-87.21)"/>
            <rect class="cls-5" x="775.9" y="605.43" width="22.03" height="55" transform="translate(116.44 1388.12) rotate(-87.21)"/>
            <rect class="cls-5" x="776.26" y="583.5" width="22.25" height="55.22" transform="translate(138.68 1367.82) rotate(-87.21)"/>
            <rect class="cls-5" x="777.35" y="561.71" width="22.03" height="55.18" transform="translate(161.4 1348.05) rotate(-87.21)"/>
            <rect class="cls-5" x="778.67" y="539.43" width="21.87" height="55.24" transform="matrix(0.05, -1, 1, 0.05, 184.81, 1328.12)"/>
            <rect class="cls-5" x="779.79" y="518.08" width="21.83" height="55.29" transform="translate(207.14 1308.94) rotate(-87.21)"/>
            <path class="cls-5" d="M873.72,539.13l1.89-40s-.25-15.55-13.79-15.92c-11.33-.33-13-.33-13-.33l-3.05,54.86Z"/>
            <polygon class="cls-5" points="805.17 799.2 802.26 854.33 829.6 855.74 832.77 800.91 805.17 799.2"/>
            <polygon class="cls-5" points="777.78 797.92 774.93 852.99 802.26 854.33 804.79 799.23 777.78 797.92"/>
            <path class="cls-5" d="M832.78,800.91l27.6,1-2.1,42.2s-.59,12.67-14.63,12.17l-14-.5Z"/>
            <path class="cls-5" d="M791.23,534.83l-27.6-1.34,2.65-34.29s9.14-19.86,22.56-19.49c.78,0,4.92.32,4.92.32Z"/>
            <polygon class="cls-5" points="821.2 481.41 818.79 536.47 791.23 534.83 793.74 480.04 821.2 481.41"/>
            <polygon class="cls-5" points="848.78 482.91 845.73 537.77 818.79 536.47 821.2 481.41 848.78 482.91"/>
            <path class="cls-5" d="M750.2,796.59l-2,40s-1.34,14.75,12.71,15.58l14,.83,2.85-55.07Z"/>
        </g>
        <g id="TEXT-76" data-name="TEXT">
            <text class="cls-4" transform="translate(792.19 662.96) rotate(0.14)">MZ-4</text>
        </g>
        <g id="TEXT-77" data-name="TEXT">
            <text class="cls-8" transform="translate(759.42 825.87)">1</text>
        </g>
        <g id="TEXT-78" data-name="TEXT">
            <text class="cls-8" transform="translate(774.3 787.64)">2</text>
        </g>
        <g id="TEXT-79" data-name="TEXT">
            <text class="cls-8" transform="translate(774.55 765.81)">3</text>
        </g>
        <g id="TEXT-80" data-name="TEXT">
            <text class="cls-8" transform="translate(775.81 744)">4</text>
        </g>
        <g id="TEXT-81" data-name="TEXT">
            <text class="cls-8" transform="translate(777.88 721.67)">5</text>
        </g>
        <g id="TEXT-82" data-name="TEXT">
            <text class="cls-8" transform="translate(779.11 700.82)">6</text>
        </g>
        <g id="TEXT-83" data-name="TEXT">
            <text class="cls-8" transform="translate(780.61 678.02)">7</text>
        </g>
        <g id="TEXT-84" data-name="TEXT">
            <text class="cls-8" transform="translate(780.92 656.19)">8</text>
        </g>
        <g id="TEXT-85" data-name="TEXT">
            <text class="cls-8" transform="translate(782.52 635.64)">9</text>
        </g>
        <g id="TEXT-86" data-name="TEXT">
            <text class="cls-8" transform="translate(782.4 612.27)">10</text>
        </g>
        <g id="TEXT-87" data-name="TEXT">
            <text class="cls-8" transform="translate(782.83 590.15)">
                <tspan class="cls-9">1</tspan>
                <tspan x="5.01" y="0">1</tspan>
            </text>
        </g>
        <g id="TEXT-88" data-name="TEXT">
            <text class="cls-8" transform="translate(783.9 568.43)">12</text>
        </g>
        <g id="TEXT-89" data-name="TEXT">
            <text class="cls-8" transform="translate(774.19 508.22)">14</text>
        </g>
        <g id="TEXT-90" data-name="TEXT">
            <text class="cls-8" transform="translate(800.26 508.19)">15</text>
        </g>
        <g id="TEXT-91" data-name="TEXT">
            <text class="cls-8" transform="translate(826.49 509.69)">16</text>
        </g>
        <g id="TEXT-92" data-name="TEXT">
            <text class="cls-8" transform="translate(784.51 546.94)">13</text>
        </g>
        <g id="TEXT-93" data-name="TEXT">
            <text class="cls-8" transform="translate(854.67 511.07)">17</text>
        </g>
        <g id="TEXT-94" data-name="TEXT">
            <text class="cls-8" transform="translate(840.17 549.75)">18</text>
        </g>
        <g id="TEXT-95" data-name="TEXT">
            <text class="cls-8" transform="translate(838.09 571.56)">19</text>
        </g>
        <g id="TEXT-96" data-name="TEXT">
            <text class="cls-8" transform="translate(837.79 593.81)">20</text>
        </g>
        <g id="TEXT-97" data-name="TEXT">
            <text class="cls-8" transform="translate(836.6 615.62)">21</text>
        </g>
        <g id="TEXT-98" data-name="TEXT">
            <text class="cls-8" transform="translate(835.48 637.05)">22</text>
        </g>
        <g id="TEXT-99" data-name="TEXT">
            <text class="cls-8" transform="translate(834.5 658.75)">23</text>
        </g>
        <g id="TEXT-100" data-name="TEXT">
            <text class="cls-8" transform="translate(832.64 680.37)">24</text>
        </g>
        <g id="TEXT-101" data-name="TEXT">
            <text class="cls-8" transform="translate(831.67 704.64)">25</text>
        </g>
        <g id="TEXT-102" data-name="TEXT">
            <text class="cls-8" transform="translate(830.66 725.77)">26</text>
        </g>
        <g id="TEXT-103" data-name="TEXT">
            <text class="cls-8" transform="translate(830.08 747.4)">27</text>
        </g>
        <g id="TEXT-104" data-name="TEXT">
            <text class="cls-8" transform="translate(828.45 768.87)">28</text>
        </g>
        <g id="TEXT-105" data-name="TEXT">
            <text class="cls-8" transform="translate(827.35 790.8)">29</text>
        </g>
        <g id="TEXT-106" data-name="TEXT">
            <text class="cls-8" transform="translate(840.35 830.85)">30</text>
        </g>
        <g id="TEXT-107" data-name="TEXT">
            <text class="cls-8" transform="translate(812.13 830.11)">31</text>
        </g>
        <g id="TEXT-108" data-name="TEXT">
            <text class="cls-8" transform="translate(783.55 827.51)">32</text>
        </g>
    </g>
    <g id="MZ-5">
        <g id="MZ-5-2" data-name="MZ-5">
            <path class="cls-2" d="M1044.23,505.4,1027.39,852A17.58,17.58,0,0,1,1009,868.75l-84.64-4.11a18.47,18.47,0,0,1-17.55-19.34L922.9,513.43a32.83,32.83,0,0,1,34.38-31.2l69,3.35A18.92,18.92,0,0,1,1044.23,505.4Z"/>
            <rect class="cls-5" x="931.37" y="767.56" width="22.03" height="55" transform="translate(102.41 1697.64) rotate(-87.21)"/>
            <rect class="cls-5" x="932.83" y="745.63" width="22.03" height="55" transform="translate(125.7 1678.22) rotate(-87.21)"/>
            <rect class="cls-5" x="934.19" y="723.45" width="21.47" height="55" transform="translate(148.88 1658.2) rotate(-87.21)"/>
            <rect class="cls-5" x="935.6" y="701.81" width="20.75" height="55" transform="translate(171.5 1638.67) rotate(-87.21)"/>
            <rect class="cls-5" x="936.03" y="679.84" width="22.03" height="55" transform="matrix(0.05, -1, 1, 0.05, 194.45, 1618.84)"/>
            <rect class="cls-5" x="937.12" y="657.39" width="22.03" height="55" transform="translate(217.92 1598.58) rotate(-87.21)"/>
            <rect class="cls-5" x="938.17" y="635.95" width="22.03" height="55" transform="translate(240.32 1579.22) rotate(-87.21)"/>
            <rect class="cls-5" x="986.22" y="770.21" width="22.03" height="55" transform="translate(151.93 1754.95) rotate(-87.21)"/>
            <rect class="cls-5" x="987.14" y="748.1" width="22.35" height="55" transform="translate(175.04 1734.99) rotate(-87.21)"/>
            <rect class="cls-5" x="988.93" y="726.3" width="21.85" height="55" transform="translate(198.29 1715.79) rotate(-87.21)"/>
            <rect class="cls-5" x="989.95" y="704.53" width="21.98" height="55" transform="translate(221.07 1696.16) rotate(-87.21)"/>
            <rect class="cls-5" x="991.17" y="682.53" width="22.03" height="55" transform="translate(244.22 1676.46) rotate(-87.21)"/>
            <rect class="cls-5" x="992.01" y="660.58" width="21.88" height="55" transform="translate(266.87 1656.36) rotate(-87.21)"/>
            <rect class="cls-5" x="993.09" y="638.74" width="21.85" height="55" transform="translate(289.7 1636.64) rotate(-87.21)"/>
            <rect class="cls-5" x="994.06" y="616.82" width="22.04" height="55" transform="translate(312.61 1616.85) rotate(-87.21)"/>
            <rect class="cls-5" x="995.48" y="594.79" width="22.11" height="55" transform="translate(336 1597.34) rotate(-87.21)"/>
            <rect class="cls-5" x="996.38" y="572.78" width="21.97" height="54.97" transform="translate(358.79 1577.22) rotate(-87.21)"/>
            <rect class="cls-5" x="997.26" y="550.26" width="23.03" height="55.09" transform="translate(382.57 1557.27) rotate(-87.21)"/>
            <rect class="cls-5" x="998.95" y="529.16" width="21.57" height="55" transform="translate(404.6 1538.1) rotate(-87.21)"/>
            <rect class="cls-5" x="939.9" y="613.52" width="22.03" height="55" transform="translate(264.38 1559.62) rotate(-87.21)"/>
            <rect class="cls-5" x="940.26" y="591.59" width="22.25" height="55.22" transform="translate(286.62 1539.32) rotate(-87.21)"/>
            <rect class="cls-5" x="941.35" y="569.8" width="22.03" height="55.18" transform="translate(309.34 1519.55) rotate(-87.21)"/>
            <rect class="cls-5" x="942.67" y="547.51" width="21.87" height="55.24" transform="matrix(0.05, -1, 1, 0.05, 332.75, 1499.62)"/>
            <rect class="cls-5" x="943.79" y="526.17" width="21.83" height="55.29" transform="translate(355.08 1480.44) rotate(-87.21)"/>
            <path class="cls-5" d="M1037.72,547.22l1.89-40s-.25-15.55-13.79-15.92c-11.33-.33-13-.33-13-.33l-3.05,54.86Z"/>
            <polygon class="cls-5" points="969.17 807.29 966.26 862.41 993.6 863.83 996.77 809 969.17 807.29"/>
            <polygon class="cls-5" points="941.78 806.01 938.93 861.08 966.26 862.41 968.79 807.32 941.78 806.01"/>
            <path class="cls-5" d="M996.78,809l27.6,1-2.1,42.2s-.59,12.67-14.63,12.17l-14-.5Z"/>
            <path class="cls-5" d="M955.23,542.92l-27.6-1.34,2.65-34.29s9.14-19.86,22.56-19.49c.78,0,4.92.32,4.92.32Z"/>
            <polygon class="cls-5" points="985.2 489.5 982.79 544.56 955.23 542.91 957.74 488.12 985.2 489.5"/>
            <polygon class="cls-5" points="1012.78 491 1009.73 545.86 982.79 544.56 985.2 489.5 1012.78 491"/>
            <path class="cls-5" d="M914.2,804.68l-2,40s-1.34,14.75,12.71,15.58l14,.83L941.78,806Z"/>
        </g>
        <g id="TEXT-109" data-name="TEXT">
            <text class="cls-4" transform="translate(947.97 656.75) rotate(0.14)">MZ-5</text>
        </g>
        <g id="TEXT-110" data-name="TEXT">
            <text class="cls-8" transform="translate(922.87 834.85)">1</text>
        </g>
        <g id="TEXT-111" data-name="TEXT">
            <text class="cls-8" transform="translate(939.41 795.71)">2</text>
        </g>
        <g id="TEXT-112" data-name="TEXT">
            <text class="cls-8" transform="translate(939.05 774.05)">3</text>
        </g>
        <g id="TEXT-113" data-name="TEXT">
            <text class="cls-8" transform="translate(940.31 752.24)">4</text>
        </g>
        <g id="TEXT-114" data-name="TEXT">
            <text class="cls-8" transform="translate(942.38 729.91)">5</text>
        </g>
        <g id="TEXT-115" data-name="TEXT">
            <text class="cls-8" transform="translate(943.61 709.07)">6</text>
        </g>
        <g id="TEXT-116" data-name="TEXT">
            <text class="cls-8" transform="translate(945.11 686.26)">7</text>
        </g>
        <g id="TEXT-117" data-name="TEXT">
            <text class="cls-8" transform="translate(945.41 664.43)">8</text>
        </g>
        <g id="TEXT-118" data-name="TEXT">
            <text class="cls-8" transform="translate(947.02 643.88)">9</text>
        </g>
        <g id="TEXT-119" data-name="TEXT">
            <text class="cls-8" transform="translate(946.9 620.51)">10</text>
        </g>
        <g id="TEXT-120" data-name="TEXT">
            <text class="cls-8" transform="translate(947.33 598.39)">
                <tspan class="cls-9">1</tspan>
                <tspan x="5.01" y="0">1</tspan>
            </text>
        </g>
        <g id="TEXT-121" data-name="TEXT">
            <text class="cls-8" transform="translate(948.4 576.67)">12</text>
        </g>
        <g id="TEXT-122" data-name="TEXT">
            <text class="cls-8" transform="translate(949.01 555.18)">13</text>
        </g>
        <g id="TEXT-123" data-name="TEXT">
            <text class="cls-8" transform="translate(938.69 516.46)">14</text>
        </g>
        <g id="TEXT-124" data-name="TEXT">
            <text class="cls-8" transform="translate(964.76 516.43)">15</text>
        </g>
        <g id="TEXT-125" data-name="TEXT">
            <text class="cls-8" transform="translate(990.99 517.93)">16</text>
        </g>
        <g id="TEXT-126" data-name="TEXT">
            <text class="cls-8" transform="translate(1019.17 519.31)">17</text>
        </g>
        <g id="TEXT-127" data-name="TEXT">
            <text class="cls-8" transform="translate(1004.67 557.99)">18</text>
        </g>
        <g id="TEXT-128" data-name="TEXT">
            <text class="cls-8" transform="translate(1002.59 579.8)">19</text>
        </g>
        <g id="TEXT-129" data-name="TEXT">
            <text class="cls-8" transform="translate(1002.29 602.05)">20</text>
        </g>
        <g id="TEXT-130" data-name="TEXT">
            <text class="cls-8" transform="translate(1001.1 623.86)">21</text>
        </g>
        <g id="TEXT-131" data-name="TEXT">
            <text class="cls-8" transform="translate(999.98 645.3)">22</text>
        </g>
        <g id="TEXT-132" data-name="TEXT">
            <text class="cls-8" transform="translate(999 666.99)">23</text>
        </g>
        <g id="TEXT-133" data-name="TEXT">
            <text class="cls-8" transform="translate(997.14 688.61)">24</text>
        </g>
        <g id="TEXT-134" data-name="TEXT">
            <text class="cls-8" transform="translate(996.16 712.89)">25</text>
        </g>
        <g id="TEXT-135" data-name="TEXT">
            <text class="cls-8" transform="translate(995.16 734.02)">26</text>
        </g>
        <g id="TEXT-136" data-name="TEXT">
            <text class="cls-8" transform="translate(994.57 755.64)">27</text>
        </g>
        <g id="TEXT-137" data-name="TEXT">
            <text class="cls-8" transform="translate(992.95 777.11)">28</text>
        </g>
        <g id="TEXT-138" data-name="TEXT">
            <text class="cls-8" transform="translate(991.85 799.04)">29</text>
        </g>
        <g id="TEXT-139" data-name="TEXT">
            <text class="cls-8" transform="translate(1004.85 839.09)">30</text>
        </g>
        <g id="TEXT-140" data-name="TEXT">
            <text class="cls-8" transform="translate(976.63 838.35)">31</text>
        </g>
        <g id="TEXT-141" data-name="TEXT">
            <text class="cls-8" transform="translate(948.04 835.75)">32</text>
        </g>
    </g>
    <g id="MZ-12">
        <g id="MZ-12-2" data-name="MZ-12">
            <rect class="cls-2" x="1459.31" y="782.96" width="403.75" height="119.32" rx="16.98" ry="16.98" transform="translate(42.84 -79.6) rotate(2.78)"/>
            <rect class="cls-5" x="1651.51" y="787.69" width="22.03" height="54.83" transform="translate(41.5 -79.7) rotate(2.78)"/>
            <rect class="cls-5" x="1672.95" y="788.73" width="22.03" height="54.83" transform="translate(41.58 -80.74) rotate(2.78)"/>
            <rect class="cls-5" x="1648.39" y="842.33" width="21.88" height="54.83" transform="translate(44.15 -79.48) rotate(2.78)"/>
            <rect class="cls-5" x="1670.25" y="843.39" width="21.85" height="54.83" transform="translate(44.23 -80.54) rotate(2.78)"/>
            <rect class="cls-5" x="1692.08" y="844.46" width="22.04" height="54.83" transform="translate(44.31 -81.6) rotate(2.78)"/>
            <rect class="cls-5" x="1714.08" y="845.91" width="22.11" height="54.83" transform="translate(44.4 -82.67) rotate(2.78)"/>
            <rect class="cls-5" x="1736.17" y="846.75" width="21.97" height="54.8" transform="translate(44.47 -83.74) rotate(2.78)"/>
            <rect class="cls-5" x="1758.1" y="848.1" width="23.03" height="54.92" transform="translate(44.56 -84.82) rotate(2.78)"/>
            <rect class="cls-5" x="1779.98" y="849.09" width="21.57" height="54.83" transform="translate(44.63 -85.85) rotate(2.78)"/>
            <rect class="cls-5" x="1695.38" y="790.46" width="22.03" height="54.83" transform="translate(41.69 -81.82) rotate(2.78)"/>
            <rect class="cls-5" x="1717.1" y="790.82" width="22.25" height="55.05" transform="translate(41.74 -82.88) rotate(2.78)"/>
            <rect class="cls-5" x="1739.02" y="791.81" width="22.03" height="55.01" transform="translate(41.81 -83.94) rotate(2.78)"/>
            <rect class="cls-5" x="1761.35" y="793.02" width="21.87" height="55.07" transform="translate(41.9 -85.02) rotate(2.78)"/>
            <rect class="cls-5" x="1782.69" y="794.09" width="21.83" height="55.12" transform="translate(41.98 -86.05) rotate(2.78)"/>
            <path class="cls-5" d="M1800.2,904.42l40,1.89s15.5,1.5,15.88-12,.38-14.75.38-14.75l-54.86-3Z"/>
            <path class="cls-5" d="M1804.5,822.17l1.34-27.52,42,2.28s12.5.38,12.13,13.75-.62,14-.62,14Z"/>
            <polygon class="cls-5" points="1857.92 852.06 1802.86 849.65 1804.5 822.17 1859.29 824.68 1857.92 852.06"/>
            <polygon class="cls-5" points="1856.42 879.56 1801.56 876.51 1802.86 849.65 1857.92 852.06 1856.42 879.56"/>
            <path class="cls-6" d="M1480,777.67s-13.83-.83-14.58,13.67-4.42,83.08-4.42,83.08,0,12.25,13.5,13S1647.1,896,1647.1,896l5.23-109.51Z"/>
        </g>
        <g id="TEXT-142" data-name="TEXT">
            <text class="cls-4" transform="translate(1702.98 849.95) rotate(0.14)">MZ-12</text>
        </g>
        <g id="TEXT-143" data-name="TEXT">
            <text class="cls-4" transform="translate(1517.08 843.05) rotate(0.51)">A.<tspan class="cls-7" x="14.17" y="0">V</tspan>
                <tspan x="22.8" y="0">.-4</tspan>
            </text>
        </g>
        <g id="TEXT-144" data-name="TEXT">
            <text class="cls-8" transform="translate(1655.68 869.89)">1</text>
        </g>
        <g id="TEXT-145" data-name="TEXT">
            <text class="cls-8" transform="translate(1658.48 814.66)">2</text>
        </g>
        <g id="TEXT-146" data-name="TEXT">
            <text class="cls-8" transform="translate(1679.85 816.59)">3</text>
        </g>
        <g id="TEXT-147" data-name="TEXT">
            <text class="cls-8" transform="translate(1701.22 817.94)">4</text>
        </g>
        <g id="TEXT-148" data-name="TEXT">
            <text class="cls-8" transform="translate(1724.01 820.23)">5</text>
        </g>
        <g id="TEXT-149" data-name="TEXT">
            <text class="cls-8" transform="translate(1745.79 821.19)">6</text>
        </g>
        <g id="TEXT-150" data-name="TEXT">
            <text class="cls-8" transform="translate(1767.81 822.12)">7</text>
        </g>
        <g id="TEXT-151" data-name="TEXT">
            <text class="cls-8" transform="translate(1787.26 823.07)">8</text>
        </g>
        <g id="TEXT-152" data-name="TEXT">
            <text class="cls-8" transform="translate(1826.43 811.3)">9</text>
        </g>
        <g id="TEXT-153" data-name="TEXT">
            <text class="cls-8" transform="translate(1825.15 836.63)">10</text>
        </g>
        <g id="TEXT-154" data-name="TEXT">
            <text class="cls-8" transform="translate(1825.04 866.14)">
                <tspan class="cls-9">1</tspan>
                <tspan x="5.01" y="0">1</tspan>
            </text>
        </g>
        <g id="TEXT-155" data-name="TEXT">
            <text class="cls-8" transform="translate(1822.87 892.19)">12</text>
        </g>
        <g id="TEXT-156" data-name="TEXT">
            <text class="cls-8" transform="translate(1784.48 877.07)">13</text>
        </g>
        <g id="TEXT-157" data-name="TEXT">
            <text class="cls-8" transform="translate(1763.49 876.78)">14</text>
        </g>
        <g id="TEXT-158" data-name="TEXT">
            <text class="cls-8" transform="translate(1740.8 875.53)">15</text>
        </g>
        <g id="TEXT-159" data-name="TEXT">
            <text class="cls-8" transform="translate(1719.23 874.28)">16</text>
        </g>
        <g id="TEXT-160" data-name="TEXT">
            <text class="cls-8" transform="translate(1697.3 873.18)">17</text>
        </g>
        <g id="TEXT-161" data-name="TEXT">
            <text class="cls-8" transform="translate(1675.36 872.08)">18</text>
        </g>
    </g>
    <g id="MZ-66">
        <g id="TEXT-162" data-name="TEXT">
            <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2263.21, 946.66)">6</text>
            <g id="MZ-66-2" data-name="MZ-66">
                <path class="cls-2" d="M2378,700.73l-214.33,345.44c-5.13,8.38-3.48,19.19,4.71,24.21L2241,1116c8.19,5,21.87,3,27-5.33l241.33-387.83c6.83-11.33,0-28.67-16.67-30.83l-91.5-4.83C2388.05,686.56,2383.13,692.35,2378,700.73Z"/>
                <rect class="cls-5" x="2253.61" y="1020.39" width="22.03" height="54.91" transform="translate(188.13 2431.56) rotate(-58.51)"/>
                <rect class="cls-5" x="2265.46" y="1001.91" width="22.03" height="54.83" transform="translate(209.58 2432.82) rotate(-58.51)"/>
                <rect class="cls-5" x="2276.94" y="983.17" width="22.03" height="54.83" transform="translate(231.04 2433.65) rotate(-58.51)"/>
                <rect class="cls-5" x="2288.82" y="964.23" width="21.47" height="54.83" transform="translate(252.73 2434.5) rotate(-58.51)"/>
                <polygon class="cls-5" points="2293.88 949.5 2282.14 968.17 2328.74 996.55 2340.01 978.16 2293.88 949.5"/>
                <rect class="cls-5" x="2311.99" y="927.01" width="22.03" height="54.83" transform="translate(295.67 2436.73) rotate(-58.51)"/>
                <rect class="cls-5" x="2324.03" y="908.43" width="22.03" height="54.83" transform="translate(317.27 2438.12) rotate(-58.51)"/>
                <rect class="cls-5" x="2335.25" y="890.12" width="22.03" height="54.83" transform="translate(338.23 2438.94) rotate(-58.51)"/>
                <rect class="cls-5" x="2206.6" y="991.24" width="22.03" height="55.49" transform="translate(190.28 2377.69) rotate(-58.51)"/>
                <rect class="cls-5" x="2218.35" y="973.05" width="22.03" height="54.83" transform="translate(211.68 2378.86) rotate(-58.51)"/>
                <rect class="cls-5" x="2230.24" y="953.92" width="22.35" height="54.83" transform="translate(233.76 2380.01) rotate(-58.51)"/>
                <rect class="cls-5" x="2242.12" y="935.75" width="21.85" height="54.83" transform="translate(254.81 2381.25) rotate(-58.51)"/>
                <polygon class="cls-5" points="2247.32 920.94 2235.22 939.79 2281.97 968.44 2293.68 949.34 2247.32 920.94"/>
                <rect class="cls-5" x="2265.43" y="898.45" width="22.03" height="54.83" transform="translate(297.79 2383.38) rotate(-58.51)"/>
                <rect class="cls-5" x="2277.05" y="879.6" width="21.88" height="54.83" transform="translate(319.38 2384.23) rotate(-58.51)"/>
                <rect class="cls-5" x="2288.47" y="860.87" width="21.99" height="54.83" transform="translate(340.83 2385.06) rotate(-58.51)"/>
                <polygon class="cls-5" points="2293.3 845.87 2281.83 864.59 2328.59 893.24 2340.22 875.04 2293.3 845.87"/>
                <rect class="cls-5" x="2311.61" y="823.98" width="21.87" height="54.83" transform="translate(383.31 2387.12) rotate(-58.51)"/>
                <rect class="cls-5" x="2323.43" y="805.32" width="21.97" height="54.8" transform="translate(404.91 2388.32) rotate(-58.51)"/>
                <polygon class="cls-5" points="2328.07 790.51 2316.63 809.19 2363.46 837.88 2374.85 819.12 2328.07 790.51"/>
                <rect class="cls-5" x="2346.51" y="768.16" width="22.25" height="54.83" transform="translate(447.67 2390.38) rotate(-58.51)"/>
                <polygon class="cls-5" points="2340.15 875 2328.44 893.56 2375.5 922.39 2387.23 903.74 2340.15 875"/>
                <rect class="cls-5" x="2358.28" y="852.56" width="22.25" height="55.05" transform="translate(381.23 2440.79) rotate(-58.51)"/>
                <polygon class="cls-5" points="2363.42 837.57 2351.92 856.36 2398.55 885.55 2410.09 866.72 2363.42 837.57"/>
                <polygon class="cls-5" points="2374.85 819.12 2363.52 837.67 2410.09 866.72 2421.48 848.42 2374.85 819.12"/>
                <polygon class="cls-5" points="2386.25 800.98 2374.85 819.59 2421.48 848.42 2433.44 829.47 2386.25 800.98"/>
                <rect class="cls-5" x="2404.72" y="778.21" width="21.83" height="55.12" transform="translate(466.68 2444.71) rotate(-58.51)"/>
                <polygon class="cls-5" points="2351.36 752.98 2340.05 771.65 2387.05 800.44 2398.45 781.83 2351.36 752.98"/>
                <polygon class="cls-5" points="2363.33 734.23 2351.45 752.87 2398.45 781.66 2409.79 762.61 2363.33 734.23"/>
                <polygon class="cls-5" points="2374.73 715.62 2363.33 734.23 2409.79 762.87 2421.67 743.96 2374.73 715.62"/>
                <polygon class="cls-5" points="2386.42 697 2374.73 715.62 2421.28 744.49 2432.66 726.04 2386.42 697"/>
                <polygon class="cls-5" points="2432.66 726.04 2421.26 744.65 2468.26 773.44 2479.36 754.78 2432.66 726.04"/>
                <polygon class="cls-5" points="2421.26 744.65 2409.51 763.02 2456.51 791.81 2468.31 773.35 2421.26 744.65"/>
                <polygon class="cls-5" points="2409.51 763.02 2398.1 781.63 2444.84 810.86 2456.51 791.81 2409.51 763.02"/>
                <polygon class="cls-5" points="2235.52 1042.87 2206.87 1090.06 2183.55 1075.89 2211.82 1028.79 2235.52 1042.87"/>
                <polygon class="cls-5" points="2258.81 1057.2 2230.14 1104.3 2206.87 1090.06 2235.82 1043.12 2258.81 1057.2"/>
                <path class="cls-5" d="M2211.82,1028.79l-23.28-14.7-22,36.06s-6.65,10.8,5.2,18.27l11.85,7.47Z"/>
                <path class="cls-5" d="M2282.28,1071.58l-20.86,34.18s-7.2,12.94-19.24,5.74l-12-7.2,28.67-47.11Z"/>
                <path class="cls-5" d="M2465.67,695.33l-66-3.33s-9-1.71-13.25,5l56.4,35.29Z"/>
                <path class="cls-5" d="M2501.67,719.33s6.5-19.33-14.33-23.17c-6.33-.17-21.67-.83-21.67-.83l-22.85,37,36.54,22.49Z"/>
            </g>
            <g id="TEXT-163" data-name="TEXT">
                <text class="cls-4" transform="translate(2295.81 905.78) rotate(0.51)">MZ-66</text>
            </g>
            <g id="TEXT-164" data-name="TEXT">
                <text class="cls-8" transform="translate(2183.44 1046.03)">1</text>
            </g>
            <g id="TEXT-165" data-name="TEXT">
                <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2215.98, 1019.87)">2</text>
            </g>
            <g id="TEXT-166" data-name="TEXT">
                <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2228.79, 1003.36)">3</text>
            </g>
            <g id="TEXT-167" data-name="TEXT">
                <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2240, 984.17)">4</text>
            </g>
            <g id="TEXT-168" data-name="TEXT">
                <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2251.6, 964.87)">5</text>
            </g>
            <g id="TEXT-169" data-name="TEXT">
                <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2422.94, 711.8)">19</text>
            </g>
            <g id="TEXT-170" data-name="TEXT">
                <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2471.5, 724.27)">20</text>
            </g>
            <g id="TEXT-171" data-name="TEXT">
                <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2307.6, 977.17)">33</text>
            </g>
            <g id="TEXT-172" data-name="TEXT">
                <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2285.28, 1014.65)">35</text>
            </g>
            <g id="TEXT-173" data-name="TEXT">
                <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2297.3, 995.7)">34</text>
            </g>
            <g id="TEXT-174" data-name="TEXT">
                <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2273.68, 1033.3)">36</text>
            </g>
            <g id="TEXT-175" data-name="TEXT">
                <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2261.79, 1050.18)">37</text>
            </g>
            <g id="TEXT-176" data-name="TEXT">
                <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2255.03, 1091.57)">38</text>
            </g>
            <g id="TEXT-177" data-name="TEXT">
                <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2230.62, 1079.06)">39</text>
            </g>
            <g id="TEXT-178" data-name="TEXT">
                <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2206.83, 1066.24)">40</text>
            </g>
        </g>
        <g id="TEXT-179" data-name="TEXT">
            <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2308.89, 872.49)">10</text>
        </g>
        <g id="TEXT-180" data-name="TEXT">
            <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2320.24, 854.2)">
                <tspan class="cls-9">1</tspan>
                <tspan x="5.01" y="0">1</tspan>
            </text>
        </g>
        <g id="TEXT-181" data-name="TEXT">
            <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2331.77, 835.54)">12</text>
        </g>
        <g id="TEXT-182" data-name="TEXT">
            <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2343.67, 816.98)">13</text>
        </g>
        <g id="TEXT-183" data-name="TEXT">
            <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2355.28, 798.33)">14</text>
        </g>
        <g id="TEXT-184" data-name="TEXT">
            <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2413.42, 809.28)">24</text>
        </g>
        <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2390.21, 846.57)">26</text>
        <g id="TEXT-185" data-name="TEXT">
            <g id="TEXT-186" data-name="TEXT">
                <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2401.82, 827.92)">25</text>
            </g>
        </g>
        <g id="TEXT-187" data-name="TEXT">
            <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2378.61, 865.21)">27</text>
        </g>
        <g id="TEXT-188" data-name="TEXT">
            <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2367.01, 883.86)">28</text>
        </g>
        <g id="TEXT-189" data-name="TEXT">
            <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2355.4, 902.5)">29</text>
        </g>
        <g id="TEXT-190" data-name="TEXT">
            <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2343.8, 921.15)">30</text>
        </g>
        <g id="TEXT-191" data-name="TEXT">
            <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2332.2, 939.79)">31</text>
        </g>
        <g id="TEXT-192" data-name="TEXT">
            <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2366.43, 780.09)">15</text>
        </g>
        <g id="TEXT-193" data-name="TEXT">
            <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2378.03, 761.45)">16</text>
        </g>
        <g id="TEXT-194" data-name="TEXT">
            <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2389.64, 742.8)">17</text>
        </g>
        <g id="TEXT-195" data-name="TEXT">
            <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2401.24, 724.16)">18</text>
        </g>
        <g id="TEXT-196" data-name="TEXT">
            <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2447.85, 753.17)">21</text>
        </g>
        <g id="TEXT-197" data-name="TEXT">
            <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2436.46, 771.84)">22</text>
        </g>
        <g id="TEXT-198" data-name="TEXT">
            <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2424.21, 791.23)">23</text>
        </g>
        <g id="TEXT-199" data-name="TEXT">
            <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2274.71, 927.85)">7</text>
        </g>
        <g id="TEXT-200" data-name="TEXT">
            <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2286.86, 909.13)">8</text>
        </g>
        <g id="TEXT-201" data-name="TEXT">
            <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2298.31, 891.07)">9</text>
        </g>
        <g id="TEXT-202" data-name="TEXT">
            <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2319.21, 958.52)">32</text>
        </g>
    </g>
    <g id="MZ.11">
        <g id="MZ-11">
            <path class="cls-2" d="M2209.25,928.92l-319.92-15.83c-8-.39-16.45-8.39-16-17.58l3.79-83.54c.45-9.19,9.18-18.35,17.13-18l370.57,18.76c10.26,1.08,19.76,13.91,13.26,24.83l-48.33,78.25C2224.09,926.58,2217.2,929.3,2209.25,928.92Z"/>
            <rect class="cls-5" x="1936.43" y="800.59" width="22.03" height="54.91" transform="translate(42.47 -93.51) rotate(2.78)"/>
            <rect class="cls-5" x="1958.38" y="801.77" width="22.03" height="54.83" transform="translate(42.55 -94.57) rotate(2.78)"/>
            <rect class="cls-5" x="1980.31" y="803.22" width="22.03" height="54.83" transform="translate(42.64 -95.63) rotate(2.78)"/>
            <rect class="cls-5" x="2002.77" y="804.3" width="21.47" height="54.83" transform="translate(42.72 -96.71) rotate(2.78)"/>
            <rect class="cls-5" x="2024.77" y="805.35" width="20.75" height="54.83" transform="translate(42.8 -97.76) rotate(2.78)"/>
            <rect class="cls-5" x="2046.1" y="806.41" width="22.03" height="54.83" transform="translate(42.88 -98.82) rotate(2.78)"/>
            <rect class="cls-5" x="2068.55" y="807.5" width="22.03" height="54.83" transform="translate(42.96 -99.91) rotate(2.78)"/>
            <rect class="cls-5" x="2089.99" y="808.55" width="22.03" height="54.83" transform="translate(43.03 -100.95) rotate(2.78)"/>
            <rect class="cls-5" x="1933.8" y="855.4" width="22.03" height="55.49" transform="translate(45.14 -93.31) rotate(2.78)"/>
            <rect class="cls-5" x="1955.72" y="856.45" width="22.03" height="54.83" transform="translate(45.2 -94.38) rotate(2.78)"/>
            <rect class="cls-5" x="1977.67" y="857.52" width="22.35" height="54.83" transform="translate(45.28 -95.45) rotate(2.78)"/>
            <rect class="cls-5" x="1999.72" y="859.06" width="21.85" height="54.83" transform="translate(45.38 -96.5) rotate(2.78)"/>
            <rect class="cls-5" x="2021.43" y="860.15" width="21.98" height="54.83" transform="translate(45.45 -97.56) rotate(2.78)"/>
            <rect class="cls-5" x="2043.41" y="861.38" width="22.03" height="54.83" transform="translate(45.54 -98.63) rotate(2.78)"/>
            <rect class="cls-5" x="2065.43" y="862.15" width="21.88" height="54.83" transform="translate(45.6 -99.69) rotate(2.78)"/>
            <rect class="cls-5" x="2087.29" y="863.21" width="21.85" height="54.83" transform="translate(45.68 -100.75) rotate(2.78)"/>
            <rect class="cls-5" x="2109.11" y="864.27" width="22.04" height="54.83" transform="translate(45.76 -101.81) rotate(2.78)"/>
            <rect class="cls-5" x="2131.11" y="865.72" width="22.11" height="54.83" transform="translate(45.85 -102.88) rotate(2.78)"/>
            <rect class="cls-5" x="2153.21" y="866.57" width="21.97" height="54.8" transform="translate(45.92 -103.94) rotate(2.78)"/>
            <rect class="cls-5" x="2112.43" y="809.66" width="22.03" height="55.45" transform="translate(43.13 -102.03) rotate(2.78)"/>
            <rect class="cls-5" x="2134.13" y="810.63" width="22.25" height="55.05" transform="translate(43.19 -103.09) rotate(2.78)"/>
            <rect class="cls-5" x="2156.05" y="811.63" width="22.03" height="55.01" transform="translate(43.26 -104.15) rotate(2.78)"/>
            <rect class="cls-5" x="2178.2" y="812.76" width="19" height="62.81" transform="translate(43.53 -105.14) rotate(2.78)"/>
            <rect class="cls-5" x="2197.18" y="813.76" width="20.55" height="62.78" transform="translate(43.6 -106.1) rotate(2.78)"/>
            <polygon class="cls-5" points="1935.16 854.9 1880.04 852 1878.62 879.25 1933.45 882.41 1935.16 854.9"/>
            <polygon class="cls-5" points="1936.44 827.58 1881.37 824.75 1880.04 852 1935.13 854.51 1936.44 827.58"/>
            <path class="cls-5" d="M1933.45,882.41l-1,27.51-42.2-2.1s-12.67-.58-12.17-14.58l.5-14Z"/>
            <path class="cls-5" d="M1937.78,800.09l-40-2s-14.75-1.33-15.58,12.67l-.83,14,55.07,2.84Z"/>
            <path class="cls-5" d="M2268.67,844.17l6-10.34s5.17-13.5-10.5-16.67c-14.83-1-44.93-2.88-44.93-2.88l-1.32,27.2Z"/>
            <polygon class="cls-5" points="2235.17 897.33 2247.67 878.17 2176.68 875.08 2175.19 893.97 2235.17 897.33"/>
            <path class="cls-5" d="M2207.45,924s11,3.67,16.88-8.83c8-12.67,10.83-17.83,10.83-17.83l-60-3.36-1.36,27.9Z"/>
            <polygon class="cls-5" points="2247.88 877.96 2268.67 844.17 2217.91 841.5 2216.19 877 2247.88 877.96"/>
        </g>
        <g id="TEXT-203" data-name="TEXT">
            <text class="cls-4" transform="translate(2041.38 856.26) rotate(0.51)">MZ-<tspan class="cls-10" x="26.65" y="0">1</tspan>
                <tspan x="33.88" y="0">1</tspan>
            </text>
        </g>
        <g id="TEXT-204" data-name="TEXT">
            <text class="cls-8" transform="translate(1901.83 897.23)">1</text>
        </g>
        <g id="TEXT-205" data-name="TEXT">
            <text class="cls-8" transform="translate(1902.74 869.11)">2</text>
        </g>
        <g id="TEXT-206" data-name="TEXT">
            <text class="cls-8" transform="translate(1903.96 842.82)">3</text>
        </g>
        <g id="TEXT-207" data-name="TEXT">
            <text class="cls-8" transform="translate(1905.2 817.94)">4</text>
        </g>
        <g id="TEXT-208" data-name="TEXT">
            <text class="cls-8" transform="translate(1943.35 831.21)">5</text>
        </g>
        <g id="TEXT-209" data-name="TEXT">
            <text class="cls-8" transform="translate(1965.12 832.18)">6</text>
        </g>
        <g id="TEXT-210" data-name="TEXT">
            <text class="cls-8" transform="translate(1987.14 833.11)">7</text>
        </g>
        <g id="TEXT-211" data-name="TEXT">
            <text class="cls-8" transform="translate(2009.4 834.65)">8</text>
        </g>
        <g id="TEXT-212" data-name="TEXT">
            <text class="cls-8" transform="translate(2030.75 835.89)">9</text>
        </g>
        <g id="TEXT-213" data-name="TEXT">
            <text class="cls-8" transform="translate(2052.13 836.14)">10</text>
        </g>
        <g id="TEXT-214" data-name="TEXT">
            <text class="cls-8" transform="translate(2073.64 837.18)">
                <tspan class="cls-9">1</tspan>
                <tspan x="5.01" y="0">1</tspan>
            </text>
        </g>
        <g id="TEXT-215" data-name="TEXT">
            <text class="cls-8" transform="translate(2095.55 838.21)">12</text>
        </g>
        <g id="TEXT-216" data-name="TEXT">
            <text class="cls-8" transform="translate(2117.55 839.61)">13</text>
        </g>
        <g id="TEXT-217" data-name="TEXT">
            <text class="cls-8" transform="translate(2139.11 840.63)">14</text>
        </g>
        <g id="TEXT-218" data-name="TEXT">
            <text class="cls-8" transform="translate(2160.28 841.58)">15</text>
        </g>
        <g id="TEXT-219" data-name="TEXT">
            <text class="cls-8" transform="translate(2183.63 842.64)">16</text>
        </g>
        <g id="TEXT-220" data-name="TEXT">
            <text class="cls-8" transform="translate(2135.27 895.34)">23</text>
        </g>
        <g id="TEXT-221" data-name="TEXT">
            <text class="cls-8" transform="translate(2114.26 894.66)">24</text>
        </g>
        <g id="TEXT-222" data-name="TEXT">
            <text class="cls-8" transform="translate(2092.66 892.46)">25</text>
        </g>
        <g id="TEXT-223" data-name="TEXT">
            <text class="cls-8" transform="translate(2070.8 892.27)">26</text>
        </g>
        <g id="TEXT-224" data-name="TEXT">
            <text class="cls-8" transform="translate(2048.28 891.27)">27</text>
        </g>
        <g id="TEXT-225" data-name="TEXT">
            <text class="cls-8" transform="translate(2026.35 890.09)">28</text>
        </g>
        <g id="TEXT-226" data-name="TEXT">
            <text class="cls-8" transform="translate(2004.42 889.05)">29</text>
        </g>
        <g id="TEXT-227" data-name="TEXT">
            <text class="cls-8" transform="translate(1982.48 888)">30</text>
        </g>
        <g id="TEXT-228" data-name="TEXT">
            <text class="cls-8" transform="translate(1960.54 886.96)">31</text>
        </g>
        <g id="TEXT-229" data-name="TEXT">
            <text class="cls-8" transform="translate(1938.61 885.92)">32</text>
        </g>
        <g id="TEXT-230" data-name="TEXT">
            <text class="cls-8" transform="translate(2202.15 845.6)">17</text>
        </g>
        <g id="TEXT-231" data-name="TEXT">
            <text class="cls-8" transform="translate(2238.77 830.57)">18</text>
        </g>
        <g id="TEXT-232" data-name="TEXT">
            <text class="cls-8" transform="translate(2232.18 861.47)">19</text>
        </g>
        <g id="TEXT-233" data-name="TEXT">
            <text class="cls-8" transform="translate(2201.71 888.48)">20</text>
        </g>
        <g id="TEXT-234" data-name="TEXT">
            <text class="cls-8" transform="translate(2190.91 910.35)">21</text>
        </g>
        <g id="TEXT-235" data-name="TEXT">
            <text class="cls-8" transform="translate(2157.21 896.44)">22</text>
        </g>
    </g>
    <g id="MZ-10">
        <path class="cls-2" d="M2286.11,800.9l-389.94-18.52A17,17,0,0,1,1880,764.6l4.21-86.77A17,17,0,0,1,1902,661.7l442.11,23.07c9.41.46,17.87,11.23,15.11,21.73l-50.63,82.57C2302,800,2295.51,801.36,2286.11,800.9Z"/>
        <rect class="cls-5" x="1943.1" y="669.51" width="22.03" height="54.91" transform="translate(36.12 -93.98) rotate(2.78)"/>
        <rect class="cls-5" x="1965.04" y="670.69" width="22.03" height="54.83" transform="translate(36.2 -95.05) rotate(2.78)"/>
        <rect class="cls-5" x="1986.98" y="672.14" width="22.03" height="54.83" transform="translate(36.29 -96.11) rotate(2.78)"/>
        <rect class="cls-5" x="2009.44" y="673.22" width="21.47" height="54.83" transform="translate(36.37 -97.19) rotate(2.78)"/>
        <rect class="cls-5" x="2031.44" y="674.27" width="20.75" height="54.83" transform="translate(36.45 -98.23) rotate(2.78)"/>
        <rect class="cls-5" x="2052.76" y="675.34" width="22.03" height="54.83" transform="translate(36.53 -99.3) rotate(2.78)"/>
        <rect class="cls-5" x="2075.21" y="676.43" width="22.03" height="54.83" transform="translate(36.6 -100.39) rotate(2.78)"/>
        <rect class="cls-5" x="2096.65" y="677.47" width="22.03" height="54.83" transform="translate(36.68 -101.43) rotate(2.78)"/>
        <rect class="cls-5" x="1940.47" y="724.32" width="22.03" height="55.49" transform="translate(38.79 -93.79) rotate(2.78)"/>
        <rect class="cls-5" x="1962.39" y="725.37" width="22.03" height="54.83" transform="translate(38.85 -94.85) rotate(2.78)"/>
        <rect class="cls-5" x="1984.34" y="726.45" width="22.35" height="54.83" transform="translate(38.92 -95.93) rotate(2.78)"/>
        <rect class="cls-5" x="2006.39" y="727.99" width="21.85" height="54.83" transform="translate(39.02 -96.98) rotate(2.78)"/>
        <rect class="cls-5" x="2028.1" y="729.07" width="21.98" height="54.83" transform="translate(39.1 -98.04) rotate(2.78)"/>
        <rect class="cls-5" x="2050.08" y="730.3" width="22.03" height="54.83" transform="translate(39.19 -99.1) rotate(2.78)"/>
        <rect class="cls-5" x="2072.09" y="731.07" width="21.88" height="54.83" transform="translate(39.25 -100.17) rotate(2.78)"/>
        <rect class="cls-5" x="2093.95" y="732.13" width="21.85" height="54.83" transform="translate(39.33 -101.23) rotate(2.78)"/>
        <rect class="cls-5" x="2115.78" y="733.2" width="22.04" height="54.83" transform="translate(39.41 -102.29) rotate(2.78)"/>
        <rect class="cls-5" x="2137.78" y="734.64" width="22.11" height="54.83" transform="translate(39.5 -103.36) rotate(2.78)"/>
        <rect class="cls-5" x="2159.87" y="735.49" width="21.97" height="54.8" transform="translate(39.57 -104.42) rotate(2.78)"/>
        <rect class="cls-5" x="2181.8" y="736.84" width="23.03" height="54.92" transform="translate(39.66 -105.51) rotate(2.78)"/>
        <rect class="cls-5" x="2203.68" y="737.83" width="21.57" height="54.83" transform="translate(39.73 -106.54) rotate(2.78)"/>
        <rect class="cls-5" x="2119.1" y="678.58" width="22.03" height="55.45" transform="translate(36.78 -102.51) rotate(2.78)"/>
        <rect class="cls-5" x="2140.8" y="679.55" width="22.25" height="55.05" transform="translate(36.84 -103.57) rotate(2.78)"/>
        <rect class="cls-5" x="2162.72" y="680.55" width="22.03" height="55.01" transform="translate(36.91 -104.63) rotate(2.78)"/>
        <rect class="cls-5" x="2185.05" y="681.76" width="21.87" height="55.07" transform="translate(37 -105.7) rotate(2.78)"/>
        <rect class="cls-5" x="2206.39" y="682.83" width="21.83" height="55.12" transform="translate(37.08 -106.74) rotate(2.78)"/>
        <rect class="cls-5" x="2228.14" y="683.83" width="21.83" height="55.12" transform="translate(37.15 -107.79) rotate(2.78)"/>
        <rect class="cls-5" x="2225.47" y="738.84" width="21.83" height="55.12" transform="translate(39.82 -107.6) rotate(2.78)"/>
        <rect class="cls-5" x="2247" y="739.42" width="21.83" height="55.12" transform="translate(39.87 -108.64) rotate(2.78)"/>
        <rect class="cls-5" x="2249.64" y="685.09" width="21.83" height="55.12" transform="translate(37.24 -108.83) rotate(2.78)"/>
        <polygon class="cls-5" points="1941.83 723.82 1886.7 720.92 1885.29 748.17 1940.12 751.34 1941.83 723.82"/>
        <polygon class="cls-5" points="1943.11 696.51 1888.04 693.67 1886.7 720.92 1941.8 723.43 1943.11 696.51"/>
        <path class="cls-5" d="M1940.12,751.34l-1,27.51-42.2-2.1s-12.67-.58-12.17-14.58l.5-14Z"/>
        <path class="cls-5" d="M1944.44,669l-40-2s-14.75-1.33-15.58,12.67l-.83,14,55.07,2.84Z"/>
        <path class="cls-11" d="M2287.44,796.13s12,2.13,15.88-7.5c6.25-9.94,49.81-80,49.81-80s9-17.49-13-19.83c-21.83-1-67.38-3.19-67.38-3.19L2267.48,795Z"/>
        <g id="TEXT-236" data-name="TEXT">
            <text class="cls-4" transform="translate(2044.51 727.82) rotate(0.51)">MZ-10</text>
        </g>
        <g id="TEXT-237" data-name="TEXT">
            <text class="cls-4" transform="translate(2270.34 742.93) rotate(0.51)">A.<tspan class="cls-7" x="14.17" y="0">V</tspan>
                <tspan x="22.8" y="0">.-3</tspan>
            </text>
        </g>
        <g id="TEXT-238" data-name="TEXT">
            <text class="cls-8" transform="translate(1908.42 765.63)">1</text>
        </g>
        <g id="TEXT-239" data-name="TEXT">
            <text class="cls-8" transform="translate(1909.33 737.51)">2</text>
        </g>
        <g id="TEXT-240" data-name="TEXT">
            <text class="cls-8" transform="translate(1910.56 711.22)">3</text>
        </g>
        <g id="TEXT-241" data-name="TEXT">
            <text class="cls-8" transform="translate(1911.8 686.34)">4</text>
        </g>
        <g id="TEXT-242" data-name="TEXT">
            <text class="cls-8" transform="translate(1949.94 699.62)">5</text>
        </g>
        <g id="TEXT-243" data-name="TEXT">
            <text class="cls-8" transform="translate(1971.71 700.58)">6</text>
        </g>
        <g id="TEXT-244" data-name="TEXT">
            <text class="cls-8" transform="translate(1993.73 701.51)">7</text>
        </g>
        <g id="TEXT-245" data-name="TEXT">
            <text class="cls-8" transform="translate(2015.99 703.05)">8</text>
        </g>
        <g id="TEXT-246" data-name="TEXT">
            <text class="cls-8" transform="translate(2037.34 704.29)">9</text>
        </g>
        <g id="TEXT-247" data-name="TEXT">
            <text class="cls-8" transform="translate(2058.72 704.54)">10</text>
        </g>
        <g id="TEXT-248" data-name="TEXT">
            <text class="cls-8" transform="translate(2080.23 705.58)">
                <tspan class="cls-9">1</tspan>
                <tspan x="5.01" y="0">1</tspan>
            </text>
        </g>
        <g id="TEXT-249" data-name="TEXT">
            <text class="cls-8" transform="translate(2102.14 706.61)">12</text>
        </g>
        <g id="TEXT-250" data-name="TEXT">
            <text class="cls-8" transform="translate(2124.14 708.01)">13</text>
        </g>
        <g id="TEXT-251" data-name="TEXT">
            <text class="cls-8" transform="translate(2145.7 709.03)">14</text>
        </g>
        <g id="TEXT-252" data-name="TEXT">
            <text class="cls-8" transform="translate(2166.87 709.98)">15</text>
        </g>
        <g id="TEXT-253" data-name="TEXT">
            <text class="cls-8" transform="translate(2190.22 711.04)">16</text>
        </g>
        <g id="TEXT-254" data-name="TEXT">
            <text class="cls-8" transform="translate(2211.64 712.72)">17</text>
        </g>
        <g id="TEXT-255" data-name="TEXT">
            <text class="cls-8" transform="translate(2208.63 767.24)">22</text>
        </g>
        <g id="TEXT-256" data-name="TEXT">
            <text class="cls-8" transform="translate(2185.73 765.94)">23</text>
        </g>
        <g id="TEXT-257" data-name="TEXT">
            <text class="cls-8" transform="translate(2164.72 765.26)">24</text>
        </g>
        <g id="TEXT-258" data-name="TEXT">
            <text class="cls-8" transform="translate(2143.12 763.06)">25</text>
        </g>
        <g id="TEXT-259" data-name="TEXT">
            <text class="cls-8" transform="translate(2121.26 762.87)">26</text>
        </g>
        <g id="TEXT-260" data-name="TEXT">
            <text class="cls-8" transform="translate(2098.74 761.87)">27</text>
        </g>
        <g id="TEXT-261" data-name="TEXT">
            <text class="cls-8" transform="translate(2076.81 760.69)">28</text>
        </g>
        <g id="TEXT-262" data-name="TEXT">
            <text class="cls-8" transform="translate(2054.88 759.65)">29</text>
        </g>
        <g id="TEXT-263" data-name="TEXT">
            <text class="cls-8" transform="translate(2032.94 758.6)">30</text>
        </g>
        <g id="TEXT-264" data-name="TEXT">
            <text class="cls-8" transform="translate(2011 757.56)">31</text>
        </g>
        <g id="TEXT-265" data-name="TEXT">
            <text class="cls-8" transform="translate(1989.07 756.51)">32</text>
        </g>
        <g id="TEXT-266" data-name="TEXT">
            <text class="cls-8" transform="translate(1967.13 755.47)">33</text>
        </g>
        <g id="TEXT-267" data-name="TEXT">
            <text class="cls-8" transform="translate(1945.2 754.43)">34</text>
        </g>
        <g id="TEXT-268" data-name="TEXT">
            <text class="cls-8" transform="translate(2233.71 713.83)">18</text>
        </g>
        <g id="TEXT-269" data-name="TEXT">
            <text class="cls-8" transform="translate(2255.65 714.93)">19</text>
        </g>
        <g id="TEXT-270" data-name="TEXT">
            <text class="cls-8" transform="translate(2252.5 769.44)">20</text>
        </g>
        <g id="TEXT-271" data-name="TEXT">
            <text class="cls-8" transform="translate(2229.6 768.13)">21</text>
        </g>
    </g>
    <g id="MZ-6">
        <g id="mz-6-2" data-name="mz-6">
            <rect class="cls-2" x="1055.6" y="495.88" width="404.51" height="120.83" rx="16.98" ry="16.98" transform="translate(28.47 -60.37) rotate(2.78)"/>
            <rect class="cls-5" x="1115.73" y="495.68" width="22.03" height="54.91" transform="translate(26.71 -54.05) rotate(2.78)"/>
            <rect class="cls-5" x="1137.68" y="496.85" width="22.03" height="54.83" transform="translate(26.79 -55.11) rotate(2.78)"/>
            <rect class="cls-5" x="1159.61" y="498.3" width="22.03" height="54.83" transform="translate(26.88 -56.17) rotate(2.78)"/>
            <rect class="cls-5" x="1182.07" y="499.38" width="21.47" height="54.83" transform="translate(26.96 -57.25) rotate(2.78)"/>
            <rect class="cls-5" x="1204.07" y="500.43" width="20.75" height="54.83" transform="translate(27.04 -58.3) rotate(2.78)"/>
            <rect class="cls-5" x="1225.39" y="501.5" width="22.03" height="54.83" transform="translate(27.12 -59.36) rotate(2.78)"/>
            <rect class="cls-5" x="1247.84" y="502.59" width="22.03" height="54.83" transform="translate(27.2 -60.45) rotate(2.78)"/>
            <rect class="cls-5" x="1269.28" y="503.63" width="22.03" height="54.83" transform="translate(27.27 -61.49) rotate(2.78)"/>
            <rect class="cls-5" x="1113.1" y="550.49" width="22.03" height="55.49" transform="translate(29.38 -53.86) rotate(2.78)"/>
            <rect class="cls-5" x="1135.02" y="551.54" width="22.03" height="54.83" transform="translate(29.44 -54.92) rotate(2.78)"/>
            <rect class="cls-5" x="1156.97" y="552.61" width="22.35" height="54.83" transform="translate(29.52 -55.99) rotate(2.78)"/>
            <rect class="cls-5" x="1179.02" y="554.15" width="21.85" height="54.83" transform="translate(29.62 -57.05) rotate(2.78)"/>
            <rect class="cls-5" x="1200.73" y="555.23" width="21.98" height="54.83" transform="translate(29.69 -58.1) rotate(2.78)"/>
            <rect class="cls-5" x="1222.71" y="556.47" width="22.03" height="54.83" transform="translate(29.78 -59.17) rotate(2.78)"/>
            <rect class="cls-5" x="1244.72" y="557.23" width="21.88" height="54.83" transform="translate(29.84 -60.23) rotate(2.78)"/>
            <rect class="cls-5" x="1266.58" y="558.29" width="21.85" height="54.83" transform="translate(29.92 -61.29) rotate(2.78)"/>
            <rect class="cls-5" x="1288.41" y="559.36" width="22.04" height="54.83" transform="translate(30 -62.35) rotate(2.78)"/>
            <rect class="cls-5" x="1310.41" y="560.81" width="22.11" height="54.83" transform="translate(30.09 -63.42) rotate(2.78)"/>
            <rect class="cls-5" x="1332.5" y="561.65" width="21.97" height="54.8" transform="translate(30.16 -64.49) rotate(2.78)"/>
            <rect class="cls-5" x="1354.43" y="563" width="23.03" height="54.92" transform="translate(30.26 -65.57) rotate(2.78)"/>
            <rect class="cls-5" x="1376.31" y="564" width="21.57" height="54.83" transform="translate(30.33 -66.6) rotate(2.78)"/>
            <rect class="cls-5" x="1291.71" y="505.36" width="22.03" height="54.83" transform="translate(27.38 -62.58) rotate(2.78)"/>
            <rect class="cls-5" x="1313.43" y="505.72" width="22.25" height="55.05" transform="translate(27.43 -63.63) rotate(2.78)"/>
            <rect class="cls-5" x="1335.35" y="506.71" width="22.03" height="55.01" transform="translate(27.5 -64.69) rotate(2.78)"/>
            <rect class="cls-5" x="1357.68" y="507.92" width="21.87" height="55.07" transform="translate(27.59 -65.77) rotate(2.78)"/>
            <rect class="cls-5" x="1379.02" y="508.99" width="21.83" height="55.12" transform="translate(27.67 -66.8) rotate(2.78)"/>
            <path class="cls-5" d="M1396.53,619.32l40,1.89s15.5,1.5,15.88-12,.38-14.75.38-14.75l-54.86-3Z"/>
            <polygon class="cls-5" points="1114.46 549.98 1059.33 547.08 1057.92 574.33 1112.75 577.5 1114.46 549.98"/>
            <polygon class="cls-5" points="1115.74 522.67 1060.67 519.83 1059.33 547.08 1114.43 549.6 1115.74 522.67"/>
            <path class="cls-5" d="M1112.75,577.5l-1,27.51-42.2-2.1s-12.67-.58-12.17-14.58l.5-14Z"/>
            <path class="cls-5" d="M1400.83,537.08l1.34-27.52,42,2.28s12.5.38,12.13,13.75-.62,14-.62,14Z"/>
            <polygon class="cls-5" points="1454.25 566.96 1399.19 564.55 1400.83 537.08 1455.63 539.58 1454.25 566.96"/>
            <polygon class="cls-5" points="1452.75 594.46 1397.89 591.41 1399.19 564.55 1454.25 566.96 1452.75 594.46"/>
            <path class="cls-5" d="M1117.07,495.18l-40-2s-14.75-1.33-15.58,12.67l-.83,14,55.07,2.84Z"/>
        </g>
        <g id="TEXT-272" data-name="TEXT">
            <text class="cls-4" transform="translate(1226.9 560.56) rotate(0.14)">MZ-6</text>
        </g>
        <g id="TEXT-273" data-name="TEXT">
            <text class="cls-8" transform="translate(1081.55 592.27)">1</text>
        </g>
        <g id="TEXT-274" data-name="TEXT">
            <text class="cls-8" transform="translate(1082.46 564.15)">2</text>
        </g>
        <g id="TEXT-275" data-name="TEXT">
            <text class="cls-8" transform="translate(1083.69 537.87)">3</text>
        </g>
        <g id="TEXT-276" data-name="TEXT">
            <text class="cls-8" transform="translate(1084.93 512.99)">4</text>
        </g>
        <g id="TEXT-277" data-name="TEXT">
            <text class="cls-8" transform="translate(1123.07 526.26)">5</text>
        </g>
        <g id="TEXT-278" data-name="TEXT">
            <text class="cls-8" transform="translate(1144.84 527.23)">6</text>
        </g>
        <g id="TEXT-279" data-name="TEXT">
            <text class="cls-8" transform="translate(1166.87 528.15)">7</text>
        </g>
        <g id="TEXT-280" data-name="TEXT">
            <text class="cls-8" transform="translate(1189.13 529.69)">8</text>
        </g>
        <g id="TEXT-281" data-name="TEXT">
            <text class="cls-8" transform="translate(1210.48 530.94)">9</text>
        </g>
        <g id="TEXT-282" data-name="TEXT">
            <text class="cls-8" transform="translate(1231.86 531.18)">10</text>
        </g>
        <g id="TEXT-283" data-name="TEXT">
            <text class="cls-8" transform="translate(1253.36 532.23)">
                <tspan class="cls-9">1</tspan>
                <tspan x="5.01" y="0">1</tspan>
            </text>
        </g>
        <g id="TEXT-284" data-name="TEXT">
            <text class="cls-8" transform="translate(1275.27 533.25)">12</text>
        </g>
        <g id="TEXT-285" data-name="TEXT">
            <text class="cls-8" transform="translate(1297.27 534.65)">13</text>
        </g>
        <g id="TEXT-286" data-name="TEXT">
            <text class="cls-8" transform="translate(1318.83 535.68)">14</text>
        </g>
        <g id="TEXT-287" data-name="TEXT">
            <text class="cls-8" transform="translate(1340 536.62)">15</text>
        </g>
        <g id="TEXT-288" data-name="TEXT">
            <text class="cls-8" transform="translate(1363.35 537.69)">16</text>
        </g>
        <g id="TEXT-289" data-name="TEXT">
            <text class="cls-8" transform="translate(1384.78 539.37)">17</text>
        </g>
        <g id="TEXT-290" data-name="TEXT">
            <text class="cls-8" transform="translate(1420.89 527.3)">18</text>
        </g>
        <g id="TEXT-291" data-name="TEXT">
            <text class="cls-8" transform="translate(1420.73 553.22)">19</text>
        </g>
        <g id="TEXT-292" data-name="TEXT">
            <text class="cls-8" transform="translate(1419.49 581.92)">20</text>
        </g>
        <g id="TEXT-293" data-name="TEXT">
            <text class="cls-8" transform="translate(1419.17 608.25)">21</text>
        </g>
        <g id="TEXT-294" data-name="TEXT">
            <text class="cls-8" transform="translate(1381.76 593.89)">22</text>
        </g>
        <g id="TEXT-295" data-name="TEXT">
            <text class="cls-8" transform="translate(1358.87 592.58)">23</text>
        </g>
        <g id="TEXT-296" data-name="TEXT">
            <text class="cls-8" transform="translate(1337.85 591.91)">24</text>
        </g>
        <g id="TEXT-297" data-name="TEXT">
            <text class="cls-8" transform="translate(1316.26 589.7)">25</text>
        </g>
        <g id="TEXT-298" data-name="TEXT">
            <text class="cls-8" transform="translate(1294.39 589.51)">26</text>
        </g>
        <g id="TEXT-299" data-name="TEXT">
            <text class="cls-8" transform="translate(1271.88 588.52)">27</text>
        </g>
        <g id="TEXT-300" data-name="TEXT">
            <text class="cls-8" transform="translate(1249.94 587.34)">28</text>
        </g>
        <g id="TEXT-301" data-name="TEXT">
            <text class="cls-8" transform="translate(1228.01 586.29)">29</text>
        </g>
        <g id="TEXT-302" data-name="TEXT">
            <text class="cls-8" transform="translate(1206.07 585.25)">30</text>
        </g>
        <g id="TEXT-303" data-name="TEXT">
            <text class="cls-8" transform="translate(1184.14 584.2)">31</text>
        </g>
        <g id="TEXT-304" data-name="TEXT">
            <text class="cls-8" transform="translate(1162.2 583.16)">32</text>
        </g>
        <g id="TEXT-305" data-name="TEXT">
            <text class="cls-8" transform="translate(1140.26 582.11)">33</text>
        </g>
        <g id="TEXT-306" data-name="TEXT">
            <text class="cls-8" transform="translate(1118.33 581.07)">34</text>
        </g>
    </g>
    <g id="MZ-7">
        <rect class="cls-2" x="1472.72" y="517.19" width="404.51" height="120.83" rx="16.98" ry="16.98" transform="translate(30 -80.58) rotate(2.78)"/>
        <rect class="cls-5" x="1532.84" y="516.99" width="22.03" height="54.91" transform="translate(28.23 -74.26) rotate(2.78)"/>
        <rect class="cls-5" x="1554.79" y="518.16" width="22.03" height="54.83" transform="translate(28.31 -75.32) rotate(2.78)"/>
        <rect class="cls-5" x="1576.72" y="519.61" width="22.03" height="54.83" transform="translate(28.41 -76.39) rotate(2.78)"/>
        <rect class="cls-5" x="1599.18" y="520.69" width="21.47" height="54.83" transform="translate(28.49 -77.46) rotate(2.78)"/>
        <rect class="cls-5" x="1621.18" y="521.74" width="20.75" height="54.83" transform="translate(28.56 -78.51) rotate(2.78)"/>
        <rect class="cls-5" x="1642.51" y="522.81" width="22.03" height="54.83" transform="translate(28.64 -79.57) rotate(2.78)"/>
        <rect class="cls-5" x="1664.96" y="523.9" width="22.03" height="54.83" transform="translate(28.72 -80.66) rotate(2.78)"/>
        <rect class="cls-5" x="1686.4" y="524.94" width="22.03" height="54.83" transform="translate(28.8 -81.7) rotate(2.78)"/>
        <rect class="cls-5" x="1530.22" y="571.79" width="22.03" height="55.49" transform="translate(30.9 -74.07) rotate(2.78)"/>
        <rect class="cls-5" x="1552.14" y="572.85" width="22.03" height="54.83" transform="translate(30.96 -75.13) rotate(2.78)"/>
        <rect class="cls-5" x="1574.09" y="573.92" width="22.35" height="54.83" transform="translate(31.04 -76.2) rotate(2.78)"/>
        <rect class="cls-5" x="1596.14" y="575.46" width="21.85" height="54.83" transform="translate(31.14 -77.26) rotate(2.78)"/>
        <rect class="cls-5" x="1617.84" y="576.54" width="21.98" height="54.83" transform="translate(31.22 -78.31) rotate(2.78)"/>
        <rect class="cls-5" x="1639.83" y="577.78" width="22.03" height="54.83" transform="translate(31.31 -79.38) rotate(2.78)"/>
        <rect class="cls-5" x="1661.84" y="578.54" width="21.88" height="54.83" transform="translate(31.37 -80.44) rotate(2.78)"/>
        <rect class="cls-5" x="1683.7" y="579.6" width="21.85" height="54.83" transform="translate(31.45 -81.5) rotate(2.78)"/>
        <rect class="cls-5" x="1705.52" y="580.67" width="22.04" height="54.83" transform="translate(31.52 -82.56) rotate(2.78)"/>
        <rect class="cls-5" x="1727.52" y="582.12" width="22.11" height="54.83" transform="translate(31.62 -83.63) rotate(2.78)"/>
        <rect class="cls-5" x="1749.62" y="582.96" width="21.97" height="54.8" transform="translate(31.69 -84.7) rotate(2.78)"/>
        <rect class="cls-5" x="1771.54" y="584.31" width="23.03" height="54.92" transform="translate(31.78 -85.79) rotate(2.78)"/>
        <rect class="cls-5" x="1793.42" y="585.31" width="21.57" height="54.83" transform="translate(31.85 -86.81) rotate(2.78)"/>
        <rect class="cls-5" x="1708.83" y="526.67" width="22.03" height="54.83" transform="translate(28.91 -82.79) rotate(2.78)"/>
        <rect class="cls-5" x="1730.54" y="527.03" width="22.25" height="55.05" transform="translate(28.96 -83.85) rotate(2.78)"/>
        <rect class="cls-5" x="1752.46" y="528.02" width="22.03" height="55.01" transform="translate(29.03 -84.9) rotate(2.78)"/>
        <rect class="cls-5" x="1774.8" y="529.23" width="21.87" height="55.07" transform="translate(29.11 -85.98) rotate(2.78)"/>
        <rect class="cls-5" x="1796.14" y="530.3" width="21.83" height="55.12" transform="translate(29.19 -87.01) rotate(2.78)"/>
        <path class="cls-5" d="M1813.65,640.63l40,1.89s15.5,1.5,15.88-12,.38-14.75.38-14.75l-54.86-3Z"/>
        <polygon class="cls-5" points="1531.57 571.29 1476.45 568.39 1475.03 595.64 1529.87 598.81 1531.57 571.29"/>
        <polygon class="cls-5" points="1532.85 543.98 1477.78 541.14 1476.45 568.39 1531.54 570.91 1532.85 543.98"/>
        <path class="cls-5" d="M1529.87,598.81l-1,27.51-42.2-2.1s-12.67-.58-12.17-14.58l.5-14Z"/>
        <path class="cls-5" d="M1817.95,558.38l1.34-27.52,42,2.28s12.5.38,12.13,13.75-.62,14-.62,14Z"/>
        <polygon class="cls-5" points="1871.37 588.27 1816.31 585.86 1817.95 558.38 1872.74 560.89 1871.37 588.27"/>
        <polygon class="cls-5" points="1869.87 615.77 1815 612.72 1816.31 585.86 1871.37 588.27 1869.87 615.77"/>
        <path class="cls-5" d="M1534.19,516.48l-40-2s-14.75-1.33-15.58,12.67l-.83,14,55.07,2.84Z"/>
        <g id="TEXT-307" data-name="TEXT">
            <text class="cls-4" transform="translate(1641.99 577.21) rotate(0.51)">MZ-7</text>
        </g>
        <g id="TEXT-308" data-name="TEXT">
            <text class="cls-8" transform="translate(1498.28 613.15)">1</text>
        </g>
        <g id="TEXT-309" data-name="TEXT">
            <text class="cls-8" transform="translate(1499.19 585.03)">2</text>
        </g>
        <g id="TEXT-310" data-name="TEXT">
            <text class="cls-8" transform="translate(1500.42 558.75)">3</text>
        </g>
        <g id="TEXT-311" data-name="TEXT">
            <text class="cls-8" transform="translate(1501.66 533.87)">4</text>
        </g>
        <g id="TEXT-312" data-name="TEXT">
            <text class="cls-8" transform="translate(1539.8 547.14)">5</text>
        </g>
        <g id="TEXT-313" data-name="TEXT">
            <text class="cls-8" transform="translate(1561.57 548.1)">6</text>
        </g>
        <g id="TEXT-314" data-name="TEXT">
            <text class="cls-8" transform="translate(1583.6 549.03)">7</text>
        </g>
        <g id="TEXT-315" data-name="TEXT">
            <text class="cls-8" transform="translate(1605.86 550.57)">8</text>
        </g>
        <g id="TEXT-316" data-name="TEXT">
            <text class="cls-8" transform="translate(1627.21 551.82)">9</text>
        </g>
        <g id="TEXT-317" data-name="TEXT">
            <text class="cls-8" transform="translate(1648.59 552.06)">10</text>
        </g>
        <g id="TEXT-318" data-name="TEXT">
            <text class="cls-8" transform="translate(1670.09 553.11)">
                <tspan class="cls-9">1</tspan>
                <tspan x="5.01" y="0">1</tspan>
            </text>
        </g>
        <g id="TEXT-319" data-name="TEXT">
            <text class="cls-8" transform="translate(1692 554.13)">12</text>
        </g>
        <g id="TEXT-320" data-name="TEXT">
            <text class="cls-8" transform="translate(1714 555.53)">13</text>
        </g>
        <g id="TEXT-321" data-name="TEXT">
            <text class="cls-8" transform="translate(1735.56 556.56)">14</text>
        </g>
        <g id="TEXT-322" data-name="TEXT">
            <text class="cls-8" transform="translate(1756.73 557.5)">15</text>
        </g>
        <g id="TEXT-323" data-name="TEXT">
            <text class="cls-8" transform="translate(1780.08 558.57)">16</text>
        </g>
        <g id="TEXT-324" data-name="TEXT">
            <text class="cls-8" transform="translate(1801.51 560.25)">17</text>
        </g>
        <g id="TEXT-325" data-name="TEXT">
            <text class="cls-8" transform="translate(1837.62 548.18)">18</text>
        </g>
        <g id="TEXT-326" data-name="TEXT">
            <text class="cls-8" transform="translate(1837.46 574.1)">19</text>
        </g>
        <g id="TEXT-327" data-name="TEXT">
            <text class="cls-8" transform="translate(1836.22 602.8)">20</text>
        </g>
        <g id="TEXT-328" data-name="TEXT">
            <text class="cls-8" transform="translate(1835.9 629.13)">21</text>
        </g>
        <g id="TEXT-329" data-name="TEXT">
            <text class="cls-8" transform="translate(1798.49 614.76)">22</text>
        </g>
        <g id="TEXT-330" data-name="TEXT">
            <text class="cls-8" transform="translate(1775.6 613.46)">23</text>
        </g>
        <g id="TEXT-331" data-name="TEXT">
            <text class="cls-8" transform="translate(1754.58 612.78)">24</text>
        </g>
        <g id="TEXT-332" data-name="TEXT">
            <text class="cls-8" transform="translate(1732.99 610.58)">25</text>
        </g>
        <g id="TEXT-333" data-name="TEXT">
            <text class="cls-8" transform="translate(1711.12 610.39)">26</text>
        </g>
        <g id="TEXT-334" data-name="TEXT">
            <text class="cls-8" transform="translate(1688.61 609.4)">27</text>
        </g>
        <g id="TEXT-335" data-name="TEXT">
            <text class="cls-8" transform="translate(1666.67 608.21)">28</text>
        </g>
        <g id="TEXT-336" data-name="TEXT">
            <text class="cls-8" transform="translate(1644.74 607.17)">29</text>
        </g>
        <g id="TEXT-337" data-name="TEXT">
            <text class="cls-8" transform="translate(1622.8 606.13)">30</text>
        </g>
        <g id="TEXT-338" data-name="TEXT">
            <text class="cls-8" transform="translate(1600.87 605.08)">31</text>
        </g>
        <g id="TEXT-339" data-name="TEXT">
            <text class="cls-8" transform="translate(1578.93 604.04)">32</text>
        </g>
        <g id="TEXT-340" data-name="TEXT">
            <text class="cls-8" transform="translate(1556.99 602.99)">33</text>
        </g>
        <g id="TEXT-341" data-name="TEXT">
            <text class="cls-8" transform="translate(1535.06 601.95)">34</text>
        </g>
    </g>
    <g id="MZ-8">
        <g id="MZ-8-2" data-name="MZ-8">
            <rect class="cls-2" x="1889.34" y="538.4" width="404.51" height="120.83" rx="16.98" ry="16.98" transform="translate(31.51 -100.77) rotate(2.78)"/>
            <rect class="cls-5" x="1949.47" y="538.19" width="22.03" height="54.91" transform="translate(29.75 -94.45) rotate(2.78)"/>
            <rect class="cls-5" x="1971.42" y="539.37" width="22.03" height="54.83" transform="translate(29.83 -95.51) rotate(2.78)"/>
            <rect class="cls-5" x="1993.35" y="540.82" width="22.03" height="54.83" transform="translate(29.93 -96.57) rotate(2.78)"/>
            <rect class="cls-5" x="2015.81" y="541.9" width="21.47" height="54.83" transform="translate(30.01 -97.65) rotate(2.78)"/>
            <rect class="cls-5" x="2037.81" y="542.95" width="20.75" height="54.83" transform="translate(30.08 -98.7) rotate(2.78)"/>
            <rect class="cls-5" x="2059.13" y="544.02" width="22.03" height="54.83" transform="translate(30.16 -99.76) rotate(2.78)"/>
            <rect class="cls-5" x="2081.59" y="545.11" width="22.03" height="54.83" transform="translate(30.24 -100.85) rotate(2.78)"/>
            <rect class="cls-5" x="2103.03" y="546.15" width="22.03" height="54.83" transform="translate(30.32 -101.89) rotate(2.78)"/>
            <rect class="cls-5" x="1946.84" y="593" width="22.03" height="55.49" transform="translate(32.42 -94.26) rotate(2.78)"/>
            <rect class="cls-5" x="1968.76" y="594.05" width="22.03" height="54.83" transform="translate(32.48 -95.32) rotate(2.78)"/>
            <rect class="cls-5" x="1990.71" y="595.13" width="22.35" height="54.83" transform="translate(32.56 -96.39) rotate(2.78)"/>
            <rect class="cls-5" x="2012.76" y="596.67" width="21.85" height="54.83" transform="translate(32.66 -97.45) rotate(2.78)"/>
            <rect class="cls-5" x="2034.47" y="597.75" width="21.98" height="54.83" transform="translate(32.74 -98.5) rotate(2.78)"/>
            <rect class="cls-5" x="2056.45" y="598.98" width="22.03" height="54.83" transform="translate(32.83 -99.57) rotate(2.78)"/>
            <rect class="cls-5" x="2078.47" y="599.75" width="21.88" height="54.83" transform="translate(32.89 -100.63) rotate(2.78)"/>
            <rect class="cls-5" x="2100.32" y="600.81" width="21.85" height="54.83" transform="translate(32.97 -101.69) rotate(2.78)"/>
            <rect class="cls-5" x="2122.15" y="601.88" width="22.04" height="54.83" transform="translate(33.04 -102.75) rotate(2.78)"/>
            <rect class="cls-5" x="2144.15" y="603.33" width="22.11" height="54.83" transform="translate(33.14 -103.82) rotate(2.78)"/>
            <rect class="cls-5" x="2166.25" y="604.17" width="21.97" height="54.8" transform="translate(33.21 -104.89) rotate(2.78)"/>
            <rect class="cls-5" x="2188.17" y="605.52" width="23.03" height="54.92" transform="translate(33.3 -105.97) rotate(2.78)"/>
            <rect class="cls-5" x="2210.05" y="606.51" width="21.57" height="54.83" transform="translate(33.37 -107) rotate(2.78)"/>
            <rect class="cls-5" x="2125.46" y="547.88" width="22.03" height="54.83" transform="translate(30.43 -102.98) rotate(2.78)"/>
            <rect class="cls-5" x="2147.17" y="548.23" width="22.25" height="55.05" transform="translate(30.48 -104.03) rotate(2.78)"/>
            <rect class="cls-5" x="2169.09" y="549.23" width="22.03" height="55.01" transform="translate(30.55 -105.09) rotate(2.78)"/>
            <rect class="cls-5" x="2191.42" y="550.44" width="21.87" height="55.07" transform="translate(30.63 -106.17) rotate(2.78)"/>
            <rect class="cls-5" x="2212.76" y="551.51" width="21.83" height="55.12" transform="translate(30.71 -107.2) rotate(2.78)"/>
            <path class="cls-5" d="M2230.27,661.84l40,1.89s15.5,1.5,15.88-12,.38-14.75.38-14.75l-54.86-3Z"/>
            <polygon class="cls-5" points="1948.2 592.5 1893.08 589.6 1891.66 616.85 1946.49 620.02 1948.2 592.5"/>
            <polygon class="cls-5" points="1949.48 565.19 1894.41 562.35 1893.08 589.6 1948.17 592.11 1949.48 565.19"/>
            <path class="cls-5" d="M1946.49,620l-1,27.51-42.2-2.1s-12.67-.58-12.17-14.58l.5-14Z"/>
            <path class="cls-5" d="M2234.58,579.59l1.34-27.52,42,2.28s12.5.38,12.13,13.75-.62,14-.62,14Z"/>
            <polygon class="cls-5" points="2287.99 609.48 2232.93 607.07 2234.58 579.59 2289.37 582.1 2287.99 609.48"/>
            <polygon class="cls-5" points="2286.49 636.98 2231.63 633.93 2232.93 607.07 2287.99 609.48 2286.49 636.98"/>
            <path class="cls-5" d="M1950.82,537.69l-40-2s-14.75-1.33-15.58,12.67l-.83,14,55.07,2.84Z"/>
        </g>
        <g id="TEXT-342" data-name="TEXT">
            <text class="cls-4" transform="translate(2077.62 600.79) rotate(0.51)">MZ-8</text>
        </g>
        <g id="TEXT-343" data-name="TEXT">
            <text class="cls-8" transform="translate(1915.01 634.03)">1</text>
        </g>
        <g id="TEXT-344" data-name="TEXT">
            <text class="cls-8" transform="translate(1915.92 605.91)">2</text>
        </g>
        <g id="TEXT-345" data-name="TEXT">
            <text class="cls-8" transform="translate(1917.15 579.62)">3</text>
        </g>
        <g id="TEXT-346" data-name="TEXT">
            <text class="cls-8" transform="translate(1918.39 554.74)">4</text>
        </g>
        <g id="TEXT-347" data-name="TEXT">
            <text class="cls-8" transform="translate(1956.53 568.02)">5</text>
        </g>
        <g id="TEXT-348" data-name="TEXT">
            <text class="cls-8" transform="translate(1978.3 568.98)">6</text>
        </g>
        <g id="TEXT-349" data-name="TEXT">
            <text class="cls-8" transform="translate(2000.33 569.91)">7</text>
        </g>
        <g id="TEXT-350" data-name="TEXT">
            <text class="cls-8" transform="translate(2022.59 571.45)">8</text>
        </g>
        <g id="TEXT-351" data-name="TEXT">
            <text class="cls-8" transform="translate(2043.94 572.69)">9</text>
        </g>
        <g id="TEXT-352" data-name="TEXT">
            <text class="cls-8" transform="translate(2065.32 572.94)">10</text>
        </g>
        <g id="TEXT-353" data-name="TEXT">
            <text class="cls-8" transform="translate(2086.82 573.98)">
                <tspan class="cls-9">1</tspan>
                <tspan x="5.01" y="0">1</tspan>
            </text>
        </g>
        <g id="TEXT-354" data-name="TEXT">
            <text class="cls-8" transform="translate(2108.73 575.01)">12</text>
        </g>
        <g id="TEXT-355" data-name="TEXT">
            <text class="cls-8" transform="translate(2130.74 576.41)">13</text>
        </g>
        <g id="TEXT-356" data-name="TEXT">
            <text class="cls-8" transform="translate(2152.29 577.43)">14</text>
        </g>
        <g id="TEXT-357" data-name="TEXT">
            <text class="cls-8" transform="translate(2173.46 578.38)">15</text>
        </g>
        <g id="TEXT-358" data-name="TEXT">
            <text class="cls-8" transform="translate(2196.81 579.44)">16</text>
        </g>
        <g id="TEXT-359" data-name="TEXT">
            <text class="cls-8" transform="translate(2218.24 581.12)">17</text>
        </g>
        <g id="TEXT-360" data-name="TEXT">
            <text class="cls-8" transform="translate(2254.35 569.05)">18</text>
        </g>
        <g id="TEXT-361" data-name="TEXT">
            <text class="cls-8" transform="translate(2254.2 594.98)">19</text>
        </g>
        <g id="TEXT-362" data-name="TEXT">
            <text class="cls-8" transform="translate(2252.95 623.68)">20</text>
        </g>
        <g id="TEXT-363" data-name="TEXT">
            <text class="cls-8" transform="translate(2252.63 650)">21</text>
        </g>
        <g id="TEXT-364" data-name="TEXT">
            <text class="cls-8" transform="translate(2215.22 635.64)">22</text>
        </g>
        <g id="TEXT-365" data-name="TEXT">
            <text class="cls-8" transform="translate(2192.33 634.34)">23</text>
        </g>
        <g id="TEXT-366" data-name="TEXT">
            <text class="cls-8" transform="translate(2171.31 633.66)">24</text>
        </g>
        <g id="TEXT-367" data-name="TEXT">
            <text class="cls-8" transform="translate(2149.72 631.46)">25</text>
        </g>
        <g id="TEXT-368" data-name="TEXT">
            <text class="cls-8" transform="translate(2127.85 631.27)">26</text>
        </g>
        <g id="TEXT-369" data-name="TEXT">
            <text class="cls-8" transform="translate(2105.34 630.27)">27</text>
        </g>
        <g id="TEXT-370" data-name="TEXT">
            <text class="cls-8" transform="translate(2083.4 629.09)">28</text>
        </g>
        <g id="TEXT-371" data-name="TEXT">
            <text class="cls-8" transform="translate(2061.47 628.05)">29</text>
        </g>
        <g id="TEXT-372" data-name="TEXT">
            <text class="cls-8" transform="translate(2039.53 627)">30</text>
        </g>
        <g id="TEXT-373" data-name="TEXT">
            <text class="cls-8" transform="translate(2017.6 625.96)">31</text>
        </g>
        <g id="TEXT-374" data-name="TEXT">
            <text class="cls-8" transform="translate(1995.66 624.92)">32</text>
        </g>
        <g id="TEXT-375" data-name="TEXT">
            <text class="cls-8" transform="translate(1973.73 623.87)">33</text>
        </g>
        <g id="TEXT-376" data-name="TEXT">
            <text class="cls-8" transform="translate(1951.79 622.83)">34</text>
        </g>
    </g>
    <g id="MZ-14">
        <g id="MZ-14-2" data-name="MZ-14">
            <rect class="cls-2" x="1048.82" y="629.8" width="404.51" height="119.23" rx="16.98" ry="16.98" transform="translate(34.92 -59.89) rotate(2.78)"/>
            <rect class="cls-5" x="1108.99" y="627" width="22.03" height="54.91" transform="translate(33.07 -53.57) rotate(2.78)"/>
            <rect class="cls-5" x="1130.93" y="628.17" width="22.03" height="54.83" transform="translate(33.15 -54.63) rotate(2.78)"/>
            <rect class="cls-5" x="1152.87" y="629.62" width="22.03" height="54.83" transform="translate(33.25 -55.69) rotate(2.78)"/>
            <rect class="cls-5" x="1175.33" y="630.7" width="21.47" height="54.83" transform="translate(33.33 -56.77) rotate(2.78)"/>
            <rect class="cls-5" x="1197.33" y="631.75" width="20.75" height="54.83" transform="translate(33.4 -57.82) rotate(2.78)"/>
            <rect class="cls-5" x="1218.65" y="632.82" width="22.03" height="54.83" transform="translate(33.48 -58.88) rotate(2.78)"/>
            <rect class="cls-5" x="1241.1" y="633.91" width="22.03" height="54.83" transform="translate(33.56 -59.97) rotate(2.78)"/>
            <rect class="cls-5" x="1262.54" y="634.95" width="22.03" height="54.83" transform="translate(33.64 -61.01) rotate(2.78)"/>
            <rect class="cls-5" x="1106.36" y="681.8" width="22.03" height="55.49" transform="translate(35.74 -53.37) rotate(2.78)"/>
            <rect class="cls-5" x="1128.28" y="682.86" width="22.03" height="54.83" transform="translate(35.8 -54.44) rotate(2.78)"/>
            <rect class="cls-5" x="1150.23" y="683.93" width="22.35" height="54.83" transform="translate(35.88 -55.51) rotate(2.78)"/>
            <rect class="cls-5" x="1172.28" y="685.47" width="21.85" height="54.83" transform="translate(35.98 -56.56) rotate(2.78)"/>
            <rect class="cls-5" x="1193.99" y="686.55" width="21.98" height="54.83" transform="translate(36.06 -57.62) rotate(2.78)"/>
            <rect class="cls-5" x="1215.97" y="687.79" width="22.03" height="54.83" transform="translate(36.14 -58.69) rotate(2.78)"/>
            <rect class="cls-5" x="1237.98" y="688.55" width="21.88" height="54.83" transform="translate(36.21 -59.75) rotate(2.78)"/>
            <rect class="cls-5" x="1259.84" y="689.61" width="21.85" height="54.83" transform="translate(36.28 -60.81) rotate(2.78)"/>
            <rect class="cls-5" x="1281.67" y="690.68" width="22.04" height="54.83" transform="translate(36.36 -61.87) rotate(2.78)"/>
            <rect class="cls-5" x="1303.67" y="692.13" width="22.11" height="54.83" transform="translate(36.46 -62.94) rotate(2.78)"/>
            <rect class="cls-5" x="1325.76" y="692.97" width="21.97" height="54.8" transform="translate(36.52 -64.01) rotate(2.78)"/>
            <rect class="cls-5" x="1347.69" y="694.32" width="23.03" height="54.92" transform="matrix(1, 0.05, -0.05, 1, 36.62, -65.09)"/>
            <rect class="cls-5" x="1369.57" y="695.32" width="21.57" height="54.83" transform="translate(36.69 -66.12) rotate(2.78)"/>
            <rect class="cls-5" x="1284.99" y="636.1" width="22.03" height="55.42" transform="translate(33.73 -62.09) rotate(2.78)"/>
            <rect class="cls-5" x="1306.69" y="637.04" width="22.25" height="55.05" transform="translate(33.79 -63.15) rotate(2.78)"/>
            <rect class="cls-5" x="1328.61" y="638.03" width="22.03" height="55.01" transform="translate(33.87 -64.21) rotate(2.78)"/>
            <rect class="cls-5" x="1350.94" y="639.24" width="21.87" height="55.07" transform="translate(33.95 -65.29) rotate(2.78)"/>
            <rect class="cls-5" x="1372.28" y="640.31" width="21.83" height="55.12" transform="translate(34.03 -66.32) rotate(2.78)"/>
            <path class="cls-5" d="M1389.79,750.64l40,1.89s15.5,1.5,15.88-12,.38-14.75.38-14.75l-54.86-3Z"/>
            <polygon class="cls-5" points="1107.72 681.3 1052.59 678.4 1051.18 705.65 1106.01 708.82 1107.72 681.3"/>
            <polygon class="cls-5" points="1109 653.99 1053.93 651.15 1052.59 678.4 1107.69 680.92 1109 653.99"/>
            <path class="cls-5" d="M1106,708.82l-1,27.51-42.2-2.1s-12.67-.58-12.17-14.58l.5-14Z"/>
            <path class="cls-5" d="M1394.09,668.39l1.34-27.52,42,2.28s12.5.38,12.13,13.75-.62,14-.62,14Z"/>
            <polygon class="cls-5" points="1447.51 698.28 1392.45 695.87 1394.09 668.39 1448.88 670.9 1447.51 698.28"/>
            <polygon class="cls-5" points="1446.01 725.78 1391.15 722.73 1392.45 695.87 1447.51 698.28 1446.01 725.78"/>
            <path class="cls-5" d="M1110.33,626.49l-40-2s-14.75-1.33-15.58,12.67l-.83,14L1109,654Z"/>
        </g>
        <g id="TEXT-377" data-name="TEXT">
            <text class="cls-4" transform="translate(1225.23 699.87) rotate(0.14)">MZ-14</text>
        </g>
        <g id="TEXT-378" data-name="TEXT">
            <text class="cls-8" transform="translate(1074.96 723.87)">1</text>
        </g>
        <g id="TEXT-379" data-name="TEXT">
            <text class="cls-8" transform="translate(1075.87 695.75)">2</text>
        </g>
        <g id="TEXT-380" data-name="TEXT">
            <text class="cls-8" transform="translate(1077.09 669.47)">3</text>
        </g>
        <g id="TEXT-381" data-name="TEXT">
            <text class="cls-8" transform="translate(1078.33 644.59)">4</text>
        </g>
        <g id="TEXT-382" data-name="TEXT">
            <text class="cls-8" transform="translate(1116.48 657.86)">5</text>
        </g>
        <g id="TEXT-383" data-name="TEXT">
            <text class="cls-8" transform="translate(1138.25 658.82)">6</text>
        </g>
        <g id="TEXT-384" data-name="TEXT">
            <text class="cls-8" transform="translate(1160.27 659.75)">7</text>
        </g>
        <g id="TEXT-385" data-name="TEXT">
            <text class="cls-8" transform="translate(1182.53 661.29)">8</text>
        </g>
        <g id="TEXT-386" data-name="TEXT">
            <text class="cls-8" transform="translate(1203.88 662.54)">9</text>
        </g>
        <g id="TEXT-387" data-name="TEXT">
            <text class="cls-8" transform="translate(1225.26 662.78)">10</text>
        </g>
        <g id="TEXT-388" data-name="TEXT">
            <text class="cls-8" transform="translate(1246.77 663.83)">
                <tspan class="cls-9">1</tspan>
                <tspan x="5.01" y="0">1</tspan>
            </text>
        </g>
        <g id="TEXT-389" data-name="TEXT">
            <text class="cls-8" transform="translate(1268.68 664.85)">12</text>
        </g>
        <g id="TEXT-390" data-name="TEXT">
            <text class="cls-8" transform="translate(1290.68 666.25)">13</text>
        </g>
        <g id="TEXT-391" data-name="TEXT">
            <text class="cls-8" transform="translate(1312.24 667.28)">14</text>
        </g>
        <g id="TEXT-392" data-name="TEXT">
            <text class="cls-8" transform="translate(1333.41 668.22)">15</text>
        </g>
        <g id="TEXT-393" data-name="TEXT">
            <text class="cls-8" transform="translate(1356.76 669.29)">16</text>
        </g>
        <g id="TEXT-394" data-name="TEXT">
            <text class="cls-8" transform="translate(1378.18 670.97)">17</text>
        </g>
        <g id="TEXT-395" data-name="TEXT">
            <text class="cls-8" transform="translate(1414.3 658.9)">18</text>
        </g>
        <g id="TEXT-396" data-name="TEXT">
            <text class="cls-8" transform="translate(1414.14 684.82)">19</text>
        </g>
        <g id="TEXT-397" data-name="TEXT">
            <text class="cls-8" transform="translate(1412.9 713.52)">20</text>
        </g>
        <g id="TEXT-398" data-name="TEXT">
            <text class="cls-8" transform="translate(1412.58 739.85)">21</text>
        </g>
        <g id="TEXT-399" data-name="TEXT">
            <text class="cls-8" transform="translate(1375.17 725.48)">22</text>
        </g>
        <g id="TEXT-400" data-name="TEXT">
            <text class="cls-8" transform="translate(1352.27 724.18)">23</text>
        </g>
        <g id="TEXT-401" data-name="TEXT">
            <text class="cls-8" transform="translate(1331.26 723.5)">24</text>
        </g>
        <g id="TEXT-402" data-name="TEXT">
            <text class="cls-8" transform="translate(1309.66 721.3)">25</text>
        </g>
        <g id="TEXT-403" data-name="TEXT">
            <text class="cls-8" transform="translate(1287.8 721.11)">26</text>
        </g>
        <g id="TEXT-404" data-name="TEXT">
            <text class="cls-8" transform="translate(1265.28 720.12)">27</text>
        </g>
        <g id="TEXT-405" data-name="TEXT">
            <text class="cls-8" transform="translate(1243.35 718.94)">28</text>
        </g>
        <g id="TEXT-406" data-name="TEXT">
            <text class="cls-8" transform="translate(1221.41 717.89)">29</text>
        </g>
        <g id="TEXT-407" data-name="TEXT">
            <text class="cls-8" transform="translate(1199.48 716.85)">30</text>
        </g>
        <g id="TEXT-408" data-name="TEXT">
            <text class="cls-8" transform="translate(1177.54 715.8)">31</text>
        </g>
        <g id="TEXT-409" data-name="TEXT">
            <text class="cls-8" transform="translate(1155.61 714.76)">32</text>
        </g>
        <g id="TEXT-410" data-name="TEXT">
            <text class="cls-8" transform="translate(1133.67 713.71)">33</text>
        </g>
        <g id="TEXT-411" data-name="TEXT">
            <text class="cls-8" transform="translate(1111.74 712.67)">34</text>
        </g>
    </g>
    <g id="MZ-13">
        <g id="MZ-13-2" data-name="MZ-13">
            <rect class="cls-2" x="1042.16" y="761.52" width="404.51" height="119.23" rx="16.98" ry="16.98" transform="translate(41.3 -59.41) rotate(2.78)"/>
            <rect class="cls-5" x="1102.32" y="758.72" width="22.03" height="54.91" transform="translate(39.45 -53.09) rotate(2.78)"/>
            <rect class="cls-5" x="1124.27" y="759.89" width="22.03" height="54.83" transform="translate(39.53 -54.15) rotate(2.78)"/>
            <rect class="cls-5" x="1146.2" y="761.34" width="22.03" height="54.83" transform="translate(39.63 -55.21) rotate(2.78)"/>
            <rect class="cls-5" x="1168.66" y="762.42" width="21.47" height="54.83" transform="translate(39.71 -56.29) rotate(2.78)"/>
            <rect class="cls-5" x="1190.66" y="763.47" width="20.75" height="54.83" transform="translate(39.79 -57.34) rotate(2.78)"/>
            <rect class="cls-5" x="1211.99" y="764.54" width="22.03" height="54.83" transform="translate(39.86 -58.4) rotate(2.78)"/>
            <rect class="cls-5" x="1234.44" y="765.63" width="22.03" height="54.83" transform="translate(39.94 -59.49) rotate(2.78)"/>
            <rect class="cls-5" x="1255.88" y="766.67" width="22.03" height="54.83" transform="translate(40.02 -60.53) rotate(2.78)"/>
            <rect class="cls-5" x="1099.7" y="813.52" width="22.03" height="55.49" transform="translate(42.12 -52.9) rotate(2.78)"/>
            <rect class="cls-5" x="1121.62" y="814.57" width="22.03" height="54.83" transform="translate(42.18 -53.96) rotate(2.78)"/>
            <rect class="cls-5" x="1143.57" y="815.65" width="22.35" height="54.83" transform="translate(42.26 -55.03) rotate(2.78)"/>
            <rect class="cls-5" x="1165.62" y="817.19" width="21.85" height="54.83" transform="translate(42.36 -56.09) rotate(2.78)"/>
            <rect class="cls-5" x="1187.32" y="818.27" width="21.98" height="54.83" transform="translate(42.44 -57.14) rotate(2.78)"/>
            <rect class="cls-5" x="1209.31" y="819.5" width="22.03" height="54.83" transform="translate(42.53 -58.21) rotate(2.78)"/>
            <rect class="cls-5" x="1231.32" y="820.27" width="21.88" height="54.83" transform="translate(42.59 -59.27) rotate(2.78)"/>
            <rect class="cls-5" x="1253.18" y="821.33" width="21.85" height="54.83" transform="translate(42.67 -60.33) rotate(2.78)"/>
            <rect class="cls-5" x="1275" y="822.4" width="22.04" height="54.83" transform="translate(42.74 -61.39) rotate(2.78)"/>
            <rect class="cls-5" x="1297" y="823.85" width="22.11" height="54.83" transform="translate(42.84 -62.46) rotate(2.78)"/>
            <rect class="cls-5" x="1319.1" y="824.69" width="21.97" height="54.8" transform="translate(42.91 -63.53) rotate(2.78)"/>
            <rect class="cls-5" x="1341.02" y="826.04" width="23.03" height="54.92" transform="matrix(1, 0.05, -0.05, 1, 43, -64.61)"/>
            <rect class="cls-5" x="1362.91" y="827.03" width="21.57" height="54.83" transform="translate(43.07 -65.64) rotate(2.78)"/>
            <rect class="cls-5" x="1278.32" y="767.82" width="22.03" height="55.42" transform="translate(40.11 -61.62) rotate(2.78)"/>
            <rect class="cls-5" x="1300.02" y="768.76" width="22.25" height="55.05" transform="translate(40.18 -62.67) rotate(2.78)"/>
            <rect class="cls-5" x="1321.94" y="769.75" width="22.03" height="55.01" transform="translate(40.25 -63.73) rotate(2.78)"/>
            <rect class="cls-5" x="1344.28" y="770.96" width="21.87" height="55.07" transform="translate(40.34 -64.81) rotate(2.78)"/>
            <rect class="cls-5" x="1365.62" y="772.03" width="21.83" height="55.12" transform="translate(40.41 -65.84) rotate(2.78)"/>
            <path class="cls-5" d="M1383.13,882.36l40,1.89s15.5,1.5,15.88-12,.38-14.75.38-14.75l-54.86-3Z"/>
            <polygon class="cls-5" points="1101.06 813.02 1045.93 810.12 1044.51 837.37 1099.35 840.54 1101.06 813.02"/>
            <polygon class="cls-5" points="1102.33 785.71 1047.26 782.87 1045.93 810.12 1101.03 812.63 1102.33 785.71"/>
            <path class="cls-5" d="M1099.35,840.54l-1,27.51-42.2-2.1s-12.67-.58-12.17-14.58l.5-14Z"/>
            <path class="cls-5" d="M1387.43,800.11l1.34-27.52,42,2.28s12.5.38,12.13,13.75-.62,14-.62,14Z"/>
            <polygon class="cls-5" points="1440.85 830 1385.79 827.59 1387.43 800.11 1442.22 802.62 1440.85 830"/>
            <polygon class="cls-5" points="1439.35 857.5 1384.48 854.45 1385.79 827.59 1440.85 830 1439.35 857.5"/>
            <path class="cls-5" d="M1103.67,758.21l-40-2s-14.75-1.33-15.58,12.67l-.83,14,55.07,2.84Z"/>
        </g>
        <g id="TEXT-412" data-name="TEXT">
            <text class="cls-4" transform="translate(1213.61 830.89) rotate(0.14)">MZ-13</text>
        </g>
        <g id="TEXT-413" data-name="TEXT">
            <text class="cls-8" transform="translate(1068.37 855.47)">1</text>
        </g>
        <g id="TEXT-414" data-name="TEXT">
            <text class="cls-8" transform="translate(1069.28 827.35)">2</text>
        </g>
        <g id="TEXT-415" data-name="TEXT">
            <text class="cls-8" transform="translate(1070.5 801.07)">3</text>
        </g>
        <g id="TEXT-416" data-name="TEXT">
            <text class="cls-8" transform="translate(1071.74 776.19)">4</text>
        </g>
        <g id="TEXT-417" data-name="TEXT">
            <text class="cls-8" transform="translate(1109.89 789.46)">5</text>
        </g>
        <g id="TEXT-418" data-name="TEXT">
            <text class="cls-8" transform="translate(1131.66 790.42)">6</text>
        </g>
        <g id="TEXT-419" data-name="TEXT">
            <text class="cls-8" transform="translate(1153.68 791.35)">7</text>
        </g>
        <g id="TEXT-420" data-name="TEXT">
            <text class="cls-8" transform="translate(1175.94 792.89)">8</text>
        </g>
        <g id="TEXT-421" data-name="TEXT">
            <text class="cls-8" transform="translate(1197.29 794.14)">9</text>
        </g>
        <g id="TEXT-422" data-name="TEXT">
            <text class="cls-8" transform="translate(1218.67 794.38)">10</text>
        </g>
        <g id="TEXT-423" data-name="TEXT">
            <text class="cls-8" transform="translate(1240.18 795.43)">
                <tspan class="cls-9">1</tspan>
                <tspan x="5.01" y="0">1</tspan>
            </text>
        </g>
        <g id="TEXT-424" data-name="TEXT">
            <text class="cls-8" transform="translate(1262.08 796.45)">12</text>
        </g>
        <g id="TEXT-425" data-name="TEXT">
            <text class="cls-8" transform="translate(1284.09 797.85)">13</text>
        </g>
        <g id="TEXT-426" data-name="TEXT">
            <text class="cls-8" transform="translate(1305.65 798.88)">14</text>
        </g>
        <g id="TEXT-427" data-name="TEXT">
            <text class="cls-8" transform="translate(1326.82 799.82)">15</text>
        </g>
        <g id="TEXT-428" data-name="TEXT">
            <text class="cls-8" transform="translate(1350.16 800.89)">16</text>
        </g>
        <g id="TEXT-429" data-name="TEXT">
            <text class="cls-8" transform="translate(1371.59 802.57)">17</text>
        </g>
        <g id="TEXT-430" data-name="TEXT">
            <text class="cls-8" transform="translate(1407.71 790.5)">18</text>
        </g>
        <g id="TEXT-431" data-name="TEXT">
            <text class="cls-8" transform="translate(1407.55 816.42)">19</text>
        </g>
        <g id="TEXT-432" data-name="TEXT">
            <text class="cls-8" transform="translate(1406.31 845.12)">20</text>
        </g>
        <g id="TEXT-433" data-name="TEXT">
            <text class="cls-8" transform="translate(1405.99 871.45)">21</text>
        </g>
        <g id="TEXT-434" data-name="TEXT">
            <text class="cls-8" transform="translate(1368.58 857.08)">22</text>
        </g>
        <g id="TEXT-435" data-name="TEXT">
            <text class="cls-8" transform="translate(1345.68 855.78)">23</text>
        </g>
        <g id="TEXT-436" data-name="TEXT">
            <text class="cls-8" transform="translate(1324.66 855.1)">24</text>
        </g>
        <g id="TEXT-437" data-name="TEXT">
            <text class="cls-8" transform="translate(1303.07 852.9)">25</text>
        </g>
        <g id="TEXT-438" data-name="TEXT">
            <text class="cls-8" transform="translate(1281.2 852.71)">26</text>
        </g>
        <g id="TEXT-439" data-name="TEXT">
            <text class="cls-8" transform="translate(1258.69 851.71)">27</text>
        </g>
        <g id="TEXT-440" data-name="TEXT">
            <text class="cls-8" transform="translate(1236.76 850.53)">28</text>
        </g>
        <g id="TEXT-441" data-name="TEXT">
            <text class="cls-8" transform="translate(1214.82 849.49)">29</text>
        </g>
        <g id="TEXT-442" data-name="TEXT">
            <text class="cls-8" transform="translate(1192.89 848.45)">30</text>
        </g>
        <g id="TEXT-443" data-name="TEXT">
            <text class="cls-8" transform="translate(1170.95 847.4)">31</text>
        </g>
        <g id="TEXT-444" data-name="TEXT">
            <text class="cls-8" transform="translate(1149.01 846.36)">32</text>
        </g>
        <g id="TEXT-445" data-name="TEXT">
            <text class="cls-8" transform="translate(1127.08 845.31)">33</text>
        </g>
        <g id="TEXT-446" data-name="TEXT">
            <text class="cls-8" transform="translate(1105.14 844.27)">34</text>
        </g>
    </g>
    <g id="MZ-9">
        <path class="cls-2" d="M2513.63,680.66,2312.8,669.75c-5.62-.27-9.8-8.09-9.35-17.45l4.21-86.77c.45-9.36,11-16.15,17.46-15.65L2479,557.82l71.95-2.79c12.83-2.53,52.08,16.41,29.41,53l-37.46,60.88C2534.63,683.25,2519.24,680.94,2513.63,680.66Z"/>
        <rect class="cls-5" x="2366.59" y="559.21" width="22.03" height="54.91" transform="translate(31.26 -114.66) rotate(2.78)"/>
        <rect class="cls-5" x="2388.54" y="560.39" width="22.03" height="54.83" transform="translate(31.34 -115.72) rotate(2.78)"/>
        <rect class="cls-5" x="2409.97" y="561.35" width="22.03" height="54.83" transform="translate(31.42 -116.76) rotate(2.78)"/>
        <polygon class="cls-5" points="2452.64 617.69 2430.66 616.69 2433.32 561.91 2455.3 562.92 2452.64 617.69"/>
        <polygon class="cls-5" points="2474.34 619.27 2452.64 617.69 2455.3 562.92 2477.04 564.11 2474.34 619.27"/>
        <polygon class="cls-5" points="2496.38 619.94 2474.38 618.88 2477.14 564.23 2498.78 562.95 2496.38 619.94"/>
        <polygon class="cls-5" points="2517.25 621 2496.26 620.34 2499.04 563.13 2519.78 562.13 2517.25 621"/>
        <polygon class="cls-5" points="2537.22 622.26 2517.85 620.97 2519.93 562.13 2540.38 561.75 2537.22 622.26"/>
        <rect class="cls-5" x="2363.99" y="614.02" width="22.03" height="54.57" transform="translate(33.91 -114.47) rotate(2.78)"/>
        <rect class="cls-5" x="2385.55" y="614.93" width="22.03" height="54.83" transform="translate(33.99 -115.52) rotate(2.78)"/>
        <rect class="cls-5" x="2407.31" y="616.13" width="22.35" height="54.83" transform="translate(34.07 -116.58) rotate(2.78)"/>
        <polygon class="cls-5" points="2449.81 672.78 2427.83 671.44 2430.83 616.69 2452.63 617.69 2449.81 672.78"/>
        <polygon class="cls-5" points="2471.81 673.66 2449.97 672.5 2452.63 617.69 2474.38 618.88 2471.81 673.66"/>
        <polygon class="cls-5" points="2493.66 674.75 2471.81 673.66 2474.38 618.88 2496.38 619.94 2493.66 674.75"/>
        <polygon class="cls-5" points="2516.13 676.1 2493.65 675.01 2496.38 619.94 2518.47 621 2516.13 676.1"/>
        <path class="cls-5" d="M2516.13,676.1h0l2.66-54.77,42.35,2.06L2539,659.88C2533.32,669.7,2528.18,676.69,2516.13,676.1Z"/>
        <polygon class="cls-5" points="2365.32 613.52 2310.2 610.62 2308.78 637.87 2363.61 641.03 2365.32 613.52"/>
        <polygon class="cls-5" points="2366.6 586.2 2311.53 583.37 2310.2 610.62 2365.29 613.13 2366.6 586.2"/>
        <path class="cls-5" d="M2363.61,641l-1,27.51-42.2-2.1s-12.67-.58-12.17-14.58l.5-14Z"/>
        <path class="cls-5" d="M2367.94,558.71l-40-2s-14.8-.55-15.63,13.45l-.79,13.22,55.07,2.84Z"/>
        <path class="cls-5" d="M2574,602.83s16.12-32.58-19.68-41a1,1,0,0,0-.27,0c-1.37.06-13.67,0-13.67,0l-3.15,60.51,23.92,1.13Z"/>
    </g>
    <g id="TEXT-447" data-name="TEXT">
        <text class="cls-4" transform="translate(2405.12 618.27) rotate(0.51)">MZ-9</text>
    </g>
    <g id="TEXT-448" data-name="TEXT">
        <text class="cls-8" transform="translate(2333.53 655.22)">1</text>
    </g>
    <g id="TEXT-449" data-name="TEXT">
        <text class="cls-8" transform="translate(2333.99 626.86)">2</text>
    </g>
    <g id="TEXT-450" data-name="TEXT">
        <text class="cls-8" transform="translate(2335.21 600.57)">3</text>
    </g>
    <g id="TEXT-451" data-name="TEXT">
        <text class="cls-8" transform="translate(2336.45 575.69)">4</text>
    </g>
    <g id="TEXT-452" data-name="TEXT">
        <text class="cls-8" transform="translate(2373.26 588.9)">5</text>
    </g>
    <g id="TEXT-453" data-name="TEXT">
        <text class="cls-8" transform="translate(2395.03 589.86)">6</text>
    </g>
    <g id="TEXT-454" data-name="TEXT">
        <text class="cls-8" transform="translate(2417.06 590.79)">7</text>
    </g>
    <g id="TEXT-455" data-name="TEXT">
        <text class="cls-8" transform="translate(2439.32 592.33)">8</text>
    </g>
    <g id="TEXT-456" data-name="TEXT">
        <text class="cls-8" transform="translate(2460.67 593.57)">9</text>
    </g>
    <g id="TEXT-457" data-name="TEXT">
        <text class="cls-8" transform="translate(2482.05 593.82)">10</text>
    </g>
    <g id="TEXT-458" data-name="TEXT">
        <text class="cls-8" transform="translate(2503.55 594.86)">
            <tspan class="cls-9">1</tspan>
            <tspan x="5.01" y="0">1</tspan>
        </text>
    </g>
    <g id="TEXT-459" data-name="TEXT">
        <text class="cls-8" transform="translate(2526.17 593.37)">12</text>
    </g>
    <g id="TEXT-460" data-name="TEXT">
        <text class="cls-8" transform="translate(2550.55 596)">13</text>
    </g>
    <g id="TEXT-461" data-name="TEXT">
        <text class="cls-8" transform="translate(2500.93 650.06)">15</text>
    </g>
    <g id="TEXT-462" data-name="TEXT">
        <text class="cls-8" transform="translate(2478.99 648.97)">16</text>
    </g>
    <g id="TEXT-463" data-name="TEXT">
        <text class="cls-8" transform="translate(2457.06 647.87)">17</text>
    </g>
    <g id="TEXT-464" data-name="TEXT">
        <text class="cls-8" transform="translate(2435.13 646.77)">18</text>
    </g>
    <g id="TEXT-465" data-name="TEXT">
        <text class="cls-8" transform="translate(2413.19 645.67)">19</text>
    </g>
    <g id="TEXT-466" data-name="TEXT">
        <text class="cls-8" transform="translate(2391.26 644.57)">20</text>
    </g>
    <g id="TEXT-467" data-name="TEXT">
        <text class="cls-8" transform="translate(2525.5 645.41)">14</text>
    </g>
    <g id="TEXT-468" data-name="TEXT">
        <text class="cls-8" transform="translate(2369.33 643.47)">21</text>
    </g>
    <g id="MZ-3">
        <g id="MZ-3-2" data-name="MZ-3">
            <path class="cls-2" d="M725.37,590.24,285,563.25c-11.41-.64-21.36-8-20.73-19.42l4.93-83a20,20,0,0,1,21.41-19.1l438.32,27.67a20.69,20.69,0,0,1,19.51,21.81l-4.6,82.49A17.52,17.52,0,0,1,725.37,590.24Z"/>
            <rect class="cls-5" x="321.69" y="451.2" width="22.03" height="54.91" transform="translate(27.14 -17.77) rotate(3.19)"/>
            <rect class="cls-5" x="343.63" y="452.53" width="22.03" height="54.83" transform="translate(27.25 -18.99) rotate(3.19)"/>
            <rect class="cls-5" x="365.55" y="454.14" width="22.03" height="54.83" transform="translate(27.37 -20.2) rotate(3.19)"/>
            <rect class="cls-5" x="388.01" y="455.38" width="21.47" height="54.83" transform="translate(27.48 -21.44) rotate(3.19)"/>
            <rect class="cls-5" x="410" y="456.58" width="20.75" height="54.83" transform="translate(27.58 -22.64) rotate(3.19)"/>
            <rect class="cls-5" x="431.31" y="457.8" width="22.03" height="54.83" transform="translate(27.68 -23.86) rotate(3.19)"/>
            <rect class="cls-5" x="453.76" y="459.05" width="22.03" height="54.83" transform="translate(27.78 -25.1) rotate(3.19)"/>
            <rect class="cls-5" x="475.19" y="460.25" width="22.03" height="54.83" transform="translate(27.88 -26.29) rotate(3.19)"/>
            <rect class="cls-5" x="318.67" y="505.99" width="22.03" height="55.49" transform="translate(30.2 -17.51) rotate(3.19)"/>
            <rect class="cls-5" x="340.59" y="507.2" width="22.03" height="54.83" transform="translate(30.29 -18.73) rotate(3.19)"/>
            <rect class="cls-5" x="362.53" y="508.43" width="22.35" height="54.83" transform="translate(30.39 -19.96) rotate(3.19)"/>
            <rect class="cls-5" x="384.57" y="510.12" width="21.85" height="54.83" transform="translate(30.52 -21.17) rotate(3.19)"/>
            <rect class="cls-5" x="406.27" y="511.36" width="21.98" height="54.83" transform="translate(30.62 -22.38) rotate(3.19)"/>
            <rect class="cls-5" x="428.24" y="512.75" width="22.03" height="54.83" transform="translate(30.73 -23.6) rotate(3.19)"/>
            <rect class="cls-5" x="450.25" y="513.67" width="21.88" height="54.83" transform="translate(30.82 -24.82) rotate(3.19)"/>
            <rect class="cls-5" x="472.1" y="514.89" width="21.85" height="54.83" transform="translate(30.92 -26.03) rotate(3.19)"/>
            <rect class="cls-5" x="493.92" y="517.11" width="22.04" height="54.83" transform="translate(31.08 -27.25) rotate(3.19)"/>
            <rect class="cls-5" x="515.9" y="517.72" width="22.11" height="54.83" transform="translate(31.14 -28.47) rotate(3.19)"/>
            <rect class="cls-5" x="537.99" y="519.72" width="21.97" height="54.8" transform="matrix(1, 0.06, -0.06, 1, 31.29, -29.69)"/>
            <rect class="cls-5" x="559.91" y="521.23" width="23.03" height="54.92" transform="translate(31.41 -30.94) rotate(3.19)"/>
            <rect class="cls-5" x="581.78" y="522.37" width="21.57" height="54.83" transform="translate(31.5 -32.11) rotate(3.19)"/>
            <rect class="cls-5" x="603.33" y="523.35" width="22.11" height="54.83" transform="translate(31.59 -33.33) rotate(3.19)"/>
            <rect class="cls-5" x="625.96" y="524.35" width="21.57" height="54.83" transform="translate(31.68 -34.57) rotate(3.19)"/>
            <rect class="cls-5" x="647.05" y="525.35" width="21.57" height="54.83" transform="translate(31.77 -35.74) rotate(3.19)"/>
            <rect class="cls-5" x="668.72" y="527.38" width="21.98" height="54.83" transform="translate(31.92 -36.95) rotate(3.19)"/>
            <rect class="cls-5" x="691.24" y="528.62" width="21.52" height="54.83" transform="translate(32.02 -38.19) rotate(3.19)"/>
            <rect class="cls-5" x="497.61" y="462.14" width="22.03" height="54.83" transform="translate(28.02 -27.54) rotate(3.19)"/>
            <rect class="cls-5" x="519.32" y="463.65" width="22.25" height="55.05" transform="translate(28.15 -28.75) rotate(3.19)"/>
            <rect class="cls-5" x="541.23" y="464.8" width="22.03" height="55.01" transform="translate(28.24 -29.96) rotate(3.19)"/>
            <rect class="cls-5" x="563.55" y="466.17" width="21.87" height="55.07" transform="translate(28.36 -31.2) rotate(3.19)"/>
            <rect class="cls-5" x="584.88" y="467.39" width="21.83" height="55.12" transform="translate(28.46 -32.38) rotate(3.19)"/>
            <rect class="cls-5" x="606.78" y="468.61" width="21.83" height="55.12" transform="translate(28.56 -33.6) rotate(3.19)"/>
            <rect class="cls-5" x="628.68" y="469.83" width="21.83" height="55.12" transform="translate(28.66 -34.81) rotate(3.19)"/>
            <rect class="cls-5" x="650.58" y="471.05" width="21.83" height="55.12" transform="translate(28.76 -36.03) rotate(3.19)"/>
            <rect class="cls-5" x="672.48" y="472.27" width="21.83" height="55.12" transform="translate(28.87 -37.24) rotate(3.19)"/>
            <rect class="cls-5" x="694.38" y="473.49" width="21.83" height="55.12" transform="translate(28.97 -38.46) rotate(3.19)"/>
            <polygon class="cls-5" points="320.49 505.1 270.76 502.17 269.31 526.41 318.77 529.58 320.49 505.1"/>
            <polygon class="cls-5" points="321.82 480.85 272.14 477.95 270.76 502.42 320.46 505.04 321.82 480.85"/>
            <path class="cls-5" d="M318.77,529.71l-1.1,30.72L279,557.82s-12.41-.78-11-16.37,1.21-15.58,1.21-15.58Z"/>
            <path class="cls-5" d="M323.23,450.81l-35.38-2.4s-14.1.37-15,15.64l-.75,13.3,49.67,3.45Z"/>
            <path class="cls-5" d="M743.63,493.25s.64-17.34-15.37-18.37c-4.75-.25-10.53-.73-10.53-.73l-3.07,55,26.72,1.57Z"/>
            <path class="cls-5" d="M741.38,530.75l-27.1-1.49L711.22,584l13.15.74s14.5,2.13,15.25-12S741.38,530.75,741.38,530.75Z"/>
        </g>
        <g id="TEXT-469" data-name="TEXT">
            <text class="cls-4" transform="translate(490.05 516.4) rotate(0.51)">MZ-3</text>
        </g>
        <g id="TEXT-470" data-name="TEXT">
            <text class="cls-8" transform="translate(291.7 544.9)">1</text>
        </g>
        <g id="TEXT-471" data-name="TEXT">
            <text class="cls-8" transform="translate(293.05 516.8)">2</text>
        </g>
        <g id="TEXT-472" data-name="TEXT">
            <text class="cls-8" transform="translate(294.69 490.53)">3</text>
        </g>
        <g id="TEXT-473" data-name="TEXT">
            <text class="cls-8" transform="translate(296.32 465.67)">4</text>
        </g>
        <g id="TEXT-474" data-name="TEXT">
            <text class="cls-8" transform="translate(328.82 478.85)">5</text>
        </g>
        <g id="TEXT-475" data-name="TEXT">
            <text class="cls-8" transform="translate(350.64 480.39)">6</text>
        </g>
        <g id="TEXT-476" data-name="TEXT">
            <text class="cls-8" transform="translate(372.6 482.55)">7</text>
        </g>
        <g id="TEXT-477" data-name="TEXT">
            <text class="cls-8" transform="translate(394.41 483.09)">8</text>
        </g>
        <g id="TEXT-478" data-name="TEXT">
            <text class="cls-8" transform="translate(415.28 485.36)">9</text>
        </g>
        <g id="TEXT-479" data-name="TEXT">
            <text class="cls-8" transform="translate(437.11 485.71)">10</text>
        </g>
        <g id="TEXT-480" data-name="TEXT">
            <text class="cls-8" transform="translate(458.6 486.86)">
                <tspan class="cls-9">1</tspan>
                <tspan x="5.01" y="0">1</tspan>
            </text>
        </g>
        <g id="TEXT-481" data-name="TEXT">
            <text class="cls-8" transform="translate(480.49 488.23)">12</text>
        </g>
        <g id="TEXT-482" data-name="TEXT">
            <text class="cls-8" transform="translate(500.36 489.46)">13</text>
        </g>
        <g id="TEXT-483" data-name="TEXT">
            <text class="cls-8" transform="translate(523.69 491.03)">14</text>
        </g>
        <g id="TEXT-484" data-name="TEXT">
            <text class="cls-8" transform="translate(547.94 492.85)">15</text>
        </g>
        <g id="TEXT-485" data-name="TEXT">
            <text class="cls-8" transform="translate(568.38 494.29)">16</text>
        </g>
        <g id="TEXT-486" data-name="TEXT">
            <text class="cls-8" transform="translate(590.88 496.3)">17</text>
        </g>
        <g id="TEXT-487" data-name="TEXT">
            <text class="cls-8" transform="translate(612.86 497.2)">18</text>
        </g>
        <g id="TEXT-488" data-name="TEXT">
            <text class="cls-8" transform="translate(634.78 498.59)">19</text>
        </g>
        <g id="TEXT-489" data-name="TEXT">
            <text class="cls-8" transform="translate(656.69 499.98)">20</text>
        </g>
        <g id="TEXT-490" data-name="TEXT">
            <text class="cls-8" transform="translate(678.61 501.37)">21</text>
        </g>
        <g id="TEXT-491" data-name="TEXT">
            <text class="cls-8" transform="translate(700.67 503.01)">22</text>
        </g>
        <g id="TEXT-492" data-name="TEXT">
            <text class="cls-8" transform="translate(722.72 504.46)">23</text>
        </g>
        <g id="TEXT-493" data-name="TEXT">
            <text class="cls-8" transform="translate(719.61 560.04)">24</text>
        </g>
        <g id="TEXT-494" data-name="TEXT">
            <text class="cls-8" transform="translate(696.62 558.02)">25</text>
        </g>
        <g id="TEXT-495" data-name="TEXT">
            <text class="cls-8" transform="translate(563.68 549.24)">31</text>
        </g>
        <g id="TEXT-496" data-name="TEXT">
            <text class="cls-8" transform="translate(542.68 548.23)">32</text>
        </g>
        <g id="TEXT-497" data-name="TEXT">
            <text class="cls-8" transform="translate(521.12 545.69)">33</text>
        </g>
        <g id="TEXT-498" data-name="TEXT">
            <text class="cls-8" transform="translate(498.68 545.19)">34</text>
        </g>
        <g id="TEXT-499" data-name="TEXT">
            <text class="cls-8" transform="translate(476.77 543.67)">35</text>
        </g>
        <g id="TEXT-500" data-name="TEXT">
            <text class="cls-8" transform="translate(454.85 542.28)">36</text>
        </g>
        <g id="TEXT-501" data-name="TEXT">
            <text class="cls-8" transform="translate(432.94 540.89)">37</text>
        </g>
        <g id="TEXT-502" data-name="TEXT">
            <text class="cls-8" transform="translate(411.02 539.5)">38</text>
        </g>
        <g id="TEXT-503" data-name="TEXT">
            <text class="cls-8" transform="translate(389.1 538.11)">39</text>
        </g>
        <g id="TEXT-504" data-name="TEXT">
            <text class="cls-8" transform="translate(367.19 536.72)">40</text>
        </g>
        <g id="TEXT-505" data-name="TEXT">
            <text class="cls-8" transform="translate(346.19 535.1)">41</text>
        </g>
        <g id="TEXT-506" data-name="TEXT">
            <text class="cls-8" transform="translate(675.14 556.16)">26</text>
        </g>
        <g id="TEXT-507" data-name="TEXT">
            <text class="cls-8" transform="translate(653.22 554.77)">27</text>
        </g>
        <g id="TEXT-508" data-name="TEXT">
            <text class="cls-8" transform="translate(631.3 553.38)">28</text>
        </g>
        <g id="TEXT-509" data-name="TEXT">
            <text class="cls-8" transform="translate(609.39 551.99)">29</text>
        </g>
        <g id="TEXT-510" data-name="TEXT">
            <text class="cls-8" transform="translate(587.48 550.39)">30</text>
        </g>
        <g id="TEXT-511" data-name="TEXT">
            <text class="cls-8" transform="translate(324.27 533.71)">42</text>
        </g>
        <g id="TEXT-512" data-name="TEXT">
            <text class="cls-12" transform="translate(399.1 575.26) rotate(3.03)">
                <tspan class="cls-13">C</tspan>
                <tspan class="cls-14" x="3.8" y="0">ALLE EL SA</tspan>
                <tspan class="cls-15" x="33.38" y="0">L</tspan>
                <tspan class="cls-16" x="36.07" y="0">V</tspan>
                <tspan x="39.34" y="0">ADOR</tspan>
            </text>
        </g>
    </g>
    <g id="CALLES">
        <g id="TEXT-513" data-name="TEXT">
            <text class="cls-17" transform="translate(888.53 712.27) rotate(-87.7)">
                <tspan class="cls-18">A</tspan>
                <tspan x="5.2" y="0">VENI</tspan>
                <tspan class="cls-19" x="23.32" y="0">D</tspan>
                <tspan x="29.39" y="0">A AE</tspan>
                <tspan class="cls-20" x="47.33" y="0">R</tspan>
                <tspan x="52.36" y="0">OPUE</tspan>
                <tspan class="cls-21" x="74.32" y="0">R</tspan>
                <tspan class="cls-22" x="79.41" y="0">T</tspan>
                <tspan class="cls-23" x="83.78" y="0">O</tspan>
            </text>
        </g>
        <g id="TEXT-514" data-name="TEXT">
            <text class="cls-12" transform="translate(250.01 647.3) rotate(-87.7)">
                <tspan class="cls-13">C</tspan>
                <tspan class="cls-14" x="3.8" y="0">ALLE MEXI</tspan>
                <tspan class="cls-24" x="32.24" y="0">C</tspan>
                <tspan x="35.88" y="0">O</tspan>
            </text>
        </g>
        <g id="TEXT-515" data-name="TEXT">
            <text class="cls-25" transform="translate(748.04 688.12) rotate(-87.7)">C<tspan class="cls-14" x="3.8" y="0">ALLE A</tspan>
                <tspan class="cls-26" x="22.51" y="0">R</tspan>
                <tspan class="cls-27" x="26.04" y="0">GENTINA</tspan>
            </text>
        </g>
        <g id="TEXT-516" data-name="TEXT">
            <text class="cls-12" transform="translate(1040.09 700.68) rotate(-87.7)">
                <tspan class="cls-13">C</tspan>
                <tspan class="cls-14" x="3.8" y="0">ALLE B</tspan>
                <tspan class="cls-28" x="22.06" y="0">R</tspan>
                <tspan x="25.59" y="0">ASIL</tspan>
            </text>
        </g>
        <g id="TEXT-517" data-name="TEXT">
            <text class="cls-12" transform="translate(1456.99 721.14) rotate(-87.7)">
                <svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2834.65 1417.32">
    <defs>
        <style>.cls-1{fill:#b6e0f2;stroke-width:2px;isolation:isolate;}.cls-1,.cls-11,.cls-2,.cls-3,.cls-5,.cls-6{stroke:#1d1d1b;}.cls-1,.cls-11,.cls-4,.cls-5,.cls-6{stroke-miterlimit:10;}.cls-2{fill:#f39200;}.cls-2,.cls-3{stroke-linecap:round;stroke-linejoin:round;}.cls-11,.cls-2,.cls-3,.cls-5,.cls-6{stroke-width:0.75px;}.cls-3{fill:#2a4b9b;}.cls-4{font-size:15px;fill:#fff;stroke:#fff;font-family:ArialMT, Arial;}.cls-5{fill:none;}.cls-6{fill:#099939;}.cls-7{letter-spacing:-0.09em;}.cls-8{font-size:10px;font-family:Arial-BoldMT, Arial;font-weight:700;}.cls-9{letter-spacing:-0.06em;}.cls-10{letter-spacing:-0.07em;}.cls-11{fill:#3aaa35;}.cls-12,.cls-25{font-size:6.51px;}.cls-12,.cls-17,.cls-25,.cls-38{fill:#808081;font-family:MyriadPro-Regular, Myriad Pro;}.cls-13,.cls-25{letter-spacing:0em;}.cls-14{letter-spacing:0em;}.cls-15{letter-spacing:-0.06em;}.cls-16{letter-spacing:-0.06em;}.cls-17{font-size:9.31px;}.cls-18{letter-spacing:-0.05em;}.cls-19{letter-spacing:-0.01em;}.cls-20{letter-spacing:0em;}.cls-21{letter-spacing:0.01em;}.cls-22{letter-spacing:-0.03em;}.cls-23{letter-spacing:0em;}.cls-24{letter-spacing:-0.02em;}.cls-26{letter-spacing:0em;}.cls-27{letter-spacing:0em;}.cls-28{letter-spacing:0em;}.cls-29{letter-spacing:-0.02em;}.cls-30{letter-spacing:-0.04em;}.cls-31{letter-spacing:-0.03em;}.cls-32{letter-spacing:-0.04em;}.cls-33{letter-spacing:-0.05em;}.cls-34{letter-spacing:-0.01em;}.cls-35{letter-spacing:-0.08em;}.cls-36{letter-spacing:0em;}.cls-37{letter-spacing:-0.01em;}.cls-38{font-size:7.82px;}.cls-39{letter-spacing:-0.05em;}.cls-40{letter-spacing:0em;}.cls-41{letter-spacing:-0.01em;}.cls-42{letter-spacing:-0.03em;}.cls-43{letter-spacing:-0.08em;}.cls-44{letter-spacing:0em;}.cls-45{letter-spacing:-0.08em;}.cls-46{letter-spacing:0.01em;}.cls-47{letter-spacing:-0.01em;}.cls-48{letter-spacing:-0.03em;}.cls-49{letter-spacing:-0.08em;}.cls-50{letter-spacing:-0.08em;}</style>
    </defs>
    <title>URB. V. DE GUADALUPE</title>
    <path class="cls-1" d="M229.75,842.17l22.81-428s-3.78-11.88,33.09-13l2339.49,128s39.33.71,32.14,16.34l-374.69,598.76s-4.16,12.79-46.13-.51l-106.93-89,69-105.13L2184,940.49l-1928.72-92A53.49,53.49,0,0,1,229.75,842.17Z"/>
    <g id="EQ.-15">
        <rect class="cls-2" x="1466.3" y="650.38" width="403.24" height="118.76" rx="16.98" ry="16.98" transform="translate(36.4 -80.08) rotate(2.78)"/>
        <rect class="cls-3" x="1469.69" y="655.13" width="395.3" height="110.21" rx="13.36" ry="13.36" transform="translate(36.42 -80.06) rotate(2.78)"/>
    </g>
    <g id="TEXT">
        <text class="cls-4" transform="translate(1631.87 714.45) rotate(0.51)">EQ.-15</text>
    </g>
    <g id="MZ-1">
        <g id="MZ-1-2" data-name="MZ-1">
            <path class="cls-2" d="M711.56,853.46,269.18,825.6c-11.41-.64-21.37-7.87-20.75-19.05l4.84-81.3c.62-11.18,10-19.33,21.38-18.69l443.78,27.91c11.41.64,17.37,9.74,16.75,20.92l-4.37,82.38C730.28,847.22,721.22,854,711.56,853.46Z"/>
            <rect class="cls-5" x="310.62" y="713.43" width="22.03" height="54.91" transform="translate(41.71 -16.75) rotate(3.19)"/>
            <rect class="cls-5" x="332.3" y="714.67" width="22.03" height="54.83" transform="translate(41.82 -17.95) rotate(3.19)"/>
            <rect class="cls-5" x="354.24" y="716.31" width="22.03" height="54.83" transform="translate(41.94 -19.17) rotate(3.19)"/>
            <rect class="cls-5" x="376.07" y="717.68" width="21.86" height="54.83" transform="translate(42.05 -20.38) rotate(3.19)"/>
            <rect class="cls-5" x="398.19" y="718.91" width="21.62" height="54.83" transform="matrix(1, 0.06, -0.06, 1, 42.15, -21.6)"/>
            <rect class="cls-5" x="420.06" y="720.02" width="22.03" height="54.83" transform="translate(42.25 -22.82) rotate(3.19)"/>
            <rect class="cls-5" x="441.82" y="721.35" width="22.03" height="54.83" transform="translate(42.36 -24.03) rotate(3.19)"/>
            <rect class="cls-5" x="463.97" y="723.11" width="22.03" height="54.83" transform="translate(42.49 -25.26) rotate(3.19)"/>
            <rect class="cls-5" x="306.98" y="767.84" width="22.03" height="55.49" transform="translate(44.75 -16.46) rotate(3.19)"/>
            <rect class="cls-5" x="329.25" y="769.41" width="22.03" height="54.83" transform="translate(44.86 -17.7) rotate(3.19)"/>
            <rect class="cls-5" x="351.21" y="770.72" width="22.35" height="54.83" transform="translate(44.96 -18.92) rotate(3.19)"/>
            <rect class="cls-5" x="373.38" y="772.19" width="21.85" height="54.83" transform="translate(45.08 -20.14) rotate(3.19)"/>
            <rect class="cls-5" x="395.08" y="773.41" width="21.98" height="54.83" transform="translate(45.18 -21.35) rotate(3.19)"/>
            <rect class="cls-5" x="416.91" y="775.05" width="22.03" height="54.83" transform="translate(45.31 -22.56) rotate(3.19)"/>
            <rect class="cls-5" x="438.83" y="776.27" width="21.88" height="54.83" transform="translate(45.41 -23.78) rotate(3.19)"/>
            <rect class="cls-5" x="460.59" y="777.71" width="21.85" height="54.61" transform="translate(45.51 -24.99) rotate(3.19)"/>
            <polygon class="cls-5" points="502.56 834.56 480.86 833 483.91 778.25 505.92 779.48 502.56 834.56"/>
            <rect class="cls-5" x="504.09" y="780.64" width="22.11" height="54.83" transform="translate(45.75 -27.41) rotate(3.19)"/>
            <rect class="cls-5" x="526.07" y="782.19" width="21.97" height="54.8" transform="matrix(1, 0.06, -0.06, 1, 45.87, -28.62)"/>
            <rect class="cls-5" x="547.95" y="783.63" width="22.15" height="54.92" transform="translate(45.99 -29.84) rotate(3.19)"/>
            <rect class="cls-5" x="570.06" y="784.92" width="21.76" height="54.76" transform="translate(46.09 -31.06) rotate(3.19)"/>
            <rect class="cls-5" x="591.93" y="786.4" width="21.76" height="54.63" transform="translate(46.2 -32.28) rotate(3.19)"/>
            <rect class="cls-5" x="613.65" y="787.79" width="29.37" height="54.97" transform="translate(46.33 -33.69) rotate(3.19)"/>
            <rect class="cls-5" x="485.66" y="724.32" width="22.03" height="54.83" transform="translate(42.59 -26.47) rotate(3.19)"/>
            <rect class="cls-5" x="507.65" y="725.44" width="22.25" height="55.05" transform="translate(42.69 -27.69) rotate(3.19)"/>
            <rect class="cls-5" x="529.27" y="727.5" width="22.03" height="54.79" transform="translate(42.83 -28.89) rotate(3.19)"/>
            <rect class="cls-5" x="551.61" y="728.94" width="21.87" height="54.86" transform="translate(42.95 -30.12) rotate(3.19)"/>
            <rect class="cls-5" x="573.28" y="729.9" width="21.83" height="55.12" transform="translate(43.04 -31.33) rotate(3.19)"/>
            <rect class="cls-5" x="595.08" y="731.6" width="22.34" height="54.61" transform="translate(43.16 -32.55) rotate(3.19)"/>
            <rect class="cls-5" x="617.02" y="733.09" width="29.63" height="54.86" transform="translate(43.29 -33.97) rotate(3.19)"/>
            <polygon class="cls-5" points="308.39 767.4 253.74 764 252.14 792.33 306.49 796.01 308.39 767.4"/>
            <polygon class="cls-5" points="310.7 739.88 255.45 736.62 253.91 764.19 309.19 767.13 310.7 739.88"/>
            <path class="cls-5" d="M307,795.09l-1.68,27.15-42.44-2.34S250,818,250.75,805.33c.63-10.56,1.06-12.94,1.07-13.54a.18.18,0,0,1,.19-.17Z"/>
            <path class="cls-5" d="M312.14,712.5l-41.77-2.32s-13.19-1.53-14.21,14.56c-.59,9.33-.81,12-.81,12l55.23,3.18Z"/>
            <path class="cls-6" d="M714.78,738.29s16.18.87,15.57,13.91-5.12,84.38-5.12,84.38-1.64,12.14-18.23,11.31S641,844,641,844l7.94-109.76Z"/>
        </g>
        <g id="TEXT-2" data-name="TEXT">
            <text class="cls-4" transform="translate(438.34 779.11) rotate(0.51)">MZ-1</text>
        </g>
        <g id="TEXT-3" data-name="TEXT">
            <text class="cls-4" transform="translate(661.93 789.78) rotate(0.51)">A.<tspan class="cls-7" x="14.17" y="0">V</tspan>
                <tspan x="22.8" y="0">.-1</tspan>
            </text>
        </g>
        <g id="TEXT-4" data-name="TEXT">
            <text class="cls-8" transform="translate(275.03 807.9)">1</text>
        </g>
        <g id="TEXT-5" data-name="TEXT">
            <text class="cls-8" transform="translate(276.38 779.8)">2</text>
        </g>
        <g id="TEXT-6" data-name="TEXT">
            <text class="cls-8" transform="translate(278.02 753.53)">3</text>
        </g>
        <g id="TEXT-7" data-name="TEXT">
            <text class="cls-8" transform="translate(279.65 728.67)">4</text>
        </g>
        <g id="TEXT-8" data-name="TEXT">
            <text class="cls-8" transform="translate(318.5 742.32)">5</text>
        </g>
        <g id="TEXT-9" data-name="TEXT">
            <text class="cls-8" transform="translate(339.33 743.85)">6</text>
        </g>
        <g id="TEXT-10" data-name="TEXT">
            <text class="cls-8" transform="translate(361.34 745.13)">7</text>
        </g>
        <g id="TEXT-11" data-name="TEXT">
            <text class="cls-8" transform="translate(383.57 747.02)">8</text>
        </g>
        <g id="TEXT-12" data-name="TEXT">
            <text class="cls-8" transform="translate(404.9 748.6)">9</text>
        </g>
        <g id="TEXT-13" data-name="TEXT">
            <text class="cls-8" transform="translate(426.27 749.18)">10</text>
        </g>
        <g id="TEXT-14" data-name="TEXT">
            <text class="cls-8" transform="translate(447.76 750.56)">
                <tspan class="cls-9">1</tspan>
                <tspan x="5.01" y="0">1</tspan>
            </text>
        </g>
        <g id="TEXT-15" data-name="TEXT">
            <text class="cls-8" transform="translate(469.65 751.93)">12</text>
        </g>
        <g id="TEXT-16" data-name="TEXT">
            <text class="cls-8" transform="translate(491.63 753.68)">13</text>
        </g>
        <g id="TEXT-17" data-name="TEXT">
            <text class="cls-8" transform="translate(513.17 755.04)">14</text>
        </g>
        <g id="TEXT-18" data-name="TEXT">
            <text class="cls-8" transform="translate(534.32 756.32)">15</text>
        </g>
        <g id="TEXT-19" data-name="TEXT">
            <text class="cls-8" transform="translate(557.65 757.76)">16</text>
        </g>
        <g id="TEXT-20" data-name="TEXT">
            <text class="cls-8" transform="translate(577.26 759.77)">17</text>
        </g>
        <g id="TEXT-21" data-name="TEXT">
            <text class="cls-8" transform="translate(601.61 760.43)">18</text>
        </g>
        <g id="TEXT-22" data-name="TEXT">
            <text class="cls-8" transform="translate(624.33 762.3)">19</text>
        </g>
        <g id="TEXT-23" data-name="TEXT">
            <text class="cls-8" transform="translate(621.19 816.59)">20</text>
        </g>
        <g id="TEXT-24" data-name="TEXT">
            <text class="cls-8" transform="translate(597.83 814.68)">21</text>
        </g>
        <g id="TEXT-25" data-name="TEXT">
            <text class="cls-8" transform="translate(572.74 814.56)">22</text>
        </g>
        <g id="TEXT-26" data-name="TEXT">
            <text class="cls-8" transform="translate(552.3 812.57)">23</text>
        </g>
        <g id="TEXT-27" data-name="TEXT">
            <text class="cls-8" transform="translate(531.3 811.57)">24</text>
        </g>
        <g id="TEXT-28" data-name="TEXT">
            <text class="cls-8" transform="translate(509.74 809.02)">25</text>
        </g>
        <g id="TEXT-29" data-name="TEXT">
            <text class="cls-8" transform="translate(487.88 808.49)">26</text>
        </g>
        <g id="TEXT-30" data-name="TEXT">
            <text class="cls-8" transform="translate(465.38 807.14)">27</text>
        </g>
        <g id="TEXT-31" data-name="TEXT">
            <text class="cls-8" transform="translate(443.47 805.61)">28</text>
        </g>
        <g id="TEXT-32" data-name="TEXT">
            <text class="cls-8" transform="translate(421.56 804.22)">29</text>
        </g>
        <g id="TEXT-33" data-name="TEXT">
            <text class="cls-8" transform="translate(399.64 802.83)">30</text>
        </g>
        <g id="TEXT-34" data-name="TEXT">
            <text class="cls-8" transform="translate(377.72 801.44)">31</text>
        </g>
        <g id="TEXT-35" data-name="TEXT">
            <text class="cls-8" transform="translate(355.81 800.05)">32</text>
        </g>
        <g id="TEXT-36" data-name="TEXT">
            <text class="cls-8" transform="translate(333.89 798.66)">33</text>
        </g>
        <g id="TEXT-37" data-name="TEXT">
            <text class="cls-8" transform="translate(312.89 797.04)">34</text>
        </g>
    </g>
    <g id="MZ-2">
        <g id="MZ-2-2" data-name="MZ-2">
            <path class="cls-2" d="M718.38,721.08,276,693.22c-11.41-.64-21.37-7.87-20.75-19.05l4.84-81.3c.62-11.18,10-19.33,21.38-18.69l443.78,27.91c11.41.64,17.37,9.74,16.75,20.92l-4.37,82.38C737.1,714.84,728,721.62,718.38,721.08Z"/>
            <rect class="cls-5" x="318.69" y="581.12" width="22.03" height="54.91" transform="translate(34.37 -17.4) rotate(3.19)"/>
            <rect class="cls-5" x="340.63" y="582.45" width="22.03" height="54.83" transform="translate(34.47 -18.62) rotate(3.19)"/>
            <rect class="cls-5" x="362.55" y="584.06" width="22.03" height="54.83" transform="translate(34.6 -19.84) rotate(3.19)"/>
            <rect class="cls-5" x="385.01" y="585.29" width="21.47" height="54.83" transform="translate(34.7 -21.07) rotate(3.19)"/>
            <rect class="cls-5" x="407" y="586.5" width="20.75" height="54.83" transform="translate(34.8 -22.27) rotate(3.19)"/>
            <rect class="cls-5" x="428.31" y="587.72" width="22.03" height="54.83" transform="translate(34.9 -23.49) rotate(3.19)"/>
            <rect class="cls-5" x="450.76" y="588.97" width="22.03" height="54.83" transform="translate(35.01 -24.73) rotate(3.19)"/>
            <rect class="cls-5" x="472.19" y="590.16" width="22.03" height="54.83" transform="translate(35.11 -25.93) rotate(3.19)"/>
            <rect class="cls-5" x="315.67" y="635.9" width="22.03" height="55.49" transform="translate(37.43 -17.15) rotate(3.19)"/>
            <rect class="cls-5" x="337.59" y="637.11" width="22.03" height="54.83" transform="translate(37.51 -18.36) rotate(3.19)"/>
            <rect class="cls-5" x="359.53" y="638.34" width="22.35" height="54.83" transform="translate(37.61 -19.59) rotate(3.19)"/>
            <rect class="cls-5" x="381.57" y="640.04" width="21.85" height="54.83" transform="translate(37.74 -20.8) rotate(3.19)"/>
            <rect class="cls-5" x="403.27" y="641.28" width="21.98" height="54.83" transform="translate(37.84 -22.01) rotate(3.19)"/>
            <rect class="cls-5" x="425.24" y="642.67" width="22.03" height="54.83" transform="translate(37.95 -23.23) rotate(3.19)"/>
            <rect class="cls-5" x="447.25" y="643.59" width="21.88" height="54.83" transform="translate(38.04 -24.45) rotate(3.19)"/>
            <rect class="cls-5" x="469.1" y="644.81" width="21.85" height="54.83" transform="translate(38.14 -25.66) rotate(3.19)"/>
            <rect class="cls-5" x="490.92" y="647.03" width="22.04" height="54.83" transform="translate(38.3 -26.88) rotate(3.19)"/>
            <rect class="cls-5" x="512.9" y="648.63" width="22.11" height="54.83" transform="translate(38.42 -28.1) rotate(3.19)"/>
            <rect class="cls-5" x="534.99" y="650.64" width="21.97" height="54.8" transform="matrix(1, 0.06, -0.06, 1, 38.57, -29.32)"/>
            <rect class="cls-5" x="556.91" y="652.15" width="23.03" height="54.92" transform="translate(38.69 -30.57) rotate(3.19)"/>
            <rect class="cls-5" x="578.78" y="653.29" width="21.57" height="54.83" transform="translate(38.78 -31.74) rotate(3.19)"/>
            <rect class="cls-5" x="600.35" y="655.26" width="21.86" height="54.07" transform="translate(38.9 -32.95) rotate(3.19)"/>
            <rect class="cls-5" x="622.18" y="656.24" width="22.03" height="54.35" transform="translate(39 -34.17) rotate(3.19)"/>
            <rect class="cls-5" x="644.48" y="657.23" width="21.53" height="54.83" transform="translate(39.1 -35.39) rotate(3.19)"/>
            <rect class="cls-5" x="494.61" y="592.05" width="22.03" height="54.83" transform="translate(35.25 -27.17) rotate(3.19)"/>
            <rect class="cls-5" x="516.32" y="594.57" width="22.25" height="55.05" transform="translate(35.43 -28.38) rotate(3.19)"/>
            <rect class="cls-5" x="538.23" y="595.72" width="22.03" height="55.01" transform="translate(35.52 -29.59) rotate(3.19)"/>
            <rect class="cls-5" x="560.55" y="597.09" width="21.87" height="55.07" transform="translate(35.63 -30.83) rotate(3.19)"/>
            <rect class="cls-5" x="581.88" y="598.31" width="21.83" height="55.12" transform="translate(35.74 -32.01) rotate(3.19)"/>
            <rect class="cls-5" x="603.78" y="599.53" width="21.83" height="55.12" transform="translate(35.84 -33.23) rotate(3.19)"/>
            <rect class="cls-5" x="625.68" y="600.75" width="21.83" height="55.12" transform="translate(35.94 -34.44) rotate(3.19)"/>
            <rect class="cls-5" x="647.58" y="601.97" width="21.83" height="55.12" transform="translate(36.04 -35.66) rotate(3.19)"/>
            <polygon class="cls-5" points="317.29 635.45 261.91 632.09 260.29 660 315.37 663.64 317.29 635.45"/>
            <polygon class="cls-5" points="318.76 608.77 263.5 605.62 261.98 632.15 317.26 634.99 318.76 608.77"/>
            <path class="cls-5" d="M315.39,663.38l-1.68,27L271.27,688s-13.84-.71-12.34-14.41,1.32-13.7,1.32-13.7Z"/>
            <path class="cls-5" d="M320.18,580.62l-41.55-2.4s-13.72.45-14.66,14.67l-.82,12.39,55.48,3.28Z"/>
            <path class="cls-6" d="M724.5,606.67s13.17.87,12.67,13.94S733,705.17,733,705.17s-1.33,12.17-14.83,11.33-53.7-3.88-53.7-3.88l6.46-110Z"/>
        </g>
        <g id="TEXT-38" data-name="TEXT">
            <text class="cls-4" transform="translate(441.18 649.97) rotate(0.51)">MZ-2</text>
        </g>
        <g id="TEXT-39" data-name="TEXT">
            <text class="cls-4" transform="translate(672.29 664.48) rotate(0.51)">A.<tspan class="cls-7" x="14.17" y="0">V</tspan>
                <tspan x="22.8" y="0">.-2</tspan>
            </text>
        </g>
        <g id="TEXT-40" data-name="TEXT">
            <text class="cls-8" transform="translate(283.36 676.4)">1</text>
        </g>
        <g id="TEXT-41" data-name="TEXT">
            <text class="cls-8" transform="translate(284.72 648.3)">2</text>
        </g>
        <g id="TEXT-42" data-name="TEXT">
            <text class="cls-8" transform="translate(286.36 622.03)">3</text>
        </g>
        <g id="TEXT-43" data-name="TEXT">
            <text class="cls-8" transform="translate(287.99 597.17)">4</text>
        </g>
        <g id="TEXT-44" data-name="TEXT">
            <text class="cls-8" transform="translate(326.84 610.82)">5</text>
        </g>
        <g id="TEXT-45" data-name="TEXT">
            <text class="cls-8" transform="translate(347.67 612.35)">6</text>
        </g>
        <g id="TEXT-46" data-name="TEXT">
            <text class="cls-8" transform="translate(369.68 613.63)">7</text>
        </g>
        <g id="TEXT-47" data-name="TEXT">
            <text class="cls-8" transform="translate(391.91 615.52)">8</text>
        </g>
        <g id="TEXT-48" data-name="TEXT">
            <text class="cls-8" transform="translate(413.24 617.1)">9</text>
        </g>
        <g id="TEXT-49" data-name="TEXT">
            <text class="cls-8" transform="translate(434.61 617.68)">10</text>
        </g>
        <g id="TEXT-50" data-name="TEXT">
            <text class="cls-8" transform="translate(456.1 619.06)">
                <tspan class="cls-9">1</tspan>
                <tspan x="5.01" y="0">1</tspan>
            </text>
        </g>
        <g id="TEXT-51" data-name="TEXT">
            <text class="cls-8" transform="translate(477.99 620.43)">12</text>
        </g>
        <g id="TEXT-52" data-name="TEXT">
            <text class="cls-8" transform="translate(499.97 622.18)">13</text>
        </g>
        <g id="TEXT-53" data-name="TEXT">
            <text class="cls-8" transform="translate(521.5 623.54)">14</text>
        </g>
        <g id="TEXT-54" data-name="TEXT">
            <text class="cls-8" transform="translate(542.66 624.82)">15</text>
        </g>
        <g id="TEXT-55" data-name="TEXT">
            <text class="cls-8" transform="translate(565.99 626.26)">16</text>
        </g>
        <g id="TEXT-56" data-name="TEXT">
            <text class="cls-8" transform="translate(585.6 628.27)">17</text>
        </g>
        <g id="TEXT-57" data-name="TEXT">
            <text class="cls-8" transform="translate(609.72 630.34)">18</text>
        </g>
        <g id="TEXT-58" data-name="TEXT">
            <text class="cls-8" transform="translate(631.65 631.84)">19</text>
        </g>
        <g id="TEXT-59" data-name="TEXT">
            <text class="cls-8" transform="translate(650.93 634.17)">20</text>
        </g>
        <g id="TEXT-60" data-name="TEXT">
            <text class="cls-8" transform="translate(648.31 687.25)">21</text>
        </g>
        <g id="TEXT-61" data-name="TEXT">
            <text class="cls-8" transform="translate(624.91 685.84)">22</text>
        </g>
        <g id="TEXT-62" data-name="TEXT">
            <text class="cls-8" transform="translate(604.47 683.85)">23</text>
        </g>
        <g id="TEXT-63" data-name="TEXT">
            <text class="cls-8" transform="translate(583.47 682.84)">24</text>
        </g>
        <g id="TEXT-64" data-name="TEXT">
            <text class="cls-8" transform="translate(561.91 680.3)">25</text>
        </g>
        <g id="TEXT-65" data-name="TEXT">
            <text class="cls-8" transform="translate(540.05 679.76)">26</text>
        </g>
        <g id="TEXT-66" data-name="TEXT">
            <text class="cls-8" transform="translate(517.56 678.42)">27</text>
        </g>
        <g id="TEXT-67" data-name="TEXT">
            <text class="cls-8" transform="translate(495.65 676.89)">28</text>
        </g>
        <g id="TEXT-68" data-name="TEXT">
            <text class="cls-8" transform="translate(473.73 675.5)">29</text>
        </g>
        <g id="TEXT-69" data-name="TEXT">
            <text class="cls-8" transform="translate(451.81 674.11)">30</text>
        </g>
        <g id="TEXT-70" data-name="TEXT">
            <text class="cls-8" transform="translate(429.9 672.72)">31</text>
        </g>
        <g id="TEXT-71" data-name="TEXT">
            <text class="cls-8" transform="translate(407.98 671.33)">32</text>
        </g>
        <g id="TEXT-72" data-name="TEXT">
            <text class="cls-8" transform="translate(386.06 669.94)">33</text>
        </g>
        <g id="TEXT-73" data-name="TEXT">
            <text class="cls-8" transform="translate(365.06 668.32)">34</text>
        </g>
        <g id="TEXT-74" data-name="TEXT">
            <text class="cls-8" transform="translate(342.23 667.16)">35</text>
        </g>
        <g id="TEXT-75" data-name="TEXT">
            <text class="cls-8" transform="translate(321.22 665.59)">36</text>
        </g>
    </g>
    <g id="MZ-4">
        <g id="MZ-4-2" data-name="MZ-4">
            <path class="cls-2" d="M880.23,497.31,863.39,844A17.58,17.58,0,0,1,845,860.66l-84.64-4.11a18.47,18.47,0,0,1-17.55-19.34L758.9,505.34a32.83,32.83,0,0,1,34.38-31.2l69,3.35A18.92,18.92,0,0,1,880.23,497.31Z"/>
            <rect class="cls-5" x="767.37" y="759.47" width="22.03" height="55" transform="translate(-45.54 1526.14) rotate(-87.21)"/>
            <rect class="cls-5" x="768.83" y="737.54" width="22.03" height="55" transform="translate(-22.24 1506.72) rotate(-87.21)"/>
            <rect class="cls-5" x="770.19" y="715.36" width="21.47" height="55" transform="translate(0.94 1486.7) rotate(-87.21)"/>
            <rect class="cls-5" x="771.6" y="693.72" width="20.75" height="55" transform="translate(23.55 1467.17) rotate(-87.21)"/>
            <rect class="cls-5" x="772.03" y="671.76" width="22.03" height="55" transform="matrix(0.05, -1, 1, 0.05, 46.51, 1447.34)"/>
            <rect class="cls-5" x="773.12" y="649.3" width="22.03" height="55" transform="translate(69.97 1427.08) rotate(-87.21)"/>
            <rect class="cls-5" x="774.17" y="627.86" width="22.03" height="55" transform="translate(92.38 1407.72) rotate(-87.21)"/>
            <rect class="cls-5" x="822.22" y="762.13" width="22.03" height="55" transform="translate(3.99 1583.45) rotate(-87.21)"/>
            <rect class="cls-5" x="823.14" y="740.01" width="22.35" height="55" transform="translate(27.1 1563.49) rotate(-87.21)"/>
            <rect class="cls-5" x="824.93" y="718.21" width="21.85" height="55" transform="translate(50.35 1544.29) rotate(-87.21)"/>
            <rect class="cls-5" x="825.95" y="696.44" width="21.98" height="55" transform="translate(73.13 1524.66) rotate(-87.21)"/>
            <rect class="cls-5" x="827.17" y="674.44" width="22.03" height="55" transform="translate(96.28 1504.96) rotate(-87.21)"/>
            <rect class="cls-5" x="828.01" y="652.49" width="21.88" height="55" transform="translate(118.93 1484.86) rotate(-87.21)"/>
            <rect class="cls-5" x="829.09" y="630.65" width="21.85" height="55" transform="translate(141.76 1465.14) rotate(-87.21)"/>
            <rect class="cls-5" x="830.06" y="608.73" width="22.04" height="55" transform="translate(164.67 1445.35) rotate(-87.21)"/>
            <rect class="cls-5" x="831.48" y="586.7" width="22.11" height="55" transform="translate(188.06 1425.84) rotate(-87.21)"/>
            <rect class="cls-5" x="832.38" y="564.69" width="21.97" height="54.97" transform="translate(210.85 1405.72) rotate(-87.21)"/>
            <rect class="cls-5" x="833.26" y="542.17" width="23.03" height="55.09" transform="translate(234.63 1385.77) rotate(-87.21)"/>
            <rect class="cls-5" x="834.95" y="521.07" width="21.57" height="55" transform="translate(256.65 1366.6) rotate(-87.21)"/>
            <rect class="cls-5" x="775.9" y="605.43" width="22.03" height="55" transform="translate(116.44 1388.12) rotate(-87.21)"/>
            <rect class="cls-5" x="776.26" y="583.5" width="22.25" height="55.22" transform="translate(138.68 1367.82) rotate(-87.21)"/>
            <rect class="cls-5" x="777.35" y="561.71" width="22.03" height="55.18" transform="translate(161.4 1348.05) rotate(-87.21)"/>
            <rect class="cls-5" x="778.67" y="539.43" width="21.87" height="55.24" transform="matrix(0.05, -1, 1, 0.05, 184.81, 1328.12)"/>
            <rect class="cls-5" x="779.79" y="518.08" width="21.83" height="55.29" transform="translate(207.14 1308.94) rotate(-87.21)"/>
            <path class="cls-5" d="M873.72,539.13l1.89-40s-.25-15.55-13.79-15.92c-11.33-.33-13-.33-13-.33l-3.05,54.86Z"/>
            <polygon class="cls-5" points="805.17 799.2 802.26 854.33 829.6 855.74 832.77 800.91 805.17 799.2"/>
            <polygon class="cls-5" points="777.78 797.92 774.93 852.99 802.26 854.33 804.79 799.23 777.78 797.92"/>
            <path class="cls-5" d="M832.78,800.91l27.6,1-2.1,42.2s-.59,12.67-14.63,12.17l-14-.5Z"/>
            <path class="cls-5" d="M791.23,534.83l-27.6-1.34,2.65-34.29s9.14-19.86,22.56-19.49c.78,0,4.92.32,4.92.32Z"/>
            <polygon class="cls-5" points="821.2 481.41 818.79 536.47 791.23 534.83 793.74 480.04 821.2 481.41"/>
            <polygon class="cls-5" points="848.78 482.91 845.73 537.77 818.79 536.47 821.2 481.41 848.78 482.91"/>
            <path class="cls-5" d="M750.2,796.59l-2,40s-1.34,14.75,12.71,15.58l14,.83,2.85-55.07Z"/>
        </g>
        <g id="TEXT-76" data-name="TEXT">
            <text class="cls-4" transform="translate(792.19 662.96) rotate(0.14)">MZ-4</text>
        </g>
        <g id="TEXT-77" data-name="TEXT">
            <text class="cls-8" transform="translate(759.42 825.87)">1</text>
        </g>
        <g id="TEXT-78" data-name="TEXT">
            <text class="cls-8" transform="translate(774.3 787.64)">2</text>
        </g>
        <g id="TEXT-79" data-name="TEXT">
            <text class="cls-8" transform="translate(774.55 765.81)">3</text>
        </g>
        <g id="TEXT-80" data-name="TEXT">
            <text class="cls-8" transform="translate(775.81 744)">4</text>
        </g>
        <g id="TEXT-81" data-name="TEXT">
            <text class="cls-8" transform="translate(777.88 721.67)">5</text>
        </g>
        <g id="TEXT-82" data-name="TEXT">
            <text class="cls-8" transform="translate(779.11 700.82)">6</text>
        </g>
        <g id="TEXT-83" data-name="TEXT">
            <text class="cls-8" transform="translate(780.61 678.02)">7</text>
        </g>
        <g id="TEXT-84" data-name="TEXT">
            <text class="cls-8" transform="translate(780.92 656.19)">8</text>
        </g>
        <g id="TEXT-85" data-name="TEXT">
            <text class="cls-8" transform="translate(782.52 635.64)">9</text>
        </g>
        <g id="TEXT-86" data-name="TEXT">
            <text class="cls-8" transform="translate(782.4 612.27)">10</text>
        </g>
        <g id="TEXT-87" data-name="TEXT">
            <text class="cls-8" transform="translate(782.83 590.15)">
                <tspan class="cls-9">1</tspan>
                <tspan x="5.01" y="0">1</tspan>
            </text>
        </g>
        <g id="TEXT-88" data-name="TEXT">
            <text class="cls-8" transform="translate(783.9 568.43)">12</text>
        </g>
        <g id="TEXT-89" data-name="TEXT">
            <text class="cls-8" transform="translate(774.19 508.22)">14</text>
        </g>
        <g id="TEXT-90" data-name="TEXT">
            <text class="cls-8" transform="translate(800.26 508.19)">15</text>
        </g>
        <g id="TEXT-91" data-name="TEXT">
            <text class="cls-8" transform="translate(826.49 509.69)">16</text>
        </g>
        <g id="TEXT-92" data-name="TEXT">
            <text class="cls-8" transform="translate(784.51 546.94)">13</text>
        </g>
        <g id="TEXT-93" data-name="TEXT">
            <text class="cls-8" transform="translate(854.67 511.07)">17</text>
        </g>
        <g id="TEXT-94" data-name="TEXT">
            <text class="cls-8" transform="translate(840.17 549.75)">18</text>
        </g>
        <g id="TEXT-95" data-name="TEXT">
            <text class="cls-8" transform="translate(838.09 571.56)">19</text>
        </g>
        <g id="TEXT-96" data-name="TEXT">
            <text class="cls-8" transform="translate(837.79 593.81)">20</text>
        </g>
        <g id="TEXT-97" data-name="TEXT">
            <text class="cls-8" transform="translate(836.6 615.62)">21</text>
        </g>
        <g id="TEXT-98" data-name="TEXT">
            <text class="cls-8" transform="translate(835.48 637.05)">22</text>
        </g>
        <g id="TEXT-99" data-name="TEXT">
            <text class="cls-8" transform="translate(834.5 658.75)">23</text>
        </g>
        <g id="TEXT-100" data-name="TEXT">
            <text class="cls-8" transform="translate(832.64 680.37)">24</text>
        </g>
        <g id="TEXT-101" data-name="TEXT">
            <text class="cls-8" transform="translate(831.67 704.64)">25</text>
        </g>
        <g id="TEXT-102" data-name="TEXT">
            <text class="cls-8" transform="translate(830.66 725.77)">26</text>
        </g>
        <g id="TEXT-103" data-name="TEXT">
            <text class="cls-8" transform="translate(830.08 747.4)">27</text>
        </g>
        <g id="TEXT-104" data-name="TEXT">
            <text class="cls-8" transform="translate(828.45 768.87)">28</text>
        </g>
        <g id="TEXT-105" data-name="TEXT">
            <text class="cls-8" transform="translate(827.35 790.8)">29</text>
        </g>
        <g id="TEXT-106" data-name="TEXT">
            <text class="cls-8" transform="translate(840.35 830.85)">30</text>
        </g>
        <g id="TEXT-107" data-name="TEXT">
            <text class="cls-8" transform="translate(812.13 830.11)">31</text>
        </g>
        <g id="TEXT-108" data-name="TEXT">
            <text class="cls-8" transform="translate(783.55 827.51)">32</text>
        </g>
    </g>
    <g id="MZ-5">
        <g id="MZ-5-2" data-name="MZ-5">
            <path class="cls-2" d="M1044.23,505.4,1027.39,852A17.58,17.58,0,0,1,1009,868.75l-84.64-4.11a18.47,18.47,0,0,1-17.55-19.34L922.9,513.43a32.83,32.83,0,0,1,34.38-31.2l69,3.35A18.92,18.92,0,0,1,1044.23,505.4Z"/>
            <rect class="cls-5" x="931.37" y="767.56" width="22.03" height="55" transform="translate(102.41 1697.64) rotate(-87.21)"/>
            <rect class="cls-5" x="932.83" y="745.63" width="22.03" height="55" transform="translate(125.7 1678.22) rotate(-87.21)"/>
            <rect class="cls-5" x="934.19" y="723.45" width="21.47" height="55" transform="translate(148.88 1658.2) rotate(-87.21)"/>
            <rect class="cls-5" x="935.6" y="701.81" width="20.75" height="55" transform="translate(171.5 1638.67) rotate(-87.21)"/>
            <rect class="cls-5" x="936.03" y="679.84" width="22.03" height="55" transform="matrix(0.05, -1, 1, 0.05, 194.45, 1618.84)"/>
            <rect class="cls-5" x="937.12" y="657.39" width="22.03" height="55" transform="translate(217.92 1598.58) rotate(-87.21)"/>
            <rect class="cls-5" x="938.17" y="635.95" width="22.03" height="55" transform="translate(240.32 1579.22) rotate(-87.21)"/>
            <rect class="cls-5" x="986.22" y="770.21" width="22.03" height="55" transform="translate(151.93 1754.95) rotate(-87.21)"/>
            <rect class="cls-5" x="987.14" y="748.1" width="22.35" height="55" transform="translate(175.04 1734.99) rotate(-87.21)"/>
            <rect class="cls-5" x="988.93" y="726.3" width="21.85" height="55" transform="translate(198.29 1715.79) rotate(-87.21)"/>
            <rect class="cls-5" x="989.95" y="704.53" width="21.98" height="55" transform="translate(221.07 1696.16) rotate(-87.21)"/>
            <rect class="cls-5" x="991.17" y="682.53" width="22.03" height="55" transform="translate(244.22 1676.46) rotate(-87.21)"/>
            <rect class="cls-5" x="992.01" y="660.58" width="21.88" height="55" transform="translate(266.87 1656.36) rotate(-87.21)"/>
            <rect class="cls-5" x="993.09" y="638.74" width="21.85" height="55" transform="translate(289.7 1636.64) rotate(-87.21)"/>
            <rect class="cls-5" x="994.06" y="616.82" width="22.04" height="55" transform="translate(312.61 1616.85) rotate(-87.21)"/>
            <rect class="cls-5" x="995.48" y="594.79" width="22.11" height="55" transform="translate(336 1597.34) rotate(-87.21)"/>
            <rect class="cls-5" x="996.38" y="572.78" width="21.97" height="54.97" transform="translate(358.79 1577.22) rotate(-87.21)"/>
            <rect class="cls-5" x="997.26" y="550.26" width="23.03" height="55.09" transform="translate(382.57 1557.27) rotate(-87.21)"/>
            <rect class="cls-5" x="998.95" y="529.16" width="21.57" height="55" transform="translate(404.6 1538.1) rotate(-87.21)"/>
            <rect class="cls-5" x="939.9" y="613.52" width="22.03" height="55" transform="translate(264.38 1559.62) rotate(-87.21)"/>
            <rect class="cls-5" x="940.26" y="591.59" width="22.25" height="55.22" transform="translate(286.62 1539.32) rotate(-87.21)"/>
            <rect class="cls-5" x="941.35" y="569.8" width="22.03" height="55.18" transform="translate(309.34 1519.55) rotate(-87.21)"/>
            <rect class="cls-5" x="942.67" y="547.51" width="21.87" height="55.24" transform="matrix(0.05, -1, 1, 0.05, 332.75, 1499.62)"/>
            <rect class="cls-5" x="943.79" y="526.17" width="21.83" height="55.29" transform="translate(355.08 1480.44) rotate(-87.21)"/>
            <path class="cls-5" d="M1037.72,547.22l1.89-40s-.25-15.55-13.79-15.92c-11.33-.33-13-.33-13-.33l-3.05,54.86Z"/>
            <polygon class="cls-5" points="969.17 807.29 966.26 862.41 993.6 863.83 996.77 809 969.17 807.29"/>
            <polygon class="cls-5" points="941.78 806.01 938.93 861.08 966.26 862.41 968.79 807.32 941.78 806.01"/>
            <path class="cls-5" d="M996.78,809l27.6,1-2.1,42.2s-.59,12.67-14.63,12.17l-14-.5Z"/>
            <path class="cls-5" d="M955.23,542.92l-27.6-1.34,2.65-34.29s9.14-19.86,22.56-19.49c.78,0,4.92.32,4.92.32Z"/>
            <polygon class="cls-5" points="985.2 489.5 982.79 544.56 955.23 542.91 957.74 488.12 985.2 489.5"/>
            <polygon class="cls-5" points="1012.78 491 1009.73 545.86 982.79 544.56 985.2 489.5 1012.78 491"/>
            <path class="cls-5" d="M914.2,804.68l-2,40s-1.34,14.75,12.71,15.58l14,.83L941.78,806Z"/>
        </g>
        <g id="TEXT-109" data-name="TEXT">
            <text class="cls-4" transform="translate(947.97 656.75) rotate(0.14)">MZ-5</text>
        </g>
        <g id="TEXT-110" data-name="TEXT">
            <text class="cls-8" transform="translate(922.87 834.85)">1</text>
        </g>
        <g id="TEXT-111" data-name="TEXT">
            <text class="cls-8" transform="translate(939.41 795.71)">2</text>
        </g>
        <g id="TEXT-112" data-name="TEXT">
            <text class="cls-8" transform="translate(939.05 774.05)">3</text>
        </g>
        <g id="TEXT-113" data-name="TEXT">
            <text class="cls-8" transform="translate(940.31 752.24)">4</text>
        </g>
        <g id="TEXT-114" data-name="TEXT">
            <text class="cls-8" transform="translate(942.38 729.91)">5</text>
        </g>
        <g id="TEXT-115" data-name="TEXT">
            <text class="cls-8" transform="translate(943.61 709.07)">6</text>
        </g>
        <g id="TEXT-116" data-name="TEXT">
            <text class="cls-8" transform="translate(945.11 686.26)">7</text>
        </g>
        <g id="TEXT-117" data-name="TEXT">
            <text class="cls-8" transform="translate(945.41 664.43)">8</text>
        </g>
        <g id="TEXT-118" data-name="TEXT">
            <text class="cls-8" transform="translate(947.02 643.88)">9</text>
        </g>
        <g id="TEXT-119" data-name="TEXT">
            <text class="cls-8" transform="translate(946.9 620.51)">10</text>
        </g>
        <g id="TEXT-120" data-name="TEXT">
            <text class="cls-8" transform="translate(947.33 598.39)">
                <tspan class="cls-9">1</tspan>
                <tspan x="5.01" y="0">1</tspan>
            </text>
        </g>
        <g id="TEXT-121" data-name="TEXT">
            <text class="cls-8" transform="translate(948.4 576.67)">12</text>
        </g>
        <g id="TEXT-122" data-name="TEXT">
            <text class="cls-8" transform="translate(949.01 555.18)">13</text>
        </g>
        <g id="TEXT-123" data-name="TEXT">
            <text class="cls-8" transform="translate(938.69 516.46)">14</text>
        </g>
        <g id="TEXT-124" data-name="TEXT">
            <text class="cls-8" transform="translate(964.76 516.43)">15</text>
        </g>
        <g id="TEXT-125" data-name="TEXT">
            <text class="cls-8" transform="translate(990.99 517.93)">16</text>
        </g>
        <g id="TEXT-126" data-name="TEXT">
            <text class="cls-8" transform="translate(1019.17 519.31)">17</text>
        </g>
        <g id="TEXT-127" data-name="TEXT">
            <text class="cls-8" transform="translate(1004.67 557.99)">18</text>
        </g>
        <g id="TEXT-128" data-name="TEXT">
            <text class="cls-8" transform="translate(1002.59 579.8)">19</text>
        </g>
        <g id="TEXT-129" data-name="TEXT">
            <text class="cls-8" transform="translate(1002.29 602.05)">20</text>
        </g>
        <g id="TEXT-130" data-name="TEXT">
            <text class="cls-8" transform="translate(1001.1 623.86)">21</text>
        </g>
        <g id="TEXT-131" data-name="TEXT">
            <text class="cls-8" transform="translate(999.98 645.3)">22</text>
        </g>
        <g id="TEXT-132" data-name="TEXT">
            <text class="cls-8" transform="translate(999 666.99)">23</text>
        </g>
        <g id="TEXT-133" data-name="TEXT">
            <text class="cls-8" transform="translate(997.14 688.61)">24</text>
        </g>
        <g id="TEXT-134" data-name="TEXT">
            <text class="cls-8" transform="translate(996.16 712.89)">25</text>
        </g>
        <g id="TEXT-135" data-name="TEXT">
            <text class="cls-8" transform="translate(995.16 734.02)">26</text>
        </g>
        <g id="TEXT-136" data-name="TEXT">
            <text class="cls-8" transform="translate(994.57 755.64)">27</text>
        </g>
        <g id="TEXT-137" data-name="TEXT">
            <text class="cls-8" transform="translate(992.95 777.11)">28</text>
        </g>
        <g id="TEXT-138" data-name="TEXT">
            <text class="cls-8" transform="translate(991.85 799.04)">29</text>
        </g>
        <g id="TEXT-139" data-name="TEXT">
            <text class="cls-8" transform="translate(1004.85 839.09)">30</text>
        </g>
        <g id="TEXT-140" data-name="TEXT">
            <text class="cls-8" transform="translate(976.63 838.35)">31</text>
        </g>
        <g id="TEXT-141" data-name="TEXT">
            <text class="cls-8" transform="translate(948.04 835.75)">32</text>
        </g>
    </g>
    <g id="MZ-12">
        <g id="MZ-12-2" data-name="MZ-12">
            <rect class="cls-2" x="1459.31" y="782.96" width="403.75" height="119.32" rx="16.98" ry="16.98" transform="translate(42.84 -79.6) rotate(2.78)"/>
            <rect class="cls-5" x="1651.51" y="787.69" width="22.03" height="54.83" transform="translate(41.5 -79.7) rotate(2.78)"/>
            <rect class="cls-5" x="1672.95" y="788.73" width="22.03" height="54.83" transform="translate(41.58 -80.74) rotate(2.78)"/>
            <rect class="cls-5" x="1648.39" y="842.33" width="21.88" height="54.83" transform="translate(44.15 -79.48) rotate(2.78)"/>
            <rect class="cls-5" x="1670.25" y="843.39" width="21.85" height="54.83" transform="translate(44.23 -80.54) rotate(2.78)"/>
            <rect class="cls-5" x="1692.08" y="844.46" width="22.04" height="54.83" transform="translate(44.31 -81.6) rotate(2.78)"/>
            <rect class="cls-5" x="1714.08" y="845.91" width="22.11" height="54.83" transform="translate(44.4 -82.67) rotate(2.78)"/>
            <rect class="cls-5" x="1736.17" y="846.75" width="21.97" height="54.8" transform="translate(44.47 -83.74) rotate(2.78)"/>
            <rect class="cls-5" x="1758.1" y="848.1" width="23.03" height="54.92" transform="translate(44.56 -84.82) rotate(2.78)"/>
            <rect class="cls-5" x="1779.98" y="849.09" width="21.57" height="54.83" transform="translate(44.63 -85.85) rotate(2.78)"/>
            <rect class="cls-5" x="1695.38" y="790.46" width="22.03" height="54.83" transform="translate(41.69 -81.82) rotate(2.78)"/>
            <rect class="cls-5" x="1717.1" y="790.82" width="22.25" height="55.05" transform="translate(41.74 -82.88) rotate(2.78)"/>
            <rect class="cls-5" x="1739.02" y="791.81" width="22.03" height="55.01" transform="translate(41.81 -83.94) rotate(2.78)"/>
            <rect class="cls-5" x="1761.35" y="793.02" width="21.87" height="55.07" transform="translate(41.9 -85.02) rotate(2.78)"/>
            <rect class="cls-5" x="1782.69" y="794.09" width="21.83" height="55.12" transform="translate(41.98 -86.05) rotate(2.78)"/>
            <path class="cls-5" d="M1800.2,904.42l40,1.89s15.5,1.5,15.88-12,.38-14.75.38-14.75l-54.86-3Z"/>
            <path class="cls-5" d="M1804.5,822.17l1.34-27.52,42,2.28s12.5.38,12.13,13.75-.62,14-.62,14Z"/>
            <polygon class="cls-5" points="1857.92 852.06 1802.86 849.65 1804.5 822.17 1859.29 824.68 1857.92 852.06"/>
            <polygon class="cls-5" points="1856.42 879.56 1801.56 876.51 1802.86 849.65 1857.92 852.06 1856.42 879.56"/>
            <path class="cls-6" d="M1480,777.67s-13.83-.83-14.58,13.67-4.42,83.08-4.42,83.08,0,12.25,13.5,13S1647.1,896,1647.1,896l5.23-109.51Z"/>
        </g>
        <g id="TEXT-142" data-name="TEXT">
            <text class="cls-4" transform="translate(1702.98 849.95) rotate(0.14)">MZ-12</text>
        </g>
        <g id="TEXT-143" data-name="TEXT">
            <text class="cls-4" transform="translate(1517.08 843.05) rotate(0.51)">A.<tspan class="cls-7" x="14.17" y="0">V</tspan>
                <tspan x="22.8" y="0">.-4</tspan>
            </text>
        </g>
        <g id="TEXT-144" data-name="TEXT">
            <text class="cls-8" transform="translate(1655.68 869.89)">1</text>
        </g>
        <g id="TEXT-145" data-name="TEXT">
            <text class="cls-8" transform="translate(1658.48 814.66)">2</text>
        </g>
        <g id="TEXT-146" data-name="TEXT">
            <text class="cls-8" transform="translate(1679.85 816.59)">3</text>
        </g>
        <g id="TEXT-147" data-name="TEXT">
            <text class="cls-8" transform="translate(1701.22 817.94)">4</text>
        </g>
        <g id="TEXT-148" data-name="TEXT">
            <text class="cls-8" transform="translate(1724.01 820.23)">5</text>
        </g>
        <g id="TEXT-149" data-name="TEXT">
            <text class="cls-8" transform="translate(1745.79 821.19)">6</text>
        </g>
        <g id="TEXT-150" data-name="TEXT">
            <text class="cls-8" transform="translate(1767.81 822.12)">7</text>
        </g>
        <g id="TEXT-151" data-name="TEXT">
            <text class="cls-8" transform="translate(1787.26 823.07)">8</text>
        </g>
        <g id="TEXT-152" data-name="TEXT">
            <text class="cls-8" transform="translate(1826.43 811.3)">9</text>
        </g>
        <g id="TEXT-153" data-name="TEXT">
            <text class="cls-8" transform="translate(1825.15 836.63)">10</text>
        </g>
        <g id="TEXT-154" data-name="TEXT">
            <text class="cls-8" transform="translate(1825.04 866.14)">
                <tspan class="cls-9">1</tspan>
                <tspan x="5.01" y="0">1</tspan>
            </text>
        </g>
        <g id="TEXT-155" data-name="TEXT">
            <text class="cls-8" transform="translate(1822.87 892.19)">12</text>
        </g>
        <g id="TEXT-156" data-name="TEXT">
            <text class="cls-8" transform="translate(1784.48 877.07)">13</text>
        </g>
        <g id="TEXT-157" data-name="TEXT">
            <text class="cls-8" transform="translate(1763.49 876.78)">14</text>
        </g>
        <g id="TEXT-158" data-name="TEXT">
            <text class="cls-8" transform="translate(1740.8 875.53)">15</text>
        </g>
        <g id="TEXT-159" data-name="TEXT">
            <text class="cls-8" transform="translate(1719.23 874.28)">16</text>
        </g>
        <g id="TEXT-160" data-name="TEXT">
            <text class="cls-8" transform="translate(1697.3 873.18)">17</text>
        </g>
        <g id="TEXT-161" data-name="TEXT">
            <text class="cls-8" transform="translate(1675.36 872.08)">18</text>
        </g>
    </g>
    <g id="MZ-66">
        <g id="TEXT-162" data-name="TEXT">
            <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2263.21, 946.66)">6</text>
            <g id="MZ-66-2" data-name="MZ-66">
                <path class="cls-2" d="M2378,700.73l-214.33,345.44c-5.13,8.38-3.48,19.19,4.71,24.21L2241,1116c8.19,5,21.87,3,27-5.33l241.33-387.83c6.83-11.33,0-28.67-16.67-30.83l-91.5-4.83C2388.05,686.56,2383.13,692.35,2378,700.73Z"/>
                <rect class="cls-5" x="2253.61" y="1020.39" width="22.03" height="54.91" transform="translate(188.13 2431.56) rotate(-58.51)"/>
                <rect class="cls-5" x="2265.46" y="1001.91" width="22.03" height="54.83" transform="translate(209.58 2432.82) rotate(-58.51)"/>
                <rect class="cls-5" x="2276.94" y="983.17" width="22.03" height="54.83" transform="translate(231.04 2433.65) rotate(-58.51)"/>
                <rect class="cls-5" x="2288.82" y="964.23" width="21.47" height="54.83" transform="translate(252.73 2434.5) rotate(-58.51)"/>
                <polygon class="cls-5" points="2293.88 949.5 2282.14 968.17 2328.74 996.55 2340.01 978.16 2293.88 949.5"/>
                <rect class="cls-5" x="2311.99" y="927.01" width="22.03" height="54.83" transform="translate(295.67 2436.73) rotate(-58.51)"/>
                <rect class="cls-5" x="2324.03" y="908.43" width="22.03" height="54.83" transform="translate(317.27 2438.12) rotate(-58.51)"/>
                <rect class="cls-5" x="2335.25" y="890.12" width="22.03" height="54.83" transform="translate(338.23 2438.94) rotate(-58.51)"/>
                <rect class="cls-5" x="2206.6" y="991.24" width="22.03" height="55.49" transform="translate(190.28 2377.69) rotate(-58.51)"/>
                <rect class="cls-5" x="2218.35" y="973.05" width="22.03" height="54.83" transform="translate(211.68 2378.86) rotate(-58.51)"/>
                <rect class="cls-5" x="2230.24" y="953.92" width="22.35" height="54.83" transform="translate(233.76 2380.01) rotate(-58.51)"/>
                <rect class="cls-5" x="2242.12" y="935.75" width="21.85" height="54.83" transform="translate(254.81 2381.25) rotate(-58.51)"/>
                <polygon class="cls-5" points="2247.32 920.94 2235.22 939.79 2281.97 968.44 2293.68 949.34 2247.32 920.94"/>
                <rect class="cls-5" x="2265.43" y="898.45" width="22.03" height="54.83" transform="translate(297.79 2383.38) rotate(-58.51)"/>
                <rect class="cls-5" x="2277.05" y="879.6" width="21.88" height="54.83" transform="translate(319.38 2384.23) rotate(-58.51)"/>
                <rect class="cls-5" x="2288.47" y="860.87" width="21.99" height="54.83" transform="translate(340.83 2385.06) rotate(-58.51)"/>
                <polygon class="cls-5" points="2293.3 845.87 2281.83 864.59 2328.59 893.24 2340.22 875.04 2293.3 845.87"/>
                <rect class="cls-5" x="2311.61" y="823.98" width="21.87" height="54.83" transform="translate(383.31 2387.12) rotate(-58.51)"/>
                <rect class="cls-5" x="2323.43" y="805.32" width="21.97" height="54.8" transform="translate(404.91 2388.32) rotate(-58.51)"/>
                <polygon class="cls-5" points="2328.07 790.51 2316.63 809.19 2363.46 837.88 2374.85 819.12 2328.07 790.51"/>
                <rect class="cls-5" x="2346.51" y="768.16" width="22.25" height="54.83" transform="translate(447.67 2390.38) rotate(-58.51)"/>
                <polygon class="cls-5" points="2340.15 875 2328.44 893.56 2375.5 922.39 2387.23 903.74 2340.15 875"/>
                <rect class="cls-5" x="2358.28" y="852.56" width="22.25" height="55.05" transform="translate(381.23 2440.79) rotate(-58.51)"/>
                <polygon class="cls-5" points="2363.42 837.57 2351.92 856.36 2398.55 885.55 2410.09 866.72 2363.42 837.57"/>
                <polygon class="cls-5" points="2374.85 819.12 2363.52 837.67 2410.09 866.72 2421.48 848.42 2374.85 819.12"/>
                <polygon class="cls-5" points="2386.25 800.98 2374.85 819.59 2421.48 848.42 2433.44 829.47 2386.25 800.98"/>
                <rect class="cls-5" x="2404.72" y="778.21" width="21.83" height="55.12" transform="translate(466.68 2444.71) rotate(-58.51)"/>
                <polygon class="cls-5" points="2351.36 752.98 2340.05 771.65 2387.05 800.44 2398.45 781.83 2351.36 752.98"/>
                <polygon class="cls-5" points="2363.33 734.23 2351.45 752.87 2398.45 781.66 2409.79 762.61 2363.33 734.23"/>
                <polygon class="cls-5" points="2374.73 715.62 2363.33 734.23 2409.79 762.87 2421.67 743.96 2374.73 715.62"/>
                <polygon class="cls-5" points="2386.42 697 2374.73 715.62 2421.28 744.49 2432.66 726.04 2386.42 697"/>
                <polygon class="cls-5" points="2432.66 726.04 2421.26 744.65 2468.26 773.44 2479.36 754.78 2432.66 726.04"/>
                <polygon class="cls-5" points="2421.26 744.65 2409.51 763.02 2456.51 791.81 2468.31 773.35 2421.26 744.65"/>
                <polygon class="cls-5" points="2409.51 763.02 2398.1 781.63 2444.84 810.86 2456.51 791.81 2409.51 763.02"/>
                <polygon class="cls-5" points="2235.52 1042.87 2206.87 1090.06 2183.55 1075.89 2211.82 1028.79 2235.52 1042.87"/>
                <polygon class="cls-5" points="2258.81 1057.2 2230.14 1104.3 2206.87 1090.06 2235.82 1043.12 2258.81 1057.2"/>
                <path class="cls-5" d="M2211.82,1028.79l-23.28-14.7-22,36.06s-6.65,10.8,5.2,18.27l11.85,7.47Z"/>
                <path class="cls-5" d="M2282.28,1071.58l-20.86,34.18s-7.2,12.94-19.24,5.74l-12-7.2,28.67-47.11Z"/>
                <path class="cls-5" d="M2465.67,695.33l-66-3.33s-9-1.71-13.25,5l56.4,35.29Z"/>
                <path class="cls-5" d="M2501.67,719.33s6.5-19.33-14.33-23.17c-6.33-.17-21.67-.83-21.67-.83l-22.85,37,36.54,22.49Z"/>
            </g>
            <g id="TEXT-163" data-name="TEXT">
                <text class="cls-4" transform="translate(2295.81 905.78) rotate(0.51)">MZ-66</text>
            </g>
            <g id="TEXT-164" data-name="TEXT">
                <text class="cls-8" transform="translate(2183.44 1046.03)">1</text>
            </g>
            <g id="TEXT-165" data-name="TEXT">
                <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2215.98, 1019.87)">2</text>
            </g>
            <g id="TEXT-166" data-name="TEXT">
                <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2228.79, 1003.36)">3</text>
            </g>
            <g id="TEXT-167" data-name="TEXT">
                <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2240, 984.17)">4</text>
            </g>
            <g id="TEXT-168" data-name="TEXT">
                <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2251.6, 964.87)">5</text>
            </g>
            <g id="TEXT-169" data-name="TEXT">
                <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2422.94, 711.8)">19</text>
            </g>
            <g id="TEXT-170" data-name="TEXT">
                <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2471.5, 724.27)">20</text>
            </g>
            <g id="TEXT-171" data-name="TEXT">
                <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2307.6, 977.17)">33</text>
            </g>
            <g id="TEXT-172" data-name="TEXT">
                <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2285.28, 1014.65)">35</text>
            </g>
            <g id="TEXT-173" data-name="TEXT">
                <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2297.3, 995.7)">34</text>
            </g>
            <g id="TEXT-174" data-name="TEXT">
                <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2273.68, 1033.3)">36</text>
            </g>
            <g id="TEXT-175" data-name="TEXT">
                <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2261.79, 1050.18)">37</text>
            </g>
            <g id="TEXT-176" data-name="TEXT">
                <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2255.03, 1091.57)">38</text>
            </g>
            <g id="TEXT-177" data-name="TEXT">
                <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2230.62, 1079.06)">39</text>
            </g>
            <g id="TEXT-178" data-name="TEXT">
                <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2206.83, 1066.24)">40</text>
            </g>
        </g>
        <g id="TEXT-179" data-name="TEXT">
            <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2308.89, 872.49)">10</text>
        </g>
        <g id="TEXT-180" data-name="TEXT">
            <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2320.24, 854.2)">
                <tspan class="cls-9">1</tspan>
                <tspan x="5.01" y="0">1</tspan>
            </text>
        </g>
        <g id="TEXT-181" data-name="TEXT">
            <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2331.77, 835.54)">12</text>
        </g>
        <g id="TEXT-182" data-name="TEXT">
            <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2343.67, 816.98)">13</text>
        </g>
        <g id="TEXT-183" data-name="TEXT">
            <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2355.28, 798.33)">14</text>
        </g>
        <g id="TEXT-184" data-name="TEXT">
            <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2413.42, 809.28)">24</text>
        </g>
        <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2390.21, 846.57)">26</text>
        <g id="TEXT-185" data-name="TEXT">
            <g id="TEXT-186" data-name="TEXT">
                <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2401.82, 827.92)">25</text>
            </g>
        </g>
        <g id="TEXT-187" data-name="TEXT">
            <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2378.61, 865.21)">27</text>
        </g>
        <g id="TEXT-188" data-name="TEXT">
            <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2367.01, 883.86)">28</text>
        </g>
        <g id="TEXT-189" data-name="TEXT">
            <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2355.4, 902.5)">29</text>
        </g>
        <g id="TEXT-190" data-name="TEXT">
            <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2343.8, 921.15)">30</text>
        </g>
        <g id="TEXT-191" data-name="TEXT">
            <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2332.2, 939.79)">31</text>
        </g>
        <g id="TEXT-192" data-name="TEXT">
            <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2366.43, 780.09)">15</text>
        </g>
        <g id="TEXT-193" data-name="TEXT">
            <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2378.03, 761.45)">16</text>
        </g>
        <g id="TEXT-194" data-name="TEXT">
            <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2389.64, 742.8)">17</text>
        </g>
        <g id="TEXT-195" data-name="TEXT">
            <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2401.24, 724.16)">18</text>
        </g>
        <g id="TEXT-196" data-name="TEXT">
            <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2447.85, 753.17)">21</text>
        </g>
        <g id="TEXT-197" data-name="TEXT">
            <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2436.46, 771.84)">22</text>
        </g>
        <g id="TEXT-198" data-name="TEXT">
            <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2424.21, 791.23)">23</text>
        </g>
        <g id="TEXT-199" data-name="TEXT">
            <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2274.71, 927.85)">7</text>
        </g>
        <g id="TEXT-200" data-name="TEXT">
            <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2286.86, 909.13)">8</text>
        </g>
        <g id="TEXT-201" data-name="TEXT">
            <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2298.31, 891.07)">9</text>
        </g>
        <g id="TEXT-202" data-name="TEXT">
            <text class="cls-8" transform="matrix(0.49, -0.87, 0.87, 0.49, 2319.21, 958.52)">32</text>
        </g>
    </g>
    <g id="MZ.11">
        <g id="MZ-11">
            <path class="cls-2" d="M2209.25,928.92l-319.92-15.83c-8-.39-16.45-8.39-16-17.58l3.79-83.54c.45-9.19,9.18-18.35,17.13-18l370.57,18.76c10.26,1.08,19.76,13.91,13.26,24.83l-48.33,78.25C2224.09,926.58,2217.2,929.3,2209.25,928.92Z"/>
            <rect class="cls-5" x="1936.43" y="800.59" width="22.03" height="54.91" transform="translate(42.47 -93.51) rotate(2.78)"/>
            <rect class="cls-5" x="1958.38" y="801.77" width="22.03" height="54.83" transform="translate(42.55 -94.57) rotate(2.78)"/>
            <rect class="cls-5" x="1980.31" y="803.22" width="22.03" height="54.83" transform="translate(42.64 -95.63) rotate(2.78)"/>
            <rect class="cls-5" x="2002.77" y="804.3" width="21.47" height="54.83" transform="translate(42.72 -96.71) rotate(2.78)"/>
            <rect class="cls-5" x="2024.77" y="805.35" width="20.75" height="54.83" transform="translate(42.8 -97.76) rotate(2.78)"/>
            <rect class="cls-5" x="2046.1" y="806.41" width="22.03" height="54.83" transform="translate(42.88 -98.82) rotate(2.78)"/>
            <rect class="cls-5" x="2068.55" y="807.5" width="22.03" height="54.83" transform="translate(42.96 -99.91) rotate(2.78)"/>
            <rect class="cls-5" x="2089.99" y="808.55" width="22.03" height="54.83" transform="translate(43.03 -100.95) rotate(2.78)"/>
            <rect class="cls-5" x="1933.8" y="855.4" width="22.03" height="55.49" transform="translate(45.14 -93.31) rotate(2.78)"/>
            <rect class="cls-5" x="1955.72" y="856.45" width="22.03" height="54.83" transform="translate(45.2 -94.38) rotate(2.78)"/>
            <rect class="cls-5" x="1977.67" y="857.52" width="22.35" height="54.83" transform="translate(45.28 -95.45) rotate(2.78)"/>
            <rect class="cls-5" x="1999.72" y="859.06" width="21.85" height="54.83" transform="translate(45.38 -96.5) rotate(2.78)"/>
            <rect class="cls-5" x="2021.43" y="860.15" width="21.98" height="54.83" transform="translate(45.45 -97.56) rotate(2.78)"/>
            <rect class="cls-5" x="2043.41" y="861.38" width="22.03" height="54.83" transform="translate(45.54 -98.63) rotate(2.78)"/>
            <rect class="cls-5" x="2065.43" y="862.15" width="21.88" height="54.83" transform="translate(45.6 -99.69) rotate(2.78)"/>
            <rect class="cls-5" x="2087.29" y="863.21" width="21.85" height="54.83" transform="translate(45.68 -100.75) rotate(2.78)"/>
            <rect class="cls-5" x="2109.11" y="864.27" width="22.04" height="54.83" transform="translate(45.76 -101.81) rotate(2.78)"/>
            <rect class="cls-5" x="2131.11" y="865.72" width="22.11" height="54.83" transform="translate(45.85 -102.88) rotate(2.78)"/>
            <rect class="cls-5" x="2153.21" y="866.57" width="21.97" height="54.8" transform="translate(45.92 -103.94) rotate(2.78)"/>
            <rect class="cls-5" x="2112.43" y="809.66" width="22.03" height="55.45" transform="translate(43.13 -102.03) rotate(2.78)"/>
            <rect class="cls-5" x="2134.13" y="810.63" width="22.25" height="55.05" transform="translate(43.19 -103.09) rotate(2.78)"/>
            <rect class="cls-5" x="2156.05" y="811.63" width="22.03" height="55.01" transform="translate(43.26 -104.15) rotate(2.78)"/>
            <rect class="cls-5" x="2178.2" y="812.76" width="19" height="62.81" transform="translate(43.53 -105.14) rotate(2.78)"/>
            <rect class="cls-5" x="2197.18" y="813.76" width="20.55" height="62.78" transform="translate(43.6 -106.1) rotate(2.78)"/>
            <polygon class="cls-5" points="1935.16 854.9 1880.04 852 1878.62 879.25 1933.45 882.41 1935.16 854.9"/>
            <polygon class="cls-5" points="1936.44 827.58 1881.37 824.75 1880.04 852 1935.13 854.51 1936.44 827.58"/>
            <path class="cls-5" d="M1933.45,882.41l-1,27.51-42.2-2.1s-12.67-.58-12.17-14.58l.5-14Z"/>
            <path class="cls-5" d="M1937.78,800.09l-40-2s-14.75-1.33-15.58,12.67l-.83,14,55.07,2.84Z"/>
            <path class="cls-5" d="M2268.67,844.17l6-10.34s5.17-13.5-10.5-16.67c-14.83-1-44.93-2.88-44.93-2.88l-1.32,27.2Z"/>
            <polygon class="cls-5" points="2235.17 897.33 2247.67 878.17 2176.68 875.08 2175.19 893.97 2235.17 897.33"/>
            <path class="cls-5" d="M2207.45,924s11,3.67,16.88-8.83c8-12.67,10.83-17.83,10.83-17.83l-60-3.36-1.36,27.9Z"/>
            <polygon class="cls-5" points="2247.88 877.96 2268.67 844.17 2217.91 841.5 2216.19 877 2247.88 877.96"/>
        </g>
        <g id="TEXT-203" data-name="TEXT">
            <text class="cls-4" transform="translate(2041.38 856.26) rotate(0.51)">MZ-<tspan class="cls-10" x="26.65" y="0">1</tspan>
                <tspan x="33.88" y="0">1</tspan>
            </text>
        </g>
        <g id="TEXT-204" data-name="TEXT">
            <text class="cls-8" transform="translate(1901.83 897.23)">1</text>
        </g>
        <g id="TEXT-205" data-name="TEXT">
            <text class="cls-8" transform="translate(1902.74 869.11)">2</text>
        </g>
        <g id="TEXT-206" data-name="TEXT">
            <text class="cls-8" transform="translate(1903.96 842.82)">3</text>
        </g>
        <g id="TEXT-207" data-name="TEXT">
            <text class="cls-8" transform="translate(1905.2 817.94)">4</text>
        </g>
        <g id="TEXT-208" data-name="TEXT">
            <text class="cls-8" transform="translate(1943.35 831.21)">5</text>
        </g>
        <g id="TEXT-209" data-name="TEXT">
            <text class="cls-8" transform="translate(1965.12 832.18)">6</text>
        </g>
        <g id="TEXT-210" data-name="TEXT">
            <text class="cls-8" transform="translate(1987.14 833.11)">7</text>
        </g>
        <g id="TEXT-211" data-name="TEXT">
            <text class="cls-8" transform="translate(2009.4 834.65)">8</text>
        </g>
        <g id="TEXT-212" data-name="TEXT">
            <text class="cls-8" transform="translate(2030.75 835.89)">9</text>
        </g>
        <g id="TEXT-213" data-name="TEXT">
            <text class="cls-8" transform="translate(2052.13 836.14)">10</text>
        </g>
        <g id="TEXT-214" data-name="TEXT">
            <text class="cls-8" transform="translate(2073.64 837.18)">
                <tspan class="cls-9">1</tspan>
                <tspan x="5.01" y="0">1</tspan>
            </text>
        </g>
        <g id="TEXT-215" data-name="TEXT">
            <text class="cls-8" transform="translate(2095.55 838.21)">12</text>
        </g>
        <g id="TEXT-216" data-name="TEXT">
            <text class="cls-8" transform="translate(2117.55 839.61)">13</text>
        </g>
        <g id="TEXT-217" data-name="TEXT">
            <text class="cls-8" transform="translate(2139.11 840.63)">14</text>
        </g>
        <g id="TEXT-218" data-name="TEXT">
            <text class="cls-8" transform="translate(2160.28 841.58)">15</text>
        </g>
        <g id="TEXT-219" data-name="TEXT">
            <text class="cls-8" transform="translate(2183.63 842.64)">16</text>
        </g>
        <g id="TEXT-220" data-name="TEXT">
            <text class="cls-8" transform="translate(2135.27 895.34)">23</text>
        </g>
        <g id="TEXT-221" data-name="TEXT">
            <text class="cls-8" transform="translate(2114.26 894.66)">24</text>
        </g>
        <g id="TEXT-222" data-name="TEXT">
            <text class="cls-8" transform="translate(2092.66 892.46)">25</text>
        </g>
        <g id="TEXT-223" data-name="TEXT">
            <text class="cls-8" transform="translate(2070.8 892.27)">26</text>
        </g>
        <g id="TEXT-224" data-name="TEXT">
            <text class="cls-8" transform="translate(2048.28 891.27)">27</text>
        </g>
        <g id="TEXT-225" data-name="TEXT">
            <text class="cls-8" transform="translate(2026.35 890.09)">28</text>
        </g>
        <g id="TEXT-226" data-name="TEXT">
            <text class="cls-8" transform="translate(2004.42 889.05)">29</text>
        </g>
        <g id="TEXT-227" data-name="TEXT">
            <text class="cls-8" transform="translate(1982.48 888)">30</text>
        </g>
        <g id="TEXT-228" data-name="TEXT">
            <text class="cls-8" transform="translate(1960.54 886.96)">31</text>
        </g>
        <g id="TEXT-229" data-name="TEXT">
            <text class="cls-8" transform="translate(1938.61 885.92)">32</text>
        </g>
        <g id="TEXT-230" data-name="TEXT">
            <text class="cls-8" transform="translate(2202.15 845.6)">17</text>
        </g>
        <g id="TEXT-231" data-name="TEXT">
            <text class="cls-8" transform="translate(2238.77 830.57)">18</text>
        </g>
        <g id="TEXT-232" data-name="TEXT">
            <text class="cls-8" transform="translate(2232.18 861.47)">19</text>
        </g>
        <g id="TEXT-233" data-name="TEXT">
            <text class="cls-8" transform="translate(2201.71 888.48)">20</text>
        </g>
        <g id="TEXT-234" data-name="TEXT">
            <text class="cls-8" transform="translate(2190.91 910.35)">21</text>
        </g>
        <g id="TEXT-235" data-name="TEXT">
            <text class="cls-8" transform="translate(2157.21 896.44)">22</text>
        </g>
    </g>
    <g id="MZ-10">
        <path class="cls-2" d="M2286.11,800.9l-389.94-18.52A17,17,0,0,1,1880,764.6l4.21-86.77A17,17,0,0,1,1902,661.7l442.11,23.07c9.41.46,17.87,11.23,15.11,21.73l-50.63,82.57C2302,800,2295.51,801.36,2286.11,800.9Z"/>
        <rect class="cls-5" x="1943.1" y="669.51" width="22.03" height="54.91" transform="translate(36.12 -93.98) rotate(2.78)"/>
        <rect class="cls-5" x="1965.04" y="670.69" width="22.03" height="54.83" transform="translate(36.2 -95.05) rotate(2.78)"/>
        <rect class="cls-5" x="1986.98" y="672.14" width="22.03" height="54.83" transform="translate(36.29 -96.11) rotate(2.78)"/>
        <rect class="cls-5" x="2009.44" y="673.22" width="21.47" height="54.83" transform="translate(36.37 -97.19) rotate(2.78)"/>
        <rect class="cls-5" x="2031.44" y="674.27" width="20.75" height="54.83" transform="translate(36.45 -98.23) rotate(2.78)"/>
        <rect class="cls-5" x="2052.76" y="675.34" width="22.03" height="54.83" transform="translate(36.53 -99.3) rotate(2.78)"/>
        <rect class="cls-5" x="2075.21" y="676.43" width="22.03" height="54.83" transform="translate(36.6 -100.39) rotate(2.78)"/>
        <rect class="cls-5" x="2096.65" y="677.47" width="22.03" height="54.83" transform="translate(36.68 -101.43) rotate(2.78)"/>
        <rect class="cls-5" x="1940.47" y="724.32" width="22.03" height="55.49" transform="translate(38.79 -93.79) rotate(2.78)"/>
        <rect class="cls-5" x="1962.39" y="725.37" width="22.03" height="54.83" transform="translate(38.85 -94.85) rotate(2.78)"/>
        <rect class="cls-5" x="1984.34" y="726.45" width="22.35" height="54.83" transform="translate(38.92 -95.93) rotate(2.78)"/>
        <rect class="cls-5" x="2006.39" y="727.99" width="21.85" height="54.83" transform="translate(39.02 -96.98) rotate(2.78)"/>
        <rect class="cls-5" x="2028.1" y="729.07" width="21.98" height="54.83" transform="translate(39.1 -98.04) rotate(2.78)"/>
        <rect class="cls-5" x="2050.08" y="730.3" width="22.03" height="54.83" transform="translate(39.19 -99.1) rotate(2.78)"/>
        <rect class="cls-5" x="2072.09" y="731.07" width="21.88" height="54.83" transform="translate(39.25 -100.17) rotate(2.78)"/>
        <rect class="cls-5" x="2093.95" y="732.13" width="21.85" height="54.83" transform="translate(39.33 -101.23) rotate(2.78)"/>
        <rect class="cls-5" x="2115.78" y="733.2" width="22.04" height="54.83" transform="translate(39.41 -102.29) rotate(2.78)"/>
        <rect class="cls-5" x="2137.78" y="734.64" width="22.11" height="54.83" transform="translate(39.5 -103.36) rotate(2.78)"/>
        <rect class="cls-5" x="2159.87" y="735.49" width="21.97" height="54.8" transform="translate(39.57 -104.42) rotate(2.78)"/>
        <rect class="cls-5" x="2181.8" y="736.84" width="23.03" height="54.92" transform="translate(39.66 -105.51) rotate(2.78)"/>
        <rect class="cls-5" x="2203.68" y="737.83" width="21.57" height="54.83" transform="translate(39.73 -106.54) rotate(2.78)"/>
        <rect class="cls-5" x="2119.1" y="678.58" width="22.03" height="55.45" transform="translate(36.78 -102.51) rotate(2.78)"/>
        <rect class="cls-5" x="2140.8" y="679.55" width="22.25" height="55.05" transform="translate(36.84 -103.57) rotate(2.78)"/>
        <rect class="cls-5" x="2162.72" y="680.55" width="22.03" height="55.01" transform="translate(36.91 -104.63) rotate(2.78)"/>
        <rect class="cls-5" x="2185.05" y="681.76" width="21.87" height="55.07" transform="translate(37 -105.7) rotate(2.78)"/>
        <rect class="cls-5" x="2206.39" y="682.83" width="21.83" height="55.12" transform="translate(37.08 -106.74) rotate(2.78)"/>
        <rect class="cls-5" x="2228.14" y="683.83" width="21.83" height="55.12" transform="translate(37.15 -107.79) rotate(2.78)"/>
        <rect class="cls-5" x="2225.47" y="738.84" width="21.83" height="55.12" transform="translate(39.82 -107.6) rotate(2.78)"/>
        <rect class="cls-5" x="2247" y="739.42" width="21.83" height="55.12" transform="translate(39.87 -108.64) rotate(2.78)"/>
        <rect class="cls-5" x="2249.64" y="685.09" width="21.83" height="55.12" transform="translate(37.24 -108.83) rotate(2.78)"/>
        <polygon class="cls-5" points="1941.83 723.82 1886.7 720.92 1885.29 748.17 1940.12 751.34 1941.83 723.82"/>
        <polygon class="cls-5" points="1943.11 696.51 1888.04 693.67 1886.7 720.92 1941.8 723.43 1943.11 696.51"/>
        <path class="cls-5" d="M1940.12,751.34l-1,27.51-42.2-2.1s-12.67-.58-12.17-14.58l.5-14Z"/>
        <path class="cls-5" d="M1944.44,669l-40-2s-14.75-1.33-15.58,12.67l-.83,14,55.07,2.84Z"/>
        <path class="cls-11" d="M2287.44,796.13s12,2.13,15.88-7.5c6.25-9.94,49.81-80,49.81-80s9-17.49-13-19.83c-21.83-1-67.38-3.19-67.38-3.19L2267.48,795Z"/>
        <g id="TEXT-236" data-name="TEXT">
            <text class="cls-4" transform="translate(2044.51 727.82) rotate(0.51)">MZ-10</text>
        </g>
        <g id="TEXT-237" data-name="TEXT">
            <text class="cls-4" transform="translate(2270.34 742.93) rotate(0.51)">A.<tspan class="cls-7" x="14.17" y="0">V</tspan>
                <tspan x="22.8" y="0">.-3</tspan>
            </text>
        </g>
        <g id="TEXT-238" data-name="TEXT">
            <text class="cls-8" transform="translate(1908.42 765.63)">1</text>
        </g>
        <g id="TEXT-239" data-name="TEXT">
            <text class="cls-8" transform="translate(1909.33 737.51)">2</text>
        </g>
        <g id="TEXT-240" data-name="TEXT">
            <text class="cls-8" transform="translate(1910.56 711.22)">3</text>
        </g>
        <g id="TEXT-241" data-name="TEXT">
            <text class="cls-8" transform="translate(1911.8 686.34)">4</text>
        </g>
        <g id="TEXT-242" data-name="TEXT">
            <text class="cls-8" transform="translate(1949.94 699.62)">5</text>
        </g>
        <g id="TEXT-243" data-name="TEXT">
            <text class="cls-8" transform="translate(1971.71 700.58)">6</text>
        </g>
        <g id="TEXT-244" data-name="TEXT">
            <text class="cls-8" transform="translate(1993.73 701.51)">7</text>
        </g>
        <g id="TEXT-245" data-name="TEXT">
            <text class="cls-8" transform="translate(2015.99 703.05)">8</text>
        </g>
        <g id="TEXT-246" data-name="TEXT">
            <text class="cls-8" transform="translate(2037.34 704.29)">9</text>
        </g>
        <g id="TEXT-247" data-name="TEXT">
            <text class="cls-8" transform="translate(2058.72 704.54)">10</text>
        </g>
        <g id="TEXT-248" data-name="TEXT">
            <text class="cls-8" transform="translate(2080.23 705.58)">
                <tspan class="cls-9">1</tspan>
                <tspan x="5.01" y="0">1</tspan>
            </text>
        </g>
        <g id="TEXT-249" data-name="TEXT">
            <text class="cls-8" transform="translate(2102.14 706.61)">12</text>
        </g>
        <g id="TEXT-250" data-name="TEXT">
            <text class="cls-8" transform="translate(2124.14 708.01)">13</text>
        </g>
        <g id="TEXT-251" data-name="TEXT">
            <text class="cls-8" transform="translate(2145.7 709.03)">14</text>
        </g>
        <g id="TEXT-252" data-name="TEXT">
            <text class="cls-8" transform="translate(2166.87 709.98)">15</text>
        </g>
        <g id="TEXT-253" data-name="TEXT">
            <text class="cls-8" transform="translate(2190.22 711.04)">16</text>
        </g>
        <g id="TEXT-254" data-name="TEXT">
            <text class="cls-8" transform="translate(2211.64 712.72)">17</text>
        </g>
        <g id="TEXT-255" data-name="TEXT">
            <text class="cls-8" transform="translate(2208.63 767.24)">22</text>
        </g>
        <g id="TEXT-256" data-name="TEXT">
            <text class="cls-8" transform="translate(2185.73 765.94)">23</text>
        </g>
        <g id="TEXT-257" data-name="TEXT">
            <text class="cls-8" transform="translate(2164.72 765.26)">24</text>
        </g>
        <g id="TEXT-258" data-name="TEXT">
            <text class="cls-8" transform="translate(2143.12 763.06)">25</text>
        </g>
        <g id="TEXT-259" data-name="TEXT">
            <text class="cls-8" transform="translate(2121.26 762.87)">26</text>
        </g>
        <g id="TEXT-260" data-name="TEXT">
            <text class="cls-8" transform="translate(2098.74 761.87)">27</text>
        </g>
        <g id="TEXT-261" data-name="TEXT">
            <text class="cls-8" transform="translate(2076.81 760.69)">28</text>
        </g>
        <g id="TEXT-262" data-name="TEXT">
            <text class="cls-8" transform="translate(2054.88 759.65)">29</text>
        </g>
        <g id="TEXT-263" data-name="TEXT">
            <text class="cls-8" transform="translate(2032.94 758.6)">30</text>
        </g>
        <g id="TEXT-264" data-name="TEXT">
            <text class="cls-8" transform="translate(2011 757.56)">31</text>
        </g>
        <g id="TEXT-265" data-name="TEXT">
            <text class="cls-8" transform="translate(1989.07 756.51)">32</text>
        </g>
        <g id="TEXT-266" data-name="TEXT">
            <text class="cls-8" transform="translate(1967.13 755.47)">33</text>
        </g>
        <g id="TEXT-267" data-name="TEXT">
            <text class="cls-8" transform="translate(1945.2 754.43)">34</text>
        </g>
        <g id="TEXT-268" data-name="TEXT">
            <text class="cls-8" transform="translate(2233.71 713.83)">18</text>
        </g>
        <g id="TEXT-269" data-name="TEXT">
            <text class="cls-8" transform="translate(2255.65 714.93)">19</text>
        </g>
        <g id="TEXT-270" data-name="TEXT">
            <text class="cls-8" transform="translate(2252.5 769.44)">20</text>
        </g>
        <g id="TEXT-271" data-name="TEXT">
            <text class="cls-8" transform="translate(2229.6 768.13)">21</text>
        </g>
    </g>
    <g id="MZ-6">
        <g id="mz-6-2" data-name="mz-6">
            <rect class="cls-2" x="1055.6" y="495.88" width="404.51" height="120.83" rx="16.98" ry="16.98" transform="translate(28.47 -60.37) rotate(2.78)"/>
            <rect class="cls-5" x="1115.73" y="495.68" width="22.03" height="54.91" transform="translate(26.71 -54.05) rotate(2.78)"/>
            <rect class="cls-5" x="1137.68" y="496.85" width="22.03" height="54.83" transform="translate(26.79 -55.11) rotate(2.78)"/>
            <rect class="cls-5" x="1159.61" y="498.3" width="22.03" height="54.83" transform="translate(26.88 -56.17) rotate(2.78)"/>
            <rect class="cls-5" x="1182.07" y="499.38" width="21.47" height="54.83" transform="translate(26.96 -57.25) rotate(2.78)"/>
            <rect class="cls-5" x="1204.07" y="500.43" width="20.75" height="54.83" transform="translate(27.04 -58.3) rotate(2.78)"/>
            <rect class="cls-5" x="1225.39" y="501.5" width="22.03" height="54.83" transform="translate(27.12 -59.36) rotate(2.78)"/>
            <rect class="cls-5" x="1247.84" y="502.59" width="22.03" height="54.83" transform="translate(27.2 -60.45) rotate(2.78)"/>
            <rect class="cls-5" x="1269.28" y="503.63" width="22.03" height="54.83" transform="translate(27.27 -61.49) rotate(2.78)"/>
            <rect class="cls-5" x="1113.1" y="550.49" width="22.03" height="55.49" transform="translate(29.38 -53.86) rotate(2.78)"/>
            <rect class="cls-5" x="1135.02" y="551.54" width="22.03" height="54.83" transform="translate(29.44 -54.92) rotate(2.78)"/>
            <rect class="cls-5" x="1156.97" y="552.61" width="22.35" height="54.83" transform="translate(29.52 -55.99) rotate(2.78)"/>
            <rect class="cls-5" x="1179.02" y="554.15" width="21.85" height="54.83" transform="translate(29.62 -57.05) rotate(2.78)"/>
            <rect class="cls-5" x="1200.73" y="555.23" width="21.98" height="54.83" transform="translate(29.69 -58.1) rotate(2.78)"/>
            <rect class="cls-5" x="1222.71" y="556.47" width="22.03" height="54.83" transform="translate(29.78 -59.17) rotate(2.78)"/>
            <rect class="cls-5" x="1244.72" y="557.23" width="21.88" height="54.83" transform="translate(29.84 -60.23) rotate(2.78)"/>
            <rect class="cls-5" x="1266.58" y="558.29" width="21.85" height="54.83" transform="translate(29.92 -61.29) rotate(2.78)"/>
            <rect class="cls-5" x="1288.41" y="559.36" width="22.04" height="54.83" transform="translate(30 -62.35) rotate(2.78)"/>
            <rect class="cls-5" x="1310.41" y="560.81" width="22.11" height="54.83" transform="translate(30.09 -63.42) rotate(2.78)"/>
            <rect class="cls-5" x="1332.5" y="561.65" width="21.97" height="54.8" transform="translate(30.16 -64.49) rotate(2.78)"/>
            <rect class="cls-5" x="1354.43" y="563" width="23.03" height="54.92" transform="translate(30.26 -65.57) rotate(2.78)"/>
            <rect class="cls-5" x="1376.31" y="564" width="21.57" height="54.83" transform="translate(30.33 -66.6) rotate(2.78)"/>
            <rect class="cls-5" x="1291.71" y="505.36" width="22.03" height="54.83" transform="translate(27.38 -62.58) rotate(2.78)"/>
            <rect class="cls-5" x="1313.43" y="505.72" width="22.25" height="55.05" transform="translate(27.43 -63.63) rotate(2.78)"/>
            <rect class="cls-5" x="1335.35" y="506.71" width="22.03" height="55.01" transform="translate(27.5 -64.69) rotate(2.78)"/>
            <rect class="cls-5" x="1357.68" y="507.92" width="21.87" height="55.07" transform="translate(27.59 -65.77) rotate(2.78)"/>
            <rect class="cls-5" x="1379.02" y="508.99" width="21.83" height="55.12" transform="translate(27.67 -66.8) rotate(2.78)"/>
            <path class="cls-5" d="M1396.53,619.32l40,1.89s15.5,1.5,15.88-12,.38-14.75.38-14.75l-54.86-3Z"/>
            <polygon class="cls-5" points="1114.46 549.98 1059.33 547.08 1057.92 574.33 1112.75 577.5 1114.46 549.98"/>
            <polygon class="cls-5" points="1115.74 522.67 1060.67 519.83 1059.33 547.08 1114.43 549.6 1115.74 522.67"/>
            <path class="cls-5" d="M1112.75,577.5l-1,27.51-42.2-2.1s-12.67-.58-12.17-14.58l.5-14Z"/>
            <path class="cls-5" d="M1400.83,537.08l1.34-27.52,42,2.28s12.5.38,12.13,13.75-.62,14-.62,14Z"/>
            <polygon class="cls-5" points="1454.25 566.96 1399.19 564.55 1400.83 537.08 1455.63 539.58 1454.25 566.96"/>
            <polygon class="cls-5" points="1452.75 594.46 1397.89 591.41 1399.19 564.55 1454.25 566.96 1452.75 594.46"/>
            <path class="cls-5" d="M1117.07,495.18l-40-2s-14.75-1.33-15.58,12.67l-.83,14,55.07,2.84Z"/>
        </g>
        <g id="TEXT-272" data-name="TEXT">
            <text class="cls-4" transform="translate(1226.9 560.56) rotate(0.14)">MZ-6</text>
        </g>
        <g id="TEXT-273" data-name="TEXT">
            <text class="cls-8" transform="translate(1081.55 592.27)">1</text>
        </g>
        <g id="TEXT-274" data-name="TEXT">
            <text class="cls-8" transform="translate(1082.46 564.15)">2</text>
        </g>
        <g id="TEXT-275" data-name="TEXT">
            <text class="cls-8" transform="translate(1083.69 537.87)">3</text>
        </g>
        <g id="TEXT-276" data-name="TEXT">
            <text class="cls-8" transform="translate(1084.93 512.99)">4</text>
        </g>
        <g id="TEXT-277" data-name="TEXT">
            <text class="cls-8" transform="translate(1123.07 526.26)">5</text>
        </g>
        <g id="TEXT-278" data-name="TEXT">
            <text class="cls-8" transform="translate(1144.84 527.23)">6</text>
        </g>
        <g id="TEXT-279" data-name="TEXT">
            <text class="cls-8" transform="translate(1166.87 528.15)">7</text>
        </g>
        <g id="TEXT-280" data-name="TEXT">
            <text class="cls-8" transform="translate(1189.13 529.69)">8</text>
        </g>
        <g id="TEXT-281" data-name="TEXT">
            <text class="cls-8" transform="translate(1210.48 530.94)">9</text>
        </g>
        <g id="TEXT-282" data-name="TEXT">
            <text class="cls-8" transform="translate(1231.86 531.18)">10</text>
        </g>
        <g id="TEXT-283" data-name="TEXT">
            <text class="cls-8" transform="translate(1253.36 532.23)">
                <tspan class="cls-9">1</tspan>
                <tspan x="5.01" y="0">1</tspan>
            </text>
        </g>
        <g id="TEXT-284" data-name="TEXT">
            <text class="cls-8" transform="translate(1275.27 533.25)">12</text>
        </g>
        <g id="TEXT-285" data-name="TEXT">
            <text class="cls-8" transform="translate(1297.27 534.65)">13</text>
        </g>
        <g id="TEXT-286" data-name="TEXT">
            <text class="cls-8" transform="translate(1318.83 535.68)">14</text>
        </g>
        <g id="TEXT-287" data-name="TEXT">
            <text class="cls-8" transform="translate(1340 536.62)">15</text>
        </g>
        <g id="TEXT-288" data-name="TEXT">
            <text class="cls-8" transform="translate(1363.35 537.69)">16</text>
        </g>
        <g id="TEXT-289" data-name="TEXT">
            <text class="cls-8" transform="translate(1384.78 539.37)">17</text>
        </g>
        <g id="TEXT-290" data-name="TEXT">
            <text class="cls-8" transform="translate(1420.89 527.3)">18</text>
        </g>
        <g id="TEXT-291" data-name="TEXT">
            <text class="cls-8" transform="translate(1420.73 553.22)">19</text>
        </g>
        <g id="TEXT-292" data-name="TEXT">
            <text class="cls-8" transform="translate(1419.49 581.92)">20</text>
        </g>
        <g id="TEXT-293" data-name="TEXT">
            <text class="cls-8" transform="translate(1419.17 608.25)">21</text>
        </g>
        <g id="TEXT-294" data-name="TEXT">
            <text class="cls-8" transform="translate(1381.76 593.89)">22</text>
        </g>
        <g id="TEXT-295" data-name="TEXT">
            <text class="cls-8" transform="translate(1358.87 592.58)">23</text>
        </g>
        <g id="TEXT-296" data-name="TEXT">
            <text class="cls-8" transform="translate(1337.85 591.91)">24</text>
        </g>
        <g id="TEXT-297" data-name="TEXT">
            <text class="cls-8" transform="translate(1316.26 589.7)">25</text>
        </g>
        <g id="TEXT-298" data-name="TEXT">
            <text class="cls-8" transform="translate(1294.39 589.51)">26</text>
        </g>
        <g id="TEXT-299" data-name="TEXT">
            <text class="cls-8" transform="translate(1271.88 588.52)">27</text>
        </g>
        <g id="TEXT-300" data-name="TEXT">
            <text class="cls-8" transform="translate(1249.94 587.34)">28</text>
        </g>
        <g id="TEXT-301" data-name="TEXT">
            <text class="cls-8" transform="translate(1228.01 586.29)">29</text>
        </g>
        <g id="TEXT-302" data-name="TEXT">
            <text class="cls-8" transform="translate(1206.07 585.25)">30</text>
        </g>
        <g id="TEXT-303" data-name="TEXT">
            <text class="cls-8" transform="translate(1184.14 584.2)">31</text>
        </g>
        <g id="TEXT-304" data-name="TEXT">
            <text class="cls-8" transform="translate(1162.2 583.16)">32</text>
        </g>
        <g id="TEXT-305" data-name="TEXT">
            <text class="cls-8" transform="translate(1140.26 582.11)">33</text>
        </g>
        <g id="TEXT-306" data-name="TEXT">
            <text class="cls-8" transform="translate(1118.33 581.07)">34</text>
        </g>
    </g>
    <g id="MZ-7">
        <rect class="cls-2" x="1472.72" y="517.19" width="404.51" height="120.83" rx="16.98" ry="16.98" transform="translate(30 -80.58) rotate(2.78)"/>
        <rect class="cls-5" x="1532.84" y="516.99" width="22.03" height="54.91" transform="translate(28.23 -74.26) rotate(2.78)"/>
        <rect class="cls-5" x="1554.79" y="518.16" width="22.03" height="54.83" transform="translate(28.31 -75.32) rotate(2.78)"/>
        <rect class="cls-5" x="1576.72" y="519.61" width="22.03" height="54.83" transform="translate(28.41 -76.39) rotate(2.78)"/>
        <rect class="cls-5" x="1599.18" y="520.69" width="21.47" height="54.83" transform="translate(28.49 -77.46) rotate(2.78)"/>
        <rect class="cls-5" x="1621.18" y="521.74" width="20.75" height="54.83" transform="translate(28.56 -78.51) rotate(2.78)"/>
        <rect class="cls-5" x="1642.51" y="522.81" width="22.03" height="54.83" transform="translate(28.64 -79.57) rotate(2.78)"/>
        <rect class="cls-5" x="1664.96" y="523.9" width="22.03" height="54.83" transform="translate(28.72 -80.66) rotate(2.78)"/>
        <rect class="cls-5" x="1686.4" y="524.94" width="22.03" height="54.83" transform="translate(28.8 -81.7) rotate(2.78)"/>
        <rect class="cls-5" x="1530.22" y="571.79" width="22.03" height="55.49" transform="translate(30.9 -74.07) rotate(2.78)"/>
        <rect class="cls-5" x="1552.14" y="572.85" width="22.03" height="54.83" transform="translate(30.96 -75.13) rotate(2.78)"/>
        <rect class="cls-5" x="1574.09" y="573.92" width="22.35" height="54.83" transform="translate(31.04 -76.2) rotate(2.78)"/>
        <rect class="cls-5" x="1596.14" y="575.46" width="21.85" height="54.83" transform="translate(31.14 -77.26) rotate(2.78)"/>
        <rect class="cls-5" x="1617.84" y="576.54" width="21.98" height="54.83" transform="translate(31.22 -78.31) rotate(2.78)"/>
        <rect class="cls-5" x="1639.83" y="577.78" width="22.03" height="54.83" transform="translate(31.31 -79.38) rotate(2.78)"/>
        <rect class="cls-5" x="1661.84" y="578.54" width="21.88" height="54.83" transform="translate(31.37 -80.44) rotate(2.78)"/>
        <rect class="cls-5" x="1683.7" y="579.6" width="21.85" height="54.83" transform="translate(31.45 -81.5) rotate(2.78)"/>
        <rect class="cls-5" x="1705.52" y="580.67" width="22.04" height="54.83" transform="translate(31.52 -82.56) rotate(2.78)"/>
        <rect class="cls-5" x="1727.52" y="582.12" width="22.11" height="54.83" transform="translate(31.62 -83.63) rotate(2.78)"/>
        <rect class="cls-5" x="1749.62" y="582.96" width="21.97" height="54.8" transform="translate(31.69 -84.7) rotate(2.78)"/>
        <rect class="cls-5" x="1771.54" y="584.31" width="23.03" height="54.92" transform="translate(31.78 -85.79) rotate(2.78)"/>
        <rect class="cls-5" x="1793.42" y="585.31" width="21.57" height="54.83" transform="translate(31.85 -86.81) rotate(2.78)"/>
        <rect class="cls-5" x="1708.83" y="526.67" width="22.03" height="54.83" transform="translate(28.91 -82.79) rotate(2.78)"/>
        <rect class="cls-5" x="1730.54" y="527.03" width="22.25" height="55.05" transform="translate(28.96 -83.85) rotate(2.78)"/>
        <rect class="cls-5" x="1752.46" y="528.02" width="22.03" height="55.01" transform="translate(29.03 -84.9) rotate(2.78)"/>
        <rect class="cls-5" x="1774.8" y="529.23" width="21.87" height="55.07" transform="translate(29.11 -85.98) rotate(2.78)"/>
        <rect class="cls-5" x="1796.14" y="530.3" width="21.83" height="55.12" transform="translate(29.19 -87.01) rotate(2.78)"/>
        <path class="cls-5" d="M1813.65,640.63l40,1.89s15.5,1.5,15.88-12,.38-14.75.38-14.75l-54.86-3Z"/>
        <polygon class="cls-5" points="1531.57 571.29 1476.45 568.39 1475.03 595.64 1529.87 598.81 1531.57 571.29"/>
        <polygon class="cls-5" points="1532.85 543.98 1477.78 541.14 1476.45 568.39 1531.54 570.91 1532.85 543.98"/>
        <path class="cls-5" d="M1529.87,598.81l-1,27.51-42.2-2.1s-12.67-.58-12.17-14.58l.5-14Z"/>
        <path class="cls-5" d="M1817.95,558.38l1.34-27.52,42,2.28s12.5.38,12.13,13.75-.62,14-.62,14Z"/>
        <polygon class="cls-5" points="1871.37 588.27 1816.31 585.86 1817.95 558.38 1872.74 560.89 1871.37 588.27"/>
        <polygon class="cls-5" points="1869.87 615.77 1815 612.72 1816.31 585.86 1871.37 588.27 1869.87 615.77"/>
        <path class="cls-5" d="M1534.19,516.48l-40-2s-14.75-1.33-15.58,12.67l-.83,14,55.07,2.84Z"/>
        <g id="TEXT-307" data-name="TEXT">
            <text class="cls-4" transform="translate(1641.99 577.21) rotate(0.51)">MZ-7</text>
        </g>
        <g id="TEXT-308" data-name="TEXT">
            <text class="cls-8" transform="translate(1498.28 613.15)">1</text>
        </g>
        <g id="TEXT-309" data-name="TEXT">
            <text class="cls-8" transform="translate(1499.19 585.03)">2</text>
        </g>
        <g id="TEXT-310" data-name="TEXT">
            <text class="cls-8" transform="translate(1500.42 558.75)">3</text>
        </g>
        <g id="TEXT-311" data-name="TEXT">
            <text class="cls-8" transform="translate(1501.66 533.87)">4</text>
        </g>
        <g id="TEXT-312" data-name="TEXT">
            <text class="cls-8" transform="translate(1539.8 547.14)">5</text>
        </g>
        <g id="TEXT-313" data-name="TEXT">
            <text class="cls-8" transform="translate(1561.57 548.1)">6</text>
        </g>
        <g id="TEXT-314" data-name="TEXT">
            <text class="cls-8" transform="translate(1583.6 549.03)">7</text>
        </g>
        <g id="TEXT-315" data-name="TEXT">
            <text class="cls-8" transform="translate(1605.86 550.57)">8</text>
        </g>
        <g id="TEXT-316" data-name="TEXT">
            <text class="cls-8" transform="translate(1627.21 551.82)">9</text>
        </g>
        <g id="TEXT-317" data-name="TEXT">
            <text class="cls-8" transform="translate(1648.59 552.06)">10</text>
        </g>
        <g id="TEXT-318" data-name="TEXT">
            <text class="cls-8" transform="translate(1670.09 553.11)">
                <tspan class="cls-9">1</tspan>
                <tspan x="5.01" y="0">1</tspan>
            </text>
        </g>
        <g id="TEXT-319" data-name="TEXT">
            <text class="cls-8" transform="translate(1692 554.13)">12</text>
        </g>
        <g id="TEXT-320" data-name="TEXT">
            <text class="cls-8" transform="translate(1714 555.53)">13</text>
        </g>
        <g id="TEXT-321" data-name="TEXT">
            <text class="cls-8" transform="translate(1735.56 556.56)">14</text>
        </g>
        <g id="TEXT-322" data-name="TEXT">
            <text class="cls-8" transform="translate(1756.73 557.5)">15</text>
        </g>
        <g id="TEXT-323" data-name="TEXT">
            <text class="cls-8" transform="translate(1780.08 558.57)">16</text>
        </g>
        <g id="TEXT-324" data-name="TEXT">
            <text class="cls-8" transform="translate(1801.51 560.25)">17</text>
        </g>
        <g id="TEXT-325" data-name="TEXT">
            <text class="cls-8" transform="translate(1837.62 548.18)">18</text>
        </g>
        <g id="TEXT-326" data-name="TEXT">
            <text class="cls-8" transform="translate(1837.46 574.1)">19</text>
        </g>
        <g id="TEXT-327" data-name="TEXT">
            <text class="cls-8" transform="translate(1836.22 602.8)">20</text>
        </g>
        <g id="TEXT-328" data-name="TEXT">
            <text class="cls-8" transform="translate(1835.9 629.13)">21</text>
        </g>
        <g id="TEXT-329" data-name="TEXT">
            <text class="cls-8" transform="translate(1798.49 614.76)">22</text>
        </g>
        <g id="TEXT-330" data-name="TEXT">
            <text class="cls-8" transform="translate(1775.6 613.46)">23</text>
        </g>
        <g id="TEXT-331" data-name="TEXT">
            <text class="cls-8" transform="translate(1754.58 612.78)">24</text>
        </g>
        <g id="TEXT-332" data-name="TEXT">
            <text class="cls-8" transform="translate(1732.99 610.58)">25</text>
        </g>
        <g id="TEXT-333" data-name="TEXT">
            <text class="cls-8" transform="translate(1711.12 610.39)">26</text>
        </g>
        <g id="TEXT-334" data-name="TEXT">
            <text class="cls-8" transform="translate(1688.61 609.4)">27</text>
        </g>
        <g id="TEXT-335" data-name="TEXT">
            <text class="cls-8" transform="translate(1666.67 608.21)">28</text>
        </g>
        <g id="TEXT-336" data-name="TEXT">
            <text class="cls-8" transform="translate(1644.74 607.17)">29</text>
        </g>
        <g id="TEXT-337" data-name="TEXT">
            <text class="cls-8" transform="translate(1622.8 606.13)">30</text>
        </g>
        <g id="TEXT-338" data-name="TEXT">
            <text class="cls-8" transform="translate(1600.87 605.08)">31</text>
        </g>
        <g id="TEXT-339" data-name="TEXT">
            <text class="cls-8" transform="translate(1578.93 604.04)">32</text>
        </g>
        <g id="TEXT-340" data-name="TEXT">
            <text class="cls-8" transform="translate(1556.99 602.99)">33</text>
        </g>
        <g id="TEXT-341" data-name="TEXT">
            <text class="cls-8" transform="translate(1535.06 601.95)">34</text>
        </g>
    </g>
    <g id="MZ-8">
        <g id="MZ-8-2" data-name="MZ-8">
            <rect class="cls-2" x="1889.34" y="538.4" width="404.51" height="120.83" rx="16.98" ry="16.98" transform="translate(31.51 -100.77) rotate(2.78)"/>
            <rect class="cls-5" x="1949.47" y="538.19" width="22.03" height="54.91" transform="translate(29.75 -94.45) rotate(2.78)"/>
            <rect class="cls-5" x="1971.42" y="539.37" width="22.03" height="54.83" transform="translate(29.83 -95.51) rotate(2.78)"/>
            <rect class="cls-5" x="1993.35" y="540.82" width="22.03" height="54.83" transform="translate(29.93 -96.57) rotate(2.78)"/>
            <rect class="cls-5" x="2015.81" y="541.9" width="21.47" height="54.83" transform="translate(30.01 -97.65) rotate(2.78)"/>
            <rect class="cls-5" x="2037.81" y="542.95" width="20.75" height="54.83" transform="translate(30.08 -98.7) rotate(2.78)"/>
            <rect class="cls-5" x="2059.13" y="544.02" width="22.03" height="54.83" transform="translate(30.16 -99.76) rotate(2.78)"/>
            <rect class="cls-5" x="2081.59" y="545.11" width="22.03" height="54.83" transform="translate(30.24 -100.85) rotate(2.78)"/>
            <rect class="cls-5" x="2103.03" y="546.15" width="22.03" height="54.83" transform="translate(30.32 -101.89) rotate(2.78)"/>
            <rect class="cls-5" x="1946.84" y="593" width="22.03" height="55.49" transform="translate(32.42 -94.26) rotate(2.78)"/>
            <rect class="cls-5" x="1968.76" y="594.05" width="22.03" height="54.83" transform="translate(32.48 -95.32) rotate(2.78)"/>
            <rect class="cls-5" x="1990.71" y="595.13" width="22.35" height="54.83" transform="translate(32.56 -96.39) rotate(2.78)"/>
            <rect class="cls-5" x="2012.76" y="596.67" width="21.85" height="54.83" transform="translate(32.66 -97.45) rotate(2.78)"/>
            <rect class="cls-5" x="2034.47" y="597.75" width="21.98" height="54.83" transform="translate(32.74 -98.5) rotate(2.78)"/>
            <rect class="cls-5" x="2056.45" y="598.98" width="22.03" height="54.83" transform="translate(32.83 -99.57) rotate(2.78)"/>
            <rect class="cls-5" x="2078.47" y="599.75" width="21.88" height="54.83" transform="translate(32.89 -100.63) rotate(2.78)"/>
            <rect class="cls-5" x="2100.32" y="600.81" width="21.85" height="54.83" transform="translate(32.97 -101.69) rotate(2.78)"/>
            <rect class="cls-5" x="2122.15" y="601.88" width="22.04" height="54.83" transform="translate(33.04 -102.75) rotate(2.78)"/>
            <rect class="cls-5" x="2144.15" y="603.33" width="22.11" height="54.83" transform="translate(33.14 -103.82) rotate(2.78)"/>
            <rect class="cls-5" x="2166.25" y="604.17" width="21.97" height="54.8" transform="translate(33.21 -104.89) rotate(2.78)"/>
            <rect class="cls-5" x="2188.17" y="605.52" width="23.03" height="54.92" transform="translate(33.3 -105.97) rotate(2.78)"/>
            <rect class="cls-5" x="2210.05" y="606.51" width="21.57" height="54.83" transform="translate(33.37 -107) rotate(2.78)"/>
            <rect class="cls-5" x="2125.46" y="547.88" width="22.03" height="54.83" transform="translate(30.43 -102.98) rotate(2.78)"/>
            <rect class="cls-5" x="2147.17" y="548.23" width="22.25" height="55.05" transform="translate(30.48 -104.03) rotate(2.78)"/>
            <rect class="cls-5" x="2169.09" y="549.23" width="22.03" height="55.01" transform="translate(30.55 -105.09) rotate(2.78)"/>
            <rect class="cls-5" x="2191.42" y="550.44" width="21.87" height="55.07" transform="translate(30.63 -106.17) rotate(2.78)"/>
            <rect class="cls-5" x="2212.76" y="551.51" width="21.83" height="55.12" transform="translate(30.71 -107.2) rotate(2.78)"/>
            <path class="cls-5" d="M2230.27,661.84l40,1.89s15.5,1.5,15.88-12,.38-14.75.38-14.75l-54.86-3Z"/>
            <polygon class="cls-5" points="1948.2 592.5 1893.08 589.6 1891.66 616.85 1946.49 620.02 1948.2 592.5"/>
            <polygon class="cls-5" points="1949.48 565.19 1894.41 562.35 1893.08 589.6 1948.17 592.11 1949.48 565.19"/>
            <path class="cls-5" d="M1946.49,620l-1,27.51-42.2-2.1s-12.67-.58-12.17-14.58l.5-14Z"/>
            <path class="cls-5" d="M2234.58,579.59l1.34-27.52,42,2.28s12.5.38,12.13,13.75-.62,14-.62,14Z"/>
            <polygon class="cls-5" points="2287.99 609.48 2232.93 607.07 2234.58 579.59 2289.37 582.1 2287.99 609.48"/>
            <polygon class="cls-5" points="2286.49 636.98 2231.63 633.93 2232.93 607.07 2287.99 609.48 2286.49 636.98"/>
            <path class="cls-5" d="M1950.82,537.69l-40-2s-14.75-1.33-15.58,12.67l-.83,14,55.07,2.84Z"/>
        </g>
        <g id="TEXT-342" data-name="TEXT">
            <text class="cls-4" transform="translate(2077.62 600.79) rotate(0.51)">MZ-8</text>
        </g>
        <g id="TEXT-343" data-name="TEXT">
            <text class="cls-8" transform="translate(1915.01 634.03)">1</text>
        </g>
        <g id="TEXT-344" data-name="TEXT">
            <text class="cls-8" transform="translate(1915.92 605.91)">2</text>
        </g>
        <g id="TEXT-345" data-name="TEXT">
            <text class="cls-8" transform="translate(1917.15 579.62)">3</text>
        </g>
        <g id="TEXT-346" data-name="TEXT">
            <text class="cls-8" transform="translate(1918.39 554.74)">4</text>
        </g>
        <g id="TEXT-347" data-name="TEXT">
            <text class="cls-8" transform="translate(1956.53 568.02)">5</text>
        </g>
        <g id="TEXT-348" data-name="TEXT">
            <text class="cls-8" transform="translate(1978.3 568.98)">6</text>
        </g>
        <g id="TEXT-349" data-name="TEXT">
            <text class="cls-8" transform="translate(2000.33 569.91)">7</text>
        </g>
        <g id="TEXT-350" data-name="TEXT">
            <text class="cls-8" transform="translate(2022.59 571.45)">8</text>
        </g>
        <g id="TEXT-351" data-name="TEXT">
            <text class="cls-8" transform="translate(2043.94 572.69)">9</text>
        </g>
        <g id="TEXT-352" data-name="TEXT">
            <text class="cls-8" transform="translate(2065.32 572.94)">10</text>
        </g>
        <g id="TEXT-353" data-name="TEXT">
            <text class="cls-8" transform="translate(2086.82 573.98)">
                <tspan class="cls-9">1</tspan>
                <tspan x="5.01" y="0">1</tspan>
            </text>
        </g>
        <g id="TEXT-354" data-name="TEXT">
            <text class="cls-8" transform="translate(2108.73 575.01)">12</text>
        </g>
        <g id="TEXT-355" data-name="TEXT">
            <text class="cls-8" transform="translate(2130.74 576.41)">13</text>
        </g>
        <g id="TEXT-356" data-name="TEXT">
            <text class="cls-8" transform="translate(2152.29 577.43)">14</text>
        </g>
        <g id="TEXT-357" data-name="TEXT">
            <text class="cls-8" transform="translate(2173.46 578.38)">15</text>
        </g>
        <g id="TEXT-358" data-name="TEXT">
            <text class="cls-8" transform="translate(2196.81 579.44)">16</text>
        </g>
        <g id="TEXT-359" data-name="TEXT">
            <text class="cls-8" transform="translate(2218.24 581.12)">17</text>
        </g>
        <g id="TEXT-360" data-name="TEXT">
            <text class="cls-8" transform="translate(2254.35 569.05)">18</text>
        </g>
        <g id="TEXT-361" data-name="TEXT">
            <text class="cls-8" transform="translate(2254.2 594.98)">19</text>
        </g>
        <g id="TEXT-362" data-name="TEXT">
            <text class="cls-8" transform="translate(2252.95 623.68)">20</text>
        </g>
        <g id="TEXT-363" data-name="TEXT">
            <text class="cls-8" transform="translate(2252.63 650)">21</text>
        </g>
        <g id="TEXT-364" data-name="TEXT">
            <text class="cls-8" transform="translate(2215.22 635.64)">22</text>
        </g>
        <g id="TEXT-365" data-name="TEXT">
            <text class="cls-8" transform="translate(2192.33 634.34)">23</text>
        </g>
        <g id="TEXT-366" data-name="TEXT">
            <text class="cls-8" transform="translate(2171.31 633.66)">24</text>
        </g>
        <g id="TEXT-367" data-name="TEXT">
            <text class="cls-8" transform="translate(2149.72 631.46)">25</text>
        </g>
        <g id="TEXT-368" data-name="TEXT">
            <text class="cls-8" transform="translate(2127.85 631.27)">26</text>
        </g>
        <g id="TEXT-369" data-name="TEXT">
            <text class="cls-8" transform="translate(2105.34 630.27)">27</text>
        </g>
        <g id="TEXT-370" data-name="TEXT">
            <text class="cls-8" transform="translate(2083.4 629.09)">28</text>
        </g>
        <g id="TEXT-371" data-name="TEXT">
            <text class="cls-8" transform="translate(2061.47 628.05)">29</text>
        </g>
        <g id="TEXT-372" data-name="TEXT">
            <text class="cls-8" transform="translate(2039.53 627)">30</text>
        </g>
        <g id="TEXT-373" data-name="TEXT">
            <text class="cls-8" transform="translate(2017.6 625.96)">31</text>
        </g>
        <g id="TEXT-374" data-name="TEXT">
            <text class="cls-8" transform="translate(1995.66 624.92)">32</text>
        </g>
        <g id="TEXT-375" data-name="TEXT">
            <text class="cls-8" transform="translate(1973.73 623.87)">33</text>
        </g>
        <g id="TEXT-376" data-name="TEXT">
            <text class="cls-8" transform="translate(1951.79 622.83)">34</text>
        </g>
    </g>
    <g id="MZ-14">
        <g id="MZ-14-2" data-name="MZ-14">
            <rect class="cls-2" x="1048.82" y="629.8" width="404.51" height="119.23" rx="16.98" ry="16.98" transform="translate(34.92 -59.89) rotate(2.78)"/>
            <rect class="cls-5" x="1108.99" y="627" width="22.03" height="54.91" transform="translate(33.07 -53.57) rotate(2.78)"/>
            <rect class="cls-5" x="1130.93" y="628.17" width="22.03" height="54.83" transform="translate(33.15 -54.63) rotate(2.78)"/>
            <rect class="cls-5" x="1152.87" y="629.62" width="22.03" height="54.83" transform="translate(33.25 -55.69) rotate(2.78)"/>
            <rect class="cls-5" x="1175.33" y="630.7" width="21.47" height="54.83" transform="translate(33.33 -56.77) rotate(2.78)"/>
            <rect class="cls-5" x="1197.33" y="631.75" width="20.75" height="54.83" transform="translate(33.4 -57.82) rotate(2.78)"/>
            <rect class="cls-5" x="1218.65" y="632.82" width="22.03" height="54.83" transform="translate(33.48 -58.88) rotate(2.78)"/>
            <rect class="cls-5" x="1241.1" y="633.91" width="22.03" height="54.83" transform="translate(33.56 -59.97) rotate(2.78)"/>
            <rect class="cls-5" x="1262.54" y="634.95" width="22.03" height="54.83" transform="translate(33.64 -61.01) rotate(2.78)"/>
            <rect class="cls-5" x="1106.36" y="681.8" width="22.03" height="55.49" transform="translate(35.74 -53.37) rotate(2.78)"/>
            <rect class="cls-5" x="1128.28" y="682.86" width="22.03" height="54.83" transform="translate(35.8 -54.44) rotate(2.78)"/>
            <rect class="cls-5" x="1150.23" y="683.93" width="22.35" height="54.83" transform="translate(35.88 -55.51) rotate(2.78)"/>
            <rect class="cls-5" x="1172.28" y="685.47" width="21.85" height="54.83" transform="translate(35.98 -56.56) rotate(2.78)"/>
            <rect class="cls-5" x="1193.99" y="686.55" width="21.98" height="54.83" transform="translate(36.06 -57.62) rotate(2.78)"/>
            <rect class="cls-5" x="1215.97" y="687.79" width="22.03" height="54.83" transform="translate(36.14 -58.69) rotate(2.78)"/>
            <rect class="cls-5" x="1237.98" y="688.55" width="21.88" height="54.83" transform="translate(36.21 -59.75) rotate(2.78)"/>
            <rect class="cls-5" x="1259.84" y="689.61" width="21.85" height="54.83" transform="translate(36.28 -60.81) rotate(2.78)"/>
            <rect class="cls-5" x="1281.67" y="690.68" width="22.04" height="54.83" transform="translate(36.36 -61.87) rotate(2.78)"/>
            <rect class="cls-5" x="1303.67" y="692.13" width="22.11" height="54.83" transform="translate(36.46 -62.94) rotate(2.78)"/>
            <rect class="cls-5" x="1325.76" y="692.97" width="21.97" height="54.8" transform="translate(36.52 -64.01) rotate(2.78)"/>
            <rect class="cls-5" x="1347.69" y="694.32" width="23.03" height="54.92" transform="matrix(1, 0.05, -0.05, 1, 36.62, -65.09)"/>
            <rect class="cls-5" x="1369.57" y="695.32" width="21.57" height="54.83" transform="translate(36.69 -66.12) rotate(2.78)"/>
            <rect class="cls-5" x="1284.99" y="636.1" width="22.03" height="55.42" transform="translate(33.73 -62.09) rotate(2.78)"/>
            <rect class="cls-5" x="1306.69" y="637.04" width="22.25" height="55.05" transform="translate(33.79 -63.15) rotate(2.78)"/>
            <rect class="cls-5" x="1328.61" y="638.03" width="22.03" height="55.01" transform="translate(33.87 -64.21) rotate(2.78)"/>
            <rect class="cls-5" x="1350.94" y="639.24" width="21.87" height="55.07" transform="translate(33.95 -65.29) rotate(2.78)"/>
            <rect class="cls-5" x="1372.28" y="640.31" width="21.83" height="55.12" transform="translate(34.03 -66.32) rotate(2.78)"/>
            <path class="cls-5" d="M1389.79,750.64l40,1.89s15.5,1.5,15.88-12,.38-14.75.38-14.75l-54.86-3Z"/>
            <polygon class="cls-5" points="1107.72 681.3 1052.59 678.4 1051.18 705.65 1106.01 708.82 1107.72 681.3"/>
            <polygon class="cls-5" points="1109 653.99 1053.93 651.15 1052.59 678.4 1107.69 680.92 1109 653.99"/>
            <path class="cls-5" d="M1106,708.82l-1,27.51-42.2-2.1s-12.67-.58-12.17-14.58l.5-14Z"/>
            <path class="cls-5" d="M1394.09,668.39l1.34-27.52,42,2.28s12.5.38,12.13,13.75-.62,14-.62,14Z"/>
            <polygon class="cls-5" points="1447.51 698.28 1392.45 695.87 1394.09 668.39 1448.88 670.9 1447.51 698.28"/>
            <polygon class="cls-5" points="1446.01 725.78 1391.15 722.73 1392.45 695.87 1447.51 698.28 1446.01 725.78"/>
            <path class="cls-5" d="M1110.33,626.49l-40-2s-14.75-1.33-15.58,12.67l-.83,14L1109,654Z"/>
        </g>
        <g id="TEXT-377" data-name="TEXT">
            <text class="cls-4" transform="translate(1225.23 699.87) rotate(0.14)">MZ-14</text>
        </g>
        <g id="TEXT-378" data-name="TEXT">
            <text class="cls-8" transform="translate(1074.96 723.87)">1</text>
        </g>
        <g id="TEXT-379" data-name="TEXT">
            <text class="cls-8" transform="translate(1075.87 695.75)">2</text>
        </g>
        <g id="TEXT-380" data-name="TEXT">
            <text class="cls-8" transform="translate(1077.09 669.47)">3</text>
        </g>
        <g id="TEXT-381" data-name="TEXT">
            <text class="cls-8" transform="translate(1078.33 644.59)">4</text>
        </g>
        <g id="TEXT-382" data-name="TEXT">
            <text class="cls-8" transform="translate(1116.48 657.86)">5</text>
        </g>
        <g id="TEXT-383" data-name="TEXT">
            <text class="cls-8" transform="translate(1138.25 658.82)">6</text>
        </g>
        <g id="TEXT-384" data-name="TEXT">
            <text class="cls-8" transform="translate(1160.27 659.75)">7</text>
        </g>
        <g id="TEXT-385" data-name="TEXT">
            <text class="cls-8" transform="translate(1182.53 661.29)">8</text>
        </g>
        <g id="TEXT-386" data-name="TEXT">
            <text class="cls-8" transform="translate(1203.88 662.54)">9</text>
        </g>
        <g id="TEXT-387" data-name="TEXT">
            <text class="cls-8" transform="translate(1225.26 662.78)">10</text>
        </g>
        <g id="TEXT-388" data-name="TEXT">
            <text class="cls-8" transform="translate(1246.77 663.83)">
                <tspan class="cls-9">1</tspan>
                <tspan x="5.01" y="0">1</tspan>
            </text>
        </g>
        <g id="TEXT-389" data-name="TEXT">
            <text class="cls-8" transform="translate(1268.68 664.85)">12</text>
        </g>
        <g id="TEXT-390" data-name="TEXT">
            <text class="cls-8" transform="translate(1290.68 666.25)">13</text>
        </g>
        <g id="TEXT-391" data-name="TEXT">
            <text class="cls-8" transform="translate(1312.24 667.28)">14</text>
        </g>
        <g id="TEXT-392" data-name="TEXT">
            <text class="cls-8" transform="translate(1333.41 668.22)">15</text>
        </g>
        <g id="TEXT-393" data-name="TEXT">
            <text class="cls-8" transform="translate(1356.76 669.29)">16</text>
        </g>
        <g id="TEXT-394" data-name="TEXT">
            <text class="cls-8" transform="translate(1378.18 670.97)">17</text>
        </g>
        <g id="TEXT-395" data-name="TEXT">
            <text class="cls-8" transform="translate(1414.3 658.9)">18</text>
        </g>
        <g id="TEXT-396" data-name="TEXT">
            <text class="cls-8" transform="translate(1414.14 684.82)">19</text>
        </g>
        <g id="TEXT-397" data-name="TEXT">
            <text class="cls-8" transform="translate(1412.9 713.52)">20</text>
        </g>
        <g id="TEXT-398" data-name="TEXT">
            <text class="cls-8" transform="translate(1412.58 739.85)">21</text>
        </g>
        <g id="TEXT-399" data-name="TEXT">
            <text class="cls-8" transform="translate(1375.17 725.48)">22</text>
        </g>
        <g id="TEXT-400" data-name="TEXT">
            <text class="cls-8" transform="translate(1352.27 724.18)">23</text>
        </g>
        <g id="TEXT-401" data-name="TEXT">
            <text class="cls-8" transform="translate(1331.26 723.5)">24</text>
        </g>
        <g id="TEXT-402" data-name="TEXT">
            <text class="cls-8" transform="translate(1309.66 721.3)">25</text>
        </g>
        <g id="TEXT-403" data-name="TEXT">
            <text class="cls-8" transform="translate(1287.8 721.11)">26</text>
        </g>
        <g id="TEXT-404" data-name="TEXT">
            <text class="cls-8" transform="translate(1265.28 720.12)">27</text>
        </g>
        <g id="TEXT-405" data-name="TEXT">
            <text class="cls-8" transform="translate(1243.35 718.94)">28</text>
        </g>
        <g id="TEXT-406" data-name="TEXT">
            <text class="cls-8" transform="translate(1221.41 717.89)">29</text>
        </g>
        <g id="TEXT-407" data-name="TEXT">
            <text class="cls-8" transform="translate(1199.48 716.85)">30</text>
        </g>
        <g id="TEXT-408" data-name="TEXT">
            <text class="cls-8" transform="translate(1177.54 715.8)">31</text>
        </g>
        <g id="TEXT-409" data-name="TEXT">
            <text class="cls-8" transform="translate(1155.61 714.76)">32</text>
        </g>
        <g id="TEXT-410" data-name="TEXT">
            <text class="cls-8" transform="translate(1133.67 713.71)">33</text>
        </g>
        <g id="TEXT-411" data-name="TEXT">
            <text class="cls-8" transform="translate(1111.74 712.67)">34</text>
        </g>
    </g>
    <g id="MZ-13">
        <g id="MZ-13-2" data-name="MZ-13">
            <rect class="cls-2" x="1042.16" y="761.52" width="404.51" height="119.23" rx="16.98" ry="16.98" transform="translate(41.3 -59.41) rotate(2.78)"/>
            <rect class="cls-5" x="1102.32" y="758.72" width="22.03" height="54.91" transform="translate(39.45 -53.09) rotate(2.78)"/>
            <rect class="cls-5" x="1124.27" y="759.89" width="22.03" height="54.83" transform="translate(39.53 -54.15) rotate(2.78)"/>
            <rect class="cls-5" x="1146.2" y="761.34" width="22.03" height="54.83" transform="translate(39.63 -55.21) rotate(2.78)"/>
            <rect class="cls-5" x="1168.66" y="762.42" width="21.47" height="54.83" transform="translate(39.71 -56.29) rotate(2.78)"/>
            <rect class="cls-5" x="1190.66" y="763.47" width="20.75" height="54.83" transform="translate(39.79 -57.34) rotate(2.78)"/>
            <rect class="cls-5" x="1211.99" y="764.54" width="22.03" height="54.83" transform="translate(39.86 -58.4) rotate(2.78)"/>
            <rect class="cls-5" x="1234.44" y="765.63" width="22.03" height="54.83" transform="translate(39.94 -59.49) rotate(2.78)"/>
            <rect class="cls-5" x="1255.88" y="766.67" width="22.03" height="54.83" transform="translate(40.02 -60.53) rotate(2.78)"/>
            <rect class="cls-5" x="1099.7" y="813.52" width="22.03" height="55.49" transform="translate(42.12 -52.9) rotate(2.78)"/>
            <rect class="cls-5" x="1121.62" y="814.57" width="22.03" height="54.83" transform="translate(42.18 -53.96) rotate(2.78)"/>
            <rect class="cls-5" x="1143.57" y="815.65" width="22.35" height="54.83" transform="translate(42.26 -55.03) rotate(2.78)"/>
            <rect class="cls-5" x="1165.62" y="817.19" width="21.85" height="54.83" transform="translate(42.36 -56.09) rotate(2.78)"/>
            <rect class="cls-5" x="1187.32" y="818.27" width="21.98" height="54.83" transform="translate(42.44 -57.14) rotate(2.78)"/>
            <rect class="cls-5" x="1209.31" y="819.5" width="22.03" height="54.83" transform="translate(42.53 -58.21) rotate(2.78)"/>
            <rect class="cls-5" x="1231.32" y="820.27" width="21.88" height="54.83" transform="translate(42.59 -59.27) rotate(2.78)"/>
            <rect class="cls-5" x="1253.18" y="821.33" width="21.85" height="54.83" transform="translate(42.67 -60.33) rotate(2.78)"/>
            <rect class="cls-5" x="1275" y="822.4" width="22.04" height="54.83" transform="translate(42.74 -61.39) rotate(2.78)"/>
            <rect class="cls-5" x="1297" y="823.85" width="22.11" height="54.83" transform="translate(42.84 -62.46) rotate(2.78)"/>
            <rect class="cls-5" x="1319.1" y="824.69" width="21.97" height="54.8" transform="translate(42.91 -63.53) rotate(2.78)"/>
            <rect class="cls-5" x="1341.02" y="826.04" width="23.03" height="54.92" transform="matrix(1, 0.05, -0.05, 1, 43, -64.61)"/>
            <rect class="cls-5" x="1362.91" y="827.03" width="21.57" height="54.83" transform="translate(43.07 -65.64) rotate(2.78)"/>
            <rect class="cls-5" x="1278.32" y="767.82" width="22.03" height="55.42" transform="translate(40.11 -61.62) rotate(2.78)"/>
            <rect class="cls-5" x="1300.02" y="768.76" width="22.25" height="55.05" transform="translate(40.18 -62.67) rotate(2.78)"/>
            <rect class="cls-5" x="1321.94" y="769.75" width="22.03" height="55.01" transform="translate(40.25 -63.73) rotate(2.78)"/>
            <rect class="cls-5" x="1344.28" y="770.96" width="21.87" height="55.07" transform="translate(40.34 -64.81) rotate(2.78)"/>
            <rect class="cls-5" x="1365.62" y="772.03" width="21.83" height="55.12" transform="translate(40.41 -65.84) rotate(2.78)"/>
            <path class="cls-5" d="M1383.13,882.36l40,1.89s15.5,1.5,15.88-12,.38-14.75.38-14.75l-54.86-3Z"/>
            <polygon class="cls-5" points="1101.06 813.02 1045.93 810.12 1044.51 837.37 1099.35 840.54 1101.06 813.02"/>
            <polygon class="cls-5" points="1102.33 785.71 1047.26 782.87 1045.93 810.12 1101.03 812.63 1102.33 785.71"/>
            <path class="cls-5" d="M1099.35,840.54l-1,27.51-42.2-2.1s-12.67-.58-12.17-14.58l.5-14Z"/>
            <path class="cls-5" d="M1387.43,800.11l1.34-27.52,42,2.28s12.5.38,12.13,13.75-.62,14-.62,14Z"/>
            <polygon class="cls-5" points="1440.85 830 1385.79 827.59 1387.43 800.11 1442.22 802.62 1440.85 830"/>
            <polygon class="cls-5" points="1439.35 857.5 1384.48 854.45 1385.79 827.59 1440.85 830 1439.35 857.5"/>
            <path class="cls-5" d="M1103.67,758.21l-40-2s-14.75-1.33-15.58,12.67l-.83,14,55.07,2.84Z"/>
        </g>
        <g id="TEXT-412" data-name="TEXT">
            <text class="cls-4" transform="translate(1213.61 830.89) rotate(0.14)">MZ-13</text>
        </g>
        <g id="TEXT-413" data-name="TEXT">
            <text class="cls-8" transform="translate(1068.37 855.47)">1</text>
        </g>
        <g id="TEXT-414" data-name="TEXT">
            <text class="cls-8" transform="translate(1069.28 827.35)">2</text>
        </g>
        <g id="TEXT-415" data-name="TEXT">
            <text class="cls-8" transform="translate(1070.5 801.07)">3</text>
        </g>
        <g id="TEXT-416" data-name="TEXT">
            <text class="cls-8" transform="translate(1071.74 776.19)">4</text>
        </g>
        <g id="TEXT-417" data-name="TEXT">
            <text class="cls-8" transform="translate(1109.89 789.46)">5</text>
        </g>
        <g id="TEXT-418" data-name="TEXT">
            <text class="cls-8" transform="translate(1131.66 790.42)">6</text>
        </g>
        <g id="TEXT-419" data-name="TEXT">
            <text class="cls-8" transform="translate(1153.68 791.35)">7</text>
        </g>
        <g id="TEXT-420" data-name="TEXT">
            <text class="cls-8" transform="translate(1175.94 792.89)">8</text>
        </g>
        <g id="TEXT-421" data-name="TEXT">
            <text class="cls-8" transform="translate(1197.29 794.14)">9</text>
        </g>
        <g id="TEXT-422" data-name="TEXT">
            <text class="cls-8" transform="translate(1218.67 794.38)">10</text>
        </g>
        <g id="TEXT-423" data-name="TEXT">
            <text class="cls-8" transform="translate(1240.18 795.43)">
                <tspan class="cls-9">1</tspan>
                <tspan x="5.01" y="0">1</tspan>
            </text>
        </g>
        <g id="TEXT-424" data-name="TEXT">
            <text class="cls-8" transform="translate(1262.08 796.45)">12</text>
        </g>
        <g id="TEXT-425" data-name="TEXT">
            <text class="cls-8" transform="translate(1284.09 797.85)">13</text>
        </g>
        <g id="TEXT-426" data-name="TEXT">
            <text class="cls-8" transform="translate(1305.65 798.88)">14</text>
        </g>
        <g id="TEXT-427" data-name="TEXT">
            <text class="cls-8" transform="translate(1326.82 799.82)">15</text>
        </g>
        <g id="TEXT-428" data-name="TEXT">
            <text class="cls-8" transform="translate(1350.16 800.89)">16</text>
        </g>
        <g id="TEXT-429" data-name="TEXT">
            <text class="cls-8" transform="translate(1371.59 802.57)">17</text>
        </g>
        <g id="TEXT-430" data-name="TEXT">
            <text class="cls-8" transform="translate(1407.71 790.5)">18</text>
        </g>
        <g id="TEXT-431" data-name="TEXT">
            <text class="cls-8" transform="translate(1407.55 816.42)">19</text>
        </g>
        <g id="TEXT-432" data-name="TEXT">
            <text class="cls-8" transform="translate(1406.31 845.12)">20</text>
        </g>
        <g id="TEXT-433" data-name="TEXT">
            <text class="cls-8" transform="translate(1405.99 871.45)">21</text>
        </g>
        <g id="TEXT-434" data-name="TEXT">
            <text class="cls-8" transform="translate(1368.58 857.08)">22</text>
        </g>
        <g id="TEXT-435" data-name="TEXT">
            <text class="cls-8" transform="translate(1345.68 855.78)">23</text>
        </g>
        <g id="TEXT-436" data-name="TEXT">
            <text class="cls-8" transform="translate(1324.66 855.1)">24</text>
        </g>
        <g id="TEXT-437" data-name="TEXT">
            <text class="cls-8" transform="translate(1303.07 852.9)">25</text>
        </g>
        <g id="TEXT-438" data-name="TEXT">
            <text class="cls-8" transform="translate(1281.2 852.71)">26</text>
        </g>
        <g id="TEXT-439" data-name="TEXT">
            <text class="cls-8" transform="translate(1258.69 851.71)">27</text>
        </g>
        <g id="TEXT-440" data-name="TEXT">
            <text class="cls-8" transform="translate(1236.76 850.53)">28</text>
        </g>
        <g id="TEXT-441" data-name="TEXT">
            <text class="cls-8" transform="translate(1214.82 849.49)">29</text>
        </g>
        <g id="TEXT-442" data-name="TEXT">
            <text class="cls-8" transform="translate(1192.89 848.45)">30</text>
        </g>
        <g id="TEXT-443" data-name="TEXT">
            <text class="cls-8" transform="translate(1170.95 847.4)">31</text>
        </g>
        <g id="TEXT-444" data-name="TEXT">
            <text class="cls-8" transform="translate(1149.01 846.36)">32</text>
        </g>
        <g id="TEXT-445" data-name="TEXT">
            <text class="cls-8" transform="translate(1127.08 845.31)">33</text>
        </g>
        <g id="TEXT-446" data-name="TEXT">
            <text class="cls-8" transform="translate(1105.14 844.27)">34</text>
        </g>
    </g>
    <g id="MZ-9">
        <path class="cls-2" d="M2513.63,680.66,2312.8,669.75c-5.62-.27-9.8-8.09-9.35-17.45l4.21-86.77c.45-9.36,11-16.15,17.46-15.65L2479,557.82l71.95-2.79c12.83-2.53,52.08,16.41,29.41,53l-37.46,60.88C2534.63,683.25,2519.24,680.94,2513.63,680.66Z"/>
        <rect class="cls-5" x="2366.59" y="559.21" width="22.03" height="54.91" transform="translate(31.26 -114.66) rotate(2.78)"/>
        <rect class="cls-5" x="2388.54" y="560.39" width="22.03" height="54.83" transform="translate(31.34 -115.72) rotate(2.78)"/>
        <rect class="cls-5" x="2409.97" y="561.35" width="22.03" height="54.83" transform="translate(31.42 -116.76) rotate(2.78)"/>
        <polygon class="cls-5" points="2452.64 617.69 2430.66 616.69 2433.32 561.91 2455.3 562.92 2452.64 617.69"/>
        <polygon class="cls-5" points="2474.34 619.27 2452.64 617.69 2455.3 562.92 2477.04 564.11 2474.34 619.27"/>
        <polygon class="cls-5" points="2496.38 619.94 2474.38 618.88 2477.14 564.23 2498.78 562.95 2496.38 619.94"/>
        <polygon class="cls-5" points="2517.25 621 2496.26 620.34 2499.04 563.13 2519.78 562.13 2517.25 621"/>
        <polygon class="cls-5" points="2537.22 622.26 2517.85 620.97 2519.93 562.13 2540.38 561.75 2537.22 622.26"/>
        <rect class="cls-5" x="2363.99" y="614.02" width="22.03" height="54.57" transform="translate(33.91 -114.47) rotate(2.78)"/>
        <rect class="cls-5" x="2385.55" y="614.93" width="22.03" height="54.83" transform="translate(33.99 -115.52) rotate(2.78)"/>
        <rect class="cls-5" x="2407.31" y="616.13" width="22.35" height="54.83" transform="translate(34.07 -116.58) rotate(2.78)"/>
        <polygon class="cls-5" points="2449.81 672.78 2427.83 671.44 2430.83 616.69 2452.63 617.69 2449.81 672.78"/>
        <polygon class="cls-5" points="2471.81 673.66 2449.97 672.5 2452.63 617.69 2474.38 618.88 2471.81 673.66"/>
        <polygon class="cls-5" points="2493.66 674.75 2471.81 673.66 2474.38 618.88 2496.38 619.94 2493.66 674.75"/>
        <polygon class="cls-5" points="2516.13 676.1 2493.65 675.01 2496.38 619.94 2518.47 621 2516.13 676.1"/>
        <path class="cls-5" d="M2516.13,676.1h0l2.66-54.77,42.35,2.06L2539,659.88C2533.32,669.7,2528.18,676.69,2516.13,676.1Z"/>
        <polygon class="cls-5" points="2365.32 613.52 2310.2 610.62 2308.78 637.87 2363.61 641.03 2365.32 613.52"/>
        <polygon class="cls-5" points="2366.6 586.2 2311.53 583.37 2310.2 610.62 2365.29 613.13 2366.6 586.2"/>
        <path class="cls-5" d="M2363.61,641l-1,27.51-42.2-2.1s-12.67-.58-12.17-14.58l.5-14Z"/>
        <path class="cls-5" d="M2367.94,558.71l-40-2s-14.8-.55-15.63,13.45l-.79,13.22,55.07,2.84Z"/>
        <path class="cls-5" d="M2574,602.83s16.12-32.58-19.68-41a1,1,0,0,0-.27,0c-1.37.06-13.67,0-13.67,0l-3.15,60.51,23.92,1.13Z"/>
    </g>
    <g id="TEXT-447" data-name="TEXT">
        <text class="cls-4" transform="translate(2405.12 618.27) rotate(0.51)">MZ-9</text>
    </g>
    <g id="TEXT-448" data-name="TEXT">
        <text class="cls-8" transform="translate(2333.53 655.22)">1</text>
    </g>
    <g id="TEXT-449" data-name="TEXT">
        <text class="cls-8" transform="translate(2333.99 626.86)">2</text>
    </g>
    <g id="TEXT-450" data-name="TEXT">
        <text class="cls-8" transform="translate(2335.21 600.57)">3</text>
    </g>
    <g id="TEXT-451" data-name="TEXT">
        <text class="cls-8" transform="translate(2336.45 575.69)">4</text>
    </g>
    <g id="TEXT-452" data-name="TEXT">
        <text class="cls-8" transform="translate(2373.26 588.9)">5</text>
    </g>
    <g id="TEXT-453" data-name="TEXT">
        <text class="cls-8" transform="translate(2395.03 589.86)">6</text>
    </g>
    <g id="TEXT-454" data-name="TEXT">
        <text class="cls-8" transform="translate(2417.06 590.79)">7</text>
    </g>
    <g id="TEXT-455" data-name="TEXT">
        <text class="cls-8" transform="translate(2439.32 592.33)">8</text>
    </g>
    <g id="TEXT-456" data-name="TEXT">
        <text class="cls-8" transform="translate(2460.67 593.57)">9</text>
    </g>
    <g id="TEXT-457" data-name="TEXT">
        <text class="cls-8" transform="translate(2482.05 593.82)">10</text>
    </g>
    <g id="TEXT-458" data-name="TEXT">
        <text class="cls-8" transform="translate(2503.55 594.86)">
            <tspan class="cls-9">1</tspan>
            <tspan x="5.01" y="0">1</tspan>
        </text>
    </g>
    <g id="TEXT-459" data-name="TEXT">
        <text class="cls-8" transform="translate(2526.17 593.37)">12</text>
    </g>
    <g id="TEXT-460" data-name="TEXT">
        <text class="cls-8" transform="translate(2550.55 596)">13</text>
    </g>
    <g id="TEXT-461" data-name="TEXT">
        <text class="cls-8" transform="translate(2500.93 650.06)">15</text>
    </g>
    <g id="TEXT-462" data-name="TEXT">
        <text class="cls-8" transform="translate(2478.99 648.97)">16</text>
    </g>
    <g id="TEXT-463" data-name="TEXT">
        <text class="cls-8" transform="translate(2457.06 647.87)">17</text>
    </g>
    <g id="TEXT-464" data-name="TEXT">
        <text class="cls-8" transform="translate(2435.13 646.77)">18</text>
    </g>
    <g id="TEXT-465" data-name="TEXT">
        <text class="cls-8" transform="translate(2413.19 645.67)">19</text>
    </g>
    <g id="TEXT-466" data-name="TEXT">
        <text class="cls-8" transform="translate(2391.26 644.57)">20</text>
    </g>
    <g id="TEXT-467" data-name="TEXT">
        <text class="cls-8" transform="translate(2525.5 645.41)">14</text>
    </g>
    <g id="TEXT-468" data-name="TEXT">
        <text class="cls-8" transform="translate(2369.33 643.47)">21</text>
    </g>
    <g id="MZ-3">
        <g id="MZ-3-2" data-name="MZ-3">
            <path class="cls-2" d="M725.37,590.24,285,563.25c-11.41-.64-21.36-8-20.73-19.42l4.93-83a20,20,0,0,1,21.41-19.1l438.32,27.67a20.69,20.69,0,0,1,19.51,21.81l-4.6,82.49A17.52,17.52,0,0,1,725.37,590.24Z"/>
            <rect class="cls-5" x="321.69" y="451.2" width="22.03" height="54.91" transform="translate(27.14 -17.77) rotate(3.19)"/>
            <rect class="cls-5" x="343.63" y="452.53" width="22.03" height="54.83" transform="translate(27.25 -18.99) rotate(3.19)"/>
            <rect class="cls-5" x="365.55" y="454.14" width="22.03" height="54.83" transform="translate(27.37 -20.2) rotate(3.19)"/>
            <rect class="cls-5" x="388.01" y="455.38" width="21.47" height="54.83" transform="translate(27.48 -21.44) rotate(3.19)"/>
            <rect class="cls-5" x="410" y="456.58" width="20.75" height="54.83" transform="translate(27.58 -22.64) rotate(3.19)"/>
            <rect class="cls-5" x="431.31" y="457.8" width="22.03" height="54.83" transform="translate(27.68 -23.86) rotate(3.19)"/>
            <rect class="cls-5" x="453.76" y="459.05" width="22.03" height="54.83" transform="translate(27.78 -25.1) rotate(3.19)"/>
            <rect class="cls-5" x="475.19" y="460.25" width="22.03" height="54.83" transform="translate(27.88 -26.29) rotate(3.19)"/>
            <rect class="cls-5" x="318.67" y="505.99" width="22.03" height="55.49" transform="translate(30.2 -17.51) rotate(3.19)"/>
            <rect class="cls-5" x="340.59" y="507.2" width="22.03" height="54.83" transform="translate(30.29 -18.73) rotate(3.19)"/>
            <rect class="cls-5" x="362.53" y="508.43" width="22.35" height="54.83" transform="translate(30.39 -19.96) rotate(3.19)"/>
            <rect class="cls-5" x="384.57" y="510.12" width="21.85" height="54.83" transform="translate(30.52 -21.17) rotate(3.19)"/>
            <rect class="cls-5" x="406.27" y="511.36" width="21.98" height="54.83" transform="translate(30.62 -22.38) rotate(3.19)"/>
            <rect class="cls-5" x="428.24" y="512.75" width="22.03" height="54.83" transform="translate(30.73 -23.6) rotate(3.19)"/>
            <rect class="cls-5" x="450.25" y="513.67" width="21.88" height="54.83" transform="translate(30.82 -24.82) rotate(3.19)"/>
            <rect class="cls-5" x="472.1" y="514.89" width="21.85" height="54.83" transform="translate(30.92 -26.03) rotate(3.19)"/>
            <rect class="cls-5" x="493.92" y="517.11" width="22.04" height="54.83" transform="translate(31.08 -27.25) rotate(3.19)"/>
            <rect class="cls-5" x="515.9" y="517.72" width="22.11" height="54.83" transform="translate(31.14 -28.47) rotate(3.19)"/>
            <rect class="cls-5" x="537.99" y="519.72" width="21.97" height="54.8" transform="matrix(1, 0.06, -0.06, 1, 31.29, -29.69)"/>
            <rect class="cls-5" x="559.91" y="521.23" width="23.03" height="54.92" transform="translate(31.41 -30.94) rotate(3.19)"/>
            <rect class="cls-5" x="581.78" y="522.37" width="21.57" height="54.83" transform="translate(31.5 -32.11) rotate(3.19)"/>
            <rect class="cls-5" x="603.33" y="523.35" width="22.11" height="54.83" transform="translate(31.59 -33.33) rotate(3.19)"/>
            <rect class="cls-5" x="625.96" y="524.35" width="21.57" height="54.83" transform="translate(31.68 -34.57) rotate(3.19)"/>
            <rect class="cls-5" x="647.05" y="525.35" width="21.57" height="54.83" transform="translate(31.77 -35.74) rotate(3.19)"/>
            <rect class="cls-5" x="668.72" y="527.38" width="21.98" height="54.83" transform="translate(31.92 -36.95) rotate(3.19)"/>
            <rect class="cls-5" x="691.24" y="528.62" width="21.52" height="54.83" transform="translate(32.02 -38.19) rotate(3.19)"/>
            <rect class="cls-5" x="497.61" y="462.14" width="22.03" height="54.83" transform="translate(28.02 -27.54) rotate(3.19)"/>
            <rect class="cls-5" x="519.32" y="463.65" width="22.25" height="55.05" transform="translate(28.15 -28.75) rotate(3.19)"/>
            <rect class="cls-5" x="541.23" y="464.8" width="22.03" height="55.01" transform="translate(28.24 -29.96) rotate(3.19)"/>
            <rect class="cls-5" x="563.55" y="466.17" width="21.87" height="55.07" transform="translate(28.36 -31.2) rotate(3.19)"/>
            <rect class="cls-5" x="584.88" y="467.39" width="21.83" height="55.12" transform="translate(28.46 -32.38) rotate(3.19)"/>
            <rect class="cls-5" x="606.78" y="468.61" width="21.83" height="55.12" transform="translate(28.56 -33.6) rotate(3.19)"/>
            <rect class="cls-5" x="628.68" y="469.83" width="21.83" height="55.12" transform="translate(28.66 -34.81) rotate(3.19)"/>
            <rect class="cls-5" x="650.58" y="471.05" width="21.83" height="55.12" transform="translate(28.76 -36.03) rotate(3.19)"/>
            <rect class="cls-5" x="672.48" y="472.27" width="21.83" height="55.12" transform="translate(28.87 -37.24) rotate(3.19)"/>
            <rect class="cls-5" x="694.38" y="473.49" width="21.83" height="55.12" transform="translate(28.97 -38.46) rotate(3.19)"/>
            <polygon class="cls-5" points="320.49 505.1 270.76 502.17 269.31 526.41 318.77 529.58 320.49 505.1"/>
            <polygon class="cls-5" points="321.82 480.85 272.14 477.95 270.76 502.42 320.46 505.04 321.82 480.85"/>
            <path class="cls-5" d="M318.77,529.71l-1.1,30.72L279,557.82s-12.41-.78-11-16.37,1.21-15.58,1.21-15.58Z"/>
            <path class="cls-5" d="M323.23,450.81l-35.38-2.4s-14.1.37-15,15.64l-.75,13.3,49.67,3.45Z"/>
            <path class="cls-5" d="M743.63,493.25s.64-17.34-15.37-18.37c-4.75-.25-10.53-.73-10.53-.73l-3.07,55,26.72,1.57Z"/>
            <path class="cls-5" d="M741.38,530.75l-27.1-1.49L711.22,584l13.15.74s14.5,2.13,15.25-12S741.38,530.75,741.38,530.75Z"/>
        </g>
        <g id="TEXT-469" data-name="TEXT">
            <text class="cls-4" transform="translate(490.05 516.4) rotate(0.51)">MZ-3</text>
        </g>
        <g id="TEXT-470" data-name="TEXT">
            <text class="cls-8" transform="translate(291.7 544.9)">1</text>
        </g>
        <g id="TEXT-471" data-name="TEXT">
            <text class="cls-8" transform="translate(293.05 516.8)">2</text>
        </g>
        <g id="TEXT-472" data-name="TEXT">
            <text class="cls-8" transform="translate(294.69 490.53)">3</text>
        </g>
        <g id="TEXT-473" data-name="TEXT">
            <text class="cls-8" transform="translate(296.32 465.67)">4</text>
        </g>
        <g id="TEXT-474" data-name="TEXT">
            <text class="cls-8" transform="translate(328.82 478.85)">5</text>
        </g>
        <g id="TEXT-475" data-name="TEXT">
            <text class="cls-8" transform="translate(350.64 480.39)">6</text>
        </g>
        <g id="TEXT-476" data-name="TEXT">
            <text class="cls-8" transform="translate(372.6 482.55)">7</text>
        </g>
        <g id="TEXT-477" data-name="TEXT">
            <text class="cls-8" transform="translate(394.41 483.09)">8</text>
        </g>
        <g id="TEXT-478" data-name="TEXT">
            <text class="cls-8" transform="translate(415.28 485.36)">9</text>
        </g>
        <g id="TEXT-479" data-name="TEXT">
            <text class="cls-8" transform="translate(437.11 485.71)">10</text>
        </g>
        <g id="TEXT-480" data-name="TEXT">
            <text class="cls-8" transform="translate(458.6 486.86)">
                <tspan class="cls-9">1</tspan>
                <tspan x="5.01" y="0">1</tspan>
            </text>
        </g>
        <g id="TEXT-481" data-name="TEXT">
            <text class="cls-8" transform="translate(480.49 488.23)">12</text>
        </g>
        <g id="TEXT-482" data-name="TEXT">
            <text class="cls-8" transform="translate(500.36 489.46)">13</text>
        </g>
        <g id="TEXT-483" data-name="TEXT">
            <text class="cls-8" transform="translate(523.69 491.03)">14</text>
        </g>
        <g id="TEXT-484" data-name="TEXT">
            <text class="cls-8" transform="translate(547.94 492.85)">15</text>
        </g>
        <g id="TEXT-485" data-name="TEXT">
            <text class="cls-8" transform="translate(568.38 494.29)">16</text>
        </g>
        <g id="TEXT-486" data-name="TEXT">
            <text class="cls-8" transform="translate(590.88 496.3)">17</text>
        </g>
        <g id="TEXT-487" data-name="TEXT">
            <text class="cls-8" transform="translate(612.86 497.2)">18</text>
        </g>
        <g id="TEXT-488" data-name="TEXT">
            <text class="cls-8" transform="translate(634.78 498.59)">19</text>
        </g>
        <g id="TEXT-489" data-name="TEXT">
            <text class="cls-8" transform="translate(656.69 499.98)">20</text>
        </g>
        <g id="TEXT-490" data-name="TEXT">
            <text class="cls-8" transform="translate(678.61 501.37)">21</text>
        </g>
        <g id="TEXT-491" data-name="TEXT">
            <text class="cls-8" transform="translate(700.67 503.01)">22</text>
        </g>
        <g id="TEXT-492" data-name="TEXT">
            <text class="cls-8" transform="translate(722.72 504.46)">23</text>
        </g>
        <g id="TEXT-493" data-name="TEXT">
            <text class="cls-8" transform="translate(719.61 560.04)">24</text>
        </g>
        <g id="TEXT-494" data-name="TEXT">
            <text class="cls-8" transform="translate(696.62 558.02)">25</text>
        </g>
        <g id="TEXT-495" data-name="TEXT">
            <text class="cls-8" transform="translate(563.68 549.24)">31</text>
        </g>
        <g id="TEXT-496" data-name="TEXT">
            <text class="cls-8" transform="translate(542.68 548.23)">32</text>
        </g>
        <g id="TEXT-497" data-name="TEXT">
            <text class="cls-8" transform="translate(521.12 545.69)">33</text>
        </g>
        <g id="TEXT-498" data-name="TEXT">
            <text class="cls-8" transform="translate(498.68 545.19)">34</text>
        </g>
        <g id="TEXT-499" data-name="TEXT">
            <text class="cls-8" transform="translate(476.77 543.67)">35</text>
        </g>
        <g id="TEXT-500" data-name="TEXT">
            <text class="cls-8" transform="translate(454.85 542.28)">36</text>
        </g>
        <g id="TEXT-501" data-name="TEXT">
            <text class="cls-8" transform="translate(432.94 540.89)">37</text>
        </g>
        <g id="TEXT-502" data-name="TEXT">
            <text class="cls-8" transform="translate(411.02 539.5)">38</text>
        </g>
        <g id="TEXT-503" data-name="TEXT">
            <text class="cls-8" transform="translate(389.1 538.11)">39</text>
        </g>
        <g id="TEXT-504" data-name="TEXT">
            <text class="cls-8" transform="translate(367.19 536.72)">40</text>
        </g>
        <g id="TEXT-505" data-name="TEXT">
            <text class="cls-8" transform="translate(346.19 535.1)">41</text>
        </g>
        <g id="TEXT-506" data-name="TEXT">
            <text class="cls-8" transform="translate(675.14 556.16)">26</text>
        </g>
        <g id="TEXT-507" data-name="TEXT">
            <text class="cls-8" transform="translate(653.22 554.77)">27</text>
        </g>
        <g id="TEXT-508" data-name="TEXT">
            <text class="cls-8" transform="translate(631.3 553.38)">28</text>
        </g>
        <g id="TEXT-509" data-name="TEXT">
            <text class="cls-8" transform="translate(609.39 551.99)">29</text>
        </g>
        <g id="TEXT-510" data-name="TEXT">
            <text class="cls-8" transform="translate(587.48 550.39)">30</text>
        </g>
        <g id="TEXT-511" data-name="TEXT">
            <text class="cls-8" transform="translate(324.27 533.71)">42</text>
        </g>
        <g id="TEXT-512" data-name="TEXT">
            <text class="cls-12" transform="translate(399.1 575.26) rotate(3.03)">
                <tspan class="cls-13">C</tspan>
                <tspan class="cls-14" x="3.8" y="0">ALLE EL SA</tspan>
                <tspan class="cls-15" x="33.38" y="0">L</tspan>
                <tspan class="cls-16" x="36.07" y="0">V</tspan>
                <tspan x="39.34" y="0">ADOR</tspan>
            </text>
        </g>
    </g>
    <g id="CALLES">
        <g id="TEXT-513" data-name="TEXT">
            <text class="cls-17" transform="translate(888.53 712.27) rotate(-87.7)">
                <tspan class="cls-18">A</tspan>
                <tspan x="5.2" y="0">VENI</tspan>
                <tspan class="cls-19" x="23.32" y="0">D</tspan>
                <tspan x="29.39" y="0">A AE</tspan>
                <tspan class="cls-20" x="47.33" y="0">R</tspan>
                <tspan x="52.36" y="0">OPUE</tspan>
                <tspan class="cls-21" x="74.32" y="0">R</tspan>
                <tspan class="cls-22" x="79.41" y="0">T</tspan>
                <tspan class="cls-23" x="83.78" y="0">O</tspan>
            </text>
        </g>
        <g id="TEXT-514" data-name="TEXT">
            <text class="cls-12" transform="translate(250.01 647.3) rotate(-87.7)">
                <tspan class="cls-13">C</tspan>
                <tspan class="cls-14" x="3.8" y="0">ALLE MEXI</tspan>
                <tspan class="cls-24" x="32.24" y="0">C</tspan>
                <tspan x="35.88" y="0">O</tspan>
            </text>
        </g>
        <g id="TEXT-515" data-name="TEXT">
            <text class="cls-25" transform="translate(748.04 688.12) rotate(-87.7)">C<tspan class="cls-14" x="3.8" y="0">ALLE A</tspan>
                <tspan class="cls-26" x="22.51" y="0">R</tspan>
                <tspan class="cls-27" x="26.04" y="0">GENTINA</tspan>
            </text>
        </g>
        <g id="TEXT-516" data-name="TEXT">
            <text class="cls-12" transform="translate(1040.09 700.68) rotate(-87.7)">
                <tspan class="cls-13">C</tspan>
                <tspan class="cls-14" x="3.8" y="0">ALLE B</tspan>
                <tspan class="cls-28" x="22.06" y="0">R</tspan>
                <tspan x="25.59" y="0">ASIL</tspan>
            </text>
        </g>
        <g id="TEXT-517" data-name="TEXT">
            <text class="cls-12" transform="translate(1456.99 721.14) rotate(-87.7)">
                <tspan class="cls-13">C</tspan>
                <tspan class="cls-14" x="3.8" y="0">ALLE </tspan>
                <tspan class="cls-29" x="18.52" y="0">C</tspan>
                <tspan x="22.17" y="0">O</tspan>
                <tspan class="cls-30" x="26.65" y="0">L</tspan>
                <tspan x="29.47" y="0">OMBIA</tspan>
            </text>
        </g>
        <g id="TEXT-518" data-name="TEXT">
            <text class="cls-25" transform="translate(1874.32 741.5) rotate(-87.7)">C<tspan class="cls-14" x="3.8" y="0">ALLE PERU</tspan></text>
        </g>
        <g id="TEXT-519" data-name="TEXT">
            <text class="cls-12" transform="translate(1655.85 775.17) rotate(3.03)">
                <tspan class="cls-13">C</tspan>
                <tspan class="cls-14" x="3.8" y="0">ALLE EC</tspan>
                <tspan class="cls-31" x="25.51" y="0">U</tspan>
                <tspan x="29.5" y="0">ADOR</tspan>
            </text>
        </g>
        <g id="TEXT-520" data-name="TEXT">
            <text class="cls-25" transform="translate(1649.13 909.57) rotate(3.03)">C<tspan class="cls-14" x="3.8" y="0">ALLE CHILE</tspan></text>
        </g>
        <g id="TEXT-521" data-name="TEXT">
            <text class="cls-12" transform="translate(1647.83 641.66) rotate(3.03)">
                <tspan class="cls-13">C</tspan>
                <tspan class="cls-14" x="3.8" y="0">ALLE</tspan>
                <tspan class="cls-32" x="17.14" y="0"> </tspan>
                <tspan x="18.29" y="0">VENEZUELA</tspan>
            </text>
        </g>
        <g id="TEXT-522" data-name="TEXT">
            <text class="cls-25" transform="translate(2267.02 868.79) rotate(-58.29)">C<tspan class="cls-14" x="3.8" y="0">ALLE CUBA</tspan></text>
        </g>
        <g id="TEXT-523" data-name="TEXT">
            <text class="cls-12" transform="translate(2421.79 876.73) rotate(-58.29)">
                <tspan class="cls-33">A</tspan>
                <tspan x="3.64" y="0">VENI</tspan>
                <tspan class="cls-34" x="16.32" y="0">D</tspan>
                <tspan x="20.57" y="0">A </tspan>
                <tspan class="cls-35" x="25.94" y="0">P</tspan>
                <tspan class="cls-14" x="28.86" y="0">AN</tspan>
                <tspan class="cls-36" x="37.13" y="0">A</tspan>
                <tspan class="cls-37" x="41.09" y="0">M</tspan>
                <tspan x="46.26" y="0">A</tspan>
            </text>
        </g>
        <g id="TEXT-524" data-name="TEXT">
            <text class="cls-38" transform="translate(2035.37 512.2) rotate(3.03)">
                <tspan class="cls-39">A</tspan>
                <tspan class="cls-40" x="4.37" y="0">VENI</tspan>
                <tspan class="cls-41" x="19.59" y="0">D</tspan>
                <tspan class="cls-40" x="24.68" y="0">A SAN</tspan>
                <tspan class="cls-42" x="44.91" y="0">T</tspan>
                <tspan x="48.58" y="0">O DOMINGO</tspan>
            </text>
        </g>
        <g id="TEXT-525" data-name="TEXT">
            <text class="cls-38" transform="translate(586.59 436.96) rotate(3.03)">
                <tspan class="cls-39">A</tspan>
                <tspan class="cls-40" x="4.37" y="0">VENI</tspan>
                <tspan class="cls-41" x="19.59" y="0">D</tspan>
                <tspan class="cls-40" x="24.68" y="0">A SAN</tspan>
                <tspan class="cls-42" x="44.91" y="0">T</tspan>
                <tspan x="48.58" y="0">O DOMINGO</tspan>
            </text>
        </g>
        <g id="TEXT-526" data-name="TEXT">
            <text class="cls-12" transform="translate(2298.46 623.79) rotate(-87.7)">
                <tspan class="cls-13">C</tspan>
                <tspan class="cls-14" x="3.8" y="0">ALLE </tspan>
                <tspan class="cls-29" x="18.52" y="0">C</tspan>
                <tspan x="22.17" y="0">OS</tspan>
                <tspan class="cls-43" x="29.87" y="0">T</tspan>
                <tspan x="32.61" y="0">A RI</tspan>
                <tspan class="cls-44" x="43.04" y="0">C</tspan>
                <tspan x="46.85" y="0">A</tspan>
            </text>
        </g>
        <g id="TEXT-527" data-name="TEXT">
            <text class="cls-12" transform="translate(383.89 837.62) rotate(3.03)">
                <tspan class="cls-13">C</tspan>
                <tspan class="cls-14" x="3.8" y="0">ALLE </tspan>
                <tspan class="cls-45" x="18.52" y="0">P</tspan>
                <tspan x="21.44" y="0">A</tspan>
                <tspan class="cls-46" x="25.43" y="0">R</tspan>
                <tspan class="cls-47" x="28.97" y="0">A</tspan>
                <tspan class="cls-27" x="32.85" y="0">G</tspan>
                <tspan class="cls-48" x="37.06" y="0">U</tspan>
                <tspan class="cls-49" x="41.06" y="0">A</tspan>
                <tspan x="44.53" y="0">Y</tspan>
            </text>
        </g>
        <g id="TEXT-528" data-name="TEXT">
            <text class="cls-12" transform="translate(394.93 707.36) rotate(3.03)">
                <tspan class="cls-13">C</tspan>
                <tspan class="cls-14" x="3.8" y="0">ALLE URUG</tspan>
                <tspan class="cls-31" x="34.67" y="0">U</tspan>
                <tspan class="cls-50" x="38.66" y="0">A</tspan>
                <tspan x="42.13" y="0">Y</tspan>
            </text>
        </g>
    </g>
</svg><tspan class="cls-13">C</tspan>
                <tspan class="cls-14" x="3.8" y="0">ALLE </tspan>
                <tspan class="cls-29" x="18.52" y="0">C</tspan>
                <tspan x="22.17" y="0">O</tspan>
                <tspan class="cls-30" x="26.65" y="0">L</tspan>
                <tspan x="29.47" y="0">OMBIA</tspan>
            </text>
        </g>
        <g id="TEXT-518" data-name="TEXT">
            <text class="cls-25" transform="translate(1874.32 741.5) rotate(-87.7)">C<tspan class="cls-14" x="3.8" y="0">ALLE PERU</tspan></text>
        </g>
        <g id="TEXT-519" data-name="TEXT">
            <text class="cls-12" transform="translate(1655.85 775.17) rotate(3.03)">
                <tspan class="cls-13">C</tspan>
                <tspan class="cls-14" x="3.8" y="0">ALLE EC</tspan>
                <tspan class="cls-31" x="25.51" y="0">U</tspan>
                <tspan x="29.5" y="0">ADOR</tspan>
            </text>
        </g>
        <g id="TEXT-520" data-name="TEXT">
            <text class="cls-25" transform="translate(1649.13 909.57) rotate(3.03)">C<tspan class="cls-14" x="3.8" y="0">ALLE CHILE</tspan></text>
        </g>
        <g id="TEXT-521" data-name="TEXT">
            <text class="cls-12" transform="translate(1647.83 641.66) rotate(3.03)">
                <tspan class="cls-13">C</tspan>
                <tspan class="cls-14" x="3.8" y="0">ALLE</tspan>
                <tspan class="cls-32" x="17.14" y="0"> </tspan>
                <tspan x="18.29" y="0">VENEZUELA</tspan>
            </text>
        </g>
        <g id="TEXT-522" data-name="TEXT">
            <text class="cls-25" transform="translate(2267.02 868.79) rotate(-58.29)">C<tspan class="cls-14" x="3.8" y="0">ALLE CUBA</tspan></text>
        </g>
        <g id="TEXT-523" data-name="TEXT">
            <text class="cls-12" transform="translate(2421.79 876.73) rotate(-58.29)">
                <tspan class="cls-33">A</tspan>
                <tspan x="3.64" y="0">VENI</tspan>
                <tspan class="cls-34" x="16.32" y="0">D</tspan>
                <tspan x="20.57" y="0">A </tspan>
                <tspan class="cls-35" x="25.94" y="0">P</tspan>
                <tspan class="cls-14" x="28.86" y="0">AN</tspan>
                <tspan class="cls-36" x="37.13" y="0">A</tspan>
                <tspan class="cls-37" x="41.09" y="0">M</tspan>
                <tspan x="46.26" y="0">A</tspan>
            </text>
        </g>
        <g id="TEXT-524" data-name="TEXT">
            <text class="cls-38" transform="translate(2035.37 512.2) rotate(3.03)">
                <tspan class="cls-39">A</tspan>
                <tspan class="cls-40" x="4.37" y="0">VENI</tspan>
                <tspan class="cls-41" x="19.59" y="0">D</tspan>
                <tspan class="cls-40" x="24.68" y="0">A SAN</tspan>
                <tspan class="cls-42" x="44.91" y="0">T</tspan>
                <tspan x="48.58" y="0">O DOMINGO</tspan>
            </text>
        </g>
        <g id="TEXT-525" data-name="TEXT">
            <text class="cls-38" transform="translate(586.59 436.96) rotate(3.03)">
                <tspan class="cls-39">A</tspan>
                <tspan class="cls-40" x="4.37" y="0">VENI</tspan>
                <tspan class="cls-41" x="19.59" y="0">D</tspan>
                <tspan class="cls-40" x="24.68" y="0">A SAN</tspan>
                <tspan class="cls-42" x="44.91" y="0">T</tspan>
                <tspan x="48.58" y="0">O DOMINGO</tspan>
            </text>
        </g>
        <g id="TEXT-526" data-name="TEXT">
            <text class="cls-12" transform="translate(2298.46 623.79) rotate(-87.7)">
                <tspan class="cls-13">C</tspan>
                <tspan class="cls-14" x="3.8" y="0">ALLE </tspan>
                <tspan class="cls-29" x="18.52" y="0">C</tspan>
                <tspan x="22.17" y="0">OS</tspan>
                <tspan class="cls-43" x="29.87" y="0">T</tspan>
                <tspan x="32.61" y="0">A RI</tspan>
                <tspan class="cls-44" x="43.04" y="0">C</tspan>
                <tspan x="46.85" y="0">A</tspan>
            </text>
        </g>
        <g id="TEXT-527" data-name="TEXT">
            <text class="cls-12" transform="translate(383.89 837.62) rotate(3.03)">
                <tspan class="cls-13">C</tspan>
                <tspan class="cls-14" x="3.8" y="0">ALLE </tspan>
                <tspan class="cls-45" x="18.52" y="0">P</tspan>
                <tspan x="21.44" y="0">A</tspan>
                <tspan class="cls-46" x="25.43" y="0">R</tspan>
                <tspan class="cls-47" x="28.97" y="0">A</tspan>
                <tspan class="cls-27" x="32.85" y="0">G</tspan>
                <tspan class="cls-48" x="37.06" y="0">U</tspan>
                <tspan class="cls-49" x="41.06" y="0">A</tspan>
                <tspan x="44.53" y="0">Y</tspan>
            </text>
        </g>
        <g id="TEXT-528" data-name="TEXT">
            <text class="cls-12" transform="translate(394.93 707.36) rotate(3.03)">
                <tspan class="cls-13">C</tspan>
                <tspan class="cls-14" x="3.8" y="0">ALLE URUG</tspan>
                <tspan class="cls-31" x="34.67" y="0">U</tspan>
                <tspan class="cls-50" x="38.66" y="0">A</tspan>
                <tspan x="42.13" y="0">Y</tspan>
            </text>
        </g>
    </g>
</svg>



  {!!Html::script('js/plugins/toastr.min.js')!!}
   
        <!-- Bootstrap 3.3.5 -->
        {!!Html::script('js/bootstrap/bootstrap.min.js')!!}
        {!!Html::script('js/bootstrap/bootstrap-select.min.js')!!}

        <!-- AdminLTE App -->
        <script src="{{asset('js/plugins/app.js')}}"></script>
<script type="text/javascript">
  $('#loading').css('display','none');
</script>
