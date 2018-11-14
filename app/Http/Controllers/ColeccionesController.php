<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coleccion;
use App\Libro;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\Auth;
use Session;

class ColeccionesController extends Controller
{
    
    
    
  public function index() {
        $colecciones = Coleccion::all();
        return view('/admin/colecciones/main')->with('colecciones', $colecciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $libros = Libro::all();
        return view('/admin/colecciones/formularios/create')->with('libros', $libros);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $coleccion = new Coleccion($request->all());
        $coleccion->save();
        foreach ($request->libros as $libro_id) {
            $coleccion->libros()->attach(value($libro_id));
        }
        
        Session::flash('mesagge', 'Se registró el coleccion con éxito');
        return redirect()->route('colecciones.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $coleccion = Coleccion::find($id);
        $libros = Libro::all();

        return view('/admin/colecciones/formularios/show')
                        ->with('coleccion', $coleccion)
                        ->with('libros', $libros);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $coleccion = Coleccion::find($id);
        return view('/admin/colecciones/formularios/update')->with('coleccion', $coleccion);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $coleccion = Coleccion::find($id);
        $coleccion->fill($request->all());
        $coleccion->save();

        Session::flash('message', '¡Se ha actualizado la información del coleccion con éxito!');
        return redirect()->route('colecciones.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $coleccion = Coleccion::find($id);
        $coleccion->estado = false;
        $coleccion->save();
        Session::flash('message', '¡Se ha deshabilitado el coleccion con éxito!');
        return redirect()->route('colecciones.index');
    }
}