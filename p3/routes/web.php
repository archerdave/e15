<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ScoreController;
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

Route::get('/', [HomeController::class, 'home']);

/* Must be logged in to access any of these routes */
Route::group(['middleware' => 'auth'], function () {
    Route::get('/scores', [ScoreController::class, 'index']);
    Route::get('/scores/{id}/edit', [ScoreController::class, 'edit']);
    Route::put('/scores/{id}', [ScoreController::class, 'update']);

    Route::get('/roles', [RoleController::class, 'index']);
    Route::get('/roles/{id}/edit', [RoleController::class, 'edit']);
    Route::put('/roles/{id}', [RoleController::class, 'update']);
});