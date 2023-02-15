<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('producto');
            $table->string('serie');
            $table->string('caracteristicas');
            $table->string('falla');
            $table->char('cantidad');
            $table->decimal('precio');
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
