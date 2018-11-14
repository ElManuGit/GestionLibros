@extends('admin.partes.index')

@section('title')
Libros registrados
@endsection

@section('content')
<div class="content-wrapper" style="min-height: 916px;">
    <section class="content-header">
        <h1>
            Libros
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="fa fa-users"></i>Administración</a>
            </li>
            <li class="active">Libros</li>
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
                                    <th class="text-center">Portada</th>
                                    <th class="text-center">Título</th>
                                    <th class="text-center">Autor</th>
                                    <th class="text-center">Edicion</th>
                                    <th class="text-center">Stock</th>
                                    <th class="none text-center">ISBN</th>
                                    <th class="none text-center">Año de publicación</th>
                                    <th class="none text-center">Editorial</th>
                                    <th class="none text-center">Género</th>
                                    <th class="none text-center">Idioma</th>
                                    <th class="none text-center">Páginas</th>
                                    <th class="none text-center">Tamaño</th>
                                    <th class="none text-center">Disponible a clientes</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($libros as $libro)
                                <tr>
                                    <td align="center" width="10%">
                                        <img style="width:50px;height:50px" class="img-responsive" src="http://localhost:8000/imagenes/libros/{{$libro->imagen}}">
                                    </td>
                                    <td class="text-center">{{$libro->titulo}}</td>

                                    <td class="text-center">
                                        @foreach($libro->Autores as $autor)
                                        {{$autor->nombre}} {{$autor->apellido}}
                                        @endforeach
                                    </td>

                                    <td class="text-center">{{$libro->edicion}}</td>
                                    <td class="text-center">{{$libro->stock}}</td>
                                    <td class="text-center">{{$libro->isbn}}</td>
                                    <td class="text-center">{{$libro->year_publicacion}}</td>
                                    <td class="text-center">{{$libro->editorial->nombre}}</td>
                                    <td class="text-center">{{$libro->genero->nombre}}</td>
                                    <td class="text-center">{{$libro->idioma->nombre}}</td>
                                    <td class="text-center">{{$libro->paginas}}</td>
                                    <td class="text-center">{{$libro->tamano}}</td>
                                    @if ($libro->estado)
                                    <td class="text-center"> Si</td>
                                    @elseif (!$libro->estado)
                                    <td class="text-center"> No</td>
                                    @endif
                                    <td class="text-center">
                                        <a type="button" href="/admin/libros/{{$libro->id}}/edit" title="Editar" class="btn btn-social-icon btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                                        <a onclick="abrir_modal_borrar({{$libro->id}})" title="Deshabilitar este registro" class="btn btn-social-icon btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="text-center">Portada</th>
                                    <th class="text-center">Título</th>
                                    <th class="text-center">Autor</th>
                                    <th class="text-center">Edicion</th>
                                    <th class="text-center">Stock</th>
                                    <th class="none text-center">ISBN</th>
                                    <th class="none text-center">Año de publicación</th>
                                    <th class="none text-center">Editorial</th>
                                    <th class="none text-center">Género</th>
                                    <th class="none text-center">Idioma</th>
                                    <th class="none text-center">Páginas</th>
                                    <th class="none text-center">Tamaño</th>
                                    <th class="none text-center">Disponible a clientes</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                    <div class="box-footer">
                        <a title="Redactar un autor" type="button" href="/admin/libros/create" class="btn btn-primary pull-right">
                            <i class="fa fa-plus-circle"></i> &nbsp;Registrar un libro
                        </a>                          
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>

@include('admin.libros.formularios.delete')

@endsection
@section('script') 
<script src="{{ asset('js/Libros.js') }}"></script>
@endsection