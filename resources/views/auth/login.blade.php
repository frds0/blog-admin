@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="row">
    <div class="col-md-4"></div>

    <div class="card col-md-4">
        <div class="card-body">
            <h1 class="text-center">Login</h1>
            @if(session()->has('error_massage')) {{-- session->has() berfungsi untuk menentukan true or false --}}
                <div class="alert alert-danger">
                    {{ session()->get('error_massage') }} {{-- session->get berfungsi untuk mendapatkan pesan pada 'error_massage' --}}
                </div>
            @endif
            <form method="POST" action="{{ url('login') }}" class="form-control">
                @csrf

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email </label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password"  name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            
            </form>

        </div>
    </div>
</div>
@endsection