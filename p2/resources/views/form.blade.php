@extends('layouts/master')

@section('title')
    Create your background
@endsection

@section('header')
    <h1>Create your own virtual meeting background</h1>
    @if(count($errors) > 0)
        <h3 class='error'>Image creation failed due to form errors.</h3>
    @endif
@endsection

@section('instructions')
<section id='intro'>
    <h2>About this page</h2>
    <p>This will create an image that you can use as a background in applications that run
    virtual meetings.  This image features:
    <ul>
        <li>A two-tone gradient from the top of the image to the bottom</li>
        <li>Your name in the top left corner
        <li>Optionally, you can also add the following features
            <ul>
                <li>Your last name</li>
                <li>Your prefered pronouns</li>
                <li>An avatar, appearing in the top right corner</li>
            </ul>
        </li>
    </ul>
    <p>To begin, fill out the form below, and press the create button.  The First Name field and the two color 
    fields are mandatory.  You can choose the same two colors for a solid background, if you prefer.  
    All other fields are optional.</p>
</section>
@endsection

@section('input')
<section id='form'>
    <h2>Your data</h2>
    <form method='GET' action='/process'>
        <fieldset>
            <legend>About You</legend>
            <label for='firstName'>First Name: </label>
            <input type='text' id='firstName' name='firstName' placeholder='Terry' autofocus value='{{$firstName, null}}'/>
            @if($errors->get('firstName'))
                <span class='error'>{{$errors->first('firstName')}}</span>
            @endif
            <br>

            <label for='lastName'>Last Name: </label>
            <input type='text' id='lastName' name='lastName' placeholder='Jones' value='{{$lastName, null}}'/>
            @if($errors->get('lastName'))
                <span class='error'>{{$errors->first('lastName')}}</span>
            @endif
            <br>

            <label for='pronouns'>Pronous: </label>
            <input type='text' id='pronouns' name='pronouns' placeholder='they / their' value='{{old('pronouns', null)}}'/>
            @if($errors->get('pronouns'))
                <span class='error'>{{$errors->first('pronouns')}}</span>
            @endif
            <br>            
        </fieldset>
        <fieldset>
            <legend>Color Choices</legend>
            <label for='firstColor'>Top color: </label>
            <input type='color' id='firstColor' name='firstColor' value='{{old('firstColor', '#FFFFFF')}}'><br>
            
            <label for='secondColor'>Bottom color: </label>
            <input type='color' id='secondColor' name='secondColor' value='{{old('secondColor', '#000000')}}'><br>
        </fieldset>
        <fieldset>
            <legend>Your Avatar</legend>
            <label for='icon'>Choose an avatar: </label>
            <select id='icon' name='icon'>
                <option value='' disabled {{old('icon') ? '' : 'selected'}} hidden>-- please select --</option>
                <option value='none' {{old('icon')=='none' ? 'selected' : ''}}>no icon</option>
                <option value='owl' {{old('icon')=='owl' ? 'selected' : ''}}>Owl</option>
                <option value='tiger' {{old('icon')=='tiger' ? 'selected' : ''}}>Tiger</option>
                <option value='dog' {{old('icon')=='dog' ? 'selected' : ''}}>Dog</option>
                <option value='unicorn' {{old('icon')=='unicorn' ? 'selected' : ''}}>Unicorn</option>
                <option value='cricket' {{old('icon')=='cricket' ? 'selected' : ''}}>Cricket</option>
                <option value='monkey' {{old('icon')=='monkey' ? 'selected' : ''}}>Monkey</option>
                <option value='octopus' {{old('icon')=='octopus' ? 'selected' : ''}}>Octopus</option>
            </select>
            @if($errors->get('icon'))
                <span class='error'>{{$errors->first('icon')}}</span>
            @endif
            <br>
            </fieldset>

        <input type='submit' name='submit' value='Create Image'/>
        <button type='button' onclick='window.location="/"'>Start Over</button>
    </form>
</section>
@endsection

@section('output')
    @if($status)
        <section id='image'>
            <h2>Your background image</h2>
            <svg id='backgroundImage' width='650' height='450' version='1.1' xmlns='http://www.w3.org/2000/svg'>
                <defs>
                    <linearGradient id='gradient' x1='0' x2='0' y1='0' y2='1'>
                        <stop offset='0%' stop-color='{{$firstColor}}'/>
                        <stop offset='100%' stop-color='{{$secondColor}}'/>
                    </linearGradient>
                    <filter id='blur'>
                        <feGaussianBlur in='SourceGraphic' stdDeviation='5'/>
                    </filter>
                </defs>
                <rect x='5' y='5' rx='0' ry='0' width='640' height='430' fill='url(#gradient)'/>
                <text class='name' x='30' y='50'>{{$firstName}}</text>
                @if(isset($lastName))
                    <text class='name' x='30' y='80'>{{$lastName}}</text>
                @endif
                <text class='name pronoun' x='30' y={{ $lastName ? '105' : '75'}}>{{$pronouns}}</text>
                @if(isset($icon) && $icon!='none')
                    <circle class='circle' cx='570' cy='80' r='60' fill='white' filter='url(#blur)'/>
                    <image x='530' y='40' width='80' height='80' href='/images/{{$icon}}.svg'/>
                @endif
                
            </svg><br>
        </section>
    @endif
@endsection