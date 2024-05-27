<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        $companies = ['trenitalia', 'italo', 'flixtrain', 'valditerra', 'captrain', 'co.rac.fer.', 'ferrovienord', 'railone', 'rail traction company', 'trenord' ];

        for($i = 0; $i < 500; $i++) {
            $new_train = new Train();
            $new_train->company = $faker->randomElement($companies);
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->departure_time = $faker->dateTimeThisMonth();
            $new_train->arrival_time = $faker->dateTimeThisMonth();
            $new_train->train_code = $faker->unique()->bothify('??####');
            $new_train->carriages = $faker->numberBetween(4, 10);
            $new_train->in_time = $faker->randomElement([true, false]);
            $new_train->is_delete = $faker->randomElement([true, false]);
            $new_train->save();
        }
    }
}
