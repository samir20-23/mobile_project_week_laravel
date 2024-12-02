<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Articles</title>
</head>
<body>
    <h1>Liste des Articles</h1>
    <ul>
        @foreach($articles as $article)
            <li>
                <a href="{{ route('articles.show', $article['id']) }}">
                    {{ $article['title'] }}
                </a>
                
            </li>
        @endforeach
    </ul>
</body>
</html>
