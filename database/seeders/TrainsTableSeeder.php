<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i > 30; $i++){

            $train = new Train();
            $train->azienda = $faker-> word();
            $train->stazione_partenza = $faker->word();
            $train->stazione_arrivo = $faker->word();
            $train->orario_partenza = $faker->time();;
            $train->orario_arrivo = $faker->time();;
            $train->numero_carrozze = $faker->numberBetween(0, 100);
            $train->codice_treno = $faker-> numberBetween(100, 500);
            $train->in_orario = true;
            $train -> save();
        }
    }
}
