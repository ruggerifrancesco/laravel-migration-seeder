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
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        // foreach ($testTrainsList as $train) {
            // $newTrain = new Train();
            // $newTrain->company = $train['company'];
            // $newTrain->departure_station = $train['departure_station'];
            // $newTrain->arrival_station = $train['arrival_station'];
            // $newTrain->departure_time = $train['departure_time'];
            // $newTrain->arrival_time = $train['arrival_time'];
            // $newTrain->train_code = $train['train_code'];
            // $newTrain->num_carriages = $train['num_carriages'];
            // $newTrain->on_time = $train['on_time'];
            // $newTrain->canceled = $train['canceled'];
            // $newTrain->additional_info = $train['additional_info'];
            // $newTrain->save();
        // }

        for($i = 0; $i < 100 ; $i++) {
            Train::create([
                'company' => $faker->company,
                'departure_station' => $faker->city,
                'arrival_station' => $faker->city,
                'departure_time' => $faker->dateTimeThisYear($max = 'now', $timezone = null),
                'arrival_time' => $faker->dateTimeThisYear($max = 'now', $timezone = null),
                'train_code' => $faker->bothify('???######'),
                'num_carriages' => $faker->numberBetween(1, 10),
                'on_time' => $faker->boolean(80), // 80% chance of being true (on time)
                'canceled' => $faker->boolean(5), // 5% chance of being true (canceled)
                'additional_info' => $faker->optional()->paragraph, // Optional paragraph for additional info
            ]);
        }
    }
}
