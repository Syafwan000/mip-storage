@extends('layouts.dashboardmain')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <p class="m-0">Halo, {{ auth()->user()->name }}</p>
    </div>
@endsection