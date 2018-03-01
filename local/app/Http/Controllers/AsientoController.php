<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Cuenta;
use App\Gestion;
use App\TipoCambio;
use App\Asiento;
use App\Detalle;
use App\LibroVenta;
use App\LibroCompra;
use Illuminate\Database\Events\TransactionBeginning;
use Illuminate\Database\MySqlConnection;
use Session;
use Redirect;
use DB;

class AsientoController extends Controller {

    public function __construct() {
        $this->middleware('auth');
        $this->middleware('admin');
        $this->middleware('auth', ['only' => 'admin']);
    }

    function index() {

        $cuenta = DB::select('SELECT * FROM cuenta WHERE estado=1 and utilizable=1 and deleted_at IS NULL');
        $gestion=DB::select('SELECT * FROM gestion where estado=1');
        $tipocambio=DB::select('SELECT * FROM tipocambio where deleted_at IS NULL');
        $tipo_asiento = DB::select('select * from categoriacuenta');
        $centrocosto = DB::select('SELECT * FROM centrocosto WHERE estado=1 and utilizable=1 and deleted_at IS NULL');
        $moneda=DB::select('SELECT * FROM moneda where deleted_at IS NULL');

        $verificargestion = DB::select("SELECT count(*) as count FROM gestion WHERE estado=1");

        if ($verificargestion[0]->count == 1 ) {
           return view('modulocontable.asientos.index', compact('cuenta', 'gestion', 'tipocambio', 'tipo_asiento', 'centrocosto', 'moneda'));
        }
        else if ($verificargestion[0]->count != 1 ) {
           Session::flash('error-gestion','DEBE APERTURAR UNA GESTIÓN PARA PODER AGREGAR COMPROBANTES');
           return Redirect::to('index');
        }
    }

