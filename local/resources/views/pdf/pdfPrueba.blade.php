<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
    <title>PLAN DE CUENTA</title>
</head>

<body>
<div style="width: 100%;border: rgb(196, 209, 220) solid 3px; margin-bottom: 10px; border-radius: 25px; padding: 10px; background: #e6e6e8">
<div style="width: 80%;display: inline-block;">
  <table style="width: 100%" >
    <tr>
    <td width="250px"><font size="2" style="color:red;font-weight: bold; "">Nro: <?php echo $cliente[0]->idVenta; ?></font></td>
      <td width="320px"> <font size="6">Plan de Pago</font></td>
    
    </tr> 
  </table>
 
  <!-- <table cellspacing="3" cellpadding="2" style=" border-spacing:  1px">
  <tr style="padding:  1px;text-align: left;">
    <th style="text-align: left;">Cliente: </th>
    <td style="text-align: left;"> MODESTO SALDANA MICHALEC </td>
    <td style="font-weight: bold">C.I. :</td>
    <td style="text-align: left;"> 8883510</td>
  </tr>
  <tr>
 <th  style="text-align: left;">Fecha de Venta: </th>
    <td>2017/02/02 15:00:00</td>
     <td style="font-weight: bold">Cuota Inicial:</td>
     <td>3555</td>
  </tr>
  <tr >

 <th style="text-align: left;">Urbanización: </th>
  <td style="text-align: left;">La Barranca</td>
   <td style="text-align: left;font-weight: bold">Fase:</td>
   <td style="text-align: left;">1</td>

   
  <td style="font-weight: bold">Manzano:</td>
  <td>1</td>
  </tr>
  <tr>
    <th style="text-align: left;font-weight: bold">Nro. Lote: </th>
  <td style="text-align: left;">5 </td>
  <td style="font-weight: bold;text-align: left">Precio del lote</td>
  <td style="text-align: left">3555</td>
   <td style="font-weight: bold;text-align: left">Descuento</td>
  <td style="text-align: left">10%</td>
  </tr>
  <tr>
    <th style="text-align: left">Precio de Venta:</th>
    <td>3400</td>
  </tr>
  
  </table>  -->
  <?php 
if ($cliente[0]->moneda=="BOLIVIANO") {
  $totalapagar=$cliente[0]->totalapagarBs;
}else{
  $totalapagar=$cliente[0]->totalapagar;

}
   ?>
  <div style="margin-bottom: 10px">
    <span style="margin-right: 10px"><b> Cliente: </b> <?php echo $cliente[0]->nombre.' '.$cliente[0]->apellidos; ?></span>
    <span style="margin-right: 10px;"><b> CI:</b> <?php echo $cliente[0]->ci.' '.$cliente[0]->expedido.'.'; ?></span>
    </div> 
    <span style="margin-right: 10px"><b> Fecha de Venta: </b> <?php echo $cliente[0]->fecha; ?></span>
    <span style="margin-right: 10px"><b> Cuota Inicial:</b> <?php echo $totalapagar;  ?></span> <br>
    <div style="margin-top: 10px">
    <span style="margin-right: 10px"><b> Urbanizacion: </b> <?php echo $cliente[0]->nombreProyecto; ?></span>
      <span style="margin-right: 10px"><b> FASE: </b> <?php echo $cliente[0]->fase; ?></span>  
      <span style="margin-right: 10px"><b> MANZANO: </b> <?php echo $cliente[0]->manzano; ?></span>  
      <span style="margin-right: 10px"><b> LOTE: </b> <?php echo $cliente[0]->nroLote; ?></span>  
    </div> 
<div style="margin-top: 10px">
    <span style="margin-right: 10px"><b> Superficie: </b> <?php echo $cliente[0]->superficie; ?> MT2</span> 
    <?php 

    // if ($cliente[0]->descuento!=null && $cliente[0]->descuento>0) {
    //   if ($cliente[0]->moneda=="BOLIVIANO") {
    //     $venta=($cliente[0]->precioBs*100)/$cliente[0]->descuento;
    //     $precio=$cliente[0]->precioBs-$venta;
    //   }else{
    //     $venta=($cliente[0]->precio*100)/$cliente[0]->descuento;
    //     $precio=$cliente[0]->precioBs-$venta;
    //   } 
    // } 
    // else{
    //   if ($cliente[0]->moneda=="BOLIVIANO") {
    //     $precio=$cliente[0]->precioBs;
    //   }else{
    //     $precio=$cliente[0]->precio;

    //   }
    // }
      if ($cliente[0]->moneda=="BOLIVIANO") {
        $precio=$cliente[0]->montoTotalBs;
      }else{
        $precio=$cliente[0]->montoTotal;

      }
    ?>
    <span style="margin-right: 10px"><b> Precio de Venta: </b> <?php echo  $precio; ?> </span> 

    </div> 

</div>
<div style="width: 20%; display: inline-block;">
  <img src="{{asset('images/logo-oficial.png')}}" width="140px" height="125px">
</div>
</div>

<?php $total=0; ?>
  <table border="2" cellspacing="3" cellpadding="5" style="width: 100% ; border-radius: 15px; border-color:rgba(57, 151, 190, 1);" >
    <thead style=" border-radius: 25px;">
      <tr style="background: rgba(57, 151, 190, 1); text-align: center;">
        <th>Nro.</th>

        <th>Fecha de Pago</th>
        <th>Cuota</th>
        <th>Estado</th>
        
      </tr>
    </thead> 

    <tbody>   

 
        <?php 
        if ($cliente[0]->moneda!="BOLIVIANO") {
          
        
                for ($i=0; $i <count($cuotas) ; $i++) { 
                  echo  '   <tr align="center">
                  <td>'.$cuotas[$i]->num.'</td>
                  <td>'.$cuotas[$i]->fechaLimite.'</td>
                  <td>'.$cuotas[$i]->monto.'</td>';
                  if ($cuotas[$i]->estado==='d') {
                    echo '<td>DEBE</td></tr>';
                  }else{
                     echo '<td>PAGADO</td></tr>';
                  }
                }
                }else{
                   for ($i=0; $i <count($cuotas) ; $i++) { 
                  echo  '   <tr align="center">
                  <td>'.$cuotas[$i]->num.'</td>
                  <td>'.$cuotas[$i]->fechaLimite.'</td>
                  <td>'.$cuotas[$i]->montoBs.'</td>';
                  if ($cuotas[$i]->estado==='d') {
                    echo '<td>DEBE</td></tr>';
                  }else{
                     echo '<td>PAGADO</td></tr>';
                  }
                }
                }
           ?>
   
    
   


    </tbody>

  <tfoot border="2" style="text-align: center; background: #4EB7EC">
    <td style="font-weight: bold">Total</td>
    <td></td>
    <td> <?php 
    if ($cliente[0]->moneda!="BOLIVIANO") 
    {
    echo $totalCuotas[0]->totalCuotas; 
    }else
    {
    echo $totalCuotas[0]->totalCuotasBs; 

    }
    ?> </td>
    <td></td>
  </tfoot>

  </table>

  
</body>
</html>
