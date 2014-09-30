@if (Session::has('success'))
    <div class="alert alert-success" role="alert">
        <h4>{{ Session::get('success') }}</h4>
    </div>
@elseif (Session::has('info'))
    <div class="alert alert-info" role="alert">
        <h4>{{ Session::get('info') }}</h4>
    </div>
@elseif (Session::has('warning'))
    <div class="alert alert-warning" role="alert">
        <h4>{{ Session::get('warning') }}</h4>
    </div>
@elseif (Session::has('error'))
    <div class="alert alert-danger" role="alert">
        <h4>{{ Session::get('error') }}</h4>
    </div>
@endif
