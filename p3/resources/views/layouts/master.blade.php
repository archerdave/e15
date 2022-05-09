<!doctype html>
<html lang='en' />

<head>
    <meta charset='utf-8' />
    <link href=data: , rel=icon />
    <link href='css/styles.css' rel='stylesheet'>
    <title>@yield('title', 'ASK (Ask the Score Keeper)')</title>
</head>

<body>
    <header>
        <h1 id='title'>ASK (Ask the Score Keeper)</h1>
        <nav>
            <ul>
                <li><a href='/'>Home</a></li>
                <li><a href='/contact'>Contact Us</a></li>
                @if(!Auth::user())
                    <li><a href='/login'>Login</a></li>
                    <li><a href='/register'>Register</a></li>
                @else
                    <li><form method='POST' id='logout' action='/logout'>
                        {{ csrf_field() }}
                        <a href='#' onClick='document.getElementById("logout").submit();'>Logout</a>
                    </form></li>
                @endif

                
            </ul>
        </nav>
        @yield('header')
    </header>
    <main>
        @yield('main')
    </main>
    @include('layouts/footer')
</body>

</html>