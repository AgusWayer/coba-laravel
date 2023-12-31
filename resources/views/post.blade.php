@extends('layouts/main')

@section('content')
<article class="mb-5">  
    <h2>{{ $post->title }}</h2>
    <p>By Agus Wira in <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a></p>
   {!! $post->body !!}

    <a href="/blog">Back to Post</a>
</article>
@endsection