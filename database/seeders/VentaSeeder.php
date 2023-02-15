<?php

use Illuminate\Database\Seeder;
use App\ventas;

class VentaSeeder extends Seeder
{

    public function run()
    {
        Ventas::insert([
            'venta' => 'sistema de administracion',
            'cantidad' => 1,
            'precio' => 1500,
            'caracteristicas' => 'Laravel y mysql',
            'descripcion' => 'sistema con mysql y laravel apto para tiendas oline',
            'cliente' => 'Qualamex',
            'created_at' => '2020-01-11 08:51:00',
            'updated_at' => '2020-01-11 08:51:00',


        ]);
    }
}
