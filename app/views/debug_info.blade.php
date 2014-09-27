<br />
<hr style="border-width: 2px;">

<h4>DEBUG INFORMATION</h4>

<!-- Application environment -->
<b>Environment: </b>{{$environment}}
<br />

<!-- Application timezone -->
<?php $timezone = Config::get('app.timezone'); ?>
<b>Time Zone: </b>{{$timezone}}
<br />

<!-- Request URL -->
<?php $url = Request::url(); ?>
<b>URL: </b>{{$url}}
<br />

<!-- Request method -->
<?php $method = Request::method(); ?>
<b>Method: </b>{{$method}}
<br />
