@extends('layouts.main')

@section('container')
<div class="position-absolute top-0 end-0">
    <img src="images/Group 16.svg" style="height: 500px;">
</div>
<div class="position-absolute bottom-0 start-0">
    <img src="images/Group 15.svg" style="height: 500px;">
</div>
<form action="" method="post" class="container" style="width: fit-content; margin-top: 120px; margin-bottom: 20px">
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
        #@enderror
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
    <label for="" class="form-label">Username</label>
    <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping">@</span>
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
        <button class="btn" type="submit">Create Account</button>
    </div>
</form>

@endsection
