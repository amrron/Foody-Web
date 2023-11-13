@extends('layouts.main')

@section('container')
<form action="" method="post" class="container-lg" style="margin-top: 120px; margin-bottom: 20px; max-width: 480px">
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
        <select class="form-select" aria-label="Default select example" name="jenis_kelamin" id="jenis_kelamin" value="{{ old('jenis_kelamin') }}">
            <option selected>Pilih </option>
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
        <select class="form-select" aria-label="Default select example" name="aktivitas" id="aktivitas" value="{{ old('aktivitas') }}">
            <option selected>Pilih </option>
            <option value="1.2">Tidak aktif (tidak berolahraga sama sekali)</option>
            <option value="1.375">Cukup aktif (berolahraga 1-3x seminggu)</option>
            <option value="1.55">Aktif (berolahraga 3-5x seminggu)</option>
            <option value="1.725">Sangat aktif (berolahraga atau 6-7x seminggu)</option>
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
            <input type="number" name="tinggi_badan" class="form-control" id="tinggi_badan" placeholder="cm" value="{{ old('tinggi_badan') }}">
            @error('tinggi_badan')
            <div id="validationServer04Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="col">
            <label class="form-label" for="berat_badan">Berat badan</label>
            <input type="number" name="berat_badan" class="form-control" id="berat_badan" placeholder="kg" value="{{ old('berat_badan') }}">
            @error('berat_badan')
            <div id="validationServer04Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
      </div>
    <label for="username" class="form-label">Username</label>
    <div class="input-group mb-3">
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
        <button class="btn bg-biru text-biru-muda" type="submit">Buat Akun</button>
    </div>
    <figure class="text-center">
        <figcaption class="blockquote-footer">
            <p>Sudah memiliki akun? <a href="/login" class="text_birugelap">Login sekarang</a>.</p>
        </figcaption>
    </figure>
</form>

@endsection
