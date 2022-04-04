@extends('layaouts.app')

@section('titulo','Listado de estudiantes')

@section('contenido')
    <center>
        <h3>Listado de estudiantes disponibles</h3>

    </center>
    {{--foreach es un ciclo espcial para arrays
        recorderis: existen ciclos como while, for, do while, foreach--}}
    <div class="row">
        @foreach ($estudiante as $do)
        {{--para llamar la informacion de php basta con interpretar
            las variables usando la doble llave--}}
{{--Es una regla en todos los lenguajes que el foreach lleve un alias para el array--}}

            <div class="col-sm" style="margin: 50px; ">


                        <li class="list-group-item">{{ $do->nombre}}</li>
                        <li class="list-group-item">{{ $do->edad}}</li>


                    <br>
                    {{--Se necesita el id para ver un registro en particular--}}
                    <a href="/estudiante/{{$do->id}}" class="btn btn-dark" style="margin-left:75px">Ver más</a>
                </div>
            </div>
        </div>

        <br>
    @endforeach
    </div>
@endsection
