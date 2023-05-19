@extends('layouts.app')

@section('title', 'Blogs')

@section('content')
    <h1>Blog Codepolitan</h1>
    <a href="{{ url("posts/create") }}" class="btn btn-info btn-sm m-1">Tambah Blog</a>
    @foreach($posts as $post)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ $post->content }}</p>
                <p class="card-text"><small class="text-muted">Last updated at {{ date('d M Y H:i', strtotime($post->created_at))}}</small></p>
                <a href="{{ url("posts/$post->id") }}" class="btn btn-primary btn-sm">Selengkapnya</a>
                <a href="{{ url("posts/$post->id/edit") }}" class="btn btn-warning btn-sm ">Edit</a>
                <form method="POST" action="{{ url("posts/$post->id") }}">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm mt-1">Delete</button>
                </form>
            </div>
        </div>
    @endforeach
@endsection