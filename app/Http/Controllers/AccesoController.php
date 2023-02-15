<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;
use Session;
use Mail;
use Storage;
use DB;

class AccesoController extends Controller
{
    public function login()
    {
      return view('login');
    }
    public function valida(Request $request)
  {
      $email = $request->email;
      $password = $request->password;

      $this->validate($request,[
          'email'=>'required|email',
          'password'=>'required'
      ]);

      $consulta = usuarios :: where('email','=',$email)
          ->where('password','=',$password)
          ->get();

      if (count($consulta)==0)
      {
          Session::flash('error', 'El usuario no existe o la contraseña
                                  no es correcta');
          return redirect()->route('login');

      }
      else
      {
          Session::put('sesionname',$consulta[0]->nombre);
          Session::put('sesionidu',$consulta[0]->idu);
        //   Session::put('sesiontipo',$consulta[0]->tipo);
        //   Session::put('sesionarchivo',$consulta[0]->archivo);

          return redirect()->route('principal');
      }

  }

  public function cerrarsesion()
{
  Session::forget('sesionname');
  Session::forget('sesionidu');
//   Session::forget('sesiontipo');
  Session::flush();
  Session::flash('error', 'Session cerrada correctamente');
  return redirect()->route('login');
}

public function principal(){
  return view('layouts.app');
}




// RESTAURAR CONTRASEÑAS
public function recuperar()
{
    return view('restaurar_email');
}

            //recuperar contraseñas
            public function restaurar(Request $req){
                $email = $req['email'];
                $res = DB::SELECT("SELECT * FROM usuarios  WHERE email= '$email' ");
                $asunto = "Tu contraseña se ha modificado";

                if($res !=null){
                  $letras = "abcdefghijklmnopqrstwxyz0123456789";
                  $nuevopw = substr(str_shuffle($letras), 0,8);

                  DB::SELECT("UPDATE usuarios SET password ='$nuevopw' where email = '$email' ");

                  $datos = array('destinatario'=>$email, 'nuevopw'=>$nuevopw);

                  Mail::send('recupero',$datos,function($msj)
                use($asunto,$email, $nuevopw){
                  $msj->from("al221811729@gmail.com","Alexis Morales");
                  $msj->to($email);
                  $msj->subject($asunto);

                });

                Session::flash('cambio','Tu contraseña ha sido modificada, Revisa tu correo');
                return redirect()->route('login');

                }else{
                    Session::flash('no','El correo no existe, verifiquelo de nuevo');
                    return redirect()->route('recuperar');
                }

              }


}
