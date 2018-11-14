@extends('admin.partes.index') 

@section('title') Usuarios registrados @endsection 

@section('content')
<div class="content-wrapper" style="min-height: 916px;">
    <section class="content-header">
        <h1>
            Usuarios
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="fa fa-suitcase"></i> Administración</a>
            </li>
            <li class="active">Usuarios</li>
        </ol>
    </section>
    <section class="content animated fadeIn">
        <div class="row">
            <div class="col-xs-12">
                <div class="col-md-12">
                    @include('admin.partes.msj_acciones')
                </div>
                @foreach($usuarios as $usuario)
                @if($usuario->estado)
                <div class="col-md-4 li_item animated pulse" id="{{$usuario->id}}">
                    <div class="box box-widget widget-user">
                        <div class="widget-user-header bg-primary">
                            <h3 class="widget-user-username">
                                <b>{{$usuario->name}}</b>
                            </h3>
                            <h5 class="widget-user-desc">Registrado {{ $usuario->created_at->diffForHumans() }}</h5>
                        </div>
                        <div class="widget-user-image">
                            @if ($usuario->imagen === null)
                            <img style="width:90px;height:90px" alt="User Image" class="img-circle" src="{{ asset('imagenes/usuarios/sin_imagen.png') }}"
                                 alt="User Avatar"> @else
                            <img style="width:90px;height:90px" alt="User Image" class="img-circle" src="{{ asset('imagenes/usuarios/' . $usuario->imagen) }}"
                                 alt="User Avatar"> @endif
                        </div>
                        <div class="box-footer">
                            <div class="row">
                                <div class="col-sm-8 border-right">
                                    <div class="description-block">
                                        <h5 class="description-header">Email</h5>
                                        <span>{{$usuario->email}}</span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="description-block text-center">
                                        <a onclick="completar_campos({{$usuario}})" title="Editar este registro" class="btn btn-social-icon btn-warning btn-sm">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a onclick="abrir_modal_borrar({{$usuario->id}})" title="Deshabilitar usuario" class="btn btn-social-icon btn-sm btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @elseif(!$usuario->estado)
                <div class="col-md-4 li_item animated pulse" id="{{$usuario->id}}">
                    <div class="box box-widget widget-user">
                        <div class="widget-user-header bg-gray">
                            <h3 class="widget-user-username">
                                <b>{{$usuario->name}}</b>&nbsp; (Deshabilitado)
                            </h3>
                            <h5 class="widget-user-desc">Registrado {{ $usuario->created_at->diffForHumans() }}</h5>
                        </div>
                        <div class="widget-user-image">
                            @if ($usuario->imagen === null)
                            <img style="width:90px;height:90px" alt="User Image" class="img-circle" src="{{ asset('imagenes/usuarios/sin_imagen.png') }}"
                                 alt="User Avatar"> @else
                            <img style="width:90px;height:90px" alt="User Image" class="img-circle" src="{{ asset('imagenes/usuarios/' . $usuario->imagen) }}"
                                 alt="User Avatar"> @endif
                        </div>
                        <div class="box-footer">
                            <div class="row">
                                <div class="col-sm-8 border-right">
                                    <div class="description-block">
                                        <h5 class="description-header">Email</h5>
                                        <span>{{$usuario->email}}</span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="description-block text-center">
                                        <a onclick="completar_campos({{$usuario}})" title="Editar este registro" class="btn btn-social-icon btn-warning btn-sm">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a onclick="abrir_modal_borrar({{$usuario->id}})" title="Deshabilitar usuario" class="btn btn-social-icon btn-sm btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
                <div class="col-md-2 pull-right">
                    <ul class="products-list product-list-in-box">
                        <li class="item">
                            <div class="container" style="width:auto;">
                                <label>&nbsp;Acciones</label>
                                <button title="Registrar un usuario" type="button" id="boton-modal-crear" class="btn btn-primary btn-block" data-toggle="modal"
                                        data-target="#modal-crear">
                                    <i class="fa fa-plus-circle"></i> &nbsp;Registrar usuario
                                </button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>

@include('admin.usuarios.formulario.create') 
@include('admin.usuarios.formulario.update') 
@include('admin.usuarios.formulario.confirmar')
@endsection 

@section('script')
<script src="{{ asset('js/Usuarios.js') }}"></script>
@endsection