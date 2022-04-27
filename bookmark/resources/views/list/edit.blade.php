@extends('layouts/main')

@section('title')
    Add {{ $book->title }} to your list
@endsection

@section('content')
    <h1>Update your list</h1>
    <h2>{{ $book->title }}</h2>

    <form method='POST' action='/list/{{ $book->slug }}/update'>
        {{ csrf_field() }}

        <label for='notes'>YOUR NOTES ON THIS BOOK</label>
        <textarea name='notes'>{{ old('notes') ?? $book->pivot->notes}}</textarea>

        <button class='btn btn-primary'>Update</button>
    </form>
@endsection