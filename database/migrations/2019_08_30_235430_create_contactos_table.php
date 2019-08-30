<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('dependencia');
            $table->String('area');
            $table->String('nombre');
            $table->integer('telefono');
            $table->integer('extension');
            $table->String('correo');
            $table->String('responsable');
            $table->String('asunto');
            $table->String('status');
            $table->String('nombreCanalizado');
            $table->String('areaCanalizado');
            $table->integer('telefonoCanalizado');
            $table->string('resumen');
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
        Schema::dropIfExists('contactos');
    }
}
