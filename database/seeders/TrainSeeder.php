<?php

namespace Database\Seeders;

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
    }
}
