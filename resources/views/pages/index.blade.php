@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>This is the home page</h1>
        <h2>{{$title}}</h2>
        <p>web.php -> PagesController -> function index() -> index.blade</p>
        <a type="button" href="/login" class="btn btn-outline-primary">Login</a>
        <a type="button" href="/register" class="btn btn-outline-success">Register</a>
    </div>
@endsection