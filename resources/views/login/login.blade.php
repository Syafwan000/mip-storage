@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-6">
        <main class="form-signin rounded-3">
            <form action="/login" method="post">
                @csrf
                <center>
                    <a class="h2 d-inline title" href="/">MIP</a>
                </center>
                <h4 class="mb-3 fw-normal text-center">Login Form</h4>
                    @if(session()->has('loginFailed'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginFailed') }}
                        <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    @if(session()->has('registerSuccess'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('registerSuccess') }}
                        <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-badge-fill"></i></span>
                    <input type="text" name="username" class="form-control username shadow-none" placeholder="Username" value="{{ old("username") }}" aria-label="Username" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon2"><i class="bi bi-asterisk"></i></span>
                    <input type="password" name="password" class="form-control password shadow-none" placeholder="Password" aria-label="Password" required>
                </div>
                <button class="w-100 btn btn-lg shadow-none" type="submit">Login</button>
            </form>
            <p class="text-center my-2">atau</p>
            <center>
                <a class="register mb-5" href="/register">Register</a>
            </center>
            <center>
                <a class="back" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Kembali" href="/"><i class="bi bi-house-fill"></i></a>
            </center>
        </main>
    </div>
</div>

@endsection