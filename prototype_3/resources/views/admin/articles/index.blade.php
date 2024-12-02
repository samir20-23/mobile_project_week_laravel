@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-center align-items-center" style="min-height: 100vh; background: linear-gradient(135deg, #1d3557, #457b9d);">
    <div class="container bg-white shadow-lg p-4" style="border-radius: 20px;">
        <!-- Header Section -->
        <div class="row mb-4">
            <div class="col-md-6">
                <h1 class="font-weight-bold text-primary">Tableau des articles</h1>
            </div>
            <div class="col-md-6 text-right">
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-danger">Se déconnecter</button>
                </form>
                <a href="/articles/create" class="btn btn-success ml-3">Créer un article</a>
            </div>
        </div>


        <!-- Search Bar -->
        <div class="row mb-4">
            <div class="col-md-8 mx-auto">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Rechercher un article..." style="border-radius: 10px 0 0 10px;">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button" style="border-radius: 0 10px 10px 0;">
                            <i class="fas fa-search">search</i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Articles Table -->
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>ID</th>
                        <th>Titre</th>
                        <th>Contenu</th>
                        <th>Date de création</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($articles as $article)
                        <tr>
                            <td>{{ $article['id'] }}</td>
                            <td>{{ $article['title'] }}</td>
                            <td>{{ Str::limit($article['content'], 50) }}</td>
                            <td>{{ $article['created_at']->format('d/m/Y') }}</td>
                            <td>
                                <a href="/articles/{{ $article['id'] }}/edit" class="btn btn-sm btn-warning">Modifier</a>
                                <form action="/articles/{{ $article['id'] }}" method="POST" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
                                </form>
                                <a href="/articles/{{ $article['id'] }}" class="btn btn-sm btn-info">Afficher</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-4">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">«</a></li>
                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">»</a></li>
            </ul>
        </div>
    </div>
</div>

@endsection
