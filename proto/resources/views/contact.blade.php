@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Contactez-nous</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            {{ $errors->first() }}
        </div>
    @endif

    <form  action="{{ url('/contact') }}" method="POST">
        @csrf
        <div>
            <label>Nom</label>
            <input type="text" name="name" required>
        </div>

        <div>
            <label>Email</label>
            <input type="email" name="email" required>
        </div>

        <div>
            <label>Message</label>
            <textarea name="message" required></textarea>
        </div>

        <button   type="submit" >Envoyer</button>
    </form>
    
</div>
@endsection
