@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-md-8 col-divider" >
		<h2>Customer Manager</h2>
		<p>This application was developed as an opportunity to practice various aspects of PHP/Laravel development.</p>
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
	</div>

	<div class="col-md-4" >
		<h2>Contact Developer</h2>
		<img src="/assets/images/tim_cubicle.jpg" alt="Tim Coveney" >
		<br />
		<br />
		<p>
			<span style="font-size: 1.5em;">Tim Coveney</span>
			<br />
			tcemp@comcast.net<br />
			{{ link_to('https://github.com/UniquelySimilar', 'GitHub Account', array('target' => '_BLANK')); }}
		</p>
	</div>
</div><!-- .row -->
@stop
