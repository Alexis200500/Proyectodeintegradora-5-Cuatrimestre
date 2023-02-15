<?php

use Illuminate\Database\Seeder;
use App\Clientes;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Clientes::insert(
            [
                'id' => 1,
                'nombre' => 'Omar',
                'appaterno' => 'Chong',
                'apmaterno' => 'Lopez',
                'email' => 'al221811717@gmail.com',
                'telefono' => '7291417611',
                'direccion' => 'Ocoyoacac estado de mexico',
                'created_at' => '2020-01-11 08:51:00',
                'updated_at' => '2020-01-11 08:51:00',

            ]
        );
    }
}
