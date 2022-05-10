@extends('layouts/master')

@section('main')
<table id='rolesTable'>
    <tr>
        <th></th>
        <th>Name</th>
        <th>Guest</th>
        <th>Archer</th>
        <th>Coach</th>
        <th>Score Keeper</th>
    </tr>
    @foreach($users as $user)
        <tr class='roles'>
            <td><a href='/roles/{{$user->id}}/edit'>edit</a></td>
            <td>{{$user->lastName}}, {{$user->firstName}}</td>
            <td class='checkbox'><input type='checkbox' disabled {{$user->hasRole('guest') ? 'checked' : ''}}></td>
            <td class='checkbox'><input type='checkbox' disabled {{$user->hasRole('archer') ? 'checked' : ''}}></td>
            <td class='checkbox'><input type='checkbox' disabled {{$user->hasRole('coach') ? 'checked' : ''}}></td>
            <td class='checkbox'><input type='checkbox' disabled {{$user->hasRole('score keeper') ? 'checked' : ''}}></td>
        </tr>
    @endforeach
</table>
@endsection