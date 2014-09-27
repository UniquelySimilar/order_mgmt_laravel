@extends('layouts.master')

@section('content')
	<h1>Customer List</h1>
	{{ link_to_route('new_customer_path', 'Add Customer', null, array('class' => 'btn btn-default valign_middle')) }}

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
				<td>{{ link_to_route('show_customer_path', 'Show', array($customer['id'])) }}</td>
				<td>{{ link_to_route('edit_customer_path', 'Edit', array($customer['id'])) }}</td>
				<td>{{ link_to_route('delete_customer_path',
					'Delete', array($customer['id']), array('onclick' => 'return confirm("Delete this Customer?")')) }}</td>
			</tr>
		@endforeach
	</table>
@stop
