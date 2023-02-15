<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('ventas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('venta');
            $table->char('cantidad');
            $table->char('precio');
            $table->string('caracteristicas');
            $table->string('descripcion');
            $table->string('cliente');
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
