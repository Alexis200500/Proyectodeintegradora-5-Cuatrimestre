<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use\App\Empleados;

class EmpleadosExport implements FromQuery, WithHeadings
{
  use Exportable;

   protected $crit;

   function __construct($crit){
       $this->crit = $crit;
   }


   public function query()
   {
       return Empleados::query()->select
       ('idemp','nombre','appat','apmat','telefono','direccion')
       ->where('nombre', 'like', "%$this->crit%")
       ->orWhere('appat', 'like', "%$this->crit%")
       ->orWhere('apmat', 'like', "%$this->crit%");
   }
   public function headings(): array{
       return [
           'id',
           'nombre',
           'appat',
           'apmat',
           'telefono',
           'direccion'
       ];
   }
}
