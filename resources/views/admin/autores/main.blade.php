@extends('admin.partes.index')

@section('title')
Autores registrados
@endsection

@section('content')
<div class="content-wrapper" style="min-height: 916px;">
    <section class="content-header">
        <h1>
            Autores
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="fa fa-users"></i>Administración</a>
            </li>
            <li class="active">Autores</li>
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
                                    <th class="text-center">Imágen</th>
                                    <th class="text-center">Nombre</th>
                                    <th class="text-center">Fecha alta</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($autores as $autor)
                                <tr>
                                    <td align="center" width="10%">
                                        <img style="width:50px;height:50px" class="img-responsive" src="http://localhost:8000/imagenes/autores/{{$autor->imagen}}">
                                    </td>
                                    <td class="text-center">{{$autor->nombre}}</td>
                                    <td class="text-center">{{$autor->created_at->format('d/m/Y')}}</td>
                                    <td class="text-center">
                                        <a type="button" href="/admin/autores/{{$autor->id}}" title="Mostrar" class="btn btn-social-icon btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                        <a type="button" href="/admin/autores/{{$autor->id}}/edit" title="Editar" class="btn btn-social-icon btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="text-center">Imágen</th>
                                    <th class="text-center">Nombre</th>
                                    <th class="text-center">Fecha alta</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                    <div class="box-footer">
                        <a title="Redactar un autor" type="button" href="/admin/autores/create" class="btn btn-primary pull-right">
                            <i class="fa fa-plus-circle"></i> &nbsp;Registrar un autor
                        </a>                          
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>

@endsection
@section('script') 
<script src="{{ asset('js/Autores.js') }}"></script>
@endsection