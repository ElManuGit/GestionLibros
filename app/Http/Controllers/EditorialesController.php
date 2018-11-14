<?php

namespace App\Http\Controllers;

use App\Editorial;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\Auth;
use Session;

class EditorialesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $editoriales = Editorial::all();
        return view ('/admin/editoriales/main')->with('editoriales', $editoriales);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('/admin/editoriales/formularios/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $editorial = new Editorial($request->all());
        $editorial->save();
        Session::flash('mesagge', 'Se registró la editorial con éxito');
        return redirect ()->route('editoriales.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Editorial  $editorial
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $editorial = Editorial::find($id);
        return view ('/admin/editoriales/formularios/show')->with('editorial', $editorial);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Editorial  $editorial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editorial = Editorial::find($id);
        return view ('/admin/editoriales/formularios/update')->with('editorial', $editorial);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Editorial  $editorial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $editorial = Editorial::find($id);
        $editorial->fill($request->all());
        $editorial->save();
        Session::flash('message', '¡Se ha actualizado la información del autor con éxito!');
        return redirect()->route('editoriales.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Editorial  $editorial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $editorial = Editorial::find($id);
        $editorial->estado=false;
        $editorial->save();
        Session::flash('message', '¡Se ha deshabilitado el autor con éxito!');
        return redirect()->route('editoriales.index');
    }
}
