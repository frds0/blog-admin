@extends('layouts.app')

@section('title', "Blog | $post->title")

@section('content')
    <div class="container">
        <article>
            <h2 class="blog-post-title mb-1">{{ $post->title }}</h2>
            <p class="blog-post-meta">{{ date('d M Y H:i', strtotime($post->created_at)) }}</p>

            <p>{{ $post->content }}</p>

            <a href="{{ url("posts") }}">Back</a>
        </article>
    </div>
@endsection