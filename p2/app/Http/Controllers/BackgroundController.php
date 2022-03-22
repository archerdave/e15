<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackgroundController extends Controller
{
    public function createImage(Request $request)
    {
        $firstName   = $request->input('firstName', null);
        $lastName    = $request->input('lastName', null);
        $pronouns    = $request->input('pronouns', null);
        $firstColor  = $request->input('firstColor', null);
        $secondColor = $request->input('secondColor', null);
        $icon        = $request->input('icon', null);
        
        return view('form', [
            
        ]);
    }
}