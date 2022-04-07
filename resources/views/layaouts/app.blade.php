<html>

<head>
    <title>Michael
        - @yield('titulo')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand">Inicio</a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <div class="dropdown">
                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">
                        Sobre Cursos
                        </button>
                        <div class="dropdown-menu dropdown-bg-dark">
                          <a class="dropdown-item" href="http://127.0.0.1:8000/cursos">Ingresar A Cursos</a>
                          <a class="dropdown-item" href="http://127.0.0.1:8000/cursos/create">Crear Curso</a>

                        </div>
                      </div>
                </li>
                <li class="nav-item active">
                    <div class="dropdown">
                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">
                        Sobre Docentes
                        </button>
                        <div class="dropdown-menu dropdown-bg-dark">
                          <a class="dropdown-item" href="http://127.0.0.1:8000/docente">Ingresar A Docentes</a>
                          <a class="dropdown-item" href="http://127.0.0.1:8000/docente/create">Crear Docente</a>

                        </div>
                      </div>
                </li>
                <li class="nav-item active">
                    <div class="dropdown">
                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">
                        Sobre Estudiantes
                        </button>
                        <div class="dropdown-menu dropdown-bg-dark">
                          <a class="dropdown-item" href="http://127.0.0.1:8000/estudiante">Ingresar A Estudiantes</a>
                          <a class="dropdown-item" href="http://127.0.0.1:8000/estudiante/create">Crear Estudiante</a>

                        </div>
                      </div>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <br>
    @section('barralateral')
    @show
    {{-- este containes es para Boostrap y no se debe cambiar --}}
    <div class="container">
        <br>
        @yield('contenido')
    </div>
</body>

</html>
