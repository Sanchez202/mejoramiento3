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
        Schema::create('colaborador_proyectos', function (Blueprint $table) {
            $table->id();



            $table->unsignedBigInteger('proyecto_id')->nullable();
          
            $table->unsignedBigInteger('colaborador_id')->nullable();
          
            $table->foreign('proyecto_id')
            ->references('id')->on('proyectos')
            ->onDelete('set null');

            
            $table->foreign('colaborador_id')
            ->references('id')->on('colaboradors')
            ->onDelete('set null');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colaborador_proyectos');
    }
};
