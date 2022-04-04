<?php

namespace App\Http\Controllers;

use App\Http\Requests\DocenteRequest;
use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //creamos un array para poder manipular información de la tala cursos
        // a su vez el array actuara como objeto
        $docente = Docente::all();

        return view('docente.index', compact('docente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DocenteRequest $request)
    {

        //implementamos validaciones
        /*$validarDatos = $request->validate([
            'nombre' =>'required|max:10',
            'img' => 'required|image'
        ]);*/


        //Con el metodo all() veo toda la información
        //eturn $request->all();
        //Obtuvimos el dato de lo que el usuario envia por el input
        //cuyo name es 'nombre'
        //return $request->input('descripcion');
        //Creamos una nueva instancia del modelo
        $docente = new Docente();
        //esto me permitira manipular la tabla
        $docente->nombre = $request->input('nombre');
        $docente->apellido = $request->input('apellido');


        if ($request->hasfile('img')){
            $docente-> img = $request->file('img')->store('public/docente');

        }
        $docente->titulos = $request->input('titulos');
        $docente->cursoAsocio = $request->input('cursoAsociado');

        //con esto ejecutamos comandos para guardar
        $docente->save();
        return 'Lograste guardar';

    }
     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        // creo un array con informacion del registro
        // del id que viajo en la solicitud usando el metodo find
        $docente = Docente::find($id);
        //Asocio el array a la vista usando el compact
        //return $cursito;
        return view('docente.show', compact('docente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $docente = Docente::find($id);
        return view('docente.edit', compact('docente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $docente = Docente::find($id);
        //con fill lleno todos los campos de la tabla cursos
        //con la info que viene desde el request
        $docente->fill($request->except('imagen'));
        if ($request->hasfile('img')){
            $docente-> img = $request->file('img')->store('public');
        }
        $docente->save();
        return 'recurso Actualizado ';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $docente = Docente::find($id);
        $urlImagenBD = $docente->img;

        $nombreImagen = str_replace('public/','\storage\\',$urlImagenBD);
        $rutaCompleta = public_path().$nombreImagen;
        unlink ($rutaCompleta);
        $docente ->delete();
        return 'Eliminado';

    }
}
