<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.css">

    <title>Document</title>
</head>

<body>
    @foreach ($articles as $article)
        <ul>
            <li> <a href="articles/{{$article['id']}}">{{ $article['title'] }}</a></li>
            <hr>
        </ul>
    @endforeach
</body>

</html>
