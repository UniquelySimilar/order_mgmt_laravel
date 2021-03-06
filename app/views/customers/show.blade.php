@extends('layouts.master')

@section('content')

<div class="row">
	<div class="col-md-6">
		<h1>Customer Detail</h1>
		<table class="table table-bordered">
			<tr>
				<td class="field-label col-md-2 active text-right"><label>NAME</label></td>
				<td class="col-md-4"><?= $customer['name'] ?></td>
			</tr>
			<tr>
				<td class="field-label col-md-2 active text-right"><label>STREET</label></td>
				<td class="col-md-4"><?= $customer['street'] ?></td>
			</tr>
			<tr>
				<td class="field-label col-md-2 active text-right"><label>CITY</label></td>
				<td class="col-md-4"><?= $customer['city'] ?></td>
			</tr>
			<tr>
				<td class="field-label col-md-2 active text-right"><label>STATE</label></td>
				<td class="col-md-4"><?= $customer['state'] ?></td>
			</tr>
			<tr>
				<td class="field-label col-md-2 active text-right"><label>ZIP CODE</label></td>
				<td class="col-md-4"><?= $customer['zipcode'] ?></td>
			</tr>
			<tr>
				<td class="field-label col-md-2 active text-right"><label>HOME PHONE</label></td>
				<td class="col-md-4"><?= $customer['home_phone'] ?></td>
			</tr>
			<tr>
				<td class="field-label col-md-2 active text-right"><label>WORK PHONE</label></td>
				<td class="col-md-4"><?= $customer['work_phone'] ?></td>
			</tr>
			<tr>
				<td class="field-label col-md-2 active text-right"><label>EMAIL</label></td>
				<td class="col-md-4"><?= $customer['email'] ?></td>
			</tr>
		</table>
	</div>
</div>	<!-- .row -->
 
<br>

{{ link_to_route('customers_path', 'Back to List', null, array('class' => 'btn btn-default valign_middle')) }}
{{ link_to_route('edit_customer_path', 'Edit Customer', array($customer['id']),
	array('class' => 'btn btn-default valign_middle')) }}

@stop
