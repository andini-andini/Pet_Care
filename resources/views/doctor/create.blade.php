@extends('layouts.admin')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css" integrity="sha512-kq3FES+RuuGoBW3a9R2ELYKRywUEQv0wvPTItv3DSGqjpbNtGWVdvT8qwdKkqvPzT93jp8tSF4+oN4IeTEIlQA==" crossorigin="anonymous" />
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
    <div class="row mb-4">
        <div class="col-12">
            <a href="{{route('doctor.index')}}" class="btn btn-sm- btn-outline-secondary">Kembali</a>
        </div>
    </div>

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

        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header">
                    Tambah Dokter
                </div>
                <div class="card-body">
                    <form action="{{route('doctor.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label>SIP</label>
                            <input type="text" class="form-control @error('sip') is-invalid @enderror" id="sip" name="sip" value="{{ old('sip')}}" placeholder="123/abcd/456/2021">

                            @error('sip')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label>Nama</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name')}}" placeholder="Enter name">

                            @error('name')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label>Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email')}}" placeholder="Enter Email">

                            @error('email')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label>No Telepon</label>
                            <input type="number" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone')}}" placeholder="Enter Phone">

                            @error('phone')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label>Alamat</label>
                            <input type="text" class="form-control @error('address') is-invalid @enderror" id="addres" name="address" value="{{ old('address')}}" placeholder="Enter Address">

                            @error('address')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" accept="image/*">
                            @error('image')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
<script>
    $("#fasilitas").select2({
        placeholder: "Pilih fasilitas"
        , tags: true
        , allowClear: true
        , theme: "bootstrap"
        , tokenSeparators: ["/", ",", ";", " "]
        , createTag: function() {
            return null;
        }
    , });
</script>
@endsection
