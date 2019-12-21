@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h3>{{$post->title}}</h3>
            <small>{{$post->created_at}} By {{$post->user['name']}}</small>
            <p>{{$post->body}}</p>
        </div>
    </div>
<br><h3>Comments</h3>
    @foreach ($comments as $comment)
            <div class="card">
                <div class="card-body">
                    <h3>{{$comment->user['name']}}</h3>
                    <p>{{$comment->body}}</p>                   
                    <br><br>
                </div>
            </div>          
        @endforeach
    <br>

    @if (Auth::check())
    <form action="{{route('comment', $post->id)}}" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div >
            <hr>
            <textarea class="form-control" rows="5" id="body" name='body' style="resize : none;" placeholder="put your comment here" required></textarea>
            <hr>
            <input type="submit" name="submit" class="btn btn-outline-success" value="Submit" style="float: right;">            
        </div>
    </form>
    @endif
    <a type="button" href="/posts" class="btn btn-outline-primary">Back</a>
@endsection