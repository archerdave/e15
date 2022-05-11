@extends('layouts/master')

@section('main')
<table id='rolesTable'>
    <tr>
        <th></th>
        <th>Name</th>
        <th>Guest</th>
        <th>Archer</th>
        <th>Coach</th>
        <th>Admin</th>
    </tr>
    @foreach($users as $user)
        <tr class='{{session('userId') == $user->id ? 'changed' : ''}} roles'>
            <td><a href='/roles/{{$user->id}}/edit'>edit</a></td>
            <td>{{$user->lastName}}, {{$user->firstName}}</td>
            <td class='checkbox'><input type='checkbox' disabled {{$user->hasRole('guest') ? 'checked' : ''}}></td>
            <td class='checkbox'><input type='checkbox' disabled {{$user->hasRole('archer') ? 'checked' : ''}}></td>
            <td class='checkbox'><input type='checkbox' disabled {{$user->hasRole('coach') ? 'checked' : ''}}></td>
            <td class='checkbox'><input type='checkbox' disabled {{$user->hasRole('admin') ? 'checked' : ''}}></td>
        </tr>
    @endforeach
</table>
@endsection