<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $table = 'usuarios'; //Para apuntar a una tabla de la base de datos, linea obligatoria
    protected $primaryKey = 'idusuario';
    protected $fillable = ['nombre', 'usuario', 'email', 'password']; //Campos que se deben de llenar 
    //protected $guarded = []; //Campos que pueden ir vacios y que laravel los llenara todos

    public function scopeBuscar($query, $criterio)
    {
        if (trim($criterio) != "") {

            //$query->where('dia',$buscar);
            //$query->where(\DB::raw("CONCAT(dia,'',hora_apertura,'',hora_cierre)"),$criterio);

            $query->where(\DB::raw("CONCAT( usuario, '', email)"), "LIKE", "%$criterio%");
        }
    }
}
