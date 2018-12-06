@extends('layouts.app')

@section('nav')
	@include('admin.includes.nav')
@endsection

@section('content')

	<div class="row">
		<div class="col-md-10 offset-1 mt-2">
			<h4>Admin Dashboard</h4>
			<div class="row">
				<div class="col-md-4">
					<div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
					  <div class="card-header">Products</div>
					  <div class="card-body">
					    <h5 class="card-title"></h5>
					    <p class="card-text">
					    	<a href="" class="btn btn-primary btn-block">Link</a>
					    </p>
					  </div>
					</div>				
				</div>

				<div class="col-md-4">
					<div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
					  <div class="card-header">Orders</div>
					  <div class="card-body">
					    <h5 class="card-title"></h5>
					    <p class="card-text">
					    	<a href="" class="btn btn-primary btn-block">Link</a>
					    </p>
					  </div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
					  <div class="card-header">Customers</div>
					  <div class="card-body">
					    <h5 class="card-title">
					    </h5>
					    <p class="card-text">
					    	<a href="" class="btn btn-primary btn-block">Link</a>
					    </p>
					  </div>
					</div>
				</div>

			</div>





		</div>
	</div>
	
@endsection