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
                                <h3>Riwayat Pemesanan</h3>
                                <div class="uni-underline"></div>
                            </div>
                            <div class="uni-home-title" style="margin: 0 5%;">
                                <div class="table-responsive">
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
                                                <th>Aksi</th>
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
                                                        <a text="text" class="text">Verified</a>
                                                    @else
                                                        <a text="text" class="text">Unverified</a>
                                                    @endif
                                                </td>
                                                {{-- <td>{{ $p->Status }}</td> --}}

                                                {{-- <td>
                                                    <form action="/wildan" method="POST">
                                                        @csrf
                                                        <input type="hidden" value="{{$p->id}}" id="id" name="id">
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </td> --}}
                                                <td>
                                                    @if (!$p->status)
                                                        <a class="btn btn-primary"
                                                            href="{{ route('pemesanan.showUploadBuktiPembayaran', $p->id) }}">Upload</a>
                                                    @endif
                                                    {{-- <form action="{{ route('doctor.destroy',$pemesanan->id) }}" method="POST">
                                                        @csrf @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form> --}}
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
