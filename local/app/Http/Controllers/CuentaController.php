<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cuenta;
use App\Galpon;
use App\Silos;
use App\Http\Requests;
use App\Http\Requests\ConsumoRequest;
use Session;
use Redirect;
use DB;

class CuentaController extends Controller {


    public function __construct(Request $request) {
        $this->middleware('auth');
        $this->middleware('admin');
        $this->middleware('auth', ['only' => 'admin']);
    }
    function index(Request $request) {

        if ($request->cuenta == ""){
           $cuenta= DB::select("select c1.*, (select nombre from cuenta c2 where c2.id = c1.id_padre) as nombre_padre from cuenta c1");
        }
        else{
           $cuenta= DB::select("select c1.*, (select nombre from cuenta c2 where c2.id = c1.id_padre) as nombre_padre from cuenta c1 where c1.nombre like '".$request->cuenta."%'");
        }
        
       
        return view('modulocontable.cuenta.lista_cuentas',  compact('cuenta'));

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
        try {

           DB::beginTransaction();
           
             Cuenta::create([
                 'codigo'=>$request->codigo,
                 'id_padre'=>$request->idpadre,
                 'hijo'=>$request->valorhijo,
                 'nombre'=>$request->nombre,
                 'utilizable'=>$request->utilizable,
                 'estado'=>$request->estado
                 ]);
             if($request->estadohijo == "0"){
                $cuenta = Cuenta::find($request->idpadre);
                $cuenta->fill([
                    'hijo'=>"1",
                    'utilizable'=>"0"
                ]);
                $cuenta->save();
             }
              DB::commit();
                 Session::flash('message','GUARDADO CORRECTAMENTE');
        return Redirect::to('/plan_cuenta');
        } catch (Exception $exc) {
             DB::rollback();
            echo $exc->getTraceAsString();
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
     public function  plan_cuenta(){
        $Elementos = array('Hijo' => array(),'Padre' => array());
        $cuenta= DB::select("select*from cuenta order by id_padre,codigo");
        foreach ($cuenta as $items) 
        {
            $Elementos['Hijo'][$items->id] = $items;
            $Elementos['Padre'][$items->id_padre][] = $items->id;
        }
        return view('modulocontable.cuenta.index', compact('Elementos')); 
    }

    public function  buscarcuenta($id){
        $cuenta= DB::select("select*from cuenta where id='".$id."'");
        $codigo= DB::select("select codigo from cuenta where id_padre='".$id."' order by codigo desc limit 1");
        return response()->json(['cuenta'=>$cuenta,'codigo'=>$codigo]);
    }
  
    public function  buscarultimacuenta(){
        $cuenta= DB::select("select*from cuenta where id_padre='0' order by codigo desc limit 1");
        return response()->json($cuenta);
    }
}
