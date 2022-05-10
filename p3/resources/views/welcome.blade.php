@extends('layouts/master')


@section('main')
<p>With <strong>ASK</strong>, you can record and view your own archery scores.  You can also submit Official Scores to the Score Keeper, view your Official Score history, and review your Current Average.</p>
<h2 id='glossaryTitle'>Glossary of Terms</h2>
<dl>
    <dt>Ends</dt>
    <dd>An "end" is simply a group of arrows shot at the target.  For our purposes, an <em>untimed end</em> always has six arrows.  A <em>timed end</em>  has a specific time limit, but you can shoot as many arrows as you like, so long as you do so safely.</dd>
    <dt>Scores</dt>
    <dd>At any point, an archer or guest may shoot an end, and say to themself "I wanna record that!".  They can enter that score into ASK by putting in the points scored, the distance, and whether the end was timed.  A recorded score does not have to be part of an Official Round.</dd>
    <dt>Official Rounds</dd>
    <dd>Only Archers can record an Official Round.  An Official Round is a group of scores that are in a specific format, and occurred at a sanctioned event.  The format for an Offical Round has six ends:<dd>
        <h4>Three untimed ends (unlimited time, six arrows):</h4>
        <ul>
            <li>Twenty Yards</li>
            <li>Thirty Yards</li>
            <li>Forty Yards</li>
        </ul>
        <h4>Three timed ends (thirty seconds, unlimited arrows):</h4>
        <ul>
            <li>Twenty Yards</li>
            <li>Thirty Yards</li>
            <li>Forty Yards</li>
        </ul>
        <dd>Official Rounds expire one year from the date they occurred.  For example, an Official Round recorded on August 2, 2022 will expire on August 2, 2023.  You can still see them, but they won't count towards your Current Average.</dd>
    <dt>Current Average</dt>
    <dd>Your Current Average is determined from your three highest-scoring Official Rounds.</dd>

@endsection