@extends('layouts/master')
@section('main')
    <span class='loginLabel'>First Name</span>
    <input class='loginField' type='text' value={{$user->firstName}} disabled>
    <span class='loginLabel'>Last Name</span>
    <input class='loginField' type='text' value={{$user->lastName}} disabled>
    <span class='loginLabel'>Email</span>
    <input class='loginField' type='text' value={{$user->email}} disabled>
    <a href='/users/{{$user->id}}/edit'>edit</a>
@endsection