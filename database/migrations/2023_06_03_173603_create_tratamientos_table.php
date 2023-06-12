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
        Schema::create('tratamientos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('numero_sesiones');
            $table->float('precio_oferta')->default(0);
            $table->float('precio_normal')->default(0);
            $table->string('imagen');
            $table->unsignedBigInteger('zonas_id');
            $table->foreign('zonas_id')->references('id')->on('zonas')->nullable()->constrained()
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
        Schema::dropIfExists('tratamientos');
    }
};
