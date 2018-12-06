@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-4 offset-4 mt-5">
			<h4 class="text-center">Registration</h4>
			@include('includes.all')
			<form action="{{ route('register.post') }}" method="POST" autocomplete="off">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="firstname">Firstname</label>
					<input type="text" name="firstname" id="firstname" class="form-control" placeholder="Enter Firstname" required>
				</div>
				<div class="form-group">
					<label for="lastname">Lastname</label>
					<input type="text" name="lastname" id="lastname" class="form-control" placeholder="Enter Lastname" required="">
				</div>
			  <div class="form-group">
			    <label for="email">Email address:</label>
			    <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email Address">
			  </div>
			  <div class="form-group">
			    <label for="mobile_number">Mobile Number:</label>
			    <input type="text" name="mobile_number" class="form-control" id="mobile_number" placeholder="Enter Mobile Number" required>
			  </div>
			  <div class="form-group">
			    <label for="password">Password:</label>
			    <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
			  </div>
			  <div class="form-group">
			    <label for="password">Cofirm Password:</label>
			    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Re-Enter Password">
			  </div>
			  <button type="submit" class="btn btn-success">Register</button>
			  <a href="{{ route('landing') }}" class="btn btn-success">Back to Home</a>
			</form>
			<br>
			<p>
				<a href="{{ route('login') }}">Click Here to Login</a>
			</p>
		</div>
	</div>
@endsection