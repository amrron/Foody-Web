@extends('layouts.main')

@section('container')

<div class="d-flex flex-column justify-content-center align-items-center min-vh-100">

    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="z-index: 100">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif



    <form action="" method="post" class="container-fluid" style="width: fit-content;">
        @csrf
        <h3 class="judul text-center">Login</h3>
        <figure class="text-center">
            <figcaption class="blockquote-footer">
                <p>See your growth and get consulting support.</p>
            </figcaption>
        </figure>
        @if(session()->has('loginFailed'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert" style="z-index: 100">
                {{ session('loginFailed') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <label for="username" class="form-label">Username</label>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                aria-describedby="addon-wrapping" name="username" id="username" value="{{ old('username') }}" autofocus required>
            @error('username')
            <div id="validationServer04Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password" id="password">
            @error('password')
            <div id="validationServer04Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        {{-- <div class="form-check d-flex mb-3">
            <div class="ms-auto p-2">
                <a href="" class="text_birugelap">forgot password?</a>
            </div>
        </div> --}}
        <div class="d-grid gap-2 mb-3">
            <button class="btn bg-biru text-biru-muda" type="submit">Login</button>
        </div>
        <figure class="text-center">
            <figcaption class="blockquote-footer">
                <p>don't have an account yet? <a href="/register" class="text_birugelap">Create one</a>.</p>
            </figcaption>
        </figure>
    </form>
</div>
@endsection
