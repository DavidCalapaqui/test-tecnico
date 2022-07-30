<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\Cliente;


class PaqueteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ids de los clientes creados
        $clienteIds = Cliente::pluck('id');

        $faker = \Faker\Factory::create();

        for($i=0; $i<50; $i++){
            
            DB::table('paquetes')->insert([
                'id_cliente' => $faker->randomElement($clienteIds),
                'peso' => $faker->randomDigit(),
                'origen' => $faker->city(),
                'destino' => $faker->city(),
                 'valor' => $faker->randomDigit(),
                 'bultos' => $faker->randomDigit(),
            ]);
        }

    }
}
