@extends('layouts.main')

@section('container')
<div class="position-absolute top-0 end-0">
    <img src="images/Group 16.svg" style="height: 500px;">
</div>
<div class="position-absolute bottom-0 start-0">
    <img src="images/Group 15.svg" style="height: 500px;">
</div>

<div class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="container-fluid" style="width: fit-content;">
        <h3 class="judul text-center">Login</h3>
        <figure class="text-center">
            <figcaption class="blockquote-footer">
                <p>See your growth and get consulting support.</p>
            </figcaption>
        </figure>
        <label for="" class="form-label">Username</label>
        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping">@</span>
            <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                aria-describedby="addon-wrapping">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="form-check d-flex mb-3">
            <div class="p-2">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                <label class="form-check-label" for="flexCheckChecked">
                    Remember me
                </label>
            </div>
            <div class="ms-auto p-2">
                <a href="" class="text_birugelap">forgot password?</a>
            </div>
        </div>
        <div class="d-grid gap-2">
            <button class="btn" type="button">Login</button>
        </div>
        <figure class="text-center">
            <figcaption class="blockquote-footer">
                <p>don't have an account yet?<a href="" class="text_birugelap">Create one</a>.</p>
            </figcaption>
        </figure>
    </div>
</div>
@endsection