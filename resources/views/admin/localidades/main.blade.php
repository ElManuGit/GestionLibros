@extends('admin.partes.index')

@section('title')
Localidades registradas
@endsection

@section('content')
<div class="content-wrapper" style="min-height: 916px;">
    <section class="content-header">
        <h1>
            Localidades
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="fa fa-map-marker"></i>Lugares</a>
            </li>
            <li class="active">Localidades</li>
        </ol>
    </section>
      <section class="content animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <br>
                <div class="box box-primary">
                    <div class="box-body ">                            
                        @include('admin.partes.msj_acciones')
                        <table id="example" class="display" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="text-center">Nombre</th>
                                    <th class="text-center">Código postal</th>
                                    <th class="text-center">Provincia</th>
                                    <th class="text-center">Pais</th>
                                    <th class="text-center">Ultima actualización</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($localidades as $localidad)
                                <tr>
                                    <td class="text-center">{{$localidad->nombre}}</td>
                                    <td class="text-center">{{$localidad->codigo_postal}}</td>
                                    <td class="text-center">{{$localidad->provincia->nombre}}</td>
                                    <td class="text-center">{{$localidad->provincia->pais->nombre}}</td>
                                    <td class="text-center">{{$localidad->updated_at->diffForHumans()}}</td>
                                    <td class="text-center">
                                        <a onclick="completar_campos({{$localidad}})" title="Editar este registro" class="btn btn-social-icon btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                                    </td>
                                </tr> 
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="text-center">Nombre</th>
                                    <th class="text-center">Código postal</th>
                                    <th class="text-center">Provincia</th>
                                    <th class="text-center">Pais</th>
                                    <th class="text-center">Ultima actualización</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div> 
                    <div class="box-footer">
                        <button title="Registrar un país" type="button" id="boton-modal-crear" class="btn btn-primary pull-right" data-toggle="modal" data-target="#modal-crear">
                            <i class="fa fa-plus-circle"></i> &nbsp;Registrar localidad
                        </button>
                    </div>
                </div>
            </div>                                               
        </div>
    </section>
</div>

@include('admin.localidades.formularios.create')
@include('admin.localidades.formularios.update')

@endsection
@section('script') 
<script src="{{ asset('js/Localidades.js') }}"></script>
@endsection
