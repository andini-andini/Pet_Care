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
                                <th>Role</th>
                                <th>Edit Role</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody></tbody>


                    @foreach ($user as $usr)
                        <tr class="text-center">

                            <td>{{ $usr->id }}</td>
                            <td>{{ $usr->name }}</td>
                            <td>{{ $usr->email }}</td>
                            <td>{{ $usr->phone }}</td>
                            <td>{{ $usr->gender }}</td>
                            <td>{{ $usr->address }}</td>
                            <td>{{ $usr->role }}</td>
                            <td class="text-center">
                                @if ($usr->role)
                                    <button type="button" class="btn btn-success editStatusModal"
                                        data-bs-toggle="modal" data-bs-target="#editStatusModal"
                                        data-bs-id="{{ $usr->id }}"
                                        data-bs-status="{{ $usr->role }}">Edit</button>
                                @endif
                            </td>
                            <td>
                                <form action="{{ route('user.destroy',$usr->id) }}" method="POST">
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

<div class="modal fade" id="editStatusModal" tabindex="-1" aria-labelledby="editStatusModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editStatusModalLabel">Edit Role User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="form-edit-status" action="" method="POST">
                @method('PUT')
                @csrf
                <div class="modal-body">
                    <img src="" width="100%" alt="" id="view-bukti">
                    <div class="form-group">
                        <label class="form-check-label" for="role">Role</label>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="role" name="role">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary m-1" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary m-1">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@section('script')
    <script>
        $(".editStatusModal").on('click', function(event) {
            event.stopPropagation();
            event.stopImmediatePropagation();
            var status = $(this).attr('data-bs-status');
            var statusForm = $('#status');
            var imgBukti = $('#view-bukti');
            imgBukti.attr('src', "null")
            statusForm.attr('checked', false)

            var formEdit = $('#form-edit-status');
            var id = $(this).attr('data-bs-id');
            var img = $(this).attr('data-bs-upload');
            var route = APP_URL + "/user/update-role/" + id;
            formEdit.attr('action', route)
            if (img != null) {
                imgBukti.attr('src', APP_URL + "/storage/" + img)
            } else {
                imgBukti.attr('src', "null")
            }
            statusForm.attr('checked', role == 1 ? true : false)
        });
    </script>
@endsection

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
