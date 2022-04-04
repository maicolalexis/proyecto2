@extends('layaouts.app')

@section('titulo', 'detalle curso')

@section('contenido')

<div class="text-center" style="width: 18rem; margin-top:30px;">

    <img src="{{ Storage::url($docente->img) }}" class="card-img-top" alt="..." style="width: 85%; margin-top:30px;"  >
<div class="card-body">
    <li class="list-group-item">{{ $docente->nombre}}</li>
    <li class="list-group-item">{{ $docente->apellido}}</li>

    <li class="list-group-item">{{ $docente->titulos}}</li>
    <li class="list-group-item">{{ $docente->cursoAsocio}}</li>
</div>
    <a href="/docente/{{$docente->id}}/edit" class="btn btn-dark" >Editar cursos</a>
<br>
<br>
<form class="form-group" action="/docente/{{$docente->id}}" method="POST">
    @csrf
   @method ('DELETE')
    <button type="submit" class="btn btn-danger">--Eliminar--</button>
</form>
</div>
@endsection
