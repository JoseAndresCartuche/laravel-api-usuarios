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
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('idDepartamento')->nullable()->change();
            $table->foreign('idDepartamento')->references('id')->on('departamentos')->onDelete('set null');

            $table->unsignedBigInteger('idCargo')->nullable()->change();
            $table->foreign('idCargo')->references('id')->on('cargos')->onDelete('set null');
        });

        Schema::table('departamentos', function (Blueprint $table) {
            $table->unsignedBigInteger('idUsuarioCreacion')->nullable()->change();
            $table->foreign('idUsuarioCreacion')->references('id')->on('users')->onDelete('set null');
        });

        Schema::table('cargos', function (Blueprint $table) {
            $table->unsignedBigInteger('idUsuarioCreacion')->nullable()->change();
            $table->foreign('idUsuarioCreacion')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['idDepartamento', 'idCargo']);
        });

        Schema::table('departamentos', function (Blueprint $table) {
            $table->dropForeign(['idUsuarioCreacion']);
        });

        Schema::table('cargos', function (Blueprint $table) {
            $table->dropForeign(['idUsuarioCreacion']);
        });
    }
};
