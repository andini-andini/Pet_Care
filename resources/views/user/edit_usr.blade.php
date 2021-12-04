<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
    {{-- @foreach ($user as $usr) --}}
<div class="row gutters">
<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
		<div class="account-settings">
			<div class="user-profile">
				<div class="user-avatar">
					<img src={{asset('storage/'.Auth::user()->image)}} alt="Maxwell Admin">
				</div>
				<h5 class="user-name">{{ Auth::user()->name }}</h5>
				<h6 class="user-email">{{ Auth::user()->email }}</h6>
			</div>
			{{-- <div class="about">
				<h5>About</h5>
				<p>I'm Yuki. Full Stack Designer I enjoy creating user-centric, delightful and human experiences.</p>
			</div> --}}
		</div>
	</div>
</div>
</div>
<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
        <form action="{{route('user.update', $user->id)}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h6 class="mb-2 text-primary">Personal Details</h6>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label><strong>Full Name</strong></label>
					<input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{$user->name}}" placeholder="Enter full name">

                    @error('name')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="email"><strong>Email</strong></label>
					<input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{$user->email}}" placeholder="Enter email address">

                    @error('email')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="phone"><strong>Phone</strong></label>
					<input type="number" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{$user->phone}}" placeholder="Enter phone number">

                    @error('phone')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
                    <label><strong>Gender</strong></label>
                    <select name="gender" id="gender" class="form-control @error('gender') is-invalid @enderror"
                            name="gender" autocomplete="gender">
                            <option value="{{$user->gender}}" disabled selected>{{$user->gender}}</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                        @error('gender')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
				</div>
			</div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
                    <label><strong>Birthday</strong></label>
					<input type="date" name="birthday" id="birthday" value="{{$user->birthday}}" placeholder="dd-mm-yyyy"
                            pattern="(?:30))|(?:(?:0[13578]|1[02])-31))/(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])/(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])"
                            class="form-control">
				</div>
			</div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="address"><strong>Address</strong></label>
					<input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{$user->address}}" placeholder="Enter Address">

                    @error('address')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
				</div>
			</div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="image"><strong>Image</strong></label>
					<input type="file" class="form-control" required="required" id="image" name="image" value="{{$user->image}}" >
                    <img width="150px" src="{{asset('storage/'.$user->image)}}">
				</div>
			</div>
		</div>
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="text-right">
					<a type="button" id="cancel" name="cancel" class="btn btn-secondary" href="{{route('user.index')}}">Cancel</a>
					<button type="submit" class="btn btn-primary">Update</button>
				</div>
			</div>
		</div>
        </form>
	</div>
</div>
</div>
</div>
{{-- @endforeach --}}
</div>

<style type="text/css">
body {
    margin: 0;
    padding-top: 40px;
    color: #2e323c;
    background: #f5f6fa;
    position: relative;
    height: 100%;
}
.account-settings .user-profile {
    margin: 0 0 1rem 0;
    padding-bottom: 1rem;
    text-align: center;
}
.account-settings .user-profile .user-avatar {
    margin: 0 0 1rem 0;
}
.account-settings .user-profile .user-avatar img {
    width: 90px;
    height: 90px;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    border-radius: 100px;
}
.account-settings .user-profile h5.user-name {
    margin: 0 0 0.5rem 0;
}
.account-settings .user-profile h6.user-email {
    margin: 0;
    font-size: 0.8rem;
    font-weight: 400;
    color: #9fa8b9;
}
.account-settings .about {
    margin: 2rem 0 0 0;
    text-align: center;
}
.account-settings .about h5 {
    margin: 0 0 15px 0;
    color: #007ae1;
}
.account-settings .about p {
    font-size: 0.825rem;
}
.form-control {
    border: 1px solid #cfd1d8;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    font-size: .825rem;
    background: #ffffff;
    color: #2e323c;
}

.card {
    background: #ffffff;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 0;
    margin-bottom: 1rem;
}


</style>

<script type="text/javascript">

</script>
</body>
</html>
