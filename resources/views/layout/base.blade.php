<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/@yield('css').css">
    <title>@yield('title')</title>
</head>
<body>
    <header>
      <ul>
        <li><a href="/">Accueil</a></li>
        <li><a href="addBook">formulaire</a></li>
        <li><a href="books">liste</a></li>
        <li><a href="/contact">Contact</a></li>
      </ul>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        @yield('footer')
    </footer>

</body>
</html>
