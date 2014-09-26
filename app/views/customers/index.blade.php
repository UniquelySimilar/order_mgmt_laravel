@extends('layouts.master')

@section('content')
	<h1>Customer list</h1>
	<a class="btn btn-default valign_middle" href="{{ route('new_customer_path') }}">Add Customer</a>

	<table class='table'>
		<tr>
			<th>NAME</th>
			<th>STREET</th>
			<th>CITY</th>
			<th>STATE</th>
			<th>ZIP CODE</th>
			<th>EMAIL</th>
			<th></th>
			<th></th>
			<th></th>
		</tr>
		@foreach ( $customers as $customer)
			<tr>
				<td><?= $customer['name'] ?></td>
				<td><?= $customer['street'] ?></td>
				<td><?= $customer['city'] ?></td>
				<td><?= $customer['state'] ?></td>
				<td><?= $customer['zipcode'] ?></td>
				<td><?= $customer['email'] ?></td>
				<td><a href="{{ route('show_customer_path', array($customer['id'])) }}">Show</a></td>
				<td><a href="{{ route('edit_customer_path', array($customer['id'])) }}">Edit</a></td>
				<td></td>
			</tr>
		@endforeach
	</table>
@stop
