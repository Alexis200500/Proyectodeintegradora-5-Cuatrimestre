<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ventas;
use PDF;
use Illuminate\Support\Facades\DB;
use Excel;
use App\Exports\VentasExport;
use Datatables;

class VentasController extends Controller
{
     public function consultaven(Request $request){
				//Buscar($request->get('criterio')) Esta es la variable que creamos en el MODELO
					$crit = $request['criterio'];

		$ventas = DB::SELECT("SELECT ventas.id, ventas.venta,ventas.cantidad,
		ventas.precio, ventas.caracteristicas, ventas.descripcion, ventas.cliente
		FROM ventas WHERE ventas.id AND (venta LIKE '%$crit%' OR caracteristicas LIKE '%$crit%' OR cliente LIKE '%$crit%')
		ORDER BY cliente");
		  //  print_r($res);
		return view ("ventas.consultaven",['ventas'=>$ventas, 'crit'=>$crit]);

		}

		public function consultaven2($id){

			$ven = Ventas::find($id);
			if (is_null($ven)) {
				abort(404);
			}
			return view("ventas/consultaven2",['titulo' => 'Detalles de Venta'])->with(['ven'=>$ven]);
		}

		public function altaven(){
			return view("ventas/nuevo",['titulo' => 'Alta Venta']);
		}


		 public function nuevoVenta(Request $request)
	    {

	         $Ventas = new Ventas();
	        $Ventas->venta = request('venta');
	        $Ventas->cantidad = request('cantidad');
	        $Ventas->precio = request('precio');
	        $Ventas->caracteristicas = request('caracteristicas');
	        $Ventas->descripcion = request('descripcion');
	        $Ventas->cliente = request('cliente');
	        $Ventas->save();
			return redirect()->route('consultaven');


	    }


		public function editarven(Ventas $id){

			return view("ventas/modificaven",['titulo' => 'Editar Venta'])->with(['ven'=>$id]);
		}
		public function updateemp(Ventas $id, Request $request){

			$id->update(
				//$request->all(); Etsa guarda todos los datos pero no la podemos controlar
				$request->only('venta','cantidad','precio','caracteristicas','descripcion','cliente')
				);
			return redirect()->route('consultaven2',['id'=>$id->id]);
		}

		public function deleteven(Ventas $id){
			$id->delete();
			return redirect()->route('consultaven');
		}

		public function pdfventas(Request $req){
			$crit = $req['crit'];

    	$ventas = DB::SELECT("SELECT ventas.id, ventas.venta,ventas.cantidad, 
		ventas.precio, ventas.caracteristicas, ventas.descripcion, ventas.cliente
		FROM ventas WHERE ventas.id AND (venta LIKE '%$crit%' OR caracteristicas LIKE '%$crit%' OR cliente LIKE '%$crit%')
		ORDER BY cliente");

    	$pdf = PDF::loadView('ventas/pdfventas',['ventas'=>$ventas])->setPaper('a4', 'landscape');
        return $pdf->download('Ventas.pdf');
    }

    public function excelventas(Request $req){
        return Excel::download(new VentasExport ($req->crit), 'Ventas.xlsx');
    }
}
