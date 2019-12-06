@extends('layouts.app')

@section('content')
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card">
                <div class="card-body">
                    <h3><a href="{{route('show', $post->id)}}" >{{$post->title}}</a></h3>
                    <small>Created on {{$post->created_at}}</small> 
                </div>
                <hr>
            </div>
        @endforeach        
    @endif
@endsection