<!doctype html>
<html lang='en'>
<head>
    <title>@yield('title', 'Project 2')</title>
    <meta charset='utf-8'>
    <link href='/css/style.css' type='text/css' rel='stylesheet'>
    @yield('head')
</head>
<body>

    <header>
        @yield('header')
    </header>

    <section>
        @yield('instructions')
    </section>

    <section>
        @yield('input')
    </section>

    <section>
        @yield('output')
    </section>
    
    <footer>
        <h5>This page created as an assignment for CSCI E-15.  Spring, 2022</h5>
    </footer>

</body>
</html>