@extends('layouts.app')

@section('content')

    <head>
        <title>Register</title>
    </head>

    <body>

        <div class="wrapper" style="background-image: url('template/login/images/bg-registration-form-1.jpg');">
            <div class="inner">
                <div class="image-holder">
                    <img src="template/login/images/registration-form-1.jpg" alt="">
                </div>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <h3>Registration Form</h3>
                    <div class="form-wrapper">
                        <input type="text" placeholder="Name" id="name"
                            class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"
                            autocomplete="name">
                        <i class="zmdi zmdi-account"></i>
                    </div>
                    @error('name')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-wrapper">
                        <input type="email" placeholder="Email Address" id="email"
                            class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" autocomplete="email">
                        <i class="zmdi zmdi-email"></i>
                    </div>
                    @error('email')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-wrapper">
                        <input type="number" placeholder="Phone" id="phone"
                            class="form-control @error('phone') is-invalid @enderror" name="phone"
                            value="{{ old('phone') }}" autocomplete="phone">
                        <i class="zmdi zmdi-phone"></i>
                    </div>
                    @error('phone')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-wrapper">
                        <select name="gender" id="gender" class="form-control @error('gender') is-invalid @enderror"
                            name="gender" value="{{ old('gender') }}" autocomplete="gender">
                            <option value="" disabled selected>Gender</option>
                            <option value="male">Male</option>
                            <option value="femal">Female</option>
                            <option value="other">Other</option>
                        </select>
                        <i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
                    </div>
                    @error('gender')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-wrapper">
                        <input type="date" name="birthday" id="birthday" placeholder="dd-mm-yyyy"
                            pattern="(?:30))|(?:(?:0[13578]|1[02])-31))/(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])/(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])"
                            class="form-control">
                        {{-- <input type="date" placeholder="Birthday" id="birthday" class="form-control"> --}}
                        {{-- <i class="zmdi zmdi-calendar"></i> --}}
                    </div>
                    @error('birthday')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-wrapper">
                        <input type="text" placeholder="Address" id="address" class="form-control" name="address"
                            autocomplete="address">
                        <i class="zmdi zmdi-home"></i>
                    </div>
                    @error('address')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-wrapper">
                        <input type="password" placeholder="password" id="password" class="form-control" name="password"
                            autocomplete="new-password">
                        <i class="zmdi zmdi-lock"></i>
                    </div>
                    @error('password')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-wrapper">
                        <input type="password" placeholder="Confirm Password" id="password_confirmation"
                            class="form-control" name="password_confirmation" autocomplete="new-password">
                        <i class="zmdi zmdi-lock"></i>
                    </div>
                    @error('password_confirmation')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <button type="submit" class="btn btn-primary">
                        Register
                        <i class="zmdi zmdi-arrow-right"></i>
                    </button>
                    <div class="text-center">
                        <br><br>
                        <p class="text-center">Already have an account? <a href="/login">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </body>

@endsection
