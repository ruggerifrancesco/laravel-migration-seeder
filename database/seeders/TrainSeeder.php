<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $testTrainsList = [
            'company' => 'Trenitalia',
            'departure_station' => 'Lecco',
            'arrival_station' => 'Monza',
            'departure_time' => '2023-07-21 10:00:00',
            'arrival_time' => '2023-07-21 15:30:00',
            'train_code' => 'f678fefBYHUD',
            'num_carriages' => 4,
            'on_time' => true,
            'canceled' => false,
            'additional_info' => null,
        ];

        foreach ($testTrainsList as $train) {
            $newTrain = new Train();
            $newTrain->company = $train['company'];
            $newTrain->departure_station = $train['departure_station'];
            $newTrain->arrival_station = $train['arrival_station'];
            $newTrain->departure_time = $train['departure_time'];
            $newTrain->arrival_time = $train['arrival_time'];
            $newTrain->train_code = $train['train_code'];
            $newTrain->num_carriages = $train['num_carriages'];
            $newTrain->on_time = $train['on_time'];
            $newTrain->canceled = $train['canceled'];
            $newTrain->additional_info = $train['additional_info'];
            $newTrain->save();
        }
    }
}
