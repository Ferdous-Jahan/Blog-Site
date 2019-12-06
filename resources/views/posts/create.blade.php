@extends('layouts.app')

@section('content')
    <form method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="centerDiv">
            <hr>
            <label for="exampleFormControlInput1"><h3>Title</h3></label>
            <input type="text" class="form-control" id="title" placeholder="put your blog title" required>
            <hr>
            <label for="comment"><h3>Body</h3></label>
            <textarea class="form-control" rows="10" id="body" placeholder="post details" required></textarea>
            <hr>
            <input type="submit" name="submit" class="btn btn-outline-success" value="Submit">
        </div>
    </form>
@endsection