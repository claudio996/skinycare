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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            
            $table->date('fecha');

            $table->unsignedBigInteger('tratamientos_id');
            $table->foreign('tratamientos_id')->references('id')->on('tratamientos')->nullable()->constrained();
            $table->unsignedBigInteger('clientes_id');
            $table->foreign('clientes_id')->references('id')->on('clientes')->nullable()->constrained();

            $table->unsignedBigInteger('horas_id');
            $table->foreign('horas_id')->references('id')->on('horas')->nullable()->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
