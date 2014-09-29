@if (Session::has('success'))
    <div class="alert alert-success" role="alert">
        <h3>{{ Session::get('success') }}</h3>
    </div>
@elseif (Session::has('info'))
    <div class="alert alert-info" role="alert">
        <h3>{{ Session::get('info') }}</h3>
    </div>
@elseif (Session::has('warning'))
    <div class="alert alert-warning" role="alert">
        <h3>{{ Session::get('warning') }}</h3>
    </div>
@elseif (Session::has('error'))
    <div class="alert alert-danger" role="alert">
        <h3>{{ Session::get('error') }}</h3>
    </div>
@endif
