<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('categoria'); // Llave foránea hacia categorias
            $table->unsignedBigInteger('autor'); // Llave foránea hacia usuarios
            $table->string('nombre', 50)->unique();
            $table->text('resumen')->nullable();
            $table->text('contenido')->nullable();
            $table->string('imagen', 255)->nullable();
            $table->string('adjuntos', 255)->nullable();
            $table->timestamps();
            $table->softDeletes();

            // Llaves foráneas
            $table->foreign('categoria')->references('id')->on('categorias')->onDelete('cascade');
            $table->foreign('autor')->references('id')->on('usuarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
