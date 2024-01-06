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
        Schema::create('detalle_ventas', function (Blueprint $table) {
            $table->timestamps();
            $table->id('iddetalle_venta');
            $table->unsignedBigInteger('idarticulo');
            $table->unsignedBigInteger('idventa');
            $table->bigInteger('cantidad')->unsigned();
            $table->bigInteger('precio_venta')->unsigned();
            
            $table->foreign('idventa')->references('idventa')->on('ventas');
            $table->foreign('idarticulo')->references('idarticulo')->on('articulos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_ventas');
    }
};
