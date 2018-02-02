<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\Gestion;
use App\Cuenta;
use App\Asiento;
use App\Detalle;
use Illuminate\Database\Events\TransactionBeginning;
use Illuminate\Database\MySqlConnection;

class AsientoController extends Controller {

    public function __construct() {
        $this->middleware('auth');
        $this->middleware('admin');
        $this->middleware('auth', ['only' => 'admin']);
    }

    function index($id, Request $request) {

        $usuario = DB::select('select *from users where idEmpleado=' . $request->user()->idEmpleado);
        $id_empresa = DB::select("select id from  empresa" );
        $cuenta = DB::select("SELECT * FROM cuenta WHERE cuenta.utilizable=1 and cuenta.id_empresa=" . $id_empresa[0]->id);

        $gestion = DB::select('SELECT id,nombre_gestion FROM gestion where estado=1');
        $moneda = DB::select('SELECT MAX(tipo_cambio) as cambio,id FROM moneda');
        $tipo_asiento = DB::select('select nombre,id from categoriacuenta where id=' . $id);

//    foreach ($gestion as $key => $value){
//        $id=$value->id;
//        $nombre=$value->nombre_gestion;
//        
//    }
        return view('modulocontable.asientos.index', compact($tipo_asiento, 'tipo_asiento', $gestion, 'gestion'
                        , $moneda, 'moneda', $cuenta, 'cuenta', 'usuario', $usuario));
    }

    function store(Request $request) {
        $nmro_asiento = DB::select('select max(nro_asiento) as nro_asiento from asiento');
        $total = $nmro_asiento[0]->nro_asiento + 1;

        if ($request->ajax()) {
            try {
                DB::beginTransaction();

//           $id=Asiento::create($request->all());
                $id = Asiento::create([
                            'glosa' => $request->glosa,
                            'nro_asiento' => $total,
                            'fecha' => $request->fecha,
                            'cambio_tipo' => $request->cambio_tipo,
                            'estado' => $request->estado,
                            'id_categoria' => $request->id_categoria,
                            'id_gestion' => $request->id_gestion,
                            'id_moneda' => $request->id_moneda,
                            'id_usuario' => $request->id_usuario,
                ]);
                DB::commit();
                return response()->json($id);
            } catch (\Exception $e) {
                DB::roolback();
                return response()->json($e);
            }
        }
    }

    function lista_asiento(Request $request) {
        $id_empresa = DB::select("SELECT id,nombre FROM empresa");
        $lista_asiento = DB::select("SELECT asiento.id, asiento.nro_asiento, asiento.glosa, asiento.fecha, asiento.cambio_tipo, categoriacuenta.nombre as categoria, gestion.nombre_gestion from asiento,categoriacuenta,moneda,gestion,users,empresa WHERE asiento.id_categoria=categoriacuenta.id AND asiento.id_gestion=gestion.id and asiento.id_moneda=moneda.id AND asiento.id_gestion=(SELECT MAX(id) as id from gestion) and empresa.id=" . $id_empresa[0]->id . " and users.idEmpleado=asiento.id_usuario  ORDER by asiento.id");
        $gestion = DB::select("SELECT *from gestion ORDER by id");
        return view('modulocontable.asientos.lista_asiento', compact('lista_asiento', 'gestion'));
    }

}
