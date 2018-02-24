<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CentroCosto;
use App\Galpon;
use App\Silos;
use App\Http\Requests;
use App\Http\Requests\ConsumoRequest;
use Session;
use Redirect;
use DB;

class CentroCostoController extends Controller {


    public function __construct(Request $request) {
        $this->middleware('auth');
        $this->middleware('admin');
        $this->middleware('auth', ['only' => 'admin']);
    }
    function index(Request $request) {

        if ($request->centrocosto == ""){
           $centrocosto= DB::select("select c1.*, (select nombre from centrocosto c2 where c2.id = c1.id_padre) as nombre_padre from centrocosto c1 order by c1.codigo");
        }
        else{
           $centrocosto= DB::select("select c1.*, (select nombre from centrocosto c2 where c2.id = c1.id_padre) as nombre_padre from centrocosto c1 where c1.nombre like '".$request->centrocosto."%' order by c1.codigo");
        }
        
       
        return view('modulocontable.centrocosto.lista_centro_costo',  compact('centrocosto'));

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
           
             CentroCosto::create([
                 'codigo'=>$request->codigo,
                 'id_padre'=>$request->idpadre,
                 'hijo'=>$request->valorhijo,
                 'nombre'=>$request->nombre,
                 'utilizable'=>$request->utilizable,
                 'estado'=>$request->estado
                 ]);
             if($request->estadohijo == "0"){
                $centrocosto = CentroCosto::find($request->idpadre);
                $centrocosto->fill([
                    'hijo'=>"1",
                    'utilizable'=>"0"
                ]);
                $centrocosto->save();
             }
              DB::commit();
                 Session::flash('message','GUARDADO CORRECTAMENTE');
        return Redirect::to('/centro_costo');
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
     public function  centro_costo(){
        $Elementos = array('Hijo' => array(),'Padre' => array());
        $centrocosto= DB::select("select*from centrocosto order by id_padre,codigo");
        foreach ($centrocosto as $items) 
        {
            $Elementos['Hijo'][$items->id] = $items;
            $Elementos['Padre'][$items->id_padre][] = $items->id;
        }
        return view('modulocontable.centrocosto.index', compact('Elementos'));
    }

    public function  buscarcentrocosto($id){
        $centrocosto= DB::select("select*from centrocosto where id='".$id."'");
        $codigo= DB::select("select codigo from centrocosto where id_padre='".$id."' order by codigo desc limit 1");
        return response()->json(['centrocosto'=>$centrocosto,'codigo'=>$codigo]);
    }
  
    public function  buscarultimocentrocosto(){
        $centrocosto= DB::select("select*from centrocosto where id_padre='0' order by codigo desc limit 1");
        return response()->json($centrocosto);
    }
}
