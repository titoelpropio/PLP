<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MonedaRequest;
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
    
    public function store(MonedaRequest $request){
        try {
            DB::beginTransaction();    
            $moneda=DB::select("SELECT *from moneda WHERE moneda.deleted_at IS NULL");
            if(count($moneda) != 0)
            {
              $this->eliminar($moneda[0]->id);
            }      
            Moneda::create([
            'tipo_cambio' => $request['tipo_cambio'],
            ]);
            
            DB::commit(); 
            return redirect('moneda')->with('message','GUARDADO CORRECTAMENTE');  
        }catch (Exception $e) {
            DB::rollback();
            return redirect('moneda')->with("message-error","ERROR INTENTE NUEVAMENTE");      
        }
    }

    public function edit($id){
    		
   $moneda = Moneda::find($id);
   return view('modulocontable.moneda.edit',['moneda'=>$moneda]);
    }

public function update($id, MonedaRequest $request){
        $moneda =Moneda::find($id);
        $moneda->fill($request->all());
        $moneda->save();
        Session::flash('message','moneda Actualizado Correctamente');
        return Redirect::to('/moneda');

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
