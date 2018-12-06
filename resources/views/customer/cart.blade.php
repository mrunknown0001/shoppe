@extends('layouts.app')

@section('nav')
	@include('customer.includes.nav')
@endsection

@section('content')

	<div class="row">
		<div class="col-md-10 offset-1 mt-2">
			<h4>My Cart</h4>
			
			<h5>Total: {{ $total != 0 ? $total : '' }}</h5>
			<h5>Orders: </h5>
				
			@if(count($orders) > 0)
				<ul>
					@foreach($orders as $o)
						<li>{{ ucwords($o->product->product_name) }} - {{ $o->total }}</li>
					@endforeach
				</ul>

				<p>
					<a href="{{ route('customer.checkout') }}" class="btn btn-primary">Checkout</a>
				</p>
			@else
				<p class="text-center">No Product on Cart</p>
			@endif


		</div>
	</div>

@endsection