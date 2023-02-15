<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use\App\Ventas;

class VentasExport implements FromQuery, WithHeadings
{
   use Exportable;

   protected $crit;

   function __construct($crit){
       $this->crit = $crit;
   }


   public function query()
   {
       return Ventas::query()->select
       ('id','venta','caracteristicas','cliente','cantidad','precio','descripcion')
       ->where('venta', 'like', "%$this->crit%")
       ->orWhere('caracteristicas', 'like', "%$this->crit%")
       ->orWhere('cliente', 'like', "%$this->crit%");
   }
   public function headings(): array{
       return [
           'id',
           'venta',
           'caracteristicas',
           'cliente',
           'cantidad',
           'precio',
           'descripcion'
       ];
   }
}
