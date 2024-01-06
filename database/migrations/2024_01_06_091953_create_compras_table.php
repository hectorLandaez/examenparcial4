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
        Schema::create('compras', function (Blueprint $table) {
            $table->id('idcompras');
            $table->unsignedBigInteger('idcliente');
            $table->unsignedBigInteger('idtrabajador');
            $table->unsignedBigInteger('iddetalle_venta');
            $table->timestamps();

            // Claves foráneas
            $table->foreign('iddetalle_venta')->references('iddetalle_venta')->on('detalle_ventas');
            $table->foreign('idcliente')->references('idcliente')->on('clientes');
            $table->foreign('idtrabajador')->references('idtrabajador')->on('trabajadores');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compras');
    }
};
