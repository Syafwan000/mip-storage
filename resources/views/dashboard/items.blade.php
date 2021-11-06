@extends('layouts.dashboardmain')

@section('container')
    <div class="row p-3">
        <div class="col-md-6 ps-0">
            <a class="btn add-items shadow-none" href="/dashboard/items/create"><i class="bi bi-file-earmark-plus"></i>&nbsp;&nbsp;Tambah Barang</a>
        </div>
        <div class="col-md-6 ms-auto text-end pe-0">
            <a class="btn export shadow-none" href="/dashboard/export"><i class="bi bi-file-earmark-spreadsheet-fill"></i>&nbsp;&nbsp;Export</a>
        </div>
    </div>

    @if(session()->has('successAddItem'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="bi bi-bag-plus-fill"></i>&nbsp;&nbsp;{{ session('successAddItem') }}
        <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(session()->has('successDeleteItem'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="bi bi-bag-x-fill"></i>&nbsp;&nbsp;{{ session('successDeleteItem') }}
        <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(session()->has('successUpdateItem'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="bi bi-bag-dash-fill"></i>&nbsp;&nbsp;{{ session('successUpdateItem') }}
        <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <table class="table mx-auto text-center table-striped table-hover">
        <thead>
          <tr>
            <th scope="col" class="no">No</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Harga Barang</th>
            <th scope="col">Kategori</th>
            <th scope="col">Ditambahkan Pada</th>
            <th scope="col" class="aksi">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($items as $item)        
          <tr>
            <th class="number">{{ $loop->iteration }}</th>
            <td>{{ $item->title }}</td>
            <td>Rp. {{ number_format($item->price) }}</td>
            <td>{{ $item->category->name }}</td>
            <td>{{ $item->created_at }}</td>
            <td>
              <a href="/dashboard/items/{{ $item->id }}/edit" class="badge bg-warning shadow-none"><i class="bi bi-pencil-square"></i> Edit</a>
                <button class="badge bg-danger shadow-none" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                  <i class="bi bi-trash-fill"></i>
                  Hapus
                </button>
            </td>
          </tr>
          <!-- Modal -->
          <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Peringatan</h5>
                  <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  Apakah anda yakin ingin menghapusnya ?
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary shadow-none" data-bs-dismiss="modal">Tidak</button>
                  <form action="/dashboard/items/{{ $item->id }}" method="post">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger shadow-none">Hapus</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </tbody>
      </table>

      <div class="d-flex justify-content-end">
        {{ $items->links() }}
      </div>
@endsection