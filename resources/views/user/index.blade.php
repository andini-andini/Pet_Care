@extends('layouts.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('plugins') }}/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('plugins') }}/datatables-responsive/css/responsive.bootstrap4.min.css">
@endsection

@section('content')
<div class="page-breadcrumb bg-white">
    <div class="row align-items-center">
        <div class="col-12">
            <div class="d-md-flex">
                <ol class="breadcrumb ms-auto">
                    <li><a class="fw-normal">Dashboard</a></li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="container-fluid">
    {{-- <div class="row mb-4">
        <div class="col-12">
            <a href="" class="btn btn-sm- btn-primary">Tambah User</a>
        </div>
    </div> --}}
    <div class="row">
        @if (Session::has('success'))
        <div class="col mb-4">
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        </div>
        @endif
        @if (Session::has('error'))
        <div class="col mb-4">
            <div class="alert alert-danger">
                {{Session::get('error')}}
            </div>
        </div>
        @endif

        <div class="col-12">
            <div class="card shadow">
                <div class="card-header">
                    Data User
                </div>
                <div class="card-body">
                    <div class="col-12">
                        {{-- <a href="{{route('user.create')}}" class="btn btn-success">Input</a> --}}
                    </div>
                    <table id="table-users" class="table table-bordered table-striped">
                        <thead>
                            <tr class="text-center">
                                <th>#</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Gender</th>
                                <th>Address</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody></tbody>


                    @foreach ($data as $user)
                        <tr class="text-center">

                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->gender }}</td>
                            <td>{{ $user->address }}</td>

                            <td>
                                <form action="{{ route('user.destroy',$user->id) }}" method="POST">
                                    <a class="btn btn-primary" href="{{ route('user.edit',$user->id) }}">Edit</a>
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="deleteUserModal" tabindex="-1" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteUserModalLabel">Konfirmasi Hapus Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Apakah kamu yakin akan menghapus data ini?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary m-1" data-bs-dismiss="modal">Close</button>
                <form id="form-delete-user" class="m-1">
                    @csrf
                    <button type="submit" class="btn btn-danger m-1">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
