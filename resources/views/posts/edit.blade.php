@extends('layouts.app')

@section('content')
    <form method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="centerDiv">
            <hr>
            <label for="exampleFormControlInput1"><h3>Title</h3></label>
            <textarea type="text" class="form-control" rows="1" id="title" name='title' style="resize : none;" required>{{$post->title}}</textarea>
            <hr>
            <label for="comment"><h3>Body</h3></label>
            <textarea class="form-control" rows="10" id="body" name='body' style="resize : none;" required>{{$post->body}}</textarea>
            <hr>
            <a type="button" href="/posts" class="btn btn-outline-primary">Back</a>
            <input type="submit" name="submit" class="btn btn-outline-success" value="Update" style="float: right;">
            
        </div>
    </form>
@endsection