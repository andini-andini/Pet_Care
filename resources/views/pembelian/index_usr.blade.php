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
                                <h3>Purchase History</h3>
                                <div class="uni-underline"></div>
                            </div>
                            <div class="uni-home-title" style="margin: 0 5%;">
                                <div class="table-responsive">
                                    <table id="table-users" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Order Code</th>
                                                <th class="text-center">Items</th>
                                                <th class="text-center">Status</th>
                                                <th class="text-center">Total</th>
                                                <th class="text-center">Action</th>
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
                                                                                {{ number_format($item->total, 0, ',', '.') }}</span></small>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </td>
                                                <td>
                                                    @if ($pembelian->status)
                                                        <p style="color: green">Verified</p>
                                                    @else
                                                        <p style="color: red">Unverified</p>
                                                    @endif
                                                </td>
                                                <td>Rp {{ number_format($pembelian->total, 0, ',', '.') }}</td>
                                                <td>
                                                    @if (!$pembelian->bukti)
                                                        <a class="btn btn-primary"
                                                            href="{{ route('pembelian.showUploadBuktiPembayaran', $pembelian->id) }}">Upload</a>
                                                    @else
                                                        @if (!$pembelian->status)
                                                            <p>Verification Process</p>
                                                        @else
                                                            <a class="btn btn-success"
                                                                href="{{ route('pembelian.cetakResi', $pembelian->id) }}">Print
                                                                Receipt</a>
                                                            {{-- <button class="btn btn-success"
                                                                href="{{ route('pembelian.cetakResi', $pembelian->id) }}">Cetak
                                                                Struk</button> --}}
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
