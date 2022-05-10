<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ScoreController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $scores = $user->scores()->get();

        return view('score/index', ['user' => $user, 'scores' => $scores]);
    }
}