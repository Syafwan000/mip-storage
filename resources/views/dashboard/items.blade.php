@extends('layouts.dashboardmain')

@section('container')
    <div class="row p-3">
        @if(auth()->user()->isAdmin == 1 || auth()->user()->isOwner == 1)
        <div class="col-md-6 ps-0">
            <a class="btn add-items shadow-none" href="/dashboard/items/create"><i class="bi bi-file-earmark-plus"></i>&nbsp;&nbsp;Tambah Barang</a>
        </div>
        <div class="col-md-6 ms-auto text-end pe-0">
            <a class="btn export shadow-none" href="/dashboard/export"><i class="bi bi-file-earmark-spreadsheet-fill"></i>&nbsp;&nbsp;Export</a>
        </div>
        @else
        <div class="col-md-6 ps-0">
          <a class="btn export shadow-none" href="/dashboard/export"><i class="bi bi-file-earmark-spreadsheet-fill"></i>&nbsp;&nbsp;Export</a>
        </div>
        @endif
    </div>

    <div class="search-form">
      <form action="/dashboard/items">
          <div class="input-group mb-4">
            <input type="text" class="form-control search-form shadow-none" placeholder="Pencarian . . ." name="search" value="{{ request('search') }}" autocomplete="off">
            <button class="btn search shadow-none px-4" type="submit"><i class="bi bi-search"></i></button>
          </div>
      </form>
    </div>

    @if(session()->has('successAddItem'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <span class="notification"><i class="bi bi-bag-plus-fill"></i>&nbsp;&nbsp;{{ session('successAddItem') }}</span>
        <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(session()->has('successDeleteItem'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <span class="notification"><i class="bi bi-bag-x-fill"></i>&nbsp;&nbsp;{{ session('successDeleteItem') }}</span>
        <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(session()->has('successUpdateItem'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <span class="notification"><i class="bi bi-bag-dash-fill"></i>&nbsp;&nbsp;{{ session('successUpdateItem') }}</span>
        <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if($items->count())
    <table class="table mx-auto text-center table-striped table-hover">
        <thead>
          <tr>
            <th scope="col" class="no">No</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Harga Barang</th>
            <th scope="col">Kategori</th>
            <th scope="col">Ditambahkan Pada</th>
            @if(auth()->user()->isAdmin == 1 || auth()->user()->isOwner == 1)
              <th scope="col" class="aksi">Aksi</th>
            @endif
          </tr>
        </thead>
        <tbody>
          @foreach ($items as $key => $item)        
          <tr>
            <th class="number">{{ $items->firstItem() + $key }}</th>
            <td>{{ $item->title }}</td>
            <td>Rp. {{ number_format($item->price) }}</td>
            <td>{{ $item->category->name }}</td>
            <td>{{ $item->created_at }}</td>
            @if(auth()->user()->isAdmin == 1 || auth()->user()->isOwner == 1)
            <td>
              <a href="/dashboard/items/{{ $item->id }}/edit" class="badge bg-warning shadow-none"><i class="bi bi-pencil-square"></i> Edit</a>
                <button class="badge bg-danger shadow-none" data-bs-toggle="modal" data-bs-target="#ModalAddItem{{ $item->id }}">
                  <i class="bi bi-trash-fill"></i>
                  Hapus
                </button>
            </td>
          </tr>
          <form action="/dashboard/items/{{ $item->id }}" method="post">
            @method('delete')
            @csrf
          <div class="modal fade" id="ModalAddItem{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Peringatan</h5>
                  <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <h6 class="mb-3">Apakah anda yakin ingin menghapus data berikut ?</h6>
                  <p class="m-0"><span class="modal-detail">Nama Barang :</span> {{ $item->title }}</p>
                  <p class="m-0"><span class="modal-detail">Harga Barang :</span> Rp. {{ number_format($item->price) }}</p>
                  <p class="m-0"><span class="modal-detail">Kategori :</span> {{ $item->category->name }}</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary shadow-none" data-bs-dismiss="modal">Tidak</button>
                    <button class="btn btn-danger shadow-none">Hapus</button>
                </div>
              </div>
            </div>
          </div>
        </form>
        @endif
        @endforeach
        </tbody>
      </table>

      @else
        <p class="text-center fs-4 none"><i class="bi bi-bar-chart-steps"></i>&nbsp;&nbsp;Tidak Ada Data</p>
      @endif

      <div class="d-flex justify-content-end">
        {{ $items->links() }}
      </div>
@endsection