@extends('layouts.app')

@section('nav')
	@include('admin.includes.nav')
@endsection

@section('content')

	<div class="row">
		<div class="col-md-10 offset-1 mt-2">
			<h4>Products</h4>
		
			<p>
				<a href="{{ route('admin.add.product') }}" class="btn btn-primary">Add Product</a>
			</p>
			@include('includes.all')
			@if(count($products) > 0)
				<div class="row">
					@foreach($products as $p)
						<div class="col-md-4">
							<img src="{{ asset('/uploads/images/'. $p->image) }}" class="img-responsive img-thumbnail">
							<p>
								Name: {{ ucwords($p->product_name) }}
								<br>
								Price: {{ $p->product_price }}
								<br>
								Quantity: {{ $p->quantity }}
								<br>
								<a href="" class="btn btn-warning btn-sm">Update</a> 
								<a href="{{ route('admin.delete.product', ['id' => $p->id]) }}" class="btn btn-danger btn-sm">Delete</a>
							</p>
						</div>
					@endforeach
				</div>
				<div class="text-center">
					{{ $products->links() }}
				</div>
			@else
				<p class="text-center">No Product Available!</p>
			@endif

		</div>
	</div>
	
@endsection