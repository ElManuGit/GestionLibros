<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use Storage;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\Auth;
use Session;

class ClientesController extends Controller {

    public function __construct() {
        Carbon::setlocale('es'); // Instancio en Español el manejador de fechas de Laravel
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $clientes = Cliente::all();
        return view('/admin/clientes/main')->with('clientes', $clientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $nombreImagen = 'sin_imagen.png';
        dd($request);
        if ($request->file('imagen')) {
            /**
             * Si se manda una imagen para el perfil la almacenamos y luego la
             * vinculamos al user
             */
            $file = $request->file('imagen');

            $nombreImagen = 'cliente_' . time() . '.png';
            Storage::disk('clientes')->put($nombreImagen, \File::get($file));
        }

        $cliente = new Cliente($request->all());
        $cliente->password = bcrypt($request->password);
        $cliente->imagen = $nombreImagen;
        $cliente->save();

        Session::flash('message', '¡Se ha registrado a un nuevo cliente con éxito!');
        return redirect ()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {

        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    public function actPass(Request $request, $id) {

        /**
         * Este método se encarga de actualizar únicamente la contraseña
         * del usuario logueado.
         */
        $cliente = Cliente::find($id);
        $cliente->password = bcrypt($request->password);
        $cliente->save();
        Session::flash('message', '¡Se ha actualizado el password del cliente con éxito!');
        return redirect()->route('admin.clientes.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $cliente = Cliente::find($id);
        $nombreImagen = "sin_imagen.png";

        if ($request->file('imagen')) {
            /**
             * Si se manda una imagen para el perfil la almacenamos y luego la
             * vinculamos al user
             */
            $file = $request->file('imagen');
            $nombreImagen = 'cliente_' . time() . '.png';
            if ((Storage::disk('clientes')->exists($cliente->imagen)) && ($cliente->imagen !== "sin_imagen.png")) {
                Storage::disk('clientes')->delete($cliente->imagen); // Borramos la imagen anterior.
            }
            Storage::disk('clientes')->put($nombreImagen, \File::get($file)); // Movemos la imagen nueva al directorio /imagenes/usuarios
        }
        $cliente->fill($request->all());
        if ($nombreImagen !== "") {
            /**
             * Actualizamos el nombre de la nueva imagen.
             */
            $cliente->imagen = $nombreImagen;
        }

        $cliente->save();

        Session::flash('message', '¡Se ha actualizado la información del cliente con éxito!');
        return redirect ()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $cliente = Cliente::find($id);
        $cliente->estado = false;
        $cliente->save();
        Session::flash('message', '¡Se ha deshabilitado el cliente con éxito!');
        return redirect()->route('clientes.index');
    }

}
