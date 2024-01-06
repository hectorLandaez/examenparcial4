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
        Schema::create('trabajadores', function (Blueprint $table) {
            $table->id('idtrabajador');
            $table->timestamps();
            $table->string('nombre');
            $table->string('apellido')->nullable();
            $table->string('correo_electronico')->nullable();
            $table->string('sexo');
            $table->string('contraseña');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trabajadores');
    }
};
