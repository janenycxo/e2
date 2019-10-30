<!doctype html>
<html lang='en'>
<head>

    <title>@yield('title', $app->config('app.name'))</title>
    <meta charset='utf-8'>

    <link href='/css/app.css' rel='stylesheet'>

    @yield('head')

</head>
<body>

<header>
   
    
</header>

<main>
    @yield('content')
</main>

<footer>
</footer>

@yield('body')

</body>
</html>