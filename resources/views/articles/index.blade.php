@extends('layouts.theme')

@section('content')

@foreach ($articles as $article)

    <div class="col_w260 fp_box">
    <h2>{{$article->title}}</h2>
    <p><em>{{$article->body}}</p>
    <a class="more" href="/articles/{{$article->id}}">Learn more</a>
    <a class="more" href="/articles/{{$article->id}}/edit">Edit</a>
    </div>
@endforeach

@endsection