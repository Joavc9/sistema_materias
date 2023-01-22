@extends('app')
@section('title','Estudiantes')
@section('content')
<form method="POST" action="{{route('login')}}">
    @csrf
    <div class="col-md-12">
        <label for="email" class="form-label">Correo</label>
        <input type="email" class="form-control" name="email" value="{{old('email')}}" >
        {!!$errors->first('email','<label id="name-error" class="error" for="email">:message</label>')!!}
    </div>
    <div class="col-md-12">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" class="form-control" name="password"  value="{{old('city')}}" >
        {!!$errors->first('password','<label id="name-error" class="error" for="password">:message</label>')!!}
    </div>
    <div class="col-12">
        <button class="btn btn-primary form-control" type="submit">Iniciar session</button>
    </div>
</form>
@endsection