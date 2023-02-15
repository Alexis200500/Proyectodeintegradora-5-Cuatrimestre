<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use\App\Productos;

class ProductosExport implements FromQuery, WithHeadings
{
use Exportable;

   protected $crit;

   function __construct($crit){
       $this->crit = $crit;
   }


   public function query()
   {
       return Productos::query()->select
       ('id','producto','serie','caracteristicas','falla','cantidad','precio')
       ->where('producto', 'like', "%$this->crit%")
       ->orWhere('serie', 'like', "%$this->crit%")
       ->orWhere('caracteristicas', 'like', "%$this->crit%")
       ->orWhere('falla', 'like', "%$this->crit%");
   }
   public function headings(): array{
       return [
           'id',
           'producto',
           'serie',
           'caracteristicas',
           'falla',
		   'cantidad',
		   'precio'
       ];
   }
}

