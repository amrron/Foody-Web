@extends('layouts.main')

@section('container')

<div class="d-flex flex-column justify-content-center align-items-center min-vh-100 position-relative" style="z-index: 50">
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
        @if(session()->has('success_register'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="z-index: 100">
            {{ session('success_register') }}
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
            <input type="password" class="form-control" name="password" placeholder="Password" id="password" required>
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
            <button class="tombol bg-biru text-biru-muda" type="submit">Login</button>
        </div>
        <figure class="text-center">
            <figcaption class="blockquote-footer">
                <p>Belum mememiliki akun? <a href="/register" class="text_birugelap">Buat sekarang</a>.</p>
            </figcaption>
        </figure>
    </form>
</div>

<div class="" style="position: absolute; top: 0; right: 0; filter: blur(42.5px);">
    <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="553" viewBox="0 0 414 553" fill="none" style="z-index: 1">
        <path d="M278.959 464.672C338.359 485.086 413.861 552.245 413.861 552.245V4.91071C413.861 4.91071 382.067 42.6342 354.62 54.4928C262.844 94.1447 212.782 -40.0811 127.637 12.3158C-23.0411 105.041 227.861 159.438 202.654 241.231C175.182 330.376 3.85193 247.186 0.140137 340.395C-2.02576 394.783 20.9768 430.376 63.2446 464.672C128.661 517.751 199.291 437.292 278.959 464.672Z" fill="url(#paint0_linear_91_426)"/>
        <defs>
          <linearGradient id="paint0_linear_91_426" x1="68.718" y1="509.425" x2="383.596" y2="92.8062" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FDCED0"/>
            <stop offset="1" stop-color="#D9F4FF"/>
          </linearGradient>
        </defs>
    </svg>
</div>

<div class="" style="position: absolute; left: 0; bottom: 0; filter: blur(42.5px);">
    <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="541" viewBox="0 0 414 541" fill="none" style="z-index: 1">
        <path d="M134.902 87.5736C75.5022 67.1596 0 0 0 0V547.335C0 547.335 31.7936 509.611 59.2409 497.753C151.017 458.101 201.079 592.327 286.224 539.93C436.902 447.205 186 392.808 211.207 311.015C238.679 221.87 410.009 305.059 413.721 211.851C415.887 157.462 392.884 121.87 350.616 87.5736C285.2 34.4946 214.57 114.953 134.902 87.5736Z" fill="url(#paint0_linear_91_424)"/>
        <defs>
        <linearGradient id="paint0_linear_91_424" x1="345.143" y1="42.8209" x2="30.2644" y2="459.439" gradientUnits="userSpaceOnUse">
        <stop stop-color="#FDCED0"/>
        <stop offset="1" stop-color="#D9F4FF"/>
        </linearGradient>
        </defs>
    </svg>
</div>
@endsection
