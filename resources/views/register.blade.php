@extends('layouts.main')

@section('container')
<form action="" method="post" class="container-lg position-relative" style="margin-top: 120px; margin-bottom: 20px; max-width: 480px; z-index: 50">
    @csrf
    <h3 class="judul text-center">Register</h3>
    <figure class="text-center">
        <figcaption class="blockquote-footer">
            <p>Let's join us.</p>
        </figcaption>
    </figure>
    <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Masukan nama anda" value="{{ old('name') }}">
        @error('name')
        <div id="validationServer04Feedback" class="invalid-feedback">
           {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="nama@example.com" value="{{ old('email') }}">
        @error('email')
        <div id="validationServer04Feedback" class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="jenis_kelamin">Jenis kelamin</label>
        <select class="form-select @error('jenis_kelamin') is-invalid @enderror" aria-label="Default select example" name="jenis_kelamin" id="jenis_kelamin" value="{{ old('jenis_kelamin') }}">
            <option value="{{  old('jenis_kelamin') }}">{{ old('jenis_kelamin') ?? "Pilih" }}</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        @error('jenis_kelamin')
        <div id="validationServer04Feedback" class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="tanggal_lahir" class="form-label">Tanggal lahir</label>
        <input type="date" class="form-control @error('date') is-invalid @enderror" id="tanggal_lahir" name="tanggal_lahir" placeholder="00-00-0000" value="{{ old('tanggal_lahir') }}">
        @error('tanggal_lahir')
        <div id="validationServer04Feedback" class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="aktivitas">Level aktivitas</label>
        <select class="form-select @error('aktivitas') is-invalid @enderror" aria-label="Default select example" name="aktivitas" id="aktivitas" value="{{ old('aktivitas') }}">
            <option value="">Pilih</option>
            <option {{ old('aktivitas') == "1.2"? "selected" : "" }} value="1.2">Tidak aktif (tidak berolahraga sama sekali)</option>
            <option {{ old('aktivitas') == "1.375" ? "selected" : "" }} value="1.375">Cukup aktif (berolahraga 1-3x seminggu)</option>
            <option {{ old('aktivitas') == "1.55" ? "selected" : "" }} value="1.55">Aktif (berolahraga 3-5x seminggu)</option>
            <option {{ old('aktivitas') == "1.725" ? "selected" : "" }} value="1.725">Sangat aktif (berolahraga atau 6-7x seminggu)</option>
        </select>
        @error('aktivitas')
        <div id="validationServer04Feedback" class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label" for="tinggi_badan" >Tinggi badan</label>
            <input type="number" name="tinggi_badan" class="form-control @error('tinggi_badan') is-invalid @enderror" id="tinggi_badan" placeholder="cm" value="{{ old('tinggi_badan') }}">
            @error('tinggi_badan')
            <div id="validationServer04Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="col">
            <label class="form-label" for="berat_badan">Berat badan</label>
            <input type="number" name="berat_badan" class="form-control @error('berat_badan') is-invalid @enderror" id="berat_badan" placeholder="kg" value="{{ old('berat_badan') }}">
            @error('berat_badan')
            <div id="validationServer04Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
      </div>
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control @error('username') is-invalid @enderror" placeholder="Username" id="username" name="username" aria-label="Username" value="{{ old('username') }}"
            aria-describedby="addon-wrapping">
        @error('username')
        <div id="validationServer04Feedback" class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password">
        @error('password')
        <div id="validationServer04Feedback" class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="confirm-password" class="form-label">Konfirmasi password</label>
        <input type="password" class="form-control @error('confirm-password') is-invalid @enderror" id="confirm-password" name="confirm-password" placeholder="Konfirmasi password">
        @error('confirm-password')
        <div id="validationServer04Feedback" class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="d-grid gap-2 mb-3d">
        <button class="tombol bg-biru text-biru-muda" type="submit">Buat Akun</button>
    </div>
    <figure class="text-center">
        <figcaption class="blockquote-footer">
            <p>Sudah memiliki akun? <a href="/login" class="text_birugelap">Login sekarang</a>.</p>
        </figcaption>
    </figure>
</form>
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
