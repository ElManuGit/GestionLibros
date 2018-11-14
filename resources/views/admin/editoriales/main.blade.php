@extends('admin.partes.index')

@section('title')
Editoriales registrados
@endsection

@section('content')
<div class="content-wrapper" style="min-height: 916px;">
    <section class="content-header">
        <h1>
            Editoriales
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="fa fa-users"></i>Administración</a>
            </li>
            <li class="active">Editoriales</li>
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
                                    <th class="text-center">Teléfono</th>
                                    <th class="text-center">Correo</th>
                                    <th class="text-center">Sitio Web</th>
                                    <th class="text-center">Acciones</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($editoriales as $editorial)
                                <tr>
                                    <td class="text-center">{{$editorial->nombre}}</td>
                                    <td class="text-center">{{$editorial->telefono}}</td>
                                    <td class="text-center">{{$editorial->correo}}</td>
                                    <td class="text-center">{{$editorial->sitio_web}}</td>
                                    <td class="text-center">
                                        <a onclick="completar_campos({{$editorial}})" title="Editar este registro" class="btn btn-social-icon btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="text-center">Nombre</th>
                                    <th class="text-center">Teléfono</th>
                                    <th class="text-center">Correo</th>
                                    <th class="text-center">Sitio Web</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                    <div class="box-footer">
                        <button title="Registrar una editorial" type="button" id="boton-modal-crear" class="btn btn-primary pull-right" data-toggle="modal" data-target="#modal-crear">
                            <i class="fa fa-plus-circle"></i> &nbsp;Nueva editorial
                        </button>                          
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>

@include('admin.editoriales.formularios.create')
@include('admin.editoriales.formularios.delete')
@include('admin.editoriales.formularios.update')

@endsection
@section('script') 
<script src="{{ asset('js/Editoriales.js') }}"></script>
@endsection