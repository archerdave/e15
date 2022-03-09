<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return 'Showing all of the books...';
    }

    public function show($title)
    {
        return 'These are the details for the book: ' . $title;
    }

    public function filter($category, $subcategory)
    {
        return 'Showing all of the books in these categories: ' . $category . ', ' . $subcategory;
    }
}