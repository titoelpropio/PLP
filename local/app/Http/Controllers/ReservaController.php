<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Requests\ClienteRequest;
use App\Http\Requests\UserUpdateRequest;
use Session;
use Redirect;
use App\Lote;
use App\Cliente;
use App\Reserva;
use App\DetalleReserva;
use App\DetallePreReserva;

use App\Asiento;
use App\Detalle;

use DB;
use Hash;
use App\TransaccionReserva;
class ReservaController extends Controller {
  var $puedeGuardar=0;
  var $puedeModificar=0;
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
       $verficar=DB::select("select modulo.nombre,perfilobjeto.puedeGuardar,perfilobjeto.puedeModificar,perfilobjeto.puedeEliminar,perfilobjeto.puedeListar, perfilobjeto.puedeVerReporte,perfilobjeto.puedeImprimir,objeto.urlObjeto from perfil,perfilobjeto,objeto,modulo where perfilobjeto.deleted_at IS NULL and perfil.id=perfilobjeto.idPerfil and perfilobjeto.idObjeto=objeto.id and modulo.id=objeto.idModulo and objeto.urlObjeto='/Reservar'  and perfil.id=".Session::get('idPerfil'));
   
  
       
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

        $vendedor=DB::select('select empleado.codigo,nombre,id from empleado where codigo IS NOT NULL and deleted_at IS NULL GROUP by codigo');
        $nacionalidad=DB::select('SELECT * FROM pais ORDER by paisnombre');
        $tipocambio=DB::select('SELECT * FROM tipocambio where deleted_at IS NULL');

