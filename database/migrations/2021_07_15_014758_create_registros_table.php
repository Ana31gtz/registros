<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->bigIncrements ('id');
            $table->string('nombre' ,50);
            $table->string('telefono' ,20);
            $table->string('num_cuenta' ,50);
            $table->string('sala' ,20);
            $table->string('num_equipo' ,20);
            $table->string('licenciatura' ,50);
            $table->string('usuario' ,50);
            $table->string('sugerencias' ,150);
            $table->date('fecha');
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
        Schema::dropIfExists('registros');
    }
}
