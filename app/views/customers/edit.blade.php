@extends('layouts.master')

@section('content')
	<h1>Edit Customer</h1>
	{{ Form::model($customer,
		array('method' => 'PUT', 'route' => array('update_customer_path', $customer->id), 'class' => 'form-horizontal')) }}
	
	<!-- Core page elements -->
	@include('customers.form_core')

	{{ Form::submit('Save', array('class' => 'btn btn-default')) }}

	{{ link_to_route('customers_path', 'Cancel', null, array('class' => 'btn btn-default'))}}

	{{ Form::close() }}

@stop