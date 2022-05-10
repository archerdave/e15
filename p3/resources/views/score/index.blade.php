@extends('layouts/master')
@section('main')
@if( $scores->count() == 0 )
<p>I'm sorry, but you don't have any scores recorded.  Maybe you should go and practice?</p>
@else
<table id='scoresTable'>
    <tr>
        <th>Date</th>
        <th>Distance</th>
        <th>Timed</th>
        <th>Points</th>
    </tr>
    @foreach($scores as $score)
    <tr>
        <td>{{$score->date}}</td>
        <td>{{$score->distance}}</td>
        <td><input type='checkbox' {{$score->isTimed ? 'checked' : ''}}></td>
        <td>{{$score->points}}</td>
    </tr>
    @endforeach
</table>
@endif
@endsection