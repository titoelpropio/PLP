<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Proyecto;
use App\Porcerntajes;
use App\Http\Requests\CategoriaRequest;
use App\PorcentajeDevolucionReserva;
use DB;
use Session;
use Redirect;

class PorcentajeDevolucionReservaController extends Controller
{
function index(){
    $porcentaje=PorcentajeDevolucionReserva::with('proyectos')->get();
    // dd(json_encode($porcentaje));
    return view('porcentaje_devolucion_reserva.index',compact('porcentaje'));
  }
  
  public function create(){
  $proyectos=Proyecto::lists('nombre','id');
    return view('porcentaje_devolucion_reserva.create',compact('proyectos')); 
  }

  public function store(Request $request){
  try {
      DB::beginTransaction();  
      $idProyecto = $request['idProyecto'] ;
       $porcentaje=DB::select("SELECT *from porcentajedevolucionreserva WHERE porcentajedevolucionreserva.deleted_at IS NULL and porcentajedevolucionreserva.idProyecto=".$idProyecto);
       if(count($porcentaje) != 0)
        {
          $this->destroy($porcentaje[0]->id);
        }

        PorcentajeDevolucionReserva::create([
          'porcentaje' => $request['porcentaje'],
          'idProyecto' => $idProyecto,
        ]);
              
        DB::commit();                                               
        return redirect('PorcentajeDevolucionReserva')->with('message','GUARDADO CORRECTAMENTE');  
    }catch (Exception $e) {
        DB::rollback();
        return redirect('PorcentajeDevolucionReserva')->with("message-error","ERROR INTENTE NUEVAMENTE");      
    }         
  }

  public function destroy($id){
      $porcentaje=PorcentajeDevolucionReserva::find($id);
      $porcentaje->delete();
  }

  public function update(Request $request,$id){
  try {
      DB::beginTransaction();    
        $categoria = Categoria::find($id);
        $categoria->fill($request->all());
        $categoria->save();

        if ($request['precio'] != $request['precio_aux']) {
          PrecioCategoria::create([ 'precio' => $request['precio'], 'idCategoria' => $id ]);           
        }
       
        DB::commit();  
        return redirect('Categoria')->with('message','MODIFICADO CORRECTAMENTE');                                                      
    }catch (Exception $e) {
        DB::rollback();
        return redirect('Categoria/'.$id.'/edit')->with("message-error","ERROR INTENTE NUEVAMENTE");      
    } 


  }

  public function edit($id){
    $categoria=Categoria::find($id);    
    return view('categoria.edit',['categoria'=>$categoria]);
  }


  public function listacategoria1(Request $request ){
      if ($request->ajax()){
      $categoria=DB::select('select *from categoria');
      return response()->json($categoria);
      
      
      }
  }

}
