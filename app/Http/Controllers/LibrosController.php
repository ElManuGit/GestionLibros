<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\Libro;
use App\Autor;
use App\Idioma;
use App\Genero;
use App\Editorial;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\Auth;
use Session;

class LibrosController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $libros = Libro::all();
        return view('/admin/libros/main')->with('libros', $libros);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $idiomas = Idioma::all();
        $generos = Genero::all();
        $editoriales = Editorial::all();
        $autores = Autor::all();
        return view('/admin/libros/formularios/create')
                        ->with('generos', $generos)
                        ->with('editoriales', $editoriales)
                        ->with('autores', $autores)
                        ->with('idiomas', $idiomas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $libro = new Libro($request->all());

        //Manejo de imagen de portada
        $nombreImagen = 'sin_imagen.png';
        if ($request->file('imagen')) {
            /**
             * Si se manda una imagen para el perfil la almacenamos y luego la
             * vinculamos al user
             */
            $file = $request->file('imagen');
            $nombreImagen = 'libro_' . $libro->id . '_' . time() . '.' . $file->getClientOriginalExtension();
            Storage::disk('libros')->put($nombreImagen, \File::get($file));
        }
        $libro->imagen = $nombreImagen;


        $libro->save();
        $libro->autores()->attach($request->autor_id);

        Session::flash('mesagge', 'Se registró el libro con éxito');
        return redirect()->route('libros.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $libro = Libro::find($id);
        return view('/admin/libros/formularios/show')
                        ->with('libro', $libro);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $idiomas = Idioma::all();
        $generos = Genero::all();
        $editoriales = Editorial::all();
        $autores = Autor::all();
        $libro = Libro::find($id);
        return view('/admin/libros/formularios/update')
                        ->with('libro', $libro)
                        ->with('generos', $generos)
                        ->with('editoriales', $editoriales)
                        ->with('autores', $autores)
                        ->with('idiomas', $idiomas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $libro = Libro::find($id);
        $libro->fill($request->all());
        //Manejo de imagen de portada
        $nombreImagen = $libro->imagen;
        if ($request->file('imagen')) {
            /**
             * Si se manda una imagen para el perfil la almacenamos y luego la
             * vinculamos al user
             */
            $file = $request->file('imagen');
            $nombreImagen = 'libro_' . $libro->id . '_' . time() . '.' . $file->getClientOriginalExtension();
            Storage::disk('libros')->put($nombreImagen, \File::get($file));
        }
        $libro->imagen = $nombreImagen;
        $libro->save();

        Session::flash('message', '¡Se ha actualizado la información del libro con éxito!');
        return redirect()->route('libros.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $libro = Libro::find($id);
        $libro->estado = false;
        $libro->save();
        Session::flash('message', '¡Se ha deshabilitado el libro con éxito!');
        return redirect()->route('libros.index');
    }

}