<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\ConsumoRequest;
use App\DetalleCuota;
use App\Cuotas;
use App\PagoCuota;
use App\PlanPago;
use App\PlanDePago;
use App\TransaccionPago;
use App\AutorizacionPago;
use App\Venta;

use App\Asiento;
use App\Detalle;

use Session;
use Redirect;
use DB;

class PagoController extends Controller {
  var $puedeGuardar=0;
var   $puedeModificar=0;
  var  $puedeEliminar=0;
   var $puedeImprimir=0;
  var $puedeListar=0;
  var $puedeVerReporte=0;
     public function __construct(Request $request) {
     if (Session::get('user')==null || Session::get('idPerfil')=="" ) {
    Session::put('user', null); 
      $this->middleware('auth');

         $this->middleware('admin');
        $this->middleware('auth',['only'=>'admin']);
    }else{
       $verficar=DB::select("select modulo.nombre,perfilobjeto.puedeGuardar,perfilobjeto.puedeModificar,perfilobjeto.puedeEliminar,perfilobjeto.puedeListar, perfilobjeto.puedeVerReporte,perfilobjeto.puedeImprimir,objeto.urlObjeto from perfil,perfilobjeto,objeto,modulo where perfilobjeto.deleted_at IS NULL and perfil.id=perfilobjeto.idPerfil and perfilobjeto.idObjeto=objeto.id and modulo.id=objeto.idModulo and objeto.urlObjeto='/PagoVenta'  and perfil.id=".Session::get('idPerfil'));
       
         if (count($verficar)==0) {
  Session::flash('message-error', 'No tiene privilegio');
      Session::put('user', null);
      $this->middleware('auth');

         $this->middleware('admin');
        $this->middleware('auth',['only'=>'admin']); 
         }else{
                $this->puedeGuardar=$verficar[0]->puedeGuardar;
  $this->puedeModificar=$verficar[0]->puedeModificar;
  $this->puedeEliminar=$verficar[0]->puedeEliminar;
  $this->puedeImprimir=$verficar[0]->puedeImprimir;
  $this->puedeListar=$verficar[0]->puedeListar;
 $this->puedeVerReporte=$verficar[0]->puedeVerReporte;
         }
       

    }
  }

