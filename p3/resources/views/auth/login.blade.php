@extends('layouts/master')

@section('main')
<p>Please enter your email address and password to login.<p>
<form id='loginForm' name='loginForm' method='POST' action='/login'>
    {{ csrf_field() }}
    <label class='loginLabel' for='email'>Email</label>
    <input class='loginField' id='email' name='email' type='email' placeholder='jsmith@gmail.com' value='{{ old('email', '') }}' autofocus>
    <label class='loginLabel' for='password'>Password</label>
    <input class='loginField' id='password' name='password' type='password'>
    <input type='submit'>
</form>
@endsection