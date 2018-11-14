@extends('admin.partes.index')

@section('title')
Autores registrados
@endsection

@section('content')
<div class="content-wrapper" style="min-height: 916px;">
    <section class="content-header">
        <h1>
            Géneros
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="fa fa-users"></i>Administración</a>
            </li>
            <li class="active">Géneros</li>
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
                                    <th class="none text-center">Descripción</th>
                                    <th class="text-center">Ultima actualización</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($generos as $genero)
                                <tr>
                                    <td class="text-center">{{$genero->nombre}}</td>
                                    <td class="text-center">{{$genero->descripcion}}</td>
                                    <td class="text-center">{{$genero->updated_at->diffForHumans()}}</td>
                                    <td class="text-center">
                                        <a onclick="completar_campos({{$genero}})" title="Editar este registro" class="btn btn-social-icon btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                                    </td>
                                </tr> 
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="text-center">Nombre</th>
                                    <th class="none text-center">Descripción</th>
                                    <th class="text-center">Ultima actualización</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div> 
                    <div class="box-footer">
                        <button title="Registrar un género" type="button" id="boton-modal-crear" class="btn btn-primary pull-right" data-toggle="modal" data-target="#modal-crear">
                            <i class="fa fa-plus-circle"></i> &nbsp;Registrar género
                        </button>
                    </div>
                </div>
            </div>                                               
        </div>
    </section>
</div>

@include('admin.generos.formularios.create')
@include('admin.generos.formularios.update')

@endsection
@section('script') 
<script src="{{ asset('js/Generos.js') }}"></script>
@endsection
