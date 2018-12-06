@extends('layouts.app')

@section('nav')
	@include('admin.includes.nav')
@endsection

@section('content')

	<div class="row">
		<div class="col-md-10 offset-1 mt-2">
			<h4>{{  $product != null ? 'Update Product' : 'Add Products'  }}</h4>
		
			<p>
				<a href="{{ route('admin.products') }}" class="btn btn-primary">Back to Products</a>
			</p>
			@include('includes.all')
			<form action="{{ route('admin.store.product') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
				{{ csrf_field() }}
				<input type="hidden" name="product_id" value="{{ $product != null ? $product->id : '' }}">
				<div class="form-group">
					<label for="name">Product Name</label>
					<input type="text" name="product_name" id="product_name" class="form-control" value="{{ $product != null ? $product->product_name : old('product_name') }}" placeholder="Enter Product Name" required>
				</div>
				<div class="form-group">
					<label for="description">Product Description</label>
					<textarea name="description" id="description" class="form-control" placeholder="Enter Product Description" required>{{ $product != null ? $product->description : old('description') }}</textarea>
				</div>
				<div class="form-group">
					<label for="product_price">Product Price</label>
					<input type="number" name="product_price" id="product_price" min="1" value="{{ $product != null ? $product->product_price : old('product_price') }}" class="form-control" placeholder="Enter Product Price" required>
				</div>
				<div class="form-group">
					<label for="quantity">Product Quantity</label>
					<input type="number" name="quantity" id="quantity" value="{{ $product != null ? $product->quantity : old('quantity') }}" min="1" class="form-control" placeholder="Enter Product Quantity">
				</div>
				<div class="form-group">
					<label for="image">Product Image</label>
					<input type="file" name="image" id="image" class="form-control" accept=".jpg">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">{{ $product != null ? 'Update Product' : 'Add Product' }}</button>
					<a href="{{ route('admin.products') }}" class="btn btn-danger">Cancel</a>
				</div>
			</form>

		</div>
	</div>
	
@endsection