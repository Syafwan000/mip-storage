@extends('layouts.dashboardmain')

@section('container')
    <div class="row p-3">
        <div class="col-md-6 ps-0">
            <a class="btn add-items shadow-none" href="/dashboard/items/create"><i class="bi bi-file-earmark-plus"></i>&nbsp;&nbsp;Tambah Barang</a>
        </div>
        <div class="col-md-6 ms-auto text-end pe-0">
            <a class="btn export shadow-none" href="#"><i class="bi bi-file-earmark-spreadsheet-fill"></i>&nbsp;&nbsp;Export</a>
        </div>
    </div>

    <table class="table mx-auto text-center table-striped table-hover">
        <thead>
          <tr>
            <th scope="col" class="no">No</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Harga Barang</th>
            <th scope="col">Kategori</th>
            <th scope="col">Ditambahkan Oleh</th>
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
            <td>{{ $item->user->name }}</td>
            <td>
              <a href="#" class="badge bg-warning shadow-none"><i class="bi bi-pencil-square"></i> Edit</a>
              <form action="/dashboard/items/{{ $item->id }}" method="post">
                @method('delete')
                @csrf
                <button class="badge bg-danger shadow-none" type="submit"><i class="bi bi-trash-fill"></i> Delete</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

      <div class="d-flex justify-content-end">
        {{ $items->links() }}
      </div>
@endsection