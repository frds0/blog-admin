<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}">
    <script src="{{ asset('bootstrap-5/css/bootstrap.min.css') }}"></script>

    <style>
    </style>

</head>

<body>
    <header class="p-3 text-bg-dark mb-3">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 text-white">Home</a></li>
            </ul>

            <div class="text-end">
                @if(Auth::check())
                    <a href="{{ url('logout') }}" class="btn btn-outline-light me-2">Logout</a>
                @else
                    <a href="{{ url('register') }}" class="btn btn-outline-light me-2">Register</a>
                    <a href="{{ url('login') }}" class="btn btn-outline-light me-2">Login</a>
                @endif
            </div>
            </div>
        </div>
    </header>

    <div class="container">

        {{-- Contentnya --}}
        @yield('content')

        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <p class="col-md-4 mb-0 text-body-secondary">© 2023 Company, Inc</p>
        
            <ul class="nav col-md-4 justify-content-end">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
            </ul>
        </footer>
    </div>
</body>

</html>