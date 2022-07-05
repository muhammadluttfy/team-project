@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-5">

            <main class="form-signin w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center">Please Log in</h1>

                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form>

                    <div class="form-floating">
                        <input type="email" class="form-control" name="" id="email"
                            placeholder="name@example.com">
                        <label for="email">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        <label for="password">Password</label>
                    </div>

                    <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
                </form>
                <small class="d-block mt-2 text-center text-muted">Not Registered ? <a
                        href="{{ route('register') }}">Register
                        Now</a></small>
            </main>
        </div>
    </div>
@endsection
