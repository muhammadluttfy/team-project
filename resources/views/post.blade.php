@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">

            <h1 class="text-center">{{ $post->title }}</h1>

            <p class="mb-4 text-center">By. <a href="/posts?author={{ $post->author->username }}" style="text-decoration:none">{{ $post->author->name }}</a> in
                <a href="/posts?category={{ $post->category->slug }}" style="text-decoration:none">{{ $post->category->name }}</a>
            </p>

            @if ($post->image)
            <div style="max-height: 350px; overflow:hidden;">
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
            </div>
            @else
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
            @endif

            <article class="my-3">
                {!! $post->body !!}
            </article>

            <a href="/posts" class="mt-4 mb-5 d-block" style="text-decoration:none">Back To Posts</a>
        </div>
    </div>
</div>
@endsection