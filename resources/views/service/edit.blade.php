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
            <a href="{{route('service.index')}}" class="btn btn-sm- btn-outline-secondary">Kembali</a>
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
                    Edit layanan
                </div>
                <div class="card-body">
                    <form action="{{route('service.update', $service->id)}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group mb-3">
                            <label>Nama</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{$service->name}}" placeholder="Enter name">

                            @error('name')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label>Harga</label>
                            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{$service->price}}" placeholder="Enter Price">

                            @error('price')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control" required="required" name="image" id="image" value="{{$service->image}}"><br>
                            <img width="150px" src="{{asset('storage/'.$service->image)}}">
                            {{-- <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" accept="image/*">
                            @error('image')
                            <small class="text-danger">{{$message}}</small>
                            @enderror --}}
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
