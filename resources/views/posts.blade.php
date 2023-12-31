
@extends('layouts.main')


@section('content')
<h1 class="mb-5">Halaman Blog</h1>
@foreach ($posts as $post)
<article class="mb-5 border-bottom pb-4">  
    <h2><a href="/post/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h2>
    <p>By Agus Wira in <a href="/categories/{{$post->category->name}}" class="text-decoration-none">{{$post->category}}</a></p>
    <p>{{ $post->excerpt }}</p>
    <a href="/post/{{ $post->slug }}" class="text-decoration-none ">Read More</a>
</article>
    
@endforeach


@endsection
   