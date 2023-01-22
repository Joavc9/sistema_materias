<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <title>Exportar</title>
    <style>
      table, th, tr, td {
        border: 1px solid black;
      }
    </style>
</head>
<body>
    <table class="table">
        <thead>
          <tr>
            <th>Estudiante</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($students as $student)
            <tr>
                <td>{{$student->names}}</td>
                <td>
                <table class="table">
                    <th>Asignatura</th>
                    <th>Profesor</th>
                @foreach ($student->subjects as $subject)
                    <tr>
                        <td>{{$subject->subject->name}}</td>
                        <td>{{$subject->teacher->names}}</td>
                    </tr>
                @endforeach
                </table>
            </tr>
          @endforeach
        </tbody>
      </table>
</body>
</html>