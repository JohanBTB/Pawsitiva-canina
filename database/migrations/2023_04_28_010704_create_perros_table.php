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
        Schema::create('perros', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('edad');
            $table->string('distrito');
            $table->string('numero_telefonico');
            $table->integer('raza');
            $table->text('historial_clinico')->nullable();
            $table->unsignedBigInteger('adoptado_por')->nullable();
            $table->unsignedBigInteger('albergue_id')->nullable();
            $table->foreign('adoptado_por')->references('id')->on('usuarios')->onDelete('set null');
            $table->foreign('albergue_id')->references('id')->on('albergues')->onDelete('set null');
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perros');
    }
};
