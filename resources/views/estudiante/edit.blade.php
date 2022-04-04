@extends('layaouts.app')

@section('titulo','editar curso')

@section('contenido')

<h3>Editar Curso</h3>
<!--se utiliza el atributo enctype para poder subir el archivo-->
<form action="/docente/{{$docente->id}}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="nombrecurso">Modifique el nombre Docente:</label>
        <input id="nombrecurso" name="nombre" value="{{$docente->nombre}}" type="text" class="form-control" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="apellido">Modifique el apellido del Docente:</label>
        <input type="text" name="apellido" value="{{$docente->apellido}}" class="form-control" id="apellido" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
        <label for="titulos">modifique los titulos del Docente:</label>
        <input type="text" name="titulos" value="{{$docente->titulos}}" class="form-control" id="titulos" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="cursoAsocio">modifique los cursos Asociados del Docente:</label>
        <input type="text" name="cursoAsocio" value="{{$docente->cursoAsocio}}" class="form-control" id="cursosAsociados" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="img"><b>Cargar nueva imagen del Curso:</b></label>
        <input name="img" type="file" id="img" value="{{$docente->img}}">
    </div>
    <button type="submit" class="btn btn-danger">Crear</button>
</form>

@endsection
