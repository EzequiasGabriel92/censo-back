<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('cedula');
            $table->string('lastnames');
            $table->string('names');
            $table->string('municipio');
            $table->string('localidad');
            $table->string('direccion');
            $table->string('phone');
            $table->string('phone_fijo');
            $table->string('virus');
            $table->string('atendido');
            $table->string('síntomas');
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
        Schema::dropIfExists('users');
    }
}
