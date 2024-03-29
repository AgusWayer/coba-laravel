@extends('layouts/main')

@section('content')
<article class="mb-3">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h2>{{ $post->title }}</h2>
                <p>By <a href="/blog?author={{$post->author->username}}" class="text-decoration-none">{{$post->author->name}}</a> in <a href="/blog?category={{$post->category->slug}}" class="text-decoration-none">{{$post->category->name}}</a></p>

                <img src="https://source.unsplash.com/1200x400?{{$post->category->name}}" class="card-img-top" alt="{{$post->category->name}}" class="img-fluid">
                <article class="my-3 fs-5">
                     {!! $post->body !!}
                </article>


                <a href="/blog" class="d-block mt-3">Back to Post</a>
            </div>
        </div>
    </div>

</article>
@endsection
