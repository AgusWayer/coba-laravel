
@extends('layouts.main')


@section('content')
<h1 class=" text-center">{{$title}}</h1>
<div class="row justify-content-center my-3">
  <div class="col-md-6">
    <form action="/blog" >
        @if(request('author'))
            <input type="hidden" name="author" value="{{request('author')}}">
        @endif
        @if(request('category'))
            <input type="hidden" name="category" value="{{request('category')}}">
        @endif
      <div class="input-group mb-3">
        <input type="text" class="form-control" name="search" placeholder="Search..." >
        <button class="btn btn-danger" type="submit" >Search</button>
      </div>
    </form>
  </div>
</div>



@if ($posts->count())
<div class="card mb-3">
    <img src="https://source.unsplash.com/1200x400?{{$posts[0]->category->name}}" class="card-img-top" alt="{{$posts[0]->category->name}}">
    <div class="card-body text-center">
      <h5 class="card-title"><a href="/post/{{$posts[0]->slug}}" class="text-decoration-none text-dark">{{$posts[0]->title}}</a></h5>
      <p>
        <small>
        By <a href="/blog?author={{$posts[0]->author->username}}" class="text-decoration-none">{{$posts[0]->author->name}}</a> in <a href="/blog?category={{$posts[0]->category->slug}}" class="text-decoration-none">{{$posts[0]->category->name}}</a> {{$posts[0]->created_at->diffForHumans()}}
        </small>
    </p>
      <p class="card-text">{{$posts[0]->excerpt}}</p>

      <a href="/post/{{$posts[0]->slug}}" class="text-decoration-none">Read More</a>
    </div>
  </div>


<div class="container">
    <div class="row">
        @foreach($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
            <div class="card" >
                <div class="position-absolute p-2 text-white" style="background-color: rgba(0,0,0,.7)"><a href="/categories/{{$post->category->slug}}" class="text-decoration-none text-white">{{$post->category->name}}</a></div>
                <img src="https://source.unsplash.com/500x400?{{$post->category->name}}" class="card-img-top" alt="{{$post->category->name}}">
                <div class="card-body">
                  <h5 class="card-title">{{$post->title}}</h5>
                  <p><small>By <a href="/blog?author={{$posts[0]->author->username}}" class="text-decoration-none">{{$post->author->name}}</a> in <a href="/blog?category={{$post->category->slug}}" class="text-decoration-none">{{$post->category->name}}</a> </small></p>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="/post/{{$post->slug}}" class="btn btn-primary">Read More</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>

@else
    <p class="text-center fs-4">No Post Found.</p>
@endif
    <div class="d-flex justify-content-center">
        {{$posts->links()}}
    </div>



@endsection
