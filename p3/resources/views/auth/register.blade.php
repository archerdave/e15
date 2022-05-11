@extends('layouts/master')

@section('main')
    <form id='registerForm' name='registerForm' method='POST' action='/register'>
    {{ csrf_field() }}
        <label class='loginLabel' for='firstName'>First name</label>
        <input class='loginField' type=text id='firstName' name='firstName' placeholder='Jordan' value='{{old('firstName', '')}}' autofocus>
        <label class='loginLabel' for='lastName'>Last name</label>
        <input class='loginField' type=text id='lastName' name='lastName' placeholder='Smith' value={{old('lastName', '')}}>
        <label class='loginLabel' for='email'>Email</label>
        <input class='loginField' type='email' id='email' name='email' placeholder='jordan.smith@harvard.edu' value={{old('email', '')}}>
        <label class='loginLabel' for='password'>Password</label>
        {{-- deliberately not repopulating password fields --}}
        <input class='loginField' type='password' id='password' name='password'> 
        <label class='loginLabel' for='password_confirmation'>Confirm Password</label>
        <input class='loginField' type='password' id='password_confirmation' name='password_confirmation'>
        <input type='submit' value='Register'>
    </form>
@endsection