<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('usuario', 100);
            $table->string('email')->unique();
            $table->string('primerNombre', 255);
            $table->string('segundoNombre', 255);
            $table->string('primerApellido', 255);
            $table->string('segundoApellido', 255);
            $table->integer('idDepartamento')->nullable();
            $table->integer('idCargo')->nullable();
            $table->timestamps();
        });

        Schema::create('departamentos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo', 50);
            $table->string('nombre', 255);
            $table->boolean('activo');
            $table->integer('idUsuarioCreacion')->nullable();
            $table->timestamps();
        });

        Schema::create('cargos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo', 50);
            $table->string('nombre', 255);
            $table->boolean('activo');
            $table->integer('idUsuarioCreacion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('users');
        Schema::dropIfExists('departamentos');
        Schema::dropIfExists('cargos');
        Schema::enableForeignKeyConstraints();
    }
};
