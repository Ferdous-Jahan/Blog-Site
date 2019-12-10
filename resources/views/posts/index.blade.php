@extends('layouts.app')

@section('content')
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card">
                <div class="card-body">
                    <h3><a href="{{route('show', $post->id)}}" >{{$post->title}}</a></h3>
                    <small>Created on {{$post->created_at}}</small><br><br>
                    <a type="button" href="{{route('edit', $post->id)}}" class="btn btn-outline-primary">Edit</a>
                    <a type="button" href="{{route('delete', $post->id)}}" onclick="return confirm('Are you sure?')" class="btn btn-outline-danger">Delete</a>
                </div>                               
            </div>          
        @endforeach
        {{-- {{ $posts->links() }} --}}
    @else
        <p>No Post Found</p>
    @endif
@endsection