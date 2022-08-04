@extends('layouts.app')
@section('content')
    <div class="row justify-content-center text-center">
        <div class="col-5 mt-4 shadow p-3 mb-5 bg-body rounded">
            <form>
                <svg xmlns="http://www.w3.org/2000/svg" width="72" height="57" fill="#0d6efd" class="bi bi-hurricane"
                    viewBox="0 0 16 16">
                    <path
                        d="M6.999 2.6A5.5 5.5 0 0 1 15 7.5a.5.5 0 0 0 1 0 6.5 6.5 0 1 0-13 0 5 5 0 0 0 6.001 4.9A5.5 5.5 0 0 1 1 7.5a.5.5 0 0 0-1 0 6.5 6.5 0 1 0 13 0 5 5 0 0 0-6.001-4.9zM10 7.5a2 2 0 1 1-4 0 2 2 0 0 1 4 0z" />
                </svg>

                <h1 class="h3 mb-3 fw-normal">Please sign up</h1>

                <div class="form-floating p-1">
                    <input type="text" class="form-control" id="first-name" placeholder="John">
                    <label for="first-name">First Name</label>
                </div>

                <div class="form-floating p-1">
                    <input type="text" class="form-control" id="last-name" placeholder="Doe">
                    <label for="last-name">Last Name</label>
                </div>

                <div class="form-floating p-1">
                    <input type="email" class="form-control" id="email" placeholder="john@doe.com">
                    <label for="email">Email address</label>
                </div>

                <div class="form-floating p-1">
                    <input type="password" class="form-control" id="password" placeholder="Password">
                    <label for="password">Password</label>
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
                <p class="mt-3 mb-3">
                    Have an account?
                    <a class="text-decoration-none" href="/login">{{ 'Login' }}</a>
                </p>
            </form>
        </div>
    </div>
@endsection
