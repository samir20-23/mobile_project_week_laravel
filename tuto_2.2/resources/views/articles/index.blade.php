@extends('layouts.app')

@section('content')
    <h1>Liste des Articles</h1>
    <a href="">Créer un nouvel article</a>
    <ul>
        @foreach ($articles as $article)
            <li>
            <li> <a href="articles/{{$article['id']}}">{{ $article['title'] }}</a></li>
            <hr>
        </ul>

        <form action="" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Supprimer</button>
        </form>

    @endforeach
</body>

</html>
@endsection