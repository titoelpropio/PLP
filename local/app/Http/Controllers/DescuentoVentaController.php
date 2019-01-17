<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DescuentoVenta;
use App\Proyecto;
use App\Http\Requests;
use App\Http\Requests\UserUpdateRequest;
use Session;
use Redirect;
use DB;
use Hash;

class DescuentoVentaController extends Controller {

    public function __construct() {
//        $this->middleware('auth');
//        $this->middleware('admin');
//        $this->middleware('auth', ['only' => 'admin']);
    }

    function index() {
        $descuentoVenta =  DescuentoVenta::with('proyectos')->get();
        // dd(json_encode($descuentoVenta));
        return view('descuento_venta.index', compact('descuentoVenta'));
    }

    public function create() {
        $proyecto = Proyecto::lists('nombre','id');
        return view('descuento_venta.create', compact('proyecto'));
    }

    public function store(Request $request) {
        try {
          DB::beginTransaction();  
          $idProyecto = $request['idProyecto'];
           $descuento=DB::select("SELECT *from descuentoventa WHERE descuentoventa.idProyecto=".$idProyecto." AND descuentoventa.deleted_at IS NULL");
           if(count($descuento) != 0)
            {
              $this->destroy($descuento[0]->id);
            }
            DescuentoVenta::create([
                'porcentaje'=>$request['porcentaje'],
                'idProyecto'=>$idProyecto,
            ]);
            DB::commit(); 
            return redirect('DescuentoVenta')->with('message','GUARDADO CORRECTAMENTE');  
        }catch (Exception $e) {
            DB::rollback();
            return redirect('DescuentoVenta/create')->with("message-error","ERROR INTENTE NUEVAMENTE");      
        } 
    }

    public function destroy($id) {
        $descuento = DescuentoVenta::find($id);
        $descuento->delete();
    }

}
