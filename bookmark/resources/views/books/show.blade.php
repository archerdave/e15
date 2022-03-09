@extends('layouts/main')

@section('title')
    {{$title}}
@endsection

@section('head')
    <link href='/css/books/show.css' rel='stylesheet'>
@endsection

@section('content')
    @if($bookFound)
        <h1>{{ $title }}</h1>
        
        <p>
            Details about this book will go here...
        </p>
        <p>These are the details for the book: {{$title}}</p>
    @else
        No such book was found. <a href='/books'>View all of the books</a>
    @endif
@endsection
