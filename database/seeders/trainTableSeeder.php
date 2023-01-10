<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class trainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        /*
            $table->string('agency');
            $table->string('departure_station');
            $table->string('arrival_station');
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->string('train_code');
            $table->tinyInteger('carriage_number');
            $table->boolean('is_in_time')->default(1);
            $table->boolean('is_cancelled')->default(0);
        */

        for ($i = 0; $i < 20; $i++) {

            $new_train = new Train();

            $new_train->agency = $faker->word();
            $new_train->departure_station = $faker->word();
            $new_train->arrival_station = $faker->word();
            $new_train->departure_time = $faker->time();
            $new_train->arrival_time = $faker->time();
            $new_train->train_code = $faker->numerify('train-####');
            $new_train->carriage_number = $faker->numberBetween(2, 10);

            $new_train->save();
        }
    }
}
