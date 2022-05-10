<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::updateOrCreate(
            ['name' => 'guest',
            'description' => 'A person who can record archery scores.']
        );

        $role = Role::updateOrCreate(
            ['name' => 'archer',
            'description' => 'A person who can record Official Rounds.']
        );

        $role = Role::updateOrCreate(
            ['name' => 'coach',
            'description' => 'A person who can approve archers, run events, and submit Official Rounds.']
        );

        $role = Role::updateOrCreate(
            ['name' => 'admin',
            'description' => 'A person who can validate Official Scores, approve coaches, and is an Administrator.']
        );
    }
}