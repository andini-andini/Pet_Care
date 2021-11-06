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
            <form method="POST" id="register-form" action="{{ route('register') }}">
                @csrf
                <h3>Registration Form</h3>
                <div class="form-wrapper">
                    <input type="text" placeholder="Username" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">
                    <i class="zmdi zmdi-account"></i>
                </div>
                <div class="form-wrapper">
                    <input type="email" placeholder="Email Address" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    <i class="zmdi zmdi-email"></i>
                </div>
                <div class="form-wrapper">
                    <input type="number" placeholder="Phone" id="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">
                    <i class="zmdi zmdi-phone"></i>
                </div>
                {{-- <div class="form-wrapper">
                    <input type="number" placeholder="Phone" id="phone" class="form-control">
                    <input type="number" name="phone" id="phone" placeholder="Your Phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">
                    <i class="zmdi zmdi-phone"></i>
                </div> --}}
                <div class="form-wrapper">
                    <select name="gender" id="gender" class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" required autocomplete="gender">
                        <option value="" disabled selected>Gender</option>
                        <option value="male">Male</option>
                        <option value="femal">Female</option>
                        <option value="other">Other</option>
                    </select>
                    <i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
                </div>
                <div class="form-wrapper">
                    <input type="text" name="input" id="birthday" placeholder="dd-mm-yyyy" required pattern="(?:30))|(?:(?:0[13578]|1[02])-31))/(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])/(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])" class="form-control">
                    {{-- <input type="date" placeholder="Birthday" id="birthday" class="form-control"> --}}
                    <i class="zmdi zmdi-calendar"></i>
                </div>
                <div class="form-wrapper">
                    <input type="text" placeholder="Address" id="address" class="form-control" name="address" required autocomplete="address">
                    <i class="zmdi zmdi-home"></i>
                </div>
                <div class="form-wrapper">
                    <input type="password" placeholder="Password" id="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    <i class="zmdi zmdi-lock"></i>
                </div>
                <div class="form-wrapper">
                    <input type="password" placeholder="Confirm Password" id="password_confirmation" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    <i class="zmdi zmdi-lock"></i>
                </div>
                {{-- <button id="register" type="submit">Register
                    <i class="zmdi zmdi-arrow-right"></i>
                </button> --}}
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                    <i class="zmdi zmdi-arrow-right"></i>
                </button>
                <div align='center'>
                    <br><br>
                    <p class="text-center">Already have an account? <a href="/login">Login</a></p>
                </div>
            </form>
        </div>
    </div>

</body>
@endsection
</html>


{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
