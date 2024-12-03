@extends("layouts.app");
@section("content")


@if ($errors->has('email'))
    <div class="alert alert-danger">
        {{ $errors->first('email') }}
    </div>
@endif

<div>
    <form action="" method="POST">
        @csrf
        <input type="email" name="email">
        <input type="password" name="password">
        <button type="submit" style="bg-success">LOG-IN</button>
    </form>
</div>
@endsection