  function index() {
     $pago=DB::select("SELECT * FROM planpago WHERE planpago.estado='d'");
      return view('planpago.index', compact('pago'));
  }

public function store(Request $request)
{
    try
    {
      DB::beginTransaction();              
      $monto = $request['montoSus'] + $request['montoBancoSus'];
      switch ($request['tipoPago'])
      {
        case 'e':
              if ($request['montoSus'] == "")
              {
                DB::rollback();
                Session::flash('message-error', 'INTRODUSCA LOS DATOS REQUERIDOS');
                return Redirect::to('PlanPago/'.$request['idVenta']);           
              }
              break;
        case 'b':
              if ($request['montoBancoSus'] == "" || $request['nroDocumento'] == "" || $request['banco'] == 0 || $request['cuenta'] == 0)
              {
                DB::rollback();
                Session::flash('message-error', 'INTRODUSCA LOS DATOS REQUERIDOS');
                return Redirect::to('PlanPago/'.$request['idVenta']);           
              }   
              break;        
        case 'be':
              if ($request['montoSus'] == "" || $request['montoBancoSus'] == "" || $request['nroDocumento'] == "" || $request['banco'] == 0 || $request['cuenta'] == 0)
              {
                DB::rollback();
                Session::flash('message-error', 'INTRODUSCA LOS DATOS REQUERIDOS');
                return Redirect::to('PlanPago/'.$request['idVenta']);           
              }         
              break;        
      }      
      $pago=DB::select("SELECT (IFNULL(SUM(detallecuota.monto),0) + ".$monto.")as monto,plandepago.saldoBs,plandepago.saldoUsd FROM cuotas,plandepago,venta,detallecuota WHERE detallecuota.idCuota=cuotas.id and cuotas.idPlandePago=plandepago.id and plandepago.idVenta=venta.id and plandepago.idVenta=".$request['idVenta']);// LA SUMA DE LA TABLA DE PAGO DE ESA VENTA MAS LO Q ESTA INTRODUCIENDO EN EL TEXTO
      $cuota=DB::select("SELECT SUM(cuotas.monto)as cuota from cuotas,plandepago,venta WHERE cuotas.idPlandePago=plandepago.id and plandepago.idVenta=venta.id and  plandepago.idVenta=".$request['idVenta']);//LA SUMA DE TODO EL PLAN DE PAGO DE ESA VENTA
      $cuota_pago=DB::select("SELECT *from  cuotas,plandepago,venta WHERE cuotas.idPlandePago=plandepago.id and plandepago.idVenta=venta.id and  plandepago.idVenta=".$request['idVenta']." LIMIT 1");//OBTENGO LA CUOTA Q SE PAGA POR MES

      if ($pago[0]->monto > $cuota[0]->cuota)
      { //EN CASO Q SEA MAYOR L MONTO Q INTRODUJO Q LA CUOTA A PAGAR
        Session::flash('message-error', 'LA CANTIDAD A COBRAR ES MAYOR AL MONTO A PAGAR');
        return Redirect::to('PlanPago/'.$request['idVenta']);             
      }
      else
      {//SI NO HACE TODA LA OPERACION DE PAGAR CUOTA
        if ($pago[0]->monto == $cuota[0]->cuota)
        {//CUANDO YA SE PAGO TODO LA CUOTA
          $debe=DB::select("SELECT cuotas.id,cuotas.monto from cuotas,plandepago,venta WHERE cuotas.estado='d' AND cuotas.idPlandePago=plandepago.id and plandepago.idVenta=venta.id and plandepago.idVenta=".$request['idVenta']);                
          foreach ($debe as $key => $value)
          { //ENTRA AL FOREACH Y ACTUALIZA EL ESTADO DEL PLAN DE PAGO  
            $det_cuota=DB::select("SELECT IFNULL(SUM(detallecuota.monto),0)as monto FROM detallecuota WHERE detallecuota.idCuota=".$value->id);            
            $restante=abs($det_cuota[0]->monto - $value->monto);
            $Pago=DetalleCuota::create([
              'monto'=>$restante,
              'tipoPago'=>$request['tipoPago'],
              'idCuota'=>$value->id
            ]);//CREO EN LA 
            $cuotas = Cuotas::find($value->id);
            $cuotas->fill([
              'estado'=>'p'
            ]);
            $cuotas->save();                                              
          }

          $plandepago=DB::select("SELECT plandepago.id FROM plandepago,venta WHERE plandepago.idVenta=venta.id and plandepago.idVenta=".$request['idVenta']);
          $planpago = PlanDePago::find($plandepago[0]->id);//SE ACTUALIZA EL PLAN DE PAGO a "p" PAGADO
          $planpago->fill([
            'estado'=>'p'
          ]);
          $planpago->save();   

          $venta = Venta::find($request['idVenta']);//ACTUALIZO EL ESTADO DE LA TABLA VENTA 
          $venta->fill([
            'estado'=>'p'
          ]);
          $venta->save();                           
        }
        else
        {
            $verificar=$pago[0]->monto / $cuota_pago[0]->monto;
            // return "pago-monto".$pago[0]->monto ." cuotapago".$cuota_pago[0]->monto;
            $pagado=DB::select("SELECT COUNT(*)as contador FROM cuotas,plandepago,venta WHERE  plandepago.idVenta=venta.id and cuotas.estado='p' AND cuotas.idPlandePago=plandepago.id and venta.id=".$request['idVenta']);
            if (intval($verificar) > $pagado[0]->contador)
            {
              $limit = intval($verificar) - $pagado[0]->contador;

              $debe=DB::select("SELECT cuotas.id,cuotas.monto FROM cuotas,plandepago,venta WHERE  plandepago.idVenta=venta.id and cuotas.idPlandePago=plandepago.id and plandepago.idVenta=".$request['idVenta']." AND cuotas.estado='d' LIMIT ".$limit);        
              foreach ($debe as $key => $value)
              { //ENTRA AL FOREACH Y ACTUALIZA EL ESTADO DEL PLAN DE PAGO
                $det_cuota=DB::select("SELECT IFNULL(SUM(detallecuota.monto),0)as monto FROM detallecuota WHERE detallecuota.idCuota=".$value->id);            
                $restante=abs($det_cuota[0]->monto - $value->monto);
                $Pago=DetalleCuota::create([
                  'monto'=>$restante,
                  'tipoPago'=>$request['tipoPago'],
                  'idCuota'=>$value->id
                ]);//CREO EN LA 
                $cuotas = Cuotas::find($value->id);
                $cuotas->fill([
                  'estado'=>'p'
                ]);
                $cuotas->save();                                             
                $monto=$monto-$restante;
              }

              if ($monto != 0)
              {
                $debe=DB::select("SELECT cuotas.id,cuotas.monto FROM cuotas,plandepago,venta WHERE plandepago.idVenta=venta.id and cuotas.idPlandePago=plandepago.id and plandepago.idVenta=".$request['idVenta']." AND cuotas.estado='d' LIMIT 1");        
                foreach ($debe as $key => $value)
                { //ENTRA AL FOREACH Y ACTUALIZA EL ESTADO DEL PLAN DE PAGO EL SOBRANTE
                  $det_cuota=DB::select("SELECT IFNULL(SUM(detallecuota.monto),0)as monto FROM detallecuota WHERE detallecuota.idCuota=".$value->id);            
                  $Pago=DetalleCuota::create([
                    'monto'=>$monto,
                    'tipoPago'=>$request['tipoPago'],
                    'idCuota'=>$value->id
                  ]);
                }                    
              }                
            }
            else 
            {
              $debe=DB::select("SELECT cuotas.id,cuotas.monto FROM cuotas,plandepago,venta WHERE plandepago.idVenta=venta.id and cuotas.idPlandePago=plandepago.id and plandepago.idVenta=".$request['idVenta']." AND cuotas.estado='d' LIMIT 1");        
              foreach ($debe as $key => $value) { //ENTRA AL FOREACH Y ACTUALIZA EL ESTADO DEL PLAN DE PAGO EL SOBRANTE
                $det_cuota=DB::select("SELECT IFNULL(SUM(detallecuota.monto),0)as monto FROM detallecuota WHERE detallecuota.idCuota=".$value->id);
                $Pago=DetalleCuota::create([
                  'monto'=>$monto,
                  'tipoPago'=>$request['tipoPago'],
                  'idCuota'=>$value->id
                ]);
              }                
            }
        }

        date_default_timezone_set('America/La_Paz');
        ini_set('date.timezone','America/La_Paz');
        $fecha = date("Y-m-d H:i:s");

        $saldoDeuda=DB::select("SELECT ABS((SELECT IFNULL(SUM(detallecuota.monto),0)as monto FROM plandepago,cuotas,detallecuota WHERE plandepago.id=cuotas.idPlandePago AND cuotas.id=detallecuota.idCuota AND plandepago.idVenta=".$request['idVenta'].") - (SELECT SUM(cuotas.monto) FROM plandepago,cuotas WHERE plandepago.id=cuotas.idPlandePago AND plandepago.idVenta=".$request['idVenta'].")) as cuota");

        $pagoCuota=PagoCuota::create([
            'totalPagoBs'=>$request['txtTotalpagoBs'],
            'totalPagoUsd'=>$request['txtTotalpagoSus'],
            'pagoBs'=>$request['pagoBs'],
            'pagoUsd'=>$request['pagoSus'],
            'cambioUsd'=>$request['txtCambioBs'],
            'cambioBs'=>$request['txtCambioSus'],
            'fecha'=>$fecha,
            'moneda'=>$request['tipoMoneda'],
            'tipoPago'=>$request['tipoPago'],
            'saldoDeuda'=>$saldoDeuda[0]->cuota,
            'idPlandePago'=>$request['id_plan_pago']
          ]);
       
        
        if ($request['tipoPago'] != 'e')
        { //Cuando es distinto de 'e' significa q escogio banco o banco-efectivo por lo tanto igual se crea en la tabla transaccion pago
          TransaccionPago::create([
            'idPago'=>$pagoCuota['id'],
            'idBanco'=>$request['banco'],
            'idCuenta'=>$request['cuenta'],
            'nroDocumento'=>$request['nroDocumento'],
            'monto'=>$request['montoBancoSus'],
            'fecha'=>$request['fecha']
          ]); //SE CREA EN LA TABLA TRANSACCIONPAGO CUANDO ELIGE TIPO BANCO
        } 
        
        if(Session::get('idPerfilAutorizacion')!=null){
          AutorizacionPago::create([
            'idEmpleado'=>Session::get('idPerfilAutorizacion'),
            'moneda'=>$request['compra_aux'],
            'idPago'=>$Pago['id']
          ]);
          Session::put('idPerfilAutorizacion', null);  
        }

        //---------------------------------- Contabilidad ----------------------------------------------------------//
        $categoria = DB::select("SELECT * FROM categoriacuenta WHERE nombre='Asiento Diario'");
        $gestion = DB::select("SELECT * FROM gestion WHERE estado=1");
        $tipocambio=DB::select("SELECT * FROM tipocambio where deleted_at IS NULL");
        $contAsiento=DB::select("SELECT count(*) as count from asiento where id_gestion=".$gestion[0]->id." order by id desc limit 1");
        $nroAsiento=DB::select("SELECT * from asiento where id_gestion=".$gestion[0]->id." order by id desc limit 1");
        $nroAs=0;
        $nro_detalle = 1;
        $fecha_transaccion = date("Y-m-d H:i:s");

        if($contAsiento[0]->count > 0)
        {
          $nroAs = $nroAsiento[0]->nro_asiento;
        }

        $asiento=Asiento::create([
          'nro_asiento'=>$nroAs + 1,
          'tipo'=>1,// 1 = Ingreso, 2 = Egreso, 3 = Traspaso
          'glosa'=>$request['glosa'],
          'fecha_transaccion'=>$fecha_transaccion,
          'cambio_tipo'=>$tipocambio[0]->monedaVenta,
          'estado'=>1,
          'id_categoria'=>$categoria[0]->id,
          'id_gestion'=>$gestion[0]->id,
          'id_tipo_cambio'=>$tipocambio[0]->id,
          'id_usuario'=>Session::get('idEmpleado')
        ]);
        //----------------------------------- fin Contabilidad -----------------------------------------------------//
        
        if ($request['tipoPago']=='e') {
            $Monto = $request['monto'];
            $MontoBs = $request['montoBs'];
            //---------------------------------- Contabilidad CAJA----------------------------------------------------------//
            $cuentaautomatica = DB::select("SELECT * FROM cuentaautomatica WHERE nombre='Caja'");
            Detalle::create([
              'id_cuenta'=>$cuentaautomatica[0]->id_cuenta,
              'id_asiento'=>$asiento['id'],
              'nro_detalle'=>$nro_detalle,
              'tipo'=>1,//1 = Debe, 2 = Haber
              'montoSus'=>$request['montoSus'],
              'montoBs'=>$request['montoBs']
            ]);

            $nro_detalle++;
            //----------------------------------- fin Contabilidad -----------------------------------------------------//
        }
        
        if ($request['tipoPago'] == "be") {
            //---------------------------------- Contabilidad BANCO CAJA------------------------------------------------//
            //CAJA
            $cuentaautomatica = DB::select("SELECT * FROM cuentaautomatica WHERE nombre='Caja'");                      
            Detalle::create([
              'id_cuenta'=>$cuentaautomatica[0]->id_cuenta,
              'id_asiento'=>$asiento['id'],
              'nro_detalle'=>$nro_detalle,
              'tipo'=>1,//1 = Debe, 2 = Haber
              'montoSus'=>$request['montoSus'],
              'montoBs'=>$request['montoBs']
            ]);

            $nro_detalle++;

            //BANCO
            $cuentaautomatica = DB::select("SELECT * FROM cuentaautomatica WHERE nombre='Bancos'");
            Detalle::create([
              'id_cuenta'=>$cuentaautomatica[0]->id_cuenta,
              'id_asiento'=>$asiento['id'],
              'nro_detalle'=>$nro_detalle,
              'tipo'=>1,//1 = Debe, 2 = Haber
              'montoSus'=>$request['montoBancoSus'],
              'montoBs'=>$request['montoBancoBs']
            ]);

            $nro_detalle++;
            //----------------------------------- fin Contabilidad -----------------------------------------------------//
        }
        if ($request['tipoPago'] == "b") {
            //---------------------------------- Contabilidad BANCO----------------------------------------------------//
            $cuentaautomatica = DB::select("SELECT * FROM cuentaautomatica WHERE nombre='Bancos'");
            Detalle::create([
              'id_cuenta'=>$cuentaautomatica[0]->id_cuenta,
              'id_asiento'=>$asiento['id'],
              'nro_detalle'=>$nro_detalle,
              'tipo'=>1,//1 = Debe, 2 = Haber
              'montoSus'=>$request['montoBancoSus'],
              'montoBs'=>$request['montoBancoBs']
            ]);

            $nro_detalle++;
            //----------------------------------- fin Contabilidad -----------------------------------------------------//
        }

        //---------------------------------- Contabilidad INGRESO DIFERIDO----------------------------------------------//
        $cuentaautomatica = DB::select("SELECT * FROM cuentaautomatica WHERE nombre='Ingreso Diferido'");
        Detalle::create([
          'id_cuenta'=>$cuentaautomatica[0]->id_cuenta,
          'id_asiento'=>$asiento['id'],
          'nro_detalle'=>$nro_detalle,
          'tipo'=>2,//1 = Debe, 2 = Haber
          'montoSus'=>$request['txtTotalpagoSus'],
          'montoBs'=>$request['txtTotalpagoBs'],
        ]);
        //----------------------------------- fin Contabilidad -----------------------------------------------------//


        DB::commit();
        Session::flash('message', 'GUARDADO CORRECTAMENTE');
        return Redirect::to('PlanPago/'.$request['idVenta']);            
      }
    }
    catch (Exception $e)
    {
      DB::rollback();
      Session::flash('message-error', 'ERROR, INTENTE NUEVAMENTE');
      return Redirect::to('PlanPago/'.$request['idVenta']);           
    }
}

