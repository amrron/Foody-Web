@extends('layouts.main')

@section('container')
<div class="position-absolute top-0 end-0">
    <img src="images/Group 16.svg" style="height: 500px;">
</div>
<div class="position-absolute bottom-0 start-0">
    <img src="images/Group 15.svg" style="height: 500px;">
</div>
<div class="container" style="width: fit-content; margin-top: 120px; margin-bottom: 20px">
    <h3 class="judul text-center">Register</h3>
    <figure class="text-center">
        <figcaption class="blockquote-footer">
            <p>Let's join us.</p>
        </figcaption>
    </figure>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Name</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Input your name">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <label for="" class="form-label">Username</label>
    <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping">@</span>
        <input type="text" class="form-control" placeholder="Username" aria-label="Username"
            aria-describedby="addon-wrapping">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="password">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput2" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="exampleFormControlInput2" placeholder="confirm password">
    </div>
    <div class="d-grid gap-2">
        <button class="btn" type="button">Create Account</button>
    </div>
</div>

@endsection