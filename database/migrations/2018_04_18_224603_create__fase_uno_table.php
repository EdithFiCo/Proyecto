<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFaseUnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_fase_uno', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero');
            $table->string('permiso_check',3);
            $table->integer('aceptado');
            $table->string('path_file_pdf');
            $table->date('primera_carga');
            $table->string('nota',100);
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
        Schema::dropIfExists('_fase_uno');
    }
}
