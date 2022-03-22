@extends('layouts/master')

@section('title')
    Create your background
@endsection

@section('input')
    <form method='GET' action='/create'>
        <label for='firstName'>First Name: </label>
        <input type='text' id='firstName' name='firstName' placeholder='Terry' autofocus/><br>

        <label for='lastName'>Last Name: </label>
        <input type='text' id='lastName' name='lastName' placeholder='Jones' /><br>

        <label for='pronouns'>Pronous: </label>
        <input type='text' id='pronouns' name='pronouns' placeholder='ix / ex' /><br>

        <label for='firstColor'>Top color: </label>
        <input type='color' id='firstColor' name='firstColor' value='#FFFFFF'><br>
        
        <label for='secondColor'>Bottom color: </label>
        <input type='color' id='secondColor' name='secondColor' value='#000000'><br>

        <label for='icon'>Choose an icon: </label>
        <select id='icon' name='icon'>
            <option value='none' disabled selected hidden>-- please select --</option>
            <option value='owl'>Owl</option>
            <option value='tiger'>Tiger</option>
            <option value='dog'>Dog</option>
            <option value='unicorn'>Unicorn</option>
            <option value='cricket'>Cricket</option>
            <option value='monkey'>Monkey</option>
            <option value='octopus'>Octopus</option>
        </select><br>

        <input type='submit' value='create!'/>
    </form>
@endsection

@section('output')
    @if(isset($_GET['firstName']))
        <?php dump($_GET); ?>
    @endif
@endsection