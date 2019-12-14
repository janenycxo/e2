<!doctype html>
<html lang='en'>

<head>

<title>@yield('title', $app->config('app.name'))</title>

<meta charset='utf-8'>

<link rel='shortcut icon' href='/favicon.ico'>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href='/css/app.css' rel='stylesheet'>

@yield('head')

</head>

<body>
<style>
body {
    background-color: powderblue;
    text-align: center;
}

ul {
    list-style-type: none;
    padding: 0;
}

</style>
<main>
    @yield('content')
</main>
   
      

    
<footer>

</footer>

@yield('body')
</body>
</html>