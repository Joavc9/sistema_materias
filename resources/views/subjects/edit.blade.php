@extends('layout')
@section('title','Asignaturas')
@section('content')
<form class="row g-3" method="POST" action="{{route('subject.update',$subject->id)}}">
    @csrf
    @method('PUT')
    <div class="col-md-12">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="name" value="{{old('name',$subject->name)}}" >
        {!!$errors->first('name','<label id="name-error" class="error" for="name">:message</label>')!!}
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="col-md-12">
                <label for="description" class="form-label">Descripción</label>
                <input type="text" class="form-control" name="description" value="{{old('description',$subject->description)}}" >
                {!!$errors->first('description','<label id="name-error" class="error" for="description">:message</label>')!!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="col-md-12">
                <label for="credits" class="form-label">Créditos</label>
                <input type="number" class="form-control" name="credits" value="{{old('credits',$subject->credits)}}" >
                {!!$errors->first('credits','<label id="name-error" class="error" for="credits">:message</label>')!!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="col-md-12">
                <label for="area_of_knowledge" class="form-label">Area de conocimiento</label>
                <input type="text" class="form-control" name="area_of_knowledge" value="{{old('area_of_knowledge',$subject->area_of_knowledge)}}" >
                {!!$errors->first('area_of_knowledge','<label id="name-error" class="error" for="area_of_knowledge">:message</label>')!!}
            </div>
        </div>
        <div class="col-md-6">
            <label for="state" class="form-label">Estado</label>
            <select class="form-select" name="state">
              <option selected disabled value="">Seleccione...</option>
              <option value="electiva" {{old('state',$subject->state) == "electiva" ? 'selected' : ''}}>Electiva</option>
              <option value="obligatoria" {{old('state',$subject->state) == "obligatoria" ? 'selected' : ''}}>Obligatoria</option>  
            </select>
            {!!$errors->first('state','<label id="name-error" class="error" for="state">:message</label>')!!}
        </div>
    </div>
    <div class="col-12">
        <button class="btn btn-primary form-control" type="submit">Actualizar</button>
    </div>
</form>
@endsection