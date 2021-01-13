<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Creamos 20 empleados
        $faker = Faker\Factory::create();
        for($i=0; $i<20; $i++) {
            DB::table('empleados')->insert([
                'nombre' => $faker->firstName,
                'apellidos' => $faker->lastName,
                'dni' => $faker->randomNumber($nbDigits = 8).Str::random(1),
                'direccion' => $faker->streetAddress,
                'ciudad' => $faker->city,
                'cargo' => $faker->jobTitle,
                'erte' => $faker->boolean
            ]);

        }
    }
}
