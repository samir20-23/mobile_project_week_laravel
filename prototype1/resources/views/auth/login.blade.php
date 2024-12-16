@extends('layouts.app')
@section('content')
    <form action="" method="POST" class="bg-success">
        @csrf
        <input type="email" name="email">
        <input type="password" name="password">
        <button type="submit">login</button>
    </form>
@endsection
