@extends('layouts.app')

@section('title', 'Tambah Postingan')

@section('content')
    <div class="container">
        <h1>Tambah Blog</h1>
        <form method="POST" action="{{ url("posts") }}" class="form-control">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Judul</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea name="content" id="" rows="4" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection