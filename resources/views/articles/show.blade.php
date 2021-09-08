@extends('layouts.theme')

@section('content')

<h1>{{ $article->title }}</h1>
<p>{{$article->title}}</p>

<form method="post" action="/articles/{{ $article->id }}">
@csrf
@method('DELETE')
<button onClick="return confirm('Are you Sure?')" class="btn btn-danger" type="submit">Delete</button>
</form>

@endsection

