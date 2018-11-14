<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genero;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\Auth;
use Session;

class GenerosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $generos = Genero::all();
        return view ('/admin/generos/main')->with('generos', $generos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $genero = new Genero($request->all());
        $genero->save();
        Session::flash('mesagge', 'Se registró el genero con éxito');
        return redirect ()->route('generos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $genero = Genero::find($id);
        $genero->fill($request->all());
        $genero->save();
        Session::flash('message', '¡Se ha actualizado la información del genero con éxito!');
        return redirect()->route('generos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $genero = Genero::find($id);
        $genero->delete();
        Session::flash('message', '¡Se ha deshabilitado el genero con éxito!');
        return redirect()->route('generos.index');
    }
}
