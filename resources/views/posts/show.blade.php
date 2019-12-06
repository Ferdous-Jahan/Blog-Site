@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h3>{{$post->title}}</h3>
            <small>{{$post->created_at}}</small>
            <p>{{$post->body}}</p>
        </div>
    </div>
@endsection