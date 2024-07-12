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
        Schema::create('gols', function (Blueprint $table) {
            $table->id();
            $table->string('minuto');
            $table->string('descuento');
            $table->string('codigo');
            $table->timestamps();

            $table->unsignedBigInteger('jugador_id')->nullable();
            $table->unsignedBigInteger('partido_id')->nullable();

            $table->foreign('jugador_id')
            ->references('id')->on('jugadors')
            ->onDelete('set null');

      $table->foreign('partido_id')
            ->references('id')->on('partidos')
            ->onDelete('set null');
            ;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gols');
    }
};
