@extends('layouts.master')

@section('content')
	<div class="row">
		<div class="col-md-4 col-md-offset-2"><h1>Login</h1></div>
	</div>

	{{ Form::open(array('route' => 'authenticate_path', 'class' => 'form-horizontal')) }}

		<div class="form-group">
			{{ Form::label('email', 'EMAIL', array('class' => 'col-md-2 control-label')) }}
			<div class="col-md-4">
				{{ Form::text('email', null, array('class' => 'form-control')) }}
			</div>
			@if (!empty($msg = $errors->first('email')))
			<div class="col-md-4">
				<span class="control-label validation-err" >{{ "* $msg" }}</span>
			</div>
			@endif
		</div>

		<div class="form-group">
			{{ Form::label('password', 'PASSWORD', array('class' => 'col-md-2 control-label')) }}
			<div class="col-md-4">
				{{ Form::password('password', array('maxlength'=>16, 'id'=>'password', 'class'=>'form-control')) }}
			</div>
			@if (!empty($msg = $errors->first('password')))
			<div class="col-md-4">
				<span class="control-label validation-err" >{{ "* $msg" }}</span>
			</div>
			@endif
		</div>

		<div class="row">
			<div class="col-md-1 col-md-offset-2">
				{{ Form::submit('Login', array('class' => 'btn btn-default')) }}
			</div>
			<div class="col-md-3">
				({{ link_to_route('about_path', 'Contact developer') }} if necessary)
			</div>
		</div>
	
	{{ Form::close() }}

@stop