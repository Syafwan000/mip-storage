@extends('layouts.dashboardmain')

@section('container')
    <div class="row p-3">
        <div class="col-md-6">
            <a class="btn add-items" href="#"><i class="bi bi-file-earmark-plus"></i>&nbsp;&nbsp;Tambah Barang</a>
        </div>
        <div class="col-md-6 ms-auto text-end">
            <a class="btn export" href="#"><i class="bi bi-file-earmark-spreadsheet-fill"></i>&nbsp;&nbsp;Export</a>
        </div>
    </div>

    <table class="table mx-auto">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Harga Barang</th>
            <th scope="col">Kategori</th>
            <th scope="col">Ditambahkan oleh</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($items as $item)        
          <tr>
            <th>{{ $loop->iteration }}</th>
            <td>{{ $item->title }}</td>
            <td>{{ $item->price }}</td>
            <td>{{ $item->category->name }}</td>
            <td>{{ $item->user->name }}</td>
            <td>
              <a href="#" class="btn">Edit</a>
              <a href="#" class="btn">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
@endsection