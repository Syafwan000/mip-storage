@extends('layouts.dashboardmain')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Profile</h1>
    </div>

    <label class="form-label">Nama Lengkap</label>
    <div class="input-group mb-3">
        <p>{{ $user->name }}</p>
    </div>
    <label class="form-label">Username</label>
    <div class="input-group mb-3">
        <p>{{ $user->username }}</p>
    </div>
    <label class="form-label">Email</label>
    <div class="input-group mb-3">
        <p>{{ $user->email }}</p>
    </div>
    <label class="form-label">Status Admin</label>
    <div class="input-group mb-3">
        <p>{{ ($user->isAdmin == 0) ? 'Bukan Admin' : 'Admin' }}</p>
    </div>
    <label class="form-label">Password</label>
    <div class="input-group mb-3">
        <a href="#" class="btn btn-primary">Ganti Password</a>
    </div>
@endsection