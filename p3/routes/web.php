<?php

use App\Http\Controllers\DBTestController;
use App\Http\Controllers\ScoresController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/scores', [ScoresController::class, 'index']);

// Route::get('/dbtest', [DBTestController::class, 'test']);