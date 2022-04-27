@extends('layouts/main')

@section('title')
{{ $book ? $book['title'] : 'Book not found' }}
@endsection

@section('head')
<link href='/css/books/show.css' rel='stylesheet'>
@endsection

@section('content')

@if(!$book)
Book not found. <a href='/books'>Check out the other books in our library...</a>
@else

<img class='cover' src='{{ $book->cover_url }}' alt='Cover photo for {{ $book->title }}'>

<h1>{{ $book->title }}</h1>

<a href='{{ $book->purchase_url }}'>Purchase...</a>

<p class='description'>
    {{ $book->description }}
    <a href='{{ $book->info_url }}'>Learn more...</a>
</p>

<ul class='bookActions'>
    @if($hasBookInList)
        <li><a href='/list/{{ $book->slug }}/delete'>Remove from your list</a></li>
    @else
        <li><a href='/list/{{ $book->slug }}/add'>Add to your list</a></li>
    @endif
    <li><a href='/books/{{ $book->slug }}/edit'>Edit this book</a></li>
    <li><a href='/books/{{ $book->slug }}/delete'>Delete this book</a></li>
</ul>
@endif

@endsection