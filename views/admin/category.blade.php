@extends('admin.layout')


@section('body')

	@foreach ($categories as $cat)
		{{ $cat }}
	@endforeach


@endsection