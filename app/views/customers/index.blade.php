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
			<th>HOME PHONE</th>
			<th>WORK PHONE</th>
			<th>EMAIL</th>
		</tr>
		@foreach ( $customers as $customer)
			<tr>
				<td><?= $customer['name'] ?></td>
				<td><?= $customer['street'] ?></td>
				<td><?= $customer['city'] ?></td>
				<td><?= $customer['state'] ?></td>
				<td><?= $customer['zipcode'] ?></td>
				<td><?= $customer['home_phone'] ?></td>
				<td><?= $customer['work_phone'] ?></td>
				<td><?= $customer['email'] ?></td>
			</tr>
		@endforeach
	</table>
@stop
