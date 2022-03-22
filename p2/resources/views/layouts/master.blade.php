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
        @yield('form')
    </section>

    <section>
        @yield('imageResult')
    </section>
    
    <footer>
    </footer>

</body>
</html>