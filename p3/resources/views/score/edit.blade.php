@extends('layouts/master')

@section('main')
<table class='scoreTable' id='scoreTable' name='scoreTable'>
    <tr>
        <th><label for='date'>Date</label></th>
        <th><label for='distance'>Distance (yds)</label></th>
        <th><label for='isTimed'>Timed</label></th>
        <th><label for='points'>Points</label></th>
        <th></th>
    </tr>
    <tr>
        <form id='scoreEditForm' name='scoreEditForm' method='POST' action='/scores/validate'>
            {{ csrf_field() }}

            @include('score/form')

            <input type='hidden' id='scoreId' name='scoreId' value={{$score->id}}>
            <input type='hidden' id='nextAction' name='nextAction' value='update'>
            <td><input type='submit' value='Save'></td>
        </form>
    </tr>
    @include('score/errorRow')
</table>
@endsection