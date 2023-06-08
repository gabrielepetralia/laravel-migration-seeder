<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Train as Train;
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
        for ($i = 0; $i < 10; $i++) {
            $companies = ['Italo', 'Trenitalia', 'Frecciarossa', 'FlixTrain', 'SNCF', 'OUIGO', 'Deutche Bahn', 'SBB', 'OBB', 'WestBahn', 'iryo', 'Renfe', 'DSB', 'SNCB'];

            $new_train = new Train();
            $new_train->company = $faker->randomElement($companies);
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->departure_time = $faker->time();
            $new_train->arrival_time = $faker->time();
            $new_train->train_code = $faker->numberBetween(10000, 99999);
            $new_train->num_train_cars = $faker->numberBetween(3,10);
            $new_train->on_time = $faker->numberBetween(0,1);
            $new_train->deleted = $faker->numberBetween(0,1);

            $new_train->save();
        }
    }
}
