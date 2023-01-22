@extends('layout')
@section('title','Estudiantes')
@section('content')
<div class="row">
    <div class="col-md-5">
        <form class="row g-3" method="POST" action="{{route('student.store')}}">
            @csrf
            <div class="col-md-12">
                <label for="document_number" class="form-label">Documento</label>
                <input type="number" class="form-control" name="document_number" value="{{old('document_number')}}" >
                {!!$errors->first('document_number','<label id="name-error" class="error" for="document_number">:message</label>')!!}
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-12">
                        <label for="names" class="form-label">Nombres</label>
                        <input type="text" class="form-control" name="names" value="{{old('names')}}" >
                        {!!$errors->first('names','<label id="name-error" class="error" for="names">:message</label>')!!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="{{old('email')}}" >
                        {!!$errors->first('email','<label id="name-error" class="error" for="email">:message</label>')!!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-12">
                        <label for="city" class="form-label">Ciudad</label>
                        <input type="text" class="form-control" name="city"  value="{{old('city')}}" >
                        {!!$errors->first('city','<label id="name-error" class="error" for="city">:message</label>')!!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-12">
                        <label for="address" class="form-label">Dirección</label>
                        <input type="text" class="form-control" name="address" value="{{old('address')}}" >
                        {!!$errors->first('address','<label id="name-error" class="error" for="address">:message</label>')!!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-12">
                        <label for="phone" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" name="phone" value="{{old('phone')}}" >
                        {!!$errors->first('phone','<label id="name-error" class="error" for="phone">:message</label>')!!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-12">
                        <label for="semester" class="form-label">Semestre</label>
                        <input type="text" class="form-control" name="semester" value="{{old('semester')}}" >
                        {!!$errors->first('semester','<label id="name-error" class="error" for="semester">:message</label>')!!}
                    </div>
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
                <th>Documento</th>
                <th>Nombres</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Dirección</th>
                <th>Ciudad</th>
                <th>Semestre</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($students as $student)
              <tr>
                <td>{{$student->document_number}}</td>
                <td>{{$student->names}}</td>
                <td>{{$student->phone}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->address}}</td>
                <td>{{$student->city}}</td>
                <td>{{$student->semester}}</td>
                <td>
                    <div class="d-flex justify-content-between">
                        <a class="btn btn-info" href="{{route('student.edit',$student->id)}}">Editar</a>
                        <a class="btn btn-danger ml-2" href="{{route('student.delete',$student->id)}}">Eliminar</a>
                    </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection