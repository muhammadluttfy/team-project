@extends('layouts.main')

@section('container')
    {{-- <h1>Halaman about</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="{{ $image }}" alt="{{ $name }}" width="200" class="img-thumnail rounded-circle"> --}}

    <div class="row d-flex justify-content-center align-items-center mt-5">
        @foreach ($users as $user)
            <div class="col-12 col-md-5 mb-4">
                <div class="card" style="border-radius: 15px;">
                    <div class="card-body p-4">
                        <div class="d-flex text-black">
                            <div class="flex-shrink-0">
                                <img src="https://ui-avatars.com/api/?name={{ $user->name }}"
                                    alt="Generic placeholder image" class="img-fluid"
                                    style="width: 180px; border-radius: 10px;">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="mb-1">{{ $user->name }}</h5>
                                <p class="mb-2 pb-1" style="color: #2b2a2a;">{{ $user->nim }}</p>
                                <div class="d-flex justify-content-start rounded-3 p-2 mb-2"
                                    style="background-color: #efefef;">
                                    {{-- <div>
                                        <p class="small text-muted mb-1">Articles</p>
                                        <p class="mb-0">41</p>
                                    </div>
                                    <div class="px-3">
                                        <p class="small text-muted mb-1">Followers</p>
                                        <p class="mb-0">976</p>
                                    </div>
                                    <div>
                                        <p class="small text-muted mb-1">Rating</p>
                                        <p class="mb-0">8.5</p>
                                    </div> --}}
                                    <h6 class="small text-muted mb-1">{{ $user->profession }}</h6>
                                </div>
                                <div class="d-flex pt-1">
                                    <a href="mailto:{{ $user->email }}" target="_blank"
                                        class="btn btn-outline-primary me-1 flex-grow-1">Email</a>
                                    <a href="{{ $user->website }}" target="_blank"
                                        class="btn btn-primary flex-grow-1">Show Website</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
