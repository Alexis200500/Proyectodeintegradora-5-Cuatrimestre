<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre', 15);
            $table->string('appaterno', 15);
            $table->string('apmaterno', 15);
            $table->string('email', 50);
            $table->string('telefono', 10);
            $table->string('direccion', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
