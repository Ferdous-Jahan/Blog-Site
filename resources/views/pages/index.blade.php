@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>This is the home page</h1>
        <h2>{{$title}}</h2>
        <p>web.php -> PagesController -> function index() -> index.blade</p>
        <button type="button" href="/login" class="btn btn-outline-primary">Login</button>
        <button type="button" href="/register" class="btn btn-outline-success">Register</button>
    </div>
@endsection