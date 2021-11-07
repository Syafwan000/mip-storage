@extends('layouts.dashboardmain')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><i class="bi bi-person-check-fill"></i> Admin</h1>
    </div>

    @if(session()->has('successAddAdmin'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <span class="notification"><i class="bi bi-person-check-fill"></i>&nbsp;&nbsp;{{ session('successAddAdmin') }}</span>
        <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(session()->has('successRemoveAdmin'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <span class="notification"><i class="bi bi-person-x-fill"></i>&nbsp;&nbsp;{{ session('successRemoveAdmin') }}</span>
        <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if($users->count())
    <table class="table mx-auto text-center table-striped table-hover">
        <thead>
          <tr>
            <th scope="col" class="no">No</th>
            <th scope="col">Nama User</th>
            <th scope="col">Status Admin</th>
            <th scope="col">Bergabung Sejak</th>
            <th scope="col" class="aksi">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)        
          <tr>
            <th class="number">{{ $loop->iteration }}</th>
            <td>{{ $user->name }}</td>
            <td>
                @if($user->isAdmin == 0)
                    {{ ($user->isAdmin == 0) ? 'Bukan Admin' : 'Admin' }}
                @else
                    {{ ($user->isAdmin == 0) ? 'Bukan Admin' : 'Admin' }}
                @endif
            </td>
            <td>{{ $user->created_at }}</td>
            <td>
                @if($user->isAdmin == 0)
                    <button class="badge bg-success shadow-none" data-bs-toggle="modal" data-bs-target="#ModalAddAdmin{{ $user->id }}">
                        <i class="bi bi-plus-circle"></i>
                        Add Admin
                    </button>
                @else
                    <button class="badge bg-danger shadow-none" data-bs-toggle="modal" data-bs-target="#ModalRemoveAdmin{{ $user->id }}">
                        <i class="bi bi-trash-fill"></i>
                        Remove Admin
                    </button>
                @endif
            </td>
          </tr>
          <form action="/dashboard/admin/{{ $user->id }}" method="post">
            @method('put')
            @csrf
          <div class="modal fade" id="ModalAddAdmin{{ $user->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Informasi</h5>
                  <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <h6 class="mb-3">Apakah anda yakin ingin menjadikan admin dengan user berikut ?</h6>
                  <p class="m-0"><span class="modal-detail">Nama User :</span> {{ $user->name }}</p>
                  <p class="m-0"><span class="modal-detail">Bergabung Sejak :</span> {{ $user->created_at }}</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary shadow-none" data-bs-dismiss="modal">Tidak</button>
                    <input type="hidden" name="notAdmin" value="true">
                    <button class="btn btn-success shadow-none">Tambah</button>
                </div>
              </div>
            </div>
          </div>
        </form>
        <form action="/dashboard/admin/{{ $user->id }}" method="post">
          @method('put')
          @csrf
          <div class="modal fade" id="ModalRemoveAdmin{{ $user->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Informasi</h5>
                  <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <h6 class="mb-3">Apakah anda yakin ingin mencopot admin dengan user berikut ?</h6>
                  <p class="m-0"><span class="modal-detail">Nama User :</span> {{ $user->name }}</p>
                  <p class="m-0"><span class="modal-detail">Bergabung Sejak :</span> {{ $user->created_at }}</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary shadow-none" data-bs-dismiss="modal">Tidak</button>
                    <input type="hidden" name="Admin" value="true">
                    <button class="btn btn-danger shadow-none">Hapus</button>
                </div>
              </div>
            </div>
          </div>
        </form>
          @endforeach
        </tbody>
      </table>

      @else
        <p class="text-center fs-4 none"><i class="bi bi-bar-chart-steps"></i>&nbsp;&nbsp;Tidak Ada Data</p>
      @endif

      <div class="d-flex justify-content-end">
        {{ $users->links() }}
      </div>
@endsection