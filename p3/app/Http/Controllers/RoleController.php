<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    /**
     * GET /roles
     */
    public function index()
    {
        $users = User::all()->sortBy('lastName')->sortBy('firstName');

        return view('role/index', ['users' => $users]);
    }


    /**
     * GET /roles/{id}/edit
     */
    public function edit($id)
    {
        $target = User::where('id', '=', $id)->first();
        $user = Auth::user();

        if ($user->hasAnyRole(['admin','coach'])) {
            return view('role/edit', ['target' => $target, 'user' => $user]);
        }
        
        return redirect('/');
    }


    /**
     * PUT /roles/{id}
     */
    public function update(Request $request)
    {
        $target = User::where('id', '=', $request->target)->first();

        if ($request->guest && ($request->archer || $request->coach || $request->admin)) {
            echo('Cannot have Guest role and any other role at the same time');
        } else {
            $guest = Role::where('name', '=', 'guest')->first();
            $archer = Role::where('name', '=', 'archer')->first();
            $coach = Role::where('name', '=', 'coach')->first();
            $admin = Role::where('name', '=', 'admin')->first();

            if ($request->guest && $target->doesNotHaveRole('guest')) {
                $target->roles()->attach($guest);
            } elseif (!$request->guest && $target->HasRole('guest')) {
                $target->roles()->detach($guest);
            }

            if ($request->archer && $target->doesNotHaveRole('archer')) {
                $target->roles()->attach($archer);
            } elseif (!$request->archer && $target->HasRole('archer')) {
                $target->roles()->detach($archer);
            }

            if ($request->coach && $target->doesNotHaveRole('coach')) {
                $target->roles()->attach($coach);
            } elseif (!$request->coach && $target->HasRole('coach')) {
                $target->roles()->detach($coach);
            }

            if ($request->admin && $target->doesNotHaveRole('admin')) {
                $target->roles()->attach($admin);
            } elseif (!$request->admin && $target->HasRole('admin')) {
                $target->roles()->detach($admin);
            }
        }
        echo 'Changes were saved';
        return redirect('/roles')->with([
            'success' => 'Roles successfully updated',
            'userId' => $target->id,
        ]);
    }
}