        return view('reserva.index',compact('vendedor','nacionalidad','tipocambio'));
    }
    public function create() {
        $empresa = Empresa::lists('nombre', 'id');
        return view('usuario.create', compact('empresa'));
    }

    public function store(Request $request) {

      $verificargestion = DB::select("SELECT count(*) as count FROM gestion WHERE estado=1");
      $verificarcaja = DB::select("SELECT count(*) as count FROM cuentaautomatica WHERE nombre='Caja'");

      $verificarbanco = $request['moneda'] == "DOLAR" ? DB::select("SELECT count(*) as count FROM cuentaautomatica WHERE nombre='Cuenta Bancaria M/N'") : DB::select("SELECT count(*) as count FROM cuentaautomatica WHERE nombre='Cuenta Bancaria M/E'");
      $verificaringresodiferido = DB::select("SELECT count(*) as count FROM cuentaautomatica WHERE nombre='Ingreso Diferido'");

      if ($verificargestion[0]->count != 1 ) {
         Session::flash('message-error','DEBE APERTURAR UNA GESTIÓN PARA PODER REALIZAR ESTA TRANSACCIÓN');
         return Redirect::to('ListaPreReserva');
      }
      else if ($verificarcaja[0]->count != 1 && $request['tipoPago'] != "b" ) {
         Session::flash('message-error','DEBE CONFIGURAR LA "CUENTA CAJA" POR DEFECTO EN CUENTAS AUTOMÁTICAS PARA PODER REALIZAR ESTA TRANSACCIÓN');
         return Redirect::to('ListaPreReserva');
      }
      else if ($verificarbanco[0]->count != 1 && $request['tipoPago'] != "e" ) {
         Session::flash('message-error','DEBE CONFIGURAR LA "CUENTA BANCO" POR DEFECTO EN CUENTAS AUTOMÁTICAS PARA PODER REALIZAR ESTA TRANSACCIÓN');
         return Redirect::to('ListaPreReserva');
      }
      else if ($verificaringresodiferido[0]->count != 1 ) {
         Session::flash('message-error','DEBE CONFIGURAR LA "CUENTA INGRESO DIFERIDO" POR DEFECTO EN CUENTAS AUTOMÁTICAS PARA PODER REALIZAR ESTA TRANSACCIÓN');
         return Redirect::to('ListaPreReserva');
      }
      
      else{
        try {
            DB::beginTransaction();
            
            //este es if verifica si la transaccion la hace desde el formulario reserva o pre-reserva 0=reserva 1=prereserva
            if ($request['tipoReserva']==1) {

                $Monto = "";
                $MontoBs = "";
                $verificar=DB::select("SELECT * FROM lote WHERE id=".$request['idLote']);

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
                      'montoSus'=>$request['monto'],
                      'montoBs'=>$request['montoBs']
                    ]);

                    $nro_detalle++;
                    //----------------------------------- fin Contabilidad -----------------------------------------------------//
                }
                
                if ($request['tipoPago'] == "be") {
                    $Monto = $request['monto']+$request['montoBanco'];
                    $MontoBs = $request['montoBs']+$request['montoBancoBs'];
                    //---------------------------------- Contabilidad BANCO CAJA------------------------------------------------//
                    //CAJA
                    $cuentaautomatica = DB::select("SELECT * FROM cuentaautomatica WHERE nombre='Caja'");                      
                    Detalle::create([
                      'id_cuenta'=>$cuentaautomatica[0]->id_cuenta,
                      'id_asiento'=>$asiento['id'],
                      'nro_detalle'=>$nro_detalle,
                      'tipo'=>1,//1 = Debe, 2 = Haber
                      'montoSus'=>$request['monto'],
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
                      'montoSus'=>$request['montoBanco'],
                      'montoBs'=>$request['montoBancoBs']
                    ]);

                    $nro_detalle++;
                    //----------------------------------- fin Contabilidad -----------------------------------------------------//
                }
                if ($request['tipoPago'] == "b") {
                    $Monto = $request['montoBanco'];
                    $MontoBs = $request['montoBancoBs'];
                    //---------------------------------- Contabilidad BANCO----------------------------------------------------//
                    $cuentaautomatica = DB::select("SELECT * FROM cuentaautomatica WHERE nombre='Bancos'");
                    Detalle::create([
                      'id_cuenta'=>$cuentaautomatica[0]->id_cuenta,
                      'id_asiento'=>$asiento['id'],
                      'nro_detalle'=>$nro_detalle,
                      'tipo'=>1,//1 = Debe, 2 = Haber
                      'montoSus'=>$request['montoBanco'],
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
                  'montoSus'=>$Monto,
                  'montoBs'=>$MontoBs
                ]);
                //----------------------------------- fin Contabilidad -----------------------------------------------------//

                if ($verificar[0]->estado == 1) {
                    $idReserva=Reserva::create([
                        'idEmpleado' =>  Session::get('idEmpleado'),              
                        'idCliente' => $request['idCliente'],  //ACA VA EL ID DEL CLIENTE Q ESTE LOGUEADO         
                        'montoTotal' => $Monto,
                        'montoTotalBs' => $MontoBs,
                        'moneda' => $request['tipoMoneda'],
                        'idAsiento' => $asiento['id']
                    ]);
                    $reserva=DetalleReserva::create([
                        'idLote'=> $request['idLote'],
                        'idReserva'=> $idReserva['id'],
                        'subTotal'=> $Monto,
                        'subTotalBs'=> $MontoBs,
                        'tipoPago'=> $request['tipoPago']
                    ]);

                    if ($request['tipoPago'] != "e" )  {
                        if ($request['nroDocumento']=="") {
                          DB::rollback();
                          Session::flash('message-error', 'Coloque el numero del bauche por favor');
                          return Redirect::to('ListaPreReserva');
                        }
                        $TrasaccionReserva=new TransaccionReserva;
                        $TrasaccionReserva->idDetalleReserva= $reserva['id'];
                        $TrasaccionReserva->idBanco=$request['banco'];
                        $TrasaccionReserva->idCuenta=$request['cuenta'];
                        $TrasaccionReserva->nroDocumento=$request['nroDocumento'];
                        $TrasaccionReserva->monto=$request['montoBanco'];
                        $TrasaccionReserva->montoBs=$request['montoBancoBs'];
                        $TrasaccionReserva->fecha=$request['fecha'];
                        $TrasaccionReserva->save();
                    }
                    //DB::table('lote')->where('id',$request['idLote'])->update(['estado'=>2]);
                    $DetallePreReserva = DetallePreReserva::find($request['idPreReserva']);
                    $DetallePreReserva->fill(['estado'=>'r']);
                    $DetallePreReserva->save();

                    DB::commit(); 
                    Session::flash('message', 'RESERVA GUARDADO CORRECTAMENTE');                    
                    return Redirect::to('ListaPreReserva');                                         
                }
                else {
                  DB::rollback();
                  Session::flash('message-error', 'LA PRE-RESERVA NO ESTA A SU NOMBRE');                    
                  return Redirect::to('ListaPreReserva');                   
                }
            }
            if ($request['idVendedor']=="") {
                Session::flash('message-error', 'Coloque el codigo del vendedor');
                return Redirect::to('Reserva');
            }
            $verificar=DB::select("SELECT *,COUNT(*)as contador from cliente WHERE cliente.ci=".$request['ci']);

            if ($verificar[0]->contador == 0) {
                $padre=DB::select("SELECT v.idEmpleadoPadre FROM vendedor v WHERE (NOT EXISTS(SELECT *FROM vendedor v2 WHERE v2.idEmpleadoHijo=v.idEmpleadoPadre)) LIMIT 1");            
                $Cliente=Cliente::create([
                    'nombre' => $request['nombre'],          
                    'apellidos' => $request['apellidos'],          
                    'fechaNacimiento' => $request['fechaNacimiento'],          
                    'ci' => $request['ci'],          
                    'idPais' => $request['idPais'],          
                    'lugarProcedencia' => $request['lugarProcedencia'],          
                    'genero' => $request['genero'],          
                    'celular' => $request['celular'],          
                    'celular_ref' => $request['celular_ref'],          
                    'estadoCivil' => $request['estadoCivil'],          
                    'domicilio' => $request['domicilio'],          
                    'nit' => $request['nit'],          
                    'idEmpleado' => $request['idVendedor'],          
                ]);
                $idCliente = $Cliente['id'];
                $idEmpleado = $padre[0]->idEmpleadoPadre;
            }
            else{
                $idCliente = $verificar[0]->id;  
                $idEmpleado = $verificar[0]->idEmpleado;  
            }
              $Monto = "";
                $MontoBs = "";

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
                
                if ($request['tipoPago'][0]=='e') {
                    $Monto = $request['montoTotal'];
                    $MontoBs = $request['montoTotalB'];
                    //---------------------------------- Contabilidad CAJA----------------------------------------------------------//
                    $cuentaautomatica = DB::select("SELECT * FROM cuentaautomatica WHERE nombre='Caja'");
                    Detalle::create([
                      'id_cuenta'=>$cuentaautomatica[0]->id_cuenta,
                      'id_asiento'=>$asiento['id'],
                      'nro_detalle'=>$nro_detalle,
                      'tipo'=>1,//1 = Debe, 2 = Haber
                      'montoSus'=>$request['montoTotal'],
                      'montoBs'=>$request['montoTotalB']
                    ]);

                    $nro_detalle++;
                    //----------------------------------- fin Contabilidad -----------------------------------------------------//
                }
                
                if ($request['tipoPago'][0] == "be") {
                    $Monto = $request['monto']+$request['montoBanco'];
                    $MontoBs = $request['montoBs']+$request['montoBancoBs'];
                    //---------------------------------- Contabilidad BANCO CAJA------------------------------------------------//
                    //CAJA
                    $cuentaautomatica = DB::select("SELECT * FROM cuentaautomatica WHERE nombre='Caja'");                      
                    Detalle::create([
                      'id_cuenta'=>$cuentaautomatica[0]->id_cuenta,
                      'id_asiento'=>$asiento['id'],
                      'nro_detalle'=>$nro_detalle,
                      'tipo'=>1,//1 = Debe, 2 = Haber
                      'montoSus'=>$request['monto'],
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
                      'montoSus'=>$request['montoBanco'],
                      'montoBs'=>$request['montoBancoBs']
                    ]);

                    $nro_detalle++;
                    //----------------------------------- fin Contabilidad -----------------------------------------------------//
                }
                if ($request['tipoPago'] == "b") {
                    $Monto = $request['montoTotal'];
                    $MontoBs = $request['montoTotalB'];
                    //---------------------------------- Contabilidad BANCO----------------------------------------------------//
                    $cuentaautomatica = DB::select("SELECT * FROM cuentaautomatica WHERE nombre='Bancos'");
                    Detalle::create([
                      'id_cuenta'=>$cuentaautomatica[0]->id_cuenta,
                      'id_asiento'=>$asiento['id'],
                      'nro_detalle'=>$nro_detalle,
                      'tipo'=>1,//1 = Debe, 2 = Haber
                      'montoSus'=>$request['montoTotal'],
                      'montoBs'=>$request['montoTotalB']
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
                  'montoSus'=>$Monto,
                  'montoBs'=>$MontoBs
                ]);
                //----------------------------------- fin Contabilidad -----------------------------------------------------//
            $idReserva=Reserva::create([
                'idEmpleado' =>  Session::get('idEmpleado'),              
                'idCliente' => $idCliente,  //ACA VA EL ID DEL CLIENTE Q ESTE LOGUEADO         
                'montoTotal' => $request['montoTotal'],       
                'montoTotalBs' => $request['montoTotalB'],      
               'moneda' => $request['moneda'],
               'idAsiento' => $asiento['id']
            ]);

            //SE REGISTRA EL DETALLE DE LAS PRE RESERVAS
            $id_lote = $request->get('id_lote');
            $subTotal  = $request->get('subTotal');
            $subTotalBs  = $request->get('subTotalB');
            $nroLote  = $request->get('nro_lote');
            $nroManzano  = $request->get('nro_manzano');
            $tipoPago =$request->get('tipoPago');
            $banco =$request->get('banco');
            $nroCuenta =$request->get('cuenta');
            $nroDocumento =$request->get('nroDocumento');
            $montoBanco =$request->get('MontoBanco');

            $cont = 0;
            $ver = 0;
            $cont2 = 0;
            $montoTotal = 0;

            while ( $cont < count($id_lote)) {
                $verificar=DB::select('select count(*) as count,estado,nroLote from lote where estado<>0 and id='.$id_lote[$cont]);
                if ($verificar[0]->count==1 ) {
                    Session::flash('message-error','El Lote nro '.$verificar[0]->nroLote.' ya no esta disponible para reservar');
                    return Redirect::to('Reserva');
                }
                if ($subTotal[$cont] != "" && $nroLote[$cont] != "" && $nroManzano[$cont] != "") {
                    $reserva=DetalleReserva::create([
                        'idLote'=> $id_lote[$cont],
                        'idReserva'=> $idReserva['id'],
                        'subTotal'=> $subTotal[$cont],
                        'tipoPago'=> $tipoPago[$cont],
                        'subTotalBs' => $subTotalBs[$cont],
                    ]);
                    $montoTotal=$montoTotal+$subTotal[$cont];
                     
                    //DB::table('lote')->where('id',$id_lote[$cont])->update(['estado'=>2]);
                    if ($tipoPago [$cont]=="b" && $nroDocumento [$cont]!="")  {
                        $TrasaccionReserva=new TransaccionReserva;
                        $TrasaccionReserva->idDetalleReserva= $reserva['id'];

                        $TrasaccionReserva->idBanco=$banco[$cont2];
                        $TrasaccionReserva->idCuenta=$nroCuenta[$cont2];
                        $TrasaccionReserva->nroDocumento=$nroDocumento[$cont];
                        $TrasaccionReserva->monto=$subTotal[$cont];
                        $TrasaccionReserva->montoBs=$subTotalBs[$cont];

                        $TrasaccionReserva->save();
                        $cont2++;
                        $montoTotal=$montoTotal+$montoBanco[$cont];
                    }
                    $ver++;
                }
                $cont=$cont+1;
            }
            $reserva = Reserva::find($idReserva['id']);
            $reserva->fill(['montoTotal'=>$montoTotal]);
            $reserva->save();
            // DB::table('reserva')->where('id',$idReserva['id'])->update(['montoTotal'=>$montoTotal]);                
            //   if ($ver == 0) {
            // DB::rollback();
            //     return redirect('Reserva')->with("message-error","NO INTRODUJO BIEN LOS DATOS");                    
            // } else {
            DB::commit();     
            /*$reserva=DB::select("SELECT (".$idReserva['id'].") as codigo,lote.nroLote,lote.manzano,lote.fase,lote.superficie,categorialote.categoria,categorialote.descripcion,proyecto.nombre,detallereserva.subTotal,DATE_FORMAT(reserva.fecha,'%d - %M - %Y') AS fecha, CONCAT(cliente.nombre,' ',cliente.apellidos)as cliente,cliente.ci FROM reserva,detallereserva,lote,categorialote,proyecto,cliente WHERE reserva.id=detallereserva.idReserva AND detallereserva.idLote=lote.id AND lote.idCategoriaLote=categorialote.id AND categorialote.idProyecto=proyecto.id AND reserva.idCliente=cliente.id AND detallereserva.idReserva=".$idReserva['id']);              
            $pdf=\PDF::loadView('reserva.reserva-PDF',compact('reserva'));
            return   $pdf->stream(); */
            Session::flash('message', 'RESERVA GUARDADO CORRECTAMENTE');                    
            return Redirect::to('Reserva');              
            //}     
        }
        catch (Exception $e) {
            DB::rollback();
            return redirect('Reserva')->with("message-error","ERROR INTENTE NUEVAMENTE");      
        }
      }
    }

    function ListaReserva(Request $request){
        $fecha=DB::select("SELECT curdate()as fecha");
        $lista=DB::select("SELECT lote.id as idLote,lote.fase,reserva.id as idReserva,detallereserva.id as idDetalleReserva,DATE_FORMAT(reserva.fecha,'%d/%m/%Y %H:%i:%s') AS fecha ,DATE_FORMAT((DATE_SUB(reserva.fecha, INTERVAL -7 DAY)),'%d/%m/%Y') as vencimiento,proyecto.nombre, categorialote.categoria,lote.nroLote,lote.manzano,lote.superficie, (preciocategoria.precio * lote.superficie)as precio_superficie,preciocategoria.precio, CONCAT(cliente.nombre,' ',cliente.apellidos)as cliente, cliente.ci as ci_cliente, CONCAT(empleado.nombre,' ',empleado.apellido)as empleado, empleado.ci as ci_empleado  from reserva,detallereserva,lote,categorialote,proyecto,preciocategoria,cliente,empleado WHERE reserva.id=detallereserva.idReserva AND detallereserva.idLote=lote.id AND categorialote.idProyecto=proyecto.id AND lote.idCategoriaLote=categorialote.id AND preciocategoria.idCategoria=categorialote.id AND cliente.id=reserva.idCliente AND empleado.id=reserva.idEmpleado AND detallereserva.estado='r' and preciocategoria.deleted_at IS NULL order by reserva.id desc");
        return view('reserva.lista_Reserva', compact('lista'));
    }

  public function reserva_PDF($id_reserva){
         echo "<SCRIPT>window.open('Reserva-PDF/10', 'windowName', 'resizable=1, scrollbars=1, fullscreen=1, height=1300, width=1000, toolbar=0, menubar=0, status=1');</SCRIPT>";// "<script> window.open('reserva_PDF/'".$id_reserva."); <script>";
        $reserva=DB::select("SELECT lote.nroLote,lote.manzano,lote.fase,lote.superficie,categorialote.categoria,categorialote.descripcion,proyecto.nombre,detallereserva.subTotal,reserva.fecha, CONCAT(cliente.nombre,' ',cliente.apellidos)as cliente,cliente.ci FROM reserva,detallereserva,lote,categorialote,proyecto,cliente WHERE reserva.id=detallereserva.idReserva AND detallereserva.idLote=lote.id AND lote.idCategoriaLote=categorialote.id AND categorialote.idProyecto=proyecto.id AND reserva.idCliente=cliente.id AND detallereserva.idReserva=".$id_reserva);
        $pdf=\PDF::loadView('reserva.reserva-PDF',compact('reserva'));
        return   $pdf->stream();        
    }

    public function reserva_PDF2($id_reserva){
        $reserva=DB::select("SELECT lote.nroLote,lote.manzano,lote.fase,lote.superficie,categorialote.categoria,categorialote.descripcion,proyecto.nombre,detallereserva.subTotal,reserva.fecha, CONCAT(cliente.nombre,' ',cliente.apellidos)as cliente,cliente.ci FROM reserva,detallereserva,lote,categorialote,proyecto,cliente WHERE reserva.id=detallereserva.idReserva AND detallereserva.idLote=lote.id AND lote.idCategoriaLote=categorialote.id AND categorialote.idProyecto=proyecto.id AND reserva.idCliente=cliente.id AND detallereserva.idReserva=".$id_reserva);
        $pdf=\PDF::loadView('reserva.reserva-PDF',compact('reserva'));
        return   $pdf->stream();        
    }

    function BuscarListaReserva(Request $request){
        $lista=DB::select("SELECT lote.id as idLote,lote.fase,reserva.id as idReserva,detallereserva.id as idDetalleReserva,DATE_FORMAT(reserva.fecha,'%d/%M/%Y %H:%i:%s') AS fecha ,DATE_FORMAT((DATE_SUB(reserva.fecha, INTERVAL -7 DAY)),'%d/%M/%Y') as vencimiento,proyecto.nombre, categorialote.categoria,lote.nroLote,lote.manzano,lote.superficie, (preciocategoria.precio * lote.superficie)as precio_superficie,preciocategoria.precio, CONCAT(cliente.nombre,' ',cliente.apellidos)as cliente, cliente.ci as ci_cliente, CONCAT(empleado.nombre,' ',empleado.apellido)as empleado, empleado.ci as ci_empleado from reserva,detallereserva,lote,categorialote,proyecto,preciocategoria,cliente,empleado WHERE reserva.id=detallereserva.idReserva AND detallereserva.idLote=lote.id AND categorialote.idProyecto=proyecto.id AND lote.idCategoriaLote=categorialote.id AND preciocategoria.idCategoria=categorialote.id AND cliente.id=reserva.idCliente AND empleado.id=reserva.idEmpleado AND detallereserva.estado='r' AND preciocategoria.deleted_at IS NULL AND DATE_FORMAT(reserva.fecha,'%Y-%m-%d')='".$request['fecha_inicio']."'");  
        return view('reserva.lista_Reserva', compact('lista'));
    }
       function BuscarListaReservaCi(Request $request){
        $lista=DB::select("SELECT lote.id as idLote,lote.fase,reserva.id as idReserva,detallereserva.id as idDetalleReserva,DATE_FORMAT(reserva.fecha,'%d/%M/%Y %H:%i:%s') AS fecha ,DATE_FORMAT((DATE_SUB(reserva.fecha, INTERVAL -7 DAY)),'%d/%M/%Y') as vencimiento,proyecto.nombre, categorialote.categoria,lote.nroLote,lote.manzano,lote.superficie, (preciocategoria.precio * lote.superficie)as precio_superficie,preciocategoria.precio, CONCAT(cliente.nombre,' ',cliente.apellidos)as cliente, cliente.ci as ci_cliente, CONCAT(empleado.nombre,' ',empleado.apellido)as empleado, empleado.ci as ci_empleado from reserva,detallereserva,lote,categorialote,proyecto,preciocategoria,cliente,empleado WHERE reserva.id=detallereserva.idReserva AND detallereserva.idLote=lote.id AND categorialote.idProyecto=proyecto.id AND lote.idCategoriaLote=categorialote.id AND preciocategoria.idCategoria=categorialote.id AND cliente.id=reserva.idCliente AND empleado.id=reserva.idEmpleado AND detallereserva.estado='r' AND preciocategoria.deleted_at IS NULL AND cliente.ci=".$request['ci']);  
        return view('reserva.lista_Reserva', compact('lista'));
    }

    public function edit($id) {
        $trabajador = User::find($id);
        $empresa = Empresa::where('id', $trabajador->id_empresa)->lists('nombre', 'id');
        return view('usuario.edit', ['user' => $trabajador], compact('empresa'));
    }
    public function update(Request $request) {
        $verificar=DB::select("SELECT COUNT(*)as contador from Reserva WHERE id_manzano=".$request['id_manzano_ac']." AND nro_Reserva=".$request['nro_Reserva_ac']);
        if ($verificar[0]->contador == 1) {
            Session::flash('message-error', 'YA EXISTE UN Reserva CON ESAS CARACTERISTICAS');
            return Redirect::to('/Reserva');            
        } else {
            $id=$request->get("id_Reserva");
            DB::table('Reserva')->where('id', $id)->update(['nro_Reserva'=>$request['nro_Reserva_ac'], 'superficie'=>$request['superficie_ac'],'id_manzano'=>$request['id_manzano_ac']]);       
            Session::flash('message', 'ACTUALIZADO CORRECTAMENTE');
            return Redirect::to('/Reserva');   
        }                       
    }
    public function destroy($id) {
        $trabajador = User::find($id);
        $trabajador->delete();
        Session::flash('message', 'Usuario Eliminado Correctamente');
        return Redirect::to('/usuario');
    }
    public function cargar_Reserva($punto){
        $Reserva=DB::select('SELECT * FROM Reserva WHERE Reserva.point="'.$punto.'"');
        return response($Reserva);
    }
    function seccion1_reserva(){

 $manzano = Manzano::lists('numero', 'id');
 return view('mapas.seccion1_reserva',compact('manzano'));

    }
    //    public function cargar_lote($punto){


    //     $lote=DB::select('SELECT lote.estado, lote.norte,lote.medida_norte,lote.sur,lote.medida_sur,lote.este,lote.medida_este,lote.oeste,lote.medida_oeste, lote.tipo_etiqueta,lote.nro_lote, lote.id as id, lote.superficie,manzano.id as id_manzano, manzano.numero as numero_manzano FROM lote,manzano WHERE manzano.id=lote.id_manzano and lote.point="'.$punto.'"');
    //     return response($lote);
    // }
    public function buscar_reserva_ci($ci){//este busca por carnet las reservas
         
             $lista_reserva =DB::select("select cliente.nombre as nombre_cliente, cliente.apellido as apellido_cliente,cliente.ci,lote.nro_lote,manzano.numero as nro_manzano, cliente.id as id_cliente, reserva.id as id_reserva, reserva.fecha,users.name,users.apellido,users.id  from reserva,cliente,users,lote,manzano where reserva.deleted_at is null and cliente.id= reserva.id_cliente and users.id=reserva.id_vendedor and lote.id= reserva.id_lote and lote.id_manzano=manzano.id and reserva.estado=1 and cliente.ci=".$ci);
         return response()->json($lista_reserva);

    }
    public function reserva_lotes(){
       
$lista_reserva =DB::select("select cliente.nombre as nombre_cliente, cliente.apellido as apellido_cliente,cliente.ci,lote.nro_lote,manzano.numero as nro_manzano, cliente.id as id_cliente, reserva.id as id_reserva, reserva.fecha,users.name,users.apellido,users.id  from reserva,cliente,users,lote,manzano where reserva.deleted_at is null and cliente.id= reserva.id_cliente and users.id=reserva.id_vendedor and lote.id= reserva.id_lote and lote.id_manzano=manzano.id and reserva.estado=1 and DATE_FORMAT(reserva.fecha,'%m-%d-%Y')=DATE_FORMAT(NOW(),'%m-%d-%Y')");
        return view('reserva.reserva_lotes',compact('lista_reserva'));
    }
    public function buscar_reserva($fecha){//este busca por fecha las reservas
$lista_reserva =DB::select("select cliente.nombre as nombre_cliente, cliente.apellido as apellido_cliente,cliente.ci,lote.nro_lote,manzano.numero as nro_manzano, cliente.id as id_cliente, reserva.id as id_reserva, reserva.fecha,users.name,users.apellido,users.id  from reserva,cliente,users,lote,manzano where reserva.deleted_at is null and cliente.id= reserva.id_cliente and users.id=reserva.id_vendedor and lote.id= reserva.id_lote and lote.id_manzano=manzano.id and reserva.estado=1 and DATE_FORMAT(reserva.fecha,'%m-%d-%Y')=DATE_FORMAT('".$fecha."','%m-%d-%Y')");
return response()->json($lista_reserva);
    }
    public function anularReserva(Request $request){

         $reserva = Reserva::find($request->id_reserva);
        $reserva->delete();
         DB::table('reserva')->where('id', $request->id_reserva)->update(['estado'=>0]);
          DB::table('lote')->where('id', $reserva->id_lote)->update(['estado'=>0]);
        Session::flash('message', 'Reserva Eliminado Correctamente');
        return Redirect::to('reservas/lotes');
    }

    public function buscar_lote($nro_lote, $nro_manzano){


        $lote=DB::select('SELECT count(*) as count, tipo_etiqueta,lote.nro_lote,manzano.numero,lote.point FROM lote,manzano WHERE lote.id_manzano=manzano.id and nro_lote='.$nro_lote.' and numero='.$nro_manzano.' and estado = 0');
        if ($lote[0]->count!=0) {
        return response($lote);
                   }
                   return response(['mensaje'=>'1']);
  
}
//REPORTES DE RESERVAS
  public function reporte_reserva(){
    $fecha_inicio=DB::select("SELECT curdate()as fecha");
    $fecha_fin=DB::select("SELECT curdate()as fecha");
    $lista=DB::select("SELECT CONCAT(empleado.nombre,' ',empleado.apellido)as empleado,CONCAT(empleado.ci,' ',empleado.expedido) as ci_empleado,empleado.celular as celular_empleado, CONCAT(cliente.nombre,' ',cliente.apellidos)as cliente,CONCAT(cliente.ci,' ',cliente.expedido) as ci_cliente,cliente.celular as celular_cliente,proyecto.nombre,categorialote.categoria,lote.fase,lote.manzano,lote.nroLote,DATE_FORMAT(reserva.fecha,'%d/%M/%Y %H:%i:%s') AS fecha ,DATE_FORMAT((DATE_SUB(reserva.fecha, INTERVAL -7 DAY)),'%d/%M/%Y') as vencimiento,detallereserva.estado FROM proyecto,preciocategoria,categorialote,lote,reserva,detallereserva,cliente,empleado WHERE proyecto.id=categorialote.idProyecto AND categorialote.id=preciocategoria.idCategoria AND lote.idCategoriaLote=categorialote.id AND reserva.idCliente=cliente.id and reserva.idEmpleado=empleado.id AND reserva.id=detallereserva.idReserva AND detallereserva.idLote=lote.id AND preciocategoria.deleted_at IS NULL AND reserva.fecha BETWEEN '".$fecha_inicio[0]->fecha."' AND DATE_SUB('".$fecha_fin[0]->fecha."',INTERVAL -1 DAY) ORDER BY empleado.nombre,reserva.fecha");
    return view('reportes.reportevista.reporte_reserva',compact('lista','fecha_inicio','fecha_fin'));
  }

  public function reporte_reserva_busqueda(Request $request){
    $fecha_inicio=DB::select("SELECT '".$request['fecha_inicio']."'as fecha");
    $fecha_fin=DB::select("SELECT '".$request['fecha_fin']."'as fecha");
    $lista=DB::select("SELECT CONCAT(empleado.nombre,' ',empleado.apellido)as empleado,CONCAT(empleado.ci,' ',empleado.expedido) as ci_empleado,empleado.celular as celular_empleado, CONCAT(cliente.nombre,' ',cliente.apellidos)as cliente,CONCAT(cliente.ci,' ',cliente.expedido) as ci_cliente,cliente.celular as celular_cliente,proyecto.nombre,categorialote.categoria,lote.fase,lote.manzano,lote.nroLote,DATE_FORMAT(reserva.fecha,'%d/%M/%Y %H:%i:%s') AS fecha ,DATE_FORMAT((DATE_SUB(reserva.fecha, INTERVAL -7 DAY)),'%d/%M/%Y') as vencimiento,detallereserva.estado FROM proyecto,preciocategoria,categorialote,lote,reserva,detallereserva,cliente,empleado WHERE proyecto.id=categorialote.idProyecto AND categorialote.id=preciocategoria.idCategoria AND lote.idCategoriaLote=categorialote.id AND reserva.idCliente=cliente.id and reserva.idEmpleado=empleado.id AND reserva.id=detallereserva.idReserva AND detallereserva.idLote=lote.id AND preciocategoria.deleted_at IS NULL AND reserva.fecha BETWEEN '".$request['fecha_inicio']."' AND DATE_SUB('".$request['fecha_fin']."',INTERVAL -1 DAY) ORDER BY empleado.nombre,reserva.fecha");
    return view('reportes.reportevista.reporte_reserva',compact('lista','fecha_inicio','fecha_fin'));    
  }  

  public function ReporteReservaPDF($fecha_inicio, $fecha_fin){
      
    $fecha_inicio_aux=DB::select("SELECT DATE_FORMAT('".$fecha_inicio."','%d/%M/%Y') as fecha");
    $fecha_fin_aux=DB::select("SELECT DATE_FORMAT('".$fecha_fin."','%d/%M/%Y')as fecha");
    $lista=DB::select("SELECT CONCAT(empleado.nombre,' ',empleado.apellido)as empleado,CONCAT(empleado.ci,' ',empleado.expedido) as ci_empleado,empleado.celular as celular_empleado, CONCAT(cliente.nombre,' ',cliente.apellidos)as cliente,CONCAT(cliente.ci,' ',cliente.expedido) as ci_cliente,cliente.celular as celular_cliente,proyecto.nombre,categorialote.categoria,lote.fase,lote.manzano,lote.nroLote,DATE_FORMAT(reserva.fecha,'%d/%M/%Y %H:%i:%s') AS fecha ,DATE_FORMAT((DATE_SUB(reserva.fecha, INTERVAL -7 DAY)),'%d/%M/%Y') as vencimiento,detallereserva.estado FROM proyecto,preciocategoria,categorialote,lote,reserva,detallereserva,cliente,empleado WHERE proyecto.id=categorialote.idProyecto AND categorialote.id=preciocategoria.idCategoria AND lote.idCategoriaLote=categorialote.id AND reserva.idCliente=cliente.id and reserva.idEmpleado=empleado.id AND reserva.id=detallereserva.idReserva AND detallereserva.idLote=lote.id AND preciocategoria.deleted_at IS NULL AND reserva.fecha BETWEEN '".$fecha_inicio."' AND DATE_SUB('".$fecha_fin."',INTERVAL -1 DAY) ORDER BY empleado.nombre,reserva.fecha");
      $pdf = \PDF::loadView('reportes.reporte_reserva_PDF',compact('lista','fecha_inicio_aux','fecha_fin_aux'));
      return $pdf->stream();  
  }  

}