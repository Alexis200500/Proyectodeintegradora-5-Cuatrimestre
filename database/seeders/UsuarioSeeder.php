<?php

use Illuminate\Database\Seeder;
use App\Usuarios;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuarios::insert([
            'nombre' => 'Alexis',
            'usuario' => 'Alexis',
            'email' => 'al221811729@gmail.com',
            'password' => '12345'
        ]);
    }
}
