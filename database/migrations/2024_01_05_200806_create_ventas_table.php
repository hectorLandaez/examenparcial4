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
        Schema::create('ventas', function (Blueprint $table) {
            $table->id('idventa');
            $table->unsignedBigInteger('idcliente');
            $table->unsignedBigInteger('idtrabajador');
            $table->timestamps();

            // Claves foráneas
            $table->foreign('idcliente')->references('idcliente')->on('clientes');
            $table->foreign('idtrabajador')->references('idtrabajador')->on('trabajadores');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};
