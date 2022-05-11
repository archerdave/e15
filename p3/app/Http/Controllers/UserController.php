<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;

class UserController extends Controller
{
    
    /**
     * GET /user/{id}
     */
    public function show($userId)
    {
        $user = User::where('id', $userId)->first();
        if (is_null($user)) {
            return back()->withInput()->with(['failure' => 'Could not locate that user ('.$userId.')']);
        }
        return view('user/show', ['user' => $user]);
    }

    /**
     * GET /user/{id}/edit
     */
    public function edit($userId)
    {
        $user = User::where('id', $userId)->first();
        if (is_null($user)) {
            return back()->withInput()->with(['failure' => 'Could not locate that user ('.$userId.')']);
        }
        return view('user/edit', ['user' => $user]);
    }


    /**
     * PUT /user/{id}
     */
    public function update(Request $request, $userId)
    {
        $request->validate(
            [
                'firstName' => ['required', 'string', 'max:255'],
                'lastName' => ['required', 'string', 'max:255'],
                'email' => [
                    'required',
                    'string',
                    'email',
                    'max:255',
                    Rule::unique(User::class)->ignore($userId)],
                'password' => ['current_password'],
                ],
        );

        $user = User::where('id', $userId)->first();
        if (is_null($user)) {
            return back()->withInput()->with(['failure' => 'Could not locate that user ('.$userId.')']);
        }

        $user->firstName = $request->firstName;
        $user->lastName = $request->lastName;
        $user->email = $request->email;

        $user->save();

        return redirect('/users/'.$userId)->with(['success' => 'User profile successfully updated.']);
    }
}