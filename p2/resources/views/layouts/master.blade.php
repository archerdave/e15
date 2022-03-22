<!doctype html>
<html lang='en'>
<head>
    <title>@yield('title')</title>
    <meta charset='utf-8'>
    <link href='/css/style.css' type='text/css' rel='stylesheet'>
    @yield('head')
</head>
<body>

    <header>
    </header>

    <section>
        @yield('input')
    </section>

    <section>
        @yield('output')
    </section>
    
    <footer>
    </footer>

</body>
</html>