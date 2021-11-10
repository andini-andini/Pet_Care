@extends('layouts.admin')

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
                    Edit Status
                </div>
                <div class="card-body">
                    <form action="{{route('pemesanan.update', $pemesanan->id)}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group mb-3">
                            <label>Status</label>
                            <select name="status" id="status" class="form-control @error('status') is-invalid @enderror" value="{{ $pemesanan->status}}"
                                name="status" value="" autocomplete="status">
                                <option value="" disabled selected>choose Satus</option>
                                <option value="0">Unverified</option>
                                <option value="1">Verified</option>
                            </select>

                            @error('status')
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
