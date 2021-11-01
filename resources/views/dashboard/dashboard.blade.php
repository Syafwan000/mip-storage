@extends('layouts.dashboardmain')

@section('container')
    @if($time === 'pagi')
    <div class="card bg-dark text-white my-3">
        <img src="/img/pagi.jpg" class="card-img" alt="...">
        <div class="card-img-overlay d-flex flex-column justify-content-center px-5">
            <h2 class="card-title">Selamat Pagi, {{ auth()->user()->name }}</h2>
            <p class="card-text mb-2 date">📅 Tanggal</p>
            <p class="card-text mb-2 time">🕖 Jam</p>
        </div>
    </div>
    <div class="card bg-dark text-white my-3 responsive">
        <img src="/img/r_pagi.jpeg" class="card-img" alt="...">
        <div class="card-img-overlay d-flex flex-column justify-content-center px-3">
            <h2 class="card-title">Selamat Pagi, {{ auth()->user()->name }}</h2>
            <p class="card-text mb-2 r_date">📅 Tanggal</p>
            <p class="card-text mb-2 r_time">🕖 Jam</p>
        </div>
    </div>
    @endif
    @if($time === 'siang')
    <div class="card bg-dark text-white my-3">
        <img src="/img/siang.jpg" class="card-img" alt="...">
        <div class="card-img-overlay d-flex flex-column justify-content-center px-5">
            <h2 class="card-title">Selamat Siang, {{ auth()->user()->name }}</h2>
            <p class="card-text mb-2 date">📅 Tanggal</p>
            <p class="card-text mb-2 time">🕖 Jam</p>
        </div>
    </div>
    <div class="card bg-dark text-white my-3 responsive">
        <img src="/img/r_siang.jpg" class="card-img" alt="...">
        <div class="card-img-overlay d-flex flex-column justify-content-center px-3">
            <h2 class="card-title">Selamat Siang, {{ auth()->user()->name }}</h2>
            <p class="card-text mb-2 r_date">📅 Tanggal</p>
            <p class="card-text mb-2 r_time">🕖 Jam</p>
        </div>
    </div>
    @endif
    @if($time === 'sore')
    <div class="card bg-dark text-white my-3">
        <img src="/img/sore.jpg" class="card-img" alt="...">
        <div class="card-img-overlay d-flex flex-column justify-content-center px-5">
            <h2 class="card-title">Selamat Sore, {{ auth()->user()->name }}</h2>
            <p class="card-text mb-2 date">📅 Tanggal</p>
            <p class="card-text mb-2 time">🕖 Jam</p>
        </div>
    </div>
    <div class="card bg-dark text-white my-3 responsive">
        <img src="/img/r_sore.jpg" class="card-img" alt="...">
        <div class="card-img-overlay d-flex flex-column justify-content-center px-3">
            <h2 class="card-title">Selamat Sore, {{ auth()->user()->name }}</h2>
            <p class="card-text mb-2 r_date">📅 Tanggal</p>
            <p class="card-text mb-2 r_time">🕖 Jam</p>
        </div>
    </div>
    @endif
    @if($time === 'malam')
    <div class="card bg-dark text-white my-3">
        <img src="/img/malam.jpg" class="card-img" alt="...">
        <div class="card-img-overlay d-flex flex-column justify-content-center px-5">
            <h2 class="card-title">Selamat Malam, {{ auth()->user()->name }}</h2>
            <p class="card-text mb-2 date">📅 Tanggal</p>
            <p class="card-text mb-2 time">🕖 Jam</p>
        </div>
    </div>
    <div class="card bg-dark text-white my-3 responsive">
        <img src="/img/r_malam.jpg" class="card-img" alt="...">
        <div class="card-img-overlay d-flex flex-column justify-content-center px-3">
            <h2 class="card-title">Selamat Malam, {{ auth()->user()->name }}</h2>
            <p class="card-text mb-2 r_date">📅 Tanggal</p>
            <p class="card-text mb-2 r_time">🕖 Jam</p>
        </div>
    </div>
    @endif
@endsection