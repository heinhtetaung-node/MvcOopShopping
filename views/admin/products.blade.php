@extends('admin.layout')


@section('body')

	@foreach ($products as $prod)
	    <p>This is prod {{ $prod['product_name'] }}</p>
	@endforeach

@endsection

