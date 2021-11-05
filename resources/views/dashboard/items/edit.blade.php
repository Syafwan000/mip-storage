@extends('layouts.dashboardmain')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data Barang</h1>
    </div>
    <form action="/dashboard/items/{{ $item->id }}" method="post" class="mt-4">
        @method('put')
        @csrf
        <label class="form-label">Nama Barang</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon-i1"><i class="bi bi-box-seam"></i></span>
            <input type="text" class="form-control nama-barang shadow-none @error('title') is-invalid @enderror" name="title" placeholder="Nama Barang" value="{{ old('title', $item->title) }}" aria-label="Nama Barang" required>
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <label class="form-label">Harga Barang</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon-i2"><i class="bi bi-tag-fill"></i></span>
            <input type="number" class="form-control harga-barang shadow-none @error('price') is-invalid @enderror" name="price" placeholder="Harga Barang" value="{{ old('price', $item->price) }}" aria-label="Harga Barang" >
            @error('price')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <label class="form-label">Kategori</label>
        <select class="form-select shadow-none kategori" name="category_id" required>
            @foreach ($categories as $category)
                @if (old('category_id', $item->category_id) == $category->id)
                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                @else
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endif
            @endforeach
        </select>
        <button class="btn btn-warning shadow-none mt-3 me-3" type="submit">Ubah Data</button>
        <a href="/dashboard/items" class="btn btn-danger shadow-none mt-3 back-to-items">Kembali</a>
    </form>
@endsection