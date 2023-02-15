<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use\App\Clientes;

class ClientesExport implements FromQuery, WithHeadings
{
  use Exportable;

   protected $crit;

   function __construct($crit){
       $this->crit = $crit;
   }


   public function query()
   {
       return Clientes::query()->select
       ('id','nombre','appaterno','apmaterno','email','telefono','direccion')
       ->where('nombre', 'like', "%$this->crit%")
       ->orWhere('appaterno', 'like', "%$this->crit%")
       ->orWhere('apmaterno', 'like', "%$this->crit%")
       ->orWhere('email', 'like', "%$this->crit%");
   }
   public function headings(): array{
       return [
           'id',
           'nombre',
           'appaterno',
           'apmaterno',
           'email',
           'telefono',
           'direccion'
       ];
   }
}
