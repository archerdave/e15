@extends('layouts/master')

@section('main')
@if(!$errors->isEmpty())
<h2 class='error'>ERRORS ARE PRESENT</h2>
@endif
<table id='scoreTable'>
    <tr>
        <th><label for='date'>Date</label></th>
        <th><label for='distance'>Distance (yds)</label></th>
        <th><label for='isTimed'>Timed</label></th>
        <th><label for='points'>Points</label></th>
        <th></th>
    </tr>
    <tr>
        <form id='scoreEditForm' method='POST', action='/scores/{{$score->id}}'>
            {{ method_field('put') }}
            {{ csrf_field() }}
            <td><input type='date' id='date', name='date' value='{{old('date') ?? $score->date}}'></td>
            <td><input type='number' id='distance' name='distance' value='{{old('distance') ?? $score->distance}}'></td>
            <td><input type='checkbox' id='isTimed' name='isTimed'
                {{-- If the form has been processed and returned with errors, use the old value.
                Otherwise use the database value. --}}
                @if(count($errors) > 0)
                    {{old('isTimed') ? 'checked' : ''}}
                @else
                    {{$score->isTimed ? 'checked' : ''}}
                @endif
                ></td>
            <td><input type='number' id='points' name='points' value='{{old('points') ?? $score->points}}'></td>
            <input type='hidden' id='scoreId' name='scoreId' value={{$score->id}}>
            <td><input type='submit' id='scoreSubmit' name='scoreSubmit' value='Save'></td>
        </form>
    </tr>
    @if(!$errors->isEmpty())
    <tr>
        <td><span class='error'>{{$errors->first('date')}}</span></td>
        <td><span class='error'>{{$errors->first('distance')}}</span></td>
        <td colspan=2><span class='error'>{{$errors->get('points')[1]}}</span></td>
        <td></td>
    </tr>
    @endif
</table>
@endsection