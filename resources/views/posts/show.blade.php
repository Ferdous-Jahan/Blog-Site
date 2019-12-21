@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h3>{{$post->title}}</h3>
            <small>{{$post->created_at}} By {{$post->user['name']}}</small>
            <p>{{$post->body}}</p>
        </div>
    </div>
    <br>
    <a type="button" href="/posts" class="btn btn-outline-primary">Back</a>
@endsection