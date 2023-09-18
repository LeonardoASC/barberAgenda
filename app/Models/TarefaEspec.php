<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TarefaEspec extends Model
{
    use HasFactory;
    protected $table = 'tarefa_especs';
    protected $fillable = ['nome', 'preco', 'tempo_de_duracao', 'imagem', 'tarefa_id'];

    public function tarefa()
    {
        return $this->belongsTo(Tarefa::class);
    }
}
