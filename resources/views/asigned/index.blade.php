@extends('layout')
@section('title','Asignar')
@section('content')
<div class="d-flex mt-1 justify-content-end">
  <a class="btn btn-info text-white" href="{{route('subject.export')}}">Exportar</a>
</div>
<form class="row g-3" method="POST" action="{{route('vicule.store')}}">
    @csrf
    <div class="col-md-4">
        <label for="student" class="form-label">Estudiante</label>
        <select class="form-select" name="student_id">
          <option selected disabled value="">Seleccione...</option>
            @foreach ($students as $student)
              <option value="{{$student->id}}">{{$student->names}}</option>
            @endforeach
        </select>
        {!!$errors->first('student_id','<label id="name-error" class="error" for="student">:message</label>')!!}
    </div>
    <div class="col-md-4">
        <label for="subject" class="form-label">Asignatura</label>
        <select class="form-select" name="subject_id">
          <option selected disabled value="">Seleccione...</option>
            @foreach ($subjects as $subject)
              <option value="{{$subject->id}}">{{$subject->name}}</option>
            @endforeach
        </select>
        {!!$errors->first('subject_id','<label id="name-error" class="error" for="subject">:message</label>')!!}
    </div>
    <div class="col-md-4">
        <label for="teacher" class="form-label">Profesor</label>
        <select class="form-select" name="teacher_id">
          <option selected disabled value="">Seleccione...</option>
            @foreach ($teachers as $teacher)
              <option value="{{$teacher->id}}">{{$teacher->names}}</option>
            @endforeach
        </select>
        {!!$errors->first('teacher_id','<label id="name-error" class="error" for="teacher">:message</label>')!!}
    </div>
    <div class="col-12">
        <button class="btn btn-primary" type="submit">Registrar</button>
    </div>
</form>
@endsection