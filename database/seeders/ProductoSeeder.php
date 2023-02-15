<?php

use Illuminate\Database\Seeder;
use App\Productos;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Productos::insert([
            'id' => 1,
            'producto' => 'Laptop lenovo',
            'serie' => 'A093645487se',
            'caracteristicas' => 'Procesador core i5',
            'falla' => 'no enciende',
            'cantidad' => '1',
            'precio' => '1500',
            'created_at' => '2020-01-11 08:51:00',
            'updated_at' => '2020-01-11 08:51:00',
        ]);
    }
}
