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
        Schema::create('articulo', function (Blueprint $table) {
            $table->string('referencia',5);
            $table->string('nombre',100);
            $table->text('descripcion');
            $table->string('color',100);
            $table->float('precioUnitario');
            $table->text('observacion');
            $table->String('foto',255);
            $table->string('marca',5);
            $table->timestamps();
            $table->primary('referencia');
            $table->foreign('marca')
            ->references('idMarca')->on('marca');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articulo');
    }
};
