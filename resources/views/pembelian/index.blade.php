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
                        Data Pembelian
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
                                        <th>Kode Pembelian</th>
                                        <th>Nama User</th>
                                        <th>Barang</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>


                                @foreach ($data as $p)
                                    <tr>
                                        <td class="text-center">{{ $p->code }}</td>
                                        <td class="text-center">{{ $p->carts->first()->user->name }}</td>
                                        <td>
                                            <ul class="list-group text-left">
                                                @foreach ($p->carts as $item)
                                                    <li class="list-group-item">
                                                        <div style="display: flex; align-items: center;">
                                                            <img src="{{ asset('storage/' . $item->barang->image) }}"
                                                                alt="" width="50" class="thumbnail" style="margin: 0;">
                                                            <div style="margin-left: 10px">
                                                                <span
                                                                    style="font-weight: bold;">{{ $item->barang->name }}</span>
                                                                <br>
                                                                <small style="font-size: 12px;">Qty: <span
                                                                        style="font-weight: bold">{{ $item->qty }}</span></small>
                                                                <span> | </span>
                                                                <small style="font-size: 12px;">Total: <span
                                                                        style="font-weight: bold">Rp
                                                                        {{ $item->total }}</span></small>
                                                            </div>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td class="text-center">{{ $p->total }}</td>
                                        <td class="text-center">
                                            @if ($p->status)
                                                <button type="button" class="btn btn-success editStatusModal"
                                                    data-bs-toggle="modal" data-bs-target="#editStatusModal"
                                                    data-bs-id="{{ $p->id }}" data-bs-upload="{{ $p->bukti }}"
                                                    data-bs-status="{{ $p->status }}">Verified</button>
                                            @else
                                                <button type="button" class="btn btn-danger text-white editStatusModal"
                                                    data-bs-toggle="modal" data-bs-target="#editStatusModal"
                                                    data-bs-id="{{ $p->id }}" data-bs-upload="{{ $p->bukti }}"
                                                    data-bs-status="{{ $p->status }}">Unverified</button>
                                            @endif
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
                        <h5 class="modal-title" id="editStatusModalLabel">Edit Status Pembelian</h5>
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
                var route = APP_URL + "/pembelian/update-status/" + id;
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
