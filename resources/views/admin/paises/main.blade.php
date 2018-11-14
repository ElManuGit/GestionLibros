@extends('admin.partes.index') @section('title') Paises @endsection 

@section('content')

<div class="content-wrapper" style="min-height: 916px;">
    <section class="content-header">
        <h1>
            Paises
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="fa fa-map-marker"></i>Lugares</a>
            </li>
            <li class="active">Paises</li>
        </ol>
    </section>


    <!-- Inicio Tabla de Paises -->
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
                                    <th class="text-center">Provincias asociadas</th>
                                    <th class="text-center">Ultima actualización</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($paises as $pais)
                                <tr>                                    
                                    <td class="text-center">{{$pais->nombre}}</td>
                                    <td class="text-center">{{$pais->provincias->count()}}</td>
                                    <td class="text-center">{{$pais->updated_at->diffForHumans()}}</td>
                                    <td class="text-center" width="100">
                                        <a onclick="completar_campos({{$pais}})" title="Editar este registro" class="btn btn-social-icon btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                                    </td>
                                </tr> 
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>                                  
                                    <th class="text-center">Nombre</th>
                                    <th class="text-center">Provincias asociadas</th>
                                    <th class="text-center">Ultima actualización</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div> 
                    <div class="box-footer">
                        <a title="Registrar un país" type="button" id="boton-modal-crear"  class="btn btn-primary pull-right" data-toggle="modal" data-target="#modal-crear">
                            <i class="fa fa-plus-circle"></i> &nbsp;Registrar país
                        </a>
                    </div>
                </div>
            </div>                                               
        </div>
    </section>
</div>


@include('admin.paises.formularios.create')
@include('admin.paises.formularios.update')

@endsection 

@section('script')
<script src="{{ asset('js/Paises.js') }}"></script>

@endsection