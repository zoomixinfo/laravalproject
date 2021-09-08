@extends('layouts.theme')

@section('content')

<form action="/articles/{{$article->id}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" value="{{$article->title}}" class="form-control" name="title"
        placeholder="Enter title">
    </div>
    <div class="form-group">
        <label for="body">Body</label>
        <textarea class="form-control" name="body" rows="3">{{$article->body}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection