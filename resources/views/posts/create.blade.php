@extends('layouts.app')

@section('content')
    <form method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="centerDiv">
            <hr>
            <label for="exampleFormControlInput1"><h3>Title</h3></label>
            <input type="text" class="form-control" id="title" name='title' placeholder="put your blog title" required>
            <hr>
            <label for="comment"><h3>Body</h3></label>
            <textarea class="form-control" rows="10" id="body" name='body' style="resize : none;" placeholder="post details" required></textarea>
            <hr>
            <a type="button" href="/posts" class="btn btn-outline-primary">Back</a>
            <input type="submit" name="submit" class="btn btn-outline-success" value="Submit" style="float: right;">
            
        </div>
    </form>
@endsection