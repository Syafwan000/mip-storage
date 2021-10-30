@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-6">
        <main class="form-signin rounded-3">
            <form action="/register" method="post">
                @csrf
                <center>
                    <a class="h2 d-inline title" href="/">MIP</a>
                </center>
                <h4 class="mb-3 fw-normal text-center">Register Form</h4>
                    @if(session()->has('registerFailed'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('registerFailed') }}
                        <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon-r1"><i class="bi bi-person-circle"></i></span>
                    <input type="text" class="form-control r-name shadow-none @error('name') is-invalid @enderror" name="name" placeholder="Nama Lengkap" value="{{ old('name') }}" aria-label="Nama Lengkap" required>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon-r2"><i class="bi bi-person-badge-fill"></i></span>
                    <input type="text" class="form-control r-username shadow-none @error('username') is-invalid @enderror" name="username" placeholder="Username" value="{{ old('username') }}" aria-label="Username" required>
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon-r3"><i class="bi bi-envelope-fill"></i></span>
                    <input type="email" class="form-control r-email shadow-none @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" aria-label="Email" required>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon-r4"><i class="bi bi-asterisk"></i></span>
                    <input type="password" class="form-control r-password shadow-none @error('password') is-invalid @enderror" name="password" placeholder="Password" aria-label="Password" required>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon-r5"><i class="bi bi-asterisk"></i></span>
                    <input type="password" class="form-control r-con-password shadow-none @error('con-password') is-invalid @enderror" name="con-password" placeholder="Konfirmasi Password" aria-label="Konfirmasi Password" required>
                </div>
                <button class="w-100 btn btn-lg shadow-none" type="submit">Register</button>
            </form>
            <p class="text-center my-2">atau</p>
            <center>
                <a class="register mb-4" href="/login">Login</a>
            </center>
            <center>
                <a class="back" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Kembali" href="/"><i class="bi bi-house-fill"></i></a>
            </center>
        </main>
    </div>
</div>

@endsection