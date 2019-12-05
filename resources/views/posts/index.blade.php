@extends('layouts.app')

@section('content')
    @if (count($posts) > 0)
        @foreach ($posts as $item)
            <div class="card">
                <div class="card-body">
                    <h3>{{$item->title}}</h3>
                    <small>Created on {{$item->created_at}}</small> 
                </div>
                <hr>
            </div>
        @endforeach        
    @endif
@endsection