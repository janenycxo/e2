<!doctype html>
<html lang='en'>
<head>

    <title>@yield('title', $app->config('app.name'))</title>

    <meta charset='utf-8'>

    <link rel='shortcut icon' href='/favicon.ico'>
    <link href='/css/app.css' rel='stylesheet'>

   
</head>
<body>
<h2>Which Dog would you choose? <br> Best in Breed for Agility Training </h2>
      <img alt='AKC Breeds' title='AKC Breeds' 
src='https://www.dogexpress.in/wp-content/uploads/2016/06/German-shepherd-vs-labrador-retriever-660x330.jpg' 
class="center">
<header> 
    <h1><a href='/'>{{ $app->config('app.name') }}</a></h1>
    @yield('header')

</header>

<main>
    @yield('content')

</main>
 
<footer>
@yield('footer')
</footer>

</body>
</html>