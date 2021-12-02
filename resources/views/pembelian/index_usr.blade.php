@extends('layouts.user')

@section('content')

    <div class="uni-banner-default uni-background-1">
        <div class="container ">

        </div>
    </div>
    <div>
        <br><br><br><br><br><br><br><br>
    </div>
    <!--OPENING HOURS AND BOOK APPOINTMENT-->
    <div class="uni-home-opening-book">
        <div class="container">
            <div class="uni-home-opening-book-content">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="uni-single-department-appointment-form">
                            <div class="uni-home-title">
                                <h3>Riwayat Pembelian</h3>
                                <div class="uni-underline"></div>
                            </div>
                            <div class="uni-home-title" style="margin: 0 5%;">
                                <div class="table-responsive">
                                    <table id="table-users" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Kode Pemesanan</th>
                                                <th class="text-center">Barang</th>
                                                <th class="text-center">Status</th>
                                                <th class="text-center">Total</th>
                                                <th class="text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                        @foreach ($data as $pembelian)
                                            <tr>

                                                <td>{{ $pembelian->code }}</td>
                                                <td>
                                                    <ul class="list-group text-left">
                                                        @foreach ($pembelian->carts as $item)
                                                            <li class="list-group-item">
                                                                <div style="display: flex; align-items: center;">
                                                                    <img src="{{ asset('storage/' . $item->barang->image) }}"
                                                                        alt="" width="50" class="thumbnail"
                                                                        style="margin: 0;">
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
                                                <td>
                                                    @if ($pembelian->status)
                                                        <button class="btn btn-success">Verified</button>
                                                    @else
                                                        <button class="btn btn-danger">Unverified</button>
                                                    @endif
                                                </td>
                                                <td>Rp {{ $pembelian->total }}</td>
                                                <td>
                                                    @if (!$pembelian->bukti)
                                                        <a class="btn btn-primary"
                                                            href="{{ route('pembelian.showUploadBuktiPembayaran', $pembelian->id) }}">Upload</a>
                                                    @else
                                                        @if (!$pembelian->status)
                                                            <p>Proses verifikasi</p>
                                                        @endif
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
            </div>
        </div>
    </div>

    <div>
        <br><br>
    </div>

@endsection
