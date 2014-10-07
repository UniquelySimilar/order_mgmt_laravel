	<div class="form-group">
		{{ Form::label('name', 'NAME', array('class' => 'col-md-2 control-label')) }}
		<div class="col-md-4">
			{{ Form::text('name', null, array('class' => 'form-control')) }}
		</div>
		@if (!empty($msg = $errors->first('name')))
		<div class="col-md-6">
			<span class="control-label validation-err" >{{ "* $msg" }}</span>
		</div>
		@endif
	</div>

	<div class="form-group">
		{{ Form::label('street', 'STREET', array('class' => 'col-md-2 control-label')) }}
		<div class="col-md-4">
			{{ Form::text('street', null, array('class' => 'form-control')) }}
		</div>
		@if (!empty($msg = $errors->first('street')))
		<div class="col-md-6">
			<span class="control-label validation-err" >{{ "* $msg" }}</span>
		</div>
		@endif
	</div>

	<div class="form-group">
		{{ Form::label('city', 'CITY', array('class' => 'col-md-2 control-label')) }}
		<div class="col-md-4">
			{{ Form::text('city', null, array('class' => 'form-control')) }}
		</div>
		@if (!empty($msg = $errors->first('city')))
		<div class="col-md-6">
			<span class="control-label validation-err" >{{ "* $msg" }}</span>
		</div>
		@endif
	</div>

	<div class="form-group">
		{{ Form::label('state', 'STATE', array('class' => 'col-md-2 control-label')) }}
		<div class="col-md-4">
			{{ Form::select('state', Config::get('state_list'), null, array('class' => 'form-control')); }}
		</div>
		@if (!empty($msg = $errors->first('state')))
		<div class="col-md-6">
			<span class="control-label validation-err" >{{ "* $msg" }}</span>
		</div>
		@endif
	</div>

	<div class="form-group">
		{{ Form::label('zipcode', 'ZIP CODE', array('class' => 'col-md-2 control-label')) }}
		<div class="col-md-4">
			{{ Form::text('zipcode', null, array('class' => 'form-control')) }}
		</div>
		@if (!empty($msg = $errors->first('zipcode')))
		<div class="col-md-6">
			<span class="control-label validation-err" >{{ "* $msg" }}</span>
		</div>
		@endif
	</div>

	<div class="form-group">
		{{ Form::label('home_phone', 'HOME PHONE', array('class' => 'col-md-2 control-label')) }}
		<div class="col-md-4">
			{{ Form::text('home_phone', null, array('class' => 'form-control')) }}
		</div>
		@if (!empty($msg = $errors->first('home_phone')))
		<div class="col-md-6">
			<span class="control-label validation-err" >{{ "* $msg" }}</span>
		</div>
		@endif
	</div>

	<div class="form-group">
		{{ Form::label('work_phone', 'WORK PHONE', array('class' => 'col-md-2 control-label')) }}
		<div class="col-md-4">
			{{ Form::text('work_phone', null, array('class' => 'form-control')) }}
		</div>
		@if (!empty($msg = $errors->first('work_phone')))
		<div class="col-md-6">
			<span class="control-label validation-err" >{{ "* $msg" }}</span>
		</div>
		@endif
	</div>

	<div class="form-group">
		{{ Form::label('email', 'EMAIL', array('class' => 'col-md-2 control-label')) }}
		<div class="col-md-4">
			{{ Form::text('email', null, array('class' => 'form-control')) }}
		</div>
		@if (!empty($msg = $errors->first('email')))
		<div class="col-md-6">
			<span class="control-label validation-err" >{{ "* $msg" }}</span>
		</div>
		@endif
	</div>
