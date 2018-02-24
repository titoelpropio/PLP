<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Moneda;
use DB;
use App\Http\Requests;
use Session;
use Redirect;

class MonedaController extends Controller
{

	function index(){
        $moneda=Moneda::paginate(9);
        return view('modulocontable.moneda.index',compact('moneda'));
	}
  
  
	public function create(){
      return view('modulocontable.moneda.create');	
    }
    
    public function store(Request $request){
        try {
            DB::beginTransaction();     
            Moneda::create([
            'nombre' => $request['nombre'],
            'abreviatura' => $request['abreviatura']
            ]);
            
            DB::commit(); 
            return redirect('tipomoneda')->with('message','GUARDADO CORRECTAMENTE');  
        }catch (Exception $e) {
            DB::rollback();
            return redirect('tipomoneda')->with("message-error","ERROR INTENTE NUEVAMENTE");      
        }
    }

    public function edit($id){
    		
   $moneda = Moneda::find($id);
   return view('modulocontable.moneda.edit',['moneda'=>$moneda]);
    }

    public function update($id, Request $request){
        try {
            DB::beginTransaction();     
            $moneda =Moneda::find($id);
            $moneda->fill($request->all());
            $moneda->save();
            DB::commit(); 
            return redirect('tipomoneda')->with('message','ACTUALIZADO CORRECTAMENTE');  
        }catch (Exception $e) {
            DB::rollback();
            return redirect('tipomoneda')->with("message-error","ERROR INTENTE NUEVAMENTE");      
        }
    }

    public function eliminar($id){
        $moneda=Moneda::find($id);
        $moneda->delete();;
    }
    
    public function destroy($id){
        try {
            $moneda=Moneda::find($id);
            $moneda->delete();
            
            DB::commit(); 
            return redirect('moneda')->with('message','ELIMINADO CORRECTAMENTE'); 
        }
        catch (Exception $e) {
            DB::rollback();
            return redirect('moneda')->with("message-error","ERROR INTENTE NUEVAMENTE");      
        }
    }
    
}
