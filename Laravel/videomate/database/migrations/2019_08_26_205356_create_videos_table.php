<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_usuario');
            $table->string('id_youtube', 1000);
            $table->string('titulo', 50);
            $table->string('descricao', 1000);
            $table->string('tags', 1000);
            $table->integer('inicio_hora');
            $table->integer('inicio_minuto');
            $table->integer('inicio_segundo');
            $table->integer('fim_hora');
            $table->integer('fim_minuto');
            $table->integer('fim_segundo');
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
        Schema::dropIfExists('videos');
        
    }
}
