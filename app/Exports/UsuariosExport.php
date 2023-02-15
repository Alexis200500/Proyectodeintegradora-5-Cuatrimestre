<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use\App\Usuarios;

class UsuariosExport implements FromQuery, WithHeadings
{
use Exportable;

   protected $crit;

   function __construct($crit){
       $this->crit = $crit;
   }


   public function query()
   {
       return Usuarios::query()->select
       ('idusuario','nombre','usuario','email','password')
       ->where('nombre', 'like', "%$this->crit%")
       ->orWhere('usuario', 'like', "%$this->crit%")
       ->orWhere('email', 'like', "%$this->crit%")
       ->orWhere('password', 'like', "%$this->crit%");
   }
   public function headings(): array{
       return [
           'id',
           'nombre',
           'usuario',
           'email',
           'password'
       ];
   }
}
