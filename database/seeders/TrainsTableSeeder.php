<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0; $i < 50; $i++) {
            $train = new Train();
            $train->company = $faker->word();
            $train->arrive_station = $faker->word();
            $train->departure_station = $faker->word();
            $train->train_code = $faker->bothify('??##?-##??#');
            $train->cart_number = $faker->randomDigitNotNull();
            $train->cancelled = $faker->numberBetween(0, 1);
            $train->on_time = $train->cancelled === 1 ? 0 : $faker->numberBetween(0, 1);
            $train->arrive_time = $faker->dateTimeBetween('-1 day', '+1 day');
            $train->departure_time = $faker->dateTimeBetween('-1 day', '+1 day');
            $train->save();
        }
    }
}
