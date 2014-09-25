@extends('layouts.master')

@section('content')
	<h1>Add Customer</h1>
	{{ Form::open(array('url'=>'/customers/create', 'class' => 'form-horizontal')) }}
	<div class="form-group">
		{{ Form::label('name', 'NAME', array('class' => 'col-md-2 control-label')) }}
		<div class="col-md-4">
			{{ Form::text('name', '', array('class' => 'form-control')) }}
		</div>
	</div>
	<div class="form-group">
		{{ Form::label('street', 'STREET', array('class' => 'col-md-2 control-label')) }}
		<div class="col-md-4">
			{{ Form::text('street', '', array('class' => 'form-control')) }}
		</div>
	</div>
	<div class="form-group">
		{{ Form::label('city', 'CITY', array('class' => 'col-md-2 control-label')) }}
		<div class="col-md-4">
			{{ Form::text('city', '', array('class' => 'form-control')) }}
		</div>
	</div>
	<div class="form-group">
		{{ Form::label('state', 'STATE', array('class' => 'col-md-2 control-label')) }}
		<div class="col-md-4">
			{{ Form::text('state', '', array('class' => 'form-control')) }}
		</div>
	</div>
	<div class="form-group">
		{{ Form::label('zipcode', 'ZIP CODE', array('class' => 'col-md-2 control-label')) }}
		<div class="col-md-4">
			{{ Form::text('zipcode', '', array('class' => 'form-control')) }}
		</div>
	</div>
	<div class="form-group">
		{{ Form::label('home_phone', 'HOME PHONE', array('class' => 'col-md-2 control-label')) }}
		<div class="col-md-4">
			{{ Form::text('home_phone', '', array('class' => 'form-control')) }}
		</div>
	</div>
	<div class="form-group">
		{{ Form::label('work_phone', 'WORK PHONE', array('class' => 'col-md-2 control-label')) }}
		<div class="col-md-4">
			{{ Form::text('work_phone', '', array('class' => 'form-control')) }}
		</div>
	</div>
	<div class="form-group">
		{{ Form::label('email', 'EMAIL', array('class' => 'col-md-2 control-label')) }}
		<div class="col-md-4">
			{{ Form::text('email', '', array('class' => 'form-control')) }}
		</div>
	</div>
	<!-- Submit button -->
	{{ Form::submit('Save') }}

	<a class="btn btn-default valign_middle" href="{{ route('customers_path') }}">Cancel</a>

	{{ Form::close() }}

@stop