<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mon Blog Minimaliste')</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <header>
        <h1>Mon Blog</h1>
        <nav>
            <a href="">Accueil</a>
            <a href="">Créer un Article</a>
            <a href="{{url('/articles/create')}}"></a>
            
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2024 Mon Blog Minimaliste</p>
    </footer>
</body>
</html>