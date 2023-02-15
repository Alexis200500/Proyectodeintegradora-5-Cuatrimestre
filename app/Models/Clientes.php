<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;
    protected $table= 'clientes';//Para apuntar a una tabla de la base de datos, linea obligatoria
    protected $primaryKey='id';
    protected $fillable = ['nombre','appaterno','apmaterno','email','telefono','direccion'];

    public function scopeBuscar($query, $criterio)
    {
    	if (trim($criterio) != "") {

    		//$query->where('dia',$buscar);
    		//$query->where(\DB::raw("CONCAT(dia,'',hora_apertura,'',hora_cierre)"),$criterio);

    		$query->where(\DB::raw("CONCAT( nombre, '', apmaterno,'', apmaterno,'', email, '', direccion)"),"LIKE","%$criterio%" );
    	}
    }

}