  function PagoVenta(Request $request){
      $lista=array();
      $fecha=DB::select("SELECT curdate()as fecha"); // %H:%i:%s
      // $resultado=DB::select("SELECT cliente.expedido,venta.id as idVenta,DATE_FORMAT(venta.fecha,'%d/%m/%Y %H:%i:%s') AS fecha,venta.precio,venta.estado as estado_venta, empleado.ci as ci_empleado,CONCAT(empleado.nombre,' ',empleado.apellido)as empleado,cliente.nombre as nombreCliente,cliente.apellidos as apellidoCliente,cliente.ci as ci_cliente,cliente.celular,cliente.celular_ref,proyecto.nombre as nombreProyecto, categorialote.categoria,categorialote.descripcion, lote.nroLote,lote.manzano,lote.superficie,lote.uv,lote.matricula,lote.estado as estado_lote, preciocategoria.precio as precio_categoria from venta,empleado,cliente,lote,categorialote,proyecto,preciocategoria WHERE venta.idEmpleado=empleado.id AND venta.idCliente=cliente.id AND lote.id=venta.idLote AND categorialote.id=lote.idCategoriaLote AND venta.estado='c' and proyecto.id=categorialote.idProyecto and venta.fecha and  preciocategoria.idCategoria=categorialote.id AND preciocategoria.deleted_at IS NULL order by venta.fecha ");

     //  for ($i=0; $i <count($resultado) ; $i++) { 
     //     $lista[]=DB::select("SELECT (Cuotas.TotalCuotas-sum(detallecuota.monto)) debe,Cuotas.TotalCuotas,sum(detallecuota.monto) as TotalPagado, sum(detallecuota.monto) as total,tipocambio.monedaVenta,cliente.expedido,venta.id,DATE_FORMAT(venta.fecha,'%d/%m/%Y') AS fecha,venta.precio,venta.estado as estado_venta, empleado.ci as ci_empleado,CONCAT(empleado.nombre,' ',empleado.apellido)as empleado, CONCAT(cliente.nombre,' ',cliente.apellidos)as cliente,cliente.ci as ci_cliente,cliente.celular,cliente.celular_ref,proyecto.nombre, categorialote.categoria,categorialote.descripcion, lote.nroLote,lote.manzano,lote.superficie,lote.uv,lote.matricula,lote.estado as estado_lote, preciocategoria.precio as precio_categoria ,plandepago.cuotaInicialUsd,plandepago.cuotaInicialBs,venta.moneda
     //      from  cuotas,detallecuota,plandepago,tipocambio,venta,empleado,cliente,lote,categorialote,proyecto,preciocategoria,(select sum(cuotas.monto) as TotalCuotas, sum(detallecuota.monto) as montoTotal,venta.id as idVentaC
     // from cuotas,detallecuota,plandepago,venta
     // where venta.id=plandepago.idVenta and plandepago.id=cuotas.idPlandePago and cuotas.id=detallecuota.idCuota and DATE_FORMAT(venta.fecha,'%Y-%m-%d') <= DATE_FORMAT(NOW(),'%Y-%m-%d')  and   venta.id=".$resultado[$i]->idVenta.")  Cuotas WHERE 
     // venta.id=plandepago.idVenta and plandepago.id=cuotas.idPlandePago and cuotas.id=detallecuota.idCuota and venta.idEmpleado=empleado.id AND venta.idCliente=cliente.id AND lote.id=venta.idLote AND categorialote.id=lote.idCategoriaLote AND proyecto.id=categorialote.idProyecto and venta.id=".$resultado[$i]->idVenta."  AND preciocategoria.idCategoria=categorialote.id AND preciocategoria.deleted_at IS NULL AND venta.estado='c'  and venta.idTipoCambio=tipocambio.id");
     //  }
      $lista=DB::SELECT("SELECT venta.tipoVenta,venta.id,cliente.expedido, CONCAT(cliente.nombre,' ',cliente.apellidos)as cliente,cliente.celular,cliente.ci as ci_cliente,proyecto.nombre,plandepago.cuotaInicialUsd,plandepago.cuotaInicialBs,lote.nroLote,lote.manzano,lote.superficie,
venta.precio -venta.precio*descuento/100 as precio,venta.precioBs,plandepago.saldoBs,plandepago.saldoUsd,venta.fecha,plandepago.estado as estado_venta,(venta.precioBs -venta.precioBs*descuento/100-saldoBs) as totalPagadoBs,(venta.precio -venta.precio*descuento/100-saldoUsd) as totalPagadoUsd
FROM plandepago,venta,lote,cliente,proyecto where plandepago.idVenta=venta.id and venta.idCliente=cliente.id and venta.idLote=lote.id and proyecto.id=lote.idProyecto and 
plandepago.estado='d'");
      return view('planpago.pago_venta', compact('lista'));
  }

    function BuscarPagoVenta(Request $request){ // %H:%i:%s
        $lista=DB::select("SELECT venta.id,DATE_FORMAT(venta.fecha,'%d/%m/%Y') AS fecha,venta.precio,venta.estado as estado_venta, empleado.ci as ci_empleado,CONCAT(empleado.nombre,' ',empleado.apellido)as empleado, CONCAT(cliente.nombre,' ',cliente.apellidos)as cliente,cliente.ci as ci_cliente,cliente.celular,cliente.celular_ref,proyecto.nombre, categorialote.categoria,categorialote.descripcion, lote.nroLote,lote.manzano,lote.superficie,lote.uv,lote.matricula,lote.estado as estado_lote, preciocategoria.precio as precio_categoria
from venta,empleado,cliente,lote,categorialote,proyecto,preciocategoria
WHERE venta.idEmpleado=empleado.id AND venta.idCliente=cliente.id AND lote.id=venta.idLote AND categorialote.id=lote.idCategoriaLote AND proyecto.id=categorialote.idProyecto AND preciocategoria.idCategoria=categorialote.id AND preciocategoria.deleted_at IS NULL AND cliente.ci='".$request['ci']."' AND venta.estado='C' AND proyecto.id=".Session::get('idProyecto'));  
        return view('venta.pago_venta', compact('lista'));
    }
  public function show($id){
    $pago=DB::select("SELECT *from pago WHERE pago.idVenta=".$id);
    $informacion=DB::select("SELECT venta.id,DATE_FORMAT(venta.fecha,'%d/%m/%Y') AS fecha,venta.precio,venta.estado as estado_venta, empleado.ci as ci_empleado,CONCAT(empleado.nombre,' ',empleado.apellido)as empleado, CONCAT(cliente.nombre,' ',cliente.apellidos)as cliente,cliente.ci as ci_cliente,cliente.celular,cliente.celular_ref,proyecto.nombre, categorialote.categoria,categorialote.descripcion, lote.nroLote,lote.manzano,lote.superficie,lote.uv,lote.matricula,lote.estado as estado_lote, preciocategoria.precio as precio_categoria from venta,empleado,cliente,lote,categorialote,proyecto,preciocategoria WHERE venta.idEmpleado=empleado.id AND venta.idCliente=cliente.id AND lote.id=venta.idLote AND categorialote.id=lote.idCategoriaLote AND proyecto.id=categorialote.idProyecto AND preciocategoria.idCategoria=categorialote.id AND preciocategoria.deleted_at IS NULL AND proyecto.id=".Session::get('idProyecto')." AND venta.id=".$id);
    return view('pago.pagos', compact('pago','informacion'));
  }    
}
