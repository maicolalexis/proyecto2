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
<form id="boton" class="form-group" action="/docente/{{$docente->id}}" method="POST">

    @csrf
    @method ('DELETE')
    <button   type="submit" class="btn btn-danger submit" >eliminar</button>

</form>


</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    var boton = document.querySelector("#boton");
    boton.addEventListener('click', () =>{

            Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
    if (result.isConfirmed) {
        Swal.fire(
        'Deleted!',
        'Your file has been deleted.',
        'success'
        )
    }
    });}

</script>
@endsection

