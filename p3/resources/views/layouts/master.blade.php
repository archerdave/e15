<!doctype html>
<html lang='en' />

<head>
    <meta charset='utf-8' />
    <link href=data: , rel=icon />
    <link href='/css/styles.css' rel='stylesheet'>
    <title>@yield('title', 'ASK (Ask the Score Keeper)')</title>
</head>

<body>
    <header>
        <h1 id='title'>ASK (Ask the Score Keeper)</h1>
        
        @include('layouts/nav')
        
        @include('layouts/notices')
        
        @if(Auth::user())
            <h2>Hello {{Auth::user()->firstName}}</h2>
        @endif
        @yield('header')
    </header>
    <main>
        @yield('main')
    </main>
    @include('layouts/footer')
</body>

</html>