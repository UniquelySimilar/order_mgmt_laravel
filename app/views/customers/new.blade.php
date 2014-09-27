@extends('layouts.master')

@section('content')
	<h1>Add Customer</h1>
	{{ Form::open(array('route' => 'create_customer_path', 'class' => 'form-horizontal')) }}
	
	<!-- Core page elements -->
	@include('customers.form_core')

	{{ Form::submit('Save', array('class' => 'btn btn-default')) }}

	{{ link_to_route('customers_path', 'Cancel', null, array('class' => 'btn btn-default'))}}

	{{ Form::close() }}

@stop