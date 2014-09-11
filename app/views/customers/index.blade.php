@extends('layouts.master')

@section('content')
	<h1>Customer list</h1>
	<table class='table'>
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
