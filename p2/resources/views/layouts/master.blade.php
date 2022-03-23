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

    <main>
        @yield('instructions')

        @yield('output')
        
        @yield('input')

    </main>
    <footer>
        @yield('footer')
        <h5>This page created as an assignment for CSCI E-15.  Spring, 2022</h5>
    </footer>

</body>
</html>