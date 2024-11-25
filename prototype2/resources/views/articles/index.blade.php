@extends('layouts.app')

@section('content')
    <h1>Liste des Articles</h1>
    <a href="">Créer un nouvel article</a>
    <ul>
        @foreach ($articles as $article)
        <x-article-card :article="$article" />
         
    @endforeach
</body>

</html>
@endsection