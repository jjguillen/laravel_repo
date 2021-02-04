<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Asistente;

class AsistenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Asistente::factory()
            ->count(10)
            ->create();
    }
}
