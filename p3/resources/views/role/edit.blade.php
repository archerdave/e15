@extends('layouts/master')

@section('main')
<table id='roleTable'>
    <tr>
        <th>Name</th>
        <th>Archer</th>
        <th>Coach</th>
        <th>Admin</th>
        <th></th>
    </tr>
    <tr class='roles'>
        <form id='roleUpdateForm' method='POST' action='/roles/{{$target->id}}'>
            {{ method_field('put') }}
            {{ csrf_field() }}
            <td>{{$target->lastName}}, {{$target->firstName}}</td>
            <td class='checkbox'><input type='checkbox' id='archer' name='archer' {{$target->hasRole('archer') ? 'checked' : ''}}></td>
            <td class='checkbox'><input type='checkbox' id='coach' name='coach' {{$target->hasRole('coach') ? 'checked' : ''}}></td>
            <td class='checkbox'><input type='checkbox' id='admin' name='admin' {{$target->hasRole('admin') ? 'checked' : ''}}  {{$user->hasRole('admin') ? '' : 'disabled'}}></td>
            <input type='hidden' id='target' name='target' value='{{$target->id}}'>
            <td><input type='submit' id='roleSubmit' name='roleSubmit' value='Save'></td>
        </form>
    </tr>
</table>
<button onClick='window.location.href="/roles"'>Cancel</button>
@endsection