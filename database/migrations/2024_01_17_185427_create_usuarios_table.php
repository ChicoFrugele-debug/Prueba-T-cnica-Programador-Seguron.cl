<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->boolean('estado')->default(true);
            $table->timestamps();
        });
    }
    

    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
};
