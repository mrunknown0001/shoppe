@extends('layouts.app')

@section('nav')
	@include('customer.includes.nav')
@endsection

@section('content')

	<div class="row">
		<div class="col-md-10 offset-1 mt-2">
			<h4>Product View</h4>

		</div>

		<div class="col-md-4 offset-4">
			<img src="{{ asset('/uploads/images/'. $product->image) }}" class="img-responsive img-thumbnail">
			<p>
				Name: {{ ucwords($product->product_name) }}
				<br>
				Price: {{ $product->product_price }}
				<br>
				Quantity: {{ $product->quantity }}
				<br>
				Description: {{ $product->description }}
				<br>
				<form action="{{ route('customer.add.to.cart.post') }}" method="POST">
					{{ csrf_field() }}
					<input type="hidden" name="product_id" value="{{ $product->id }}">
					<div class="form-group">
						<label>Enter Quantity</label>
						<input type="number" name="quantity" id="quantity" class="form-control" placeholder="Enter Quantity" required>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success">Add to Cart</button>
					</div>
				</form>
			</p>
		</div>

	</div>

@endsection