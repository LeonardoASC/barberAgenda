<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Horario;

class HorarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $hour = [
        //     '09:00',
        //     '10:00',
        //     '11:00',
        //     '12:00',
        //     '13:00',
        //     '14:00',
        //     '15:00',
        //     '16:00',
        //     '17:00',
        //     '18:00',
        // ];
        Horario::factory(10)->create();
    }
}
