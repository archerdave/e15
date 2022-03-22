@extends('layouts/master')

@section('title')
    Create your background
@endsection

@section('input')
    <form method='GET' action='/'>
        <label for='firstName'>First Name: </label>
        <input type='text' id='firstName' name='firstName' placeholder='Terry' autofocus value='{{$firstName}}'/><br>

        <label for='lastName'>Last Name: </label>
        <input type='text' id='lastName' name='lastName' placeholder='Jones' value='{{$lastName}}'/><br>

        <label for='pronouns'>Pronous: </label>
        <input type='text' id='pronouns' name='pronouns' placeholder='ix / ex' value='{{$pronouns}}'/><br>

        <label for='firstColor'>Top color: </label>
        <input type='color' id='firstColor' name='firstColor' value='{{$firstColor ?? "#FFFFFF"}}'><br>
        
        <label for='secondColor'>Bottom color: </label>
        <input type='color' id='secondColor' name='secondColor' value='{{$secondColor ?? "#000000"}}'><br>

        <label for='icon'>Choose an icon: </label>
        <select id='icon' name='icon'>
            <option value='none' disabled {{$icon ? '' : 'selected'}} hidden>-- please select --</option>
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
    @endif
@endsection