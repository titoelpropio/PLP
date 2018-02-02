<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gestion;
use Session;
use Redirect;
use App\Http\Requests;
use DB;

class GestionController extends Controller {

    public function __construct(Request $request) {
        $this->middleware('auth');
        $this->middleware('admin');
        $this->middleware('auth', ['only' => 'admin']);
    }

    function index() {
        $gestion = DB::table('gestion')
        ->select('gestion.*')
        ->orderby('id','desc')
        ->paginate(20);
        return view('modulocontable.gestion.index', compact('gestion'));
    }

    public function create() {
        return view('modulocontable.gestion.create');
    }

    public function store(Request $request) {

        $resultado=DB::select('select count(*) as count from gestion where estado=1');
        if ($resultado[0]->count==0) {
            Gestion::create([
            'fecha_inicio' => $request['fecha_inicio'],
            'fecha_fin' => $request['fecha_fin'],
            'nombre_gestion' => $request['nombre_gestion'],
            'estado' => "1"
            ]);
            Session::flash('message', 'Gestion Creado Correctamente');
            return Redirect::to('/gestion');
        }
        else{
             Session::flash('message-error', 'YA EXISTE UNA GESTIÓN ACTIVA POR FAVOR CIERRE PRIMERO LA GESTIÓN ACTUAL');
        return Redirect::to('/gestion');
        }
    }

    public function edit($id) {

        $gestion = Gestion::find($id);
        return view('modulocontable.gestion.edit', ['gestion' => $gestion]);
    }

    public function update(Request $request,$id) {
        
        $gestion = Gestion::find($id);
        $gestion->fill($request->all());
        $gestion->save();
        Session::flash('message', 'Gestión Actualizada Correctamente');
        return Redirect::to('/gestion');
    }

    public function destroy($id, Request $request) {

        $gestion = Gestion::find($id);
        $gestion->delete();
        Session::flash('message', 'gestion Eliminado Correctamente');
        return Redirect::to('/gestion');
    }

    public function cerrar_gestion(Request $request) {

        $gestion = Gestion::find($request['id_cerrar_gestion']);
        $gestion->fill([
            'estado' => 0
        ]);
        $gestion->save();
        Session::flash('message', 'Gestion Cerrada Correctamente');
        return Redirect::to('/gestion');
        
    }

}
