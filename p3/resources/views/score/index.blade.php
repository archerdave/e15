@extends('layouts/master')
@section('main')
@if( $scores->count() == 0 )
<p>I'm sorry, but you don't have any scores recorded.  Maybe you should go and practice?</p>
@else
<h2>Enter a new score</h2>
<table class='scoreTable' id='newScoreTable'>
    <tr>
        <th><label for='date'>Date</label></th>
        <th><label for='distance'>Distance (yds)</label></th>
        <th><label for='isTimed'>Timed</label></th>
        <th><label for='points'>Points</label></th>
        <th></th>
    </tr>
    <form id='newScoreForm' name='newScoreForm' method='POST' action='/scores/validate'>
        {{ csrf_field() }}
        <tr>

            @include('score/form')

            <input type='hidden' id='userId' name='userId' value={{$user->id}}>
            <input type='hidden' id='nextAction' name='nextAction' value='store'>
            <td><input type='submit' value='Save'></td>
        </tr>
    </form>
    @include('score/errorRow')
</table>
<h2>You have the following scores on record</h2>
<table class='scoreTable' id='scoresTable'>
    <tr>
        <th></th>
        <th>Date</th>
        <th>Distance</th>
        <th>Timed</th>
        <th>Points</th>
    </tr>
    @foreach($scores as $score)
    <tr class={{($score->id == session('changedId')) ?  'changed' : ''}}>
        <td><a href='/scores/{{$score->id}}/edit'>edit</a></td>
        <td>{{$score->date}}</td>
        <td>{{$score->distance}}</td>
        <td><input type='checkbox' {{$score->isTimed ? 'checked' : ''}}></td>
        <td>{{$score->points}}</td>
    </tr>
    @endforeach
</table>
@endif
@endsection