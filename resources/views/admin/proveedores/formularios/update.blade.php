@extends('admin.partes.index') @section('title') Proveedor @endsection 

@section('content')

<div class="content-wrapper" style="min-height: 916px;">
    <section class="content-header">
        <h1>
            Registrar Proveedor
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="fa fa-users"></i>Administración</a>
            </li>
            <li class="active">Proveedores</li>
        </ol>
    </section>

    <!-- Inicio formulario de Proveedor -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <br>
                <div class="box box-primary">
                    <div class="box-body ">                            
                        @include('admin.partes.msj_acciones')

                        <!-- Form de creación de Proveedor -->
                        <form action="/admin/proveedores/{{$proveedor->id}}" method="POST" enctype="multipart/form-data">
                            <input name="_method" type="hidden" value="PUT">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="row"> 

                                <!-- Campo para titulo -->
                                <div class="col-md-4"> 
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input value="{{$proveedor->nombre}}" type="text" name="nombre" class="form-control" placeholder="Campo obligatorio" required>
                                    </div>
                                </div>

                                <!-- Campo para correo -->
                                <div class="col-md-4"> 
                                    <div class="form-group">
                                        <label>Correo</label>
                                        <input value="{{$proveedor->correo}}" type="text" name="correo" class="form-control" placeholder="Proveedor@ejemplo.com">
                                    </div>
                                </div>

                                <!-- Campo para telefono -->
                                <div class="col-md-4"> 
                                    <div class="form-group">
                                        <label>Teléfono</label>
                                        <input value="{{$proveedor->telefono}}" type="text" name="telefono" class="form-control" placeholder="Campo obligatorio" required>
                                    </div>
                                </div>

                                <!-- Campo para telefono fax-->
                                <div class="col-md-4"> 
                                    <div class="form-group">
                                        <label>Teléfono fax</label>
                                        <input value="{{$proveedor->telefono_fax}}" type="text" name="telefono_fax" class="form-control">
                                    </div>
                                </div>

                                <button id="boton_submit_update" type="submit" class="btn btn-primary hide"></button>
                            </div> 
                        </form>
                        <br>
                        <!-- Footer con boton de registro -->

                        <div class="box-footer">
                            <div class="row pull-right">
                                <div class="col-md-12">
                                    <a href="http://localhost:8000/admin/proveedores" title="Volver a la pantalla anterior" class="btn btn-default"><i class="fa fa-trash"></i>  Descartar</a>
                                    <button type="button" class="btn btn-primary" onclick="$('#boton_submit_update').click()">
                                        <i class="fa fa-plus-circle"></i> &nbsp;Guardar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                                               
            </div>
    </section>
</div>


@endsection 

@section('script')
<script src="{{ asset('js/Proveedores.js') }}"></script>
@endsection