<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IncidenciaAsistenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('incidencia_asistente')->insert([
            'incidencia_id' => 3,
            'asistente_id' => 1
        ]);

        DB::table('incidencia_asistente')->insert([
            'incidencia_id' => 3,
            'asistente_id' => 2
        ]);

        DB::table('incidencia_asistente')->insert([
            'incidencia_id' => 3,
            'asistente_id' => 3
        ]);
    }
}
