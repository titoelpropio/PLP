<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\PlanPago;
use App\PlanDePago;
use App\Cuotas;

use App\Venta;
use App\Empleado;
use App\Lote;
use App\Categoria;
use App\Proyecto;
use App\CuotaMinima;
use App\DescuentoVenta;
use App\PrecioCategoria;
use App\DetalleReserva;
use App\DetallePreReserva;

use App\Asiento;
use App\Detalle;

use App\Cliente;
use App\Http\Requests;
use App\TransaccionVenta;
use Session;
use Redirect;
use DB;
use Hash;

class VentaController extends Controller {

  var $texto="";

  public function __construct(Request $request) {
   if (Session::get('user')==null || Session::get('idPerfil')=="" ) {
    Session::put('user', null);
    $this->middleware('auth');

    $this->middleware('admin');
    $this->middleware('auth',['only'=>'admin']);
  }else{
   $verficar=DB::select("select modulo.nombre,perfilobjeto.puedeGuardar,perfilobjeto.puedeModificar,perfilobjeto.puedeEliminar,perfilobjeto.puedeListar, perfilobjeto.puedeVerReporte,perfilobjeto.puedeImprimir,objeto.urlObjeto from perfil,perfilobjeto,objeto,modulo where perfilobjeto.deleted_at IS NULL and perfil.id=perfilobjeto.idPerfil and perfilobjeto.idObjeto=objeto.id and modulo.id=objeto.idModulo and objeto.urlObjeto='/Venta'  and perfil.id=".Session::get('idPerfil'));



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
function index(Request $request) {
  $Proyecto=DB::select("select *from proyecto where  proyecto.deleted_at IS NULL");
  if ($request->nroLote == "" )
  {
   $Lote = DB::select("SELECT lote.id,lote.nroLote, lote.superficie, lote.manzano, lote.uv, categorialote.categoria, preciocategoria.precio, cuotaminima.porcentaje, descuentoventa.porcentaje as descuento from lote, categorialote, preciocategoria, proyecto, cuotaminima, descuentoventa WHERE lote.idCategoriaLote = categorialote.id and preciocategoria.idCategoria = categorialote.id and lote.idProyecto = proyecto.id and categorialote.idProyecto = proyecto.id and cuotaminima.idProyecto = proyecto.id and descuentoventa.idProyecto = proyecto.id and preciocategoria.deleted_at IS NULL and descuentoventa.deleted_at IS NULL and cuotaminima.deleted_at IS NULL and lote.estado = 0 order by lote.id desc LIMIT 20");

   return view('venta.index',compact('Lote', $Lote,'Proyecto',$Proyecto));
 }
 else
 {
   $Lote = DB::select("SELECT lote.id,lote.nroLote, lote.superficie, lote.manzano, lote.uv, categorialote.categoria, preciocategoria.precio, cuotaminima.porcentaje, descuentoventa.porcentaje as descuento from lote, categorialote, preciocategoria, proyecto, cuotaminima, descuentoventa WHERE lote.idCategoriaLote = categorialote.id and preciocategoria.idCategoria = categorialote.id and lote.idProyecto = proyecto.id and categorialote.idProyecto = proyecto.id and cuotaminima.idProyecto = proyecto.id and descuentoventa.idProyecto = proyecto.id and preciocategoria.deleted_at IS NULL and descuentoventa.deleted_at IS NULL and cuotaminima.deleted_at IS NULL and lote.estado = 0  and lote.id = ".$request->nroLote." order by lote.id desc LIMIT 20");

   return view('venta.index',compact('Lote', $Lote,'Proyecto',$Proyecto));
 }


}

public function create() {
        // $proyecto=DB::select("SELECT *from proyecto");
 return view('venta.create');
}
public function verificadorContabilidadArray(  )
{
  $verificargestion = DB::table('gestion')->select( DB::raw( 'count(*) as count' ) )->where('estado','1')->get();
  $verificarcuentaporcobrar = DB::select("SELECT count(*) as count FROM cuentaautomatica WHERE nombre='Cuenta por Cobrar'");
  $verificarcaja = DB::select("SELECT count(*) as count FROM cuentaautomatica WHERE nombre='Caja'");
  $verificarbanco = DB::select("SELECT count(*) as count FROM cuentaautomatica WHERE nombre='Cuenta Bancaria M/N'");
  $verificaringresodiferido = DB::select("SELECT count(*) as count FROM cuentaautomatica WHERE nombre='Ingreso Diferido'");
  $verificarIvaDebitoFiscal = DB::select("SELECT count(*) as count FROM cuentaimpuesto WHERE nombre='Debito fiscal'");
  return ['verificargestion' => $verificargestion[0]->count, 'verificarcuentaporcobrar' => $verificarcuentaporcobrar[0]->count, 'verificarcaja' => $verificarcaja[0]->count, 'verificarbanco' =>  $verificarbanco[0]->count,  'verificaringresodiferido' => $verificaringresodiferido[0]->count, 'verificarIvaDebitoFiscal' => $verificarIvaDebitoFiscal[0]->count  ];
}
public function isContabilidad( $verificadorContabilidadArray , $tipoPago)
{
  $arrayResult = ["status" => true , "message" =>""];
  if ($verificadorContabilidadArray['verificargestion'] != 1 )
  {
    $arrayResult[ "status"] = false;
    $arrayResult[ "message" ]  = "DEBE APERTURAR UNA GESTIÓN PARA PODER REALIZAR ESTA TRANSACCIÓN"  ;
  }
 else if ( $verificadorContabilidadArray['verificarcuentaporcobrar'] != 1 && $tipoPago == 'p')
 {
    $arrayResult=[ "status" => "false", "message" => 'DEBE CONFIGURAR LA "CUENTA POR COBRAR" POR DEFECTO EN CUENTAS AUTOMÁTICAS PARA PODER REALIZAR ESTA TRANSACCIÓN' ] ;
 }
 else if ( $verificadorContabilidadArray['verificarcaja'] != 1 )
 {
    $arrayResult=[ "status" => false, "message"=> 'DEBE CONFIGURAR LA "CUENTA CAJA" POR DEFECTO EN CUENTAS AUTOMÁTICAS PARA PODER REALIZAR ESTA TRANSACCIÓN' ] ;
 }
 else if ( $verificadorContabilidadArray['verificarbanco'] != 1 ) {
    $arrayResult=["status" => false, "message"=> 'DEBE CONFIGURAR LA "CUENTA BANCO" POR DEFECTO EN CUENTAS AUTOMÁTICAS PARA PODER REALIZAR ESTA TRANSACCIÓN' ] ;
 }
 else if (  $verificadorContabilidadArray['verificaringresodiferido'] != 1 ) {
    $arrayResult=["status" => false, "message"=> 'DEBE CONFIGURAR LA "CUENTA INGRESO DIFERIDO" POR DEFECTO EN CUENTAS AUTOMÁTICAS PARA PODER REALIZAR ESTA TRANSACCIÓN' ] ;
 }
 return  $arrayResult;
}
public function store(Request $request) {
  $texto = "";


  $fechaNacimiento =  $request['fechaNacimiento'];
  $ci = $request['ci'];
  $idPais = $request['idPais'];
  $lugarProcedencia = $request['lugarProcedencia'];
   $genero =  $request['genero'];
   $celular =  $request['celular'];
   $celular_ref =  $request['celular_ref'];
   $estadoCivil = $request['estadoCivil'];
   $domicilio =  $request['domicilio'];
   $nit = $request['nit'];
   $ocupacion = $request['ocupacion'];
    $expedido = $request['expedido'];
    $idEmpleado = $request['idEmpleado'];
    $idCliente = $request['idCliente'];
    $idLote = $request['id_lote'];
    $tipoPago = $request['tipoPago'];
    $tipoMoneda = $request['tipoMoneda'];
  $verificar = DB::select('select count(*) as count,estado from lote where estado<>0 and id=' . $idLote);
  $cuentaAutomaticaBanco = $tipoMoneda == "BOLIVIANO" ? DB::table('cuentaautomatica')->where('name','Cuenta Bancaria M/N')->get() :  DB::table('cuentaautomatica')->where('name','Cuenta Bancaria M/E')->get();
 $verificadorContabilidadArray = $this->verificadorContabilidadArray();

  if ($verificar[0]->count==1 )
  {
    $verificarReserva = DetalleReserva::verifyReservation( $idLote, $idCliente,'r' );
    if ($verificarReserva[0]->count==1) {
      Session::flash('message-error','ESE LOTE YA NO ESTA DISPONIBLE PARA LA VENTA');
      return Redirect::to('Venta');
    }
    else{
      if ($verificar[0]->estado==3) {
        Session::flash('message-error','ESE LOTE YA NO ESTA DISPONIBLE PARA LA VENTA');
        return Redirect::to('Venta');
      }
    }
  }
 //  if ($this->validar_texto(1,$request->nombre ) && $request->nombre!="") {
 //   $texto.="No agregue numero en el campo nombre, ";
 // }
 // if ($request->nombre=="") {
 //   $texto.="El campo nombre es obligatorio,   ";
 // }
 // if ($this->validar_texto(1,$request->apellidos ) && $request->apellidos!="") {
 //   $texto.="No agregue numero en el campo apellido, ";
 // }
 // if ($request->apellidos=="") {
 //   $texto.="El campo apellido es obligatorio,   ";
 // }
 // if ($this->validar_texto(0,$request->ci ) && $request->ci!="") {
 //   $texto.="No agregue letra en el campo carnet, ";
 // }
 // if ($request->ci=="") {
 //   $texto.="El campo Carnet es obligatorio,   ";
 // }
 // if ($request->domicilio=="") {
 //   $texto.="El campo Domicilio es obligatorio,   ";
 // }
 // if ($this->validar_texto(0,$request->celular ) && $request->celular!="") {
 //   $texto.="No agregue letras en el campo celular, ";
 // }
 // if ($request->celular=="") {
 //   $texto.="El campo Celular es obligatorio,   ";
 // }
 // if ($this->validar_texto(0,$request->telefono ) && $request->telefono!="") {
 //   $texto.="No agregue letras en el campo Celular ref, ";
 // }
 // if ($this->validar_texto(0,$request->nit ) && $request->nit!="") {
 //   $texto.="No agregue letras en el campo Nit, ";
 // }
 // if ($request->glosa=="") {
 //   $texto.="El campo Detalle de transacción es obligatorio,   ";
 // }

  if ($texto!="") {
   Session::flash('message-error',$texto);
   return Redirect::to('VentaLote/'.$idLote);
 }
  $_isContabilidad = $this->isContabilidad($verificadorContabilidadArray, $tipoPago);
 if ( ! $_isContabilidad['status']  ) {
  Session::flash('message-error',$_isContabilidad['message']);
   return Redirect::to('VentaLote/'.$idLote);
 }
 else{
  try {

    DB::beginTransaction();
              /*$lote = Lote::find($request->id_lote);
              $lote->fill([
              'estado' => '3',

              ]);
              $lote->save();*/
              $nombre = strtoupper($request['nombre']);
              $apellidos= strtoupper($request->apellidos);
              $verificarCliente= Cliente::verificarClienteDadoCi($ci) ;
              $arrayCliente = ['nombre' => $nombre, 'apellidos' => $apellidos,  'fechaNacimiento' => $fechaNacimiento, 'ci' => $ci,'idPais' => $idPais,'lugarProcedencia' => $lugarProcedencia,  'genero' => $genero,    'celular' => $celular,  'celular_ref' => $celular_ref,  'estadoCivil' => $estadoCivil,   'domicilio' => $domicilio,    'nit' => $nit, 'ocupacion' => $ocupacion, 'expedido' => $expedido];
              if ($verificarCliente[0]->count=='0') {
                if ($request['idEmpleado']==0) {
                  $padre=DB::select("SELECT v.idEmpleadoPadre FROM vendedor v WHERE (NOT EXISTS(SELECT *FROM vendedor v2 WHERE v2.idEmpleadoHijo=v.idEmpleadoPadre)) LIMIT 1");
                  $request['idEmpleado']=$padre[0]->idEmpleadoPadre;
                }
                  $cliente=Cliente::create( array_merge([ //aqui guarda
                    'idEmpleado' => Session::get('idEmpleado'),
                  ], $arrayCliente));
                }
                else{
                  $cliente = Cliente::find($verificarCliente[0]->id);   //aqui modifica
                  $cliente->fill($arrayCliente);
                  $cliente->save();
                }
                $idReserva = $request['idReserva'];
                $idPreReserva = $request['idPreReserva'];
                if ($idReserva != 0) {
                  $detalle_reserva=DetalleReserva::find( $idReserva );
                  $detalle_reserva->fill(['estado'=>'v']);
                  $detalle_reserva->save();
                }

                if ( $idPreReserva != 0 ) {
                  $detalle_pre_reserva->fill(['estado'=>'v']);
                  $detalle_pre_reserva=DetallePreReserva::find( $idPreReserva );
                  $detalle_pre_reserva->save();
                }

                if ($request['tipoPago']=='p') {//plan de pago

                  //---------------------------------- Contabilidad ----------------------------------------------------------//
                  $categoria =  DB::table('categoriacuenta')->where('nombre','Asiento Diario')->get();
                  $gestion = DB::table('gestion')->where( 'estado','1' )->get();
                  $tipocambio =  DB::select("SELECT * FROM tipocambio where deleted_at IS NULL");
                  $contAsiento = DB::select("SELECT count(*) as count from asiento where id_gestion=".$gestion[0]->id." order by id desc limit 1");
                  $nroAsiento = DB::select("SELECT * from asiento where id_gestion=".$gestion[0]->id." order by id desc limit 1");
                  $nroAs=0;
                  $nro_detalle = 1;

                  date_default_timezone_set('America/La_Paz');
                  ini_set('date.timezone','America/La_Paz');
                  $fecha_transaccion = date("Y-m-d H:i:s");

                  if($contAsiento[0]->count > 0)
                  {
                    $nroAs = $nroAsiento[0]->nro_asiento;
                  }

                  $factura=$request['nroFactura']!=""?'':"CON NRO FACTURA: ".$request['nroFactura'];
                  $asiento=Asiento::create([
                    'nro_asiento'=>$nroAs + 1,
                    'tipo'=>3,// 1 = Ingreso, 2 = Egreso, 3 = Traspaso
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

                  $venta=Venta::create([
                    'precio'=>$request['PrecioLote'],
                    'estado'=>'c',
                    'tipoPago'=>$request['tipoDepositoC'],
                    'descuento'=>$request['DescuentoPlazo'],
                    'reserva'=>$request['reserva'],
                    'idCliente'=>$cliente->id,
                    'idEmpleado'=>Session::get('idEmpleado'),
                    'idLote'=>$request->id_lote,
                    'idTipoCambio'=>$request->idTipoCambio,
                    'idAsiento'=>$asiento['id'],
                    'pagoBs'=>$request['pagoBs'],
                    'pagoUsd'=>$request['pagoUsd'],
                    'totalapagar'=>$request['pagoInicial'],
                    'totalapagarBs'=>$request['pagoInicialBs'],
                    'cambioBs'=>$request['inputCambioBs'],
                    'cambioUsd'=>$request['inputCambioUsd'],
                    'precioBs'=>$request['PrecioLoteBolivano'],
                    'moneda'=>$request['tipoMoneda'],
                    'tipoVenta'=>'PLAZO',
                    'reservaBs'=>$request['reservaBolivano']
                  ]);
                  if ($request['SelectPagoInicial']=='0') {
                    $cuotaInicialUsd=$request['totalPagado'];
                    $cuotaInicialBs=$request['totalPagadoBs'];
                  }else{
                    $cuotaInicialUsd=$request['pagoInicial'];
                    $cuotaInicialBs=$request['pagoInicialBs'];
                  }
                  $PlanDePago=PlanDePago::create([
                    'montoTotal'=>$request['PrecioPlazo'],
                    'estado'=>'d',
                    'nroCuotas'=>$request['meses'],
                    'idVenta'=>$venta['id'],
                    'cuotaInicialUsd'=>$cuotaInicialUsd,
                    'cuotaInicialBs'=>$cuotaInicialBs,
                    'saldoBs'=>($request->PrecioPlazo*$tipocambio[0]->monedaVenta)-$request->pagoInicialBs,
                    'saldoUsd'=>$request->PrecioPlazo-$request->pagoInicial,
                    'montoTotalBs'=>number_format($request->PrecioPlazo*$tipocambio[0]->monedaVenta, 2, '.', '')
                  ]);

                  $mes=date('n');
                  $año=date("Y");
                  $date = date_create( $año.'-'.$mes.'-'.$request['diaMes']);
                  $fecha = date_format($date, 'd-m-Y');

                  for ($i=1; $i <=$request['meses'] ; $i++) {
                    if ($request['meses']==$i) {
                      $request['cuotaMensual']=$request['cuotaMensual']-$request['sumarDecimal'];
                      $request['cuotaMensualBs']=$request['cuotaMensualBs']-$request['sumarDecimalBs'];
                    }
                    $nuevafecha = strtotime ( '+'.$i.' month' , strtotime ( $fecha ) ) ;
                    $nuevafecha = date ( 'Y-m-j' , $nuevafecha );

                    $planpago=Cuotas::create([
                      'fechaLimite'=>$nuevafecha,
                      'monto'=>$request['cuotaMensual'],
                      'montoBs'=>$request['cuotaMensualBs'],
                      'mora'=>0,
                      'idPlandePago'=>$PlanDePago['id'],
                      'estado'=>'d'
                    ]);
                  }

                  //---------------------------------- Contabilidad ----------------------------------------------------------//
                  $cuentaporpagar = $venta['precio'] - $venta['cuotaInicial'];
                  $cuentaporpagarBs = $cuentaporpagar * $tipocambio[0]->monedaVenta;
                  //Cuenta por Cobrar
                  $cuentaautomatica = DB::table('cuentaautomatica')->where('nombre', 'Cuenta por Cobrar')->get();
                  Detalle::create([
                    'id_cuenta'=>$cuentaautomatica[0]->id_cuenta,
                    'id_asiento'=>$asiento['id'],
                    'nro_detalle'=>$nro_detalle,
                    'tipo'=>1,//1 = Debe, 2 = Haber
                    'montoSus'=>round($cuentaporpagar, 2),
                    'montoBs'=>round($cuentaporpagarBs, 2)
                  ]);

                  $nro_detalle++;

                  if ($request['tipoDepositoC']=='e') {

                      //Caja
                    $montoBs = $venta['cuotaInicial'] * $tipocambio[0]->monedaVenta;
                    $cuentaautomatica = DB::select("SELECT * FROM cuentaautomatica WHERE nombre='Caja'");
                    Detalle::create([
                      'id_cuenta'=>$cuentaautomatica[0]->id_cuenta,
                      'id_asiento'=>$asiento['id'],
                      'nro_detalle'=>$nro_detalle,
                        'tipo'=>1,//1 = Debe, 2 = Haber
                        'montoSus'=>round($venta['cuotaInicial'], 2),
                        'montoBs'=>round($montoBs, 2)
                      ]);

                    $nro_detalle++;
                  }

                  //----------------------------------- fin Contabilidad -----------------------------------------------------//

                  if ($request['tipoDepositoC']=='b') {
                    TransaccionVenta::create([
                      'idVenta'=>$venta['id'],
                      'idBanco'=>$request['bancoC'],
                      'idCuenta'=>$request['cuentaC'],
                      'fecha'=>$request['fechaDeposito'],
                      'nroDocumento'=>$request['nroDocumentoC'],
                      'monto'=>$cuotaInicialUsd,
                      'montoBs'=>$cuotaInicialBs
                    ]);

                      //---------------------------------- Contabilidad BANCO----------------------------------------------------//
                    $montoBancoBs = $venta['cuotaInicial'] * $tipocambio[0]->monedaVenta;
                    Detalle::create([
                      'id_cuenta'=>$cuentaAutomaticaBanco[0]->id_cuenta,
                      'id_asiento'=>$asiento['id'],
                      'nro_detalle'=>$nro_detalle,
                        'tipo'=>1,//1 = Debe, 2 = Haber
                        'montoSus'=>round($venta['cuotaInicial'], 2),
                        'montoBs'=>round($montoBancoBs, 2)
                      ]);

                    $nro_detalle++;
                      //----------------------------------- fin Contabilidad -----------------------------------------------------//
                  }

                  if ($request['tipoDepositoC']=='be') {
                    TransaccionVenta::create([
                      'idVenta'=>$venta['id'],
                      'idBanco'=>$request['bancoC'],
                      'idCuenta'=>$request['cuentaC'],
                      'fecha'=>$request['fechaDeposito'],
                      'nroDocumento'=>$request['montoBanco'],
                      'monto'=>$request['montoBanco'],
                    ]);

                      //---------------------------------- Contabilidad BANCO CAJA------------------------------------------------//
                      //CAJA
                    $montoBs = $request->montoEfectivo * $tipocambio[0]->monedaVenta;
                    $cuentaautomatica = DB::select("SELECT * FROM cuentaautomatica WHERE nombre='Caja'");
                    Detalle::create([
                      'id_cuenta'=>$cuentaautomatica[0]->id_cuenta,
                      'id_asiento'=>$asiento['id'],
                      'nro_detalle'=>$nro_detalle,
                        'tipo'=>1,//1 = Debe, 2 = Haber
                        'montoSus'=>round($request->montoEfectivo, 2),
                        'montoBs'=>round($montoBs, 2)
                      ]);

                    $nro_detalle++;

                      //BANCO

                    Detalle::create([
                      'id_cuenta'=>$cuentaAutomaticaBanco[0]->id_cuenta,
                      'id_asiento'=>$asiento['id'],
                      'nro_detalle'=>$nro_detalle,
                        'tipo'=>1,//1 = Debe, 2 = Haber
                        'montoSus'=>round($request->montoBanco, 2),
                        'montoBs'=>round($montoBancoBs, 2)
                      ]);

                    $nro_detalle++;

                      //----------------------------------- fin Contabilidad -----------------------------------------------------//
                  }

                  //---------------------------------- Contabilidad INGRESO DIFERIDO----------------------------------------------//
                  $montoBs = $venta['precio'] * $tipocambio[0]->monedaVenta;
                  $cuentaautomatica = DB::select("SELECT * FROM cuentaautomatica WHERE nombre='Ingreso Diferido'");
                  Detalle::create([
                    'id_cuenta'=>$cuentaautomatica[0]->id_cuenta,
                    'id_asiento'=>$asiento['id'],
                    'nro_detalle'=>$nro_detalle,
                    'tipo'=>2,//1 = Debe, 2 = Haber
                    'montoSus'=>round($venta['precio'], 2),
                    'montoBs'=>round($montoBs, 2)
                  ]);
                  //----------------------------------- fin Contabilidad -----------------------------------------------------//
                }
                else{
                  //---------------------------------- Contabilidad ----------------------------------------------------------//
                  $categoria = DB::select("SELECT * FROM categoriacuenta WHERE nombre='Asiento Diario'");
                  $gestion = DB::select("SELECT * FROM gestion WHERE estado=1");
                  $tipocambio=DB::select("SELECT * FROM tipocambio where deleted_at IS NULL");
                  $contAsiento=DB::select("SELECT count(*) as count from asiento where id_gestion=".$gestion[0]->id." order by id desc limit 1");
                  $nroAsiento=DB::select("SELECT * from asiento where id_gestion=".$gestion[0]->id." order by id desc limit 1");
                  $nroAs=0;
                  $nro_detalle = 1;
                  date_default_timezone_set('America/La_Paz');
                  ini_set('date.timezone','America/La_Paz');
                  $fecha_transaccion = date("Y-m-d H:i:s");

                  if($contAsiento[0]->count > 0)
                  {
                    $nroAs = $nroAsiento[0]->nro_asiento;
                  }

                  $asiento= Asiento::create([
                    'nro_asiento'=>$nroAs + 1,
                    'tipo'=>3,// 1 = Ingreso, 2 = Egreso, 3 = Traspaso
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
                  $venta=Venta::create([
                    'precio'=>$request['PrecioLote'],
                    'estado'=>'p',
                    'tipoPago'=>$request['tipoDepositoC'],
                    'descuento'=>$request['descuentoContado'],
                    'reserva'=>$request['reserva'],
                    'idCliente'=>$cliente->id,
                    'idEmpleado'=>Session::get('idEmpleado'),
                    'idLote'=>$request->id_lote,
                    'idTipoCambio'=>$request->idTipoCambio,
                    'idAsiento'=>$asiento['id'],
                    'pagoBs'=>$request['pagoBs'],
                    'pagoUsd'=>$request['pagoUsd'],
                    'totalapagar'=>$request['PCMR'],
                    'totalapagarBs'=>$request['PCMRBs'],

                    'cambioBs'=>$request['inputCambioBs'],
                    'cambioUsd'=>$request['inputCambioUsd'],
                    'precioBs'=>$request['PrecioLoteBolivano'],
                    'moneda'=>$request['tipoMoneda'],
                    'tipoVenta'=>'CONTADO',
                    'reservaBs'=>$request['reservaBolivano']
                  ]);

                  //---------------------------------- Contabilidad CAJA----------------------------------------------------------//
                  if ($request['tipoDepositoC']=='e') {
                    $montoBs = $venta['cuotaInicial'] * $tipocambio[0]->monedaVenta;
                    $cuentaautomatica = DB::select("SELECT * FROM cuentaautomatica WHERE nombre='Caja'");
                    Detalle::create([
                      'id_cuenta'=>$cuentaautomatica[0]->id_cuenta,
                      'id_asiento'=>$asiento['id'],
                      'nro_detalle'=>$nro_detalle,
                        'tipo'=>1,//1 = Debe, 2 = Haber
                        'montoSus'=>$request['PCMRBs'],
                        'montoBs'=>$request['PCMR']
                      ]);

                    $nro_detalle++;
                  }
                  //----------------------------------- fin Contabilidad -----------------------------------------------------//

                  if ($request['tipoDepositoC']=='b') {
                    TransaccionVenta::create([
                      'idVenta'=>$venta['id'],
                      'idBanco'=>$request['bancoC'],
                      'idCuenta'=>$request['cuentaC'],
                      'nroDocumento'=>$request['nroDocumentoC'],
                      'monto'=>$venta['pagoUsd'],
                      'montoBs'=>$venta['pagoBs'],
                      'fecha'=>$request['fechaDeposito'],
                    ]);

                      //---------------------------------- Contabilidad BANCO----------------------------------------------------//
                    $montoBancoBs = $venta['cuotaInicial'] * $tipocambio[0]->monedaVenta;
                    Detalle::create([
                      'id_cuenta'=>$cuentaAutomaticaBanco[0]->id_cuenta,
                      'id_asiento'=>$asiento['id'],
                      'nro_detalle'=>$nro_detalle,
                        'tipo'=>1,//1 = Debe, 2 = Haber
                        'montoSus'=>$request['PCMR'],
                        'montoBs'=>$request['PCMRBs']
                      ]);

                    $nro_detalle++;
                      //----------------------------------- fin Contabilidad -----------------------------------------------------//

                  }

                  if ($request['tipoDepositoC']=='be') {
                    TransaccionVenta::create([
                      'idVenta'=>$venta['id'],
                      'idBanco'=>$request['bancoC'],
                      'idCuenta'=>$request['cuentaC'],
                      'nroDocumento'=>$request['nroDocumentoC'],
                      'monto'=>$request['montoBanco'],
                      'fecha'=>$request['fechaDeposito'],
                    ]);

                      //---------------------------------- Contabilidad BANCO CAJA------------------------------------------------//
                      //CAJA
                    $montoBs = $request->montoEfectivo * $tipocambio[0]->monedaVenta;
                    $cuentaautomatica = DB::select("SELECT * FROM cuentaautomatica WHERE nombre='Caja'");
                    Detalle::create([
                      'id_cuenta'=>$cuentaautomatica[0]->id_cuenta,
                      'id_asiento'=>$asiento['id'],
                      'nro_detalle'=>$nro_detalle,
                        'tipo'=>1,//1 = Debe, 2 = Haber
                        'montoSus'=>$request['PCMR'],
                        'montoBs'=>$request['PCMRBs']
                      ]);

                    $nro_detalle++;

                      //BANCO
                    $montoBancoBs = $request->montoBanco * $tipocambio[0]->monedaVenta;
                    Detalle::create([
                      'id_cuenta'=>$cuentaAutomaticaBanco[0]->id_cuenta,
                      'id_asiento'=>$asiento['id'],
                      'nro_detalle'=>$nro_detalle,
                        'tipo'=>1,//1 = Debe, 2 = Haber
                        'montoSus'=>$request['PCMR'],
                        'montoBs'=>$request['PCMRBs']
                      ]);

                    $nro_detalle++;
                      //----------------------------------- fin Contabilidad -----------------------------------------------------//
                  }

                  //---------------------------------- Contabilidad INGRESO DIFERIDO----------------------------------------------//
                  $montoBs = $venta['cuotaInicial'] * $tipocambio[0]->monedaVenta;
                  $cuentaautomatica = DB::select("SELECT * FROM cuentaautomatica WHERE nombre='Ingreso Diferido'");
                  Detalle::create([
                    'id_cuenta'=>$cuentaautomatica[0]->id_cuenta,
                    'id_asiento'=>$asiento['id'],
                    'nro_detalle'=>$nro_detalle,
                    'tipo'=>2,//1 = Debe, 2 = Haber
                    'montoSus'=>$request['PCMR'],
                    'montoBs'=>$request['PCMRBs']
                  ]);
                  //----------------------------------- fin Contabilidad -----------------------------------------------------//
                }

              if ($request['tipoPago']=='p') {//reporte pdf plan de pago
                $cliente=Venta::SaleAndDetalilsSaleByIdVenta($venta['id']);
                $cuotas = DB::select("select  cuotas.montoBs, cuotas.monto,cuotas.estado,cuotas.fechaLimite,@num:=@num+1 as num  from (select @num:=0) r, cliente,venta, plandepago, cuotas where venta.id=plandepago.idVenta and plandepago.id =cuotas.idPlandePago and cliente.id=venta.idCliente and venta.id=".$venta['id']);
                $totalCuotas=DB::select("SELECT sum(cuotas.monto) as totalCuotas FROM venta,cuotas,plandepago where venta.id=plandepago.idVenta and plandepago.id=cuotas.idPlandePago  and venta.id=".$venta['id']);
                $pdf=\PDF::loadView('pdf.pdfPrueba',compact('cliente','cuotas','totalCuotas'));
                  DB::commit();
                 return   $pdf->stream();
                 // return view('pdf.pdfPrueba',compact('cliente','cuotas','totalCuotas'));
              }
                 DB::commit();
              Session::flash('message','GUARDADO CORRECTAMENTE');
              return Redirect::to('/Venta');
            }
            catch (Exception $exc) {
              DB::rollback();
              echo $exc->getTraceAsString();
            }
          }
        }

        public function Pland_PDF($id_Venta){
          echo "<SCRIPT>window.open('Reserva-PDF/10', 'windowName', 'resizable=1, scrollbars=1, fullscreen=1, height=1300, width=1000, toolbar=0, menubar=0, status=1');</SCRIPT>";// "<script> window.open('reserva_PDF/'".$id_reserva."); <script>";
          $datoventa=DB::select("SELECT cliente.ci,planpago.fechaPago,planpago.cuota,cliente.nombre, cliente.apellidos,@num:=@num+1 as num,planpago.estado FROM (select @num:=0) r, venta,planpago,cliente,venta.id as idVenta WHERE venta.id=planpago.idVenta and venta.idCliente=cliente.id and venta.id=".$id_Venta);
          $datos=DB::select("SELECT  venta.id as idVenta,venta.fecha,sum(planpago.cuota)as total,venta.precio,venta.cuotaInicial,lote.nroLote,lote.manzano,lote.fase FROM venta,planpago,cliente,lote WHERE venta.id=planpago.idVenta and venta.idCliente=cliente.id and lote.id=venta.idLote and venta.id=".$id_Venta);


          $pdf=\PDF::loadView('pdf.ReportePlanDepago',compact('datoventa','datos'));
          return   $pdf->stream();
        }
        public function validar_texto($opcion,$variable){

          switch ($opcion) {
           case 0:
           if (!is_numeric($variable)) {
            return true;
          }
          break;
          case 1:
          $expresion = '/^[A-Z üÜáéíóúÁÉÍÓÚñÑ]{1,50}$/i';
          if (!preg_match($expresion, $variable)) {
            return true;
          }
          break;
          default:
          return false;
          break;
        }

      }
      public function edit($id) {
        $consumo = Consumo::find($id);
        $galpon = Galpon::lists('nombre', 'id');
        $silos = Silos::lists('nombre', 'id');
        return view('consumo.edit', compact('galpon', $galpon, 'silos', $silos), ['consumo' => $consumo]);
      }

      public function update($id, ConsumoRequest $request) {
        $consumo = Consumo::find($id);
        $consumo->fill($request->all());
        $consumo->save();
        Session::flash('message', 'Consumo Actualizado Correctamente');
        return Redirect::to('/consumo');
      }

      public function destroy($id) {
        $consumo = Consumo::find($id);
        $consumo->delete();
        Consumo::destroy($id);
        Session::flash('message', 'Consumo Eliminado Correctamente');
        return Redirect::to('/consumo');
      }
    // public function ventareserva($id_reserva){
    //     $lista_reserva =DB::select("select superficie, id_lote, cliente.nit, cliente.celular,cliente.telefono_adicional, cliente.direccion, cliente.nombre as nombre_cliente, cliente.apellido as apellido_cli,cliente.ci,lote.nro_lote,manzano.numero as nro_manzano, cliente.id as id_cliente, reserva.id as id_reserva, reserva.fecha,users.name,users.apellido,users.id  from reserva,cliente,users,lote,manzano where reserva.deleted_at is null and cliente.id= reserva.id_cliente and users.id=reserva.id_vendedor and lote.id= reserva.id_lote and lote.id_manzano=manzano.id and reserva.estado=1 and reserva.id=".$id_reserva);
    //     $descuento=DB::select('select * from descuento_venta WHERE deleted_at IS NULL  order by id asc limit 1 ');
    //       $moneda=DB::select('select *from cambio_moneda where deleted_at IS NULL');
    //     return view('venta.ventareservas',['id_reserva'=>$id_reserva],compact('lista_reserva','moneda','descuento'));
    // }

    public function vender(){//este muestra el formulario de venta con el mapa

      return view('venta.venta_lote');
    }
// public function vender_lote($id){
//   $lote=DB::select('select nro_lote,manzano.numero as nro_manzano,lote.id as id_lote,lote.superficie from lote,manzano where manzano.id=lote.id_manzano and  lote.id="'.$id.'"');
//   $descuento=DB::select('select *from descuento_venta where deleted_at IS NULL');
//   $moneda=DB::select('select *from cambio_moneda where deleted_at IS NULL');

//   return view('venta.venta',['id_lote'=>$id],compact('lote','descuento','moneda'));
// }


    function ListaVenta(Request $request){//lista todas las ventas dada 1 fecha
      $fecha=DB::select("SELECT curdate()as fecha");
      $lista=DB::select("SELECT venta.id,DATE_FORMAT(venta.fecha,'%d/%m/%Y %H:%i:%s') AS fecha,venta.totalapagar,venta.precio,venta.estado as estado_venta, empleado.ci as ci_empleado,CONCAT(empleado.nombre,' ',empleado.apellido)as empleado, CONCAT(cliente.nombre,' ',cliente.apellidos)as cliente,cliente.ci as ci_cliente,cliente.celular,cliente.celular_ref,proyecto.nombre, categorialote.categoria,categorialote.descripcion, lote.nroLote,lote.manzano,lote.superficie,lote.uv,lote.matricula,lote.estado as estado_lote, preciocategoria.precio as precio_categoria
        from venta,empleado,cliente,lote,categorialote,proyecto,preciocategoria
        WHERE venta.idEmpleado=empleado.id AND venta.idCliente=cliente.id AND lote.id=venta.idLote AND categorialote.id=lote.idCategoriaLote AND proyecto.id=categorialote.idProyecto AND preciocategoria.idCategoria=categorialote.id AND preciocategoria.deleted_at IS NULL  order by venta.fecha limit 20");
      return view('venta.lista_venta', compact('lista'));
    }

    function BuscarListaVenta(Request $request){
      $lista=DB::select("SELECT venta.id,DATE_FORMAT(venta.fecha,'%d/%m/%Y %H:%i:%s') AS fecha,venta.totalapagar as cuotaInicial,venta.precio,venta.estado as estado_venta, empleado.ci as ci_empleado,CONCAT(empleado.nombre,' ',empleado.apellido)as empleado, CONCAT(cliente.nombre,' ',cliente.apellidos)as cliente,cliente.ci as ci_cliente,cliente.celular,cliente.celular_ref,proyecto.nombre, categorialote.categoria,categorialote.descripcion, lote.nroLote,lote.manzano,lote.superficie,lote.uv,lote.matricula,lote.estado as estado_lote, preciocategoria.precio as precio_categoria
        from venta,empleado,cliente,lote,categorialote,proyecto,preciocategoria
        WHERE venta.idEmpleado=empleado.id AND venta.idCliente=cliente.id AND lote.id=venta.idLote AND categorialote.id=lote.idCategoriaLote AND proyecto.id=categorialote.idProyecto AND preciocategoria.idCategoria=categorialote.id AND preciocategoria.deleted_at IS NULL AND  venta.fecha  BETWEEN DATE_FORMAT('".$request->fecha_inicio."','%Y-%m-%d') AND  DATE_FORMAT('".$request->fecha_fin."','%Y-%m-%d') ORDER BY venta.fecha");
      return view('venta.lista_venta', compact('lista'));
    }


    public function VentaLote($id){
     $lote=DB::select('select  proyecto.nombre as nombreProyecto,categorialote.descripcion,preciocategoria.precio,manzano,uv,fase,nroLote,norte,sur,este,oeste,medidaEste,medidaOeste,medidaSur,medidaNorte,superficie,categorialote.categoria,descuentoventa.porcentaje as descuento from lote,categorialote,proyecto,preciocategoria,descuentoventa where proyecto.id=descuentoventa.idProyecto and   lote.id="'.$id.'" and lote.idCategoriaLote=categorialote.id and proyecto.id=categorialote.idProyecto and preciocategoria.idCategoria=categorialote.id and preciocategoria.deleted_at IS NULL and categorialote.deleted_at IS NULL');
     $meses=DB::select('select *from meses where deleted_at IS NULL');
     $descuento=DB::select('select *from descuentoventa where deleted_at IS NULL');
     $tipoCambio=DB::select('select *from tipocambio where deleted_at IS NULL');
     $cuotaMinima=DB::select('select *from cuotaminima where deleted_at IS NULL');
     $nacionalidad=DB::select('SELECT * FROM `pais` ORDER by paisnombre');
     $vendedor=DB::select('select empleado.codigo,nombre,id from empleado where codigo IS NOT NULL and deleted_at IS NULL GROUP by codigo');
     return view('venta.venta',['ci'=>0,'id_lote'=>$id,'reserva'=>0,'idReserva'=>0,'idPreReserva'=>0,'moneda'=>0,'reservaBs'=>0],compact('lote','descuento','tipoCambio','cuotaMinima','meses','vendedor','nacionalidad'));

   }

   public function VentaReserva($id){
    $total = 0;
    $reserva=DB::select("SELECT reserva.moneda, cliente.ci, detallereserva.id as idDetalleReserva, detallereserva.subTotal, detallereserva.idLote,detallereserva.subTotalBs  from cliente,detallereserva,reserva where detallereserva.idReserva=reserva.id and cliente.id=reserva.idCliente and detallereserva.id=".$id);
    $total = $total +$reserva[0]->subTotal;
    $totalBs = $reserva[0]->subTotalBs;
    $lote=DB::select('select  proyecto.nombre as nombreProyecto, categorialote.descripcion,preciocategoria.precio,manzano,uv,fase,nroLote,norte,sur,este,oeste,medidaEste,medidaOeste,medidaSur,medidaNorte,superficie,categorialote.categoria,descuentoventa.porcentaje as descuento from lote,categorialote,proyecto,preciocategoria,descuentoventa where proyecto.id=descuentoventa.idProyecto and   lote.id="'.$reserva[0]->idLote.'" and lote.idCategoriaLote=categorialote.id and proyecto.id=categorialote.idProyecto and preciocategoria.idCategoria=categorialote.id and preciocategoria.deleted_at IS NULL and categorialote.deleted_at IS NULL');

    $meses=DB::select('select *from meses where deleted_at IS NULL');
    $nacionalidad=DB::select('SELECT * FROM `pais` ORDER by paisnombre');
    $descuento=DB::select('select *from descuentoventa where deleted_at IS NULL');
    $tipoCambio=DB::select('select *from tipocambio where deleted_at IS NULL');
    $cuotaMinima=DB::select('select *from cuotaminima where deleted_at IS NULL');
    $vendedor=DB::select('select empleado.codigo,nombre,id from empleado where codigo IS NOT NULL and deleted_at IS NULL GROUP by codigo');
    return view('venta.venta',['ci'=>$reserva[0]->ci,'id_lote'=>$reserva[0]->idLote,'reserva'=>$total,'idReserva'=>$reserva[0]->idDetalleReserva,'idPreReserva'=>0,'moneda'=>$reserva[0]->moneda,'reservaBs'=>$totalBs],compact('lote','descuento','tipoCambio','cuotaMinima','meses','vendedor','nacionalidad'));
  }

  public function VentaPreReserva($id){
    $prereserva=DB::select("SELECT lote.id as idLote,cliente.id as idCliente,cliente.ci,detalleprereserva.id as idDetalle, prereserva.id, DATE_FORMAT(prereserva.fecha,'%d/%m/%Y %H:%i:%s') AS fecha  ,proyecto.nombre, categorialote.categoria,lote.nroLote,lote.manzano,lote.superficie, (preciocategoria.precio * lote.superficie)as precio_superficie,preciocategoria.precio, CONCAT(cliente.nombre,' ',cliente.apellidos)as cliente, cliente.ci as ci_cliente, CONCAT(empleado.nombre,' ',empleado.apellido)as empleado, empleado.ci as ci_empleado from prereserva,detalleprereserva,lote,categorialote,proyecto,preciocategoria,cliente,empleado WHERE prereserva.id=detalleprereserva.idPreReserva AND detalleprereserva.idLote=lote.id AND categorialote.idProyecto=proyecto.id AND lote.idCategoriaLote=categorialote.id AND preciocategoria.idCategoria=categorialote.id AND cliente.id=prereserva.idCliente AND empleado.id=prereserva.idEmpleado  and preciocategoria.deleted_at IS NULL and detalleprereserva.id=".$id);
    $nacionalidad=DB::select('SELECT * FROM `pais` ORDER by paisnombre');

    $cliente = Cliente::find($prereserva[0]->idCliente);
    $lote=DB::select('select  proyecto.nombre as nombreProyecto,categorialote.descripcion,preciocategoria.precio,manzano,uv,fase,nroLote,norte,sur,este,oeste,medidaEste,medidaOeste,medidaSur,medidaNorte,superficie,categorialote.categoria,descuentoventa.porcentaje as descuento from lote,categorialote,proyecto,preciocategoria,descuentoventa where proyecto.id=descuentoventa.idProyecto and   lote.id="'.$prereserva[0]->idLote.'" and lote.idCategoriaLote=categorialote.id and proyecto.id=categorialote.idProyecto and preciocategoria.idCategoria=categorialote.id and preciocategoria.deleted_at IS NULL and categorialote.deleted_at IS NULL');

    $meses=DB::select('select *from meses where deleted_at IS NULL');

    $descuento=DB::select('select *from descuentoventa where deleted_at IS NULL');
    $tipoCambio=DB::select('select *from tipocambio where deleted_at IS NULL');
    $cuotaMinima=DB::select('select *from cuotaminima where deleted_at IS NULL');
    $vendedor=DB::select('select empleado.codigo,nombre,id from empleado where codigo IS NOT NULL and deleted_at IS NULL GROUP by codigo');

    return view('venta.venta',['ci'=>$prereserva[0]->ci,'cliente' => $cliente,'id_lote'=>$prereserva[0]->idLote,'reserva'=>0,'idReserva'=>0,'idPreReserva'=>$id,'reservaBs'=>0],compact('lote','descuento','tipoCambio','cuotaMinima','meses','vendedor','nacionalidad'));

  }
  public function vendedores(){
    $lista=array();
       // $vendedor=DB::select("select * from empleado where empleado.idCargo=3");
    $vendedor=DB::select("select * from `vendedor` where `vendedor`.`deleted_at` is null  and idEmpleadoPadre=27 order by idEmpleadoPadre");


         //$pdf=\PDF::loadView('pdf.vendedores',compact('vendedor'));
    $pdf=\PDF::loadView('pdf.gestorvendedor',compact('vendedor'));
    return   $pdf->stream();
  }
//REPORTES DE VENTAS
  public function ReporteVentas(){
    $fecha_inicio=DB::select("SELECT curdate()as fecha");
    $fecha_fin=DB::select("SELECT curdate()as fecha");
    $lista=DB::select("SELECT cliente.id as idCliente, CONCAT(empleado.nombre,' ',empleado.apellido)as empleado,CONCAT(empleado.ci,' ',empleado.expedido) as ci_empleado,empleado.celular as celular_empleado, CONCAT(cliente.nombre,' ',cliente.apellidos)as cliente,CONCAT(cliente.ci,' ',cliente.expedido) as ci_cliente,cliente.celular as celular_cliente,proyecto.nombre,categorialote.categoria,lote.fase,lote.manzano,lote.nroLote,DATE_FORMAT(venta.fecha,'%d/%M/%Y %H:%i:%s') AS fecha,cuotaInicialBs,venta.estado from venta,empleado,cliente,lote,categorialote,preciocategoria,proyecto,plandepago WHERE  cliente.idEmpleado=empleado.id AND venta.idCliente=cliente.id AND venta.idLote=lote.id AND categorialote.id=lote.idCategoriaLote AND categorialote.id=preciocategoria.idCategoria AND categorialote.idProyecto=proyecto.id AND preciocategoria.deleted_at IS NULL AND venta.fecha BETWEEN '".$fecha_inicio[0]->fecha."' AND DATE_SUB('".$fecha_fin[0]->fecha."',INTERVAL -1 DAY) and plandepago.idVenta=venta.id ORDER BY empleado.nombre,venta.fecha");
    return view('reportes.reportevista.reporte_venta',compact('lista','fecha_inicio','fecha_fin'));
  }

  public function ReporteVentasSearch(Request $request){
    $fecha_inicio=DB::select("SELECT '".$request['fecha_inicio']."'as fecha");
    $fecha_fin=DB::select("SELECT '".$request['fecha_fin']."'as fecha");

    $lista=DB::select("SELECT cliente.id as idCliente, CONCAT(empleado.nombre,' ',empleado.apellido)as empleado,CONCAT(empleado.ci,' ',empleado.expedido) as ci_empleado,empleado.celular as celular_empleado, CONCAT(cliente.nombre,' ',cliente.apellidos)as cliente,CONCAT(cliente.ci,' ',cliente.expedido) as ci_cliente,cliente.celular as celular_cliente,proyecto.nombre,categorialote.categoria,lote.fase,lote.manzano,lote.nroLote,DATE_FORMAT(venta.fecha,'%d/%M/%Y %H:%i:%s') AS fecha,cuotaInicialBs,venta.estado from venta,empleado,cliente,lote,categorialote,preciocategoria,proyecto,plandepago WHERE  cliente.idEmpleado=empleado.id AND venta.idCliente=cliente.id AND venta.idLote=lote.id AND categorialote.id=lote.idCategoriaLote AND categorialote.id=preciocategoria.idCategoria AND categorialote.idProyecto=proyecto.id AND preciocategoria.deleted_at IS NULL AND venta.fecha BETWEEN '".$fecha_inicio[0]->fecha."' AND DATE_SUB('".$fecha_fin[0]->fecha."',INTERVAL -1 DAY) and plandepago.idVenta=venta.id ORDER BY empleado.nombre,venta.fecha");
    return view('reportes.reportevista.reporte_venta',compact('lista','fecha_inicio','fecha_fin'));
  }
  public function ReporteVentaPDF($fecha_inicio, $fecha_fin){

    $fecha_inicio_aux=DB::select("SELECT DATE_FORMAT('".$fecha_inicio."','%d/%M/%Y') as fecha");
    $fecha_fin_aux=DB::select("SELECT DATE_FORMAT('".$fecha_fin."','%d/%M/%Y')as fecha");
    $lista=DB::select("SELECT CONCAT(empleado.nombre,' ',empleado.apellido)as empleado,CONCAT(empleado.ci,' ',empleado.expedido) as ci_empleado,empleado.celular as celular_empleado, CONCAT(cliente.nombre,' ',cliente.apellidos)as cliente,CONCAT(cliente.ci,' ',cliente.expedido) as ci_cliente,cliente.celular as celular_cliente,proyecto.nombre,categorialote.categoria,lote.fase,lote.manzano,lote.nroLote,DATE_FORMAT(venta.fecha,'%d/%M/%Y %H:%i:%s') AS fecha,plandepago.cuotaInicialUsd,venta.estado from venta,empleado,cliente,lote,categorialote,preciocategoria,proyecto,plandepago WHERE  cliente.idEmpleado=empleado.id AND venta.idCliente=cliente.id AND venta.idLote=lote.id AND categorialote.id=lote.idCategoriaLote AND categorialote.id=preciocategoria.idCategoria AND categorialote.idProyecto=proyecto.id AND preciocategoria.deleted_at IS NULL AND venta.fecha BETWEEN '".$fecha_inicio."' AND DATE_SUB('".$fecha_fin."',INTERVAL -1 DAY)  and plandepago.idVenta=venta.id  ORDER BY empleado.nombre,venta.fecha");
    $pdf = \PDF::loadView('reportes.reporte_venta_PDF',compact('lista','fecha_inicio_aux','fecha_fin_aux'));
    return $pdf->stream();
  }
  public function ObtenerVenta($id){
    $lista=DB::select("SELECT lote.superficie,venta.precio,venta.estado,lote.uv,lote.nroLote, pais.paisnombre,pais.id as idPais, cliente.fechaNacimiento,cliente.domicilio,cliente.ocupacion, cliente.celular,cliente.ci as ciCliente, cliente.nombre as nombreCliente,cliente.apellidos,cliente.fechaNacimiento,cliente.expedido,cliente.estadoCivil,cliente.ocupacion,cliente.domicilio,cliente.genero,cliente.lugarProcedencia, cliente.id as idCliente,CONCAT(empleado.nombre,' ',empleado.apellido)as empleado,CONCAT(empleado.ci,' ',empleado.expedido) as ci_empleado,empleado.celular as celular_empleado, CONCAT(cliente.nombre,' ',cliente.apellidos)as cliente,CONCAT(cliente.ci,' ',cliente.expedido) as ci_cliente,cliente.celular as celular_cliente,proyecto.nombre as nombreProyecto,categorialote.categoria,lote.fase,lote.manzano,lote.nroLote,DATE_FORMAT(venta.fecha,'%d/%M/%Y %H:%i:%s') AS fecha,venta.totalapagar as cuotaInicial,venta.estado from pais, venta,empleado,cliente,lote,categorialote,preciocategoria,proyecto WHERE  cliente.idEmpleado=empleado.id  AND venta.idCliente=cliente.id AND venta.idLote=lote.id AND categorialote.id=lote.idCategoriaLote AND categorialote.id=preciocategoria.idCategoria AND categorialote.idProyecto=proyecto.id AND preciocategoria.deleted_at IS NULL and cliente.idPais=pais.id  AND venta.id=".$id);
    return response()->json($lista);
  }
  //LISTA DE LAS CUOTAS Y SUS DETALLES
  function ListaCuota($idVenta){
    $lista=DB::select("SELECT cuotas.* FROM cuotas,plandepago WHERE plandepago.id=cuotas.idPlandePago AND plandepago.idVenta=".$idVenta);
    return response()->json($lista);
  }

  function ListaDetalleCuota($idCuota){
    $lista=DB::select("SELECT *FROM detallecuota WHERE detallecuota.idCuota=".$idCuota);
    return response()->json($lista);
  }
}
