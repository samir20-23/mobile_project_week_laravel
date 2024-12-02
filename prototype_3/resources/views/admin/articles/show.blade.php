@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-center align-items-center" style="min-height: 100vh; background: linear-gradient(135deg, #457b9d, #1d3557);">
    <div class="container bg-white shadow p-5" style="border-radius: 20px; max-width: 600px;">
        <h1 class="text-center text-primary mb-4">{{ $article['title'] }}</h1>
        <p class="text-justify" style="font-size: 16px; line-height: 1.6;">{{ $article['content'] }}</p>
        
        <div class="text-center mt-4">
            <a href="/dashboard" class="btn btn-primary" style="padding: 10px 20px; border-radius: 10px;">Retour à la liste</a>
        </div>
    </div>
</div>

@endsection
