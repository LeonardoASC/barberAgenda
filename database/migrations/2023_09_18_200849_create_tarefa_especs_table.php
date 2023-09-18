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
        Schema::create('tarefa_especs', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->decimal('preco', 8, 2);  // Considerando um formato de 999,999.99 para o preço.
            $table->time('tempo_de_duracao'); // Considerando tempo de duração no formato HH:MM:SS
            $table->string('imagem')->nullable();

            // Chave estrangeira da tabela 'tarefa' na coluna 'nome'
            $table->unsignedBigInteger('tarefa_id'); // Aconselho usar ID como chave estrangeira, mas como foi pedido o nome:
            $table->foreign('tarefa_id')->references('id')->on('tarefas')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tarefa_especs');
    }
};
