<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(ClienteSeeder::class);
        $this->call(EmpleadoSeeder::class);
        $this->call(ProductoSeeder::class);
        $this->call(UsuarioSeeder::class);
        $this->call(VentaSeeder::class);
    }
}
