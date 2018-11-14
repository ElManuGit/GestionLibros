@extends('admin.partes.index')

@section('title')
Proveedores registrados
@endsection

@section('content')
<div class="content-wrapper" style="min-height: 916px;">
    <section class="content-header">
        <h1>
            Proveedores
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="fa fa-users"></i>Administración</a>
            </li>
            <li class="active">Proveedores</li>
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
                                    <th class="text-center">Correo</th>
                                    <th class="text-center">Telefonos</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($proveedores as $proveedor)
                                @if ($proveedor->estado)
                                <tr>
                                    <td class="text-center">{{$proveedor->nombre}}</td>
                                    <td class="text-center">{{$proveedor->correo}}</td>
                                    <td class="text-center">{{$proveedor->telefono}} / {{$proveedor->telefono_fax}}</td>
                                    <td class="text-center">
                                        <a type="button" href="/admin/proveedores/{{$proveedor->id}}/edit" title="Editar" class="btn btn-social-icon btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                                        <a onclick="abrir_modal_borrar({{$proveedor->id}})" title="Deshabilitar este registro" class="btn btn-social-icon btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="text-center">Nombre</th>
                                    <th class="text-center">Correo</th>
                                    <th class="text-center">Telefonos</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                    <div class="box-footer">
                        <a title="Redactar un proveedor" type="button" href="/admin/proveedores/create" class="btn btn-primary pull-right">
                            <i class="fa fa-plus-circle"></i> &nbsp;Registrar un proveedor
                        </a>                          
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>

@include('admin.proveedores.formularios.delete')

@endsection
@section('script') 
<script src="{{ asset('js/Proveedores.js') }}"></script>
@endsection