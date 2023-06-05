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
        Schema::create('detalle_servicio_tratamientos', function (Blueprint $table) {
            $table->id();
            $table->char('sexo');
            $table->integer('total')->default(0);
            $table->unsignedBigInteger('servicios_id');
            $table->unsignedBigInteger('tratamientos_id');
            $table->foreign('servicios_id')->references('id')->on('servicios')->nullable()->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('tratamientos_id')->references('id')->on('tratamientos')->nullable()->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_servicio_tratamientos');
    }
};
