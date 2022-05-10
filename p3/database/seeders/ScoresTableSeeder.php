<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Score;
use App\Models\User;

class ScoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $score = Score::updateOrCreate(
            [
                'date' => '2022-01-28',
                'points' => '21',
                'distance' => '20',
                'isTimed' => false,
                'archer_id' => User::where('firstName', 'David')->first()->id,
            ]
        );

        $score = Score::updateOrCreate(
            [
                'date' => '2021-3-30',
                'points' => '5',
                'distance' => '40',
                'isTimed' => true,
                'archer_id' => User::where('firstName', 'David')->first()->id,
            ]
        );
    }
}