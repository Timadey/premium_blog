<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    {{-- Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- Styles -->
    <style>

    </style>
    {{-- Javascript --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="container">
        {{-- Header --}}
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 ">
            <nav class="navbar navbar-expand-md fixed-top bg-white shadow-sm bg-body rounded">
                <div class="container-fluid">
                    <a href="/"
                        class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" fill="#0d6efd"
                            class="bi bi-hurricane" viewBox="0 0 16 16">
                            <path
                                d="M6.999 2.6A5.5 5.5 0 0 1 15 7.5a.5.5 0 0 0 1 0 6.5 6.5 0 1 0-13 0 5 5 0 0 0 6.001 4.9A5.5 5.5 0 0 1 1 7.5a.5.5 0 0 0-1 0 6.5 6.5 0 1 0 13 0 5 5 0 0 0-6.001-4.9zM10 7.5a2 2 0 1 1-4 0 2 2 0 0 1 4 0z" />
                        </svg>
                        <span class="fs-4">{{ 'Premiun Blog' }}</span>
                    </a>

                    <ul class="nav nav-pills">
                        {{-- <li class="nav-item"><a href="#" class="nav-link" aria-current="page">Home</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Features</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">About</a></li> --}}
                    </ul>

                    <div class="col-md-3 text-end">
                        <a type="button" class="btn btn-outline-primary me-2" href="/login">Login</a>
                        <a type="button" class="btn btn-primary" href="/register">Sign up</a>
                    </div>
                </div>
            </nav>
        </header>

        {{-- Content --}}
        <div class="row justify-content-center">
            @yield('content')
        </div>

        {{-- Footer --}}
    </div>
</body>

</html>
