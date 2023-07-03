<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Libros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('categoria');
            $table->string('nombre');
            $table->string('Autor');
            $table->Integer('id_editorial');
            $table->string('foto')->default('fotos/defecto.png');
            $table->string('user');
        
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
        Schema::dropIfExists('libros');
    }
}
