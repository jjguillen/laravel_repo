<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncidenciaAsistenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidencia_asistente', function (Blueprint $table) {
            $table->bigInteger('incidencia_id')->unsigned();
            $table->bigInteger('asistente_id')->unsigned();
            $table->primary(['incidencia_id', 'asistente_id']);
            $table->foreign('incidencia_id')->references('id')->on('incidencias')->onDelete('cascade');
            $table->foreign('asistente_id')->references('id')->on('asistentes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incidencia_asistente');
    }
}
