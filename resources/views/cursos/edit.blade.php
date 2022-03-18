@extends('layaouts.app')

@section('titulo','editar curso')

@section('contenido')

<h3>Editar Curso</h3>
<!--se utiliza el atributo enctype para poder subir el archivo-->
<form action="/cursos/{{$cursito->id}}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="nombrecurso">Modifique el nombre del curso:</label>
        <input id="nombrecurso" name="nombre" value="{{$cursito->nombre}}" type="text" class="form-control" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="descripcurso">Modifique la descripcion del curso:</label>
        <input type="text" name="descripcion" value="{{$cursito->descripcion}}" class="form-control" id="descripcurso" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="img"><b>Cargar nueva imagen del Curso</b></label>
        <input name="img" type="file" id="img" value="{{$cursito->img}}">
    </div>
    <button type="submit" class="btn btn-danger">Crear</button>
</form>

@endsection
