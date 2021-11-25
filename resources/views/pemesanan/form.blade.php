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
                    <div class="col-md-4">
                        <div class="uni-services-opinging-hours">
                            <div class="uni-services-opinging-hours-title">
                                <div class="icon">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                </div>
                                <h4>opening hours</h4>
                            </div>
                            <div class="uni-services-opinging-hours-content">
                                <table class="table">
                                    <tr>
                                        <td>monday</td>
                                        <td>8:00 - 17:00</td>
                                    </tr>
                                    <tr>
                                        <td>tuesday</td>
                                        <td>8:00 - 17:00</td>
                                    </tr>
                                    <tr>
                                        <td>wednesday</td>
                                        <td>8:00 - 17:00</td>
                                    </tr>
                                    <tr>
                                        <td>thursday</td>
                                        <td>8:00 - 17:00</td>
                                    </tr>
                                    <tr>
                                        <td>friday</td>
                                        <td>8:00 - 17:00</td>
                                    </tr>
                                    <tr>
                                        <td>sunday</td>
                                        <td>8:00 - 17:00</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="uni-single-department-appointment-form">

                            <div class="uni-home-title">
                                <h3>Book appoitment</h3>
                                <div class="uni-underline"></div>
                            </div>

                            <form action="{{ route('pemesanan.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group form-group input-group-lg">
                                            <span class="input-group-addon"><i class="fa fa-paw"
                                                    aria-hidden="true"></i></span>
                                            <select name="hewan" id="hewan"
                                                class="form-control @error('hewan') is-invalid @enderror" name="hewan"
                                                value="{{ old('hewan') }}" autocomplete="hewan">
                                                <option value="" disabled selected>choose your pet
                                                </option>
                                                <option value="Cat">Cat</option>
                                                <option value="Dog">Dog</option>
                                            </select>
                                        </div>
                                        @error('hewan')
                                            <small style="color: red; ">{{ $message }}</small>
                                        @enderror
                                        <div><br></div>
                                        <div class="input-group form-group input-group-lg">
                                            <span class="input-group-addon"><i class="fa fa-stethoscope"
                                                    aria-hidden="true"></i></span>
                                            <select name="service" id="service" class="form-control" name="service"
                                                value="{{ old('service') }}" autocomplete="service">
                                                <option value="" disabled selected>choose your
                                                    Service</option>
                                                @foreach ($service as $service)
                                                    <option value="{{ $service->id }}">
                                                        {{ $service->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('service')
                                            <small style="color: red; ">{{ $message }}</small>
                                        @enderror
                                        <br>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group form-group input-group-lg">
                                            <div class="input-group form-group">
                                                <span class="input-group-addon"><i class="fa fa-calendar"
                                                        aria-hidden="true"></i></span>
                                                <input type="date" name="booking" id="booking" placeholder="dd-mm-yyyy"
                                                    pattern="(?:30))|(?:(?:0[13578]|1[02])-31))/(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])/(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])"
                                                    class="form-control">
                                            </div>
                                            @error('booking')
                                                <small style="color: red">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <button type="submit" class="vk-btn vk-btn-send">send</button>
                                    </div>
                                </div>
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
