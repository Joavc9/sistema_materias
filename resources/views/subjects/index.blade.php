@extends('layout')
@section('title','Asignaturas')
@section('content')
<div class="row">
    <div class="col-md-5">
        <form class="row g-3" method="POST" action="{{route('subject.store')}}">
            @csrf
            <div class="col-md-12">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="name" value="{{old('name')}}" >
                {!!$errors->first('name','<label id="name-error" class="error" for="name">:message</label>')!!}
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-12">
                        <label for="description" class="form-label">Descripción</label>
                        <input type="text" class="form-control" name="description" value="{{old('description')}}" >
                        {!!$errors->first('description','<label id="name-error" class="error" for="description">:message</label>')!!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-12">
                        <label for="credits" class="form-label">Créditos</label>
                        <input type="number" class="form-control" name="credits" value="{{old('credits')}}" >
                        {!!$errors->first('credits','<label id="name-error" class="error" for="credits">:message</label>')!!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-12">
                        <label for="area_of_knowledge" class="form-label">Area de conocimiento</label>
                        <input type="text" class="form-control" name="area_of_knowledge" value="{{old('area_of_knowledge')}}" >
                        {!!$errors->first('area_of_knowledge','<label id="name-error" class="error" for="area_of_knowledge">:message</label>')!!}
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="state" class="form-label">Estado</label>
                    <select class="form-select" name="state">
                      <option selected disabled value="">Seleccione...</option>
                      <option value="electiva" {{old('state') == "electiva" ? 'selected' : ''}}>Electiva</option>
                      <option value="obligatoria" {{old('state') == "obligatoria" ? 'selected' : ''}}>Obligatoria</option>  
                    </select>
                    {!!$errors->first('state','<label id="name-error" class="error" for="state">:message</label>')!!}
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary form-control" type="submit">Registrar</button>
            </div>
        </form>
    </div>
    <div class="col-md-7">
        <table class="table">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Créditos</th>
                <th>Area de conocimiento</th>
                <th>Estado</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($subjects as $subject)
              <tr>
                <td>{{$subject->name}}</td>
                <td>{{$subject->description}}</td>
                <td>{{$subject->credits}}</td>
                <td>{{$subject->area_of_knowledge}}</td>
                <td>{{$subject->state}}</td>
                <td>
                    <div class="d-flex justify-content-between">
                        <a class="btn btn-info" href="{{route('subject.edit',$subject->id)}}">Editar</a>
                        <a class="btn btn-danger ml-2" href="{{route('subject.delete',$subject->id)}}">Eliminar</a>
                    </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection