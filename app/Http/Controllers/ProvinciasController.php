<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Provincia;
use App\Localidad;
use App\Pais;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Http\Requests\ProvinciaRequestCreate;
use App\Http\Requests\ProvinciaRequestEdit;
Use Session;

class ProvinciasController extends Controller {

    public function __construct() {
        Carbon::setlocale('es');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        //si la peticion se realiza por ajax, quiere decir que estamos en vista clientes.createForm intentando encontrar localidades desde provincia en un select.
        if ($request->ajax()) {
            $localidadesDeProvincia = Localidad::localidades($request->id);
            return response()->json($localidadesDeProvincia);
        }
        $provincias = Provincia::all();
        $paises = Pais::all();
        return view('admin.provincias.main')->with('provincias', $provincias)->with('paises', $paises); // se devuelven los registros
    }

    public function create() {
        
    }

    public function store(Request $request) {
        $provincia = new Provincia($request->all());
        $provincia->save();
        Session::flash('message', 'Se ha registrado a una nueva provincia.');
        return redirect()->route('provincias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        
    }

    public function update(Request $request, $id) {
        $provincia = Provincia::find($id);
        $provincia->fill($request->all());
        $provincia->save();
        Session::flash('message', 'Se ha actualizado la información');
        return redirect()->route('provincias.index');
    }

    public function destroy($id) {
        $provincia = Provincia::find($id);
        $provincia->delete();
        Session::flash('message', 'La provincia ha sido eliminada');
        return redirect()->route('provincias.index');
    }

}
