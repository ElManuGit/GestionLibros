@extends('admin.partes.index')

@section('title')
Clientes registrados
@endsection

@section('content')
<div class="content-wrapper" style="min-height: 916px;">
    <section class="content-header">
        <h1>
            Clientes
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="fa fa-users"></i>Administración</a>
            </li>
            <li class="active">Clientes</li>
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
                                    <th class="text-center">Nombre y Apellido</th>
                                    <th class="text-center">Email</th>
                                    <th class="none text-center">Fecha de nacimiento</th>
                                    <th class="none text-center">Telefonos</th>
                                    <th class="none text-center">Tipo y Nº de documento</th>
                                    <th class="none text-center">Direccion</th>
                                    <th class="text-center">Acciones</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($clientes as $cliente)
                                <tr>
                                    <td class="text-center">{{$cliente->nombre}} {{$cliente->apellido}}</td>
                                    <td class="text-center">{{$cliente->email}}</td>
                                    <td class="text-center">{{$cliente->fecha_nacimiento}}</td>
                                    <td class="text-center">{{$cliente->telefono}} / {{$cliente->telefono_alternativo}}</td>
                                    <td class="text-center">{{$cliente->tipo_documento}}: {{$cliente->numero_documento}}</td>
                                    <td class="text-center">{{$cliente->direccion}}</td>

                                    <td class="text-center">
                                        <a type="button" href="/admin/clientes/{{$cliente->id}}" title="Mostrar" class="btn btn-social-icon btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                        <a onclick="completar_campos({{$cliente}})" title="Editar cliente" class="btn btn-social-icon btn-warning btn-sm">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a onclick="abrir_modal_borrar({{$cliente->id}})" title="Deshabilitar cliente" class="btn btn-social-icon btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="text-center">Nombre y Apellido</th>
                                    <th class="text-center">Email</th>
                                    <th class="none text-center">Fecha de nacimiento</th>
                                    <th class="none text-center">Telefonos</th>
                                    <th class="none text-center">Tipo y Nº de documento</th>
                                    <th class="none text-center">Direccion</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                    <div class="box-footer">
                        <a title="Registrar un cliente" type="button" id="boton-modal-crear" class="btn btn-primary pull-right" data-toggle="modal"
                            data-target="#modal-crear">
                            <i class="fa fa-plus-circle"></i> &nbsp;Registrar un cliente
                        </a>                          
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>

@include('admin.clientes.formularios.create') 
@include('admin.clientes.formularios.update') 
@include('admin.clientes.formularios.confirmar')

@endsection
@section('script') 
<script src="{{ asset('js/Clientes.js') }}"></script>
<script src="{{ asset('js/imagen_croppie.js') }}"></script>
@endsection