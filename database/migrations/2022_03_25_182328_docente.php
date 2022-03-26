<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Docente extends Migration
{
    public function up()
    {
        Schema::create('docente', function (Blueprint $table) {
            $table->id();
            $table->string ('nombre', 100);
            $table->string ('apellido', 100);
            $table->string ('img');
            $table->string('titulos');
            $table->string('cursoAsocio');
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
        Schema::dropIfExists('docente');
    }
}
