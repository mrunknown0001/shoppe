@extends('layouts.app')

@section('nav')
	@include('customer.includes.nav')
@endsection

@section('content')

	<div class="row">
		<div class="col-md-10 offset-1 mt-2">
			<h4>Checkout</h4>

			<p>Mode of Payment</p>
			
			<a href="#" class="btn btn-primary">COD</a>
			<a href="#" class="btn btn-primary">Paypal</a>


		</div>
	</div>

@endsection