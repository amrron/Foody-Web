@extends('layouts.main')

@section('container')
<div class="position-absolute top-0 end-0">
    <img src="images/Group 16.svg" style="height: 500px;">
</div>
<div class="position-absolute bottom-0 start-0">
    <img src="images/Group 15.svg" style="height: 500px;">
</div>

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
        <div class="input-group flex-nowrap mb-3">
            <span class="input-group-text" id="addon-wrapping">@</span>
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
            <input type="password" class="form-control" name="password" id="password">
            @error('password')
            <div id="validationServer04Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-check d-flex mb-3">
            <div class="ms-auto p-2">
                <a href="" class="text_birugelap">forgot password?</a>
            </div>
        </div>
        <div class="d-grid gap-2">
            <button class="btn" type="submit">Login</button>
        </div>
        <figure class="text-center">
            <figcaption class="blockquote-footer">
                <p>don't have an account yet?<a href="" class="text_birugelap">Create one</a>.</p>
            </figcaption>
        </figure>
    </form>
</div>
@endsection
