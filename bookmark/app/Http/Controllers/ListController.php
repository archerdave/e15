<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class ListController extends Controller
{
    public function show(Request $request)
    {
        $books = $request->user()->books->sortByDesc('pivot.created_at');

        return view('list/show', ['books' => $books]);
    }

    public function add(Request $request, $slug)
    {
        $book = Book::findBySlug($slug);

        return view('list/add', ['book' => $book]);
    }

    public function save(Request $request, $slug)
    {
        $user = $request->user();
        $book = Book::findBySlug($slug);
        
        $user->books()->save($book, ['notes' => $request->notes]);
        
        return redirect('/list')->with(['flash-alert' => 'The book '.$book->title.' was added to your list.']);
    }

    public function delete(Request $request, $slug)
    {
        $book = Book::findBySlug($slug);
        return view('list/delete', ['book' => $book]);
    }

    public function destroy(Request $request, $slug)
    {
        $book = Book::findBySlug($slug);
        $request->user()->books()->where('slug', '=', $slug)->first()->pivot->delete();
        return redirect('/list')->with(['flash-alert' => 'The book '.$book->title.' was removed from your list.']);
    }
}