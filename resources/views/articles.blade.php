@extends('layouts.theme')
@section('post')
@foreach ($articles as $article)

                <div class="col_w260 fp_box">
                	<h2>{{$article->title}}</h2>
                    <p><em>{{$article->body}}</p>
                    <a class="more" href="#">Learn more</a>
                </div>
@endforeach
@endsection