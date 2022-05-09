<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::updateOrCreate(
            ['email' => 'jill@harvard.edu', 'firstName' => 'Jill', 'lastName' => 'Harvard'],
            ['password' => Hash::make('asdfasdf')
        ]
        );
        
        $user = User::updateOrCreate(
            ['email' => 'jamal@harvard.edu', 'firstName' => 'Jamal', 'lastName' => 'Harvard'],
            ['password' => Hash::make('asdfasdf')
        ]
        );

        $user = User::updateOrCreate(
            ['email' => 'dave@harvard.edu', 'firstName' => 'David', 'lastName' => 'Harvill'],
            ['password' => Hash::make('asdfasdf')
        ]
        );

        $user = User::updateOrCreate(
            ['email' => 'terry@harvard.edu', 'firstName' => 'Terry', 'lastName' => 'Smith'],
            ['password' => Hash::make('asdfasdf')
        ]
        );
    }
}