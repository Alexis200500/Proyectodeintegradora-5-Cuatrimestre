<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;
use PDF;
use Illuminate\Support\Facades\DB;
use Excel;
use App\Exports\UsuariosExport;

use Datatables;


class UsuariosController extends Controller
{
    public function consultausu(Request $request)
	{
				$crit = $request['criterio'];

		$usuarios = DB::SELECT("SELECT usuarios.idusuario, usuarios.nombre,usuarios.usuario,
		usuarios.email, usuarios.password FROM usuarios WHERE usuarios.idusuario AND (nombre LIKE '%$crit%' OR usuario LIKE '%$crit%' OR email LIKE '%$crit%')
		ORDER BY usuario");
		  //  print_r($res);
		return view ("usuarios.consultausu",['usuarios'=>$usuarios, 'crit'=>$crit]);

	}

		public function consultausu2($idusuario){

			$usu = Usuarios::find($idusuario);
			if (is_null($usu)) {
				abort(404);
			}
			return view("usuarios/consultausu2",['titulo' => 'Detalles de Usuario'])->with(['usu'=>$usu]);
		}

		public function altausu(){
			return view("usuarios/nuevo",['titulo' => 'Alta Usuario']);
		}


		 public function nuevousuario(Request $request)
	    {

	         $usuarios = new Usuarios();
	        $usuarios->nombre = request('nombre');
	        $usuarios->usuario = request('usuario');
	        $usuarios->email = request('email');
	        $usuarios->password = request('password');
	        $usuarios->save();
			return redirect()->route('consultausu');


	    }


		public function editarusu(Usuarios $idusuario){

			return view("usuarios/modificausu",['titulo' => 'Editar Usuario'])->with(['usu'=>$idusuario]);
		}
		public function updateusu(Usuarios $idusuario, Request $request){

			$idusuario->update(
				//$request->all(); Etsa guarda todos los datos pero no la podemos controlar
				$request->only('nombre','usuario', 'email','password')
				);
			return redirect()->route('consultausu2',['idusuario'=>$idusuario->idusuario]);
		}

		public function deleteusu(Usuarios $idusuario){
			$idusuario->delete();
			return redirect()->route('consultausu');
		}

		public function pdfusuarios(Request $req){

				$crit = $req['crit'];

		$usuarios = DB::SELECT("SELECT usuarios.idusuario, usuarios.nombre,usuarios.usuario,
		usuarios.email, usuarios.password FROM usuarios WHERE usuarios.idusuario AND (nombre LIKE '%$crit%' OR usuario LIKE '%$crit%' OR email LIKE '%$crit%')
		ORDER BY usuario");
		  //  print_r($res);

    	$pdf = PDF::loadView('usuarios/pdfusuarios',['usuarios'=>$usuarios])->setPaper('a4', 'landscape');
        return $pdf->download('Usuarios.pdf');
    }

    	public function excelusuarios(Request $req){
        return Excel::download(new UsuariosExport($req->crit),'Usuarios.xlsx');
    }
}
