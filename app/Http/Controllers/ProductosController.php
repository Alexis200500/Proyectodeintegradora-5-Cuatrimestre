<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use PDF;
use Illuminate\Support\Facades\DB;
use Excel;
use App\Exports\ProductosExport;
use Datatables;


class ProductosController extends Controller
{
     public function consultapro(Request $request)
		{
			$crit = $request['criterio'];

		$productos = DB::SELECT("SELECT productos.id, productos.producto,productos.serie,
		productos.caracteristicas, productos.falla, productos.cantidad, productos.precio
		FROM productos WHERE productos.id AND (producto LIKE '%$crit%' OR serie LIKE '%$crit%' OR caracteristicas LIKE '%$crit%')
		ORDER BY producto");
		  //  print_r($res);
		return view ("productos.consultapro",['productos'=>$productos, 'crit'=>$crit]);
		}

		public function consultapro2($id){

			$pro = Productos::find($id);
			if (is_null($pro)) {
				abort(404);
			}
			return view("productos/consultapro2",['titulo' => 'Detalles de Producto'])->with(['pro'=>$pro]);
		}

		public function altapro(){
			return view("productos/nuevo",['titulo' => 'Alta Producto']);
		}


		 public function nuevoProducto(Request $request)
	    {

	         $Productos = new Productos();
	        $Productos->producto = request('producto');
	        $Productos->serie = request('serie');
	        $Productos->caracteristicas = request('caracteristicas');
	        $Productos->falla = request('falla');
	        $Productos->cantidad = request('cantidad');
	        $Productos->precio = request('precio');
	        $Productos->save();
			return redirect()->route('consultapro');


	    }


		public function editarpro(Productos $id){

			return view("productos/modificapro",['titulo' => 'Editar Producto'])->with(['pro'=>$id]);
		}
		public function updatepro(Productos $id, Request $request){

			$id->update(
				//$request->all(); Etsa guarda todos los datos pero no la podemos controlar
				$request->only('producto','serie','caracteristicas','falla','cantidad','precio')
				);
			return redirect()->route('consultapro2',['id'=>$id->id]);
		}

		public function deletepro(Productos $id){
			$id->delete();
			return redirect()->route('consultapro');
		}

		public function pdfproductos(Request $req){

    	$crit = $req['crit'];

		$productos = DB::SELECT("SELECT productos.id, productos.producto,productos.serie,
		productos.caracteristicas, productos.falla, productos.cantidad, productos.precio
		FROM productos WHERE productos.id AND (producto LIKE '%$crit%' OR serie LIKE '%$crit%' OR caracteristicas LIKE '%$crit%')
		ORDER BY producto");

    	$pdf = PDF::loadView('productos/pdfproductos',['productos'=>$productos])->setPaper('a4', 'landscape');
        return $pdf->download('Productos.pdf');
    }

    public function excelproductos(Request $req){
        return Excel::download(new ProductosExport ($req->crit), 'Productos.xlsx');
    }
}
