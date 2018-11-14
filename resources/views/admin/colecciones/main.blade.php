@extends('admin.partes.index')

@section('title')
Colecciones registrados
@endsection

@section('content')
<div class="content-wrapper" style="min-height: 916px;">
    <section class="content-header">
        <h1>
            Colecciones
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="fa fa-users"></i>Administración</a>
            </li>
            <li class="active">Colecciones</li>
        </ol>
    </section>
    <section class="content animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <br>
                <div class="box box-primary">
                    <div class="box-body ">                            
                        @include('admin.partes.msj_acciones')
                        <table id="example" class="display example" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="text-center">Nombre</th>
                                    <th class="text-center">Libros</th>
                                    <th class="text-center">Tipo</th>
                                    <th class="none text-center">Descripcion</th>
                                    <th class="none text-center">Habilitado</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($colecciones as $coleccion)
                                <tr>
                                    <td class="text-center">{{$coleccion->nombre}}</td>

                                    <td class="text-center">
                                        @foreach($coleccion->Libros as $libro)
                                        {{$libro->titulo}}
                                        @endforeach
                                    </td>

                                    <td class="text-center">{{$coleccion->tipo}}</td>
                                    <td class="text-center">{{$coleccion->descripcion}}</td>
                                    @if ($coleccion->estado)
                                    <td class="text-center"> Si</td>
                                    @elseif (!$coleccion->estado)
                                    <td class="text-center"> No</td>
                                    @endif
                                    <td class="text-center">
                                        <a type="button" href="/admin/colecciones/{{$coleccion->id}}/edit" title="Editar" class="btn btn-social-icon btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                                        <a onclick="abrir_modal_borrar({{$coleccion->id}})" title="Deshabilitar este registro" class="btn btn-social-icon btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="text-center">Nombre</th>
                                    <th class="text-center">Libros</th>
                                    <th class="text-center">Tipo</th>
                                    <th class="none text-center">Descripcion</th>
                                    <th class="none text-center">Habilitado</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                    <div class="box-footer">
                        <a title="Registrar una coleccion" type="button" href="/admin/colecciones/create" class="btn btn-primary pull-right">
                            <i class="fa fa-plus-circle"></i> &nbsp;Registrar una coleccion
                        </a>                          
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>

@include('admin.colecciones.formularios.delete')

@endsection
@section('script') 
<script src="{{ asset('js/Colecciones.js') }}"></script>
@endsection