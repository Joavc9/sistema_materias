@extends('layout')
@section('title','Profesores')
@section('content')
<form class="row g-3" method="POST" action="{{route('teacher.update',$teacher->id)}}">
    @csrf
    @method('PUT')
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="col-md-12">
                <label for="names" class="form-label">Nombres</label>
                <input type="text" class="form-control" name="names" value="{{old('names',$teacher->names)}}" >
                {!!$errors->first('names','<label id="name-error" class="error" for="names">:message</label>')!!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="col-md-12">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value="{{old('email',$teacher->email)}}" >
                {!!$errors->first('email','<label id="name-error" class="error" for="email">:message</label>')!!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="col-md-12">
                <label for="city" class="form-label">Ciudad</label>
                <input type="text" class="form-control" name="city"  value="{{old('city',$teacher->city)}}" >
                {!!$errors->first('city','<label id="name-error" class="error" for="city">:message</label>')!!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="col-md-12">
                <label for="address" class="form-label">Dirección</label>
                <input type="text" class="form-control" name="address" value="{{old('address',$teacher->address)}}" >
                {!!$errors->first('address','<label id="name-error" class="error" for="address">:message</label>')!!}
            </div>
        </div>
        <div class="col-md-12">
            <div class="col-md-12">
                <label for="phone" class="form-label">Teléfono</label>
                <input type="text" class="form-control" name="phone" value="{{old('phone',$teacher->phone)}}" >
                {!!$errors->first('phone','<label id="name-error" class="error" for="phone">:message</label>')!!}
            </div>
        </div>
    </div>
    <div class="col-12">
        <button class="btn btn-primary form-control" type="submit">Actualizar</button>
    </div>
</form>
@endsection