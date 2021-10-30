@extends('layouts.dash')

@section('container')
    <form action="/logout" method="post">
        @csrf
        <button>Logout</button>
    </form>
@endsection