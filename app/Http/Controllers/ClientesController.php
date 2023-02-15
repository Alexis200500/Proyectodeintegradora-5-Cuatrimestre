<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;
use Datatables;
use PDF;
use Illuminate\Support\Facades\DB;
use Excel;
use App\Exports\ClientesExport;

class ClientesController extends Controller
{
    public function consultacli(Request $request){
      //Buscar($request->get('criterio')) Esta es la variable que creamos en el MODELO
        $crit = $request['criterio'];

        $clientes = DB::SELECT("SELECT clientes.id, clientes.nombre, clientes.appaterno, clientes.apmaterno, clientes.email, clientes.telefono,
    clientes.direccion FROM clientes WHERE clientes.id AND (nombre LIKE '%$crit%' OR appaterno LIKE '%$crit%' OR apmaterno LIKE '%$crit%'
OR email LIKE '%$crit%')
    ORDER BY appaterno");
      //  print_r($res);
    return view ("clientes.consultacli",['clientes'=>$clientes, 'crit'=>$crit]);
		}

		public function consultacli2($id){

			$cli = Clientes::find($id);
			if (is_null($cli)) {
				abort(404);
			}
			return view("clientes/consultacli2",['titulo' => 'Detalles de Cliente'])->with(['cli'=>$cli]);
		}

		public function altacli(){
			return view("clientes/nuevo",['titulo' => 'Alta Cliente']);
		}


		 public function nuevoCliente(Request $request)
	    {

	         $Clientes = new Clientes();
	        $Clientes->nombre = request('nombre');
	        $Clientes->appaterno = request('appaterno');
	        $Clientes->apmaterno = request('apmaterno');
	        $Clientes->email = request('email');
	        $Clientes->telefono = request('telefono');
	        $Clientes->direccion = request('direccion');
	        $Clientes->save();
			return redirect()->route('consultacli');


	    }


		public function editarcli(Clientes $id){

			return view("clientes/modificacli",['titulo' => 'Editar Cliente'])->with(['cli'=>$id]);
		}
		public function updatecli(Clientes $id, Request $request){

			$id->update(
				//$request->all(); Etsa guarda todos los datos pero no la podemos controlar
				$request->only('nombre','appaterno','apmaterno', 'email','telefono','direccion')
				);
			return redirect()->route('consultacli2',['id'=>$id->id]);
		}

		public function deletecli(Clientes $id){
			$id->delete();
			return redirect()->route('consultacli');
		}

		public function pdfclientes(Request $req){

      $crit = $req['crit'];

      $clientes = DB::SELECT("SELECT clientes.id, clientes.nombre, clientes.appaterno, clientes.apmaterno, clientes.email, clientes.telefono,
  clientes.direccion FROM clientes WHERE clientes.id AND (nombre LIKE '%$crit%' OR appaterno LIKE '%$crit%' OR apmaterno LIKE '%$crit%'
OR email LIKE '%$crit%')
  ORDER BY appaterno");

    	$pdf = PDF::loadView('clientes/pdfclientes',['clientes'=>$clientes])->setPaper('a4', 'landscape');
        return $pdf->download('Clientes.pdf');
    }

    public function excelclientes(Request $req){
        return Excel::download(new ClientesExport($req->crit), 'Clientes.xlsx');
    }
}
