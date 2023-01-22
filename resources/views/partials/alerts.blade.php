@if(Session::has('success'))
<div class="alert alert-success" role="alert">{{session::get('success')}}</div>
@elseif(Session::has('danger'))
<div class="alert alert-danger" role="alert">{{session::get('danger')}}</div>
@elseif(Session::has('info'))
<div class="alert alert-info" role="alert">{{session::get('info')}}</div>
@endif