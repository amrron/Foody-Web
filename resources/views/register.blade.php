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
        <label for="exampleFormControlInput1" class="form-label">Name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleFormControlInput1" name="name" placeholder="Input your name" value="{{ old('name') }}">
        @error('name')
        <div id="validationServer04Feedback" class="invalid-feedback">
           {{ $message }}
        </div>
        #@enderror
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleFormControlInput1" name="email" placeholder="name@example.com" value="{{ old('email') }}">
        @error('email')
        <div id="validationServer04Feedback" class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Jenis kelamin</label>
        <select class="form-select" aria-label="Default select example" name="jenis_kelamin" value="{{ old('jenis_kelamin') }}">
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
        <label for="exampleFormControlInput1" class="form-label">Tanggal lahir</label>
        <input type="date" class="form-control @error('date') is-invalid @enderror" id="exampleFormControlInput1" name="tanggal_lahir" placeholder="00-00-0000" value="{{ old('tanggal_lahir') }}">
        @error('tanggal_lahir')
        <div id="validationServer04Feedback" class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Level aktivitas</label>
        <select class="form-select" aria-label="Default select example" name="aktivitas" value="{{ old('aktivitas') }}">
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
            <label class="form-label">Tinggi badan</label>
            <input type="number" name="tinggi_badan" class="form-control" placeholder="cm" value="{{ old('tinggi_badan') }}">
            @error('tinggi_badan')
            <div id="validationServer04Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="col">
            <label class="form-label">Berat badan</label>
            <input type="number" name="berat_badan" class="form-control" placeholder="kg" value="{{ old('berat_badan') }}">
            @error('berat_badan')
            <div id="validationServer04Feedback" class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
      </div>
    <label for="" class="form-label">Username</label>
    <div class="input-group mb-3">
        <input type="text" class="form-control @error('username') is-invalid @enderror" placeholder="Username" name="username" aria-label="Username" value="{{ old('username') }}""
            aria-describedby="addon-wrapping">
        @error('username')
        <div id="validationServer04Feedback" class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Password</label>
        <input type="password" class="form-control @error('password') is-invalid @enderror" id="exampleFormControlInput1" name="password" placeholder="password">
        @error('password')
        <div id="validationServer04Feedback" class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput2" class="form-label">Confirm Password</label>
        <input type="password" class="form-control @error('confirm-password') is-invalid @enderror" id="exampleFormControlInput2" name="confirm-password" placeholder="confirm password">
        @error('confirm-password')
        <div id="validationServer04Feedback" class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="d-grid gap-2">
        <button class="btn bg-biru text-biru-muda" type="submit">Create Account</button>
    </div>
</form>

@endsection
