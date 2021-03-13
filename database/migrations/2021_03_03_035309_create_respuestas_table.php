<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pregunta_id')->unsigned();
            $table->foreign('pregunta_id')
                ->references('id')
                ->on('preguntas')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');
            $table->integer('encuesta_id')->unsigned();
            $table->foreign('encuesta_id')
                ->references('id')
                ->on('encuestas')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');
            $table->string('valor');
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
        Schema::dropIfExists('respuestas');
    }
}
