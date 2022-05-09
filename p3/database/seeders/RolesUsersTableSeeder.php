<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class RolesUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $archerRole = Role::where('name', '=', 'archer')->first();
        $guestRole = Role::where('name', '=', 'guest')->first();
        $coachRole = Role::where('name', '=', 'coach')->first();
        $scoreKeeperRole = Role::where('name', '=', 'score keeper')->first();

        //Give Jill the Archer role
        $jill = User::where('firstName', '=', 'Jill')->first();
        $jill->roles()->save($archerRole);

        //Give Jamal the Guest role
        $jamal = User::where('firstName', '=', 'Jamal')->first();
        $jamal->roles()->save($guestRole);

        //Give Terry the Coach and Archer roles
        $terry = User::where('firstName', '=', 'Terry')->first();

        $terry->roles()->save($archerRole);
        $terry->roles()->save($coachRole);

        //Give David the Score Keeper, Coach, and Archer roles
        $david = User::where('firstName', '=', 'David')->first();

        $david->roles()->save($archerRole);
        $david->roles()->save($coachRole);
        $david->roles()->save($scoreKeeperRole);
    }
}