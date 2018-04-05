<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cuenta;
use App\CuentaImpuesto;
use App\Http\Requests;
use App\Http\Requests\ConsumoRequest;
use Session;
use Redirect;
use DB;

class CuentaImpuestoController extends Controller {


    public function __construct(Request $request) {
        $this->middleware('auth');
        $this->middleware('admin');
        $this->middleware('auth', ['only' => 'admin']);
    }
    function index(Request $request) {
         $cuentaimpuesto=DB::select("select cuentaimpuesto.id, cuentaimpuesto.nombre, cuentaimpuesto.porcentaje, cuentaimpuesto.id_cuenta, cuenta.nombre as cuenta, cuenta.codigo from cuentaimpuesto, cuenta where cuentaimpuesto.id_cuenta = cuenta.id");
         $cuenta=DB::select("select id, nombre, codigo from cuenta where utilizable = 1");
         $nombre = array("Credito fiscal","Debito fiscal","IC","IT","IT POR PAGAR","IMT", "IUE");
         return view('modulocontable.cuentaimpuesto.index',  compact('nombre','cuentaimpuesto','cuenta'));
    }

    public function create() {
        $galpon = Galpon::lists('nombre', 'id');
        $silos = Silos::lists('nombre', 'id');
        return view('consumo.create', compact('galpon', $galpon, 'silos', $silos));
        $cant = DB::table('silo')->where('id', '1');
        echo $cant->id;
        echo "$consumo";
    }

    public function store(Request $request) {
        $respuesta=0;
        try {
            CuentaImpuesto::create([
            'nombre'=>$request['nombre'],
            'porcentaje'=>$request['porcentaje'],
            'id_cuenta'=>$request['id_cuenta']
            ]);
            DB::commit();;
            $respuesta=1;

        } catch (Exception $exc) {
            DB::rollback();
            echo $exc->getTraceAsString();
        }
        return response()->json(['mensaje'=>$respuesta]);
    }

    public function edit($id) {
        $consumo = Consumo::find($id);
        $galpon = Galpon::lists('nombre', 'id');
        $silos = Silos::lists('nombre', 'id');
        return view('consumo.edit', compact('galpon', $galpon, 'silos', $silos), ['consumo' => $consumo]);
    }

    public function update(Request $request) {
        $respuesta=0;
        try {
            $cuentagrupo = CuentaImpuesto::find($request['id']);
            $cuentagrupo->fill([
            'porcentaje'=>$request['porcentaje'],
            'id_cuenta' => $request['id_cuenta']
            ]);
            $cuentagrupo->save();
            $respuesta=1;

        } catch (Exception $exc) {
            DB::rollback();
            echo $exc->getTraceAsString();
        }
        return response()->json(['mensaje'=>$respuesta]);
    }

    public function destroy($id) {
        $consumo = Consumo::find($id);
        $consumo->delete();
        Consumo::destroy($id);
        Session::flash('message', 'Consumo Eliminado Correctamente');
        return Redirect::to('/consumo');
    }
     public function  plan_cuenta(){
       $cuenta= DB::select("select*from cuenta");
       $id_padre=DB::select("select nombre,id from  cuenta");

        return view('modulocontable.cuenta.index', compact('cuenta','id_padre',$id_padre));
       
    }
}