    function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $contAsiento=DB::select("SELECT count(*) as count from asiento where id_gestion=".$request->id_gestion." order by id desc limit 1");
            $nroAsiento=DB::select("SELECT * from asiento where id_gestion=".$request->id_gestion." order by id desc limit 1");
            $nroAs=0;
            if($contAsiento[0]->count > 0)
            {
                $nroAs = $nroAsiento[0]->nro_asiento;
            }
            date_default_timezone_set('America/La_Paz');
            ini_set('date.timezone','America/La_Paz');
            $hora = date("H:i:s");
            $asiento=Asiento::create([
                'nro_asiento'=>$nroAs + 1,
                'tipo'=>$request->tipo_comprobante,// 1 = Ingreso, 2 = Egreso, 3 = Traspaso
                'glosa'=>$request->glosa,
                'fecha_transaccion'=>$request->fecha_transaccion." ".$hora,
                'cambio_tipo'=>$request->tipo_cambio,
                'estado'=>1,// 0 = ANULADO, 1 = ACTIVO
                'id_categoria'=>$request->categoria,
                'id_gestion'=>$request->id_gestion,
                'id_tipo_cambio'=>$request->id_tipo_cambio,
                'id_usuario'=>Session::get('idEmpleado'),
                'id_moneda'=>$request->moneda
            ]);
            $nro_detalle = 1;
            $tamaño = count($request['id']);
            $id_cuenta = $request['id'];
            $tipo_fila = $request['tipo'];
            $debe_bs = $request['debe_bs'];
            $haber_bs = $request['haber_bs'];
            $debe_sus = $request['debe_sus'];
            $haber_sus = $request['haber_sus'];
            $id_centro_costo = $request['id_centro_costo'];
            for ($i=0; $i < $tamaño-1; $i++) {
                if ($tipo_fila[$i] == 1) {
                     $tipo = $tipo_fila[$i];
                     $montoSus = $debe_sus[$i];
                     $montoBs = $debe_bs[$i];
                }
                else if ($tipo_fila[$i] == 2) {
                     $tipo = $tipo_fila[$i];
                     $montoSus = $haber_sus[$i];
                     $montoBs = $haber_bs[$i];
                }
                if ($id_centro_costo[$i] == "") {
                    Detalle::create([
                        'id_cuenta'=>$id_cuenta[$i],
                        'id_asiento'=>$asiento['id'],
                        'nro_detalle'=>$nro_detalle,
                        'tipo'=>$tipo,//1 = Debe, 2 = Haber
                        'montoSus'=> $montoSus,
                        'montoBs'=> $montoBs
                    ]);
                }
                else if ($id_centro_costo[$i] != "") {
                    Detalle::create([
                        'id_cuenta'=>$id_cuenta[$i],
                        'id_asiento'=>$asiento['id'],
                        'nro_detalle'=>$nro_detalle,
                        'tipo'=>$tipo,//1 = Debe, 2 = Haber
                        'montoSus'=> $montoSus,
                        'montoBs'=> $montoBs,
                        'id_centro_costo'=> $id_centro_costo[$i]
                    ]);
                }
                $nro_detalle++;
            }
            if ($request->tipo_comprobante == "1") {
                if ($request->agregar_LV == "1") {
                    LibroVenta::create([
                        'fecha_factura'=>$request['fecha_factura_LV'],
                        'nro_factura'=>$request['nro_factura_LV'],
                        'nro_autorizacion'=>$request['nro_autorizacion_LV'],
                        'estado'=>$request['estado_LV'],
                        'nit_ci_cliente'=>$request['nit_ci_cliente_LV'],
                        'nombre_razon_social'=>$request['nombre_razon_social_LV'],
                        'importe_total_venta'=>$request['importe_total_venta_LV'],
                        'importe_no_sujeto_IVA'=>$request['importe_no_sujeto_IVA_LV'],
                        'exportaciones_operaciones_exentas'=>$request['exportaciones_operaciones_exentas_LV'],
                        'ventas_gravadas_TC'=>$request['ventas_gravadas_TC_LV'],
                        'subtotal'=>$request['subtotal_LV'],
                        'descuento_sujeto_IVA'=>$request['descuento_sujeto_IVA_LV'],
                        'importe_base_DF'=>$request['importe_base_DF_LV'],
                        'debito_fiscal'=>$request['debito_fiscal_LV'],
                        'codigo_control'=>$request['codigo_control_LV']
                    ]);
                }
            }
            else if ($request->tipo_comprobante == "2") {
                if ($request->agregar_LC == "1") {
                    LibroCompra::create([
                        'fecha_factura_DUI'=>$request['fecha_factura_DUI_LC'],
                        'nit_proveedor'=>$request['nit_proveedor_LC'],
                        'nombre_razon_social'=>$request['nombre_razon_social_LC'],
                        'nro_factura'=>$request['nro_factura_LC'],
                        'nro_DUI'=>$request['nro_DUI_LC'],
                        'nro_autorizacion'=>$request['nro_autorizacion_LC'],
                        'importe_total_compra'=>$request['importe_total_compra_LC'],
                        'importe_no_sujeto_CF'=>$request['importe_no_sujeto_CF_LC'],
                        'subtotal'=>$request['subtotal_LC'],
                        'descuento_sujeto_IVA'=>$request['descuento_sujeto_IVA_LC'],
                        'importe_base_CF'=>$request['importe_base_CF_LC'],
                        'credito_fiscal'=>$request['credito_fiscal_LC'],
                        'codigo_control'=>$request['codigo_control_LC'],
                        'tipo_compra'=>$request['tipo_compra_LC']
                    ]);
                }
            }
            DB::commit();
            Session::flash('message','GUARDADO CORRECTAMENTE');
            return Redirect::to('comprobante');
        } catch (Exception $exc) {
             DB::rollback();
            echo $exc->getTraceAsString();
        }
    }

    function lista_index(Request $request) {
        $gestion=DB::select('SELECT * FROM gestion where estado=1');
        return view('modulocontable.asientos.lista_asiento', compact('gestion'));
    }

    function lista_asiento($fecha1, $fecha2, Request $request) {
        $resultado = DB::select('SELECT asiento.*, categoriacuenta.nombre as categoria, gestion.nombre_gestion as gestion from asiento, categoriacuenta, gestion where asiento.id_categoria = categoriacuenta.id and asiento.id_gestion = gestion.id and asiento.estado = 1 and fecha_transaccion BETWEEN "'.$fecha1.'" AND "'.$fecha2.'" ORDER BY asiento.fecha_transaccion, asiento.nro_asiento');
        
        return response()->json($resultado);
    }

    function detalle_asiento($id) {
        $resultado = DB::select('SELECT detalle.*,cuenta.codigo, cuenta.nombre as cuenta, (SELECT nombre from centrocosto where centrocosto.id = detalle.id_centro_costo) as centro_costo from detalle, cuenta where detalle.id_cuenta = cuenta.id and detalle.id_asiento = "'.$id.'" ORDER BY detalle.nro_detalle');
        
        return response()->json($resultado);
    }

    function anular_asiento(Request $request) {

        try {
            DB::beginTransaction();
            $asiento = Asiento::find($request['id_anular_asiento']);
            $asiento->fill([
                'estado' => 0,
                'motivo_anulado' => $request['motivo_anulado']
            ]);
            $asiento->save();
            $detalle = DB::select('SELECT * FROM detalle WHERE id_asiento = "'.$request['id_anular_asiento'].'"');
            foreach ($detalle as $fila) {
                $eliminar = Detalle::find($fila->id);
                $eliminar->delete();
            }
            $asiento->delete();
            DB::commit();
            Session::flash('message','ANULADO CORRECTAMENTE');
            return Redirect::to('lista_index');
        } catch (Exception $exc) {
             DB::rollback();
            echo $exc->getTraceAsString();
        }
    }

    function lista_anulado_index(Request $request) {
        $gestion=DB::select('SELECT * FROM gestion where estado=1');
        return view('modulocontable.asientos.lista_asiento_anulado', compact('gestion'));
    }

    function lista_asiento_anulado($fecha1, $fecha2, Request $request) {
        $resultado = DB::select('SELECT asiento.*, categoriacuenta.nombre as categoria, gestion.nombre_gestion as gestion from asiento, categoriacuenta, gestion where asiento.id_categoria = categoriacuenta.id and asiento.id_gestion = gestion.id and asiento.estado = 0 and fecha_transaccion BETWEEN "'.$fecha1.'" AND "'.$fecha2.'" ORDER BY asiento.fecha_transaccion, asiento.nro_asiento');
        
        return response()->json($resultado);
    }

    function detalle_asiento_anulado($id) {
        $resultado = DB::select('SELECT detalle.*,cuenta.codigo, cuenta.nombre as cuenta, (SELECT nombre from centrocosto where centrocosto.id = detalle.id_centro_costo) as centro_costo, asiento.motivo_anulado, asiento.deleted_at as fecha_anulado from detalle, cuenta, asiento where detalle.id_cuenta = cuenta.id and detalle.id_asiento = asiento.id and detalle.id_asiento = "'.$id.'" ORDER BY detalle.nro_detalle');
        
        return response()->json($resultado);
    }
}
