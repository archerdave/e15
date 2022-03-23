<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackgroundController extends Controller
{
    public function createImage(Request $request)
    {
        $firstName   = old('firstName', null);
        $lastName    = old('lastName', null);
        $pronouns    = old('pronouns', null);
        $firstColor  = old('firstColor', null);
        $secondColor = old('secondColor', null);
        $icon        = old('icon', null);
        $status      = session('status', null);

        return view('form', [
            'firstName'   => $firstName,
            'lastName'    => $lastName,
            'pronouns'    => $pronouns,
            'firstColor'  => $firstColor,
            'secondColor' => $secondColor,
            'icon'        => $icon,
            'status'      => $status,
        ]);
    }

    public function processForm(Request $request)
    {
        $request->validate([
            'firstName'   => 'required|alpha|max:30',
            'lastName'    => 'nullable|alpha|max:30',
            'pronouns'    => 'nullable|max:15',
            'firstColor'  => 'required',
            'secondColor' => 'required',
            'icon'        => 'required|alpha',
        ]);

        return redirect('/')->withInput()->with('status', 'success');
    }
}