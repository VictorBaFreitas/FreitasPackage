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
        Schema::create('pacotes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('destinatario');
            $table->string('endereco');
            $table->date('data_envio');
            $table->string('status');
            $table->string('imagem');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacotes');
    }
};
