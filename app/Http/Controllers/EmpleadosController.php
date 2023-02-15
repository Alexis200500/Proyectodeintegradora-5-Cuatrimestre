<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleados;
use PDF;
use Illuminate\Support\Facades\DB;
use Excel;
use App\Exports\EmpleadosExport;
use Datatables;

class EmpleadosController extends Controller
{
     public function consultaemp(Request $request){


        $crit = $request['criterio'];

        $empleados = DB::SELECT("SELECT empleados.idemp, empleados.nombre, empleados.appat,
								empleados.apmat, empleados.telefono,
    empleados.direccion FROM empleados WHERE empleados.idemp AND
	(nombre LIKE '%$crit%' OR appat LIKE '%$crit%' OR apmat LIKE '%$crit%')
    ORDER BY appat");
      //  print_r($res);
    return view ("empleados.consultaemp",['empleados'=>$empleados, 'crit'=>$crit]);

		}

		public function consultaemp2($idemp){

			$emp = Empleados::find($idemp);
			if (is_null($emp)) {
				abort(404);
			}
			return view("empleados/consultaemp2",['titulo' => 'Detalles de Empleado'])->with(['emp'=>$emp]);
		}

		public function altaemp(){
			return view("empleados/nuevo",['titulo' => 'Alta Empleado']);
		}


		 public function nuevoEmpleado(Request $request)
	    {

	         $empleados = new empleados();
	        $empleados->nombre = request('nombre');
	        $empleados->appat = request('appat');
	        $empleados->apmat = request('apmat');
	        $empleados->telefono = request('telefono');
	        $empleados->direccion = request('direccion');
	        $empleados->save();
			return redirect()->route('consultaemp');


	    }


		public function editaremp(empleados $idemp){

			return view("empleados/modificaemp",['titulo' => 'Editar Empleado'])->with(['emp'=>$idemp]);
		}
		public function updateemp(Empleados $idemp, Request $request){

			$idemp->update(
				//$request->all(); Etsa guarda todos los datos pero no la podemos controlar
				$request->only('nombre','appat','apmat','telefono','direccion')
				);
			return redirect()->route('consultaemp2',['idemp'=>$idemp->idemp]);
		}

		public function deleteemp(Empleados $idemp){
			$idemp->delete();
			return redirect()->route('consultaemp');
		}

		public function pdfempleados(Request $req){

     $crit = $req['crit'];

        $empleados = DB::SELECT("SELECT empleados.idemp, empleados.nombre, empleados.appat, 
								empleados.apmat, empleados.telefono,
    empleados.direccion FROM empleados WHERE empleados.idemp AND
	(nombre LIKE '%$crit%' OR appat LIKE '%$crit%' OR apmat LIKE '%$crit%')
    ORDER BY appat");


    	$pdf = PDF::loadView('empleados/pdfempleados',['empleados'=>$empleados])->setPaper('a4', 'landscape');
        return $pdf->download('Empleados.pdf');
    }

    public function excelempleados(Request $req){
        return Excel::download(new EmpleadosExport($req->crit), 'Empleados.xlsx');
    }
}
