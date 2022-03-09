<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PageController;

//TODO : use vs import vs ... wasn't there a third namespace option?
// ... right, namespace was the third.  Look up the differences
//these three keywords.

Route::get('/', [PageController::class, 'index']);
Route::get('/contact', [PageController::class, 'contact']);

Route::get('/books', [BookController::class, 'index']);
Route::get('/books/{title}', [BookController::class, 'show']);
Route::get('/books/filter/{category}/{subcategory}', [BookController::class, 'filter']);