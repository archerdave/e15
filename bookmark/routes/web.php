<?php

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

Route::get('/contact', function () {
    return '<h1>Contact us at mail@bookmark.com</h1>';
});

Route::get('/example', function () {
    return response()->json([
        'title' => 'The Great Gatsby',
        'author' => 'F. Scott Fitzgerald',
    ]);
});