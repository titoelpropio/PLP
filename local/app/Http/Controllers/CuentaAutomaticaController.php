<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cuenta;
use App\CuentaAutomatica;
use App\Http\Requests;
use App\Http\Requests\ConsumoRequest;
use Session;
use Redirect;
use DB;

class CuentaAutomaticaController extends Controller {


    public function __construct(Request $request) {
        $this->middleware('auth');
        $this->middleware('admin');
        $this->middleware('auth', ['only' => 'admin']);
    }
    function index(Request $request) {
         $cuentaautomatica=DB::select("select cuentaautomatica.nombre, cuenta.nombre as cuenta, cuenta.codigo from cuentaautomatica, cuenta where cuentaautomatica.id_cuenta = cuenta.id");
         $cuenta=DB::select("select id, nombre, codigo from cuenta where utilizable = 1");
         $nombre = array("Caja","Bancos","Cuenta por Cobrar","Ingreso Diferido");
         return view('modulocontable.cuentaautomatica.index',  compact('nombre','cuentaautomatica','cuenta'));
    }

    public function create() {
        $galpon = Galpon::lists('nombre', 'id');
        $silos = Silos::lists('nombre', 'id');
        return view('consumo.create', compact('galpon', $galpon, 'silos', $silos));
        $cant = DB::table('silo')->where('id', '1');
        echo $cant->id;
        echo "$consumo";
    }

    public function store($id,$nombre) {
        try {
            $nom = str_replace("_", " ", $nombre);
            CuentaAutomatica::create([
            'nombre'=>$nom,
            'id_cuenta'=>$id,
            ]);
            DB::commit();
            Session::flash('message','GUARDADO CORRECTAMENTE');
            return Redirect::to('/cuentaautomatica');

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

    public function update($id,$nombre) {
        $nom = str_replace("_", " ", $nombre);
        $cuentaaut=DB::select("select id from cuentaautomatica where nombre = '".$nom."'");
        $cuentaautomatica = CuentaAutomatica::find($cuentaaut[0]->id);
        $cuentaautomatica->fill([
        'id_cuenta' => $id
        ]);
        $cuentaautomatica->save();
        Session::flash('message', 'Consumo Actualizado Correctamente');
        return Redirect::to('/cuentaautomatica');
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
