@extends('layouts.user')

@section('content')

    <div class="uni-banner-default uni-background-1">
        <div class="container ">

        </div>
    </div>

    <div id="main-content" class="site-main-content">
        <div class="uni-hơm-1-department">
            <div class="container">
                <div class="uni-home-title">
                    <h3>UPLOAD BUKTI PEMBAYARAN</h3>
                    <div class="uni-underline"></div>
                    <br><br><br>
                    <p> Silahkan melakukan pembayaran sesuai dengan total melalui : </p>
                    <br>
                    <p> - Bank BCA : 023 175 9891 a/n Amelia Widya Andini </p>
                    <p> - Bank BRI : 5590 0102 3560 532 a/n Amelia Widya Andini </p> <br>
                    <p> Dan mengupload bukti pembayaran disini .</p>
                </div>
                <div class="uni-shortcode-icon-box-1">
                    <div class="row" style="margin-bottom: 100px;">
                        <div class="col text-center">
                            <form action="{{ route('pemesanan.uploadBuktiPembayaran', $data->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="input-group form-group">
                                    <span class="input-group-addon"><i class="fa fa-file" aria-hidden="true"></i></span>
                                    <input type="file" class="form-control @error('bukti') is-invalid @enderror" id="bukti"
                                        name="bukti" value="{{ old('bukti') }}" placeholder="upload bukti pembayaran">

                                    @error('bukti')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Upload</button>
                            </form>
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
