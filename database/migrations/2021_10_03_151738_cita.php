<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
class Cita extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->increments('id');
            $table->text('ecografias')->nullable();
            $table->integer('paciente_id')->unsigned();
            $table->foreign('paciente_id')->references('id')->on('pacientes');
            $table->integer('ecografia_id')->unsigned();
            $table->foreign('ecografia_id')->references('id')->on('ecografias');
            $table->integer('prestacion_id')->unsigned();
            $table->foreign('prestacion_id')->references('id')->on('prestacions');
            $table->date('fecha')->nullable();
            $table->time('hora')->nullable();
            $table->string('estado')->nullable();
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
        Schema::drop('cita_medica');
    }
}
