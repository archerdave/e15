<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DBTestController extends Controller
{
    public function test()
    {
        dump(\DB::select('SHOW DATABASES;'));
    }
}