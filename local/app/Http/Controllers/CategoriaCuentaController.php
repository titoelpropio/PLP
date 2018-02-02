<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CategoriaRequest;
use App\CategoriaCuenta;
use DB;
use Session;
use Redirect;

class CategoriaCuentaController extends Controller
{

    public function __construct(Request $request) {
        $this->middleware('auth');
        $this->middleware('admin');
        $this->middleware('auth', ['only' => 'admin']);
    }
function index(){
     $categoria=CategoriaCuenta::paginate(10);
     return view('modulocontable.categoria.index',compact('categoria'));
	}
  
	public function create(){
    return view('modulocontable.categoria.create');		
  }

  public function store(CategoriaRequest $request){
        CategoriaCuenta::create([
          'nombre' => $request['nombre']]);
        return redirect('/categoriacuenta')->with('message','Guardado Correctamente');  
  }

  public function update(CategoriaRequest $request,$id){
    $categoria= CategoriaCuenta::find($id);
    $categoria->fill($request->all());
    $categoria->save();
    return redirect('/categoriacuenta')->with('message','Modificado Correctamente');  
  }

  public function edit($id){
      $categoria=CategoriaCuenta::find($id);
      return view('modulocontable.categoria.edit',['categoria'=>$categoria]);
  }
  
  public function listacategoria(Request $request ){
      if ($request->ajax()){
      $categoria=DB::select('select * from categoriacuenta');
      return response()->json($categoria);
      
      
      }
  }

  public function destroy($id){
      $Categoria=CategoriaCuenta::find($id);
      $Categoria->delete();
      Session::flash('message','Eliminado Correctamente');
     return Redirect::to('/categoriacuenta');
  }
}
