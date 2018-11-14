<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedor;
use Storage;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\Auth;
use Session;

class ProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $proveedores = Proveedor::all();
        return view('/admin/proveedores/main')->with('proveedores', $proveedores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('/admin/proveedores/formularios/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $proveedor = new Proveedor($request->all());
        $proveedor->save();

        Session::flash('mesagge', 'Se registró el proveedor con éxito');
        return redirect()->route('proveedores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $proveedor = Proveedor::find($id);
        return view('/admin/proveedores/formularios/show')
                        ->with('proveedor', $proveedor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $proveedor = Proveedor::find($id);
        return view('/admin/proveedores/formularios/update')
                        ->with('proveedor', $proveedor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $proveedor = Proveedor::find($id);
        $proveedor->fill($request->all());
        //Manejo de imagen de portada
        $proveedor->save();
        
        Session::flash('message', '¡Se ha actualizado la información del proveedor con éxito!');
        return redirect()->route('proveedores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $proveedor = Proveedor::find($id);
        $proveedor->estado = false;
        $proveedor->save();
        Session::flash('message', '¡Se ha deshabilitado el proveedor con éxito!');
        return redirect()->route('proveedores.index');
    }
    
}