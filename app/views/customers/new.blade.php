@extends('layouts.master')

@section('content')
	{{ Form::open(array('url'=>'/customers/create', 'class' => 'form-horizontal')) }}
	<div class="form-group">
		{{ Form::label('name', 'NAME', array('class' => 'col-md-2 control-label')) }}
		<div class="col-md-4">
			{{ Form::text('name', '', array('class' => 'form-control')) }}
		</div>
	</div>
	{{ Form::close() }}

	<a class="btn btn-default valign_middle" href="{{ route('customers_path') }}">Back to Customers</a>
@stop