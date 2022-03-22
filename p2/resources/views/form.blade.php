@extends('layouts/master')

@section('title')
    Create your background
@endsection

@section('header')
    <h1>Create your own meeting background</h1>
@endsection

@section('instructions')
    <p>Fill out the form below, and press the create button.  The First Name and the two color 
    fields are mandatory.  You can choose the same two colors for a solid background, if you prefer.  
    All other fields are optional.</p>
@endsection

@section('input')
    <form method='GET' action='/'>
        <label for='firstName'>First Name: </label>
        <input type='text' id='firstName' name='firstName' placeholder='Terry' autofocus value='{{$firstName}}'/><br>

        <label for='lastName'>Last Name: </label>
        <input type='text' id='lastName' name='lastName' placeholder='Jones' value='{{$lastName}}'/><br>

        <label for='pronouns'>Pronous: </label>
        <input type='text' id='pronouns' name='pronouns' placeholder='they / their' value='{{$pronouns}}'/><br>

        <label for='firstColor'>Top color: </label>
        <input type='color' id='firstColor' name='firstColor' value='{{$firstColor ?? "#FFFFFF"}}'><br>
        
        <label for='secondColor'>Bottom color: </label>
        <input type='color' id='secondColor' name='secondColor' value='{{$secondColor ?? "#000000"}}'><br>

        <label for='icon'>Choose an icon: </label>
        <select id='icon' name='icon'>
            <option value='none' disabled {{$icon ? '' : 'selected'}} hidden>-- please select --</option>
            <option value='none' {{$icon=='none' ? 'selected' : ''}}>no icon</option>
            <option value='owl' {{$icon=='owl' ? 'selected' : ''}}>Owl</option>
            <option value='tiger' {{$icon=='tiger' ? 'selected' : ''}}>Tiger</option>
            <option value='dog' {{$icon=='dog' ? 'selected' : ''}}>Dog</option>
            <option value='unicorn' {{$icon=='unicorn' ? 'selected' : ''}}>Unicorn</option>
            <option value='cricket' {{$icon=='cricket' ? 'selected' : ''}}>Cricket</option>
            <option value='monkey' {{$icon=='monkey' ? 'selected' : ''}}>Monkey</option>
            <option value='octopus' {{$icon=='octopus' ? 'selected' : ''}}>Octopus</option>
        </select><br>

        <input type='submit' value='create!'/>
    </form>
@endsection

@section('output')
    @if(isset($_GET))
        <?php dump($_GET); ?>

        <svg width="650" height="450" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <linearGradient id="background" x1="0" x2="0" y1="0" y2="1">
                <stop offset="0%" stop-color="{{$firstColor}}"/>
                <stop offset="100%" stop-color="{{$secondColor}}"/>
                </linearGradient>
            </defs>
            <rect x="5" y="5" rx="0" ry="0" width="640" height="430" fill="url(#background)"/>
            <text class="name" x="30" y="50">{{$firstName}}</text>
            <text class="name" x="30" y="80">{{$lastName}}</text>
            <text class="name pronoun" x="30" y="105">{{$pronouns}}</text>
        </svg>
    @endif
@endsection