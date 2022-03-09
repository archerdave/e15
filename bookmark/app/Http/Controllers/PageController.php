<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function contact()
    {
        return '<h1>Contact us at mail@bookmark.com</h1>';
    }
}