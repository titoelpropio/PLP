<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\Ufv;
use App\Http\Requests\EmpresaRequest;
use Session;
use Redirect;
use App\Helpers;
use Illuminate\Database\Events\TransactionBeginning;
use Illuminate\Database\MySqlConnection;

   
class UfvController extends Controller
{
     public function __construct(Request $request) {
        $this->middleware('auth');
        $this->middleware('admin');
        $this->middleware('auth', ['only' => 'admin']);
    
}
	function index(){
        $ufv=Ufv::paginate(9);
       return view('modulocontable.ufv.index',compact('ufv'));
	}
  
  
	public function create(){
      return view('empresa.create');	
    }
    
    public function store(Request $request){
    	
        Ufv::create([
            'fecha' => $request['fecha'],
            'valor' => $request['valor']
        ]);
        Session::flash('message','UFV Creado Correctamente');
        return Redirect::to('/ufv');
    }

    public function edit($id){
    		
    $ufv = Ufv::find($id);
    return view('modulocontable.ufv.edit',['ufv'=>$ufv]);
    }

    public function update($id, Request $request){
        $ufv =Ufv::find($id);
        $ufv->fill([
        'fecha'=>$request['fecha'],
        'valor'=>$request['valor']
        ]);
        $ufv->save();
        Session::flash('message','U.F.V. Actualizado Correctamente');
        return Redirect::to('/ufv');

    }
    
    public function destroy($id, Request $request){

        $ufv=Ufv::find($id);
        $ufv->delete();
        Session::flash('message','U.F.V. Eliminado Correctamente');
       return Redirect::to('/ufv');
    }
    

}
