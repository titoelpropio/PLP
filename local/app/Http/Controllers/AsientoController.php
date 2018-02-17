<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Cuenta;
use App\Gestion;
use App\TipoCambio;
use App\Asiento;
use App\Detalle;
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

        $verificargestion = DB::select("SELECT count(*) as count FROM gestion WHERE estado=1");

        if ($verificargestion[0]->count == 1 ) {
           return view('modulocontable.asientos.index', compact('cuenta', 'gestion', 'tipocambio', 'tipo_asiento'));
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
                'estado'=>1,
                'id_categoria'=>$request->categoria,
                'id_gestion'=>$request->id_gestion,
                'id_moneda'=>$request->id_tipo_cambio,
                'id_usuario'=>Session::get('idEmpleado')
            ]);
            $nro_detalle = 1;
            $tamaño = count($request['id']);
            $id_cuenta = $request['id'];
            $tipo_fila = $request['tipo'];
            $debe_bs = $request['debe_bs'];
            $haber_bs = $request['haber_bs'];
            $debe_sus = $request['debe_sus'];
            $haber_sus = $request['haber_sus'];
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
                Detalle::create([
                    'id_cuenta'=>$id_cuenta[$i],
                    'id_asiento'=>$asiento['id'],
                    'nro_detalle'=>$nro_detalle,
                    'tipo'=>$tipo,//1 = Debe, 2 = Haber
                    'montoSus'=> $montoSus,
                    'montoBs'=> $montoBs
                ]);
                $nro_detalle++;
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

    function lista_asiento(Request $request) {
        $id_empresa = DB::select("SELECT id,nombre FROM empresa");
        $lista_asiento = DB::select("SELECT asiento.id, asiento.nro_asiento, asiento.glosa, asiento.fecha, asiento.cambio_tipo, categoriacuenta.nombre as categoria, gestion.nombre_gestion from asiento,categoriacuenta,moneda,gestion,users,empresa WHERE asiento.id_categoria=categoriacuenta.id AND asiento.id_gestion=gestion.id and asiento.id_moneda=moneda.id AND asiento.id_gestion=(SELECT MAX(id) as id from gestion) and empresa.id=" . $id_empresa[0]->id . " and users.idEmpleado=asiento.id_usuario  ORDER by asiento.id");
        $gestion = DB::select("SELECT *from gestion ORDER by id");
        return view('modulocontable.asientos.lista_asiento', compact('lista_asiento', 'gestion'));
    }

}
