@extends('layouts.app')
@section('title', 'Liste des Articles')
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




@section('content')
    <h2>Liste des Articles</h2>
    <ul>
        @foreach ($articles as $article)
            <li>
                <a href=""></a>
            </li>
        @endforeach
    </ul>
@endsection