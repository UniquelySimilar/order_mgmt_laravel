@extends('layouts.master')

@section('content')

<h1>Order Management App</h1>
<p>This application was developed as an opportunity to practice various aspects of PHP/Laravel programming.</p>
<p>Functionality currently implemented:</p>
<ul class="list-unstyled icon-list chevron-right">
	<li>CRUD processing for Customers</li>
	<li>Authentication</li>
	<li>PostgreSQL database</li>
	<li>Bootstrap UI</li>
</ul>
<p>
	@if (Auth::check())
		<h3>Please select a menu option above.</h3>
	@else
		{{ link_to_route('login_path', 'Login', null, array('class' => 'btn btn-default'))}}
	@endif
</p>

@stop
