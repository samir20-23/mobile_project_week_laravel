<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>{{ $article['title'] }}</title>
</head>
<body>
    <h1>{{ $article['title'] }}</h1>
    <p>{{ $article['content'] }}</p>
    <a href="{{ route('articles.index') }}">Retour à la liste</a>
</body>
</html>