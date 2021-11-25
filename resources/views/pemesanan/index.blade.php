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
                        {{ Session::get('success') }}
                    </div>
                </div>
            @endif
            @if (Session::has('error'))
                <div class="col mb-4">
                    <div class="alert alert-danger">
                        {{ Session::get('error') }}
                    </div>
                </div>
            @endif

            <div class="col-12">
                <div class="card shadow">
                    <div class="card-header">
                        Data Pemesanan
                    </div>
                    <div class="container-fluid">
                        <div class="row mb-4">
                            <div class="col-12">
                                {{-- <a href="{{route('service.create')}}" class="btn btn-success">Input</a> --}}
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="table-users" class="table table-bordered table-striped">
                                <thead>
                                    <tr class="text-center">
                                        <th>Kode Pemesanan</th>
                                        <th>Nama User</th>
                                        <th>Hewan</th>
                                        <th>Service</th>
                                        <th>Harga</th>
                                        <th>Booking</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>


                                @foreach ($pemesanan as $p)
                                    <tr class="text-center">

                                        <td>{{ $p->code }}</td>
                                        <td>{{ $p->user->name }}</td>
                                        <td>{{ $p->hewan }}</td>
                                        <td>{{ $p->service->name }}</td>
                                        <td>Rp. {{ $p->service->price }}</td>
                                        <td>{{ $p->booking }}</td>
                                        <td>
                                            @if ($p->status)
                                                <button type="button" class="btn btn-success editStatusModal"
                                                    data-bs-toggle="modal" data-bs-target="#editStatusModal"
                                                    data-bs-id="{{ $p->id }}"
                                                    data-bs-upload="{{ $p->upload_bukti }}"
                                                    data-bs-status="{{ $p->status }}">Verified</button>
                                            @else
                                                <button type="button" class="btn btn-danger text-white editStatusModal"
                                                    data-bs-toggle="modal" data-bs-target="#editStatusModal"
                                                    data-bs-id="{{ $p->id }}"
                                                    data-bs-upload="{{ $p->upload_bukti }}"
                                                    data-bs-status="{{ $p->status }}">Unverified</button>
                                            @endif
                                        </td>
                                        {{-- <td>{{ $pemesanan->Status }}</td> --}}

                                        {{-- <td> --}}
                                        {{-- <a class="btn btn-primary" href="{{ route('pemesanan.edit',$pemesanan->id) }}">Edit</a> --}}
                                        {{-- <form action="/wildan" method="POST">
                                    @csrf
                                    <input type="hidden" value="{{$pemesanan->id}}" id="id" name="id">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form> --}}
                                        {{-- </td> --}}
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
                        <h5 class="modal-title" id="editStatusModalLabel">Edit Status Reservasi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="form-edit-status" action="" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="modal-body">
                            <img src="" width="100%" alt="" id="view-bukti">
                            <div class="form-group">
                                <label class="form-check-label" for="status">Verifikasi</label>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="status" name="status">
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

    @endsection

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
                var route = APP_URL + "/pemesanan/update-status/" + id;
                formEdit.attr('action', route)
                if (img != null) {
                    imgBukti.attr('src', APP_URL + "/storage/" + img)
                } else {
                    imgBukti.attr('src', "null")
                }
                statusForm.attr('checked', status == 1 ? true : false)
            });
        </script>
    @endsection
