@extends('layaouts.app')

@section('titulo', 'detalle curso')

@section('contenido')

<div class="text-center" style="width: 18rem; margin-top:30px;">

    <img src="{{ Storage::url($cursito->img) }}" class="card-img-top" alt="..." style="width: 85%; margin-top:30px;"  >
<div class="card-body">
    <li class="list-group-item">{{ $cursito->descripcion }}</li>
    <li class="list-group-item">{{ $cursito->horas}}</li>
</div>


    <a href="/cursos/{{$cursito->id}}/edit" class="btn btn-dark" >Editar cursos</a>
<br><br>


<form class="form-group" action="/cursos/{{$cursito->id}}" method="POST">
    @csrf
   @method ('DELETE')
    <button type="submit" class="btn btn-danger">--Eliminar--</button>
</form>
@endsection

