
@extends('layouts.main')

@section('container')

<h1 class="mb-5 text-center">{{ $title }}</h1>

@if ($posts->count())
    
<div class="card mb-3">
    <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
    <div class="card-body text-center">
      <h2 class="card-title">{{ $posts[0]->title }}</h2>
      <small class="text-muted">
        <p>By. <a href="/authors/{{ $posts[0]->user->username }}" style="text-decoration:none">{{ $posts[0]->user->name }}</a> in <a href="/categories/{{ $posts[0]->category->slug }}" style="text-decoration:none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}</p>
      </small>
      <p class="card-text">{{ $posts[0]->excerpt }}</p>
      <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-primary" style="text-decoration:none">Read More</a>
    </div>
  </div>
@else
<p class="text-center fs-4">No post found.</p>
@endif

<div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $post)

            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="position-absolute px-3 py-2" style="background-color:rgba(0, 0, 0, 0.7)"><a class="text-white text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a> </div>
                    <img src="https://source.unsplash.com/500x280?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                    <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <small class="text-muted">
                        <p>By. <a href="/authors/{{ $post->user->username }}" style="text-decoration:none">{{ $post->user->name }}</a> {{ $post->created_at->diffForHumans() }}</p>
                    </small>
                    <p class="card-text">{{ $post->excerpt }}</p>
                    <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>

        @endforeach
    </div>
</div>

    @foreach ($posts->skip(1) as $post)
    <article class="mb-5 border-bottom mt-5 pb-4">
        <h2>
            <a href="/posts/{{ $post->slug }}" style="text-decoration:none">{{ $post->title }}</a>
        </h2>

        <p>By. <a href="/authors/{{ $post->user->username }}" style="text-decoration:none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" style="text-decoration:none">{{ $post->category->name }}</a></p>

        <p>{{ $post->excerpt }}</p>

        <a href="/posts/{{ $post->slug }}" style="text-decoration:none">Read More</a>
    </article>
    @endforeach
@endsection