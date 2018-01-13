<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_admins', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('noabonado');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('noidentidad');
            $table->string('telefono');
            $table->integer('tarifa');
            $table->string('tipo');
            $table->string('estadomora');
            $table->string('tipoincidencia');
            $table->mediumText('barrio');
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
        Schema::dropIfExists('user_admins');
    }
}
