<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         schema::create('empleados', function (Blueprint $table) {
            $table->bigIncrements('idemp');
            $table->string('nombre', 15);
            $table->string('appat', 15);
            $table->string('apmat', 15);
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
