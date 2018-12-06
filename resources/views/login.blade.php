@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-4 offset-4 mt-5">
			<h4 class="text-center">Login Page</h4>
			@include('includes.all')
			<form action="{{ route('login.post') }}" method="POST" autocomplete="off">
				{{ csrf_field() }}
			  <div class="form-group">
			    <label for="email">Email address:</label>
			    <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email Address" required>
			  </div>
			  <div class="form-group">
			    <label for="password">Password:</label>
			    <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password" required>
			  </div>
			  <div class="form-group form-check">
			    <label class="form-check-label">
			      <input class="form-check-input" name="remember" type="checkbox"> Remember me
			    </label>
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			  <a href="{{ route('landing') }}" class="btn btn-success">Back to Home</a>
			</form>
			<br>
			<p>
				<a href="{{ route('register') }}">Click Here to Register</a>
			</p>
		</div>
	</div>
@endsection