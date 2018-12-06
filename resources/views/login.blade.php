@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-4 offset-4 mt-5">
			<h4 class="text-center">Login Page</h4>
			<form action="/login" method="POST" autocomplete="off">
				<input type="hidden" name="authenticity_token" value="<%= form_authenticity_token %>" />
			  <div class="form-group">
			    <label for="email">Email address:</label>
			    <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email Address">
			  </div>
			  <div class="form-group">
			    <label for="password">Password:</label>
			    <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
			  </div>
			  <div class="form-group form-check">
			    <label class="form-check-label">
			      <input class="form-check-input" name="remember" type="checkbox"> Remember me
			    </label>
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			  <a href="<%= root_url %>" class="btn btn-success">Back to Home</a>
			</form>
			<br>
			<p>
				<a href="<%= register_path %>">Click Here to Register</a>
			</p>
		</div>
	</div>
@endsection