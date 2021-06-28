<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('cedula',20)->nullable(false);
            $table->string('nombre',50)->nullable(false);
            $table->string('apellido',50)->nullable(false);
            $table->string('direcion',80)->nullable(false);
            $table->string('telefono',20)->nullable(false);
            $table->string('celular',17)->nullable(false);
            $table->string('correo',90)->nullable(false);
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
        Schema::dropIfExists('clientes');
    }
}
