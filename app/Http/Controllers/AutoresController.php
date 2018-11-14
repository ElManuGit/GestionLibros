<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Autor;
use App\Libro;
use Storage;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\Auth;
use Session;

use App\User;

class AutoresController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $autores = Autor::all();
        return view('/admin/autores/main')->with('autores', $autores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('/admin/autores/formularios/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $autor = new Autor($request->all());
        $nombreImagen = 'sin_imagen.png';
        if ($request->file('imagen')) {
            /**
             * Si se manda una imagen para el perfil la almacenamos y luego la
             * vinculamos al user
             */
            $file = $request->file('imagen');
            $nombreImagen = 'autor_' . $autor->id . '_' . time() . '.' . $file->getClientOriginalExtension();
            Storage::disk('autores')->put($nombreImagen, \File::get($file));
        }
        $autor->imagen = $nombreImagen;
        $autor->save();
        
        Session::flash('mesagge', 'Se registró el autor con éxito');
        return redirect()->route('autores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $autor = Autor::find($id);
        $libros = Libro::all()->where('autor_id', $autor->id);

        return view('/admin/autores/formularios/show')
                        ->with('autor', $autor)
                        ->with('libros', $libros);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $autor = Autor::find($id);
        return view('/admin/autores/formularios/update')->with('autor', $autor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $autor = Autor::find($id);
        $autor->fill($request->all());
        
        //Manejo de imagen de portada
        $nombreImagen = $autor->imagen;
        if ($request->file('imagen')) {
            /**
             * Si se manda una imagen para el perfil la almacenamos y luego la
             * vinculamos al user
             */
            $file = $request->file('imagen');
            $nombreImagen = 'autor_' . $autor->id . '_' . time() . '.' . $file->getClientOriginalExtension();
            Storage::disk('autores')->put($nombreImagen, \File::get($file));
        }
        $autor->imagen = $nombreImagen;
        $autor->save();

        Session::flash('message', '¡Se ha actualizado la información del autor con éxito!');
        return redirect()->route('autores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $autor = Autor::find($id);
        $autor->estado = false;
        $autor->save();
        Session::flash('message', '¡Se ha deshabilitado el autor con éxito!');
        return redirect()->route('autores.index');
    }
}
