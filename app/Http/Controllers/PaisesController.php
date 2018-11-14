<?php

namespace App\Http\Controllers;

use App\Pais;
use Illuminate\Http\Request;
Use Session;

class PaisesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paises = Pais::all();
        return view('/admin/paises/main')->with('paises', $paises);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pais = new Pais($request->all());
        $pais->save();
        Session::flash('message', '¡Se ha registrado el país!');
        return redirect()->route('paises.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pais  $pais
     * @return \Illuminate\Http\Response
     */
    public function show(Pais $pais)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pais  $pais
     * @return \Illuminate\Http\Response
     */
    public function edit(Pais $pais)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pais  $pais
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pais = Pais::find($id);
        $pais->fill($request->all());
        $pais->save();
        Session::flash('message', '¡Se ha actualizado la información del país con éxito!');
        return redirect()->route('paises.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pais  $pais
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pais = Pais::find($id);
        $pais->delete();
        Session::flash('message', '¡Se ha eliminado el país con éxito!');
        return redirect()->route('paises.index');
    }
}
