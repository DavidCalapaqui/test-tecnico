<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = \Faker\Factory::create();

        for($i=0; $i<20; $i++){

            DB::table('clientes')->insert([
                'nombre' => $faker->name(),
                'identificacion' => $faker->numerify("##########"),
                'telefono' => $faker->numerify("##########"),
                'email' => $faker->email(),
                'direccion' => $faker->address(),
            ]);

        }

    }
}
