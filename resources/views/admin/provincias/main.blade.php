@extends('admin.partes.index')

@section('title')
Provincias registradas
@endsection

@section('content')
<div class="content-wrapper" style="min-height: 916px;">
    <section class="content-header">
        <h1>
            Provincias
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="fa fa-map-marker"></i>Lugares</a>
            </li>
            <li class="active">Provincias</li>
        </ol>
    </section>
    <section class="content">
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
                                    <th class="text-center">País perteneciente</th>
                                    <th class="text-center">Localidades asociadas</th>
                                    <th class="text-center">Ultima actualización</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($provincias as $provincia)
                                <tr>
                                    <td class="text-center">{{$provincia->nombre}}</td>
                                    <td class="text-center">{{$provincia->pais->nombre}}</td>
                                    <td class="text-center">{{$provincia->localidades->count()}}</td>
                                    <td class="text-center">{{$provincia->updated_at->diffForHumans()}}</td>
                                    <td class="text-center">
                                        <a onclick="completar_campos({{$provincia}})" title="Editar este registro" class="btn btn-social-icon btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                                    </td>
                                </tr> 
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="text-center">Nombre</th>
                                    <th class="text-center">País perteneciente</th>
                                    <th class="text-center">Localidades asociadas</th>
                                    <th class="text-center">Ultima actualización</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div> 
                    <div class="box-footer">
                        <button title="Registrar una provincia" type="button" id="boton-modal-crear" class="btn btn-primary pull-right" data-toggle="modal" data-target="#modal-crear">
                            <i class="fa fa-plus-circle"></i> &nbsp; Registrar provincia
                        </button>
                    </div>
                </div>
            </div>                                               
        </div>
    </section>
</div>

@include('admin.provincias.formularios.create')
@include('admin.provincias.formularios.update')

@endsection
@section('script') 
<script src="{{ asset('js/Provincias.js') }}"></script>
@endsection
