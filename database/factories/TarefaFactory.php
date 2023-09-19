<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Models\Tarefa;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tarefa>
 */
class TarefaFactory extends Factory
{
    protected $model = Tarefa::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        $servicos = [
            'Corte de Cabelo Clássico',
            'Corte de Cabelo Moderno',
            'Corte de Cabelo com Máquina',
            'Corte Fade',
            'Corte Undercut',
            'Corte Pompadour',
            'Barba Tradicional',
            'Barba Desenhada',
            'Corte e Barba',
            'Barbearia Completa (Corte, Barba e Hidratação)',
            'Hidratação Capilar',
            'Tintura de Cabelo',
            'Corte Moicano',
            'Corte Razor Part',
            'Barba à Navalha',
            'Tratamento Anticaspa',
            'Tratamento Capilar Reconstrutor',
            'Massagem Capilar',
            'Limpeza de Pele Masculina',
            'Penteado Masculino',
            'Aplicação de Gel ou Cera',
            'Manicure e Pedicure Masculino',
            'Depilação Masculina',
            'Design de Sobrancelhas',
            'Corte e Estilo Afro',
            'Corte Buzz',
            'Camuflagem de Fios Brancos',
            'Spa dos Pés e das Mãos',
            'Limpeza de Nariz e Orelha',
            'Tratamento de Barba com Óleos'
        ];
        
        return [
            'name' => $this->faker->unique()->randomElement($servicos),
        ];

    }
}
