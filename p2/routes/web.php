<?php

use App\Http\Controllers\BackgroundController;
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
    // return '<h1>And here ye shall find Project 2...</h1>';
});

Route::get('/create', [BackgroundController::class, 'createImage']);

// Route::get('/create', function () {
//     // return view('form');
// });