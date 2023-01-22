<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
     {{--  <a class="navbar-brand" href="#">Navbar</a> --}}
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('student.index')}}">Estudiantes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('teacher.index')}}">Profesores</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('subject.index')}}">Materias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('vicule.index')}}">Asignar</a>
          </li>
        </ul>
      </div>
      <ul class="navbar-nav">
        <a class="nav-link" href="#">{{auth()->user()->name}}</a>
        <li class="nav-item">
          <form action="{{route('logout')}}" method="POST" id="form" style="display: none">@csrf</form>
          <a class="nav-link active" aria-current="page" href="#" onclick="event.preventDefault();
          document.getElementById('form').submit()">Logout</a>
        </li>
      </ul>
    </div>
  </nav>