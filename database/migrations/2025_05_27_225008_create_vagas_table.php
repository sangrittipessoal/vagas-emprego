<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('vagas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');           // Nome da Vaga
            $table->text('descricao');        // Descrição da Vaga
            $table->text('img');              // Caminho da Imagem 
            $table->integer('user_id');       // Usuário que cadastrou a vaga
            $table->integer('categoria_id');  // Categoria da Vaga
            $table->double('salario');        // Salario referente a vaga
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('vagas');
    }
};
