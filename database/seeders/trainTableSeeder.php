<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class trainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
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
        $new_train = new Train();

        $new_train->agency = "Trenitalia";
        $new_train->departure_station = "Napoli Garibaldi";
        $new_train->arrival_station = "Roma Termini";
        $new_train->departure_time = "15:57";
        $new_train->arrival_time = "17:36";
        $new_train->train_code = "NA1926CM";
        $new_train->carriage_number = 7;

        $new_train->save();
    }
}
