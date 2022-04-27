@extends('layouts/main')

@section('title')
    Remove {{ $book->title }} from your list
@endsection

@section('content')
    <h1>Remove from your list</h1>
    <h2>{{ $book->title }}</h2>

    <form method='POST' action='/list/{{ $book->slug }}/destroy'>
        {{ csrf_field() }}
        <button class='btn btn-primary'>Confirm Removal</button>
    </form>
@endsection