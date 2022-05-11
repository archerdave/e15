@extends('layouts/master')
@section('main')
    <form id='userEditForm' name='userEditForm' method='POST' action='/users/{{$user->id}}'>
        {{ csrf_field() }}
        {{ method_field('put') }}
        <label class='loginLabel' for='firstName'>First Name</label>
        <input class='loginField' type='text' id='firstName' name='firstName' value={{old('firstName') ?? $user->firstName}}>
        <label class='loginLabel' for='lastName'>Last Name</label>
        <input class='loginField' type='text' id='lastName' name='lastName' value={{old('lastName') ?? $user->lastName}}>
        <label class='loginLabel' for='email'>Email</label>
        <input class='loginField' type='email' id='email' name='email' value={{old('email') ?? $user->email}}>
        <label class='loginLabel' for='password'>Enter your current password</label>
        <input class='loginField' type='password' id='password' name='password' >
        <input type='submit' value='update'>
    </form>
@endsection