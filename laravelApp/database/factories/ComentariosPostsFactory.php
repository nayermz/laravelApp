<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentarioPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentario_post', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('post');
            $table->unsignedBigInteger('comentario');
            $table->timestamps();
            $table->softDeletes();

            // Índices y llaves foráneas
            $table->foreign('post')->references('id')->on('posts')->onDelete('cascade');
            $table->foreign('comentario')->references('id')->on('comentarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comentario_post');
    }
}
