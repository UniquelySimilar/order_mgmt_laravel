@extends('layouts.master')

@section('content')
	<h1>Add Customer</h1>
	{{ Form::open(array('route' => 'create_customer_path', 'class' => 'form-horizontal')) }}
	
	<!-- Core page elements -->
	@include('customers.form_core')

	{{ Form::submit('Save') }}

	<a class="btn btn-default valign_middle" href="{{ route('customers_path') }}">Cancel</a>

	{{ Form::close() }}

@stop