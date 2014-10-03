<br />
<hr style="border-width: 2px;">

<h4>DEBUG INFORMATION</h4>

<!-- Application environment -->
<b>Environment: </b>{{ $environment }}
<br />

<!-- Application timezone -->
<?php $timezone = Config::get('app.timezone'); ?>
<b>Time Zone: </b>{{ $timezone }}
<br />

<!-- Request URL -->
<?php $url = Request::url(); ?>
<b>URL: </b>{{ $url }}
<br />

<!-- Request named route -->
<?php $route_name = Route::currentRouteName(); ?>
<b>Named Route: </b>{{ $route_name }}
<br />

<!-- Request method -->
<?php $method = Request::method(); ?>
<b>Method: </b>{{ $method }}
<br />

<!-- Session information (array)
<b>Session:</b>
<br />
<?#php $data = Session::all(); ?>
<ul>
{{-- @foreach ($data as $key => $value) --}}
	<li><b>Key:</b> {{-- $key --}} - <b>Value Type:</b> {{-- gettype($value) --}}</li>
{{-- @endforeach --}}
</ul>
 -->