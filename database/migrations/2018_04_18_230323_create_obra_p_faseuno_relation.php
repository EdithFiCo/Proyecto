<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObraPFaseunoRelation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('carga_file_OP', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('obras_publicas_id')->unsigned();
            $table->foreign('obras_publicas_id')->references('id')->on('proyecto');
            $table->integer('fase_uno_id')->unsigned();
            $table->foreign('fase_uno_id')->references('id')->on('_fase_uno');
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
        Schema::dropIfExists('carga_file_OP');

    }
}
