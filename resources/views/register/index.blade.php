@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <main class="form-registration w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
                <form>
                    <div class="form-floating">
                        <input type="text" class="form-control rounded-top" name="name" id="name"
                            placeholder="Your Name">
                        <label for="name">Name</label>
                    </div>

                    <div class="form-floating">
                        <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                        <label for="username">Username</label>
                    </div>

                    <div class="form-floating">
                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="name@example.com">
                        <label for="email">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control rounded-bottom" name="password" id="password"
                            placeholder="Password">
                        <label for="password">Password</label>
                    </div>

                    <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Log in</button>
                </form>
                <small class="d-block mt-2 text-center text-muted">Already Account ? <a href="{{ route('login') }}">Login
                        Now</a></small>
            </main>
        </div>
    </div>
@endsection
