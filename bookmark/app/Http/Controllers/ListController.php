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

    public function edit(Request $request, $slug)
    {
        $book = $request->user()->books()->where('slug', '=', $slug)->first();
        
        return view('list/edit', ['book' => $book]);
    }

    public function update(Request $request, $slug)
    {
        $request->validate([
            'notes' => 'string|nullable',
        ]);

        $book = $request->user()->books()->where('slug', '=', $slug)->first();
        dump("updating notes on " . $book->title . " with \"" . $request->notes . "\"");
        $book->pivot->notes = $request->notes;
        $book->pivot->save();

        return redirect('/list')->with(['flash-alert' => 'Your notes for '.$book->title.' were updated.']);
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